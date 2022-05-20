<?php

namespace Johl\DefuntCode\Models;

use Model;

class Defunt extends Model
{
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
    protected $incrementing = true;
    public $timestamps = true;
    public $publishedAt = 'published_at';
    public $isPublished = 'is_published';
    public $nom = 'nom';
    public $prenom = 'prenom';
    public $description = 'description';
}
