<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
