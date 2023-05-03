<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestataire
 * @package App\Models
 * @version May 3, 2023, 7:32 am UTC
 *
 */
class Prestataire extends Model
{

    use HasFactory;

    public $table = 'users';
    protected $connection = 'mysql2';
    



    public $guarded = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
