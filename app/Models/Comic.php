<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    // ADD SOFTDELETE, ADD IN MIGRATION NEW COLUMN SOFTDELETE WIT NECESSARY ROLLBACK
    use HasFactory, SoftDeletes;

    // SPECIFY TYPE IN HTML PRINT
    protected $casts = [
        "artists" => "array",
        "writers" => "array",
    ];

    // NECESSARY FOL FILL AND DESTROY
    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type",
        "artists",
        "writers",
    ];
}
