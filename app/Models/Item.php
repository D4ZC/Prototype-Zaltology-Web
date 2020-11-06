<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['nameItem', 'category', 'description' ];
    public function user() {
        return $this->belongsTo(User::class);
    }

}



