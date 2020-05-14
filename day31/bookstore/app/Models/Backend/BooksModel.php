<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    //

    protected $table = 'books';

    public function author()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }
}
