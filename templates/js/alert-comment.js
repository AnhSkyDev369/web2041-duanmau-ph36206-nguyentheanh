
// Xoá bình luận 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-comment-delete');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);


// Thêm bình luận 
setTimeout(() => {
    const alertBox = document.getElementById('alert-success-comment-create');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);