<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [''];
    //protected $fillable = ['room', 'guests', 'state', 'guestName', 'fromDate', 'toDate', 'price', 'local_team_name', 'local_score', 'visitor_team_name', 'visitor_score', 'status', 'aditional_info'];
}
