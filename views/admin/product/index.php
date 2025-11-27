<!-- Table -->
<table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
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
            <?php foreach($products as $pro) :?>
            <tr>
                <td><?= $pro['id']?></td>
                <td><img src="<?=BASE_ASSETS_UPLOADS . $pro['image'] ?>" alt="" width="100px"></td>
                <td><?= $pro['name']?></td>
                <td><?= $pro['category_name']?></td>
                <td><?= $pro['description']?></td>
                <td><?= $pro['price']?></td>
                <td><?= $pro['quantity']?></td>
                <td class="text-center">
                    <div class="d-flex gap-1 justify-content-center bg-white p-2 rounded">
                        <button type="button" class="btn btn-outline-primary">Xem</button>
                        <button type="button" class="btn btn-outline-success">Sửa</button>
                        <button type="button" class="btn btn-outline-danger">Xoá</button>
                    </div>
                </td>                  
            </tr>
            <?php endforeach;?>
        </tbody>
</table>
<!-- Table End -->
