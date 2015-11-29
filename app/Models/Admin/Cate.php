<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;


class Cate extends Model
{

    protected $table = 'cate';


    protected $guarded = ['id'];



//    public function parent()
//    {
//        return $this->belongsTo('App\Models\Admin\Cate', 'pid');
//    }

    public function children()
    {
        return $this->hasMany('App\Models\Admin\Cate', 'pid')->orderBy('sort');

    }







}
