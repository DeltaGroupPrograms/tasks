<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Document;
class Image extends Model
{
    //
    public  function document()
    {
        return $this->belongsTo(Document::class);
    }
    protected $fillable = [
        'name', 'imgpath', 'statusshow'
    ];
}
