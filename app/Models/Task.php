<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

//    public function getNameAttribute($value){
//        return Str::lower($value);
//    }
//    public function setNameAttribute($value){
//        $this->attributes['name'] = Str::lower($value);
//    }

//    protected function name(): Attribute {
//        return Attribute::make(
//            get: fn(string $value) => Str::ucfirst($value),
//        );
//    }

    protected function name(): Attribute {
        return Attribute::make(
            set: fn(string $value) => Str::upper($value),
        );
    }
}
