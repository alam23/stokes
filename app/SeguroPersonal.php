<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeguroPersonal extends Model
{
    protected $fillable = [
        'user_id',
        'tipo',
        'fecha_pago',
        'monto_pago',
        'familia_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function segurofamiliar()
    {
        return $this->belongsTo(SeguroFamiliar::class);
    }
}
