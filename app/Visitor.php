<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Visitor;

/**
 * Class Team
 *
 * @package App
 * @property string $code
*/
class Visitor extends Model
{
    use SoftDeletes;

    protected $fillable = ['ip','time','browser','hour','updated_at','created_by','updated_by'];

}
