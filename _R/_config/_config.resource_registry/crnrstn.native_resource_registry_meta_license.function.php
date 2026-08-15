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
 * RESOURCE DEFINITION :: _crnrstn_native_resource_registry_meta_license
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Thursday, April 16, 2026 @ 1911 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com/
 * TITLE               :: The Native Resource Registry 
 *                        of Class and Function Global 
 *                        Definitions, Runtime Executables, 
 *                        SOAP Endpoints, and Database 
 *                        Technologies of the CRNRSTN :: 
 *                        Lightsaber RoCEv2 SOAP 
 *                        Services Layer (CLR-SSL)
 * DESCRIPTION         :: The native resource registry
 *                        supporting all system resource
 *                        initialization for applications
 *                        supported by the CRNRSTN ::
 *                        Lightsaber SOAP Services Layer.
 *
 *                        The system registry is complete
 *                        with all native class and global
 *                        function definitions along with
 *                        any runtime executables that are
 *                        used by all currently supported
 *                        or "in development" applications.
 *
 *                        The Lightbox Helper by eVifweb and
 *                        CRNRSTN :: Lightsaber both use this
 *                        registry to just in time (JIT) meet
 *                        all of their resources
 *                        initialization requirements.
 *
 *
 *                        5
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
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return mixed 
 * @access public
 *
 */
function _crnrstn_native_resource_registry_meta_license(
         $license_key,
         $attribute,
         $R,
         $background_color_hex = '#FFF',
         $iso_lang_code = 'en',
         $R_debug_mode = 0,
         $generate_search_algorithm_data = false,
         $generate_content_synchronization_hash = false,
         $resource_license_name_text = NULL,
         $resource_license_url = NULL)
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * The _crnrstn_native_resource_registry_meta_license()
     * global function definition 
     * was copied from eVifweb® 
     * engineering design notes on: 
     * Thursday, April 16, 2026 @ 1911 hrs.
     *
     *
     * 5 :: Thursday, April 16, 2026 @ 1920 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed _crnrstn_native_resource_registry_meta_license() 
     *       global function definition 
     *       input parameter, $license_type 
     *       to $license_key.
     *       5 :: Friday, April 17, 2026 @ 0520 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added 'LICENSE_URL_HTML' and 
     *       'LICENSE_URL_TEXT' with 
     *       'LICENSE_URL' to all 
     *       license_key nodes. 
     *       5 :: Monday, April 20, 2026 @ 0857 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added 
     *       $crnrstn_debug_mode = CRNRSTN_DEBUG_OFF 
     *       input parameter to 
     *       _crnrstn_native_resource_registry_meta_social_media(). 
     *       5 :: Tuesday, May 19, 2026 @ 0310 hrs.
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
     *       5 :: Saturday, June 20, 2026 @ 0347 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * 'LICENSE_NAME_HTML'         => $R->return_registered_resource_meta(
     *                                    $name, 
     *                                    'LICENSE_NAME_HTML', 
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code,
     *                                    NULL, NULL, NULL, NULL, NULL, 
     *                                    NULL, NULL, NULL, NULL, NULL, 
     *                                    $tmp_LICENSE_NAME_TEXT, 
     *                                    $tmp_LICENSE_URL)
     *
     * 'LICENSE_NAME_TEXT'         => $R->return_registered_resource_meta(
     *                                    $name, 
     *                                    'LICENSE_NAME_TEXT', 
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code, 
     *                                    NULL, NULL, NULL, NULL, NULL, 
     *                                    NULL, NULL, NULL, NULL, NULL, 
     *                                    $tmp_LICENSE_NAME_TEXT, 
     *                                    $tmp_LICENSE_URL)
     *
     * 'LICENSE_URL'               => $tmp_LICENSE_URL;
     *
     * 'LICENSE_URL_HTML'          => $tmp_LICENSE_URL;
     *
     * 'LICENSE_URL_TEXT'          => $tmp_LICENSE_URL;
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * CLR-SSL Resource Registry 
     * Software License Meta Data.
     *
     * Where $license_key = '{license key}';
     *
     * Available License Key 
     * Options Include: 
     * - (string) 'GNU_Lesser', 
     * - (string) 'GNU_Lesser_2.1', 
     * - (string) 'CC_Attrib_3.0', 
     * - (string) 'PHP_3.01', and 
     * - (string) 'MIT'. 
     *
     *
     * 5 :: Friday, April 17, 2026 @ 0514 hrs.
     *
     */

    error_log('[lnum ' . 
        __LINE__ . '] [mthd ' . 
        __METHOD__ . 
        '] $license_key[' . 
        $license_key . 
        '] $attribute[' . 
        $attribute . '] $resource_license_name_text[' . 
        $resource_license_name_text . '] $resource_license_url[' . 
        strval($resource_license_url) . ']. die();');

    die();

    switch($license_key){
        case 'GNU_Lesser':

            switch($attribute){
                case 'LICENSE_NAME':
                case 'LICENSE_NAME_HTML':
                case 'LICENSE_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_NAME_HTML   = HTML Output
                     * LICENSE_NAME_TEXT   = Text Output
                     * LICENSE_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1003 hrs.
                     *
                     */

                    switch($attribute){
                        case 'LICENSE_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                        $tmp_data_TEXT = $resource_license_name_text;

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
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0549 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">GNU Lesser ' .
                        'General Public License</a></span>';

                break;
                case 'LICENSE_URL':
                case 'LICENSE_URL_HTML':
                case 'LICENSE_URL_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_URL_HTML   = HTML Output
                     * LICENSE_URL_TEXT   = Text Output
                     * LICENSE_URL        = Multi-Part HTML
                     *                      & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Monday, April 20, 2026 @ 0851 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_URL_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_URL_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_URL':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                     * 5 :: Monday, April 20, 2026 @ 0851 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                         * Monday, April 20, 2026 @ 0851 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_license_url;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Monday, April 20, 2026 @ 0851 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Monday, April 20, 2026 @ 0851 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">' . $resource_license_url . '</a></span>';

                break;
                default:

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $license_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __METHOD__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0754 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
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

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __METHOD__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __METHOD__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'GNU_Lesser_2.1':

            switch($attribute){
                case 'LICENSE_NAME':
                case 'LICENSE_NAME_HTML':
                case 'LICENSE_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_NAME_HTML   = HTML Output
                     * LICENSE_NAME_TEXT   = Text Output
                     * LICENSE_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1003 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                        $tmp_data_TEXT = $resource_license_name_text;

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
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0617 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">GNU Lesser ' .
                        'General Public License</a> ' .
                        'version 2.1 or (at your option) any ' .
                        'later version.</span>';

                break;
                case 'LICENSE_URL':
                case 'LICENSE_URL_HTML':
                case 'LICENSE_URL_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_URL_HTML   = HTML Output
                     * LICENSE_URL_TEXT   = Text Output
                     * LICENSE_URL        = Multi-Part HTML
                     *                      & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Monday, April 20, 2026 @ 0901 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_URL_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_URL_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_URL':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                     * 5 :: Monday, April 20, 2026 @ 0901 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                         * Monday, April 20, 2026 @ 0901 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_license_url;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Monday, April 20, 2026 @ 0901 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Monday, April 20, 2026 @ 0901 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">' . $resource_license_url . '</a></span>';

                break;
                default:

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $license_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __METHOD__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0801 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
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

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __METHOD__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __METHOD__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'CC_Attrib_3.0':

            switch($attribute){
                case 'LICENSE_NAME':
                case 'LICENSE_NAME_HTML':
                case 'LICENSE_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_NAME_HTML   = HTML Output
                     * LICENSE_NAME_TEXT   = Text Output
                     * LICENSE_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1003 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                        $tmp_data_TEXT = $resource_license_name_text;

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
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the multi-part
                         * license name data for this
                         * natively registered resource
                         * of the CRNRSTN :: Lightsaber
                         * RoCEv2 SOAP Services Layer
                         * (CLR-SSL) System
                         * Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1131 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">Creative Commons ' .
                        'Attribution 3.0 License</span>';

                break;
                case 'LICENSE_URL':
                case 'LICENSE_URL_HTML':
                case 'LICENSE_URL_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_URL_HTML   = HTML Output
                     * LICENSE_URL_TEXT   = Text Output
                     * LICENSE_URL        = Multi-Part HTML
                     *                      & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Monday, April 20, 2026 @ 0902 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_URL_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_URL_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_URL':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                     * 5 :: Monday, April 20, 2026 @ 0902 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                         * Monday, April 20, 2026 @ 0902 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_license_url;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Monday, April 20, 2026 @ 0902 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Monday, April 20, 2026 @ 0902 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">' . $resource_license_url . '</a></span>';

                break;
                default:

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $license_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __METHOD__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0802 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
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

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __METHOD__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __METHOD__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'PHP_3.01':

            switch($attribute){
                case 'LICENSE_NAME':
                case 'LICENSE_NAME_HTML':
                case 'LICENSE_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_NAME_HTML   = HTML Output
                     * LICENSE_NAME_TEXT   = Text Output
                     * LICENSE_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1003 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                        $tmp_data_TEXT = $resource_license_name_text;

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
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0624 hrs.
                         *
                         */
                         $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">PHP License v3.01, ' .
                        'copyright <span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> the PHP Group</span>';

                break;
                case 'LICENSE_URL':
                case 'LICENSE_URL_HTML':
                case 'LICENSE_URL_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_URL_HTML   = HTML Output
                     * LICENSE_URL_TEXT   = Text Output
                     * LICENSE_URL        = Multi-Part HTML
                     *                      & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Monday, April 20, 2026 @ 0903 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_URL_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_URL_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_URL':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                     * 5 :: Monday, April 20, 2026 @ 0903 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                         * Monday, April 20, 2026 @ 0903 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_license_url;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Monday, April 20, 2026 @ 0903 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Monday, April 20, 2026 @ 0903 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">' . $resource_license_url . '</a></span>';

                break;
                default:

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $license_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __METHOD__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0802 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
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

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __METHOD__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __METHOD__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'MIT':

            switch($attribute){
                case 'LICENSE_NAME':
                case 'LICENSE_NAME_HTML':
                case 'LICENSE_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_NAME_HTML   = HTML Output
                     * LICENSE_NAME_TEXT   = Text Output
                     * LICENSE_NAME        = Multi-Part HTML
                     *                       & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1003 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                        $tmp_data_TEXT = $resource_license_name_text;

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
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0617 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">MIT License</span>';

                break;
                case 'LICENSE_URL':
                case 'LICENSE_URL_HTML':
                case 'LICENSE_URL_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * LICENSE_URL_HTML   = HTML Output
                     * LICENSE_URL_TEXT   = Text Output
                     * LICENSE_URL        = Multi-Part HTML
                     *                      & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Monday, April 20, 2026 @ 0911 hrs.
                     *
                     */
                    switch($attribute){
                        case 'LICENSE_URL_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'LICENSE_URL_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'LICENSE_URL':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

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
                     * 5 :: Monday, April 20, 2026 @ 0911 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
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
                         * Monday, April 20, 2026 @ 0911 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_license_url;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Monday, April 20, 2026 @ 0911 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * license name HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Monday, April 20, 2026 @ 0911 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['license_name'] .
                        '><a' . $tmp_css_data['copy_a'] . ' ' .
                        'href="' . $resource_license_url .
                        '" target="_blank">' . $resource_license_url . '</a></span>';

                break;
                default:

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $license_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __METHOD__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0804 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
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

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __METHOD__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __METHOD__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        default:
            // 5 :: Friday, April 17, 2026 @ 1040 hrs.

            $clr_ssl_msg = 'Unknown key received [' . 
                           $license_key . 
                           ']. Unable to return copy data.';

            if(!(_crnrstn_native_resource_registry(
                __METHOD__, 
                $R, 
                'registry_access_is_authorized',
                 NULL, 
                 $R_debug_mode) !== false))
            {

                // 5 :: Tuesday, May 19, 2026 @ 0804 hrs.
                if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                    ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
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

                return false;

            }

            // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
            $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                         'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token = array(
                     'token'                   => $msg_token, 
                     'token_generation_date'   => $token_generation_date, 
                     'request_type'            => __METHOD__, 
                     'code'                    => 200, 
                     'clr_ssl_msg'             => $clr_ssl_msg);
            $R->error_log(
                $clr_ssl_msg, 
                \LOG_ERR, 
                \E_ERROR, 
                __LINE__, 
                __METHOD__, 
                __FILE__, 
                $token);

            return false;

        break;

    }

}