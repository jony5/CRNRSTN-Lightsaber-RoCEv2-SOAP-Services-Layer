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
 * Here are my notes from the top of
 * the file or "header notes" from
 * the original 188 line,
 * crnrstn.log.inc.php, which
 * defined the class:
 *
 *      crnrstn_AdvancedLogger($logsource)
 *
 * and was archived within a snapshot
 * of the CRNRSTN :: project on 9/11/2012.
 *
 * 5 :: Wednesday, July 24, 2024 @ 0032 hrs.
 *
 * View the original
 * CRNRSTN :: Advanced Logger
 * (2012-GNU) file on GitHub:
 * https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber/blob/master/public_html/_archives/CRNRSTN/2012/09_11_GNU3/classes/log/crnrstn.log.inc.php]
 *
 * [Begin crnrstn_AdvancedLogger() Header Notes]
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * CRNRSTN  :: An Advanced PHP Class Library for Enterprise
 * Copyright (C) 2012 Jonathan 'J5' Harris.
 *
 * VERSION  :: 3.0.0
 * AUTHOR   :: J5
 * URI      :: http://jony5.com/crnrstn/
 * OVERVIEW :: All configuration parameters for
 *             initialization of environmentally
 *             specific variables for the
 *             application in all environments.
 *
 *             Currently, there is support for
 *             12 variables across up to
 *             7 environemnts.
 *
 *             I have also wired in support
 *             for up to 4 unique databases
 *             (each DB...potentially...having
 *             it's own unique handle for USER,
 *             PORT, HOST and PWD).
 *
 *  "THIS SHIT NEEDS TO BE COMPLETELY GUTTED AND STANDARDIZED."
 *
 *  syslog()
 *  SYSLOG priority is a combination of the
 *  facility and the level.
 *
 *  Possible values are (in descending order):
 *  Constant        Description
 *  LOG_EMERG       system is unusable.
 *  LOG_ALERT       action must be
 *                  taken immediately
 *  LOG_CRIT        critical conditions
 *  LOG_ERR         error conditions
 *  LOG_WARNING     warning conditions
 *  LOG_NOTICE      normal, but
 *                  significant, condition
 *  LOG_INFO        informational message
 *  LOG_DEBUG       debug-level message
 *
 *  $errortype = array (
 *      E_ERROR              => 'Error',
 *      E_WARNING            => 'Warning',
 *      E_PARSE              => 'Parsing Error',
 *      E_NOTICE             => 'Notice',
 *      E_CORE_ERROR         => 'Core Error',
 *      E_CORE_WARNING       => 'Core Warning',
 *      E_COMPILE_ERROR      => 'Compile Error',
 *      E_COMPILE_WARNING    => 'Compile Warning',
 *      E_USER_ERROR         => 'User Error',
 *      E_USER_WARNING       => 'User Warning',
 *      E_USER_NOTICE        => 'User Notice',
 *      E_STRICT             => 'Runtime Notice',
 *      E_RECOVERABLE_ERROR  => 'Catchable Fatal Error'
 *  );
 *
 *  INTEGRATIONS WITH SPLUNK.
 *      - NEED SUPPORT FOR AUTOMATIC
 *        AUTHENTICATION AND
 *        MANUAL AUTHENTICATION
 *      - NEED TO ADD SPLUNK CONFIG
 *        VARIABLE SECTION TO PRIMARY
 *        CONFIG FILE? OR TO log.inc.php
 *      - NEED SUPPORT FOR SPLUNK
 *        STORM RESTFUL API
 *      - INVESTIGATE BATCH
 *        PROCESSING OF LOG EVENTS.
 *          "Send multiple events
 *          over a single call"
 *      - INVESTIGATE SUPPORT
 *        FOR GET AND POST VARIABLES
 *          ("The POST Content-Length
 *          must be less than 100 MB")
 *      - INVESTIGATE ADDING
 *        SUPPORT FOR LOCAL
 *        LOG FILES AND/OR TCP.
 *
 *  INCLUDE SUPPORT FOR
 *  ERROR HANDLING/BUBBLING
 *      Response status
 *      Status Code     Description
 *      200             Data accepted.
 *      400             Request error.
 *                      See response
 *                      body for details.
 *      403.1           Not authorized to
 *                      write to
 *                      the project.
 *      404             Project does
 *                      not exist.
 *
 *  POINTS OF CONSIDERATION ::
 *      - LOGGING TO DEFAULT
 *        SYSTEM LOG FILE
 *        (SUPPORT WINDOWS
 *        AND UNIX)
 *      - LOGGING TO CUSTOM
 *        LOG FILE(S)
 *      - LOGGING TO REMOTE
 *        SERVICE(S) VIA
 *        HTTP/HTTPS +
 *        AUTHENTICATION (OPTIONAL) +
 *        KEY (OPTIONAL)
 *      - LOGGING TO EMAIL(S)
 *        **NOT RECOMMENDED
 *        FOR PRODUCTION ENVIRONMENTS**
 *      - LOGGING TO SCREEN
 *        **NOT RECOMMENDED
 *        FOR PRODUCTION ENVIRONMENTS**
 *      - BATCHING OF LOG REQUESTS
 *      - TO WHAT EXTENT DO YOU
 *        NEED TO DECOUPLE 'WHERE
 *        YOU WANT THE LOG INFO
 *        TO GO' FROM THE PROCESS
 *        OF EVOKING EACH
 *        LOGGING OPERATION
 *
 *  LOG REQUEST ATTRIBUTES
 *      - PRIORITY
 *      - ERR_NO CONSTANT(S)
 *      - SYSTEM ERROR DESCRIPTION
 *      - SYSTEM ERROR NUMBER
 *      - CUSTOM USER ERROR DESCRIPTION
 *      - CUSTOM USER ERROR ID/NO/NAME
 *      - AUTHENTICATION PARAMS
 *      - ENDPOINT PARAMS
 *
 *  EXAMPLE CURL REQUESTS ::
 *
 *      curl -u $ACCESS_TOKEN:x \
 *      "https://api.splunkstorm.com/1/inputs/http?index=<ProjectID>&sourcetype=<type>" \
 *      -d "<Request body>"
 *
 *      curl -k -u $ACCESS_TOKEN:x \
 *      "https://api.splunkstorm.com/1/inputs/http?index=f75b3a9abc&sourcetype=syslog&host=my.example.com" \
 *      --data-urlencode "Sun Apr 11 15:35:15 UTC 2011 action=download_packages status=OK pkg_dl=751 elapsed=37.543"
 *
 *
 * [End of crnrstn_AdvancedLogger() Header Notes - 2012(GNU)]
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * CLASS DEFINITION :: crnrstn_logging
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: September 11, 2012 @ 1520 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Logging
 *                     Services Layer
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     Advanced Multi-Channel
 *                     Logging and Exception
 *                     Handling Notifications
 *                     Services Layer.
 *
 *                     This kit will
 *                     definitely log things.
 *
 *                     Supported CLR-SSL 
 *                     multi-channel logging 
 *                     output profiles are 
 *                     represented in the 
 *                     system by the following 
 *                     integer constants or 
 *                     Icy Digital ITCC 
 *                     bitwise computations: 
 *
 *                     CRNRSTN_LOG_SCREEN
 *                     CRNRSTN_LOG_SCREEN_HTML
 *                     CRNRSTN_LOG_SCREEN_TEXT
 *                     CRNRSTN_LOG_SCREEN_HTML_HIDDEN
 *                     CRNRSTN_LOG_EMAIL
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL
 *                     CRNRSTN_LOG_FILE
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE
 *                     CRNRSTN_LOG_FILE_FTP
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP
 *                     CRNRSTN_LOG_DATABASE
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE
 *                     CRNRSTN_LOG_SSDTLA
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA
 *                     CRNRSTN_LOG_PSSDTLA
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA
 *                     CRNRSTN_LOG_SOAP
 *                     CRNRSTN_LOG_DEFAULT
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 0932 hrs.
 *                     Last Modified: Saturday, March 14, 2026 @ 0311 hrs.
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
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_logging extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_logging 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Friday, March 13, 2026 @ 1447 hrs.
     *
     # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the crnrstn_logging 
     *       class protected $parent_class 
     *       var definition, the __construct() 
     *       input parameter, and the 
     *       $parent_class initialization. 
     *       5 :: Tuesday, April 21, 2026 @ 1210 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the private static 
     *       $CRNRSTN_debug_mode = 0 
     *       parameter definition in order 
     *       to align to the 
     *       crnrstn_registry_user 
     *       __construct() input 
     *       overhaul pivoting around 
     *       config_serial_override. 
     *       5 :: Saturday, June 20, 2026 @ 0400 hrs.
     *
     */

    private static $_R = array();
    private $R_data = array();
    private static $R_log_output_mgr;
    private static $config_serial;

    private static $mem_salt;
    protected $starttime;
    public $log_output = '';
    public $emailDataElements = array();
    public $msg_delivery_status;

    protected $log_silo_profile;
    protected $active_silo_ARRAY = array();
    protected $silent_silo_ARRAY = array();
    protected $active_log_silo_flag_ARRAY = array();

    protected $tmp_starttime;
    protected $tmp_starttime_ARRAY;
    protected $tmp_precise_timestamp;

    private static $system_error_message_serialization_ARRAY = array();
    private static $system_error_message_channel_map_ARRAY = array();
    private static $system_error_message_queue_ARRAY = array();

    private static $output_profile_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize CLR-SSL integer flags.
         *
         *
         * 5 :: Wednesday, July 29, 2026 @ 0357 hrs.
         *
    	 */
        $this->R_data['int_flag']     = $this->get_crnrstn('int_flag');
        $this->R_data['R_debug_mode'] = $this->get_crnrstn('R_debug_mode');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This is a working-but-untested 
         * data structure that demonstrates 
         * support for integer constant 
         * and bitwise operations driven 
         * CRNRSTN :: Logging profiles. 
         *
         *
         * 5
         *
         * Wednesday, December 6, 2023 @ 0613 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Saturday, March 14, 2026 @ 0215 hrs.
         *
         * 'CRNRSTN_AUTHORIZE_ALL' => 0,
         * 'CRNRSTN_AUTHORIZE' => 0,
         * 'CRNRSTN_ENCRYPT_TUNNEL' => 0,
         *
         * 'R_channel_ALL' => 0,
         * 'R_channel_GET' => 0,
         * 'R_channel_POST' => 0,
         * 'R_channel_COOKIE' => 0,
         * 'R_channel_SESSION' => 0,
         * 'R_channel_DATABASE' => 0,
         * 'R_channel_SSDTLA' => 0,
         * 'R_channel_PSSDTLA' => 0,
         * 'R_channel_RUNTIME' => 0,
         * 'R_channel_SOAP' => 0,
         * 'R_channel_FILE' => 0,
         * 'R_channel_FORM' => 0,
         *
         * 'R_channel_OERSL' => 0,
         *
         * 'CRNRSTN_LOG_NONE' => 0,
         * 'CRNRSTN_LOG_ALL' => 0,
         * 'CRNRSTN_LOG_PROXY' => 0,
         *
         * 'CRNRSTN_LOG_DEFAULT' => 0,
         * 'CRNRSTN_LOG_SCREEN' => 0,
         * 'CRNRSTN_LOG_SCREEN_TEXT' => 0,
         * 'CRNRSTN_LOG_SCREEN_HTML' => 0,
         * 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN' => 0,
         * 'CRNRSTN_LOG_EMAIL' => 0,
         * 'CRNRSTN_LOG_FILE' => 0,
         * 'CRNRSTN_LOG_FILE_FTP' => 0,
         * 'CRNRSTN_LOG_DATABASE' => 0,
         *
         * 'CRNRSTN_LOG_PSSDTLA' => 0,
         * 'CRNRSTN_LOG_SSDTLA' => 0,
         * 'CRNRSTN_LOG_ELECTRUM' => 0,
         * 'CRNRSTN_LOG_SOAP' => 0,
         *
         */
        self::$output_profile_ARRAY['OUTPUT_PROFILE'][$this->R_data['int_flag']['R_integer']] = array(
        $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] => $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'],
        $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] => $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'], 
        $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] => $this->R_data['int_flag']['CRNRSTN_LOG_FILE'], 
        $this->R_data['int_flag']['R_channel_FILE'] => $this->R_data['int_flag']['R_channel_FILE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] => $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'], 
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'], 
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'], 
        $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] => $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'], 
        $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] => $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'], 
        $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] => $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'],
        $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] => $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'],
        $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['R_channel_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['R_channel_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'] => $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['R_channel_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['R_channel_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] => $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE']);

        self::$output_profile_ARRAY['OUTPUT_PROFILE'][$this->R_data['int_flag']['R_string']] = array(
        'CRNRSTN_LOG_EMAIL' => $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'], 
        'CRNRSTN_LOG_FILE' => $this->R_data['int_flag']['CRNRSTN_LOG_FILE'], 
        'R_channel_FILE' => $this->R_data['int_flag']['R_channel_FILE'],
        'CRNRSTN_LOG_FILE_FTP' => $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'], 
        'CRNRSTN_LOG_SCREEN_TEXT' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'],
        'CRNRSTN_LOG_SCREEN' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'], 
        'CRNRSTN_LOG_SCREEN_HTML' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'],
        'CRNRSTN_LOG_SCREEN_HTML_HIDDEN' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'],
        'CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'], 
        'CRNRSTN_LOG_ELECTRUM' => $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'],
        'CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'], 
        'CRNRSTN_LOG_SSDTLA' => $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'],
        'CRNRSTN_LOG_PSSDTLA' => $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'], 
        'CRNRSTN_LOG_SOAP' => $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'],
        'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL' => $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'],
        'CRNRSTN_LOG_EMAIL & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_FILE & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'R_channel_FILE & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['R_channel_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_FILE_FTP & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_SCREEN_TEXT & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_SCREEN & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_SCREEN_HTML & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_SCREEN_HTML_HIDDEN & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_ELECTRUM & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_DATABASE & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_SSDTLA & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_PSSDTLA & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_SOAP & CRNRSTN_LOG_DEFAULT' => $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'],
        'CRNRSTN_LOG_EMAIL & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_FILE & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'R_channel_FILE & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['R_channel_FILE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_FILE_FTP & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_SCREEN_TEXT & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_SCREEN & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_SCREEN_HTML & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_SCREEN_HTML_HIDDEN & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_ELECTRUM & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_DATABASE & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_SSDTLA & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_PSSDTLA & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'],
        'CRNRSTN_LOG_SOAP & CRNRSTN_LOG_DATABASE' => $this->R_data['int_flag']['CRNRSTN_LOG_SOAP'] & $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE']);

        $this->tmp_starttime         = $this->start_time(true);
        $this->tmp_starttime_ARRAY   = \explode('.', $this->tmp_starttime);
        $this->tmp_precise_timestamp = \date(
        	                           'Y-m-d H:i:s', 
        	                           $this->tmp_starttime_ARRAY[0]);

        if(isset($this->tmp_starttime_ARRAY[1]))
            $this->tmp_precise_timestamp .= '.' . $this->tmp_starttime_ARRAY[1];

        /* error_log('[lnum ' .
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] [' . 
         *    \print_r($this->tmp_starttime_ARRAY, true) . '].');
         *
         */

        //self::$R_log_output_mgr = $this->return_R_log_output_mgr();

        //$this->log_silo_profile = CRNRSTN_SETTINGS_CRNRSTN;

        /*
        $tmp_log_silo_array = explode('|', $this->log_silo_profile);

        $tmp_log_silo_cnt = sizeof($tmp_log_silo_array);

        for($i = 0; $i < $tmp_log_silo_cnt; $i++){

            if(($tmp_log_silo_array[$i] == '*') || 
                 ($tmp_log_silo_array[$i] == ''))
            {

                // Trace all log data.
                $tmp_silo_checksum = crc32('*');
                $this->active_silo_ARRAY[$tmp_silo_checksum] = 1;

            }else{

                //
                // Check for positive or 
                // negative inclusion 
                // indicated by presence 
                // of a "~" character.
                $pos_exclusionChar = strpos($tmp_log_silo_array[$i],'~');

                if($pos_exclusionChar!==false){

                    // Remove tilde char.
                    $tmp_excusion_silo = $this->proper_replace('~', '', $tmp_log_silo_array[$i]);
                    $tmp_excusion_silo_checksum = crc32(trim($tmp_excusion_silo));
                    $this->silent_silo_ARRAY[$tmp_excusion_silo_checksum] = 1;

                }else{

                    $tmp_silo_checksum = crc32(trim($tmp_log_silo_array[$i]));
                    $this->active_silo_ARRAY[$tmp_silo_checksum] = 1;

                    /* error_log('[lnum ' .
			         *    __LINE__ . '] [mthd ' . 
			         *    __METHOD__ . 
			         *    '] active silo=' . $tmp_log_silo_array[$i].'[' . $tmp_silo_checksum.']');
			         *
                }

            }

        }

        */

	    $clr_ssl_msg = 'TODO :: Replay and clear anything ' . 
	                   'in the crnrstn error_log spool.';
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
	    $this->error_log(
	           $clr_ssl_msg, 
	           \LOG_DEBUG, 
	           \E_NOTICE, 
	           __LINE__, 
	           __METHOD__, 
	           __FILE__, 
	           $token);

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
     * @return
     * @access public
     *
     */
    function set_crnrstn_logging(
             $name,
             $value = NULL,
             $R_index_000 = NULL,
             $R_index_001 = NULL,
             $R_index_002 = NULL,
             $R_index_003 = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the 
         *       crnrstn_logging->set_crnrstn_logging() 
         *       input parameters $index_0, 
         *       $index_1, $index_2, and 
         *       $index_3 to: 
         *       $R_index_000, 
         *       $R_index_001, 
         *       $R_index_002, and 
         *       $R_index_003. 
         *       5 :: Saturday, June 27, 2026 @ 0353 hrs.
         *       Last Modified: Saturday, June 27, 2026 @ 0407 hrs.
         *
         */

        switch($name){
            case 'R_cluster_id':

                $this->R_data[$name] = $value;

            break;
            default:

			    $clr_ssl_msg = 'Unknown SWITCH CASE received [' . 
                				\strval($name) . '].';
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
			    $this->error_log(
			           $clr_ssl_msg, 
			           \LOG_ERR, 
			           \E_ERROR, 
			           __LINE__, 
			           __METHOD__, 
			           __FILE__, 
			           $token);

            break;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function is_valid_output_profile($output_profile_constant)
    {

        if(!is_numeric($output_profile_constant))
            if(isset(self::$output_profile_ARRAY['OUTPUT_PROFILE'][$this->R_data['int_flag']['R_string']][$output_profile_constant]))
                return true;
        else
            if(isset(self::$output_profile_ARRAY['OUTPUT_PROFILE'][$this->R_data['int_flag']['R_integer']][$output_profile_constant]))
                return true;

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
    function system_message_channel_constant(
             $message_serial,
             $index = NULL)
    {

        $clr_ssl_msg = 'Dev Note. Please review this architecture.';
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
        $this->error_log(
            $clr_ssl_msg,
            \LOG_DEBUG,
            \E_NOTICE,
            __LINE__,
            __METHOD__,
            __FILE__,
            $token);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * What channel is the 
         * system message being 
         * stored in? 
         * 
         * $tmp_channel_int = $this->system_message_channel_constant($message_serial);
         *
         */
        self::$system_error_message_serialization_ARRAY['CRNRSTN_ERROR_PREFIX_' . self::$config_serial][$message_serial][$message_serial] = '';
        self::$system_error_message_channel_map_ARRAY['CRNRSTN_ERROR_PREFIX_' . self::$config_serial][$message_serial][$message_serial]   = '';

        return 'R_channel_SESSION';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function err_message_queue_retrieve(
             $message_override = NULL, 
             $message_serial = NULL, 
             $index = 0)
    {

        $clr_ssl_msg = '[DEPRECATED] err_message_queue_retrieve ' .
                       'is a deprecated architecture.';
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
        $this->error_log(
            $clr_ssl_msg,
            \LOG_DEBUG,
            \E_NOTICE,
            __LINE__,
            __METHOD__,
            __FILE__,
            $token);

        if(isset($message_override))
            return $message_override;

        if(!isset($message_serial))
            $message_serial = 'SYSTEM_ID';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * What channel is the 
         * system message being 
         * stored in? 
         *
         */
        $tmp_channel_int               = $this->system_message_channel_constant($message_serial, $index);
        $R_cluster_id                  = $this->get_crnrstn('R_cluster_id');
        $tmp_err_message_memory_serial = $this->system_message_memory_serial();

        switch($tmp_channel_int){
            case $this->R_data['int_flag']['R_channel_SESSION']:

                $_SESSION['CRNRSTN_ERROR_PREFIX_' . $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX'][$message_serial] = $message_override;

                return \count($_SESSION['CRNRSTN_ERROR_PREFIX_' . $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX']);

            break;
            case $this->R_data['int_flag']['R_channel_RUNTIME']:
            default:
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * case 'R_channel_GET':
                 * case 'R_channel_POST':
                 * case 'R_channel_COOKIE':
                 * 
                 * //
                 * // It will be sooo nice 
                 * // when this one is done. 
                 * // 'R_channel_DATABASE' 
                 * // should be the default...imho.
                 * case 'R_channel_DATABASE':
                 * // 
                 * // It will be sooo nice 
                 * // when SSDTLA and PSSDTLA 
                 * // are done. We get client 
                 * // (browser) storage of globally 
                 * // accessible and serialized 
                 * // by key error messages. 
                 * case 'R_channel_SSDTLA':   
                 * case 'R_channel_PSSDTLA':
                 * case 'R_channel_SOAP':
                 * case 'R_channel_FILE':
                 *
                 * //
                 * // It will be sooo nice 
                 * // when <Form Integrations> 
                 * // is done.
                 * // 5 :: Tuesday, December 5, 2023 @ 0646 hrs.
                 * case 'R_channel_FORM':
				 *
				 */

                self::$system_error_message_queue_ARRAY['CRNRSTN_ERROR_PREFIX_' .$R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX'][$message_serial][] = $tmp_err_message_memory_serial;

                self::$system_error_message_serialization_ARRAY['CRNRSTN_ERROR_PREFIX_' . self::$config_serial][$message_serial][$tmp_err_message_memory_serial] = '';
                self::$system_error_message_channel_map_ARRAY['CRNRSTN_ERROR_PREFIX_' . self::$config_serial][$message_serial][$tmp_err_message_memory_serial]   = '';

                return count(self::$system_error_message_serialization_ARRAY['CRNRSTN_ERROR_PREFIX_' . self::$config_serial]);

            break;

        }

        if(!isset($_SESSION['CRNRSTN_ERROR_PREFIX_' . $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX'])){

            if(isset($message_override))
                return $message_override;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * There can potentially 
             * be more than one kind 
             * of error message. 
             *
        	 */
            if(isset($_SESSION['CRNRSTN_ERROR_PREFIX_' . $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX'][$message_serial]))
                return $_SESSION['CRNRSTN_ERROR_PREFIX_' . $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX'][$message_serial];

            return $_SESSION['CRNRSTN_ERROR_PREFIX_' . $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX']['CRNRSTN_ERR_DEFAULT'];

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * IS_EXCEPTION is support 
         * for custom exception handling 
         * messages and behavior...including 
         * returning a prefix for native PHP 
         * error messaging support 
         * (e.g., mkdir(), fopen(),...etc.).
         *
         */
        if($is_exception == true)
            return 'There was an error, but the ' . 
                   'CRNRSTN :: error message queue ' . 
                   'is empty. We know, however, that ';

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function logging_config(
    	             $logging_output_profile, 
    	             $R_index_000, 
    	             $R_index_001, 
    	             $R_index_002, 
    	             $R_index_003)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the 
         *       crnrstn_logging->logging_config() 
         *       input parameters $index_0, 
         *       $index_1, $index_2, and 
         *       $index_3 to: 
         *       $R_index_000, 
         *       $R_index_001, 
         *       $R_index_002, and 
         *       $R_index_003. 
         *       5 :: Saturday, June 27, 2026 @ 0354 hrs.
         *       Last Modified: Saturday, June 27, 2026 @ 0407 hrs.
         *
         */

        if(isset($R_index_000) && 
        	isset($R_index_001) && 
        	isset($R_index_002) && 
        	isset($R_index_003))
            if(isset($logging_output_profile[$R_index_000][$R_index_001][$R_index_002][$R_index_003]))
                return $logging_output_profile[$R_index_000][$R_index_001][$R_index_002][$R_index_003];

        if(isset($R_index_000) && 
        	isset($R_index_001) && 
        	isset($R_index_002))
            if(isset($logging_output_profile[$R_index_000][$R_index_001][$R_index_002]))
                return $logging_output_profile[$R_index_000][$R_index_001][$R_index_002];

        if(isset($R_index_000) && 
        	isset($R_index_001))
            if(isset($logging_output_profile[$R_index_000][$R_index_001]))
                return $logging_output_profile[$R_index_000][$R_index_001];

        if(isset($R_index_000))
            if(isset($logging_output_profile[$R_index_000]))
                return $logging_output_profile[$R_index_000];

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return the entire 
         * logging profile array, 
         * I guess. 
         *
         *
         * 5 :: Sunday, December 3, 2023 0747 hrs.
         *
         */
        return $logging_output_profile;

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
     * @return
     * @access public
     *
     */
    function get_system_logging_config(
             $logging_output_profile,
             $R_index_000 = NULL,
             $R_index_001 = NULL,
             $R_index_002 = NULL,
             $R_index_003 = NULL,
             $initialize = false)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the 
         *       crnrstn_logging->get_system_logging_config() 
         *       input parameters $index_0, 
         *       $index_1, $index_2, and 
         *       $index_3 to: 
         *       $R_index_000, 
         *       $R_index_001, 
         *       $R_index_002, and 
         *       $R_index_003. 
         *       5 :: Saturday, June 27, 2026 @ 0354 hrs.
         *       Last Modified: Saturday, June 27, 2026 @ 0408 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CRNRSTN_LOG_SCREEN
         * CRNRSTN_LOG_SCREEN_HTML
         * CRNRSTN_LOG_SCREEN_TEXT
         * CRNRSTN_LOG_SCREEN_HTML_HIDDEN
         * CRNRSTN_LOG_EMAIL
         * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL
         * CRNRSTN_LOG_FILE
         * 'R_channel_FILE'
         * CRNRSTN_LOG_FILE_FTP
         * CRNRSTN_LOG_DEFAULT
         * CRNRSTN_LOG_ELECTRUM
         * 'R_channel_DATABASE'
         * 'R_channel_SSDTLA'
         * 'R_channel_PSSDTLA'
         * 'R_channel_RUNTIME'
         * 'R_channel_SOAP'
         *
	     * self::$system_log_output_profile_constants_ARRAY = array(
	     * CRNRSTN_LOG_EMAIL => 'CRNRSTN_LOG_EMAIL',
	     * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL => 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL',
	     * CRNRSTN_LOG_FILE => 'CRNRSTN_LOG_FILE',
	     * 'R_channel_FILE' => 'R_channel_FILE',
	     * CRNRSTN_LOG_FILE_FTP => 'CRNRSTN_LOG_FILE_FTP',
	     * CRNRSTN_LOG_SCREEN_TEXT => 'CRNRSTN_LOG_SCREEN_TEXT',
	     * CRNRSTN_LOG_SCREEN => 'CRNRSTN_LOG_SCREEN',
	     * CRNRSTN_LOG_SCREEN_HTML => 'CRNRSTN_LOG_SCREEN_HTML',
	     * CRNRSTN_LOG_SCREEN_HTML_HIDDEN => 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN',
	     * CRNRSTN_LOG_DEFAULT => 'CRNRSTN_LOG_DEFAULT',
	     * CRNRSTN_LOG_ELECTRUM => 'CRNRSTN_LOG_ELECTRUM',
	     * 'R_channel_DATABASE' => 'R_channel_DATABASE',
	     * 'R_channel_SSDTLA' => 'R_channel_SSDTLA',
	     * 'R_channel_PSSDTLA' => 'R_channel_PSSDTLA',
	     * 'R_channel_SOAP' => 'R_channel_SOAP');
         *
    	 */

        if(\is_array($logging_output_profile))
            return $this->logging_config(
                          $logging_output_profile,
                          $R_index_000,
                          $R_index_001,
                          $R_index_002,
                          $R_index_003);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get channel
         * meta data.
         *
         */
        switch($logging_output_profile){
            case 'CRNRSTN_LOG_EMAIL':
            case $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL']:
            case 'crnrstn_log_email':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_EMAIL';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME']        = array(
                                          'HTML' => 'C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Logging by Email',
                                          'TEXT' => 'CRNRSTN :: Logging by Email');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging output via email.',
                                          'TEXT' => 'Return CRNRSTN :: logging output via email.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_EMAIL_PROXY':
            case $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL_PROXY']:
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL']:

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                                          $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging by Email (Proxy)',
                                   'TEXT' => 'CRNRSTN :: Logging by Email (Proxy)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging output ' .
                                                    'via email through proxy that ' .
                                                    'sits on top of a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP ' .
                                                    'services layer that was developed by ' .
                                                    'e<span style="color:#F00;">V</span>' .
                                                    'ifweb&reg; under the latest version of ' .
                                                    'the MIT License.',
                                          'TEXT' => 'Return CRNRSTN :: logging output ' .
                                                    'via email through proxy that ' .
                                                    'sits on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by eVifweb® under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'R_channel_FILE':
            case $this->R_data['int_flag']['R_channel_FILE']:
            case 'CRNRSTN_LOG_FILE':
            case $this->R_data['int_flag']['CRNRSTN_LOG_FILE']:
            case 'crnrstn_log_file':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_FILE'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_FILE';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging to File',
                                   'TEXT' => 'CRNRSTN :: Logging to File');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Send C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging output to file.',
                                          'TEXT' => 'Send CRNRSTN :: logging output to file.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_FILE']:

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_FILE'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging to File (Proxy).',
                                   'TEXT' => 'CRNRSTN :: Logging to File (Proxy).');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Send C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'logging output to file by way of proxy that ' .
                                                    'sits on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was developed ' .
                                                    'by e<span style="color:#F00;">V</span>ifweb&reg; ' .
                                                    'under the latest version of the MIT License.',
                                          'TEXT' => 'Send CRNRSTN :: logging output to file ' .
                                                    'by way of proxy that sits on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by eVifweb® under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_FILE_FTP':
            case $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP']:
            case 'crnrstn_log_file_ftp':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_FILE_FTP';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: FTP/SFTP Logging to File',
                                   'TEXT' => 'CRNRSTN :: FTP/SFTP Logging to File');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Send log file output to ' .
                                                    'a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: FTP/SFTP logging endpoint.',
                                          'TEXT' => 'Send log file output to a CRNRSTN :: FTP/SFTP ' .
                                                    'logging endpoint.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP']:
            case 'crnrstn_log_file_ftp_proxy':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_FILE_FTP'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: FTP/SFTP Logging to File (Proxy)',
                                   'TEXT' => 'CRNRSTN :: FTP/SFTP Logging to File (Proxy)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Send log file output to ' .
                                                    'a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: FTP/SFTP ' .
                                                    'logging endpoint by way of ' .
                                                    'proxy that sits on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by e<span style="color:#F00;">V' .
                                                    '</span>ifweb&reg; under the latest ' .
                                                    'version of the MIT License.',
                                          'TEXT' => 'Send log file output to a CRNRSTN :: FTP/SFTP ' .
                                                    'logging endpoint by way of proxy that ' .
                                                    'sits on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by eVifweb® under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_SCREEN_TEXT':
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT']:
            case 'crnrstn_log_screen_text':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_SCREEN_TEXT';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging ' .
                                             'to Screen with Text',
                                   'TEXT' => 'CRNRSTN :: Logging to Screen with Text');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging ' .
                                                    'output to screen as text.',
                                          'TEXT' => 'Return CRNRSTN :: logging ' .
                                                    'output to screen as text.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_SCREEN':
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN']:
            case 'crnrstn_log_screen':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_SCREEN';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging Output to Screen',
                                   'TEXT' => 'CRNRSTN :: Logging Output to Screen');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging output to screen.',
                                          'TEXT' => 'Return CRNRSTN :: logging output to screen.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_SCREEN_HTML':
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML']:
            case 'crnrstn_log_screen_html':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_SCREEN_HTML';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging to ' .
                                             'Screen with &lt;HTML&gt;',
                                   'TEXT' => 'CRNRSTN :: Logging to Screen with <HTML>');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging output ' .
                                                    'to screen as <HTML>.',
                                          'TEXT' => 'Return CRNRSTN :: logging output ' .
                                                    'to screen as <HTML>.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN':
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN']:
            case 'crnrstn_log_screen_html_hidden':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_SCREEN_HTML_HIDDEN';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Screen &lt;!-- ' .
                                             'Hidden &lt;HTML&gt --&gt;',
                                   'TEXT' => 'CRNRSTN :: Logging to Screen with <!-- ' .
                                             'Hidden <HTML> -->');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: logging output ' .
                                                    'to screen as hidden &lt;HTML&gt;.',
                                          'TEXT' => 'Return CRNRSTN :: logging output ' .
                                                    'to screen as hidden <HTML>.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_DEFAULT':
            case $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT']:
            case 'crnrstn_log_default':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_DEFAULT';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Native PHP Error Logging',
                                   'TEXT' => 'CRNRSTN :: Native PHP Error Logging');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: native PHP ' .
                                                    'error_log() logging output ' .
                                                    'formatted for readability and ' .
                                                    'slightly enriched by ' .
                                                    'e<span style="color:#F00;">V' .
                                                    '</span>ifweb&reg; under the latest ' .
                                                    'version of the MIT License.',
                                          'TEXT' => 'Return CRNRSTN :: native PHP ' .
                                                    'error_log() logging output ' .
                                                    'formatted for readability and ' .
                                                    'slightly enriched by eVifweb® ' .
                                                    'under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT']:
            case 'crnrstn_log_default_proxy':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Native PHP ' .
                                             'Error Logging (Proxy)',
                                   'TEXT' => 'CRNRSTN :: Native PHP Error ' .
                                             'Logging (Proxy)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Return C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: native PHP ' .
                                                    'error_log() logging output ' .
                                                    'formatted for readability and ' .
                                                    'slightly enriched by ' .
                                                    'e<span style="color:#F00;">V' .
                                                    '</span>ifweb&reg;. This output is ' .
                                                    'delivered by proxy that sits ' .
                                                    'on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer ' .
                                                    'that was developed by ' .
                                                    'e<span style="color:#F00;">V' .
                                                    '</span>ifweb&reg; under the latest ' .
                                                    'version of the MIT License.',
                                          'TEXT' => 'Return CRNRSTN :: native PHP ' .
                                                    'error_log() logging output ' .
                                                    'formatted for readability and ' .
                                                    'slightly enriched by eVifweb®. ' .
                                                    'This output is delivered by proxy ' .
                                                    'that sits on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer ' .
                                                    'that was developed by eVifweb® ' .
                                                    'under the latest version of ' .
                                                    'the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_ELECTRUM':
            case $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM']:
            case 'crnrstn_log_electrum':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_ELECTRUM';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R</span>NRSTN :: Electrum Logging',
                                   'TEXT' => 'CRNRSTN :: Electrum Logging');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Wind Cloud Fire, ' .
                                                    'or simply, CRNRSTN :: Electrum, ' .
                                                    'is a robust SFTP, FTP, and ' .
                                                    'local directory file movement, ' .
                                                    'file management, and system ' .
                                                    'automation and performance ' .
                                                    'reporting application architecture ' .
                                                    'that provides support for the ' .
                                                    'server\'s file system universe ' .
                                                    'and is powered by SOAP. <br><br>'.

                                                    'Produce C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Electrum Logging ' .
                                                    'output. This output is delivered on ' .
                                                    'top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by ' .
                                                    'e<span style="color:#F00;">V' .
                                                    '</span>ifweb&reg; under the latest ' .
                                                    'version of the MIT License.',
                                          'TEXT' => 'CRNRSTN :: Wind Cloud Fire, ' .
                                                    'or simply, CRNRSTN :: Electrum, ' .
                                                    'is a robust SFTP, FTP, and ' .
                                                    'local directory file movement, ' .
                                                    'file management, and system ' .
                                                    'automation and performance ' .
                                                    'reporting application architecture ' .
                                                    'that provides support for the ' .
                                                    'server\'s file system universe ' .
                                                    'and is powered by SOAP. 

                                                    Produce CRNRSTN :: Electrum Logging ' .
                                                    'output. This output is delivered on ' .
                                                    'top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by eVifweb® under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM']:
            case 'crnrstn_log_electrum_proxy':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_ELECTRUM'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Electrum Logging (Proxy)',
                                   'TEXT' => 'CRNRSTN :: Electrum Logging (Proxy)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Wind Cloud Fire, ' .
                                                    'or simply, CRNRSTN :: Electrum, ' .
                                                    'is a robust SFTP, FTP, and ' .
                                                    'local directory file movement, ' .
                                                    'file management, and system ' .
                                                    'automation and performance ' .
                                                    'reporting application architecture ' .
                                                    'that provides support for the ' .
                                                    'server\'s file system universe ' .
                                                    'and is powered by SOAP. <br><br>'.

                                                    'Produce C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Electrum Logging ' .
                                                    'output by proxy. This output is ' .
                                                    'delivered on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by ' .
                                                    'e<span style="color:#F00;">V' .
                                                    '</span>ifweb&reg; under the latest ' .
                                                    'version of the MIT License.',
                                          'TEXT' => 'CRNRSTN :: Wind Cloud Fire, ' .
                                                    'or simply, CRNRSTN :: Electrum, ' .
                                                    'is a robust SFTP, FTP, and ' .
                                                    'local directory file movement, ' .
                                                    'file management, and system ' .
                                                    'automation and performance ' .
                                                    'reporting application architecture ' .
                                                    'that provides support for the ' .
                                                    'server\'s file system universe ' .
                                                    'and is powered by SOAP. 

                                                    Produce CRNRSTN :: Electrum Logging ' .
                                                    'output by proxy. This output is ' .
                                                    'delivered on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that was ' .
                                                    'developed by eVifweb® under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'R_channel_DATABASE':
            case $this->R_data['int_flag']['R_channel_DATABASE']:
            case 'CRNRSTN_LOG_DATABASE':
            case $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE']:
            case 'crnrstn_log_database':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_DATABASE';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging to Database',
                                   'TEXT' => 'CRNRSTN :: Logging to Database');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Send C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Lightsaber RoCEv2 ' .
                                                    'SOAP Services Layer (CLR-SSL) ' .
                                                    'logging output to the ' .
                                                    'CLR-SSL Database Services Layer.',
                                          'TEXT' => 'Send CRNRSTN :: Lightsaber RoCEv2 ' .
                                                    'SOAP Services Layer (CLR-SSL) ' .
                                                    'logging output to the ' .
                                                    'CLR-SSL Database Services Layer.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE']:
            case 'crnrstn_log_database_proxy':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_DATABASE'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: Logging to Database (Proxy)',
                                   'TEXT' => 'CRNRSTN :: Logging to Database (Proxy)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Send C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Lightsaber RoCEv2 ' .
                                                    'SOAP Services Layer (CLR-SSL) ' .
                                                    'logging output to the ' .
                                                    'CLR-SSL Database Services Layer ' .
                                                    'by proxy on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP services layer that ' .
                                                    'was developed by ' .
                                                    'e<span style="color:#F00;">V</span>ifweb&reg; ' .
                                                    'under the latest version of ' .
                                                    'the MIT License.',
                                          'TEXT' => 'Send CRNRSTN :: Lightsaber RoCEv2 ' .
                                                    'SOAP Services Layer (CLR-SSL) ' .
                                                    'logging output to the ' .
                                                    'CLR-SSL Database Services Layer ' .
                                                    'by proxy on top of a NuSOAP v' .
                                                    $this->version_soap() .
                                                    ' powered SOAP Services layer that was ' .
                                                    'developed by eVifweb® under the latest ' .
                                                    'version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'R_channel_SSDTLA':
            case $this->R_data['int_flag']['R_channel_SSDTLA']:
            case 'CRNRSTN_LOG_SSDTLA':
            case $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA']:
            case 'crnrstn_log_ssdtla':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_SSDTLA';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R</span>NRSTN :: Logging by SSDTLA',
                                   'TEXT' => 'CRNRSTN :: Logging by SSDTLA');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'C<span style="color:#F00;">R</span>' .
                                                    'NRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (SSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production. <br><br>' .

                                                    'As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP/IoT (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access to ' .
                                                    'the real-time system performance reporting ' .
                                                    'and session response time telemetry of any ' .
                                                    'server in the entire managed cluster. <br><br>' .

                                                    'Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled up to the top according to any ' .
                                                    'specified search or filter criteria. <br><br>' .

                                                    'Please note that an encrypted SSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via &lt;form&gt; hidden input field, and that ' .
                                                    'this token is actually a CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer Architecture ' .
                                                    '(PSSDTLA) data packet. The SSDTLA token is ' .
                                                    'an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object)...albeit with a ' .
                                                    'genuine SOAP wrapper to drive the ' .
                                                    'server-server experience between the ' .
                                                    'browser and the server. Fancy! <br><br>
 
                                                    So the primary and significant difference between ' .
                                                    'the C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA data packet and the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA packet is that the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA takes the encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oC<span style="color:#F00;">R</span>NRSTN_JS, ' .
                                                    'when a new soap request (a fresh SSDTLA packet) ' .
                                                    'is returned by the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA itself to the browser in an &lt;XML&gt; ' .
                                                    'document response to an AJAX driven XHR request. <br><br>
 
                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: SSDTLA, developed by ' .
                                                    'e<span style="color:#F00;">V</span>ifweb&reg;, has ' .
                                                    'every browser talking to the server like it ' .
                                                    'is &quot;itself a server&quot; for request ' .
                                                    'authentication at the SOAP services server ' .
                                                    'endpoint and request serialization for UI/UX ' .
                                                    'process synchronization and memory (cache) ' .
                                                    'management at the SOAP client &quot;server&quot;' .
                                                    '...the browser.<br><br>

                                                    The strategic value of the CLR-SSL SOAP ' .
                                                    'Services Data Tunnel Layer (SSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'SSDTLA SOAP packet can be proxied to an active session ' .
                                                    'at any origin or domain controlling server in ' .
                                                    'support of the session authentication services ' .
                                                    'layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. <br><br>

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM.<br><br>

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb&reg; under the ' .
                                                    'latest version of the MIT License.',
                                          'TEXT' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'CRNRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (SSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production.
  
                                                    As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP/IoT (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access to ' .
                                                    'the real-time system performance reporting ' .
                                                    'and session response time telemetry of any ' .
                                                    'server in the entire managed cluster.

                                                    Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled up to the top according to any ' .
                                                    'specified search or filter criteria. 

                                                    Please note that an encrypted SSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via <form> hidden input field, and that ' .
                                                    'this token is actually a CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer Architecture ' .
                                                    '(PSSDTLA) data packet. The SSDTLA token is ' .
                                                    'an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object)...albeit with a ' .
                                                    'genuine SOAP wrapper to drive the ' .
                                                    'server-server experience between the ' .
                                                    'browser and the server. Fancy! 

                                                    So the primary and significant difference between ' .
                                                    'the CRNRSTN :: SSDTLA data packet and the ' .
                                                    'CRNRSTN :: PSSDTLA packet is that the ' .
                                                    'CRNRSTN :: SSDTLA takes the ' .
                                                    'encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oCRNRSTN_JS, when a new soap request ' .
                                                    '(a fresh SSDTLA packet) is returned by the ' .
                                                    'CRNRSTN :: SSDTLA itself to the browser in ' .
                                                    'an <XML> document response to an AJAX ' .
                                                    'driven XHR request. 

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the CRNRSTN :: SSDTLA, developed by ' .
                                                    'eVifweb®, has every browser talking to the ' .
                                                    'server like it is "itself a server" for ' .
                                                    'request authentication at the ' .
                                                    'SOAP services server endpoint and request ' .
                                                    'serialization for UI/UX process synchronization ' .
                                                    'and memory (cache) management at the SOAP ' .
                                                    'client "server"...the browser. 

                                                    The strategic value of the CLR-SSL SOAP ' .
                                                    'Services Data Tunnel Layer (SSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'SSDTLA SOAP packet can be proxied to an active session ' .
                                                    'at any origin or domain controlling server in ' .
                                                    'support of the session authentication services ' .
                                                    'layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. 

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM. 

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb® under the ' .
                                                    'latest version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA']:
            case 'crnrstn_log_ssdtla_proxy':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_SSDTLA'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R</span>' .
                                             'NRSTN :: SSDTLA Logging (Proxy)',
                                   'TEXT' => 'CRNRSTN :: SSDTLA Logging (Proxy)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'C<span style="color:#F00;">R</span>' .
                                                    'NRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (SSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production. <br><br>' .

                                                    'As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access, ' .
                                                    'by proxy, to the real-time system performance ' .
                                                    'reporting and session response time telemetry ' .
                                                    'of any server in the entire managed cluster. <br><br>' .

                                                    'Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled up to the top according to any ' .
                                                    'specified search or filter criteria.  <br><br>' .

                                                    'Please note that an encrypted SSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via &lt;form&gt; hidden input field, and that ' .
                                                    'this token is actually a CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer Architecture ' .
                                                    '(PSSDTLA) data packet. The SSDTLA token is ' .
                                                    'an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object)...albeit with a ' .
                                                    'genuine SOAP wrapper to drive the ' .
                                                    'server-server experience between the ' .
                                                    'browser and the server. Fancy! <br><br>

                                                    So the primary and significant difference between ' .
                                                    'the C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA data packet and the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA packet is that the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA takes the encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oC<span style="color:#F00;">R</span>NRSTN_JS, ' .
                                                    'when a new soap request (a fresh SSDTLA packet) ' .
                                                    'is returned by the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA itself to the browser in an &lt;XML&gt; ' .
                                                    'document response to an AJAX driven XHR request. <br><br>

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: SSDTLA, developed by ' .
                                                    'e<span style="color:#F00;">V</span>ifweb&reg;, has ' .
                                                    'every browser talking to the server like it ' .
                                                    'is &quot;itself a server&quot; for request ' .
                                                    'authentication at the SOAP services server ' .
                                                    'endpoint and request serialization for UI/UX ' .
                                                    'process synchronization and memory (cache) ' .
                                                    'management at the SOAP client &quot;server&quot;' .
                                                    '...the browser.<br><br>

                                                    The strategic value of the CLR-SSL SOAP ' .
                                                    'Services Data Tunnel Layer (SSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'SSDTLA SOAP packet can be proxied to an active session ' .
                                                    'at any origin or domain controlling server in ' .
                                                    'support of the session authentication services ' .
                                                    'layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. <br><br>

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM.<br><br>

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb&reg; under the ' .
                                                    'latest version of the MIT License.',
                                          'TEXT' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'CRNRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (SSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production.

                                                    As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access, ' .
                                                    'by proxy, to the real-time system performance ' .
                                                    'reporting and session response time telemetry ' .
                                                    'of any server in the entire managed cluster.

                                                    Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled up to the top according to any ' .
                                                    'specified search or filter criteria. 

                                                    Please note that an encrypted SSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via <form> hidden input field, and that ' .
                                                    'this token is actually a CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer Architecture ' .
                                                    '(PSSDTLA) data packet. The SSDTLA token is ' .
                                                    'an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object)...albeit with a ' .
                                                    'genuine SOAP wrapper to drive the ' .
                                                    'server-server experience between the ' .
                                                    'browser and the server. Fancy! 

                                                    So the primary and significant difference between ' .
                                                    'the CRNRSTN :: SSDTLA data packet and the ' .
                                                    'CRNRSTN :: PSSDTLA packet is that the ' .
                                                    'CRNRSTN :: SSDTLA takes the ' .
                                                    'encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oCRNRSTN_JS, when a new soap request ' .
                                                    '(a fresh SSDTLA packet) is returned by the ' .
                                                    'CRNRSTN :: SSDTLA itself to the browser in ' .
                                                    'an <XML> document response to an AJAX ' .
                                                    'driven XHR request. 

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the CRNRSTN :: SSDTLA, developed by ' .
                                                    'eVifweb®, has every browser talking to the ' .
                                                    'server like it is "itself a server" for ' .
                                                    'request authentication at the ' .
                                                    'SOAP services server endpoint and request ' .
                                                    'serialization for UI/UX process synchronization ' .
                                                    'and memory (cache) management at the SOAP ' .
                                                    'client "server"...the browser. 

                                                    The strategic value of the CLR-SSL SOAP ' .
                                                    'Services Data Tunnel Layer (SSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'SSDTLA SOAP packet can be proxied to an active session ' .
                                                    'at any origin or domain controlling server in ' .
                                                    'support of the session authentication services ' .
                                                    'layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. 

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM. 

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb® under the ' .
                                                    'latest version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'R_channel_PSSDTLA':
            case $this->R_data['int_flag']['R_channel_PSSDTLA']:
            case 'CRNRSTN_LOG_PSSDTLA':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA']:
            case 'crnrstn_log_pssdtla':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PSSDTLA';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']] = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: PSSDTLA Logging',
                                   'TEXT' => 'CRNRSTN :: PSSDTLA Logging');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'C<span style="color:#F00;">R</span>' .
                                                    'NRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (PSSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production. <br><br>' .

                                                    'As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP/IoT (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access to ' .
                                                    'the real-time system performance reporting ' .
                                                    'and session response time telemetry of any ' .
                                                    'server in the entire managed cluster. <br><br>' .

                                                    'Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled to the top according to any ' .
                                                    'specified search or log filter criteria. <br><br>' .

                                                    'Please note that an encrypted PSSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via &lt;form&gt; hidden input field. ' .
                                                    'The PSSDTLA token is an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object. Nice! <br><br>

                                                    The primary and significant difference between ' .
                                                    'the C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA data packet and the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA packet is that the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA takes the encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oC<span style="color:#F00;">R</span>NRSTN_JS, ' .
                                                    'when a new soap request (a fresh SSDTLA packet) ' .
                                                    'is returned by the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA itself to the browser in an &lt;XML&gt; ' .
                                                    'document response to an AJAX driven XHR request. <br><br>

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: SSDTLA, developed by ' .
                                                    'e<span style="color:#F00;">V</span>ifweb&reg;, has ' .
                                                    'every browser talking to the server like it ' .
                                                    'is &quot;itself a server&quot; for request ' .
                                                    'authentication at the SOAP services server ' .
                                                    'endpoint and request serialization for UI/UX ' .
                                                    'process synchronization and memory (cache) ' .
                                                    'management at the SOAP client &quot;server&quot;' .
                                                    '...the browser.<br><br>

                                                    The strategic value of the CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer (PSSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'PSSDTLA SOAP packet can be proxied to an active ' .
                                                    'session at any origin or domain controlling ' .
                                                    'server in support of the session authentication ' .
                                                    'services layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. <br><br>

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM.<br><br>

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb&reg; under the ' .
                                                    'latest version of the MIT License.',
                                          'TEXT' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'CRNRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (SSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production.

                                                    As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP/IoT (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access to ' .
                                                    'the real-time system performance reporting ' .
                                                    'and session response time telemetry of any ' .
                                                    'server in the entire managed cluster.

                                                    Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled to the top according to any ' .
                                                    'specified search or log filter criteria.

                                                    Please note that an encrypted PSSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via &lt;form&gt; hidden input field. ' .
                                                    'The PSSDTLA token is an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object. Nice! 

                                                    The primary and significant difference between ' .
                                                    'the CRNRSTN :: SSDTLA data packet and the ' .
                                                    'CRNRSTN :: PSSDTLA packet is that the ' .
                                                    'CRNRSTN :: SSDTLA takes the ' .
                                                    'encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oCRNRSTN_JS, when a new soap request ' .
                                                    '(a fresh SSDTLA packet) is returned by the ' .
                                                    'CRNRSTN :: SSDTLA itself to the browser in ' .
                                                    'an <XML> document response to an AJAX ' .
                                                    'driven XHR request. 

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the CRNRSTN :: SSDTLA, developed by ' .
                                                    'eVifweb®, has every browser talking to the ' .
                                                    'server like it is "itself a server" for ' .
                                                    'request authentication at the ' .
                                                    'SOAP services server endpoint and request ' .
                                                    'serialization for UI/UX process synchronization ' .
                                                    'and memory (cache) management at the SOAP ' .
                                                    'client "server"...the browser. 

                                                    The strategic value of the CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer (PSSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'PSSDTLA SOAP packet can be proxied to an active ' .
                                                    'session at any origin or domain controlling ' .
                                                    'server in support of the session authentication ' .
                                                    'services layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. 

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM. 

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb® under the ' .
                                                    'latest version of the MIT License.');
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

            break;
            case 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA':
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA']:
            case 'crnrstn_log_pssdtla_proxy':

                $channel['SOURCEID'][$this->R_data['int_flag']['R_integer']]              = $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                                                                                            $this->R_data['int_flag']['CRNRSTN_LOG_PSSDTLA'];
                $channel['SOURCEID'][$this->R_data['int_flag']['R_string']]               = 'CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA';
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_integer']] = -1;
                $channel['ENCRYPTION']['PROFILE'][$this->R_data['int_flag']['R_string']]  = '-1';
                $channel['NAME'] = array(
                                   'HTML' => 'C<span style="color:#F00;">R' .
                                             '</span>NRSTN :: PSSDTLA Logging (PROXY)',
                                   'TEXT' => 'CRNRSTN :: PSSDTLA Logging (PROXY)');
                $channel['DESCRIPTION'] = array(
                                          'HTML' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'C<span style="color:#F00;">R</span>' .
                                                    'NRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (PSSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production. <br><br>' .

                                                    'As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access, ' .
                                                    'by proxy, to the real-time system performance ' .
                                                    'reporting and session response time telemetry ' .
                                                    'of any server in the entire managed cluster. <br><br>' .

                                                    'Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled up to the top according to any ' .
                                                    'specified search or filter criteria.  <br><br>' .

                                                    'Please note that an encrypted PSSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via &lt;form&gt; hidden input field. ' .
                                                    'The PSSDTLA token is an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object. Nice! <br><br>

                                                    The primary and significant difference between ' .
                                                    'the C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA data packet and the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA packet is that the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA takes the encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oC<span style="color:#F00;">R</span>NRSTN_JS, ' .
                                                    'when a new soap request (a fresh SSDTLA packet) ' .
                                                    'is returned by the ' .
                                                    'C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA itself to the browser in an &lt;XML&gt; ' .
                                                    'document response to an AJAX driven XHR request. <br><br>

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: SSDTLA, developed by ' .
                                                    'e<span style="color:#F00;">V</span>ifweb&reg;, has ' .
                                                    'every browser talking to the server like it ' .
                                                    'is &quot;itself a server&quot; for request ' .
                                                    'authentication at the SOAP services server ' .
                                                    'endpoint and request serialization for UI/UX ' .
                                                    'process synchronization and memory (cache) ' .
                                                    'management at the SOAP client &quot;server&quot;' .
                                                    '...the browser.<br><br>

                                                    The strategic value of the CLR-SSL SOAP ' .
                                                    'Services Data Tunnel Layer (SSDTLA) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'SSDTLA SOAP packet can be proxied to an active session ' .
                                                    'at any origin or domain controlling server in ' .
                                                    'support of the session authentication services ' .
                                                    'layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. <br><br>

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM.<br><br>

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'SSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb&reg; under the ' .
                                                    'latest version of the MIT License.',
                                          'TEXT' => 'Integrate system logging into the ' .
                                                    'browser via the DOM-supporting ' .
                                                    'CRNRSTN :: Lightsaber RoCEv2 SOAP ' .
                                                    'Services Layer (CLR-SSL) Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer ' .
                                                    'Architecture (PSSDTLA) for a ' .
                                                    'telemetry-rich browsing experience ' .
                                                    'in order to investigate web application ' .
                                                    'bottlenecks when they are made manifest ' .
                                                    'during peak traffic times in production.

                                                    As admin (or with admin assigned ' .
                                                    'user privileges), login via browser to ' .
                                                    'any node/server/IP (including dev environments) ' .
                                                    'in a CLR-SSL managed cluster for access, ' .
                                                    'by proxy, to the real-time system performance ' .
                                                    'reporting and session response time telemetry ' .
                                                    'of any server in the entire managed cluster.

                                                    Search or setup filters for server runtime logs, ' .
                                                    'and activate verbose debugging on the whole ' .
                                                    'box or just on the admin\'s session. Then ' .
                                                    'the web site can be browsed, page by page, ' .
                                                    'by the admin as the generated log activity ' .
                                                    'is bubbled up to the top according to any ' .
                                                    'specified search or filter criteria. 

                                                    Please note that an encrypted PSSDTLA data ' .
                                                    'packet is stored in the browser\'s DOM ' .
                                                    'via &lt;form&gt; hidden input field. ' .
                                                    'The PSSDTLA token is an OpenSSL v' .
                                                    $this->version_openssl() .
                                                    ' encrypted JSON object. Nice! 

                                                    The primary and significant difference between ' .
                                                    'the CRNRSTN :: SSDTLA data packet and the ' .
                                                    'CRNRSTN :: PSSDTLA packet is that the ' .
                                                    'CRNRSTN :: SSDTLA takes the ' .
                                                    'encrypted JSON object and ' .
                                                    'then encapsulates or wraps it within a NuSOAP v' .
                                                    $this->version_soap() . ' powered SOAP object ' .
                                                    'before storing it as static data at the ' .
                                                    'browser in the build of the page HTML or ' .
                                                    'through the CRNRSTN :: JavaScript object, ' .
                                                    'oCRNRSTN_JS, when a new soap request ' .
                                                    '(a fresh SSDTLA packet) is returned by the ' .
                                                    'CRNRSTN :: SSDTLA itself to the browser in ' .
                                                    'an <XML> document response to an AJAX ' .
                                                    'driven XHR request. 

                                                    Behold both the beauty, power, and simplicity ' .
                                                    'of SOAP; the CRNRSTN :: SSDTLA, developed by ' .
                                                    'eVifweb®, has every browser talking to the ' .
                                                    'server like it is "itself a server" for ' .
                                                    'request authentication at the ' .
                                                    'SOAP services server endpoint and request ' .
                                                    'serialization for UI/UX process synchronization ' .
                                                    'and memory (cache) management at the SOAP ' .
                                                    'client "server"...the browser. 

                                                    The strategic value of the CLR-SSL Pseudo-SOAP ' .
                                                    'Services Data Tunnel Layer (SSDTL) will have ' .
                                                    'arrived, at least in part, when the browser\'s ' .
                                                    'PSSDTLA SOAP packet can be proxied to an active session ' .
                                                    'at any origin or domain controlling server in ' .
                                                    'support of the session authentication services ' .
                                                    'layer behind a C<span style="color:#F00;">R' .
                                                    '</span>NRSTN :: Messenger session at any ' .
                                                    'edge server. 

                                                    C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'Messenger could easily become the definitive ' .
                                                    'and MIT Licensed (open source) functional and ' .
                                                    'spiritual successor to what was once ' .
                                                    'Yahoo Instant Messenger, Yahoo IM. 

                                                    The C<span style="color:#F00;">R</span>NRSTN :: ' .
                                                    'PSSDTLA is a hardened data handling architecture ' .
                                                    'that is protected by OpenSSL v' .
                                                    $this->version_openssl() . ' encryption ' .
                                                    'technology and developed by eVifweb® under the ' .
                                                    'latest version of the MIT License.');
                    $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_integer']]    = -1;
                    $channel['AUTHORIZATION']['PROFILE']['PRIMARY'][$this->R_data['int_flag']['R_string']]     = '-1';
                    $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_integer']] = array($this->R_data['int_flag']['R_authorize_all'] => $this->R_data['int_flag']['R_authorize_all']);
                    $channel['AUTHORIZATION']['PROFILE']['AUTHORIZED'][$this->R_data['int_flag']['R_string']]  = array('CRNRSTN_AUTHORIZE_ALL' => $this->R_data['int_flag']['R_authorize_all']);

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * This is CRNRSTN :: Lightsaber
                     * RoCEv2 SOAP Services Layer
                     * (CLR-SSL) configuration UGC
                     * settings input data that will
                     * still require input validation.
                     *
                     */
                    $tmp_output_profile = $this->get_resource(
                    	                         'system_logging_output_profile',
                    	                         0,
                    	                         'CRNRSTN::RESOURCE::LOGGING');

                    if(!is_numeric($tmp_output_profile)){

                        $tmp_int = $this->get_system_logging_config(
                        	              $tmp_output_profile,
                        	              $this->R_data['int_flag']['R_integer']);

                        if(!($this->isset_crnrstn(
                        	        'system_log_output_profile_constants_ARRAY',
                        	        $tmp_int) == true))
                        {

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This is a static hard code of,
                             * self::$system_default_logging_output_profile = CRNRSTN_LOG_DEFAULT,
                             * in the CRNRSTN :: __construct().
                             *
                             *
                             * 5 :: Sunday, December 3, 2023 @ 0501 hrs.
                             *
                        	 */
                            $tmp_int = $this->get_crnrstn('system_default_logging_output_profile');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Just in case, a string
                             * value is ever provided
                             * to the CRNRSTN :: __construct().
                             *
                             */
                            if(!is_numeric($tmp_int)){

                                $tmp_int = $this->get_system_logging_config(
                                	              $tmp_int,
                                	              $this->R_data['int_flag']['R_integer']);

                                if(!($this->isset_crnrstn(
                                	        'system_log_output_profile_constants_ARRAY',
                                	        $tmp_int) == true))
                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * 5 :: Sunday, December 3, 2023 @ 0504 hrs.
                                     *
                                	 */
                                    $tmp_int = $this->R_data['int_flag']['CRNRSTN_LOG_DEFAULT'];

                            }

                        }

                    }

                    $clr_ssl_msg = 'CRNRSTN :: could not apply ' .
                                   'the CRNRSTN :: Lightsaber ' .
                                   'RoCEv2 SOAP Services Layer ' .
                                   '(CLR-SSL) Logging Services ' .
                                   'Layer log initialization ' .
                                   'profile, (' .
                                   $this->gettype($logging_output_profile) . ') ' .
                                   \strval($logging_output_profile) .
                                   ', which was the value that ' .
                                   'was provided as method input ' .
                                   'to this environment. This will ' .
                                   'be manually set to ' .
                                   $this->get_system_logging_config(
                                   	      $tmp_int,
                                   	      $this->R_data['int_flag']['R_string']) .
                                   '[' . $tmp_int . ']. ' .
                                   $this->data_report(
                        	              $logging_output_profile,
                        	              'CRNRSTN :: MC-DDO UGC Input Data Report');
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
				    $this->error_log(
				           $clr_ssl_msg,
				           \LOG_WARNING,
				           \E_WARNING,
				           __LINE__,
				          __METHOD__,
				           __FILE__,
				           $token);

                    return $this->get_system_logging_config(
                    	          $tmp_int,
                    	          $R_index_000,
                    	          $R_index_001,
                    	          $R_index_002,
                    	          $R_index_003);

                break;

            }

            return $this->get_system_logging_config(
            	          $channel,
            	          $R_index_000,
            	          $R_index_001,
            	          $R_index_002,
            	          $R_index_003);

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_active_log_silo_keys($output_type = 'R_string')
    {

        $active_log_silo_flag_ARRAY = $this->return_active_log_silo_keys();

        switch($output_type){
            case 'print_r':

                $this->print_r(
                       $active_log_silo_flag_ARRAY,
                       '',
                       NULL,
                       __LINE__,
                       __METHOD__,
                       __FILE__);

            break;
            case 'array':

                return $active_log_silo_flag_ARRAY;

            break;
            case 'R_string':
            case $this->R_data['int_flag']['R_string']:
            default:

                $tmp_str = '';

                foreach($active_log_silo_flag_ARRAY as
                	$siloKey => $flagset)
                    $tmp_str .= $siloKey . ', ';

                $tmp_str = \rtrim($tmp_str,', ');

                return $tmp_str;

            break;

        }

        return $this->active_log_silo_flag_ARRAY;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function sync_R_log_output_mgr($R_log_output_mgr)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed
         *       crnrstn_logging->sync_olog_profile_manager()
         *       to
         *       sync_R_log_output_mgr().
         *       5 :: Sunday, May 24, 2026 @ 2054 hrs.
         *
         */

        self::$R_log_output_mgr = $R_log_output_mgr;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function proper_replace(
             $pattern,
             $replacement,
             $original_str)
    {

        $pattern_array[0]     = $pattern;
        $replacement_array[0] = $replacement;

        $original_str = \str_replace(
        	            $pattern_array,
        	            $replacement_array,
        	            $original_str);

        return $original_str;

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
     * @return
     * @access public
     *
     */
    function catch_exception(
    	     $exception_obj,
    	     $syslog_level = LOG_DEBUG,
    	     $exception_method = NULL,
    	     $namespace = __NAMESPACE__,
    	     $profile_override_pipe = NULL,
    	     $endpoint_override_pipe = NULL,
    	     $wcr_override_pipe = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging->catch_exception
         *       $syslog_constant input parameter
         *       to $syslog_level.
         *       5 :: Friday, May 1, 2026 @ 0056 hrs.
         *
         */

        /* syslog()
         * SYSLOG priority is a combination
         * of the facility and the level.
         *
         * Possible values are
         * (in descending order):
         * Constant     Description
         * LOG_EMERG    system is unusable.
         * LOG_ALERT    action must be taken immediately
         * LOG_CRIT     critical conditions
         * LOG_ERR      error conditions
         * LOG_WARNING  warning conditions
         * LOG_NOTICE   normal, but significant, condition
         * LOG_INFO     informational message
         * LOG_DEBUG    debug-level message
         *
         * Exception $e
         * final public getMessage ( void ) : string
         * final public getPrevious ( void ) : Throwable
         * final public getCode ( void ) : mixed
         * final public getFile ( void ) : string
         * final public getLine ( void ) : int
         * final public getTrace ( void ) : array
         * final public getTraceAsString ( void ) : string
         * public __toString ( void ) : string
         * final private __clone ( void ) : void
         *
         * $this->error_log('121 - getMessage=' . $exception_obj->getMessage());
         * $this->error_log('122 - getPrevious=' . $exception_obj->getPrevious());
         * $this->error_log('123 - getCode=' . $exception_obj->getCode());
         * $this->error_log('124 - getFile=' . $exception_obj->getFile());
         * $this->error_log('125 - getLine=' . $exception_obj->getLine());
         * $this->error_log('126 - getTraceAsString=' . $exception_obj->getTraceAsString());
         *
         * 121 - getMessage=The requested _SERVER super global parameter [CLOWN_TOWN] cannot be found.
         * 122 - getPrevious=
         * 123 - getCode=0
         * 124 - getFile=/var/www/html/crnrstn_v2/_crnrstn/class/environment/crnrstn.environment.inc.php
         * 125 - getLine=403
         * 126 - getTraceAsString=#0 /var/www/html/crnrstn_v2/_crnrstn/class/user
         *       /crnrstn.user.inc.php(6063): crnrstn_environment->getServerArrayVar(
         *       'CLOWN_TOWN', Object(crnrstn_user))\n#1 /var/www/html/crnrstn_v2
         *       /common/inc/footer/footer.inc.php(591): crnrstn_user->get_SERVER_param(
         *       'CLOWN_TOWN')\n#2 /var/www/html/crnrstn_v2/index.php(132):
         *       include_once('/var/www/html/c..')\n#3 {main}
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CRNRSTN :: Deep Embryonic State.
         *
         *$init_profile_pack_ARRAY['sys_logging_profile_ARRAY'] = $array[crc32($this->config_serial)][CRNRSTN_LOG_ALL][];
         *$init_profile_pack_ARRAY['sys_logging_meta_ARRAY'] = $array[crc32($this->config_serial)][CRNRSTN_LOG_ALL][];
         *$init_profile_pack_ARRAY['sys_logging_wcr_ARRAY'] = $array[crc32($this->config_serial)][CRNRSTN_LOG_ALL][]
         *
         */
        $init_profile_pack_ARRAY = $this->return_sys_logging_init_profile_pack();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		 * Return an instantiation of
		 * The CRNRSTN :: Lightsaber RoCEv2
		 * SOAP Services Layer (CLR-SSL) Wild
		 * Card Resource Multi-Channel
		 * Logging Output Profile Manager.
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2100 hrs.
         *
         * $this->oLog_ProfileManager = new crnrstn_logging_oprofile_manager(
         *                                  $init_profile_pack_ARRAY,
         *                                  $this->oCRNRSTN);
         *
         * self::$R_log_output_mgr = $this->return_registered_resource(
         *                                  'new',
         *                                  'crnrstn_logging_output_profile_manager',
         *                                  $init_profile_pack_ARRAY);
         */

        $spice_salt_mem_ptr = NULL;
        // 5 :: Friday, August 21, 2026 @ 0112 hrs.
        $this->compound_ointment(
               $spice_salt_mem_ptr,
               'crnrstn_logging_output_profile_manager',
               $init_profile_pack_ARRAY);
        $this->anoint(
               'crnrstn_logging_output_profile_manager',
               self::$R_log_output_mgr);

        /*error_log('[lnum ' .
         *    __LINE__ . '] [mthd ' .
         *    __METHOD__ .
         *    '] ' . get_class() .
         *    '::  init_profile_pack_ARRAY size=' .
         *    print_r($init_profile_pack_ARRAY, true));
         *
         * die();
         *
         * self::$R_log_output_mgr->sync_to_environment($this);
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Do we need to call
         * this after constructor
         * receives same array?
         *
         *
         * 5
         *
         * Wednesday, July 31, 2024 @ 0824 hrs.
         *
         */
        self::$R_log_output_mgr->consume_init_profile_pack($init_profile_pack_ARRAY);

        $tmp_exception_msg        = $exception_obj->getMessage();
        $tmp_exception_linenum    = $exception_obj->getLine();
        $tmp_exception_runtime    = $this->wall_time();
        $tmp_exception_systemtime = $this->return_micro_time();

        $exception_method_trim    = $exception_method;
        if(isset($exception_method))
            $exception_method_trim = trim($exception_method);

        if(isset($exception_method_trim)){

            if($exception_method_trim == ''){

                $tmp_source_method = '';
                $tmp_exception_method = $exception_obj->getFile();
                $method = 'file';

            }else{

                $tmp_source_method = $exception_method_trim;
                $tmp_exception_method = $exception_method_trim . '()';
                $method = 'methd';

            }

        }else{

            $tmp_source_method = '';
            $tmp_exception_method = $exception_obj->getFile();
            $method = 'file';

        }

        /*
        $this->error_log('[rtime ' .
        	   $tmp_exception_runtime . ' secs] [' .
        	   $method . ' ' .
        	   $tmp_exception_method . '] [lnum ' .
        	   $tmp_exception_linenum . '] ' .
        	   $tmp_exception_msg,
        	   __LINE__,
        	   __METHOD__,
        	   __FILE__,
        	   CRNRSTN_LOG_ALL);

        */

        $clr_ssl_msg = '[rtime ' .
                       $tmp_exception_runtime . ' secs] [' .
                       $method . ' ' .
                       $tmp_exception_method . '] [lnum ' .
                       $tmp_exception_linenum . '] ' .
                       $tmp_exception_msg;
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
        $this->error_log(
            $clr_ssl_msg,
            \LOG_ERR,
            \E_ERROR,
            __LINE__,
            __METHOD__,
            __FILE__,
            $token);

        $tmp_exception_output_str = $tmp_exception_systemtime . ' [rtime ' .
                                    $tmp_exception_runtime . ' secs] [' .
                                    $method . ' ' .
                                    $tmp_exception_method . '] [lnum ' .
                                    $tmp_exception_linenum . '] ' .
                                    $tmp_exception_msg;

        switch($tmp_source_method){
            case 'crnrstn_soap_request_manager::takeTheKingsHighway':

                $tmp_pos_SOAP_req = \strpos($tmp_exception_msg, 'a SOAP request '); //a SOAP request

                if($tmp_pos_SOAP_req !== false){

                    $tmp_array = array(
                        'CRNRSTN_PACKET_IS_ENCRYPTED'       => 'FALSE',
                        'CRNRSTN_SOAP_SVC_USERNAME'         => $_SESSION['CRNRSTN_SOAP_SVC_USERNAME'],
                        'SOAP_SERVICES_AUTH_STATUS'         => 'ACCESS DENIED',
                        'STATUS_CODE'                       => '406',
                        'STATUS_MESSAGE'                    => 'The CRNRSTN :: Lightsaber ' .
                                                               'RoCEv2 SOAP Services Layer (CLR-SSL) ' .
                                                               'understood the client request, ' .
                                                               'but is unwilling to accept it ' .
                                                               'due to the following reason. ' .
                                                               $tmp_exception_output_str,
                        'ISERROR_CODE'                      => '406',
                        'ISERROR_MESSAGE'                   => '406 Not Acceptable.',
                        'DATE_RECEIVED_SOAP_REQUEST'        => $this->tmp_precise_timestamp,
                        'SERVER_NAME_SOAP_SERVER'           => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_SERVER'        => $_SERVER['SERVER_ADDR'],
                        'SOAP_OPERATION_RUNTIME_SECONDS'    => $tmp_exception_runtime,
                        'DATE_CREATED_SOAP_RESPONSE'        => $this->return_micro_time(),
                        'SERVER_NAME_SOAP_CLIENT'           => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_CLIENT'        => $_SERVER['SERVER_ADDR']);

                }else{

                    $tmp_array = array(
                        'CRNRSTN_PACKET_IS_ENCRYPTED'       => 'FALSE',
                        'CRNRSTN_SOAP_SVC_USERNAME'         => $_SESSION['CRNRSTN_SOAP_SVC_USERNAME'],
                        'SOAP_SERVICES_AUTH_STATUS'         => 'ACCESS DENIED',
                        'STATUS_CODE'                       => '406',
                        'STATUS_MESSAGE'                    => 'The CRNRSTN :: Lightsaber RoCEv2 ' .
                                                               'SOAP Services Layer (CLR-SSL) ' .
                                                               'understood the client request, ' .
                                                               'but is unwilling to accept it ' .
                                                               'due to the following reason. ' .
                                                               $tmp_exception_output_str,
                        'ISERROR_CODE'                      => '406',
                        'ISERROR_MESSAGE'                   => '406 Not Acceptable.',
                        'DATE_RECEIVED_SOAP_REQUEST'        => $this->tmp_precise_timestamp,
                        'SERVER_NAME_SOAP_SERVER'           => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_SERVER'        => $_SERVER['SERVER_ADDR'],
                        'SOAP_OPERATION_RUNTIME_SECONDS'    => $tmp_exception_runtime,
                        'DATE_CREATED_SOAP_RESPONSE'        => $this->return_micro_time(),
                        'SERVER_NAME_SOAP_CLIENT'           => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_CLIENT'        => $_SERVER['SERVER_ADDR']);

                }

                return $tmp_array;

            break;
            default:

                /* $tmp_exception_method = $exception_method . '()';
                 * $method = 'methd';
                 */

            break;

        }

        self::$R_log_output_mgr->notification_go(
        	                     $tmp_exception_output_str,
        	                     $syslog_level,
        	                     $tmp_exception_method,
        	                     $tmp_exception_runtime,
        	                     $tmp_exception_systemtime,
        	                     $exception_obj);

        return NULL;

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
     * @return
     * @access public
     *
     */
    function __________catch_exception(
    	            $exception_obj,
    	            $syslog_level,
    	            $exception_method,
    	            $namespace,
    	            $profile_override_pipe,
    	            $endpoint_override_pipe,
    	            $wcr_override_pipe)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging->__________catch_exception
         *       $syslog_constant input parameter
         *       to $syslog_level.
         *       5 :: Friday, May 1, 2026 @ 0114 hrs.
         *
         */

        /* syslog()
         * SYSLOG priority is a combination
         * of the facility and the level.
         *
         * Possible values are
         * (in descending order):
         * Constant		  Description
         * LOG_EMERG      system is unusable.
         * LOG_ALERT      action must be taken immediately
         * LOG_CRIT       critical conditions
         * LOG_ERR        error conditions
         * LOG_WARNING    warning conditions
         * LOG_NOTICE     normal, but significant, condition
         * LOG_INFO       informational message
         * LOG_DEBUG      debug-level message
         *
         * Exception $e
         * final public getMessage ( void ) : string
         * final public getPrevious ( void ) : Throwable
         * final public getCode ( void ) : mixed
         * final public getFile ( void ) : string
         * final public getLine ( void ) : int
         * final public getTrace ( void ) : array
         * final public getTraceAsString ( void ) : string
         * public __toString ( void ) : string
         * final private __clone ( void ) : void
         *
         * $this->error_log('121 - getMessage=' . $exception_obj->getMessage());
         * $this->error_log('122 - getPrevious=' . $exception_obj->getPrevious());
         * $this->error_log('123 - getCode=' . $exception_obj->getCode());
         * $this->error_log('124 - getFile=' . $exception_obj->getFile());
         * $this->error_log('125 - getLine=' . $exception_obj->getLine());
         * $this->error_log('126 - getTraceAsString=' . $exception_obj->getTraceAsString());
         *
         * 121 - getMessage=The requested _SERVER super global parameter [CLOWN_TOWN] cannot be found.
         * 122 - getPrevious=
         * 123 - getCode=0
         * 124 - getFile=/var/www/html/crnrstn_v2/_crnrstn/class/environment/crnrstn.environment.inc.php
         * 125 - getLine=403
         * 126 - getTraceAsString=#0 /var/www/html/crnrstn_v2/_crnrstn/class/user
         *       /crnrstn.user.inc.php(6063): crnrstn_environment->getServerArrayVar(
         *       'CLOWN_TOWN', Object(crnrstn_user))\n#1 /var/www/html/crnrstn_v2
         *       /common/inc/footer/footer.inc.php(591): crnrstn_user->
         *       get_SERVER_param('CLOWN_TOWN')\n#2 /var/www/html/crnrstn_v2
         *       /index.php(132): include_once('/var/www/html/c..')\n#3 {main}
         *
         */

        //$tmp_class_name = get_class($oCRNRSTN);

        switch($tmp_class_name){
            case 'crnrstn':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Deep Embryonic State.
                 *
                 *$init_profile_pack_ARRAY['sys_logging_profile_ARRAY'] = $array[crc32($this->config_serial)][CRNRSTN_LOG_ALL][];
                 *$init_profile_pack_ARRAY['sys_logging_meta_ARRAY'] = $array[crc32($this->config_serial)][CRNRSTN_LOG_ALL][];
                 *$init_profile_pack_ARRAY['sys_logging_wcr_ARRAY'] = $array[crc32($this->config_serial)][CRNRSTN_LOG_ALL][]
            	 *
                 */
                $init_profile_pack_ARRAY = $this->return_sys_logging_init_profile_pack();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
				 * Return an instantiation of
				 * The CRNRSTN :: Lightsaber RoCEv2
				 * SOAP Services Layer (CLR-SSL) Wild
				 * Card Resource Multi-Channel
				 * Logging Output Profile Manager.
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2108 hrs.
                 *
                 * $this->oLog_ProfileManager = new crnrstn_logging_oprofile_manager(
                 *                                  $init_profile_pack_ARRAY,
                 *                                  $this->oCRNRSTN);
                 *
                 */
                self::$R_log_output_mgr = $this->return_registered_resource(
                	                             'new',
                	                             'crnrstn_logging_output_profile_manager',
                	                             $init_profile_pack_ARRAY);

                /* error_log('[lnum ' .
		         *    __LINE__ . '] [mthd ' .
		         *    __METHOD__ .
		         *    '] init_profile_pack_ARRAY size=' .
		         *    print_r($init_profile_pack_ARRAY, true));
		         *
		         * die();
		         *
		         * self::$R_log_output_mgr->sync_to_environment($this);
		         *
		         */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Do we need to call
                 * this after constructor
                 * receives same array?
                 *
                 */
                self::$R_log_output_mgr->consume_init_profile_pack($init_profile_pack_ARRAY);

            break;
            case 'crnrstn_user':

/*                $oCRNRSTN_ENV = $this->return_oCRNRSTN_ENV();
 *
 *                //
 *                // Always get fresh
 *                // logging profile.
 *                //
 *                // It can change before
 *                // method call...right?
 *                $init_profile_pack_ARRAY = array();
 *                $init_profile_pack_ARRAY['sys_logging_profile_ARRAY'] = $oCRNRSTN_ENV->return_sys_logging_profile();
 *                $init_profile_pack_ARRAY['sys_logging_meta_ARRAY'] = $oCRNRSTN_ENV->return_sys_logging_meta();
 *
 *                if(isset($this->oCRNRSTN_WCR_ARRAY[$this->hash($this->get_crnrstn('R_cluster_id'))])){
 *
 *                    $init_profile_pack_ARRAY['sys_logging_wcr_ARRAY'] = $oCRNRSTN_ENV->oCRNRSTN_WCR_ARRAY[$oCRNRSTN_ENV->hash($this->get_crnrstn('R_cluster_id'))][CRNRSTN_LOG_ALL];
 *
 *                }
 *
 *                self::$R_log_output_mgr = $this->return_R_log_output_mgr();
 *                self::$R_log_output_mgr->consume_init_profile_pack($init_profile_pack_ARRAY);
 */
            break; // DO NOT BREAK.
            case 'crnrstn_environment':

/*                //
 *                // Always get fresh
 *                // logging profile.
 *                //
 *                // It can change before
 *                // method call...right?
 *                $init_profile_pack_ARRAY = array();
 *                $init_profile_pack_ARRAY['sys_logging_profile_ARRAY'] = $this->return_sys_logging_profile();
 *                $init_profile_pack_ARRAY['sys_logging_meta_ARRAY'] = $this->return_sys_logging_meta();
 *                //$init_profile_pack_ARRAY['sys_logging_wcr_ARRAY'] = $this->oCRNRSTN_WCR_ARRAY[$this->crc_int32($this->config_serial_crc)][CRNRSTN_LOG_ALL];
 *
 *                if(isset($this->oCRNRSTN_WCR_ARRAY[$this->hash($this->get_crnrstn('R_cluster_id'))])){
 *
 *                    $init_profile_pack_ARRAY['sys_logging_wcr_ARRAY'] = $this->oCRNRSTN_WCR_ARRAY[$this->hash($this->get_crnrstn('R_cluster_id'))][CRNRSTN_LOG_ALL];
 *
 *                }
 *
 *                self::$R_log_output_mgr = $this->return_R_log_output_mgr();
 *
 */
              	/* error_log('[lnum ' .
		         *    __LINE__ . '] [mthd ' .
		         *    __METHOD__ .
		         *    '] pack + sys_logging_wcr_ARRAY=' .
		         *    print_r($init_profile_pack_ARRAY, true));
		         *
		         * die();
		         *
		         * self::$R_log_output_mgr->consume_init_profile_pack($init_profile_pack_ARRAY);
		         *
		         */

        	break;

            /**
             * Mature development.
             *
        	 */
            default :


            break;

        }

        $tmp_exception_msg        = $exception_obj->getMessage();
        $tmp_exception_linenum    = $exception_obj->getLine();
        $tmp_exception_runtime    = $this->wall_time();
        $tmp_exception_systemtime = $this->return_micro_time();
        $exception_method_trim    = trim($exception_method);

        /* error_log('[lnum ' .
         *    __LINE__ . '] [mthd ' .
         *    __METHOD__ .
         *    '] my class in logger catch_exception is ' .
         *    get_class($oCRNRSTN) . ' $exception_method_trim=' .
         *    $exception_method_trim . ' $tmp_exception_msg=' .
         *    $tmp_exception_msg);
         *
         */

        if(isset($exception_method_trim)){

            if($exception_method_trim == ''){

                $tmp_source_method    = '';
                $tmp_exception_method = $exception_obj->getFile();
                $method               = 'file';

            }else{

                $tmp_source_method    = $exception_method_trim;
                $tmp_exception_method = $exception_method_trim . '()';
                $method               = 'methd';

            }

        }else{

            $tmp_source_method       = '';
            $tmp_exception_method    = $exception_obj->getFile();
            $method                  = 'file';

        }

        $this->error_log('[rtime ' .
        	   $tmp_exception_runtime . ' secs] [' .
        	   $method . ' ' .
        	   $tmp_exception_method . '] [lnum ' .
        	   $tmp_exception_linenum . '] ' .
        	   $tmp_exception_msg,
        	   __LINE__,
        	   __METHOD__,
        	   __FILE__,
        	   CRNRSTN_LOG_ALL);

        $tmp_exception_output_str = $tmp_exception_systemtime . ' [rtime ' .
                                    $tmp_exception_runtime . ' secs] [' .
                                    $method . ' ' .
                                    $tmp_exception_method . '] [lnum ' .
                                    $tmp_exception_linenum . '] ' .
                                    $tmp_exception_msg;

        switch($tmp_source_method){
            case 'crnrstn_soap_request_manager::takeTheKingsHighway':

                /* $http_status_codes = array(
                 *                      100 => 'Continue',
                 *                      101 => 'Switching Protocols',
                 *                      102 => 'Processing',
                 *                      200 => 'OK',
                 *                      201 => 'Created',
                 *                      202 => 'Accepted',
                 *                      203 => 'Non-Authoritative Information',
                 *                      204 => 'No Content',
                 *                      205 => 'Reset Content',
                 *                      206 => 'Partial Content',
                 *                      207 => 'Multi-Status',
                 *                      300 => 'Multiple Choices',
                 *                      301 => 'Moved Permanently',
                 *                      302 => 'Found',
                 *                      303 => 'See Other',
                 *                      304 => 'Not Modified',
                 *                      305 => 'Use Proxy',
                 *                      306 => '(Unused)',
                 *                      307 => 'Temporary Redirect',
                 *                      308 => 'Permanent Redirect',
                 *                      400 => 'Bad Request',
                 *                      401 => 'Unauthorized',
                 *                      402 => 'Payment Required',
                 *                      403 => 'Forbidden',
                 *                      404 => 'Not Found',
                 *                      405 => 'Method Not Allowed',
                 *                      406 => 'Not Acceptable',
                 *                      407 => 'Proxy Authentication Required',
                 *                      408 => 'Request Timeout',
                 *                      409 => 'Conflict',
                 *                      410 => 'Gone',
                 *                      411 => 'Length Required',
                 *                      412 => 'Precondition Failed',
                 *                      413 => 'Request Entity Too Large',
                 *                      414 => 'Request-URI Too Long',
                 *                      415 => 'Unsupported Media Type',
                 *                      416 => 'Requested Range Not Satisfiable',
                 *                      417 => 'Expectation Failed',
                 *                      418 => 'I\'m a teapot',
                 *                      419 => 'Authentication Timeout',
                 *                      420 => 'Enhance Your Calm',
                 *                      422 => 'Unprocessable Entity',
                 *                      423 => 'Locked',
                 *                      424 => 'Failed Dependency',
                 *                      424 => 'Method Failure',
                 *                      425 => 'Unordered Collection',
                 *                      426 => 'Upgrade Required',
                 *                      428 => 'Precondition Required',
                 *                      429 => 'Too Many Requests',
                 *                      431 => 'Request Header Fields Too Large',
                 *                      444 => 'No Response',
                 *                      449 => 'Retry With',
                 *                      450 => 'Blocked by Windows Parental Controls',
                 *                      451 => 'Unavailable For Legal Reasons',
                 *                      494 => 'Request Header Too Large',
                 *                      495 => 'Cert Error',
                 *                      496 => 'No Cert',
                 *                      497 => 'HTTP to HTTPS',
                 *                      499 => 'Client Closed Request',
                 *                      500 => 'Internal Server Error',
                 *                      501 => 'Not Implemented',
                 *                      502 => 'Bad Gateway',
                 *                      503 => 'Service Unavailable',
                 *                      504 => 'Gateway Timeout',
                 *                      505 => 'HTTP Version Not Supported',
                 *                      506 => 'Variant Also Negotiates',
                 *                      507 => 'Insufficient Storage',
                 *                      508 => 'Loop Detected',
                 *                      509 => 'Bandwidth Limit Exceeded',
                 *                      510 => 'Not Extended',
                 *                      511 => 'Network Authentication Required',
                 *                      598 => 'Network read timeout error',
                 *                      599 => 'Network connect timeout error');
                 */

                $tmp_pos_SOAP_req = \strpos($tmp_exception_msg,'a SOAP request '); //a SOAP request

                if($tmp_pos_SOAP_req !== false){

                    $tmp_array = array(
                        'CRNRSTN_PACKET_IS_ENCRYPTED' => 'FALSE',
                        'CRNRSTN_SOAP_SVC_USERNAME' => $_SESSION['CRNRSTN_SOAP_SVC_USERNAME'],
                        'SOAP_SERVICES_AUTH_STATUS' => 'ACCESS DENIED',
                        'STATUS_CODE' => '406',
                        'STATUS_MESSAGE' => 'The CRNRSTN :: Lightsaber ' .
                                            'RoCEv2 SOAP Services Layer ' .
                                            '(CLR-SSL) understood the ' .
                                            'client request, but is ' .
                                            'unwilling to accept it due ' .
                                            'to the following reason. ' .
                                            $tmp_exception_output_str,
                        'ISERROR_CODE' => '406',
                        'ISERROR_MESSAGE' => '406 Not Acceptable.',
                        'DATE_RECEIVED_SOAP_REQUEST' => $this->tmp_precise_timestamp,
                        'SERVER_NAME_SOAP_SERVER' => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_SERVER' => $_SERVER['SERVER_ADDR'],
                        'SOAP_OPERATION_RUNTIME_SECONDS' => $tmp_exception_runtime,
                        'DATE_CREATED_SOAP_RESPONSE' => $this->return_micro_time(),
                        'SERVER_NAME_SOAP_CLIENT' => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_CLIENT' => $_SERVER['SERVER_ADDR']);

                }else{

                    $tmp_array = array(
                        'CRNRSTN_PACKET_IS_ENCRYPTED' => 'FALSE',
                        'CRNRSTN_SOAP_SVC_USERNAME' => $_SESSION['CRNRSTN_SOAP_SVC_USERNAME'],
                        'SOAP_SERVICES_AUTH_STATUS' => 'ACCESS DENIED',
                        'STATUS_CODE' => '406',
                        'STATUS_MESSAGE' => 'The CRNRSTN :: Lightsaber ' .
                                            'RoCEv2 SOAP Services Layer ' .
                                            '(CLR-SSL) understood the ' .
                                            'client request, but is ' .
                                            'unwilling to accept it due ' .
                                            'to the following reason. ' .
                                            $tmp_exception_output_str,
                        'ISERROR_CODE' => '406',
                        'ISERROR_MESSAGE' => '406 Not Acceptable.',
                        'DATE_RECEIVED_SOAP_REQUEST' => $this->tmp_precise_timestamp,
                        'SERVER_NAME_SOAP_SERVER' => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_SERVER' => $_SERVER['SERVER_ADDR'],
                        'SOAP_OPERATION_RUNTIME_SECONDS' => $tmp_exception_runtime,
                        'DATE_CREATED_SOAP_RESPONSE' => $this->return_micro_time(),
                        'SERVER_NAME_SOAP_CLIENT' => $_SERVER['SERVER_NAME'],
                        'SERVER_ADDRESS_SOAP_CLIENT' => $_SERVER['SERVER_ADDR']);

                }

                return $tmp_array;

            break;
            default:

                /* $tmp_exception_method = $exception_method . '()';
                 * $method = 'methd';
                 *
                 */

            break;

        }

        self::$R_log_output_mgr->notification_go(
        	                     $tmp_exception_output_str,
        	                     $syslog_level,
        	                     $tmp_exception_method,
        	                     $tmp_exception_runtime,
        	                     $tmp_exception_systemtime,
        	                     $exception_obj);

        return NULL;

    }

/*
    $clr_ssl_msg = 'CRNRSTN :: is unable to ' .
                   'format the input data, ' .
                   $interval_str .
                   ', to a recognized ' .
                   'SQL time interval. ' .
                   $this->data_report(
                          $interval_str,
                          'CRNRSTN :: MC-DDO Input ' .
                          'Data Report |');
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
    $this->error_log(
           $clr_ssl_msg,
           \LOG_DEBUG,
           \E_NOTICE,
           __LINE__,
           __METHOD__,
           __FILE__,
           $token);

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * $this->error_log_clear($msg_token);
     *
     * $this->error_log(
     *        $clr_ssl_msg,
     *        \LOG_ERR,
     *        \E_ERROR,
     *        __LINE__,
     *        __METHOD__,
     *        __FILE__,
     *        $token,
     *        true,
     *        'R_channel_SESSION');
     *
     * Syslog Levels:
     * Constant                Description
     * LOG_EMERG            => 'system is unusable.'
     * LOG_ALERT            => 'action must be
     *                          taken immediately'
     * LOG_CRIT             => 'critical conditions'
     * LOG_ERR              => 'error conditions'
     * LOG_WARNING          => 'warning conditions'
     * LOG_NOTICE           => 'normal, but
     *                          significant, condition'
     * LOG_INFO             => 'informational message'
     * LOG_DEBUG            => 'debug-level message'
     *
     * Error Reporting:
     * Value   Constant                     Description Note
     * 1       \E_ERROR (int)               Fatal run-time errors.
     *                                      These indicate errors that
     *                                      can not be recovered from,
     *                                      such as a memory allocation
     *                                      problem. Execution of the
     *                                      script is halted.
     * 2       \E_WARNING (int)             Run-time warnings (non-fatal
     *                                      errors). Execution of the
     *                                      script is not halted.
     * 4       \E_PARSE (int)               Compile-time parse errors.
     *                                      Parse errors should only be
     *                                      generated by the parser.
     * 8       \E_NOTICE (int)              Run-time notices. Indicate
     *                                      that the script encountered
     *                                      something that could
     *                                      indicate an error, but
     *                                      could also happen in the
     *                                      normal course of running
     *                                      a script.
     * 16      \E_CORE_ERROR (int)          Fatal errors that occur
     *                                      during PHP's initial
     *                                      startup. This is like an
     *                                      E_ERROR, except it is
     *                                      generated by the core
     *                                      of PHP.
     * 32      \E_CORE_WARNING (int)        Warnings (non-fatal
     *                                      errors) that occur
     *                                      during PHP's initial
     *                                      startup. This is like
     *                                      an E_WARNING, except it
     *                                      is generated by the
     *                                      core of PHP.
     * 64      \E_COMPILE_ERROR (int)       Fatal compile-time errors.
     *                                      This is like an E_ERROR,
     *                                      except it is generated
     *                                      by the Zend Scripting Engine.
     * 128     \E_COMPILE_WARNING (int)     Compile-time warnings
     *                                      (non-fatal errors). This
     *                                      is like an E_WARNING,
     *                                      except it is generated
     *                                      by the Zend Scripting Engine.
     * 256     \E_USER_ERROR (int)          User-generated error
     *                                      message. This is like
     *                                      an E_ERROR, except it
     *                                      is generated in PHP code
     *                                      by using the PHP function
     *                                      trigger_error().
     * 512     \E_USER_WARNING (int)        User-generated warning
     *                                      message. This is like an
     *                                      E_WARNING, except it is
     *                                      generated in PHP code by
     *                                      using the PHP function
     *                                      trigger_error().
     * 1024    \E_USER_NOTICE (int)         User-generated notice
     *                                      message. This is like an
     *                                      E_NOTICE, except it is
     *                                      generated in PHP code by
     *                                      using the PHP function
     *                                      trigger_error().
     * 2048    \E_STRICT (int)              Enable to have PHP suggest
     *                                      changes to your code which
     *                                      will ensure the best
     *                                      interoperability and forward
     *                                      compatibility of your code.
     * 4096    \E_RECOVERABLE_ERROR (int)   Catchable fatal error.
     *                                      It indicates that a probably
     *                                      dangerous error occurred,
     *                                      but did not leave the Engine
     *                                      in an unstable state. If the
     *                                      error is not caught by a user
     *                                      defined handle (see also
     *                                      set_error_handler()), the
     *                                      application aborts as it was
     *                                      an E_ERROR.
     * 8192    \E_DEPRECATED (int)          Run-time notices. Enable
     *                                      this to receive warnings
     *                                      about code that will not work
     *                                      in future versions.
     * 16384   \E_USER_DEPRECATED (int)     User-generated warning
     *                                      message. This is like an
     *                                      E_DEPRECATED, except it
     *                                      is generated in PHP code
     *                                      by using the PHP function
     *                                      trigger_error().
     * 32767   \E_ALL (int)                 All errors, warnings,
     *                                      and notices.
     */

     // ^ TEMPLATE. 2026-05-18 10:37:28.242035

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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function error_log(
             $message_str = NULL,
             $syslog_level = \LOG_DEBUG,
             $error_reporting_level = \E_NOTICE,
             $line_num = NULL,
             $method = NULL,
             $file = NULL,
             $token = NULL,
             $spool = false,
             $spool_channel = 'R_channel_RUNTIME',
             $syslog_prefix = 'R :: ',
             $syslog_prefix_passthrough = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Copied updated error_log
         *       method definition from crnrstn
         *       during the early phase of the
         *       CLR-SSL Logging Services Layer
         *       rearchitecture.
         *       5 :: Friday, May 1, 2026 @ 0126 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Re-copied updated error_log
         *       method definition from crnrstn
         *       during the latter phase of the
         *       CLR-SSL Logging Services Layer
         *       rearchitecture restart.
         *       5 :: Saturday, May 16, 2026 @ 0323 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added $syslog_prefix_passthrough
         *       input parameter to crnrstn_logging
         *       error_log method to support white
         *       label system (syslog) message
         *       prefix passthrough.
         *       5 :: Friday, May 22, 2026 @ 0449 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed the crnrstn_logging
         *       error_log method input parameter
         *       default for $syslog_level from
         *       LOG_INFO to LOG_DEBUG.
         *       5 :: Tuesday, June 16, 2026 @ 0201 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Delete this temp syslog()
         *         deprecated input filter
         *         when the previous architecture
         *         has been properly sunset.
         *
         *         We are replacing
         *         all occurences of:
         *         - err_message_queue_push(),
         *         - err_message_queue_retrieve(),
         *         - err_message_queue_clear(), and
         *         - err_message_count().
         *
         *         with
         *
         *         - error_log(), and
         *         - error_log_clear().
         *
         *
         *         5 :: Saturday, May 16, 2026 @ 0058 hrs.
         *
         */
        if(!is_int($error_reporting_level)){

            \openlog(
                $this->clr_ssl_syslog_prefix(
                       $syslog_level,
                       $line_num,
                       $error_reporting_level,
                       'R :: Warning DEPRECATED ',
                       $syslog_prefix_passthrough),
                \LOG_CONS |
                \LOG_NDELAY |
                \LOG_NOWAIT |
                \LOG_PID |
                \LOG_PERROR,
                \LOG_SYSLOG);
            \syslog(
                $syslog_level,
                $message_str);
            \closelog();

            return true;

        }// End of filter.

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Moved crnrstn->error_log
         *       $log_silo_key input param to
         *       be after $str and renamed it
         *       to $syslog_level.
         *       Added $error_reporting_level
         *       and $token input params to
         *       error_log as well.
         *       5 :: Thursday, April 30, 2026 @ 1616 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added the $spool input param to
         *       the crnrstn->error_log method.
         *       5 :: Thursday, April 30, 2026 @ 2355 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the $str input param to
         *       $message_str.
         *       5 :: Saturday, May 9, 2026 @ 0630 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added the $syslog_prefix input param to
         *       the crnrstn->error_log method.
         *       5 :: Saturday, May 9, 2026 @ 1418 hrs.
         *
         */

        if(is_string($spool_channel))
            $spool_channel = $this->R_data['int_flag'][$spool_channel];

        if($spool == true){

            switch($spool_channel){
                case $this->R_data['int_flag']['R_channel_SESSION']:
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We currently spool error_log data
                     * to the CLR-SSL session channel in
                     * order to pass an error prefix
                     * string to our custom error handler.
                     *
                     *
                     * 5 :: Tuesday, May 12, 2026 @ 0815 hrs.
                     *
                     */

                    $R_cluster_id = $this->get_crnrstn('R_cluster_id');
                    $_SESSION['CRNRSTN_ERROR_PREFIX_' .
                    $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX']['SYSTEM_ID'][] = $message_str;

                    return \count($_SESSION['CRNRSTN_ERROR_PREFIX_' .
                           $R_cluster_id]['CRNRSTN_EXCEPTION_PREFIX']['SYSTEM_ID']);

                break;
                case $this->R_data['int_flag']['R_channel_RUNTIME']:
                default:

                    // 5 :: Thursday, April 23, 2026 @ 0040 hrs.
                    //$this->R_data['spool']['err_message_queue_push']['message_token'][]                               = $token['token'];
                    //$this->R_data['spool']['err_message_queue_push'][$token['token']][]['message'][]                  = $message_str;
                    //$this->R_data['spool']['err_message_queue_push'][$token['token']]['data_authorization_profile'][] = $spool_channel;

                    //return count($this->R_data['spool']['err_message_queue_push']['message']);

	                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
	                 * CLR-SSL spooling
	                 * architecture is pending.
	                 *
	                 * Error this fact
	                 * out for now.
	                 *
	                 *
	                 * 5 :: Saturday, May 16, 2026 @ 0300 hrs.
	                 *
	                 */
	                \openlog(
	                    $this->clr_ssl_syslog_prefix(
                               $line_num,
                               $file,
                               $method,
                               'R :: [Log Spool Pending] ',
                               $syslog_prefix_passthrough),
	                    \LOG_CONS |
	                    \LOG_NDELAY |
	                    \LOG_NOWAIT |
	                    \LOG_PID |
	                    \LOG_PERROR,
	                    \LOG_SYSLOG);
	                \syslog($syslog_level, $message_str);
	                \closelog();

	                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
	                 * Nothing happened.
	                 *
	                 * Is not the CLR-SSL spooling
	                 * architecture still pending?
	                 *
	                 */
                	return 0;

                break;

            }

        }

        switch($this->R_data['R_debug_mode']){
            case $this->R_data['int_flag']['CRNRSTN_DEBUG_SYSLOG']:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * https://www.php.net/manual/en/function.openlog.php
                 * https://www.php.net/manual/en/function.syslog.php
                 * https://www.php.net/manual/en/function.closelog.php
                 * https://www.php.net/manual/en/network.constants.php
                 *
                 *
                 * LOG_CONS (int)
                 * If there is an error while
                 * sending data to the system
                 * logger, write directly to
                 * the system console.
                 *
                 * LOG_NDELAY (int)
                 * Open the connection to
                 * the logger immediately.
                 *
                 * LOG_ODELAY (int)
                 * Delay opening the connection
                 * until the first message is
                 * logged. This is the
                 * default behaviour.
                 *
                 * LOG_NOWAIT (int)
                 *
                 * LOG_PERROR (int)
                 * Additionally log messages
                 * to STDERR.
                 *
                 * LOG_PID
                 * Include the PID with each
                 * log message.
                 *
                 * 5 :: Saturday, May 9, 2026 @ 1412 hrs.
                 *
                 */
                \openlog(
                    $this->clr_ssl_syslog_prefix(
                           $line_num,
                           $file,
                           $method,
                           $syslog_prefix,
                           $syslog_prefix_passthrough),
                    \LOG_CONS |
                    \LOG_NDELAY |
                    \LOG_NOWAIT |
                    \LOG_PID |
                    \LOG_PERROR,
                    \LOG_SYSLOG);
                \syslog($syslog_level, $message_str);
                \closelog();

            case $this->R_data['int_flag']['CRNRSTN_SYSTEM_TEST']:
            case $this->R_data['int_flag']['CRNRSTN_DEBUG_ON']:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Tonight's assignment. We begin the
                 * implementation of the CLR-SSL Database
                 * Services Layer in support of error
                 * logging for the CLR-SSL Logging
                 * Services Layer.
                 *
                 *
                 * 5 :: Tuesday, August 25, 2026 @ 2217 hrs.
                 * Last Modified: Tuesday, August 25, 2026 @ 2237 hrs.
                 * Took a few in to get a
                 * righteous rip on the bong...
                 * then come back, and finish
                 * the thought, above.
                 */
                if(isset(self::$_R['kivotos']->R['crnrstn_database_crnrstn']))
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * The CLR-SSL Logging Services
                     * Layer architecture is
                     * directly integrated into the
                     * CLR-SSL Database Services Layer.
                     *
                     *
                     * 5 :: Tuesday, August 25, 2026 @ 2251 hrs.
                     */
                    self::$_R['kivotos']->R['crnrstn_database_crnrstn']->error_log(
                                                                         $message_str,
                                                                         $syslog_level,
                                                                         $error_reporting_level,
                                                                         $line_num,
                                                                         $method,
                                                                         $file,
                                                                         $token,
                                                                         $spool,
                                                                         $spool_channel,
                                                                         $syslog_prefix,
                                                                         $syslog_prefix_passthrough);


                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                5 :: Sunday, May 10, 2026 @ 1842 hrs.

                Database
                SOAP
                Cache Management Policy
                   - Unflushed-to-database
                     MySQL/JSON messaging
                     activity logs.
                   - Comprehensive CLR-SSL
                     Rollover policy for all
                     of the nickel-and-dime-me-
                     bound-to-file-system-
                     status-management flags,
                     counters, and resource
                     meta aggregations.

                CLR-SSL Database Logging:
                1) Build the system message
                   JSON object.
                2) Make moves to store the
                   messaging transaction
                   into a MySQL database with
                   JSON data type to be used
                   for the JSON data.

                self::$R_json = new crnrstn_json();
                $oJSON = self::$R_json->build(
                                        __METHOD__,
                                        $data_000,
                                        $data_001,
                                        $data_002,
                                        $data_003,
                                        $data_004,
                                        $data_005,
                                        $data_006,
                                        $data_007,
                                        $data_008,
                                        $data_009,
                                        $data_010,
                                        $data_011,
                                        $data_012,
                                        $data_013,
                                        $data_014,
                                        $data_n);

                //class crnrstn_xml{
                class crnrstn_json{

                    function build($key, $data_000, $data_001, $data_002, ...){

                        switch($key){
                            case 'error_log': // error_log JSON

                                return '{
                                    "<node>" . $data_000 . "</node>" <- think XML, too!
                                    "field2" = $data_001,
                                    "field3" = $data_002,
                                    "field_n" = ...
                                }';

                            break;
                            case 'ssdtla packet':
                            case 'psdtla packet':

                                return '{
                                    "field1" = $data_000,
                                    "field2" = $data_001,
                                    "field3" = $data_002,
                                    "field_n" = ...
                                }';

                            break;

                        }

                    }

                }

                R_debug_mode[0]
                phpmailer_debug_mode[0]
                $message_str [Request received for runtime executable,
                              /var/www/html/sysops/_crnrstn/class/session
                              /crnrstn.session_id_start.runtime_exe.php.]
                $syslog_level                => 7
                $error_reporting_level       => 8
                $line_num                    => 102084
                $method                      => CRNRSTN\\_crnrstn_native_resource_registry
                $token [Array (
                   [token]                   => fb516165c700b8480557a362f69c8666
                                                b64b0b3841143b4df0025fa3b3f07786
                                                02392656955c9dc7a11e6593fa2b8aaf
                                                ac46a44b733d76dfe75871ed82dd6255
                   [token_generation_date]   => 2026-04-30 14:55:58
                   [request_type]            => resource_ping
                   [code]                    => 200
                   [clr_ssl_msg]             => Request received for runtime executable,
                                                /var/www/html/sysops/_crnrstn/class/session
                                                /crnrstn.session_id_start.runtime_exe.php.
                   [memory_ptr]              => 86226bf72042cedfcac8dde998106ee2158763e1b376602110cb1b9ccb035853
                   [resource_ping_runtime]   => 0.00432395
                   [resource_ping_microtime] => 1778338120.799259
                   [file_evaluate_enabled]   => 1
                   [auto_obj_mode_enabled]   =>
                   [namespace]               => CRNRSTN
                   [resource_loading_arch]   => 9878
                   [resource_eval_ttl]       => -1\n
                   [resource_type]           => RUNTIME_EXECUTABLE
                   [resource_name]           => /var/www/html/sysops/_crnrstn/class/session
                                                /crnrstn.session_id_start.runtime_exe.php
                   [software_version]        => 2.00.0001
                   [resource_title]          => The CRNRSTN :: Lightsaber RoCEv2 SOAP Services
                                                Layer (CLR-SSL) Session ID Initialization
                                                Runtime Executable
                   [software_company]        => eVifweb\xc2\xae development
                   [copyright]               => Copyright \xc2\xa9 2012-2026 eVifweb\xc2\xae
                                                development All Rights Reserved.
                   [license]                 => MIT License
                   [license_url]             => https://crnrstn.jony5.com/licensing/
                ) ]
                $spool [].
                            -----
                R_cluster_id                        => CLR-SSL Cluster ID
                                                       stored at $this->R_data['R_cluster_id'].
                request_id                          => CLR-SSL request id stored
                                                       at $this->R_data['request_id'].
                request_serial                      => CLR-SSL request serial stored
                                                       at $this->R_data['request_serial'].
                starttime                           => $this->R_data['starttime']
                starttime_dst                       => $this->R_data['starttime_dst']
                   starttime_dst [sec]              => (int) 1778283016
                   starttime_dst [usec]             => (int) 575240
                   starttime_dst [minuteswest]      => (int) 240
                   starttime_dst [dsttime]          => (int) 1
                runtime [sec]                       => $this->wall_time();
                curr_date                           => \gettimeofday();
                   curr_date [sec]                  => (int) 1778283016
                   curr_date [usec]                 => (int) 575240
                   curr_date [minuteswest]          => (int) 240
                   curr_date [dsttime]              => (int) 1
                $start_server_load                  => CRNRSTN_SERVER_LOAD_START;
                $start_real_memory_usage            => CRNRSTN_MEMORY_REAL_USAGE_START;
                $start_script_memory_usage          => CRNRSTN_MEMORY_SCRIPT_USAGE_START;
                $start_xdebug_script_memory_usage   => CRNRSTN_MEMORY_XDEBUG_SCRIPT_USAGE_START;
                $current_server_load                => $this->sys_getloadavg();
                $current_real_memory_usage          => memory_get_usage(true);
                $current_script_memory_usage        => memory_get_usage();
                $current_xdebug_script_memory_usage => '';
                if(function_exists('xdebug_memory_usage'))
                    $current_xdebug_script_memory_usage = xdebug_memory_usage();
                phpsession          => PHPSESSION is a char(26).
                http_user_agent     => Browser user agent string or CLR-SSL architecture profile.
                created_by_channel  => mobile, tablet, desktop, or CLR-SSL architecture that did the user action.
                modified_by_channel => mobile, tablet, desktop, or CLR-SSL architecture that did the user action.
                created_by_IP       => the user IP that did the user action.
                modified_by_IP      => the user IP that did the user action.
                created_by_edge_IP  => the server that proxied the user action.
                modified_by_edge_IP => the server that proxied the user action.
                date_modified       => datetime
                date_created        => Timestamp

                 */

                /*

				// self::$R_json

                error_log('[lnum ' .
                    __LINE__ . '] [mthd ' .
                    __METHOD__ . '] [rtime ' .
                    $this->wall_time() . ' secs] ' .
                    'R_json is ready. date [' .
                    print_r(\gettimeofday(), true) . '] ' .
                    'R_debug_mode[' .
                    $this->R_data['R_debug_mode'] . '] ' .
                    'phpmailer_debug_mode[' .
                    $this->R_data['phpmailer_debug_mode'] . '] ' .
                    '$message_str [' .
                    \strval($message_str) . '] ' .
                    '$syslog_level [' .
                    \strval($syslog_level) . '] ' .
                    '$error_reporting_level [' .
                    \strval($error_reporting_level) . '] ' .
                    '$line_num [' .
                    \strval($line_num) . '] ' .
                    '$method [' .
                    \strval($method) . '] ' .
                    '$token [' .
                    print_r($token, true) . '] ' .
                    '$spool [' .
                    \strval($spool) . '].' );

                */
				/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE  :: https://stackoverflow.com/questions/4915753/how-can-i-remove-three-characters-at-the-end-of-a-string-in-php
                 * AUTHOR  :: bensiu :: https://stackoverflow.com/users/367878/bensiu
                 * COMMENT :: https://stackoverflow.com/a/4915787
                 *
                 */
                $message_str_elipse = '...';
                if(\strlen($message_str ) < 31){

                    $message_str_elipse = '';

                }

                //$message_str = \trim(\substr($message_str, 0, 34));
                $message_str = \trim(\substr($message_str, 0, 0));
                $message_str = $message_str . $message_str_elipse;
				$message_str = '[Database Integrations Pending] ' .
				               $message_str;
                \openlog(
                    $this->clr_ssl_syslog_prefix(
                           $line_num,
                           $file,
                           $method,
                           $syslog_prefix,
                           $syslog_prefix_passthrough),
                    \LOG_CONS |
                    \LOG_NDELAY |
                    \LOG_NOWAIT |
                    \LOG_PID |
                    \LOG_PERROR,
                    \LOG_SYSLOG);
                \syslog($syslog_level, $message_str);
                \closelog();

                return true;

            break;
            case $this->R_data['int_flag']['CRNRSTN_DEBUG_OFF']:
            default:
                // SILENCE IS GOLDEN.

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * TODO :: Insert (here) a database
                 *         driven administrative
                 *         override for the application
                 *         of debug mode settings changes
                 *         in order to support the
                 *         management of debugging
                 *         settings via web portal.
                 *         5 :: Saturday, May 9, 2026 @ 1430 hrs.
                 *
                 */

                return true;

            break;

        }

        /*
        error_log('[mthd ' .
            __METHOD__ . '] [lnum ' .
            __LINE__ . '] [rtime ' .
            $this->wall_time() . ' secs] ' .
            'date [' .
            print_r(\gettimeofday(), true) . '] ' .
            'R_debug_mode[' .
            $R_debug_mode_data . '] ' .
            'phpmailer_debug_mode[' .
            $phpmailer_debug_mode_data . '] ' .
            '$message_str [' .
            \strval($message_str) . '] ' .
            '$syslog_level [' .
            \strval($syslog_level) . '] ' .
            '$error_reporting_level [' .
            \strval($error_reporting_level) . '] ' .
            '$line_num [' .
            \strval($line_num) . '] ' .
            '$method [' .
            \strval($method) . '] ' .
            '$token [' .
            print_r($token, true) . '] ' .
            '$spool [' .
            \strval($spool) . ']. die();' );

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         *  Constant        Description
         *  LOG_EMERG       system is unusable.
         *  LOG_ALERT       action must be
         *                  taken immediately
         *  LOG_CRIT        critical conditions
         *  LOG_ERR         error conditions
         *  LOG_WARNING     warning conditions
         *  LOG_NOTICE      normal, but
         *                  significant, condition
         *  LOG_INFO        informational message
         *  LOG_DEBUG       debug-level message

        Each message Priority also has a decimal Severity level indicator.
        These are described in the following table along with their numerical
        values.

        Numerical         Severity
          Code

           0       Emergency: system is unusable
           1       Alert: action must be taken immediately
           2       Critical: critical conditions
           3       Error: error conditions
           4       Warning: warning conditions
           5       Notice: normal but significant condition
           6       Informational: informational messages
           7       Debug: debug-level messages

           Table 2. syslog Message Severities

        Source: https://www.php.net/manual/en/function.syslog.php
        Source: https://datatracker.ietf.org/doc/html/rfc3164
        5 :: Thursday, April 30, 2026 @ 1539 hrs.

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
         *
         * Error Reporting:
         * Value   Constant                     Description Note
         * 1       \E_ERROR (int)               Fatal run-time errors.
         *                                      These indicate errors that
         *                                      can not be recovered from,
         *                                      such as a memory allocation
         *                                      problem. Execution of the
         *                                      script is halted.
         * 2       \E_WARNING (int)             Run-time warnings (non-fatal
         *                                      errors). Execution of the
         *                                      script is not halted.
         * 4       \E_PARSE (int)               Compile-time parse errors.
         *                                      Parse errors should only be
         *                                      generated by the parser.
         * 8       \E_NOTICE (int)              Run-time notices. Indicate
         *                                      that the script encountered
         *                                      something that could
         *                                      indicate an error, but
         *                                      could also happen in the
         *                                      normal course of running
         *                                      a script.
         * 16      \E_CORE_ERROR (int)          Fatal errors that occur
         *                                      during PHP's initial
         *                                      startup. This is like an
         *                                      E_ERROR, except it is
         *                                      generated by the core
         *                                      of PHP.
         * 32      \E_CORE_WARNING (int)        Warnings (non-fatal
         *                                      errors) that occur
         *                                      during PHP's initial
         *                                      startup. This is like
         *                                      an E_WARNING, except it
         *                                      is generated by the
         *                                      core of PHP.
         * 64      \E_COMPILE_ERROR (int)       Fatal compile-time errors.
         *                                      This is like an E_ERROR,
         *                                      except it is generated
         *                                      by the Zend Scripting Engine.
         * 128     \E_COMPILE_WARNING (int)     Compile-time warnings
         *                                      (non-fatal errors). This
         *                                      is like an E_WARNING,
         *                                      except it is generated
         *                                      by the Zend Scripting Engine.
         * 256     \E_USER_ERROR (int)          User-generated error
         *                                      message. This is like
         *                                      an E_ERROR, except it
         *                                      is generated in PHP code
         *                                      by using the PHP function
         *                                      trigger_error().
         * 512     \E_USER_WARNING (int)        User-generated warning
         *                                      message. This is like an
         *                                      E_WARNING, except it is
         *                                      generated in PHP code by
         *                                      using the PHP function
         *                                      trigger_error().
         * 1024    \E_USER_NOTICE (int)         User-generated notice
         *                                      message. This is like an
         *                                      E_NOTICE, except it is
         *                                      generated in PHP code by
         *                                      using the PHP function
         *                                      trigger_error().
         * 2048    \E_STRICT (int)              Enable to have PHP suggest
         *                                      changes to your code which
         *                                      will ensure the best
         *                                      interoperability and forward
         *                                      compatibility of your code.
         * 4096    \E_RECOVERABLE_ERROR (int)   Catchable fatal error.
         *                                      It indicates that a probably
         *                                      dangerous error occurred,
         *                                      but did not leave the Engine
         *                                      in an unstable state. If the
         *                                      error is not caught by a user
         *                                      defined handle (see also
         *                                      set_error_handler()), the
         *                                      application aborts as it was
         *                                      an E_ERROR.
         * 8192    \E_DEPRECATED (int)          Run-time notices. Enable
         *                                      this to receive warnings
         *                                      about code that will not work
         *                                      in future versions.
         * 16384   \E_USER_DEPRECATED (int)     User-generated warning
         *                                      message. This is like an
         *                                      E_DEPRECATED, except it
         *                                      is generated in PHP code
         *                                      by using the PHP function
         *                                      trigger_error().
         * 32767   \E_ALL (int)                 All errors, warnings,
         *                                      and notices.

        https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
        https://www.php.net/manual/en/errorfunc.constants.php
        * lights bowl *
        * cracks open another can of Sweetwater® 420
          with my K-bar Happy 128th Birthday to K-bar, btw. *
        5 :: Thursday, April 30, 2026 @ 1620 hrs.

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        CRNRSTN :: Lightsaber RoCEv2
        SOAP Services Layer (CLR-SSL)
        Advanced Logging Architecture
        Engineering Notes

        Current CLR-SSL
        Debug Modes:
        'CRNRSTN_DEBUG_OFF'              => 0
        'CRNRSTN_DEBUG_ERR_LOG'          => 1
        'CRNRSTN_DEBUG_ON'               => 2

        Current CLR-SSL Logging
        Output Profiles:
        'CRNRSTN_LOG_NONE'               => 42
        'CRNRSTN_LOG_ALL'                => 43
        'CRNRSTN_LOG_PROXY'              => 8064
        'CRNRSTN_LOG_DEFAULT'            => 8051
        'CRNRSTN_LOG_SCREEN'             => 8053
        'CRNRSTN_LOG_SCREEN_TEXT'        => 8052
        'CRNRSTN_LOG_SCREEN_HTML'        => 8054
        'CRNRSTN_LOG_SCREEN_HTML_HIDDEN' => 8055
        'CRNRSTN_LOG_EMAIL'              => 8057
        'CRNRSTN_LOG_FILE'               => 8061
        'CRNRSTN_LOG_FILE_FTP'           => 8062
        'CRNRSTN_LOG_DATABASE'           => 8063
        'CRNRSTN_LOG_PSSDTLA'            => 8058
        'CRNRSTN_LOG_SSDTLA'             => 8059
        'CRNRSTN_LOG_ELECTRUM'           => 8060
        'CRNRSTN_LOG_SOAP'               => 8056


        5 :: Thursday, April 30, 2026 @ 1631 hrs.

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        The New CRNRSTN :: Lightsaber
        RoCEv2 SOAP Services Layer
        (CLR-SSL) Advanced Logging
        Services Layer Debugging Modes:
        'CRNRSTN_DEBUG_OFF'                 => 0
        'CRNRSTN_DEBUG_ON'                  => 2
            'CRNRSTN_DEBUG_SYSLOG,'         => 1


        5 :: Thursday, April 30, 2026 @ 1652 hrs.


        The New CRNRSTN :: Lightsaber
        RoCEv2 SOAP Services Layer
        (CLR-SSL) Advanced Logging
        Services Layer Logging
        Output Profile:

         */
        /*
        [Fri May 08 19:30:16.575350 2026] [:error] [pid 11246]
        [client 172.16.225.153:1116]
        [lnum 65539]
        [mthd CRNRSTN\\crnrstn::error_log]
        [rtime 0.00817108 secs]

        date [Array\n(\n
           [sec] => 1778283016\n
           [usec] => 575240\n
           [minuteswest] => 240\n
           [dsttime] => 1\n)\n]

        R_debug_mode           [0]
        phpmailer_debug_mode   [0]

        $str [Request received for runtime executable,
              /var/www/html/sysops/_crnrstn/class/session
              /crnrstn.session_id_start.runtime_exe.php.]
        $syslog_level          [7]
        $error_reporting_level [8]
        $line_num              [84564]
        $method                [CRNRSTN\\_crnrstn_native_resource_registry]
        $token [Array\n(\n
           [token]                 => fb516165c700b8480557a362f69c8666b64b0b3841143b4df0025fa3b3f0778602392656955c9dc7a11e6593fa2b8aafac46a44b733d76dfe75871ed82dd6255\n
           [token_generation_date] => 2026-04-30 14:55:58\n
           [request_type]          => resource_ping\n
           [code]                  => 200\n
           [clr_ssl_msg]           => Request received for runtime executable,
                                      /var/www/html/sysops/_crnrstn/class/session
                                      /crnrstn.session_id_start.runtime_exe.php.\n
           [memory_ptr]            => 86226bf72042cedfcac8dde998106ee2158763e1b376602110cb1b9ccb035853\n)\n]
        $spool [].

        die();, referer: http://172.16.225.139/sysops/?cache_bust=421092 <- msg_relay.swf request.

        [Sat May 09 10:48:40.802682 2026] [:error] [pid 19130]
        [client 172.16.225.153:3116] [lnum 65557]
        [mthd CRNRSTN\\crnrstn::error_log]
        [rtime 0.00752687 secs]
        date [Array\n(\n
           [sec] => 1778338120\n
           [usec] => 802585\n
           [minuteswest] => 240\n
           [dsttime] => 1\n)\n] R_debug_mode[0] phpmailer_debug_mode[0]
        $message_str [Request received for runtime executable,
                      /var/www/html/sysops/_crnrstn/class/session
                      /crnrstn.session_id_start.runtime_exe.php.]
        $syslog_level                => 7
        $error_reporting_level       => 8
        $line_num                    => 102084
        $method                      => CRNRSTN\\_crnrstn_native_resource_registry
        $token [Array (
           [token]                   => fb516165c700b8480557a362f69c8666
                                        b64b0b3841143b4df0025fa3b3f07786
                                        02392656955c9dc7a11e6593fa2b8aaf
                                        ac46a44b733d76dfe75871ed82dd6255
           [token_generation_date]   => 2026-04-30 14:55:58
           [request_type]            => resource_ping
           [code]                    => 200
           [clr_ssl_msg]             => Request received for runtime executable,
                                        /var/www/html/sysops/_crnrstn/class/session
                                        /crnrstn.session_id_start.runtime_exe.php.
           [memory_ptr]              => 86226bf72042cedfcac8dde998106ee2158763e1b376602110cb1b9ccb035853
           [resource_ping_runtime]   => 0.00432395
           [resource_ping_microtime] => 1778338120.799259
           [file_evaluate_enabled]   => 1
           [auto_obj_mode_enabled]   =>
           [namespace]               => CRNRSTN
           [resource_loading_arch]   => 9878
           [resource_eval_ttl]       => -1\n
           [resource_type]           => RUNTIME_EXECUTABLE
           [resource_name]           => /var/www/html/sysops/_crnrstn/class/session
                                        /crnrstn.session_id_start.runtime_exe.php
           [software_version]        => 2.00.0001
           [resource_title]          => The CRNRSTN :: Lightsaber RoCEv2 SOAP Services
                                        Layer (CLR-SSL) Session ID Initialization
                                        Runtime Executable
           [software_company]        => eVifweb\xc2\xae development
           [copyright]               => Copyright \xc2\xa9 2012-2026 eVifweb\xc2\xae
                                        development All Rights Reserved.
           [license]                 => MIT License
           [license_url]             => https://crnrstn.jony5.com/licensing/
        ) ]
        $spool [].

        die();, referer: http://172.16.225.139/sysops/?cache_bust=698238 <- msg_relay.swf request.

        [Sun May 10 07:43:56.177759 2026] [:error] [pid 24651] [client 172.16.225.153:4166] [lnum 66378]
        [mthd CRNRSTN\\crnrstn::error_log]
        [rtime 0.00253796 secs] date [Array\n(\n
        [sec] => 1778413436\n
        [usec] => 177586\n
        [minuteswest] => 240\n
        [dsttime] => 1\n)\n]
        R_debug_mode[0] phpmailer_debug_mode[0]
        $message_str [Request received for function definition, _crnrstn_int_return.]
        $syslog_level [7] $error_reporting_level [8]
        $line_num [4120] $method [CRNRSTN\\crnrstn::registry_boot]
        $token [Array\n(\n
           [token]                   => ad8083a7da944a28ce3711ba4dafb8835b384d45fac6de5b58a8143813bf28e9eb56e58ab8ed49b1dabd99c6fa75bce3a30cca4e031b462ce5005eb47c8c21cf\n
           [token_generation_date]   => 2026-05-10 04:09:59
           [request_type]            => registry_boot
           [code]                    => 200
           [clr_ssl_msg]             => Request received for function
                                        definition, _crnrstn_int_return version 2.00.0001.
           [memory_ptr]              => 6d0bef61bbba9a0c46f54a3def5f18f0e2797e07752d57d7b381fdcdf5da9b02
           [resource_ping_runtime]   => 0.00245404
           [resource_ping_microtime] => 1778413436.177392
           [file_evaluate_enabled]   => 1
           [auto_obj_mode_enabled]   =>
           [namespace]               => CRNRSTN
           [resource_loading_arch]   => 9877
           [resource_eval_ttl]       => -1
           [resource_type]           => FUNCTION_DEFINITION
           [resource_name]           => _crnrstn_int_return
           [software_version]        => 2.00.0001
           [resource_title]          => The CRNRSTN :: Lightsaber RoCEv2 SOAP
                                        Services Layer (CLR-SSL) Integer
                                        Constants Return Global Function
                                        Definition
           [software_company]        => eVifweb\xc2\xae development
           [copyright]               => Copyright \xc2\xa9 2012-2026 eVifweb\xc2\xae
                                        development All Rights Reserved.
           [license]                 => MIT License
           [license_url]             => https://crnrstn.jony5.com/licensing/ ) ]

        $spool [].

        die();, referer: http://172.16.225.139/sysops/?cache_bust=167506 <- msg_relay.swf request.


        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        5 :: Friday, May 8, 2026 @ 2044 hrs.
        CLR-SSL System Status Monitoring
        and Real-Time Messaging (SS-RTM)
        JSON Tokenized Activity Logging
        Architecture Design:

        Application Logging States:
        -
        'CRNRSTN_DEBUG_OFF'                  => 0
        'CRNRSTN_DEBUG_ON'                   => 2
            'CRNRSTN_DEBUG_SYSLOG,'          => 1

        'CRNRSTN_PHPMAILER_DEBUG_OFF'        => 0;
        'CRNRSTN_PHPMAILER_DEBUG_CLIENT'     => 1;
        'CRNRSTN_PHPMAILER_DEBUG_SERVER'     => 2;
        'CRNRSTN_PHPMAILER_DEBUG_CONNECTION' => 3;
        'CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL'   => 4;

        'CRNRSTN_WORDPRESS_DEBUG'            => 10052;

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        MySQL Table Design:
        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        5 :: Saturday, May 9, 2026 @ 0420 hrs.
        Lights joint.
            Note: Where innodb_page_size = 16384 bytes.
            Note: InnoDB supported page sizes (MySQL <= 5.5): 16KB.
            Note: InnoDB supported page sizes (MySQL >= 5.6): 4KB, 8KB, 16KB.
            Note: InnoDB supported page sizes (MySQL >= 5.7.6): 4KB, 8KB, 16KB, 32KB, and 64KB.
            -----
            Primary Key
            Checksum (primary key)
            Active_State or ISACTIVE

            HTTP_USER_AGENT
            MODIFIEDBY_CHANNEL
            MODIFIEDBY_IPV4
            MODIFIEDBY_IPV6
            MODIFIEDBY_IPV4_EDGE
            MODIFIEDBY_IPV6_EDGE
            CREATEDBY_CHANNEL
            CREATEDBY_IPV4
            CREATEDBY_IPV6
            CREATEDBY_IPV4_EDGE
            CREATEDBY_IPV6_EDGE
            LASTMODIFIED
            DATECREATED

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        JSON Token Design:
        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        5 :: Saturday, May 9, 2026 @ 0603 hrs.

        Attributes:
        R_debug_mode                 => (int) 0 [0,1,2]
        phpmailer_debug_mode         => (int) 0 [0,1,2,3,4]
        wordpress_debug_mode         => (int) 10052 (int) CRNRSTN_WORDPRESS_DEBUG = 10052. define('WP_DEBUG', false); True/false toggle for On/Off.
        nusoap_debug_mode            => (int) ?

        ----- error_log() input params -----
        $message_str                 => (string) ''
        $syslog_level                => (int) 7
        $error_reporting_level       => (int) 8
        $line_num                    => (int) 84564
        $method                      => (string) CRNRSTN\\_crnrstn_native_resource_registry
        $token
           [token]                   => (int) fb516165c700b8480557a362f69c8666b64b0b3841143b4df0025fa3b3f0778602392656955c9dc7a11e6593fa2b8aafac46a44b733d76dfe75871ed82dd6255
           [token_generation_date]   => (string) 2026-04-30 14:55:58
           [request_type]            => (string) resource_ping
           [code]                    => (int) 200
           [clr_ssl_msg]             => (string) ''

           Optional Fields ----------
           [memory_ptr]              => (string) 86226bf72042cedfcac8dde998106ee2158763e1b376602110cb1b9ccb035853
           [R_action]                => (string) ''
           [resource_ping_runtime]   => (string) ''
           [resource_ping_microtime] => (string) ''
           [file_evaluate_enabled]   => true or false
           [auto_obj_mode_enabled]   => true or false
           [namespace]               => (string) ''
           [resource_loading_arch]   => (int) xxxx
           [resource_eval_ttl]       => (int) xxxx
           [resource_type]           => (string) ''
           [resource_name]           => (string) ''
           [software_version]        => (string) ''
           [resource_title]          => (string) ''
           [software_company]        => (string) ''
           [copyright]               => (string) ''
           [license]                 => (string) ''
           [license_url]             => (string) ''
        $spool                       => true or false

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        Notes Source: https://datatracker.ietf.org/doc/html/rfc7159
        Date: Monday, August 11, 2025 @ 1353 hrs.
        3.  Values

           A JSON value MUST be an object, array, number, or string, or one of
           the following three literal names:

              false null true

           The literal names MUST be lowercase.  No other literal names are
           allowed.

              value = false / null / true / object / array / number / string

              false = %x66.61.6c.73.65   ; false

              null  = %x6e.75.6c.6c      ; null

              true  = %x74.72.75.65      ; true

        # C # R # N # R # S # T # N # :: # L # I # G # H # T
        ----- CLR-SSL Engineering -----
        High Performance MySQL, Third Edition.
        Baron Schwartz, Peter Zaitsev, and
        Vadim Tkachenko (pgs. 76-77)

        Copyright © 2012 Baron Schwartz,
        Peter Zaitsev, and Vadim Tkachenko.
        All rights reserved.
        Printed in the United States of America.
        Published by O’Reilly Media, Inc.,
        1005 Gravenstein Highway North,
        Sebastopol, CA 95472.

        Profiling Your Application

        You can profile pretty much anything
        that consumes time, and this includes
        your application. In fact, profiling
        your application is generally easier
        than profiling your database server,
        and much more rewarding.

        Although we’ve started by showing a
        profile of a MySQL server’s queries
        for the purposes of illustration,
        it’s better to try to measure and
        profile from the top down.

        Will Profiling Slow Your Servers?

        We recommend that you include profiling
        code in every new project you start.
        It might be hard to inject profiling
        code into an existing application,
        but it’s easy to include it in
        new applications.

        Yes, it will make your application
        slower. No, it will make your
        application much faster.
        Wait, we can explain. Profiling and
        routine monitoring add overhead.
        The important questions are how much
        overhead they add and whether the
        extra work is worth the benefit.

        Many people who design and build
        high-performance applications believe
        that you should measure everything
        you can and just accept the cost of
        measurement as a part of your
        application’s work.

        Oracle performance guru Tom Kyte was
        famously asked how costly Oracle’s
        instrumentation is, and he replied
        that the instrumentation makes
        it possible to improve performance
        by at least 10%. We agree with this
        philosophy, and for most applications
        that wouldn’t otherwise receive
        detailed performance  evaluations
        every day, we think the improvement
        is likely to be much more than 10%.

        Even if you don’t agree, it’s a great
        idea to build in at least some
        lightweight profiling that you can
        enable permanently. It’s no fun to
        hit a performance bottleneck you
        never saw coming, just because you
        didn’t build your systems to capture
        day-to-day changes in their performance.
        Likewise, when you find a problem,
        historical data is invaluable.

        You can also use the profiling data
        to help you plan hardware purchases,
        allocate resources, and predict load
        for peak times or seasons.

        What do we mean by “lightweight”
        profiling? Timing all SQL queries,
        plus the total script execution time,
        is certainly cheap. And you don’t
        have to do it for every page view.
        If you have a decent amount of
        traffic, you can just profile a
        random sample by enabling profiling
        in your application’s setup file:

        <?php
        $profiling_enabled = rand(0, 100) > 99;
        ?>

        Profiling just 1% of your sessions
        should help you find the worst problems.
        It’s extremely helpful to do this in
        production, because you’ll find things
        that you’ll never see elsewhere.

        Application Performance
        Profiling Enabling Attributes:
        -----
        R_cluster_id                        => CLR-SSL Cluster ID
                                               stored at $this->R_data['R_cluster_id'].
        request_id                          => CLR-SSL request id stored
                                               at $this->R_data['request_id'].
        request_serial                      => CLR-SSL request serial stored
                                               at $this->R_data['request_serial'].
        starttime                           => $this->R_data['starttime']
        starttime_dst                       => $this->R_data['starttime_dst']
           starttime_dst [sec]              => (int) 1778283016
           starttime_dst [usec]             => (int) 575240
           starttime_dst [minuteswest]      => (int) 240
           starttime_dst [dsttime]          => (int) 1
        runtime [sec]                       => $this->wall_time();
        curr_date                           => \gettimeofday();
           curr_date [sec]                  => (int) 1778283016
           curr_date [usec]                 => (int) 575240
           curr_date [minuteswest]          => (int) 240
           curr_date [dsttime]              => (int) 1
        $start_server_load                  => CRNRSTN_SERVER_LOAD_START;
        $start_real_memory_usage            => CRNRSTN_MEMORY_REAL_USAGE_START;
        $start_script_memory_usage          => CRNRSTN_MEMORY_SCRIPT_USAGE_START;
        $start_xdebug_script_memory_usage   => CRNRSTN_MEMORY_XDEBUG_SCRIPT_USAGE_START;
        $current_server_load                => $this->sys_getloadavg();
        $current_real_memory_usage          => memory_get_usage(true);
        $current_script_memory_usage        => memory_get_usage();
        $current_xdebug_script_memory_usage => '';
        if(function_exists('xdebug_memory_usage'))
            $current_xdebug_script_memory_usage = xdebug_memory_usage();
        phpsession          => PHPSESSION is a char(26).
        http_user_agent     => Browser user agent string or CLR-SSL architecture profile.
        created_by_channel  => mobile, tablet, desktop, or CLR-SSL architecture that did the user action.
        modified_by_channel => mobile, tablet, desktop, or CLR-SSL architecture that did the user action.
        created_by_IP       => the user IP that did the user action.
        modified_by_IP      => the user IP that did the user action.
        created_by_edge_IP  => the server that proxied the user action.
        modified_by_edge_IP => the server that proxied the user action.
        date_modified       => datetime
        date_created        => Timestamp


        5 :: Friday, May 8, 2026 @ 2044 hrs.
        Last Modified: Saturday, May 9, 2026 @ 1059 hrs.

         */

        /*
        if(isset(self::$R_logging)){

            $tmp_oLog = self::$R_logging->error_log(
                                          $message_str,
                                          $syslog_level,
                                          $error_reporting_level,
                                          $line_num,
                                          $method,
                                          $file,
                                          $token,
                                          $spool);

            if(is_object($tmp_oLog)){

                $this->oLog_output_ARRAY[] = $tmp_oLog;

            }

            return true;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Who gets the objectified
             * CLR-SSL logging
             * architecture? Who needs
             * exposure to the SOAP
             * services layer of
             * the CLR-SSL?
             *
             * Syslog Levels:
             * Constant                Description
             * LOG_EMERG            => 'system is unusable.'
             * LOG_ALERT            => 'action must be
             *                          taken immediately'
             * LOG_CRIT             => 'critical conditions'
             * LOG_ERR              => 'error conditions'
             * LOG_WARNING          => 'warning conditions'
             * LOG_NOTICE           => 'normal, but
             *                          significant, condition'
             * LOG_INFO             => 'informational message'
             * LOG_DEBUG            => 'debug-level message'
             *
             * Error Reporting:
             * Value   Constant                     Description Note
             * 1       \E_ERROR (int)               Fatal run-time errors.
             *                                      These indicate errors that
             *                                      can not be recovered from,
             *                                      such as a memory allocation
             *                                      problem. Execution of the
             *                                      script is halted.
             * 2       \E_WARNING (int)             Run-time warnings (non-fatal
             *                                      errors). Execution of the
             *                                      script is not halted.
             * 4       \E_PARSE (int)               Compile-time parse errors.
             *                                      Parse errors should only be
             *                                      generated by the parser.
             * 8       \E_NOTICE (int)              Run-time notices. Indicate
             *                                      that the script encountered
             *                                      something that could
             *                                      indicate an error, but
             *                                      could also happen in the
             *                                      normal course of running
             *                                      a script.
             * 16      \E_CORE_ERROR (int)          Fatal errors that occur
             *                                      during PHP's initial
             *                                      startup. This is like an
             *                                      E_ERROR, except it is
             *                                      generated by the core
             *                                      of PHP.
             * 32      \E_CORE_WARNING (int)        Warnings (non-fatal
             *                                      errors) that occur
             *                                      during PHP's initial
             *                                      startup. This is like
             *                                      an E_WARNING, except it
             *                                      is generated by the
             *                                      core of PHP.
             * 64      \E_COMPILE_ERROR (int)       Fatal compile-time errors.
             *                                      This is like an E_ERROR,
             *                                      except it is generated
             *                                      by the Zend Scripting Engine.
             * 128     \E_COMPILE_WARNING (int)     Compile-time warnings
             *                                      (non-fatal errors). This
             *                                      is like an E_WARNING,
             *                                      except it is generated
             *                                      by the Zend Scripting Engine.
             * 256     \E_USER_ERROR (int)          User-generated error
             *                                      message. This is like
             *                                      an E_ERROR, except it
             *                                      is generated in PHP code
             *                                      by using the PHP function
             *                                      trigger_error().
             * 512     \E_USER_WARNING (int)        User-generated warning
             *                                      message. This is like an
             *                                      E_WARNING, except it is
             *                                      generated in PHP code by
             *                                      using the PHP function
             *                                      trigger_error().
             * 1024    \E_USER_NOTICE (int)         User-generated notice
             *                                      message. This is like an
             *                                      E_NOTICE, except it is
             *                                      generated in PHP code by
             *                                      using the PHP function
             *                                      trigger_error().
             * 2048    \E_STRICT (int)              Enable to have PHP suggest
             *                                      changes to your code which
             *                                      will ensure the best
             *                                      interoperability and forward
             *                                      compatibility of your code.
             * 4096    \E_RECOVERABLE_ERROR (int)   Catchable fatal error.
             *                                      It indicates that a probably
             *                                      dangerous error occurred,
             *                                      but did not leave the Engine
             *                                      in an unstable state. If the
             *                                      error is not caught by a user
             *                                      defined handle (see also
             *                                      set_error_handler()), the
             *                                      application aborts as it was
             *                                      an E_ERROR.
             * 8192    \E_DEPRECATED (int)          Run-time notices. Enable
             *                                      this to receive warnings
             *                                      about code that will not work
             *                                      in future versions.
             * 16384   \E_USER_DEPRECATED (int)     User-generated warning
             *                                      message. This is like an
             *                                      E_DEPRECATED, except it
             *                                      is generated in PHP code
             *                                      by using the PHP function
             *                                      trigger_error().
             * 32767   \E_ALL (int)                 All errors, warnings,
             *                                      and notices.
             *
             *
             * 5 :: Friday, May 1, 2026 @ 0130 hrs.
             *
             *

            /*
            $this->error_log(
                $clr_ssl_msg,
                \LOG_DEBUG,
                \E_NOTICE,
                __LINE__,
                __METHOD__,
                __FILE__,
                $token);

            //$R_resp[$memory_ptr]['status']['timestamp'][]      = \gettimeofday();
            //$R_resp[$memory_ptr]['status']['runtime'][]        = $this->wall_time();

            error_log($line_num .
                ' crnrstn [lnum ' .
                __LINE__ . ']. ' .
                $message_str . ' [' .
                $method . '].');

            return true;

        }

        */

        # # # # # # # # # # # # # # #
    	# Start of the
    	# previous error_log
    	# logics.
    	#
    	#
    	# 5 :: Saturday, May 16, 2026 @ 0236 hrs.
    	#
        # # # # # # # # # # # # # # #

        /* error_log('[lnum ' .
         *    __LINE__ . '] [mthd ' .
         *    __METHOD__ .
         *    '] $this->R_debug_mode=['  .
         *    $this->R_debug_mode .
         *    ']');
         *
         */
        switch($this->get_crnrstn('R_debug_mode')){
            case $this->R_data['int_flag']['CRNRSTN_DEBUG_SYSLOG']:

                if($this->log_silo_resource_authorized($log_silo_profile) !== false){

                /**
                 * if(($this->oCRNRSTN_BITFLIP_MGR->oCRNRSTN_BITWISE->read($log_silo_profile) ||
                 *     $this->oCRNRSTN_BITFLIP_MGR->oCRNRSTN_BITWISE->read(CRNRSTN_LOG_ALL) &&
                 *     !$this->oCRNRSTN_BITFLIP_MGR->oCRNRSTN_BITWISE->read(CRNRSTN_LOG_NONE)))
                 * {
                 *
                 * if((($this->is_bit_set($log_silo_profile) == true) ||
                 *     ($this->is_bit_set(CRNRSTN_LOG_ALL) == true) &&
                 *     !($this->is_bit_set(CRNRSTN_LOG_NONE) == true)))
                 * {
                 *
                 */
                    if($method != 'crnrstn_logging::catch_exception'){

                        $tmp_str = '[rtime ' . $this->wall_time() . ' secs]';

                        if(!isset($method) || $method==''){

                            if(isset($file)){

                                $tmp_str .= ' [file ' . $file . ']';

                            }

                        }else{

                            $tmp_str .= ' [mthd ' . $method . ']';

                        }

                        if(isset($line_num)){

                            $tmp_str .= ' [lnum ' . $line_num . ']';

                        }

                        $tmp_str .= ' ' . $str;

                    }else{

                        $tmp_str = $str;

                    }

                    error_log($tmp_str);

                }

            break;
            case $this->R_data['int_flag']['CRNRSTN_DEBUG_ON']:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Log aggregation within
                 * CRNRSTN + Log silo support.
                 *
                 */
                if($this->log_silo_resource_authorized($log_silo_profile) !== false){
                /**
                 *if((($this->is_bit_set($log_silo_profile) == true) ||
                 *     ($this->is_bit_set(CRNRSTN_LOG_ALL) == true) &&
                 *     !($this->is_bit_set(CRNRSTN_LOG_NONE) == true)))
                 * {
                 *
                 */
                    $this->active_log_silo_flag_ARRAY[$log_silo_profile] = 1;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Return an instantiation of
                     * the CRNRSTN :: Lightsaber
                     * RoCEv2 SOAP Services Layer
                     * (CLR-SSL) Logging Services
                     * Layer Log Objectification.
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2112 hrs.
                     *
                     * $tmp_oLog = new crnrstn_log(
                     *                 $this->oCRNRSTN,
                     *                 $this->return_micro_time(),
                     *                 $log_silo_profile);
                     *
                     */
                    $tmp_oLog = $this->return_registered_resource(
                    	               'new',
                    	               'crnrstn_log',
                    	               $this->return_micro_time(),
                    	               $log_silo_profile);

                    $tmp_oLog->set_runTime($this->wall_time());

                    $tmp_oLog->set_runFile($file);

                    $tmp_oLog->set_classMethod($method);

                    $tmp_oLog->set_lineNumber($line_num);

                    $tmp_str = $str . '';

                    $tmp_oLog->set_logMsg($tmp_str);

                    return $tmp_oLog;

                }

            break;
            case $this->R_data['int_flag']['CRNRSTN_DEBUG_OFF']:
            default:
                /**
                 *SILENCE IS GOLDEN.
                 *$R_debug_mode     [0] CRNRSTN_DEBUG_OFF
                 *
                 */

            break;

        }

        return NULL;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function error_log_clear($message_token = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Copied method error_log_clear
         * from crnrstn.
         * 5 :: Friday, May 22, 2026 @ 1120 hrs.
         */

        if(isset($message_token)){

            if(isset($this->R_data['spool']['err_message_queue_push'][$message_token])){

                //array_splice($this->R_data['spool']['err_message_queue_push']['message_token'], 0); // Clear all tokens?
                array_splice($this->R_data['spool']['err_message_queue_push'][$message_token]['message'], 0);
                array_splice($this->R_data['spool']['err_message_queue_push'][$message_token]['data_authorization_profile'], 0);

            }

        }

        if(isset($this->R_data['R_cluster_id'])){

            if(isset($_SESSION['CRNRSTN_ERROR_PREFIX_' .
                $this->R_data['R_cluster_id']]['CRNRSTN_EXCEPTION_PREFIX']['SYSTEM_ID'])){

                array_splice($_SESSION['CRNRSTN_ERROR_PREFIX_' .
                    $this->R_data['R_cluster_id']]['CRNRSTN_EXCEPTION_PREFIX']['SYSTEM_ID'],
                    0);

            }

        }

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function clr_ssl_syslog_prefix(
             $line_num,
             $file,
             $method = '',
             $prefix_override = NULL,
             $syslog_prefix_passthrough = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Copied the method, clr_ssl_syslog_prefix(),
         * to the CLR-SSL Logging Services Layer.
         * 5 :: Friday, May 22, 2026 @ 0703 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Do we apply a syslog
         * prefix white labeling
         * overwrite?
         *
         *
         * 5 :: Friday, May 22, 2026 @ 0655 hrs.
         *
         */
        if(\strlen(\trim($syslog_prefix_passthrough)) < 1){

            $syslog_prefix = 'R :: ';
            if(isset($prefix_override)){

                $syslog_prefix = $prefix_override;

            }

            $syslog_prefix .= '[' . $this->return_micro_time() .
                              '] ';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * String concat __METHOD__
             * only if data exists.
             *
             *
             * 5 :: Wednesday, May 20, 2026 @ 1540 hrs.
             *
             */
            if($method != ''){

                $syslog_prefix .= '[mthd ' .
                                  $method . '] ';

            }else{

                if($file != ''){

                    $syslog_prefix .= '[file ' .
                                      $file . '] ';

                }

            }

            $syslog_prefix .= '[lnum ' .
                              $line_num . '] [rtime ' .
                              $this->wall_time() .
                              '] ';

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Apply a syslog prefix
             * white labeling overwrite.
             *
             *
             * 5 :: Friday, May 22, 2026 @ 0655 hrs.
             *
             */
            $syslog_prefix = $syslog_prefix_passthrough;

        }

        return $syslog_prefix;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access private
     *
     */
    private function log_silo_resource_authorized($log_silo_profile)
    {

        $tmp_profile_is_authorized = false;
        $tmp_is_log_none = false;
        $tmp_is_log_all = false;

        if($this->isset_crnrstn('CRNRSTN_log_silo_profile') == true){

            $tmp_log_silo_ARRAY = $this->get_crnrstn('CRNRSTN_log_silo_profile');

            foreach($tmp_log_silo_ARRAY as
            	$silo_index => $tmp_silo_profile)
            {

                switch($tmp_silo_profile){
                    case 'CRNRSTN_LOG_NONE':
                    case $this->R_data['int_flag']['CRNRSTN_LOG_NONE']:

                        $tmp_is_log_none = true;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * CRNRSTN_LOG_NONE configuration
                         * shuts down all CRNRSTN ::
                         * Logging output.
                         *
                         *
                         * 5 :: Wednesday, December 6, 2023 @ 0834 hrs.
                         *
                         */
                        break 1;

                    break;
                    case 'CRNRSTN_LOG_ALL':
                    case $this->R_data['int_flag']['CRNRSTN_LOG_ALL']:

                        $tmp_is_log_all = true;

                    break;

                }

                if($log_silo_profile == $tmp_silo_profile)
                    $tmp_profile_is_authorized = true;

            }

        }

        if($tmp_is_log_none == false)
            if(($tmp_profile_is_authorized == true) ||
            	($tmp_is_log_all == true))
                return true;

        return $tmp_profile_is_authorized;

    }

    /*
    public function DELETED__captureNotice(
                    $logSource,
                    $logPriority,
                    $msg,
                    $oLog_output_ARRAY = NULL)
    {

		$tmp_priority = "UNKNOWN";
		$tmp_configserial = "";
		$tmp_key = "";

		/*
         * error_log('[lnum ' .
         *    __LINE__ . '] [mthd ' .
         *    __METHOD__ .
         *    '] CRNRSTN_CONFIG_SERIALIZATION_HASH=' .
         *    $_SESSION['R_cluster_id']);
         *

		if(isset($_SESSION['R_cluster_id'])){

			$tmp_key = $_SESSION['CRNRSTN_' . crc32($_SESSION['R_cluster_id'])]['CRNRSTN_ENV_KEY_CRC'];
			$tmp_configserial = $_SESSION['R_cluster_id'];

			switch($logPriority){
				case 0:
					$tmp_priority = "LOG_EMERG :: system is unusable.";
				break;
				case 1:
					$tmp_priority = "LOG_ALERT :: action must be taken immediately";
				break;
				case 2:
					$tmp_priority = "LOG_CRIT :: critical conditions encountered";
				break;
				case 3:
					$tmp_priority = "LOG_ERR :: error conditions encountered";
				break;
				case 4:
					$tmp_priority = "LOG_WARNING :: warning conditions encountered";
				break;
				case 5:
					$tmp_priority = "LOG_NOTICE :: normal, but significant, condition encountered";
				break;
				case 6:
					$tmp_priority = "LOG_INFO :: informational message";
				break;
				case 7:
					$tmp_priority = "LOG_DEBUG :: debug-level message";
				break;
				default:
					$tmp_priority = "UNKNOWN";
				break;

			}

		}

		if(isset($_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_PROFILE"])){

			switch($_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_PROFILE"]){
				case 'EMAIL':

					$tmp_email_ARRAY = explode(",", $_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_ENDPOINT"]);
					$this->emailDataElements['logSource'] = $logSource;
					$this->emailDataElements['logPriority'] = $tmp_priority;
					$this->emailDataElements['msg'] = $msg;

					foreach($tmp_email_ARRAY as $value){

						$this->emailDataElements['addAddressEmail'] = trim($value);

						if($this->buildSimpleMessage(
						          $oLog_output_ARRAY,
						          $_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_PROFILE"],
						          $logSource))
			            {

							$this->msg_delivery_status = $this->sendSimpleMessage();

						}

						switch($this->msg_delivery_status){
							case 'success':

								//
								// Good job.

							break;
							default:

								//
								// Error sending email. Log to default sys.
								error_log('[lnum ' .
									__LINE__ . '] [mthd ' .
                                    __METHOD__ .
                                    '] Email send to ' .
                                    $this->emailDataElements['addAddressEmail'] .
                                    ' :: FAIL. Email output dump-> Src: ' .
                                    $this->emailDataElements['logSource'] .
                                    '|| Priority: ' .
                                    $this->emailDataElements['logPriority'] .
                                    '|| Msg: ' .
                                    $this->emailDataElements['msg']);

                        break;

						}

						unset($this->msg_delivery_status);

					}

				break;
                case 'SCREEN':
				case 'SCREEN_HTML':

					print "<br><div style=\"font-family: Arial, " .
					      "Helvetica, sans-serif; font-size: 11px; " .
					      "font-weight: bold;\">" .
					      $this->return_micro_time() .
					      " secs<br>";
					print $logSource;
					print "<br>";
					print $tmp_priority;
					print "<br>";
					print $msg;
                    $tmp_log_output_ARRAY = $this->compile_log_output(
                                                   $oLog_output_ARRAY,
                                                   'SCREEN_HTML',
                                                   $logSource);
                    print "</div>";

				break;
                case 'SCREEN_HTML_HIDDEN':
                    print "<!--
                    [" . $this->return_micro_time() . " secs]
";
                    print $logSource;
                    print "
";
                    print $tmp_priority;
                    print "
";
                    print $msg;
                    $tmp_log_output_ARRAY = $this->compile_log_output(
                                                   $oLog_output_ARRAY,
                                                   'SCREEN_HTML_HIDDEN',
                                                   $logSource);

                break;
                case 'SCREEN_TEXT':

                    print '[' . $this->return_micro_time() . " secs]
";
                    print $logSource;
                    print "
";
                    print $tmp_priority;
                    print "
";
                    print $msg;
                    $tmp_log_output_ARRAY = $this->compile_log_output(
                                                   $oLog_output_ARRAY,
                                                   'SCREEN_TEXT',
                                                   $logSource);

                break;
                case 'FILE':

                    if(isset($oLog_output_ARRAY)){

                        $tmp_log_output_ARRAY = $this->compile_log_output(
                                                       $oLog_output_ARRAY,
                                                       'FILE',
                                                       $logSource);

                    }

					$tmp_file_path = $_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_ENDPOINT"];

					//
					// You can customize
					// the format of this
					// logging output.
					$logDataToWrite = $this->return_micro_time() . ' [rtime ' .
					                  $this->wall_time().']'.' [mthd ' .
					                  $logSource.'] [priority ' .
					                  $tmp_priority.'] ' . $msg.'
';

					$fp = fopen($tmp_file_path, 'a');
					fwrite($fp, $logDataToWrite);
					fclose($fp);

                break;
				default:

                    $tmp_log_output_ARRAY = $this->compile_log_output(
                                                   $oLog_output_ARRAY,
                                                   'DEFAULT',
                                                   $logSource);
                    error_log('[rtime ' .
                        $this->wall_time().']'.' [owner ' .
                        $this->objectOwner_key.']'.' [mthd ' .
                        $logSource.'] [priority ' .
                        $tmp_priority.'] ' .
                        $msg);

                break;

			}

		}else{

			//
			// Probably CRNRSTN ::
			// initialization error.
			// Just log.
            $tmp_log_output_ARRAY = $this->compile_log_output(
                                           $oLog_output_ARRAY,
                                           'DEFAULT',
                                           $logSource);
            error_log('[rtime ' .
                $this->wall_time() . '] [owner ' .
                $this->objectOwner_key . ']' . ' [mthd ' .
                $logSource . '] [priority ' .
                $tmp_priority.'] ' . $msg);

		}

		return true;

  	}

 */

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_requestSourceStr(
    	             $line_num,
    	             $method,
    	             $file,
    	             $logSource)
    {

        $str = '';

        if(isset($logSource) &&
        	$logSource != '')
        {

            $str .= $logSource;

        }else{

            /**
             *class::method at line ###
             *line ### within /filepath/
             *
             */

            if(isset($method) &&
            	$method != '')
            {

                $str .= '[mthd ' .
                        $method . ']';

                if(isset($line_num) &&
                	$line_num != '')
                {

                    $str .= ' at [lnum ' .
                            $line_num . ']';

                }else{

                    if(isset($file) &&
                    	$file != '')
                    {

                        $str .= ' within the [file ' .
                                $file . ']';

                    }

                }

            }else{

                if(isset($file) &&
                	$file != '')
                {

                    if(isset($line_num) &&
                    	$line_num != '')
                    {

                        $str .= '[lnum ' . $line_num .
                                '] within the [file ' .
                                $file . ']';

                    }else{

                        $str .= 'The [file ' . $file .
                                ']';

                    }

                }else{

                    if(isset($line_num) &&
                    	$line_num != '')
                    {

                        $str .= '[lnum ' . $line_num .
                                '] of an unknown script on server ' .
                                $_SERVER['SERVER_NAME'] . ' (' .
                                $_SERVER['SERVER_ADDR'] . ')';

                    }else{

                        $str .= '[lnum xxx] An unknown ' .
                                'script source on server ' .
                                $_SERVER['SERVER_NAME'] . ' (' .
                                $_SERVER['SERVER_ADDR'] .
                                ').';

                    }

                }

            }

        }

        return $str;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_auth_oLog(
    	             $full_out,
    	             $silo_auth_ARRAY,
    	             $silo_negation_ARRAY,
    	             $oCRNRSTN_USR)
    {

        $oLog_possible_output_ARRAY = $this->oLog_output_ARRAY;
        $tmp_silo_neg_cnt           = \sizeof($silo_negation_ARRAY);

        if(($full_out || ($silo_auth_ARRAY == NULL)) &&
        	$tmp_silo_neg_cnt == 0)
        {

            $tmp_oLog_authorized_ARRAY = $oLog_possible_output_ARRAY;

        }else{

            $tmp_oLog_authorized_ARRAY = array();
            $tmp_oLog_cnt              = sizeof($oLog_possible_output_ARRAY);

            for($i = 0; $i < $tmp_oLog_cnt; $i++){

                $tmp_oLog = $oLog_possible_output_ARRAY[$i];

                if(\is_object($tmp_oLog)){

                    $tmp_oLog_silo_key = $tmp_oLog->return_silo_profile_array();

                    error_log('[mthd ' .
                    	__METHOD__ .
                    	'] [lnum ' .
                    	__LINE__ . '] logging $tmp_oLog_silo_key[' .
                    	print_r($tmp_oLog_silo_key, true) .
                    	'].');

                    if((isset($tmp_silo_auth_ARRAY[$tmp_oLog_silo_key]) || $full_out) &&
                    	!isset($silo_negation_ARRAY[$tmp_oLog_silo_key]))
                    {

                        $ttl = -1;
                        $tmp_oLog->expireLogData($oCRNRSTN_USR, $ttl);
                        $tmp_oLog_authorized_ARRAY[] = $tmp_oLog;

                    }

                }

            }

        }

        return $tmp_oLog_authorized_ARRAY;

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
     * @return
     * @access private
     *
     */
    private function prepare_oLogOut(
    	             $channel,
    	             $log_silo_profiles_pipe,
    	             $line_num,
    	             $method,
    	             $file,
    	             $logSource,
    	             $oLog_output_ARRAY,
    	             $oCRNRSTN_USR)
    {

        $tmp_request_source = $this->return_requestSourceStr(
        	                         $line_num,
        	                         $method,
        	                         $file,
        	                         $logSource);

        if(isset($oLog_output_ARRAY)){

            $tmp_auth_oLog_ARRAY = $oLog_output_ARRAY;

        }else{

            error_log('[mthd ' .
                    	__METHOD__ .
                    	'] [lnum ' .
                    	__LINE__ . '] log.inc.php die() go ' .
                    	'to integer constant arch.');
            die();

            $tmp_silo_negation_ARRAY = array();
            $tmp_silo_ARRAY = explode('|', $log_silo_profiles_pipe);
            $tmp_authorized_silo_cnt = sizeof($tmp_silo_ARRAY);

            if(in_array('*', $tmp_silo_ARRAY) ||
            	($tmp_authorized_silo_cnt == 1 && $tmp_silo_ARRAY[0] == '') ||
            	($tmp_authorized_silo_cnt == 0))
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Output all oLog.
                 *
            	 */
                $tmp_full_out = true;
                $tmp_silo_auth_ARRAY = NULL;

            }else{

                $tmp_full_out = false;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Look to output
                 * subset of silo data.
                 *
            	 */
                for($i = 0; $i < $tmp_authorized_silo_cnt; $i++){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Check for not.
	                 *
	            	 */
                    $pos_silo_tilde = \strpos($tmp_silo_ARRAY[$i], '~');

                    if($pos_silo_tilde !== false){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Honor the negation
                         * strip ~ and trim.
                         *
                    	 */
                        $tmp_clean_silo_negation = $this->proper_replace(
                        	                              '~',
                        	                              '',
                        	                              $tmp_silo_ARRAY[$i]);
                        $tmp_clean_silo_negation = \trim($tmp_clean_silo_negation);
                        $tmp_silo_negation_ARRAY[$tmp_clean_silo_negation] = 1;

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Honor the
                         * exclusive inclusion.
                         *
                    	 */
                        $tmp_silo_auth_ARRAY[$tmp_silo_ARRAY[$i]] = 1;

                    }

                }

            }

            $tmp_auth_oLog_ARRAY = $this->return_auth_oLog(
                                          $tmp_full_out,
                                          $tmp_silo_auth_ARRAY,
                                          $tmp_silo_negation_ARRAY,
                                          $oCRNRSTN_USR);

        }

        switch($channel){
            case $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL']:
            case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] &
                 $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL']:

                $tmp_log_to_email_array = array();
                $tmp_log_to_email_array['text'] = '';
                $tmp_log_to_email_array['text'] .= 'Begin log output of ' .
                                                   'activity from ' .
                                                   'requesting source :: ' .
                                                   $tmp_request_source . '
';
                $tmp_log_to_email_array['html'] = '';
                $tmp_log_to_email_array['html'] .= 'Begin log output of ' .
                                                   'activity from ' .
                                                   'requesting source :: ' .
                                                   $tmp_request_source . '<br>';

                $tmp_log_cnt = \sizeof($tmp_auth_oLog_ARRAY);
                for($i = 0; $i < $tmp_log_cnt; $i++){

                    $tmp_oLog = $tmp_auth_oLog_ARRAY[$i];

                    if(\is_object($tmp_oLog)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a valid
                         * log for which
                         * to prepare output.
                         *
                         * $tmp_silo_key = $tmp_oLog->return_silo_profile_array();
                         *
                    	 */
                        $tmp_transactionTime = $tmp_oLog->get_transactionTime();
                        $tmp_runTime         = $tmp_oLog->get_runTime();
                        $tmp_runFile_raw     = $tmp_oLog->get_runFile();
                        $tmp_classMethod_raw = $tmp_oLog->get_classMethod();
                        $tmp_lineNumber_raw  = $tmp_oLog->get_lineNumber();
                        $tmp_logMsg_raw      = $tmp_oLog->get_logMsg();
                        $tmp_transactionTime_ARRAY =
                        $tmp_runTime_ARRAY         =
                        $tmp_classMethodFile_ARRAY =
                        $tmp_lineNumber_ARRAY      =
                        $tmp_logMsg_ARRAY          = array();

                        $tmp_transactionTime_ARRAY['text'] = $tmp_transactionTime;
                        $tmp_transactionTime_ARRAY['html'] = $tmp_transactionTime;

                        $tmp_runTime_ARRAY['text'] = ' [rtime ' .
                                                     $tmp_runTime . ']';
                        $tmp_runTime_ARRAY['html'] = ' [rtime ' .
                                                     $tmp_runTime . ']';

                        if(isset($tmp_classMethod_raw)){
                            if($tmp_classMethod_raw != ''){

                                $tmp_classMethodFile_ARRAY['text'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';
                                $tmp_classMethodFile_ARRAY['html'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';

                            }else{

                                if(isset($tmp_runFile_raw)){

                                    if($tmp_runFile_raw != ''){

                                        $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';
                                        $tmp_classMethodFile_ARRAY['html'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';

                                    }else{

                                        $tmp_classMethodFile_ARRAY['text'] = '';
                                        $tmp_classMethodFile_ARRAY['html'] = '';

                                    }

                                }else{

                                    $tmp_classMethodFile_ARRAY['text'] = '';
                                    $tmp_classMethodFile_ARRAY['html'] = '';

                                }

                            }

                        }else{

                            if(isset($tmp_runFile_raw)){

                                if($tmp_runFile_raw != ''){

                                    $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';
                                    $tmp_classMethodFile_ARRAY['html'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';

                                }else{

                                    $tmp_classMethodFile_ARRAY['text'] = '';
                                    $tmp_classMethodFile_ARRAY['html'] = '';

                                }

                            }else{

                                $tmp_classMethodFile_ARRAY['text'] = '';
                                $tmp_classMethodFile_ARRAY['html'] = '';

                            }

                        }

                        if(isset($tmp_lineNumber_raw)){

                            if($tmp_lineNumber_raw != ''){

                                $tmp_lineNumber_ARRAY['text'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';
                                $tmp_lineNumber_ARRAY['html'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';

                            }else{

                                $tmp_lineNumber_ARRAY['text'] = '';
                                $tmp_lineNumber_ARRAY['html'] = '';

                            }

                        }else{

                            $tmp_lineNumber_ARRAY['text'] = '';
                            $tmp_lineNumber_ARRAY['html'] = '';

                        }

                        if(isset($tmp_logMsg_raw)){

                            $tmp_logMsg_ARRAY['text'] = ' ' .
                                                        $tmp_logMsg_raw . '
';
                            $tmp_logMsg_ARRAY['html'] = ' ' .
                                                        $tmp_logMsg_raw . '<br>';

                        }else{

                            $tmp_logMsg_ARRAY['text'] = '
';
                            $tmp_logMsg_ARRAY['html'] = '<br>';

                        }

                        $tmp_log_to_email_array['text'] .= $tmp_transactionTime_ARRAY['text'] .
								                           $tmp_runTime_ARRAY['text'] .
								                           $tmp_classMethodFile_ARRAY['text'] .
								                           $tmp_lineNumber_ARRAY['text'] .
								                           $tmp_logMsg_ARRAY['text'];

                        $tmp_log_to_email_array['html'] .= '<span style="font-family: Arial, ' .
                                                           'Helvetica,sans-serif; font-size: ' .
                                                           '11px; padding-left:10px;">' .
							                               $tmp_transactionTime_ARRAY['html'] .
							                               $tmp_runTime_ARRAY['html'] .
							                               $tmp_classMethodFile_ARRAY['html'] .
							                               $tmp_lineNumber_ARRAY['html'] .
							                               $tmp_logMsg_ARRAY['html'] .
							                               '</span>';

                    }
                }

                $tmp_log_to_email_array['text'] .= 'End log output ' .
                                                   'of activity from [' .
                                                   $channel .
                                                   '] Requesting Source :: ' .
                                                   $tmp_request_source . '
';
                $tmp_log_to_email_array['html'] .= 'End log output of ' .
                                                   'activity from [' .
                                                   $channel .
                                                   '] Requesting Source :: ' .
                                                   $tmp_request_source .
                                                   '<br>';

                return $tmp_log_to_email_array;

            break;
            case $this->R_data['int_flag']['CRNRSTN_LOG_FILE']:
            case 'R_channel_FILE':

                $tmp_log_to_errorlog_array         = array();
                $tmp_log_to_errorlog_array['text'] = 'Begin log output ' .
                                                     'of activity from [' .
                                                     $channel .
                                                     '] Requesting Source :: ' .
                                                     $tmp_request_source . '
';

                $tmp_log_cnt = sizeof($tmp_auth_oLog_ARRAY);

                for($i = 0; $i < $tmp_log_cnt; $i++){

                    $tmp_oLog = $tmp_auth_oLog_ARRAY[$i];

                    if(\is_object($tmp_oLog)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a valid
                         * log for which to
                         * prepare output.
                         *
                         * $tmp_silo_key = $tmp_oLog->return_silo_profile_array();
                         *
                    	 */
                        $tmp_transactionTime  = $tmp_oLog->get_transactionTime();
                        $tmp_runTime          = $tmp_oLog->get_runTime();
                        $tmp_runFile_raw      = $tmp_oLog->get_runFile();
                        $tmp_classMethod_raw  = $tmp_oLog->get_classMethod();
                        $tmp_lineNumber_raw   = $tmp_oLog->get_lineNumber();
                        $tmp_logMsg_raw       = $tmp_oLog->get_logMsg();

                        $tmp_transactionTime_ARRAY = array();
                        $tmp_runTime_ARRAY         = array();
                        $tmp_classMethodFile_ARRAY = array();
                        $tmp_lineNumber_ARRAY      = array();
                        $tmp_logMsg_ARRAY          = array();

                        $tmp_transactionTime_ARRAY['text'] = $tmp_transactionTime;

                        $tmp_runTime_ARRAY['text'] = ' [rtime ' .
                                                     $tmp_runTime . ']';

                        if(isset($tmp_classMethod_raw)){

                            if($tmp_classMethod_raw != '')
                                $tmp_classMethodFile_ARRAY['text'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';
                            else

                                if(isset($tmp_runFile_raw))
                                    if($tmp_runFile_raw != '')
                                        $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';
                                    else
                                        $tmp_classMethodFile_ARRAY['text'] = '';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';

                        }else{

                            if(isset($tmp_runFile_raw))
                                if($tmp_runFile_raw != '')
                                    $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';
                            else
                                $tmp_classMethodFile_ARRAY['text'] = '';

                        }

                        if(isset($tmp_lineNumber_raw))
                            if($tmp_lineNumber_raw != '')
                                $tmp_lineNumber_ARRAY['text'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';
                            else
                                $tmp_lineNumber_ARRAY['text'] = '';
                        else
                            $tmp_lineNumber_ARRAY['text'] = '';

                        if(isset($tmp_logMsg_raw))
                            $tmp_logMsg_ARRAY['text'] = ' ' .
                                                        $tmp_logMsg_raw . '
';
                        else
                            $tmp_logMsg_ARRAY['text'] = '
';

                        $tmp_log_to_errorlog_array['text'] .= $tmp_transactionTime_ARRAY['text'] .
								                              $tmp_runTime_ARRAY['text'] .
								                              $tmp_classMethodFile_ARRAY['text'] .
								                              $tmp_lineNumber_ARRAY['text'] .
								                              $tmp_logMsg_ARRAY['text'];

                    }

                }

                $tmp_log_to_errorlog_array['text'] .= 'End log output ' .
                                                      'of activity from [' .
                                                      $channel .
                                                      '] Requesting Source :: ' .
                                                      $tmp_request_source . '
';

                return $tmp_log_to_errorlog_array;

            break;
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT']:

                $tmp_log_to_errorlog_array = array();
                $tmp_log_to_errorlog_array['text'] = '';
                $tmp_log_to_errorlog_array['text'] .= 'Begin log output ' .
                                                      'of activity from [' .
                                                      $channel .
                                                      '] Requesting Source :: ' .
                                                      $tmp_request_source . '
';

                $tmp_log_cnt = \sizeof($tmp_auth_oLog_ARRAY);
                for($i = 0; $i < $tmp_log_cnt; $i++){

                    $tmp_oLog = $tmp_auth_oLog_ARRAY[$i];

                    if(\is_object($tmp_oLog)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a valid
                         * log for which to
                         * prepare output.
                         *
                         * $tmp_silo_key = $tmp_oLog->return_silo_profile_array();
                         *
                    	 */
                        $tmp_transactionTime = $tmp_oLog->get_transactionTime();
                        $tmp_runTime         = $tmp_oLog->get_runTime();
                        $tmp_runFile_raw     = $tmp_oLog->get_runFile();
                        $tmp_classMethod_raw = $tmp_oLog->get_classMethod();
                        $tmp_lineNumber_raw  = $tmp_oLog->get_lineNumber();
                        $tmp_logMsg_raw      = $tmp_oLog->get_logMsg();

                        $tmp_transactionTime_ARRAY = array();
                        $tmp_runTime_ARRAY         = array();
                        $tmp_classMethodFile_ARRAY = array();
                        $tmp_lineNumber_ARRAY      = array();
                        $tmp_logMsg_ARRAY          = array();

                        $tmp_transactionTime_ARRAY['text'] = $tmp_transactionTime;

                        $tmp_runTime_ARRAY['text'] = ' [rtime ' .
                                                     $tmp_runTime . ']';

                        if(isset($tmp_classMethod_raw)){

                            if($tmp_classMethod_raw != '')
                                $tmp_classMethodFile_ARRAY['text'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';
                            else
                                if(isset($tmp_runFile_raw))
                                    if($tmp_runFile_raw != '')
                                        $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';
                                    else
                                        $tmp_classMethodFile_ARRAY['text'] = '';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';

                        }else{

                            if(isset($tmp_runFile_raw))
                                if($tmp_runFile_raw != '')
                                    $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';
                            else
                                $tmp_classMethodFile_ARRAY['text'] = '';

                        }

                        if(isset($tmp_lineNumber_raw))
                            if($tmp_lineNumber_raw != '')
                                $tmp_lineNumber_ARRAY['text'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';
                            else
                                $tmp_lineNumber_ARRAY['text'] = '';
                        else
                            $tmp_lineNumber_ARRAY['text'] = '';

                        if(isset($tmp_logMsg_raw))
                            $tmp_logMsg_ARRAY['text'] = ' ' .
                                                        $tmp_logMsg_raw . '
';
                        else
                            $tmp_logMsg_ARRAY['text'] = '
';

                        $tmp_log_to_errorlog_array['text'] .= $tmp_transactionTime_ARRAY['text'] .
								                              $tmp_runTime_ARRAY['text'] .
								                              $tmp_classMethodFile_ARRAY['text'] .
								                              $tmp_lineNumber_ARRAY['text'] .
								                              $tmp_logMsg_ARRAY['text'];

                    }

                }

                $tmp_log_to_errorlog_array['text'] .= 'End log output ' .
                                                      'of activity from [' .
                                                      $channel .
                                                      '] Requesting Source :: ' .
                                                      $tmp_request_source . '
';

                return $tmp_log_to_errorlog_array;

            break;
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN']:
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML']:

                $tmp_log_to_screen_array         = array();
                $tmp_log_to_screen_array['html'] = '';
                $tmp_log_to_screen_array['html'] .= '<div style="font-family: ' .
                                                    'Arial, Helvetica,sans-serif; ' .
                                                    'font-size: 12px; font-weight: ' .
                                                    'bold; padding:10px 0 0 5px; ' .
                                                    'line-height: 15px;">begin log ' .
                                                    'output of activity from ' .
                                                    'requesting source :: ' .
                                                    $tmp_request_source . '</div>';
                $tmp_log_cnt = \sizeof($tmp_auth_oLog_ARRAY);

                for($i = 0; $i < $tmp_log_cnt; $i++){

                    $tmp_oLog = $tmp_auth_oLog_ARRAY[$i];

                    if(\is_object($tmp_oLog)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a valid
                         * log for which to
                         * prepare output.
                         *
                         * $tmp_silo_key = $tmp_oLog->return_silo_profile_array();
                         *
                    	 */
                        $tmp_transactionTime = $tmp_oLog->get_transactionTime();
                        $tmp_runTime         = $tmp_oLog->get_runTime();
                        $tmp_runFile_raw     = $tmp_oLog->get_runFile();
                        $tmp_classMethod_raw = $tmp_oLog->get_classMethod();
                        $tmp_lineNumber_raw  = $tmp_oLog->get_lineNumber();
                        $tmp_logMsg_raw      = $tmp_oLog->get_logMsg();

                        $tmp_transactionTime_ARRAY =
                        $tmp_runTime_ARRAY         =
                        $tmp_classMethodFile_ARRAY =
                        $tmp_lineNumber_ARRAY      =
                        $tmp_logMsg_ARRAY          = array();

                        $tmp_transactionTime_ARRAY['html'] = $tmp_transactionTime;

                        $tmp_runTime_ARRAY['html'] = ' [rtime ' .
                                                     $tmp_runTime . ']';

                        if(isset($tmp_classMethod_raw)){

                            if($tmp_classMethod_raw != '')
                                $tmp_classMethodFile_ARRAY['html'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';
                            else
                                if(isset($tmp_runFile_raw))
                                    if($tmp_runFile_raw != '')
                                        $tmp_classMethodFile_ARRAY['html'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';
                                    else
                                        $tmp_classMethodFile_ARRAY['html'] = '';
                                else
                                    $tmp_classMethodFile_ARRAY['html'] = '';

                        }else{

                            if(isset($tmp_runFile_raw))
                                if($tmp_runFile_raw != '')
                                    $tmp_classMethodFile_ARRAY['html'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';
                                else
                                    $tmp_classMethodFile_ARRAY['html'] = '';
                            else
                                $tmp_classMethodFile_ARRAY['html'] = '';

                        }

                        if(isset($tmp_lineNumber_raw))
                            if($tmp_lineNumber_raw != '')
                                $tmp_lineNumber_ARRAY['html'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';
                            else
                                $tmp_lineNumber_ARRAY['html'] = '';
                        else
                            $tmp_lineNumber_ARRAY['html'] = '';

                        if(isset($tmp_logMsg_raw))
                            $tmp_logMsg_ARRAY['html'] = ' ' .
                                                        $tmp_logMsg_raw . '<br>';
                        else
                            $tmp_logMsg_ARRAY['html'] = '<br>';

                        $tmp_log_to_screen_array['html'] .= '<div style="font-family: ' .
                                                            'Arial, Helvetica,sans-serif; ' .
                                                            'font-size: 11px; padding-left:10px; ' .
                                                            'line-height: 17px;">' .
                                                            $tmp_transactionTime_ARRAY['html'] .
                                                            $tmp_runTime_ARRAY['html'] .
                                                            $tmp_classMethodFile_ARRAY['html'] .
                                                            $tmp_lineNumber_ARRAY['html'] .
                                                            $tmp_logMsg_ARRAY['html'] . '</div>';

                    }
                }

                $tmp_log_to_screen_array['html'] .= '<div style="font-family: ' .
                                                    'Arial, Helvetica, sans-serif; ' .
                                                    'font-size: 12px; font-weight: ' .
                                                    'bold; padding:0 0 5px 5px; ' .
                                                    'line-height: 15px;">end log ' .
                                                    'output of activity from [' .
                                                    $channel .
                                                    '] Requesting Source :: ' .
                                                    $tmp_request_source .
                                                    '</div>';
                return $tmp_log_to_screen_array;

            break;
            case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN']:

                $tmp_log_to_html_hidden_array = array();
                $tmp_log_to_html_hidden_array['text'] = '';
                $tmp_log_to_html_hidden_array['text'] .= 'Begin log output ' .
                                                         'of activity from [' .
                                                         $channel . '] Requesting Source :: ' .
                                                         $tmp_request_source . '
';

                $tmp_log_cnt = sizeof($tmp_auth_oLog_ARRAY);
                for($i = 0; $i < $tmp_log_cnt; $i++){

                    $tmp_oLog = $tmp_auth_oLog_ARRAY[$i];

                    if(is_object($tmp_oLog)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a valid
                         * log for which to
                         * prepare output.
                         *
                         * $tmp_silo_key = $tmp_oLog->return_silo_profile_array();
                         *
                    	 */
                        $tmp_transactionTime = $tmp_oLog->get_transactionTime();
                        $tmp_runTime         = $tmp_oLog->get_runTime();
                        $tmp_runFile_raw     = $tmp_oLog->get_runFile();
                        $tmp_classMethod_raw = $tmp_oLog->get_classMethod();
                        $tmp_lineNumber_raw  = $tmp_oLog->get_lineNumber();
                        $tmp_logMsg_raw      = $tmp_oLog->get_logMsg();

                        $tmp_transactionTime_ARRAY =
                        $tmp_runTime_ARRAY         =
                        $tmp_classMethodFile_ARRAY =
                        $tmp_lineNumber_ARRAY      =
                        $tmp_logMsg_ARRAY          = array();

                        $tmp_transactionTime_ARRAY['text'] = $tmp_transactionTime;

                        $tmp_runTime_ARRAY['text'] = ' [rtime ' .
                                                     $tmp_runTime . ']';

                        if(isset($tmp_classMethod_raw)){

                            if($tmp_classMethod_raw != '')
                                $tmp_classMethodFile_ARRAY['text'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';
                            else

                                if(isset($tmp_runFile_raw))
                                    if($tmp_runFile_raw != '')
                                        $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';
                                    else

                                        $tmp_classMethodFile_ARRAY['text'] = '';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';

                        }else{

                            if(isset($tmp_runFile_raw))
                                if($tmp_runFile_raw != '')
                                    $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';
                            else
                                $tmp_classMethodFile_ARRAY['text'] = '';

                        }

                        if(isset($tmp_lineNumber_raw))
                            if($tmp_lineNumber_raw != '')
                                $tmp_lineNumber_ARRAY['text'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';
                            else
                                $tmp_lineNumber_ARRAY['text'] = '';
                        else
                            $tmp_lineNumber_ARRAY['text'] = '';

                        if(isset($tmp_logMsg_raw))
                            $tmp_logMsg_ARRAY['text'] = ' ' .
                                                        $tmp_logMsg_raw . '
';
                        else
                            $tmp_logMsg_ARRAY['text'] = '
';

                        $tmp_log_to_html_hidden_array['text'] .= $tmp_transactionTime_ARRAY['text'] .
									                             $tmp_runTime_ARRAY['text'] .
									                             $tmp_classMethodFile_ARRAY['text'] .
									                             $tmp_lineNumber_ARRAY['text'] .
									                             $tmp_logMsg_ARRAY['text'];

                    }

                }

                $tmp_log_to_html_hidden_array['text'] .= 'End log output ' .
                                                         'of activity from [' .
                                                         $channel .
                                                         '] Requesting Source :: ' .
                                                         $tmp_request_source . '
';

                return $tmp_log_to_html_hidden_array;

            break;
            /*case 'R_channel_GET':
             *case 'R_channel_POST':
             *case 'R_channel_COOKIE':
             *case 'R_channel_SESSION':
             *
             */
            case $this->R_data['int_flag']['R_channel_DATABASE']:
            case $this->R_data['int_flag']['R_channel_SSDTLA']:
            case $this->R_data['int_flag']['R_channel_PSSDTLA']:
            case $this->R_data['int_flag']['R_channel_RUNTIME']:
            case $this->R_data['int_flag']['R_channel_SOAP']:
            /*case 'R_channel_ALL':
             *case 'R_channel_FORM':
             *
             */
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Default.
	             *
	             */
                $tmp_log_cnt = \sizeof($tmp_auth_oLog_ARRAY);
                if($tmp_log_cnt < 1)
                    return NULL;

                $tmp_log_to_errorlog_array         = array();
                $tmp_log_to_errorlog_array['text'] = '';
                $tmp_log_to_errorlog_array['text'] .= 'Begin log output ' .
                                                      'of activity from [' .
                                                      $channel .
                                                      '] Requesting Source :: ' .
                                                      $tmp_request_source . '
';

                $tmp_log_cnt = \sizeof($tmp_auth_oLog_ARRAY);
                for($i = 0; $i < $tmp_log_cnt; $i++){

                    $tmp_oLog = $tmp_auth_oLog_ARRAY[$i];

                    if(\is_object($tmp_oLog)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a valid
                         * log for which to
                         * prepare output.
                         *
                         * $tmp_silo_key = $tmp_oLog->return_silo_profile_array();
                         *
                    	 */
                        $tmp_transactionTime = $tmp_oLog->get_transactionTime();
                        $tmp_runTime         = $tmp_oLog->get_runTime();
                        $tmp_runFile_raw     = $tmp_oLog->get_runFile();
                        $tmp_classMethod_raw = $tmp_oLog->get_classMethod();
                        $tmp_lineNumber_raw  = $tmp_oLog->get_lineNumber();
                        $tmp_logMsg_raw      = $tmp_oLog->get_logMsg();

                        $tmp_transactionTime_ARRAY =
                        $tmp_runTime_ARRAY         =
                        $tmp_classMethodFile_ARRAY =
                        $tmp_lineNumber_ARRAY      =
                        $tmp_logMsg_ARRAY          = array();

                        $tmp_transactionTime_ARRAY['text'] = $tmp_transactionTime;

                        $tmp_runTime_ARRAY['text'] = ' [rtime ' .
                                                     $tmp_runTime . ']';

                        if(isset($tmp_classMethod_raw)){

                            if($tmp_classMethod_raw != '')
                                $tmp_classMethodFile_ARRAY['text'] = ' [mthd ' .
                                                                     $tmp_classMethod_raw . ']';
                            else
                                if(isset($tmp_runFile_raw))
                                    if($tmp_runFile_raw != '')
                                        $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                             $tmp_runFile_raw . ']';
                                    else
                                        $tmp_classMethodFile_ARRAY['text'] = '';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';

                        }else{

                            if(isset($tmp_runFile_raw))
                                if($tmp_runFile_raw != '')
                                    $tmp_classMethodFile_ARRAY['text'] = ' [file ' .
                                                                         $tmp_runFile_raw . ']';
                                else
                                    $tmp_classMethodFile_ARRAY['text'] = '';
                            else
                                $tmp_classMethodFile_ARRAY['text'] = '';

                        }

                        if(isset($tmp_lineNumber_raw))
                            if($tmp_lineNumber_raw != '')
                                $tmp_lineNumber_ARRAY['text'] = ' [lnum ' .
                                                                $tmp_lineNumber_raw . ']';
                            else
                                $tmp_lineNumber_ARRAY['text'] = '';
                        else
                            $tmp_lineNumber_ARRAY['text'] = '';

                        if(isset($tmp_logMsg_raw))
                            $tmp_logMsg_ARRAY['text'] = ' ' .
                                                        $tmp_logMsg_raw . '
';
                        else
                            $tmp_logMsg_ARRAY['text'] = '
';

                        $tmp_log_to_errorlog_array['text'] .= $tmp_transactionTime_ARRAY['text'] .
								                              $tmp_runTime_ARRAY['text'] .
								                              $tmp_classMethodFile_ARRAY['text'] .
								                              $tmp_lineNumber_ARRAY['text'] .
								                              $tmp_logMsg_ARRAY['text'];

                    }

                }

                $tmp_log_to_errorlog_array['text'] .= 'End log output of ' .
                                                      'activity from ' .
                                                      'requesting source :: ' .
                                                      $tmp_request_source . '
';
                return $tmp_log_to_errorlog_array;

            break;

        }

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
     * @return
     * @access public
     *
     */
    function get_error_log_trace(
             $output_profile, 
             $output_profile_override_meta, 
             $log_silo_profile, 
             $line_num, 
             $method, 
             $file, 
             $oCRNRSTN_USR)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * If CRNRSTN :: construct has 
         * silo limits...possible this 
         * method could request non-existent
         * silo log data...just send this 
         * realization as part of the output 
         * to channel.
         * 
         * [EMAIL, FILE, SCREEN_TEXT, 
         * SCREEN|SCREEN_HTML, SCREEN_HTML_HIDDEN, 
         * DEFAULT]
         *
         */
        try{

            $this->error_log('error_LogTrace() action ' . 
            	           'to take on profile[' . 
            	           $output_profile . ']', 
            	           __LINE__, 
            	           __METHOD__, 
            	           __FILE__, 
            	           $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

            $tmp_output_log_ARRAY = $this->prepare_oLogOut(
            	                           $output_profile, 
            	                           $log_silo_profile, 
            	                           $line_num, 
            	                           $method, 
            	                           $file, 
            	                           NULL, 
            	                           NULL, 
            	                           $oCRNRSTN_USR);

            switch($output_profile){
                case $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL']:
                    /* $tmp_output_log_ARRAY['text']
                     * $tmp_output_log_ARRAY['html']
                     *
                     */
                    $this->error_log('error_LogTrace() action ' . 
                    	   'to take on profile[' . 
                    	   $output_profile . ']', 
                    	   __LINE__, 
                    	   __METHOD__, 
                    	   __FILE__, 
                    	   $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

                break;
                case $this->R_data['int_flag']['CRNRSTN_LOG_PROXY'] & 
                     $this->R_data['int_flag']['CRNRSTN_LOG_EMAIL']:
                    /*$tmp_output_log_ARRAY['text']
                     *$tmp_output_log_ARRAY['html']
                     *
                     */
                    $this->error_log('error_LogTrace() action ' . 
                    	           'to take on profile[' . 
                    	           $output_profile . ']', 
                    	           __LINE__, 
                    	           __METHOD__, 
                    	           __FILE__,
                        $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

                break;
                case $this->R_data['int_flag']['CRNRSTN_LOG_FILE']:
                case $this->R_data['int_flag']['R_channel_FILE']:

                    /*$tmp_output_log_ARRAY['text']
                     *$output_profile_override_meta;
                     *
                     */
                    $this->error_log('error_LogTrace() action ' . 
                    	   'to take on profile[' . 
                    	   $output_profile . ']', 
                    	   __LINE__, 
                    	   __METHOD__, 
                    	   __FILE__, 
                    	   $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

                    if(isset($output_profile_override_meta)){

                        $tmp_minimum_bytes_required = strlen($tmp_output_log_ARRAY['text']);
                        if(!$this->grant_permissions_fwrite(
                        	       $output_profile_override_meta, 
                        	       $tmp_minimum_bytes_required))
                        {

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
						    $clr_ssl_msg = 'Warning. Disk space exceeds ' . 
		                            	   $this->get_disk_performance_metric('maximum_disk_use') . 
		                            	   '% minimum allocation of free space. File write [' . 
		                            	   $output_profile_override_meta . 
		                            	   '] stopped. CRNRSTN :: is configured to stop ' . 
		                            	   'file writes when allocation of free space on ' . 
		                            	   'disk exceeds specified limits.';
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
						    $this->error_log(
						           $clr_ssl_msg, 
						           \LOG_EMERG, 
						           \E_ERROR, 
						           __LINE__, 
						           __METHOD__, 
						           __FILE__, 
						           $token);

				    		/*
                            $this->print_r($clr_ssl_msg, 'Image Processing.', 
                            	   CRNRSTN_UI_PHPNIGHT, 
                            	   __LINE__, 
                            	   __METHOD__, 
                            	   __FILE__);

                            */

                            throw new Exception($clr_ssl_msg);

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Validate file path 
                         * on file open 
                         * for append. 
                         *
                         */
                        if($fp = \fopen($output_profile_override_meta, 'a')){

                            \fwrite($fp, $tmp_output_log_ARRAY['text']);
                            \fclose($fp);

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('Unable to locate the provided ' . 
                            	'path or open/create file for writing ' . 
                            	'only (i.e. append) at filepath="' . 
                            	$output_profile_override_meta . '".');

                        }

                    }else{

                        if(1 == 2){


                            /**
                             *$tmp_key = $_SESSION['CRNRSTN_' . crc32($_SESSION['R_cluster_id'])]['CRNRSTN_ENV_KEY_CRC'];
                             *$tmp_configserial = $_SESSION['R_cluster_id'];
                             *
                        	 */

                            $tmp_log_profile      = $this->return_loggingProfile();
                            $tmp_endpoint_profile = $this->return_endpointProfile(); //$_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_ENDPOINT"];

                            $tmp_log_profile_ARRAY      = \explode('|', $tmp_log_profile);
                            $tmp_endpoint_profile_ARRAY = \explode('|', $tmp_endpoint_profile);

                            $tmp_cnt_log_profile_pipe = \sizeof($tmp_log_profile_ARRAY);
                            $tmp_cnt_endpoint_pipe    = \sizeof($tmp_endpoint_profile_ARRAY);

                            if($tmp_cnt_log_profile_pipe == $tmp_cnt_endpoint_pipe){

                                for($i = 0; $i < $tmp_cnt_log_profile_pipe; $i++){
                                    /**
                                     *error_log('1979 - [' . 
                                     * $tmp_log_profile_ARRAY[$i] . '][' . 
                                     * $tmp_endpoint_profile_ARRAY[$i] . ']');
                                     *
                                     */

                                    /**
                                     * if(trim(strtoupper($tmp_log_profile_ARRAY[$i])) == 'FILE'){
                                     *
                                     *  //
                                     *  // VALIDATE FILE PATH ON FILE OPEN FOR APPEND.
                                     *    if($fp = fopen($tmp_endpoint_profile_ARRAY[$i], 'a')){
                                     *
                                     *        fwrite($fp, $tmp_output_log_ARRAY['text']);
                                     *        fclose($fp);
                                     *
                                     *    }else{
                                     *        
                                     *      /**
				                     *       * # C # R # N # R # S # T # N # :: # L # I # G # H # T
				                     *       * HOOOSTON, VE HAFF PROBLEM!
				                     *       * https://www.wired.com/2011/04/alt-text-spacecraft/
				                     *       * 
                                     *        throw new Exception('Unable to locate the provided path or open/create file for writing (i.e. append) at filepath="' . $tmp_cnt_endpoint_pipe[$i] . '".');
                                     *
                                     *    }
                                     *
                                     * }
                                     *
                                     */

                                }

                            }else{

                                /**
	                             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
	                             * HOOOSTON, VE HAFF PROBLEM!
	                             * https://www.wired.com/2011/04/alt-text-spacecraft/
	                             *
	                             */
                                throw new Exception('Count mismatch experienced ' . 
                                	'(while processing [' . 
                                	$output_profile . 
                                	'] log output) between number ' . 
                                	'of log profiles[' . 
                                	$tmp_cnt_log_profile_pipe . 
                                	'] and count of matching endpoints[' . 
                                	$tmp_cnt_endpoint_pipe . '].');

                            }

                        }

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_TEXT']:
                    # $tmp_output_log_ARRAY['text']
                    $this->error_log('error_LogTrace() action ' . 
                    	   'to take on profile[' . 
                    	   $output_profile . 
                    	   ']', 
                    	   __LINE__, 
                    	   __METHOD__, 
                    	   __FILE__, 
                    	   $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

                    print_r($tmp_output_log_ARRAY['text']);

                break;
                case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN']:
                case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML']:
                    # $tmp_output_log_ARRAY['html']
                    $this->error_log('error_LogTrace() action ' . 
                    	   'to take on profile[' . 
                    	   $output_profile . ']', 
                    	   __LINE__, 
                    	   __METHOD__, 
                    	   __FILE__,
                           $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);
                    error_log('[mthd ' . 
                    	__METHOD__ . 
                    	'] [lnum ' . 
                    	__LINE__ . '] Why is this still running? ' . 
                    	'...knock it off, mate.');
                    //echo htmlspecialchars(print_r($tmp_output_log_ARRAY['html']));
                    \print_r($tmp_output_log_ARRAY['html']);

                break;
                case $this->R_data['int_flag']['CRNRSTN_LOG_SCREEN_HTML_HIDDEN']:
                    # $tmp_output_log_ARRAY['text']
                    $this->error_log('error_LogTrace() action ' . 
                    	           'to take on profile[' . 
                    	           $output_profile . ']', 
                    	           __LINE__, 
                    	           __METHOD__, 
                    	           __FILE__, 
                    	           $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

                    print_r('
<!--
' . $tmp_output_log_ARRAY['text'] . '

-->
');
                break;
                /*case 'R_channel_GET':
                 *case 'R_channel_POST':
                 *case 'R_channel_COOKIE':
                 *case 'R_channel_SESSION':
                 *
                 */
                case $this->R_data['int_flag']['R_channel_DATABASE']:
                case $this->R_data['int_flag']['R_channel_SSDTLA']:
                case $this->R_data['int_flag']['R_channel_PSSDTLA']:
                case $this->R_data['int_flag']['R_channel_RUNTIME']:
                case $this->R_data['int_flag']['R_channel_SOAP']:
                /*case 'R_channel_ALL':
                 *case 'R_channel_FORM':
                 *
                 */
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Default. 
                     * 
                     * $tmp_output_log_ARRAY['text']
	                 *
	                 */
                    $this->error_log('error_LogTrace() action to ' . 
                    	   'take on DEFAULT=profile[' .
                    	   $output_profile . ']',
                    	   __LINE__,
                    	   __METHOD__,
                    	   __FILE__,
                    	   $this->R_data['int_flag']['CRNRSTN_LOG_NONE']);

                    if(isset($tmp_output_log_ARRAY['text']) && 
                    	($tmp_output_log_ARRAY['text'] != ''))
                        error_log($tmp_output_log_ARRAY['text']);

                break;

            }

        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Exception handling performed 
             * by the Logging Services Layer 
             * of the CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services 
             * Layer (CLR-SSL). 
             *
             * Allow the CLR-SSL to handle 
             * this exception per the 
             * configured logging profile of 
             * the running application on 
             * this server. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1607 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e,
                   LOG_ERR,
                   __METHOD__,
                   __NAMESPACE__);

            return false;
        }

        return NULL;

    }

    /*
    private function compile_log_output(
                     $oLog_output_ARRAY, 
                     $output_profile, 
                     $logSource)
    {

        error_log($output_profile);
        die();
        $tmp_output_log_ARRAY = $this->prepare_oLogOut(
                                       $output_profile, 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       NULL, 
                                       $logSource, 
                                       $oLog_output_ARRAY, 
                                       NULL);

        switch($output_profile){
            case 'EMAIL':
                # $tmp_output_log_ARRAY['text']
                # $tmp_output_log_ARRAY['html']

                return $tmp_output_log_ARRAY;

            break;
            case 'FILE':
                # $tmp_output_log_ARRAY['text']

                if(isset($output_profile_override_meta)){

                    //
                    // Validate file path 
                    // on file open for 
                    // append. 
                    if($fp = \fopen($output_profile_override_meta, 'a')){

                        \fwrite($fp, $tmp_output_log_ARRAY['text']);
                        \fclose($fp);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                        throw new Exception('Unable to locate the ' . 
                            'provided path or open/create file ' . 
                            'for writing only (i.e. append) ' . 
                            'at filepath="' . 
                            $output_profile_override_meta . 
                            '".');

                    }

                }else{

                    $tmp_key          = $_SESSION['CRNRSTN_' . crc32($_SESSION['R_cluster_id'])]['CRNRSTN_ENV_KEY_CRC'];
                    $tmp_configserial = $_SESSION['R_cluster_id'];

                    $tmp_file_path = $_SESSION["CRNRSTN_" . crc32($tmp_configserial)]["CRNRSTN_" . $tmp_key]["_CRNRSTN_LOG_ENDPOINT"];

                    //
                    // Validate file path 
                    // on file open 
                    // for append. 
                    if($fp = fopen($tmp_file_path, 'a')){

                        \fwrite($fp, $tmp_output_log_ARRAY['text']);
                        \fclose($fp);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         *
                        /**
                        throw new Exception('Unable to locate the ' . 
                            'provided path or open/create ' . 
                            'file for writing (i.e. append) ' . 
                            'at filepath="' . 
                            $tmp_file_path . '".');

                    }

                }

            break;
            case 'SCREEN_TEXT':

                # $tmp_output_log_ARRAY['text']
                \print_r($tmp_output_log_ARRAY['text']);

            break;
            case 'SCREEN':
            case 'SCREEN_HTML':

                error_log('2224 log - Why is this still running?');
                # $tmp_output_log_ARRAY['html']
                echo \htmlspecialchars(print_r($tmp_output_log_ARRAY['html']));

            break;
            case 'SCREEN_HTML_HIDDEN':
                # $tmp_output_log_ARRAY['text']

                echo htmlspecialchars(print_r('<!--
' . $tmp_output_log_ARRAY['text'] . '
-->'));
            break;
            default:

                //
                // Default. 
                # $tmp_output_log_ARRAY['text']
                if(isset($tmp_output_log_ARRAY['text']) && 
                    $tmp_output_log_ARRAY['text']!='')
                    error_log($tmp_output_log_ARRAY['text']);

            break;

            }

        return NULL;

    }

    private function buildSimpleMessage(
                     $oLog_output_ARRAY, 
                     $output_profile, 
                     $logSource)
    {

        if($this->log_output == '')
            $this->log_output = '** The CRNRSTN :: Lightsaber RoCEv2 ' . 
                                'SOAP Services Layer configuration ' . 
                                'file debug mode of "' . 
                                $this->CRNRSTN_debug_mode . 
                                '" prevents aggregation of ' . 
                                'log trace data. **';

        $tmp_log_output_ARRAY = $this->compile_log_output(
                                       $oLog_output_ARRAY, 
                                       $output_profile, 
                                       $logSource);

        $this->emailDataElements['subject'] = 'CRNRSTN :: logging ' . 
                                              'notification captured on ' . 
                                              $_SERVER['SERVER_NAME'];
        $this->emailDataElements['text']    = 'This is a triggered ' .
                                              'logging notification from CRNRSTN ::

Information about this notice:
- - - - - - - - - - - - - - - - - - - -
Source: ' . $this->emailDataElements['logSource'].'
Priority: ' . $this->emailDataElements['logPriority'].'
Message:
' . $this->emailDataElements['msg'].'

- - - - - - - - - - - - - - - - - - - - START LOG TRACE
' . $tmp_log_output_ARRAY['text'].'
- - - - - - - - - - - - - - - - - - - - END LOG TRACE

Sending IP Address: ' . $_SERVER['REMOTE_ADDR'].' (' . $_SERVER['SERVER_NAME'].')
System Timestamp: ' . $this->return_micro_time().'
Runtime: ' . $this->wall_time().' seconds

Please note that this information has
not been saved anywhere. You may want
to keep this email for your records.

This email was sent to ' . $this->emailDataElements['addAddressEmail'].'.
If you wish to unsubscribe from future
system notifications, please contact the
website administrator.

';

        $this->emailDataElements['headers']  = "From: System Notice < crnrstn_noreply@" . $_SERVER['SERVER_NAME'] . ">\n";
        $this->emailDataElements['headers'] .= "X-Sender: System Notice < crnrstn_noreply@" . $_SERVER['SERVER_NAME'] . ">\n";
        $this->emailDataElements['headers'] .= 'X-Mailer: PHP/' . phpversion();
        $this->emailDataElements['headers'] .= "X-Priority: 1\n";    // Urgent message!
        $this->emailDataElements['headers'] .= "Return-Path: crnrstn_noreply@" . $_SERVER['SERVER_NAME'] . "\n";
        $this->emailDataElements['headers'] .= "Reply-To: crnrstn_noreply@" . $_SERVER['SERVER_NAME'] . "\n";// Return path for errors
        $this->emailDataElements['headers'] .= "MIME-Version: 1.0\r\n";
        $this->emailDataElements['headers'] .= "Content-Type: text/plain; charset=UTF-8\n";

        return true;

    }

    private function sendSimpleMessage()
    {

        if(mail(
           $this->emailDataElements['addAddressEmail'], 
           $this->emailDataElements['subject'], 
           $this->emailDataElements['text'], 
           $this->emailDataElements['headers']))
            return "success";
        else
            return "mailsend error";

    }
    */

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