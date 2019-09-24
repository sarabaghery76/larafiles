<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

//    protected $primaryKey = 'category_id';

//    protected $guarded = ['category_id'];

    public $timestamps = false;

    public function packages()
    {
        return $this->morphedByMany(Package::class, 'categorizable');
    }

    public $fillable = ['category_name'];

    public function files()
    {
        return $this->morphedByMany(File::class, 'categorizable');
    }

}
