// Xoá người dùng 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-user-delete');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);

// Thêm người dùng 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-user-create');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);
