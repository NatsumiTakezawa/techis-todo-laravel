<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// $fillableを使用することで、Mass Assignment（大量代入）時のセキュリティを向上させることができます。
class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     *  タスクを保持するユーザーの情報
     *  従テーブルの複数レコードに対して、主テーブルの1つのレコードを紐付けるときに使う
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
