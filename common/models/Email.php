<?php
namespace common\models;
Use yii\base\Model;

class Email extends Model
{
public function send($message){
    // File write logic here
    echo "$message was sent via Email<br>\n";
}
}