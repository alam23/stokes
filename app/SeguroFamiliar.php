<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeguroFamiliar extends Model
{
    protected $fillable = [
        'num_miembros'
    ];

    public function seguropersonals()
    {
        return $this->hasMany(SeguroPersonal::class);
    }
}
