<?php $__env->startSection('content'); ?>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-0">
                <div class="flex-grow-0">
                    <h5 class="h5 fw-bold mb-0">
                        Applications
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Application</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Apply
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <!-- Updates -->
                <form class="js-validation-signin" method="post" action="<?php echo e(route('application.submit')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <ul class="timeline timeline-alt py-0">
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-default">
                            <i class="fa fa-school"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Course Details</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-email">School</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <input type="text" class="form-control form-control-alt" name="school" value="<?php echo e($course->school_id); ?>" readonly>
                                    </div>
                                </div>

                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-email">Department</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <input type="text" class="form-control form-control-alt" name="department" value="<?php echo e($course->department_id); ?>" readonly>
                                    </div>
                                </div>

                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-password">Course</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <input type="text" class="form-control form-control-alt" name="course" value="<?php echo e($course->course_name); ?>" readonly>
                                    </div>
                                </div>

                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-email">Campus</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <input name="campus" class="form-control form-control-alt" readonly value="<?php echo e($course->campus_id); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-default">
                            <i class="fa fa-book-open"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Cluster Subjects</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-email">Subject 1</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <div class="input-group">
                                            <span class="input-group-text input-group-text-alt"><?php echo e(Str::limit( $course->subject1, $limit = 3 , $end='' )); ?></span>
                                            <input type="text" class="form-control form-control-alt" name="subject1" value="<?php echo e(old('subject1')); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-email">Subject 2</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <div class="input-group">
                                            <span class="input-group-text input-group-text-alt"><?php echo e(Str::limit( $course->subject2, $limit = 3 , $end='' )); ?></span>
                                            <input type="text" class="form-control form-control-alt" name="subject2" value="<?php echo e(old('subject2')); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-password">Subject 3</label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <div class="input-group">
                                            <span class="input-group-text input-group-text-alt"><?php echo e(Str::limit( $course->subject3, $limit = 8 , $end='' )); ?></span>
                                            <input type="text" class="form-control form-control-alt" name="subject3" value="<?php echo e(old('subject3')); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding: 5px !important;">
                                    <label class="col-sm-2 col-form-label" for="example-hf-email">Subject 4 </label>
                                    <div class="col-sm-8 text-uppercase" style="padding: 5px !important;">
                                        <div class="input-group">
                                            <span class="input-group-text input-group-text-alt"><?php echo e(Str::limit( $course->subject4, $limit = 8 , $end='' )); ?></span>
                                            <input type="text" class="form-control form-control-alt" name="subject4" value="<?php echo e(old('subject4')); ?>">
                                        </div>
                                    </div>
                                </div>
                                humanity
                                science
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-modern">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Education History</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Secondary school</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('secondary')); ?>" name="secondary" placeholder="Institution name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('secondaryqualification')); ?>" name="secondaryqualification" placeholder="Qualifications acquired">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('secstartdate')); ?>" name="secstartdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('secenddate')); ?>" name="secenddate">
                                                <small class="text-muted">Year Finished</small>
                                            </div>
                                        </div><div style="padding: 7px !important;">
                                            <input type="file" class="form-control form-control-alt" value="<?php echo e(old('seccert')); ?>" name="seccert" placeholder="upload certificate">
                                            <small class="text-muted">Upload certificate</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Tertiary school</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('tertiary')); ?>" name="tertiary" placeholder="Institution name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('teriaryqualification')); ?>" name="teriaryqualification" placeholder="Qualifications acquired">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('terstartdate')); ?>" name="terstartdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('terenddate')); ?>" name="terenddate">
                                                <small class="text-muted">Year Finished</small>
                                            </div>
                                        </div><div style="padding: 7px !important;">
                                            <input type="file" class="form-control form-control-alt" value="<?php echo e(old('tercert')); ?>" name="tercert" placeholder="upload certificate">
                                            <small class="text-muted">Upload certificate</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Tertiary School 2</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('tertiary2')); ?>" name="tertiary2" placeholder="Institution name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('teriary2qualification')); ?>" name="teriary2qualification" placeholder="Qualifications acquired">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('ter2startdate')); ?>" name="ter2startdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('ter2enddate')); ?>" name="ter2enddate">
                                                <small class="text-muted">Year Finished</small>
                                            </div>
                                        </div><div style="padding: 7px !important;">
                                            <input type="file" class="form-control form-control-alt" value="<?php echo e(old('ter2cert')); ?>" name="ter2cert" placeholder="upload certificate">
                                            <small class="text-muted">Upload certificate</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Tertiary School 3</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('tertiary3')); ?>" name="tertiary3" placeholder="Institution name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('ter3iaryqualification')); ?>" name="ter3iaryqualification" placeholder="Qualifications acquired">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('ter3startdate')); ?>" name="ter3startdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('ter3enddate')); ?>" name="ter3enddate">
                                                <small class="text-muted">Year Finished</small>
                                            </div>
                                        </div><div style="padding: 7px !important;">
                                            <input type="file" class="form-control form-control-alt" value="<?php echo e(old('ter3cert')); ?>" name="ter3cert" placeholder="upload certificate">
                                            <small class="text-muted">Upload certificate</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-info">
                            <i class="fa fa-briefcase-clock"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Working Experience</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Organization 1</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('org1')); ?>" name="org1" placeholder="Organization name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('org1post')); ?>" name="org1post" placeholder="Post held">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('org1startdate')); ?>" name="org1startdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('org1enddate')); ?>" name="org1enddate">
                                                <small class="text-muted">Year Finished</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Organization 2</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('org2')); ?>" name="org2" placeholder="Organization name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('org2post')); ?>" name="org2post" placeholder="Post held">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('org2startdate')); ?>" name="org2startdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('org2enddate')); ?>" name="org2enddate">
                                                <small class="text-muted">Exit year </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2" style="padding: 7px !important;">
                                        <label class="form-check-label"> Organization 3</label>
                                    </div>
                                    <div class="col-md-8" style="padding: 10px !important;">
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('org3')); ?>" name="org3" placeholder="Organization name">
                                        </div>
                                        <div style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('orgpost3')); ?>" name="orgpost3" placeholder="Post held">
                                        </div>
                                        <div class="row" style="padding: 7px !important;">
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('org3startdate')); ?>" name="org3startdate">
                                                <small class="text-muted">Starting year</small>
                                            </div>
                                            <div class="col-6">
                                                <input type="month" class="form-control form-control-alt" value="<?php echo e(old('org3enddate')); ?>" name="org3enddate">
                                                <small class="text-muted">Exit year </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-dark">
                            <i class="fa fa-home-user"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Guardian Details</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="text-muted">Add the details of your parent or guardian here</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-uppercase" style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('parentname')); ?>" name="parentname" placeholder="Parent/Guardian name">
                                        </div>
                                        <div class="text-uppercase" style="padding: 7px !important;">
                                        <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('parentmobile')); ?>" name="parentmobile" placeholder="Parent/Guardian mobile number">
                                        </div>
                                        <div class="text-uppercase" style="padding: 7px !important;">
                                        <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('parentcounty')); ?>" name="parentcounty" placeholder="Parent/Guardian county of residence">
                                        </div>
                                        <div class="" style="padding: 7px !important;">
                                        <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('parenttown')); ?>" name="parenttown" placeholder="Parent/Guardian Home town">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-dark">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Sponsor Details</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="text-muted">Add the details of your parent or guardian here</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-uppercase" style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt" value="<?php echo e(old('sponsorname')); ?>" name="sponsorname" placeholder="Sponsor name">
                                        </div>
                                        <div class="text-uppercase" style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt" value="<?php echo e(old('sponsormobile')); ?>" name="sponsormobile" placeholder="Sponsor mobile number">
                                        </div>
                                        <div class="text-uppercase" style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('sponsorcounty')); ?>" name="sponsorcounty" placeholder="Sponsor county of residence">
                                        </div>
                                        <div class="" style="padding: 7px !important;">
                                            <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e(old('sponsortown')); ?>" name="sponsortown" placeholder="Sponsor Home town">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <div class="timeline-event-icon bg-dark">
                            <i class="fa fa-user-check"></i>
                        </div>
                        <div class="timeline-event-block block">
                            <div class="block-header">
                                <h3 class="block-title">Declaration</h3>
                                <div class="block-options">
                                    <div class="timeline-event-time block-options-item fs-sm">
                                        <i class="fa fa-info" title="user information"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p class="text-muted">Applicant declaration</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="" style="padding: 7px !important;">
                                           <input type="checkbox" name="declare" required>
                                            I <span class="text-decoration-underline"> <?php echo e(Auth::user()->sname); ?> <?php echo e(Auth::user()->mname); ?> <?php echo e(Auth::user()->fname); ?></span> declare that the information given in this application form is correct. I further certify that I have read, understood and agreed to comply with the terms stipulated herein.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center" style="padding: 15px !important;">
                                <div class="col-md-4">
                                    <button type="submit" class="btn w-100 btn-alt-primary">
                                        Submit application
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- END Updates -->
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('application::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Application\Resources/views/applicant/application.blade.php ENDPATH**/ ?>