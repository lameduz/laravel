<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    protected $fillable = ['birthdate','sexe'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
