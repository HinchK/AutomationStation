<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name', 'github', 'lastpull', 'backup_filename', 'docker', 'status', 'notes', 'path', 'autodocs', 'install_date'
    ];
}
