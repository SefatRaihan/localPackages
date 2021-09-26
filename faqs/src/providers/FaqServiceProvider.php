<?php
namespace Faq_project\Faqs\Providers;
use Faq_project\Faqs\Faqs;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class FaqServiceProvider extends ServiceProvider{

    public function register(){
        $this->registerRoutes();
        $this->app->bind('faqs', function ($app) {
            return new Faqs();
        });

    }
    public function boot(){
        $this->faqsView();
        $this->migration();
        $this->publishAsset();
        Route::middlewareGroup('session_message', ['web', \Illuminate\View\Middleware\ShareErrorsFromSession::class]);
    }


    public function faqsView(){

        $this->loadViewsFrom(__DIR__.'/../views', 'faqViewPage');

    }

    public function migration(){
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
    
    public function publishAsset(){
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/faqs'),
        ], 'public');
    }
    

   
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
    private function routeConfiguration()
    {
        return [
            'middleware' => 'session_message'
        ];
    }

}