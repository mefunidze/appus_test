<?php

namespace App\Http\Controllers;

use App\Invite;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;

class InviteController extends Controller
{
	public function index()
	{
		return ['success'=>true, 'data'=>Invite::query()->where(['user_id'=>Auth::user()->id])->get()];
	}

	public function decline(Invite $invite)
	{
		$invite->status=Invite::STATUS_DECLINED;
		$invite->save();

		return ['success'=>true,'data'=>$invite];
	}

	public function delete(Invite $invite)
	{
		$invite->delete();

		return ['success'=>true];
	}

	public function store(Request $request)
	{
		return [
			'success'=>true,
			'data'=>Invite::create([
				'user_id'=>$request->post('user_id'),
				'creator_id'=>Auth::user()->id,
				'status'=>Invite::STATUS_SENDING
			])
		];
	}

	public function accept(Invite $invite)
	{
		$invite->status=Invite::STATUS_ACCEPTED;
		$invite->save();

		return ['success'=>true,'data'=>$invite];
	}
}
