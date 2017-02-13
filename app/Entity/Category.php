<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //数据模型与数据表绑定 (表名)
    protected $table = 'category';

    //主键 默认是id
    protected $primaryKey = 'id';

    public $timestamps = false;

    private $aJiao = 'a jiao';

}
