<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class portofolio extends Model
{
    use HasFactory;
    protected $fillable = ['paragraf', 'kerja1','kerja2','kerja3','gambar','gambar1','gambar2','gambar3','gambar4','gambar5'];
    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar') && ($model->getOriginal('gambar') !== null)){
                Storage::disk('public')->delete($model->getOriginal('gambar'));
            }
        });
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar1') && ($model->getOriginal('gambar1') !== null)){
                Storage::disk('public')->delete($model->getOriginal('gambar1'));
            }
        });
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar2') && ($model->getOriginal('gambar2') !== null)){
                Storage::disk('public')->delete($model->getOriginal('gambar2'));
            }
        });
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar3') && ($model->getOriginal('gambar3') !== null)){
                Storage::disk('public')->delete($model->getOriginal('gambar3'));
            }
        });
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar4') && ($model->getOriginal('gambar4') !== null)){
                Storage::disk('public')->delete($model->getOriginal('gambar4'));
            }
        });
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar5') && ($model->getOriginal('gambar5') !== null)){
                Storage::disk('public')->delete($model->getOriginal('gambar5'));
            }
        });
    }
}
