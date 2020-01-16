<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title'];

    public static function create(array $all)
    {
    }

    public static function findOrFail($id)
    {
    }

    public static function find($id)
    {
    }

}
