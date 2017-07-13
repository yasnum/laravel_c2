<?php $__env->startSection('title2','Users'); ?>
<?php $__env->startSection('stycustm'); ?>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!--	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">  -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('master.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('master.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			    <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="#">Pengaturan</a>
            </li>
            <li class="active">Users</li>
          </ul><!-- /.breadcrumb -->			
			</div>

			<div class="page-content">
            <?php echo $__env->make('master.setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('page-header'); ?>
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<?php echo $__env->yieldContent('pesan'); ?>
						<?php echo $__env->yieldContent('testIsi'); ?>

            <div class="table-header">
              <button type="button" class="btn btn-sm btn-success btn-white btn-round" 
                data-toggle="modal" data-target="#create">
                <i class="ace-icon fa fa-plus bigger-110 green"></i>
                Add
              </button> 
              | Data Users 
            </div>
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
                                      
            </table>
            <ul id="pagination" class="pagination-sm"></ul>
						<!-- PAGE CONTENT ENDS -->
						
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
		<?php echo $__env->make('users.popup.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('users.popup.editUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div><!-- /.main-content -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts_custome'); ?>
	<script src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.ui.touch-punch.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery310.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap4alp.min.js')); ?>"></script> 
   <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.twbsPagination.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script> 
   
   <link href="<?php echo e(asset('assets/css/toastr.min.css')); ?>" rel="stylesheet"> 
	 <script src="<?php echo e(asset('assets/js/validator.min.js')); ?>"></script> 
   <script type="text/javascript">
    	   var url = "<?php echo route('usere.index')?>";
   </script>
   <script src="<?php echo e(asset('js/user.js')); ?>"></script> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>