<form action="<?=  BASE_URL_ADMIN . '&action=store-user' ?>" method="post" enctype="multipart/form-data">
    <!-- Hiển thị thông báo thành công -->
    <?php if(isset($_SESSION['success'])): ?>
    <div class="alert alert-success fade show" id="alert-success-user-create">
        <?= $_SESSION['success']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['success']); endif; ?>

    <div class="mb-3 mt-3">
        <label class="form-label fw-semibold">TÊN NGƯỜI DÙNG: </label>
        <input type="text" name="username" class="form-control" placeholder="Nhập tên người dùng: ">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label fw-semibold">EMAIL NGƯỜI DÙNG: </label>
        <input type="email" name="email" class="form-control" placeholder="Nhập email người dùng: ">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label fw-semibold">MẬT KHẨU NGƯỜI DÙNG: </label>
        <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu người dùng: ">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label fw-semibold">DANH MỤC QUYỀN NGƯỜI DÙNG: </label>
        <select class="form-control" name="is_admin">
            <option value disabled selected>----CHỌN DANH MỤC QUYỀN NGƯỜI DÙNG----</option>
            <option value="1">Admin</option>
            <option value="0">User</option>
        </select>
    </div>

    <div class="text-center mt-4 mb-4">
        <button type="submit" class="btn btn-primary px-5 py-3 fw-bold ms-2">TẠO MỚI</button>
    </div>

</form>
<div class="d-flex justify-content-between">
    <a href="<?=  BASE_URL_ADMIN . '&action=list-user' ?>" class="btn btn-outline-primary px-5 py-3 fw-bold ms-2">Quay lại Danh Sách Người Dùng</a>
    <a href="<?=  BASE_URL . 'templates/giao-dien-moi/trang-chu.html' ?>" class="btn btn-outline-secondary px-5 py-3 fw-bold ms-2">Quay về Trang Chủ</a>
</div>
<script src="<?= BASE_URL . 'templates/js/alert-user.js'?>"></script>
