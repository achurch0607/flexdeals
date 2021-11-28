<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    use HasFactory;
    public $fillable = ['quantity', 'datePurchased', 'platformListed','description', 'retailPrice', 'askingPrice', 'notes', 'dateSold', 'qtySold', 'sellPrice', 'fees'];
}
