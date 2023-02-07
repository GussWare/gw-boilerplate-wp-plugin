<?php
namespace GussWare\GwBoilerplate\Includes\Services;

use GussWare\GwBoilerplate\Includes\Models\GwBoilerplateModel;
use GussWare\GwBoilerplate\Includes\Dto\GwPaginationDto;
use GussWare\GwBoilerplate\Includes\Helpers\GwInputHelper;

class GwBoilerplateService
{
    protected $Gw_Boilerplate_Model;

    public function __construct()
    {
        $this->Gw_Boilerplate_Model = new GwBoilerplateModel();    
    }

    public function find_paginate($filter, $options, $is_array = true)
    {
        $limit = $options->limit;
        $options->offset = ((int) $options->page - 1) * (int) $options->limit;
        
        $total_rows = $this->Gw_Boilerplate_Model->find_count();
        $total_pages =  ceil($total_rows / $options->limit);

        $data = $this->Gw_Boilerplate_Model->find_all($filter, $options, $is_array);

        $total_results = $this->Gw_Boilerplate_Model->find_count($filter);

        $pagination = GwInputHelper::toDto(new GwPaginationDto(), array(
            'results' => $data,
            'page' => $options->page,
            'totalPages' => $total_pages,
            'totalResults' => $total_results,
            'totalRegister' => $total_rows,
            'limit' => $limit,
            'sortBy' => $options->sortBy
        ));

        return $pagination;
    }

    public function find_by_id($id)
    {
        $result = $this->Gw_Boilerplate_Model->find_by_id($id);

        return $result;
    }

    public function create($data)
    {
        $result = $this->Gw_Boilerplate_Model->create($data);

        return $result;
    }

    public function update($id, $data)
    {
        $result = $this->Gw_Boilerplate_Model->update($id, $data);

        return $result;
    }

    public function delete($id)
    {
        $result = $this->Gw_Boilerplate_Model->delete($id);

        return $result;
    }
}