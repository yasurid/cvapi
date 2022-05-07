<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;


class UsersController extends Controller{
	public function users()
    {
        return User::all();
    }
}