<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?? 'Home Admin'?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL . 'templates/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'templates/css/footer.css'?>">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-xxl bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin'?>"><b>Home Admin</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL?>"><b>Home Client</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-product'?>"><b>Danh Sách Sản Phẩm</b></a>
            </li>
               <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-category'?>"><b>Danh Sách Danh Mục</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-comment'?>"><b>Danh Sách Bình Luận</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-user'?>"><b>Danh Sách Người Dùng</b></a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5 mb-5 flex-grow-1">
        <h1 class="mt-3 mb-3"><?php echo $title ?? 'Home Admin'?></h1>

        <div class="row">
            <?php
                if (isset($view)) {
                    require_once PATH_VIEW_ADMIN . $view . '.php';
                }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto">
        <div class="container-fluid px-5">
            <div class="footer-content">
            <div class="footer-note">
                Apple TV+ yêu cầu đăng ký thuê bao.
                <br>
                Một số tính năng có thể thay đổi. Một số tính năng, ứng dụng và dịch vụ chỉ khả dụng ở một số khu vực hoặc ngôn ngữ.
                <br>
            </div>



            <div class="footer-links">
                <div class="footer-column">
                    <h3>Mua Sắm Và Tìm Hiểu</h3>
                    <ul>
                        <li><a href="#">Cửa hàng</a></li>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">Ipad</a></li>
                        <li><a href="#">Iphone</a></li>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">AirPods</a></li>
                        <li><a href="#">Tv & Nhà</a></li>
                        <li><a href="#">Phụ Kiện</a></li>
                        <li><a href="#">Thẻ Quà Tặng</a></li>
                    </ul>
                    <h3 style="margin-top: 20px;">Ví Apple</h3>
                    <ul>
                        <li><a href="">Ví</a></li>
                        <li><a href="">Apple Pay</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Tài Khoản</h3>
                    <ul>
                        <li><a href="#">Quản Lý Tài Khoản Apple Của Bạn</a></li>
                        <li><a href="#">Tài Khoản Apple Store</a></li>
                        <li><a href="#">Today at Apple</a></li>
                        <li><a href="#">iCloud.com</a></li>
                    </ul>
                    <h3 style="margin-top: 20px;">Giải Trí</h3>
                    <ul>
                        <li><a href="#">Apple One</a></li>
                        <li><a href="#">Apple TV</a></li>
                        <li><a href="#">Apple Music</a></li>
                        <li><a href="#">Apple Arcade</a></li>
                        <li><a href="#">Apple PodCasts</a></li>
                        <li><a href="#">Apple Books</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Apple Store</h3>
                    <ul>
                        <li><a href="#">Ứng Dụng Apple Store</a></li>
                        <li><a href="#">Apple Trade In</a></li>
                        <li><a href="#">Tài Chính</a></li>
                        <li><a href="#">Tình Trạng Đơn Hàng</a></li>
                        <li><a href="#">Hỗ Trợ Mua Hàng</a></li>
                </div>


                <div class="footer-column">
                    <h3>Dành cho Doanh nghiệp</h3>
                    <ul>
                        <li><a href="#">Apple và Doanh nghiệp</a></li>
                        <li><a href="#">Mua cho Doanh nghiệp</a></li>
                    </ul>
                    <h3 style="margin-top: 20px;">Dành cho Giáo dục</h3>
                    <ul>
                        <li><a href="#">Apple và Giáo dục</a></li>
                        <li><a href="#">Mua Hàng Cho Bậc Đại Học</a></li>
                    </ul>
                    <h3 style="margin-top: 20px;">Cho Chăm Sóc Sức Khoẻ</h3>
                    <ul>
                        <li><a href="#">Apple Và Chăm Sóc Sức Khoẻ</a></li>
                    </ul>
                    <h3 style="margin-top: 20px;">Cho Chính Phủ</h3>
                    <ul>
                        <li><a href="#">Apple Và Chính Phủ</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Giá Trị Cốt Lõi Của Apple</h3>
                    <ul>
                        <li><a href="#">Trợ Năng</a></li>
                        <li><a href="#">Môi Trường</a></li>
                        <li><a href="#">Quyền Riêng Tư</a></li>
                        <li><a href="#">Dổi Mới Chuỗi Cung Ứng</a></li>
                    </ul>
                    <h3 style="margin-top: 20px;">Về Apple</h3>
                    <ul>
                        <li><a href="#">Apple Và Chính Phủ</a></li>
                        <li><a href="#">Newsroom</a></li>
                        <li><a href="#">Lãnh Đạo Của Apple</a></li>
                        <li><a href="#">Nhà Đầu Tư</a></li>
                        <li><a href="#">Đạo Đức & Quy Tắc</a></li>
                        <li><a href="#">Sự Kiện</a></li>
                        <li><a href="#">Liên Hệ Apple</a></li>
                    </ul>
                </div>
            </div>

            Có thêm cách để mua: <a href="#" style="color: #0066cc; text-decoration: none;">Tìm Apple Store</a> hoặc <a href="#" style="color: #0066cc; text-decoration: none;">đại lý</a> gần bạn. Hoặc gọi 1800.6677.3.

            <div class="footer-bottom">
                <div class="footer-legal">
                    <span>Bản quyền © 2025 Apple Inc. <br> Bảo lưu mọi quyền.</span>
                    <a href="#">Chính sách Quyền riêng tư</a>
                    <a href="#">Điều khoản Sử dụng</a>
                    <a href="#">Bán hàng và Hoàn Tiền</a>
                    <a href="#">Pháp lý</a>
                    <a href="#">Bản Đồ Trang Web</a>
                </div>
                <div class="footer-locale">
                    Việt Nam
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer End -->
    </div>
<script src="<?= BASE_URL . 'templates/js/alert.js'?>"></script></script>
</body>

</html>
