<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 1/15/15
 * Time: 5:08 PM
 */

namespace tests\superCategoryDirectory;

use App\Base\ExternalServiceTestAssist;

use App\DomainLogic\SuperCategoryDirectory\SuperCategory;
use Illuminate\Support\Facades\View;



class SuperCategoryControllerTest extends ExternalServiceTestAssist {

    public $indexRoute = 'dashboard/supercategory';
    public $indexView = 'supercategory.index';
    public $indexCollectionVariable = 'supercategories';
    public $createRoute = 'dashboard/supercategory/create';
    public $createView = 'supercategory.create';
    public $showRoute = 'dashboard/supercategory';
    public $showView = 'supercategory.show';
    public $showInstanceVariable = 'supercategory';
    public $editRoute = 'dashboard/supercategory/{id}/edit';
    public $editView = 'supercategory.edit';
    public $editInstanceVariable = 'supercategoryForEdit';
    public $storeRoute = 'dashboard/supercategory/';
    public $storeAfterPostView = 'supercategory.show';
    public $updateRoute = 'dashboard/supercategory';
    public $updateAfterPutView = 'supercategory.show';
    public $destroyRoute = 'dashboard/supercategory';
    public $destroyAfterDeleteView = 'supercategory.index';

    public function __construct()
    {
        $this->externalService = new \SuperCategoryController();
    }
    /***********************************************************************************************************/
    /*                                          Index method test cases                                               */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_index_method_route_is_setup()
    {
        $this->assert_index_method_route_is_setup();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_index_method_route_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_index_method_route_redirects_to_login_if_user_is_not_authenticated();
    }
    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_index_method_view_exists()
    {
        $this->assert_index_method_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_index_method_view_contains_paginated_variable_instance()
    {
        $this->assert_index_method_view_contains_paginated_variable_instance();
    }
    /***********************************************************************************************************/
    /*                                          Create method test cases                                              */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_create_method_route_is_setup()
    {
        $this->assert_create_method_route_is_setup();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_create_method_view_exists()
    {
        $this->assert_create_method_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_create_method_route_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_create_method_route_redirects_to_login_if_user_is_not_authenticated();
    }

    /***********************************************************************************************************/
    /*                                          Show method test cases                                              */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_route_is_setup()
    {
        $this->assert_show_method_route_is_setup();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_view_exists()
    {
        $this->assert_show_method_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_show_method_redirects_to_login_if_user_is_not_authenticated();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_view_contains_variable_instance_of_correct_class()
    {
        $this->assert_show_method_view_contains_variable_instance_of_correct_class();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_view_returns_correct_instance()
    {
        $this->assert_show_method_view_returns_correct_instance();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_redirects_to_index_route_on_bad_id_error()
    {
        $this->assert_show_method_redirects_to_index_route_on_bad_id_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_show_method_redirects_with_correct_error_message_on_bad_id_error()
    {
        $this->assert_show_method_redirects_with_correct_error_message_on_bad_id_error();
    }

    /***********************************************************************************************************/
    /*                                          Edit method test cases                                              */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_route_is_setup()
    {
        $this->assert_edit_method_route_is_setup();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_view_exists()
    {
        $this->assert_edit_method_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_edit_method_redirects_to_login_if_user_is_not_authenticated();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_redirects_to_index_on_bad_id_error()
    {
        $this->assert_edit_method_redirects_to_index_on_bad_id_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_redirects_with_correct_error_message_on_bad_id_error()
    {
        $this->assert_edit_method_redirects_with_correct_error_message_on_bad_id_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_view_contains_instance_of_correct_class()
    {
        $this->assert_edit_method_view_contains_instance_of_correct_class();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_edit_method_view_contains_correct_subjectModel_instance()
    {
        $this->assert_edit_method_view_contains_correct_subjectModel_instance();
    }

    /***********************************************************************************************************/
    /*                                          Store method test cases                                              */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_store_method_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_store_method_redirects_to_login_if_user_is_not_authenticated();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_store_method_after_post_view_exists()
    {
        $this->assert_store_method_after_post_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_store_method_redirects_to_correct_route_on_success()
    {
        $this->assert_store_method_redirects_to_correct_route_on_success();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_store_method_redirects_to_create_route_on_bad_attributes_error()
    {
        $this->assert_store_method_redirects_to_create_route_on_bad_attributes_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_store_method_view_has_correct_error_message_on_bad_attributes_error()
    {
        $this->assert_store_method_view_has_correct_error_message_on_bad_attributes_error();
    }


    /***********************************************************************************************************/
    /*                                          Update method test cases                                         */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_route_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_update_method_route_redirects_to_login_if_user_is_not_authenticated();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_after_put_view_exists()
    {
        $this->assert_update_method_after_put_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_redirects_to_show_route_on_success()
    {
        $this->assert_update_method_redirects_to_show_route_on_success();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_redirects_with_correct_instance_on_success()
    {
        $this->assert_update_method_redirects_with_correct_instance_on_success();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_redirects_to_edit_route_on_bad_attributes_error()
    {
        $this->assert_update_method_redirects_to_edit_route_on_bad_attributes_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_redirects_with_correct_error_message_on_bad_attributes_error()
    {
        $this->assert_update_method_redirects_with_correct_error_message_on_bad_attributes_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_redirects_to_index_route_on_bad_id_error()
    {
        $this->assert_update_method_redirects_to_index_route_on_bad_id_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_update_method_redirects_with_correct_error_message_on_bad_id_error()
    {
        $this->assert_update_method_redirects_with_correct_error_message_on_bad_id_error();
    }


    /***********************************************************************************************************/
    /*                                          Destroy method test cases                                         */
    /***********************************************************************************************************/

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_route_redirects_to_login_if_user_is_not_authenticated()
    {
        $this->assert_destroy_method_route_redirects_to_login_if_user_is_not_authenticated();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_after_delete_view_exists()
    {
        $this->assert_destroy_method_after_delete_view_exists();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_correct_instance_is_deleted()
    {
        $this->assert_destroy_method_correct_instance_is_deleted();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_redirects_to_index_route_on_success()
    {
        $this->assert_destroy_method_redirects_to_index_route_on_success();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_redirects_with_correct_message_on_success()
    {
        $this->assert_destroy_method_redirects_with_correct_message_on_success();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_redirects_to_index_route_on_bad_id_error()
    {
        $this->assert_destroy_method_redirects_to_index_route_on_bad_id_error();
    }

    /**
     * @group superCategoryGlobalTests
     * @group controllerTests
     * @group superCategoryControllerTests
     */
    public function test_destroy_method_redirects_with_correct_message_on_bad_id_error()
    {
        $this->assert_destroy_method_redirects_with_correct_message_on_bad_id_error();
    }
}
