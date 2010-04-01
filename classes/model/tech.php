<?php

class Model_Tech extends ORM
{
    protected $_primary_key = 'client_id';
    protected $_table_names_plural = FALSE;

    protected $_has_many = array(
        'job_tickets' => array('foreign_key' => 'assigned_tech_id'),
        'tech_group_levels' => array('through' => 'tech_group_level_tech')
    );
}
