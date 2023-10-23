<?php
use App\Models\Banner;
$list = Banner::all();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Cập nhật Banner</h1>
                    
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
            <div class="card-header text-right">

            <button class="btn btn-sm btn-success" type="subumit"name ="CAPNHAT">
               <i class="fa fa-save" aria-hidden="true"></i>
               Lưu
            </button>
            <a href="index.php?option=banner" class="btn btn-sm btn-info">
               <i class="fa fa-arrow-left" aria-hidden="true"></i>
               Về thương hiệu
            </a>

            </div>
               <div class="card-body">
                 
               <div class="row">
                     <div class="col-md-12">
                        <div class="mb-3">
                           <input type="hidden" name="id" value="<?= $banner->id; ?>" />
                           <label>Tên Banner (*)</label>
                           <input type="text" value="<?= $banner->name; ?>" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>Slug</label>
                           <input type="text"  value="<?= $banner->slug; ?>" name="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>Mô tả</label>
                          <textarea name="description" class="form-control"><?= $banner->description; ?></textarea>
                        </div>
                        <div class="mb-3">
                           <label>Hình đại diện</label>
                           <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>Trạng thái</label>
                           <select name="status" class="form-control">
                              <option value="1" <?= ($banner->status==1)?'selected':''; ?>>Xuất bản</option>
                              <option value="2" <?= ($banner->status==2)?'selected':''; ?> >Chưa xuất bản</option>
                  
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>   