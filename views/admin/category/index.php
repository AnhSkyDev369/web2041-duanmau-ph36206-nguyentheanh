<a href="<?= BASE_URL_ADMIN . '&action=create-category' ?>" class="btn btn-primary">Thêm Danh Mục Mới</a>
<div class="container mt-5 mb-5">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Mô Tả Danh Mục</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success fade show" id="alert-success-category-delete">
                    <?= $_SESSION['success'] ?? '' ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            
            <?php foreach ($categories as $cat): ?>
            <tr class="text-center">
                <td><?= $cat['id']?></td>
                <td><?= $cat['name']?></td>
                <td><?= $cat['description']?></td>
                <td class="text-center">
                    <div class="d-flex gap-1 justify-content-center bg-white p-2 rounded">
                        <a href="<?=  BASE_URL_ADMIN . '&action=view-category&id=' . $cat['id'] ?>" class="btn btn-outline-primary">Xem</a>
                        <a href="<?=  BASE_URL_ADMIN . '&action=edit-category&id=' . $cat['id'] ?>" class="btn btn-outline-success">Sửa</a>
                        <a href="<?=  BASE_URL_ADMIN . '&action=delete-category&id=' . $cat['id'] ?>" class="btn btn-outline-danger" type="button" class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này không ?')">Xoá</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>      
 <script src="<?= BASE_URL . 'templates/js/alert-category.js'?>"></script>
 
