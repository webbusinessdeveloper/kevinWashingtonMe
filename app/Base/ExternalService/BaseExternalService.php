<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/12/14
 * Time: 10:46 AM
 */

namespace App\Base;


use App\Base\Framework\APILibrary\Polymorphic\AuthenticationTrait;
use App\Base\Framework\APILibrary\Polymorphic\AuthorizationTrait;
use App\Base\Framework\APILibrary\Polymorphic\ResponderTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

//use Illuminate\View\View;


abstract class BaseExternalService extends \BaseController {

    use ResponderTrait, AuthenticationTrait, AuthorizationTrait;

    protected $model;

    protected $internalService;

    protected $serviceSubject;

    protected $errorSubject = 'Error';

    protected $errorCreationCode = 400;

    protected $successCreationCode = 201;

    public $loginView = 'login';
    public $messageVariableName = 'message';
    public $AuthenticationNeededMessage = 'You need to login first.';


    public $indexView;
    public $indexCollectionVariableName;



    public function __construct()
    {
        if($this->internalService == null)
        {
            throw new \Exception('Internal Service is not set on the controller! Please set the internal service!');
        }
    }


   public function index($paginationCount = 6)
   {
       if(Auth::check())
       {
           $subjectModels = $this->internalService->index(6);

           return View::make($this->indexView)->with($this->indexCollectionVariableName, $subjectModels);
       }
       return $this->redirectToLogin();
   }

    public function redirectToLogin()
    {
        return Redirect::to($this->loginView)->with($this->messageVariableName, $this->AuthenticationNeededMessage);
    }




//    public function store($credentialsOrAttributes = [])
//    {
//
//    }
//
//    public function show($id)
//    {
//
//    }
//
//    public function update($id, $attributes = array())
//    {
//
//    }
//
//    public function destroy($id)
//    {
//
//    }


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



    public function isSubjectModelInstance($potentialModel)
    {
        return $this->internalService->isModelInstance($potentialModel);
    }

    public function getSubjectModelClassName()
    {
        return $this->internalService->getModelClassName();
    }

    public function getSubjectModelAttributes()
    {
        return $this->internalService->getModelAttributes();
    }

    public function getSubjectModelSingleOwnerClassName()
    {
        return $this->internalService->getModelSingleOwnerClassName();
    }

    public function getAttributeFormatsForSubjectModel()
    {
        return $this->internalService->getModelSpecificAttributeValues($this->getSubjectModelAttributes(),'format');
    }
}

