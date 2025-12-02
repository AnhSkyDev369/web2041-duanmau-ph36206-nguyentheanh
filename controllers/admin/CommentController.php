<?php
// có class chứa các function thực thi xử lý logic

class CommentController extends BaseModel
{
    public $modelComment;
    public $modelProduct;
    public $modelUser;

    public function __construct()
    {
        $this->modelComment = new Comment();
        $this->modelProduct = new Product();
        $this->modelUser    = new User();
    }

    public function index()
    {
        $view  = 'comment/index';
        $title = 'Danh sách Bình Luận';

        //  Lấy Danh Sách từ CSDL
        $comments = $this->modelComment->getAll();
        // var_dump($comments);
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    //  Hàm hiển thị form tạo mới bình luận
    public function create()
    {
        $view     = 'comment/create';
        $title    = 'Tạo mới Bình Luận';
        $products = $this->modelProduct->getAll();
        $users    = $this->modelUser->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    //  Hàm xử lý lưu bình luận mới vào CSDL
    public function store()
    {
        try {
            $data = [
                'user_id'    => $_POST['user_id'],
                'product_id' => $_POST['product_id'],
                'content'    => $_POST['content'],
                'status'     => $_POST['status'],
            ];

            //  Gọi đến model lưu $data vào CSDL
            $this->modelComment->insert($data);

        } catch (Exception $e) {
            throw new Exception("Thao tác tạo mới lỗi");
        }

        //  Dùng session flash message để hiển thị thông báo tạo mới thành công
        $_SESSION['success'] = 'Tạo mới bình luận thành công';

        //  Tạo mới thành công thì quay lại trang có form tạo mới
        header('Location: ' . BASE_URL_ADMIN . '&action=list-comment');
        exit();
    }

    //    Hàm xoá bình luận theo id
    public function delete()
    {
        try {
            if (! isset($_GET['id'])) {
                throw new Exception("Thiếu tham số id");
            }
            $id = $_GET['id'];
            //  Kiểm tả xem id có tồn tại trên hệ thống không
            $cmt = $this->modelComment->find($id);
            if (empty($cmt)) {
                throw new Exception("Comment không tồn tại id = $id");
            } else {
                // Nếu tồn tại id, xoá dữ liệu trong CSDL
                $this->modelComment->delete($id);
            }
        } catch (Exception $er) {
            throw new Exception("Thao tác xoá lỗi");
        }
        //  Dùng session flash message để hiển thị thông báo xoá thành công
        $_SESSION['success'] = 'Xoá bình luận thành công';

        //  Xoá thành công thì quay lại trang danh sách
        header('Location: ' . BASE_URL_ADMIN . '&action=list-comment');
        exit();
    }
}
