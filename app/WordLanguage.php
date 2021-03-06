<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class WordLanguage extends Model {

	/**
	 * This model does not have timestamps.
	 *
	 * @var boolean
	 */
	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'word_languages';

	/**
	 * Fillable fields for a language.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'short_name', 'image'
	];

	/**
	 * A WordLanguage has many words related to it.
	 */
	public function words()
    {
        return $this->hasMany('App\Word', 'language_id');
    }

	/**
     * Return all languages as a key/value pair array.
     */
    public static function asKeyValuePairs()
    {
    	$languages = new WordLanguage;
    	$languages = $languages->all();

    	$array = [];

    	foreach ($languages as $language) 
    	{
    		$array = array_add($array, $language->id, $language->name);
    	}

    	return $array;
    }
}