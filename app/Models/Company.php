<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Company extends Model
{

    use HasFactory  ,SoftDeletes;
    public function company_branch(){
        return $this->hasMany(Company_branch::class , 'company_id' , 'id');
    }
}
