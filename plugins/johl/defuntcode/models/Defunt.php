<?php

namespace Johl\DefuntCode\Models;

use Model;


class Defunt extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'description' => 'required'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'johl_defuntcode_defunts';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];

    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $publishedAt = 'published_at';
    public $isPublished = 'is_published';
    public $nom = 'nom';
    public $prenom = 'prenom';
    public $description = 'description';

    public $belongsTo = [
        'handler' => '\RainLab\User\Models\User'
    ];
    public $hasOne = [
        // 'recueillement' => '\Johl\DefuntCode\Models\Recueillement',
        'ceremonie' => '\Johl\DefuntCode\Models\Ceremonie'
    ];

    public function getHandlerOptions()
    {
        return \RainLab\User\Models\User::lists('login', 'id');
    }
    public function getRecueillementOptions()
    {
        // return \Johl\DefuntCode\Models\Recueillement::lists('login', 'id');
        return [];
    }
    public function getCeremonieOptions()
    {
        return \Johl\DefuntCode\Models\Ceremonie::lists('place', 'id');
    }
}
