 <!-- Table -->
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
                <?php foreach ($comments as $comment): ?>
                <tr class="text-center">
                    <td><?= $comment['id']?></td>
                    <td><?= $comment['username']?></td>
                    <td><?= $comment['product_name']?></td>
                    <td><?= $comment['content']?></td>
                    <td><?= $comment['status'] == 1 ? 'Hiển Thị' : 'Ẩn'?></td>
                    <td class="text-center">
                        <div class="d-flex gap-1 justify-content-center bg-white p-2 rounded">
                            <button type="button" class="btn btn-outline-primary">Xem</button>
                            <button type="button" class="btn btn-outline-success">Sửa</button>
                            <button type="button" class="btn btn-outline-danger">Xoá</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
<!-- Table End -->