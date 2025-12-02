<a href="<?= BASE_URL_ADMIN . '&action=create-comment'?>" type="button" class="btn btn-primary">Thêm Bình Luận Mới</a>
<div class="container mt-5 mb-5">
        <table class="table table-striped table-hover align-middle ">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Người Bình Luận</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Nội Dung Bình Luận</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>

             <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success fade show" id="alert-success-comment-delete">
                    <?= $_SESSION['success'] ?? '' ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

                <?php foreach ($comments as $cmt): ?>
                <tr class="text-center">
                    <td><?= $cmt['id']?></td>
                    <td><?= $cmt['username']?></td>
                    <td><?= $cmt['product_name']?></td>
                    <td><?= $cmt['content']?></td>
                    <td><?= $cmt['status'] == 1 ? 'Hiển Thị' : 'Ẩn'?></td>
                    <td class="text-center">
                        <div class="d-flex gap-1 justify-content-center bg-white p-2 rounded">
                            <a href="<?= BASE_URL_ADMIN . '&action=detail-comment&id=' . $cmt['id']?>" type="button" class="btn btn-outline-primary">Xem</a>        
                            <a href="<?= BASE_URL_ADMIN . '&action=edit-comment&id=' . $cmt['id']?>" type="button" class="btn btn-outline-success">Sửa</a>
                            <a href="<?= BASE_URL_ADMIN . '&action=delete-comment&id=' . $cmt['id']?>" type="button" class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá bình luận này không?')">Xoá</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
<script src="<?= BASE_URL . 'templates/js/alert-comment.js'?>"></script>
