<?php
   
namespace espl\ipblocker;
use Illuminate\Support\ServiceProvider;
class IpBlockerServiceProvider extends ServiceProvider {
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {

  	}
}
?>