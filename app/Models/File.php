<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int uploaded_by
 * @property int download_count
 * @property int visit_count
 * @property string name
 * @property string url
 */
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
        'visit_count',
        'download_count'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
