<?php $__env->startSection('title'); ?>
Admin Dashboard | Events
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">

            <?php if(session()->has('message')): ?>
            <div class="alert alert-success w-50" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong> <?php echo e(session()->get('message')); ?></strong>
            </div>
            <?php endif; ?>


            <div class=" container-fluid   container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <header class="page-header pt-2">
                            <h1 class="page-title" style="font-weight: bold !important;">Programs & Initiatives</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                        </header>
                        <div class="paragraph in-view in-view--in">
                            <div class="row in-view__child in-view__child--fadein in-view__child--in">
                                <div class="col-12 col-lg-6">
                                    <!--<div class="dashed in-view__child in-view__child--in">
	                          <p>We curate our speakers bearing in mind the African narrative. Our speakers are thinkers, builders and innovators that are Africans by origin, working on African problems or Africans in the diaspora making a difference in the societies they find themselves notwithstanding the fact that peoples of other descent can as well be invited to speak to our audience as far as they meet our rigorous screening process during curation.</p>
	                        </div>-->
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="card-header pt-0">
                        <div class="pull-right">
                            <div class="col-xs-12">
                                <button data-toggle="modal" data-target="#addevent" id="btnStickUpSizeToggler"
                                    class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Event
                                </button>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="container-class">
            </div>

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    <?php if($events->count() > 0): ?>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo e(asset('uploads/events/')); ?>/<?php echo e($event->file_path); ?>"
                                                    class="eventsimg w-100" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo e(asset('uploads/events/')); ?>/<?php echo e($event->file_path); ?>"
                                                    class="eventsimg w-100" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="py-2">
                                    <h5 class="m-0"><?php echo e($event->event_name); ?></h5>
                                </div>

                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default ">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo e("allspeakers/".$event['id']); ?>">
                                                <button type="submit" name="add_eventspeaker_btn"
                                                    class="btn btn-success">Events</button>
                                            </a>

                                            <a class="dropdown-item" href=<?php echo e("edit/".$event['id']); ?>>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                            <a class="dropdown-item" href=<?php echo e("delete/".$event['id']); ?>>
                                               
                                                    <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button>
                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="text-center">
                        <h4 class="text-black ">
                            NO PROGRAM AVAILABLE , ADD PROGRAM !!
                        </h4>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.partials.modals.addevent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(function () {

            $('form[name=events]').validate({

                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    event_name: "required",
                    event_theme: "required",
                    date: "required",
                    about: "required"
                },
                // Specify validation error messages
                messages: {
                    event_name: "Please enter your event name",
                    event_theme: "Please enter your event theme",
                    date: "Please select a date",
                    about: "Please write a description"
                },


                submitHandler: function (form) {
                    $('#submit').val('Submiting')
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            if (response.success != true) {
                                swal({
                                    title: "OOPS!",
                                    text: resoponse.message,
                                    icon: "error",
                                    button: "Ok",
                                });
                                document.forms['events'].reset()
                                $('#submit').val('submit')
                            } else {
                                swal({
                                    title: "GOOD JOB!",
                                    text: response.message,
                                    icon: "success",
                                    button: "Ok",
                                });
                                document.forms['events'].reset()
                                $('#submit').val('submit')
                            }
                        },
                        error: function (xhr) {
                            $('#submit').val('submit')
                            swal({
                                title: "OOPS!",
                                text: "Something went wrong",
                                icon: "error",
                                button: "Ok",
                            });
                            document.forms['events'].reset()
                            $('#submit').val('submit')
                        }
                    });
                }
            });
        });

    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/admin/events/index.blade.php ENDPATH**/ ?>