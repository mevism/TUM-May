<?php $__env->startSection('content'); ?>
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  Edit Intake
              </h4>
          </div>
      </div>
  </div>
</div>
    <div class="content" style="margin-left: 30%;margin-top:2%;">
        <div class="block block-rounded col-md-8 col-lg-6 col-xl-5">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Intake</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-8 space-y-2">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.updateIntake',$data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                      <div  class="col-12">
                        <label for="intake_name">From:</label>
                        
                        <select class="form-control form-control-alt" name="intake_name_from" id="intake_name">
                          <option value="<?php echo e($data->intake_name); ?>"> </option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                        </select>
                      </div>
                      <br>
                      <div class="col-12">
                        <label for="intake_name">To:</label>
                        
                        <select type="month" class="form-control form-control-alt" name="intake_name_to" id="intake_name">
                          <option selected disabled> </option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                        </select>
                      </div>
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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Mevis/Modules/Courses/Resources/views/intake/editIntake.blade.php ENDPATH**/ ?>