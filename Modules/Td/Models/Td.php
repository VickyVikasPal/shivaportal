<?php

namespace Modules\Td\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Td extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tds';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Td\database\factories\TdFactory::new();
    }
    public function client()
    {
        return $this->belongsTo('Modules\Client\Models\Client');
    }
}
