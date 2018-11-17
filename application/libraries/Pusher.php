<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . 'pusher/vendor/autoload.php';

class PusherClass extends Pusher
{
    function __construct()
    {
        parent::__construct();
    }
}