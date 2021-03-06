<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name')); ?>Admin Dashboard</title>

        <link rel="apple-touch-icon" href="<?php echo e(asset('files/pages/ico/tedxphlogo.svg')); ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('files/pages/ico/tedxphlogo.svg')); ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('files/pages/ico/tedxphlogo.svg')); ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('files/pages/ico/tedxphlogo.svg')); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('files/pages/ico/tedxphlogo.svg')); ?>" />
        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        
        <link href="<?php echo e(asset('files/plugins/pace/pace-theme-flash.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/jquery-scrollbar/jquery.scrollbar.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/switchery/css/switchery.min.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/nvd3/nv.d3.min.css')); ?>/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/mapplic/css/mapplic.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/rickshaw/rickshaw.min.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/bootstrap-datepicker/css/datepicker3.css')); ?>" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo e(asset('files/plugins/jquery-metrojs/MetroJs.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/pace/pace-theme-flash.css')); ?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo e(asset('files/bootstrap/css/bootstrap.min.css')); ?>">
		<link href="<?php echo e(asset('files/plugins/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/jquery-scrollbar/jquery.scrollbar.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/switchery/css/switchery.min.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('files/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/bootstrap-tag/bootstrap-tagsinput.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/dropzone/css/dropzone.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/bootstrap-datepicker/css/datepicker3.css')); ?>" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo e(asset('files/plugins/summernote/css/summernote.css')); ?>" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo e(asset('files/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')); ?>" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo e(asset('files/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo e(asset('files/pages/css/pages-icons.css')); ?>" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="<?php echo e(asset('files/pages/css/pages.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/pages/css/pages-icons.css')); ?>" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="<?php echo e(asset('files/pages/css/pages.css')); ?>" rel="stylesheet" type="text/css" />
        <link class="main-stylesheet" href="<?php echo e(asset('files/pages/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
        

		<link href="<?php echo e(asset('files/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('files/plugins/datatables-responsive/css/datatables.responsive.css')); ?>" rel="stylesheet" type="text/css" media="screen" />


        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="fixed-header dashboard windows desktop pace-done sidebar-visible menu-pin">
            <!-- Page Heading -->
            <?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Content -->
            <?php echo $__env->yieldContent('content'); ?>

             <!-- Page Footer -->
            <?php echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/tedxph/resources/views/layouts/admin.blade.php ENDPATH**/ ?>