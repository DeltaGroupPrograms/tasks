<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Work;
use App\user;

class Relationwork extends Model
{
    public function work(){
        return $this->belongsTo(Work::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
    protected $fillable = [
        'workid', 'userid', 'begindate','enddate','status'
    ];
}
