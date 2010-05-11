<?php

class Kohana_Model_Tech extends ORM
{
    protected $_primary_key = 'client_id';
    protected $_table_names_plural = FALSE;

    protected $_has_many = array(
        'job_tickets' => array('foreign_key' => 'assigned_tech_id'),
        'tech_group_levels' => array('through' => 'tech_group_level_tech')
    );

    public function __get($column)
    {
        // client relation hack, since client_id does not map to the correct client
        if ($column == 'client')  {
            $this->_load();

            if (isset($this->_related[$column])) {
                $model = $this->_related[$column];
            } else {
                $model = ORM::factory($column);
            }

            $model->where('client.user_name', '=', $this->_object['user_name'])->find();

            return $this->_related[$column] = $model;
        }

        return parent::__get($column);
    }
}
