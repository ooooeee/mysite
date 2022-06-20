// document.first_screen.appendChild(lines());
// var myscreen = document.getElementById('first_screen');
//   document.body.append();
//   console.log(myscreen)

//   var position = 500;

//   var testblock = document.createElement('div');
//   testblock.className = "box"
//   testblock.style.marginLeft = String(position) + "px";
//   document.first_screen.appendChild(testblock);

var pos = -280;
var step = 200;


// const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
// const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)

// vh = document.getElementById('first_screen').offsetHeight


// var gg = document.getElementById('ilusha');
// console.log(vh, gg.offsetHeight);
// gg.style.marginTop = String(vh / 2 - gg.offsetHeight / 2) + "px";


let lines = [];

for (var i = 0; i < 9; i++) {
	var line_div = document.createElement('div');
	line_div.className = "background_line";
	line_div.style.marginLeft = String(pos) + "px";

	document.getElementById('first_screen').appendChild(line_div);

	lines.push(line_div);

	pos += step;
}

function animate_line(line, direction, index) {
	
	if (direction == 'forward')
		$(line).animate(
			{ 'margin-top': '400px', 'opacity': 0.2 },
			1000 + 50 * (index % 2) - 10 * index,
			function () { animate_line(line, 'backward', index); }
		)
	else
		$(line).animate(
			{ 'margin-top': '490px', 'opacity': 1 },
			1000 + 50 * (index % 2) - 10 * index,
			function () { animate_line(line, 'forward', index); })
}

lines.forEach((value, index, array) => {
	animate_line(value, 'forward', index);
	//animate_line_by_opacity(value, 'forward', index);
})

// let h3 = document.querySelectorAll('figcaption > h3');
// let p = document.querySelectorAll('figcaption > p')
// let figure = document.getElementsByTagName('figcaption');

// $('figcaption').hover(
// 	function(){
// 		$(h3).css({opacity:1});
// 		$(p).css({opacity:1})
// 	}
// )
