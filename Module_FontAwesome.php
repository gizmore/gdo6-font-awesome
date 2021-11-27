<?php
namespace GDO\FontAwesome;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Icon;
use GDO\Javascript\Module_Javascript;
use GDO\DB\GDT_EnumNoI18n;
use GDO\DB\GDT_Checkbox;

/**
 * Registers FA_Icon as Icon-Provider when installed and active.
 * Choose between fas and far style globally. 
 * 
 * @author gizmore
 * @version 6.11.0
 * @since 6.3.0
 */
final class Module_FontAwesome extends GDO_Module
{
	public $module_priority = 12;
	
	public function onLoadLanguage() { return $this->loadLanguage('lang/fa'); }
	
	public function getModuleLicenseFilenames()
	{
		return [
			'bower_components/@fortawesome/fontawesome-free/LICENSE.txt'
		];
	}
	
	##############
	### Config ###
	##############
	public function getConfig()
	{
	    return [
	    	GDT_EnumNoI18n::make('fa_style')->enumValues('fa', 'fab', 'far', 'fas')->notNull()->initial('fas'),
	    	GDT_Checkbox::make('fa_shim4')->initial('1'),
	    ];
	}
	public function cfgFontAwesomeStyle() { return $this->getConfigVar('fa_style'); }
	public function cfgFontAwesomeShim4() { return $this->getConfigVar('fa_shim4'); }
	
	############
	### Init ###
	############
	public function onInit()
	{
		# Set icon provider.
		$method = ["GDO\FontAwesome\FA_Icon", 'iconS'];
		GDT_Icon::$iconProvider = $method; 
	}
	
	public function onIncludeScripts()
	{
		$min = Module_Javascript::instance()->jsMinAppend();
		$this->addBowerCSS("@fortawesome/fontawesome-free/css/all$min.css");
		if ($this->cfgFontAwesomeShim4())
		{
			$this->addBowerCSS("@fortawesome/fontawesome-free/css/v4-shims$min.css");
		}
	}

}
