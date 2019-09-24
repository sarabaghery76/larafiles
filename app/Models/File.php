<?php

namespace App\Models;

use App\Traits\Categorizable;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use Categorizable;
    protected $primaryKey = 'file_id';
    protected $guarded = ['file_id'];

    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_file','file_id','package_id');
    }

    public function getFileTypeTextAttribute()
    {
        $types = [
            'application/pdf'=>'PDF',
            'image/png'=>'PNG',
        ];
        return $types[$this->attributes['file_type']];
    }
    
}
