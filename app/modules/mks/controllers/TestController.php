<?php namespace App\Modules\Mks\Controllers;

use Controller, View;

class TestController extends \Controller{
	
	
	public function getIndex() {
        $data = 'test';
        return View::make('mks::index', [
            'data'=>$data,
        ]);
	}

}//class end