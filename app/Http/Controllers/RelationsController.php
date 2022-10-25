<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\roles;

class RelationsController extends Controller
{
    public function index()
    {
    	$users = User::get();
    	return view('/components/pages/pengguna', ['user' => $users]);
    }
}
