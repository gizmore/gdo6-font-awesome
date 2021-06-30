<?php
namespace GDO\FontAwesome;

use GDO\UI\GDT_IconUTF8;

/**
 * FontAwesome icon provider.
 * 
 * @author gizmore
 * @version 6.10.1
 * @since 6.1.0
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
        'audio' => 'itunes-note',
        'back' => 'arrow-left',
        'bank' => 'piggy-bank',
        'bars' => 'bars',
        'birthday' => 'birthday-cake',
        'block' => 'ban',
        'book' => 'book',
        'bulb' => 'lightbulb',
        'calendar' => 'calendar-alt',
        'captcha' => 'lock',
        'caret' => 'caret-right',
        'check' => 'check',
        'country' => 'flag',
        'create' => 'plus-circle',
        'credits' => 'credit-card',
        'cut' => 'cut',
        'delete' => 'minus-circle',
        'done' => 'check',
        'done_all' => 'check-double',
        'download' => 'download',
        'edit' => 'edit',
        'email' => 'envelope',
        'error' => 'exclamation-triangle',
        'face' => 'user',
        'female' => 'female',
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
        'settings' => 'cog',
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
	    static $fas;
	    
	    if ($fas === null)
	    {
	        $fas = Module_FontAwesome::instance()->cfgFontAwesomeStyle();
	    }
	    
		if (!isset(self::$MAP[$icon]))
		{
			return GDT_IconUTF8::iconS($icon, $iconText, $style);
		}
		return sprintf('<span class="gdo-icon gdo-fa-icon"%s><i class="%s fa-%s" title="%s"></i></span>', 
		    $style, $fas, self::$MAP[$icon], $iconText);
	}
	
}
