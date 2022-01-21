<?php $__env->startSection('content'); ?>
<div style="background-color:lightblue"><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><center><?php echo e(__('Welcome To Cafe Employee Management')); ?></center></b></div>
                
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <center><?php echo e(__('You are logged in!')); ?></center>
                </div>
            </div>
        </div>
    </div>
<br><br>

<style>
    * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>    
<div class="row">
  <div class="column">
    <img src="<?php echo e(asset('admin/dist/img/images (1).png')); ?>" alt="Snow" style="width:70%">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('admin/dist/img/1836475.png')); ?>" alt="Cafe" style="width:70%">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('admin/dist/img/Finance-icon-to-buy-a-hotel.jpg')); ?>" alt="Forest" style="width:70%">
  </div>
</div>
         <br><br>       
            
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cafe1\resources\views/home.blade.php ENDPATH**/ ?>