<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Phrase
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $author
 * @property $phrase
 * @property $image
 * @property $is_onslider
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Phrase extends Model
{
    
    static $rules = [
		'author' => 'required',
		'phrase' => 'required',
		'image' => 'required',
		'is_onslider' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['author','phrase','image','is_onslider'];



}
