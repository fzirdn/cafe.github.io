
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee Payment</h2>
        </div>
       
    </div>
</div>
   
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
<form action="<?php echo e(route('payments.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="empName" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="text" class="form-control" name="date" placeholder="Date">
        </div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Day:</strong>
            <select class="form-control" name="day_id">
                <option value="">-- Choose Day --</option>
                <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value="<?php echo e($id); ?>" <?php echo e((isset($payment['day_id']) && $payment['day_id'] == $id) ? ' selected' : ''); ?>><?php echo e($name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <br>        
        <br>
        </div>
        <br>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Payment:</strong>
                <input type="text" class="form-control" name="pay" placeholder="Payment">
        </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Bonus:</strong>
                <input type="text" class="form-control" name="bonus" placeholder="Bonus">
        </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Total Payment:</strong>
                <input type="text" name="total" class="form-control" placeholder="Total Payment">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="<?php echo e(route('payments.index')); ?>"> Back</a>
        </div>
    </div>
   
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cafe1\resources\views/payments/create.blade.php ENDPATH**/ ?>