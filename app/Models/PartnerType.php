<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PartnerType extends Model
{
    public function partners() : HasMany
    {
        return $this->hasMany(Partner::class);
    }
}
