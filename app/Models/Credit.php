<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $table = 'credit';
    protected $primaryKey = 'id';
    protected $fillable = ['book_id', 'user_id', 'credit_date','return_date','status'];

    public function books()
    {
        return $this->belongsTo(Books::class, 'book_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
