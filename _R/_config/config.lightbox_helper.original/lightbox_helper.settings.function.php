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
 * RESOURCE DEFINITION :: _lightbox_helper_by_eVifweb_settings
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Wednesday, July 3, 2024 @ 0809 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com/
 * TITLE               :: The System Settings Object
 *                        Initialization Global
 *                        Function Definition
 *                        for The Lightbox Helper
 *                        by eVifweb
 * DESCRIPTION         :: Load the requested system
 *                        setting(s) information for
 *                        The Lightbox Helper by
 *                        eVifweb into memory.
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
function _lightbox_helper_by_eVifweb_settings(
         $name, 
         $oLightbox_Helper = NULL)
{

    switch($name){
        case 'version_lightbox_helper':

            return '1.00.0000';

        break;
//        case 'R_framework_directory':
//
//            //return '_lightbox_helper';
//            return '_R';
//
//        break;
        case 'scriptures_get_param_name':

            return 'eVifweb_vv';

        break;
        case 'version_lightbox_helper_long_HTML':

            return 'The Lightbox Helper by e<span style="color:#F90000;">V</span>ifweb';

        break;
        case 'version_lightbox_helper_long_TEXT':

            return 'The Lightbox Helper by eVifweb';

        break;
        case 'version_lightbox_helper_short_HTML':

            return 'Lightbox Helper';

        break;
        case 'version_lightbox_helper_short_TEXT':

            return 'Lightbox Helper';

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
        case 'CRNRSTN_config_salt':

            /* $CRNRSTN_config_salt
             * OPTIONS ::
             *  This optional string should be unique.
             *
             * DESCRIPTION :: Specify an optional serialization salt for this configuration of CRNRSTN :: (1) if multiple
             *                CRNRSTN :: config files are running within this environment, e.g. n+1 micro-sites at the
             *                same IP, or (2) if this file will be called by n+1 different processes.
             *
             * @var string
             */
            //$CRNRSTN_config_salt = '';
            return '';

        break;
        case 'R_debug_mode':

            /*
            # C # R # N # R # S # T # N # :: # L # I # G # H # T
            PLEASE USE THE HARD INTEGER
            VALUES HERE, AS THE CONSTANTS ARE
            NOT YET DEFINED.

            THERE IS UGC INPUT VALIDATION ON
            ALL PHP.INI AND CONFIGURATION
            DATA INPUT.


            5 ::

            Monday, July 1, 2024 @ 0609 hrs.
            -----
            CRNRSTN_DEBUG_OFF       =>      0
            CRNRSTN_DEBUG_SYSLOG    =>      1
            CRNRSTN_DEBUG_ON        =>      2

            /*  $R_debug_mode            PLEASE NOTE THAT THE CRNRSTN :: SOAP-SERVICES
             *                           LOGGING SERVICES LAYER IS CURRENTLY DOWN
             *                           AND/OR GOING THROUGH LIGHTSABER ON-BOARDING.
             *
             *
             *                          5 ::
             *
             *                          Tuesday, December 12, 2023 @ 2009 hrs.
             *
             *  DESCRIPTION      :: $R_debug_mode is the master debug mode
             *                      control variable for CRNRSTN ::
             *  OPTIONS          ::
             *  $R_debug_mode  =>  0  =>  CRNRSTN_DEBUG_OFF
             *  $R_debug_mode  =>  1  =>  CRNRSTN_DEBUG_SYSLOG
             *  $R_debug_mode  =>  2  =>  CRNRSTN_DEBUG_ON
             *
             *  DETAILS ::
             *      CRNRSTN_DEBUG_OFF       =>   0
             *      -----
             *      DESCRIPTION     :: Turns all error trace logging off. This is the default.
             *      NOTE            :: Minimal memory and additional processing overhead performance requirements
             *                         can be expected.
             *
             *      CRNRSTN_DEBUG_SYSLOG    =>   1
             *      -----
             *      DESCRIPTION     :: 100% error trace logging that will be sent to the
             *                         default error logging location via PHP native error_log(). No log data is aggregated
             *                         for delayed output via method invocation; $oLightbox_Helper_USR->get_error_log_trace() will
             *                         have no log data to return. Please note that ALL log silo data will be in the output
             *                         unless n+1 pipe delimited silo key(s) are provided to the CRNRSTN :: constructor. In
             *                         this case, only error trace log data aligning to the provided silo key(s) (or the '*'
             *                         silo key...same as NULL) will be sent to the PHP native error_log() method for output.
             *                         This would be useful if one desires to inspect trace logs for a particular section of
             *                         the application that possesses its own unique silo key. Log silo that are keyed with
             *                         a '*' character...which also includes NULL log silo parameter...will ALWAYS be traced
             *                         for error_log() output.
             *      NOTE            :: Minimal memory & some additional processing overhead performance requirements
             *                         can be expected.
             *
             *      CRNRSTN_DEBUG_ON        =>   2
             *      -----
             *      DESCRIPTION     :: 100% error trace logging with rolling aggregation TO THE END of the running
             *                         process. Provides controlled (invoked by method only) access to aggregated (and always
             *                         chronologically presented) trace log data for any pipe delimited log silo key(s) passed to
             *                         CRNRSTN :: method(s) for log output. See methods such as $oLightbox_Helper_USR->get_error_log_trace().
             *                         If ANY piped silo key(s) have been provided to the CRNRSTN :: constructor, only that/those
             *                         key(s) will be aggregated (and hence, available for output), and all other keyed log silo
             *                         data will be ignored. This does not pertain to silo key of '*'...which also includes NULL
             *                         log silo parameter; i.e. '*' log silo trace data will ALWAYS be aggregated and/or returned.
             *                         Any aggregated log trace data will also be appended to any CRNRSTN :: system exception
             *                         notification...e.g. EMAIL or write to custom FILE output.
             *      NOTE            :: Maximum additional memory and processing overhead requirements can be expected.
             *
             *
             *  TLDR;
             *  -----
             *  CRNRSTN_DEBUG_OFF     =>   0
             *  CRNRSTN_DEBUG_SYSLOG  =>   1
             *  CRNRSTN_DEBUG_ON      =>   2
             *
             *
             *  @var int
             */

            return 0;

        break;
        case 'PHPMAILER_debug_mode':
            /*
            # C # R # N # R # S # T # N # :: # L # I # G # H # T
            PLEASE USE THE HARD INTEGER
            VALUES HERE, AS THE CONSTANTS ARE
            NOT YET DEFINED.

            THERE IS UGC INPUT VALIDATION ON
            ALL PHP.INI AND CONFIGURATION
            DATA INPUT.


            5 ::

            Monday, July 1, 2024 @ 0611 hrs.
            -----
            CRNRSTN_PHPMAILER_DEBUG_OFF                 =>      0
            CRNRSTN_PHPMAILER_DEBUG_CLIENT              =>      1
            CRNRSTN_PHPMAILER_DEBUG_SERVER              =>      2
            CRNRSTN_PHPMAILER_DEBUG_CONNECTION          =>      3
            CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL            =>      4

            /*  $PHPMAILER_debug_mode
             *  DESCRIPTION :: Debug output level for PHPMAILER - PHPMailer is a full-featured email creation and transfer class
             *                 for PHP which has been refactored into CRNRSTN :: The debug output for PHPMailer is bubbled up
             *                 through the CRNRSTN :: SOAP Services LOGGING SERVICES LAYER which provides multiple log touch points
             *                 for an enriched debugging/log trace experience.
             *
             *  OPTIONS     ::
             *  CRNRSTN_PHPMAILER_DEBUG_OFF             0         No debug output, default
             *  CRNRSTN_PHPMAILER_DEBUG_CLIENT          1         Client commands
             *  CRNRSTN_PHPMAILER_DEBUG_SERVER          2         Client commands and server responses
             *  CRNRSTN_PHPMAILER_DEBUG_CONNECTION      3         As DEBUG_SERVER plus connection status
             *  CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL        4         Low-level data output for
             *                                                    all messages. This necessitates
             *                                                    the exposure of all usernames
             *                                                    and passwords!!
             *
             *  @var int
             *
             *  !!CAUTION   :: $PHPMAILER_debug_mode = CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL WILL expose all SMTP usernames
             *                 and passwords to CRNRSTN :: EXCEPTION HANDLING SERVICES LAYER which includes browser
             *                 accessible output modes of SCREEN_TEXT, SCREEN or SCREEN_HTML, and SCREEN_HTML_HIDDEN.
             *  !!
             */

            return 0;

        break;
        case 'CRNRSTN_log_silo_profile':
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            //  TL;DR
            //
            //  $CRNRSTN_log_silo_profile
            //
            //  FEATURES    :: THIS KIT WILL BE MORE IDEAL WHEN ONE CAN:
            //                 (1) LOG INTO CRNRSTN :: AS ADMIN,
            //                 (2) SEARCH FOR LOG SILOS (SEE, $log_silo_key
            //                     IN $oLightbox_Helper->error_log()), AND
            //                 (3) RUNTIME REVIEW ANY OF THESE LOGS
            //                     GENERATED BY ANY PAGE ON ANY CRNRSTN ::
            //                     CONFIGURED SERVER ENVIRONMENT THROUGH A
            //                     SESSION MANAGED FLOATING DOM WIDGET,
            //                     <IFRAME>, OR FULL-SCREEN DEDICATED
            //                     BROWSER POP-UP WINDOW REAL-TIME-AJAX
            //                     SERVER ACTIVITY MONITOR...WHICH SAID
            //                     BROWSER IS SENT AS DISPLAY OUTPUT TO A
            //                     PERMANENTLY MOUNTED 32" 6K APPLE RETINA
            //                     DISPLAY AT THE OFFICE.
            //
            //  DEV NOTE    :: IN THE HEAT OF CRNRSTN :: Lightsaber
            //                 DEVELOPMENT, IT IS JUST NOT IDEAL TO HAVE
            //                 TO CONSTANTLY BE CHANGING SOME DUMB GLOBAL
            //                 CONFIG VALUE WHEN I JUST NEED TO SEE ONE SILLY
            //                 ERROR LOG IN SOME OLD...BUT NOW UPDATED (AND
            //                 THEREFORE, NOW I WILL BE NEEDING TO UPDATE THE
            //                 CONFIG FILE FOR "THAT ONE SPECIFIC ERROR LOG" FROM
            //                 YESTERDAY...AGAIN) METHOD.
            //
            //
            //  5 ::
            //
            //  Saturday, November 2, 2023 @ 2250 hrs.
            //
            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            //  HERE ARE SOME LOG SILOS CURRENTLY IN USE
            //  IN CRNRSTN :: ERROR_LOG() OUTPUT METHOD
            //  CALLS (SOME USES MAY BE COMMENTED OUT).
            //  -----
            //  CRNRSTN_LOG_NONE                    =   42
            //  CRNRSTN_LOG_ALL                     =   43
            //  CRNRSTN_DATABASE_CONNECTION         =   2052
            //  CRNRSTN_DATABASE_QUERY              =   2053
            //  CRNRSTN_DATABASE_QUERY_SILO         =   2054
            //  CRNRSTN_SETTINGS_CRNRSTN            =   55
            //  CRNRSTN_SETTINGS_WORDPRESS          =   56
            //  CRNRSTN_GABRIEL                     =   3051
            //  CRNRSTN_ELECTRUM                    =   4051
            //  CRNRSTN_BARNEY                      =   9051
            //  CRNRSTN_BARNEY_DATABASE             =   9052
            //  CRNRSTN_BARNEY_FILE                 =   9053
            //  CRNRSTN_BARNEY_FTP                  =   9054
            //  CRNRSTN_BARNEY_ELECTRUM             =   9055
            //  CRNRSTN_BARNEY_GABRIEL              =   9056
            //  CRNRSTN_BARNEY_DISK                 =   9057
            //  CRNRSTN_RESOURCE_IMAGE              =   8597
            //  CRNRSTN_RESOURCE_DOCUMENT           =   8598
            //  CRNRSTN_RESOURCE_OPENSOURCE         =   8599
            //  CRNRSTN_RESOURCE_NEWS_SYNDICATION   =   8600
            //  CRNRSTN_RESOURCE_ELECTRUM           =   8601
            //  CRNRSTN_RESOURCE_THIRDPARTY         =   8602
            //  CRNRSTN_RESOURCE_FOOTER             =   8603
            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            //  I HAD TO STOP TRYING TO APPLY INTELLIGENT
            //  AND STRUCTURED CRNRSTN :: LOGGING CODES
            //  TO MY DEVELOPER ERROR LOGS A FEW YEARS
            //  AGO ON ACCOUNT OF THE HEAVY BURDEN
            //  COMMANDED BY TOO MUCH NEW STUFF THAT WAS
            //  STILL IN FLUX, BUT WAS ALSO PARTIALLY OR
            //  EVEN ALMOST 100% ROLLED OUT, MY BRO.
            //
            //  AS BOTH CHANGING THE WHEELS ON A MOVING
            //  CAR AND EXPECTING TOP TIER MULTI-CLASS
            //  RACING PIT STOP PERFORMANCE TOGETHER WITH
            //  A HAPPY IMSA OFFICIAL STANDING JUST RIGHT
            //  THERE ARE...OR SHOULD BE CONSIDERED TO
            //  BE...MUTUALLY EXCLUSIVE; WELL, AS I AM
            //  ONE PERSON...
            //
            //  I JUST ENDED UP USING ONE SINGLE GLOBALLY
            //  DEFINED INTEGER, CRNRSTN_SETTINGS_CRNRSTN,
            //  EVERYWHERE. AND I MEAN EVERYWHERE IN ALL
            //  MY $oLightbox_Helper->error_log() CALLS.
            //
            //  WE CAN STRENGTHEN THE INTERNAL LOG SILO
            //  (EFFECTIVELY "ZONE REPORTING") FOR THE
            //  CRNRSTN :: SOAP Services LOGGING
            //  SERVICES LAYER AT ANOTHER TIME.
            //
            //
            //  5 ::
            //
            //  Saturday, December 2, 2023 @ 2205 hrs.
            //  [EDITED] Monday, July 1, 2024 @ 0711 hrs.

            /*  $CRNRSTN_log_silo_profile   PLEASE NOTE THAT CRNRSTN :: LOGGING IS CURRENTLY
             *                              DOWN AND/OR GOING THROUGH LIGHTSABER ON-BOARDING.
             *
             *
             *                              5 ::
             *
             *                              Tuesday, December 12, 2023 @ 1911 hrs.
             *
             *  DESCRIPTION :: To limit ALL error log trace activity across the entire application to
             *                 hand selected CRNRSTN error log silo key(s), include the desired key(s) within a pipe
             *                 delimited string to the CRNRSTN :: constructor as the $CRNRSTN_log_silo_profile
             *                 parameter. Only the provided key(s)? will be processed. If an exclusion profile for
             *                 CRNRSTN :: error log silo output is desired, prefix any log silo key with '~' in order
             *                 to exclude that key from error log trace output across the entire application.
             *
             *                 When critical areas of an application need to be monitored in the background for
             *                 exception error log trace or bubbled to the surface during real-time development and QA,
             *                 CRNRSTN :: has a properly robust error_log() method which allows for the
             *                 strategic placement of "meta-data rich" application run-time log trace comments
             *                 throughout the code base. Due to the limitations of reviewing error logs via file
             *                 traversal within a terminal, it can be desired to effectively trim back error log
             *                 trace output from all areas of an application which are NOT under review. This would
             *                 leave error log trace data from the area(s) of interest front and center for more
             *                 ready review through a terminal, for example. Enter stage left...CRNRSTN :: Log Silos.
             *
             *                 By passing, as a parameter, a relevant-to-the-purpose-at-hand key at the end of each
             *                 invocation of the $oLightbox_Helper->error_log() method (such as, e.g., 'USER_SIGNIN' for
             *                 all error log trace relevant to user login use cases within an application), one can
             *                 effectively drive the logging trace profile of the entire application from the
             *                 CRNRSTN :: constructor and/or any method within CRNRSTN :: (such as
             *                 $oLightbox_Helper->get_error_log_trace()) which exposes log trace data by including just
             *                 the silo key(s) of interest...or excluding via prefix of a '~' silo key(s) from
             *                 perhaps more verbose sections of the application which effectively bloat the error
             *                 log trace data and are cumbersome to dig through in order to find the relatively
             *                 scant trace data currently under investigation.
             *
             *  @var integer
             */

            return '';

        break;
        case 'integer_constants_initialize':

            //
            // 5 :: Thursday, July 11, 2024 @ 0842 hrs.
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
            // 5 :: Thursday, July 11, 2024 @ 0850 hrs.
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
        case 'salt_length':

            return 64;

        break;
        case 'byte_reporting_precision':

            return 2;

        break;
        case 'byte_units_ARRAY[SI_METRIC][STRING_PATTERN][UNITS_EXPONENTIAL_POSITIVE]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            //
            // WE STORE BYTE UNITS POWER DATA WITH THE ARRAY INDEX, SINCE WE DON'T NEED
            // ANY ADDITIONAL STRING META DATA WHERE THIS STRUCTURE IS USED.
            return array('terabytes' => 4, 'terabyte' => 4, 'exabytes' => 6,
            'exabyte' => 6, 'yottabytes' => 8, 'yottabyte' => 8);

        break;
        case 'byte_units_ARRAY[ISO_80000][BASE]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            //
            // INITIALIZE ISO/IEC 80000-13 INFORMATION SCIENCE AND
            // TECHNOLOGY QUANTITIES AND UNITS DETECTION, POWER,
            // AND DATA ARCHITECTURE SUPPORT DATA STRUCTURES.
            //
            // 5 :: Wednesday, September 27, 2023 @ 2012 hrs.
            return 1024;

        break;
        case 'byte_units_ARRAY[SI_METRIC][BASE]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return 1000;

        break;
        case 'byte_units_ARRAY[ISO_80000][UNITS]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');

        break;
        case 'byte_units_ARRAY[SI_METRIC][UNITS]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('bytes', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

        break;
        case 'byte_units_ARRAY[ISO_80000][STRING_PATTERN][UNITS_BYTES_POSITIVE]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('bytes' => 0, 'byte' => 0);

        break;
        case 'byte_units_ARRAY[ISO_80000][CONTROL_PATTERN]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('b' => 0, 'ki' => 1, 'mi' => 2, 'gi' => 3,
            'ti' => 4, 'pi' => 5, 'ei' => 6, 'zi' => 7, 'yi' => 8);

        break;
        case 'byte_units_ARRAY[SI_METRIC][CONTROL_PATTERN]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('b' => 0, 'k' => 1, 'm' => 2, 'g' => 3,
            't' => 4, 'p' => 5, 'e' => 6, 'z' => 7, 'y' => 8);

        break;
        case 'byte_units_ARRAY[ISO_80000][STRING_PATTERN][ISO_UNITS_BYTES]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('bytes' => 'bytes', 'byte' => 'bytes', 'b' => 'bytes');

        break;
        case 'byte_units_ARRAY[ISO_80000][STRING_PATTERN][ISO_UNITS_EXPONENTIAL]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('ki' => 'kibibyte',
            'mi' => 'mebibyte', 'gi' => 'gibibyte', 'ti' => 'tebibyte', 'pi' => 'pebibyte', 'ei' => 'exbibyte',
            'zi' => 'zebibyte', 'yi' => 'yobibyte');

        break;
        case 'byte_units_ARRAY[SI_METRIC][STRING_PATTERN][SI_UNITS_BYTES]':
            // 5 :: Friday, July 5, 2024 @ 0050 hrs.

            return array('bytes' => 'bytes', 'byte' => 'bytes', 'b' => 'bytes');

        break;
        case 'byte_units_ARRAY[SI_METRIC][STRING_PATTERN][SI_UNITS_EXPONENTIAL]':
            // 5 :: Friday, July 5, 2024 @ 0051 hrs.

            return array('k' => 'kilobyte', 'm' => 'megabyte', 'g' => 'gigabyte',
            't' => 'terabyte', 'p' => 'petabyte', 'e' => 'exabyte',
            'z' => 'zettabyte', 'y' => 'yottabyte');

        break;
        case 'byte_reporting_units':
            // 5 :: Friday, July 5, 2024 @ 0044 hrs.
            // ['ISO_80000' or 'SI_Metric']

            return 'ISO_80000';

        break;
        case 'system_hmac_algorithm':

            return 'sha256';

        break;
        case 'system_openssl_cipher':

            return 'aes-192-ofb';

        break;
        case 'slam_dunk_at_runtime':
        case 'runtime_execution_patch':
            // 5 :: Thursday, July 11, 2024 @ 0153 hrs.
            // TODO :: This case should run either
            //         once per session or once per page
            //         load as a sandbox for the,
            //         execution of custom code, should
            //         such a thing be desireable to
            //         look upon and in looking,
            //         it is liked, how it looks.
            //
            //         Like, CRNRSTN_LOAD_1_TO_1_SESSION and CRNRSTN_LOAD_1_TO_1_REQUEST.

            return NULL;

        break;
        case 'config_resource_meta_ARRAY':

            error_log('[lnum ' . __LINE__ . '] [' . __METHOD__ . '] name[' .
            $name . '].');

            $tmp_output_ARRAY = array();

            //
            // Do we have any definition
            // files to return with this
            // (the current) resource
            // request so that the
            // additional files can be
            // loaded ahead of any
            // requests for any
            // dependent object?
            //
            //
            // 5 ::
            //
            // Wednesday, July 3, 2024 @ 0515 hrs.
            if(($oLightbox_Helper->isset_registered_resource_queue() == true) && !($oLightbox_Helper->islocked_registered_resource_queue() !== false)){

                error_log(__LINE__ . ' ' . __FUNCTION__ . ' $name[' . $name . '].');

                //
                // Lock down the resource
                // queue in preparation for
                // a recursive battery of
                // this globally defined
                // function as resources
                // spooled for memory load.
                //
                //
                // 5 ::
                //
                // Wednesday, July 3, 2024 @ 0526 hrs.
                $oLightbox_Helper->islocked_registered_resource_queue(true);

                $tmp_cnt = $oLightbox_Helper->count_registered_resource_queue();
                error_log('[lnum ' . __LINE__ . '] [' . __METHOD__ . '] name[' .
                $name . ']. tmp_cnt[' .
                $tmp_cnt . '].');
                die();

                $tmp_cnt = $oLightbox_Helper->count_registered_resource_queue();
                for($i = 0; $i < $tmp_cnt; $i++){

                    $tmp_register_name = $oLightbox_Helper->return_registered_resource_queue($i);
                    if($oLightbox_Helper->ping_registered_resources($tmp_register_name) !== false){

                        error_log('[lnum ' . __LINE__ . '] [' . __METHOD__ . '] tmp_register_name[' .
                        $tmp_register_name . ']. tmp_cnt[' .
                        $tmp_cnt . '].');

                        //
                        // Initialize a serialized
                        // resource request.
                        $oLightbox_Helper->new_registered_resource_request($tmp_register_name);

                        //
                        // Internally registered system
                        // configuration resource.
                        //$tmp_output_ARRAY[] = _lightbox_helper_by_eVifweb_settings($tmp_register_name, $oLightbox_Helper);
                        $tmp_output_ARRAY[] = _crnrstn_settings('config_resource_meta_ARRAY', $oLightbox_Helper);

                        error_log(__LINE__ . ' ' . __FUNCTION__ . ' $tmp_register_name[' . $tmp_register_name . ']. $tmp_output_ARRAY[' .
                        print_r($tmp_output_ARRAY, true) . '].');

                        die();

                    }else{

                        //
                        // Externally registered system
                        // configuration resource.
                        $tmp_output_ARRAY[] = $oLightbox_Helper->return_runtime_registered_resource_meta($tmp_register_name);

                        error_log(__LINE__ . ' ' . __FUNCTION__ . ' $tmp_register_name[' . $tmp_register_name . ']. $tmp_output_ARRAY[' .
                        print_r($tmp_output_ARRAY, true) . '].');

                        die();

                        //
                        // Initialize a serialized
                        // resource request.
                        //$oLightbox_Helper->new_registered_resource_request($tmp_register_name, $attribute = NULL, $filepath = NULL, $index = 0);

                    }

                }

                //
                // Clear out the configuration
                // resource queue.
                $oLightbox_Helper->clear_registered_resources_queue();

            }

            //
            // Return the configuration
            // file meta data array.
            return $tmp_output_ARRAY;

        break;
        case 'register_resource_temp_boot_ARRAY':
            // 5 :: Sunday, July 7, 2024 @ 2257 hrs.
            //
            // Where,
            // RESOURCE_TYPE = ['FUNCTION_DEFINITION',
            //                 'CLASS_DEFINITION',
            //                 'RUNTIME_EXECUTABLE'].
            //
            // The resources (for which this meta
            // is being compiled) are called very
            // early in the constructor of...
            //
            // The Lightbox Helper
            // by eVifweb.

            $tmp_output_ARRAY = array();

            //
            // Configuration resource
            // basic path initialization.
            $tmp_slsh                       = DIRECTORY_SEPARATOR;
            $tmp_path                       = CRNRSTN_ROOT . $tmp_slsh . $oLightbox_Helper->get_data('R_framework_directory') . $tmp_slsh;
            $tmp_dir_root_config            = $tmp_path . '_config' . $tmp_slsh . 'config.lightbox_helper' . $tmp_slsh;
            $tmp_dir_root_crnrstn           = $tmp_path . 'class' . $tmp_slsh . 'crnrstn' . $tmp_slsh;
            $tmp_dir_root_environment       = $tmp_path . 'class' . $tmp_slsh . 'environment' . $tmp_slsh;

            //
            // The Lightbox Helper
            // by eVifweb Resource
            // Copy (HTML and TEXT)
            // Content Global
            // Function Definition File.
            $tmp_output_ARRAY['_lightbox_helper_load_resource_copy']['REGISTERED_NAME']                     = array('_lightbox_helper_load_resource_copy' => 1);
            $tmp_output_ARRAY['_lightbox_helper_load_resource_copy']['FILE_PATH']                           = $tmp_dir_root_config . '_lightbox_helper.resource_copy.inc.php';
            $tmp_output_ARRAY['_lightbox_helper_load_resource_copy']['LOAD_METHOD']                         = 'require';
            $tmp_output_ARRAY['_lightbox_helper_load_resource_copy']['RESOURCE_TYPE']                       = 'FUNCTION_DEFINITION';
            $tmp_output_ARRAY['_lightbox_helper_load_resource_copy']['FILE_HASHING_ALGORITHM_OVERRIDE']     = 'sha256';

            //
            // The Lightbox Helper
            // by eVifweb System
            // Configuration Settings
            // Global Function
            // Definition File.
            //
            // 5 :: Monday, July 8, 2024 @ 0031 hrs.
            $tmp_output_ARRAY['_lightbox_helper_by_eVifweb_settings']['REGISTERED_NAME']                   = array('_lightbox_helper_load_resource_copy' => 1);
            $tmp_output_ARRAY['_lightbox_helper_by_eVifweb_settings']['FILE_PATH']                         = $tmp_dir_root_config . 'lightbox_helper.settings.function.php';
            $tmp_output_ARRAY['_lightbox_helper_by_eVifweb_settings']['LOAD_METHOD']                       = 'require';
            $tmp_output_ARRAY['_lightbox_helper_by_eVifweb_settings']['RESOURCE_TYPE']                     = 'FUNCTION_DEFINITION';
            $tmp_output_ARRAY['_lightbox_helper_by_eVifweb_settings']['FILE_HASHING_ALGORITHM_OVERRIDE']   = 'sha256';

            //
            // The CRNRSTN :: Lightsaber
            // SOAP Services Layer Class
            // Object Definition File.
            $tmp_output_ARRAY['crnrstn']['REGISTERED_NAME']                                                 = array('crnrstn' => 1);
            $tmp_output_ARRAY['crnrstn']['FILE_PATH']                                                       = $tmp_dir_root_crnrstn . 'crnrstn.inc.php';
            $tmp_output_ARRAY['crnrstn']['LOAD_METHOD']                                                     = 'require';
            $tmp_output_ARRAY['crnrstn']['RESOURCE_TYPE']                                                   = 'CLASS_DEFINITION';
            $tmp_output_ARRAY['crnrstn']['FILE_HASHING_ALGORITHM_OVERRIDE']                                 = 'sha256';

            //
            // The CRNRSTN :: Lightsaber
            // SOAP Services Layer ::
            // Link Manager Class Object
            // Definition File.
            $tmp_output_ARRAY['crnrstn_link_manager']['REGISTERED_NAME']                                    = array('crnrstn_link_manager' => 1);
            $tmp_output_ARRAY['crnrstn_link_manager']['FILE_PATH']                                          = $tmp_dir_root_environment . 'crnrstn.link_manager.inc.php';
            $tmp_output_ARRAY['crnrstn_link_manager']['LOAD_METHOD']                                        = 'require';
            $tmp_output_ARRAY['crnrstn_link_manager']['RESOURCE_TYPE']                                      = 'CLASS_DEFINITION';
            $tmp_output_ARRAY['crnrstn_link_manager']['FILE_HASHING_ALGORITHM_OVERRIDE']                    = 'sha256';

            //
            // Initialize the system
            // registration configuration
            // file meta for CRNRSTN ::
            // Lightsaber SOAP Services
            // Layer class object.
            //
            // We do this to both demonstrate
            // and to test the OOP registration
            // and then the OOP runtime
            // initialization of "external to
            // system" system configuration
            // class and global function definitions.
            //
            //
            // 5 :: Wednesday, July 3, 2024 @ 1714 hrs.
            $tmp_output_ARRAY['crnrstn']['TITLE_HTML']                  = 'C<span style="color:#F90000;">R</span>NRSTN :: Lightsaber SOAP Services Layer';
            $tmp_output_ARRAY['crnrstn']['TITLE_TEXT']                  = 'CRNRSTN :: Lightsaber SOAP Services Layer';
            $tmp_output_ARRAY['crnrstn']['description_crnrstn_HTML']    = 'The first class instantiated in the joining of the ' .
                                                                          '&quot;wall of server&quot; to the &quot;wall of application&quot;.';
            $tmp_output_ARRAY['crnrstn']['description_crnrstn_TEXT']    = 'The first class instantiated in the joining of the ' .
                                                                          '"wall of server" to the "wall of application".';

            //
            // Return the loaded
            // configuration meta
            // data output array.
            //
            //
            // 5 :: Sunday, July 7, 2024 @ 0530 hrs.
            return $tmp_output_ARRAY;

        break;
        default:

            error_log('[lnum ' . __LINE__ . '] [func ' . __FUNCTION__ . '] unmatched system data $name[' . $name . ']. die();');

            return $oLightbox_Helper->session_salt();

        break;

    }

    return '';

}