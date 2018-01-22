<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <form method="POST" action="url<?php echo e(('/sessionexam')); ?>">
     <?php echo e(csrf_field()); ?>

<div class="container-fluid">

   


  <h3 style="margin-top:2%">Create Assignment</h1>

     <?php if(session('info')): ?>
   <div class="alert alert-success" style="margin-top: 2%">
    <?php echo e(session('info')); ?>

     </div>
 <?php endif; ?>
 
  <div class="row">
    <div class="col">
      
     
     
  <fieldset>
   
 
   

     <div class="form-group" style="margin-top: 1%">
      <label for="exampleInputtopic">Assignment Name:</label>
      <input type="text" name="assg_name"  class="form-control" style="width: 25%; margin-top: 1%" aria-describedby="emailHelp" placeholder="Grammer">
    </div>


  <button type="submit" style="margin-bottom: 5%; margin-top: 1%" class="btn btn-primary">Create Assignment</button>
   
  </fieldset>


    </div>
    
  </div>
</div>
</form>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>