<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function pokemon(Request $request){
        $request = [
            'header' => [
                'Authorization'=>'key=AIzaSyBmk83mqUrGNuMGURMQV35eD-WZD92oEJw',
                'Content-Type'=> 'application/json'
            ],
            'json' => [
                'to' => 'c4l87VS_pVg:APA91bGRZJId6v6Bw3SnBqb6xcxWE0je93dbC5vfsWO2vYLz5ggzMUA_yyW2V6VGYT82r5KWv8vyhQwf2CAzZlg6Dyc_Tpodk3Vj7l_D4EeU_kGSsgfr2oLFdXxHMiYrdLoFvCboaxDl', //single token
                'notification' => [
                    'title' => 'bebek',
                    'body' => 'ini bebek',
                    'sound' => true,
                    'image' => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/220px-White_domesticated_duck%2C_stretching.jpg",
                    'picture' => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/220px-White_domesticated_duck%2C_stretching.jpg"
                ]
            ]
        ];

        $result = guzzle(ENV('FCM_URL'),'send','POST',$request);
        return $result;
    }
}
