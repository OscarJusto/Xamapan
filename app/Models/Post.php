<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa

    public  function user(){
        return $this->belongsTo(User::class);
    }

    public  function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos

    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }


}
