<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use SoftDeletes;
    
    
    protected $fillable = [
        "keterangan",
        "created_by",
        "updated_by",
        "count",
        "name",
        "birthday",
        "phone",
        "email",
        "website",
        "address",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
        "birthday",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/abouts/'.$this->getKey());
    }

    
}
