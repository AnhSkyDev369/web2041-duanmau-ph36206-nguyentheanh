<?php
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu
class User extends BaseModel
{
    // Viết truy vấn danh sách người dùng
    public function getAll()
    {
        $sql  = 'SELECT * FROM `users` ORDER BY `id` DESC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Viết truy vấn thêm người dùng
    public function insert($data)
    {
        $sql = 'INSERT INTO users (username, email, password, is_admin)
            VALUES (:username, :email, :password, :is_admin)';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

        return $stmt->fetchAll();
    }

    // Viết truy vấn lấy thông tin người dùng theo id
    public function find($id)
    {
        $sql  = 'SELECT * FROM `users` WHERE `id` = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        
        return $stmt->fetch();
    }

    // Viết truy vấn xoá người dùng
    public function delete($id)
    {
        $sql  = 'DELETE FROM `users` WHERE `id` = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }

}
