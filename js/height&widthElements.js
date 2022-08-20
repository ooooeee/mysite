//#region Важные определения
const text_colors = ['#25236D', '#763694', '#228952', '#A81616']

var div_last_top = [0, 0, 0, 0]

document.onscroll = function() {
    // var top = footer.getBoundingClientRect().top;
    var heightScreen = document.documentElement.clientHeight;
    var body = document.querySelector("body");
    var g = top - heightScreen;
    if (g <=0){
        body.style.backgroundColor = "grey";
    } else if (g >0){
        body.style.backgroundColor = "";
    }
    }



var screen_height  = window.innerHeight;
// $('section').css({height: String(screen_height) + 'px'})
$('#first_screen').css({height: String(screen_height) + 'px'})
$('#second_screen').css({height: String(screen_height) + 'px'})
//#endregion

let services = document.getElementById('services_blocks');

function get_div_index(obj) { return Number($(obj).attr('number'));}


$('.inner-info-div').stop().hover(
    function() {
        var index = get_div_index(this);

        var this_offset = $(this).offset();
        x = this_offset["left"];
        y = this_offset['top'];

        $(this).attr('shadow', true)
        $(this).attr('colorize', true)

        $(this).stop().animate(
            {
                "margin-top": '-35px',
                backgroundColor: 'rgb(100, 100, 100)'
            }, 200, 'swing'
        )
        
        // $(this).css('color', text_colors[index])
    }
)
$('.inner-info-div').stop().mouseleave(
    function() {
        var index = get_div_index(this);
    
        $(this).attr('shadow', true)
        $(this).attr('colorize', false)

        $(this).stop().animate(
            {
                marginTop: '0px',
            }, 200, 'swing', 
            function() { $(this).attr('shadow', false);}
        )
        $(this).css('color', 'black')
    }
)

//* width elements in form =========================*//
// $("input[name='name']").css({with:width_form})
// const width_form = $("form").width();
// const width_popup = $('.popup_content').width();
// const width_input = $("form").find("input").width();
// const label_availability = document.querySelectorAll('label');


// $("#checkbox").css({width: width_popup})
// // $('input').css({width: width_form})
// //     if(label_availability.length > 0) {
// //         $('label').css({width: width_input})
// //     } 
// // $("input[name='name']").css({with:width_form})

$("form :checkbox").css({width: 35 + 'px'})

//*==================================================*//

// var footer = document.getElementById("footer");

// document.onscroll = function() {
// var top = footer.getBoundingClientRect().top;
// var heightScreen = document.documentElement.clientHeight;
// var body = document.querySelector("body");
// var g = top - heightScreen;
// if (g <=0){
// 	body.style.backgroundColor = "grey";
// } else if (g >0){
// 	body.style.backgroundColor = "";
// }
// }