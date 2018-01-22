<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <form method="POST" action="url<?php echo e(('/update')); ?>">
<div class="container-fluid">


     
       <?php echo e(csrf_field()); ?>




</div>



<div class="container">
  <h3 style="margin-top: 2%">List of all the Questions</h1>
 
  <?php if(session('info')): ?>
   <div class="alert alert-success" style="margin-top: 2%">
    <?php echo e(session('info')); ?>

     </div>
 <?php endif; ?>

 <?php if(isset($Message)): ?>
         <div class="alert alert-success">
            
             <?php echo e($Message); ?>

         </div>
<?php endif; ?>
 

 
  <div class="row" style="margin-top:2%">
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
      <th scope="col">Correct Answer</th>
      <th scope="col" style="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>

   <?php if(count($Questions) > 0): ?>
      <?php $__currentLoopData = $Questions -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    
    <tr>
      
      <td><?php echo e($question->id); ?></td>
      <td><?php echo e($question->question); ?></td>
      <td><?php echo e($question->answer_a); ?></td>
       <td><?php echo e($question->answer_b); ?></td>
      <td><?php echo e($question->answer_c); ?></td>
      <td><?php echo e($question->answer_d); ?></td>
      <td><?php echo e($question->correct_answer); ?></td>
      <td>
        

        <a href='<?php echo e(url("/update/{$question ->id}")); ?>' class="btn btn-info" role="button">Add to Exam</a>
         
      


      </td>


    </tr>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
   
  </tbody>
</table> 
    </div>
  
  </div>
</div>
</form>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>