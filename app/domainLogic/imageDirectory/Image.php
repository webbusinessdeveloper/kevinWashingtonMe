<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/30/14
 * Time: 10:22 AM
 */

namespace App\DomainLogic\ImageDirectory;


use App\Base\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Image extends BaseModel {

    protected $fillable = ['name' , 'mediumPath', 'smallPath', 'largePath', 'originalPath', 'mediumLongPath', 'smallLongPath', 'largeLongPath', 'originalLongPath'];


    protected $table = 'images';


    public function skills()
    {
        return $this->morphedByMany('\App\DomainLogic\SkillDirectory\Skill', 'imageable');
    }

    public function tools()
    {
        return $this->morphedByMany('\App\DomainLogic\ToolDirectory\Tool', 'imageable');
    }

    public function experiences()
    {
        return $this->morphedByMany('\App\DomainLogic\ExperienceDirectory\Experience', 'imageable');
    }

    protected $modelAttributes = [
//		START AT ZERO (0)!!! => [
//
//			'name' => 'nameOfAttribute',
//
//			'format' => '(choose 1: email, url, password,
//							 string, exists, enum, text, id, token, ipAddress, date)',
//
//			'nullable' => false,
//
//			'unique' => true,
//
//			'exists' => null,
//
//          'identifier' => false,
//
//          'key' => false,
//
//
//			'enumValues' => [
//				'item1',
//				'item2',
//				'item3'
//			]
//		],

        0  => [

			'name' => 'name',

			'format' => 'string',

			'nullable' => false,

			'unique' => true,

			'exists' => null,

            'identifier' => false,

            'key' => false,

		],

        1 =>[
            'name' => 'originalPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        2 =>[
            'name' => 'smallPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        3 =>[
            'name' => 'mediumPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        4 =>[
            'name' => 'largePath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        5 =>[
            'name' => 'originalLongPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        6 =>[
            'name' => 'smallLongPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        7 =>[
            'name' => 'mediumLongPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        8 =>[
            'name' => 'largeLongPath',

            'format' => 'path',

            'nullable' => false,

            'unique' => true,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],

        9 =>[
            'name' => 'image',

            'format' => 'image',

            'nullable' => false,

            'unique' => false,

            'exists' => null,

            'identifier' => false,

            'key' => false,

        ],




    ];


    public $imageSizes = ['small', 'medium','large'];


    public $originalStorage = 'uploads/original';


    public $smallWidth = 200;

    public $smallHeight = 200;

    public $smallStorage = 'uploads/small';


    public $mediumWidth = 300;

    public $mediumHeight = 300;

    public $mediumStorage = 'uploads/medium';


    public $largeWidth = 400;

    public $largeHeight = 400;

    public $largeStorage = 'uploads/large';


    protected $destroyableAttributes = [
        'originalLongPath',
        'smallLongPath',
        'mediumLongPath',
        'largeLongPath',
    ];

    public function getDestroyableAttributes()
    {
        return $this->destroyableAttributes;
    }


}