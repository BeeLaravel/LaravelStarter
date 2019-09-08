<?php
namespace App\Models\Mini;

class User extends Model {
    protected $table = 'mini_users';

    protected $fillable = ['openid', 'session_key', 'created_at', 'updated_at'];
}
