<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPagenateByLimit(int $limit_count = 5 )
    {
        //return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

