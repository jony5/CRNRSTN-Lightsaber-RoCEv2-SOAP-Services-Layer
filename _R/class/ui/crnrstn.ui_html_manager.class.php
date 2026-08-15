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

/**
 * 
 *
 * CLASS DEFINITION :: crnrstn_ui_html_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: May 1, 2021 @ 1219 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: UI HTML Manager
 *                     supports the generation of
 *                     CRNRSTN :: Lightsaber
 *                     SOAP Services Layer HTML
 *                     web content.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_ui_html_manager extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_ui_html_manager 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Tuesday, June 2, 2026 @ 1717 hrs.
     *
     */

    protected $oCRNRSTN_UI_ASSEMBLER;

    public $page_serial;
    private static $css_length_units_ARRAY = array();
    protected $docs_nav_link_ARRAY = array();
    protected $docs_nav_html = '';

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        //
        // PAGE CONTENT AGGREGATION.
        $this->oCRNRSTN_UI_ASSEMBLER = new crnrstn_ui_content_assembler();

        //
        // SOURCE :: https://www.w3schools.com/cssref/css_units.php
        // DATE :: Thursday, June 22, 2023 @ 0555 hrs.
        self::$css_length_units_ARRAY = array('cm' => 'centimeters', 
            'mm' => 'millimeters',
            'in' => 'inches (1in = 96px = 2.54cm)', 
            'px' => 'pixels (1px = 1/96th of 1in)',
            'pt' => 'points (1pt = 1/72 of 1in)', 
            'pc' => 'picas (1pc = 12 pt)',
            'em' => 'Relative to the font-size of ' . 
                    'the element (2em means 2 times ' . 
                    'the size of the current font)',
            'ex' => 'Relative to the x-height of the ' . 
                    'current font (rarely used)',
            'ch' => 'Relative to the width of the ' . 
                    '"0" (zero)', 
            'rem' => 'Relative to font-size of the ' . 
                     'root element',
            'vw' => 'Relative to 1% of the width ' . 
                    'of the viewport*', 
            'vh' => 'Relative to 1% of the height ' . 
                    'of the viewport*',
            'vmin' => 'Relative to 1% of viewport\'s* ' . 
                      'smaller dimension',
            'vmax' => 'Relative to 1% of viewport\'s* ' . 
                      'larger dimension', 
            '%' => 'Relative to the parent element');

	}

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function out_ui_html_module_system_icon(
             $file_path, 
             $file_meta_ARRAY, 
             $output_mode, 
             $width, 
             $height_override, 
             $hyperlink, 
             $alt, 
             $title, 
             $target)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: A file icon tool tip hover 
         *         pop-up nav should hast fast 
         *         loading File/Resource/Meta 
         *         Preview window integrations.
         *         5 :: Saturday, September 9, 2023 @ 1621 hrs.
         * TODO :: Is $file_path for 
         *         the icon file...or 
         *         the dir file to be 
         *         receiving a dynamically 
         *         built icon at this level?  
         *         
         *         Call the shot, 5.
         *         
         *         5 :: CEO, CTO, Lead Full Stack, Chief Creative
         *         eVifweb® Development
         *         
         *         Saturday, February 7, 2026 @ 0835 hrs.
         *
         * Notes:
         * This method returns complex Client DOM 
         * facing system icon html with the HTML 
         * architecture being directly driven by 
         * the file's own mime-type/ext. As a note 
         * for development, regardless of whatever 
         * is shown next to this system icon[think 
         * filename, size, date, owner, etc.]...even 
         * just filename...the ~25px icon itself 
         * contains all sauce to support all use-
         * cases. The pop-up tool-tip access point 
         * build into the icon's JavaScript 
         * activated mouse-over (or long press for 
         * tablet and mobile) is the only system 
         * touch point that the CRNRSTN :: 
         * Lightsaber RoCEv2 SOAP Services Layer 
         * (CLR-SSL) has for file and directory 
         * Mgmt without engaging deeper menu 
         * systems (without more user clicks); 
         * try hard on this one, 5.
         * 
         * Design Requirements Would Include:
         *      - A display of some kind of pop-up 
         *        tooltip module on mouseover 
         *        (desktop) or info-icon-long press 
         *        (tablet, mobile). This new UI DOM 
         *        module should have a complete set 
         *        of directory (or file type) 
         *        specific menu options (see CPanel® 
         *        File Mgmt). There will be admin 
         *        only features supporting robust 
         *        file management features such as 
         *        delete, edit, and suite of CLR-SSL 
         *        distributed sync services. 
         *      - A pop-up tooltip embedded file 
         *        preview area that quickly loads 
         *        the absolute best and highest 
         *        highest quality file preview per 
         *        the client device, os, and browser. 
         *        Load a high quality system icon for 
         *        files with unsupported preview such 
         *        as .zip, .exe, et al. this is where 
         *        the CLR-SSL gets to HTML5 stack the 
         *        shit out of <source> nodes in 
         *        <picture>, and <video> HTML5 
         *        wrappers as modus operandi. 
         *
         *        No use of <img> tags here, boys. 
         *
         *      - When the preview link is clicked, 
         *        a white label-able and deep link-able 
         *        (social share enabled) file preview 
         *        component with standardized file mgmt 
         *        navigation, a really zen presentation 
         *        of some file meta, all under clean 
         *        headings is to load. For mobile and 
         *        tablet, absolutely none of this 
         *        should be awkward UI. 
         *      - Add value to life; provide the richest 
         *        experience (plz read as heart feelings) 
         *        possible by using system application 
         *        information for the file...like file 
         *        permissions...or some other cheeky meta 
         *        like CPU load to help to make this new 
         *        file mgmt UI/UX absolute kit in 
         *        CRNRSTN :: to be looking really smart, 
         *        and feeling...really smart, too. 
         *      - Use the CRNRSTN :: Lightsaber RoCEv2 
         *        SOAP Services Real-Time Session Casting 
         *        Services Layer (CLR-SSL SSRT-SCSL) to 
         *        support Admin and User-Access-Authorized 
         *        browsing of CRNRSTN :: JS/CSS Open Source 
         *        Framework files and directories on any 
         *        access authorized server from any access 
         *        authorized server...including 
         *        http://127.0.0.1. 
         *      - Browse the server from lowest script 
         *        accessible root (specified in config 
         *        file) behind CLR-SSL Admin authentication. 
         *
         * Architectural Considerations:
         *      - Pre-fabricate DOM HTML components, and 
         *        embed them in the HTML until they 
         *        are needed. 
         *        [Well, CRNRSTN :: has done this...it is 
         *        uninspiring, and we already started 
         *        moving away from this in architecture 
         *        design.
         *
         *      - Or, just have the server send the raw 
         *        file meta data to oCRNRSTN_JS, and build 
         *        whatever DOM object is needed at the 
         *        client, and build it on the fly. This is 
         *        what we have started doing more recently. 
         *        Note this architecture provides zero email 
         *        HTML support outside of a CLR-SSL "Cloud 
         *        Services Style" email platform (where we 
         *        can build nothing at the client), and it 
         *        necessitates some duplicity of work for 
         *        UI standardization of HTML output between 
         *        email and web with respect to content 
         *        that is in common. With the email HTML 
         *        generation logic being buried in php @ 
         *        server, and the tool-tip/share-landing-
         *        page preview logic in javascript @ client, 
         *        the two sides would never even touch but, 
         *        they still need to be as one, brotha. 
         *
         *      - Or, something in between the above 
         *        two considerations.
         *

        $tmp_str_html_out = '';
        $tmp_test_sprite_hq = '/var/www/html/evifweb.jony5.com/_R/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png';

        // MIME-TYPE MGMT.
        $missing_mime_type_dir_cnt = 0;
        $missing_file_extension_dir_cnt = 0;
        $tmp_flag_built_dir_ARRAY = array();
        $tmp_sync_mime_type_config = false;     // Where passing true might 
                                                // add new mime-type folders 
                                                // to /_R/_config/config.mime_types.

        $this->error_log('TODO :: Check that all CSS ' . 
                                   'Units (pixels, or other) ARE ' . 
                                   'IN SETTINGS' . 
                                   '/INPUT-PARAMS[?]/THEMES/MULTI-' . 
                                   'LANG MULTI-BYTE-BOOST and not ' . 
                                   'the static CLR-SSL framework HTML.', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   CRNRSTN_BARNEY);

        /*
        /var/www/html/evifweb.jony5.com/_R/class/crnrstn/crnrstn.inc.php
        -----
        'FAMILY'                        => string 'CRNRSTN_CHANNEL_MODE' (length=19)
        'INTEGER'                       => int 7234
        'STRING'                        => string 'CRNRSTN_ZIP' (length=11)
        'TITLE'                         => string 'ZIP' (length=3)
        'FILE_EXTENSION'                0           => string '.zip' (length=4)
                                        1           => string '.zipx' (length=5)
        'MEDIA_ELEMENT_KEY'             =>
                                        0 => int 7234   // CRNRSTN_ZIP
        'SYSTEM_ICON_LABEL'             => string 'ZIP' (length=3)
        'SYSTEM_ICON_COLOR_CLASS'       => string 'COMPRESSION' (length=11)
        'SYSTEM_ICON_LINE_WEIGHT_CLASS' => string 'HEAVY' (length=5)
        'SYSTEM_ICON_LINE_COLOR_CLASS'  => string '#000' (length=4)

        $R_theme_data[$int_const]['interact.ui.sprite_icon_thirdparty_tm_is_active'] = 1;
        $this->config_add_resource(CRNRSTN_RESOURCE_ALL, 'override_interact_theme_sprite_icon_thirdparty_tm_is_active', 1, 'CRNRSTN::RESOURCE::SPRITE_ICON');     // [1=ON, 0=OFF]

        */
        if($tmp_sync_mime_type_config !== false){

            $tmp_endpoint_serial         = $this->hash($_SERVER['SERVER_ADDR']);
            $tmp_crnrstn_system_directory = $this->get_resource(
                                                   'crnrstn_system_directory', 
                                                   0, 
                                                   'CRNRSTN::RESOURCE::HTTP_IMAGES');

            error_log(__LINE__ . ' ui html mgr BEGIN ' . 
                'MANUAL SYNC OF FILE MIME-TYPE. die();');

            //
            // LOAD MIME-TYPE CONFIGURATION SOURCE FILES PATH.
            $mime_type_config_path = CRNRSTN_ROOT . 
                                     DIRECTORY_SEPARATOR . 
                                     $tmp_crnrstn_system_directory . 
                                     DIRECTORY_SEPARATOR . 
                                     '_config' . 
                                     DIRECTORY_SEPARATOR . 
                                     'config.mime_types';
            if(is_dir($mime_type_config_path) == true){

                //$tmp_asset_handling_serial = $this->generate_new_key(100);

                //
                // RECURSIVELY EXTRACT *ALL* FILES, DIRECTORIES, AND THE APPROPRIATE FILE
                // SYSTEM META THAT IS CONTAINED IN $mime_type_config_path.
                // WHERE $tmp_endpoint_serial = $this->hash($_SERVER['SERVER_ADDR']);
                //$this->scandir_system_integrations($mime_type_config_path);
                error_log(__LINE__ . 
                    ' ui html mgr $mime_type_config_path[' . 
                    $mime_type_config_path . '].');
                die();

                //
                // CRNRSTN :: FILE SYSTEM PERFORMANCE REPORT.
                $tmp_str_html_out = $this->file_report();

                //
                // BUILD 100% OF THE MIME-TYPE DIRECTORIES ACCORDING TO 100% OF THE FILES.
                // ENSURE THAT THE "CRNRSTN_XXX" DIR FOR THE FILE IS AVAILABLE.
                // HTML OUTPUT ANY FILE MOVEMENT INSTRUCTIONS FROM THE _discovery DIRECTORY.

                /*
                $tmp_control_asset_ARRAY
                -----
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['DIR_PATH']                   = $dir_path;
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['TYPE']                       = filetype($dir_path);
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['FILESIZE'][$name]            = $this->find_filesize($name);
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$dir_path][$tmp_resource_path]['TYPE']          = filetype($dir_path);
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['UID_INTEGER'][$name]         = $tmp_filestat_ARRAY['uid'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['UID_STRING'][$name]          = $tmp_array['name'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['GID_INT'][$name]             = $tmp_filestat_ARRAY['gid'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['GID_STRING'][$name]          = $tmp_array['name'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['DATE_LASTACCESSED'][$name]   = $tmp_filestat_ARRAY['atime'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['DATE_LASTMODIFIED'][$name]   = $tmp_filestat_ARRAY['mtime'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['BLOCK_SIZE'][$name]          = $tmp_filestat_ARRAY['blksize'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['BLOCK_ALLOCATE'][$name]      = $tmp_filestat_ARRAY['blocks'];
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['PERMISSIONS_FULL'][$name]    = $this->return_full_permissions($perms);
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial][$tmp_path_serial]['PERMISSIONS_OCTAL'][$name]   = decoct($perms & 0777);
                $this->system_integrations_dir_content_touch_ARRAY[$this->request_id][$endpoint_serial]['TOTAL_FILESIZE'][]                             = $tmp_results_total_filesize;

                $tmp_control_asset_ARRAY[$tmp_endpoint_serial][$mime_type_config_path][$tmp_resource_path]

                $tmp_endpoint_serial[Array]. system_integrations_dir_content_touch_ARRAY[
                    Array ( [5ca06597ca96fd51e9db52580c3c7c77b2196de456155b1d086de56b0b4ab16e] => Array (
                        [b0e326085976b155bc50921c48762433c2ee0533728cd61bae2e61e29847adad] => Array (
                            [DIR_PATH] => /var/www/html/evifweb.com/_crnrstn/_config/config.mime_types

                            [FILESIZE] => Array ( [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary] => 0
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN] => 0
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/HelveNeuBlaExtObl.bin] => 46592
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/HelveNeuHeaIta.bin] => 30976 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/HelveNeuExtBlaConObl.bin] => 46976
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/.] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/plugincache.bin] => 72512
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/CannedText.bin] => 1215 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/CRNRSTN_BIN/en-US_ta.bin] => 651752
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_x_macbinary/.] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_xhtml_xml] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_xhtml_xml/CRNRSTN_XHTML] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_xhtml_xml/CRNRSTN_XHTML/.] => 0
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_xhtml_xml/CRNRSTN_XHTML/ImplementationGuide_CNP_TRANKEY.xhtml] => 599390 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/application_xhtml_xml/.] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/image_gif] => 0
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/image_gif/.] => 0
                            [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/image_gif/CRNRSTN_GIF] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/image_gif/CRNRSTN_GIF/.] => 0 [/var/www/html/evifweb.com/_crnrstn/_config/config.mime_types/image_gif/CRNRSTN_GIF/c++boost.gif] => 8819

                */

                //error_log(__LINE__ . ' ui html endpoint_serial[' . print_r($tmp_endpoint_serial, true) . ']. control_asset_ARRAY[' . print_r($tmp_control_asset_ARRAY, true) . ']. die();');
                //$this->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html endpoint_serial[' . print_r($tmp_endpoint_serial, true) . ']. control_asset_ARRAY[' . print_r($tmp_control_asset_ARRAY, true) . '].');

                //$this->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html $tmp_control_asset_ARRAY[' . print_r($tmp_control_asset_ARRAY, true) . '].');

                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr ' . 
                       '$mime_type_config_path[' . 
                       $mime_type_config_path . 
                       '].');

                /*
                   //
                   // Loop through files under.
                   error_log(__LINE__ . 
                   ' ui html mgr $tmp_asset_serial[' . 
                   $tmp_asset_serial . 
                   ']. scan_dir_output_ARRAY[' . 
                   print_r($tmp_scan_dir_output_ARRAY, true) . 
                   '].');

                 */

            }

            //$this->mkdir_r($dirName);      // ($dirName, $mode = 777)
            //
            // STRING OUTPUT = ADD => 'application/vnd.microsoft.portable-executable' => array('.aspx' => 'CRNRSTN_ASPX'),
            // STRING OUTPUT = PUT FILE 'CURR_PATH\file_name.aspx' INTO DIR '\PATH\application_vnd_microsoft_portable_executable'.

            //$tmp_mime_types_touched_ARRAY[$tmp_asset_serial]['MIME-TYPE'][] = '0';
            //$tmp_mime_types_touched_ARRAY[$tmp_asset_serial]['FILENAME'][] = '0';
//
//            foreach($this->asset_routing_data_key_lookup_ARRAY['mime_type'] as $mime_type => $data){
//            //foreach($this->asset_routing_data_key_lookup_ARRAY['mime_type'] as $mime_type => $data){
//
//
//                $tmp_mime_array_str = "'" . $mime_type . "'";
//
//                //
//                // IF NO MIME-TYPE FOLDER EXISTS, PREPARE TO MAKE ALL DIRECTORIES
//                // PER MIME-TYPE AND FILE EXTENSION.
//                $tmp_dir_name_mime_type = $this->str_sanitize($mime_type, 'file_mime_type_to_directory');
//                $tmp_mime_dir_nom = $mime_type_config_path . '/' . $tmp_dir_name_mime_type;
//
//                //
//                // UNCOMMENT TO BUILD FOLDERS.
//                if(!is_dir($tmp_mime_dir_nom)){
//
//                    $this->mkdir_r($tmp_mime_dir_nom);
//
//                }
//
//            }

            $this->concat_log_string(
                   $tmp_str_html_out, 
                   __LINE__ . 
                   ' ui html mgr NEW FOLDERS. MIME[' . 
                   $missing_mime_type_dir_cnt . 
                   ']. EXT[' . 
                   $missing_file_extension_dir_cnt . 
                   '].');
            error_log(__LINE__ . ' ui html mgr COMPLETED ' . 
                'MANUAL MIME-TYPE SUPPORT SYNC.');

        }

        $tmp_file_mime_type = mime_content_type($file_path);

        $tmp_filename_ARRAY = explode('.', $file_path);
        $tmp_file_extension = array_pop($tmp_filename_ARRAY);

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . ' ui html mgr ' . 
               'system uname [' . 
               print_r($this->return_system_info('uname'), true) . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . ' ui html mgr ' . 
               'system getconf [' . 
               print_r($this->return_system_info('getconf'), true) . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . ' ui html mgr ' . 
               'system os_bit_size [' . 
               print_r($this->return_system_info('os_bit_size'), true) . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . ' ui html mgr system lscpu [' . 
               print_r($this->return_system_info('lscpu'), true) . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr system file ' . 
               'mime_content_type [' . 
               $tmp_file_mime_type . 
               '] file_extension[' . 
               $tmp_file_extension . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr ' . 
               '$file_meta_ARRAY[' . 
               print_r($file_meta_ARRAY, true) . 
               '].');

        if(!isset($height_override)){

            $tmp_default_icon_height = $this->return_interact_ui_profile_attribute('sprite_icon_height');
            $this->concat_log_string(
                   $tmp_str_html_out, 
                   __LINE__ . 
                   ' ui html mgr loading ' . 
                   'default icon height [' . 
                   $tmp_default_icon_height . 
                   '].');

        }else{

            if($height_override == ''){

                $tmp_default_icon_height = $this->return_interact_ui_profile_attribute('sprite_icon_height');
                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr loading ' . 
                       'default icon height [' . 
                       $tmp_default_icon_height . 
                       '].');

            }else{

                //
                // CLEAN UGC STRING FOR PIXELS.
                //$height_override = $this->str_sanitize($height_override, 'pixels_to_clean_int');
                $height_override = $this->strrtrim($height_override, ';');

                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr setting default ' . 
                       'icon height to input param ' . 
                       '$height_override[' . 
                       $height_override . 
                       '].');
                $tmp_default_icon_height = $height_override;

            }

        }

        $this->concat_log_string($tmp_str_html_out, __LINE__ . 
               ' ui html mgr loading ' . 
               '$file_path[' . 
               $file_path . 
               '].');
        $tmp_asset_meta_ARRAY = $this->asset_data_meta(
                                       'SYSTEM_SPRITE_HQ', 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       NULL);

        switch($tmp_asset_meta_ARRAY['asset_family']){
            case 'system':

                //
                // DISABLE CRNRSTN :: ASSET MAPPING (SYSTEM) FOR A SEC.
                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr ' . 
                       'disabling [' . 
                       $tmp_asset_meta_ARRAY['asset_family'] . 
                       '] asset mapping.');

                //
                // CRNRSTN :: ICY_DIGITALITCC-BITMASK INTEGER
                // STATE (BIT FLIP) MANAGEMENT SERVICES LAYER.
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // CRNRSTN :: UGC DATA INPUT [ICY_DIGITALITCC-BITMASK]
                $this->initialize_bit((int) self::$R_data['int_flag']['R_fs_map_system'], false);

                //
                // IMAGE SPRITE HTML SETUP.
                $tmp_sprite_img_str = $this->return_creative(
                                             'SYSTEM_SPRITE_HQ', 
                                             CRNRSTN_STRING);

                //
                // RE-ENABLE CRNRSTN :: ASSET MAPPING.
                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr re-enabling [' . 
                       $tmp_asset_meta_ARRAY['asset_family'] . 
                       '] asset mapping.');

                //
                // CRNRSTN :: ICY_DIGITALITCC-BITMASK INTEGER
                // STATE (BIT FLIP) MANAGEMENT SERVICES LAYER.
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // CRNRSTN :: UGC DATA INPUT [ICY_DIGITALITCC-BITMASK]
                $this->initialize_bit((int) self::$R_data['int_flag']['R_fs_map_system'], true);

            break;
            case 'social':

                //
                // DISABLE CRNRSTN :: ASSET MAPPING (SOCIAL) FOR A SEC.
                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr disabling [' . 
                       $tmp_asset_meta_ARRAY['asset_family'] . 
                       '] asset mapping.');

                //
                // CRNRSTN :: ICY_DIGITALITCC-BITMASK INTEGER
                // STATE (BIT FLIP) MANAGEMENT SERVICES LAYER.
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // CRNRSTN :: UGC DATA INPUT [ICY_DIGITALITCC-BITMASK]
                $this->initialize_bit((int) self::$R_data['int_flag']['R_fs_map_social'], false);

                //
                // IMAGE SPRITE HTML SETUP.
                $tmp_sprite_img_str = $this->return_creative(
                                             'SYSTEM_SPRITE_HQ', 
                                             CRNRSTN_STRING);

                //
                // RE-ENABLE CRNRSTN :: ASSET MAPPING.
                $this->concat_log_string(
                       $tmp_str_html_out, 
                       __LINE__ . 
                       ' ui html mgr re-enabling [' . 
                       $tmp_asset_meta_ARRAY['asset_family'] . 
                       '] asset mapping.');

                //
                // CRNRSTN :: ICY_DIGITALITCC-BITMASK INTEGER
                // STATE (BIT FLIP) MANAGEMENT SERVICES LAYER.
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // CRNRSTN :: UGC DATA INPUT [ICY_DIGITALITCC-BITMASK]
                $this->initialize_bit((int) self::$R_data['int_flag']['R_fs_map_social'], true);

            break;

        }

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr replacing [' . 
               $tmp_asset_meta_ARRAY['asset_family'] . 
               '] PNG [' . 
               basename($tmp_sprite_img_str) . 
               '] to [' . 
               basename($tmp_test_sprite_hq) . '].');

        $tmp_sprite_img_str = $tmp_test_sprite_hq;

        list($tmp_width, $tmp_height) = getimagesize($tmp_sprite_img_str);

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr str[' . 
               $tmp_sprite_img_str . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr Sprite ' . 
               'Original Dimensions. width[' . 
               $tmp_width . 
               ']. height[' . 
               $tmp_height . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr calculating ' . 
               'sprite dimensions. Target ' . 
               'UGC sourced icon height[' . 
               $tmp_default_icon_height . 
               '].');

        //
        // CALCULATE IMAGE SPRITE DIMENSIONS.
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Time for Maths.
         *
         *
         * 5 :: Thursday, June 15, 2023 @ 0518 hrs.
         * 
         * Can we (or should we at this point 
         * in dev) provide additional ui data 
         * points that allow for mouse over 
         * effects for system and social sprites 
         * that behave as is currently with the 
         * multi-media bmw m5 lp gallery?
         * 
         * See,
         * https://www.bmwusa.com/vehicles/m-models/m5-sedan/gallery.html
         * 
         *
         * -----
         * 5 : Friday, June 23, 2023 @ 0547 hrs.
         * Maths notes:
         *  - Until the math is done, leading 
         *    top (y) and leading left (x) 
         *    edge Sprite Icons should start 
         *    at 0. Place images at x=0 and 
         *    y=0...and not, e.g., x=0.1 or 
         *    y=0.1. 
         *
        */

        $tmp_sprite_icon_thirdparty_tm_is_active = $this->return_interact_ui_profile_attribute('sprite_icon_thirdparty_tm_is_active');
        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr sprite profile ' . 
               'thirdparty &trade; is_active[' . 
               $tmp_sprite_icon_thirdparty_tm_is_active . 
               '].');

        $tmp_sprite_icon_background_color = $this->return_interact_ui_profile_attribute('sprite_icon_background_color');
        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr sprite profile ' . 
               'target icon_background_color[' . 
               $tmp_sprite_icon_background_color . 
               '].');

        $tmp_sprite_icon_mouseout_effect_dimmed_color = $this->return_interact_ui_profile_attribute('sprite_icon_mouseout_effect_dimmed_color');
        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr sprite profile ' . 
               'target icon_mouse_response_layer_color[' . 
               $tmp_sprite_icon_mouseout_effect_dimmed_color . 
               '].');

        $tmp_sprite_icon_mouseout_effect_dimmed_color_opacity = $this->return_interact_ui_profile_attribute('sprite_icon_mouseout_effect_dimmed_color_opacity');
        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr sprite profile ' . 
               'target ' . 
               'icon_mouseout_effect_dimmed_color_opacity[' . 
               $tmp_sprite_icon_mouseout_effect_dimmed_color_opacity . 
               '].');

        $tmp_sprite_icon_mouseover_effect_brighten_color_opacity = $this->return_interact_ui_profile_attribute('sprite_icon_mouseover_effect_brighten_color_opacity');
        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr sprite profile ' . 
               'target ' . 
               'icon_mouseover_effect_brighten_color_opacity[' . 
               $tmp_sprite_icon_mouseover_effect_brighten_color_opacity . 
               '].');

        $tmp_sprite_icon_mouseover_magnification_zoom = $this->return_interact_ui_profile_attribute('sprite_icon_mouseover_magnification_zoom');
        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' ui html mgr sprite profile ' . 
               'target ' . 
               'icon_mouseover_magnification_zoom[' . 
               $tmp_sprite_icon_mouseover_magnification_zoom . 
               '].');

        $this->concat_log_string(
               $tmp_str_html_out, 
               '<span style="font-weight: bold; ' . 
               'color: #13de14;">' . 
               __LINE__ . 
               ' ui html mgr</span> <br><span style="' . 
               'font-weight: bold; color: #13de14;' . 
               '">TEST ICON SELECTION = &quot;A&quot;' . 
               '</span>');
        $tmp_serial = $this->generate_new_key(32, '01');

        /*
        TARGET ICON HEIGHT: $tmp_default_icon_height = 30

        CALCULATED DATA POINTS:
        -----
            OVERFLOW CONTAINER WIDTH ($tmp_default_icon_width)

            OVERFLOW CONTAINER HEIGHT ($tmp_default_icon_height)

            SPRITE WIDTH ($tmp_sprite_width)

            SPRITE HEIGHT ($tmp_sprite_height)

            SPRITE CSS TOP ($tmp_sprite_top)

            SPRITE CSS LEFT ($tmp_sprite_left)

        -----

        $file_path
        $file_meta_ARRAY
        $output_mode
        $width
        $height_override
        $hyperlink
        $alt
        $title
        $target

        */

        $tmp_sprite_width = 1018;
        $this->ui_css_length_unit_clean($tmp_sprite_width, NULL, false);

        $tmp_sprite_height = 1018;
        $this->ui_css_length_unit_clean($tmp_sprite_height, NULL, false);

        //$tmp_default_icon_height = 50;
        $this->ui_css_length_unit_clean($tmp_default_icon_height);

        $tmp_default_icon_width = 30;
        $this->ui_css_length_unit_clean($tmp_default_icon_width);

        $tmp_sprite_left = 0;
        $this->ui_css_length_unit_clean($tmp_sprite_left);

        $tmp_sprite_top = 0;
        $this->ui_css_length_unit_clean($tmp_sprite_top);

        $cache_vers = $this->file_url_cache_id($tmp_test_sprite_hq);

        $tmp_alt   = 'UI sprite (High Quality) test';
        $tmp_title = 'UI wireframe sprite (High Quality) test.';

        $tmp_str_html_out .= '<br>

        <div>
            <div style="float:left; ' . 
            'background-color: #F90000; width:' . 
            $tmp_default_icon_width . 
            '; height:' . 
            $tmp_default_icon_height . 
            '; overflow: hidden;"><!-- HIGH CONTRAST LAYER -->

                <div style="position:relative; display:inline-block; width:' . 
                $tmp_default_icon_height . '; height:' . 
                $tmp_default_icon_height . ';">
                    <div id="crnrstn_media_sticky_link_' . 
                    $tmp_serial . '" style="position:absolute; width:' . 
                    $tmp_default_icon_height . 
                    '; height:' . 
                    $tmp_default_icon_height . 
                    '; cursor:pointer;" onclick="crnrstn_sticky_' . 
                    $tmp_serial . '(\'onclick\', \'https://lightsaber.' . 
                    'crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm' . 
                    '9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4' . 
                    'NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252F' . 
                    'D6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQ' . 
                    'RfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEp' . 
                    'iE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjM' . 
                    'Z3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU' . 
                    '4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592' . 
                    'V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWA' . 
                    'REnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9' . 
                    'YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=' . 
                    'facebook_social_media_lnk&crnrstn_encrypt_tunnel=' . 
                    'ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ' . 
                    '1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', ' . 
                    'this);">

                        <div style="position:relative;">

                            <div style="position:absolute; left:' . 
                            $tmp_sprite_left . '; top:' . $tmp_sprite_top . ';">

                                <img src="http://172.16.225.139/evifweb.com' . 
                                '/_R/ui/imgs/png/' . 
                                'system/_lab_sys_sprite' . 
                                '_hq_algorithm_unit_test.png' . 
                                '?crnrstn_=' . 
                                $cache_vers . '" width="' . 
                                $tmp_sprite_width . 
                                '" height="' . 
                                $tmp_sprite_height . 
                                '" alt="' . $tmp_alt . 
                                '" title="' . 
                                $tmp_title . '">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="float: left; font-size: 12px; ' . 
            'font-family: Courier New, Courier, ' . 
            'monospace;">' . basename($file_path) . 
            '</div>
        </div>
    <script>
    function crnrstn_sticky_' . 
    $tmp_serial . 
    '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>
    <br>';

/*
        $this->concat_log_string($tmp_str_html_out, '<span style="font-weight: bold; color: #F90000;">' . __LINE__ . ' ui html mgr</span><br><span style="font-weight: bold; color: #F90000;">TEST ICON SELECTION = &quot;B&quot;</span>');
        $tmp_serial = $this->generate_new_key(32, '01');
        $tmp_str_html_out .= '<br>
        <div id="crnrstn_media_sticky_link_' . $tmp_serial . '" style="display: inline-block; width:50px; height:' . $tmp_default_icon_height . '; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_serial . '(\'onclick\', \'https://lightsaber.crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252FD6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQRfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEpiE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjMZ3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWAREnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=facebook_social_media_lnk&crnrstn_encrypt_tunnel=ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', this);">
            <div style="position: relative;">
                <div style="position: absolute; left:-55px; top: 0;">
                    <img src="http://172.16.225.139/evifweb.com/_crnrstn/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png" width="639" height="851" alt="Facebook" title="Link to Facebook related resource.">
                </div>
            </div>
        </div>
    <script>
    function crnrstn_sticky_' . $tmp_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>';

        $this->concat_log_string($tmp_str_html_out, '<span style="font-weight: bold; color: #fd8b00;">' . __LINE__ . ' ui html mgr</span><br><span style="font-weight: bold; color: #fd8b00;">TEST ICON SELECTION = &quot;C&quot;</span>');
        $tmp_serial = $this->generate_new_key(32, '01');
        $tmp_str_html_out .= '<br>
        <div id="crnrstn_media_sticky_link_' . $tmp_serial . '" style="display: inline-block; width:50px; height:' . $tmp_default_icon_height . '; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_serial . '(\'onclick\', \'https://lightsaber.crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252FD6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQRfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEpiE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjMZ3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWAREnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=facebook_social_media_lnk&crnrstn_encrypt_tunnel=ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', this);">
            <div style="position: relative;">
                <div style="position: absolute; left:-55px; top: 0;">
                    <img src="http://172.16.225.139/evifweb.com/_crnrstn/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png" width="639" height="851" alt="Facebook" title="Link to Facebook related resource.">
                </div>
            </div>
        </div>
    <script>
    function crnrstn_sticky_' . $tmp_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>';

        $this->concat_log_string($tmp_str_html_out, '<span style="font-weight: bold; color: #c110ec;">' . __LINE__ . ' ui html mgr</span><br><span style="font-weight: bold; color: #c110ec;">TEST ICON SELECTION = &quot;D&quot;</span>');
        $tmp_serial = $this->generate_new_key(32, '01');
        $tmp_str_html_out .= '<br>
        <div id="crnrstn_media_sticky_link_' . $tmp_serial . '" style="display: inline-block; width:50px; height:' . $tmp_default_icon_height . '; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_serial . '(\'onclick\', \'https://lightsaber.crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252FD6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQRfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEpiE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjMZ3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWAREnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=facebook_social_media_lnk&crnrstn_encrypt_tunnel=ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', this);">
            <div style="position: relative;">
                <div style="position: absolute; left:-55px; top: 0;">
                    <img src="http://172.16.225.139/evifweb.com/_R/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png" width="639" height="851" alt="Facebook" title="Link to Facebook related resource.">
                </div>
            </div>
        </div>
    <script>
    function crnrstn_sticky_' . $tmp_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>';

        $this->concat_log_string($tmp_str_html_out, '<span style="font-weight: bold; color: #0036f9;">' . __LINE__ . ' ui html mgr</span><br><span style="font-weight: bold; color: #0036f9;">TEST ICON SELECTION = &quot;E&quot;</span>');
        $tmp_serial = $this->generate_new_key(32, '01');
        $tmp_str_html_out .= '<br>
        <div id="crnrstn_media_sticky_link_' . $tmp_serial . '" style="display: inline-block; width:50px; height:' . $tmp_default_icon_height . '; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_serial . '(\'onclick\', \'https://lightsaber.crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252FD6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQRfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEpiE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjMZ3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWAREnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=facebook_social_media_lnk&crnrstn_encrypt_tunnel=ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', this);">
            <div style="position: relative;">
                <div style="position: absolute; left:-55px; top: 0;">
                    <img src="http://172.16.225.139/evifweb.com/_R/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png" width="639" height="851" alt="Facebook" title="Link to Facebook related resource.">
                </div>
            </div>
        </div>
    <script>
    function crnrstn_sticky_' . $tmp_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>';

        $this->concat_log_string($tmp_str_html_out, '<span style="font-weight: bold; color: #15DDD3;">' . __LINE__ . ' ui html mgr</span><br><span style="font-weight: bold; color: #15DDD3;">TEST ICON SELECTION = &quot;F&quot;</span>');
        $tmp_serial = $this->generate_new_key(32, '01');
        $tmp_str_html_out .= '<br>
        <div id="crnrstn_media_sticky_link_' . $tmp_serial . '" style="display: inline-block; width:50px; height:' . $tmp_default_icon_height . '; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_serial . '(\'onclick\', \'https://lightsaber.crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252FD6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQRfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEpiE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjMZ3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWAREnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=facebook_social_media_lnk&crnrstn_encrypt_tunnel=ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', this);">
            <div style="position: relative;">
                <div style="position: absolute; left:-55px; top: 0;">
                    <img src="http://172.16.225.139/evifweb.com/_R/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png" width="639" height="851" alt="Facebook" title="Link to Facebook related resource.">
                </div>
            </div>
        </div>
    <script>
    function crnrstn_sticky_' . $tmp_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>';

        $this->concat_log_string($tmp_str_html_out, '<span style="font-weight: bold; color: #000;">' . __LINE__ . ' ui html mgr</span><br><span style="font-weight: bold; color: #000000;">TEST ICON SELECTION = &quot;G&quot;</span>');
        $tmp_serial = $this->generate_new_key(32, '01');
        $tmp_str_html_out .= '<br>
        <div id="crnrstn_media_sticky_link_' . $tmp_serial . '" style="display: inline-block; width:50px; height:' . $tmp_default_icon_height . '; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_serial . '(\'onclick\', \'https://lightsaber.crnrstn.jony5.com/?crnrstn_0010111011=NkMbmCcbqSm9n2cCkxueSTGhut4%252FVjkladK%252FT88e3AB6Mrer1YO4NiYLA2z9Uq5YtLC5&crnrstn_r=g0WHukqPCpOIx%252FD6Fbak16i%252FyZZfwX6%252Fiigls4ps2jhWiPF6hSLF6aQRfVZIUga%252FxFZYyPmkAbUXzB0SEhRIZDOO%252BqS83wEpiE2DBtKNz5yi2QNwkKNSTWd6AOCpLAuIZDHrAKUJzmxsKosjMZ3Jh6OHGwo5AzoZrwZbfuAKCOijxSlLkvez1TKiYfOpULQRcU4xjDa7%252BqDQJPltaXUipkdlC%252BXEr5AvpW7sS0ex592V2PVgB4vmOoAN0ybLmXTKj6q0hXXsAxyB7L25zyHAw9rTSMWAREnFK9cDoY8%252FI5MV%252F3LAwv23kR9jGe3zMVCNuazw9YpRwtX3W87HZJ9wrK%252FmppKoH3Vm&crnrstn_m=facebook_social_media_lnk&crnrstn_encrypt_tunnel=ROGIUUsYtf%252FHalOOgnSg2eP6BYnj%252BOaIn0HlVKsKZ1rELoeMkQzAq3dYXE7cYUK85BrqxDwU\', \'_blank\', this);">
            <div style="position: relative;">
                <div style="position: absolute; left:-55px; top: 0;">
                    <img src="http://172.16.225.139/evifweb.com/_R/ui/imgs/png/system/_lab_sys_sprite_hq_algorithm_unit_test.png" width="639" height="851" alt="Facebook" title="Link to Facebook related resource.">
                </div>
            </div>
        </div>
    <script>
    function crnrstn_sticky_' . $tmp_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

            break;

        }

        return false;

    }
    </script>';

*/
        return $tmp_str_html_out;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function return_interact_ui_profile_attribute(
             $name, 
             $theme_profile_override = NULL)
    {
	    // 5 :: Wednesday, June 21, 2023 @ 0221 hrs.

	    $tmp_str_out = '';
	
	    switch($name){
            case 'sprite_icon_thirdparty_tm_is_active':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string ' . 
                                   'replaced with default CRNRSTN :: INTERACT ' . 
                                   'UI theme profile [' . 
                                   $tmp_theme_profile . 
                                   '] sprite data.', 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   'CRNRSTN_BARNEY');
                            error_log(__LINE__ . 
                                ' ui html mgr NULL or empty string ' . 
                                'replaced with default CRNRSTN :: ' . 
                                'INTERACT UI theme profile [' . 
                                $tmp_theme_profile . '] sprite data.');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Retrieve attribute data 
                             * from default theme settings.
                             *
                             */
                            $tmp_str_out = $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        //
                        // OUTPUT [1=ON, 0=OFF].
                        if($this->tidy_boolean($tmp_str_out) == true){

                            return 1;

                        }

                        return 0;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_thirdparty_tm_is_active', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_thirdparty_tm_is_active', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            $tmp_str_out = $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        //
                        // OUTPUT [1=ON, 0=OFF].
                        if($this->tidy_boolean($tmp_str_out) == true){

                            return 1;

                        }

                        return 0;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            case 'sprite_icon_height':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                            error_log(__LINE__ . ' ui html mgr NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_height', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_height', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            case 'sprite_icon_background_color':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                            error_log(__LINE__ . ' ui html mgr NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_background_color', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_background_color', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile('STRING');

                            //error_log(__LINE__ . ' ui html $name[' . $name . ']. [' . print_r($this->theme_attributes_ARRAY, true) . '].');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            case 'sprite_icon_mouseout_effect_dimmed_color':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                            error_log(__LINE__ . ' ui html mgr NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_mouseout_effect_dimmed_color', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            case 'sprite_icon_mouseout_effect_dimmed_color_opacity':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                            error_log(__LINE__ . ' ui html mgr NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_mouseout_effect_dimmed_color_opacity', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_mouseout_effect_dimmed_color_opacity', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            //
                            // RETRIEVE ATTRIBUTE FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            case 'sprite_icon_mouseover_effect_brighten_color_opacity':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                            error_log(__LINE__ . ' ui html mgr NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_mouseover_effect_brighten_color_opacity', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_mouseover_effect_brighten_color_opacity', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            case 'sprite_icon_mouseover_magnification_zoom':

                if(isset($theme_profile_override)){

                    //
                    // RETRIEVE ATTRIBUTE DATA FROM THEME OVERRIDE.
                    if(isset($this->theme_attributes_ARRAY[$theme_profile_override])){

                        $tmp_str_out = $this->theme_attributes_ARRAY[$theme_profile_override]['interact.ui.' . $name];

                        //
                        // "BAD/NULL THEME DATA" CHECK. KINDA MOOT, BUT HURT NOT...IT DOES.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            $this->error_log('NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                            error_log(__LINE__ . ' ui html mgr NULL or empty string replaced with default CRNRSTN :: INTERACT UI theme profile [' . $tmp_theme_profile . '] sprite data.');

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        //
                        // EMPTY STRING WILL BE RETURNED.
                        $this->error_log('Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                        error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI theme profile [' . $theme_profile_override . '] sprite data requested.');

                    }

                }else{

                    if($this->isset_resource('data_value', 'override_interact_theme_sprite_icon_mouseover_effect_magnification_zoom_percent', 'CRNRSTN::RESOURCE::SPRITE_ICON') == true){

                        //
                        // RETRIEVE ATTRIBUTE DATA FROM OVERRIDE.
                        $tmp_str_out = $this->get_resource('override_interact_theme_sprite_icon_mouseover_effect_magnification_zoom_percent', 0, 'CRNRSTN::RESOURCE::SPRITE_ICON');

                        //
                        // "NULL/EMPTY STRING THEME OVERRIDE SETTINGS DATA" CHECK. WE MUST CHECK.
                        if(strlen($tmp_str_out) < 1){

                            $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                            //
                            // RETRIEVE ATTRIBUTE DATA FROM DEFAULT THEME SETTINGS.
                            return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                        }

                        return $tmp_str_out;

                    }else{

                        $tmp_theme_profile = $this->return_interact_ui_theme_profile();

                        //
                        // RETRIEVE ATTRIBUTE FROM DEFAULT THEME SETTINGS.
                        return $this->theme_attributes_ARRAY[$tmp_theme_profile]['interact.ui.' . $name];

                    }

                }

            break;
            default:

                $this->error_log('Unknown CRNRSTN :: INTERACT UI profile attribute [' . $name . '] data requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);
                error_log(__LINE__ . ' ui html mgr Unknown CRNRSTN :: INTERACT UI profile attribute [' . $name . '] data requested.');

            break;
	
        }

        return $tmp_str_out;
	
    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function return_output_CRNRSTN_UI_DOCS_NAV_LINK(
             $content_type, 
             $output_type = 'HTML')
    {

	    if($output_type == 'array'){

	        //if(count($this->docs_nav_link_ARRAY) > 0){
            if(!!$this->docs_nav_link_ARRAY){

	            return $this->docs_nav_link_ARRAY;

            }

        }

	    if((strlen($this->docs_nav_html) > 0) && 
            ($output_type == 'HTML'))
        {

	        return $this->docs_nav_html;

        }

        $tmp_str = '';
        $tmp_data_type_family = 'CRNRSTN::RESOURCE::INTERACT_UI::DOCUMENTATION_NAV';

        $tmp_nav_cnt = $this->get_resource_count('CRNRSTN_NAV_LINK', $tmp_data_type_family);
	    if($tmp_nav_cnt < 1){

            $directory = CRNRSTN_ROOT . '/_R/ui/docs/documentation/' . $content_type . '/';

            $scanned_directory_ARRAY = $this->better_scandir($directory);

            //
            // SOURCE :: https://www.php.net/manual/en/function.scandir.php
            // AUTHOR :: dwieeb at gmail dot com :: https://www.php.net/manual/en/function.scandir.php#107215
            $scanned_directory_ARRAY = array_diff($scanned_directory_ARRAY, array('..', '.', 'index.php'));

            foreach($scanned_directory_ARRAY as 
                $index => $dir_resource)
            {

                $tmp_data_key = 'CRNRSTN_NAV_LINK';
                $this->add_resource($tmp_data_key, $dir_resource, $tmp_data_type_family);

                if(!$this->tmp_restrict_this_lorem_ipsum_method($dir_resource)){

                    $this->docs_nav_link_ARRAY[$dir_resource] = 1;

                    if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

                        $this->docs_nav_html .= '<li><a rel="crnrstn_documentation_side_nav_' . $this->session_salt() . '" data-crnrstn="' . $dir_resource . '" id="crnrstn_text_lnk_' . $this->hash($dir_resource, 'md5') . '" href="#' . $dir_resource . '" title="' . $dir_resource . '">' . $dir_resource . '</a></li>';

                    }else{

                        $this->docs_nav_html .= '
                <li><a rel="crnrstn_documentation_side_nav_' . $this->session_salt() . '" data-crnrstn="' . $dir_resource . '" id="crnrstn_text_lnk_' . $this->hash($dir_resource, 'md5') . '" href="#' . $dir_resource . '" title="' . $dir_resource . '">' . $dir_resource . '</a></li>';

                    }

                }

            }

            if($output_type == 'array'){

                return $this->docs_nav_link_ARRAY;

            }

            $this->add_resource('DOCUMENTATION_NAV_COMPONENT_HTML', $this->docs_nav_html, $tmp_data_type_family);

            return $this->docs_nav_html;

        }

	    for($i = 0; $i < $tmp_nav_cnt; $i++){

            $dir_resource = $this->get_resource('CRNRSTN_NAV_LINK', $i, $tmp_data_type_family);

            if(!$this->tmp_restrict_this_lorem_ipsum_method($dir_resource)){

                $this->docs_nav_link_ARRAY[$dir_resource] = 1;

                if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

                    $this->docs_nav_html .= '<li><a rel="crnrstn_documentation_side_nav_' . $this->session_salt() . '" data-crnrstn="' . $dir_resource . '" id="crnrstn_text_lnk_' . $this->hash($dir_resource, 'md5') . '" href="#' . $dir_resource . '" title="' . $dir_resource . '">' . $dir_resource . '</a></li>';

                }else{

                    $this->docs_nav_html .= '
                <li><a rel="crnrstn_documentation_side_nav_' . $this->session_salt() . '" data-crnrstn="' . $dir_resource . '" id="crnrstn_text_lnk_' . $this->hash($dir_resource, 'md5') . '" href="#' . $dir_resource . '" title="' . $dir_resource . '">' . $dir_resource . '</a></li>';

                }

            }

        }

        return $this->docs_nav_html;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_mit_license()
    {

        //
        // CRNRSTN :: MEMORY USAGE PERFORMANCE REPORTING.
        $tmp_text_break = '.
';

        $mem_report_queue = $this->get_resource('mem_rpt_mit_license_modal', 0, 'CRNRSTN::RESOURCE::REPORTING');
        $tmp_mem_str = $this->mem_report($mem_report_queue, 'TEXT', 10, false, true, $tmp_text_break, '<br>');

        $tmp_module_page_key = $this->oDATA_TUNNEL_SERVICES_MGR->return_received_data('crnrstn_interact_ui_link_text_click');

        if(strlen($tmp_module_page_key) > 0){

            if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

                $tmp_mit_license = '<div class="crnrstn_mit_license_hdr_branding_shell"><div class="crnrstn_env_select_wrapper"><div class="crnrstn_env_select_component_wrapper"><select name="crnrstn_host_endpoint" style="height: 15px; font-size: 11px; display:inline;"><option value="0">-</option><option value="7">Apache v' . $this->version_apache() . '</option><option value="8">MySQLi v' . $this->version_mysqli() . '</option><option value="9">PHP v' . $this->version_php() . '</option></select></div><div class="crnrstn_cb"></div><div class="crnrstn_static_hdr_branding_shell"><div class="crnrstn_static_hdr_branding_copy">C<span class="the_R">R</span>NRSTN :: v' . $this->version_crnrstn() . '</div></div></div><div class="crnrstn_dyn_branding_elem_wrapper signin"><div class="crnrstn_dyn_branding_elem_shell">' . $this->return_branding_creative(true, CRNRSTN_HTML) . '</div></div><div class="crnrstn_cb_5"></div></div><div class="crnrstn_section_outter_wrapper signin"><div class="crnrstn_section_inner_wrapper signin"><div class="crnrstn_signin_meta_time_stats_wrapper"><div class="crnrstn_signin_meta_time_stats">[' . $this->return_micro_time() . ' ' . date('T') . '] [rtime ' . $this->wall_time() . ' secs]</div><div class="crnrstn_signin_meta_5_logo">' . $this->return_creative('FIVE', CRNRSTN_HTML) . '</div><div class="crnrstn_signin_backdrop_logo">' . $this->return_system_image('CRNRSTN_LOGO','', 250, '', '', '', '', CRNRSTN_HTML) . '</div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div><div class="crnrstn_signin_form_outter_wrapper"><div class="crnrstn_signin_form_inner_wrapper crnrstn_mit_landing"><div class="crnrstn_signin_form_inner_wrapper_rel"><div class="crnrstn_mit_license_wrapper">
<code><pre>MIT License

Copyright (c) 2012-' . date('Y') . ' Jonathan \'5\' Harris

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
</pre></code></div></div></div></div></div></div><div class="crnrstn_cb_40"></div>';

            }else{

                $tmp_mit_license = '<div class="crnrstn_mit_license_hdr_branding_shell">
            <div class="crnrstn_env_select_wrapper">
                <div class="crnrstn_env_select_component_wrapper">
                    <select name="crnrstn_host_endpoint" style="height: 15px; font-size: 11px; display:inline;">
                        <option value="0">-</option>
                        <option value="7">Apache v' . $this->version_apache() . '</option>
                        <option value="8">MySQLi v' . $this->version_mysqli() . '</option>
                        <option value="9">PHP v' . $this->version_php() . '</option>
                    </select>

                </div>
                <div class="crnrstn_cb"></div>

                <div class="crnrstn_static_hdr_branding_shell">
                    <div class="crnrstn_static_hdr_branding_copy">C<span class="the_R">R</span>NRSTN :: v' . $this->version_crnrstn() . '</div>
                </div>

            </div>

            <div class="crnrstn_dyn_branding_elem_wrapper signin">
                <div class="crnrstn_dyn_branding_elem_shell">' . $this->return_branding_creative(true, CRNRSTN_HTML) . '</div>
            </div>

                <div class="crnrstn_cb_5"></div>

        </div>

        <div class="crnrstn_section_outter_wrapper signin">
            <div class="crnrstn_section_inner_wrapper signin">

                <div class="crnrstn_signin_meta_time_stats_wrapper">

                    <div class="crnrstn_signin_meta_time_stats">[' . $this->return_micro_time() . ' ' . date('T') . '] [rtime ' . $this->wall_time() . ' secs]</div>
                    <div class="crnrstn_signin_meta_5_logo">' . $this->return_creative('FIVE', CRNRSTN_HTML) . '</div>

                    <div class="crnrstn_signin_backdrop_logo">' . $this->return_system_image('CRNRSTN_LOGO','', 250, '', '', '', '', CRNRSTN_HTML) . '</div>

                    <div class="crnrstn_cb_40"></div>
                    <div class="crnrstn_signin_meta_time_stats" style="width: 600px;">' . $tmp_mem_str . '</div>
                </div>

                <div class="crnrstn_cb"></div>

                <div class="crnrstn_signin_form_outter_wrapper">

                    <div class="crnrstn_signin_form_inner_wrapper crnrstn_mit_landing">

                        <div class="crnrstn_signin_form_inner_wrapper_rel">

                            <div class="crnrstn_mit_license_wrapper">
                                <code><pre>MIT License

Copyright (c) 2012-' . date('Y') . ' Jonathan \'5\' Harris

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
</pre></code>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="crnrstn_cb_40"></div>';

            }

            if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

                $tmp_html_out = '<div class="crnrstn_lightbox_body_wrapper"><div class="crnrstn_lightbox_content_shell"><div class="crnrstn_mit_license_module_wrap_s3"><div class="crnrstn_mit_license_module_border_rel"><div class="crnrstn_mit_license_module_border"><div class="crnrstn_hidden_void"><div class="crnrstn_mit_license_module_content">' . $tmp_mit_license . '</div></div></div></div><div class="crnrstn_mit_license_module_wrap_s2_outter"><div class="crnrstn_mit_license_module_wrap_s2_inner"><div class="crnrstn_mit_license_module_bg_rel"><div class="crnrstn_mit_license_module_wrap_s1_rel"><div class="crnrstn_mit_license_module_wrap_s1"><div class="crnrstn_mit_license_module_content">' . $tmp_mit_license . '</div></div><div class="crnrstn_documentation_dyn_content_module_bg"></div><div class="crnrstn_hidden_void"><div class="crnrstn_mit_license_module_content">' . $tmp_mit_license . '</div></div></div></div></div></div></div></div></div>';

            }else{

                $tmp_html_out = '<div class="crnrstn_lightbox_body_wrapper">
            <div class="crnrstn_lightbox_content_shell">

                <div class="crnrstn_mit_license_module_wrap_s3">

                    <div class="crnrstn_mit_license_module_border_rel">
                        <div class="crnrstn_mit_license_module_border">
                            <div class="crnrstn_hidden_void">
                                <div class="crnrstn_mit_license_module_content">' . $tmp_mit_license . '</div>

                            </div>
                        </div>
                    </div>

                    <div class="crnrstn_mit_license_module_wrap_s2_outter">
                        <div class="crnrstn_mit_license_module_wrap_s2_inner">

                            <div class="crnrstn_mit_license_module_bg_rel">

                                <div class="crnrstn_mit_license_module_wrap_s1_rel">

                                    <div class="crnrstn_mit_license_module_wrap_s1">

                                        <div class="crnrstn_mit_license_module_content">' . $tmp_mit_license . '</div>

                                    </div>

                                    <div class="crnrstn_documentation_dyn_content_module_bg"></div>

                                    <div class="crnrstn_hidden_void">
                                        <div class="crnrstn_mit_license_module_content">' . $tmp_mit_license . '</div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                </div>
        </div>';

            }

            return $tmp_html_out;

        }

        return '';

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function sauce($resource)
    {

	    return $this->oCRNRSTN_UI_ASSEMBLER->sauce($resource);

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_documentation_page($module_key_override = NULL)
    {

	    error_log(__LINE__ . ' ui html $module_key_override[' . $module_key_override . '].');
        $this->page_serial = $this->oCRNRSTN_UI_ASSEMBLER->initialize_page_content($module_key_override);

        //die();
        //
        // SEARCH INTEGRATION
        //$this->oCRNRSTN_UI_ASSEMBLER->index_page();

        $tmp_html_out = $this->oCRNRSTN_UI_ASSEMBLER->return_page_html($this->page_serial);

        return $tmp_html_out;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_documentation_nav($content_type = 'php')
    {

        if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

            $tmp_html_out = '<div id="crnrstn_interact_ui_side_nav_search" class="crnrstn_interact_ui_side_nav_search" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);"><div id="crnrstn_interact_ui_side_nav_search_img_bg" class="crnrstn_interact_ui_bg_layer" style="width:2000px; height:2000px;"></div><div class="crnrstn_interact_ui_side_nav_search_bar_rel"><div id="crnrstn_interact_ui_side_nav_search_bar" class="crnrstn_interact_ui_side_nav_search_bar"></div></div><div id="crnrstn_interact_ui_side_nav_search_img_wrapper" class="crnrstn_interact_ui_side_nav_v_img_wrapper"><div id="crnrstn_interact_ui_side_nav_search_img_rel" class="crnrstn_interact_ui_side_nav_search_img_rel" style="width:35px; height:26px;"><div id="crnrstn_interact_ui_side_nav_search_img" class="crnrstn_interact_ui_side_nav_search_img">' . $this->return_system_image('SEARCH_MAGNIFY_GLASS','', 20, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div></div><div id="crnrstn_interact_ui_side_nav_logo" class="crnrstn_interact_ui_side_nav_logo" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);"><div id="crnrstn_interact_ui_side_nav_logo_img_bg" class="crnrstn_interact_ui_bg_layer" style="width:2000px; height:2000px;"></div><div class="crnrstn_interact_ui_side_nav_logo_bar_rel"><div id="crnrstn_interact_ui_side_nav_logo_bar" class="crnrstn_interact_ui_side_nav_logo_bar"></div></div><div id="crnrstn_interact_ui_side_nav_logo_img_wrapper" class="crnrstn_interact_ui_side_nav_logo_img_wrapper"><div id="crnrstn_interact_ui_side_nav_logo_img_rel" class="crnrstn_interact_ui_side_nav_logo_img_rel" style="width:80px; height:50px;"><div id="crnrstn_interact_ui_side_nav_logo_img" class="crnrstn_interact_ui_side_nav_logo_img">' . $this->return_system_image('CRNRSTN_LOGO', '', 40, '', '', '', '', CRNRSTN_HTML) . '</div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div></div><nav id="crnrstn_interact_ui_side_nav" class="crnrstn_interact_ui_side_nav"><!-- SOURCE :: https://www.w3schools.com/howto/howto_css_fixed_sidebar.asp --><ul>' . $this->return_output_CRNRSTN_UI_DOCS_NAV_LINK($content_type) . '</ul><div class="crnrstn_cb_20"></div><div class="crnrstn_interact_ui_side_nav_5">' . $this->return_system_image('FIVE', 30, 30, '', '', '', '', CRNRSTN_HTML) . '</div><div class="crnrstn_cb_100"></div></nav></div>';

        }else{

            $tmp_html_out = '<div id="crnrstn_interact_ui_side_nav_search" class="crnrstn_interact_ui_side_nav_search" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);">

                <div id="crnrstn_interact_ui_side_nav_search_img_bg" class="crnrstn_interact_ui_bg_layer" style="width:2000px; height:2000px;"></div>

                <div class="crnrstn_interact_ui_side_nav_search_bar_rel">
                    <div id="crnrstn_interact_ui_side_nav_search_bar" class="crnrstn_interact_ui_side_nav_search_bar"></div>
                </div>

                <div id="crnrstn_interact_ui_side_nav_search_img_wrapper" class="crnrstn_interact_ui_side_nav_v_img_wrapper">

                    <div id="crnrstn_interact_ui_side_nav_search_img_rel" class="crnrstn_interact_ui_side_nav_search_img_rel" style="width:35px; height:26px;">

                        <div id="crnrstn_interact_ui_side_nav_search_img" class="crnrstn_interact_ui_side_nav_search_img">' . $this->return_system_image('SEARCH_MAGNIFY_GLASS','', 20, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div>
                        <div class="crnrstn_cb"></div>

                    </div>
                    <div class="crnrstn_cb"></div>

                </div>
                <div class="crnrstn_cb"></div>

            </div>

            <div id="crnrstn_interact_ui_side_nav_logo" class="crnrstn_interact_ui_side_nav_logo" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);">

                <div id="crnrstn_interact_ui_side_nav_logo_img_bg" class="crnrstn_interact_ui_bg_layer" style="width:2000px; height:2000px;"></div>

                <div class="crnrstn_interact_ui_side_nav_logo_bar_rel">
                    <div id="crnrstn_interact_ui_side_nav_logo_bar" class="crnrstn_interact_ui_side_nav_logo_bar"></div>
                </div>

                <div id="crnrstn_interact_ui_side_nav_logo_img_wrapper" class="crnrstn_interact_ui_side_nav_logo_img_wrapper">

                    <div id="crnrstn_interact_ui_side_nav_logo_img_rel" class="crnrstn_interact_ui_side_nav_logo_img_rel" style="width:80px; height:50px;">

                        <div id="crnrstn_interact_ui_side_nav_logo_img" class="crnrstn_interact_ui_side_nav_logo_img">' . $this->return_system_image('CRNRSTN_LOGO', '', 40, '', '', '', '', CRNRSTN_HTML) . '</div>
                        <div class="crnrstn_cb"></div>

                    </div>
                    <div class="crnrstn_cb"></div>
                </div>
            <div class="crnrstn_cb"></div>
            </div>

            <div id="crnrstn_interact_ui_side_nav" class="crnrstn_interact_ui_side_nav">
                <!-- SOURCE :: https://www.w3schools.com/howto/howto_css_fixed_sidebar.asp -->
                <ul>' . $this->return_output_CRNRSTN_UI_DOCS_NAV_LINK($content_type) . '
                </ul>
                <div class="crnrstn_cb_20"></div>
                <div class="crnrstn_interact_ui_side_nav_5">' . $this->return_system_image('FIVE', 30, 30, '', '', '', '', CRNRSTN_HTML) . '</div>

                <div class="crnrstn_cb_100"></div>

           </div>

        </div>';

        }


        return $tmp_html_out;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_footer_content_container()
    {

	    $tmp_framework_link_value = $this->oDATA_TUNNEL_SERVICES_MGR->return_received_data('crnrstn_interact_ui_link_text_click');

	    $tmp_string_constant_ARRAY = explode('|', $tmp_framework_link_value);

	    if(!isset($tmp_string_constant_ARRAY[1])){

            //
            // MISSING PIPE DELIMITED SITUATION, FOR SOME REASON.
	        return '';

        }

	    $tmp_resource_constant = $this->return_int_const_profile($tmp_string_constant_ARRAY[1], 'DESCRIPTION');
        $tmp_text_break = '.
';

        $mem_report_queue = $this->get_resource('mem_rpt_general_system_footer', 0, 'CRNRSTN::RESOURCE::REPORTING');
        $tmp_mem_str = $this->mem_report($mem_report_queue, 'TEXT', 10, false, true, $tmp_text_break, '<br>');

        $tmp_html_out = '<div id="crnrstn_ui_system_footer_content_container_wrapper" class="crnrstn_ui_system_footer_content_container_wrapper">

            <div class="crnrstn_ui_system_footer_rel">

                <div id="crnrstn_ui_system_footer_content_container" class="crnrstn_ui_system_footer">

                        <div class="crnrstn_ui_system_footer_content">
                            <div id="crnrstn_ui_system_footer_content_container_stache" class="crnrstn_ui_system_footer_stache">' . $this->return_system_image('STACHE','', 17, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div>

                            <div id="crnrstn_ui_system_footer_content_container_mit" class="crnrstn_ui_system_footer_mit"><a id="crnrstn_ui_system_footer_content_container_mit_lnk" href="#" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);" target="_self">' . $this->multi_lang_content_return('COPY_ALL_RIGHTS_PART_MIT') . '</a></div>
                            <div id="crnrstn_ui_system_footer_content_container_download" class="crnrstn_ui_system_footer_download"><a style="font-family: Courier New, Courier, monospace; font-size:12px; line-height: 20px;" href="'. $this->return_sticky_link('https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber', 'crnrstn_text_lnk_download') .'" target="_blank">' . $this->multi_lang_content_return('LNK_DOWNLOAD_TXT_FOOTER') . '</a></div>
                            <div class="crnrstn_ui_system_footer_stats_wrapper">
                                <div id="crnrstn_ui_system_footer_content_container_mem_report" class="crnrstn_ui_system_footer_stat">' . $tmp_mem_str . '</div>
                                <div id="crnrstn_ui_system_footer_content_container_stat_stime" class="crnrstn_ui_system_footer_stat">[' . $this->return_micro_time() . ']</div>
                                <div id="crnrstn_ui_system_footer_content_container_stat_rtime" class="crnrstn_ui_system_footer_stat">[rtime ' . $this->wall_time() . ' secs]</div>
                                <div id="crnrstn_ui_system_footer_content_container_stat_wtime" class="crnrstn_ui_system_footer_stat">[' . $tmp_resource_constant . ']</div>
                                <div id="crnrstn_ui_system_footer_content_container_stat_meta" class="crnrstn_ui_system_footer_stat"></div>
                            </div>

                            <div class="crnrstn_ui_system_footer_5">' . $this->return_system_image('FIVE', 20, 20, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div>

                            <div class="crnrstn_cb"></div>

                        </div>

                    <div class="crnrstn_cb"></div>

               </div>

            </div>

        </div>';

        error_log(__LINE__ . ' html mgr RETURN SSDTLA XML data for [' . $this->oDATA_TUNNEL_SERVICES_MGR->return_received_data('crnrstn_interact_ui_link_text_click') . '].');

        return $tmp_html_out;


    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_footer_generic()
    {

        $tmp_text_break = '.
';

        $mem_report_queue = $this->get_resource('mem_rpt_general_system_footer', 0, 'CRNRSTN::RESOURCE::REPORTING');
        $tmp_mem_str = $this->mem_report($mem_report_queue, 'TEXT', 10, false, true, $tmp_text_break, '<br>');

        if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

            $tmp_html_out = '<div id="crnrstn_ui_system_footer_wrapper" class="crnrstn_ui_system_footer_wrapper"><div class="crnrstn_ui_system_footer_rel"><div id="crnrstn_ui_system_footer" class="crnrstn_ui_system_footer"><div class="crnrstn_ui_system_footer_content"><div id="crnrstn_ui_system_footer_stache" class="crnrstn_ui_system_footer_stache">' . $this->return_system_image('STACHE','', 17, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div><div id="crnrstn_ui_system_footer_mit" class="crnrstn_ui_system_footer_mit"><a id="crnrstn_ui_system_footer_mit_lnk" href="#" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);" target="_self">' . $this->multi_lang_content_return('COPY_ALL_RIGHTS_PART_MIT') . '</a></div><div id="crnrstn_ui_system_footer_download" class="crnrstn_ui_system_footer_download"><a style="font-family: Courier New, Courier, monospace; font-size:12px; line-height: 20px;" href="'. $this->return_sticky_link('https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber', 'crnrstn_text_lnk_download') .'" target="_blank">' . $this->multi_lang_content_return('LNK_DOWNLOAD_TXT_FOOTER') . '</a></div><div class="crnrstn_ui_system_footer_stats_wrapper"><div id="crnrstn_ui_system_footer_stat_stime" class="crnrstn_ui_system_footer_stat">[' . $this->return_micro_time() . ']</div><div id="crnrstn_ui_system_footer_stat_rtime" class="crnrstn_ui_system_footer_stat">[rtime ' . $this->wall_time() . ' secs]</div><div id="crnrstn_ui_system_footer_stat_wtime" class="crnrstn_ui_system_footer_stat">[wtime ' . $this->wall_time() . ' secs]</div><div id="crnrstn_ui_system_footer_stat_meta" class="crnrstn_ui_system_footer_stat"></div></div><div class="crnrstn_ui_system_footer_5">' . $this->return_system_image('FIVE', 20, 20, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div></div></div></div>';

        }else{

            $tmp_html_out = '<div id="crnrstn_ui_system_footer_wrapper" class="crnrstn_ui_system_footer_wrapper">

                <div class="crnrstn_ui_system_footer_rel">

                    <div id="crnrstn_ui_system_footer" class="crnrstn_ui_system_footer">

                            <div class="crnrstn_ui_system_footer_content">
                                <div id="crnrstn_ui_system_footer_stache" class="crnrstn_ui_system_footer_stache">' . $this->return_system_image('STACHE','', 17, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div>

                                <div id="crnrstn_ui_system_footer_mit" class="crnrstn_ui_system_footer_mit"><a id="crnrstn_ui_system_footer_mit_lnk" href="#" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onclick\', this);" target="_self">' . $this->multi_lang_content_return('COPY_ALL_RIGHTS_PART_MIT') . '</a></div>
                                <div id="crnrstn_ui_system_footer_download" class="crnrstn_ui_system_footer_download"><a style="font-family: Courier New, Courier, monospace; font-size:12px; line-height: 20px;" href="'. $this->return_sticky_link('https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber', 'crnrstn_text_lnk_download') .'" target="_blank">' . $this->multi_lang_content_return('LNK_DOWNLOAD_TXT_FOOTER') . '</a></div>

                                <div class="crnrstn_ui_system_footer_stats_wrapper">
                                    <div id="crnrstn_ui_system_footer_content_container_mem_report" class="crnrstn_ui_system_footer_stat">' . $tmp_mem_str . '</div>
                                    <div id="crnrstn_ui_system_footer_stat_stime" class="crnrstn_ui_system_footer_stat">[' . $this->return_micro_time() . ']</div>
                                    <div id="crnrstn_ui_system_footer_stat_rtime" class="crnrstn_ui_system_footer_stat">[rtime ' . $this->wall_time() . ' secs]</div>
                                    <div id="crnrstn_ui_system_footer_stat_wtime" class="crnrstn_ui_system_footer_stat">[wtime ' . $this->wall_time() . ' secs]</div>
                                    <div id="crnrstn_ui_system_footer_stat_meta" class="crnrstn_ui_system_footer_stat"></div>
                                </div>

                                <div class="crnrstn_ui_system_footer_5">' . $this->return_system_image('FIVE', 20, 20, NULL, NULL, NULL, NULL, CRNRSTN_HTML) . '</div>

                                <div class="crnrstn_cb"></div>

                            </div>

                        <div class="crnrstn_cb"></div>

                   </div>

                </div>

            </div>';

        }

        return $tmp_html_out;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_messenger()
    {

        if($this->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) == true){

            $tmp_html_out = '<div id="crnrstn_interact_ui_wrapper" class="crnrstn_interact_ui_wrapper"><div class="crnrstn_interact_ui"><div id="crnrstn_interact_ui_bg_border" class="crnrstn_interact_ui_bg_border"></div><div id="crnrstn_interact_ui_bg_border_edge" class="crnrstn_interact_ui_bg_border_edge" style="border: 1px solid #FFF;"></div><div style="position:relative; height:106px;"><div id="crnrstn_interact_ui_primary_navgroup_wrapper" class="crnrstn_interact_ui_primary_navgroup_wrapper"><div id="crnrstn_interact_ui_primary_nav_menu" class="crnrstn_interact_ui_primary_navgroup_lnk_border"><div id="crnrstn_interact_ui_primary_nav_img_shell_menu_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_menu_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_menu_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_menu" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_menu_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div></div><div id="crnrstn_interact_ui_primary_nav_close_x" class="crnrstn_interact_ui_primary_navgroup_lnk_border"><div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_close_x" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div></div><div id="crnrstn_interact_ui_primary_nav_fs_expand" class="crnrstn_interact_ui_primary_navgroup_lnk_border"><div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div></div><div id="crnrstn_interact_ui_primary_nav_minimize" class="crnrstn_interact_ui_primary_navgroup_lnk_border"><div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_minimize" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_fivedev_sm" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_FIVEDEV_SMALL', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FIVEDEV') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FIVEDEV') . '"></div><div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FIVEDEV') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FIVEDEV') . '"></div></div></div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb"></div><div style="position:relative;"><div style="position:absolute; z-index:68; margin: 2px 0 0 16px; border: 1px solid #FFF;"><div id="crnrstn_interact_ui_bg_solid" class="crnrstn_interact_ui_bg_solid" onclick="oCRNRSTN_JS.sign_in_transition_via_micro_expansion();">' . $this->return_creative('MESSAGE_CONVERSATION_BUBBLE_MICRO_THUMB_BLUE00', CRNRSTN_HTML) . '<div class="crnrstn_cb"></div></div></div><div class="crnrstn_cb"></div></div><div id="crnrstn_interact_ui_content_wrapper" class="crnrstn_interact_ui_content_wrapper"><div id="crnrstn_interact_ui_signin_frm_username" class="crnrstn_interact_ui_signin_frm_lbl">' . $this->multi_lang_content_return('FORM_LABEL_USERNAME') . '</div><div class="crnrstn_cb_5"></div><input type="text" name="username" value=""><div class="crnrstn_cb_15"></div><div id="crnrstn_interact_ui_signin_frm_password" class="crnrstn_interact_ui_signin_frm_lbl">' . $this->multi_lang_content_return('FORM_LABEL_PASSWORD_OPTIONAL') . '</div><div class="crnrstn_cb_5"></div><input type="password" name="password" value=""><div class="crnrstn_cb_10"></div><div class="crnrstn_interact_ui_signin_frm_chkbx_eula"><input type="checkbox" style="width: 20px;" name="crnrstn_signin_chkbx_eula_accept" value="eula_i_agree"></div><div class="crnrstn_interact_ui_signin_frm_lbl_eula"><a href="#">' . $this->multi_lang_content_return('FORM_LNK_TXT_EULA') . '</a></div><div class="crnrstn_cb_10"></div><div class="crnrstn_interact_ui_frm_submit" onclick="oCRNRSTN_JS.sign_in_form_submit_via_micro_expansion();"><div id="crnrstn_interact_ui_signin_frm_btn_submit" class="crnrstn_interact_ui_signin_frm_btn_submit">' . $this->multi_lang_content_return('FORM_BUTTON_TEXT_CONNECT') . '</div></div></div></div></div>';

        }else{

            $tmp_html_out = '<div id="crnrstn_interact_ui_wrapper" class="crnrstn_interact_ui_wrapper">
    <div class="crnrstn_interact_ui">

        <div id="crnrstn_interact_ui_bg_border" class="crnrstn_interact_ui_bg_border"></div>

        <div id="crnrstn_interact_ui_bg_border_edge" class="crnrstn_interact_ui_bg_border_edge" style="border: 1px solid #FFF;"></div>

        <div style="position:relative; height:106px;">

            <div id="crnrstn_interact_ui_primary_navgroup_wrapper" class="crnrstn_interact_ui_primary_navgroup_wrapper">

                <div id="crnrstn_interact_ui_primary_nav_menu" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

                    <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_menu" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>

                </div>

                <div id="crnrstn_interact_ui_primary_nav_close_x" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

                    <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>

                </div>

                <div id="crnrstn_interact_ui_primary_nav_fs_expand" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

                    <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>

                </div>

                <div id="crnrstn_interact_ui_primary_nav_minimize" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

                    <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_fivedev_sm" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_FIVEDEV_SMALL', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FIVEDEV') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FIVEDEV') . '"></div>
                    <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FIVEDEV') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FIVEDEV') . '"></div>

                </div>

            </div>
            <div class="crnrstn_cb"></div>
        </div>

        <div class="crnrstn_cb"></div>

        <div style="position:relative;">
            <div style="position:absolute; z-index:68; margin: 2px 0 0 16px; border: 1px solid #FFF;">
                <div id="crnrstn_interact_ui_bg_solid" class="crnrstn_interact_ui_bg_solid" onclick="oCRNRSTN_JS.sign_in_transition_via_micro_expansion();">
                    ' . $this->return_creative('MESSAGE_CONVERSATION_BUBBLE_MICRO_THUMB_BLUE00', CRNRSTN_HTML) . '
                    <div class="crnrstn_cb"></div>
                </div>
            </div>
            <div class="crnrstn_cb"></div>

        </div>

        <div id="crnrstn_interact_ui_content_wrapper" class="crnrstn_interact_ui_content_wrapper">
            <div id="crnrstn_interact_ui_signin_frm_username" class="crnrstn_interact_ui_signin_frm_lbl">' . $this->multi_lang_content_return('FORM_LABEL_USERNAME') . '</div>
            <div class="crnrstn_cb_5"></div>
            <input type="text" name="username" value="">
            <div class="crnrstn_cb_15"></div>
            <div id="crnrstn_interact_ui_signin_frm_password" class="crnrstn_interact_ui_signin_frm_lbl">' . $this->multi_lang_content_return('FORM_LABEL_PASSWORD_OPTIONAL') . '</div>
            <div class="crnrstn_cb_5"></div>
            <input type="password" name="password" value="">
            <div class="crnrstn_cb_10"></div>

            <div class="crnrstn_interact_ui_signin_frm_chkbx_eula"><input type="checkbox" style="width: 20px;" name="crnrstn_signin_chkbx_eula_accept" value="eula_i_agree"></div>
            <div class="crnrstn_interact_ui_signin_frm_lbl_eula"><a href="#">' . $this->multi_lang_content_return('FORM_LNK_TXT_EULA') . '</a></div>

            <div class="crnrstn_cb_10"></div>

            <div class="crnrstn_interact_ui_frm_submit" onclick="oCRNRSTN_JS.sign_in_form_submit_via_micro_expansion();">
                <div id="crnrstn_interact_ui_signin_frm_btn_submit" class="crnrstn_interact_ui_signin_frm_btn_submit">' . $this->multi_lang_content_return('FORM_BUTTON_TEXT_CONNECT') . '</div>
            </div>
        </div>
    </div>
</div>
';

        }

        return $tmp_html_out;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_module_html_system_search()
    {

        $tmp_html_out = '<div style="padding: 20px;"><h1>' . 
                         __METHOD__ . 
                         '</h1></div>';
        //error_log(__LINE__ . ' ui html mgr [' . $tmp_html_out . '].');

        return $tmp_html_out;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_documentation()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/documentation/index.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_mit_license()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/pages/mit_license.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_signin()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/pages/signin.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_css_validator()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/pages/css_validator.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_css_validator_profile()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/pages/css_validator_profile.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_dashboard()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/pages/dashboard.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function out_ui_html_doc_config_wordpress()
    {

        $tmp_str = '';

        $filepath = '/_R/ui/docs/pages/config_wordpress.php';

        include(CRNRSTN_ROOT . $filepath);

        return $tmp_str;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_crnrstn_interact_ui_html_mgr($name)
    {

        switch($name){
            case 'css_length_units_ARRAY':

                return self::$css_length_units_ARRAY;

            break;

        }

        return false;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function set_crnrstn_interact_ui_html_mgr(
             $name, 
             $value = NULL)
    {

        switch($name){
            case 'css_length_units_ARRAY':

                self::$css_length_units_ARRAY = $value;

            break;

        }

        return false;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function isset_crnrstn_interact_ui_html_mgr($name)
    {

        switch($name){
            case 'css_length_units_ARRAY':

                if(isset(self::$css_length_units_ARRAY)){

                    //if(count(self::$css_length_units_ARRAY) > 0){
                    if(!!self::$css_length_units_ARRAY){

                        return true;

                    }

                }

                return false;

            break;

        }

        return false;

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __destruct()
    {

	}

}