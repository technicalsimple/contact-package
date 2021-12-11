<?php

namespace technicalsimple\Contact;
use Carbon\Laravel\ServiceProvider;

class ContactServiceProvider extends  ServiceProvider
{
    public function register()
    {
      //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');        
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views' => resource_path('views/vendor/contact'),
            __DIR__.'/Http/Controllers/ContactController.php' => app_path('Http/Controllers/ContactController.php'),
        ]);
    }
}
