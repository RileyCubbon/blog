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

toastr.options = {
    "closeButton": true,
    "debug": false,
    "progressBar": false,
    "positionClass": "toast-top-full-width",
    "onclick": null,
    "showDuration": "200",
    "hideDuration": "200",
    "timeOut": "7000",
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
    $('[data-toggle="created_at"],.stop-category,.start-category').tooltip()
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
    var category = '<tr><td>' + data.id + '</td><td> <span class="line">' + data.category + '</span></td><td>0</td><td class="text-navy">启用中</td><td>' + data.created_at + '</td><td>' + data.admin_name + '</td><td><a href="#" title="点击启用分类"><i class="fa fa-check text-navy"></i></a><a href="#" title="点击停用分类"><i class="fa fa-times text-danger"></i></a></td></tr>';
    $('#category-table').append(category);
}


$('.stop-category').bind('click',stopCategory);

$('.start-category').bind('click', startCategory);

function startCategory(e) {
    var current = $(this);
    e.preventDefault();
    swal({
        title: "您确定要启用这条分类吗",
        text: "启用后所有该分类的文章都将显示",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#2bdd42",
        confirmButtonText: "启用",
        closeOnConfirm: true
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url: current.attr('href'),
                type: 'post',
                dataType: 'json',
                data: {'_token': $('meta[name="csrf-token"]').attr('content'), '_method': 'PUT'},
                success: function (response) {
                    toastr.success(response.message);
                    current.attr('data-original-title', '点击停用分类');
                    current.attr('class', 'stop-category');
                    current.unbind('click').bind('click',stopCategory);
                    current.find('i').attr('class', 'fa fa-times text-danger');
                    var brother = current.parent().prevAll('#category-status');
                    brother.attr('class', 'text-navy');
                    brother.text('已启用');
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }
    });
}

function stopCategory(e) {
    var current = $(this);
    e.preventDefault();
    swal({
        title: "您确定要停用这条分类吗",
        text: "停用后所有该分类的文章都将隐藏",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "停用",
        closeOnConfirm: true
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url: current.attr('href'),
                type: 'post',
                dataType: 'json',
                data: {'_token': $('meta[name="csrf-token"]').attr('content'), '_method': 'DELETE'},
                success: function (response) {
                    toastr.warning(response.message);
                    current.attr('data-original-title', '点击启用分类');
                    current.attr('class', 'start-category');
                    current.unbind('click').bind('click',startCategory);
                    current.find('i').attr('class', 'fa fa-check text-navy');
                    var brother = current.parent().prevAll('#category-status');
                    brother.attr('class', 'text-danger');
                    brother.text('已停用');
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }
    });
}