<?php
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;


$list = Product::join('category', 'product.category_id', '=', 'category.id')
 ->join('brand', 'product.brand_id', '=', 'brand.id')
 ->where('product.status', '!=', 0)
 ->orderBy('product.created_at', 'desc')
 ->select("product.*", "brand.name as brand_name", "category.name as category_name")
 ->get();

?>


<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
         <div class="content-wrapper">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <h1 class="d-inline">Cập nhật sản phẩm</h1>
                        <a href="index.php?option=product&cat=create" class="btn btn-sm btn-primary">cập nhật sản phẩm</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Main content --> 
            <section class="content">
               <div class="card">
                  <div class="card-header">
                     <select name="" id="" class="form-control d-inline" style="width:100px;">
                        <option value="">Xoá</option>
                     </select>
                     <button class="btn btn-sm btn-success" type ="submit" name ="CAPNHAT">Lưu</button>

                  </div>
                  <div class="card-body">
                     <table class="table table-bordered" id="mytable">
                        
                           <tr>
                              <th class="text-center" style="width:30px;">
                                 <input type="checkbox">
                              </th>
                              <th class="text-center" style="width:130px;">Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th>Tên danh mục</th>
                              <th>Tên thương hiệu</th>
                           </tr>
                      
                       
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </form>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>