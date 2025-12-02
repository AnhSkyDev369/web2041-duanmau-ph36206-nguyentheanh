<form action="<?= BASE_URL_ADMIN . '&action=store-category' ?>" method="post">
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success fade show" id="alert-success-category-create">
            <?= $_SESSION['success'] ?>
        </div>
    <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label fw-semibold">TÊN DANH MỤC: </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục...">
    </div>
    <div class="mb-3 mt-3">
        <label for="description" class="form-label fw-semibold">MÔ TẢ: </label>
        <textarea class="form-control" id="description" name="description" placeholder="Mô tả danh mục..."></textarea>
    </div>
    <div class="mb-3">

    <div class="text-center mt-4 mb-4">
        <button type="submit" class="btn btn-primary px-5 py-3 fw-bold ms-2">TẠO MỚI</button>
    </div>
</form>
<div class="d-flex justify-content-between">
    <a href="<?=  BASE_URL_ADMIN . '&action=list-category' ?>" class="btn btn-outline-primary px-5 py-3 fw-bold ms-2">Quay lại Danh Sách Danh Mục</a>
    <a href="<?=  BASE_URL . 'templates/giao-dien-moi/trang-chu.html' ?>" class="btn btn-outline-secondary px-5 py-3 fw-bold ms-2">Quay về Trang Chủ</a>
</div>
<script src="<?= BASE_URL . 'templates/js/alert-category.js'?>"></script>
