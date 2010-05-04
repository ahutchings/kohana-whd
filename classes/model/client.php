<?php

class Model_Client extends ORM
{
    protected $_primary_key = 'client_id';
    protected $_table_names_plural = FALSE;

    public function __get($column)
    {
        // tech relation hack
        if ($column == 'tech')  {
            $this->_load();

            if (isset($this->_related[$column])) {
                $model = $this->_related[$column];
            } else {
                $model = ORM::factory($column);
            }

            $model->where('tech.user_name', '=', $this->_object['user_name'])->find();

            return $this->_related[$column] = $model;
        }

        return parent::__get($column);
    }
}
