<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BqCharacter extends Model
{
    use HasFactory;

    protected $table = 'bq_characters';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'id',
        'is_active',
        'date_added',
        'date_updated',
        'date_finished',
        'ch_first_name',
        'ch_last_name',
        'ch_birth_date',
        'ch_rank',
        'ch_code',
        // Diğer sütunları buraya ekleyin
    ];

    protected $guarded = ['id'];

    // İlişkileri tanımlayabilirsiniz
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
