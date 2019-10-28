<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_DECLINED = 'decline';
    const STATUS_SENDING = 'sending';
    protected $fillable = [
        'status', 'user_id', 'creator_id'
    ];

    protected $casts = [
    ];

    public function invitation()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
    public function sender()
    {
        return $this->belongsTo(User::class, 'id','creator_id');
    }
}
