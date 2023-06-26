<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property unknown $id
@property string $migration
@property unknown $batch

 */
class BaseMigrations extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'migrations';
    protected string $comment = '';
    protected $fillable = ['migration', 'batch'];

    # relations

}
