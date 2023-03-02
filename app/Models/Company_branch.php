<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_branch extends Model
{
    use HasFactory SoftDeletes;
    
    public function Company(){
        return $this->belongsTo(company::class , 'company_id' , 'id');
    }
}
