<div class="container mt-5 mb-5">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Tên Người Dùng</th>
                <th>Email</th>
                <th>Mật Khẩu</th>
                <th>Quyền Quản Trị Viên</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr class="text-center">
                <td><?= $user['id']?></td>
                <td><?= $user['username']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['password']?></td>
                <td><?= $user['is_admin'] == 1 ? 'Quản Trị Viên' : 'Người Dùng' ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
