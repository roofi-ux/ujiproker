<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class prd extends Model
{
    use HasFactory, SoftDeletes, HasRoles;

    protected $table = 'prds';

    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'proker',
        'renker',
        'target',
        'janw1',
        'janw2',
        'janw3',
        'janw4',
        'hasil', // Tetap 'hasil', tapi sekarang untuk path file PDF
        'achieve', // Diubah dari 'aproval' menjadi 'achieve'
        'ket',
        'persen',
    ];

    protected $dates = ['deleted_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
