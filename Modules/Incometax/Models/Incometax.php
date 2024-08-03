<?php

namespace Modules\Incometax\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incometax extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'incometaxes';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Incometax\database\factories\IncometaxFactory::new();
    }
    public function client()
    {
        return $this->belongsTo('Modules\Client\Models\Client');
    }
}
