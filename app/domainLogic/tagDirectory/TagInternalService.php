<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 1/2/15
 * Time: 5:43 PM
 */

namespace App\DomainLogic\TagDirectory;


use App\Base\BaseInternalService;

class TagInternalService extends BaseInternalService {

    public function __construct()
    {
        $this->model = new Tag();
    }





}