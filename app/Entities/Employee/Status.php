<?php

namespace App\Entities\Employee;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon as Carbon;

class Status extends Model
{
    /**
     * Mutator for `created_at` field
     *
     * @author u_mulder <m264695502@gmail.com>
     */
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at']);
    }
}
