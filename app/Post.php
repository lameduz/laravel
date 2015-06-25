<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['title','body','image'];

	public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
