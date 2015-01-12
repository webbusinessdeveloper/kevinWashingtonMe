<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 1/7/15
 * Time: 7:47 PM
 */

namespace tests\skillDirectory;


use App\Base\InternalServiceTestAssist;
use App\DomainLogic\SkillDirectory\SkillInternalService;
use Illuminate\Foundation\Testing\TestCase;

class SkillInternalServiceTest extends InternalServiceTestAssist{


    /***********************************************************************************************************/
    /*                                          Store method tests                                              */
    /***********************************************************************************************************/


    /**
     *Test store method returns an instance of the correct class.
     */
    public function test_store_method_creates_correct_instance_if_attributes_are_correct()
    {
        $storeMethodResponse = $this->returnStoreResponseWithGoodAttributesThenDestroyOwner();

        $subjectModelId = $storeMethodResponse->id;

        $this->assertTrue($this->service->isModelInstance($storeMethodResponse));

        $className = $this->getSubjectModelClassName();

        $className::destroy($subjectModelId);

    }


    /**
     *Test store method stores the instance in the database.
     */
    public function test_store_method_saves_instance_in_database_if_attributes_are_correct()
    {
        $databaseInstanceAfterStoreMethodCalled = $this->returnDatabaseInstanceAfterStoreMethodCalledThenDestroyOwner();

        $this->assertTrue($this->service->isModelInstance($databaseInstanceAfterStoreMethodCalled));

        $subjectModelId = $databaseInstanceAfterStoreMethodCalled->id;

        $className = $this->getSubjectModelClassName();
        $className::destroy($subjectModelId);
    }



    /**
     *Test store method returns error message message if attributes are invalid.
     */
    public function test_store_method_returns_error_message_if_attributes_are_invalid()
    {
        $invalidStoreMethodErrorMessage = $this->returnStoreResponseWithBadAttributeValues();

        $this->assertEquals('Invalid attributes sent to store method.', $invalidStoreMethodErrorMessage);
    }


    /***********************************************************************************************************/
    /*                                          Show method tests                                              */
    /***********************************************************************************************************/

    /**
     *Test show method returns an instance of the correct class.
     */
    public function test_show_method_returns_instance_of_correct_class_if_subjectModel_id_exists()
    {
        $showMethodResponse = $this->returnShowResponseWithGoodIdForSubjectModelWithOwner();

        $this->assertTrue($this->service->isModelInstance($showMethodResponse));

        $subjectModelId = $showMethodResponse->id;
        $className = $this->getSubjectModelClassName();
        $className::destroy($subjectModelId);
    }


    /**
     *Test show method response is the correct instance.
     */
    public function test_show_method_returns_correct_instance_if_subjectModel_id_exists()
    {
        // TODO: Implement  public function test_show_method_returns_correct_instance_if_subjectModel_id_exists()

    }


    /**
     *Test show method returns error message if id is invalid.
     */
    public function test_show_method_returns_error_message_if_subjectModel_id_does_not_exist()
    {
        //get bad show response
        $showResponseWithInvalidId = $this->returnShowResponseWithBadIdForSubjectModel();

        //assert error message
        $this->assertEquals('Model not found.', $showResponseWithInvalidId);
    }

    /***********************************************************************************************************/
    /*                                          Update method tests                                              */
    /***********************************************************************************************************/

    /**
     *Test update method returns instance of correct class.
     */
    public function test_update_method_returns_correct_instance_if_subjectModel_id_and_attributes_are_correct()
    {
        $updateMethodResponse = $this->returnUpdateResponseWithGoodIdAndGoodAttributesAndGoodOwnerIdBeforeAndAfterUpdate();

        $this->assertTrue($this->service->isModelInstance($updateMethodResponse['after']));

        $this->cleanUpAfterTesting($updateMethodResponse['before']);
    }

    /**
     *Test update method returns changes made to the instance.
     */
    public function test_update_method_returns_updated_instance_if_subjectModel_id_and_attributes_are_correct()
    {
        $updateMethodResponse = $this->returnUpdateResponseWithGoodIdAndGoodAttributesAndGoodOwnerIdBeforeAndAfterUpdate();

        $this->assertNotEquals($updateMethodResponse['before']->title, $updateMethodResponse['after']->title);

        $this->cleanUpAfterTesting($updateMethodResponse['before']);
    }

    public function test_update_method_saves_changes_in_database_if_subjectModel_id_and_attributes_are_correct()
    {
        
    }

    public function test_update_method_returns_error_message_if_attributes_are_invalid()
    {
        // TODO: Implement test_update_method_returns_error_message_if_attributes_are_invalid() method.
    }

    public function test_update_method_returns_error_message_if_subjectModel_id_does_not_exist()
    {
        // TODO: Implement test_update_method_returns_error_message_if_subjectModel_id_does_not_exist() method.
    }


    /***********************************************************************************************************/
    /*                                          Update method tests                                              */
    /***********************************************************************************************************/

    public function test_destroy_method_removes_instance_from_database_if_subjectModel_id_is_correct()
    {
        // TODO: Implement test_destroy_method_removes_instance_from_database_if_subjectModel_id_is_correct() method.
    }

    public function test_destroy_method_returns_error_message_if_subjectModel_id_does_not_exist()
    {
        // TODO: Implement test_destroy_method_returns_error_message_if_subjectModel_id_does_not_exist() method.
    }


    /***********************************************************************************************************/
    /*                                          Test helper properties                                            */
    /***********************************************************************************************************/

    public $service;

    public function __construct()
    {
        $this->service = new SkillInternalService();
    }


}

