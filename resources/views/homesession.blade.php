@include('inc.header')

 <form method="POST" action="url{{('/sessionexam')}}">
     {{csrf_field()}}
<div class="container-fluid">

   


  <h3 style="margin-top:2%">Create Assignment</h1>

     @if(session('info'))
   <div class="alert alert-success" style="margin-top: 2%">
    {{session('info')}}
     </div>
 @endif
 
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
@include('inc.footer')