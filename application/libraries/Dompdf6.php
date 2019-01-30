<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/dompdf-0.6.2/dompdf_config.inc.php';

class Dompdf6 extends DOMPDF
{
    function __construct()
    {
        parent::__construct();
    }
}