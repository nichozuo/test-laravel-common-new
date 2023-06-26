<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property integer $id
@property string $type
@property string $name
@property string $phone
@property date $created_at
@property date $updated_at

 */
class BaseGirls extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'girls';
    protected string $comment = '女孩';
    protected $fillable = ['type', 'name', 'phone'];

    # relations
    public function bosses_has_girls(): Relations\HasMany
    {
        return $this->hasMany(Models\BossesHasGirls::class, 'girls_id', 'id');
    }


}
