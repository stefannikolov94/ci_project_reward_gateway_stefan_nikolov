<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$this->CI = & get_instance();
$config['base_url'] = base_url().'home/index';
$config['total_rows'] = $this->CI->db->get('posts')->num_rows();
$config['per_page'] = 2;
$config['num_links'] = 2;