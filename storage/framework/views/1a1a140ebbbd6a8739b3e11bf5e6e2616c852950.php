<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<head>
		<?php echo $__env->make('master.styless', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('stycustm'); ?>
	</head>
		
	<body class="no-skin">

				<?php echo $__env->yieldContent('content'); ?>
				<?php echo $__env->make('master.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->make('master.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->yieldContent('scripts_custome'); ?>
</body>
</html>