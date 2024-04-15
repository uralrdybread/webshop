<?php

namespace App\Models;

use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function variants(): HasMany

    {
        return $this->hasMany(ProductVariant::class);
    }

    public function imageS(): hasMany

    {
        return $this->hasMany(Image::class);
    }
}
