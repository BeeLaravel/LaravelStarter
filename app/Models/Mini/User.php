<?php
namespace App\Models\Mini;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model {
    protected $table = 'mini_users';
    protected $fillable = [
    	'openid',
    	'session_key',

    	'nickName',
    	'avatarUrl',
    	'language',
    	'gender',
    	'country',
    	'province',
    	'city',

    	'created_at',
    	'updated_at'
    ];

    // public function getJWTIdentifier() {
    //     return $this->getKey();
    // }
    // public function getJWTCustomClaims() {
    //     return [];
    // }
}
