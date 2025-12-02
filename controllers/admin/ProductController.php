<?php
// có class chứa các function thực thi xử lý logic 
class ProductController extends BaseModel
{
    public $modelProduct;
    public $modelCategory;
    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();  
    }
  
    public function home()
    {
        $title = 'Đây là Trang Home Admin';
        require_once PATH_VIEW_ADMIN . 'main.php';
        
        // $title = "Đây là trang chủ nhé hahaa";
        // $thoiTiet = "Hôm nay trời có vẻ là mưa";
        // require_once './views/trangchu.php';
    }

    public function index() {
        $view = 'product/index';
        $title = 'Danh Sách Sản Phẩm';

        //  Lấy Danh Sách từ CSDL
        $products = $this->modelProduct->getAll();
        // var_dump($products);
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    //  Hàm hiển thị form Tạo Mới
    public function create() {
        $view = 'product/create';
        $title = 'Thêm Sản Phẩm Mới';
        //  Đổ dữ liệu danh sách Category lên view tạo mới
        $categories = $this->modelCategory->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    // Hàm lưu dữ liệu vào CSDL từ form
    public function store() {
        //  Hàm lưu vào CSDL
        echo '<pre>';
        // var_dump($_SERVER);
        // var_dump($_POST + $_FILES);
        
        try {
            $data = $_POST + $_FILES;
            // var_dump($data);

            // Xử lý ảnh
            if ($data['image']['size'] > 0) {
                $data['image'] = upload_file('products', $data['image']);
            } else {
                $data['image'] = null;
            }

            //  Gọi đến model lưu $data vào CSDL
            $this->modelProduct->insert($data);

        } catch (Exception $e) {
            throw new Exception("Thao tác tạo mới lỗi");
        }

        //  Dùng session flash message để hiển thị thông báo tạo mới thành công
        $_SESSION['success'] = 'Tạo mới sản phẩm thành công';

        //  Tạo mới thành công thì quay lại trang có form tạo mới
        header('Location: ' . BASE_URL_ADMIN . '&action=list-product');
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
            $pro = $this->modelProduct->find($id);
            
            if (empty($pro)) {
                throw new Exception("Product không tồn tại id = $id");
            } else {
                // Nếu tồn tại id, xoá dữ liệu trong CSDL
                $this->modelProduct->delete($id);
            }
        } catch (Exception $er) {
            throw new Exception("Thao tác xoá lỗi");
        }
        //  Dùng session flash message để hiển thị thông báo xoá thành công
        $_SESSION['success'] = 'Xoá sản phẩm thành công';

        //  Xoá thành công thì quay lại trang danh sách
        header('Location: ' . BASE_URL_ADMIN . '&action=list-product');
        exit();
    }
}
