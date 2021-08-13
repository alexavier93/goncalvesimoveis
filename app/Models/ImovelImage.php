<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImovelImage extends Model
{
    use HasFactory;

    protected $table = 'imoveis_imagens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imovel_id', 'image', 'thumbnail',
    ];

    public $timestamps = false;

    public function imoveis()
    {
        return $this->belongsTo(Imovel::class);
    }

}
