<?php

namespace App\Http\Resources;

use App\Invite;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserInviteResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'status'=>$this->status,
            'created_at'=>$this->created_at,
        ];
    }
}
