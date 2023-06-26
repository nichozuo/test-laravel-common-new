<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property integer $bosses_id
@property integer $girls_id

 */
class BaseBossesHasGirls extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'bosses_has_girls';
    protected string $comment = '老板和女孩的关系';
    protected $fillable = ['bosses_id', 'girls_id'];

    # relations
    public function boss(): Relations\BelongsTo
    {
        return $this->belongsTo(Models\Bosses::class, 'bosses_id', 'id');
    }

    public function girl(): Relations\BelongsTo
    {
        return $this->belongsTo(Models\Girls::class, 'girls_id', 'id');
    }


}
