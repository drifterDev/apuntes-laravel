<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    protected $fillable = ['name', 'company_id', 'city_id', 'user_id', 'execution_date', 'is_active'];
    use HasFactory;
}
