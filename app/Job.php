<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

	protected $fillable = ['title', 'desc', 'location', 'salary_min', 'salary_max', 'category_id', 'user_id'];

    public function user(){ 
        return $this->belongsTo('App\User'); 
    }
}
