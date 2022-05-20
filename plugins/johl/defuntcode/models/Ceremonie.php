<?php

namespace Johl\DefuntCode\Models;

use Model;

/**
 * Ceremonie Model
 */
class Ceremonie extends Model
{

    /**
     * @var string table associated with the model
     */
    public $table = 'johl_defuntcode_ceremonies';

    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    public $place = 'place';
    public $adresse = 'adresse';
    public $zip = 'zip';
    public $ville = 'ville';
    public $datetime = 'datetime';

    public $belongsTo = [
        'defunt' => '\Johl\DefuntCode\Defunt'
    ];
}
