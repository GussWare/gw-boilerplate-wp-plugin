<?php

namespace GussWare\GwBoilerplate\Includes\Models;

class GwBoilerplateModel
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = \PluginEver\QueryBuilder\Query::init();

        $this->table = "gw_crud";
    }

    public function find_all($filter, $options, $is_array = true)
    {
        $query = $this->db->select("*");
        $query = $query->from($this->table);

        /*
        if ($filter->name) {
           // $query = $query->where("name", "like", "%" . $filter->name . "%");
        }

        if ($filter->slug) {
            //$query = $query->where("slug", $filter->slug);
        }

        if ($options->limit && $options->offset) {
            //$query = $query->limit($options->limit, $options->offset);
        }

        if ($options->sortBy && $options->order) {
            //$query = $query->order_by($options->order, $options->sortBy);
        }

     
        if ($options->search) {
            $query = $query->where("name", "like", "%" . $options->search . "%");
            $query = $query->orWhere("slug", "like", "%" . $options->search . "%");
            $query = $query->orWhere("description", "like", "%" . $options->search . "%");
        }


        if ($options->count) {
           // return $query->count();
        }
        */

        $result = $query->get();

        return $result;
    }

    public function find_count($filter = null)
    {
        /*
        $obj = new \stdClass();
        $obj->count = true;

        $count = $this->find_all($filter, $obj);

        return $count;
        */

        $results = $this->db->select('*')
                 ->from('posts')
                 ->count();

        return $results;
    }

    public function find_by_id($id)
    {
        $result = $this->db->find($id);

        return $result;
    }

    public function create($data)
    {
        $data = array(
            "name" => sanitize_text_field($data->name),
            "slug" => sanitize_text_field($data->slug),
            "description" => sanitize_textarea_field($data->description)
        );

        $result = $this->db->table($this->table)->insert($data);

        return $result;
    }

    public function update($id, $data)
    {
        $data = array(
            "name" => sanitize_text_field($data->name),
            "slug" => sanitize_text_field($data->slug),
            "description" => sanitize_textarea_field($data->description)
        );

        $result = $this->db->from($this->table)->where($id)->update($data);

        return $result;
    }

    public function delete($id)
    {
        $result = $this->db->where($id)->delete();

        return $result;
    }
}
