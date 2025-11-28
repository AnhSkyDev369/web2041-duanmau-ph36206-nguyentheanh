// setTimeout(() => {
//         const alertBox = document.getElementById('alert-success');
//         if (alertBox) {
//             alertBox.style.transition = "opacity 0.5s";
//             alertBox.style.opacity = "0";
//             setTimeout(() => alertBox.remove(), 500);
//         }
// }, 3000); // Ba giây

setTimeout(() => {
    const alertBox = document.getElementById('alert-success-delete');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);

setTimeout(() => {
    const alertBox = document.getElementById('alert-success-create');
    if (alertBox) {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 500);
    }
}, 3000);