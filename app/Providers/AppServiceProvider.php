<?php

namespace App\Providers;

use App\Repositories\Department\DepartmentRepository;
use App\Repositories\Department\EloquentDepartmentRepository;
use App\Repositories\Graduation\EloquentGraduationRepository;
use App\Repositories\Graduation\GraduationRepository;
use App\Repositories\ProdiQuota\EloquentProdiQuotaRepository;
use App\Repositories\ProdiQuota\ProdiQuotaRepository;
use App\Repositories\RegistrationSchedule\EloquentRegistrationSchedule;
use App\Repositories\RegistrationSchedule\RegistrationScheduleRepository;
use App\Repositories\StudyProgram\EloquentStudyProgramRepository;
use App\Repositories\StudyProgram\StudyProgramRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(DepartmentRepository::class, EloquentDepartmentRepository::class);
        $this->app->bind(StudyProgramRepository::class, EloquentStudyProgramRepository::class);
        $this->app->bind(RegistrationScheduleRepository::class, EloquentRegistrationSchedule::class);
        $this->app->bind(GraduationRepository::class, EloquentGraduationRepository::class);
        $this->app->bind(ProdiQuotaRepository::class, EloquentProdiQuotaRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
