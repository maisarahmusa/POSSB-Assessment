<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','mobile_number', 'items'];

    public function setItemAtt($value)
    {
        $this->attributes['items'] = json_encode($value);
    }

    public function getItemAtt($value)
    {
        return $this->attributes['items'] = json_decode($value);
    }
}
