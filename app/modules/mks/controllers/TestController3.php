<?php namespace Modules\Mks\Controllers;

use Controller, View;

class TestController3 extends \Controller{


    public function getIndex() {
        $data = 'test3';
        return View::make('mks::index', [
            'data'=>$data,
        ]);
    }

}//class end