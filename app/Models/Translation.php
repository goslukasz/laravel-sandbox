<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'translations';

    /**
     * @inheritdoc
     * @var string
     */
    protected $guarded = ['id'];

    /**
     * @inheritdoc
     * @var string
     */
    public $timestamps = true;

}
