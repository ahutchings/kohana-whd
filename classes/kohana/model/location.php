<?php

class Kohana_Model_Location extends ORM
{
    protected $_primary_key        = 'location_id';
    protected $_primary_val        = 'location_name';
    protected $_table_names_plural = FALSE;
    protected $_sorting            = array('location_name' => 'ASC');

    protected $_has_many = array
    (
        'job_tickets' => array(),
    );
}
