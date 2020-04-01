<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function generateGanjil(){
        $arrayGanjil = array();
        for($i=1; $i<100; $i+=2){
            $arrayGanjil[$i/2] = $i;
        }
        $data['code'] = 200;
        $data['result'] = $arrayGanjil;
        return response()->json($data);
    }
}
