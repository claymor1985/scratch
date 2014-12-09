<?php namespace App\Modules\Mks;
 
class ServiceProvider extends \App\Modules\ServiceProvider {
 
    public function register()
    {
        parent::register('mks');
    }
 
    public function boot()
    {
        parent::boot('mks');
    }
 
}