function abc() {
    // Bổ sung thêm biến số lượng lên url
    const soluong = document.querySelector(".soluong");
    const soluong_iput = document.querySelector("#soluong");
    soluong_iput.value = soluong.value; // Đã thêm số lượng vào form

    var a = document.getElementById('myform'); //Đây là cái form
    console.log(soluong.value);
    a.submit();
}

function selectCard(card) { // Lựa chọn phiên bản GB
    const value_div = card.querySelector('#value-phienban'); //Lấy ra id value từ trong thẻ div cha
    console.log(value_div.innerText);
    const input = document.querySelector('#phienban');
    input.value = value_div.innerText; // Đưa value vào trong input
    const cards = document.querySelectorAll('.checkbox-card'); // Lấy tất cả các class 
    cards.forEach(c => c.classList.remove('selected')); // Xóa tất cả đi
    card.classList.add('selected'); // thêm class viền xanh vào
}

function selectColor(element) { // Lựa chọn màu sắc
    const value_div = element.querySelector('.xoa'); // Lấy ra div con có class xóa trong div cha vừa ấn
    console.log(value_div.innerText);
    const input = document.querySelector('#mau');
    input.value = value_div.innerText; // Điền thông tin vào input ẩn ở trên
    const options = document.querySelectorAll('.color-option');
    options.forEach(option => option.classList.remove('selected-1'));
    element.classList.add('selected-1');
}
let chess = false; // Bắt lại sự kiện vuốt cuối trang

window.addEventListener('scroll', () => {
    // Kiểm tra nếu người dùng đã cuộn đến cuối trang
    var elment_mua = document.querySelector(".product-container"); // Lấy phần tự trong element cần xóa
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        if (chess == false) {
            chess = true;
            console.log('Đã đến cuối trang!'); //Bắt sự kiện cuộn đến cuối trang
            elment_mua.classList.add("xoa")
        }
    } else {
        // Reset lại biến nếu người dùng cuộn ngược lên
        chess = false;
        elment_mua.classList.remove("xoa");
    }
});