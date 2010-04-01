<?php

class Model_Job_Ticket extends ORM
{
    protected $_primary_key = 'job_ticket_id';
    protected $_primary_val = 'subject';
    protected $_table_names_plural = FALSE;

    protected $_belongs_to = array(
        'assigned_tech' => array('model' => 'tech'),
        'status_type' => array(),
        'priority_type' => array(),
        'location' => array()
    );
}
