<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Waste extends Model
{
    use HasFactory;
    use Sortable;
    
    protected $fillable = [
        'merk',
        'kategori',
        'jenis_sampah',
        'produsen_sampah',
        'berat_sampah',
    ];

    public $sortable = [
        'merk',
        'kategori',
        'jenis_sampah',
        'produsen_sampah',
        'berat_sampah',
    ];
}
