<?php

/**
 * Created by Reliese Model.
 */

namespace Dminustin\LSNE\RatingPackage\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjectsRating
 *
 * @property string $id
 * @property string $object_id
 * @property string $object_type
 * @property float $rating
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class ObjectsRating extends Model
{
    protected $table = 'objects_rating';
    public $incrementing = false;

    protected $casts = [
        'rating' => 'float'
    ];
}
