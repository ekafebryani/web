<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function getBodyHtmlAttribute()
    {
      return \Parsedown::instance()->text($this->body);
    }

}
