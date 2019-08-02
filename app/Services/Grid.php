<?php 
namespace App\Services;
/**
 * Grid class genarae table data
 */
class Grid
{
	public static function table($model,$limit = 15){
		$query = $model->orderBy('id','DESC');
		$request = request()->all();
		
		$appends = [];
		
		if ($request) {
		 	foreach ($request as $key => $value) {
		 		if ($value && $key != 'page' ) {
					array_push($appends,$key);
		 			$query = $query->where($key,'LIKE','%'.$value.'%');
		 		}
		 	}
		}

        $data = $query->paginate($limit);
		$columns = $model->grid_column;
		return view('table',compact('columns','data','appends'));
	}
}
 ?>