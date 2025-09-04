<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Menus;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        $menus = Menu::with('child')->where('induk', 0)->where('status', '1')->orderBy('urutan', 'ASC')->get();

        $berita = Post::where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->limit(4)
            ->get();

        view()->composer('includes.*', function ($view) use ($menus, $berita) {
            $view->with('menus', $menus);
            $view->with('berita', $berita);
        });
    }
}
