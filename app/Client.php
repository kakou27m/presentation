<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

use App\Http\Middleware\Authenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
class Client extends Authenticatable
{
    // use Notifiable;

    protected $fillable = ['lname','fname','phone','email','password','home','city'];

    public function orders ()
    {
        return $this->hasMany('App\Order');
    }
}
