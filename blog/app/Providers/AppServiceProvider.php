<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
           $event->menu->add('Menu Add');
           $event->menu->add([
              'text'=>'Add Category',
              'url'=>'/admin/category/create',
           ]);
            $event->menu->add([
                'text'=>'Add News',
                'url'=>'/admin/news/create',
            ]);
            $event->menu->add([
                'text'=>'Add Comment',
                'url'=>'/admin/comments/create',
            ]);
            $event->menu->add('Browse pages');
            $event->menu->add([
                'text'=>'Category',
                'url'=>'/admin/category',
            ]);
            $event->menu->add([
                'text'=>'News',
                'url'=>'/admin/news',
            ]);
            $event->menu->add('Users and their Roles');
            $event->menu->add([
                'text'=>'UserRole',
                'url'=>'/admin/user',
            ]);

        });
    }
}
