<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;
use App\User;

class UsersController extends Controller{

	public function index(){

		$user= User::all();
		return response($user);
		// if (Sentinel::check()) {
		// 	return response()->json([
		// 'user' =>[
		// 		'firstname' =>'philip',
		// 		'middlename' =>'Mwangangi',
		// 		'lastname' =>'kioko',
		// ]

		// ]);
		// }else{
		// 	return "none";
		// }
		
	}

	public function register(Request $request){
		return $request->all();
	}
   
}