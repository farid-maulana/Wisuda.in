<?php

namespace App\Repositories\Graduation;

use App\Models\Graduation;

interface GraduationRepository
{
    public function getGraduations();
    public function storeGraduation($data);
    public function updateGraduation($data, Graduation $graduation);
    public function destroyGraduation(Graduation $graduation);
}
