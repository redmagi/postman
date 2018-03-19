<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseOwner extends Model {
	protected $primaryKey = 'house_id';
	protected $table = 'house_owner';
}
