<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    //

    protected $table = 'books';

    public function author()
    {
        /*return $this->hasOne('', 'id', 'created_by');*/

        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
