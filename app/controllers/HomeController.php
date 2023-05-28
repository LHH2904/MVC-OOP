<?php

namespace App\Controllers;

use App\Models\Product;

class HomeController
{
    public function index()
    {
        // return 'Trang chủ Website';
        // $products = Product::all();
        $product = Product::where('price', '<', 5000)
            ->orderBy('price', 'DESC')
            ->first();
        // where id được thay thế bằng hàm find(8);
        // nó tương đương với $product = Product::where('id',9)->first();
        // $product = Product::find(8);
        echo '<pre>';
        var_dump($product);
        die();
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