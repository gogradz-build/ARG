<?php
namespace Modules\Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Shop\Repositories\Interfaces\ShopRepositoryInterface;
use Modules\Shop\Repositories\ShopRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
    
        $this->app->bind(ShopRepositoryInterface::class, ShopRepository::class);   
        

    }

    public function boot()
    {
        
    }
}

