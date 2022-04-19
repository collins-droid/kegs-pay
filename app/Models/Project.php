<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
use App\Models\Attendance;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_user');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    // scope
    public function scopeSearch($query, $value) {
        return $query
            ->where('name', 'like', "%" . $value . "%")
            ->orWhere('code', 'like', "%" . $value . "%");
    }

    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%'.$value.'%');
    }

    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'like', '%'.$value.'%');
    }
}
