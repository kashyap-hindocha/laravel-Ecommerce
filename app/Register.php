<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";
    protected $fillable = ['fnm'];
    protected $fillable1 = ['lnm'];
    protected $fillable2 = ['email'];
    protected $fillable3 = ['mno'];
    protected $fillable4 = ['gender'];
    protected $fillable5 = ['address'];
    protected $fillable6 = ['city'];
    protected $fillable7 = ['pin_code'];
    protected $fillable8 = ['state'];
    protected $fillable9 = ['country'];
    protected $fillable10 = ['uname'];
    protected $fillable11 = ['password'];
}
