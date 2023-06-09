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
        $msg = '';
        foreach ($request as $k=>$v){
            $msg .= $v ."\n";
        }
        echo urlencode($msg);
        file_get_contents($this->url.urlencode($msg));
    }
}