<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    protected $fillable = ['subdomain','title','description'];
	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function findBySubdomain($subdomain)
    {
        ;
    }

}
