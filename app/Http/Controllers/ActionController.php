<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Messages\Telegram;

class ActionController extends Controller
{
    public $telegram;
    public function __construct(){
        $this->telegram = new Telegram();
    }
    public function send(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:255',
            'phone' => 'required|min:11|max:16'
        ],[
            'name.required' => 'Имя обязательно для заполнения',
            'name.min' => 'Имя не может быть короче 3 символов', 
            'name.max' => 'Имя не может превышать 255 символов',
            'phone.required' => 'Номер телефона обязателен для заполнения',
            'phone.min' => 'Номер не может быть меньше 11 цифр',
            'phone.max' => 'Номер не может быть больше 12 цифр'
        ]);
        if ($validator->fails()){
            echo json_encode($validator->errors(), JSON_UNESCAPED_UNICODE);
        } else {
            $this->telegram->send($request->all());
        }
    }
}
