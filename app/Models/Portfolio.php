<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

use Brackets\Media\HasMedia\HasMediaCollections;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;

class Portfolio extends Model implements HasMediaCollections, HasMediaConversions
{
    use SoftDeletes;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    
    protected $fillable = [
        "image",
        "judul",
        "keterangan",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    
    ];

 public function registerMediaCollections()
    {
        $this->addMediaCollection('gallery')
             ->accepts('image/*');

        $this->addMediaCollection('secret_file')
             ->private()
             ->accepts('pdf/*');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->autoRegisterThumb200();

        $this->addMediaConversion('detail_hd')
            ->width(1920)
            ->height(1080)
            ->performOnCollections('gallery');
    }
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/portfolios/'.$this->getKey());
    }

    
}
