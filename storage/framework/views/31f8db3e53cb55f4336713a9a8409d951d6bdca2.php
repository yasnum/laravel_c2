  <!-- Add Modal start -->
    <div class="modal fade" id="create" tabindex="-1" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content  <?php echo e(route('usere.store')); ?>

         <form class="form-horizontal" role="form" method="POST" action=<?php echo e(route('usere.store')); ?>> -->
                                
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Register </div>
                                        <div class="panel-body">
                                           
                                            <form data-toggle="validator" action="<?php echo e(route('usere.store')); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <input id="active" type="text" class="form-control hide" name="active" value="1">                                                                              
                                                 <?php echo $__env->make('users.popup._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                                <div class="form-group">
                                                    <div class="col-md-12 col-md-offset-1">
                                                        <button id="crud-submit" type="submit" class="btn btn-success">
                                                            Register Users
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                
        
      </div>
    </div>
    <!-- add code ends -->