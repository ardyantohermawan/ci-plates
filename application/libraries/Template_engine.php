<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_engine {
    public function render($base='', $data=array())
    {
        $request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

        $templates = new League\Plates\Engine(APPPATH . 'views/templates');
		$templates->addFolder('auth', APPPATH . 'views/templates/auth');
		$templates->loadExtension(new League\Plates\Extension\Asset(getcwd() . '/assets/', false));
		$templates->loadExtension(new League\Plates\Extension\URI($request->getPathInfo()));
        
        return $templates->render($base, $data);
    }
}