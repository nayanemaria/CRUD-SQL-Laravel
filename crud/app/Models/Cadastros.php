<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["nome", "email", "cpf", "telefone",];

    protected $attributes = [
        'delayed' => false,
    ];

}
