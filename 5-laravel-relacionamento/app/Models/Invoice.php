<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    use HasFactory; //sempre vem por ultimo

    public $table = "invoices";
    protected $fillable = [ //nome das colunas na tabela
        "description", "value", "user_id", "address_id"
    ];
    protected $hidden = [ //oculta exibição na query
        "user_id", "address_id"
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
