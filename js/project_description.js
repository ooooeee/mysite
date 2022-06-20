const popupLinks = document.querySelectorAll('.project-figure');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock_padding");

let unlock = true;

const timeOut = 800;

if(popupLinks.length > 0){
    for (let index = 0; index < popupLinks.length; index++){
        const popupLink = popupLinks[index];
        popupLink.addEventListener('click', function(e) {
            const popupName = popupLink.getAttribute('href').replace('#', '');
            const curentPopup = document.getElementById(popupName);
            popupOpen(curentPopup);
            e.preventDefault();
        });
    } 
}

const popupCloseIcon = document.querySelectorAll('.close-desc');
if (popupCloseIcon.length > 0) {
    for (let index = 0; index <popupCloseIcon.length; index++) {
        const el = popupCloseIcon[index];
        el.addEventListener('click', function (e){
            popupClose(el.closest('.description'));
            e.preventDefault();
        } )
    }
}

function popupOpen(curentPopup) {
    if(curentPopup && unlock) {
        const popupActive = document.querySelector('.popup.open');
        if (popupActive) {
            popupClose(popupActive, false);
        } else{
            bodyLock();
        }
        curentPopup.classList.add('open');
        curentPopup.addEventListener("click", function (e) {
            if (!e.target.closest('.popup_content')) {
                popupClose(e.target.closest('.popup'));
            }
        });
    }
}

function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
        popupActive.classList.remove('open');
        if(doUnlock) {
            bodyUnlock();
        }
    }
}

function bodyLock() {
    const lockPaddingvalue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
if (lockPadding.length > 0) {
    for (let index = 0; index < lockPadding.length; index ++) {
        const el = lockPadding[index];
        el.style.paddingRight = lockPaddingvalue;
    }
}
    body.style.paddingRight = lockPaddingvalue;
    body.classList.add('lock');

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeOut);
}

function bodyUnlock() {
    setTimeout(function () {
        if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index ++) {
            const el = lockPadding[index];
            el.style.paddingRight = '0px';
        }
    }
        body.style.paddingRight = '0px';
        body.classList.remove('lock');
    }, timeOut);

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, setTimeout);
}

document.addEventListener('keydown', function (e) {
    if (e.which ===27) {
        const popupactive = document.querySelector('.popup.open');
        popupClose(popupActive);
    }
});