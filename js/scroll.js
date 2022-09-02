$(function () {
    let header = $('#header');
    let offset = header.offset();
    let headerHeight = header.height();
    let sec_block_top_pos = $('#second_screen').offset();
    console.log(headerHeight)



    $(window).scroll(function () {
        if ($(this).scrollTop() <= offset.top) {
            header.attr('position', 'relative');
            $('#second_screen').css({paddingTop: '0px'})
        } else {
            header.attr('position', 'fixed');
            $('#second_screen').css({paddingTop: Number(headerHeight - 3) + 'px'});
        }
    });
});
