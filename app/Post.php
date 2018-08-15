<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Post extends Model
{
	
    use SoftDeletes;

    public function category ()
    {
    	return $this->belongsTo('App\Category');
    }




    public function tags ()
    {
    	return $this->belongsToMany('App\Tag');
    }



    public function comments ()
    {
    	return $this->hasMany('App\Comment');
    }

    

}



// class Carbon extends \DateTime 
// {

//  public function carbon() {

//  $dt= Carbon::now('Africa/Nigeria');




//  }



// }