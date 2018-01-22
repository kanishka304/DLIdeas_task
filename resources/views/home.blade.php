@include('inc.header')

 <form method="POST" action="url{{('/update')}}">
<div class="container-fluid">


     
       {{csrf_field()}}



</div>



<div class="container">
  <h3 style="margin-top: 2%">List of all the Questions</h1>
 
  @if(session('info'))
   <div class="alert alert-success" style="margin-top: 2%">
    {{session('info')}}
     </div>
 @endif

 @if(isset($Message))
         <div class="alert alert-success">
            
             {{ $Message }}
         </div>
@endif
 

 
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

   @if(count($Questions) > 0)
      @foreach($Questions -> all() as $question)

    
    <tr>
      
      <td>{{ $question->id}}</td>
      <td>{{ $question->question}}</td>
      <td>{{ $question->answer_a}}</td>
       <td>{{ $question->answer_b}}</td>
      <td>{{ $question->answer_c}}</td>
      <td>{{ $question->answer_d}}</td>
      <td>{{ $question->correct_answer}}</td>
      <td>
        

        <a href='{{ url("/update/{$question ->id}")}}' class="btn btn-info" role="button">Add to Exam</a>
         
      


      </td>


    </tr>


    @endforeach
    @endif
   
  </tbody>
</table> 
    </div>
  
  </div>
</div>
</form>
@include('inc.footer')