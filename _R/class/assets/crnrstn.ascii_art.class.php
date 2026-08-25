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
 * CLASS DEFINITION :: crnrstn_ascii_art
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Tuesday, November 21, 2023 @ 1944 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber RoCEv2 
 *                     SOAP Services Layer (CLR-SSL) 
 *                     System ASCII Art Source Control 
 *                     Class Object
 * DESCRIPTION      :: This is system ASCII art for the 
 *                     CRNRSTN :: Lightsaber RoCEv2 SOAP 
 *                     Services Layer (CLR-SSL).
 *
 *                     The CLR-SSL System ASCII art
 *                     Source Control Manager is a 
 *                     CRNRSTN :: user experience (UX) 
 *                     and application ambiance 
 *                     enrichment class object.
 *
 *                     With the design and creation of
 *                     a proprietary system data type
 *                     represented internally as an
 *                     integer and private static defined 
 *                     within CRNRSTN :: Lightsaber as
 *                     (int) $this->R_data[\'int_flag\'][\'R_bool_is_html\'],
 *                     the System ASCII Art Source
 *                     Control Manager will be will be a
 *                     formidable CRNRSTN :: UX agent
 *                     and an absolute master of
 *                     atmospheric and ambiance
 *                     enrichment for both the user and
 *                     the system admin alike.
 *
 *                     Here are a few of the features this
 *                     class will own for CRNRSTN ::
 *
 *                     - HTML and TEXT content type
 *                       hyper-rails-switching
 *                       using a new data type derived
 *                       from the bitmask integer state
 *                       (bit flip) management technology
 *                       of Icy Digital ITCC. We are
 *                       not "setting values"
 *                       here, boys,
 *
 *                     - ASCII Art presentation piece
 *                       serialization with color
 *                       versioning, and
 *
 *                     - fast memory resource access
 *                       by pointer for fast ASCII
 *                       art returns.
 *
 *
 *                     Meat off the bone, boys.
 *
 *                     Meat off the bone.
 *
 *
 *                     5
 *
 *                     Saturday, July 13, 2024 @ 2156 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 1.00.0000 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_ascii_art extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_ascii_art 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Wednesday, March 11, 2026 @ 0434 hrs.
     *
     */
    private $R_data = array();

    private static $CRNRSTN_ascii_name = 'CRNRSTN%20%3A%3A';
    private static $ascii_family_key;
    private static $multi_channel_int;
    private static $is_HTML;
    private static $ascii_selection;
    private static $art_id;
    private static $max_count_return;

    private static $art_id_ARRAY = array();
    private static $ascii_count_ARRAY = array();
    private static $ascii_ARRAY = array();

    private static $data_channel_init_sequence;

    public function __construct()
    {

        //
        // Local ASCII 
        // ID's. 
        self::$art_id_ARRAY = array(
                              'Isometric2'    => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Isometric2&t=',
                              'Isometric3'    => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Isometric3&t=',
                              'Doh'           => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Doh&t=',
                              'Banner3'       => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Banner3&t=',
                              'Block'         => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Block&t=',
                              'Impossible'    => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Impossible&t=',
                              'Modular'       => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Modular&t=',
                              'Fire Font'     => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Fire%20Font-k&t=',
                              'Flower Power'  => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Flower%20Power&t=',
                              'Big'           => 'http://patorjk.com/software/' . 
                                                 'taag/#p=display&f=Big&t=CRNRSTN%20%3A%3A'
                            );

        self::$max_count_return = 5;

        /*
        self::$data_channel_init_sequence = $this->get_resource(
                                                             'data_channel_init_sequence', 
                                                             0, 
                                                             'CRNRSTN::RESOURCE::MULTI_CHANNEL');
        */
    }

    public function return_full_ascii_art_set(
                    $ascii_key = NULL, 
                    $channel_char = NULL, 
                    $is_HTML)
    {

        //
        // This is incomplete, 
        // but it is not 
        // needed yet. 
        // 
        // 
        // 5 :: Wednesday, November 22, 2023 @ 0421 hrs.
        return self::$art_id_ARRAY;

    }

    public function return_incomplete_ascii_art(
                    $ascii_key = NULL, 
                    $channel_char = NULL, 
                    $is_HTML)
    {
        // 5 :: Wednesday, November 22, 2023 @ 0321 hrs.     // STARTED.

        $tmp_str = '';
        $tmp_display_missing_cnt = 0;

        //
        // CRNRSTN :: Multi-Channel 
        // Decoupled Data Object 
        // (MC-DDO) Services Layer. 
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // CRNRSTN :: UGC data 
        // input [BOOLEAN]
        // Apply channel settings 
        // to RRS Map object.
        //$this->set_channel_config($channel_constant, $attribute_name, $data);
        //$this->get_channel_config($channel_constant, $attribute_name);
        //$this->isset_channel_config($channel_constant, $attribute_name);

        //
        // Get all CRNRSTN :: 
        // Multi-Channel Decoupled 
        // Data Object (MC-DDO) 
        // System channels. 
        $tmp_master_channels_ARRAY = $this->return_master_channels_ARRAY();

        foreach($tmp_master_channels_ARRAY as 
            $index_const => $channel_constant)
        {

            $tmp_channel_int = self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int'];

            error_log(__LINE__ . 
                ' ascii $tmp_channel_int[' . 
                $tmp_channel_int . ']. seq[' . 
                self::$data_channel_init_sequence . 
                '] LOAD ASCII ART FOR CHANNEL [' . 
                $this->get_channel_config($channel_constant, 'DESCRIPTION') . 
                '].');

            die();
            //public function return_art(
            //                $ascii_key = NULL, 
            //                $channel_char = NULL, 
            //                $is_HTML = true, 
            //                $selection_override = NULL)
            //{

            //$tmp_complete_ascii_art_ARRAY = $this->return_full_ascii_art_set($channel_constant);

            //$tmp_display_missing_cnt
            foreach(self::$art_id_ARRAY as $artwork_name => $url_base){

                $tmp_art_str = '...&nbsp;Please stand by. ' . 
                               'The system is loading ascii, ' . 
                               $artwork_name . '...';

                //
                // If channel version 
                // does not exists, build 
                // the PHP source media 
                // tag and link. 
                $tmp_system_current_ascii = $this->art($channel_constant, $artwork_name);

                //
                // Do we have 
                // any art? 
                if(strlen($tmp_system_current_ascii) < 1){

                    //
                    // Initialize system 
                    // ASCII art hash. 
                    $tmp_art_hash = -1;
                    self::$ascii_ARRAY[self::$config_serial][self::$ascii_family_key]['ART'][$tmp_channel_int]['HASH'] = $tmp_art_hash;

                    //
                    // Increment missing 
                    // ASCII art count. 
                    $tmp_display_missing_cnt++;

                    $tmp_str .= '#
# [' . $this->return_micro_time() . 
'] [rtime ' . $this->wall_time() . ']
#
# CRNRSTN :: Lightsaber v' . $this->version_crnrstn() . '
#
# (c) 2012-' . date('Y') . 
' Jonathan \'5\' Harris :: eVifweb(r) development.
#
# All rights reserved.
#
# License :: MIT | https://crnrstn.jony5.com/licensing/
#
# C # R # N # R # S # T # N # :: # L # I # G # H # T
#
# Reporting Server ::
# ' . $_SERVER['SERVER_ADDR'] . ' (' . $_SERVER['SERVER_NAME']  . ')
# CRNRSTN :: Server Environment Key: ' . self::$env_key . '
# CRNRSTN :: Server Hash: ' . self::$env_key_hash . '
# C # R # N # R # S # T # N # :: # L # I # G # H # T

' . $tmp_art_str . '

# ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
$this->version_crnrstn() . '
# Artwork Title                      :: ' . 
$artwork_name . '
# Artwork System Hash                :: ' . 
$tmp_art_hash . '
# Channel Load Sequence Control Char :: ' . 
$channel_char . '
# Channel Load Sequence              :: ' . 
$tmp_channel_load_sequence_str . '
# Date Generated                     :: ' . 
$this->return_micro_time() . '
# Creative Source                    :: <a href="' . 
$url_base . strtoupper($this->get_channel_config($channel_constant, 'NAME')) . 
'" target="_blank" style="color:#0066CC;">' . $url_base . 
strtoupper($this->get_channel_config($channel_constant, 'NAME')) . 
'</a>
#
# CRNRSTN :: Lightsaber RoCEv2 
# Multi-Channel Decoupled Data 
# Object (MC-DDO) Services 
# Layer Performance Report
#
#
# Report Details ::
#   Channel Name: ' . 
strtoupper($this->get_channel_config($channel_char, 'NAME')) . '
#   Channel Integer: ' .  strval($tmp_channel_int)  . '
#   Description: ' . 
$this->get_channel_config($channel_char, 'DESCRIPTION') . '
#   System Integer: ' . $tmp_channel_str . ' [' . 
self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int'] . ']
#   Memory Limit: ' . 
$this->get_channel_config($tmp_channel_int, 'max_map_cache_bytes') . '
#   Memory Usage: ' . 
$this->channel_bytes_stored($tmp_channel) . '
#
# Report Statistics ::
#   Total Report Bytes: ';

                    //
                    // Calculate report 
                    // content total 
                    // bytes. 
                    $tmp_time_str_bytes = strlen('#   Report Runtime: ' . 
                                          $this->wall_time() . 
                                          ' seconds.');
                    $tmp_header_char_len = strlen($tmp_str);
                    $tmp_total_report_size = (int) $tmp_header_char_len + 
                                             (int) $current_bytes + 
                                             (int) $tmp_time_str_bytes;
                    $tmp_total_report_bytes = $this->return_bytes($tmp_total_report_size, 4);

                    $tmp_str .= $tmp_total_report_bytes . '.
#   Report Runtime: ' . $this->wall_time();

                }else{

                    //
                    // Initialize system 
                    // ASCII art hash. 
                    $tmp_art_hash = $this->hash($artwork_name . $tmp_str);
                    self::$ascii_ARRAY[self::$config_serial][self::$ascii_family_key]['ART'][$tmp_channel_int]['HASH'] = $tmp_art_hash;

                    //
                    // Build #WINNING 
                    // ASCII art output. 
                    $tmp_str .= '#
# [' . $this->return_micro_time() . 
'] [rtime ' . $this->wall_time() . ']
#
# CRNRSTN :: Lightsaber v' . $this->version_crnrstn() . '
#
# (c) 2012-' . date('Y') . 
' Jonathan \'5\' Harris :: eVifweb(r) development.
#
# All rights reserved.
#
# License :: MIT | https://crnrstn.jony5.com/licensing/
#
# C # R # N # R # S # T # N # :: # L # I # G # H # T
#
# Reporting Server ::
# ' . $_SERVER['SERVER_ADDR'] . ' (' . $_SERVER['SERVER_NAME']  . ')
# CRNRSTN :: Server Environment Key: ' . self::$env_key . '
# CRNRSTN :: Server Hash: ' . self::$env_key_hash . '
# C # R # N # R # S # T # N # :: # L # I # G # H # T

' . $tmp_art_str . '

# ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
$this->version_crnrstn() . '
# Artwork title                      :: ' . 
$artwork_name . '
# Artwork System Hash                :: ' . 
$tmp_art_hash . '
# Channel Load Sequence Control Char :: ' . 
$channel_char . '
# Channel Load Sequence              :: ' . 
$tmp_channel_load_sequence_str . '
# Date Generated                     :: ' . 
$this->return_micro_time() . '
# Creative Source                    :: <a href="' . 
$url_base . strtoupper($this->get_channel_config($channel_constant, 'NAME')) . 
'" target="_blank" style="color:#0066CC;">' . 
$url_base . 
strtoupper($this->get_channel_config($channel_constant, 'NAME')) . '</a>
#
# CRNRSTN :: Lightsaber RoCEv2 
# Multi-Channel Decoupled Data 
# Object (MC-DDO) Services 
# Layer Performance Report
#
#
# Report Details ::
#   Channel Name: ' . 
strtoupper($this->get_channel_config($channel_char, 'NAME')) . '
#   CHANNEL Integer:  '  . 
$this->get_channel_config($channel_char, 'SOURCEID', $this->R_data['int_flag']['R_string']) . '  ' . 
strval($tmp_channel_int)  . '
#   Description: ' . 
$this->get_channel_config($channel_char, 'DESCRIPTION') . '
#   System Integer: ' . 
$tmp_channel_str . ' [' . 
self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int'] . ']
#   Memory Limit: ' . 
$this->get_channel_config($tmp_channel_int, 'max_map_cache_bytes') . '
#   Memory Usage: ' . 
$this->channel_bytes_stored($tmp_channel) . '
#
# Report Statistics ::
#   Total Report Bytes: ';

                        //
                        // Calculate report 
                        // content total bytes. 
                        $tmp_time_str_bytes = strlen('#   Report Runtime: ' . 
                                              $this->wall_time() . 
                                              ' seconds.');
                        $tmp_header_char_len = strlen($tmp_str);
                        $tmp_total_report_size = (int) $tmp_header_char_len + 
                                                 (int) $current_bytes + 
                                                 (int) $tmp_time_str_bytes;
                        $tmp_total_report_bytes = $this->return_bytes($tmp_total_report_size, 4);

                        $tmp_str .= $tmp_total_report_bytes . '.
#   Report Runtime: ' . 
$this->wall_time();

                }

            }

        }

        //
        // Run through all ASCII 
        // names again to support 
        // CRNRSTN :: v1.0.0 
        // Artwork rollover 
        // integrations. 
        foreach(self::$art_id_ARRAY as 
            $artwork_name => $url_base)
        {

            $tmp_art_str = '...&nbsp;Please stand by. ' . 
                           'The system is loading ascii, ' . 
                           $artwork_name . '...';

            //
            // If channel version 
            // does not exists, 
            // build the PHP 
            // source media tag 
            // and link. 
            $tmp_system_current_ascii = $this->art(CRNRSTN_ROOT, $artwork_name);

            //
            // Do we have 
            // any art? 
            if(strlen($tmp_system_current_ascii) < 1){

                //
                // Initialize system 
                // ASCII art hash. 
                $tmp_art_hash = -1;
                self::$ascii_ARRAY[self::$config_serial][self::$ascii_family_key]['ART'][self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int']]['HASH'] = $tmp_art_hash;

                //
                // Increment missing 
                // ASCII art count. 
                $tmp_display_missing_cnt++;

                $tmp_str .= '#
# [' . $this->return_micro_time() . 
'] [rtime ' . $this->wall_time() . ']
#
# CRNRSTN :: v' . $this->version_crnrstn() . '
#
# (c) 2012-' . date('Y') . 
' Jonathan \'5\' Harris :: eVifweb(r) development.
#
# All rights reserved.
#
# License :: MIT | https://crnrstn.jony5.com/licensing/
#
# C # R # N # R # S # T # N # :: # L # I # G # H # T
#
# Reporting Server ::
# ' . $_SERVER['SERVER_ADDR'] . ' (' . $_SERVER['SERVER_NAME']  . ')
# CRNRSTN :: Server Environment Key: ' . self::$env_key . '
# CRNRSTN :: Server Hash: ' . self::$env_key_hash . '
# C # R # N # R # S # T # N # :: # L # I # G # H # T

' . $tmp_art_str . '

# ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
$this->version_crnrstn() . '
# Artwork title                      :: ' . 
$artwork_name . '
# Artwork System Hash                :: ' . 
$tmp_art_hash . '
# Channel Load Sequence Control Char :: ' . 
$channel_char . '
# Channel Load Sequence              :: ' . 
$tmp_channel_load_sequence_str . '
# Date Generated                     :: ' . 
$this->return_micro_time() . '
# Creative Source                    :: <a href="' . 
$url_base . self::$CRNRSTN_ascii_name . 
'" target="_blank" style="color:#0066CC;">' . 
$url_base . self::$CRNRSTN_ascii_name . 
'</a>
#
# CRNRSTN :: Lightsaber RoCEv2 
# Multi-Channel Decoupled Data 
# Object (MC-DDO) Services 
# Layer Performance Report
#
#
# Report Details ::
#   Channel Name: ' . 
strtoupper($this->get_channel_config($channel_char, 'NAME')) . '
#   Channel Integer: ' . 
strval($tmp_channel_int)  . '
#   Description: ' . 
$this->get_channel_config($channel_char, 'DESCRIPTION') . '
#   System Integer: ' . 
$tmp_channel_str . ' [' . 
self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int'] . ']
#   Memory Limit: ' . 
$this->get_channel_config($tmp_channel_authorization_int, 'max_map_cache_bytes') . '
#   Memory Usage: ' . 
$this->channel_bytes_stored($tmp_channel) . '
#
# Report Statistics ::
#   Total Report Bytes: ';

                //
                // CALCULATE REPORT 
                // CONTENT TOTAL BYTES. 
                $tmp_time_str_bytes = strlen('#   Report Runtime: ' . 
                                      $this->wall_time() . 
                                      ' seconds.');
                $tmp_header_char_len = strlen($tmp_str);
                $tmp_total_report_size = (int) $tmp_header_char_len + 
                                         (int) $current_bytes + 
                                         (int) $tmp_time_str_bytes;
                $tmp_total_report_bytes = $this->return_bytes($tmp_total_report_size, 4);

                $tmp_str .= $tmp_total_report_bytes . '.
#   Report Runtime: ' . $this->wall_time();

            }else{

                //
                // Initialize system 
                // ASCII art hash.
                $tmp_art_hash = $this->hash($artwork_name . $tmp_str);
                self::$ascii_ARRAY[self::$config_serial][self::$ascii_family_key]['ART'][self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int']]['HASH'] = $tmp_art_hash;

                //
                // Build #WINNING 
                // ASCII Art Output. 
                $tmp_str .= '#
# [' . $this->return_micro_time() . 
'] [rtime ' . $this->wall_time() . ']
#
# CRNRSTN :: v' . $this->version_crnrstn() . '
#
# (c) 2012-' . date('Y') . 
' Jonathan \'5\' Harris :: eVifweb development.
# All rights reserved.
#
# License :: MIT | https://crnrstn.jony5.com/licensing/
#
# C # R # N # R # S # T # N # :: # L # I # G # H # T
#
# Reporting Server ::
# ' . $_SERVER['SERVER_ADDR'] . ' (' . $_SERVER['SERVER_NAME']  . ')
# CRNRSTN :: Server Environment Key: ' . self::$env_key . '
# CRNRSTN :: Server Hash: ' . self::$env_key_hash . '
# C # R # N # R # S # T # N # :: # L # I # G # H # T

' . $tmp_art_str . '

# ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
$this->version_crnrstn() . '
# Artwork title                      :: ' . 
$artwork_name . '
# Artwork System Hash                :: ' . 
$tmp_art_hash . '
# Channel Load Sequence Control Char :: ' . 
$channel_char . '
# Channel Load Sequence              :: ' . 
$tmp_channel_load_sequence_str . '
# Date Generated                     :: ' . 
$this->return_micro_time() . '
# Creative Source                    :: <a href="' . 
$url_base . self::$CRNRSTN_ascii_name . 
'" target="_blank" style="color:#0066CC;">' . 
$url_base . self::$CRNRSTN_ascii_name . 
'</a>
#
# CRNRSTN :: Lightsaber RoCEv2 
# Multi-Channel Decoupled Data 
# Object (MC-DDO) Services 
# Layer Performance Report
#
#
# Report Details ::
#   Channel Name: ' . 
strtoupper($this->get_channel_config($channel_char, 'NAME')) . '
#   Channel Integer: ' . 
strval($tmp_channel_int)  . '
#   Description: ' . 
$this->get_channel_config($channel_char, 'DESCRIPTION') . '
#   System Integer: ' . 
$tmp_channel_str . ' [' . self::$channel_reporting_meta_ARRAY[$channel_char]['CHANNEL_DATA']['channel_int'] . ']
#   Memory Limit: ' . 
$this->get_channel_config($tmp_channel_int, 'max_map_cache_bytes') . '
#   Memory Usage: ' . 
$this->channel_bytes_stored($tmp_channel) . '
#
# Report Statistics ::
#   Total Report Bytes: ';

                //
                // Calculate report 
                // content total bytes. 
                $tmp_time_str_bytes = strlen('#   Report Runtime: ' . 
                                      $this->wall_time() . ' seconds.');
                $tmp_header_char_len = strlen($tmp_str);
                $tmp_total_report_size = (int) $tmp_header_char_len + 
                                         (int) $current_bytes + 
                                         (int) $tmp_time_str_bytes;
                $tmp_total_report_bytes = $this->return_bytes($tmp_total_report_size, 4);

                $tmp_str .= $tmp_total_report_bytes . '.
#   Report Runtime: ' . $this->wall_time();

            }

        }

        if($tmp_display_missing_cnt > self::$max_count_return){

            return  '<pre><code>' . $tmp_str . '</code></pre>';

        }

    }

    private function art(
                     $channel_constant, 
                     $artwork_name)
    {

        $tmp_str       = '';
        $tmp_art_ARRAY = array();

        //$tmp_system_current_ascii = $this->art($channel_constant, $artwork_name);

        switch($this->tidy_boolean(
                      self::$is_HTML, 
                      (int) $this->R_data['int_flag']['R_string'], 
                      (int) $this->R_data['int_flag']['R_bool_is_html']))
        {
            case 'TEXT':

                switch(self::$art_id){
                    case $this->R_data['int_flag']['R_channel_GET']:

                        /*
                        #
                        # SOURCE
                        # http://patorjk.com/software/taag/#p=display&f=Doh&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Isometric2
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Isometric2&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Isometric3
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Isometric3&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Doh
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Doh&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Banner3
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Banner3&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Block
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Block&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Impossible
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Impossible&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Modular
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Modular&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Fire Font
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Fire%20Font-k&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Flower Power
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Flower%20Power&t=CRNRSTN%20%3A%3A

                        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . self::$version_crnrstn . '
                        ARTWORK TITLE :: Big
                        TIMESTAMP ::
                        CREATIVE SOURCE :: http://patorjk.com/software/taag/#p=display&f=Big&t=CRNRSTN%20%3A%3A
                        DATE :: Thursday, August 25, 2022 @ 0948 hrs. ::

                        */

                        $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                    break;
                    case $this->R_data['int_flag']['R_channel_POST']:

                    break;
                    case $this->R_data['int_flag']['R_channel_COOKIE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SESSION']:

                    break;
                    case $this->R_data['int_flag']['R_channel_DATABASE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_PSSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FORM']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RUNTIME']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SOAP']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RDMA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FILE']:

                    break;
                    default:
                        //CRNRSTN_ROOT

                        $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                    break;

                }


            break;
            default:
                //case 'HTML':

                switch(self::$art_id){
                    case $this->R_data['int_flag']['R_channel_GET']:

                        $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                    break;
                    case $this->R_data['int_flag']['R_channel_POST']:

                    break;
                    case $this->R_data['int_flag']['R_channel_COOKIE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SESSION']:

                    break;
                    case $this->R_data['int_flag']['R_channel_DATABASE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_PSSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FORM']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RUNTIME']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SOAP']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RDMA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FILE']:

                    break;
                    default:
                        //CRNRSTN_ROOT

                        $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                        // $tmp_art_ARRAY[] = '';

                    break;

                }

            break;

        }

        //
        // Concatenate output 
        // ($this->R_data['int_flag']['R_string']) String. 
        //
        // 5 :: Wednesday, November 22, 2023 @ 0451 hrs.
        foreach($tmp_art_ARRAY as 
            $index => $data)
        {

            $tmp_str .= $data;

        }

        //
        // Return $this->R_data['int_flag']['R_string'] 
        // data type output. 
        return $tmp_str;

    }

    private function load_ascii()
    {

        switch(self::$ascii_family_key){
            case 'DDO_MULTI_CHANNEL':

                self::$art_id = self::$multi_channel_int;
                $content_type = $this->tidy_boolean(
                                       self::$is_HTML, 
                                       (int) $this->R_data['int_flag']['R_string'], 
                                       (int) $this->R_data['int_flag']['R_bool_is_html']);

                switch(self::$multi_channel_int){
                    case $this->R_data['int_flag']['R_channel_GET']:

                        //
                        // $_GET[] Channel 
                        // ASCII. 
                        self::$ascii_ARRAY[self::$config_serial][self::$ascii_family_key]['ART'][self::$multi_channel_int][$content_type] = $this->art($content_type);
                        // 5 :: Wednesday, November 22, 2023 @ 0135 hrs.

                    break;
                    case $this->R_data['int_flag']['R_channel_POST']:

                    break;
                    case $this->R_data['int_flag']['R_channel_COOKIE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SESSION']:

                    break;
                    case $this->R_data['int_flag']['R_channel_DATABASE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_PSSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FORM']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RUNTIME']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SOAP']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RDMA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FILE']:

                    break;

                }

            break;
            default:
                //CRNRSTN ::

                self::$art_id = CRNRSTN_ROOT;

            break;

        }

        //
        // Return ASCII Art 
        // HTML or TEXT Array. 
        return self::$ascii_ARRAY[self::$config_serial][self::$ascii_family_key]['ART'][self::$multi_channel_int][$content_type];

    }

    private function return_ascii_count()
    {

        $tmp_ascii_art_content_ARRAY = array();

        $tmp_ascii_art_content_ARRAY = $this->load_ascii();

        return count($tmp_ascii_art_content_ARRAY);

    }

    public function return_art(
                    $ascii_key = NULL, 
                    $channel_char = NULL, 
                    $is_HTML = true, 
                    $selection_override = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added a data handling architecture 
         *       channel to the stack behind SOAP: 
         *
         *       M :: Remote Direct Memory 
         *            Access (RDMA, RoCE, or 
         *            RoCEv2) Data Storage 
         *            and Application Acceleration 
         *            Architecture, or simply 
         *            "the R" in CLR-SSL.
         *
         *            GPHSJCDROMF
         *
         *       5 :: Saturday, February 7, 2026 @ 1511 hrs.
         *
         */

        //
        // Intiialize. 
        self::$ascii_family_key  = $ascii_key;
        self::$multi_channel_int = $this->get_channel_config(
                                          $channel_char, 
                                          'SOURCEID', 
                                          $this->R_data['int_flag']['R_integer']);
        self::$is_HTML           = $is_HTML;
        self::$ascii_selection   = $selection_override;
        self::$ascii_count_ARRAY[self::$config_serial][self::$ascii_family_key][self::$multi_channel_int] = 0;

        switch(self::$ascii_family_key){
            case DDO_MULTI_CHANNEL:

                /*
                $tmp_channel_ARRAY['SOURCEID']['CRNRSTN_INTEGER'] =
                $tmp_channel_ARRAY['SOURCEID']['CRNRSTN_STRING'] = 'R_channel_FILE';
                $tmp_channel_ARRAY['ENCRYPTION']['PROFILE']['CRNRSTN_INTEGER'] = 'R_encrypt_FILE';
                $tmp_channel_ARRAY['ENCRYPTION']['PROFILE']['CRNRSTN_STRING'] = 'R_encrypt_FILE';
                $tmp_channel_ARRAY['NAME'] = 'file';
                $tmp_channel_ARRAY['DESCRIPTION'] = 'F :: SERVER LOCAL FILE SYSTEM.';
                $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['PRIMARY']['CRNRSTN_INTEGER'] =
                $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['PRIMARY']['CRNRSTN_STRING'] = 'R_channel_FILE';
                $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['AUTHORIZED']['CRNRSTN_INTEGER']
                $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['AUTHORIZED']['CRNRSTN_STRING']

                */

                switch(self::$multi_channel_int){
                    case $this->R_data['int_flag']['R_channel_GET']:

                        self::$ascii_count_ARRAY[self::$config_serial][self::$ascii_family_key][self::$multi_channel_int] = $this->return_ascii_count();

                    break;
                    case $this->R_data['int_flag']['R_channel_POST']:

                    break;
                    case $this->R_data['int_flag']['R_channel_COOKIE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SESSION']:

                    break;
                    case $this->R_data['int_flag']['R_channel_DATABASE']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_PSSDTLA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FORM']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RUNTIME']:

                    break;
                    case $this->R_data['int_flag']['R_channel_SOAP']:

                    break;
                    case $this->R_data['int_flag']['R_channel_RDMA']:

                    break;
                    case $this->R_data['int_flag']['R_channel_FILE']:

                    break;

                }

                return $this->ascii_art();

            break;
            default:
                //case 'CRNRSTN':

            break;

        }

    }

    public function load_ascii_profile()
    {


    }

    # #
    # SOURCE
    # http://patorjk.com/software/taag/#p=display&f=Doh&t=CRNRSTN%20%3A%3A
    private function _____return_CRNRSTN_ASCII_ART($index = NULL)
    {

        /*
        //G :: HTTP $_GET Request. 

        //
        // Initialization return 
        // for acceleration of 
        // CLR-SSL multi-channel  
        // decoupled data object 
        // (MC-DDO) resource 
        // management.
        $tmp_channel_ARRAY['CHAR'] = 'G';
        if($index_0 == 'CHAR'){

            return $tmp_channel_ARRAY['CHAR'];

        }

        $tmp_channel_ARRAY['SOURCEID'][$this->R_data['int_flag']['R_integer']] =
        $tmp_channel_ARRAY['SOURCEID'][$this->R_data['int_flag']['R_string']] = 'R_channel_GET';
        $tmp_channel_ARRAY['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] =
        $tmp_channel_ARRAY['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']] = 'R_encrypt_GET';
        $tmp_channel_ARRAY['NAME'] = 'get';
        $tmp_channel_ARRAY['DESCRIPTION'] = 'G :: HTTP $_GET REQUEST';
        $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']] =
        $tmp_channel_ARRAY['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']] = 'R_channel_GET';

        $this->get_channel_config($channel, 'NAME');
        $this->get_channel_config($channel, 'DESCRIPTION');
        $this->get_channel_config(
               $channel, 
               'AUTHORIZATION', 
               'PROFILE', 
               'PRIMARY', CRNRSTN_INTEGER);

        */

        $tmp_crnrstnART[0] = '      ___           <span style="color:#F90000;">___</span>           ___           ___           ___                         ___
     /\__\         <span style="color:#F90000;">/\  \</span>         /\  \         /\  \         /\__\                       /\  \
    /:/  /        <span style="color:#F90000;">/::\  \</span>        \:\  \       /::\  \       /:/ _/_         ___          \:\  \          ___         ___
   /:/  /        <span style="color:#F90000;">/:/\:\__\</span>        \:\  \     /:/\:\__\     /:/ /\  \       /\__\          \:\  \        /\__\       /\__\
  /:/  /  ___   <span style="color:#F90000;">/:/ /:/  /</span>    _____\:\  \   /:/ /:/  /    /:/ /::\  \     /:/  /      _____\:\  \       \/__/       \/__/
 /:/__/  /\__\ <span style="color:#F90000;">/:/_/:/__/</span>___ /::::::::\__\ /:/_/:/__/___ /:/_/:/\:\__\   /:/__/      /::::::::\__\
 \:\  \ /:/  / <span style="color:#F90000;">\:\/:::::/  / </span>\:\~~\~~\/__/ \:\/:::::/  / \:\/:/ /:/  /  /::\  \      \:\~~\~~\/__/       ___         ___
  \:\  /:/  /   <span style="color:#F90000;">\::/~~/~~~~</span>   \:\  \        \::/~~/~~~~   \::/ /:/  /  /:/\:\  \      \:\  \            /\__\       /\__\
   \:\/:/  /     <span style="color:#F90000;">\:\~~\</span>        \:\  \        \:\~~\        \/_/:/  /   \/__\:\  \      \:\  \           \/__/       \/__/
    \::/  /       <span style="color:#F90000;">\:\__\</span>        \:\__\        \:\__\         /:/  /         \:\__\      \:\__\
     \/__/         <span style="color:#F90000;">\/__/</span>         \/__/         \/__/         \/__/           \/__/       \/__/




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Isometric2
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Isometric2&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[1] = '      ___           <span style="color:#F90000;">___</span>           ___           ___           ___                       __
     /  /\         <span style="color:#F90000;">/  /\</span>         /__/\         /  /\         /  /\          ___        /__/\
    /  /:/        <span style="color:#F90000;">/  /::\</span>        \  \:\       /  /::\       /  /:/_        /  /\       \  \:\          ___        ___
   /  /:/        <span style="color:#F90000;">/  /:/\:\</span>        \  \:\     /  /:/\:\     /  /:/ /\      /  /:/        \  \:\        /__/\      /__/\
  /  /:/  ___   <span style="color:#F90000;">/  /:/~/:/</span>    _____\__\:\   /  /:/~/:/    /  /:/ /::\    /  /:/     _____\__\:\       \__\/      \__\/
 /__/:/  /  /\ <span style="color:#F90000;">/__/:/ /:/___ /</span>__/::::::::\ /__/:/ /:/___ /__/:/ /:/\:\  /  /::\    /__/::::::::\
 \  \:\ /  /:/ <span style="color:#F90000;">\  \:\/:::::/</span> \  \:\~~\~~\/ \  \:\/:::::/ \  \:\/:/~/:/ /__/:/\:\   \  \:\~~\~~\/       ___        ___
  \  \:\  /:/   <span style="color:#F90000;">\  \::/~~~~</span>   \  \:\  ~~~   \  \::/~~~~   \  \::/ /:/  \__\/  \:\   \  \:\  ~~~       /__/\      /__/\
   \  \:\/:/     <span style="color:#F90000;">\  \:\</span>        \  \:\        \  \:\        \__\/ /:/        \  \:\   \  \:\           \__\/      \__\/
    \  \::/       <span style="color:#F90000;">\  \:\</span>        \  \:\        \  \:\         /__/:/          \__\/    \  \:\
     \__\/         <span style="color:#F90000;">\__\/</span>         \__\/         \__\/         \__\/                     \__\/




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Isometric3
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Isometric3&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[4] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">___</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">/\&nbsp;&nbsp;\</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">/::\&nbsp;&nbsp;\</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/::\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/:/&nbsp;_/_&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">/:/\:\__\</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/:/\:\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/:/&nbsp;/\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;___&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">/:/&nbsp;/:/&nbsp;&nbsp;/</span>&nbsp;&nbsp;&nbsp;&nbsp;_____\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;/:/&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;/:/&nbsp;/::\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;/:/__/&nbsp;&nbsp;/\__\&nbsp;<span&nbsp;style="color:#F90000;">/:/_/:/__/</span>___&nbsp;/::::::::\__\&nbsp;/:/_/:/__/___&nbsp;/:/_/:/\:\__\&nbsp;&nbsp;&nbsp;/:/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/::::::::\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;\:\&nbsp;&nbsp;\&nbsp;/:/&nbsp;&nbsp;/&nbsp;<span&nbsp;style="color:#F90000;">\:\/:::::/&nbsp;&nbsp;/&nbsp;</span>\:\~~\~~\/__/&nbsp;\:\/:::::/&nbsp;&nbsp;/&nbsp;\:\/:/&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;/::\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\~~\~~\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;\:\&nbsp;&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">\::/~~/~~~~</span>&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\::/~~/~~~~&nbsp;&nbsp;&nbsp;\::/&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;/:/\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;\:\/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">\:\~~\</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\~~\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/_/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;\/__\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;\::/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">\:\__\</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/:/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\:\__\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">\/__/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/__/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Isometric2
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Isometric2&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[2] = '        CCCCCCCCCCCCC<span style="color:#F90000;">RRRRRRRRRRRRRRRRR</span>   NNNNNNNN        NNNNNNNNRRRRRRRRRRRRRRRRR      SSSSSSSSSSSSSSS TTTTTTTTTTTTTTTTTTTTTTTNNNNNNNN        NNNNNNNN
     CCC::::::::::::C<span style="color:#F90000;">R::::::::::::::::R</span>  N:::::::N       N::::::NR::::::::::::::::R   SS:::::::::::::::ST:::::::::::::::::::::TN:::::::N       N::::::N
   CC:::::::::::::::C<span style="color:#F90000;">R::::::RRRRRR:::::R</span> N::::::::N      N::::::NR::::::RRRRRR:::::R S:::::SSSSSS::::::ST:::::::::::::::::::::TN::::::::N      N::::::N
  C:::::CCCCCCCC::::C<span style="color:#F90000;">RR:::::R     R:::::R</span>N:::::::::N     N::::::NRR:::::R     R:::::RS:::::S     SSSSSSST:::::TT:::::::TT:::::TN:::::::::N     N::::::N
 C:::::C       CCCCCC  <span style="color:#F90000;">R::::R     R:::::R</span>N::::::::::N    N::::::N  R::::R     R:::::RS:::::S            TTTTTT  T:::::T  TTTTTTN::::::::::N    N::::::N
C:::::C                <span style="color:#F90000;">R::::R     R:::::R</span>N:::::::::::N   N::::::N  R::::R     R:::::RS:::::S                    T:::::T        N:::::::::::N   N::::::N      ::::::  ::::::
C:::::C                <span style="color:#F90000;">R::::RRRRRR:::::R</span> N:::::::N::::N  N::::::N  R::::RRRRRR:::::R  S::::SSSS                 T:::::T        N:::::::N::::N  N::::::N      ::::::  ::::::
C:::::C                <span style="color:#F90000;">R:::::::::::::RR</span>  N::::::N N::::N N::::::N  R:::::::::::::RR    SS::::::SSSSS            T:::::T        N::::::N N::::N N::::::N      ::::::  ::::::
C:::::C                <span style="color:#F90000;">R::::RRRRRR:::::R</span> N::::::N  N::::N:::::::N  R::::RRRRRR:::::R     SSS::::::::SS          T:::::T        N::::::N  N::::N:::::::N
C:::::C                <span style="color:#F90000;">R::::R</span>     <span style="color:#F90000;">R:::::R</span>N::::::N   N:::::::::::N  R::::R     R:::::R       SSSSSS::::S         T:::::T        N::::::N   N:::::::::::N
C:::::C                <span style="color:#F90000;">R::::R</span>     <span style="color:#F90000;">R:::::R</span>N::::::N    N::::::::::N  R::::R     R:::::R            S:::::S        T:::::T        N::::::N    N::::::::::N
 C:::::C       CCCCCC  <span style="color:#F90000;">R::::R</span>     <span style="color:#F90000;">R:::::R</span>N::::::N     N:::::::::N  R::::R     R:::::R            S:::::S        T:::::T        N::::::N     N:::::::::N      ::::::  ::::::
  C:::::CCCCCCCC::::C<span style="color:#F90000;">RR:::::R</span>     <span style="color:#F90000;">R:::::R</span>N::::::N      N::::::::NRR:::::R     R:::::RSSSSSSS     S:::::S      TT:::::::TT      N::::::N      N::::::::N      ::::::  ::::::
   CC:::::::::::::::C<span style="color:#F90000;">R::::::R</span>     <span style="color:#F90000;">R:::::R</span>N::::::N       N:::::::NR::::::R     R:::::RS::::::SSSSSS:::::S      T:::::::::T      N::::::N       N:::::::N      ::::::  ::::::
     CCC::::::::::::C<span style="color:#F90000;">R::::::R</span>     <span style="color:#F90000;">R:::::R</span>N::::::N        N::::::NR::::::R     R:::::RS:::::::::::::::SS       T:::::::::T      N::::::N        N::::::N
        CCCCCCCCCCCCC<span style="color:#F90000;">RRRRRRRR</span>     <span style="color:#F90000;">RRRRRRR</span>NNNNNNNN         NNNNNNNRRRRRRRR     RRRRRRR SSSSSSSSSSSSSSS         TTTTTTTTTTT      NNNNNNNN         NNNNNNN




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Doh
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Doh&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[5] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCCCCCCCCCCCC<span&nbsp;style="color:#F90000;">RRRRRRRRRRRRRRRRR</span>&nbsp;&nbsp;&nbsp;NNNNNNNN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NNNNNNNNRRRRRRRRRRRRRRRRR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSSSSSSSSSSSSSS&nbsp;TTTTTTTTTTTTTTTTTTTTTTTNNNNNNNN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NNNNNNNN<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCC::::::::::::C<span&nbsp;style="color:#F90000;">R::::::::::::::::R</span>&nbsp;&nbsp;N:::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::NR::::::::::::::::R&nbsp;&nbsp;&nbsp;SS:::::::::::::::ST:::::::::::::::::::::TN:::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N<br>
&nbsp;&nbsp;&nbsp;CC:::::::::::::::C<span&nbsp;style="color:#F90000;">R::::::RRRRRR:::::R</span>&nbsp;N::::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::NR::::::RRRRRR:::::R&nbsp;S:::::SSSSSS::::::ST:::::::::::::::::::::TN::::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N<br>
&nbsp;&nbsp;C:::::CCCCCCCC::::C<span&nbsp;style="color:#F90000;">RR:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::R</span>N:::::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::NRR:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::RS:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSSSSSST:::::TT:::::::TT:::::TN:::::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N<br>
&nbsp;C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCCCCC&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::R</span>N::::::::::N&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::RS:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TTTTTT&nbsp;&nbsp;T:::::T&nbsp;&nbsp;TTTTTTN::::::::::N&nbsp;&nbsp;&nbsp;&nbsp;N::::::N<br>
C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::R</span>N:::::::::::N&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::RS:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N:::::::::::N&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::<br>
C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::RRRRRR:::::R</span>&nbsp;N:::::::N::::N&nbsp;&nbsp;N::::::N&nbsp;&nbsp;R::::RRRRRR:::::R&nbsp;&nbsp;S::::SSSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N:::::::N::::N&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::<br>
C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::::::::::RR</span>&nbsp;&nbsp;N::::::N&nbsp;N::::N&nbsp;N::::::N&nbsp;&nbsp;R:::::::::::::RR&nbsp;&nbsp;&nbsp;&nbsp;SS::::::SSSSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;N::::N&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::<br>
C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::RRRRRR:::::R</span>&nbsp;N::::::N&nbsp;&nbsp;N::::N:::::::N&nbsp;&nbsp;R::::RRRRRR:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSS::::::::SS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;N::::N:::::::N<br>
C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::R</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::R</span>N::::::N&nbsp;&nbsp;&nbsp;N:::::::::::N&nbsp;&nbsp;R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSSSSS::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;N:::::::::::N<br>
C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::R</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::R</span>N::::::N&nbsp;&nbsp;&nbsp;&nbsp;N::::::::::N&nbsp;&nbsp;R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;N::::::::::N<br>
&nbsp;C:::::C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCCCCC&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R::::R</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::R</span>N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N:::::::::N&nbsp;&nbsp;R::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N:::::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::<br>
&nbsp;&nbsp;C:::::CCCCCCCC::::C<span&nbsp;style="color:#F90000;">RR:::::R</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::R</span>N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::::NRR:::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::RSSSSSSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TT:::::::TT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::<br>
&nbsp;&nbsp;&nbsp;CC:::::::::::::::C<span&nbsp;style="color:#F90000;">R::::::R</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::R</span>N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N:::::::NR::::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::RS::::::SSSSSS:::::S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N:::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::::::&nbsp;&nbsp;::::::<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCC::::::::::::C<span&nbsp;style="color:#F90000;">R::::::R</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">R:::::R</span>N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::NR::::::R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R:::::RS:::::::::::::::SS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T:::::::::T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N::::::N<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCCCCCCCCCCCC<span&nbsp;style="color:#F90000;">RRRRRRRR</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">RRRRRRR</span>NNNNNNNN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NNNNNNNRRRRRRRR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RRRRRRR&nbsp;SSSSSSSSSSSSSSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TTTTTTTTTTT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NNNNNNNN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NNNNNNN<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<br>



<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Doh
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Doh&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[3] = ' ######  <span style="color:#F90000;">########</span>  ##    ## ########   ######  ######## ##    ##     ##   ##
##    ## <span style="color:#F90000;">##     ##</span> ###   ## ##     ## ##    ##    ##    ###   ##    #### ####
##       <span style="color:#F90000;">##     ##</span> ####  ## ##     ## ##          ##    ####  ##     ##   ##
##       <span style="color:#F90000;">########</span>  ## ## ## ########   ######     ##    ## ## ##
##       <span style="color:#F90000;">##   ##</span>   ##  #### ##   ##         ##    ##    ##  ####     ##   ##
##    ## <span style="color:#F90000;">##    ##</span>  ##   ### ##    ##  ##    ##    ##    ##   ###    #### ####
 ######  <span style="color:#F90000;">##     ##</span> ##    ## ##     ##  ######     ##    ##    ##     ##   ##




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Banner3
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Banner3&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[6] = '<br>
<br>
&nbsp;######&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">########</span>&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;########&nbsp;&nbsp;&nbsp;######&nbsp;&nbsp;########&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;<br>
##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;<span&nbsp;style="color:#F90000;">##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##</span>&nbsp;###&nbsp;&nbsp;&nbsp;##&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;###&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;####&nbsp;####&nbsp;<br>
##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##</span>&nbsp;####&nbsp;&nbsp;##&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;####&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;<br>
##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">########</span>&nbsp;&nbsp;##&nbsp;##&nbsp;##&nbsp;########&nbsp;&nbsp;&nbsp;######&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;##&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">##&nbsp;&nbsp;&nbsp;##</span>&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;####&nbsp;##&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;####&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;<br>
##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;<span&nbsp;style="color:#F90000;">##&nbsp;&nbsp;&nbsp;&nbsp;##</span>&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;###&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;###&nbsp;&nbsp;&nbsp;&nbsp;####&nbsp;####&nbsp;<br>
&nbsp;######&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##</span>&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;######&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;&nbsp;##&nbsp;&nbsp;<br>
<br>



<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Banner3
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Banner3&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[4] = '   _|_|_|  <span style="color:#F90000;">_|_|_|</span>    _|      _|  _|_|_|      _|_|_|  _|_|_|_|_|  _|      _|
 _|        <span style="color:#F90000;">_|    _|</span>  _|_|    _|  _|    _|  _|            _|      _|_|    _|      _|  _|
 _|        <span style="color:#F90000;">_|_|_|</span>    _|  _|  _|  _|_|_|      _|_|        _|      _|  _|  _|
 _|        <span style="color:#F90000;">_|    _|</span>  _|    _|_|  _|    _|        _|      _|      _|    _|_|
   _|_|_|  <span style="color:#F90000;">_|    _|</span>  _|      _|  _|    _|  _|_|_|        _|      _|      _|      _|  _|




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Block
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Block&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[7] = '<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;_|_|_|&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">_|_|_|</span>&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|_|_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|_|_|&nbsp;&nbsp;_|_|_|_|_|&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">_|&nbsp;&nbsp;&nbsp;&nbsp;_|</span>&nbsp;&nbsp;_|_|&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|_|&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;<br>
&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">_|_|_|</span>&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;_|_|_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">_|&nbsp;&nbsp;&nbsp;&nbsp;_|</span>&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;_|_|&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;_|_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;_|_|_|&nbsp;&nbsp;<span&nbsp;style="color:#F90000;">_|&nbsp;&nbsp;&nbsp;&nbsp;_|</span>&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|_|_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|&nbsp;&nbsp;_|&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<br>



<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Block
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Block&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[-1] = '          _             <span style="color:#F90000;">_</span>           _             _          _          _            _
        /\ \           <span style="color:#F90000;">/\ \</span>        /\ \     _    /\ \       / /\       /\ \         /\ \     _    _   _
       /  \ \         <span style="color:#F90000;">/  \ \</span>      /  \ \   /\_\ /  \ \     / /  \      \_\ \       /  \ \   /\_\ /\_\/\_\
      / /\ \ \       <span style="color:#F90000;">/ /\ \ \</span>    / /\ \ \_/ / // /\ \ \   / / /\ \__   /\__ \     / /\ \ \_/ / / \/_/\/_/
     / / /\ \ \     <span style="color:#F90000;">/ / /\ \_\</span>  / / /\ \___/ // / /\ \_\ / / /\ \___\ / /_ \ \   / / /\ \___/ /
    / / /  \ \_\   <span style="color:#F90000;">/ / /_/ / /</span> / / /  \/____// / /_/ / / \ \ \ \/___// / /\ \ \ / / /  \/____/
   / / /    \/_/  <span style="color:#F90000;">/ / /__\/ /</span> / / /    / / // / /__\/ /   \ \ \     / / /  \/_// / /    / / /
  / / /          <span style="color:#F90000;">/ / /_____/</span> / / /    / / // / /_____/_    \ \ \   / / /      / / /    / / /    _   _
 / / /________  <span style="color:#F90000;">/ / /\ \ \</span>  / / /    / / // / /\ \ \ /_/\__/ / /  / / /      / / /    / / /   /_/\/_/\
/ / /_________\<span style="color:#F90000;">/ / /  \ \ \</span>/ / /    / / // / /  \ \ \\\ \/___/ /  /_/ /      / / /    / / /    \_\/\_\/
\/____________/<span style="color:#F90000;">\/_/    \_\/</span>\/_/     \/_/ \/_/    \_\/ \_____\/   \_\/       \/_/     \/_/




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Impossible
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Impossible&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';


        $tmp_crnrstnART[-2] = ' _______  <span style="color:#F90000;">______</span>    __    _  ______    _______  _______  __    _    ___   ___
|       |<span style="color:#F90000;">|    _ |</span>  |  |  | ||    _ |  |       ||       ||  |  | |  |   | |   |
|       |<span style="color:#F90000;">|   | ||</span>  |   |_| ||   | ||  |  _____||_     _||   |_| |  |___| |___|
|       |<span style="color:#F90000;">|   |_||_</span> |       ||   |_||_ | |_____   |   |  |       |   ___   ___
|      _|<span style="color:#F90000;">|    __  |</span>|  _    ||    __  ||_____  |  |   |  |  _    |  |   | |   |
|     |_ <span style="color:#F90000;">|   |  | |</span>| | |   ||   |  | | _____| |  |   |  | | |   |  |___| |___|
|_______|<span style="color:#F90000;">|___|  |_|</span>|_|  |__||___|  |_||_______|  |___|  |_|  |__|




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Modular
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Modular&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';


        $tmp_crnrstnART[-3] = '
<span style="color:#F90000;">        (        )  (    (               )</span>
<span style="color:#F90000;">   (    )\ )  ( /(  )\ ) )\ )  *   )  ( /(</span>
<span style="color:#F90000;">   )\  (()/(  )\())(()/((()/(` )  /(  )\())</span>
<span style="color:#F90000;"> (((_)  /(_))((_)\  /(_))/(_))( )(_))((_)\</span>
 <span style="color:#F90000;">)\</span>___ <span style="color:#F90000;">(_))</span>   _<span style="color:#F90000;">((</span>_<span style="color:#F90000;">)(</span>_<span style="color:#F90000;">)) (</span>_<span style="color:#F90000;">)) (</span>_<span style="color:#F90000;">(</span>_<span style="color:#F90000;">())</span>  _<span style="color:#F90000;">((</span>_<span style="color:#F90000;">)</span>  _  _
<span style="color:#F90000;">((</span>/ __|<span style="color:#F90000;">| _ \</span> | \| || _ \/ __||_   _| | \| | (_)(_)
 | (__ <span style="color:#F90000;">|   /</span> | .` ||   /\__ \  | |   | .` |  _  _
  \___|<span style="color:#F90000;">|_|_\</span> |_|\_||_|_\|___/  |_|   |_|\_| (_)(_)




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Fire Font-k
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Fire%20Font-k&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';

        $tmp_crnrstnART[-4] = '
    _______   <span style="color:#F90000;">.-------.</span>    ,---.   .--..-------.       .-\'\'\'-. ,---------. ,---.   .--.          _ _    _ _
   /   __  \  <span style="color:#F90000;">|  _ _   \</span>   |    \  |  ||  _ _   \     / _     \\           \|    \  |  |         ( ` )  ( ` )
  | ,_/  \__) <span style="color:#F90000;">| ( \' )  |</span>   |  ,  \ |  || ( \' )  |    (`\' )/`--\' `--.  ,---\'|  ,  \ |  |        (_{;}_)(_{;}_)
,-./  )       <span style="color:#F90000;">|(_ o _) /</span>   |  |\_ \|  ||(_ o _) /   (_ o _).       |   \   |  |\_ \|  |         (_,_)  (_,_)
\  \'_ \'`)   <span style="color:#F90000;">  | (_,_).\' __</span> |  _( )_\  || (_,_).\' __  (_,_). \'.     :_ _:   |  _( )_\  |
 > (_)  )  __ <span style="color:#F90000;">|  |\ \  |  |</span>| (_ o _)  ||  |\ \  |  |.---.  \  :    (_I_)   | (_ o _)  |           _      _
(  .  .-\'_/  )<span style="color:#F90000;">|  | \ `\'   /</span>|  (_,_)\  ||  | \ `\'   /\    `-\'  |   (_(=)_)  |  (_,_)\  |         _( )_  _( )_
 `-\'`-\'     /<span style="color:#F90000;"> |  |  \    / </span>|  |    |  ||  |  \    /  \       /     (_I_)   |  |    |  |        (_ o _)(_ o _)
   `._____.\'  <span style="color:#F90000;">\'\'-\'   `\'-\'</span>  \'--\'    \'--\'\'\'-\'   `\'-\'    `-...-\'      \'---\'   \'--\'    \'--\'         (_,_)  (_,_)




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Flower Power
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Flower%20Power&t=CRNRSTN%20%3A%3A
Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
-->
';


        $tmp_crnrstnART[-5] = '
   _____ <span style="color:#F90000;">_____</span>  _   _ _____   _____ _______ _   _
  / ____<span style="color:#F90000;">|   __ \</span>| \ | |  __ \ / ____|__   __| \ | |  _ _
 | |    <span style="color:#F90000;">|  |__) |</span>  \| | |__) | (___    | |  |  \| | (_|_)
 | |    <span style="color:#F90000;">|  __  /</span>| . ` |  _  / \___ \   | |  | . ` |
 | |____<span style="color:#F90000;">|  | \ \</span>| |\  | | \ \ ____) |  | |  | |\  |  _ _
  \_____<span style="color:#F90000;">|__|  \_\</span>_| \_|_|  \_\_____/   |_|  |_| \_| (_|_)




<!--
ASCII Artwork Generated by CRNRSTN :: Lightsaber v' . 
self::$version_crnrstn . '
Artwork Title :: Big
Timestamp :: ' . 
$this->return_micro_time() . '

Creative Source :: http://patorjk.com/software/taag/#p=display&f=Big&t=CRNRSTN%20%3A%3A
Date :: Thursday, August 25, 2022 @ 0948 hrs. ::
-->
';

        if(!isset($index)){

            return $tmp_crnrstnART[rand(-5, 4)];

        }else{

            return $tmp_crnrstnART[$index];

        }

    }

    public function __destruct()
    {

    }

}