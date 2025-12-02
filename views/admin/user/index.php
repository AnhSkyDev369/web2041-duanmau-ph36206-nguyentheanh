<a href="<?= BASE_URL_ADMIN . '&action=create-user'?>" type="button" class="btn btn-primary">Thêm Người Dùng Mới</a>
<div class="container mt-5 mb-5">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Tên Người Dùng</th>
                <th>Email</th>
                <th>Mật Khẩu</th>
                <th>Quyền Quản Trị Viên</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>

             <!-- Hiển thị thông báo xoá người dùng thành công với flash message success -->
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success fade show " id="alert-success-user-delete">
                    <?= $_SESSION['success'] ?? '' ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <?php foreach ($users as $user): ?>
            <tr class="text-center">
                <td><?= $user['id']?></td>
                <td><?= $user['username']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['password']?></td>
                <td><?= $user['is_admin'] == 1 ? 'Quản Trị Viên' : 'Người Dùng' ?></td>
            <td class="text-center">
                    <div class="d-flex gap-1 justify-content-center bg-white p-2 rounded">
                       <a href="<?= BASE_URL_ADMIN . '&action=detail-user&id=' . $user['id']?>" type="button" class="btn btn-outline-primary">Xem</a>
                       <a href="<?= BASE_URL_ADMIN . '&action=edit-user&id=' . $user['id']?>" type="button" class="btn btn-outline-success">Sửa</a>
                       <a href="<?= BASE_URL_ADMIN . '&action=delete-user&id=' . $user['id']?>" type="button" class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này không ?')" >Xoá</a>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<script src="<?= BASE_URL . 'templates/js/alert-user.js'?>"></script>    