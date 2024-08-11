<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Questions extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
           'options' => 'array', // For JSON column
           'required' => 'boolean', // For boolean column
        ];
    }


    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }


}