<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
