<?php

namespace Admin\Yiye;


use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Yiye
{
	/**
	 * @var SessionManager
	 */
	protected $session;
	
	/**
	 * @var Repository
	 */
	protected $config;

    /**
     * Yiye constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
	public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function print_yiye($msg = '')
    {
//        $config_arr = $this->config->get('yiye.options');
        return $msg . '<h1>OK</h1>';
    }
}