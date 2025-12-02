<?php
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu
class Category extends BaseModel
{
    // Viết truy vấn danh sách danh mục
    public function getAll()
    {
        $sql  = 'SELECT * FROM `categories` ORDER BY `id` DESC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Viết truy vấn tạo mới danh mục
    public function insert($data)
    {
        $sql = 'INSERT INTO categories (name, description, category_id)
            VALUES (:name, :description, :category_id)';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

        return $stmt->fetchAll();
    }

    // Viết câu truy vấn tìm kiếm danh mục theo id
    public function find($id)
    {
        $sql  = "SELECT * FROM `categories` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(); // Sử dụng hàm fetch() để lấy ra 1 dòng dữ liệu (trả về 1 mảng associative)
    }

    public function delete($id)
    {
        $sql  = "DELETE FROM `categories` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

}
