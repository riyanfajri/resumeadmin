<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengalaman extends Model
{
    use SoftDeletes;
    
    
    protected $fillable = [
        "pengalaman",
        "date",
        "perusahaan",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/pengalamen/'.$this->getKey());
    }

    
}
