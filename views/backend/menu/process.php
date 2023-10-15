<?php

use App\Models\Menu;
use App\Libraries\MyClass;

if(isset($_POST['THEM']))
{
    $menu=new Menu();
    //lấy từ form
    $menu->name = $_POST['name'];
    $menu->slug =(strlen($_POST['slug'])>0) ? $_POST['slug']: MyClass::str_slug($_POST['name']);
    $menu->description = $_POST['description'];
    $menu->status = $_POST['status'];
    //Xử lí uploadfile
    if(strlen($_FILES['image']['name'])>0){
        $target_dir = "../public/images/menu/";
        $target_file= $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if(in_array($extension, ['jpg','jpeg','png','gif','webp']))
        {
            $filename=$menu->slug.'.'.$extension;
            move_uploaded_file($_FILES['image']['tmp_name'],$target_dir . $filename);
            $menu->image =$filename;
        }
    }
    //tư sinh ra
    $menu->created_at = date('Y-m-d-H:i:s');
    $menu->created_by = (isset($_SESSION['user_id']))? $_SESSION['user_id'] : 1;
    var_dump($menu);
    //luu vao csdl
    $menu->save();
    //
    header("location:index.php?option=menu");
}