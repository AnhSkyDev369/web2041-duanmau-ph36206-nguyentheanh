<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class Product extends BaseModel
{
    // Viết truy vấn danh sách sản phẩm 
    public function getAll()
    {
        $sql = 'SELECT p.*, c.name AS category_name
        FROM `products` AS p
        JOIN `categories` AS c
        ON p.category_id = c.id
        ORDER BY p.id ASC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Viết câu truy vấn tạo sản phẩm mới
    public function insert($data) {
        $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `image`)  
                VALUES (NULL, '".$data['category_id']."', '".$data['name']."', '".$data['description']."', '".$data['price']."', '".$data['quantity']."', '".$data['image']."')";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Viết câu truy vấn tìm kiếm sản phẩm theo id
    public function find($id) {
        $sql = "SELECT * FROM `products` WHERE `id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetch(); // Sử dụng hàm fetch() để lấy ra 1 dòng dữ liệu (trả về 1 mảng associative)
    }

    //  Viết câu truy vấn xoá sản phẩm theo id
    public function delete($id) {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}