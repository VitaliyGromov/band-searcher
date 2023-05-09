<?php

namespace App\Providers;

use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('components.skills', function($view){
            $view->with('skills', Skill::all());
        });

        View::composer('components.experience-list', function($view){
            $view->with('experience', Experience::all());
        });
    }
}
