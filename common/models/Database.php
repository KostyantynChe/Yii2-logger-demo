<?php
namespace common\models;
Use yii\base\Model;

class Database extends Model
{
public function send($message){
    // File write logic here
    echo "$message was sent via DB <br>\n";
}
}