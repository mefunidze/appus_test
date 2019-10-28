<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use HasApiTokens,Notifiable;


	protected $fillable=[
		'name',
		'email',
		'password',
	];

	protected $hidden=[
		'password',
		'remember_token',
	];

	protected $casts=[
		'email_verified_at'=>'datetime',
	];

	public function invites()
	{
		return $this->hasMany(Invite::class,'user_id');
	}

	public function sandedInvites()
	{
		return $this->hasMany(Invite::class,'creator_id');
	}
}
