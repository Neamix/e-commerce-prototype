<?php

namespace App\Models;

use App\Http\Services\ImageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, ImageService;

    protected $root = 'storage/product';

    protected $guarded = [];

    /*** Update/Create Product */
    static function upsert($request)
    {
        $product = self::updateOrCreate(
        [
            'id' => $request['id'] ?? null
        ],
        [
            'title' => $request['title'],
            'description' => $request['description'],
            'price'  => $request['price'], 
            'category_id' => $request['category_id'] ?? null,
            'brand_id' => $request['brand_id'] ?? null          
        ]);

        if ( isset($request['gallary']) ) {
            $product->dimintions(['medium' => '451x301'])
                ->resize()
                ->files($request['gallary'])
                ->withSaveRelation('gallaries')
                ->usefor('gallary')
                ->compile();
        }

        return $product;
    }

    /*** Filter Products */
    public function scopeFilter($query,$request)
    {
        if ( isset($request['best_selling']) ) {
            $query->where('tag_id',BEST_SELLING);
        }

        if ( isset($request['just_arrived'] ) ) {
            $query->orderBy('created_at','DESC');
        }

        if (  isset($request['special_offer']) ) {
            $query->where('tag_id',SPECIAL_OFFER);
        }

        if (  isset($request['most_viewed']) ) {
            $query->where('tag_id',MOST_VIEWED);
        }

        if ( isset($request['brand_id']) ) {
            $query->where('brand_id',$request['brand_id']);
        }

        if ( isset($request['category_id']) ) {
            $query->where('category_id',$request['category_id']);
        }

        return $query;
    }

    // Attributes
    public function getPlaceholderAttribute()
    {
        return $this->gallaries()->first();
    }

    // Relations
    public function gallaries()
    {
        return $this->morphMany(Gallery::class,'imageable');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

}
