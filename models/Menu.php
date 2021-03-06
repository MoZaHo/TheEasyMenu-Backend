<?php

namespace CoderSet\Models;

use Phalcon\Mvc\Model;

class Menu extends Model
{
		
	public $id;
	public $restaurant_id;
	public $name;


	public function getSource()
	{
		return "menu";
	}
	
	public function initialize() {
	
		$this->belongsTo(
				'restaurant_id',
				'\CoderSet\Models\Restaurant',
				'id',
				array(
						'alias' => 'Restaurant',
				));
		
		$this->hasMany(
				'id',
				'\CoderSet\Models\MenuItem',
				'menu_id',
				array(
						'alias' => 'MenuItem',
				));
		
	}
			
}