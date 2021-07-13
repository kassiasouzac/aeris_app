<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail;

class PedidoConsultoria extends  Authenticatable implements MustVerifyEmailContract
{
    
    use HasFactory, Notifiable, MustVerifyEmail;

    protected $fillable =['nome', 'email', 'senha', 
    'telefone', 'nomeEmpresa','descricao', 'statusPedido','checkCurso'];

    protected $hidden = [
        'senha'
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

