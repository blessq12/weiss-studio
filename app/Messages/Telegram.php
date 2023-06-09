<?php
namespace App\Messages;

class Telegram{
    private $token;
    private $chat_id;
    private $url;

    public function __construct(){
        $this->token = env('TELEGRAM_TOKEN');
        $this->chat_id = env('TELEGRAM_CHAT_ID');
        $this->url = "https://api.telegram.org/bot". $this->token ."/sendMessage?chat_id=".$this->chat_id."&text=";
    }

    public function send($request){
        $msg = '📔Получена заявка с сайта:' ."\n\n";
        $keys = [];
        foreach ($request as $k=>$v){
            switch ($k){
                case 'name' : $title = 'Имя: ';
                break;
                case 'phone' : $title = 'Телефон: ';
                break;
                case 'service_name' : $title = 'Услуга: ';
                break;
                case 'service_price' : $title = 'Стоимость: ';
                break;
                case 'service_qty' : $title = 'Процедур: ';
                break;
            }
            $msg .= $title . $v ."\n";
        }
        if(file_get_contents($this->url.urlencode($msg))){
            echo 'order send';
        };
    }
}