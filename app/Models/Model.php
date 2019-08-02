<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EModel;
/**
 * 
 */
class Model extends EModel
{
	
	public function getAllAttributes()
	{
	    $columns = $this->getFillable();
	    // Another option is to get all columns for the table like so:
	    // $columns = \Schema::getColumnListing($this->table);
	    // but it's safer to just get the fillable fields

	    $attributes = $this->getAttributes();

	    foreach ($columns as $column)
	    {
	        if (!array_key_exists($column, $attributes))
	        {
	            $attributes[$column] = null;
	        }
	    }
	    return $attributes;
	}
}

 ?>