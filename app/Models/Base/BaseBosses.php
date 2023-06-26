<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property integer $id
@property string $name
@property date $created_at
@property date $updated_at

 */
class BaseBosses extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'bosses';
    protected string $comment = '老板';
    protected $fillable = ['name'];

    # relations
    public function bosses_has_girls(): Relations\HasMany
    {
        return $this->hasMany(Models\BossesHasGirls::class, 'bosses_id', 'id');
    }

    public function companies(): Relations\HasMany
    {
        return $this->hasMany(Models\Companies::class, 'bosses_id', 'id');
    }


}
