<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    //use HasFactory;
    protected $table = 'tasks';
    public $timestamps = true;
    protected $fillable = ['name', 'description', 'user_id'];
    //protected $primaryKey = 'task_id';

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
