<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController
{
    public function index()
    {
        echo 'Danh sách category';
    }

    // insert a new category
    public function addData()
    {
        // dữ liệu
        $name = 'Giay thể thao';
        $slug = 'giay-the-thao';
        $showMenu = 0;
        $desc = 'something';


        $model = new Category();
        $model->cate_name = $name;
        $model->slug = $slug;
        $model->show_menu = $showMenu;
        $model->desc = $desc;

        $model->save();
    }

    public function editData()
    {
        // dữ liệu
        $id = 4;
        $name = 'Túi da';
        $slug = 'tui-da';

        $model = Category::find($id);
        $model->cate_name = $name;
        $model->slug = $slug;

        $model->save();
    }

    public function deleteData()
    {
        // dữ liệu
        $id = $_GET['id'];
        Category::destroy($id);
    }
}
