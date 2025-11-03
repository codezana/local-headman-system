<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $table = 'invoice';

    protected $guarded = [];

    public static function getLastPageRecord()
    {
        return self::orderBy('created_at', 'desc')->first();
    }



 

    public function families()
    {
        return $this->hasMany(Family::class, 'invoice_id');
    }
}
