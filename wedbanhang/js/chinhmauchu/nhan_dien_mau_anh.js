function getAverageLuminance(img) {
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = img.width;
    canvas.height = img.height;
    ctx.drawImage(img, 0, 0, img.width, img.height);

    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    const data = imageData.data;
    let totalBrightness = 0;

    for (let i = 0; i < data.length; i += 4) {
        const r = data[i];
        const g = data[i + 1];
        const b = data[i + 2];
        const brightness = 0.2126 * r + 0.7152 * g + 0.0722 * b;
        totalBrightness += brightness;
    }

    const avgBrightness = totalBrightness / (img.width * img.height);
    return avgBrightness / 255; // Chuẩn hóa về [0, 1]
}

function adjustTextColor(containerId, imageId) {
    const container = document.getElementById(containerId);
    const img = document.getElementById(imageId);

    img.onload = function () {
        const luminance = getAverageLuminance(img);
        container.style.color = luminance > 0.5 ? 'black' : 'white';
    };

    // Kích hoạt sự kiện onload nếu hình ảnh đã được lưu trong bộ nhớ cache
    if (img.complete) {
        img.onload();
    }
}

// Điều chỉnh màu chữ cho nhiều phần tử
document.addEventListener('DOMContentLoaded', () => {
    const imgElements = document.querySelectorAll('img[id^="anh"]');
    imgElements.forEach((img) => {
        const idNumber = img.id.match(/\d+/)[0];
        adjustTextColor(`text${idNumber}`, img.id);
    });
});
