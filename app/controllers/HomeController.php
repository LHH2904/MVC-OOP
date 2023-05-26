<?php

namespace App\Controllers;

use App\Models\Product;

class HomeController
{
    public function index()
    {
        // return 'Trang chủ Website';
        $products = Product::all();
        include_once './app/views/homepage.php';
    }

    public function detail()
    {
        return 'Trang chi tiết 1 sản phẩm';
    }

    public function contact()
    {
        return 'Trang liên hệ của dự án';
    }
}
