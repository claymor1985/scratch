<?php namespace Modules\Mks\Controllers;

use Controller, View;

class TestController33 extends \Controller{


    public function getIndex() {
        $data = 'test33333';
        return View::make('Mks::index', [
            'data'=>$data,
        ]);
    }

}//class end