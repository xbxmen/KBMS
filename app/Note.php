<?php
/**
 * Created by PhpStorm.
 * User: zhaoshuai
 * Date: 2016/6/3 0003
 * Time: 13:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
class Note extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notes';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notehead', 'notebody', 'notetype', 'noteindex', 'notesize', 'notegrade', 'remark', 'notefolder', 'isshare'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden  = [
    ];

}