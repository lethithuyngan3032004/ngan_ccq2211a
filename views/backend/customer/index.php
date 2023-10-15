
<?php
use App\Models\Customer;

$list = customer::where('status','!=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php";?>

<body class="hold-transition sidebar-mini">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="#" class="nav-link">Contact</a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="fas fa-search"></i>
               </a>
               <div class="navbar-search-block">
                  <form class="form-inline">
                     <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                           aria-label="Search">
                        <div class="input-group-append">
                           <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                           </button>
                           <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                              <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#" role="button">
                  <i class="fas fa-power-off"></i> Đăng xuất
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <a href="../backend/index.html" class="customer-link">
            <img src="../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
               class="customer-image img-circle elevation-3" style="opacity: .8">
            <span class="customer-text font-weight-light">QUẢN TRỊ</span>
         </a>
         <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                  <a href="#" class="d-block">Hồ Diên Lợi</a>
               </div>
            </div>
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Sản phẩm
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="product_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Tất cả sản phẩm</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="category_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Danh mục</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="customer_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Thương hiệu</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Bài viết
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="post_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Tất cả bài viết</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="topic_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Chủ đề</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="page_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Trang đơn</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Quản lý bán hàng
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="order_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Tất cả đơn hàng</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="import_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Nhập hàng</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="export_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Xuất hàng</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="customer_index.html" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Khách hàng</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="contact_index.html" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Liên hệ</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Giao diện
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="menu_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Menu</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="banner_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Banner</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Hệ thống
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="user_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Thành viên</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="config_index.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Cấu hình</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-header">LABELS</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                     </a>
                  </li>
                  <li class="nav-header">LABELS</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả khách hàng</h1>
                     <a href="customer_create.html" class="btn btn-sm btn-primary">Thêm khách hàng</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  Noi dung
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Họ tên</th>
                           <th>Điện thoại</th>
                           <th>Email</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              <img src="../public/images/user.jpg" alt="user.jpg">
                           </td>
                           <td>
                              <div class="name">
                                 Hồ Diên Lợi
                              </div>
                              <div class="function_style">
                                 <a href="#">Hiện</a> |
                                 <a href="#">Chỉnh sửa</a> |
                                 <a href="customer_show.html">Chi tiết</a> |
                                 <a href="#">Xoá</a>
                              </div>
                           </td>
                           <td>0987654331</td>
                           <td>dienloisoft@gmail.com</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once '../views/backend/footer.php'; ?>