<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Client;
use App\Models\ProjectType;
use App\Models\Task;



class Project extends Model
{
    protected $guarded = ['id', 'create_at', 'update_at'];

    use HasFactory;

    //relacion uno a muchos inversa
    public function user(){
    return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa
    public function client(){
        return $this->belongsTo(Client::class);
    }

    //Relacion muchos a muchos
    public function projectType(){
        return $this->belongsToMany(ProjectType::class);
    }

    //Relacion uno a muchos
    public function tasks(){
        return $this->hasMany(Task::class);
    }

}
