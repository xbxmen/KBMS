<?php
/**
 * Created by PhpStorm.
 * User: zhaoshuai
 * Date: 2016/6/3 0003
 * Time: 13:55
 */

namespace App\Http;

use Illuminate\Database\Eloquent\Model;
class Users extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid','account','password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden  = [
        'password','username','account','uid'
    ];

}