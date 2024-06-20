<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigLangs extends Model
{
    use HasFactory;

    public $table = 'config_langs';

    protected $fillable = ['intro', 'intro_desc', 'phrase', 'skills', 'language'];
}
