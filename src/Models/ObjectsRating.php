<?php

namespace Dminustin\LSNE\RatingPackage\Models;

use Dminustin\LSNE\CorePackage\Traits\HasUUIDTrait;
use Dminustin\LSNE\RatingPackage\Models\Base\ObjectsRating as BaseObjectsRating;

class ObjectsRating extends BaseObjectsRating
{
    use HasUUIDTrait;

    protected $fillable = [
        'object_id',
        'object_type',
        'rating'
    ];
}
