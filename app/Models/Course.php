<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course', 'start', 'end', 'description', 'price'];

	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	
}
