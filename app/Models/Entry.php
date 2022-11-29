<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
  protected $fillable = ['amount', 'type', 'description', 'account_id', 'category_id'];
  use HasFactory;
}
