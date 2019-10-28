<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id', 'body'
    ];

    protected $appends = [
        'selfOwned' //atribut untuk kepemilikan message (boolean)
    ];

    public function getSelfOwnedAttribute()
    {
        return $this->user_id == auth()->user()->id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
