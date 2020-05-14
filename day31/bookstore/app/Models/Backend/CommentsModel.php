<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model
{
    //

    protected $table = 'comments';


    public function book()
    {
        return $this->belongsTo('App\Models\Backend\BooksModel', 'book_id', 'id');
    }


}
