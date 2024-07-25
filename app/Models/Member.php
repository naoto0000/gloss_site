<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Member extends Model implements Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use AuthenticableTrait;

    /**
     * モデルに対応するテーブル名
     *
     * @var string
     */
    protected $table = 'members';

    /**
     * 編集可能な値
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'email',
        'tel',
        'password',
    ];
}
