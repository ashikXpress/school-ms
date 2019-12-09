<?php

namespace App\Providers;

use App\Http\View\ClassComposer;
use App\Http\View\EmployeeComposer;
use App\Http\View\ExamTermNameComposer;
use App\Http\View\SectionComposer;
use App\Http\View\SubjectComposer;
use App\Models\Employee;
use App\Models\ExaminationTerm;
use App\Models\Subject;
use App\Policies\EmployeePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(['attendance.*','payment.*'],EmployeeComposer::class);

        View::composer(['academic.*','attendance.*','syllabus.*','question.*'],ClassComposer::class);

        View::composer(['attendance.*','academic.*'],SectionComposer::class);

        View::composer(['syllabus.*','academic.*','question.*'],SubjectComposer::class);

        View::composer(['syllabus.*','exam.*','question.*'],ExamTermNameComposer::class);
    }
}
