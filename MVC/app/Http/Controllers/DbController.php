<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Messages;

class DbController extends Controller
{
    public function index()
	{
 
	}
	    public function displayallmsj()
	{
 			$messages = DB::select('select * from messages');

        	return View('db-all-msj', compact('messages'));
	}

		    public function displayonemsj()
	{
 			$messages = DB::select('select * from messages');

        	return View('db-one-msj', compact('messages'));
	}

			public function displaytenlastmsj()
	{
 			$messages = Messages::orderBy('id', 'DESC')->take(10)->get();

        	return View('db-ten-last-msj', compact('messages'));
	}

		    public function display20firstmsj()
	{
 			$messages = Messages::orderBy('id')->take(20)->get();

        	return View('db-ten-last-msj', compact('messages'));
	}

	     	public function showidofallmsj()
    {
        	$messages =  Messages::orderBy('id')->get();
            return view('id-of-all-msj', ['messages' => $messages]);
    }

    		public function showmsjofcibledid($id)
    {
        	$messages = Messages::find($id);
			echo $messages->contenu_messages;


    } 
}


