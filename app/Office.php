<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'name', 'ip', 'intro', 'exit', 'departament_id'
    ];
    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
