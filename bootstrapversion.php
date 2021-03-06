<?php
/**
 * @package    Bootstrap Version - Joomla Plugin
 *
 * @author     Travis Risner <git@trav.dev>
 * @copyright  2020 Travis Risner. All Rights Reserved.
 * @license    GNU Lesser General Public License version 3 or later
 * @link       https://trav.dev
 */


defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Bootstrap Version Joomla! Plugin
 *
 * @package   plg_bootstrapversion
 * @since     1.0.0
 */
class plgSystemBootstrapVersion extends CMSPlugin {
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0.0
	 */
  protected $app;

  /**
   * Document Object
   *
   * @var JDocument
   */
  protected $doc;

  public function __construct() {
    $this->app = Factory::getApplication();
    $this->doc = Factory::getDocument();
  }
  
  /**
   * Function ran before the head of the document is compiled
   *
   * @return  [type]  [return description]
   */
	public function onBeforeCompileHead() {
		if ($this->app->isAdmin()) {
			return;
		}
	}  

}