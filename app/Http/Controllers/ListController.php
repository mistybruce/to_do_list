<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListController extends Controller
{
    public function index()
	{


//fetching data≈
	$lists = List::all();
	return view('fists.index', compact('fists'));


	}

	//show function reelates to ROUTES
	public function show(List $list){

		return view('fists.show',compact('fist'));
		// $card = Card::find($id);

		// return view('cards.show', compact('card'));

	}
}
