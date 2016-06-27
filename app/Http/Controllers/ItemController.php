<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemController extends Controller
{
    public function store(Request $request, Fist $fist)
	{



		$fist->addItem( new Item($request->all()));
		

		return back();
	
	}

	public function edit(Item $item)
	{


	return view('item.edit',compact('item'));

	}

	public function update(Request $request, Item $item)
	{


		$item->update($request->all());

		return back();

	}
}
