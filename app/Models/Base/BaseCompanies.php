<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property integer $id
@property integer $bosses_id
@property string $name
@property date $deleted_at
@property date $created_at
@property date $updated_at

 */
class BaseCompanies extends Base
{
    use HasFactory, ModelTrait, SoftDeletes;

    protected $table = 'companies';
    protected string $comment = '公司';
    protected $fillable = ['bosses_id', 'name'];

    # relations
    public function boss(): Relations\BelongsTo
    {
        return $this->belongsTo(Models\Bosses::class, 'bosses_id', 'id');
    }


}
