<?php

use App\Models\Topic;
use App\Libraries\MyClass;

if(isset($_POST['THEM']))
{
    $topic=new topic();
    //lấy từ form
    $topic->name = $_POST['name'];
    $topic->slug =(strlen($_POST['slug'])>0) ? $_POST['slug']: MyClass::str_slug($_POST['name']);
    $topic->description = $_POST['description'];
    $topic->created_at = $_POST['created_at'];
    $topic->status = $_POST['status'];

    //tư sinh ra
    $topic->created_at = date('Y-m-d-H:i:s');
    $topic->created_by = (isset($_SESSION['user_id']))? $_SESSION['user_id'] : 1;
    var_dump($topic);
    //luu vao csdl
    $topic->save();
    //
    header("location:index.php?option=topic");
}