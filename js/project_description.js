const desc_figure = document.getElementsByClassName('project-figure')
const body = $.getElementByTag()
console.log(desc_figure.length)


// var xhr = new XMLHttpRequest();
// xhr.open('GEt', 'description.php',)
// if(xhr.status == 200 && xhr.readyState == 4 ){
    
// }
$('.block_desc').click(function(){
    $.ajax({
        type: "GET",
        url: "./pages/description.php",
        data: {item_id: $(this).attr("item_id")},
        datatype: "json",
        success: function(response) {
            $('#description').html(response);
            $('#description').css({opacity: 1})
        }
    })
    
})