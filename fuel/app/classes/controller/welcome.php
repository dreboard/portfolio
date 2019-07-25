<?php
/**
 * My Portfolio Site.
 *
 * @package    Portfolio
 * @version    2.0.0
 * @author     2019 Dev-PHP Group
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://github.com/dreboard
 */

/**
 * The Welcome Controller.
 *
 * A site controller
 *
 * @package  app
 * @extends  Controller
 */
use \Model\Sites;
 
class Controller_Welcome extends Controller
{
	/**
	 * The welcome page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/index');
        $view->footer = View::forge('templates/footer');
		return $view;
	}

	/**
	 * Generate index page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/index');
        $view->footer = View::forge('templates/footer');
		return $view;		
	}
	
	/**
	 * Generate Projects page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_projects()
	{
		$sites = Sites::get_sites();
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/projects', ['sites' => $sites]);
        $view->footer = View::forge('templates/footer');
		return $view;
	}
	
	/**
	 * Generate Site page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_site($id)
	{
		$id = (int)$this->param('id');
		$site = Sites::get_site($id);
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/site', ['site' => $site[0]]);
        $view->footer = View::forge('templates/footer');
		return $view;
	}	
	/**
	 * Generate experience page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_experience()
	{
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/experience');
        $view->footer = View::forge('templates/footer');
		return $view;
	}	
	/**
	 * Generate skills page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_skills()
	{
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/skills');
        $view->footer = View::forge('templates/footer');
		return $view;
	}	
	/**
	 * Generate education page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_education()
	{
		$view = View::forge('templates/layout');
        $view->head = View::forge('templates/head');
        $view->content = View::forge('welcome/education');
        $view->footer = View::forge('templates/footer');
		return $view;
	}
	
	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
