<?php
session_start();
// Tôi muốn : 'tất cả request tới thư mục mvc phải bắt buộc đi qua file index.php'
$url = isset($_GET['url']) ? $_GET['url'] : "/";
// echo $url;
// require_once './app/controllers/HomeController.php';
// require_once './app/controllers/ProductController.php';

// require_once './app/models/BaseModel.php';
// require_once './app/models/Product.php';
// require_once './app/models/Category.php';
require_once './vendor/autoload.php';
require_once './commons/database-config.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detail();
        break;
    case 'insert-cate':
        $ctr = new CategoryController();
        echo $ctr->addData();
        break;
    case 'update-cate':
        $ctr = new CategoryController();
        echo $ctr->editData();
        break;
    case 'delete-cate':
        $ctr = new CategoryController();
        echo $ctr->deleteData();
        break;
    case 'contact':
        $ctr = new HomeController();
        echo $ctr->contact();
        break;
    case 'add-product':
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;
    case 'list-cate':
        $ctr = new CategoryController();
        echo $ctr->index();
        break;

    default:
        echo 'Đường dẫn không tồn tại';
        break;
}