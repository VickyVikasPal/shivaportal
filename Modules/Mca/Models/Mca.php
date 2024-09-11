<?php

namespace Modules\Mca\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mca extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mcas';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Mca\database\factories\McaFactory::new();
    }
}
