<?php
namespace GDO\FontAwesome;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Icon;
use GDO\Core\Module_Core;

/**
 * Registers FA_Icon as Icon-Provider when installed and active.
 * 
 * @author gizmore
 * @since 6.03
 * @version 6.05
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
		$this->addBowerCSS("font-awesome/css/font-awesome$min.css");
		$this->addCSS('css/gdo-font-awesome.css');
	}
}
