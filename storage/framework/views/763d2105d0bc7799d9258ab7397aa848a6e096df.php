<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Employee Schedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('schedules.create')); ?>"> Add New Schedule</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Date</th>
            <th>Day</th>
            <th>Start Time</th>
            <th>Off Time</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($s->id); ?></td>
            <td><?php echo e($s->empName); ?></td>
            <td><?php echo e($s->position); ?></td>
            <td><?php echo e($s->date); ?></td>
            <td><?php echo e($s->day_id); ?></td>
            <td><?php echo e($s->start_time); ?></td>
            <td><?php echo e($s->off_time); ?></td>
            <td>
                <form action="<?php echo e(route('schedules.destroy',$s->id)); ?>" method="POST">

                  <a class="btn btn-info" href="<?php echo e(route('schedules.show',$s->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('schedules.edit',$s->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\cafe1\resources\views/schedules/table.blade.php ENDPATH**/ ?>