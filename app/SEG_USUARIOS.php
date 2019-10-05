<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Http\Middleware\Authenticate;


class SEG_USUARIOS extends Authenticate
{

    use Notifiable;
    protected $table = 'SEG_USUARIOS';

    protected $fillable = [
        'Nombre','email', 'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
