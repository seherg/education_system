<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function sendResponse($result, $message)
    {
        $response = [
            'data' => $result,
            'success'=>true,
            'message'=>$message,
        ];

        return response()->json($response, 200);
    }


    public function sendError($error, $errorMessages=[]){
        $response=[
            'data'=>null,
            'success'=>false,
            'message'=>$error,
        ];

        if(!empty($errorMessages)){
            $response['message']=$errorMessages;
        }

        return response()->json($response);
    }
}
