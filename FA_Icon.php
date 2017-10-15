<?php
namespace GDO\FontAwesome;

use GDO\UI\GDT_IconUTF8;

/**
 * FontAwesome icon provider
 * 
 * @author gizmore
 * @since 6.01
 * @version 6.05
 */
final class FA_Icon
{
	public static function iconS($icon, $style)
	{
		static $map = array(
			'add' => 'plus',
			'create' => 'plus-circle',
			'delete' => 'minus-circle',
			'remove' => 'minus',
			'up' => 'caret-up',
			'down' => 'caret-down',
			'left' => 'chevron-left',
			'right' => 'chevron-right',
			'done' => 'check',
			'success' => 'check-square',
			'error' => 'exclamation-triangle',
			'email' => 'envelope-o',
			'title' => 'header',
			'message' => 'paragraph',
			'captcha' => 'lock',
			'tooltip' => 'info-circle',
			'star' => 'star',
			'tags' => 'tags',
			'file' => 'paperclip',
			'settings' => 'gear',
			'refresh' => 'refresh',
			'credits' => 'money',
			'back' => 'undo',
			'link' => 'chain',
			'upload' => 'upload',
			
		);
		if (!isset($map[$icon]))
		{
			return GDT_IconUTF8::iconS($icon, $style);
		}
		return sprintf('<span class="gdo-icon"%s><i class="fa fa-%s"></i></span>', $style, $map[$icon]);
	}
	
}
