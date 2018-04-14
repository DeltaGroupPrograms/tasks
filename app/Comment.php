<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
class Comment extends Model
{
    public  function user()
    {
        return $this->belongsTo(User::class);
    }

//    return $this->hasmany(works::works);
    protected $fillable = [
        'text', 'user_id', 'registerdate','status','work_id'
    ];
}
