<?php
namespace Config;

/**
 * BackgroundService.php
 * Created 18/02/2021
 * @author Mehdi Mehtarizadeh
 * 
 * This file contains configuration 
 * 
 */

class BackgroundService extends \CodeIgniter\Config\BaseConfig
{
    public $address = '127.0.0.1';
    public $port = 49201;
    public $binPath = '/local/software/CafeVariomeService/cvservice.php';
}
