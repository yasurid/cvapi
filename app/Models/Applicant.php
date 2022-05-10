<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Applicant extends Model
{
    use Notifiable;

    protected $fillable = ['applicantName','address','contactNo','email','user_id'];

    //use HasFactory;
}
