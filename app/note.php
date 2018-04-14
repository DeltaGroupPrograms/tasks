<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class note extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'text', 'regdate', 'statusshow','userid'
    ];
}
