<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Searchable;
    protected $guarded = [];
    
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function expenses(){
        return $this->hasMany(Expenses::class);
    }

    public function searchableAs()
    {
        return 'name';
    }
}
