<?php namespace Crydesign\FunWiki\Models;

use Model;

/**
 * Model
 */
class PeoplePseudos extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'crydesign_funwiki_people_pseudo';

    public $belongsToMany = [
        'people' => [
            'Crydesign\FunWiki\Models\People',
            'table' => 'crydesign_funwiki_people_people_pseudos'
        ]
    ];
}