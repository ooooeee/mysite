// $(function() {
//     let header = $('.header');

$(function () {
    let header = $('#header');
    console.log(header);
    let offset = header.offset();
    let headerHeight = header.height();
    let sec_block_top_pos = $('#second_screen').offset();
    console.log(headerHeight)



    $(window).scroll(function () {
        // console.log($(this).scrollTop(), headerHeight, sec_block_top_pos);
        if ($(this).scrollTop() <= offset.top) {

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
            // $('#second_screen').css({paddingTop: String(headerHeight) + 'px'});
            $('#second_screen').css({paddingTop: Number(headerHeight - 3) + 'px'});
            // alert(String(headerHeight) + 'px');
        }
    });
});


$(window).scroll(function(){
    var wt = $(window).height();
})