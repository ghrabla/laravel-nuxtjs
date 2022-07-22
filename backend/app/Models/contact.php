<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'subject',
        'phone',
        'email',
        'message'
  
      ];
  
  
      public function getCreatedAtAttribute($value)
      {
          return \Carbon\Carbon::parse($value)->format('d-m-Y H:i');
      }
  
  
      public function getUpdatedAtAttribute($value)
      {
          return \Carbon\Carbon::parse($value)->format('d-m-Y H:i');
      }
}
