<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = 'family';

    protected $guarded = [];


    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }






}
