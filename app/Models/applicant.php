<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class applicant extends Model
{
    use Notifiable;

    protected $fillable = ['applicantName','address','dateofbirth','contactNo','email','userId'];
   
    //use HasFactory;
}
