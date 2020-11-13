<?php
namespace GDO\FontAwesome;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Icon;
use GDO\Core\Module_Core;

/**
 * Registers FA_Icon as Icon-Provider when installed and active.
 * 
 * @author gizmore
 * @version 6.05
 * @since 6.03
 */
final class Module_FontAwesome extends GDO_Module
{
	public $module_priority = 12;
	
	public function defaultEnabled() { return false; }

	public function onInit()
	{
		# Set icon provider.
		$method = ["GDO\FontAwesome\FA_Icon", 'iconS'];
		GDT_Icon::$iconProvider = $method; 
	}
	
	public function onIncludeScripts()
	{
		$min = Module_Core::instance()->cfgMinifyJS() !== 'no' ? '.min' : '';
		$this->addBowerCSS("@fortawesome/fontawesome-free/css/all$min.css");
		$this->addCSS('css/gdo-font-awesome.css');
	}

}
