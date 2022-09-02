
var num = Math.floor(Math.random() * (100))
console.log(num);
const YesNo = `http://numbersapi.com/${num}`

function sendRequest(method, url) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest()
        xhr.open(method, url)

        xhr.onload = () => {
            if (xhr.status >= 400) {
                console.log(xhr.response)
            } else {
                var info = xhr.response;
            reject($('#myapi').text(`variable ${info}`))
            }
        }

        xhr.send()
    })
}

sendRequest('GET', YesNo)




// {
//     "answer": "yes",
//     "forced": false,
//     "image": "https://yesno.wtf/assets/yes/2.gif"
//   }
//   GET

//   $.ajax({
//     type: "GET",
//     url: "https://yesno.wtf/api",
//     data: {item_id: $(this).attr("item_id")},
//     datatype: "json",
//     success: function(response) {
//         $('#description').html(response);
//         $('#description').css({opacity: 1})
//     }
// })