<?php namespace Crydesign\FunWiki\Models;

use Model;
use Db;
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

    public function scopeAuthors($query)
    {
        //dd($query);
        return Db::table('crydesign_funwiki_persons')
            ->join('crydesign_funwiki_person_person_roles', 'crydesign_funwiki_persons.id', '=', 'crydesign_funwiki_person_person_roles.person_id')
            ->where('person_roles_id', 1);
        //    ->get());
    }

    public function scopeActors($query)
    {
        //dd($query);
        return Db::table('crydesign_funwiki_persons')
            ->join('crydesign_funwiki_person_person_roles', 'crydesign_funwiki_persons.id', '=', 'crydesign_funwiki_person_person_roles.person_id')
            ->where('person_roles_id', 2);
        //    ->get());
    }

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