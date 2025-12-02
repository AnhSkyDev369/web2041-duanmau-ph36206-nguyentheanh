// Xoá danh mục 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-category-delete');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);

// Thêm danh mục 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-category-create');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);
