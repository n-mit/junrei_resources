//ヘッダーの高さ分だけコンテンツを下げる
$(function() {
    var height=$("#header").height();
    $("body").css("margin-top", height + 50);//10pxだけ余裕をもたせる
});

//ハンバーガーメニュー
$(function() {
    $('#open, #close').on('click', function() {
        $('#contents, .menu-link').toggleClass('show');
    });
});