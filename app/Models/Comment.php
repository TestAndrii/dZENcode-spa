<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    const PAGINATE = 25;

    protected $fillable = [
        'user_id',
        'parent_id',
        'captcha',
        'text_comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function children()
    {
        return $this->hasMany($this,'parent_id','id');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
