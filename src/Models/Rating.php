<?php

namespace Dminustin\LSNE\RatingPackage\Models;

use Dminustin\LSNE\CorePackage\Traits\HasUUIDTrait;
use Dminustin\LSNE\RatingPackage\Models\Base\Rating as BaseRating;

class Rating extends BaseRating
{
    use HasUUIDTrait;

    protected $fillable = [
        'object_id',
        'object_type',
        'voter_id',
        'voter_weight',
        'vote'
    ];
}
