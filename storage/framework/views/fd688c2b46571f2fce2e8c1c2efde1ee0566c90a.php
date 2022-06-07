<?php $__env->startSection('content'); ?>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="flex-grow-1">
                    <h5 class="h5 fw-bold mb-0">
                        SCHOOLS
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Schools</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page" >
                            View schools
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">
           
            <div class="block-content block-content-full">
              <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                <span class="d-flex justify-content-end">
                    <a class="btn btn-alt-info" href="<?php echo e(route('courses.addSchool')); ?>">Add</a>
                </span><br>
                <thead>
                    <th>Schools</th>
                </thead>
                <tbody><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="fw-semibold fs-sm"><?php echo e($school->name); ?></td>
                    <td> <a class="btn btn-sm btn-alt-info" href="<?php echo e(route('courses.editSchool', $school->id)); ?>">edit</a> </td>
                    <td> <a class="btn btn-sm btn-alt-danger" href="<?php echo e(route('courses.destroySchool', $school->id)); ?>">delete</a> </td> 
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
                </tbody>
              </table>
            </div>
          </div>
          <!-- Dynamic Table Responsive -->
        </div>
        <!-- END Page Content -->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Mevis/Modules/Courses/Resources/views/school/showSchool.blade.php ENDPATH**/ ?>