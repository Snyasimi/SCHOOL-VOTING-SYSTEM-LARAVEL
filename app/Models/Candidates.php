<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidates extends Model
{
    use HasFactory;

    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['Application_status'];


    public function Voter()
    {

        return $this->belongsTo(User::class,'User_id');

    }
}


