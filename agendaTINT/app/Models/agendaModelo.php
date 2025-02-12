<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendaModelo extends Model
{
    use HasFactory;//Fatoração - Dividir
    protected $table = 'registro'; //Nome da Tabela
}//Coloco APENAS a tabela do banco de dados
