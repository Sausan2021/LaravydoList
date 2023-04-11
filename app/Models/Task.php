<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $dates = [ 'deleted_at' ];
    public function tasks(){
        $u = DB::table('tasks')->get();
        return $this->hasMany(Task::class);
    }
}
