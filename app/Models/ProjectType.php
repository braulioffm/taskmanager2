<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;

class ProjectType extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function project(){
        return $this->belongsToMany(Project::class);
    }

}
