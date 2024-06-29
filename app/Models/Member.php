<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory;
    use SoftDeletes;

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
