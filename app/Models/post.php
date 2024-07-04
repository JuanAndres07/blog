<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    /* protected $table = 'posts'; */

    /* protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
    ]; Campos que queremos que se pasen*/

    protected $guarded = [
        'is active'
    ]; /*  Campos que queremos que no se pasen */

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(

            //mutador:
            set: function($value){

                return strtolower($value);
            },

            //accesor:
            get: function($value){

                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug'; /* Nombre del campo que queremos utilizar */
    }
}
