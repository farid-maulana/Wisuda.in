<?php

namespace App\Repositories\RegistrationSchedule;

interface RegistrationScheduleRepository
{
    public function storeRegistrationSchedule($data);
    public function updateRegistrationSchedule($data);
    public function destroyRegistrationScedule($data);
}
