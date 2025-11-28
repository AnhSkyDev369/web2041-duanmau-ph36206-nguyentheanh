 try {
            $required = ['name', 'category_id', 'description', 'price', 'quantity'];
            foreach ($required as $field) {
                if (!isset($_POST[$field]) || $_POST[$field] === '') {
                    throw new Exception('Thiếu trường bắt buộc: ' . $field);
                }
            }

            if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception('Upload ảnh không hợp lệ');
            }

            $imagePath = upload_file('products', $_FILES['image']);

            $data = [
                'category_id' => (int)$_POST['category_id'],
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'price' => (int)$_POST['price'],
                'quantity' => (int)$_POST['quantity'],
                'image' => $imagePath,
            ];

            header('Location: ' . BASE_URL_ADMIN . '&action=list-product');
            exit;
        } catch (Exception $e) {
            throw new Exception('Thao tác tạo mới lỗi: ' . $e->getMessage());
    }