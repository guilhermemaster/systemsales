<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Login;
use App\Models\Products;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function login()
    {
        return $this->belongsTo(Login::class, 'id_Login');
    }

    public function products()
    {
        return $this->belongsTo(Products::class, 'id_products');
    }
}

