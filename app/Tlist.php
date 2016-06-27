<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tlist extends Model
{


public function items() 

	{
		//any list we pass through item function  will return all items for that 
		//particular list
		return $this->hasMany(Item::class);
	}

	public function path()

	{

		return '/list/' . $this->id;
	}

	public function addItem(Item $item)
	{

		return $this->items()->save($item);

	}

	public function bye {

		return "bye";
	}



    
}
