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
}
