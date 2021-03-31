<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'size',
        'file_type',
        'ip',
        'uniq_id',
        'uploaded_by',
        'view_count'
    ];

    public function user(){
        return $this->hasOne(User::class,'id','uploaded_by');
    }
}
