// import { gsap } from "gsap";
// import { PixiPlugin } from "gsap/PixiPlugin.js";
// import { MotionPathPlugin } from "gsap/MotionPathPlugin.js";
// gsap.registerPlugin(PixiPlugin, MotionPathPlugin);

const innerdivs = $('.inner-info-div')

const gsap_block = innerdivs.offset()['top'];
// console.log(gsap_block);

$(window).scroll(function () {
    if ($(window).scrollTop() >= gsap_block - 200) {
        gsapAnim(innerdivs)
    }
})

function gsapAnim(array) {
    for (const item of array) {
        gsap.to(item, {
            duration: 2,
            delay: .3,
            repeat: 2,
            ease: "elastic.out(1.5, 0.3)",
            y: -50,
            yoyo: true,
        });
        gsap.to(item, { duration: 5.0, opacity: 1 })
    }
}
// for (const item of innerdiv) {
//     gsap.to(item, {
//         duration: 2,
//         delay: .3,
//         repeat: 2,
//         ease: "elastic.out(1.5, 0.3)",
//         y: -50,
//         yoyo: true,
//     });
//     gsap.to(item, { duraton: 5, opacity: 1 })
// }


// function sap(elem) {
//     elem.forEach(element => {
//         gsap.to(element, {opacity: 1, y: 20})
//     });
// }
// sap(innerdiv)