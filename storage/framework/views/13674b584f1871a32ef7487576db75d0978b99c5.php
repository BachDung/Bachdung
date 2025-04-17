<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê mã giảm giá
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
            <th>Tên giảm giá</th>
            <th>Mã giảm giá</th>
            <th>Hình thức giảm</th>
            <th>Số % hoặc tiền</th>
            <th>Số lượng</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $all_coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($coupon->coupon_name); ?></td>
            <td><?php echo e($coupon->coupon_code); ?></td>
            <?php if($coupon->coupon_condition==1): ?>
            <td>Giảm theo %</td>
            <?php else: ?>
            <td>Giảm theo số tiền</td>
            <?php endif; ?>

            <?php if($coupon->coupon_condition==1): ?>
            <td><?php echo e($coupon->coupon_number); ?> %</td>
            <?php else: ?>
            <td><?php echo e(number_format($coupon->coupon_number)); ?> VND</td>
            <?php endif; ?>
            <td><?php echo e($coupon->coupon_qty); ?></td>
            <td>
              <a href="<?php echo e(URL::to('/edit-coupon/'.$coupon->coupon_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa không?')" href="<?php echo e(URL::to('/delete-coupon/'.$coupon->coupon_id)); ?>" class="active styling-edit" ui-toggle-class="">
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

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doanshopbangiay\resources\views/admin/coupon/all_coupon.blade.php ENDPATH**/ ?>