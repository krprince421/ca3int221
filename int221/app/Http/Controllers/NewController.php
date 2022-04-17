<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response ;
use DB ;
class NewController extends Controller
{
    //
    public function result( Request $request ){
        $array = array( -1 ,-1 ,-1 ,-1 ,-1 ,-1 ,-1 ,-1 ,-1 ,-1 , -1  );
        $array[1] = $_POST['question1'] ;
        $array[2]= $_POST['question2'] ;
        $array[3] = $_POST['question3'] ;
        $array[4] = $_POST['question4'] ;
        $array[5] = $_POST['question5'] ;
        $array[6]= $_POST['question6'] ;
        $array[7] = $_POST['question7'] ;
        $array[8] = $_POST['question8'] ;
        $array[9] = $_POST['question9'] ;
        $array[10] = $_POST['question10'] ;


        $count = 0 ;
        $questionNumber = 1 ;

        $val = DB::select('select solution from htmlsolution');

        foreach($val as $val_solution) {
            //echo $val_solution->solution. " " . $array[$questionNumber] ;
            if( $array[$questionNumber] == $val_solution->solution )$count++ ;
            $questionNumber++ ;
        };


        //return DB::select('select * from htmlsolution');
        //return view('stud_view',['users'=>$users]);

       echo "<h1>You solved  ".$count." questions Correctly </h1>" ;


    }
}
