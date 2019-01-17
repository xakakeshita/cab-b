$(function() {
    $(".js_tab li").click(function() {
        var num = $(".js_tab li").index(this);
        $(".js_tab_content").removeClass('js_tab_current_content');
        $(".js_tab_content").eq(num).addClass('js_tab_current_content');
        $(".js_tab li").removeClass('js_tab_current_content');

        $(".js_tab_color").removeClass('js_tab_current_color');
        $(".js_tab_color").eq(num).addClass('js_tab_current_color');
        $(".js_tab li").removeClass('js_tab_current_color');

        $(this).addClass('js_tab_current_color');
        $(this).addClass('js_tab_current_content')
    });
});