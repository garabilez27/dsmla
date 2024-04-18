<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    protected $table = 'tbl_users';
    public $timestamps = false;
    protected $fillable = ['usr_fname', 'usr_mname', 'usr_lname', 'usr_suffix', 'rl_id', 'usr_email', 'usr_password'];

    public function attempt($credentials)
    {
        $res = $this->where('usr_email', $credentials['email'])->first();
        if ($res && Hash::check($credentials['password'], $res->usr_password))
        {
            return $res;
        }

        return null;
    }
}
