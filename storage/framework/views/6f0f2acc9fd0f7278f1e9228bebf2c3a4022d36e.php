<?php $__env->startSection('content'); ?> 
<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="">
                    
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Intakes</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                          <a  href="showIntake">View Intakes</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
</div>

    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">ADD Intake</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.storeIntake')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-12">                
                      </div>
                        <div  class="col-12">
                          <label for="intake_name">From:</label>
                          
                          <select class="form-control form-control-alt" name="intake_name_from" id="intake_name">
                            <option selected disabled> </option>
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="Sept">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                          </select>
                        </div>
                        <br>
                        <div class="col-12">
                          <label for="intake_name">To:</label>
                          
                          <select type="month" class="form-control form-control-alt" name="intake_name_to" id="intake_name">
                            <option selected disabled> </option>
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="Sept">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                          </select>
                        </div>
                    </div>
                    <select name="course[]" multiple id="course" class="form-control form-control-alt">
                      <option selected diasabled>Select Course</option>
                      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($course->course_name); ?>"><?php echo e($course->course_name); ?></option>                      
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
          
                
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark">Add</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Mevis/Modules/Courses/Resources/views/intake/addIntake.blade.php ENDPATH**/ ?>