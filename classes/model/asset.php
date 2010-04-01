<?php

class Model_Asset extends ORM
{
    protected $_primary_key = 'asset_id';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array(
        'location' => array(),
        'model' => array('model' => 'model', 'foreign_key' => 'model_id'),
        'status' => array('model' => 'asset_status', 'foreign_key' => 'status_id'),
    );

    protected $_has_many = array(
        'clients' => array('through' => 'asset_client')
    );
}
