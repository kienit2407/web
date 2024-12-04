var trai = document.querySelector('#trai');
var phai = document.querySelector('#phai');
phai.onclick = function () {
    console.log('Mày nhấn tiếp tục 1')
    var carousel = document.getElementById('carousel-1')
    carousel.scrollBy({
        top: 0,
        left: 250,
        behavior: 'smooth'
    })
}
trai.onclick = function () {
    console.log('Mày nhấn trở lại 2')
    var carousel = document.getElementById('carousel-1')
    carousel.scrollBy({
        top: 0,
        left: -250,
        behavior: 'smooth'
    })
}