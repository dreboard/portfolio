<?php

/**
 * Sites Model Class
 *
 * PHP version 7.3
 *
 * @category   Models
 * @package    SiteModels
 * @author     Dre Board <dre.board@gmail.com>
 * @copyright  2019 Dev-PHP Group
 * @license    https://github.com/dreboard/portfolio
 * @version    2.0.0
 * @link       https://github.com/dreboard/portfolio
 * @since      File available since Release 2.0.0
 * @deprecated File deprecated in Release 4.0.0
 */
namespace Model;

class Sites extends \Model {

 	/**
	 * Get site by id
	 *
	 * @param int $id The id of the site
	 * @return array
	 */   
	public static function get_site(int $id)
    {
		$sites = \DB::select()->from('sites')->where('id', $id)->execute()->as_array();
		return $sites;
    }

 	/**
	 * Return all sites
	 *
	 * @return array
	 */  	
    public static function get_sites()
    {
		$query = \DB::query('SELECT * FROM sites', \DB::SELECT);
		$result = $query->as_assoc()->execute()->as_array();
		$results = \DB::select()->from('sites')->execute()->as_array();
		return $results;
    }	

}