<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'amounts';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'customer_id',
        'month',
        'income',
        'expenses'
    ];
    use HasFactory;
}
