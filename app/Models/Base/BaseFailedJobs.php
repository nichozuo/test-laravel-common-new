<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property integer $id
@property string $uuid
@property unknown $connection
@property unknown $queue
@property unknown $payload
@property unknown $exception
@property date $failed_at

 */
class BaseFailedJobs extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'failed_jobs';
    protected string $comment = '';
    protected $fillable = ['uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at'];

    # relations

}
