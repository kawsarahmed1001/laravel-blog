<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Slider extends Model
{
    use Userstamps;

    protected $fillable = ['name', 'description', 'image_url', 'priority'];
}
