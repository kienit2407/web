var prev_btn = document.querySelector('.prev');
var next_btn = document.querySelector('.next');

next_btn.onclick = function () {
    console.log('Mày nhấn tiếp tục 1')
    var carousel = document.getElementById('carousel')
    carousel.scrollBy({
        top: 0,
        left: 250,
        behavior: 'smooth'
    })
}
prev_btn.onclick = function () {
    console.log('Mày nhấn trở lại 2')
    var carousel = document.getElementById('carousel')
    carousel.scrollBy({
        top: 0,
        left: -250,
        behavior: 'smooth'
    })
}