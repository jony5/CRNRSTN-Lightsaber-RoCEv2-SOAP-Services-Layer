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
 * RESOURCE DEFINITION :: _crnrstn_settings
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Monday, July 1, 2024 @ 2020 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com/
 * TITLE               :: The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer Static
 *                        System Data Object
 *                        Initialization Global
 *                        Function Definition
 * DESCRIPTION         :: The CRNRSTN :: Lightsaber 
 *                        SOAP Services Layer static 
 *                        system data global 
 *                        function definition for 
 *                        loading requested system
 *                        setting(s) and/or
 *                        configuration file meta
 *                        data information
 *                        into memory.
 *
 *
 *                        5
 *
 *                        Monday, July 29, 2024 @ 1523 hrs.
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
 * @return mixed 
 * @access public
 *
 */
function _crnrstn_settings(
         $name, 
         $oCRNRSTN = NULL)
{

    switch($name){
        case 'R_framework_directory':

            //return '_lightbox_helper';
            return '_crnrstn';

        break;
        case 'http_web_root':

            return $oCRNRSTN->current_location();

//            switch($_SERVER['SERVER_NAME']){
//                case '172.16.225.128':
//
//                    $tmp_application_directory = 'lightbox_helper';
//
//                    return 'http://172.16.225.128/' . $tmp_application_directory . '/';
//
//                break;
//                default:
//
//                    return 'http://172.16.225.128/lightbox_helper/';
//
//                break;
//
//            }

        break;
        //case 'channel_integer_syntax_ARRAY':
        case 'channel_ids':

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Initialize CRNRSTN :: Lightsaber RoCEv2 SOAP 
             * Services Layer (CLR-SSL) Multi-Channel 
             * Decoupled Data Object (MC-DDO) Syntax 
             * support structures. 
             *
             * 5 :: Thursday, October 12, 2023 @ 0734 hrs.
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Added CRNRSTN_CHANNEL_RDMA => 'M' 
             *       and CRNRSTN_CHANNEL_FORM => 'T' 
             *       to channel integer syntax array 
             *       settings data output. 
             *       5 :: Wednesday, February 18, 2026 @ 0540 hrs.
             *
             */
            // Note: $R_data is private static.
            return array($oCRNRSTN->R_data['int_flag']['R_channel_GET']      => 'G', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_POST']     => 'P', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_SESSION']  => 'H', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_SSDTLA']   => 'S', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_PSSDTLA']  => 'J', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_FORM']     => 'T', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_COOKIE']   => 'C', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_DATABASE'] => 'D', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_RUNTIME']  => 'R', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_SOAP']     => 'O', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_RDMA']     => 'M', 
                         $oCRNRSTN->R_data['int_flag']['R_channel_FILE']     => 'F');

        break;
        case 'crnrstn_config_salt':
        case 'CRNRSTN_config_salt':

            return '';

        break;
        case 'R_debug_mode':

            return CRNRSTN_DEBUG_OFF;

        break;
        case 'R_debug_mode_ARRAY':

            //
            // INITIALIZE THE CRNRSTN :: 
            // SYSTEM DEBUG MODE ARRAY. 
            return array(CRNRSTN_DEBUG_OFF    => 'CRNRSTN_DEBUG_OFF',
                         CRNRSTN_DEBUG_SYSLOG => 'CRNRSTN_DEBUG_SYSLOG',
                         CRNRSTN_SYSTEM_TEST  => 'CRNRSTN_SYSTEM_TEST',
                         CRNRSTN_DEBUG_ON     => 'CRNRSTN_DEBUG_ON');

        break;
        case 'phpmailer_debug_mode':
        case 'PHPMAILER_debug_mode':

            return CRNRSTN_PHPMAILER_DEBUG_OFF;

        break;
        case 'phpmailer_debug_mode_ARRAY':
        case 'PHPMAILER_debug_mode_ARRAY':

            //
            // INITIALIZE THE 
            // CRNRSTN :: PHPMAILER 
            // SYSTEM DEBUG MODE ARRAY. 
            return array(CRNRSTN_PHPMAILER_DEBUG_OFF        => 'CRNRSTN_PHPMAILER_DEBUG_OFF',
                         CRNRSTN_PHPMAILER_DEBUG_CLIENT     => 'CRNRSTN_PHPMAILER_DEBUG_CLIENT',
                         CRNRSTN_PHPMAILER_DEBUG_SERVER     => 'CRNRSTN_PHPMAILER_DEBUG_SERVER',
                         CRNRSTN_PHPMAILER_DEBUG_CONNECTION => 'CRNRSTN_PHPMAILER_DEBUG_CONNECTION',
                         CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL   => 'CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL');

        break;
        case 'CRNRSTN_MODE_PNG':
           // Rerouted crnrstn object boot
           // private static integer constant
           // initialization through this
           // system data settings function.
           // 5 :: Monday, October 27, 2025 @ 0540 hrs.

            return 7891;

        break;
        case 'CRNRSTN_UI_DARKNIGHT':
            // Rerouted crnrstn object boot
            // private static integer constant
            // initialization through this
            // system data settings function.
            // 5 :: Monday, October 27, 2025 @ 0543 hrs.

            return 7052;

        break;
        case 'CRNRSTN_DEBUG_OFF':
            // Rerouted crnrstn object boot
            // private static integer constant
            // initialization through this
            // system data settings function.
            // 5 :: Monday, October 27, 2025 @ 0543 hrs.

            return 0;

        break;
        case 'CRNRSTN_PHPMAILER_DEBUG_OFF':
            // Rerouted crnrstn object boot
            // private static integer constant
            // initialization through this
            // system data settings function.
            // 5 :: Monday, October 27, 2025 @ 0543 hrs.

            return 0;

        break;
        case 'log_silo_profile_ARRAY':
        case 'CRNRSTN_log_silo_profile':

            /*
            //
            // EXPOSE ERROR_LOG() MESSAGES 
            // TO ERROR LOG OUTPUT, USING 
            // CUSTOM STRING OR INTEGER 
            // DATA PASSED INTO ERROR_LOG() 
            // AS $log_silo_key. 
            //
            // HERE, (int) CRNRSTN_BARNEY, 
            // IS THE LOG SILO PROFILE THAT 
            // CAN BE LISTED BELOW SO THAT 
            // THE CRNRSTN_BARNEY ERROR LOG 
            // DATA CAN PRECISELY BE 
            // OUTPUTTED OR CAPTURED. 
            $this->error_log('The requested UI ' . 
                   'content module...honoring ' . 
                   'the provided integer constant, "' . 
                   $integer_constant . 
                   '", could not be found.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_BARNEY);

            */

            return array(
                CRNRSTN_SETTINGS_CRNRSTN, CRNRSTN_BARNEY
            );

        break;
        case 'hmac_algorithm':

            return 'sha256';

        break;
        case 'scriptures_get_param_name':

            return 'eVifweb_vv';

        break;
        case 'integer_constants_initialize':

            //
            // TODO :: Maybe think about routing
            //         this through _crnrstn_int_return('STRING_CONST', $oLightbox_Helper)
            //         to use the same numbers as
            //         CRNRSTN :: Lightsaber. We need
            //         to load the function definition
            //         for this tho, ...and so much is
            //         needed to be setup atm just to
            //         get all this shit started.
            //
            //
            //         5 ::
            //
            //         Wednesday, July 17, 2024 @ 1715 hrs.
            // @define('CRNRSTN_LOAD_1_TO_1_REQUEST', (int) _crnrstn_int_return('CRNRSTN_LOAD_1_TO_1_REQUEST'));
            // @define('CRNRSTN_LOAD_1_TO_1_SESSION', (int) _crnrstn_int_return('CRNRSTN_LOAD_1_TO_1_SESSION'));
            // @define('CRNRSTN_LOAD_ON_TTL_EXPIRE', (int) _crnrstn_int_return('CRNRSTN_LOAD_ON_TTL_EXPIRE'));
            if(!defined('CRNRSTN_LOAD_1_TO_1_REQUEST')){

                @define('CRNRSTN_LOAD_1_TO_1_REQUEST', (int) 9877);
                @define('CRNRSTN_LOAD_1_TO_1_SESSION', (int) 9878);
                @define('CRNRSTN_LOAD_ON_TTL_EXPIRE', (int) 9879);

            }

            return NULL;

        break;
        case 'eVifweb_long_HTML':

            return 'e<span style="color:#F90000;">V</span>ifweb development';

        break;
        case 'eVifweb_long_TEXT':

            return 'eVifweb development';

        break;
        case 'eVifweb_short_HTML':

            return 'e<span style="color:#F90000;">V</span>ifweb';

        break;
        case 'eVifweb_short_TEXT':

            return 'eVifweb';

        break;
        case 'version_crnrstn':

            return '2.00.0001';

        break;
        case 'version_crnrstn_long_HTML':

        return 'C<span style="color:#F90000;">R</span>NRSTN :: Lightsaber';

        break;
        case 'version_crnrstn_long_TEXT':

            return 'CRNRSTN :: Lightsaber';

        break;
        case 'version_crnrstn_short_HTML':

            return 'C<span style="color:#F90000;">R</span>NRSTN ::';

        break;
        case 'version_crnrstn_short_TEXT':

            return 'CRNRSTN ::';

        break;
        case 'system_creative_element_keys_ARRAY':
        	// 5 :: Wednesday, June 12, 2024 0520 hrs.

            return array('STACHE', 
                         'CRNRSTN ::', 
                         'LINUX_PENGUIN_SMALL', 
                         'REDHAT_LOGO', 
                         'APACHE_FEATHER', 
                         'APACHE_POWER_VERSION', 
                         'CRNRSTN_R',
                         'FIVE', 
                         'MYSQL_DOLPHIN', 
                         'PHP_ELLIPSE', 
                         'POWER_BY_PHP', 
                         'ZEND_LOGO', 
                         'ZEND_FRAMEWORK', 
                         'ZEND_FRAMEWORK_3', 
                         'REDHAT_HAT_LOGO');

        break;
    	case 'iso_language_html_default':

            //
            // TODO :: OVERWRITE THIS DEFAULT DURING
            // 		   CRNRSTN :: MC-DDO DATABASE
            //		   DRIVEN CONFIGURATION.
            //         5 :: Tuesday, December 12, 2023 @ 2256 hrs.
    		//
            // NOTE: THIS LANGUAGE DEFAULT DOES NOT CHANGE.
    		//
            // NOTE: INTERESTED IN THE DOM VISIBLE
    		// 		 (BUFFER OUTPUT WRITTEN) <HTML> 
            //       LANG ATTRIBUTE? 
            //       
            //       PLEASE SEE, 
            //       $lightbox_helper->iso_language_html();
            //
            //       THAAAANKS!
    		// 		 5
    		//
    		// Wednesday, June 12, 2024 @ 0506 hrs.
            // return 'ko';
            return 'en';                                // DOES NOT CHANGE.

    	break;
    	case 'iso_language_html_available_ARRAY':

    		//
            // THIS ARRAY WILL 
            // REFLECT OFFICIALLY 
            // SUPPORTED OR AVAILABLE 
            // LANGUAGES, BUT THIS 
            // ARRAY IS NOT A DIRECT 
            // REFLECTION OF ACTUAL 
            // CONTENT LANGUAGE ISO. 
            //
            // 5 :: Wednesday, June 12, 2024 @ 0502 hrs.
            // return array('ko' => 'ko', 'es' => 'es', 'zh' => 'zh');
            return array('en' => 'en');

		break;
        case 'system_default_logging_output_profile':

            return CRNRSTN_LOG_DEFAULT;

        break;
        case 'html_comments_profile_ARRAY':

            //
            // CRNRSTN :: HTML <!-- COMMENTS MODE --> PROFILE CONSTANTS.
            return array(CRNRSTN_HTML_COMMENTS_SILENT_GOLD                   => 'CRNRSTN_HTML_COMMENTS_SILENT_GOLD',
                         CRNRSTN_HTML_COMMENTS_NONE                          => 'CRNRSTN_HTML_COMMENTS_NONE',
                         CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED => 'CRNRSTN_HTML_COMMENTS_CDN_STABILITY_CONTROL_ENABLED',
                         CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES         => 'CRNRSTN_HTML_COMMENTS_ENLARGED_PHYLACTERIES',
                         CRNRSTN_HTML_COMMENTS_FULL                          => 'CRNRSTN_HTML_COMMENTS_FULL');

        break;
    	case 'encryptable_data_types_ARRAY':
			// 5 :: Wednesday, June 12, 2024 @ 0417 hrs.

            //
            // INITIALIZE AN ARRAY OF 
            // ENCRYPTABLE DATA TYPES.
            // TODO :: REARCHITECT THE DATA 
            //         HANDLING POLICIES OF
            //         THE CRNRSTN :: Lightsaber 
            //         ENCRYPTION SERVICES LAYER
            //         SO THAT OBJECT AND ARRAY 
            //         DATA TYPES ARE COOL.
            //         5 :: Monday, December 11, 2023 @ 2031 hrs.
            return array('string'  => 'string', 
                         'integer' => 'integer',
        	             'double'  => 'double', 
                         'float'   => 'float', 
                         'int'     => 'int');

    	break;
        case 'system_log_output_profile_constants_ARRAY':

            return array(CRNRSTN_LOG_EMAIL              => 'CRNRSTN_LOG_EMAIL', 
                         CRNRSTN_LOG_PROXY & 
                         CRNRSTN_LOG_EMAIL              => 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL', 
                         CRNRSTN_LOG_FILE               => 'CRNRSTN_LOG_FILE', 
                         'R_channel_FILE'               => 'R_channel_FILE', 
                         CRNRSTN_LOG_FILE_FTP           => 'CRNRSTN_LOG_FILE_FTP', 
                         CRNRSTN_LOG_SCREEN_TEXT        => 'CRNRSTN_LOG_SCREEN_TEXT', 
                         CRNRSTN_LOG_SCREEN             => 'CRNRSTN_LOG_SCREEN', 
                         CRNRSTN_LOG_SCREEN_HTML        => 'CRNRSTN_LOG_SCREEN_HTML', 
                         CRNRSTN_LOG_SCREEN_HTML_HIDDEN => 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN', 
                         CRNRSTN_LOG_DEFAULT            => 'CRNRSTN_LOG_DEFAULT', 
                         CRNRSTN_LOG_ELECTRUM           => 'CRNRSTN_LOG_ELECTRUM', 
                         CRNRSTN_LOG_DATABASE           => 'CRNRSTN_LOG_DATABASE', 
                         CRNRSTN_LOG_SSDTLA             => 'CRNRSTN_LOG_SSDTLA', 
                         CRNRSTN_LOG_PSSDTLA            => 'CRNRSTN_LOG_PSSDTLA', 
                         CRNRSTN_LOG_SOAP               => 'CRNRSTN_LOG_SOAP');

        break;
        case 'channel_syntax_ARRAY':

            return array('G' => 'get', 
                         'P' => 'post', 
                         'H' => 'session',
                         'S' => 'ssdtla', 
                         'J' => 'pssdtla', 
                         'T' => 'form', 
                         'C' => 'cookie', 
                         'D' => 'database',
                         'R' => 'runtime', 
                         'O' => 'soap', 
                         'M' => 'rdma', 
                         'F' => 'file');

        break;
        case 'channel_master_ARRAY':

            //
            // THE FOLLOWING ARRAYS
            // ARE ONLY FOR GLOBAL
            // DEFINITION; THESE ARE
            // NOT FOR SEQUENCE CONTROL
            // (ORDER OF OPERATIONS)
            // NOT EVEN A LITTLE.
            return array('R_channel_GET'      => 'G', 
                         'R_channel_POST'     => 'P',
                         'R_channel_SESSION'  => 'H', 
                         'R_channel_SSDTLA'   => 'S', 
                         'R_channel_PSSDTLA'  => 'J',
                         'R_channel_FORM'     => 'T', 
                         'R_channel_COOKIE'   => 'C', 
                         'R_channel_DATABASE' => 'D', 
                         'R_channel_RUNTIME'  => 'R',
                         'R_channel_SOAP'     => 'O', 
                         'R_channel_RDMA'     => 'M', 
                         'R_channel_FILE'     => 'F');

        break;
        case 'system_data_profile_constants_ARRAY':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Added CRNRSTN_CHANNEL_FILE. 
             *       5 :: Saturday, November 18, 2023 @ 0618 hrs.
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Added CRNRSTN_CHANNEL_FORM. 
             *       5 :: Wednesday, February 18, 2026 @ 0552 hrs.
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Added CRNRSTN_CHANNEL_RDMA. 
             *       5 :: Wednesday, February 18, 2026 @ 0552 hrs.
             *
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Initialize some grouped
             * integer constants arrays
             * for support of CLR-SSL 
             * internal data architecture.
             *
             */
            return array('R_channel_ALL', 
                         'R_channel_GET', 
                         'R_channel_POST', 
                         'R_channel_COOKIE', 
                         'R_channel_SESSION', 
                         'R_channel_DATABASE', 
                         'R_channel_SSDTLA', 
                         'R_channel_PSSDTLA', 
                         'R_channel_FORM', 
                         'R_channel_RUNTIME', 
                         'R_channel_SOAP', 
                         'R_channel_RDMA', 
                         'R_channel_FILE'); 

        break;
        case 'ddo_serializable_data_types_ARRAY':

            return array(CRNRSTN_OBJECT => 1, CRNRSTN_ARRAY => 1);

        break;
        case 'object_serializable_channels_ARRAY':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Added CRNRSTN_CHANNEL_FORM. 
             *       5 :: Wednesday, February 18, 2026 @ 0554 hrs.
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Edit: Added CRNRSTN_CHANNEL_RDMA. 
             *       5 :: Sunday, March 1, 2026 @ 0752 hrs.
             *
             */

            return array('R_channel_GET'      => 'G', 
                         'R_channel_POST'     => 'P', 
                         'R_channel_SESSION'  => 'H',
                         'R_channel_SSDTLA'   => 'S', 
                         'R_channel_PSSDTLA'  => 'J',
                         'R_channel_FORM'     => 'T', 
                         'R_channel_COOKIE'   => 'C', 
                         'R_channel_DATABASE' => 'D',
                         'R_channel_SOAP'     => 'O', 
                         'R_channel_RDMA'     => 'M', 
                         'R_channel_FILE'     => 'F');

        break;
        case 'system_ui_module_constants_ARRAY':

            return array(CRNRSTN_RESOURCE_ALL              => 'CRNRSTN_RESOURCE_ALL', 
                         CRNRSTN_RESOURCE_BASSDRIVE        => 'CRNRSTN_RESOURCE_BASSDRIVE', 
                         CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE => 'CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE', 
                         CRNRSTN_RESOURCE_CSS_VALIDATOR    => 'CRNRSTN_RESOURCE_CSS_VALIDATOR', 
                         CRNRSTN_RESOURCE_DOCUMENTATION    => 'CRNRSTN_RESOURCE_DOCUMENTATION', 
                         CRNRSTN_RESOURCE_IMAGE            => 'CRNRSTN_RESOURCE_IMAGE', 
                         CRNRSTN_RESOURCE_DOCUMENT         => 'CRNRSTN_RESOURCE_DOCUMENT', 
                         CRNRSTN_RESOURCE_OPENSOURCE       => 'CRNRSTN_RESOURCE_OPENSOURCE', 
                         CRNRSTN_RESOURCE_ELECTRUM         => 'CRNRSTN_RESOURCE_ELECTRUM', 
                         CRNRSTN_RESOURCE_NEWS_SYNDICATION => 'CRNRSTN_RESOURCE_NEWS_SYNDICATION', 
                         CRNRSTN_LOG_DEFAULT               => 'CRNRSTN_LOG_DEFAULT', 
                         CRNRSTN_WEB_ANALYTICS             => 'CRNRSTN_WEB_ANALYTICS', 
                         CRNRSTN_WEB_ENGAGEMENT            => 'CRNRSTN_WEB_ENGAGEMENT', 
                         CRNRSTN_UI_COOKIE_PREFERENCE      => 'CRNRSTN_UI_COOKIE_PREFERENCE', 
                         CRNRSTN_UI_COOKIE_YESNO           => 'CRNRSTN_UI_COOKIE_YESNO', 
                         CRNRSTN_UI_COOKIE_NOTICE          => 'CRNRSTN_UI_COOKIE_NOTICE', 
                         CRNRSTN_PROXY_KINGS_HIGHWAY       => 'CRNRSTN_PROXY_KINGS_HIGHWAY', 
                         CRNRSTN_PROXY_EMAIL               => 'CRNRSTN_PROXY_EMAIL', 
                         CRNRSTN_PROXY_ELECTRUM            => 'CRNRSTN_PROXY_ELECTRUM', 
                         CRNRSTN_PROXY_AUTHENTICATE        => 'CRNRSTN_PROXY_AUTHENTICATE', 
                         CRNRSTN_RESPONSE_REPORT           => 'CRNRSTN_RESPONSE_REPORT', 
                         CRNRSTN_CLIENT_SSDTLA             => 'CRNRSTN_CLIENT_SSDTLA');

        break;
        case 'system_resource_constants_ARRAY':

            //
            // INITIALIZE SOME GROUPED
            // INTEGER CONSTANTS ARRAYS
            // FOR SUPPORT OF CRNRSTN ::
            // INTERNAL DATA ARCHITECTURE.
            return array(CRNRSTN_RESOURCE_ALL, 
                         CRNRSTN_RESOURCE_BASSDRIVE,
                         CRNRSTN_RESOURCE_NATIONAL_WEATHER_SERVICE, 
                         CRNRSTN_RESOURCE_CSS_VALIDATOR, 
                         CRNRSTN_RESOURCE_DOCUMENTATION, 
                         CRNRSTN_RESOURCE_DEEP_LINK, 
                         CRNRSTN_RESOURCE_IMAGE, 
                         CRNRSTN_RESOURCE_DOCUMENT, 
                         CRNRSTN_RESOURCE_OPENSOURCE, 
                         CRNRSTN_RESOURCE_NEWS_SYNDICATION, 
                         CRNRSTN_LOG_EMAIL, 
                         CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL, 
                         CRNRSTN_LOG_FILE, 
                         'R_channel_FILE', 
                         CRNRSTN_LOG_FILE_FTP, 
                         CRNRSTN_LOG_SCREEN_TEXT, 
                         CRNRSTN_LOG_SCREEN, 
                         CRNRSTN_LOG_SCREEN_HTML, 
                         CRNRSTN_LOG_SCREEN_HTML_HIDDEN, 
                         CRNRSTN_LOG_DEFAULT, 
                         CRNRSTN_LOG_ELECTRUM, 
                         CRNRSTN_LOG_SCREEN, 
                         'R_channel_DATABASE', 
                         'R_channel_SSDTLA', 
                         'R_channel_PSSDTLA', 
                         'R_channel_SOAP');

        break;
        case 'system_theme_style_constants_ARRAY':

            //
            // INITIALIZE SOME GROUPED 
            // INTEGER CONSTANTS ARRAYS 
            // FOR SUPPORT OF CRNRSTN :: 
            // INTERNAL DATA ARCHITECTURE. 
            return array(CRNRSTN_UI_PHPNIGHT         => CRNRSTN_UI_PHPNIGHT, 
                         CRNRSTN_UI_DARKNIGHT        => CRNRSTN_UI_DARKNIGHT, 
                         CRNRSTN_UI_PHP              => CRNRSTN_UI_PHP, 
                         CRNRSTN_UI_GREYSKY          => CRNRSTN_UI_GREYSKY, 
                         CRNRSTN_UI_HTML             => CRNRSTN_UI_HTML, 
                         CRNRSTN_UI_DAYLIGHT         => CRNRSTN_UI_DAYLIGHT, 
                         CRNRSTN_UI_FEATHER          => CRNRSTN_UI_FEATHER, 
                         CRNRSTN_UI_GLASS_LIGHT_COPY => CRNRSTN_UI_GLASS_LIGHT_COPY, 
                         CRNRSTN_UI_GLASS_DARK_COPY  => CRNRSTN_UI_GLASS_DARK_COPY, 
                         CRNRSTN_UI_WOOD             => CRNRSTN_UI_WOOD, 
                         CRNRSTN_UI_TERMINAL         => CRNRSTN_UI_TERMINAL, 
                         CRNRSTN_UI_RANDOM           => CRNRSTN_UI_RANDOM);

        break;
        case 'system_output_profile_constants_ARRAY':

            //
            // INITIALIZE SOME GROUPED
            // INTEGER CONSTANTS ARRAYS
            // FOR SUPPORT OF CRNRSTN ::
            // INTERNAL DATA ARCHITECTURE.
            return array(CRNRSTN_MODE_PNG    => CRNRSTN_MODE_PNG,
                         CRNRSTN_MODE_JPEG   => CRNRSTN_MODE_JPEG, 
                         CRNRSTN_MODE_BASE64 => CRNRSTN_MODE_BASE64);

        break;
        case 'system_device_channel_constants_ARRAY':

            //
            // INITIALIZE SOME GROUPED
            // INTEGER CONSTANTS ARRAYS
            // FOR SUPPORT OF CRNRSTN ::
            // INTERNAL DATA ARCHITECTURE.
            return array(CRNRSTN_DESKTOP, CRNRSTN_TABLET, CRNRSTN_MOBILE);

        break;
        case 'system_response_map_output_format_constants':

            //
            // INITIALIZE SOME GROUPED
            // INTEGER CONSTANTS ARRAYS
            // FOR SUPPORT OF CRNRSTN ::
            // INTERNAL DATA ARCHITECTURE.
            // Note: $R_data is private static. 
            return array($oCRNRSTN->R_data['int_flag']['R_fs_map'], $oCRNRSTN->R_data['int_flag']['R_fs_map_proxy']);

        break;
        case 'system_file_attributes_master_ARRAY':

            //
            // STAT() AND FSTAT() SERVER FILE META
            // OUTPUT RESULT CRNRSTN :: SYSTEM
            // KEY IDENTIFIERS.
            //
            // THE STRING KEYS ARE MAPPED WITH
            // IS_ACTIVE = 1 (ON) STATE.
            // SEE, system_file_active_attributes_profile,
            // FOR THE RUNTIME SETTINGS OVERRIDES
            // IN FILE /_R/_config/_config.defaults/_crnrstn.system_settings.inc.php.
            return array('TOTAL_FILESIZE'    => 1, 
                         'PERMISSIONS_OCTAL' => 1,
                         'PERMISSIONS_FULL'  => 1, 
                         'BLOCK_ALLOCATE'    => 1, 
                         'BLOCK_SIZE'        => 1, 
                         'DATE_LASTMODIFIED' => 1,
                         'DATE_LASTACCESSED' => 1, 
                         'GID_STRING'        => 1, 
                         'GID_INT'           => 1, 
                         'UID_STRING'        => 1,
                         'UID_INTEGER'       => 1, 
                         'FILESIZE'          => 1);

        break;
    	case 'byte_units_ARRAY[SI_METRIC][STRING_PATTERN][UNITS_EXPONENTIAL_POSITIVE]':
    		// 5 :: Wednesday, June 12, 2024 @ 0430 hrs.

            //
            // WE STORE BYTE UNITS POWER DATA
            // WITH THE ARRAY INDEX, SINCE WE
            // DON'T NEED ANY ADDITIONAL STRING
            // META DATA WHERE THIS STRUCTURE
            // IS USED.
            return array('terabytes'  => 4, 
                         'terabyte'   => 4, 
                         'exabytes'   => 6,
                         'exabyte'    => 6, 
                         'yottabytes' => 8, 
                         'yottabyte'  => 8);

    	break;
    	case 'byte_units_ARRAY[ISO_80000][BASE]':
    		// 5 :: Wednesday, June 12, 2024 @ 0439 hrs.

            //
            // INITIALIZE ISO/IEC 80000-13
            // INFORMATION SCIENCE AND
            // TECHNOLOGY QUANTITIES AND UNITS
            // DETECTION, POWER, AND DATA
            // ARCHITECTURE SUPPORT
            // DATA STRUCTURES.
            //
            //
            // 5 :: Wednesday, September 27, 2023 @ 2012 hrs.
            return 1024;

    	break;
    	case 'byte_units_ARRAY[SI_METRIC][BASE]':
			// 5 :: Wednesday, June 12, 2024 @ 0419 hrs.

            return 1000;

        break;
    	case 'byte_units_ARRAY[ISO_80000][UNITS]':
			// 5 :: Wednesday, June 12, 2024 @ 0419 hrs.

            return array('bytes', 
                         'KiB', 
                         'MiB', 
                         'GiB', 
                         'TiB', 
                         'PiB', 
                         'EiB', 
                         'ZiB', 
                         'YiB');

        break;
    	case 'byte_units_ARRAY[SI_METRIC][UNITS]':
			// 5 :: Wednesday, June 12, 2024 @ 0419 hrs.

            return array('bytes', 
                         'kB', 
                         'MB', 
                         'GB', 
                         'TB', 
                         'PB', 
                         'EB', 
                         'ZB', 
                         'YB');

        break;
    	case 'byte_units_ARRAY[ISO_80000][STRING_PATTERN][UNITS_BYTES_POSITIVE]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

    		return array('bytes' => 0, 'byte' => 0);

        break;
    	case 'byte_units_ARRAY[ISO_80000][CONTROL_PATTERN]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

            return array('b' => 0, 
                         'ki' => 1, 
                         'mi' => 2, 
                         'gi' => 3,
                         'ti' => 4, 
                         'pi' => 5, 
                         'ei' => 6, 
                         'zi' => 7, 
                         'yi' => 8);

        break;
    	case 'byte_units_ARRAY[SI_METRIC][CONTROL_PATTERN]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

            return array('b' => 0, 
                         'k' => 1, 
                         'm' => 2, 
                         'g' => 3,
                         't' => 4, 
                         'p' => 5, 
                         'e' => 6, 
                         'z' => 7, 
                         'y' => 8);

        break;
    	case 'byte_units_ARRAY[ISO_80000][STRING_PATTERN][ISO_UNITS_BYTES]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

            return array('bytes' => 'bytes', 
                         'byte'  => 'bytes', 
                         'b'     => 'bytes');

    	break;
    	case 'byte_units_ARRAY[ISO_80000][STRING_PATTERN][ISO_UNITS_EXPONENTIAL]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

            return array('ki' => 'kibibyte',
                         'mi' => 'mebibyte', 
                         'gi' => 'gibibyte', 
                         'ti' => 'tebibyte', 
                         'pi' => 'pebibyte', 
                         'ei' => 'exbibyte',
                         'zi' => 'zebibyte', 
                         'yi' => 'yobibyte');

        break;
    	case 'byte_units_ARRAY[SI_METRIC][STRING_PATTERN][SI_UNITS_BYTES]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

            return array('bytes' => 'bytes', 
                         'byte'  => 'bytes', 
                         'b'     => 'bytes');

    	break;
    	case 'byte_units_ARRAY[SI_METRIC][STRING_PATTERN][SI_UNITS_EXPONENTIAL]':
			// 5 :: Wednesday, June 12, 2024 @ 0420 hrs.

            return array('k' => 'kilobyte', 
                         'm' => 'megabyte', 
                         'g' => 'gigabyte', 
                         't' => 'terabyte', 
                         'p' => 'petabyte', 
                         'e' => 'exabyte', 
                         'z' => 'zettabyte', 
                         'y' => 'yottabyte');

    	break;
    	case 'relevant_header_fields_ARRAY':
			// 5 :: Wednesday, June 12, 2024 @ 0415 hrs.

			return array('Accept', 
                         'Accept-Charset', 
                         'Accept-Datetime', 
                         'Accept-Encoding', 
                         'Accept-Language',
                         'Authorization', 
                         'Cache-Control', 
                         'Connection', 
                         'Content-Encoding', 
                         'Content-Length', 
                         'Content-MD5', 
                         'Content-Type', 
                         'Cookie',
                         'Date', 
                         'Expect', 
                         'Forwarded', 
                         'Host', 
                         'Proxy-Authorization', 
                         'Range', 
                         'Referer', 
                         'User-Agent', 
                         'Warning', 
                         'X-Requested-With',
                         'DNT', 
                         'X-Forwarded-For', 
                         'X-Forwarded-Host', 
                         'X-Forwarded-Proto', 
                         'X-Wap-Profile', 
                         'X-UIDH[34][35][36]');

    	break;
        case 'R_hmac_hash_config':

            return array('default' => array(CRNRSTN_INTEGER => -1, 'name' => 'sha256'));

        break;
        case 'openssl_ARRAY':

            return array('cipher' => array('default' => array(CRNRSTN_INTEGER => -1, 
                                                              'name' => 'aes-128-ocb')),
                         'digest_method' => array('default' => array(CRNRSTN_INTEGER => -1, 
                                                              'name' => 'aes-128-ocb'))
            );

        break;
        case 'hmac_algorithm_preferred_ARRAY':

            //
            // The HMAC should be compatible
            // back to PHP 5.5. regarding OpenSSL,
        	// do we need pre-v1.1.1 support?
            //
            // A list of preferred hashing
            // algorithms has been prepared
            // by the architect of the
            // CRNRSTN :: Lightsaber RoCEv2 SOAP
            // Services Layer.
            //
            // In support of the CRNRSTN ::
            // Lightsaber SOAP Services
            // Layer Multi-Channel Decoupled
            // Data Object (MC-DDO)
            // Architecture, the hash_algos()
            // system registered return array
            // has been reduced or filtered by
            // the more trusted or preferred
            // and mentioned afore
            // hashing algorithms.
            //
            // By restricting internal
            // system hashes to a set of
            // hashes that are approved for
            // use in all of the internal
            // algorithms that make up
            // the CRNRSTN :: Lightsaber SOAP
            // Services Layer, the
            // application architecture is
            // given consistency in strength
            // for the kinds of maneuvers
            // that CRNRSTN :: Lightsaber
            // will be back-flip jumping
            // through hoops with ease.
            //
            // Also, this guarantees that 5,
            // the system architect, does
            // not end up hearing reports
            // about an admin's production
            // server being found doing MD1
            // hashing for key generation
            // in some messaging table
            // shard of their
            // MySQL database.
        	//
        	// PLEASE NOTE THAT THE SERVER
            // WILL BE CHECKED AT RUNTIME
            // BEFORE ANYTHING BELOW WILL
            // BE IMPLEMENTED.
            //
            // 5 :: Wednesday, June 12, 2024 @ 0339 hrs.
            return array('sha256'         => 'sha256', 
                         'sha224'         => 'sha224',
                         'sha384'         => 'sha384', 
                         'sha512'         => 'sha512', 
                         'sha512-224'     => 'sha512-224', 
                         'sha512-256'     => 'sha512-256',
                         'rsa-sha224'     => 'rsa-sha224', 
                         'rsa-sha256'     => 'rsa-sha256', 
                         'rsa-sha384'     => 'rsa-sha384',
                         'rsa-sha512'     => 'rsa-sha512', 
                         'rsa-sha512/224' => 'rsa-sha512/224', 
                         'rsa-sha512/256' => 'rsa-sha512/256',
                         'md5'            => 'md5', 
                         'sha1'           => 'sha1', 
                         'rsa-md5'        => 'rsa-md5', 
                         'rsa-sha1'       => 'rsa-sha1', 
                         'ripemd256'      => 'ripemd256',
                         'gost'           => 'gost', 
                         'snefru256'      => 'snefru256', 
                         'ripemd128'      => 'ripemd128', 
                         'tiger128,4'     => 'tiger128,4');

        break;
        case 'openssl_cipher_preferred_ARRAY':
	        // 5 :: Wednesday, June 12, 2024 @ 0354 hrs.

            //
            // A list of preferred OpenSSL
            // ciphers has been prepared
            // by the architect of the
            // CRNRSTN :: Lightsaber RoCEv2 SOAP
            // Services Layer.
            //
            // In support of the CRNRSTN ::
            // Lightsaber SOAP Services
            // Layer Multi-Channel Decoupled
            // Data Object (MC-DDO)
            // Architecture, the openssl_get_cipher_methods()
            // system registered return array
            // has been reduced or filtered by
            // the more trusted or preferred
            // and mentioned afore
            // OpenSSL ciphers.
            //
            // By restricting internal
            // system ciphers to a set of
            // ciphers that are approved for
            // use in all of the internal
            // algorithms that make up
            // the CRNRSTN :: Lightsaber SOAP
            // Services Layer, the
            // application architecture is
            // given consistency in strength
            // for the kinds of maneuvers
            // that CRNRSTN :: Lightsaber
            // will be back-flip jumping
            // through hoops with ease.
            //
            // Also, this guarantees that 5,
            // the system architect, does
            // not end up hearing reports
            // about an admin's production
            // server being found doing MD1
            // hashing for key generation
            // in some messaging table
            // shard of their
            // MySQL database.
            //
            // PLEASE NOTE THAT THE SERVER
            // WILL BE CHECKED AT RUNTIME
            // BEFORE ANYTHING BELOW WILL
            // BE IMPLEMENTED.
            return array('aes-256-ofb'      => 'aes-256-ofb', 
                         'aes-256-ccm'      => 'aes-256-ccm', 
                         'aes-192-ocb'      => 'aes-192-ocb',
                         'aes-128-ocb'      => 'aes-128-ocb', 
                         'aes-128-ctr'      => 'aes-128-ctr', 
                         'aes-192-ccm'      => 'aes-192-ccm',
                         'aes-256-xts'      => 'aes-256-xts', 
                         'aria-256-cfb'     => 'aria-256-cfb', 
                         'aria-256-ofb'     => 'aria-256-ofb',
                         'camellia-256-cbc' => 'camellia-256-cbc', 
                         'camellia-192-cfb' => 'camellia-192-cfb',
                         'cast5-cbc'        => 'cast5-cbc', 
                         'aria256'          => 'aria256', 
                         'blowfish'         => 'blowfish',
                         'camellia256'      => 'camellia256', 
                         'camellia192'      => 'camellia192');

        break;
        case 'openssl_digest_preferred_ARRAY':
	        // 5 :: Wednesday, June 12, 2024 @ 0354 hrs.

            //
            // A list of preferred OpenSSL
            // digests has been prepared
            // by the architect of the
            // CRNRSTN :: Lightsaber RoCEv2 SOAP
            // Services Layer.
            //
            // In support of the CRNRSTN ::
            // SOAP Services Layer Multi-
            // Channel Decoupled Data
            // Object (MC-DDO) Architecture,
            // the openssl_get_md_methods()
            // system return array has
            // been reduced or filtered by
            // the more trusted or
            // preferred and mentioned
            // afore OpenSSL digests.
            //
            // By restricting internal
            // system digests to a set of
            // digests that are approved for
            // use in all of the internal
            // algorithms that make up
            // the CRNRSTN :: Lightsaber SOAP
            // Services Layer, the
            // application architecture is
            // given consistency in strength
            // for the kinds of maneuvers
            // that CRNRSTN :: Lightsaber
            // will be back-flip jumping
            // through hoops with ease.
            //
            // Also, this guarantees that 5,
            // the system architect, does
            // not end up hearing reports
            // about an admin's production
            // server being found doing MD1
            // hashing for key generation
            // in some messaging table
            // shard of their
            // MySQL database.
            //
            // PLEASE NOTE THAT THE SERVER
            // WILL BE CHECKED AT RUNTIME
            // BEFORE ANYTHING BELOW WILL
            // BE IMPLEMENTED.
            return array('sha512'     => 'sha512', 
                         'sha512-256' => 'sha512-256', 
                         'sha3-256'   => 'sha3-256', 
                         'rsa-sha256' => 'rsa-sha256', 
                         'sha256'     => 'sha256', 
                         'rsa-sha512' => 'rsa-sha512');

        break;
        case 'sql_interval_values':

            //
            // INITIALIZE SUPPORT
            // DATA STRUCTURES FOR
            // SQL TEMPORAL INTERVALS.
            // https://dev.mysql.com/doc/refman/8.0/en/expressions.html
            //
            //
            // 5 :: Wednesday, June 12, 2024 @ 0339 hrs.
            return array(array('MICROSECOND'        => 'MICROSECONDS'),
                         array('SECOND'             => 'SECONDS'), 
                         array('MINUTE'             => 'MINUTES'), 
                         array('HOUR'               => 'HOURS'),
                         array('DAY'                => 'DAYS'), 
                         array('WEEK'               => 'WEEKS'), 
                         array('MONTH'              => 'MONTHS'),
                         array('QUARTER'            => 'QUARTERS'), 
                         array('YEAR'               => 'YEARS'),
                         array('SECOND_MICROSECOND' => 'SECONDS.MICROSECONDS'),
                         array('MINUTE_MICROSECOND' => 'MINUTES:SECONDS.MICROSECONDS'), 
                         array('MINUTE_SECOND'      => 'MINUTES:SECONDS'),
                         array('HOUR_MICROSECOND'   => 'HOURS:MINUTES:SECONDS.MICROSECONDS'),
                         array('HOUR_SECOND'        => 'HOURS:MINUTES:SECONDS'), 
                         array('HOUR_MINUTE'        => 'HOURS:MINUTES'),
                         array('DAY_MICROSECOND'    => 'DAYS HOURS:MINUTES:SECONDS.MICROSECONDS'),
                         array('DAY_SECOND'         => 'DAYS HOURS:MINUTES:SECONDS'), 
                         array('DAY_MINUTE'         => 'DAYS HOURS:MINUTES'),
                         array('DAY_HOUR'           => 'DAYS HOURS'), 
                         array('YEAR_MONTH'         => 'YEARS-MONTHS'));

        break;
        case 'sql_interval_string_patterns':

            //
            // initialize support
            // data structures for
            // sql temporal intervals.
            // https://dev.mysql.com/doc/refman/8.0/en/expressions.html
            //
            //
            // 5 :: Wednesday, June 12, 2024 @ 0401 hrs.
            return array('SECONDS_MICROSECONDS' => 9,
                         'SECONDS_MICROSECOND' => 9, 
                         'SECOND_MICROSECONDS' => 9, 
                         'SECOND_MICROSECOND' => 9,
                         'MINUTES_MICROSECONDS' => 10, 
                         'MINUTES_MICROSECOND' => 10, 
                         'MINUTE_MICROSECONDS' => 10,
                         'MINUTE_MICROSECOND' => 10, 
                         'HOURS_MICROSECONDS' => 12, 
                         'HOURS_MICROSECOND' => 12,
                         'HOUR_MICROSECONDS' => 12, 
                         'HOUR_MICROSECOND' => 12, 
                         'DAYS_MICROSECONDS' => 15, 
                         'DAYS_MICROSECOND' => 15,
                         'DAY_MICROSECONDS' => 15, 
                         'DAY_MICROSECOND' => 15, 
                         'MINUTES_SECONDS' => 11, 
                         'MINUTES_SECOND' => 11,
                         'MINUTE_SECONDS' => 11, 
                         'MINUTE_SECOND' => 11, 
                         'MICROSECONDS' => 0, 
                         'MICROSECOND' => 0,
                         'HOURS_SECONDS' => 13, 
                         'HOURS_SECOND' => 13, 
                         'HOUR_SECONDS' => 13, 
                         'HOUR_SECOND' => 13,
                         'HOURS_MINUTES' => 14, 
                         'HOUR_MINUTES' => 14, 
                         'HOURS_MINUTE' => 14, 
                         'HOUR_MINUTE' => 14,
                         'DAYS_SECONDS' => 16, 
                         'DAYS_SECOND' => 16, 
                         'DAY_SECONDS' => 16, 
                         'DAY_SECOND' => 16, 
                         'DAYS_MINUTES' => 17,
                         'DAYS_MINUTE' => 17, 
                         'DAY_MINUTES' => 17, 
                         'DAY_MINUTE' => 17, 
                         'YEARS_MONTHS' => 19, 
                         'YEARS_MONTH' => 19,
                         'YEAR_MONTHS' => 19, 
                         'YEAR_MONTH' => 19, 
                         'DAYS_HOURS' => 18, 
                         'DAYS_HOUR' => 18, 
                         'DAY_HOURS' => 18,
                         'DAY_HOUR' => 18, 
                         'QUARTERS' => 7, 
                         'QUARTER' => 7, 
                         'SECONDS' => 1, 
                         'SECOND' => 1, 
                         'MINUTES' => 2,
                         'MINUTE' => 2, 
                         'MONTHS' => 6, 
                         'MONTH' => 6, 
                         'HOURS' => 3, 
                         'HOUR' => 3, 
                         'WEEKS' => 5, 
                         'WEEK' => 5,
                         'YEARS' => 8, 
                         'YEAR' => 8, 
                         'DAYS' => 4, 
                         'MINS' => 2, 
                         'SECS' => 1, 
                         'QTR' => 7, 
                         'MTH' => 6, 
                         'DAY' => 4,
                         'MIN' => 2, 
                         'SEC' => 1, 
                         'YR' => 8, 
                         'WK' => 5, 
                         'HR' => 3);

        break;
        case 'timezone_syntax_ARRAY':
        	// 5 :: Wednesday, June 12, 2024 @ 0405 hrs.

            // Initialize timezones.
            //self::$timezone_syntax_ARRAY = $this->oCRNRSTN_ENV->config_load_static_application_data('timezone_syntax_ARRAY');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * SOURCE  :: https://www.php.net/manual/en/timezones.php
             * COMMENT :: https://www.php.net/manual/en/timezones.php#128799
             * AUTHOR  :: info at scheduleplus dot xyz
             *
             * This data was last modified 
             * on Wednesday, November 1, 2023 @ 2331 hrs.
             *
             *
             * 5 :: Monday, November 20, 2023 @ 0446 hrs.
             *
             * Initialize timezones. 
             *
             */
            return array('africa/abidjan' => 'africa/abidjan', 
                         'africa/accra' => 'africa/accra', 
                         'africa/addis_ababa' => 'africa/addis_ababa',
                         'africa/algiers' => 'africa/algiers', 
                         'africa/asmara' => 'africa/asmara', 
                         'africa/bamako' => 'africa/bamako',
                         'africa/bangui' => 'africa/bangui', 
                         'africa/banjul' => 'africa/banjul', 
                         'africa/bissau' => 'africa/bissau',
                         'africa/blantyre' => 'africa/blantyre', 
                         'africa/brazzaville' => 'africa/brazzaville', 
                         'africa/bujumbura' => 'africa/bujumbura',
                         'africa/cairo' => 'africa/cairo', 
                         'africa/casablanca' => 'africa/casablanca', 
                         'africa/ceuta' => 'africa/ceuta',
                         'africa/conakry' => 'africa/conakry', 
                         'africa/dakar' => 'africa/dakar', 
                         'africa/dar_es_salaam' => 'africa/dar_es_salaam',
                         'africa/djibouti' => 'africa/djibouti', 
                         'africa/douala' => 'africa/douala', 
                         'africa/el_aaiun' => 'africa/el_aaiun',
                         'africa/freetown' => 'africa/freetown', 
                         'africa/gaborone' => 'africa/gaborone', 
                         'africa/harare' => 'africa/harare',
                         'africa/johannesburg' => 'africa/johannesburg', 
                         'africa/juba' => 'africa/juba', 
                         'africa/kampala' => 'africa/kampala',
                         'africa/khartoum' => 'africa/khartoum', 
                         'africa/kigali' => 'africa/kigali', 
                         'africa/kinshasa' => 'africa/kinshasa',
                         'africa/lagos' => 'africa/lagos', 
                         'africa/libreville' => 'africa/libreville', 
                         'africa/lome' => 'africa/lome',
                         'africa/luanda' => 'africa/luanda', 
                         'africa/lubumbashi' => 'africa/lubumbashi', 
                         'africa/lusaka' => 'africa/lusaka',
                         'africa/malabo' => 'africa/malabo', 
                         'africa/maputo' => 'africa/maputo', 
                         'africa/maseru' => 'africa/maseru',
                         'africa/mbabane' => 'africa/mbabane', 
                         'africa/mogadishu' => 'africa/mogadishu', 
                         'africa/monrovia' => 'africa/monrovia',
                         'africa/nairobi' => 'africa/nairobi', 
                         'africa/ndjamena' => 'africa/ndjamena', 
                         'africa/niamey' => 'africa/niamey',
                         'africa/nouakchott' => 'africa/nouakchott', 
                         'africa/ouagadougou' => 'africa/ouagadougou', 
                         'africa/porto-novo' => 'africa/porto-novo',
                         'africa/sao_tome' => 'africa/sao_tome', 
                         'africa/tripoli' => 'africa/tripoli', 
                         'africa/tunis' => 'africa/tunis',
                         'africa/windhoek' => 'africa/windhoek', 
                         'america/adak' => 'america/adak', 
                         'america/anchorage' => 'america/anchorage',
                         'america/anguilla' => 'america/anguilla', 
                         'america/antigua' => 'america/antigua', 
                         'america/araguaina' => 'america/araguaina',
                         'america/argentina/buenos_aires' => 'america/argentina/buenos_aires', 
                         'america/argentina/catamarca' => 'america/argentina/catamarca',
                         'america/argentina/cordoba' => 'america/argentina/cordoba', 
                         'america/argentina/jujuy' => 'america/argentina/jujuy',
                         'america/argentina/la_rioja' => 'america/argentina/la_rioja', 
                         'america/argentina/mendoza' => 'america/argentina/mendoza',
                         'america/argentina/rio_gallegos' => 'america/argentina/rio_gallegos', 
                         'america/argentina/salta' => 'america/argentina/salta',
                         'america/argentina/san_juan' => 'america/argentina/san_juan', 
                         'america/argentina/san_luis' => 'america/argentina/san_luis',
                         'america/argentina/tucuman' => 'america/argentina/tucuman', 
                         'america/argentina/ushuaia' => 'america/argentina/ushuaia',
                         'america/aruba' => 'america/aruba', 
                         'america/asuncion' => 'america/asuncion', 
                         'america/atikokan' => 'america/atikokan',
                         'america/bahia' => 'america/bahia', 
                         'america/bahia_banderas' => 'america/bahia_banderas', 
                         'america/barbados' => 'america/barbados',
                         'america/belem' => 'america/belem', 
                         'america/belize' => 'america/belize', 
                         'america/blanc-sablon' => 'america/blanc-sablon',
                         'america/boa_vista' => 'america/boa_vista', 
                         'america/bogota' => 'america/bogota', 
                         'america/boise' => 'america/boise',
                         'america/cambridge_bay' => 'america/cambridge_bay', 
                         'america/campo_grande' => 'america/campo_grande', 
                         'america/cancun' => 'america/cancun',
                         'america/caracas' => 'america/caracas', 
                         'america/cayenne' => 'america/cayenne', 
                         'america/cayman' => 'america/cayman',
                         'america/chicago' => 'america/chicago', 
                         'america/chihuahua' => 'america/chihuahua', 
                         'america/ciudad_juarez' => 'america/ciudad_juarez',
                         'america/costa_rica' => 'america/costa_rica', 
                         'america/creston' => 'america/creston', 
                         'america/cuiaba' => 'america/cuiaba',
                         'america/curacao' => 'america/curacao', 
                         'america/danmarkshavn' => 'america/danmarkshavn', 
                         'america/dawson' => 'america/dawson',
                         'america/dawson_creek' => 'america/dawson_creek', 
                         'america/denver' => 'america/denver', 
                         'america/detroit' => 'america/detroit',
                         'america/dominica' => 'america/dominica', 
                         'america/edmonton' => 'america/edmonton', 
                         'america/eirunepe' => 'america/eirunepe',
                         'america/el_salvador' => 'america/el_salvador', 
                         'america/fort_nelson' => 'america/fort_nelson', 
                         'america/fortaleza' => 'america/fortaleza',
                         'america/glace_bay' => 'america/glace_bay', 
                         'america/goose_bay' => 'america/goose_bay', 
                         'america/grand_turk' => 'america/grand_turk',
                         'america/grenada' => 'america/grenada', 
                         'america/guadeloupe' => 'america/guadeloupe', 
                         'america/guatemala' => 'america/guatemala',
                         'america/guayaquil' => 'america/guayaquil', 
                         'america/guyana' => 'america/guyana', 
                         'america/halifax' => 'america/halifax',
                         'america/havana' => 'america/havana', 
                         'america/hermosillo' => 'america/hermosillo', 
                         'america/indiana/indianapolis' => 'america/indiana/indianapolis',
                         'america/indiana/knox' => 'america/indiana/knox', 
                         'america/indiana/marengo' => 'america/indiana/marengo',
                         'america/indiana/petersburg' => 'america/indiana/petersburg', 
                         'america/indiana/tell_city' => 'america/indiana/tell_city',
                         'america/indiana/vevay' => 'america/indiana/vevay', 
                         'america/indiana/vincennes' => 'america/indiana/vincennes',
                         'america/indiana/winamac' => 'america/indiana/winamac', 
                         'america/inuvik' => 'america/inuvik', 
                         'america/iqaluit' => 'america/iqaluit',
                         'america/jamaica' => 'america/jamaica', 
                         'america/juneau' => 'america/juneau', 
                         'america/kentucky/louisville' => 'america/kentucky/louisville',
                         'america/kentucky/monticello' => 'america/kentucky/monticello', 
                         'america/kralendijk' => 'america/kralendijk',
                         'america/la_paz' => 'america/la_paz', 
                         'america/lima' => 'america/lima', 
                         'america/los_angeles' => 'america/los_angeles',
                         'america/lower_princes' => 'america/lower_princes', 
                         'america/maceio' => 'america/maceio', 
                         'america/managua' => 'america/managua',
                         'america/manaus' => 'america/manaus', 
                         'america/marigot' => 'america/marigot', 
                         'america/martinique' => 'america/martinique',
                         'america/matamoros' => 'america/matamoros', 
                         'america/mazatlan' => 'america/mazatlan', 
                         'america/menominee' => 'america/menominee',
                         'america/merida' => 'america/merida', 
                         'america/metlakatla' => 'america/metlakatla', 
                         'america/mexico_city' => 'america/mexico_city',
                         'america/miquelon' => 'america/miquelon', 
                         'america/moncton' => 'america/moncton', 
                         'america/monterrey' => 'america/monterrey',
                         'america/montevideo' => 'america/montevideo', 
                         'america/montserrat' => 'america/montserrat', 
                         'america/nassau' => 'america/nassau',
                         'america/new_york' => 'america/new_york', 
                         'america/nome' => 'america/nome', 
                         'america/noronha' => 'america/noronha',
                         'america/north_dakota/beulah' => 'america/north_dakota/beulah', 
                         'america/north_dakota/center' => 'america/north_dakota/center',
                         'america/north_dakota/new_salem' => 'america/north_dakota/new_salem', 
                         'america/nuuk' => 'america/nuuk', 
                         'america/ojinaga' => 'america/ojinaga',
                         'america/panama' => 'america/panama', 
                         'america/paramaribo' => 'america/paramaribo', 
                         'america/phoenix' => 'america/phoenix',
                         'america/port-au-prince' => 'america/port-au-prince', 
                         'america/port_of_spain' => 'america/port_of_spain',
                         'america/porto_velho' => 'america/porto_velho', 
                         'america/puerto_rico' => 'america/puerto_rico', 
                         'america/punta_arenas' => 'america/punta_arenas',
                         'america/rankin_inlet' => 'america/rankin_inlet', 
                         'america/recife' => 'america/recife', 
                         'america/regina' => 'america/regina',
                         'america/resolute' => 'america/resolute', 
                         'america/rio_branco' => 'america/rio_branco', 
                         'america/santarem' => 'america/santarem',
                         'america/santiago' => 'america/santiago', 
                         'america/santo_domingo' => 'america/santo_domingo', 
                         'america/sao_paulo' => 'america/sao_paulo',
                         'america/scoresbysund' => 'america/scoresbysund', 
                         'america/sitka' => 'america/sitka', 
                         'america/st_barthelemy' => 'america/st_barthelemy',
                         'america/st_johns' => 'america/st_johns', 
                         'america/st_kitts' => 'america/st_kitts', 
                         'america/st_lucia' => 'america/st_lucia',
                         'america/st_thomas' => 'america/st_thomas', 
                         'america/st_vincent' => 'america/st_vincent', 
                         'america/swift_current' => 'america/swift_current',
                         'america/tegucigalpa' => 'america/tegucigalpa', 
                         'america/thule' => 'america/thule', 
                         'america/tijuana' => 'america/tijuana',
                         'america/toronto' => 'america/toronto', 
                         'america/tortola' => 'america/tortola', 
                         'america/vancouver' => 'america/vancouver',
                         'america/whitehorse' => 'america/whitehorse', 
                         'america/winnipeg' => 'america/winnipeg', 
                         'america/yakutat' => 'america/yakutat',
                         'antarctica/casey' => 'antarctica/casey', 
                         'antarctica/davis' => 'antarctica/davis', 
                         'antarctica/dumontdurville' => 'antarctica/dumontdurville',
                         'antarctica/macquarie' => 'antarctica/macquarie', 
                         'antarctica/mawson' => 'antarctica/mawson', 
                         'antarctica/mcmurdo' => 'antarctica/mcmurdo',
                         'antarctica/palmer' => 'antarctica/palmer', 
                         'antarctica/rothera' => 'antarctica/rothera', 
                         'antarctica/syowa' => 'antarctica/syowa',
                         'antarctica/troll' => 'antarctica/troll', 
                         'antarctica/vostok' => 'antarctica/vostok', 
                         'arctic/longyearbyen' => 'arctic/longyearbyen',
                         'asia/aden' => 'asia/aden', 
                         'asia/almaty' => 'asia/almaty', 
                         'asia/amman' => 'asia/amman', 
                         'asia/anadyr' => 'asia/anadyr',
                         'asia/aqtau' => 'asia/aqtau', 
                         'asia/aqtobe' => 'asia/aqtobe', 
                         'asia/ashgabat' => 'asia/ashgabat', 
                         'asia/atyrau' => 'asia/atyrau',
                         'asia/baghdad' => 'asia/baghdad', 
                         'asia/bahrain' => 'asia/bahrain', 
                         'asia/baku' => 'asia/baku', 
                         'asia/bangkok' => 'asia/bangkok',
                         'asia/barnaul' => 'asia/barnaul', 
                         'asia/beirut' => 'asia/beirut', 
                         'asia/bishkek' => 'asia/bishkek', 
                         'asia/brunei' => 'asia/brunei',
                         'asia/chita' => 'asia/chita', 
                         'asia/choibalsan' => 'asia/choibalsan', 
                         'asia/colombo' => 'asia/colombo', 
                         'asia/damascus' => 'asia/damascus',
                         'asia/dhaka' => 'asia/dhaka', 
                         'asia/dili' => 'asia/dili', 
                         'asia/dubai' => 'asia/dubai', 
                         'asia/dushanbe' => 'asia/dushanbe',
                         'asia/famagusta' => 'asia/famagusta', 
                         'asia/gaza' => 'asia/gaza', 
                         'asia/hebron' => 'asia/hebron', 
                         'asia/ho_chi_minh' => 'asia/ho_chi_minh',
                         'asia/hong_kong' => 'asia/hong_kong', 
                         'asia/hovd' => 'asia/hovd', 
                         'asia/irkutsk' => 'asia/irkutsk', 
                         'asia/jakarta' => 'asia/jakarta',
                         'asia/jayapura' => 'asia/jayapura', 
                         'asia/jerusalem' => 'asia/jerusalem', 
                         'asia/kabul' => 'asia/kabul', 
                         'asia/kamchatka' => 'asia/kamchatka',
                         'asia/karachi' => 'asia/karachi', 
                         'asia/kathmandu' => 'asia/kathmandu', 
                         'asia/khandyga' => 'asia/khandyga', 
                         'asia/kolkata' => 'asia/kolkata',
                         'asia/krasnoyarsk' => 'asia/krasnoyarsk', 
                         'asia/kuala_lumpur' => 'asia/kuala_lumpur', 
                         'asia/kuching' => 'asia/kuching',
                         'asia/kuwait' => 'asia/kuwait', 
                         'asia/macau' => 'asia/macau', 
                         'asia/magadan' => 'asia/magadan', 
                         'asia/makassar' => 'asia/makassar',
                         'asia/manila' => 'asia/manila', 
                         'asia/muscat' => 'asia/muscat', 
                         'asia/nicosia' => 'asia/nicosia', 
                         'asia/novokuznetsk' => 'asia/novokuznetsk',
                         'asia/novosibirsk' => 'asia/novosibirsk', 
                         'asia/omsk' => 'asia/omsk', 
                         'asia/oral' => 'asia/oral', 
                         'asia/phnom_penh' => 'asia/phnom_penh',
                         'asia/pontianak' => 'asia/pontianak', 
                         'asia/pyongyang' => 'asia/pyongyang', 
                         'asia/qatar' => 'asia/qatar', 
                         'asia/qostanay' => 'asia/qostanay',
                         'asia/qyzylorda' => 'asia/qyzylorda', 
                         'asia/riyadh' => 'asia/riyadh', 
                         'asia/sakhalin' => 'asia/sakhalin', 
                         'asia/samarkand' => 'asia/samarkand',
                         'asia/seoul' => 'asia/seoul', 
                         'asia/shanghai' => 'asia/shanghai', 
                         'asia/singapore' => 'asia/singapore', 
                         'asia/srednekolymsk' => 'asia/srednekolymsk',
                         'asia/taipei' => 'asia/taipei', 
                         'asia/tashkent' => 'asia/tashkent', 
                         'asia/tbilisi' => 'asia/tbilisi', 
                         'asia/tehran' => 'asia/tehran',
                         'asia/thimphu' => 'asia/thimphu', 
                         'asia/tokyo' => 'asia/tokyo', 
                         'asia/tomsk' => 'asia/tomsk', 
                         'asia/ulaanbaatar' => 'asia/ulaanbaatar',
                         'asia/urumqi' => 'asia/urumqi', 
                         'asia/ust-nera' => 'asia/ust-nera', 
                         'asia/vientiane' => 'asia/vientiane', 
                         'asia/vladivostok' => 'asia/vladivostok',
                         'asia/yakutsk' => 'asia/yakutsk', 
                         'asia/yangon' => 'asia/yangon', 
                         'asia/yekaterinburg' => 'asia/yekaterinburg',
                         'asia/yerevan' => 'asia/yerevan', 
                         'atlantic/azores' => 'atlantic/azores', 
                         'atlantic/bermuda' => 'atlantic/bermuda',
                         'atlantic/canary' => 'atlantic/canary', 
                         'atlantic/cape_verde' => 'atlantic/cape_verde', 
                         'atlantic/faroe' => 'atlantic/faroe',
                         'atlantic/madeira' => 'atlantic/madeira', 
                         'atlantic/reykjavik' => 'atlantic/reykjavik', 
                         'atlantic/south_georgia' => 'atlantic/south_georgia',
                         'atlantic/st_helena' => 'atlantic/st_helena', 
                         'atlantic/stanley' => 'atlantic/stanley', 
                         'australia/adelaide' => 'australia/adelaide',
                         'australia/brisbane' => 'australia/brisbane', 
                         'australia/broken_hill' => 'australia/broken_hill', 
                         'australia/darwin' => 'australia/darwin',
                         'australia/eucla' => 'australia/eucla', 
                         'australia/hobart' => 'australia/hobart', 
                         'australia/lindeman' => 'australia/lindeman',
                         'australia/lord_howe' => 'australia/lord_howe', 
                         'australia/melbourne' => 'australia/melbourne', 
                         'australia/perth' => 'australia/perth',
                         'australia/sydney' => 'australia/sydney', 
                         'europe/amsterdam' => 'europe/amsterdam', 
                         'europe/andorra' => 'europe/andorra',
                         'europe/astrakhan' => 'europe/astrakhan', 
                         'europe/athens' => 'europe/athens', 
                         'europe/belgrade' => 'europe/belgrade',
                         'europe/berlin' => 'europe/berlin', 
                         'europe/bratislava' => 'europe/bratislava', 
                         'europe/brussels' => 'europe/brussels',
                         'europe/bucharest' => 'europe/bucharest', 
                         'europe/budapest' => 'europe/budapest', 
                         'europe/busingen' => 'europe/busingen',
                         'europe/chisinau' => 'europe/chisinau', 
                         'europe/copenhagen' => 'europe/copenhagen', 
                         'europe/dublin' => 'europe/dublin',
                         'europe/gibraltar' => 'europe/gibraltar', 
                         'europe/guernsey' => 'europe/guernsey', 
                         'europe/helsinki' => 'europe/helsinki',
                         'europe/isle_of_man' => 'europe/isle_of_man', 
                         'europe/istanbul' => 'europe/istanbul', 
                         'europe/jersey' => 'europe/jersey',
                         'europe/kaliningrad' => 'europe/kaliningrad', 
                         'europe/kirov' => 'europe/kirov', 
                         'europe/kyiv' => 'europe/kyiv',
                         'europe/lisbon' => 'europe/lisbon', 
                         'europe/ljubljana' => 'europe/ljubljana', 
                         'europe/london' => 'europe/london',
                         'europe/luxembourg' => 'europe/luxembourg', 
                         'europe/madrid' => 'europe/madrid', 
                         'europe/malta' => 'europe/malta',
                         'europe/mariehamn' => 'europe/mariehamn', 
                         'europe/minsk' => 'europe/minsk', 
                         'europe/monaco' => 'europe/monaco',
                         'europe/moscow' => 'europe/moscow', 
                         'europe/oslo' => 'europe/oslo', 
                         'europe/paris' => 'europe/paris', 
                         'europe/podgorica' => 'europe/podgorica',
                         'europe/prague' => 'europe/prague', 
                         'europe/riga' => 'europe/riga', 
                         'europe/rome' => 'europe/rome', 
                         'europe/samara' => 'europe/samara',
                         'europe/san_marino' => 'europe/san_marino', 
                         'europe/sarajevo' => 'europe/sarajevo', 
                         'europe/saratov' => 'europe/saratov',
                         'europe/simferopol' => 'europe/simferopol', 
                         'europe/skopje' => 'europe/skopje', 
                         'europe/sofia' => 'europe/sofia',
                         'europe/stockholm' => 'europe/stockholm', 
                         'europe/tallinn' => 'europe/tallinn', 
                         'europe/tirane' => 'europe/tirane',
                         'europe/ulyanovsk' => 'europe/ulyanovsk', 
                         'europe/vaduz' => 'europe/vaduz', 
                         'europe/vatican' => 'europe/vatican',
                         'europe/vienna' => 'europe/vienna', 
                         'europe/vilnius' => 'europe/vilnius', 
                         'europe/volgograd' => 'europe/volgograd',
                         'europe/warsaw' => 'europe/warsaw', 
                         'europe/zagreb' => 'europe/zagreb', 
                         'europe/zurich' => 'europe/zurich',
                         'indian/antananarivo' => 'indian/antananarivo', 
                         'indian/chagos' => 'indian/chagos', 
                         'indian/christmas' => 'indian/christmas',
                         'indian/cocos' => 'indian/cocos', 
                         'indian/comoro' => 'indian/comoro', 
                         'indian/kerguelen' => 'indian/kerguelen',
                         'indian/mahe' => 'indian/mahe', 
                         'indian/maldives' => 'indian/maldives', 
                         'indian/mauritius' => 'indian/mauritius',
                         'indian/mayotte' => 'indian/mayotte', 
                         'indian/reunion' => 'indian/reunion', 
                         'pacific/apia' => 'pacific/apia',
                         'pacific/auckland' => 'pacific/auckland', 
                         'pacific/bougainville' => 'pacific/bougainville', 
                         'pacific/chatham' => 'pacific/chatham',
                         'pacific/chuuk' => 'pacific/chuuk', 
                         'pacific/easter' => 'pacific/easter', 
                         'pacific/efate' => 'pacific/efate',
                         'pacific/fakaofo' => 'pacific/fakaofo', 
                         'pacific/fiji' => 'pacific/fiji', 
                         'pacific/funafuti' => 'pacific/funafuti',
                         'pacific/galapagos' => 'pacific/galapagos', 
                         'pacific/gambier' => 'pacific/gambier', 
                         'pacific/guadalcanal' => 'pacific/guadalcanal',
                         'pacific/guam' => 'pacific/guam', 
                         'pacific/honolulu' => 'pacific/honolulu', 
                         'pacific/kanton' => 'pacific/kanton',
                         'pacific/kiritimati' => 'pacific/kiritimati', 
                         'pacific/kosrae' => 'pacific/kosrae', 
                         'pacific/kwajalein' => 'pacific/kwajalein',
                         'pacific/majuro' => 'pacific/majuro', 
                         'pacific/marquesas' => 'pacific/marquesas', 
                         'pacific/midway' => 'pacific/midway',
                         'pacific/nauru' => 'pacific/nauru', 
                         'pacific/niue' => 'pacific/niue', 
                         'pacific/norfolk' => 'pacific/norfolk',
                         'pacific/noumea' => 'pacific/noumea', 
                         'pacific/pago_pago' => 'pacific/pago_pago', 
                         'pacific/palau' => 'pacific/palau',
                         'pacific/pitcairn' => 'pacific/pitcairn', 
                         'pacific/pohnpei' => 'pacific/pohnpei', 
                         'pacific/port_moresby' => 'pacific/port_moresby',
                         'pacific/rarotonga' => 'pacific/rarotonga', 
                         'pacific/saipan' => 'pacific/saipan', 
                         'pacific/tahiti' => 'pacific/tahiti',
                         'pacific/tarawa' => 'pacific/tarawa', 
                         'pacific/tongatapu' => 'pacific/tongatapu',
                         'pacific/wake' => 'pacific/wake', 
                         'pacific/wallis' => 'pacific/wallis');

        break;
        case 'get_channel_system_parameters_ARRAY':
            // 5 :: Wednesday, June 12, 2024 @ 0339 hrs.

            //
            // INITIALIZE GLOBAL SYSTEM PARAMETERS FOR 
            // CRNRSTN :: Lightsaber RoCEv2 SOAP Services 
            // Layer Multi-Channel Decoupled Data 
            // Object (MC-DDO) PLAID INTEGRATIONS ON 
            // THE $_GET[] CHANNEL. 
            //
           	// SOME UPS TRACKING URL PARAMETERS FROM 
            // an UPS EMAIL ADDED ON 
            // Tuesday, February 13, 2024 @ 1245 hrs.
            return array('crnrstn_' => 'crnrstn_', 
                         'crnrstn_m' => 'crnrstn_m',
                         'crnrstn_l' => 'crnrstn_l', 
                         'crnrstn_r' => 'crnrstn_r', 
                         'crnrstn_sk' => 'crnrstn_sk', 
                         'crnrstn_bst' => 'crnrstn_bst',
                         'crnrstn_sid' => 'crnrstn_sid', 
                         'crnrstn_smk' => 'crnrstn_smk', 
                         'crnrstn_css_valptrn' => 'crnrstn_css_valptrn',
                         'crnrstn_encrypt_tunnel' => 'crnrstn_encrypt_tunnel', 
                         'R_cbust' => 'R_cbust', 
                         'utm_source' => 'utm_source', 
                         'utm_medium' => 'utm_medium',
                         'utm_campaign' => 'utm_campaign', 
                         'utm_unptid' => 'utm_unptid', 
                         'utm_term' => 'utm_term', 
                         'fbclid' => 'fbclid',
                         'gid' => 'gid', 
                         'pattern' => 'pattern', 
                         'scope' => 'scope', 
                         'q' => 'q', 
                         'w' => 'w', 
                         'e' => 'e', 
                         'r' => 'r',
                         't' => 't', 
                         'y' => 'y', 
                         'u' => 'u', 
                         'i' => 'i', 
                         'o' => 'o', 
                         'p' => 'p', 
                         'a' => 'a', 
                         's' => 's', 
                         'd' => 'd',
                         'f' => 'f', 
                         'g' => 'g', 
                         'h' => 'h', 
                         'j' => 'j', 
                         'k' => 'k', 
                         'l' => 'l', 
                         'z' => 'z', 
                         'x' => 'x', 
                         'v' => 'v',
                         'b' => 'b', 
                         'n' => 'n', 
                         'm' => 'm', 
                         'geo' => 'geo', 
                         'hl' => 'hl', 
                         'language' => 'language', 
                         'locale' => 'locale', 
                         'loc' => 'loc',
                         'pmln' => 'pmln', 
                         'domain' => 'domain', 
                         'content' => 'content', 
                         'userId' => 'userId', 
                         'memberId' => 'memberId',
                         'c' => 'c', 
                         'js' => 'js', 
                         'noticeType' => 'noticeType', 
                         'text' => 'text', 
                         'cdn' => 'cdn', 
                         'pcookie' => 'pcookie',
                         'gtm' => 'gtm', 
                         'cid' => 'cid', 
                         'sourceid' => 'sourceid', 
                         'qs' => 'qs', 
                         'sc' => 'sc', 
                         'cvid' => 'cvid', 
                         'FORM' => 'FORM',
                         'asbe' => 'asbe', 
                         'filters' => 'filters', 
                         'sp' => 'sp', 
                         'lq' => 'lq', 
                         'aqs' => 'aqs', 
                         'ie' => 'ie', 
                         'LinkId' => 'LinkId',
                         'intent' => 'intent', 
                         'src' => 'src', 
                         'ref_id' => 'ref_id', 
                         'ppid' => 'ppid', 
                         'cnac' => 'cnac', 
                         'rsta' => 'rsta',
                         'cust' => 'cust', 
                         'unptid' => 'unptid', 
                         'calc' => 'calc', 
                         'unp_tpcid' => 'unp_tpcid', 
                         'page' => 'page', 
                         'pgrp' => 'pgrp',
                         'mchn' => 'mchn', 
                         'mail' => 'mail', 
                         'appVersion' => 'appVersion', 
                         'xt' => 'xt', 
                         'dest' => 'dest', 
                         'sourceId' => 'sourceId',
                         'platform' => 'platform', 
                         'landing' => 'landing', 
                         'orientation' => 'orientation', 
                         'pageType' => 'pageType',
                         'categoryName' => 'categoryName', 
                         'logged' => 'logged', 
                         'retargeted' => 'retargeted', 
                         'adblocked' => 'adblocked',
                         'widgetName' => 'widgetName', 
                         'widgetElement' => 'widgetElement', 
                         'isUserLogged' => 'isUserLogged', 
                         'isUserRetargeted' => 'isUserRetargeted',
                         'segment' => 'segment', 
                         'exp' => 'exp', 
                         'xhStatsUid' => 'xhStatsUid', 
                         'xhSessionToken' => 'xhSessionToken',
                         'xhSessionStartedAt' => 'xhSessionStartedAt', 
                         'remove_ads' => 'remove_ads', 
                         'spot_owner' => 'spot_owner', 
                         'spot_type' => 'spot_type',
                         'spot_page_type' => 'spot_page_type', 
                         'spot_platform' => 'spot_platform', 
                         'spot_orientation' => 'spot_orientation',
                         'spot_is_logged' => 'spot_is_logged', 
                         'spotPageType' => 'spotPageType', 
                         'spotType' => 'spotType', 
                         'locationCountry' => 'locationCountry',
                         'webp' => 'webp', 
                         'statsUID' => 'statsUID', 
                         'lenderref' => 'lenderref', 
                         'referralsource' => 'referralsource',
                         'tracking_numbers' => 'tracking_numbers', 
                         'mediaType' => 'mediaType', 
                         'WT.z_eCTAid' => 'WT.z_eCTAid', 
                         'WT.z_edatesent' => 'WT.z_edatesent',
                         'Requester' => 'Requester', 
                         'requester' => 'requester', 
                         'trackNums' => 'trackNums', 
                         'tracknum' => 'tracknum', 
                         'AgreeToTermsAndConditions' => 'AgreeToTermsAndConditions',
                         'include' => 'include', 
                         'qt' => 'qt', 
                         'C' => 'C', 
                         'K' => 'K', 
                         'M' => 'M', 
                         'R' => 'R', 
                         'T' => 'T', 
                         'U' => 'U',
                         'H' => 'H', 
                         'ref_' => 'ref_', 
                         '$_ga' => '$_ga', 
                         'aref' => 'aref', 
                         'medium' => 'medium', 
                         'mid' => 'mid', 
                         'bcode' => 'bcode',
                         'n_m' => 'n_m', 
                         'lloc' => 'lloc', 
                         'rms' => 'rms', 
                         'irms' => 'irms', 
                         'lipi' => 'lipi', 
                         'midSig' => 'midSig',
                         'trkEmail' => 'trkEmail', 
                         'trk' => 'trk', 
                         '_sig' => '_sig', 
                         'id' => 'id', 
                         'target_user_id' => 'target_user_id',
                         'click_source' => 'click_source', 
                         'token' => 'token', 
                         'uid' => 'uid', 
                         'bypass' => 'bypass', 
                         'url' => 'url',
                         'cn' => 'cn', 
                         'sig' => 'sig', 
                         'iid' => 'iid', 
                         'nid' => 'nid', 
                         'sa' => 'sa', 
                         'ai' => 'ai', 
                         'ae' => 'ae', 
                         'ase' => 'ase',
                         'gclid' => 'gclid', 
                         'cit' => 'cit', 
                         'num' => 'num', 
                         'adurl' => 'adurl', 
                         'client' => 'client', 
                         'label' => 'label',
                         '_t' => '_t', 
                         '_m' => '_m', 
                         '_e' => '_e', 
                         'ts' => 'ts', 
                         'endpoint' => 'endpoint', 
                         'flow' => 'flow', 
                         'term' => 'term',
                         'addItem' => 'addItem', 
                         'jtype' => 'jtype', 
                         'prodCode' => 'prodCode', 
                         'quantity' => 'quantity', 
                         'path' => 'path',
                         'channel' => 'channel', 
                         'plan' => 'plan', 
                         'dpr' => 'dpr', 
                         'fmt' => 'fmt', 
                         'tlds' => 'tlds', 
                         'allowPriorityTlds' => 'allowPriorityTlds',
                         'edsDomainsSearch' => 'edsDomainsSearch', 
                         'domainNames' => 'domainNames', 
                         'family' => 'family', 
                         'display' => 'display',
                         '_V_2' => '_V_2', 
                         '_K11_' => '_K11_', 
                         '_L54AD1F204_' => '_L54AD1F204_', 
                         '_K13_1' => '_K13_1', 
                         '_K14_' => '_K14_',
                         'ui' => 'ui', 
                         'ik' => 'ik', 
                         'view' => 'view', 
                         'permmsgid' => 'permmsgid', 
                         'ser' => 'ser', 
                         'jwtH' => 'jwtH',
                         'jwtP' => 'jwtP', 
                         'jwtS' => 'jwtS', 
                         '__dU__' => '__dU__', 
                         '__F__' => '__F__', 
                         'ch' => 'ch', 
                         'user_id' => 'user_id',
                         'od' => 'od', 
                         'target' => 'target', 
                         'upn' => 'upn', 
                         'clabid' => 'clabid', 
                         'p1' => 'p1', 
                         'p2' => 'p2', 
                         'p3' => 'p3',
                         'p4' => 'p4', 
                         'p5' => 'p5', 
                         'p6' => 'p6', 
                         'p7' => 'p7', 
                         'p8' => 'p8', 
                         'p9' => 'p9', 
                         'p10' => 'p10', 
                         'mh' => 'mh');

        break;
        case 'nusoap_framework_directory':

            //return '1.123';
            return '1.124';

        break;
        case 'one_slam_dunk_at_runtime':
        case 'runtime_execution_patch':
            // 5 :: Thursday, July 11, 2024 @ 0130 hrs.
            // TODO :: This case should run either
            //         once per session or once per page
            //         load as a sandbox for the,
            //         execution of custom code, should
            //         such a thing be desireable to
            //         look upon and in looking,
            //         it is liked, how it looks.
            //
            //         Like:    array(CRNRSTN_LOAD_1_TO_1_SESSION => 1),
            //                  array(CRNRSTN_LOAD_1_TO_1_REQUEST => 1),
            //                  array(CRNRSTN_LOAD_ON_TTL_EXPIRE => 120).
            //
            //
            //          5
            //
            //          Wednesday, July 31, 2024 @ 0349 hrs.

            return NULL;

        break;
        case 'server_operations_ARRAY':

            return array(
                'ini_restore'                   => array(
                    'KEY'                   => 'CRNRSTN_PHP_INI',
                    'URL'                   => 'https://www.php.net/manual/en/function.ini-restore.php',
                    'LINK_TEXT'             => 'ini_restore',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Restores the value of a ' . 
                                  'configuration option. Restores ' . 
                                  'a given configuration option ' . 
                                  'to its original value.',
                        'TEXT' => 'Restores the value of a ' . 
                                  'configuration option. Restores ' . 
                                  'a given configuration option ' . 
                                  'to its original value.'
                )),
                'ini_set'                       => array(
                    'KEY'                   => 'CRNRSTN_PHP_INI',
                    'URL'                   => 'https://www.php.net/manual/en/function.ini-set.php',
                    'LINK_TEXT'             => 'ini_set',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Sets the value of a ' . 
                                  'configuration option. ' . 
                                  'Sets the value of the ' . 
                                  'given configuration option. ' . 
                                  'The configuration option ' . 
                                  'will keep this new value ' . 
                                  'during the script\'s execution, ' . 
                                  'and will be restored at ' . 
                                  'the script\'s ending.',
                        'TEXT' => 'Sets the value of a ' . 
                                  'configuration option. ' . 
                                  'Sets the value of the ' . 
                                  'given configuration option. ' . 
                                  'The configuration option ' . 
                                  'will keep this new value ' . 
                                  'during the script\'s execution, ' . 
                                  'and will be restored at ' . 
                                  'the script\'s ending.'
                )),
                'ini_get'                       => array(
                    'KEY'                   => 'CRNRSTN_PHP_INI',
                    'URL'                   => 'https://www.php.net/manual/en/function.ini-get.php',
                    'LINK_TEXT'             => 'ini_get',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Gets the value of a ' . 
                                  'configuration option. ' . 
                                  'Returns the value of ' . 
                                  'the configuration ' . 
                                  'option on success.',
                        'TEXT' => 'Gets the value of a ' . 
                                  'configuration option. ' . 
                                  'Returns the value of ' . 
                                  'the configuration ' . 
                                  'option on success.'
                )),
                'ini_get_all'                   => array(
                    'KEY'                   => 'CRNRSTN_PHP_INI',
                    'URL'                   => 'https://www.php.net/manual/en/function.ini-get-all.php',
                    'LINK_TEXT'             => 'ini_get_all',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Gets all configuration ' . 
                                  'options. Returns all ' . 
                                  'the registered ' . 
                                  'configuration options.',
                        'TEXT' => 'Gets all configuration ' . 
                                  'options. Returns all ' . 
                                  'the registered ' . 
                                  'configuration options.'
                )),
                'get_declared_classes'          => array(
                    'KEY'                   => 'CRNRSTN_DECLARED_CLASSES',
                    'URL'                   => 'https://www.php.net/manual/en/function.get-declared-classes',
                    'LINK_TEXT'             => 'get_declared_classes',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Returns an array ' . 
                                  'with the name of ' . 
                                  'the defined classes.',
                        'TEXT' => 'Returns an array ' . 
                                  'with the name of ' . 
                                  'the defined classes.'
                )),
                'get_extension_funcs'           => array(
                    'KEY'                   => 'CRNRSTN_MODULE_EXTENSION_FUNCTIONS',
                    'URL'                   => 'https://www.php.net/manual/en/function.get-extension-funcs.php',
                    'LINK_TEXT'             => 'get_extension_funcs',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Returns an array with ' . 
                                  'the names of the ' . 
                                  'functions of a module. ' . 
                                  'This function returns ' . 
                                  'the names of all the ' . 
                                  'functions defined in ' . 
                                  'the module indicated ' . 
                                  'by extension.',
                        'TEXT' => 'Returns an array with ' . 
                                  'the names of the ' . 
                                  'functions of a module. ' . 
                                  'This function returns ' . 
                                  'the names of all the ' . 
                                  'functions defined in ' . 
                                  'the module indicated ' . 
                                  'by extension.'
                )),
                'get_defined_functions'         => array(
                    'KEY'                   => 'CRNRSTN_NATIVE_PHP_DEFINED_FUNCTIONS',
                    'URL'                   => 'https://www.php.net/manual/en/function.get-defined-functions.php',
                    'LINK_TEXT'             => 'get_defined_functions',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Returns an array of ' . 
                                  'all defined functions.',
                        'TEXT' => 'Returns an array of ' . 
                                  'all defined functions.'
                )),
                'get_defined_constants'         => array(
                    'KEY'                   => 'CRNRSTN_PHP_DEFINED_CONSTANTS',
                    'URL'                   => 'https://www.php.net/manual/en/function.get-defined-constants.php',
                    'LINK_TEXT'             => 'get_defined_constants',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Returns an associative array ' . 
                                  'with the names of all the ' . 
                                  'constants and their values. ' . 
                                  'Returns the names and values ' . 
                                  'of all the constants ' . 
                                  'currently defined. ' . 
                                  'This includes those created ' . 
                                  'by extensions as well as ' . 
                                  'those created with the ' . 
                                  $oCRNRSTN->return_crnrstn_text_link('define', 'PHP_ELLIPSE', 'https://www.php.net/manual/en/function.define.php') . 
                                  ' function.',
                        'TEXT' => 'Returns an associative array ' . 
                                  'with the names of all the ' . 
                                  'constants and their values. ' . 
                                  'Returns the names and values ' . 
                                  'of all the constants ' . 
                                  'currently defined. ' . 
                                  'This includes those created ' . 
                                  'by extensions as well as ' . 
                                  'those created with the ' . 
                                  'define() function.'
                )),
                'get_defined_vars'              => array(
                    'KEY'                   => 'CRNRSTN_PHP_DEFINED_VARIABLES',
                    'URL'                   => 'https://www.php.net/manual/en/function.get-defined-vars.php',
                    'LINK_TEXT'             => 'get_defined_vars',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Returns an array of all ' . 
                                  'defined variables. ' . 
                                  'This function returns a ' . 
                                  'multidimensional array ' . 
                                  'containing a list of all ' . 
                                  'defined variables, be them ' . 
                                  'environment, server or ' . 
                                  'user-defined variables, ' . 
                                  'within the scope that ' . 
                                  $oCRNRSTN->return_crnrstn_text_link('get_defined_vars', 'PHP_ELLIPSE', 'https://www.php.net/manual/en/function.get-defined-vars.php') . 
                                  ' is called.', 
                        'TEXT' => 'Returns an array of all ' . 
                                  'defined variables. ' . 
                                  'This function returns a ' . 
                                  'multidimensional array ' . 
                                  'containing a list of all ' . 
                                  'defined variables, be them ' . 
                                  'environment, server or ' . 
                                  'user-defined variables, ' . 
                                  'within the scope that ' . 
                                  'get_defined_vars() is called.'
                )),
                'extension_loaded'              => array(
                    'KEY'                   => 'CRNRSTN_PHP_LOADED_EXTENSIONS',
                    'URL'                   => 'https://www.php.net/manual/en/function.extension-loaded.php',
                    'LINK_TEXT'             => 'extension_loaded',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Find out whether an ' . 
                                  'extension is loaded.',
                        'TEXT' => 'Find out whether an ' . 
                                  'extension is loaded.'
                )),
                'get_loaded_extensions'         => array(
                    'KEY'                   => 'CRNRSTN_PHP_LOADED_EXTENSION_MODULES',
                    'URL'                   => 'https://www.php.net/manual/en/function.get-loaded-extensions.php',
                    'LINK_TEXT'             => 'get_loaded_extensions',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 4, PHP 5, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Returns an array with ' . 
                                  'the names of all modules ' . 
                                  'compiled and loaded. ' . 
                                  'This function returns ' . 
                                  'the names of all the ' . 
                                  'modules compiled and ' . 
                                  'loaded in the ' . 
                                  'PHP interpreter.',
                        'TEXT' => 'Returns an array with ' . 
                                  'the names of all modules ' . 
                                  'compiled and loaded. ' . 
                                  'This function returns ' . 
                                  'the names of all the ' . 
                                  'modules compiled and ' . 
                                  'loaded in the ' . 
                                  'PHP interpreter.'
                )),
                'openssl_get_md_methods'        => array(
                    'KEY'                   => 'CRNRSTN_OPENSSL_DIGEST_METHODS',
                    'URL'                   => 'https://www.php.net/manual/en/function.openssl-get-md-methods.php',
                    'LINK_TEXT'             => 'openssl_get_md_methods',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 5 >= 5.3.0, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Gets a list of available ' . 
                                  'digest methods.',
                        'TEXT' => 'Gets a list of available ' . 
                                  'digest methods.'
                )),
                'openssl_get_cipher_methods'    => array(
                    'KEY'                   => 'CRNRSTN_OPENSSL_CIPHERS',
                    'URL'                   => 'https://www.php.net/manual/en/function.openssl-get-cipher-methods.php',
                    'LINK_TEXT'             => 'openssl_get_cipher_methods',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 5 >= 5.3.0, PHP 7, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Gets a list of available ' . 
                                  'cipher methods.',
                        'TEXT' => 'Gets a list of available ' . 
                                  'cipher methods.'
                )),
                'hash_hmac_algos'               => array(
                    'KEY'                   => 'CRNRSTN_HMAC_HASH_ALGORITHMS',
                    'URL'                   => 'https://www.php.net/manual/en/function.hash-hmac-algos.php',
                    'LINK_TEXT'             => 'hash_hmac_algos',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 7 >= 7.2.0, PHP 8',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Return a list of ' . 
                                  'registered hashing ' . 
                                  'algorithms suitable ' . 
                                  'for hash_hmac.',
                        'TEXT' => 'Return a list of ' . 
                                  'registered hashing ' . 
                                  'algorithms suitable ' . 
                                  'for hash_hmac.'
                )),
                'hash_algos'                    => array(
                    'KEY'                   => 'CRNRSTN_HASH_ALGORITHMS',
                    'URL'                   => 'https://www.php.net/manual/en/function.hash-algos',
                    'LINK_TEXT'             => 'hash_algos',
                    'MEDIA_ELEMENT_KEY'     => 'PHP_ELLIPSE',
                    'DATA_TYPE'             => CRNRSTN_RESOURCE_DOCUMENTATION,
                    'INITIALIZATION'        => array(
                        'DEFAULT' =>
                            array(
                                CRNRSTN_INTEGER => -1,
                                'name' => ''
                            )
                    ),
                    'REMOVED_PHP_VERSION'   => '',
                    'DEPRECATED_PHP_VERSION'=> '',
                    'SUPPORTED_PHP_VERSION' => 'PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1',
                    'DESCRIPTION_PHP_NET'   => array(
                        'HTML' => 'Return a list of ' . 
                                  'registered hashing algorithms.',
                        'TEXT' => 'Return a list of ' . 
                                  'registered hashing algorithms.'
                ))
            );

        break;
        default:

            error_log('[lnum ' . 
                __LINE__ . '] [func ' . 
                __FUNCTION__ . 
                '] unmatched system data $name[' . 
                $name . ']. die();');

            return $oCRNRSTN->session_salt();

        break;

    }

}