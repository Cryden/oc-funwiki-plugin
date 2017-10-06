<?php namespace Crydesign\FunWiki\Models;

use Model;
use BackendAuth;
use Backend\Models\User;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'crydesign_funwiki_news';

    //private $user = BackendAuth::getUser();

    public function newsTypes($fieldName, $value, $formData)
    {
        return ['published' => 'Published'];
    }

    public $belongsTo = [ 
        'author' => ['Backend\Models\User','key'=>'user_id'] 
    ];

}