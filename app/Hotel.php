<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';

    protected $fillable = [
        'name',
        'description',
        'star',
        'street_address',
        'city',
        'country',
        'created_at',
        'updated_at',
    ];
    public function country() {
        $this->belongsTo(Country::class);
    }
}
