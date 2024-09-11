<?php

namespace Modules\Security\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Security extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'securities';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Security\database\factories\SecurityFactory::new();
    }
}
