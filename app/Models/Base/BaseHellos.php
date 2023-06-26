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
class BaseHellos extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'hellos';
    protected string $comment = '';
    protected $fillable = ['name'];

    # relations

}
