<?php
/*
 * 5 :: 
 * Code is Poetry 
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       CRNRSTN :: The CRNRSTN :: Lightsaber 
 *                  RoCEv2 SOAP Services 
 *                  Layer, The CLR-SSL, is an 
 *                  advanced, open source, 
 *                  and distributed compute 
 *                  PHP framework providing: 
 *                  - a distributed and free 
 *                    instant messaging 
 *                    communications platform, 
 *                  - a distributed and free 
 *                    cloud-based file storage 
 *                    system with a built in 
 *                    photo gallery experience 
 *                    and with full social media 
 *                    integrations, and 
 *                  - a distributed, RAID 
 *                    style, schedulable, and 
 *                    RTM-automatable web site 
 *                    maintenance and back-up 
 *                    protocol with one click 
 *                    back-up recovery. 
 *
 *                  Here, at the end of this, 
 *                  the age of the church...
 *                  the age of grace, and 
 *                  looking to when the 
 *                  kingdom of this world 
 *                  shall become the kingdom 
 *                  of our Lord and of His 
 *                  His Christ (Rev. 11:15), 
 *                  the CLR-SSL is 
 *                  intentionally and 
 *                  specifically being 
 *                  prepared to function as a 
 *                  heavenly-hosted and 
 *                  enterprise licensed 
 *                  (MIT License) architecture 
 *                  that will connect the 
 *                  people in the heavens 
 *                  together with the people 
 *                  on the earth for much 
 *                  north-south fellowship. 
 *
 *                  The CLR-SSL is the 
 *                  practical and prophetic 
 *                  fulfillment of the Son of 
 *                  Man, the heavenly ladder, 
 *                  with angels of God ascending 
 *                  and descending upon the 
 *                  Son of Man as mentioned by 
 *                  the King of kings, 
 *                  Jesus Christ our Lord, in 
 *                  His word to our brother 
 *                  Nathanael in John 1:47-51 
 *                  and with the first mention 
 *                  in Holy Scriptures coming 
 *                  from Moses in his Genesis 
 *                  Chapter 28 account of 
 *                  Jacob's stone-pillow 
 *                  dream (28:12). 
 *
 *
 *                  5
 *
 *                  Last Modified: Saturday, August 15, 2026 @ 0420 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       Version :: 2.00.0001
 * Last Modified :: Tuesday, February 24, 2026 @ 04:20:01.120273 2026.
 *   Launch Date :: July 4, 2018 - Happy Independence Day from 
 *      (v1.0.0)                   my dog and I to you...wherever 
 *                                 and whenever you are. 
 *        Author :: Jonathan '5' Harris, CEO, CTO, Lead Full Stack 
 *                  Developer, and as of Q3 in 2025, Chief Creative 
 *                  here at eVifweb® 
 *                  jharris@eVifweb.com. eVifweb@gmail.com. 
 *           URI :: https://crnrstn.jony5.com
 *      Overview :: The CRNRSTN :: Lightsaber RoCEv2 
 *                  SOAP Services Layer, The CLR-SSL, 
 *                  is an advanced, open source, and 
 *                  distributed compute PHP 
 *                  framework providing: 
 *                  - a distributed and free 
 *                    instant messaging 
 *                    communications platform, 
 *                  - a distributed and free 
 *                    cloud-based file storage 
 *                    system with a built in 
 *                    photo gallery experience 
 *                    and with full social media 
 *                    integrations, and 
 *                  - a distributed and free, 
 *                    RAID style, schedulable, 
 *                    and RTM-automatable web 
 *                    site maintenance and 
 *                    back-up protocol with one 
 *                    click back-up recovery. 
 *
 *                  CRNRSTN :: is powered by eVifweb®
 *
 *                  CRNRSTN :: is powered by eCRM 
 *                             Strategy and Execution, Web 
 *                             Design & Development, and 
 *                             Only The Best Coffee. 
 *
 *
 *                  5
 *
 *                  Copyright © 2012-2027 eVifweb® development.
 *
 *                  All Rights Reserved.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *   Description :: The CRNRSTN :: Lightsaber RoCEv2 
 *                  SOAP Services Layer, The CLR-SSL 
 *                  is an advanced open source PHP 
 *                  class library that will 
 *                  facilitate and spread (via a 
 *                  SOAP services layer powered by 
 *                  NuSOAP v1.124) the operations of 
 *                  a web application across 
 *                  multiple servers or environments 
 *                  (e.g. localhost, stage, preprod, 
 *                  and n+1 production or a 
 *                  distributed compute of IoT). 
 *
 *                  With this tool, data and 
 *                  functionality possessing 
 *                  characteristics that inherently 
 *                  create distinctions between one 
 *                  environment and another can all 
 *                  be managed through one framework 
 *                  for an entire application. 
 *
 *                  IP address restrictions, error 
 *                  logging profiles, and database 
 *                  authentication credentials are 
 *                  a few areas within an 
 *                  application's architecture that 
 *                  the CLR-SSL has been designed 
 *                  to excel within. 
 *
 *                  Once the CLR-SSL has been 
 *                  configured to support all of a 
 *                  web application's running 
 *                  servers, one can seamlessly RTM 
 *                  the codebase of the web site 
 *                  without having to modify the 
 *                  configuration to account for any 
 *                  unique and environmentally 
 *                  specific parameters. 
 *
 *                  Receive the benefit of a robust 
 *                  and polished framework that will 
 *                  bubble up logs from exception 
 *                  notifications to any output 
 *                  channel (email, hidden HTML 
 *                  comment, native default,...etc.) 
 *                  of one's own choosing. 
 *
 *                  Stand on top of the CLR-SSL in 
 *                  order to, for example, organize 
 *                  and strengthen the 
 *                  communications architecture of 
 *                  any web application. 
 *
 *                  By supporting many-to-one proxy 
 *                  messaging relationships between 
 *                  slaves and a master 
 *                  "communications server", 
 *                  the CLR-SSL is able to 
 *                  streamline and simplify the 
 *                  management of web application 
 *                  communications. 
 *
 *                  One can configure everything 
 *                  from SMTP credentials to the 
 *                  character count for line 
 *                  wrapping in the text versions 
 *                  of multi-part HTML email. 
 *
 *                  The CLR-SSL is the "King's Highway" 
 *                  (Num. 20:17) for communications 
 *                  between the kingdom of our Lord 
 *                  Jesus Christ in heaven, and the 
 *                  people in His earthly kingdom 
 *                  here below. 
 *
 * Numbers 20:17 :: Please let us pass through your 
 *                  land. We will not pass through 
 *                  field or through vineyard, nor 
 *                  will we drink water from any well; 
 *                  we will go along the King’s Highway, 
 *                  not turning aside to the right or 
 *                  to the left, until we pass through 
 *                  your territory. 
 *
 *                  https://text.recoveryversion.bible/04_Numbers_20.htm#Num20-17
 *
 *
 *                  5
 *
 *                  Last Modified: Tuesday, February 24, 2026 @ 0502 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       License :: MIT 
 *                  Permission is hereby granted, 
 *                  free of charge, to any person 
 *                  obtaining a copy of this 
 *                  software and associated 
 *                  documentation files (the 
 *                  "Software"), to deal in the 
 *                  Software without restriction, 
 *                  including without limitation 
 *                  the rights to use, copy, modify, 
 *                  merge, publish, distribute, 
 *                  sublicense, and/or sell copies 
 *                  of the Software, and to permit 
 *                  persons to whom the Software is 
 *                  furnished to do so, subject to 
 *                  the following conditions: 
 *
 *                  The above copyright notice and 
 *                  this permission notice shall be 
 *                  included in all copies or 
 *                  substantial portions of 
 *                  the Software. 
 *
 *                  THE SOFTWARE IS PROVIDED 
 *                  "AS IS", WITHOUT WARRANTY OF ANY 
 *                  KIND, EXPRESS OR IMPLIED, 
 *                  INCLUDING BUT NOT LIMITED TO THE 
 *                  WARRANTIES OF MERCHANTABILITY, 
 *                  FITNESS FOR A PARTICULAR PURPOSE 
 *                  AND NONINFRINGEMENT. IN NO EVENT 
 *                  SHALL THE AUTHORS OR COPYRIGHT 
 *                  HOLDERS BE LIABLE FOR ANY CLAIM, 
 *                  DAMAGES OR OTHER LIABILITY, 
 *                  WHETHER IN AN ACTION OF 
 *                  CONTRACT, TORT OR OTHERWISE, 
 *                  ARISING FROM, OUT OF OR IN 
 *                  CONNECTION WITH THE SOFTWARE OR 
 *                  THE USE OR OTHER DEALINGS IN 
 *                  THE SOFTWARE. 
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 */

namespace CRNRSTN;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * RUNTIME EXECUTABLE :: /_R/_config
 *                       /_config.defaults
 *                       /load_static_cache
 *                       /interact_ui_theme_init
 *                       /crnrstn.R_interact_ui_theme_init.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE 			  :: Monday, July 22, 2024 @ 0747 hrs.
 * AUTHOR 		      :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI 				  :: https://jony5.com
 * TITLE              :: The CRNRSTN :: Lightsaber
 *						 SOAP Services Layer System User
 *						 Interface Style/Color Themes
 *						 Initialization Runtime Executable
 * DESCRIPTION 		  :: Initialize all system interactive
 *						 user interface style themes for
 *						 the CLR-SSL.
 *
 *						 This runtime executable provides
 *						 a rich client-side HTML
 *						 presentation layer for a
 * 						 robust mouth-feel (and yet,
 *					     never too overpowering) with
 * 						 respect to all system generated
 *						 browser interactions in web
 *						 and email.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *  LICENSE 			  :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CLR-SSL User Interface 
 * (UI) Theme Style
 * Integer Constant
 * Flags / Options: 
 * --------------------------------------------
 * Name          Constant                      Description
 * -----         -----                         -----
 * PHP Night     CRNRSTN_UI_PHPNIGHT           A replication of the lead 
 *                                             developer's IDE theme. 
 *                                             How CRNRSTN :: Lightsaber 
 *                                             code looks to me.
 * Dark Night    CRNRSTN_UI_DARKNIGHT          Similar to PHP Night, 
 *                                             but darker. Nothing could 
 *                                             be darker. Nothing.
 * PHP           CRNRSTN_UI_PHP                All about the business.
 * Grey Sky      CRNRSTN_UI_GREYSKY            Alone and sad with a 
 *                                             nice cup of coffee, a 
 *                                             rack mounted dual-video 
 *                                             card Mac Pro, and four 
 *                                             (4) 30in. Apple Pro 
 *                                             retina displays.
 * HTML          CRNRSTN_UI_HTML               Be light and happy.
 * Daylight      CRNRSTN_UI_DAYLIGHT           Similar to the HTML 
 *                                             theme but...lighter. 
 *                                             Nothing could be lighter.
 * Feather       CRNRSTN_UI_FEATHER            Lighter than Daylight.
 * Glass 
 * (light text)  CRNRSTN_UI_GLASS_LIGHT_COPY   Experimental UI theme 
 *                                             for light colored text 
 *                                             and a darker background.
 * Glass 
 * (dark text)  CRNRSTN_UI_GLASS_DARK_COPY     Experimental UI theme 
 *                                             for dark colored text 
 *                                             and a lighter color 
 *                                             background.
 * Wood          CRNRSTN_UI_WOOD               Got wood?
 * Terminal      CRNRSTN_UI_TERMINAL           Green text. Black 
 *                                             background. Hardcore 
 *                                             and forever stuck in 
 *                                             the Matrix.
 * Random Theme  CRNRSTN_UI_RANDOM             Load the HTML content 
 *                                             choosing a UI theme 
 *                                             at random.
 */

$active_theme = self::$R_data['R_interact_ui_theme'];
if(self::$R_data['R_interact_ui_theme'] == self::$R_data['int_flag']['CRNRSTN_UI_RANDOM']){
	/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
	 * Edit: Took a most righteous rip 
	 *       on bong using kitchen fire 
	 *       and then we finished the 
	 *       CRNRSTN :: Interact UI 
	 *       initialization re-arch in 
	 *       line with (like just in 
	 *       front of) the CLR-SSL 
	 *       Resource Registry boot. 
	 *       5 :: Thursday, May 28, 2026 @ 0613 hrs.
	 *
	 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
	 * self::$R_data['R_interact_ui_theme_options']['int_index']
	 * self::$R_data['R_interact_ui_theme_options']['isset_options']
	 *
	 * CLR-SSL Interact UI theme 
	 * options data initialized by: 
	 * -----
	 * /_R/_config
	 * /_config.defaults
	 * /load_static_cache
	 * /interact_ui_theme_options
	 * /crnrstn.interact_ui_theme_options.runtime_exe.php
	 *
	 *
	 * 5 :: Thursday, May 28, 2026 @ 1417 hrs.
	 *
	 */
    $ui_options_cnt = sizeof(self::$R_data['R_interact_ui_theme_options']['int_index']);
    $ui_options_cnt--;

	for($i = 0; $i < 100; $i++){

	    $ui_option = rand(0, $ui_options_cnt);

	    if($ui_option != self::$R_data['int_flag']['CRNRSTN_UI_RANDOM']){
	    	// 5 :: Thursday, May 28, 2026 @ 1428 hrs.

			$active_theme = $ui_option;
			$tmp_theme = _crnrstn_system_integer_bank($active_theme, $this);

			break 1;

	    }

	}

}

$R_theme_data = array();


$R_meta = $this->return_int_const_profile($active_theme);

switch($active_theme){
	case self::$R_data['int_flag']['CRNRSTN_UI_DARKNIGHT']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1343 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Dark Night    CRNRSTN_UI_DARKNIGHT          Similar to PHP Night, 
		 *                                             but darker. Nothing could 
		 *                                             be darker. Nothing.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2016 hrs.
		 *
		 */
		$R_meta                                       = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]     = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']]    = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 1;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#006498';
		$R_theme_data[$active_theme]['highlight.default'] = '#9E9D9F';
		$R_theme_data[$active_theme]['highlight.html']    = '#8C8C8C';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#CB733F; font-weight: normal';
		$R_theme_data[$active_theme]['highlight.string']  = '#216D10';

		$R_theme_data[$active_theme]['stage.canvas.background-color']           = '#04050A';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity']         = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width']               = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color']               = '#000';
		$R_theme_data[$active_theme]['stage.canvas.border-style']               = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity']        = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color']           = '#052E08';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width']       = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color']       = '#4B4444';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style']       = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color']         = '#111';
		$R_theme_data[$active_theme]['stage.lnum.css.color']                    = '#1A6F1A';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][]         = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][]      = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][]      = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][]   = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][]         = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation background overlay.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][]   = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][]  = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][]       = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active']      = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color']             = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height']                       = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][]    = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][]    = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][]          = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][]    = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][]    = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][]  = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][]   = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][]    = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][]   = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][]   = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][]   = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][]   = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][]  = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][]  = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][]  = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][]    = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][]   = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][]          = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][]     = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_PHP']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1345 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * PHP           CRNRSTN_UI_PHP                All about the business.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2016 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 2;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#008000';
		$R_theme_data[$active_theme]['highlight.default'] = '#191A31';
		$R_theme_data[$active_theme]['highlight.html']    = '#808080';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#00B; font-weight: normal';
		$R_theme_data[$active_theme]['highlight.string']  = '#D00';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#F2F2F2';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#C2C7DF';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#D6D6F4';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#2C2C2C';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#787CAF';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#EEE8E8';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_GREYSKY']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1346 hrs.
		 * sips coffee.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Grey Sky      CRNRSTN_UI_GREYSKY            Alone and sad with a 
		 *                                             nice cup of coffee, a 
		 *                                             rack mounted dual-video 
		 *                                             card Mac Pro, and four 
		 *                                             (4) 30in. Apple Pro 
		 *                                             retina displays.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2016 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 3;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#D4762D';
		$R_theme_data[$active_theme]['highlight.default'] = '#939393';
		$R_theme_data[$active_theme]['highlight.html']    = '#C8C8C8';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#212121; font-weight: normal';
		$R_theme_data[$active_theme]['highlight.string']  = '#421414';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#F5F5F5';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#C3C3C3';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#DBDBDB';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#333';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#A5A5A5';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#E8E8E8';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_HTML']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1349 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * HTML          CRNRSTN_UI_HTML               Be light and happy.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 4;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#169B2B';
		$R_theme_data[$active_theme]['highlight.default'] = '#B72620';
		$R_theme_data[$active_theme]['highlight.html']    = '#666';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#C08E1A; font-weight: normal;';
		$R_theme_data[$active_theme]['highlight.string']  = '#2020BD';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#F3F0F0';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#80A0DD';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#EBDCB8';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#333';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#3F6EC9';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#F3F0F0';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_DAYLIGHT']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1403 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Daylight      CRNRSTN_UI_DAYLIGHT           Similar to the HTML 
		 *                                             theme but...lighter. 
		 *                                             Nothing could be lighter.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */ 
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 5;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#5AC86C';
		$R_theme_data[$active_theme]['highlight.default'] = '#CC6762';
		$R_theme_data[$active_theme]['highlight.html']    = '#666';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#C08E1A; font-weight: normal;';
		$R_theme_data[$active_theme]['highlight.string']  = '#5F5FD0';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#F7F5F5';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#80A0DD';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#F5EDDA';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#5F5FD0';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#809FDB';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#F3F0F0';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_FEATHER']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1404 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Feather       CRNRSTN_UI_FEATHER            Lighter than Daylight.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 6;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#7CD38B';
		$R_theme_data[$active_theme]['highlight.default'] = '#D78783';
		$R_theme_data[$active_theme]['highlight.html']    = '#868686';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#CDA54A; font-weight: normal;';
		$R_theme_data[$active_theme]['highlight.string']  = '#8080DA';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#FFF';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#ECEFF2';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#F7F1E2';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#D6D6F0';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#D4E1EE';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#FFF';

		// offset-x | offset-y | blur-radius | spread-radius | color
		// <div style="box-shadow: 2px 3px 3px 0 #bfbfbf;">
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_GLASS_LIGHT_COPY']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1405 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Glass 
		 * (light text)  CRNRSTN_UI_GLASS_LIGHT_COPY   Experimental UI theme 
		 *                                             for light colored text 
		 *                                             and a darker background.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 7;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#7CD38B';
		$R_theme_data[$active_theme]['highlight.default'] = '#D78783';
		$R_theme_data[$active_theme]['highlight.html']    = '#868686';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#CDA54A; font-weight: normal;';
		$R_theme_data[$active_theme]['highlight.string']  = '#8080DA';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = 'transparent';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#ECEFF2';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#F7F1E2';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#D6D6F0';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#D4E1EE';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#FFF';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_GLASS_DARK_COPY']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1406 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Glass 
		 * (dark text)  CRNRSTN_UI_GLASS_DARK_COPY     Experimental UI theme 
		 *                                             for dark colored text 
		 *                                             and a lighter color 
		 *                                             background.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 8;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#008000';
		$R_theme_data[$active_theme]['highlight.default'] = '#191A31';
		$R_theme_data[$active_theme]['highlight.html']    = '#808080';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#00B; font-weight: normal';
		$R_theme_data[$active_theme]['highlight.string']  = '#D00';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = 'transparent';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#ECEFF2';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#EFEFFB';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#D6D6F0';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#D4E1EE';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#FFF';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_WOOD']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1407 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Wood          CRNRSTN_UI_WOOD               Got wood?
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 9;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#7CD38B';
		$R_theme_data[$active_theme]['highlight.default'] = '#D78783';
		$R_theme_data[$active_theme]['highlight.html']    = '#868686';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#CDA54A; font-weight: normal;';
		$R_theme_data[$active_theme]['highlight.string']  = '#8080DA';

		$R_theme_data[$active_theme]['stage.canvas.background-color']           = 'transparent';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity']         = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width']               = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color']               = '#ECEFF2';
		$R_theme_data[$active_theme]['stage.canvas.border-style']               = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity']        = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color']           = '#F7F1E2';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width']       = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color']       = '#D6D6F0';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style']       = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color']         = '#D4E1EE';
		$R_theme_data[$active_theme]['stage.lnum.css.color']                    = '#FFF';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][]         = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][]      = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][]      = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][]   = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][]         = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][]   = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][]  = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][]       = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active']      = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color']             = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height']                       = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][]    = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][]    = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][]          = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][]    = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][]    = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][]  = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][]   = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][]    = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][]   = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][]   = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][]   = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][]   = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][]  = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_TERMINAL']:
		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ xxxx hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * Terminal      CRNRSTN_UI_TERMINAL           Green text. Black 
		 *                                             background. Hardcore 
		 *                                             and forever stuck in 
		 *                                             the Matrix.
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2015 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['POSITION']         = $tmp_pos++;
		$R_theme_data[$active_theme]['queue_sequence']                       = 10;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#257129';
		$R_theme_data[$active_theme]['highlight.default'] = '#41DB3C';
		$R_theme_data[$active_theme]['highlight.html']    = '#EBEBEB';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#19EE28; font-weight: bold';
		$R_theme_data[$active_theme]['highlight.string']  = '#54B33E';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#131314';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#000';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#073F0B';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#0C8800';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#282828';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#1FA61F';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;
	case self::$R_data['int_flag']['CRNRSTN_UI_RANDOM']:
	case self::$R_data['int_flag']['CRNRSTN_UI_PHPNIGHT']: // Sips coffee. 5 :: Thursday, May 28, 2026 @ 1412 hrs.
	default:

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * 5 :: Thursday, May 28, 2026 @ 1342 hrs.
		 *
		 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Lightsaber RoCEv2 
		 * SOAP Services Layer  
		 * (CLR-SSL) Interact UI Theme
		 * --------------------------------------------
		 * Name          Constant                      Description
		 * -----         -----                         -----
		 * PHP Night     CRNRSTN_UI_PHPNIGHT           A replication of the lead 
		 *                                             developer's IDE theme. 
		 *                                             How the CRNRSTN :: 
		 *                                             Lightsaber code looks 
		 *                                             to me.'
		 *
		 * 5 :: Wednesday, May 27, 2026 @ 2016 hrs.
		 *
		 */
		$R_meta = $this->return_int_const_profile($active_theme);
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_string']]  = $R_meta[self::$R_data['int_flag']['R_string']];
		$R_theme_data[$active_theme][self::$R_data['int_flag']['R_integer']] = $R_meta[self::$R_data['int_flag']['R_integer']];
		$R_theme_data[$active_theme]['title']['TEXT']                        = $R_meta['title']['TEXT'];
		$R_theme_data[$active_theme]['description']['TEXT']                  = $R_meta['description']['TEXT'][0];
		$R_theme_data[$active_theme]['queue_sequence']                       = 0;
		$R_theme_data[$active_theme]['ISACTIVE']                             = 1;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * PHP ini settings for 
		 * highlight_string 
		 * (PHP 4, PHP 5, PHP 7, PHP 8)
		 *
		 * highlight_string — Syntax highlighting 
		 *                    of a string
		 *
		 * Description
		 * function highlight_string(
		 *          string $string, 
		 *          bool $return = false): string|true
		 *
		 * Outputs or returns html markup 
		 * for a syntax highlighted version 
		 * of the given PHP code using the 
		 * colors defined in the built-in 
		 * syntax highlighter for PHP.
		 *
		 *
		 * 5 :: Thursday, May 28, 2026 @ 0333 hrs.
		 *
		 */
		$R_theme_data[$active_theme]['highlight.comment'] = '#7EC3E6';
		$R_theme_data[$active_theme]['highlight.default'] = '#9876AA';
		$R_theme_data[$active_theme]['highlight.html']    = '#EBEBEB';
		$R_theme_data[$active_theme]['highlight.keyword'] = '#ED864A; font-weight: normal';
		$R_theme_data[$active_theme]['highlight.string']  = '#54B33E';

		$R_theme_data[$active_theme]['stage.canvas.background-color'] = '#131314';
		$R_theme_data[$active_theme]['stage.canvas.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * TODO :: Get pixels out of 
		 *         here, and put 
		 *         $R->ui_css_length_unit_clean() 
		 *         into the equation. 
		 *
		 */
		$R_theme_data[$active_theme]['stage.canvas.border-width'] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.border-color'] = '#9E9E9E';
		$R_theme_data[$active_theme]['stage.canvas.border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.content.background-opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100); opacity: 1.0';
		$R_theme_data[$active_theme]['stage.content.highlight-color'] = '#393939';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-width'] = '1px';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-color'] = '#833131';
		$R_theme_data[$active_theme]['stage.lnum.css.right-border-style'] = 'solid';
		$R_theme_data[$active_theme]['stage.lnum.css.background-color'] = '#282828';
		$R_theme_data[$active_theme]['stage.lnum.css.color'] = '#00D500';

		$R_theme_data[$active_theme]['stage.canvas.box-shadow.inset'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-x'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.offset-y'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.blur-radius'][] = '3px';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.spread-radius'][] = '';
		$R_theme_data[$active_theme]['stage.canvas.box-shadow.color'][] = '#BFBFBF';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_color'][] = '#003eff';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_opacity'][] = '0.8';
		$R_theme_data[$active_theme]['interact.ui.document_bg_overlay_background_zindex'][] = '1';
		$R_theme_data[$active_theme]['interact.ui.document_page_copy_overflow_wrap'][] = 'break-word';

		$R_theme_data[$active_theme]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;        // [1=ON, 0=OFF]
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_background_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_height'] = 25;
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color'] = '#FFF';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseout_effect_dimmed_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65); opacity: 0.65';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_effect_brighten_color_opacity'] = 'filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0); opacity: 0';
		$R_theme_data[$active_theme]['interact.ui.sprite_icon_mouseover_magnification_zoom'] = 1.15;

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_weight'][] = 'bold';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_line_height'][] = '55px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h1'][] = '45px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h2'][] = '35px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h3'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_font_size_h4'][] = '15px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_copy_margin_bottom'][] = '0';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI. 
		 * Documentation Page 
		 * Title Section :: 
		 * Page Title Description. 
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_family'][] = 'Arial, Helvetica, sans-serif';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_color'][] = '#333';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_width'][] = '90%';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_font_size'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_overflow_wrap'][] = 'break-word';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_top'][] = '12px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_right'][] = '10px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_bottom'][] = '25px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_padding_left'][] = '20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_line_height'][] = '33px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_shadow'][] = '1px 1px 2px #ECECEC, 0 0 1em #ECECEC, 0 0 0.2em #ECECEC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_padding'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_margin'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_text_decoration'][] = 'none';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_paragraph_anchor_color'][] = '#0066CC';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_top'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_right'][] = '6px';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_bottom'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_padding_left'][] = '0';
		$R_theme_data[$active_theme]['interact.ui.document_page_title_description_text_embed_image_line_height'][] = '90px';

		/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * CRNRSTN :: Interact UI.
		 * Documentation General :: 
		 * Alert / Caution Note.
		 *
		 */
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_border'][] = '1px solid #A5B9D8';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_margin'][] = '10px 20px 10px 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_border_wrap_padding'][] = '10px 0 10px 0';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_top'][] = '-120px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_bg_icon_wrap_left'][] = '48%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_width'][] = '85%';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_text_align'][] = 'left';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_padding'][] = '0 10px 0 20px';
		$R_theme_data[$active_theme]['interact.ui.document_page_alert_caution_copy_paragraph_background_color'][] = 'rgba(255, 255, 255, 0.67)';

	break;

}