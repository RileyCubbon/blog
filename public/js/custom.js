/**
 * Created by zjj on 2017/11/1.
 */

$(document).ready(function () {
    // 主体滑入效果
    $('.wrapper').animate(
        {'marginLeft': '0px', 'opacity': '1'}, 800, 'swing'
    );
});

$(function () {
    $('[data-placement="top"]').tooltip()
});
// 分页按钮效果
$('.paginate>li').hover(function () {
    $(this).css('opacity', '1');
}, function () {
    $(this).css('opacity', '0.3');
});

function checkUser() {
    var check_user;
    $.ajax({
        url:'/check/user',
        async:false,
        type:'get',
        success:function (response) {
            if(!response.message){
                location.href = '/login';
            }
            check_user = response.message;
        }
    });
    return check_user;
}


//显示搜索表单
function showSearchForm() {
    parent.layer.open({
        type: 2,
        closeBtn: true,
        title: false,
        shade: 0.8,
        area: ['770px', '700px'],
        shift: 0,
        content: ['http://riley.dev/search', 'no']
    });
}

//给导航栏绑定事件

$('.nav #search').click(function () {
    showSearchForm();
});

//显示用户信息弹框
$('.user_header').bind('click',function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    parent.layer.open({
        type: 2,
        title: false,
        closeBtn: true,
        shadeClose: true,
        shade: 0.8,
        offset: ['150px', '572px'],
        area: ['770px', '270px'],
        shift: 0,
        content: [url,'no']
    });
});

//显示裁剪头像弹框
$('#upload-header').click(function () {
    layer.open({
        type: 1,
        title: false,
        closeBtn: 0,
        shadeClose: true,
        scrollbar:false,
        area: ['1057px', '636px'],
        content:$('.header-box')
    });
});

//留言板页面显示用户留言输入框
$('.board-input>button').click(function () {
    if (checkUser()) {
        $('.board-input>div').css('display','block');
        $(this).css('display','none');
    }
});

$('a[name="recommend"],a[name="collector"]').bind('click',function (e) {
    e.preventDefault();
    var current = $(this);
    if (checkUser()) {
        $.ajax({
            url:current.attr('href'),
            type:'post',
            dataType:'json',
            data:{
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'active':current.attr('name'),
                '_method':'PUT'
            },
            success:function (response) {
                var num = parseInt(current.next().text());
                current.next().text(response.message ? num+1 : num-1)
            }
        });
    }
});

$('a[name="board"]').bind('click',inputMessage);

function inputMessage(e) {
    e.preventDefault();
    if (checkUser()) {
        var current = $(this);
        var message = current.prev();
        $.ajax({
            url:current.attr('href'),
            type:'post',
            dataType:'json',
            data:{
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'message':message.val(),
                'to_user_id':0,
                'parent_id':0
            },
            success:function (response) {
                var result = response.message;
                var data = '<div class="vertical-timeline-block"><div class="vertical-timeline-icon navy-bg"><img src="'+result.avatar+'" class="img-circle"  width="60" height="60"></div><div class="vertical-timeline-content"><div class="social-feed-box"><div class="social-body"><p>'+result.message+'</p><div class="btn-group" style="margin-right: 20px;"><button user="'+result.id+'" parent="'+result.parent+'" name="'+result.name+'" class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button></div><small>'+result.time+'</small></div></div></div></div>';
                $('.board-input>div>textarea').val('');
                $('.board-input>div').hide();
                $('#vertical-timeline').prepend(data);
                $('.board-input>button').show();
            },
            error:function (response) {
                console.log(response);
            }
        });
    }
}

$('.comment').bind('click',showCommentInput);

function showCommentInput() {
    
}
