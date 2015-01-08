<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/12/14
 * Time: 10:46 AM
 */

namespace App\Base;


use App\BAse\Framework\APILibrary\Polymorphic\AuthenticationTrait;
use App\Base\Framework\APILibrary\Polymorphic\AuthorizationTrait;
use App\Base\Framework\APILibrary\Polymorphic\ResponderTrait;


abstract class ExternalService {

    use Framework\APILibrary\Polymorphic\ResponderTrait, \App\BAse\Framework\APILibrary\Polymorphic\AuthenticationTrait, Framework\APILibrary\Polymorphic\AuthorizationTrait;

    protected $model;

    protected $internalService;

    protected $serviceSubject;

    protected $errorSubject = 'Error';

    protected $errorCreationCode = 400;

    protected $successCreationCode = 201;

    abstract public function index();

    abstract public function store($credentialsOrAttributes = []);

    abstract public function show($data);

    abstract public function update();

    abstract public function destroy();

    public function getInternalService()
    {
        return $this->internalService;
    }

    public function getInternalServiceModelClassName()
    {
        return $this->internalService->getModelClassName();
    }

    public function getSuccessCreationCode()
    {
        return $this->successCreationCode;
    }

    public function getErrorCreationCode()
    {
        return $this->errorCreationCode;
    }




}

