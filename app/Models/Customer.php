<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'customers';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'surname',
        'date_of_birth'
    ];
    use HasFactory;
}
