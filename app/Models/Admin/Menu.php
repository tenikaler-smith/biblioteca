<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['titulo', 'url', 'icono'];
    protected $guarded = ['id'];
}
