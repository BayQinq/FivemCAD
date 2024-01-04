<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BqInvites extends Model
{
    use HasFactory;

    protected $table = 'bq_invites';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'id',
        'station_id',
        'date_added',
        'created_by',

        // Diğer sütunları buraya ekleyin
    ];

    protected $guarded = ['id'];

}
