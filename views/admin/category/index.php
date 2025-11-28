<!-- Table -->
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
            <?php foreach ($categories as $cat): ?>
            <tr class="text-center">
                <td><?= $cat['id']?></td>
                <td><?= $cat['name']?></td>
                <td><?= $cat['description']?></td>
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
