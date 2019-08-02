<?php 
namespace App\Services;

/**
 * 
 */
class MyApp extends \Illuminate\Foundation\Application
{
	
	public function langPath() {
        return $this->basePath.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'lang';
    }
}

 ?>