<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class about extends Model
{
    use HasFactory;
    protected $fillable = ['content','thumbnail'];
    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)){
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}
