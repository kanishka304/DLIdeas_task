<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questionlist;
use App\assigment;

class CreatesController extends Controller
{
    


    //Home Page Creation
    public function createsession(){

     
        Return view('homesession');
    }


    //Question Bank Creation
    public function home(Request $request){

        $datas = $request -> input('assg_name');

        $request->session()->put('key', $datas);

    	//using the model we retrive data
    	$Questions = Questionlist::all();
    	Return view('home' , ['Questions' => $Questions]);



    }

 

























    public function add(Request $request){

    	$this -> validate($request,[

    			'subject_name' => 'required'


    	]);
    		//object of the model
    		$qtype = "MCQ";

    		$Questions = new Questionlist;
    		$Questions -> subject = $request -> input('subject_name');
    		$Questions -> topic = $request -> input('topic_name');
    		$Questions -> level = $request -> input('level_name');
    		$Questions -> type = $qtype;
    		$Questions -> question = $request -> input('question');
    		$Questions -> answer_a = $request -> input('answer1');
    		$Questions -> answer_b = $request -> input('answer2');
    		$Questions -> answer_c = $request -> input('answer3');
    		$Questions -> answer_d = $request -> input('answer4');
    		$Questions -> correct_answer = $request -> input('correct_ans');
    		$Questions -> save();					

    		return redirect('/') -> with('info','Question saved');

    }


     public function addfitb(Request $request){

        $this -> validate($request,[

                'subject_name' => 'required'


        ]);
            //object of the model
            $qtype = "FITB";
            $na = "N/A";

            $Questions = new Questionlist;
            $Questions -> subject = $request -> input('subject_name');
            $Questions -> topic = $request -> input('topic_name');
            $Questions -> level = $request -> input('level_name');
            $Questions -> type = $qtype;
            $Questions -> question = $request -> input('question');
            $Questions -> answer_a = $na;
            $Questions -> answer_b = $na;
            $Questions -> answer_c = $na;
            $Questions -> answer_d = $na;
            $Questions -> correct_answer = $request -> input('correct_ans');
            $Questions -> save();                   

            return redirect('/') -> with('info','Question saved');

    }

     public function update(Request $request, $id){

        //object of the model
            
        

           $value = $request->session()->get('key');

            $c_assigment = new assigment;
            $c_assigment -> assigment_name = $value;
            $c_assigment -> question_id = $id;
            $c_assigment -> save();   

            $Questions = Questionlist::all();
            Return view('home' , ['Questions' => $Questions, 'Message' => 'Question added']);

            }
}
