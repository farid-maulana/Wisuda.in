<?php

namespace App\Repositories\ProdiQuota;

use App\Models\ProdiQuota;

class EloquentProdiQuotaRepository implements ProdiQuotaRepository
{
    public function storeProdiQuota($data)
    {
        ProdiQuota::create($data);
    }
}
