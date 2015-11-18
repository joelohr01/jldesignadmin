<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
      'client_name',
        'client_first_name',
        'client_last_name',
      'client_address',
        'client_city',
    'client_state',
    'client_zip',
    'client_phone',
    'client_email'
    ];

    public function scopeLocatedAt($query, $client_name)
    {
        $client_name = str_replace('-', ' ', $client_name);

        return $query->where(compact('client_name'));
    }


}

