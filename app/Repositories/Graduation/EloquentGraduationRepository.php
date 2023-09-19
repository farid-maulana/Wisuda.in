<?php

namespace App\Repositories\Graduation;

use App\Models\Graduation;

class EloquentGraduationRepository implements GraduationRepository
{
    public function getGraduations()
    {
        return Graduation::orderByDesc('schedule')->get();
    }

    public function storeGraduation($data)
    {
        Graduation::create($data);
    }

    public function updateGraduation($data, Graduation $graduation)
    {
        // TODO: Implement updateGraduation() method.
    }

    public function destroyGraduation(Graduation $graduation)
    {
        // TODO: Implement destroyGraduation() method.
    }
}
