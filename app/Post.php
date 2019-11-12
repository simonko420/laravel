<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
    /**
     * @var array|string|null
     */
    private $title;
    /**
     * @var array|string|null
     */
    private $body;
    private $user_id;
}
