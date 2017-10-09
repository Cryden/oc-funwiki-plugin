<?php namespace Crydesign\FunWiki\Models;

use Model;

/**
 * Model
 */
class Person extends Model
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
    public $table = 'crydesign_funwiki_persons';

    public $attachOne = [
        'photo' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'personrole' => [
            'Crydesign\FunWiki\Models\PersonRoles',
            'table' => 'crydesign_funwiki_person_person_roles'
        ],
        'personpseudo' => [
            'Crydesign\FunWiki\Models\PersonPseudo',
            'table' => 'crydesign_funwiki_person_person_pseudos'
        ]
    ];
}