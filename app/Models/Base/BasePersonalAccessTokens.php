<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelCommonNew\App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Relations;
use App\Models;

/**
@property integer $id
@property string $tokenable_type
@property integer $tokenable_id
@property string $name
@property string $token
@property unknown $abilities
@property date $last_used_at
@property date $expires_at
@property date $created_at
@property date $updated_at

 */
class BasePersonalAccessTokens extends Base
{
    use HasFactory, ModelTrait;

    protected $table = 'personal_access_tokens';
    protected string $comment = '';
    protected $fillable = ['tokenable_type', 'tokenable_id', 'name', 'token', 'abilities', 'last_used_at', 'expires_at'];

    # relations

}
