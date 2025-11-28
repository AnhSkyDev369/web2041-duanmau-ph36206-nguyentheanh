   <!-- Form Start -->
    <form action="<?=  BASE_URL_ADMIN . '&action=store-product' ?>" method="post" enctype="multipart/form-data">
        <!-- Hiển thị thông báo thành công -->
        <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success fade show" id="alert-success-create">
            <?= $_SESSION['success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['success']); endif; ?>

        <div class="mb-3 mt-3">
            <label class="form-label fw-semibold">TÊN SẢN PHẨM: </label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm: ">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label fw-semibold">CHỌN DANH MỤC SẢN PHẨM: </label>
            <select class="form-control" name="category_id">
                <option value disabled selected>---DANH MỤC---</option>
                <?php foreach($categories as $category): ?>
                <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label fw-semibold">MÔ TẢ SẢN PHẨM:</label>
            <textarea class="form-control" name="description" placeholder="Nhập mô tả sản phẩm: "></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label fw-semibold ">GIÁ SẢN PHẨM: </label>
            <input type="number" name="price" class="form-control" placeholder="VD: 15000000">
        </div> 
        <div class="mb-3 mt-3">
            <label class="form-label fw-semibold ">SỐ LƯỢNG SẢN PHẨM: </label>
            <input type="number" name="quantity" class="form-control" placeholder="VD: 10"> 
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label fw-semibold">ẢNH SẢN PHẨM: </label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="text-center mt-4 mb-4">
            <button type="submit" class="btn btn-primary px-5 py-3 fw-bold ms-2">TẠO MỚI</button>
            <a href="../giao-dien-moi/trang-chu.html" class="btn btn-outline-secondary px-5 py-3 fw-bold ms-2">Quay về Trang Chủ</a>
        </div>
    </form>
    <a href="<?=  BASE_URL_ADMIN . '&action=list-product' ?>">Quay lại Trang Danh Sách</a>
    <!-- Form End -->
<script src="<?= BASE_URL . 'templates/js/alert.js'?>"></script>
