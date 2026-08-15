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
 * R :: Content Pending. 
 *
 * GLOBAL FUNCTION 
 * RESOURCE DEFINITION :: /_R/_config/config.integer_constants/crnrstn.integer_return.function.php
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Monday, July 1, 2024 @ 2103 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com
 * TITLE               :: The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer Integer
 *                        Constants - Initialization
 *                        Global Function Definition
 * DESCRIPTION         :: This globally defined system
 *                        function will return the
 *                        official integer value for
 *                        every integer constant
 *                        defined within the rich and
 *                        digitally enhanced (or
 *                        if more pessimistic, the
 *                        digitally shackled) eco-system
 *                        of globally accessible system
 *                        resources under stewardship
 *                        of the CRNRSTN :: Lightsaber
 *                        SOAP Services Layer.
 *
 *
 *                        5
 *
 *                        Monday, July 22, 2024 @ 0937 hrs.
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
 * @return int 
 * @access public
 *
 */
function _crnrstn_int_return($const_nom)
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed the function/file name 
     *       from:
     *
     *       _crnrstn_constants_initialize() and 
     *       crnrstn.integer_return.function.php
     *
     *       to
     *
     *       _crnrstn_int_return() and 
     *       crnrstn.integer_return.function.php.
     *
     *
     *       5 :: Tuesday, March 10, 2026 @ 0808 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Note: Touchpoints for the successful 
     *       installation of a new globally 
     *       defined CRNRSTN :: Lightsaber 
     *       RoCEv2 SOAP Services Layer 
     *       (CLR-SSL)system integer constant 
     *       that will be fully integrated 
     *       and recognized by the system.
     *
     *       TLDR;
     *       Here is where to look in the 
     *       framework file system when 
     *       adding new globally defined 
     *       integer constants to the CLR-SSL. 
     *
     *
     *       5
     *
     *       Monday, July 1, 2024 @ 2303 hrs.
     *       Last Modified: Saturday, March 14, 2026 @ "01" 0234 hrs.
     *
     *       "01010101...split the atom...Oh, 
     *       Oh, Oh, Oh. You know what I mean."
     *
     *       Yeah, you know what I mean: 
     *       "Oh, Oh, Oh"... 
     *       Yeah, you know what 
     *       I mean..."Oh"...yeah. ;) 
     * 
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * This, the current file:
     * /_R/_config/config.integer_constants/crnrstn.integer_return.function.php
     *
     * File Contents: 
     * function _crnrstn_int_return($const_nom){
     *     switch($const_nom){
     *         case 'ADD-NEW-CONSTANT-HERE':
     *
     *             // 
     *             // A new integer for 
     *             // the new constant. 
     *             return (int) 0;
     *
     *         break;
     *
     *     }
     * }
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * File:
     * /_R/_config/config.integer_constants/crnrstn.constants_load.runtime_exe.php
     *
     * File Contents:
     * $R_int_const = array('ADD-NEW-CONSTANT-HERE');
     * @define('NEW-CONSTANT-HERE', (int) _crnrstn_int_return('NEW-CONSTANT-HERE'));
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * File:
     * /_R/class/ui/crnrstn.content_source_controller.class.php
     *
     * File Contents:
     * private function return_int_const_profile($resource_constant)
     * public function return_integer_constant_profiles($module_key)
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * When adding a new JS/CSS 
     * framework resource integer 
     * constant to the CLR-SSL,
     * please, in addition, also 
     * consider: 
     *
     * File:
     * /_R/class/assets/crnrstn.system_asset_manager.class.php
     *
     * File Contents:
     * public function return_html_head_asset($const){}
     * private function return_output_CRNRSTN_JS($const){}
     * private function return_output_CRNRSTN_CSS($const){}
     *
     */
    switch($const_nom){
        case 'OPENSSL_RAW_DATA':
            // 5 :: Wednesday, May 13, 2026 @ 0652 hrs.

            return (int) OPENSSL_RAW_DATA;

        break;
        case 'OPENSSL_ZERO_PADDING':
            // 5 :: Wednesday, May 13, 2026 @ 0703 hrs.

            return (int) OPENSSL_ZERO_PADDING;

        break;
        case 'OPENSSL_DONT_ZERO_PAD_KEY':
            // 5 :: Wednesday, May 13, 2026 @ 0703 hrs.

            return (int) OPENSSL_DONT_ZERO_PAD_KEY;

        break;
        case 'CRNRSTN_PHPMAILER_DEBUG_OFF':

            return (int) 0;

        break;
        case 'CRNRSTN_PHPMAILER_DEBUG_CLIENT':

            return (int) 1;

        break;
        case 'CRNRSTN_PHPMAILER_DEBUG_SERVER':

            return (int) 2;

        break;
        case 'CRNRSTN_PHPMAILER_DEBUG_CONNECTION':

            return (int) 3;

        break;
        case 'CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL':

            return (int) 4;

        break;
        case 'CRNRSTN_WORDPRESS_DEBUG':

            return (int) 10052;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 0-2. 
         *
         */
        case 'CRNRSTN_DEBUG_OFF':

            return (int) 0;

        break;
        case 'CRNRSTN_DEBUG_ON':

            return (int) 1;

        break;
        case 'CRNRSTN_DEBUG_SYSLOG':

            return (int) 2;

        break;
        case 'CRNRSTN_SYSTEM_TEST':
            // 5 :: Monday, July 6, 2026 @ 0601 hrs.

            return (int) 3;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 42-43, 
         * 8051-8064. 
         *
         */
        case 'CRNRSTN_LOG_NONE':

            return (int) 42;

        break;
        case 'CRNRSTN_LOG_ALL':

            return (int) 43;

        break;
        case 'CRNRSTN_LOG_DEFAULT':

            return (int) 8051;

        break;
        case 'CRNRSTN_LOG_SCREEN_TEXT':

            return (int) 8052;

        break;
        case 'CRNRSTN_LOG_SCREEN':

            return (int) 8053;

        break;
        case 'CRNRSTN_LOG_SCREEN_HTML':

            return (int) 8054;

        break;
        case 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN':

            return (int) 8055;

        break;
        case 'CRNRSTN_LOG_SOAP':

            return (int) 8056;

        break;
        case 'CRNRSTN_LOG_EMAIL':

            return (int) 8057;

        break;
        case 'CRNRSTN_LOG_PSSDTLA':

            return (int) 8058;

        break;
        case 'CRNRSTN_LOG_SSDTLA':

            return (int) 8059;

        break;
        case 'CRNRSTN_LOG_ELECTRUM':

            return (int) 8060;

        break;
        case 'CRNRSTN_LOG_FILE':

            return (int) 8061;

        break;
        case 'CRNRSTN_LOG_FILE_FTP':

            return (int) 8062;

        break;
        case 'CRNRSTN_LOG_DATABASE':

            return (int) 8063;

        break;
        case 'CRNRSTN_LOG_PROXY':

            return (int) 8064;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 9051. 
         * 9877-9879. 
         *
         */
        case 'CRNRSTN_BARNEY':

            return (int) 9051;

        break;
        case 'CRNRSTN_SETTINGS_CRNRSTN':

            return (int) 55;

        break;
        case 'R_load_many_to_1_request':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Tuesday, April 7, 2026 @ 0512 hrs.
             *
             * This is a CLR-SSL registered 
             * resource load control 
             * architecture indicator. 
             *
             * CRNRSTN_LOAD_MANY_TO_1_REQUEST means 
             * "Fire this resource. every. single. time."
             *
             * The architecture was taken 
             * from The Lightbox Helper 
             * by eVifweb® on the morning of 
             * Thursday, July 11, 2024.
             *
             *
             * 5
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Deprecated the use of 
             *       CLR-SSL loading architecture 
             *       integer constants; 
             *       - CRNRSTN_LOAD_MANY_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_SESSION
             *       - CRNRSTN_LOAD_ON_TTL_EXPIRE
             *
             *       Now to be represented by 
             *       these integers and strings: 
             *       - 'R_load_many_to_1_request', 9876
             *       - 'R_load_1_to_1_request', 9877;
             *       - 'R_load_1_to_1_session', 9878; 
             *       - 'R_load_on_ttl_expire', 9879; 
             *
             *       5 :: Friday, July 10, 2026 @ 2141 hrs.
             *
             */
            return (int) 9876;

        break;
        case 'R_load_1_to_1_request':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Thursday, July 11, 2024 @ 0908 hrs.
             *
             * This is a CLR-SSL registered 
             * resource load control 
             * architecture indicator. 
             *
             * The architecture was taken 
             * from The Lightbox Helper 
             * by eVifweb® on the morning of 
             * Thursday, July 11, 2024. 
             *
             * CRNRSTN_LOAD_1_TO_1_REQUEST means 
             * "Fire this resource one 
             *  time per page load." 
             *
             *
             * 5
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Deprecated the use of 
             *       CLR-SSL loading architecture 
             *       integer constants; 
             *       - CRNRSTN_LOAD_MANY_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_SESSION
             *       - CRNRSTN_LOAD_ON_TTL_EXPIRE
             *
             *       Now to be represented by 
             *       these integers and strings: 
             *       - 'R_load_many_to_1_request', 9876
             *       - 'R_load_1_to_1_request', 9877;
             *       - 'R_load_1_to_1_session', 9878; 
             *       - 'R_load_on_ttl_expire', 9879; 
             *
             *       5 :: Friday, July 10, 2026 @ 2142 hrs.
             *
             */
            return (int) 9877;

        break;
        case 'R_load_1_to_1_session':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Thursday, July 11, 2024 @ 0907 hrs.
             *
             * This is a CLR-SSL registered 
             * resource load control 
             * architecture indicator. 
             *
             * The architecture was taken 
             * from The Lightbox Helper 
             * by eVifweb® on the morning of 
             * Thursday, July 11, 2024. 
             *
             * CRNRSTN_LOAD_1_TO_1_SESSION means 
             * "Fire this resource one 
             *  time per session." 
             *
             *
             * 5
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Deprecated the use of 
             *       CLR-SSL loading architecture 
             *       integer constants; 
             *       - CRNRSTN_LOAD_MANY_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_SESSION
             *       - CRNRSTN_LOAD_ON_TTL_EXPIRE
             *
             *       Now to be represented by 
             *       these integers and strings: 
             *       - 'R_load_many_to_1_request', 9876
             *       - 'R_load_1_to_1_request', 9877;
             *       - 'R_load_1_to_1_session', 9878; 
             *       - 'R_load_on_ttl_expire', 9879; 
             *
             *       5 :: Friday, July 10, 2026 @ 2142 hrs.
             *
             */
            return (int) 9878;

        break;
        case 'R_load_on_ttl_expire':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Wednesday, July 17, 2024 @ 1405 hrs.
             *
             * This is a CLR-SSL registered 
             * resource load control 
             * architecture indicator. 
             *
             * The architecture was taken 
             * from The Lightbox Helper 
             * by eVifweb® on the morning of 
             * Thursday, July 11, 2024. 
             *
             * CRNRSTN_LOAD_ON_TTL_EXPIRE means 
             * "Fire this resource only 
             *  when the TTL is expired." 
             *
             *
             * 5
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Deprecated the use of 
             *       CLR-SSL loading architecture 
             *       integer constants; 
             *       - CRNRSTN_LOAD_MANY_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_REQUEST
             *       - CRNRSTN_LOAD_1_TO_1_SESSION
             *       - CRNRSTN_LOAD_ON_TTL_EXPIRE
             *
             *       Now to be represented by 
             *       these integers and strings: 
             *       - 'R_load_many_to_1_request', 9876
             *       - 'R_load_1_to_1_request', 9877;
             *       - 'R_load_1_to_1_session', 9878; 
             *       - 'R_load_on_ttl_expire', 9879; 
             *
             *       5 :: Friday, July 10, 2026 @ 2142 hrs.
             *
             */
            return (int) 9879;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 0-2. 
         *
         */
        case 'CRNRSTN_HTML_COMMENTS_NONE':
        case 'CRNRSTN_HTML_COMMENTS_SILENCE_IS_GOLD':

            return (int) 0;

        break;
        case 'CRNRSTN_HTML_COMMENTS_FULL':
        case 'CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES':

            return (int) 1;

        break;
        case 'CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED':

            return (int) 2;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 7-20. 
         *
         */
        //case 'CRNRSTN_INT':
        case 'R_int':

            return (int) 7;

        break;
        //case 'CRNRSTN_INTEGER':
        case 'R_integer':

            return (int) 8;

        break;
        //case 'CRNRSTN_BOOL':
        case 'R_bool':

            return (int) 9;

        break;
        //case 'CRNRSTN_BOOLEAN':
        case 'R_boolean':

            return (int) 10;

        break;
        //case 'CRNRSTN_FLOAT':
        case 'R_float':

            return (int) 11;

        break;
        //case 'CRNRSTN_DOUBLE':
        case 'R_double':

            return (int) 12;

        break;
        //case 'CRNRSTN_STRING':
        case 'R_string':

            return (int) 13;

        break;
        //case 'CRNRSTN_ARRAY':
        case 'R_array':

            return (int) 14;

        break;
        //case 'CRNRSTN_OBJECT':
        case 'R_object':

            return (int) 15;

        break;
        //case 'CRNRSTN_NULL':
        case 'R_null':

            return (int) 16;

        break;
        //case 'CRNRSTN_RESOURCE':
        case 'R_resource':

            return (int) 17;

        break;
        //case 'CRNRSTN_RESOURCE_CLOSED':
        case 'R_resource_closed':

            return (int) 18;

        break;
        //case 'CRNRSTN_MIXED':
        case 'R_mixed':

            return (int) 19;

        break;
        //case 'CRNRSTN_UNKNOWN_TYPE':
        case 'R_unknown_type':

            return (int) 20;

        break;

        case 'CRNRSTN_CLIENT_SSDTLA':

            return (int) 3;

        break;
        case 'CRNRSTN_PSSDTLA_PACKET':

            return (int) 7212;

        break;
        //case 'CRNRSTN_AUTHORIZE_ALL':
        case 'R_authorize_all':

            return (int) 8076;

        break;
        //case 'CRNRSTN_AUTHORIZE':
        case 'R_authorize':

            return (int) 8078;

        break;
        //case 'CRNRSTN_USERNAME':
        case 'R_username':

            return (int) 3052;

        break;
        //case 'CRNRSTN_EMAIL':
        case 'R_email':

            return (int) 3053;

        break;
        //case 'CRNRSTN_PASSWORD':
        case 'R_password':

            return (int) 3054;

        break;
        //case 'CRNRSTN_ENCRYPT_TUNNEL':
        case 'R_encrypt_TUNNEL':

            return (int) 8185;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CRNRSTN :: Lightsaber RoCEv2 
         * SOAP Services Layer (CLR-SSL) 
         * Multi-Channel Decoupled Data 
         * Storage Architecture 
         * Channel Flags. 
         *
         *
         * 5 :: Monday, October 16, 2023 @ 0805 hrs.
         * Last Modfied: Tuesday, March 10, 2026 @ 0911 hrs.
         *
         * CLR-SSL Channel 
         * Integer Constants. 
         *
         */
        case 'R_channel_ALL':

            return (int) 8064;

        break;
        case 'R_channel_GET':

            return (int) 8065;

        break;
        case 'R_channel_POST':

            return (int) 8066;

        break;
        case 'R_channel_SESSION':

            return (int) 8067;

        break;
        case 'R_channel_SSDTLA':

            return (int) 8068;

        break;
        case 'R_channel_PSSDTLA':

            return (int) 8069;

        break;
        case 'R_channel_FORM':

            return (int) 8070;

        break; 
        case 'R_channel_COOKIE':

            return (int) 8071;

        break;
        case 'R_channel_DATABASE':

            return (int) 8072;

        break;
        case 'R_channel_RUNTIME':

            return (int) 8073;

        break;
        case 'R_channel_SOAP':

            return (int) 8074;

        break;
        case 'R_channel_RDMA':

            return (int) 8075;

        break;
        case 'R_channel_FILE':

            return (int) 8076;

        break;
        case 'R_channel_OERSL':

            return (int) 8077;

        break;
        //case 'CRNRSTN_BOOL_IS_HTML':
        case 'R_bool_is_html':

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * This integer is used as an
             * indication of architecture
             * by$oCRNRSTN->tidy_boolean().
             *
             * Where, 
             * $oCRNRSTN->tidy_boolean(
             *            $int_data, 
             *            (int) self::$R_data['int_flag']['R_string'], 
             *            (int) self::$R_data['int_flag']['R_bool_is_html']);
             * 
             * Outputs: 
             * 'HTML' or 'TEXT'.
             *
             * 5 :: Wednesday, November 22, 2023 @ 0153 hrs.
             *
             */
            return (int) 21;

        break;
        //case 'CRNRSTN_AUTHORIZED_ACCOUNT':
        case 'R_account':

            return (int) 44;

        break;
        //case 'CRNRSTN_AUTHORIZED_IP':
        case 'R_ip':

            return (int) 45;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 1025-2049
         * CRNRSTN :: Database. 
         *
         */
        case 'CRNRSTN_DB_LOG_TABLE_NO_ROLLOVER':

            return (int) 1025;

        break;
        case 'CRNRSTN_DB_LOG_TABLE_ROLLOVER_MAX_RECORDS':

            return (int) 1026;

        break;
        case 'CRNRSTN_DB_LOG_TABLE_SHARD_SIZE':

            return (int) 1027;

        break;

        case 'CRNRSTN_UI_INTERACT':

            return (int) 7216;

        break;
        //case 'CRNRSTN_ICY_BITMASK':
        case 'R_icy_bitmask':

            return (int) 7217;

        break;
        case 'CRNRSTN_SOAP':

            return (int) 6050;

        break;
        //case 'CRNRSTN_SOAP_TUNNEL':
        case 'R_soap_tunnel':

            return (int) 6051;

        break;
        case 'CRNRSTN_SOAP_SERVER':

            return (int) 6052;

        break;
        case 'CRNRSTN_SOAP_CLIENT':

            return (int) 6053;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 6900-6950. 
         *
         */
        case 'CRNRSTN_DESKTOP':

            return (int) 6900;

        break;
        case 'CRNRSTN_TABLET':

            return (int) 6901;

        break;
        case 'CRNRSTN_MOBILE':

            return (int) 6902;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 7051-7199. 
         *
         * CRNRSTN_UI_PHPNIGHT 
         * CRNRSTN_UI_DARKNIGHT 
         * CRNRSTN_UI_PHP 
         * CRNRSTN_UI_GREYSKY 
         * CRNRSTN_UI_HTML 
         * CRNRSTN_UI_DAYLIGHT 
         * CRNRSTN_UI_FEATHER 
         * CRNRSTN_UI_GLASS_LIGHT_COPY 
         * CRNRSTN_UI_GLASS_DARK_COPY 
         * CRNRSTN_UI_WOOD 
         * CRNRSTN_UI_TERMINAL 
         * CRNRSTN_UI_RANDOM 
         *
         */
        case 'CRNRSTN_UI_PHPNIGHT':

            return (int) 7051;

        break;
        case 'CRNRSTN_UI_DARKNIGHT':

            return (int) 7052;

        break;
        case 'CRNRSTN_UI_PHP':

            return (int) 7053;

        break;
        case 'CRNRSTN_UI_GREYSKY':

            return (int) 7054;

        break;
        case 'CRNRSTN_UI_HTML':

            return (int) 7055;

        break;
        case 'CRNRSTN_UI_DAYLIGHT':

            return (int) 7056;

        break;
        case 'CRNRSTN_UI_FEATHER':

            return (int) 7057;

        break;
        case 'CRNRSTN_UI_GLASS_LIGHT_COPY':

            return (int) 7058;

        break;
        case 'CRNRSTN_UI_GLASS_DARK_COPY':

            return (int) 7059;

        break;
        case 'CRNRSTN_UI_WOOD':

            return (int) 7060;

        break;
        case 'CRNRSTN_UI_TERMINAL':

            return (int) 7061;

        break;
        case 'CRNRSTN_UI_RANDOM':

            return (int) 7062;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 7200-7211. 
         *
         */
        case 'CRNRSTN_WEB_ANALYTICS':

            return (int) 7200;

        break;
        case 'CRNRSTN_WEB_ENGAGEMENT':

            return (int) 7201;

        break;

        case 'CRNRSTN_ICO':
            // '.ico' => 'CRNRSTN_ICO',

            return (int) 7220;

        break;
        case 'CRNRSTN_HTML':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * '.html' => 'CRNRSTN_HTML'
             * Previously CRNRSTN_HTML_WRAPPED.
             *
             */

            return (int) 1228;      // 7227

        break;
        case 'CRNRSTN_BASE64':

            return (int) 7221;

        break;
        case 'CRNRSTN_CSS':
            // '.css' => 'CRNRSTN_CSS',

            return (int) 7222;

        break;
        case 'CRNRSTN_JS':
            // '.js' => 'CRNRSTN_JS',

            return (int) 7223;

        break;
        case 'CRNRSTN_IMG':

            return (int) 7224;

        break;

        case 'CRNRSTN_JS_MAIN':

            return (int) 17647;

        break;
        case 'CRNRSTN_CSS_MAIN_DESKTOP':

            return (int) 18025;

        break;
        case 'CRNRSTN_CSS_MAIN_TABLET':

            return (int) 18026;

        break;
        case 'CRNRSTN_CSS_MAIN_MOBILE':

            return (int) 18027;

        break;
        //case 'CRNRSTN_PROD_MIN_JS_CSS':
        case 'R_js_css_min_mode':

            return (int) 17600;

        break;
        case 'CRNRSTN_EMAIL_MULTI_PART':

            return (int) 7906;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 7890-7892. 
         *
         */
        case 'CRNRSTN_MODE_BASE64':

            return (int) 7890;

        break;
        case 'CRNRSTN_MODE_PNG':

            return (int) 7891;

        break;
        case 'CRNRSTN_MODE_JPEG':

            return (int) 7892;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 7895-7902. 
         *
         */
        //case 'CRNRSTN_ASSET_MAPPING':
        case 'R_fs_map':

            return (int) 7895;

        break;
        //case 'CRNRSTN_ASSET_MAPPING_PROXY':
        case 'R_fs_map_proxy':

            return (int) 7896;

        break;
        //case 'CRNRSTN_FAVICON_ASSET_MAPPING':
        case 'R_fs_map_favicon':

            return (int) 7897;

        break;
        //case 'CRNRSTN_SYSTEM_IMG_ASSET_MAPPING':
        case 'R_fs_map_system':

            return (int) 7898;

        break;
        //case 'CRNRSTN_SOCIAL_IMG_ASSET_MAPPING':
        case 'R_fs_map_social':

            return (int) 7899;

        break;
        //case 'CRNRSTN_META_IMG_ASSET_MAPPING':
        case 'R_fs_map_meta':

            return (int) 7900;

        break;
        //case 'CRNRSTN_JS_LIB_ASSET_MAPPING':
        case 'R_fs_map_js_lib':

            return (int) 7901;

        break;
        //case 'CRNRSTN_CSS_LIB_ASSET_MAPPING':
        case 'R_fs_map_css_lib':

            return (int) 7902;

        break;

        /* Begin File Extension-
         * Based Integer returns.
         *
         *
         */
        case 'CRNRSTN_HTM':
            /* '.htm' => 'CRNRSTN_HTM',
             * 
             * 5 :: Tuesday, June 6, 2023 0615 hrs. 
             *
             */
            return (int) 7230;

        break;
        case 'CRNRSTN_SHTML':
            // '.shtml' => 'CRNRSTN_SHTML',

            return (int) 7231;

        break;
        case 'CRNRSTN_SHTM':
            // '.shtm' => 'CRNRSTN_SHTM',

            return (int) 7232;

        break;
        case 'CRNRSTN_STM':
            // '.stm' => 'CRNRSTN_STM',

            return (int) 7233;

        break;
        case 'CRNRSTN_XHTML':
            // '.xhtml' => 'CRNRSTN_XHTML',

            return (int) 7234;

        break;
        case 'CRNRSTN_XML':
            // '.xml' => 'CRNRSTN_XML',

            return (int) 7235;

        break;
        case 'CRNRSTN_XSLT':
            // '.xslt' => 'CRNRSTN_XSLT',

            return (int) 7236;

        break;
        case 'CRNRSTN_XUL':
            // '.xul' => 'CRNRSTN_XUL',

            return (int) 7237;

        break;
        case 'CRNRSTN_CSV':
            // '.csv' => 'CRNRSTN_CSV',

            return (int) 7238;

        break;
        case 'CRNRSTN_TXT':
            // '.txt' => 'CRNRSTN_TXT',

            return (int) 7239;

        break;
        case 'CRNRSTN_SQL':
            // '.sql' => 'CRNRSTN_SQL',

            return (int) 7240;

        break;
        case 'CRNRSTN_DB':
            // '.db' => 'CRNRSTN_DB',

            return (int) 7241;

        break;
        case 'CRNRSTN_DS_STORE':
            // '.DS_Store' => 'CRNRSTN_DS_STORE',

            return (int) 7242;

        break;
        case 'CRNRSTN_DLL':
            // '.dll' => 'CRNRSTN_DLL',

            return (int) 7243;

        break;
        case 'CRNRSTN_BAT':
            // '.bat' => 'CRNRSTN_BAT',

            return (int) 7244;

        break;
        case 'CRNRSTN_PHP':
            // '.php' => 'CRNRSTN_PHP',

            return (int) 7245;

        break;
        case 'CRNRSTN_PHAR':
            // '.phar' => 'CRNRSTN_PHAR',

            return (int) 7246;

        break;
        case 'CRNRSTN_PHTML':
            // '.phtml' => 'CRNRSTN_PHTML',

            return (int) 7247;

        break;
        case 'CRNRSTN_PHT':
            // '.pht' => 'CRNRSTN_PHT',

            return (int) 7248;

        break;
        case 'CRNRSTN_PHPS':
            // '.phps' => 'CRNRSTN_PHPS',

            return (int) 7249;

        break;
        case 'CRNRSTN_AS':
            // '.as' => 'CRNRSTN_AS',

            return (int) 7250;

        break;
        case 'CRNRSTN_C':
            // '.C' => 'CRNRSTN_C',

            return (int) 7251;

        break;
        case 'CRNRSTN_CC':
            // '.cc' => 'CRNRSTN_CC',

            return (int) 7252;

        break;
        case 'CRNRSTN_H':
            // '.h' => 'CRNRSTN_H',

            return (int) 7253;

        break;
        case 'CRNRSTN_APS':
            // '.aps' => 'CRNRSTN_APS',

            return (int) 7254;

        break;
        case 'CRNRSTN_ASAX':
            // '.asax' => 'CRNRSTN_ASAX',

            return (int) 7255;

        break;
        case 'CRNRSTN_ASCX':
            // '.ascx' => 'CRNRSTN_ASCX',

            return (int) 7256;

        break;
        case 'CRNRSTN_ASMX':
            // '.asmx' => 'CRNRSTN_ASMX',

            return (int) 7257;

        break;
        case 'CRNRSTN_ASPX':
            // '.aspx' => 'CRNRSTN_ASPX',

            return (int) 7258;

        break;
        case 'CRNRSTN_CFC':
            // '.cfc' => 'CRNRSTN_CFC',

            return (int) 7259;

        break;
        case 'CRNRSTN_CMAKE':
            // '.cmake' => 'CRNRSTN_CMAKE',

            return (int) 7260;

        break;
        case 'CRNRSTN_INI':
            // '.ini' => 'CRNRSTN_INI',

            return (int) 7261;

        break;
        case 'CRNRSTN_CONFIG':
            // '.config' => 'CRNRSTN_CONFIG',

            return (int) 7262;

        break;
        case 'CRNRSTN_CPP':
            // '.cpp' => 'CRNRSTN_CPP',

            return (int) 7263;

        break;
        case 'CRNRSTN_CS':
            // '.cs' => 'CRNRSTN_CS',

            return (int) 7264;

        break;
        case 'CRNRSTN_CSPROJ':
            // '.csproj' => 'CRNRSTN_CSPROJ',

            return (int) 7265;

        break;
        case 'CRNRSTN_INCR':
            // '.incr' => 'CRNRSTN_INCR',

            return (int) 7266;

        break;
        case 'CRNRSTN_JWS':
            // '.jws' => 'CRNRSTN_JWS',

            return (int) 7267;

        break;
        case 'CRNRSTN_LICENSES':
            // '.licenses' => 'CRNRSTN_LICENSES',

            return (int) 7268;

        break;
        case 'CRNRSTN_LICX':
            // '.licx' => 'CRNRSTN_LICX',

            return (int) 7269;

        break;
        case 'CRNRSTN_MANIFEST':
            // '.manifest' => 'CRNRSTN_MANIFEST',

            return (int) 7270;

        break;
        case 'CRNRSTN_NCB':
            // '.ncb' => 'CRNRSTN_NCB',

            return (int) 7271;

        break;
        case 'CRNRSTN_PDB':
            // '.pdb' => 'CRNRSTN_PDB',

            return (int) 7272;

        break;
        case 'CRNRSTN_PROJDATA':
            // '.prodata' => 'CRNRSTN_PROJDATA',

            return (int) 7273;

        break;
        case 'CRNRSTN_RC':
            // '.rc' => 'CRNRSTN_RC',

            return (int) 7274;

        break;
        case 'CRNRSTN_RC2':
            // '.rc2' => 'CRNRSTN_RC2',

            return (int) 7275;

        break;
        case 'CRNRSTN_RESOURCES':
            // '.resources' => 'CRNRSTN_RESOURCES',

            return (int) 7276;

        break;
        case 'CRNRSTN_RESX':
            // '.resx' => 'CRNRSTN_RESX',

            return (int) 7277;

        break;
        case 'CRNRSTN_SLN':
            // '.sln' => 'CRNRSTN_SLN',

            return (int) 7278;

        break;
        case 'CRNRSTN_SUO':
            // '.suo' => 'CRNRSTN_SUO',

            return (int) 7279;

        break;
        case 'CRNRSTN_USER':
            // '.user' => 'CRNRSTN_USER',

            return (int) 7280;

        break;
        case 'CRNRSTN_VB':
            // '.vb' => 'CRNRSTN_VB',

            return (int) 7281;

        break;
        case 'CRNRSTN_VBPROJ':
            // '.vbproj' => 'CRNRSTN_VBPROJ',

            return (int) 7282;

        break;
        case 'CRNRSTN_VCPROJ':
            // '.vcproj' => 'CRNRSTN_VCPROJ',

            return (int) 7283;

        break;
        case 'CRNRSTN_WEBINFO':
            // '.webinfo' => 'CRNRSTN_WEBINFO',

            return (int) 7284;

        break;
        case 'CRNRSTN_RTF':
            // '.rtf' => 'CRNRSTN_RTF',

            return (int) 7285;

        break;
        case 'CRNRSTN_TEX':
            // '.tex' => 'CRNRSTN_TEX',

            return (int) 7286;

        break;
        case 'CRNRSTN_JSON':
            // '.json' => 'CRNRSTN_JSON',

            return (int) 7287;

        break;
        case 'CRNRSTN_ICS':
            // '.ics' => 'CRNRSTN_ICS',

            return (int) 7288;

        break;
        case 'CRNRSTN_TSV':
            // '.tsv' => 'CRNRSTN_TSV',

            return (int) 7289;

        break;
        case 'CRNRSTN_JSONLD':
            // '.jsonld' => 'CRNRSTN_JSONLD',

            return (int) 7290;

        break;
        case 'CRNRSTN_MJS':
            // '.mjs' => 'CRNRSTN_MJS',

            return (int) 7291;

        break;
        case 'CRNRSTN_JAR':
            // '.jar' => 'CRNRSTN_JAR',

            return (int) 7292;

        break;
        case 'CRNRSTN_ZIP':
            // '.zip' => 'CRNRSTN_ZIP',

            return (int) 7293;

        break;
        case 'CRNRSTN_ZIPX':
            // '.zipx' => 'CRNRSTN_ZIPX',

            return (int) 7294;

        break;
        case 'CRNRSTN_BZ':
            // '.bz' => 'CRNRSTN_BZ',

            return (int) 7295;

        break;
        case 'CRNRSTN_BZ2':
            // '.bz2' => 'CRNRSTN_BZ2',

            return (int) 7296;

        break;
        case 'CRNRSTN_GZ':
            // '.gz' => 'CRNRSTN_GZ',

            return (int) 7297;

        break;
        case 'CRNRSTN_GZIP':
            // '.gzip' => 'CRNRSTN_GZIP',

            return (int) 7298;

        break;
        case 'CRNRSTN_GTAR':
            // '.gtar' => 'CRNRSTN_GTAR',

            return (int) 7299;

        break;
        case 'CRNRSTN_7Z':
            // '.7z' => 'CRNRSTN_7Z',

            return (int) 7300;

        break;
        case 'CRNRSTN_EPUB':
            // '.epub' => 'CRNRSTN_EPUB',

            return (int) 7301;

        break;
        case 'CRNRSTN_TAR':
            // '.tar' => 'CRNRSTN_TAR',

            return (int) 7302;

        break;
        case 'CRNRSTN_OTF':
            // '.otf' => 'CRNRSTN_OTF',

            return (int) 7303;

        break;
        case 'CRNRSTN_WOFF':
            // '.woff' => 'CRNRSTN_WOFF',

            return (int) 7304;

        break;
        case 'CRNRSTN_WOFF2':
            // '.woff2' => 'CRNRSTN_WOFF2',

            return (int) 7305;

        break;
        case 'CRNRSTN_TTF':
            // '.ttf' => 'CRNRSTN_TTF',

            return (int) 7306;

        break;
        case 'CRNRSTN_ICO':
            // '.ico' => 'CRNRSTN_ICO',

            return (int) 7307;

        break;
        case 'CRNRSTN_JPG':
            // '.jpg' => 'CRNRSTN_JPG',

            return (int) 7308;

        break;
        case 'CRNRSTN_JPE':
            // '.jpe' => 'CRNRSTN_JPE',

            return (int) 7309;

        break;
        case 'CRNRSTN_JPEG':
            // '.jpeg' => 'CRNRSTN_JPEG',

            //return (int) 7815;
            return (int) 7310;

        break;
        case 'CRNRSTN_JPG2':
            // '.jpg2' => 'CRNRSTN_JPG2',

            return (int) 7311;

        break;
        case 'CRNRSTN_JIF':
            // '.jif' => 'CRNRSTN_JIF',

            return (int) 7312;

        break;
        case 'CRNRSTN_JFIF':
            // '.jfif' => 'CRNRSTN_JFIF',

            return (int) 7313;

        break;
        case 'CRNRSTN_JFI':
            // '.jfi' => 'CRNRSTN_JFI',

            return (int) 7314;

        break;
        case 'CRNRSTN_GIF':
            // '.gif' => 'CRNRSTN_GIF',

            //return (int) 7813;
            return (int) 7315;

        break;
        case 'CRNRSTN_BMP':
            // '.bmp' => 'CRNRSTN_BMP',

            return (int) 7316;

        break;
        case 'CRNRSTN_PNG':
            // '.png' => 'CRNRSTN_PNG',

            //return (int) 7814;
            return (int) 7317;

        break;
        case 'CRNRSTN_SVG':
            // '.svg' => 'CRNRSTN_SVG',

            return (int) 7318;

        break;
        case 'CRNRSTN_TIF':
            // '.tif' => 'CRNRSTN_TIF',

            return (int) 7319;

        break;
        case 'CRNRSTN_TIFF':
            // '.tiff' => 'CRNRSTN_TIFF',

            return (int) 7320;

        break;
        case 'CRNRSTN_WEBP':
            // '.webp' => 'CRNRSTN_WEBP',

            return (int) 7321;

        break;
        case 'CRNRSTN_PIC':
            // '.pic' => 'CRNRSTN_PIC',

            return (int) 7322;

        break;
        case 'CRNRSTN_PICT':
            // '.pict' => 'CRNRSTN_PICT',

            return (int) 7323;

        break;
        case 'CRNRSTN_AVIF':
            // '.avif' => 'CRNRSTN_AVIF',

            return (int) 7324;

        break;
        case 'CRNRSTN_MID':
            // '.mid' => 'CRNRSTN_MID',

            return (int) 7325;

        break;
        case 'CRNRSTN_MIDI':
            // '.midi' => 'CRNRSTN_MIDI',

            return (int) 7326;

        break;
        case 'CRNRSTN_AAC':
            // '.aac' => 'CRNRSTN_AAC',

            return (int) 7327;

        break;
        case 'CRNRSTN_OGA':
            // '.oga' => 'CRNRSTN_OGA',

            return (int) 7328;

        break;
        case 'CRNRSTN_MP1':
            // '.mp1' => 'CRNRSTN_MP1',

            return (int) 7329;

        break;
        case 'CRNRSTN_MP2':
            // '.mp2' => 'CRNRSTN_MP2',

            return (int) 7330;

        break;
        case 'CRNRSTN_M1A':
            // '.m1a' => 'CRNRSTN_M1A',

            return (int) 7331;

        break;
        case 'CRNRSTN_M2A':
            // '.m2a' => 'CRNRSTN_M2A',

            return (int) 7332;

        break;
        case 'CRNRSTN_MP3':
            // '.mp3' => 'CRNRSTN_MP3',

            return (int) 7333;

        break;
        case 'CRNRSTN_MPGA':
            // '.mpga' => 'CRNRSTN_MPGA',

            return (int) 7334;

        break;
        case 'CRNRSTN_MPA':
            // '.mpa' => 'CRNRSTN_MPA',

            return (int) 7335;

        break;
        case 'CRNRSTN_MPV':
            // '.mpv' => 'CRNRSTN_MPV',

            return (int) 7336;

        break;
        case 'CRNRSTN_MPG':
            // '.mpg' => 'CRNRSTN_MPG',

            return (int) 7337;

        break;
        case 'CRNRSTN_RA':
            // '.ra' => 'CRNRSTN_RA',

            return (int) 7338;

        break;
        case 'CRNRSTN_RAM':
            // '.ram' => 'CRNRSTN_RAM',

            return (int) 7339;

        break;
        case 'CRNRSTN_RMP':
            // '.rmp' => 'CRNRSTN_RMP',

            return (int) 7340;

        break;
        case 'CRNRSTN_DAT':
            // '.dat' => 'CRNRSTN_DAT',

            return (int) 7341;

        break;
        case 'CRNRSTN_WAV':
            // '.wav' => 'CRNRSTN_WAV',

            return (int) 7342;

        break;
        case 'CRNRSTN_WAVE':
            // '.wave' => 'CRNRSTN_WAVE',

            return (int) 7343;

        break;
        case 'CRNRSTN_WMA':
            // '.wma' => 'CRNRSTN_WMA',

            return (int) 7344;

        break;
        case 'CRNRSTN_WMV':
            // '.wmv' => 'CRNRSTN_WMV',

            return (int) 7345;

        break;
        case 'CRNRSTN_ASF':
            // '.asf' => 'CRNRSTN_ASF',

            return (int) 7346;

        break;
        case 'CRNRSTN_WM':
            // '.wm' => 'CRNRSTN_WM',

            return (int) 7347;

        break;
        case 'CRNRSTN_WAX':
            // '.wax' => 'CRNRSTN_WAX',

            return (int) 7348;

        break;
        case 'CRNRSTN_WVX':
            // '.wvx' => 'CRNRSTN_WVX',

            return (int) 7349;

        break;
        case 'CRNRSTN_ASX':
            // '.asx' => 'CRNRSTN_ASX',

            return (int) 7350;

        break;
        case 'CRNRSTN_WMX':
            // '.wmx' => 'CRNRSTN_WMX',

            return (int) 7351;

        break;
        case 'CRNRSTN_OGG':
            // '.ogg' => 'CRNRSTN_OGG',

            return (int) 7352;

        break;
        case 'CRNRSTN_WEBA':
            // '.weba' => 'CRNRSTN_WEBA',

            return (int) 7353;

        break;
        case 'CRNRSTN_3GP':
            // '.3gp' => 'CRNRSTN_3GP',

            return (int) 7354;

        break;
        case 'CRNRSTN_3G2':
            // '.3g2' => 'CRNRSTN_3G2',

            return (int) 7355;

        break;
        case 'CRNRSTN_OPUS':
            // '.opus' => 'CRNRSTN_OPUS',

            return (int) 7356;

        break;
        case 'CRNRSTN_M3U':
            // '.m3u' => 'CRNRSTN_M3U',

            return (int) 7357;

        break;
        case 'CRNRSTN_OGV':
            // '.ogv' => 'CRNRSTN_OGV',

            return (int) 7358;

        break;
        case 'CRNRSTN_WEBM':
            // '.webm' => 'CRNRSTN_WEBM',

            return (int) 7359;

        break;
        case 'CRNRSTN_MP4':
            // '.mp4' => 'CRNRSTN_MP4',

            return (int) 7360;

        break;
        case 'CRNRSTN_M4A':
            // '.m4a' => 'CRNRSTN_M4A',

            return (int) 7361;

        break;
        case 'CRNRSTN_M4P':
            // '.m4p' => 'CRNRSTN_M4P',

            return (int) 7362;

        break;
        case 'CRNRSTN_M4B':
            // '.m4b' => 'CRNRSTN_M4B',

            return (int) 7363;

        break;
        case 'CRNRSTN_M4R':
            // '.m4r' => 'CRNRSTN_M4R',

            return (int) 7364;

        break;
        case 'CRNRSTN_M4V':
            // '.m4v' => 'CRNRSTN_M4V',

            return (int) 7365;

        break;
        case 'CRNRSTN_MPE':
            // '.mpe' => 'CRNRSTN_MPE',

            return (int) 7366;

        break;
        case 'CRNRSTN_MPEG':
            // '.mpeg' => 'CRNRSTN_MPEG',

            return (int) 7367;

        break;
        case 'CRNRSTN_MPV2':
            // '.mpv2' => 'CRNRSTN_MPV2',

            return (int) 7368;

        break;
        case 'CRNRSTN_M1V':
            // '.m1v' => 'CRNRSTN_M1V',

            return (int) 7369;

        break;
        case 'CRNRSTN_M2V':
            // '.m2v' => 'CRNRSTN_M2V',

            return (int) 7370;

        break;
        case 'CRNRSTN_MOV':
            // '.mov' => 'CRNRSTN_MOV',

            return (int) 7371;

        break;
        case 'CRNRSTN_QT':
            // '.qt' => 'CRNRSTN_QT',

            return (int) 7372;

        break;
        case 'CRNRSTN_QIF':
            // '.qif' => 'CRNRSTN_QIF',

            return (int) 7373;

        break;
        case 'CRNRSTN_QTI':
            // '.qti' => 'CRNRSTN_QTI',

            return (int) 7374;

        break;
        case 'CRNRSTN_QTIF':
            // '.qtif' => 'CRNRSTN_QTIF',

            return (int) 7375;

        break;
        case 'CRNRSTN_QTC':
            // '.qtc' => 'CRNRSTN_QTC',

            return (int) 7376;

        break;
        case 'CRNRSTN_MOVIE':
            // '.movie' => 'CRNRSTN_MOVIE',

            return (int) 7377;

        break;
        case 'CRNRSTN_MV':
            // '.mv' => 'CRNRSTN_MV',

            return (int) 7378;

        break;
        case 'CRNRSTN_SWF':
            // '.swf' => 'CRNRSTN_SWF',

            return (int) 7379;

        break;
        case 'CRNRSTN_AVI':
            // '.avi' => 'CRNRSTN_AVI',

            return (int) 7380;

        break;
        case 'CRNRSTN_AVS':
            // '.avs' => 'CRNRSTN_AVS',

            return (int) 7381;

        break;
        case 'CRNRSTN_MJPG':
            // '.mjpg' => 'CRNRSTN_MJPG',

            return (int) 7382;

        break;
        case 'CRNRSTN_TS':
            // '.ts' => 'CRNRSTN_TS',

            return (int) 7383;

        break;
        case 'CRNRSTN_EOT':
            // '.eot' => 'CRNRSTN_EOT',

            return (int) 7384;

        break;
        case 'CRNRSTN_ABW':
            // '.abw' => 'CRNRSTN_ABW',

            return (int) 7385;

        break;
        case 'CRNRSTN_ARC':
            // '.arc' => 'CRNRSTN_ARC',

            return (int) 7386;

        break;
        case 'CRNRSTN_AZW':
            // '.azw' => 'CRNRSTN_AZW',

            return (int) 7387;

        break;
        case 'CRNRSTN_BIN':
            // '.bin' => 'CRNRSTN_BIN',

            return (int) 7388;

        break;
        case 'CRNRSTN_PL':
            // '.pl' => 'CRNRSTN_PL',

            return (int) 7389;

        break;
        case 'CRNRSTN_PLX':
            // '.plx => 'CRNRSTN_PLX',

            return (int) 7390;

        break;
        case 'CRNRSTN_PM':
            // '.pm' => 'CRNRSTN_PM',

            return (int) 7391;

        break;
        case 'CRNRSTN_XS':
            // '.xs' => 'CRNRSTN_XS',

            return (int) 7392;

        break;
        case 'CRNRSTN_POD':
            // '.pod' => 'CRNRSTN_POD',

            return (int) 7393;

        break;
        case 'CRNRSTN_CGI':
            // '.cgi' => 'CRNRSTN_CGI',

            return (int) 7394;

        break;
        case 'CRNRSTN_CMD':
            // '.cmd' => 'CRNRSTN_CMD',

            return (int) 7395;

        break;
        case 'CRNRSTN_BTM':
            // '.btm' => 'CRNRSTN_BTM',

            return (int) 7396;

        break;
        case 'CRNRSTN_CDA':
            // '.cda' => 'CRNRSTN_CDA',

            return (int) 7397;

        break;
        case 'CRNRSTN_CSH':
            // '.csh' => 'CRNRSTN_CSH',

            return (int) 7398;

        break;
        case 'CRNRSTN_ODT':
            // '.odt' => 'CRNRSTN_ODT',

            return (int) 7399;

        break;
        case 'CRNRSTN_ODP':
            // '.odp' => 'CRNRSTN_ODP',

            return (int) 7400;

        break;
        case 'CRNRSTN_ODS':
            // '.ods' => 'CRNRSTN_ODS',

            return (int) 7401;

        break;
        case 'CRNRSTN_PDF':
            // '.pdf' => 'CRNRSTN_PDF',

            return (int) 7402;

        break;
        case 'CRNRSTN_WKS':
            // '.wks' => 'CRNRSTN_WKS',

            return (int) 7403;

        break;
        case 'CRNRSTN_WPS':
            // '.wps' => 'CRNRSTN_WPS',

            return (int) 7404;

        break;
        case 'CRNRSTN_WPD':
            // '.wpd' => 'CRNRSTN_WPD',

            return (int) 7405;

        break;
        case 'CRNRSTN_DOC':
            // '.doc' => 'CRNRSTN_DOC',

            return (int) 7406;

        break;
        case 'CRNRSTN_WORD':
            // '.word' => 'CRNRSTN_WORD',

            return (int) 7407;

        break;
        case 'CRNRSTN_W6W':
            // '.w6w' => 'CRNRSTN_W6W',

            return (int) 7408;

        break;
        case 'CRNRSTN_XLSX':
            // '.xlsx' => 'CRNRSTN_XLSX',

            return (int) 7409;

        break;
        case 'CRNRSTN_PPTX':
            // '.pptx' => 'CRNRSTN_PPTX',

            return (int) 7410;

        break;
        case 'CRNRSTN_DOCX':
            // '.docx' => 'CRNRSTN_DOCX',

            return (int) 7411;

        break;
        case 'CRNRSTN_DOCM':
            // '.docm' => 'CRNRSTN_DOCM',

            return (int) 7412;

        break;
        case 'CRNRSTN_DOTM':
            // '.dotm' => 'CRNRSTN_DOTM',

            return (int) 7413;

        break;
        case 'CRNRSTN_DOTX':
            // '.dotx' => 'CRNRSTN_DOTX',

            return (int) 7414;

        break;
        case 'CRNRSTN_PPSX':
            // '.ppsx' => 'CRNRSTN_PPSX',

            return (int) 7415;

        break;
        case 'CRNRSTN_POTX':
            // '.potx' => 'CRNRSTN_POTX',

            return (int) 7416;

        break;
        case 'CRNRSTN_SLDX':
            // '.sldx' => 'CRNRSTN_SLDX',

            return (int) 7417;

        break;
        case 'CRNRSTN_VSD':
            // '.vsd' => 'CRNRSTN_VSD',

            return (int) 7418;

        break;
        case 'CRNRSTN_MPKG':
            // '.mpkg' => 'CRNRSTN_MPKG',

            return (int) 7419;

        break;
        case 'CRNRSTN_OGX':
            // '.ogx' => 'CRNRSTN_OGX',

            return (int) 7420;

        break;
        case 'CRNRSTN_RAR':
            // '.rar' => 'CRNRSTN_RAR',

            return (int) 7421;

        break;
        case 'CRNRSTN_SH':
            // '.sh' => 'CRNRSTN_SH',

            return (int) 7422;

        break;
        case 'CRNRSTN_DWG':
            // '.dwg' => 'CRNRSTN_DWG',

            return (int) 7423;

        break;
        case 'CRNRSTN_ARJ':
            // '.arj' => 'CRNRSTN_ARJ',

            return (int) 7424;

        break;
        case 'CRNRSTN_ASD':
            // '.asd' => 'CRNRSTN_ASD',

            return (int) 7425;

        break;
        case 'CRNRSTN_ASN':
            // '.asn' => 'CRNRSTN_ASN',

            return (int) 7426;

        break;
        case 'CRNRSTN_CCAD':
            // '.ccad' => 'CRNRSTN_CCAD',

            return (int) 7427;

        break;
        case 'CRNRSTN_DRW':
            // '.drw' => 'CRNRSTN_DRW',

            return (int) 7428;

        break;
        case 'CRNRSTN_DXF':
            // '.dxf' => 'CRNRSTN_DXF',

            return (int) 7429;

        break;
        case 'CRNRSTN_UNV':
            // '.unv' => 'CRNRSTN_UNV',

            return (int) 7430;

        break;
        case 'CRNRSTN_IGES':
            // '.iges' => 'CRNRSTN_IGES',

            return (int) 7431;

        break;
        case 'CRNRSTN_IGS':
            // '.igs' => 'CRNRSTN_IGS',

            return (int) 7432;

        break;
        case 'CRNRSTN_HQX':
            // '.hqx' => 'CRNRSTN_HQX',

            return (int) 7433;

        break;
        case 'CRNRSTN_MDB':
            // '.mdb' => 'CRNRSTN_MDB',

            return (int) 7434;

        break;
        case 'CRNRSTN_XLA':
            // '.xla' => 'CRNRSTN_XLA',

            return (int) 7435;

        break;
        case 'CRNRSTN_XLS':
            // '.xls' => 'CRNRSTN_XLS',

            return (int) 7436;

        break;
        case 'CRNRSTN_XLT':
            // '.xlt' => 'CRNRSTN_XLT',

            return (int) 7437;

        break;
        case 'CRNRSTN_XLM':
            // '.xlm' => 'CRNRSTN_XLM',

            return (int) 7438;

        break;
        case 'CRNRSTN_XLSM':
            // '.xlsm' => 'CRNRSTN_XLSM',

            return (int) 7439;

        break;
        case 'CRNRSTN_XLSB':
            // '.xlsb' => 'CRNRSTN_XLSB',

            return (int) 7440;

        break;
        case 'CRNRSTN_XLAM':
            // '.xlam' => 'CRNRSTN_XLAM',

            return (int) 7441;

        break;
        case 'CRNRSTN_XLTM':
            // '.xltm' => 'CRNRSTN_XLTM',

            return (int) 7442;

        break;
        case 'CRNRSTN_XLW':
            // '.xlw' => 'CRNRSTN_XLW',

            return (int) 7443;

        break;
        case 'CRNRSTN_POT':
            // '.pot' => 'CRNRSTN_POT',

            return (int) 7444;

        break;
        case 'CRNRSTN_PPS':
            // '.pps' => 'CRNRSTN_PPS',

            return (int) 7445;

        break;
        case 'CRNRSTN_PPT':
            // '.ppt' => 'CRNRSTN_PPT',

            return (int) 7446;

        break;
        case 'CRNRSTN_PPTM':
            // '.pptm' => 'CRNRSTN_PPTM',

            return (int) 7447;

        break;
        case 'CRNRSTN_POTM':
            // '.potm' => 'CRNRSTN_POTM',

            return (int) 7448;

        break;
        case 'CRNRSTN_PPAM':
            // '.ppam' => 'CRNRSTN_PPAM',

            return (int) 7449;

        break;
        case 'CRNRSTN_PPSM':
            // '.ppsm' => 'CRNRSTN_PPSM',

            return (int) 7450;

        break;
        case 'CRNRSTN_SLDM':
            // '.sldm' => 'CRNRSTN_SLDM',

            return (int) 7451;

        break;
        case 'CRNRSTN_PA':
            // '.pa' => 'CRNRSTN_PA',

            return (int) 7452;

        break;
        case 'CRNRSTN_MPP':
            // '.mpp' => 'CRNRSTN_MPP',

            return (int) 7453;

        break;
        case 'CRNRSTN_WRI':
            // '.wri' => 'CRNRSTN_WRI',

            return (int) 7454;

        break;
        case 'CRNRSTN_ODA':
            // '.oda' => 'CRNRSTN_ODA',

            return (int) 7455;

        break;
        case 'CRNRSTN_FLA':
            // '.fla' => 'CRNRSTN_FLA',

            return (int) 7456;

        break;
        case 'CRNRSTN_FLV':
            // '.flv' => 'CRNRSTN_FLV',

            return (int) 7457;

        break;
        case 'CRNRSTN_AI':
            // '.ai' => 'CRNRSTN_AI',

            return (int) 7458;

        break;
        case 'CRNRSTN_PSD':
            // '.psd' => 'CRNRSTN_PSD',

            return (int) 7459;

        break;
        case 'CRNRSTN_EPS':
            // '.eps' => 'CRNRSTN_EPS',

            return (int) 7460;

        break;
        case 'CRNRSTN_PS':
            // '.ps' => 'CRNRSTN_PS',

            return (int) 7461;

        break;
        case 'CRNRSTN_PART':
            // '.part' => 'CRNRSTN_PART',

            return (int) 7462;

        break;
        case 'CRNRSTN_PRT':
            // '.prt' => 'CRNRSTN_PRT',

            return (int) 7463;

        break;
        case 'CRNRSTN_SET':
            // '.set' => 'CRNRSTN_SET',

            return (int) 7464;

        break;
        case 'CRNRSTN_STL':
            // '.stl' => 'CRNRSTN_STL',

            return (int) 7465;

        break;
        case 'CRNRSTN_SOL':
            // '.sol' => 'CRNRSTN_SOL',

            return (int) 7466;

        break;
        case 'CRNRSTN_ST':
            // '.st' => 'CRNRSTN_ST',

            return (int) 7467;

        break;
        case 'CRNRSTN_STEP':
            // '.step' => 'CRNRSTN_STEP',

            return (int) 7468;

        break;
        case 'CRNRSTN_STP':
            // '.stp' => 'CRNRSTN_STP',

            return (int) 7469;

        break;
        case 'CRNRSTN_VDA':
            // '.vda' => 'CRNRSTN_VDA',

            return (int) 7470;

        break;
        case 'CRNRSTN_BCPIO':
            // '.bcpio' => 'CRNRSTN_BCPIO',

            return (int) 7471;

        break;
        case 'CRNRSTN_CPIO':
            // '.cpio' => 'CRNRSTN_CPIO',

            return (int) 7472;

        break;
        case 'CRNRSTN_DCR':
            // '.dcr' => 'CRNRSTN_DCR',

            return (int) 7473;

        break;
        case 'CRNRSTN_DIR':
            // '.dir' => 'CRNRSTN_DIR',

            return (int) 7474;

        break;
        case 'CRNRSTN_DXR':
            // '.dxr' => 'CRNRSTN_DXR',

            return (int) 7475;

        break;
        case 'CRNRSTN_DVI':
            // '.dvi' => 'CRNRSTN_DVI',

            return (int) 7476;

        break;
        case 'CRNRSTN_DWF':
            // '.dwf' => 'CRNRSTN_DWF',

            return (int) 7477;

        break;
        case 'CRNRSTN_HDF':
            // '.hdf' => 'CRNRSTN_HDF',

            return (int) 7478;

        break;
        case 'CRNRSTN_LATEX':
            // '.latex' => 'CRNRSTN_LATEX',

            return (int) 7479;

        break;
        case 'CRNRSTN_MIF':
            // '.mif' => 'CRNRSTN_MIF',

            return (int) 7480;

        break;
        case 'CRNRSTN_CDF':
            // '.cdf' => 'CRNRSTN_CDF',

            return (int) 7481;

        break;
        case 'CRNRSTN_NC':
            // '.nc' => 'CRNRSTN_NC',

            return (int) 7482;

        break;
        case 'CRNRSTN_SHAR':
            // '.shar' => 'CRNRSTN_SHAR',

            return (int) 7483;

        break;
        case 'CRNRSTN_SIT':
            // '.sit' => 'CRNRSTN_SIT',

            return (int) 7484;

        break;
        case 'CRNRSTN_SV4CPIO':
            // '.sv4cpio' => 'CRNRSTN_SV4CPIO',

            return (int) 7485;

        break;
        case 'CRNRSTN_SV4CRC':
            // '.sv4crc' => 'CRNRSTN_SV4CRC',

            return (int) 7486;

        break;
        case 'CRNRSTN_TCL':
            // '.tcl' => 'CRNRSTN_TCL',

            return (int) 7487;

        break;
        case 'CRNRSTN_TEXI':
            // '.texi' => 'CRNRSTN_TEXI',

            return (int) 7488;

        break;
        case 'CRNRSTN_TEXINFO':
            // '.texinfo' => 'CRNRSTN_TEXINFO',

            return (int) 7489;

        break;
        case 'CRNRSTN_ROFF':
            // '.roff' => 'CRNRSTN_ROFF',

            return (int) 7490;

        break;
        case 'CRNRSTN_T':
            // '.t' => 'CRNRSTN_T',

            return (int) 7491;

        break;
        case 'CRNRSTN_TR':
            // '.tr' => 'CRNRSTN_TR',

            return (int) 7492;

        break;
        case 'CRNRSTN_MAN':
            // '.man' => 'CRNRSTN_MAN',

            return (int) 7493;

        break;
        case 'CRNRSTN_ME':
            // '.me' => 'CRNRSTN_ME',

            return (int) 7494;

        break;
        case 'CRNRSTN_MS':
            // '.ms' => 'CRNRSTN_MS',

            return (int) 7495;

        break;
        case 'CRNRSTN_USTAR':
            // '.ustar' => 'CRNRSTN_USTAR',

            return (int) 7496;

        break;
        case 'CRNRSTN_SRC':
            // '.src' => 'CRNRSTN_SRC',

            return (int) 7497;

        break;
        case 'CRNRSTN_HLP':
            // '.hlp' => 'CRNRSTN_HLP',

            return (int) 7498;

        break;
        case 'CRNRSTN_AU':
            // '.au' => 'CRNRSTN_AU',

            return (int) 7499;

        break;
        case 'CRNRSTN_SND':
            // '.snd' => 'CRNRSTN_SND',

            return (int) 7500;

        break;
        case 'CRNRSTN_AIF':
            // '.aif' => 'CRNRSTN_AIF',

            return (int) 7501;

        break;
        case 'CRNRSTN_AIFC':
            // '.aifc' => 'CRNRSTN_AIFC',

            return (int) 7502;

        break;
        case 'CRNRSTN_AIFF':
            // '.aiff' => 'CRNRSTN_AIFF',

            return (int) 7503;

        break;
        case 'CRNRSTN_VOC':
            // '.voc' => 'CRNRSTN_VOC',

            return (int) 7504;

        break;
        case 'CRNRSTN_IEF':
            // '.ief' => 'CRNRSTN_IEF',

            return (int) 7505;

        break;
        case 'CRNRSTN_RAS':
            // '.ras' => 'CRNRSTN_RAS',

            return (int) 7506;

        break;
        case 'CRNRSTN_PNM':
            // '.pnm' => 'CRNRSTN_PNM',

            return (int) 7507;

        break;
        case 'CRNRSTN_PBM':
            // '.pbm' => 'CRNRSTN_PBM',

            return (int) 7508;

        break;
        case 'CRNRSTN_PGM':
            // '.pgm' => 'CRNRSTN_PGM',

            return (int) 7509;

        break;
        case 'CRNRSTN_PPM':
            // '.ppm' => 'CRNRSTN_PPM',

            return (int) 7510;

        break;
        case 'CRNRSTN_RGB':
            // '.rgb' => 'CRNRSTN_RGB',

            return (int) 7511;

        break;
        case 'CRNRSTN_XBM':
            // '.xbm' => 'CRNRSTN_XBM',

            return (int) 7512;

        break;
        case 'CRNRSTN_XPM':
            // '.xpm' => 'CRNRSTN_XPM',

            return (int) 7513;

        break;
        case 'CRNRSTN_XWD':
            // '.xwd' => 'CRNRSTN_XWD',

            return (int) 7514;

        break;
        case 'CRNRSTN_RTX':
            // '.rtx' => 'CRNRSTN_RTX',

            return (int) 7515;

        break;
        case 'CRNRSTN_ETX':
            // '.etx' => 'CRNRSTN_ETX',

            return (int) 7516;

        break;
        case 'CRNRSTN_SGM':
            // '.sgm' => 'CRNRSTN_SGM',

            return (int) 7517;

        break;
        case 'CRNRSTN_SGML':
            // '.sgml' => 'CRNRSTN_SGML',

            return (int) 7518;

        break;
        case 'CRNRSTN_VDO':
            // '.vdo' => 'CRNRSTN_VDO',

            return (int) 7519;

        break;
        case 'CRNRSTN_VIV':
            // '.viv' => 'CRNRSTN_VIV',

            return (int) 7520;

        break;
        case 'CRNRSTN_VIVO':
            // '.vivo' => 'CRNRSTN_VIVO',

            return (int) 7521;

        break;
        case 'CRNRSTN_ICE':
            // '.ice' => 'CRNRSTN_ICE',

            return (int) 7522;

        break;
        case 'CRNRSTN_SVR':
            // '.svr' => 'CRNRSTN_SVR',

            return (int) 7523;

        break;
        case 'CRNRSTN_WRL':
            // '.wrl' => 'CRNRSTN_WRL',

            return (int) 7524;

        break;
        case 'CRNRSTN_VRT':
            // '.vrt' => 'CRNRSTN_VRT',

            return (int) 7525;

        break;
        case 'CRNRSTN_EXE':
            // '.exe' => 'CRNRSTN_EXE',

            return (int) 7526;

        break;
        case 'CRNRSTN_BIT':
            // '.bit' => 'CRNRSTN_BIT',

            return (int) 7527;

        break;
        case 'CRNRSTN_PAGES':
            // '.pages' => 'CRNRSTN_PAGES',

            return (int) 7528;

        break;
        case 'CRNRSTN_KEY':
            // '.key' => 'CRNRSTN_KEY',

            return (int) 7529;

        break;
        case 'CRNRSTN_AFPHOTO':
            // '.afphoto' => 'CRNRSTN_AFPHOTO',

            return (int) 7530;

        break;
        case 'CRNRSTN_AFDESIGN':
            // '.afdesign' => 'CRNRSTN_AFDESIGN',

            return (int) 7531;

        break;
        case 'CRNRSTN_CDR':
            // '.cdr' => 'CRNRSTN_CDR',

            return (int) 7532;

        break;
        case 'CRNRSTN_CPT':
            // '.cpt' => 'CRNRSTN_CPT',

            return (int) 7533;

        break;

        /*
        5 :: Thursday, August 10, 2023 @ 1859 hrs.

        '.css' => 'CRNRSTN_CSS',
        '.csv' => 'CRNRSTN_CSV',
        '.txt' => 'CRNRSTN_TXT',
        '.sql' => 'CRNRSTN_SQL',
        '.bat' => 'CRNRSTN_BAT',
        '.php' => 'CRNRSTN_PHP',
        '.C' => 'CRNRSTN_C',
        '.cc' => 'CRNRSTN_CC',
        '.h' => 'CRNRSTN_H',
        '.rtf' => 'CRNRSTN_RTF',
        '.tex' => 'CRNRSTN_TEX',
        '.htm' => 'CRNRSTN_HTM',
        '.html' => 'CRNRSTN_HTML',
        '.shtml' => 'CRNRSTN_SHTML',
        '.xhtml' => 'CRNRSTN_XHTML',
        '.xml' => 'CRNRSTN_XML',
        '.xslt' => 'CRNRSTN_XSLT',
        '.xul' => 'CRNRSTN_XUL',
        '.json' => 'CRNRSTN_JSON',
        '.ics' => 'CRNRSTN_ICS',
        '.tsv' => 'CRNRSTN_TSV',
        '.jsonld' => 'CRNRSTN_JSONLD',
        '.mjs' => 'CRNRSTN_MJS',
        '.jar' => 'CRNRSTN_JAR',
        '.zip' => 'CRNRSTN_ZIP',
        '.zipx' => 'CRNRSTN_ZIPX',
        '.bz' => 'CRNRSTN_BZ',
        '.bz2' => 'CRNRSTN_BZ2',
        '.gz' => 'CRNRSTN_GZ',
        '.gzip' => 'CRNRSTN_GZIP',
        '.gtar' => 'CRNRSTN_GTAR',
        '.7z' => 'CRNRSTN_7Z',
        '.epub' => 'CRNRSTN_EPUB',
        '.tar' => 'CRNRSTN_TAR',
        '.otf' => 'CRNRSTN_OTF',
        '.woff' => 'CRNRSTN_WOFF',
        '.woff2' => 'CRNRSTN_WOFF2',
        '.ttf' => 'CRNRSTN_TTF',
        '.ico' => 'CRNRSTN_ICO',
        '.jpg' => 'CRNRSTN_JPG',
        '.jpe' => 'CRNRSTN_JPE',
        '.jpeg' => 'CRNRSTN_JPEG',
        '.jpg2' => 'CRNRSTN_JPG2',
        '.jif' => 'CRNRSTN_JIF',
        '.jfif' => 'CRNRSTN_JFIF',
        '.jfi' => 'CRNRSTN_JFI',
        '.gif' => 'CRNRSTN_GIF',
        '.bmp' => 'CRNRSTN_BMP',
        '.png' => 'CRNRSTN_PNG',
        '.svg' => 'CRNRSTN_SVG',
        '.tif' => 'CRNRSTN_TIF',
        '.tiff' => 'CRNRSTN_TIFF',
        '.webp' => 'CRNRSTN_WEBP',
        '.pic' => 'CRNRSTN_PIC',
        '.pict' => 'CRNRSTN_PICT',
        '.avif' => 'CRNRSTN_AVIF',
        '.mid' => 'CRNRSTN_MID',
        '.midi' => 'CRNRSTN_MIDI',
        '.aac' => 'CRNRSTN_AAC',
        '.oga' => 'CRNRSTN_OGA',
        '.mp1' => 'CRNRSTN_MP1',
        '.mp2' => 'CRNRSTN_MP2',
        '.m1a' => 'CRNRSTN_M1A',
        '.m2a' => 'CRNRSTN_M2A',
        '.mp3' => 'CRNRSTN_MP3',
        '.mpga' => 'CRNRSTN_MPGA',
        '.mpa' => 'CRNRSTN_MPA',
        '.mpv' => 'CRNRSTN_MPV',
        '.mpg' => 'CRNRSTN_MPG',
        '.ra' => 'CRNRSTN_RA',
        '.ram' => 'CRNRSTN_RAM',
        '.rmp' => 'CRNRSTN_RMP',
        '.dat' => 'CRNRSTN_DAT',
        '.wav' => 'CRNRSTN_WAV',
        '.wave' => 'CRNRSTN_WAVE',
        '.weba' => 'CRNRSTN_WEBA',
        '.3gp' => 'CRNRSTN_3GP',
        '.3g2' => 'CRNRSTN_3G2',
        '.opus' => 'CRNRSTN_OPUS',
        '.m3u' => 'CRNRSTN_M3U',
        '.ogv' => 'CRNRSTN_OGV',
        '.webm' => 'CRNRSTN_WEBM',
        '.mp4' => 'CRNRSTN_MP4',
        '.m4a' => 'CRNRSTN_M4A',
        '.m4p' => 'CRNRSTN_M4P',
        '.m4b' => 'CRNRSTN_M4B',
        '.m4r' => 'CRNRSTN_M4R',
        '.m4v' => 'CRNRSTN_M4V',
        '.mp3' => 'CRNRSTN_MP3',
        '.mpe' => 'CRNRSTN_MPE',
        '.mpeg' => 'CRNRSTN_MPEG',
        '.mpv2' => 'CRNRSTN_MPV2',
        '.m1v' => 'CRNRSTN_M1V',
        '.m2v' => 'CRNRSTN_M2V',
        '.mov' => 'CRNRSTN_MOV',
        '.qt' => 'CRNRSTN_QT',
        '.qif' => 'CRNRSTN_QIF',
        '.qti' => 'CRNRSTN_QTI',
        '.qtif' => 'CRNRSTN_QTIF',
        '.qtc' => 'CRNRSTN_QTC',
        '.movie' => 'CRNRSTN_MOVIE',
        '.mv' => 'CRNRSTN_MV',
        '.swf' => 'CRNRSTN_SWF',
        '.avi' => 'CRNRSTN_AVI',
        '.avs' => 'CRNRSTN_AVS',
        '.mjpg' => 'CRNRSTN_MJPG',
        '.ts' => 'CRNRSTN_TS',
        '.eot' => 'CRNRSTN_EOT',
        '.abw' => 'CRNRSTN_ABW',
        '.arc' => 'CRNRSTN_ARC',
        '.azw' => 'CRNRSTN_AZW',
        '.bin' => 'CRNRSTN_BIN',
        '.cmd' => 'CRNRSTN_CMD',
        '.btm' => 'CRNRSTN_BTM',
        '.cda' => 'CRNRSTN_CDA',
        '.csh' => 'CRNRSTN_CSH',
        '.odt' => 'CRNRSTN_ODT',
        '.odp' => 'CRNRSTN_ODP',
        '.ods' => 'CRNRSTN_ODS',
        '.pdf' => 'CRNRSTN_PDF',
        '.wks' => 'CRNRSTN_WKS',
        '.wps' => 'CRNRSTN_WPS',
        '.wpd' => 'CRNRSTN_WPD',
        '.doc' => 'CRNRSTN_DOC',
        '.word' => 'CRNRSTN_WORD',
        '.w6w' => 'CRNRSTN_W6W',
        '.xlsx' => 'CRNRSTN_XLSX',
        '.pptx' => 'CRNRSTN_PPTX',
        '.docx' => 'CRNRSTN_DOCX',
        '.docm' => 'CRNRSTN_DOCM',
        '.dotm' => 'CRNRSTN_DOTM',
        '.dotx' => 'CRNRSTN_DOTX',
        '.ppsx' => 'CRNRSTN_PPSX',
        '.potx' => 'CRNRSTN_POTX',
        '.sldx' => 'CRNRSTN_SLDX',
        '.vsd' => 'CRNRSTN_VSD',
        '.mpkg' => 'CRNRSTN_MPKG',
        '.ogx' => 'CRNRSTN_OGX',
        '.rar' => 'CRNRSTN_RAR',
        '.sh' => 'CRNRSTN_SH',
        '.dwg' => 'CRNRSTN_DWG',
        '.arj' => 'CRNRSTN_ARJ',
        '.asd' => 'CRNRSTN_ASD',
        '.asn' => 'CRNRSTN_ASN',
        '.ccad' => 'CRNRSTN_CCAD',
        '.drw' => 'CRNRSTN_DRW',
        '.dxf' => 'CRNRSTN_DXF',
        '.unv' => 'CRNRSTN_UNV',
        '.iges' => 'CRNRSTN_IGES',
        '.igs' => 'CRNRSTN_IGS',
        '.hqx' => 'CRNRSTN_HQX',
        '.mdb' => 'CRNRSTN_MDB',
        '.xla' => 'CRNRSTN_XLA',
        '.xls' => 'CRNRSTN_XLS',
        '.xlt' => 'CRNRSTN_XLT',
        '.xlm' => 'CRNRSTN_XLM',
        '.xlsm' => 'CRNRSTN_XLSM',
        '.xlsb' => 'CRNRSTN_XLSB',
        '.xlam' => 'CRNRSTN_XLAM',
        '.xltm' => 'CRNRSTN_XLTM',
        '.xlw' => 'CRNRSTN_XLW',
        '.pot' => 'CRNRSTN_POT',
        '.pps' => 'CRNRSTN_PPS',
        '.ppt' => 'CRNRSTN_PPT',
        '.pptm' => 'CRNRSTN_PPTM',
        '.potm' => 'CRNRSTN_POTM',
        '.ppam' => 'CRNRSTN_PPAM',
        '.ppsm' => 'CRNRSTN_PPSM',
        '.sldm' => 'CRNRSTN_SLDM',
        '.pa' => 'CRNRSTN_PA',
        '.mpp' => 'CRNRSTN_MPP',
        '.wri' => 'CRNRSTN_WRI',
        '.oda' => 'CRNRSTN_ODA',
        '.ai' => 'CRNRSTN_AI',
        '.eps' => 'CRNRSTN_EPS',
        '.ps' => 'CRNRSTN_PS',
        '.part' => 'CRNRSTN_PART',
        '.prt' => 'CRNRSTN_PRT',
        '.set' => 'CRNRSTN_SET',
        '.stl' => 'CRNRSTN_STL',
        '.sol' => 'CRNRSTN_SOL',
        '.st' => 'CRNRSTN_ST',
        '.step' => 'CRNRSTN_STEP',
        '.stp' => 'CRNRSTN_STP',
        '.vda' => 'CRNRSTN_VDA',
        '.bcpio' => 'CRNRSTN_BCPIO',
        '.cpio' => 'CRNRSTN_CPIO',
        '.dcr' => 'CRNRSTN_DCR',
        '.dir' => 'CRNRSTN_DIR',
        '.dxr' => 'CRNRSTN_DXR',
        '.dvi' => 'CRNRSTN_DVI',
        '.dwf' => 'CRNRSTN_DWF',
        '.hdf' => 'CRNRSTN_HDF',
        '.js' => 'CRNRSTN_JS',
        '.latex' => 'CRNRSTN_LATEX',
        '.mif' => 'CRNRSTN_MIF',
        '.cdf' => 'CRNRSTN_CDF',
        '.nc' => 'CRNRSTN_NC',
        '.shar' => 'CRNRSTN_SHAR',
        '.sit' => 'CRNRSTN_SIT',
        '.sv4cpio' => 'CRNRSTN_SV4CPIO',
        '.sv4crc' => 'CRNRSTN_SV4CRC',
        '.tcl' => 'CRNRSTN_TCL',
        '.texi' => 'CRNRSTN_TEXI',
        '.texinfo' => 'CRNRSTN_TEXINFO',
        '.roff' => 'CRNRSTN_ROFF',
        '.t' => 'CRNRSTN_T',
        '.tr' => 'CRNRSTN_TR',
        '.man' => 'CRNRSTN_MAN',
        '.me' => 'CRNRSTN_ME',
        '.ms' => 'CRNRSTN_MS',
        '.ustar' => 'CRNRSTN_USTAR',
        '.src' => 'CRNRSTN_SRC',
        '.hlp' => 'CRNRSTN_HLP',
        '.au' => 'CRNRSTN_AU',
        '.snd' => 'CRNRSTN_SND',
        '.aif' => 'CRNRSTN_AIF',
        '.aifc' => 'CRNRSTN_AIFC',
        '.aiff' => 'CRNRSTN_AIFF',
        '.voc' => 'CRNRSTN_VOC',
        '.ief' => 'CRNRSTN_IEF',
        '.ras' => 'CRNRSTN_RAS',
        '.pnm' => 'CRNRSTN_PNM',
        '.pbm' => 'CRNRSTN_PBM',
        '.pgm' => 'CRNRSTN_PGM',
        '.ppm' => 'CRNRSTN_PPM',
        '.rgb' => 'CRNRSTN_RGB',
        '.xbm' => 'CRNRSTN_XBM',
        '.xpm' => 'CRNRSTN_XPM',
        '.xwd' => 'CRNRSTN_XWD',
        '.rtx' => 'CRNRSTN_RTX',
        '.etx' => 'CRNRSTN_ETX',
        '.sgm' => 'CRNRSTN_SGM',
        '.sgml' => 'CRNRSTN_SGML',
        '.vdo' => 'CRNRSTN_VDO',
        '.viv' => 'CRNRSTN_VIV',
        '.vivo' => 'CRNRSTN_VIVO',
        '.ice' => 'CRNRSTN_ICE',
        '.svr' => 'CRNRSTN_SVR',
        '.wrl' => 'CRNRSTN_WRL',
        '.vrt' => 'CRNRSTN_VRT',
        '.exe' => 'CRNRSTN_EXE',
        '.bit' => 'CRNRSTN_BIT',
        '.pages' => 'CRNRSTN_PAGES',
        '.key' => 'CRNRSTN_KEY',
        '.afphoto' => 'CRNRSTN_AFPHOTO',
        '.afdesign' => 'CRNRSTN_AFDESIGN'

        'text/css' => array('.css' => 'CRNRSTN_CSS'),
        'text/csv' => array('.csv' => 'CRNRSTN_CSV', 
        '.txt' => 'CRNRSTN_TXT'),
        'text/plain' => array('.txt' => 'CRNRSTN_TXT', 
        '.C' => 'CRNRSTN_C', '.cc' => 'CRNRSTN_CC', '.h' => 'CRNRSTN_H'),
        'application/rtf' => array('.rtf' => 'CRNRSTN_RTF'),
        'application/x-tex' => array('.tex' => 'CRNRSTN_TEX'),
        'text/html' => array('.htm' => 'CRNRSTN_HTM', 
        '.html' => 'CRNRSTN_HTML', '.shtml' => 'CRNRSTN_SHTML'),
        'application/xhtml+xml' => array('.xhtml' => 'CRNRSTN_XHTML'),
        'application/xml' => array('.xml' => 'CRNRSTN_XML'),
        'application/vnd.mozilla.xul+xml' => array('.xul' => 'CRNRSTN_XUL'),
        'application/vnd.google-apps.script+json' => array('.json' => 'CRNRSTN_JSON'),
        'text/calendar' => array('.ics' => 'CRNRSTN_ICS'),
        'text/tab-separated-values' => array('.tsv' => 'CRNRSTN_TSV'),
        'application/json' => array('.json' => 'CRNRSTN_JSON'),
        'application/ld+json' => array('.jsonld' => 'CRNRSTN_JSONLD'),
        'text/javascript' => array('.mjs' => 'CRNRSTN_MJS'),
        'application/java-archive' => array('.jar' => 'CRNRSTN_JAR'),
        'application/zip' => array('.zip', 'CRNRSTN_ZIP'),
        'multipart/x-zip' => array('.zip' => 'CRNRSTN_ZIP', 
        '.zipx' => 'CRNRSTN_ZIPX'),
        'application/x-bzip' => array('.bz' => 'CRNRSTN_BZ'),
        'application/x-bzip2' => array('.bz2' => 'CRNRSTN_BZ2'),
        'application/gzip' => array('.gz' => 'CRNRSTN_GZ'),
        'application/x-gzip' => array('.gz' => 'CRNRSTN_GZ', 
        '.gzip' => 'CRNRSTN_GZIP'),
        'multipart/x-gzip' => array('.gzip' => 'CRNRSTN_GZIP'),
        'application/x-gtar' => array('.gtar' => 'CRNRSTN_GTAR'),
        'application/x-7z-compressed' => array('.7z' => 'CRNRSTN_7Z'),
        'application/epub+zip' => array('.epub' => 'CRNRSTN_EPUB'),
        'application/x-tar' => array('.tar' => 'CRNRSTN_TAR'), 
        'font/otf' => array('.otf' => 'CRNRSTN_OTF'),
        'font/woff' => array('.woff' => 'CRNRSTN_WOFF'), 
        'font/woff2' => array('.woff2' => 'CRNRSTN_WOFF2'),
        'font/ttf' => array('.ttf' => 'CRNRSTN_TTF'), 
        'image/x-icon' => array('.ico' => 'CRNRSTN_ICO'),
        'image/vnd.microsoft.icon' => array('.ico' => 'CRNRSTN_ICO'),
        'image/jpeg' => array('.jpg' => 'CRNRSTN_JPG', 
        '.jpe' => 'CRNRSTN_JPE', 
        '.jpeg' => 'CRNRSTN_JPEG', '.jpg2' => 'CRNRSTN_JPG2', 
        '.jif' => 'CRNRSTN_JIF', '.jfif' => 'CRNRSTN_JFIF', 
        '.jfi' => 'CRNRSTN_JFI'),
        'image/gif' => array('.gif' => 'CRNRSTN_GIF'), 
        'image/bmp' => array('.bmp' => 'CRNRSTN_BMP'),
        'image/x-windows-bmp' => array('.bmp' => 'CRNRSTN_BMP'), 
        'image/png' => array('.png' => 'CRNRSTN_PNG'),
        'image/svg+xml' => array('.svg' => 'CRNRSTN_SVG'), 
        'image/tiff' => array('.tif' => 'CRNRSTN_TIF', 
        '.tiff' => 'CRNRSTN_TIFF'),
        'image/x-tiff' => array('.tif' => 'CRNRSTN_TIF', 
        '.tiff' => 'CRNRSTN_TIFF'),
        'image/webp' => array('.webp' => 'CRNRSTN_WEBP'),
        'image/pict' => array('.pic' => 'CRNRSTN_PIC', 
        '.pict' => 'CRNRSTN_PICT'),
        'image/avif' => array('.avif' => 'CRNRSTN_AVIF'),
        'application/x-midi' => array('.mid' => 'CRNRSTN_MID', 
        '.midi' => 'CRNRSTN_MIDI'),
        'audio/aac' => array('.aac' => 'CRNRSTN_AAC'), 
        'audio/ogg' => array('.oga' => 'CRNRSTN_OGA'),
        'audio/mpeg' => array('.mp1' => 'CRNRSTN_MP1', 
        '.mp2' => 'CRNRSTN_MP2', '.m1a' => 'CRNRSTN_M1A', 
        '.m2a' => 'CRNRSTN_M2A', '.mp3' => 'CRNRSTN_MP3', 
        '.mpga' => 'CRNRSTN_MPGA', 
        '.mpa' => 'CRNRSTN_MPA', '.mpg' => 'CRNRSTN_MPG'),
        'audio/x-mpeg' => array('.mp1' => 'CRNRSTN_MP1', 
        '.mp2' => 'CRNRSTN_MP2', '.mp3' => 'CRNRSTN_MP3'),
        'audio/x-pn-realaudio' => array('.ra' => 'CRNRSTN_RA', 
        '.ram' => 'CRNRSTN_RAM'),
        'audio/x-pn-realaudio-plugin' => array('.ra' => 'CRNRSTN_RA', 
        '.rmp' => 'CRNRSTN_RMP'),
        'audio/x-realaudio' => array('.ra' => 'CRNRSTN_RA'),
        'audio/wav' => array('.wav' => 'CRNRSTN_WAV', 
        '.wave' => 'CRNRSTN_WAVE'),
        'audio/x-wav' => array('.wav' => 'CRNRSTN_WAV', 
        '.wave' => 'CRNRSTN_WAVE'),
        'audio/webm' => array('.weba' => 'CRNRSTN_WEBA'),
        'audio/3gpp' => array('.3gp' => 'CRNRSTN_3GP'), 
        'audio/3gpp2' => array('.3g2' => 'CRNRSTN_3G2'),
        'audio/opus' => array('.opus' => 'CRNRSTN_OPUS'), 
        'audio/x-mpequrl' => array('.m3u' => 'CRNRSTN_M3U'),
        'audio/midi' => array('.mid' => 'CRNRSTN_MID', 
        '.midi' => 'CRNRSTN_MIDI'),
        'audio/x-midi' => array('.mid' => 'CRNRSTN_MID', 
        '.midi' => 'CRNRSTN_MIDI'),
        'audio/x-mid' => array('.mid' => 'CRNRSTN_MID', 
        '.midi' => 'CRNRSTN_MIDI'),
        'music/crescendo' => array('.mid' => 'CRNRSTN_MID', 
        '.midi' => 'CRNRSTN_MIDI'),
        'x-music/x-midi' => array('.mid' => 'CRNRSTN_MID', 
        '.midi' => 'CRNRSTN_MIDI'),
        'audio/mpeg3' => array('.mp3' => 'CRNRSTN_MP3'), 
        'audio/x-mpeg-3' => array('.mp3' => 'CRNRSTN_MP3'),
        'video/ogg' => array('.ogv' => 'CRNRSTN_OGV'), 
        'video/webm' => array('.webm' => 'CRNRSTN_WEBM'),
        'video/3gpp' => array('.3gp' => 'CRNRSTN_3GP'), 
        'video/3gpp2' => array('.3g2' => 'CRNRSTN_3G2'),
        'video/mp4' => array('.mp4' => 'CRNRSTN_MP4', 
        '.m4a' => 'CRNRSTN_M4A', '.m4p' => 'CRNRSTN_M4P', 
        '.m4b' => 'CRNRSTN_M4B', '.m4r' => 'CRNRSTN_M4R', 
        '.m4v' => 'CRNRSTN_M4V'),
        'video/mpeg' => array('.mp1' => 'CRNRSTN_MP1', 
        '.mp2' => 'CRNRSTN_MP2', 'mp3' => 'CRNRSTN_MP3', 
        '.mpa' => 'CRNRSTN_MPA', '.mpe' => 'CRNRSTN_MPE', 
        '.mpeg' => 'CRNRSTN_MPEG', '.mpg' => 'CRNRSTN_MPG', 
        '.mpv' => 'CRNRSTN_MPV', '.mpv2' => 'CRNRSTN_MPV2', 
        '.m1v' => 'CRNRSTN_M1V', '.m2v' => 'CRNRSTN_M2V'),
        'video/quicktime' => array('.mov' => 'CRNRSTN_MOV', 
        '.qt' => 'CRNRSTN_QT'),
        'image/x-quicktime' => array('.qif' => 'CRNRSTN_QIF', 
        '.qti' => 'CRNRSTN_QTI', '.qtif' => 'CRNRSTN_QTIF'),
        'video/x-qtc' => array('.qtc' => 'CRNRSTN_QTC'),
        'video/x-sgi-movie' => array('.movie' => 'CRNRSTN_MOVIE', 
        '.mv' => 'CRNRSTN_MV'),
        'application/x-shockwave-flash' => array('.swf' => 'CRNRSTN_SWF'),
        'application/x-troff-msvideo' => array('.avi' => 'CRNRSTN_AVI'),
        'video/avi' => array('.avi' => 'CRNRSTN_AVI'),
        'video/msvideo' => array('.avi' => 'CRNRSTN_AVI'), 
        'video/x-msvideo' => array('.avi' => 'CRNRSTN_AVI'),
        'video/avs-video' => array('.avs' => 'CRNRSTN_AVS'),
        'video/x-motion-jpeg' => array('.mjpg' => 'CRNRSTN_MJPG'),
        'video/x-mpeg' => array('.mp1' => 'CRNRSTN_MP1', 
        '.mp2' => 'CRNRSTN_MP2', '.mp3' => 'CRNRSTN_MP3'),
        'video/x-mpeq2a' => array('.mp2' => 'CRNRSTN_MP2'), 
        'video/mp2t' => array('.ts' => 'CRNRSTN_TS'),
        'application/vnd.ms-fontobject' => array('.eot' => 'CRNRSTN_EOT'),
        'application/x-abiword' => array('.abw' => 'CRNRSTN_ABW'),
        'application/x-freearc' => array('.arc' => 'CRNRSTN_ARC'),
        'application/vnd.amazon.ebook' => array('.azw' => 'CRNRSTN_AZW'),
        'application/octet-stream' => array('.bin' => 'CRNRSTN_BIN'),
        'application/bat' => array('.bat' => 'CRNRSTN_BAT', 
        '.cmd' => 'CRNRSTN_CMD', '.btm' => 'CRNRSTN_BTM'),
        'application/x-bat' => array('.bat' => 'CRNRSTN_BAT', 
        '.cmd' => 'CRNRSTN_CMD', '.btm' => 'CRNRSTN_BTM'),
        'application/x-msdos-program' => array('.bat' => 'CRNRSTN_BAT', 
        '.cmd' => 'CRNRSTN_CMD', '.btm' => 'CRNRSTN_BTM'),
        'application/x-cdf' => array('.cda' => 'CRNRSTN_CDA'),
        'application/x-csh' => array('.csh' => 'CRNRSTN_CSH'),
        'application/vnd.oasis.opendocument.text' => array('.odt' => 'CRNRSTN_ODT'),
        'application/vnd.oasis.opendocument.presentation' => array('.odp' => 'CRNRSTN_ODP'),
        'application/vnd.oasis.opendocument.spreadsheet' => array('.ods' => 'CRNRSTN_ODS'),
        'application/x-vnd.oasis.opendocument.spreadsheet' => array('.ods' => 'CRNRSTN_ODS'),
        'application/pdf' => array('.pdf' => 'CRNRSTN_PDF'),
        'application/vnd.ms-works' => array('.wks' => 'CRNRSTN_WKS', 
        '.wps' => 'CRNRSTN_WPS'),
        'application/vnd.wordperfect' => array('.wpd' => 'CRNRSTN_WPD'),
        'application/vnd.ms-excel' => array('.xls' => 'CRNRSTN_XLS'),
        'application/msword' => array('.doc' => 'CRNRSTN_DOC', 
        '.docm' => 'CRNRSTN_DOCM', '.docx' => 'CRNRSTN_DOCX', 
        '.dotx' => 'CRNRSTN_DOTX', '.dotm' => 'CRNRSTN_DOTM', 
        '.word' => 'CRNRSTN_WORD', '.w6w' => 'CRNRSTN_W6W'),
        'application/vnd.ms-powerpoint' => array('.pot' => 'CRNRSTN_POT', 
        '.pps' => 'CRNRSTN_PPS', '.ppt' => 'CRNRSTN_PPT', '.pptm' => 'CRNRSTN_PPTM', 
        '.potm' => 'CRNRSTN_POTM', '.potx' => 'CRNRSTN_POTX', 
        '.ppam' => 'CRNRSTN_PPAM', '.ppsm' => 'CRNRSTN_PPSM', 
        '.sldm' => 'CRNRSTN_SLDM', '.sldx' => 'CRNRSTN_SLDX', 
        '.pa' => 'CRNRSTN_PA'),
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => array('.xlsx' => 'CRNRSTN_XLSX'),
        'application/vnd.openxmlformats-officedocument.presentationml.presentation' => array('.pptx' => 'CRNRSTN_PPTX'),
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => array(
        '.doc' => 'CRNRSTN_DOC', '.docm' => 'CRNRSTN_DOCM', '.docx' => 'CRNRSTN_DOCX', 
        '.dotx' => 'CRNRSTN_DOTX', '.dotm' => 'CRNRSTN_DOTM', '.word' => 'CRNRSTN_WORD', 
        '.w6w' => 'CRNRSTN_W6W'),
        'application/vnd.openxmlformats-officedocument.presentationml.slideshow' => array('.ppsx' => 'CRNRSTN_PPSX'),
        'application/vnd.visio' => array('.vsd' => 'CRNRSTN_VSD'),
        'application/vnd.apple.installer+xml' => array('.mpkg' => 'CRNRSTN_MPKG'),
        'application/ogg' => array('.ogx' => 'CRNRSTN_OGX'), 
        'application/x-httpd-php' => array('.php' => 'CRNRSTN_PHP'),
        'application/vnd.rar' => array('.rar' => 'CRNRSTN_RAR'),
        'application/x-sh' => array('.sh' => 'CRNRSTN_SH'), 
        'application/acad' => array('.dwg' => 'CRNRSTN_DWG'),
        'application/arj' => array('.arj' => 'CRNRSTN_ARJ'),
        'application/astound' => array('.asd' => 'CRNRSTN_ASD', 
        '.asn' => 'CRNRSTN_ASN'),
        'application/clariscad' => array('.ccad' => 'CRNRSTN_CCAD'),
        'application/drafting' => array('.drw' => 'CRNRSTN_DRW'), 
        'application/dxf' => array('.dxf' => 'CRNRSTN_DXF'),
        'application/i-deas' => array('.unv' => 'CRNRSTN_UNV'),
        'application/iges' => array('.iges' => 'CRNRSTN_IGES', '.igs' => 'CRNRSTN_IGS'),
        'application/mac-binhex40' => array('.hqx' => 'CRNRSTN_HQX'),
        'application/msaccess' => array('.mdb' => 'CRNRSTN_MDB'),
        'application/msexcel' => array('.xla' => 'CRNRSTN_XLA', 
        '.xls' => 'CRNRSTN_XLS', '.xlt' => 'CRNRSTN_XLT', '.xlw' => 'CRNRSTN_XLW', 
        '.xlm' => 'CRNRSTN_XLM', '.xlsm' => 'CRNRSTN_XLSM', '.xlsb' => 'CRNRSTN_XLSB', 
        '.xlam' => 'CRNRSTN_XLAM', '.xltm' => 'CRNRSTN_XLTM'),
        'application/mspowerpoint' => array('.pot' => 'CRNRSTN_POT', 
        '.pps' => 'CRNRSTN_PPS', '.ppt' => 'CRNRSTN_PPT', '.pptm' => 'CRNRSTN_PPTM', 
        '.potm' => 'CRNRSTN_POTM', '.potx' => 'CRNRSTN_POTX', 
        '.ppam' => 'CRNRSTN_PPAM', 
        '.ppsm' => 'CRNRSTN_PPSM', '.sldm' => 'CRNRSTN_SLDM', 
        '.sldx' => 'CRNRSTN_SLDX', '.pa' => 'CRNRSTN_PA'),
        'application/msproject' => array('.mpp' => 'CRNRSTN_MPP'),
        'application/mswrite' => array('.wri' => 'CRNRSTN_WRI'), 
        'application/oda' => array('.oda' => 'CRNRSTN_ODA'),
        'application/postscript' => array('.ai' => 'CRNRSTN_AI', 
        '.eps' => 'CRNRSTN_EPS', '.ps' => 'CRNRSTN_PS'),
        'application/pro_eng' => array('.part' => 'CRNRSTN_PART', 
        '.prt' => 'CRNRSTN_PRT'),
        'application/set' => array('.set' => 'CRNRSTN_SET'), 
        'application/sla' => array('.stl' => 'CRNRSTN_STL'),
        'application/solids' => array('.sol' => 'CRNRSTN_SOL'),
        'application/STEP' => array('.st' => 'CRNRSTN_ST', 
        '.step' => 'CRNRSTN_STEP', '.stp' => 'CRNRSTN_STP'),
        'application/vda' => array('.vda' => 'CRNRSTN_VDA'),
        'application/x-bcpio' => array('.bcpio' => 'CRNRSTN_BCPIO'),
        'application/x-cpio' => array('.cpio' => 'CRNRSTN_CPIO'),
        'application/x-director' => array('.dcr' => 'CRNRSTN_DCR', 
        '.dir' => 'CRNRSTN_DIR', '.dxr' => 'CRNRSTN_DXR'),
        'application/x-dvi' => array('.dvi' => 'CRNRSTN_DVI'),
        'application/x-dwf' => array('.dwf' => 'CRNRSTN_DWF'), 
        'application/x-hdf' => array('.hdf' => 'CRNRSTN_HDF'),
        'application/x-javascript' => array('.js' => 'CRNRSTN_JS'),
        'application/x-latex' => array('.latex' => 'CRNRSTN_LATEX'),
        'application/x-macbinary' => array('.bin' => 'CRNRSTN_BIN'),
        'application/x-mif' => array('.mif' => 'CRNRSTN_MIF'),
        'application/x-netcdf' => array('.cdf' => 'CRNRSTN_CDF', 
        '.nc' => 'CRNRSTN_NC'),
        'application/x-shar' => array('.shar' => 'CRNRSTN_SHAR'),
        'application/x-stuffit' => array('.sit' => 'CRNRSTN_SIT'),
        'application/x-sv4cpio' => array('.sv4cpio' => 'CRNRSTN_SV4CPIO'),
        'application/x-sv4crc' => array('.sv4crc' => 'CRNRSTN_SV4CRC'),
        'application/x-tcl' => array('.tcl' => 'CRNRSTN_TCL'),
        'application/x-texinfo' => array('.texi' => 'CRNRSTN_TEXI', 
        '.texinfo' => 'CRNRSTN_TEXINFO'),
        'application/x-troff' => array('.roff' => 'CRNRSTN_ROFF', 
        '.t' => 'CRNRSTN_T', '.tr' => 'CRNRSTN_TR'),
        'application/x-troff-man' => array('.man' => 'CRNRSTN_MAN'),
        'application/x-troff-me' => array('.me' => 'CRNRSTN_ME'),
        'application/x-troff-ms' => array('.ms' => 'CRNRSTN_MS'),
        'application/x-ustar' => array('.ustar' => 'CRNRSTN_USTAR'),
        'application/x-wais-source' => array('.src' => 'CRNRSTN_SRC'),
        'application/x-winhelp' => array('.hlp' => 'CRNRSTN_HLP'),
        'audio/basic' => array('.au' => 'CRNRSTN_AU', '.snd' => 'CRNRSTN_SND'),
        'audio/x-aiff' => array('.aif' => 'CRNRSTN_AIF', 
        '.aifc' => 'CRNRSTN_AIFC', '.aiff' => 'CRNRSTN_AIFF'),
        'audio/x-voice' => array('.voc' => 'CRNRSTN_VOC'), 
        'image/ief' => array('.ief' => 'CRNRSTN_IEF'),
        'image/x-cmu-raster' => array('.ras' => 'CRNRSTN_RAS'),
        'image/x-portable-anymap' => array('.pnm' => 'CRNRSTN_PNM'),
        'image/x-portable-bitmap' => array('.pbm' => 'CRNRSTN_PBM'),
        'image/x-portable-graymap' => array('.pgm' => 'CRNRSTN_PGM'),
        'image/x-portable-pixmap' => array('.ppm' => 'CRNRSTN_PPM'),
        'image/x-rgb' => array('.rgb' => 'CRNRSTN_RGB'),
        'image/x-xbitmap' => array('.xbm' => 'CRNRSTN_XBM'), 
        'image/x-xpixmap' => array('.xpm' => 'CRNRSTN_XPM'),
        'image/x-xwindowdump' => array('.xwd' => 'CRNRSTN_XWD'),
        'text/richtext' => array('.rtx' => 'CRNRSTN_RTX'), 
        'text/x-setext' => array('.etx' => 'CRNRSTN_ETX'),
        'text/x-sgml' => array('.sgm' => 'CRNRSTN_SGM', 
        '.sgml' => 'CRNRSTN_SGML'),
        'video/vdo' => array('.vdo' => 'CRNRSTN_VDO'),
        'video/vivo' => array('.viv' => 'CRNRSTN_VIV', 
        '.vivo' => 'CRNRSTN_VIVO'),
        'x-conference/x-cooltalk' => array('.ice' => 'CRNRSTN_ICE'),
        'x-world/x-svr' => array('.svr' => 'CRNRSTN_SVR'), 
        'x-world/x-vrml' => array('.wrl' => 'CRNRSTN_WRL'),
        'x-world/x-vrt' => array('.vrt' => 'CRNRSTN_VRT'));

        */

        /*
        v1.13.6 Downloads (Right-click, and use "Save As")
        ASSET MAPPED ::
        //==== ==== ==== ==== ==== ==== ==== ==== ====
        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD
        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD
            UMD (Development)	68.4 KB, Uncompressed with Bountiful Comments (Source Map)
            UMD (Production)	7.48 KB, Minified and Gzipped (Source Map)

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM
        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM
            ESM (Development)	65.9 KB, Uncompressed with Plentiful Comments (Source Map)
            ESM (Production)	8.59 KB, Minified and Gzipped (Source Map)

        EDGE ::
        //==== ==== ==== ==== ==== ==== ==== ==== ====
        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE
        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE

        CDN ::
        v1.13.6 CDN URLs (Use with <script src="..."></script>)
        //==== ==== ==== ==== ==== ==== ==== ==== ====
        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN
            https://unpkg.com/underscore@1.13.6/underscore-umd-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN
            https://unpkg.com/underscore@1.13.6/underscore-esm-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG
            https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG
            https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-esm-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN
            https://pagecdn.io/lib/underscore/1.13.6/underscore-umd-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN
            https://pagecdn.io/lib/underscore/1.13.6/underscore-esm-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS
            https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.6/underscore-umd-min.js

        CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS
            https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.6/underscore-esm-min.js

        */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 17601-19000
         *
         */
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY':

            return (int) 17601;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_4_0_0':

            return (int) 17648;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_3_7_0':

            return (int) 17602;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_3_6_1':

            return (int) 17603;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_2_2_4':

            return (int) 17604;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_1_12_4':

            return (int) 17605;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1':

            return (int) 17606;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_UI':

            return (int) 17607;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_14_2':

            return (int) 17649;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_13_2':

            return (int) 17608;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1':

            return (int) 17609;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE':

            return (int) 17610;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE_1_4_5':

            return (int) 17650;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS':

            return (int) 17611;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_12_0':

            return (int) 17647;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_11_3':

            return (int) 17612;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_10_0':

            return (int) 17613;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY':

            return (int) 17614;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_03_3':

            return (int) 17615;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_REACT_CDN':

            return (int) 17616;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_REACT_CDN_18_2_0':

            return (int) 17617;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN':

            return (int) 17618;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN_18_2_0':

            return (int) 17619;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN':

            return (int) 17620;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN_2_2_2':

            return (int) 17621;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_BACKBONE':

            return (int) 17622;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_BACKBONE_1_4_1':
            /* Added Backbone JS. 
             * 5 :: Tuesday, June 6, 2023 0548 hrs.
             *
             */

            return (int) 17623;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD':

            return (int) 17624;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD':

            return (int) 17625;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM':

            return (int) 17626;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM':

            return (int) 17627;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE':

            return (int) 17628;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE':

            return (int) 17629;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN':

            return (int) 17630;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN':

            return (int) 17631;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG':

            return (int) 17632;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG':

            return (int) 17633;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN':

            return (int) 17634;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN':

            return (int) 17635;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS':

            return (int) 17636;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS':

            return (int) 17637;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_PROTOTYPE':

            return (int) 17638;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_PROTOTYPE_1_7_3':

            return (int) 17639;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS':

            return (int) 17640;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS_1_9_0':

            return (int) 17651;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_PROTOTYPE_MOOFX':

            return (int) 17641;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_SWFOBJECT_DOT_JS':

            return (int) 17642;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE':

            return (int) 17643;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE_1_6_0':

            return (int) 17644;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE':

            return (int) 17645;

        break;
        case 'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE_1_6_0':

            return (int) 17646;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID':

            return (int) 18000;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM':

            return (int) 18001;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL':

            return (int) 18002;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL':

            return (int) 18003;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL':

            return (int) 18004;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL_RTL':

            return (int) 18005;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL_RTL':

            return (int) 18006;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL_RTL':

            return (int) 18007;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_RTL':

            return (int) 18008;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_FOUNDATION':

            return (int) 18009;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_FOUNDATION_6_7_5':

            return (int) 18010;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE':

            return (int) 18011;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE_8_0_0':

            return (int) 18012;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM':

            return (int) 18013;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC':

            return (int) 18014;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET':

            return (int) 18015;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET_RTL':

            return (int) 18016;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RTL':

            return (int) 18017;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT':

            return (int) 18018;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT_RTL':

            return (int) 18019;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID':

            return (int) 18020;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_SKELETON':

            return (int) 18021;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_RWDGRID':

            return (int) 18022;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_RWDGRID_2_0':

            return (int) 18023;

        break;
        case 'CRNRSTN_CSS_FRAMEWORK_THIS_IS_DALLAS_SIMPLE_GRID':

            return (int) 18024;

        break;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 8590-8649. 
         * Resource permission 
         * flags for CLR-SSL 
         * system resources. 
         *
         */
        case 'CRNRSTN_RESOURCE_ALL':

            return (int) 8590;

        break;
        case 'CRNRSTN_RESOURCE_BASSDRIVE':

            return (int) 8591;

        break;
        case 'CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE':

            return (int) 8592;

        break;
        case 'CRNRSTN_RESOURCE_CSS_VALIDATOR':

            return (int) 8593;

        break;
        case 'CRNRSTN_RESOURCE_DOCUMENTATION':

            return (int) 8594;

        break;
        case 'CRNRSTN_RESOURCE_DEEP_LINK':

            return (int) 8595;

        break;
        case 'CRNRSTN_CREATIVE_EMBED':

            return (int) 8596;

        break;
        case 'CRNRSTN_RESOURCE_IMAGE':

            return (int) 8597;

        break;
        case 'CRNRSTN_RESOURCE_DOCUMENT':

            return (int) 8598;

        break;
        case 'CRNRSTN_RESOURCE_OPENSOURCE':

            return (int) 8599;

        break;
        case 'CRNRSTN_RESOURCE_NEWS_SYNDICATION':

            return (int) 8600;

        break;
        case 'CRNRSTN_RESOURCE_ELECTRUM':

            return (int) 8601;

        break;
        case 'CRNRSTN_RESOURCE_THIRDPARTY':

            return (int) 8602;

        break;
        case 'CRNRSTN_RESOURCE_FOOTER':

            return (int) 8603;

        break;
        default:

             return false;

        break;

    }

}