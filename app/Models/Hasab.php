<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasab extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'likes',
        'shares'
    ];
    function createHasab(){

    }

}
