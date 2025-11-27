<?php
// có class chứa các function thực thi xử lý logic 
class ProductController extends BaseModel
{
    public $modelProduct;
    public function __construct()
    {
        $this->modelProduct = new Product();
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
        // $title = 'Đây là Trang Quản Trị Admin';
        $view = 'product/index';
        $title = 'Danh sách Sản Phẩm';

        //  Lấy Danh Sách từ CSDL
        $products = $this->modelProduct->getAll();
        // var_dump($products);
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}
