var trai_1 = document.querySelector('#trai-1');
var phai_1 = document.querySelector('#phai-1');
phai_1.onclick = function () {
    console.log('Mày nhấn tiếp tục 1')
    var carousel = document.getElementById('carousel-2')
    carousel.scrollBy({
        top: 0,
        left: 250,
        behavior: 'smooth'
    })

}
trai_1.onclick = function () {
    console.log('Mày nhấn trở lại 2')
    var carousel = document.getElementById('carousel-2')
    carousel.scrollBy({
        top: 0,
        left: -250,
        behavior: 'smooth'
    })
}