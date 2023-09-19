<?php

namespace App\Repositories\RegistrationSchedule;

use App\Models\GraduationRegistrationSchedule;

class EloquentRegistrationSchedule implements RegistrationScheduleRepository
{
    public function storeRegistrationSchedule($data)
    {
        return GraduationRegistrationSchedule::create($data);
    }

    public function updateRegistrationSchedule($data)
    {
        // TODO: Implement updateRegistrationSchedule() method.
    }

    public function destroyRegistrationScedule($data)
    {
        // TODO: Implement destroyRegistrationScedule() method.
    }
}
