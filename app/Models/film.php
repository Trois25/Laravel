<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    protected $fillable=['judul','sutradara','durasi'];
    public function genre(){
        return $this->hasOne(genre::class);
    }
}
