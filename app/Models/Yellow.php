<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yellow extends Model
{
    use HasFactory;
    protected $primaryKey="id_yellow";
    protected $table="yellow";


    protected $fillable=[
       'suspenssao',
       'preco',
       'observacoes',
       'info'
   ];
    }



    
   

   

