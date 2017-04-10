<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{

    use SoftDeletes;
    /**
     * The database column used for Softdeleting.
     *
     * @var string
     */
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'peliculas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descripcion',
    ];

    /**
     * Set FirstName attribute
     *
     * @param string
     */
    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = ucwords(strtolower($value));
    }

}
