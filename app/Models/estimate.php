<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estimate extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name','last_name','email','phone','needs','address','address1','country','city','service','business','post'
        ];
}
