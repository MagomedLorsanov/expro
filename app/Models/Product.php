<?php

namespace App\Models;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [];

    public function scopeAvailable($query): void
    {
        $query->where('status', 'available');
    }

    public static function rule($request,$id='') {
        $product_id = $id ? $id:$request->id;
        return [
            'article' => ['required','regex:/^[a-zA-Z0-9\s]+$/',Rule::unique('products')->ignore($product_id)],
            'name' => ['required','min:10'],
            'status' => 'required',
            'data' => 'json'
        ];
    }
}
