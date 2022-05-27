<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\questions;
use GuzzleHttp\Psr7\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $questions;
    public function start()
    {
        return view('startpage');
    }
    public function started()
    {
        return view('question1');
    }
    public function q_1()
    {
        $ques = questions::all()->first();
        //dd($ques);
       // $id=$ques->q_id;
      //  dd($id);
        $questions=questions::select('question','option_1','option_2','option_3','option_4')->where('q_id',1)->get();


        dd($questions);



        return view('question1', compact('question','ques'));


    }
    public function q1()
    {
        $ques = questions::all();
        //$id=$ques->q_id;
        //dd($ques);
        $questions=questions::select('question','option_1','option_2','option_3','option_4')->where('q_id',1)->get();


      //  dd($questions);

        $count=0;
        if($count=0){
            echo"over";
        }
        else{
           // $questions=questions::select('question','option_1','option_2','option_3','option_4')->where('q_id',$id)->get();
        }
        return view('question1',compact('questions','ques'));
    }



}
