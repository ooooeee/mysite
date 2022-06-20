// $(function() {
//     let header = $('.header');

$(function () {
    let header = $('.header');
    let headerHeight = header.height();
    let sec_block_top_pos = $('#second_screen').offset()['top'];

    $(window).scroll(function () {
        // console.log($(this).scrollTop(), headerHeight, sec_block_top_pos);
        if ($(this).scrollTop() <= sec_block_top_pos) {

            header.attr('position', 'relative');

            $('#second_screen').css({paddingTop: '0px'})

        } else {
            // header.css({
            //     left: 0,
            //     top: 0,
            //     width: '100%',
            //     position: 'fixed',
            //     backgroundColor:'white',
            // });
            header.attr('position', 'fixed');
            $('#second_screen').css({paddingTop: '70px'});
        }
    });
});


$(window).scroll(function(){
    var wt = $(window).height();
})