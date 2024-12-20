<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class head extends Model
{
    use HasFactory;
    protected $fillable = ['nav1', 'nav2','nav3','nav4','nav5', 'thumbnail'];
    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)){
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}