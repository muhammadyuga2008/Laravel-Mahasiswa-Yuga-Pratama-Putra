<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $guarded = ['id'];
    public function calonMahasiswa(){
        return $this->hasMany(CalonMahasiswa::class);
    }
     public function Fakultas(){
        return $this->belongsTo(Fakultas::class);
    }


}
