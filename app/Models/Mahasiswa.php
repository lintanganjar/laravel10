<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'user_id', 'kelas_id', 'nim', 'name', 'tempat_lahir', 'tanggal_lahir', 'edit',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
