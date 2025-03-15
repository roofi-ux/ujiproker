<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class protech extends Model
{
    use HasFactory, SoftDeletes, HasRoles;

    protected $table = 'protechs';

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
