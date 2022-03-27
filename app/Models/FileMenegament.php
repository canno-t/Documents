<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileMenegament extends Model
{
    public $timestamps = false;
    use HasFactory;
    public function FileMenegament(){
        return $this->hasOne(Users::class, 'user', 'login');
    }
}
