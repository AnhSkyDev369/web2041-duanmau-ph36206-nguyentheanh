<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class Comment extends BaseModel
{
    // Viết truy vấn danh sách bình luận 
    public function getAll()
    {
        $sql = 'SELECT cmt.*, u.username, p.name AS product_name
        FROM comments AS cmt
        JOIN users AS u ON cmt.user_id = u.id
        JOIN products AS p ON cmt.product_id = p.id
        ORDER BY cmt.id DESC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Viết truy vấn lưu bình luận mới vào CSDL
    public function insert($data)
    {
        $sql = 'INSERT INTO comments (user_id, product_id, content, status)
        VALUES (:user_id, :product_id, :content, :status)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

        return $stmt->fetchAll();
    }

    // Viết truy vấn tìm kiếm bình luận theo id
    public function find($id)
    {
        $sql = 'SELECT * FROM `comments` WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }
    
    // Viết truy vấn xoá bình luận theo id
    public function delete($id)
    {
        $sql = 'DELETE FROM `comments` WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }

}
