<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{

    protected $table = 'attributes';

    protected $fillable = [
        'code', 'name', 'frontend_type', 'is_filterable', 'is_required'
    ];

    protected $casts  = [
        'is_filterable' =>  'boolean',
        'is_required'   =>  'boolean',
    ];

    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

}



// public function setFirstNameAttribute($value)
// {
//     $this->attributes['first_name'] = strtolower($value);
// }
// }



