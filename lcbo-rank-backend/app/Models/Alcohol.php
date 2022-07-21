<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\String_;

class Alcohol extends Model
{
    public const BEER = "Beer & Cider";
    public const CIDER = "Beer & Cider";

    use HasFactory;
}
