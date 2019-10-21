<?php
namespace Amoungui\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{
    public function boot(){
        //loading the routes file
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //define the path for the view files
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        //define the path for the migrations files
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
        //defined the file which are going to be published
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/migrations/2019_10_21_051934_create_contacts_table.php' => base_path('database/migrations/2019_10_21_051934_create_contacts_table.php')
        ]);        
    }

    public function register(){
        
    }
}