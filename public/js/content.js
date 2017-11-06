/*
 *
 *   H+ - 后台主题UI框架
 *   version 4.9
 *
 */


var $parentNode = window.parent.document;

function $childNode(name) {
    return window.frames[name]
}


window.toastr.options = {
    "closeButton": true,
    "debug": false,
    "progressBar": false,
    "positionClass": "toast-top-full-width",
    "onclick": null,
    "showDuration": "200",
    "hideDuration": "200",
    "timeOut": "3000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

// tooltips
$('.tooltip-demo').tooltip({
    selector: "[data-toggle=tooltip]",
    container: "body"
});

// 使用animation.css修改Bootstrap Modal
$('.modal').appendTo("body");

$("[data-toggle=popover]").popover();

//animation.css
function animationHover(element, animation) {
    element = $(element);
    element.hover(
        function () {
            element.addClass('animated ' + animation);
        },
        function () {
            //动画完成之前移除class
            window.setTimeout(function () {
                element.removeClass('animated ' + animation);
            }, 2000);
        });
}

$(function () {
    $('[data-toggle="created_at"],.stop-category,.start-category,a').tooltip()
});

$('.category-modal button').click(function () {
    var category = $('.modal input[name="category"]');
    $.ajax({
        url: '/admins/categories',
        type: 'post',
        dataType: 'json',
        data: {'_token': $('meta[name="csrf-token"]').attr('content'), 'category': category.val()},
        success: function (response) {
            toastr.success(response.message);
            category.val('');
            $('.category-modal').modal('hide');
            createNewCategory(response.data);
        },
        error: function (response) {
            var errors = response.responseJSON.errors;
            var message = '<span class="help-block text-danger"><strong>' + errors.category + '</strong></span>'
            $('.category-modal .form-group').append(message);
        }
    });
});

function createNewCategory(data) {
    var category = '<tr><td>'+data.id+'</td><td><span class="line">'+data.category+'</span></td><td>0</td><td><a href="#" name="status" class="text-navy" data-placement="top" data-original-title="点击修改分类状态">启用</a></td><td>'+data.created_at+'</td><td>'+data.admin_name+'</td></tr>';
    $('#category-table').append(category);
}

function articleSubmit() {
    $('form .form-group').find('.help-block').remove();
    var element = {}, categories = [],method;
    method = $(this).attr('id') === 'article_submit' ? 'POST' : 'PUT';
    element.title = $('form #title');
    $('form input[name="categories"]:checked').each(function (index, element) {
        categories.push($(element).val());
    });
    element.description = $('form textarea[name="description"]');
    element.content = $('form textarea[name="content"]');
    var data = {
        'title': element.title.val(),
        'categories': categories,
        'description': element.description.val(),
        'content': element.content.val(),
        '_token': $('meta[name="csrf-token"]').attr('content'),
        '_method':method
    };
    $.ajax({
        url: $('.articleForm').attr('action'),
        type: 'post',
        dataType: 'json',
        data: data,
        success: function (response) {
            if (method === 'PUT') location.href = response.message;
            var message = '文章添加成功<a class="text-navy" href="' + response.message + '">点击查看</a>';
            toastr.success(message);
            element.title.val('');
            element.description.val('');
            element.content.val('');
            $('form input[name="categories"]:checked').attr('checked', false);
        },
        error: function (response) {
            var result = response.responseJSON;
            toastr.error(result.message);
            console.log(response);
            $.each(result.errors, function (index, value) {
                var error = '<span class="help-block m-b-none text-danger"><i class="fa fa-info-circle"></i>' + value + '</span>';
                if (index === 'categories') {
                    $('form input[name="categories"]:checkbox').parent().parent().append(error);
                }
                $.each(element, function (subscript, team) {
                    if (index === subscript) {
                        team.parent().append(error);
                    }
                });
            });
        }
    });
}

$('#article_submit,#article_update').bind('click', articleSubmit);


$('a[name="is_show"],a[name="recommend"],a[name="status"]').bind('click',function (e) {
    var value,current,action,status,title,text,is_category;
    current = $(this);
    e.preventDefault();
    status = current.attr('class') === 'text-navy';
    action = current.attr('name');
    switch (action){
        case 'is_show':value = status ? '隐藏' : '显示';break;
        case 'recommend':value = status ? '不推荐' : '推荐';break;
        case 'status':value = status ? '停用' : '启用';
    }
    is_category = action === 'status';
    title = is_category ? '确定'+value+'该分类吗' : '修改文章状态';
    text = is_category ? value+'该分类后所有该分类下的文章都将'+value : "您确定要将这条文章的状态修改为 '"+value+"' 吗？";
    swal({
        title: title,
        text: text,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: status ? "#DD6B55" : "#2bdd42",
        confirmButtonText: value,
        closeOnConfirm: true
    },function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url:current.attr('href'),
                type:'post',
                dataType:'json',
                data:{'_token': $('meta[name="csrf-token"]').attr('content'), '_method': 'DELETE','action':action},
                success:function (response) {
                    var result = response.message;
                    var className = result[action] ? 'text-navy' : 'text-danger';
                    var message = '"'+result.title+'"'+' 状态已设置为'+value;
                    if (result[action]) {
                        toastr.success(message);
                    } else {
                        toastr.warning(message);
                    }
                    current.attr('class',className);
                    current.html(value);
                },
                error:function (response) {
                    console.log(response);
                }
            });
        }
    });
});

