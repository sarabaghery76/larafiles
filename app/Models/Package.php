<?php

namespace App\Models;

use App\Traits\Categorizable;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use Categorizable;

    protected $primaryKey = 'package_id';
    protected $guarded = ['package_id'];

    public function files()
    {
        return $this->belongsToMany(File::class,'package_file','package_id','file_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'user_packages','package_id','user_id')->withPivot('amount','created_at');
    }
     
}
