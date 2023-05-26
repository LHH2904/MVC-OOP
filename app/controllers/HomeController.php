<?php
require_once './app/models/Product.php';
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