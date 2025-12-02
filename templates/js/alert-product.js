// Xoá sản phẩm 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-product-delete');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);

// Thêm sản phẩm 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-product-create');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);