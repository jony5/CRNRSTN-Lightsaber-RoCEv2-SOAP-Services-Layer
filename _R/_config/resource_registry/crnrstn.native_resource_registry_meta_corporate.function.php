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
 * GLOBAL FUNCTION
 * RESOURCE DEFINITION :: _crnrstn_native_resource_registry_meta_corporate
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Thursday, April 16, 2026 @ 1911 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com/
 * TITLE               :: The Corporate Meta Data Content
 *                        Library for Corporate Sponsors
 *                        and Software Owners of Licensed
 *                        Third-Party Software Integrated
 *                        into the CLR-SSL.
 * DESCRIPTION         :: This is a static meta data content
 *                        silo for corporate sponsors and for
 *                        license owners of the third-party
 *                        software that has been used or
 *                        integrated into the CLR-SSL framework,
 *                        but is not directly affiliated with
 *                        eVifweb® or the CLR-SSL.
 *
 *
 *                        5
 *
 *                        Thursday, August 27, 2026 @ 2302 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @return mixed
 * @access public
 *
 * @version 1.00.0000 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @package CRNRSTN
 *
 */
function _crnrstn_native_resource_registry_meta_corporate(
         $R_resp,
         $R_meta_key,
         $R,
         $R_debug_mode = 0,
         $css_data = NULL)
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * The _crnrstn_native_resource_registry_meta_corporate()
     * global function definition 
     * was copied from eVifweb® 
     * engineering design notes on: 
     * Thursday, April 16, 2026 @ 1911 hrs.
     *
     *
     * 5 :: Thursday, April 16, 2026 @ 1920 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed _crnrstn_native_resource_registry_meta_corporate() 
     *       global function definition 
     *       input parameter, $corp_author 
     *       to $corp_author_key. 
     *       5 :: Friday, April 17, 2026 @ 0520 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed _crnrstn_native_resource_registry_meta_corporate() 
     *       global function definition 
     *       input parameter, $corp_author_key 
     *       to $software_company_key. 
     *       5 :: Friday, April 17, 2026 @ 1050 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added 
     *       $crnrstn_debug_mode = CRNRSTN_DEBUG_OFF 
     *       input parameter to 
     *       _crnrstn_native_resource_registry_meta_corporate(). 
     *       5 :: Tuesday, May 19, 2026 @ 0311 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crnrstn_debug_mode 
     *       input parameter to simply, 
     *       R_debug_mode, 
     *       in order to align to 
     *       the crnrstn_registry_user 
     *       __construct() input 
     *       overhaul pivoting around 
     *       config_serial_override. 
     *       5 :: Saturday, June 20, 2026 @ 0342 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed the
     *       _crnrstn_native_resource_registry_meta_corporate()
     *       $generate_content_synchronization_hash
     *       input parameter to
     *       $generate_version_sync_hash and swapped
     *       function input places with
     *       $generate_search_algorithm_data.
     *       5 :: Tuesday, September 1, 2026 @ 0219 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added $css_data = NULL
     *       input parameter to
     *       _crnrstn_native_resource_registry_meta_corporate().
     *       5 :: Tuesday, September 1, 2026 @ 1742 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed input parameter,
     *       $background_color_hex = '#FFF',
     *       from
     *       _crnrstn_native_resource_registry_meta_corporate().
     *       5 :: Wednesday, September 2, 2026 @ "01" 2345 hrs.
     *
     *       "01010101...split the atom...Oh,
     *       Oh, Oh, Oh. You know what I mean.
     *
     *       Yeah, you know what I mean:
     *       "Oh, Oh, Oh"...
     *       Yeah, you know what
     *       I mean..."Oh"...yeah. ;)
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added the $R_resp input 
     *       parameter to the function, 
     *       _crnrstn_native_resource_registry_meta_corporate(), 
     *       renamed the $attribute input 
     *       parameter to $R_meta_key, and removed 
     *       the following input parameters:
     *       - $software_company_key,
     *       - $background_color_hex = '#FFF',
     *       - $iso_lang_code = 'en',
     *       - $generate_version_sync_hash = false,
     *       - $generate_search_algorithm_data = false, and 
     *       - $resource_copyright_text = NULL.
     *
     *       The new function definition:
     *       function _crnrstn_native_resource_registry_meta_corporate(
     *                $R_resp, 
     *                $R_meta_key, 
     *                $R, 
     *                $R_debug_mode = 0, 
     *                $css_data = NULL)
     *       { ... }
     *       5 :: Wednesday, September 9, 2026 @ 0630 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * 'COMPANY_NAME_HTML'         => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COMPANY_NAME_HTML', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'COMPANY_NAME_TEXT'         => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COMPANY_NAME_TEXT', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'AUTHOR_CONTRIBUTORS_HTML'  => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'AUTHOR_CONTRIBUTORS_HTML', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'AUTHOR_CONTRIBUTORS_TEXT'  => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'AUTHOR_CONTRIBUTORS_TEXT', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'MEDIA_ELEMENT_KEY'         => $R->return_registered_resource_meta(
     *                                    $name, 
     *                                    'MEDIA_ELEMENT_KEY', 
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code)
     *
     * 'URL'                       => $R->return_registered_resource_meta(
     *                                    $name, 
     *                                    'URL', 
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code)
     *
     * 'COPYRIGHT_HTML'            => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COPYRIGHT_HTML',
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code,
     *                                    NULL, NULL, NULL, NULL,
     *                                    NULL, NULL, NULL, NULL, 
     *                                    NULL, NULL, NULL, NULL,
     *                                    $tmp_COPYRIGHT_TEXT)
     *
     * 'COPYRIGHT_TEXT'            => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COPYRIGHT_TEXT',
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code,
     *                                    NULL, NULL, NULL, NULL,
     *                                    NULL, NULL, NULL, NULL, 
     *                                    NULL, NULL, NULL, NULL,
     *                                    $tmp_COPYRIGHT_TEXT)
     *
     *
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * CLR-SSL Resource Registry 
     * Corporate Sponsorship
     * and Third-Party Software
     * Integrations Copyright
     * Meta Data Corporate Keys
     *
     * Where:
     * $corp_author_key = 'company name';
     *
     * Available corporate author
     * key options include:
     * - (string) 'Digital ITCC',
     * - (string) 'Mobile Detect',
     * - (string) 'MonstaApps®',
     * - (string) 'Nette®',
     * - (string) 'NuSphere Corporation',
     * - (string) 'The PHP Group',
     * - (string) 'PHPMailer', and
     * - (string) 'eVifweb® development',...
     *
     * ...and finishing with some sweet,
     * sweet bong rips. 
     *
     *
     * 5 :: Friday, April 17, 2026 @ 1015 hrs.
     * Last Modified: Tuesday, September 1, 2026 @ 1734 hrs.
     *
     */

    $memory_pointer                 = $R_resp['clr_ssl_resource']['memory_pointer'][0];
    $generate_version_sync_hash     = $R->get_crnrstn('generate_version_sync_hash');
    $generate_search_algorithm_data = $R->get_crnrstn('generate_search_algorithm_data');
    $R_cache_transport_packet       = array();
    $R_text                         =
    $R_html                         = '';
    $output_mode                    = NULL;

    echo '<br><pre><code>[' . 
$R->return_micro_time() . '] 
[func ' . __FUNCTION__ . '] 
[lnum ' . __LINE__ . '] 
[rtime ' . $R->wall_time() . '] 
software company key[' . 
$R_resp[$memory_pointer]['software_company']['key'] . '] 
meta key[' . $R_meta_key . '] 
copyright text[' .
$R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']] . '].</code></pre>';

    switch($R_resp[$memory_pointer]['software_company']['key']){
        case 'Digital ITCC':
            // 5 :: Friday, April 17, 2026 @ 1131 hrs.

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = 'Digital ITCC®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1136 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . 
                        '>Digital ITCC<sup '  . $css_data['reg_mark'] . 
                        '>&reg;</sup></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $R_text = 'icy at digitalitcc dot com';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $R_html = '<span ' . 
                        $css_data['author_contributors'] . 
                        '><a ' . $css_data['copy_a'] . 
                        ' href="https://www.php.net/manual/en/' . 
                        'language.operators.bitwise.php#50299" ' . 
                        'target="_blank">icy</a> at <a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://www.php.net/manual/en/' . 
                        'language.operators.bitwise.php#50299" ' . 
                        'target="_blank">digitalitcc</a> <a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://www.php.net/manual/en/' . 
                        'language.operators.bitwise.php#50299" ' . 
                        'target="_blank">dot</a> <a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://www.php.net/manual/en/' . 
                        'language.operators.bitwise.php#50299" ' . 
                        'target="_blank">com</a></span>';

                        /*
                        $R->url('language.operators.bitwise.php#50299')

                         _crnrstn_system_link_library(
                         $url_key,
                         $R,
                         $background_color_hex = '#FFF',
                         $iso_lang_code = 'en',
                         $output_mode = 'MULTI-PART',
                         $generate_version_sync_hash = false,
                         $generate_search_algorithm_data = false,
                         $css_data = NULL){}

                         */

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://www.php.net/manual/en/language.operators.bitwise.php#50299';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1132 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '><span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2001-2024 The <span ' . $css_data['php'] . 
                        '>PHP</span> Group</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0752 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        case 'eVifweb® development':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Friday, April 17, 2026 @ "01" 2345 hrs.
             *
             * "01010101...split the atom...Oh,
             * Oh, Oh, Oh. You know what I mean.
             *
             * Yeah, you know what I mean:
             * "Oh, Oh, Oh"...
             * Yeah, you know what
             * I mean..."Oh"...yeah. ;)
             *
             */

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_text = 'eVifweb®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . '>' . 
                        '<a ' . $css_data['copy_a'] . ' ' . 
                        'href="http://evifweb.jony5.com/" target="_blank">' . 
                        'e<span ' . $css_data['eVifweb_V'] . 
                        '>V</span>ifweb<sup ' . $css_data['reg_mark'] . 
                        '>&reg;</sup></a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Tuesday, November 11, 2025 @ 0535 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0535 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         */
                        $R_text = 'Jonathan \'5\' Harris, CEO, CTO, ' . 
                        'Lead Full Stack Developer, and, as of 2025, ' . 
                        'Chief Creative here at eVifweb® ' . 
                        'eVifweb@gmail.com, ' . 
                        'a ravenous wolf of the tribe of Benjamin ' . 
                        'and one of the King\'s two swords, ' . 
                        'an eternal son of thunder, and a web ' . 
                        'professional living and working in ' . 
                        'Atlanta, GA.';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0536 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . 
                        $css_data['author_contributors'] . 
                        '>Jonathan \'5\' Harris, CEO, CTO, ' . 
                        'Lead Full Stack Developer, and, as of 2025, ' . 
                        'Chief Creative here at <span ' . $css_data['eVifweb'] . '>' . 
                        'e<span ' . $css_data['eVifweb_V'] . '>V</span>ifweb<sup ' . 
                        $css_data['reg_mark'] . '>&reg;</sup></span>. ' . 
                        '<a ' . $css_data['copy_a'] . ' ' . 
                        'href="mailto:eVifweb@gmail.com" target="_blank">' . 
                        'e<span ' . $css_data['eVifweb_V'] . 
                        '>V</span>ifweb@gmail.com</a>, ' . 
                        'a <a ' . $css_data['copy_a'] . ' ' . 
                        'href="https://jony5.com?vv=gen49_1,25-28" target="_blank">' . 
                        'ravenous wolf</a> ' . 
                        'of the <a ' . $css_data['copy_a'] . ' ' . 
                        'href="https://jony5.com?vv=deut33_1-4,12,29" target="_blank">' . 
                        'tribe of Benjamin</a> ' . 
                        'and one of the King\'s two swords, ' . 
                        'an eternal son of thunder, and ' . 
                        'a <a ' . $css_data['copy_a'] . ' ' . 
                        'href="https://jony5.com/?scroll=WELCOME" target="_blank">web ' . 
                        'professional</a> living and working in ' . 
                        'Atlanta, GA.</span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':
                    // Tuesday, July 9, 2024 @ 1635 hrs.

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We will go and test this
                     * with The Lightbox Helper
                     * by eVifweb® in the class
                     * constructor real quick
                     * like, and then we'll
                     * come back and do all +88
                     * of these here (as opposed
                     * to those over there)
                     * CRNRSTN :: Lightsaber
                     * SOAP Services Layer
                     * class and global
                     * function configuration
                     * file resource links.
                     *
                     * Also, we should easily
                     * finish this before the
                     * sun comes up at
                     * the latest.
                     *
                     * ...easily.
                     *
                     * [Sunday, July 7, 2024 @ 0747 hrs. UPDATE]
                     * [Sun Jul 07 07:47:33.652329 2024] [:error] [pid 54605] [client 172.16.225.1:53578]
                     *      813 _lightbox_helper_by_eVifweb_settings
                     *      tmp_dir_root_config[/var/www/html/lightbox_helper/_lightbox_helper/_config/config.lightbox_helper/].
                     *      tmp_[
                     *          Array\n(\n
                     *            [0] => \n
                     *            [1] => \n
                     *            [2] => \n)\n
                     *      ].
                     *
                     * [Sunday, July 7, 2024 @ 0747 hrs. UPDATE]
                     * I almost made it before
                     * sunrise! I just need
                     * to copy and paste some
                     * URL meta data into
                     * the CRNRSTN :: Lightsaber
                     * SOAP Services Layer
                     * Link Manager now.
                     *
                     * https://www.timeanddate.com/sun/usa/atlanta
                     * -----
                     * Current Time:   Jul 7, 2024 at 8:01:15 am
                     * Sun Direction:  73.29° ENE↑
                     * Sun Altitude:   16.02°
                     * Sun Distance:   94.509 million mi
                     * Next Equinox:   Sep 22, 2024 8:43 am (Autumnal)
                     * Sunrise Today:  6:33 am↑ 62° Northeast
                     * Sunset Today:   8:51 pm↑ 298° Northwest
                     * -----
                     *
                     * The link data would be
                     * here right now, otherwise! [END UPDATE]
                     *
                     *
                     * 5 ::
                     *
                     * Sunday, July 7, 2024 @ 0134 hrs.
                     *
                     */
                    $R_cache_transport_packet['url'][] = 'https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber';
                    $R_cache_transport_packet['url'][] = 'https://crnrstn.jony5.com';
                    $R_cache_transport_packet['url'][] = 'http://evifweb.jony5.com';
                    $R_cache_transport_packet['url'][] = 'https://jony5.com';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Tuesday, November 11, 2025 @ 0534 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0534 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Tuesday, November 11, 2025 @ 0534 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0534 hrs.
                     *
                     */
                     if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Tuesday, November 11, 2025 @ 0535 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '><span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2012-' . date('Y') . ' ' . 
                        '<span ' . $css_data['eVifweb'] . '>e<span ' . 
                        $css_data['eVifweb_V'] . '>V</span>ifweb<sup ' . 
                        $css_data['reg_mark'] . '>&reg;</sup></span> ' . 
                        'development All Rights Reserved.</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Technology Software provider
                     * CRNRSTN :: Lightsaber RoCEv2
                     * SOAP Services Layer (CLR-SSL)
                     * image media keys + url meta
                     * are being added across the
                     * entire registry.
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1552 hrs.
                     *
                     */
                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'),
                    'FIVE'              => array('TARGET' => '_blank',
                                           'URL' => 'http://evifweb.jony5.com/',
                                           'ALT' => 'eVifweb® development'),
                    'STACHE'            => array('TARGET' => '_blank',
                                           'URL' => 'https://jony5.com/',
                                           'ALT' => 'Jonathan \'5\' Harris, CEO, ' . 
                                           'CTO, Lead Full Stack Developer, ' . 
                                           'Chief Creative here at eVifweb® ' . 
                                           '(as of 2025), and a ravenous ' . 
                                           'wolf of the tribe of Benjamin.'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0754 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }


                break;

            }

        break;
        case 'Mobile Detect':
            // 5 :: Friday, April 17, 2026 @ 1138 hrs.

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_text = 'Mobile Detect®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . '><a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://docs.mobiledetect.net/home" ' . 
                        'target="_blank">Mobile Detect&reg;</a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = 'Şerban Ghiţă. I\'m a software developer based ' . 
'in Bucureşti, Romania. Software developer by day / Game designer ' . 
'by night. Follow me on Twitch or YouTube for updates!

Nick Ilyin. 

Original author: Victor Stanciu. 

Icon by: Dragoș Gavrilă.';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0602 hrs.
                         *
                         */
                        $R_html = '<div ' . 
                        $css_data['author_contributors'] . 
                        '><div ' . $css_data['line_break'] . '><br></div>
                        <ul ' . $css_data['ul'] . '><li ' . 
                        $css_data['li'] . '>Şerban Ghiţă</li>
                        <li ' . $css_data['li'] . '>Nick Ilyin</li>
                        <li ' . $css_data['li'] . '>Victor Stanciu</li>
                        <li ' . $css_data['li'] . '>Dragoș Gavrilă</li>
                        </ul></div>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://github.com/serbanghita/Mobile-Detect';
                    $R_cache_transport_packet['url'][] = 'https://docs.mobiledetect.net/home';
                    $R_cache_transport_packet['url'][] = 'https://github.com/serbanghita';
                    $R_cache_transport_packet['url'][] = 'https://wordpress.org/plugins/tinywp-mobile-detect/';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '>Copyright <span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2021 Şerban Ghiţă, ' . 
                        'Nick Ilyin and contributors.</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0752 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        case 'MonstaApps®':
            // 5 :: Monday, August 24, 2026 @ 1940 hrs.

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = 'MonstaApps®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1136 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . 
                        '>MonstaApps<sup '  . $css_data['reg_mark'] . 
                        '>&reg;</sup></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $R_text = 'MonstaApps®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $R_html = '<span ' . 
                        $css_data['author_contributors'] . 
                        '><a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://www.monstaftp.com/" ' . 
                        'target="_blank">MonstaApps&reg;</a></span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://www.monstaftp.com/';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1132 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '>Copyright <span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> MonstaApps&reg;</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0752 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        case 'Nette®':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Monday, August 24, 2026 @ "00" 2000 hrs.
             *
             * "00"..."00"..."00"...Oh,
             * Oh, Oh, Oh. You know what I mean.
             *
             * Yeah, you know what I mean:
             * "Oh, Oh, Oh"...
             * Yeah, you know what
             * I mean..."Oh"...yeah. ;)
             *
             */

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = 'Nette®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1136 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . 
                        '>Nette<sup '  . $css_data['reg_mark'] . 
                        '>&reg;</sup></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $R_text = 'David Grudl
Honza Chemix Černý
Miloslav Milo Hůla
Milan Felix Šulc';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $R_html = '<span ' . 
                        $css_data['author_contributors'] . 
                        '><a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://davidgrudl.com/" ' . 
                        'target="_blank">David Grudl</a>, <a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://honzacerny.com/" ' . 
                        'target="_blank">Honza Chemix Černý</a>, <a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://github.com/milo" ' . 
                        'target="_blank">Miloslav Milo Hůla</a>, <a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://f3l1x.io/" ' . 
                        'target="_blank">Milan Felix Šulc</a></span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://github.com/nette/mail';
                    $R_cache_transport_packet['url'][] = 'https://doc.nette.org/en/mail';
                    $R_cache_transport_packet['url'][] = 'https://doc.nette.org/mailing';
                    $R_cache_transport_packet['url'][] = 'https://davidgrudl.com/';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1132 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '>Copyright <span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span>2004 David Grudl ' . 
                        '(<a href="https://davidgrudl.com" ' . 
                        'target="_blank">https://davidgrudl.com</a>)</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0752 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        case 'NuSphere Corporation':
            // 5 :: Friday, April 17, 2026 @ 1220 hrs.

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = 'NuSphere Corporation';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . 
                        '><a ' . $css_data['copy_a'] . 
                        ' href="http://www.nusphere.com" target="_blank">' . 
                        'NuSphere Corporation</a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         */
                        $R_text = 'NuSphere and Dietrich Ayala. 

Scott Nichol. 

f3l1x. 
Hey! I am Milan Šulc better known as Felix. I do code for a living.';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<div ' . 
                        $css_data['author_contributors'] . 
                        '><div ' . $css_data['line_break'] . '><br></div>
                        <ul ' . $css_data['ul'] . '><li ' . $css_data['li'] . '>' . 
                        '<a ' . $css_data['copy_a'] . 
                        ' href="http://www.nusphere.com" target="_blank">' . 
                        'NuSphere</a> and Dietrich Ayala</li>

<li ' . $css_data['li'] . '>Scott Nichol</li>

<li ' . $css_data['li'] . '><strong>f3l1x</strong><br>
Hey! I am Milan Šulc better known as ' . 
'<a ' . $css_data['copy_a'] . 
' href="https://f3l1x.io/" target="_blank">Felix</a>. I do  ' . 
'<a ' . $css_data['copy_a'] . 
' href="https://github.com/f3l1x" target="_blank">' . 
'code for a living</a>.</li></ul></div>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://github.com/f00b4r/nusoap';
                    $R_cache_transport_packet['url'][] = 'https://github.com/f3l1x';
                    $R_cache_transport_packet['url'][] = 'https://x.com/xf3l1x';
                    $R_cache_transport_packet['url'][] = 'http://sourceforge.net/projects/nusoap/';
                    //$R_cache_transport_packet['url'][] = 'http://dietrich.ganx4.com/nusoap';
                    $R_cache_transport_packet['url'][] = 'http://www.nusphere.com';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '><span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2002 NuSphere Corporation.</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0753 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        case 'The PHP Group':
            // 5 :: Friday, April 17, 2026 @ 1223 hrs.

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COMPANY_NAME_HTML   = HTML Output
                     * COMPANY_NAME_TEXT   = Text Output
                     * COMPANY_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_text = 'The PHP Foundation';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . '><a ' . 
                        $css_data['copy_a'] . 
                        ' href="https://www.php.net/" target="_blank">The <span ' . 
                        $css_data['php'] . '>PHP</span> Foundation</a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         */
                        $R_text = 'The PHP Foundation';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . 
                        $css_data['author_contributors'] . 
                        '>The <span ' . $css_data['php'] . 
                        '>PHP</span> Foundation</span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://www.php.net/manual/en/mysqli.construct.php';
                    $R_cache_transport_packet['url'][] = 'https://www.php.net/manual/en/copyright.php';
                    $R_cache_transport_packet['url'][] = 'https://www.php.net/manual/en/cc.license.php';
                    $R_cache_transport_packet['url'][] = 'http://creativecommons.org/licenses/by/3.0/';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * COPYRIGHT_HTML   = HTML Output
                     * COPYRIGHT_TEXT   = Text Output
                     * COPYRIGHT        = Multi-Part HTML
                     *                    & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode
                             * values are:
                             * - 'HTML',
                             * - 'TEXT', and
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data
                         * parameter variable name in
                         * order to hold the Text
                         * data handling parallel to
                         * to the HTML data handling
                         * in the same architecture.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') ||
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '><span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2001-2024 The <span ' . $css_data['php'] . 
                        '>PHP</span> Group</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'),
                    'FIVE'              => array('TARGET' => '_blank',
                                           'URL' => 'http://evifweb.jony5.com/',
                                           'ALT' => 'eVifweb® development'),
                    'STACHE'            => array('TARGET' => '_blank',
                                           'URL' => 'https://jony5.com/',
                                           'ALT' => 'Jonathan \'5\' Harris, CEO, ' . 
                                           'CTO, Lead Full Stack Developer, ' . 
                                           'Chief Creative here at eVifweb® ' . 
                                           '(as of 2025), and a ravenous ' . 
                                           'wolf of the tribe of Benjamin.'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0753 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix,
                                \LOG_CONS |
                                \LOG_NDELAY |
                                \LOG_NOWAIT |
                                \LOG_PID |
                                \LOG_PERROR,
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        case 'PHPMailer':

            switch($R_meta_key){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') || 
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1008 hrs.
                         *
                         */
                        $R_text = 'PHPMailer';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') || 
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software 
                         * company name HTML data 
                         * for this natively registered 
                         * resource of the CRNRSTN :: 
                         * Lightsaber RoCEv2 SOAP 
                         * Services Layer (CLR-SSL) 
                         * System Resource Registry. 
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1008 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['company_name'] . 
                        '>PHPMailer</span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') || 
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1004 hrs.
                         *
                         */
                        $R_text = 'Development time and resources for 
PHPMailer are provided by Smartmessages.net, 
a powerful email marketing system. 

https://info.smartmessages.net/

Other contributions are gladly received, 
whether in beer, T-shirts, Amazon 
wishlist raids, or cold, hard cash. 

If you\'d like to donate to say 
"thank you" to maintainers or 
contributors, please contact them 
through individual profile pages 
via the contributors page. 

https://github.com/PHPMailer/PHPMailer/graphs/contributors


History 

- PHPMailer was originally written in
  2001 by Brent R. Matzelle as a 
  SourceForge project. 

  http://sourceforge.net/projects/phpmailer/

- Marcus Bointon (coolbru on SF) and 
  Andy Prevost (codeworxtech) took 
  over the project in 2004. 

- Became an Apache incubator project 
  on Google Code in 2010, managed 
  by Jim Jagielski. 

- Marcus created his fork on GitHub 
  in 2008. 

  https://github.com/Synchro/PHPMailer

- Jim and Marcus decide to join forces 
  and use GitHub as the canonical and 
  official repo for PHPMailer in 2013. 

- PHPMailer moves to the PHPMailer
  organisation on GitHub in 2013. 

  https://github.com/PHPMailer';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') || 
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1004 hrs.
                         *
                         */
                        $R_html = '<div ' . 
                        $css_data['author_contributors'] . 
                        '>Development time and resources for 
PHPMailer are provided by <a ' . $css_data['copy_a'] . 
' href="https://info.smartmessages.net/" target="_blank">Smartmessages.net</a>, 
a powerful email marketing system. 

<div ' . $css_data['line_break'] . '><br><br></div>
<a ' . $css_data['copy_a'] . 
' href="https://info.smartmessages.net/" target="_blank">' . 
'<img src="https://info.smartmessages.net/wp-content/themes/smartmessages/img/vector/' . 
'smartmessages-logo.svg" width="270" height="28" ' . 
'alt="Smartmessages email marketing"></a>

<div ' . $css_data['line_break'] . '><br><br></div>
Other contributions are gladly received, 
whether in beer, T-shirts, Amazon 
wishlist raids, or cold, hard cash. 

<div ' . $css_data['line_break'] . '><br><br></div>
If you\'d like to donate to say 
&quot;thank you&quot; to maintainers or 
contributors, please contact them 
through individual profile pages 
via <a ' . $css_data['copy_a'] . 
' href="https://github.com/PHPMailer/PHPMailer/graphs/' . 
'contributors" target="_blank">the contributors page</a>. 

<div ' . $css_data['line_break'] . '><br><br><br></div>
History

<div ' . $css_data['line_break'] . '><br></div>
<ul ' . $css_data['ul'] . '><li ' . $css_data['li'] . 
'>PHPMailer was originally written in 
2001 by Brent R. Matzelle as a ' . 
'<a ' . $css_data['copy_a'] . 
' href="http://sourceforge.net/projects/phpmailer/" target="_blank">SourceForge</a> ' . 
'<a ' . $css_data['copy_a'] . 
' href="http://sourceforge.net/projects/phpmailer/" target="_blank">project</a>.</li>

<li ' . $css_data['li'] . '>Marcus Bointon (coolbru on SF) and 
Andy Prevost (codeworxtech) took 
over the project in 2004.</li>

<li ' . $css_data['li'] . '>Became an Apache incubator project 
on Google Code in 2010, managed 
by Jim Jagielski.</li>

<li ' . $css_data['li'] . '>Marcus created ' . 
'<a ' . $css_data['copy_a'] . 
' href="https://github.com/Synchro/PHPMailer" target="_blank">his fork</a> on ' . 
'<a ' . $css_data['copy_a'] . 
' href="https://github.com/Synchro/PHPMailer" target="_blank">GitHub</a> 
in 2008.</li>

<li ' . $css_data['li'] . '>Jim and Marcus decide to join forces 
and use GitHub as the canonical and 
official repo for PHPMailer in 2013.</li>

<li ' . $css_data['li'] . '>PHPMailer moves to the ' . 
'<a ' . $css_data['copy_a'] . 
' href="https://github.com/PHPMailer" target="_blank">PHPMailer organisation</a> 
on ' . 
'<a ' . $css_data['copy_a'] . 
' href="https://github.com/PHPMailer" target="_blank">GitHub</a> in 2013.</li></ul></div>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * L.A.M.P. stack software 
                     * version data has been 
                     * added to the CLR-SSL 
                     * Registered Resources 
                     * meta data function 
                     * definition file in 
                     * order to support link 
                     * alt tag HTML generation. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1400 hrs.
                     *
                     */
                    if(\method_exists($R, 'process_R_resp'))
                        if(\strlen($R->version_mysqli()) > 0)
                            $version_mysqli = 'MySQLi v' . 
                                              $R->version_mysqli();
                        else
                            $version_mysqli = 'MySQLi';
                    else
                        $version_mysqli = 'MySQLi';

                    $R_cache_transport_packet['media_element'] = array(
                    'CRNRSTN_LOGO'      => array('TARGET' => '_blank',
                                           'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                           'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                           $R->version_crnrstn()),
                    'POWER_BY_PHP'      => array('TARGET' => '_blank',
                                           'URL' => 'https://www.php.net/',
                                           'ALT' => 'PHP v' . 
                                           $R->version_php()),
                    'MYSQL_DOLPHIN'     => array('TARGET' => '_blank',
                                           'URL' => 'https://www.mysql.com/',
                                           'ALT' => $version_mysqli),
                    'APACHE_POWER'      => array('TARGET' => '_blank',
                                           'URL' => 'https://apache.org/',
                                           'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => array('TARGET' => '_blank',
                                           'URL' => 'https://www.linux.com/',
                                           'ALT' => 'Linux :: Tux the Penguin'));

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $R_cache_transport_packet['url'][] = 'https://github.com/PHPMailer/PHPMailer';
                    $R_cache_transport_packet['url'][] = 'http://phpmailer.github.io/PHPMailer/';
                    $R_cache_transport_packet['url'][] = 'https://sourceforge.net/projects/phpmailer/';
                    $R_cache_transport_packet['url'][] = 'https://twitter.com/smartmessages';

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($R_meta_key){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($output_mode == 'TEXT') || 
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $R_text = $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']];

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($output_mode == 'HTML') || 
                        ($output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0602 hrs.
                         *
                         */
                        $R_html = '<span ' . $css_data['copyright'] . 
                        '><span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2012 - 2017 Marcus Bointon. ' . 
                        '<span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2010 - 2012 Jim Jagielski. ' . 
                        '<span ' . $css_data['copyright_mark'] . 
                        '>&copy;</span> 2004 - 2009 Andy Prevost.</span>';

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $R_meta_key . 
                                   '] for ' . 
                                   $R_resp[$memory_pointer]['software_company']['key'] . 
                                   '. Unable to return copy data.';

                    if(!\method_exists($R, 'process_R_resp')){

                        // 5 :: Tuesday, May 19, 2026 @ 0747 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                            ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                    }else{

                        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token,
                                 'token_generation_date'   => $token_generation_date,
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200,
                                 'clr_ssl_msg'             => $clr_ssl_msg);
                        $R->error_log(
                            $clr_ssl_msg,
                            \LOG_ERR,
                            \E_ERROR,
                            __LINE__,
                            __FUNCTION__,
                            __FILE__,
                            $token);

                    }

                break;

            }

        break;
        default:
            // 5 :: Friday, April 17, 2026 @ 1040 hrs.

            $clr_ssl_msg = 'Unknown key received [' . 
                           $R_resp[$memory_pointer]['software_company']['key'] . 
                           ']. Unable to return copy data.';

            if(!\method_exists($R, 'process_R_resp')){

                // 5 :: Tuesday, May 19, 2026 @ 0754 hrs.
                if(($R_debug_mode === CRNRSTN_DEBUG_ON) ||
                    ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG) ||
                    ($R_debug_mode === CRNRSTN_SYSTEM_TEST))
                {

                    $syslog_level     = LOG_WARNING;
                    $tod              = \gettimeofday();
                    $sec              = $tod['sec'];
                    $usec             = $tod['usec'];
                    $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                    $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                    $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                        '.' . \sprintf('%06d', $usec) . 
                                        '] [func ' . 
                                        __FUNCTION__ . '] [lnum ' . 
                                        __LINE__ . '] [rtime ' . 
                                        \substr($timediff, 0, -8) . 
                                        '] ';
                    \openlog(
                        $syslog_prefix, 
                        \LOG_CONS | 
                        \LOG_NDELAY | 
                        \LOG_NOWAIT | 
                        \LOG_PID | 
                        \LOG_PERROR, 
                        \LOG_SYSLOG);
                    \syslog($syslog_level, $clr_ssl_msg);
                    \closelog();

                }

            }else{

                // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token,
                         'token_generation_date'   => $token_generation_date,
                         'request_type'            => __FUNCTION__,
                         'code'                    => 200,
                         'clr_ssl_msg'             => $clr_ssl_msg);
                $R->error_log(
                    $clr_ssl_msg,
                    \LOG_ERR,
                    \E_ERROR,
                    __LINE__,
                    __FUNCTION__,
                    __FILE__,
                    $token);

            }

        break;
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * The initial scaffolding 
         * before any corp meta data 
         * was transferred from the 
         * CLR-SSL Resource Registry 
         * Content Library. 
         *
         *
         * 5 :: Saturday, April 18, 2026 @ 0723 hrs.
         * -----
         * case 'CORP_0004':
         *
         *  switch($R_meta_key){
         *      case 'COMPANY_NAME':
         *      case 'COMPANY_NAME_HTML':
         *      case 'COMPANY_NAME_TEXT':
         *
         *      break;
         *      case 'AUTHOR_CONTRIBUTORS':
         *      case 'AUTHOR_CONTRIBUTORS_HTML':
         *      case 'AUTHOR_CONTRIBUTORS_TEXT':
         *
         *      break;
         *      case 'URL':
         *      case 'URL_HTML':
         *      case 'URL_TEXT':
         *
         *      break;
         *      case 'COPYRIGHT':
         *      case 'COPYRIGHT_HTML':
         *      case 'COPYRIGHT_TEXT':
         *
         *      break;
         *      case 'MEDIA_ELEMENT_KEY':
         *
         *      break;
         *      default:
         *          // 5 :: Friday, April 17, 2026 @ 1040 hrs.
         *
         *          $tmp_err_str = 'Unknown attribute key received [' . 
         *                         $R_meta_key . 
         *                         '] for ' . 
         *                         $R_resp[$memory_pointer]['software_company']['key'] . 
         *                         '. Unable to return copy data.';
         *
         *          switch(\get_class($R)){
         *              case __NAMESPACE__ . '\crnrstn':
         *              case __NAMESPACE__ . '\crnrstn_registry_user':
         *              case __NAMESPACE__ . '\crnrstn_registry_assistant':
         *              case __NAMESPACE__ . '\lightbox_helper_by_eVifweb':
         *
         *                  $R->error_log($tmp_err_str);
         *
         *              break;
         *              default:
         *
         *                  error_log('[lnum ' . 
         *                      __LINE__ . '] [mthd ' . 
         *                      __METHOD__ . '] [file ' . 
         *                      __FILE__ . '] ' . 
         *                      $tmp_err_str);
         *
         *              break;
         *
         *          }
         *
         *      break;
         *
         *  }
         *
         * break;
         *
         */

    }


    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Prepare the string 
     * data for UI/UX/SOAP 
     * content return, and 
     * return the output. 
     *
     * This will articulate the 
     * most exterior membrane of the 
     * CRNRSTN :: Lightsaber RoCEv2 
     * SOAP Services Layer's 
     * Document Object Model (DOM) 
     * HTML/Text Resource Type 
     * Output Control Services 
     * Layer for: 
     * - directly integrating 
     *   CLR-SSL Libraries with the 
     *   response output architecture 
     *   of the SOAP services layer 
     *   of the CLR-SSL, 
     * - directly integrating 
     *   CLR-SSL Libraries with the 
     *   Multi-Language Services 
     *   Layer of the CLR-SSL, 
     * - exposing all CLR-SSL Library 
     *   content to HMAC Hash supported 
     *   content versioning and 
     *   CLR-SSL powered version 
     *   control integrations on 
     *   top of SOAP, and 
     * - directly integrating 
     *   the application of a tight 
     *   search indexing algorithm 
     *   for all software, corporate, 
     *   license, and social media 
     *   CLR-SSL Resource Registry 
     *   Library meta data. 
     *
     *
     * 5
     *
     * Sunday, August 25, 2024 @ 0723 hrs.
     *
     */
    return $R->soap_data_initialization_cache_output(
               $R_resp[$memory_pointer]['iso_lang_code'],
               $R_meta_key,
               $R_text,
               $R_html,
               NULL,
               $R_cache_transport_packet,
               $output_mode,
               $generate_version_sync_hash,
               $generate_search_algorithm_data,
               $css_data);

}