<?php $__env->startSection('content'); ?>
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Đăng nhập tài khoản</h2>
                    <form action="<?php echo e(URL::to('/login-customer')); ?>" method="POST">
                        <?php echo e(@csrf_field()); ?>

                        <input type="text" name="email_account" placeholder="Tài khoản" />
                        <input type="password" name="password_account" placeholder="Password" />
                        <span>
                            <input type="checkbox" class="checkbox">
                            Ghi nhớ đăng nhập
                        </span>
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Hoặc</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up forsm-->
                    <h2>Đăng ký</h2>
                    <form action="<?php echo e(URL::to('/add-customer')); ?>" method="POST">
                        <?php echo e(@csrf_field()); ?>

                        <input type="text" name="customer_name" placeholder="Họ & tên"/>
                        <input type="email" name="customer_email" placeholder="Email"/>
                        <input type="password" name="customer_password" placeholder="Password"/>
                        <input type="text" name="customer_phone" placeholder="Phone"/>
                        <button type="submit" class="btn btn-default">Đăng ký</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doanshopbangiay\resources\views/pages/checkout/login_checkout_chuamua.blade.php ENDPATH**/ ?>