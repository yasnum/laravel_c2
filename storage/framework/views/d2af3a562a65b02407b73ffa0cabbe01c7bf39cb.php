<?php $__env->startSection('title2','Dasboard'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('master.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('master.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<?php echo $__env->yieldContent('breadcrumb'); ?>

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
			</div>

			<div class="page-content">
			
				<?php echo $__env->make('master.setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<?php echo $__env->yieldContent('page-header'); ?>

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<?php echo $__env->yieldContent('pesan'); ?>
					
						<?php echo $__env->yieldContent('testIsi'); ?>
					


						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>