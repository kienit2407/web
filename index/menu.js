document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.menu-item.has-submenu > span');

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            const submenu = parent.querySelector('.submenu');

            if (submenu.style.display === 'block') {
                submenu.style.display = 'none'; // Ẩn submenu
                parent.classList.remove('open');
            } else {
                submenu.style.display = 'block'; // Hiển thị submenu
                parent.classList.add('open');
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const seeMoreButton = document.querySelector('.see-more');
    const moreItems = document.querySelectorAll('.more-items');

    seeMoreButton.addEventListener('click', () => {
        if (moreItems[0].style.display === 'none') {
            moreItems.forEach(item => {
                item.style.display = 'block'; // Hiển thị các giao dịch bổ sung
            });
            seeMoreButton.textContent = 'See Less';  // Thay đổi văn bản nút thành 'See Less'
        } else {
            moreItems.forEach(item => {
                item.style.display = 'none'; // Ẩn các giao dịch bổ sung
            });
            seeMoreButton.textContent = 'See More';  // Thay đổi văn bản nút thành 'See More'
        }
    });
});

