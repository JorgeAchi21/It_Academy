<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    //protected $table='matches'; //solo si la tabla no se llama igual que el modelo: en plural

    protected $guarded = [''];
    //protected $fillable = ['created_at', 'updated_at', 'date_match', 'time_match', 'city', 'stadium_name', 'referee', 'local_team_name', 'local_score', 'visitor_team_name', 'visitor_score', 'status', 'aditional_info'];

}
