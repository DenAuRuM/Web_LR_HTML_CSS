const Btn1 = document.querySelector('.btn1')
const Window1 = document.querySelector('.window1');
const Window__close1 = document.querySelector('.window__close1')

const Btn2 = document.querySelector('.btn2')
const Window2 = document.querySelector('.window2');
const Window__close2 = document.querySelector('.window__close2')

const Btn3 = document.querySelector('.btn3')
const Window3 = document.querySelector('.window3');
const Window__close3 = document.querySelector('.window__close3')

const Btn4 = document.querySelector('.btn4')
const Window4 = document.querySelector('.window4');
const Window__close4 = document.querySelector('.window__close4')

const Btn5 = document.querySelector('.btn5')
const Window5 = document.querySelector('.window5');
const Window__close5 = document.querySelector('.window__close5')

const Btn6 = document.querySelector('.btn6')
const Window6 = document.querySelector('.window6');
const Window__close6 = document.querySelector('.window__close6')

const Button1 = document.querySelector("button1")
const Button2 = document.querySelector("button2")
const Feed = document.querySelector("feed")
const Inf = document.querySelector("inf")



Btn1.addEventListener("click", () => {
    Window1.style.display = "block";
})
Window__close1.addEventListener("click", () => {
    Window1.style.display = "none";
})


Btn2.addEventListener("click", () => {
    Window2.style.display = "block";
})
Window__close2.addEventListener("click", () => {
    Window2.style.display = "none";
})

Btn3.addEventListener("click", () => {
    Window3.style.display = "block";
})
Window__close3.addEventListener("click", () => {
    Window3.style.display = "none";
})

Btn4.addEventListener("click", () => {
    Window4.style.display = "block";
})
Window__close4.addEventListener("click", () => {
    Window4.style.display = "none";
})

Btn5.addEventListener("click", () => {
    Window5.style.display = "block";
})
Window__close5.addEventListener("click", () => {
    Window5.style.display = "none";
})

Btn6.addEventListener("click", () => {
    Window6.style.display = "block";
})
Window__close6.addEventListener("click", () => {
    Window6.style.display = "none";
})


window.addEventListener('DOMContentLoaded', function() {
var form = document.querySelector('.form'),
psw = form.querySelectorAll('#password, #password-check');
form.addEventListener('submit', function(e) {
var err = !(psw[0].value && (psw[0].value ==  psw[1].value))
psw[1].setAttribute("title", err ? 'err' : '');
err && e.preventDefault();
}, false);
psw[1].addEventListener('input', function(e) {
var err = !(psw[0].value ==  psw[1].value)
psw[1].setAttribute("title", err ? 'err' : '');
}, false);
});

/*Button1.addEventListener("click", () => {
    Inf.style.display = "block"
})

Button2.addEventListener("click", () => {

    if(Feed.style.display == "none" && Inf.style.display == "none") {
        Feed.style.display = "block"
    }

    else {
        Feed.style.display = "block";
        Inf.style.display = "none"
    }
    
    
})
*/