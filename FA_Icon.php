<?php
namespace GDO\FontAwesome;

use GDO\UI\GDT_IconUTF8;

/**
 * FontAwesome icon provider
 * 
 * @author gizmore
 * @since 6.01
 * @version 6.07
 */
final class FA_Icon
{
    public static $MAP = array(
        'account' => 'address-card',
        'add' => 'plus',
        'alert' => 'bell',
        'all' => 'list',
        'arrow_down' => 'sort-down',
        'arrow_left' => 'arrow-left',
        'arrow_right' => 'arrow-right',
        'arrow_up' => 'sort-up',
        'bars' => 'bars',
        'captcha' => 'lock',
        'create' => 'plus-circle',
        'credits' => 'credit-card',
        'delete' => 'minus-circle',
        'done' => 'check',
        'done_all' => 'check-double',
        'download' => 'download',
        'edit' => 'edit',
        'email' => 'envelope',
        'face' => 'user',
        'help' => 'question-circle',
        'language' => 'language',
        'level' => 'trophy',
        'list' => 'th-list',
        'menu' => 'bars',
        'minus' => 'minus',
        'message' => 'comment-dots',
        'money' => 'money-bill',
        'plus' => 'plus',
        'quote' => 'quote-left',
        'remove' => 'minus',
        'reply' => 'reply',
        'search' => 'search',
        'tag' => 'tags',
        'table' => 'table',
        'title' => 'hashtag',
        'trophy' => 'trophy',
        'upload' => 'upload',
        'user' => 'user',
        'view' => 'eye',
        
        // // 			'up' => 'caret-up',
    // // 			'down' => 'caret-down',
    // // 			'left' => 'chevron-left',
    // // 			'right' => 'chevron-right',
    // 			'done' => 'check',
    // 			'success' => 'check-square',
    // 			'error' => 'exclamation-triangle',
    // 			'email' => 'envelope-o',
    // 			'title' => 'header',
    // 			'message' => 'paragraph',
    // 			'captcha' => 'lock',
    // 			'tooltip' => 'info-circle',
    // 			'star' => 'star',
    // 			'tags' => 'tags',
    // 			'file' => 'paperclip',
    // 			'settings' => 'gear',
    // 			'refresh' => 'refresh',
    // 			'credits' => 'money',
    // 			'back' => 'undo',
    // 			'link' => 'chain',
    // 			'upload' => 'upload',
    );
    
	public static function iconS($icon, $iconText, $style)
	{
		if (!isset(self::$MAP[$icon]))
		{
			return GDT_IconUTF8::iconS($icon, $iconText, $style);
		}
		return sprintf('<span class="gdo-icon"%s><i class="fa fa-%s" title="%s"></i></span>', 
		    $style, self::$MAP[$icon], $iconText);
	}
	
}
