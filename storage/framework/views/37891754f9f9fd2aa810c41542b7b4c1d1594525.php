<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container-fluid">
  <h1>Create Question</h1>

  <div class="row">
    <div class="col">
      
      <form method="POST" action="url<?php echo e(('')); ?>">
       <?php echo e(csrf_field()); ?>

  <fieldset>
   
 
    <div class="form-group">
      <label for="exampleInputsubject">Assigment ID:</label>
      <input type="text" name="subject_name" class="form-control" style="width: 25%" aria-describedby="emailHelp" placeholder="English">
    </div>

     <div class="form-group">
      <label for="exampleInputtopic">Assigment Name:</label>
      <input type="text" name="topic_name" class="form-control" style="width: 25%" aria-describedby="emailHelp" placeholder="Grammer">
    </div>

  </fieldset>
</form>

    </div>
    
  </div>
</div>

<div class="container">
  <h1>List of all the Questions</h1>
 
 
   <?php if(session('info')): ?>
   <div class="alert alert-success">
    <?php echo e(session('info')); ?>

     </div>
 <?php endif; ?>

 
  <div class="row">
    <div class="col">
      
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Question</th>
      <th scope="col">Answer A</th>
      <th scope="col">Answer B</th>
      <th scope="col">Answer C</th>
      <th scope="col">Answer D</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

   <?php if(count($Questions) > 0): ?>
      <?php $__currentLoopData = $Questions -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"></th>
      <td><?php echo e($question->id); ?></td>
      <td><?php echo e($question->question); ?></td>
      <td><?php echo e($question->answer_a); ?></td>
       <td><?php echo e($question->answer_b); ?></td>
      <td><?php echo e($question->answer_c); ?></td>
      <td><?php echo e($question->answer_d); ?></td>
      <td><?php echo e($question->correct_answer); ?></td>
      <td>
        
        <a href='<?php echo e(url("/update/{$question ->id}")); ?>' class="btn btn-info" role="button">Read</a>
         <a href="<?php echo e(''); ?>" class="btn btn-success" role="button">Update</a>
          <a href="<?php echo e(''); ?>" class="btn btn-warning" role="button">Delete</a>


      </td>


    </tr>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
   
  </tbody>
</table> 
    </div>
  
  </div>
</div>

<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>