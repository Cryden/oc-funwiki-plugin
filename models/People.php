<?php namespace Crydesign\FunWiki\Models;

use Str;
use Model;
use Backend\Widgets\Form as FormTabs;

/**
 * Model
 */
class People extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;
    
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

    protected $slugs = [
        'slug' => ['first_name', 'last_name']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'crydesign_funwiki_people';

    public $belongsToMany = [
        'role' => [
            'Crydesign\FunWiki\Models\PeopleRoles',
            'table' => 'crydesign_funwiki_people_people_roles'
        ],
        'pseudo' => [
            'Crydesign\FunWiki\Models\People',
            'table' => 'crydesign_funwiki_people_people_pseudos'
        ]
    ];

    public function getRoleOptions() {
        $res = PeopleRoles::get(['id','role'])->toArray();
        $ret = [];
        foreach($res as $value) {
            // Turns it into ['33'] => 'Audio (AU)'
            $ret[$value['id']] = $value['role'];
        }
        return $ret;
    }

    public function filterFields($fields, $context = null)
    {
        //$fields->slug->value = str_slug($fields->first_name->value.' '.$fields->last_name->value);
    }

}