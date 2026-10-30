<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    protected $guarded = ['id'];
    public function programStudi(){
        return $this->belongsTo(ProgramStudi::class);
    }

     public function Pembayaran(){
        return $this->hasOne(Pembayaran::class);
    }
     public function User(){
        return $this->belongsTo(User::class);
    }

    
}
