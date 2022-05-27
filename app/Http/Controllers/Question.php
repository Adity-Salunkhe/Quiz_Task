<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\record;
use App\Models\questions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Question extends Controller
{
    protected $primaryKey = 'q_id';

    public function add(Request $request){
        $validate=$request->validate([
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'ans' => 'required',

        ]);
        $q=new questions();
        $q->question=$request->question;
        $q->option_1=$request->option_1;
        $q->option_2=$request->option_2;
        $q->option_3=$request->option_3;
        $q->option_4=$request->option_4;
        $q->answer=$request->ans;

        $q->save();
        Session::put('successMessage',"Question Added Successfully");

        return redirect('questions');

    }

    public function show(){
        $q=questions::all();
        return view('questions')->with(['questions'=>$q]);

    }
    public function update(Request $request){
        $validate=$request->validate([
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'ans' => 'required',
            'q_id'=>'required',

        ]);


        $q=questions::find($request->q_id);

        $q->question=$request->question;
        $q->option_1=$request->option_1;
        $q->option_2=$request->option_2;
        $q->option_3=$request->option_3;
        $q->option_4=$request->option_4;
        $q->answer=$request->ans;

        $q->save();
        Session::put('successMessage',"Question Updated Successfully");

        return redirect('questions');

    }
    public function delete(Request $request){
        $validate=$request->validate([

            'q_id'=>'required',

        ]);
        questions::where('q_id'.$request->q_id)->delete();
        Session::put('successMessage',"Question Updated Successfully");

        return redirect('questions');
    }
    public function startquiz(Request $request){

        $a=$request->email;


         session()->put('email',$a);
            Session::put("nextq",'1');
            Session::put("wrongans",'0');
            Session::put("correctans",'0');
            $q=questions::all()->first();

            return view('display')->with(['questions'=>$q]);
    }
    public function submitans(Request $request){

        $nextq= Session::get('nextq');
       // dd($nextq);
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        $email=$request->session()->get('email');

        $validate=$request->validate([

            'dbans' => 'required',
            'ans' => 'required',



        ]);

        $a=$request->time001;
        $var=200;
        $var=$var-1;
                if(  $var<200){
                    $a=$var;
                }
                if($var<1){

                }

       $nextq+=1;


        if($request->dbans==$request->ans){
            $correctans+=1;
        }
        else{
            $wrongans+=1;
        }
        Session::put("nextq", $nextq);
        Session::put("wrongans",$wrongans);
        Session::put("correctans",$correctans);

        $i=0;
        $questions=questions::all();



        foreach ($questions as $questions)
        {
            $i++;
            if($questions->count() < $nextq){
                $records=new record();

                $records->email=$email;
                $records->correctans=$correctans;
                $records->wrongans=$wrongans;
                $records->total=$correctans;

                $records->save();
                return view('endpage');
            }
            elseif($i==$nextq){

                return view('display')->with(['questions'=>$questions]);

            }
        }


    }
    public function previous(Request $request){

        $nextq= Session::get('nextq');

       // dd($nextq);
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        // $validate=$request->validate([

        //     'dbans' => 'required',
        //     'ans' => 'required',


        // ]);
        //dd($correctans);



        $nextq-=1;

        if($request->dbans==$request->ans){
            $correctans+=1;
        }
        else{
            $wrongans+=1;
        }
        Session::put("nextq", $nextq);
        Session::put("wrongans",$wrongans);
        Session::put("correctans",$correctans);

        $i=0;
        $questions=questions::all();

        foreach ($questions as $questions)
        {
            $i--;
            if($questions->count() < $nextq){
                return view('endpage');
            }
            elseif($i==$nextq){
                return view('display')->with(['questions'=>$questions]);

            }

        }

    }
    public function main(Request $request){
        return view('mainpage');

    }
    public function result(Request $request){


        $nextq= Session::get('nextq');
        // dd($nextq);
         $wrongans=Session::get('wrongans');
         $correctans=Session::get('correctans');
         $email=$request->session()->get('email');
        $records=new record();

        $records->email=$email;
        $records->correctans=$correctans;
        $records->wrongans=$wrongans;
        $records->total=$correctans;

        $records->save();
        return view('endpage');
    }
}
