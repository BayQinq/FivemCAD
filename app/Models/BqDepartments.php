<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BqDepartments extends Model
{
    use HasFactory;
    protected $table = 'bq_departments';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'is_active',
        'created_by',
        'date_added',
        'date_updated',
        'date_finished',
        'name',
        'slug',
        'notes',
        'bonus_payment',
        'division_rank',

        // Diğer sütunları buraya ekleyin
    ];

    protected $guarded = ['id'];

}
