<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    use HasFactory;
    protected $table='my_lists';
    protected $primaryKey='id';
    protected $fillable=['medecine_name','details'];
     public function user(){
         return $this->belongsTo(User::class);
     }
}
