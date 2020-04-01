<?php

namespace App\Http\Controllers;

use App\User;
use Dotenv\Result\Result;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function selectAll(){
        $result = User::all();
        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else{
            $data['code'] = 500;
            $data['result'] = 'error';
        }
        return response()->json($data);
    }

    public function edit(){
        $result = User::where('id', 20)->first();
        $result->hobi = 'Rebahan';
        $result->asal = 'Indonesia';

        if($result->save()){
            $data['code'] = 200;
            $data['result'] = $result;
        }else{
            $data['code'] = 500;
            $data['result'] = 'error';
        }

        return response($data);
    }



    public function gantiPassword(){
        $result = User::where('id', 20)->first();
        $result->password = Crypt::encrypt('passwordwinston');
        if($result->save()){
            $data['code'] = 200;
            $data['result'] = $result;
        }else{
            $data['code'] = 500;
            $data['result'] = 'error';
        }

        return response($data);
    }

}
