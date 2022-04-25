<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'text',
        'img',
        'cat_id',
    ];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }

  /*  public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function scopeFeatured($query){
        return $query->where('featured', true);
    }*/

}
