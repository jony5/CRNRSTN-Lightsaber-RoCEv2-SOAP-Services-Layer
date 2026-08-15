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
 * CLASS DEFINITION :: crnrstn_log_output_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, September 9, 2020 @ 2340 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Logging Services 
 *                     Layer Multi-Channel 
 *                     Output Manager 
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Logging Services 
 *                     Layer Multi-Channel 
 *                     Output Manager coordinates 
 *                     and/or oversees the alignment 
 *                     of system logging and 
 *                     notification output with 
 *                     the frameworks available 
 *                     logging output architectures 
 *                     or channels. 
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
 *                     Monday, July 29, 2024 @ 0926 hrs.
 *                     Last Modified: Saturday, March 14, 2026 @ 0311 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 
 */
class crnrstn_log_output_manager extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_log_output_manager 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Friday, March 13, 2026 @ 1548 hrs.
     *
     */

	/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
	 * Regulate maximum log 
	 * trace output to email 
	 * & error_log. 
	 *
	 */
    public $maximum_email_log_trace = 23;

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

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
    function return_log_trace_output_str(
             $output_profile = 'ERROR_LOG', 
             $line_wrap = NULL)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * (int) CRNRSTN_LOG_EMAIL, 
         * (int) CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL,
         * (int) CRNRSTN_LOG_FILE, 
         * (int) CRNRSTN_LOG_FILE_FTP, 
         * (int) CRNRSTN_LOG_SCREEN_TEXT,
         * (int) CRNRSTN_LOG_SCREEN, 
         * (int) CRNRSTN_LOG_SCREEN_HTML,
         * (int) CRNRSTN_LOG_SCREEN_HTML_HIDDEN, 
         * (int) CRNRSTN_LOG_DEFAULT,
         * (int) CRNRSTN_LOG_ELECTRUM, 
         * (int) CRNRSTN_LOG_DATABASE,
         * (int) CRNRSTN_LOG_SSDTLA, 
         * (int) CRNRSTN_LOG_PSSDTLA,
         * (int) CRNRSTN_LOG_SOAP
         *
         *
         * 5 :: Wednesday, December 6, 2023 @ 0703 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return log trace 
         * string data. 
         *
         */
        switch($output_profile){
            case 'EMAIL_HTML':

                return $this->return_log_str_EMAIL_HTML();

            break;
            case 'EMAIL_TEXT':

                return $this->return_log_str_EMAIL_TEXT();

            break;
            case 'FILE':

                return $this->return_log_str_FILE($line_wrap);

            break;
            case 'SCREEN_TEXT':

                return $this->return_log_str_SCREEN_TEXT();

            break;
            case 'SCREEN':
            case 'SCREEN_HTML':

                return $this->return_log_str_SCREEN_HTML();

            break;
            case 'SCREEN_HTML_HIDDEN':

                return $this->return_log_str_SCREEN_HTML(false);

            break;
            case 'ERROR_LOG':
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log()
                 *
                 */
                return $this->return_log_str_ERROR_LOG();

            break;
        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_HTML_EMAIL_chunk_ARRAY(
    	             $str, 
    	             $chunkSize)
    {

        $tmp_str_array = array();
        $tmp_str_array[1] = '';

        $oChunkRestrictData = $this->chunkPageData($str, $chunkSize);
        $tmp_str_out_array = $oChunkRestrictData->return_linesArray();

        $tmp_out_str_1 = '';

        /**
	     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
	     * Return array[0] = 
	     * chunk size and array[1] = 
	     * everything else. 
         *
         */
        $tmp_chunk_cnt = sizeof($tmp_str_out_array);
        for($i = 0; $i < $tmp_chunk_cnt; $i++){

            if($i == 0){

                $tmp_out_str_0 = $tmp_str_out_array[$i];

            }else{

                $tmp_out_str_1 .= $tmp_str_out_array[$i];

            }

        }

        $oChunkRestrictData = $this->chunkPageData(
        	                         '...' . trim($tmp_out_str_1), 
        	                         91);
        $tmp_out_str_1 = $oChunkRestrictData->return_linesString(
        	                                  'HTML', 
        	                                  $new_line_prefix = '...');
        $tmp_out_str_1 = ltrim($tmp_out_str_1, '<br>');

        $tmp_str_array[0] = $tmp_out_str_0;
        $tmp_str_array[1] = $tmp_out_str_1;

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_log_str_EMAIL_HTML()
    {

        $tmp_log_str_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Build log trace 
         * string for HTML email.
         *
         */
        $tmp_msg = '';
        foreach($this->oLog_output_ARRAY as 
        	$key => $oLog)
        {

            if(is_object($oLog)){

                /**
		         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		         * Get fixed length 
		         * log data. 
                 *
            	 */
                $tmp_transactionTime = $oLog->get_transactionTime();

                $tmp_runTime = $oLog->get_runTime();
                $tmp_runTime = '[rtime ' . $tmp_runTime . ' secs]';

                /**
		         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		         * Get variable length 
		         * (chunk to email max 
		         * char width) log data. 
                 *
            	 */
                $tmp_chunkstr_raw = '';
                $tmp_classMethod_raw = trim($oLog->get_classMethod());

                if($tmp_classMethod_raw == ''){

                    $tmp_runFile_raw = $oLog->get_runFile();

                    if($tmp_runFile_raw != ''){

                        $tmp_chunkstr_raw .= '[file ' . $tmp_runFile_raw . ']';

                    }

                }else{

                    if($tmp_classMethod_raw != ''){

                        $tmp_chunkstr_raw .= '[mthd ' . $tmp_classMethod_raw . ']';

                    }

                }

                $tmp_lineNumber_raw = $oLog->get_lineNumber();

                if($tmp_lineNumber_raw != ''){

                    $tmp_chunkstr_raw .= ' [lnum ' . $tmp_lineNumber_raw . '] ';

                }

                $tmp_logMsg_raw = $oLog->get_logMsg();
                $tmp_chunkstr_raw .= $tmp_logMsg_raw;

                /**
		         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		         * Prep chunk and main.
                 *
            	 */
                $tmp_HTML_chunk_output_ARRAY = $this->return_HTML_EMAIL_chunk_ARRAY(
                	                                  $tmp_chunkstr_raw, 
                	                                  53);

                /**
		         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		         * Add object data 
		         * to output string. 
                 *
            	 */
                $tmp_log_str_ARRAY[] = '<tr>
                                <td align="left" style="text-align: left;">' . 
                                '<div style="font-family:Arial, Helvetica, ' . 
                                'sans-serif; font-size:15px; line-height:20px; ' . 
                                'border-top: 2px solid #FFF;"><span style=' . 
                                '"color: #000; font-weight: bold;">' . 
                                $tmp_transactionTime . '</span></div></td>
                                <td align="left" style="text-align: left;">' . 
                                '<div style="font-family:Arial, Helvetica, ' . 
                                'sans-serif; font-size:15px; line-height:18px; ' . 
                                'border-bottom: 0px solid #FFF;"><span style=' . 
                                '"color: #F90000; line-height: 20px;">' . 
                                $tmp_runTime . '</span></div></td>
                                <td align="left" style="text-align: left;">' . 
                                '<div style="text-align: left; font-family:' . 
                                'Arial, Helvetica, sans-serif; font-size:15px; ' . 
                                'line-height:18px; border-bottom: 0px solid ' . 
                                '#FFF;"><span style="line-height: 20px;">' . 
                                $tmp_HTML_chunk_output_ARRAY[0] . 
                                '</span></div></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="left" style="text-align: ' . 
                                'left;"><div style="text-align:left; font-family:' . 
                                'Arial, Helvetica, sans-serif; font-size:15px; ' . 
                                'line-height:16px; border-bottom: 6px solid #FFF;">' . 
                                '<span style="line-height: 20px;">' . 
                                $tmp_HTML_chunk_output_ARRAY[1] . 
                                '</span></div></td>
                            </tr>';

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $tmp_crnrstn_style      = 'style="color:#D0D0D0; text-shadow: ' . 
         *                           '1px 1px 2px #666666, 0 0 1em #a09898, ' . 
         *                           '0 0 0.2em #423f3f;"';
         * $tmp_crnrstn_R_style    = 'style="color:#F90000; text-shadow: ' . 
         *                           '1px 1px 2px #931515, 0 0 1em #efa5a5, ' . 
         *                           '0 0 0.2em #8d8d8d;"';
         * $tmp_lightsaber_style   = 'style="color:#0066CC; font-weight:bold; ' . 
         *                           'text-decoration:none; text-shadow: ' . 
         *                           '1px 1px 2px #10569c, 0 0 1em #9599cd, ' . 
         *                           '0 0 0.2em #1728cb;"';
         *
         *
         * 5 :: Friday, July 19, 2024 @ 1303 hrs.
         *
         */

        $tmp_crnrstn_style     = $this->return_dom_style_tag('crnrstn_span', '#FFF');
        $tmp_crnrstn_R_style   = $this->return_dom_style_tag('crnrstn_R_span', '#FFF');
        $tmp_lightsaber_style  = $this->return_dom_style_tag('lightsaber_span', '#FFF');
        $tmp_rdma_style        = $this->return_dom_style_tag('rdma_span', '#FFF');
        $tmp_soap_style        = $this->return_dom_style_tag('soap_span', '#FFF');

        if(count($tmp_log_str_ARRAY) < 1){

            if(isset($this->log_silo_profile)){

                $tmp_condition = ' but, the restriction of log ' . 
                                 'recording to the silo profile, (int) ' . 
                                 $this->log_silo_profile . 
                                 ', seems to have reduced <span ' . 
	                             $tmp_crnrstn_style . '>C<span ' . 
	                             $tmp_crnrstn_R_style . 
	                             '>R</span>NRSTN ::</span> <span ' . 
	                             $tmp_lightsaber_style . 
	                             '>Lightsaber</span> <span ' . 
	                             $tmp_rdma_style . 
	                             '>RoCEv2</span> <span ' . 
	                             $tmp_soap_style . 
	                             '>SOAP</span> Services ' . 
	                             'Layer (CLR-SSL) ' . 
                                 'trace output activity to NULL';

            }else{

                $tmp_condition = ' but, there appears to be no ' . 
                                 '<span ' . 
	                             $tmp_crnrstn_style . '>C<span ' . 
	                             $tmp_crnrstn_R_style . 
	                             '>R</span>NRSTN ::</span> <span ' . 
	                             $tmp_lightsaber_style . 
	                             '>Lightsaber</span> <span ' . 
	                             $tmp_rdma_style . 
	                             '>RoCEv2</span> <span ' . 
	                             $tmp_soap_style . 
	                             '>SOAP</span> Services ' . 
	                             'Layer (CLR-SSL) ' . 
                                 'trace output log data activity';

            }

            if($this->get_crnrstn('R_debug_mode') < 2){

                $tmp_msg = '** The <span ' . 
                           $tmp_crnrstn_style . '>C<span ' . 
                           $tmp_crnrstn_R_style . 
                           '>R</span>NRSTN ::</span> <span ' . 
                           $tmp_lightsaber_style . 
                           '>Lightsaber</span> <span ' . 
                           $tmp_rdma_style . 
                           '>RoCEv2</span> <span ' . 
                           $tmp_soap_style . 
                           '>SOAP</span> Services ' . 
                           'Layer (CLR-SSL) configuration ' . 
                           'debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" prevents aggregation of log trace data. **';

            }else{

                $tmp_msg = '** The <span ' . 
                           $tmp_crnrstn_style . '>C<span ' . 
                           $tmp_crnrstn_R_style . 
                           '>R</span>NRSTN ::</span> <span ' . 
                           $tmp_lightsaber_style . 
                           '>Lightsaber</span> <span ' . 
                           $tmp_rdma_style . 
                           '>RoCEv2</span> <span ' . 
                           $tmp_soap_style . 
                           '>SOAP</span> Services ' . 
                           'Layer (CLR-SSL) configuration ' . 
                           'debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" allows aggregation of log trace data' . 
                           $tmp_condition . '. **';

            }

            $tmp_msg = '<div style="font-family:Arial, ' . 
                       'Helvetica, sans-serif; font-size:15px; ' . 
                       'line-height:23px;">' . 
                       $tmp_msg . '</div>';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string data for 
             * HTML email. 
             *
             */
            return $tmp_msg;

        }else{

            $tmp_log_cnt = count($tmp_log_str_ARRAY);
            $tmp_buffer_delta = $tmp_log_cnt - $this->maximum_email_log_trace;

            if($tmp_buffer_delta < 0){

                /**
	             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
	             * HTML output 
	             * all log data. 
	             *
	             */
                foreach($tmp_log_str_ARRAY as 
                	$key => $html_str_section)
                {

                    $tmp_msg .= $html_str_section;

                }

            }else{

                /**
	             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
	             * Only HTML output 
	             * trailing log data. 
	             *
	             */
                foreach($tmp_log_str_ARRAY as 
                	$key => $html_str_section)
                {

                    if($key > $tmp_buffer_delta){

                        $tmp_msg .= $html_str_section;

                    }

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string data for 
             * HTML email. 
             *
             */
            return $tmp_msg;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_log_str_EMAIL_TEXT()
    {

        $tmp_log_str_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Build log trace 
         * string data for 
         * text email. 
         *
         */
        $tmp_msg = '';
        foreach($this->oLog_output_ARRAY as 
        	$key => $oLog)
        {

            if(is_object($oLog)){

                /**
		         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
		         * Get fixed 
		         * length log data. 
                 *
            	 */
                $tmp_msg .= $oLog->get_transactionTime();

                $tmp_runTime = $oLog->get_runTime();
                $tmp_msg .= ' [rtime ' . $tmp_runTime . ' secs]';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Get variable 
                 * length log data. 
                 *
                 */
                $tmp_classMethod_raw = trim($oLog->get_classMethod());

                if($tmp_classMethod_raw == ''){

                    $tmp_runFile_raw = $oLog->get_runFile();
                    if($tmp_runFile_raw != ''){

                        $tmp_msg .= ' [file ' . $tmp_runFile_raw . ']';

                    }

                }else{

                    if($tmp_classMethod_raw != ''){

                        $tmp_msg .= ' [mthd ' . $tmp_classMethod_raw . ']';

                    }

                }

                $tmp_lineNumber_raw = $oLog->get_lineNumber();
                if($tmp_lineNumber_raw != ''){

                    $tmp_msg .= ' [lnum ' . $tmp_lineNumber_raw . '] ';

                }

                $tmp_logMsg_raw = $oLog->get_logMsg();
                $tmp_log_str_ARRAY[] = $tmp_logMsg_raw . '

';
            }

        }

        if(count($tmp_log_str_ARRAY) < 1){

            if(isset($this->log_silo_profile)){

                $tmp_condition = ' but, the restriction of log ' . 
                                 'recording to the silo profile, (int) ' . 
                                 $this->log_silo_profile . 
                                 ', seems to have reduced ' . 
                                 'CRNRSTN :: Lightsaber RoCEv2 ' . 
                                 'SOAP Services Layer (CLR-SSL) ' . 
                                 'trace output activity to NULL';

            }else{

                $tmp_condition = ' but, there appears to be no ' . 
                                 'CRNRSTN :: Lightsaber RoCEv2 ' . 
                                 'SOAP Services Layer (CLR-SSL) ' . 
                                 'trace output log data activity';

            }

            if($this->get_crnrstn('R_debug_mode') < 2){

                $tmp_msg = '** The CRNRSTN :: Lightsaber RoCEv2 ' . 
                           'SOAP Services Layer (CLR-SSL) ' . 
                           'configuration file debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" prevents aggregation of log trace data. **';

            }else{

                $tmp_msg = '** The CRNRSTN :: Lightsaber RoCEv2 ' . 
                           'SOAP Services Layer (CLR-SSL) ' . 
                           'configuration file debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" allows aggregation of log trace data' . 
                           $tmp_condition . '. **';

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string data for 
             * text email. 
             *
             */
            return $tmp_msg;

        }

        $tmp_log_cnt = count($tmp_log_str_ARRAY);
        $tmp_buffer_delta = $tmp_log_cnt - $this->maximum_email_log_trace;

        if($tmp_buffer_delta < 0){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * TEXT output all 
             * log data. 
             *
        	 */
            foreach($tmp_log_str_ARRAY as 
            	$key => $html_str_section)
            {

                $tmp_msg .= $html_str_section;

            }

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Only TEXT output 
             * trailing log data. 
             *
        	 */
            foreach($tmp_log_str_ARRAY as 
            	$key => $html_str_section)
            {

                if($key > $tmp_buffer_delta){

                    $tmp_msg .= $html_str_section;

                }

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return log trace 
         * string data for 
         * text email. 
         *
         */
        return $tmp_msg;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_log_str_SCREEN_HTML($visible = true)
    {

        if(!($visible !== false)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string data for 
             * hidden HTML output. 
             *
        	 */
            $output_channel = 'SCREEN_HTML_HIDDEN';
            $tmp_msg = '';
            $tmp_log_out = '';
            $line_break_char = '
';

            foreach($this->oLog_output_ARRAY as 
            	$key => $oLog)
            {

                if(is_object($oLog)){

                    $tmp_log_out .= $oLog->toTextConversion(
                    	                   $line_break_char, 
                    	                   'TEXT', 
                    	                   79);

                }

            }

            if(strlen($tmp_log_out) > 0){

                $tmp_msg = 'Begin log output of ' . 
                           'aggregated activity ' . 
                           'from source requesting [' . 
                           $output_channel . 
                           '] :: Exception Thrown' . 
                           $line_break_char;
                $tmp_msg .= $tmp_log_out;
                $tmp_msg .= 'End log output of ' . 
                            'aggregated activity ' . 
                            'from source requesting [' . 
                            $output_channel . 
                            '] :: Exception Thrown' . 
                            $line_break_char;

            }

            if(strlen($tmp_msg) < 5){

                if(isset($this->log_silo_profile)){

                    $tmp_condition = ' but, the restriction of ' . 
                                     'log recording to the ' . 
                                     'silo profile, (int) ' . 
                                     $this->log_silo_profile . 
                                     ', seems to have reduced ' . 
                                     'C<span style="color:#F90000;">' . 
                                     'R</span>NRSTN :: trace output ' . 
                                     'activity to NULL';

                }else{

                    $tmp_condition = ' but, there appears to be ' . 
                                     'no C<span style="color:#F90000;">' . 
                                     'R</span>NRSTN :: trace output ' . 
                                     'log data activity';

                }

                if($this->get_crnrstn('R_debug_mode') < 2){

                    $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                               'RoCEv2 SOAP Services Layer ' . 
                               '(CLR-SSL) configuration ' . 
                               'file debug mode of "' . 
                               $this->get_crnrstn('R_debug_mode') . 
                               '" prevents aggregation of log trace data. **
';

                }else{

                    $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                               'RoCEv2 SOAP Services Layer ' . 
                               '(CLR-SSL) configuration file ' . 
                               'debug mode of "' . 
                               $this->get_crnrstn('R_debug_mode') . 
                               '" allows aggregation of log trace data' . 
                               $tmp_condition . '. **
';

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string for screen 
             * HTML hidden. 
             *
             */
            return $tmp_msg;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string data for 
             * HTML output. 
             *
        	 */
            $output_channel = 'SCREEN or SCREEN_HTML';
            $tmp_msg = '';
            $tmp_log_out = '';
            $line_break_char = '<br>';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $tmp_crnrstn_style    = 'style="color:#D0D0D0; text-shadow: ' .
             *                         '1px 1px 2px #666666, 0 0 1em #a09898, ' .
             *                         '0 0 0.2em #423f3f;"';
             * $tmp_crnrstn_R_style  = 'style="color:#F90000; text-shadow: ' .
             *                         '1px 1px 2px #931515, 0 0 1em #efa5a5, ' .
             *                         '0 0 0.2em #8d8d8d;"';
             * $tmp_lightsaber_style = 'style="color:#0066CC; font-weight:bold; ' .
             *                         'text-decoration:none; text-shadow: ' .
             *                         '1px 1px 2px #10569c, 0 0 1em #9599cd, ' .
             *                         '0 0 0.2em #1728cb;"';
             *
             *
             * 5 :: Friday, July 19, 2024 @ 1312 hrs.
             *
             */
            $tmp_crnrstn_style     = $this->return_dom_style_tag('crnrstn_span', '#FFF');
            $tmp_crnrstn_R_style   = $this->return_dom_style_tag('crnrstn_R_span', '#FFF');
            $tmp_lightsaber_style  = $this->return_dom_style_tag('lightsaber_span', '#FFF');
	        $tmp_rdma_style        = $this->return_dom_style_tag('rdma_span', '#FFF');
	        $tmp_soap_style        = $this->return_dom_style_tag('soap_span', '#FFF');

            foreach($this->oLog_output_ARRAY as 
            	$key => $oLog)
            {

                if(is_object($oLog)){

                    $tmp_log_out .= $oLog->toTextConversion(
                    	            $line_break_char, 
                    	            'HTML', 
                    	            110);

                }

            }

            if(strlen($tmp_log_out) > 0){

                $tmp_msg = '<strong>Begin log output of ' . 
                           'aggregated activity from ' . 
                           'source requesting[' . 
                           $output_channel . 
                           '] :: Exception Thrown</strong>';
                $tmp_msg .= '<div style="font-family:Arial, Helvetica, ' . 
                           'sans-serif; font-size:15px; ' . 
                           'line-height:23px; padding:10px;">' . 
                           $tmp_log_out . '</div>';
                $tmp_msg .= '<strong>End log output of ' . 
                            'aggregated activity ' . 
                            'from source requesting [' . 
                            $output_channel . 
                            '] :: Exception Thrown</strong>' . 
                            $line_break_char;

            }

            if(strlen($tmp_msg) < 5){

                if(isset($this->log_silo_profile)){

                    $tmp_condition = ' but, the restriction of ' . 
                                     'log recording to the silo profile, (int) ' . 
                                     $this->log_silo_profile . 
                                     ', seems to have reduced ' . 
                                     '<span ' . 
		                             $tmp_crnrstn_style . '>C<span ' . 
		                             $tmp_crnrstn_R_style . 
		                             '>R</span>NRSTN ::</span> <span ' . 
		                             $tmp_lightsaber_style . 
		                             '>Lightsaber</span> <span ' . 
		                             $tmp_rdma_style . 
		                             '>RoCEv2</span> <span ' . 
		                             $tmp_soap_style . 
		                             '>SOAP</span> Services ' . 
		                             'Layer (CLR-SSL) ' . 
	                                 'trace output activity to NULL';

                }else{

                    $tmp_condition = ' but, there appears to be no ' . 
                                     '<span ' . 
		                             $tmp_crnrstn_style . '>C<span ' . 
		                             $tmp_crnrstn_R_style . 
		                             '>R</span>NRSTN ::</span> <span ' . 
		                             $tmp_lightsaber_style . 
		                             '>Lightsaber</span> <span ' . 
		                             $tmp_rdma_style . 
		                             '>RoCEv2</span> <span ' . 
		                             $tmp_soap_style . 
		                             '>SOAP</span> Services ' . 
		                             'Layer (CLR-SSL) trace output ' . 
                                     'log data activity';

                }

                if($this->get_crnrstn('R_debug_mode') < 2){

                    $tmp_msg = '** The <span ' . 
                               $tmp_crnrstn_style . '>C<span ' . 
                               $tmp_crnrstn_R_style . 
                               '>R</span>NRSTN ::</span> <span ' . 
                               $tmp_lightsaber_style . 
                               '>Lightsaber</span> <span ' . 
                               $tmp_rdma_style . 
                               '>RoCEv2</span> <span ' . 
                               $tmp_soap_style . 
                               '>SOAP</span> Services ' . 
                               'Layer (CLR-SSL) configuration ' . 
                               'file debug mode of "' . 
                               $this->get_crnrstn('R_debug_mode') . 
                               '" prevents aggregation of log trace data. **
';

                }else{

                    $tmp_msg = '** The <span ' . 
                               $tmp_crnrstn_style . '>C<span ' . 
                               $tmp_crnrstn_R_style . 
                               '>R</span>NRSTN ::</span> <span ' . 
                               $tmp_lightsaber_style . 
                               '>Lightsaber</span> <span ' . 
                               $tmp_rdma_style . 
                               '>RoCEv2</span> <span ' . 
                               $tmp_soap_style . 
                               '>SOAP</span> Services ' . 
                               'Layer (CLR-SSL) configuration ' . 
                               'file debug mode of "' . 
                               $this->get_crnrstn('R_debug_mode') . 
                               '" allows aggregation of log trace data' . 
                               $tmp_condition . '. **
';
                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace 
             * string data for 
             * SCREEN or SCREEN_HTML. 
             *
             */
            return '<div style="font-family:Arial, Helvetica, ' . 
                   'sans-serif; font-size:15px; ' . 
                   'line-height:23px; padding:10px;">' . 
                   $tmp_msg . '</div>';

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_log_str_SCREEN_TEXT()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return log trace 
         * string data for 
         * screen text output. 
         *
    	 */
        $output_channel  = 'SCREEN_TEXT';
        $tmp_msg         = '';
        $tmp_log_out     = '';
        $line_break_char = '
';

        foreach($this->oLog_output_ARRAY as 
        	$key => $oLog)
        {

            if(is_object($oLog)){

                $tmp_log_out .= $oLog->toTextConversion(
                	                   $line_break_char, 
                	                   'SCREEN_TEXT', 
                	                   74);

            }

        }

        $tmp_log_out = ltrim($tmp_log_out, '
');

        if(strlen($tmp_log_out) > 0){

            /**
             * $tmp_msg = 'Begin log output of ' . 
             *            'aggregated activity from ' . 
             *            'source requesting [' . 
             *            $output_channel . 
             *            '] :: Exception Thrown' . 
             *            $line_break_char;
             *
             */
            $tmp_msg = $tmp_log_out;
            /**
             * $tmp_msg .= 'End log output of ' . 
             *             'aggregated activity from ' . 
             *             'source requesting [' . 
             *             $output_channel . 
             *             '] :: Exception Thrown' . 
             *             $line_break_char;
             *
             */

        }

        if(strlen($tmp_msg) < 5){

            if(isset($this->log_silo_profile)){

                $tmp_condition = ' but, the restriction of log ' . 
                                 'recording to the silo profile, (int) ' . 
                                 $this->log_silo_profile . 
                                 ', seems to have reduced ' . 
                                 '<span ' . 
                                 $tmp_crnrstn_style . '>C<span ' . 
                                 $tmp_crnrstn_R_style . 
                                 '>R</span>NRSTN ::</span> <span ' . 
                                 $tmp_lightsaber_style . 
                                 '>Lightsaber</span> <span ' . 
                                 $tmp_rdma_style . 
                                 '>RoCEv2</span> <span ' . 
                                 $tmp_soap_style . 
                                 '>SOAP</span> Services ' . 
                                 'Layer (CLR-SSL) trace output ' . 
                                 'activity to NULL';

            }else{

                $tmp_condition = ' but, there appears to be no ' . 
                                 '<span ' . 
                                 $tmp_crnrstn_style . '>C<span ' . 
                                 $tmp_crnrstn_R_style . 
                                 '>R</span>NRSTN ::</span> <span ' . 
                                 $tmp_lightsaber_style . 
                                 '>Lightsaber</span> <span ' . 
                                 $tmp_rdma_style . 
                                 '>RoCEv2</span> <span ' . 
                                 $tmp_soap_style . 
                                 '>SOAP</span> Services ' . 
                                 'Layer (CLR-SSL) trace output log ' . 
                                 'data activity';

            }

            if($this->get_crnrstn('R_debug_mode') < 2){

                $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                           'RoCEv2 SOAP Services Layer ' . 
                           '(CLR-SSL) configuration file ' . 
                           'debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" prevents aggregation of log trace data. **
';

            }else{

                $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                           'RoCEv2 SOAP Services Layer ' . 
                           '(CLR-SSL) configuration file ' . 
                           'debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" allows aggregation of log trace data' . 
                           $tmp_condition . '. **
';

            }

        }

        return $tmp_msg;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_log_str_ERROR_LOG()
    {

        $tmp_log_str_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return log trace string data 
         * for the PHP error_log() 
         * input parameter. 
         *
         */
        $tmp_msg = '';
        foreach($this->oLog_output_ARRAY as 
        	$key => $oLog)
        {

            if(is_object($oLog)){

                $tmp_log_str_ARRAY[] = $oLog->toTextConversion(
                	                          NULL, 
                	                          'ERROR_LOG', 
                	                          0, 
                	                          false);

            }

        }

        if(count($tmp_log_str_ARRAY) < 1){

            if(isset($this->log_silo_profile)){

                $tmp_condition = ' but, the restriction of ' . 
                                 'log recording to the ' . 
                                 'silo profile, (int) ' . 
                                 $this->log_silo_profile . 
                                 ', seems to have reduced ' . 
                                 'CRNRSTN :: Lightsaber RoCEv2 ' . 
                                 'SOAP Services Layer (CLR-SSL) ' . 
                                 'trace output activity to NULL';

            }else{

                $tmp_condition = ' but, there appears to be no ' . 
                                 'CRNRSTN :: Lightsaber RoCEv2 ' . 
                                 'SOAP Services Layer (CLR-SSL) ' . 
                                 'trace output log data activity';

            }

            if($this->get_crnrstn('R_debug_mode') < 2){

                $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                           'RoCEv2 SOAP Services Layer ' . 
                           '(CLR-SSL) configuration ' . 
                           'file debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" prevents aggregation of ' . 
                           'log trace data. **';

            }else{

                $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                           'RoCEv2 SOAP Services Layer ' . 
                           '(CLR-SSL) configuration file ' . 
                           'debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" allows aggregation of log trace data' . 
                           $tmp_condition . '. **';

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace string data 
             * for PHP native error_log() output. 
             *
             */
            return $tmp_msg;

        }else{

            $tmp_log_cnt = count($tmp_log_str_ARRAY);
            $tmp_buffer_delta = $tmp_log_cnt - $this->maximum_email_log_trace;

            if($tmp_buffer_delta < 0){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Output all. 
	             *
	             */
                foreach($tmp_log_str_ARRAY as 
                	$key => $html_str_section)
                {

                    $tmp_msg .= $html_str_section;

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Only output trailing. 
                 *
            	 */
                foreach($tmp_log_str_ARRAY as 
                	$key => $html_str_section)
                {

                    if($key > $tmp_buffer_delta){

                        $tmp_msg .= $html_str_section;

                    }

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return log trace string data 
             * for PHP native error_log() output. 
             *
             */
            return $tmp_msg;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_log_str_FILE($line_wrap)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return log trace 
         * string data for 
         * custom file output. 
         *
    	 */
        $tmp_msg         = '';
        $line_break_char = '
';

        foreach($this->oLog_output_ARRAY as 
        	$key => $oLog)
        {

            if(is_object($oLog)){

                $tmp_msg .= $oLog->toTextConversion(
                	               $line_break_char, 
                	               'TEXT', 
                	               $line_wrap);

            }

        }

        $tmp_condition='';
        $tmp_msg = trim($tmp_msg);
        if(strlen($tmp_msg) < 5){

            if(isset($this->log_silo_profile)){

/**
 *                if($pipe_pos !== false){
 *
 *                    $tmp_silo_str = '';
 *                    $tmp_silo_array = explode('|', $this->log_silo_profile);
 *                    $tmp_cnt = sizeof($tmp_silo_array);
 *                    for ($i = 0; $i < $tmp_cnt; $i++){
 *                        $tmp_silo_str .= $tmp_silo_array[$i] . ' and ';
 *                    }
 *
 *                    //
 *                    // STRIP TRAILING "AND"
 *                    $tmp_silo_str = rtrim($tmp_silo_str, ' and ');
 *
 *                    $tmp_condition = ' but, the restriction of log ' . 
 *                                     'recording to the silos of ' . 
 *                                     $tmp_silo_str . 
 *                                     ' seems to have reduced ' . 
 *                                     'CRNRSTN :: trace output activity to NULL';
 *
 *                }else{
 *
 */

                $tmp_condition = ' but, the restriction of log ' . 
                                 'recording to the silo profile, (int) ' . 
                                 $this->log_silo_profile . ', 
                                 seems to have reduced ' . 
                                 'CRNRSTN :: Lightsaber ' . 
                           		 'RoCEv2 SOAP Services Layer ' . 
                           		 '(CLR-SSL) trace output activity to NULL';

                //}

            }else{

                $tmp_condition = ' but, there appears to be no ' . 
                                 'CRNRSTN :: Lightsaber ' . 
	                             'RoCEv2 SOAP Services Layer ' . 
	                             '(CLR-SSL) trace output log data activity';

            }

            if($this->get_crnrstn('R_debug_mode') < 2){

                $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                           'RoCEv2 SOAP Services Layer ' . 
                           '(CLR-SSL) configuration ' . 
                           'file debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" prevents aggregation of ' . 
                           'log trace data. **';

            }else{

                $tmp_msg = '** The CRNRSTN :: Lightsaber ' . 
                           'RoCEv2 SOAP Services Layer ' . 
                           '(CLR-SSL) configuration ' . 
                           'file debug mode of "' . 
                           $this->get_crnrstn('R_debug_mode') . 
                           '" allows aggregation of ' . 
                           'log trace data' . 
                           $tmp_condition . '. **';

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return log trace string 
         * data for output to file. 
         *
         */
        return $tmp_msg;

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

        $pattern_array[0] = $pattern;
        $replacement_array[0] = $replacement;

        $original_str = str_replace(
        	            $pattern_array, 
        	            $replacement_array, 
        	            $original_str);

        return $original_str;

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