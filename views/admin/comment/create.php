<form action="<?= BASE_URL_ADMIN . '&action=store-comment'?>" method="post">
       <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success fade show" id="alert-success-comment-create">
                <?= $_SESSION['success'] ?>
            </div>
        <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
    <div>
        <label for="user_id">NGƯỜI BÌNH LUẬN: </label>
        <select name="user_id" id="user_id" class="form-control">
            <option value="" disabled selected>----CHỌN NGƯỜI BÌNH LUẬN----</option>
            <?php foreach ($users as $user): ?>
                <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label fw-semibold">TÊN SẢN PHẨM: </label>
        <select class="form-control" name="product_id">
            <option value="" disabled selected>----CHỌN TÊN SẢN PHẨM----</option>
            <?php foreach ($products as $product): ?>
                <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label class="form-label fw-semibold" for="content">NỘI DUNG: </label>
        <textarea name="content" id="content" class="form-control" rows="3"></textarea>
    </div>
    <div>
        <label for="status">TRẠNG THÁI: </label>
        <select name="status" id="status" class="form-control">
            <option value="1">Hiển Thị</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    <div class="text-center mt-4 mb-4">
        <button type="submit" class="btn btn-primary px-5 py-3 fw-bold ms-2">TẠO MỚI</button>
    </div>
</form>
<div class="d-flex justify-content-between">
    <a href="<?=  BASE_URL_ADMIN . '&action=list-comment' ?>" class="btn btn-outline-primary px-5 py-3 fw-bold ms-2">Quay lại Danh Sách Bình Luận</a>
    <a href="<?=  BASE_URL . 'templates/giao-dien-moi/trang-chu.html' ?>" class="btn btn-outline-secondary px-5 py-3 fw-bold ms-2">Quay về Trang Chủ</a>
</div>
<script src="<?= BASE_URL . 'templates/js/alert-comment.js'?>"></script>
