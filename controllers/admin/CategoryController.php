<?php
// có class chứa các function thực thi xử lý logic
class CategoryController extends BaseModel
{
    public $modelCategory;
    public function __construct()
    {
        $this->modelCategory = new Category();
    }

    public function index()
    {
        // $title = 'Đây là Trang Quản Trị Admin';
        $view  = 'category/index';
        $title = 'Danh sách Danh Mục';

        //  Lấy Danh Sách từ CSDL
        $categories = $this->modelCategory->getAll();
        // var_dump($categories);
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function create()
    {
        $view  = 'category/create';
        $title = 'Thêm Danh Mục Mới';
        //  Đổ dữ liệu danh sách Category lên view tạo mới
        $categories = $this->modelCategory->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    // Hàm lưu dữ liệu vào CSDL từ form
    public function store()
    {
        try {
            $data = $_POST;
            // var_dump($data);

            $data = [
                'name' => trim($_POST['name'] ?? ''),
                'description' => trim($_POST['description'] ?? ''),
                'category_id' => isset($_POST['category_id']) && $_POST['category_id'] !== '' ? (int)$_POST['category_id'] : null,
            ];

            //  Gọi đến model lưu $data vào CSDL
            $this->modelCategory->insert($data);

        } catch (Exception $e) {
            throw new Exception("Thao tác tạo mới lỗi");
        }

        //  Dùng session flash message để hiển thị thông báo tạo mới thành công
        $_SESSION['success'] = 'Tạo mới danh mục thành công';

        //  Tạo mới thành công thì quay lại trang có form tạo mới
        header('Location: ' . BASE_URL_ADMIN . '&action=list-category');
        exit();
    }

     //  Hàm xoá sản phẩm theo id
    public function delete() {
        try {
            if (!isset($_GET['id'])) {
                throw new Exception("Thiếu tham số id");
            }
            $id = $_GET['id'];
            //  Kiểm tả xem id có tồn tại trên hệ thống không
            $cat = $this->modelCategory->find($id);
            if (empty($cat)) {
                throw new Exception("Category không tồn tại id = $id");
            } else {
                // Nếu tồn tại id, xoá dữ liệu trong CSDL
                $this->modelCategory->delete($id);
            }
        } catch (Exception $er) {
            throw new Exception("Thao tác xoá lỗi");
        }
        //  Dùng session flash message để hiển thị thông báo xoá thành công
        $_SESSION['success'] = 'Xoá danh mục thành công';

        //  Xoá thành công thì quay lại trang danh sách
        header('Location: ' . BASE_URL_ADMIN . '&action=list-category');    
        exit();
    }
}
