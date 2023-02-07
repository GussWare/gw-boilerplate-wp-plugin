<?php

namespace GussWare\GwBoilerplate\Admin\Controllers;

use GussWare\GwBoilerplate\Includes\Dto\GwBoilerplateDto;
use GussWare\GwBoilerplate\Includes\Dto\GwOptionsDto;
use GussWare\GwBoilerplate\Includes\Helpers\GwInputHelper;
use GussWare\GwBoilerplate\Includes\Services\GwBoilerplateService;
use GussWare\GwBoilerplate\Includes\Libraries\GwRequestLibrary;
use GussWare\GwBoilerplate\Admin\Validations\Boilerplate\GwBoilerplateCreateValidation;
use GussWare\GwBoilerplate\Admin\Validations\Boilerplate\GwBoilerplateUpdateValidation;
use GussWare\GwBoilerplate\Admin\Validations\Boilerplate\GwBoilerplateByIdValidation;

class GwCrudController
{
    protected $GwBoilerplateService;

    protected $GwBoilerplateCreateValidation;

    protected $GwBoilerplateUpdateValidation;
    
    protected $GwBoilerplateByIdValidation;

    protected $GwRequest;

    public function __construct()
    {
        $this->GwBoilerplateService             = new GwBoilerplateService();
        $this->GwBoilerplateCreateValidation    = new GwBoilerplateCreateValidation();
        $this->GwBoilerplateUpdateValidation    = new GwBoilerplateUpdateValidation();
        $this->GwBoilerplateByIdValidation      = new GwBoilerplateByIdValidation();

        $this->GwRequest                        = new GwRequestLibrary();
    }

    public function ajax_gw_boilerplate_pagination()
    {
        $filter     = GwInputHelper::toDto(new GwBoilerplateDto(), $_GET);
        
        $options    = GwInputHelper::toDto(new GwOptionsDto(), $_GET);

        $response   = $this->GwBoilerplateService->find_paginate($filter, $options);

        wp_send_json($response);
    }

    /**
     * Summary of ajax_gw_boilerplate_create
     * 
     * @return void
     */
    public function ajax_gw_boilerplate_create()
    {
        $data = $_POST;
        
        $validate = $this->GwBoilerplateCreateValidation->validate($data);

        if (!$validate) {
            wp_send_json_error($this->GwBoilerplateCreateValidation->to_array());
            wp_die();
        }

        $data = GwInputHelper::toDto(new GwBoilerplateDto(), $data);

        $result = $this->GwBoilerplateService->create($data);

        if (!$result) {
            wp_send_json_error(array(
                GW_BOILERPLATE_AJAX_MESSAGES => __("Hay un problema al momento de realizar la operación. Por favor intentelo mas tarde.", GW_BOILERPLATE_TEXTDOMAIN),
            ));
            wp_die();
        }

        wp_send_json_success(array(
            GW_BOILERPLATE_AJAX_MESSAGES => __("Datos Ingresados", GW_BOILERPLATE_TEXTDOMAIN),
        ));
    }

    /**
     * Summary of ajax_gw_boilerplate_update
     * 
     * @return void
     */
    public function ajax_gw_boilerplate_update()
    {
        $id     = sanitize_text_field('id');
        $data   = $_POST['data'];

        $validate = $this->GwBoilerplateUpdateValidation->validate($id, $data);

        if (!$validate) {
            wp_send_json_error($this->GwBoilerplateUpdateValidation->to_array());
            wp_die();
        }

        $data = GwInputHelper::toDto(new GwBoilerplateDto(), $data);

        $result = $this->GwBoilerplateService->update($id, $data);

        if (!$result) {
            wp_send_json_error(array(
                GW_BOILERPLATE_AJAX_MESSAGES => __("Hay un problema al momento de realizar la operación. Por favor intentelo mas tarde.", GW_BOILERPLATE_TEXTDOMAIN),
            ));
            wp_die();
        }

        wp_send_json_success(array(
            GW_BOILERPLATE_AJAX_MESSAGES => __("Datos Ingresados", GW_BOILERPLATE_TEXTDOMAIN),
        ));
    }

    /**
     * Summary of ajax_gw_boilerplate_delete
     * 
     * @return void
     */
    public function ajax_gw_boilerplate_delete()
    {
        $id         = $this->GwRequest->getInput('id');
        $validate   = $this->GwBoilerplateByIdValidation->validate($id);

        if (!$validate) {
            wp_send_json_error($this->GwBoilerplateByIdValidation->to_array());
            wp_die();
        }

        $result = $this->GwBoilerplateService->delete($id);

        if (!$result) {
            wp_send_json_error(array(
                GW_BOILERPLATE_AJAX_MESSAGES => __("Hay un problema al momento de realizar la operación. Por favor intentelo mas tarde.", GW_BOILERPLATE_TEXTDOMAIN),
            ));
            wp_die();
        }

        wp_send_json_success(array(
            GW_BOILERPLATE_AJAX_MESSAGES => __("Datos Ingresados", GW_BOILERPLATE_TEXTDOMAIN),
        ));
    }
}
