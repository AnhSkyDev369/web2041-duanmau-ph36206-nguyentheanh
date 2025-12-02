<?php
// có class chứa các function thực thi xử lý logic
class UserController extends BaseModel
{
    public $modelUser;
    public function __construct()
    {
        $this->modelUser = new User();
    }

    public function index()
    {
        $view  = 'user/index';
        $title = 'Danh sách Người Dùng';

        //  Lấy Danh Sách từ CSDL
        $users = $this->modelUser->getAll();
        // var_dump($users);
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    // Hiển thị Form Thêm Người Dùng Mới
    public function create()
    {
        $view  = 'user/create';
        $title = 'Thêm Người Dùng Mới';
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    // Hàm lưu dữ liệu vào CSDL từ form
    public function store()
    {
        //  Hàm lưu vào CSDL
        echo '<pre>';
        // var_dump($_SERVER);
        // var_dump($_POST + $_FILES);

        try {

            $data = $_POST;
            // var_dump($data);

            $data = [
                'username' => trim($_POST['username'] ?? ''),
                'email'    => trim($_POST['email'] ?? ''),
                'password' => trim($_POST['password'] ?? ''),
                'is_admin' => isset($_POST['is_admin']) && $_POST['is_admin'] !== '' ? (int) $_POST['is_admin'] : null,
            ];

            //  Gọi đến model lưu $data vào CSDL
            $this->modelUser->insert($data);

        } catch (Exception $e) {
            throw new Exception("Thao tác tạo mới lỗi");
        }

        //  Dùng session flash message để hiển thị thông báo tạo mới thành công
        $_SESSION['success'] = 'Tạo mới người dùng thành công';

        //  Tạo mới thành công thì quay lại trang có form tạo mới
        header('Location: ' . BASE_URL_ADMIN . '&action=list-user');
        exit();
    }

    // Xóa Người Dùng Theo Id
    public function delete()
    {
        try {
            if (! isset($_GET['id'])) {
                throw new Exception("Thiếu tham số id");
            }

            $id = $_GET['id'];
            //  Kiểm tra id có tồn tại trong CSDL không

            $user = $this->modelUser->find($id);

            if (empty($user)) {
                throw new Exception("Người dùng không tồn tại id: $id");
            } else {
                $this->modelUser->delete($id);
            }
        } catch (Exception $e) {
            throw new Exception("Thao tác xóa lỗi");
        }

        //  Dùng session flash message để hiển thị thông báo xoá thành công
        $_SESSION['success'] = 'Xoá người dùng thành công';

        //  Xoá thành công thì quay lại trang danh sách
        header('Location: ' . BASE_URL_ADMIN . '&action=list-user');
        exit();
    }
}
