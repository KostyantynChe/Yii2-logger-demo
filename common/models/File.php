<?php
namespace common\models;
Use yii\base\Model;

class File extends Model
{
public function send($message){
    // File write logic here
    echo "$message was sent via file<br>\n";
}
}