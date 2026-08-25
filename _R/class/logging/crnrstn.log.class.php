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
 *  Constant		Description
 *  LOG_EMERG		system is unusable.
 *  LOG_ALERT		action must be
 *                  taken immediately
 *  LOG_CRIT		critical conditions
 *  LOG_ERR		    error conditions
 *  LOG_WARNING	    warning conditions
 *  LOG_NOTICE	    normal, but
 *                  significant, condition
 *  LOG_INFO		informational message
 *  LOG_DEBUG		debug-level message
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
 *	INCLUDE SUPPORT FOR
 *  ERROR HANDLING/BUBBLING
 *	    Response status
 *		Status Code 	Description
 *		200 			Data accepted.
 *      400 			Request error.
 *                      See response
 *                      body for details.
 *      403.1 			Not authorized to
 *                      write to
 *                      the project.
 *      404 			Project does
 *                      not exist.
 *
 *	POINTS OF CONSIDERATION ::
 *	    - LOGGING TO DEFAULT
 *        SYSTEM LOG FILE
 *        (SUPPORT WINDOWS
 *        AND UNIX)
 *	    - LOGGING TO CUSTOM
 *        LOG FILE(S)
 *	    - LOGGING TO REMOTE
 *        SERVICE(S) VIA
 *        HTTP/HTTPS +
 *        AUTHENTICATION (OPTIONAL) +
 *        KEY (OPTIONAL)
 *	    - LOGGING TO EMAIL(S)
 *        **NOT RECOMMENDED
 *        FOR PRODUCTION ENVIRONMENTS**
 *	    - LOGGING TO SCREEN
 *        **NOT RECOMMENDED
 *        FOR PRODUCTION ENVIRONMENTS**
 *	    - BATCHING OF LOG REQUESTS
 *	    - TO WHAT EXTENT DO YOU
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
 *	EXAMPLE CURL REQUESTS ::
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
 * CLASS DEFINITION :: crnrstn_log
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, August 31, 2020 @ 0246 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Logging Services 
 *                     Layer Log Objectification 
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Log class is the 
 *                     faithful objectification 
 *                     of an error log within 
 *                     the advanced logging 
 *                     architecture of the CLR-SSL. 
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
 *                     Tuesday, July 23, 2024 @ 0247 hrs.
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
class crnrstn_log extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_log 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Thursday, March 12, 2026 @ 1155 hrs.
     *
     */
    
    private $R_data = array();

    private static $serial;
    private static $watch_key;
    private static $transaction_time;
    private static $silo_profile_ARRAY = array();
    private static $run_time;
    private static $run_file;
    private static $class_method;
    private static $line_number;
    private static $message;
    private static $is_devoted_to_destruction = false;
    private static $log_toTextStr_processed_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function __construct(
             $transaction_time, 
             $log_silo_profile = NULL)
    {

        // 5 :: Friday, August 21, 2026 @ 2332 hrs.
        $this->R_data['int_flag'] = $this->get_crnrstn('int_flag');

        self::$transaction_time = $transaction_time;
        self::$serial = $this->generate_new_key(64, NULL, true);
        self::$watch_key = self::$transaction_time . '::' . self::$serial;

        if(!isset($log_silo_profile)){

            self::$silo_profile_ARRAY = array($this->R_data['int_flag']['CRNRSTN_LOG_ALL'] =>
                                              $this->R_data['int_flag']['CRNRSTN_LOG_ALL']);

        }else{

            $tmp_type = $this->gettype($log_silo_profile, $this->R_data['int_flag']['R_integer']);
            switch($tmp_type){
                case $this->R_data['int_flag']['R_int']:
                case $this->R_data['int_flag']['R_integer']:

                    self::$silo_profile_ARRAY = array($log_silo_profile => 1);

                break;
                case $this->R_data['int_flag']['R_string']:

                    self::$silo_profile_ARRAY = array($log_silo_profile => 1);

                break;
                default:

                    self::$silo_profile_ARRAY = array(strval($log_silo_profile) => 1);

                break;

            }

        }

        $this->elapsed_delta_time(self::$watch_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function serial()
    {

        return self::$serial;

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
    function expireLogData(
             $oCRNRSTN_USR, 
             $ttl)
    {

        if($ttl < 0){

            $this->__destruct();

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Compare object watch 
             * serialization to TTL 
             * and destroy if 
             * beyond TTL. 
             *
        	 */
            if($oCRNRSTN_USR->elapsed_delta_time(self::$watch_key) > (double) $ttl){

                self::$is_devoted_to_destruction = true;
                $this->__destruct();

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_silo_profile_array()
    {

        return self::$silo_profile_ARRAY;

    }

    /**
     * public function toTextConversion(
     *                 $addBreakChar = NULL, 
     *                 $line_wrap = 145, 
     *                 $isVisTransactionTime = true)
     * {
 	 *
 	 */
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function toTextConversion(
             $break_char = NULL, 
             $output_type = 'ERROR_LOG', 
             $line_wrap = 125, 
             $is_visible_time = true)
    {

        if(isset(self::$log_toTextStr_processed_ARRAY[$output_type])){

            return self::$log_toTextStr_processed_ARRAY[$output_type];

        }else{

            $tmp_out_processed = '';

            if(isset($break_char))
                $tmp_linebreak = $break_char;
            else
                $tmp_linebreak = '';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Remain still while 
             * your life is extracted. 
             *
             */
            if($is_visible_time == true)
                $tmp_transactionTime = $this->get_transactionTime();
            else
                $tmp_transactionTime = '';

            $tmp_runTime         = $this->get_runTime();
            $tmp_runFile_raw     = $this->get_runFile();
            $tmp_classMethod_raw = $this->get_classMethod();
            $tmp_lineNumber_raw  = $this->get_lineNumber();
            $tmp_logMsg_raw      = $this->get_logMsg();

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Output string 
             * assembly. 
             *
             */
            $tmp_runTime = ' [rtime ' .
                           $tmp_runTime . ']';

            if(isset($tmp_classMethod_raw))
                if ($tmp_classMethod_raw != '')
                    $tmp_classMethodFile = ' [mthd ' .
                                           $tmp_classMethod_raw . ']';
                else
                    if(isset($tmp_runFile_raw))
                        if ($tmp_runFile_raw != '')
                            $tmp_classMethodFile = ' [file ' .
                                                   $tmp_runFile_raw . ']';
                        else
                            $tmp_classMethodFile = '';
                    else
                        $tmp_classMethodFile = '';
            else
                if(isset($tmp_runFile_raw))
                    if($tmp_runFile_raw != '')
                        $tmp_classMethodFile = ' [file ' .
                                               $tmp_runFile_raw . ']';
                    else
                        $tmp_classMethodFile = '';
                else
                    $tmp_classMethodFile = '';

            if(isset($tmp_lineNumber_raw))
                if($tmp_lineNumber_raw != '')
                    $tmp_lineNumber = ' [lnum ' .
                                      $tmp_lineNumber_raw . ']';
                else
                    $tmp_lineNumber = '';
            else
                $tmp_lineNumber = '';

            if(isset($tmp_logMsg_raw))
                $tmp_logMsg = ' ' .
                              $tmp_logMsg_raw;

            $tmp_out_raw = $tmp_transactionTime . 
			               $tmp_runTime . 
			               $tmp_classMethodFile . 
			               $tmp_lineNumber . 
			               $tmp_logMsg;

            if((\strlen($tmp_out_raw) > $line_wrap) &&
            	($line_wrap > 0))
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Return log trace 
                 * string for screen text. 
                 *
            	 */
                if($tmp_linebreak != '')
                    $tmp_out_raw = \rtrim($tmp_out_raw, $tmp_linebreak);

                $oChunkRestrictData = $this->chunkPageData($tmp_out_raw, $line_wrap);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN_LOG_EMAIL, 
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL, 
                 * CRNRSTN_LOG_FILE, 
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE,
                 * CRNRSTN_LOG_FILE_FTP, 
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_FILE_FTP, 
                 * CRNRSTN_LOG_SCREEN_TEXT, 
                 * CRNRSTN_LOG_SCREEN,
                 * CRNRSTN_LOG_SCREEN_HTML, 
                 * CRNRSTN_LOG_SCREEN_HTML_HIDDEN, 
                 * CRNRSTN_LOG_DEFAULT,
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DEFAULT, 
                 * CRNRSTN_LOG_ELECTRUM, 
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_ELECTRUM, 
                 * CRNRSTN_LOG_DATABASE,
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_DATABASE, 
                 * CRNRSTN_LOG_SSDTLA, 
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_SSDTLA, 
                 * CRNRSTN_LOG_PSSDTLA,
                 * CRNRSTN_LOG_PROXY & CRNRSTN_LOG_PSSDTLA, 
                 * CRNRSTN_LOG_SOAP
                 *
                 *
                 * 5 :: Wednesday, December 6, 2023 @ 0201 hrs.
                 *
                 */
                switch($output_type){
                    case 'HTML':

                        $tmp_out_processed .= $oChunkRestrictData->return_linesString(
                        	                                       $output_type, 
                        	                                       '...');

                    break;
                    case 'TEXT':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Identical to 
                         * CRNRSTN_LOG_SCREEN_TEXT.
                         *
                         */
                        $output_type = 'SCREEN_TEXT';
                        $tmp_out_processed .= $oChunkRestrictData->return_linesString(
                        	                                       $output_type, 
                        	                                       '   ');

                    break;
                    case 'SCREEN_TEXT':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Currently used for 
                         * text version of multi-part 
                         * email and screen_text output. 
                         *
                         */
                        $tmp_out_processed .= $oChunkRestrictData->return_linesString(
                        	                                       $output_type, 
                        	                                       '   ');

                    break;
                    default:

                        $tmp_out_processed .= $tmp_out_raw;

                    break;

                }

            }else{

                $tmp_out_processed = $tmp_out_raw . $tmp_linebreak;

            }

            self::$log_toTextStr_processed_ARRAY[$output_type] = $tmp_out_processed;

        }

        return $tmp_out_processed;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_transactionTime()
    {

        return self::$transaction_time;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function set_runTime($str)
    {

        self::$run_time = $str;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_runTime()
    {

        if(isset(self::$run_time))
            return self::$run_time;
        else
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
    function set_runFile($str = NULL)
    {

        if(isset($str))
            self::$run_file = $str;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_runFile()
    {

        if(isset(self::$run_file))
            return self::$run_file;
        else
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
    function set_classMethod($str = NULL)
    {

        if(isset($str))
            self::$class_method = $str;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_classMethod()
    {

        if(isset(self::$class_method))
            return self::$class_method;
        else
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
    function set_lineNumber($str = NULL)
    {

        if(isset($str))
            self::$line_number = $str;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_lineNumber()
    {

        if(isset(self::$line_number))
            return self::$line_number;
        else
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
    function set_logMsg($str = '')
    {

        self::$message = $str;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_logMsg()
    {

        if(isset(self::$message))
            return self::$message;
        else
            return NULL;

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