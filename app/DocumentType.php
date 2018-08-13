<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
  public function contracts()
  {
    return $this->hasMany(Document::class);
  }
}
