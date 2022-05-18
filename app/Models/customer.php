<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class customer extends Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;
    protected $fillable = [
        'nama_lengkap',
        'no_hp',
        'alamat_lengkap',
        'email',
        'password'
    ];

    // public function getAuthIdentifierName()
    // {
    //     # code...
    // }
    // public function getAuthIdentifier()
    // {
    //     # code...
    // }
    // public function getAuthPassword()
    // {
    //     # code...
    // }
    // public function getRememberToken()
    // {
    //     # code...
    // }
    // public function setRememberToken()
    // {
    //     # code...
    // }
    // public function getRememberTokenName()
    // {
    //     # code...
    // }
}
