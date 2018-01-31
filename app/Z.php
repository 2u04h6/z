<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Z extends Model
{
    //連接指定表
    //Protected $table ='tests';
    
    //停用兩個時間欄位
    //public $timestamps=false;

    protected $primaryKey='nam';

    //除預設兩個時間欄位，若不是用$z=new Z();(裡面不能有[])就需要用以下
    protected $fillable = [
        'idd', 'nam'
    ];
}
