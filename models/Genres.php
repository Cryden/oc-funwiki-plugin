<?php namespace Crydesign\FunWiki\Models;

use Model;

/**
 * Model
 */
class Genres extends Model
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
    public $table = 'crydesign_funwiki_genres';

    /**
     * @var string Add icon file. 
     */

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];

}