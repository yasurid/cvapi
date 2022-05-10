<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Jobs extends Model
{
    use Notifiable;

    protected $fillable = ['Title'];

    //use HasFactory;
}
