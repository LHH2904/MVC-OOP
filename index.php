<?php
// Tôi muốn : 'tất cả request tới thư mục mvc phải bắt buộc đi qua file index.php'
$url = isset($_GET['url']) ? $_GET['url'] : "/";
// echo $url;
require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';

switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detail();
        break;
    case 'contact':
        $ctr = new HomeController();
        echo $ctr->contact();
        break;
    case 'add-product':
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;

    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
