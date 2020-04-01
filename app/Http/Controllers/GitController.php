<?php

namespace App\Http\Controllers;

use App\Git;

class GitController extends Controller
{

    public function __construct()
    {
        //
    }

    public function selectAll(){
        $result = Git::all();
        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else{
            $data['code'] = 500;
            $data['result'] = 'error';
        }
        return response()->json($data);
    }

    public function store(){
        $result = Git::create([
            "user_id" => 20,
            "git" => 'https://github.com/Tensky/TugasIAI_432187_26Maret'
        ]);

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else{
            $data['code'] = 500;
            $data['result'] = "Error Happened";
        }
    }
}
