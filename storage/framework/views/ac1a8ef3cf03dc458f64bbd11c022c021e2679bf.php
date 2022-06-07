<?php $__env->startSection('content'); ?>
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
              
          </div>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Attendance</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.updateAttendance',$data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="col-12 col-xl-12">
                        <select name="intake" class="form-control form-control-alt">
                          <option selected value="<?php echo e($data->intake_id); ?>"> <?php echo e($data->intake_id); ?></option>
                          <?php $__currentLoopData = $intakes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intake): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($intake->intake_name); ?>"><?php echo e($intake->intake_name); ?></option>        
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    <div class="col-12 col-xl-12">
                      <input type="text" class="form-control form-control-alt" value="<?php echo e($data->name); ?>" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="col-12">
                        
                      <button type="submit" class="btn btn-dark">Update</button>
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Mevis/Modules/Courses/Resources/views/attendance/editAttendance.blade.php ENDPATH**/ ?>