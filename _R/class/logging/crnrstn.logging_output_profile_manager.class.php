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
 * CLASS DEFINITION :: crnrstn_logging_output_profile_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, October 26, 2020 @ 2054 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Multi-
 *                     Channel Logging Output
 *                     Profile Manager
 * DESCRIPTION      :: The advanced CRNRSTN ::
 *                     Logging Services Layer
 *                     Logging Object Generation
 *                     Manager for the multi-
 *                     channel logging output
 *                     profile objects of the
 *                     CRNRSTN :: Lightsaber
 *                     SOAP Services Logging
 *                     Services Layer.
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
 *                     Tuesday, July 2, 2024 @ 0804 hrs.
 *                     Last Modified: Saturday, March 14, 2026 @ 0311 hrs.
 *                     
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
class crnrstn_logging_output_profile_manager extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_logging_oprofile_manager 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Wednesday, March 11, 2026 @ 2050 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed the public function 
     *       sync_to_environment() in preparation
     *       for object inheritance refactoring.
     *       5 :: Monday, March 16, 2026 @ 0344 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed private static 
     *       $config_serial to private 
     *       static $R_data.
     *       5 :: Sunday, June 14, 2026 @ 1239 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed class 
     *       crnrstn_logging_output_profile_manager to 
     *       crnrstn_logging_output_profile_manager, and 
     *       changed the file name from 
     *       crnrstn.logging_oprofile_manager.class.php 
     *       to crnrstn.logging_output_profile_manager.class.php. 
     *       5 :: Saturday, August 1, 2026 @ 0008 hrs.
     *
     */
    private $R_data;

    protected $env_key;
    protected $resource_key;
    private static $config_serial;

    protected $oLog_profiles_ARRAY = array();
    protected $log_profiles_ARRAY = array();
    protected $logging_profile_pack;

    protected $profile_endpoint_criteria_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function __construct($sys_logging_profile_pack)
    {

        /* $sys_logging_profile_pack['sys_logging_profile_ARRAY'] = ARRAY[$this->hash($this->R_data['R_cluster_id'])][self::$resource_key];
         * $sys_logging_profile_pack['sys_logging_meta_ARRAY'] = ARRAY[$this->hash($this->R_data['R_cluster_id'])][self::$resource_key];
         * $sys_logging_profile_pack['sys_logging_wcr_ARRAY'] = ARRAY[$this->hash($this->R_data['R_cluster_id'])][CRNRSTN_LOG_ALL];
         *
         */

        $this->R_data['R_cluster_id'] = $this->get_crnrstn('R_cluster_id');

        /* TODO :: Hold on a sec for doing 
         *         this object array. 
         *         5 :: Thursday, May 25, 2023 @ 1450 hrs.
         *
         *         $this->oCRNRSTN_WCR_ARRAY = $this->return_wcr_ARRAY();
         *
         */

        $this->oCRNRSTN_WCR_ARRAY = array();

        $this->build_sys_wcr_profile_criteria();

        $this->load_system_profiles();

        $this->logging_profile_pack = $sys_logging_profile_pack;

        $this->spool_up_logging_profiles();

        /* $this->oLog_output_ARRAY[] = $this->error_log('Instantiating logging output ' . 
         *                                     'profile manager within this environment.');
         *
         */

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_wcr_ARRAY()
    {

        return $this->oCRNRSTN_WCR_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_olog_profile($profile_key)
    {

        foreach($this->oLog_profiles_ARRAY as 
            $key => $oLog_profile)
        {

            if($oLog_profile->isValid){

                error_log(__LINE__ . 
                    ' env VALID log profile [' . 
                    $profile_key . '][' . 
                    $key . '][' . 
                    $oLog_profile->logging_profile . 
                    '].');

                if($profile_key == $oLog_profile->logging_profile){

                    return $oLog_profile;

                }

            }else{

                error_log(__LINE__ . 
                    ' env !INVALID! log profile [' . 
                    $profile_key . '][' . 
                    $key . '][' . 
                    $oLog_profile->logging_profile . 
                    '].');

            }

        }

        return false;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0620 hrs.
     *
     */
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
    function notification_go(
             $tmp_exception_output_str, 
             $syslog_level, 
             $exception_method, 
             $exception_runtime, 
             $exception_systemtime,
             $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile_manager->notification_go 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0100 hrs.
         *
         */

        foreach($this->oLog_profiles_ARRAY as 
            $key => $oLog_profile)
        {

            if($this->is_bit_set($oLog_profile->logging_profile) == true){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
                 * TITLE :: Arcade Fire - No Cars Go
                 *
                 * 2020[?] 
                 * More accurate source 
                 * needed to get the 
                 * date for this pre-
                 * Lightsaber comment. 
                 *
                 */
                if(!$oLog_profile->no_cars_tification_go(
                                   $tmp_exception_output_str, 
                                   $syslog_level, 
                                   $exception_method, 
                                   $exception_runtime, 
                                   $exception_systemtime, 
                                   $exception_obj))
                {

                    error_log('Error processing the ' . 
                        'following message through ' . 
                        'logging profile (int) ' . 
                        $oLog_profile->logging_profile . '. :: ' . 
                        $tmp_exception_output_str);

                    die();

                }

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function build_sys_wcr_profile_criteria()
    {

        $this->profile_endpoint_criteria_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Email. 
         *
         */
        $log_profile_key = CRNRSTN_LOG_EMAIL;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['EMAIL_PROTOCOL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['TRY_OTHER_EMAIL_METHODS_ON_ERR'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_SERVER'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_PORT_OUTGOING'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_USERNAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_PASSWORD'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_TIMEOUT'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_KEEPALIVE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_SECURE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTOTLS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTOTLS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['DIBYA_SAHOO_SSL_CERT_BYPASS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SENDMAIL_PATH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['USE_SENDMAIL_OPTIONS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ALLOW_EMPTY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FROM_NAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['REPLYTO_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CC_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['BCC_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['RECIPIENTS_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FROM_EMAIL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['REPLYTO_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CC_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['BCC_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['RECIPIENTS_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SUBJECT_LINE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_BODY_HTML'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_BODY_TEXT'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WORDWRAP'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ISHTML'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['PRIORITY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CHARSET'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_ENCODING'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['DUP_SUPPRESS'] = 1;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Email proxy. 
         *
         */
        $log_profile_key = CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_AUTH_KEY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_USERNAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_PASSWORD'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_ENCRYPTION_KEY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_SECRET_KEY_CONNECTION'] = 1;

        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOA_NAMESPACE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WSDL_URI'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WSDL_CACHE_TTL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['NUSOAP_USECURL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_CIPHER'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_OPTIONS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_HMAC_ALG'] = 1;

        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['EMAIL_PROTOCOL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['TRY_OTHER_EMAIL_METHODS_ON_ERR'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_SERVER'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_PORT_OUTGOING'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_USERNAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_PASSWORD'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_TIMEOUT'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_KEEPALIVE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_SECURE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTOTLS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTOTLS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['DIBYA_SAHOO_SSL_CERT_BYPASS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SENDMAIL_PATH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['USE_SENDMAIL_OPTIONS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ALLOW_EMPTY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FROM_NAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['REPLYTO_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CC_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['BCC_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['RECIPIENTS_NAME_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FROM_EMAIL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['REPLYTO_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CC_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['BCC_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['RECIPIENTS_EMAIL_PIPED'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SUBJECT_LINE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_BODY_HTML'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_BODY_TEXT'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WORDWRAP'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ISHTML'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['PRIORITY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CHARSET'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_ENCODING'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['DUP_SUPPRESS'] = 1;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * File. 
         *
         */
        $log_profile_key = CRNRSTN_LOG_FILE;
        //$this->profile_endpoint_criteria_ARRAY[$log_profile_key]['LOCAL_DIR_PATH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['LOCAL_DIR_FILEPATH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['LOCAL_MKDIR_MODE'] = 1;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * FTP. 
         *
         */
        $log_profile_key = CRNRSTN_LOG_FILE_FTP;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_SERVER'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_USERNAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_PASSWORD'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_PORT'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_TIMEOUT'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_IS_SSL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_USE_PASV'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_USE_PASV_ADDR'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_DISABLE_AUTOSEEK'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_DIR_PATH'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FTP_MKDIR_MODE'] = 1;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Open source. 
         *
         */
        $log_profile_key = CRNRSTN_RESOURCE_OPENSOURCE;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_AUTH_KEY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_USERNAME'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_PASSWORD'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOA_NAMESPACE'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WSDL_URI'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WSDL_CACHE_TTL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['NUSOAP_USECURL'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_ENCRYPTION_KEY'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_SECRET_KEY_CONNECTION'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_CIPHER'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_OPTIONS'] = 1;
        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_HMAC_ALG'] = 1;

        $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ZIPCODE'] = 1;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * XXXXX
         *$log_profile_key = 'XXXXX';
         *$this->profile_endpoint_criteria_ARRAY[$log_profile_key]['PORT'] = 1;
         *$this->profile_endpoint_criteria_ARRAY[$log_profile_key]['USERNAME'] = 1;
         *$this->profile_endpoint_criteria_ARRAY[$log_profile_key]['PASSWORD'] = 1;
         *
         */

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
    private function is_WCR_key(
                     $sys_logging_wcr_ARRAY, 
                     $str)
    {

        /**
         *if(isset($this->oCRNRSTN_WCR_ARRAY)){
         * error_log('[' . 
         *     __LINE__ . '] [' . 
         *     __METHOD__ . 
         *     '] is_WCR_key() TEST NEW !!ARRAY ' . 
         *     'fork against array sizeof > 0, ' . 
         *     'where sizeof=' . 
         *     sizeof($this->oCRNRSTN_WCR_ARRAY[$this->hash($this->R_data['R_cluster_id'])]));
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Can we put this 
         *         array trick everywhere 
         *         it is appropriate? 
         *         Is it faster than -->{ if(count() > 0)...?
         *         5 :: [2026 update] This has now been done.
         *
         * SOURCE :: https://www.php.net/manual/en/language.types.boolean.php
         * COMMENT :: https://www.php.net/manual/en/language.types.boolean.php#78099
         * AUTHOR :: artktec at gmail dot com 
         *
         * This can be a substitute 
         * for count($array) > 0 or !(empty($array)) 
         * to check to see if an array is empty 
         * or not (you would use: !!$array).
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Replaced all occurences 
         *       of sizeof(ARRAY) with 
         *       !!ARRAY within the CLR-SSL, 
         *       but we skipped NuSOAP, and 
         *       we skipped ~4 uses of 
         *       sizeof($array[0][1]) until 
         *       I can do runtime testing.
         *       5 :: Monday, March 16, 2026 @ 0301 hrs.
         */
        if(!!$sys_logging_wcr_ARRAY){

            foreach($sys_logging_wcr_ARRAY as 
                $key0 => $chunkArray0)
            {

                foreach($chunkArray0 as 
                    $key => $oWCR)
                {

                    if($str == $oWCR->return_resource_key()){

                        return $oWCR;

                    }

                }

            }

        }

        return false;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * EMAIL, E@E.COM, FALSE 
     * EMAIL, WCR_KEY, TRUE 
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function oLog_profile_endpoint_update(
                     $profile, 
                     $value, 
                     $oWCR = NULL)
    {

        foreach($this->oLog_profiles_ARRAY as 
            $key => $oLog_profile)
        {

            if($profile == $oLog_profile->return_profile()){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * WCR? 
                 *
                 */
                if(is_object($oWCR)){

                    switch($profile){
                        case CRNRSTN_LOG_EMAIL:

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] Process receive_profile_EMAIL_WCR() ' . 
                                $oLog_profile->return_profile());

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Add CRNRSTN :: WCR data 
                             * to oLog_profile. 
                             *
                             */
                            $oLog_profile->receive_profile_EMAIL_WCR(
                                           $oWCR, 
                                           $value);
                            $oLog_profile->isValid = true;

                        break;
                        case CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL:

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] Run receive_profile_EMAIL_PROXY_WCR() ' . 
                                $oLog_profile->return_profile());

                            $oLog_profile->receive_profile_EMAIL_PROXY_WCR(
                                           $oWCR, 
                                           $value);
                            $oLog_profile->isValid = true;

                        break;
                        case CRNRSTN_LOG_FILE_FTP:

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] Run receive_profile_FTP_WCR() ' . 
                                $oLog_profile->return_profile());

                            $oLog_profile->receive_profile_FTP_WCR(
                                           $oWCR, 
                                           $value);
                            $oLog_profile->isValid = true;

                        break;
                        case CRNRSTN_LOG_FILE:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * error_log('[lnum ' . 
                             *     __LINE__ . '] [mthd ' . 
                             *     __METHOD__ . 
                             *     '] Run receive_profile_FILE_WCR() [' . 
                             *     $value . '] ' . 
                             *     $oLog_profile->return_profile());
                             *
                             */

                            $oLog_profile->receive_profile_FILE_WCR(
                                           $oWCR, 
                                           $value);
                            $oLog_profile->isValid = true;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * error_log('[lnum ' . 
                             *     __LINE__ . '] [mthd ' . 
                             *     __METHOD__ . 
                             *     '] We ran receive_profile_FILE_WCR() [' . 
                             *     $value . 
                             *     '].');
                             *
                             */

                        break;
                        case CRNRSTN_RESOURCE_OPENSOURCE:

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] Run receive_profile_RESOURCE_OPENSOURCE_WCR() ' . 
                                $oLog_profile->return_profile());

                            $oLog_profile->receive_profile_RESOURCE_OPENSOURCE_WCR(
                                           $oWCR, 
                                           $value);
                            $oLog_profile->isValid = true;

                        break;

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Add raw data 
                     * to oLog_profile. 
                     *
                     */
                    switch($profile){
                        case CRNRSTN_LOG_EMAIL:
                        case CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL:

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] Run receive_profile_EMAIL() ' . 
                                $oLog_profile->return_profile());

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Add data 
                             * to oLog_profile. 
                             *
                             */
                            $oLog_profile->receive_profile_EMAIL(
                                           $value, 
                                           'RECIPIENTS_EMAIL_PIPED');
                            $oLog_profile->isValid = true;

                        break;
                        case CRNRSTN_LOG_FILE:

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] Run receive_profile_FILE() ' . 
                                $oLog_profile->return_profile());

                            $oLog_profile->receive_profile_FILE($value);
                            $oLog_profile->isValid = true;

                        break;

                    }

                }

            }

        }

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function consume_init_profile_pack($init_profile_pack)
    {

        /* init_profile_pack_ARRAY ::
         * $init_profile_pack['sys_logging_profile_ARRAY'] = self::$system_logging_output_profile_ARRAY[$this->hash($this->R_data['R_cluster_id'])][CRNRSTN_LOG_ALL];
         * $init_profile_pack['sys_logging_meta_ARRAY'] = self::$sys_logging_meta_ARRAY[$this->hash($this->R_data['R_cluster_id'])][CRNRSTN_LOG_ALL];
         * $init_profile_pack['sys_logging_wcr_ARRAY'] = $this->oCRNRSTN_WCR_ARRAY[$this->hash($this->R_data['R_cluster_id'])][CRNRSTN_LOG_ALL];
         *
         */

        if(isset($init_profile_pack['sys_logging_meta_ARRAY'])){

            foreach($init_profile_pack['sys_logging_meta_ARRAY'] as 
                $key => $value)
            {

                /* error_log('[lnum ' . 
                 *     __LINE__ . '] [mthd ' . 
                 *     __METHOD__ . 
                 *     '] How many meta ' . 
                 *     'data process? [' . 
                 *     $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                 *     '] for data ' . 
                 *     $value);
                 *
                 * error_log('[lnum ' . 
                 *     __LINE__ . '] [mthd ' . 
                 *     __METHOD__ . 
                 *     '] (int) ' . 
                 *     print_r($init_profile_pack['sys_logging_profile_ARRAY'][$key], true) . 
                 *     ' Handle meta value ' . 
                 *     print_r($value, true));
                 *
                 */

                switch($init_profile_pack['sys_logging_profile_ARRAY'][$key]){
                    case CRNRSTN_LOG_EMAIL:

                        $pos_at = strpos($value, '@');

                        /**
                         * error_log('[lnum ' . 
                         *     __LINE__ . '] [mthd ' . 
                         *     __METHOD__ . 
                         *     '] [' . 
                         *     get_class() . 
                         *     '] ping. wcr=' . 
                         *     print_r($this->oCRNRSTN_WCR_ARRAY, true));
                         *
                         */

                        if($pos_at !== false){

/*
 *                            if($this->is_WCR_key($value)){
 *
 *                                error_log('[lnum ' . 
 *                                    __LINE__ . '] [mthd ' . 
 *                                    __METHOD__ . 
 *                                    '] [' . get_class() . '] ping.');
 *
 *                                //
 *                                // Process for CRNRSTN :: WCR.
 *                                $tmp_oWCR = $this->is_WCR_key($value);
 *                                if(is_array($tmp_oWCR)){
 *
 *                                    foreach($tmp_oWCR as 
 *                                        $wcr_key => $oWCR)
 *                                    {
 *
 *                                        if($value == $oWCR->return_resource_key()){
 *
 *                                            //
 *                                            // Process for CRNRSTN :: WCR.
 *                                            error_log(__LINE__ . ' env - PROCESS[' . $init_profile_pack['sys_logging_meta_ARRAY'][$key] . '] FOR WCR ' . $value);
 *                                            $this->oLog_profile_endpoint_update($init_profile_pack['sys_logging_meta_ARRAY'][$key], $value, $oWCR);
 *
 *                                        }
 *
 *                                    }
 *
 *                                }
 *
 *                                error_log('[lnum ' . 
 *                                    __LINE__ . '] [mthd ' . 
 *                                    __METHOD__ . 
 *                                    '] [' . get_class() . '] ping.');
 *
 *                            }
 *
 */
                            //else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Process for 
                             * EMAIL address. 
                             *
                             * error_log(__LINE__ . 
                             *     ' [mthd ' . 
                             *     __METHOD__ . '] Process [' . 
                             *     $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                             *     '] for EMAIL_ADDR ' . 
                             *     $value);
                             *
                             */
                            $this->oLog_profile_endpoint_update(
                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                   $value);

                            //}

                        }else{

                            $tmp_oWCR = $this->is_WCR_key($init_profile_pack['sys_logging_wcr_ARRAY'], $value);

                            if(is_object($tmp_oWCR)){

                                error_log('[lnum ' . 
                                    __LINE__ . '] [mthd ' . 
                                    __METHOD__ . '] Process [' . 
                                    $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                                    '] for WCR ' . 
                                    $value);

                                $this->oLog_profile_endpoint_update(
                                       $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                       $value, 
                                       $tmp_oWCR);

                            }

                        }

                    break;
                    case CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL:

                        $pos_at = strpos($value, '@');
                        if($pos_at !== false){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Process for 
                             * email address. 
                             *
                             * error_log(__LINE__ . 
                             *     ' [mthd ' . __METHOD__ . 
                             *     '] Process [' . 
                             *     $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                             *     '] for EMAIL_ADDR ' . 
                             *     $value);
                             *
                             */
                            $this->oLog_profile_endpoint_update(
                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                   $value);

                        }else{

                            $tmp_oWCR = $this->is_WCR_key(
                                               $init_profile_pack['sys_logging_wcr_ARRAY'], 
                                               $value);

                            if(is_object($tmp_oWCR)){

                                error_log('[lnum ' . 
                                    __LINE__ . '] [mthd ' . 
                                    __METHOD__ . '] Process [' . 
                                    $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                                    '] for WCR ' . 
                                    $value);

                                $this->oLog_profile_endpoint_update(
                                       $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                       $value, 
                                       $tmp_oWCR);

                            }

                        }

                    break;
                    case CRNRSTN_LOG_FILE:
                    case CRNRSTN_RESOURCE_OPENSOURCE:

                        $tmp_oWCR = $this->is_WCR_key(
                                           $init_profile_pack['sys_logging_wcr_ARRAY'], 
                                           $value);

                        if(is_object($tmp_oWCR)){

                            error_log('[lnum ' . 
                                    __LINE__ . '] [mthd ' . 
                                    __METHOD__ . '] Process [' . 
                                    $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                                    '] for WCR ' . 
                                    $value);
                            $this->oLog_profile_endpoint_update(
                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                   $value, 
                                   $tmp_oWCR);

                        }else{

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . '] Process [' . 
                                $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
                                '] for path ' . 
                                $value);
                            $this->oLog_profile_endpoint_update(
                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                   $value);

                        }

                    break;
/*
 *                     case CRNRSTN_RESOURCE_OPENSOURCE:
 *
 *                        $tmp_oWCR = $this->is_WCR_key(
 *                                           $init_profile_pack['sys_logging_wcr_ARRAY'], 
 *                                           $value);
 *                        if(is_object($tmp_oWCR)){
 *
 *                            error_log('[lnum ' . 
 *                                __LINE__ . '] [mthd ' . 
 *                                __METHOD__ . '] Process[' . 
 *                                $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
 *                                '] for WCR ' . 
 *                                $value);
 *                            $this->oLog_profile_endpoint_update(
 *                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
 *                                   $value, 
 *                                   $tmp_oWCR);
 *
 *                        }else{
 *
 *                            error_log('[lnum ' . 
 *                                __LINE__ . '] [mthd ' . 
 *                                __METHOD__ . '] Process[' . 
 *                                $init_profile_pack['sys_logging_meta_ARRAY'][$key] . 
 *                                '] for PATH ' . 
 *                                $value);
 *                            $this->oLog_profile_endpoint_update(
 *                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
 *                                   $value);
 *
 *                        }
 *
 *                  break;
 *
 */
                    case CRNRSTN_LOG_FILE_FTP:

                        $tmp_oWCR = $this->is_WCR_key(
                                           $init_profile_pack['sys_logging_wcr_ARRAY'], 
                                           $value);

                        if(is_object($tmp_oWCR)){

                            $tmp_wcr_key = $tmp_oWCR->return_resource_key();

                            $this->oLog_profile_endpoint_update(
                                   $init_profile_pack['sys_logging_profile_ARRAY'][$key], 
                                   $value, 
                                   $tmp_oWCR);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Check oWCR for any other 
                             * relevant endpoint data. 
                             *
                             * Detect the oWCR endpoint 
                             * [type=email] from the field 
                             * email_protocol in the WCR 
                             * email template. 
                             *
                             */
                            if(($tmp_oWCR->isset_WCR(
                                           $tmp_wcr_key, 
                                           'EMAIL_PROTOCOL') == true) && 
                                (CRNRSTN_LOG_EMAIL != $init_profile_pack['sys_logging_profile_ARRAY'][$key]))
                            {

                                /**
                                 * error_log('[lnum ' . 
                                 *     __LINE__ . '] [mthd ' . 
                                 *     __METHOD__ . '] Process[WCR] update ' . 
                                 *     'oLog_profile_endpoint_update()' . 
                                 *     '...has EMAIL_PROTOCOL ' . 
                                 *     $tmp_wcr_key);
                                 *
                                 */

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * WCR for the emailing 
                                 * of log trace. 
                                 *
                                 */
                                $this->oLog_profile_endpoint_update(
                                       CRNRSTN_LOG_EMAIL, 
                                       $tmp_wcr_key, 
                                       $tmp_oWCR);

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Detect the WCR endpoint 
                             * [type=FTP] from the field 
                             * ftp_server in the WCR 
                             * FTP template. 
                             *
                             */
                            if(($tmp_oWCR->isset_WCR(
                                           $tmp_wcr_key, 
                                           'FTP_SERVER') == true) && 
                                (CRNRSTN_LOG_FILE_FTP != $init_profile_pack['sys_logging_profile_ARRAY'][$key]))
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * WCR for the FTP-ing of 
                                 * file output log 
                                 * trace data. 
                                 *
                                 */
                                $this->oLog_profile_endpoint_update(
                                       CRNRSTN_LOG_FILE_FTP, 
                                       $tmp_wcr_key, 
                                       $tmp_oWCR);

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Detect the WCR endpoint 
                             * [type=email_proxy] 
                             * from the field ftp_server 
                             * in the WCR email_proxy 
                             * template. 
                             *
                             */
                            if(($tmp_oWCR->isset_WCR($tmp_wcr_key, 'WSDL_URI') == true) && 
                                (CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL != $init_profile_pack['sys_logging_profile_ARRAY'][$key]))
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * WCR for email_proxy of 
                                 * log trace data. 
                                 *
                                 */
                                $this->oLog_profile_endpoint_update(
                                       CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL, 
                                       $tmp_wcr_key, 
                                       $tmp_oWCR);

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Detect WCR endpoint 
                             * [type=file] from 
                             * field local_dir_path 
                             * in WCR file template. 
                             *
                             */
                            if((($tmp_oWCR->isset_WCR($tmp_wcr_key, 'LOCAL_DIR_FILEPATH') == true) || 
                                ($tmp_oWCR->isset_WCR($tmp_wcr_key, 'LOCAL_DIR_,KJIUPATH') == true)) && 
                                (CRNRSTN_LOG_FILE != $init_profile_pack['sys_logging_profile_ARRAY'][$key]))
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * WCR for file write 
                                 * of log trace data. 
                                 *
                                 */
                                $this->oLog_profile_endpoint_update(
                                       CRNRSTN_LOG_FILE, 
                                       $tmp_wcr_key, 
                                       $tmp_oWCR);

                            }

                        }

                    break;

                }

            }

        }else{

            /**
             * error_log('[lnum ' . 
             *     __LINE__ . '] [mthd ' . 
             *     __METHOD__ . 
             *     '] sys_logging_meta_ARRAY not set...');
             *
             */

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function spool_up_logging_profiles()
    {

        foreach($this->log_profiles_ARRAY as 
            $key => $profile)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of 
             * The CRNRSTN :: Lightsaber RoCEv2 
             * SOAP Services Layer (CLR-SSL) Wild 
             * Card Resource (CRNRSTN :: WCR) 
             * Configured Multi-Channel 
             * Logging Output Profile 
             * Class Object. 
             *
             *
             * 5 :: Monday, July 8, 2024 @ 0515 hrs.
             *
             * $tmp_oLoggingProfile = new crnrstn_logging_oprofile(
             *                            $profile, self::$config_serial, 
             *                            $this->profile_endpoint_criteria_ARRAY, 
             *                            $this->oCRNRSTN);
             *
             * $tmp_oLoggingProfile = $this->return_registered_resource(
             *                               'new', 
             *                               'crnrstn_logging_oprofile', 
             *                               $profile, 
             *                               $this->R_data['R_cluster_id'], 
             *                               $this->profile_endpoint_criteria_ARRAY);
             *
             */

            error_log('[mthd ' . 
                __METHOD__ . '] [lnum ' . 
                __LINE__ . '] Compound ointment for $key[' . print_r($key, true) . ']');   
            error_log('[mthd ' . 
                __METHOD__ . '] [lnum ' . 
                __LINE__ . '] Compound ointment for $profile[' . print_r($profile, true) . ']');   
            die();

            // 5 :: Tuesday, July 28, 2026 @ 0357 hrs.
            $this->compound_ointment(
                   'crnrstn_logging_output_profile', 
                   $profile, 
                   $this->R_data['R_cluster_id'], 
                   $this->profile_endpoint_criteria_ARRAY);

            $res_name = 'crnrstn_logging_output_profile';
            if(!($R_resp = _crnrstn_native_resource_registry(
                'return', 
                $this, 
                NULL, 
                $res_name, 
                self::$R_data['R_debug_mode'])))
            {

                $clr_ssl_msg = 'CLR-SSL resource ' . 
                               'initialization failure: ' . 
                               $res_name;
                // 5 :: Sunxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = 'a5ae9de61711d0b7f00f639bfcc45405' . 
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token, 
                         'token_generation_date'   => $token_generation_date, 
                         'request_type'            => __METHOD__, 
                         'code'                    => 200, 
                         'clr_ssl_msg'             => $clr_ssl_msg);
                $this->error_log(
                    $clr_ssl_msg, 
                    \LOG_ALERT, 
                    \E_ERROR, 
                    __LINE__, 
                    __METHOD__, 
                    __FILE__, 
                    $token);

            }

            $mem_ptr = $R_resp['clr_ssl_resource']['memory_pointer'][0];

            error_log('[mthd ' . 
                __METHOD__ . '] [lnum ' . 
                __LINE__ . '] New crnrstn_logging_output_profile $mem_ptr[' . $mem_ptr . '].');
            die();

            $this->oLog_profiles_ARRAY[] = $tmp_oLoggingProfile;

        }

    }

    /**
     * private function objectify_profiles()
     * {
     *
     *    foreach($this->log_profiles_ARRAY as 
     *        $key => $profile)
     *    {
     *
     *        $tmp_oLoggingProfile = new crnrstn_logging_output_profile($profile, $this->R_data['R_cluster_id']);
     *
     *        switch($profile){
     *            case 'DEFAULT':
     *
     *            break;
     *            case 'EMAIL':
     *
     *                $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *                //$tmp_oLoggingProfile->load_EMAIL_endpoint_data();
     *
     *            break;
     *            case 'EMAIL_PROXY':
     *
     *                $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *                $tmp_oLoggingProfile->load_EMAIL_PROXY_endpoint_data();
     *
     *            break;
     *            case 'FILE':
     *
     *                $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *                $tmp_oLoggingProfile->load_FILE_endpoint_data();
     *
     *            break;
     *            case 'SCREEN_TEXT':
     *
     *                $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *                $tmp_oLoggingProfile->load_SCREEN_TEXT_endpoint_data();
     *
     *            break;
     *            case 'SCREEN':
     *            case 'SCREEN_HTML':
     *
     *                $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *                $tmp_oLoggingProfile->load_SCREEN_HTML_endpoint_data();
     *
     *          break;
     *          case 'SCREEN_HTML_HIDDEN':
     *
     *              $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *              $tmp_oLoggingProfile->load_SCREEN_HTML_HIDDEN_endpoint_data();
     *
     *            break;
     *            case 'SPLUNK':
     *
     *                $tmp_oLoggingProfile->consume_logging_profile_pack($profile);
     *
     *                $tmp_oLoggingProfile->load_SPLUNK_endpoint_data();
     *
     *            break;
     *            default:
     *                //
     *                // Also default.
     *
     *            break;
     *
     *        }
     *
     *        $this->oLog_profiles_ARRAY[] = $tmp_oLoggingProfile;
     *
     *    }
     *
     * }
     *
     */

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function load_system_profiles()
    {

        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_ELECTRUM;  // n + 1 Destinations.
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_EMAIL;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_FILE_FTP;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_FILE;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_SCREEN_TEXT;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_SCREEN;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_SCREEN_HTML;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_SCREEN_HTML_HIDDEN;
        $this->log_profiles_ARRAY[] = CRNRSTN_LOG_DEFAULT;
        $this->log_profiles_ARRAY[] = CRNRSTN_RESOURCE_OPENSOURCE;

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