<?php $__env->startSection('content'); ?>
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  Edit Class
              </h4>
          </div>
      </div>
  </div>
</div>
    <div class="content" style="margin-left: 30%;margin-top:2%;">
        <div class="block block-rounded col-md-8 col-lg-6 col-xl-5">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Class</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-8 space-y-2">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.updateClasses',$data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="col-12 col-xl-12">
                      <input type="text" value="<?php echo e($data->name); ?>" class="form-control form-control-alt" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark">update</button>
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Mevis/Modules/Courses/Resources/views/class/editClasses.blade.php ENDPATH**/ ?>