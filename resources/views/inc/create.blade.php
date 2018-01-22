@include('inc.header')

<div class="container-fluid">
  <h3 style="margin-top: 2%">Create MCQ Question</h1>



    <form method="POST" action="url{{('/insert')}}">
       {{csrf_field()}}

       @if(count($errors) > 0)
      @foreach($errors -> all() as $error)
        <div class="alert alert-danger">
          
          {{$error}}
        </div>
      @endforeach
  @endif


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
  <div class="col-sm-6">  <div class="form-group">
      <label for="exampleTextarea">Question</label>
      <textarea class="form-control" name="question" id="exampleTextarea" rows="3" ></textarea>
    </div></div>
</div>


<div class="row">
  <div class="col-sm-6"> <div class="form-group">
      <label for="exampleInputtopic">A.</label>
      <input type="text" name="answer1" class="form-control" aria-describedby="emailHelp" placeholder="answer">
    </div></div>
  <div class="col-sm-6">   <div class="form-group">
      <label for="exampleInputtopic">B.</label>
      <input type="text" name="answer2" class="form-control" aria-describedby="emailHelp" placeholder="answer">
    </div></div>
</div>


<div class="row">
  <div class="col-sm-6"> <div class="form-group">
      <label for="exampleInputtopic">C.</label>
      <input type="text" name="answer3" class="form-control" aria-describedby="emailHelp" placeholder="answer">
    </div></div>
<div class="col-sm-6"> <div class="form-group">
      <label for="exampleInputtopic">D.</label>
      <input type="text" name="answer4" class="form-control" aria-describedby="emailHelp" placeholder="answer">
    </div></div>
</div>



<div class="row" style="margin-bottom: 5%">
<div class="col-sm-4"><div class="form-group">
      <label for="exampleSelect1">Correct Answer :</label>
      <select class="form-control" id="exampleSelect1" name="correct_ans" >
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
    </div></div>


    <div class="col-sm-4"><button type="submit" class="btn btn-primary" style="margin-top: 9%">Submit</button></div>



</div>





 





    </form>




@include('inc.footer')