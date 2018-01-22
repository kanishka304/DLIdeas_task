<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container-fluid">
  <h3 style="margin-top: 2%">Create Fill in the Blanks Question</h1>



    <form method="POST" action="url<?php echo e(('/insertfitb')); ?>">
       <?php echo e(csrf_field()); ?>


       <?php if(count($errors) > 0): ?>
      <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger">
          
          <?php echo e($error); ?>

        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>


  <div class="row" style="margin-top: 2%">
  <div class="col-sm-4"><div class="form-group">
      <label for="exampleInputsubject">Subject Name:</label>
      <input type="text" name="subject_name" class="form-control" aria-describedby="emailHelp" placeholder="English">
    </div></div>
  <div class="col-sm-4">  <div class="form-group">
      <label for="exampleInputtopic">Topic Name:</label>
      <input type="text" name="topic_name" class="form-control" aria-describedby="emailHelp" placeholder="Grammer">
    </div></div>
  <div class="col-sm-4"><div class="form-group">
      <label for="exampleSelect1">Level</label>
      <select class="form-control" id="exampleSelect1" name="level_name">
        <option>Basic</option>
        <option>Intermediate</option>
        <option>Advance</option>
      </select>
    </div></div>

  </div>



<div class="row">
  <div class="col-sm-8">  <div class="form-group">
      <label for="exampleTextarea">Question</label>
      <textarea class="form-control" name="question" id="exampleTextarea" rows="4" ></textarea>
    </div></div>
</div>



<div class="row" style="margin-bottom: 5%">
<div class="col-sm-4"><div class="form-group">
      <label for="exampleInputtopic">Correct Answer :</label>
      <input type="text" name="correct_ans" class="form-control"  placeholder="expected answer">
    </div></div>


    <div class="col-sm-4"><button type="submit" class="btn btn-primary" style="margin-top: 9%">Submit</button></div>



</div>





 





    </form>




<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>