<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
    <div class="row w3-res-tb">
      
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
    <?php
	  use Illuminate\Support\Facades\Session;
    $message = Session::get('message');
    if($message){
        echo '<span class="text-alert">',$message.'</span>';
        Session::put('message',null);
    }
    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Ảnh</th>
            
            <th>Mô tả</th>
            <th>content</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>
            <th>Hiển thị</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            
            <td><?php echo e($pro->product_name); ?></td>
            <td><?php echo e($pro->product_price); ?></td>
            <td>
                <img src="uploads/product/<?php echo e($pro->product_image); ?>" height="100" width="100" >

            </td>
            
            <td><?php echo e($pro->product_desc); ?></td>
            <td><?php echo e($pro->product_content); ?></td>
            <td><?php echo e($pro->category_name); ?></td>
            <td><?php echo e($pro->brand_name); ?></td>
            <td><span class="text-ellipsis">
                <?php
                if($pro->product_status==0){
                ?>
                    <a href="<?php echo e(URL::to('/unactive-product/'.$pro->product_id)); ?>"> <span class="fa-thumb-styling fa fa-thumbs-down"></span> </a>
                    <?php
                }else{
                    ?>
                    <a href="<?php echo e(URL::to('/active-product/'.$pro->product_id)); ?>"> <span class="fa-thumb-styling fa fa-thumbs-up"></span>  </a>
                    <?php
                    }
                ?>
            </span></td>

            <td>
              <a href="<?php echo e(URL::to('/edit-product/'.$pro->product_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa không?')" href="<?php echo e(URL::to('/delete-product/'.$pro->product_id)); ?>" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i></a>
              </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

    </div>
    <footer class="panel-footer">
        <div class="row">
          <div class="col-sm-4 text-center">
              <div class="card-footer clear-fix">
                  <?php echo $all_product->links(); ?>

              </div>
          </div>
        </div>
      </footer>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doanshopbangiay\resources\views/admin/all_product.blade.php ENDPATH**/ ?>