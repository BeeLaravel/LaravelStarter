<?php
namespace App\Models\Mini;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements JWTSubject {
    protected $table = 'mini_users';

    protected $fillable = ['openid', 'session_key', 'created_at', 'updated_at'];

    public function getJWTIdentifier() {
        return $this->getKey();
    }
    public function getJWTCustomClaims() {
        return [];
    }
}
