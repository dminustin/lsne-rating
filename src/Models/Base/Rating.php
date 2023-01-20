<?php

/**
 * Created by Reliese Model.
 */

namespace Dminustin\LSNE\RatingPackage\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rating
 *
 * @property string $id
 * @property string $object_id
 * @property string $object_type
 * @property string $voter_id
 * @property float $voter_weight
 * @property int $vote
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Rating extends Model
{
    protected $table = 'rating';
    public $incrementing = false;

    protected $casts = [
        'voter_weight' => 'float',
        'vote' => 'int'
    ];
}
