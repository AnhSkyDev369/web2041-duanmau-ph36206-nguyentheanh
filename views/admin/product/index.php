<a href="<?= BASE_URL_ADMIN . '&action=create-product'?>" type="button" class="btn btn-primary">Thêm Sản Phẩm</a>
<!-- Table -->
<div class="container mt-5 mb-5">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Ảnh Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Danh Mục Sản Phẩm</th>
                <th>Mô Tả Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>Số Lượng Sản Phẩm</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <!-- Hiển thị thông báo xoá sản phẩm thành công với flash message success -->
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success fade show " id="alert-success-delete">
                    <?= $_SESSION['success'] ?? '' ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <?php foreach ($products as $pro): ?>
            <tr class="text-center">
                <td><?php echo $pro['id']?></td>
                <td>
                    <img src="<?php echo BASE_ASSETS_UPLOADS . $pro['image']?>" alt="" width="100px">
                </td>
                <td><?= $pro['name']?></td>
                <td><?= $pro['category_name']?></td>
                <td><?= $pro['description']?></td>
                <td><?= $pro['price']?></td>
                <td><?= $pro['quantity']?></td>
                <td class="text-center">
                    <div class="d-flex gap-1 justify-content-center bg-white p-2 rounded">
                       <a href="<?= BASE_URL_ADMIN . '&action=detail-product&id=' . $pro['id']?>" type="button" class="btn btn-outline-primary">Xem</a>
                       <a href="<?= BASE_URL_ADMIN . '&action=edit-product&id=' . $pro['id']?>" type="button" class="btn btn-outline-success">Sửa</a>
                       <a href="<?= BASE_URL_ADMIN . '&action=delete-product&id=' . $pro['id']?>" type="button" class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này không ?')" >Xoá</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</div>
<script src="<?= BASE_URL . 'templates/js/alert.js'?>"></script>
<!-- Table End -->

