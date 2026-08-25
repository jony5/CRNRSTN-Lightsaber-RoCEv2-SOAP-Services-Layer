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
 * CLASS DEFINITION :: crnrstn_logging_output_profile
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, October 26, 2020 @ 2101 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Wild Card Resource 
 *                     (CRNRSTN :: WCR) Configured 
 *                     Multi-Channel Logging 
 *                     Output Profile 
 * DESCRIPTION      :: This is the advanced multi-
 *                     channel logging services 
 *                     layer output profile 
 *                     (or channel architecture) 
 *                     class object of the CRNRSTN :: 
 *                     Lightsaber RoCEv2 SOAP 
 *                     Services Layer (CLR-SSL). 
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
 *                     Monday, July 29, 2024 @ 0909 hrs.
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
class crnrstn_logging_output_profile extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_logging_oprofile 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Friday, March 13, 2026 @ 1351 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed class 
     *       crnrstn_logging_oprofile to 
     *       crnrstn_logging_output_profile, and 
     *       changed the file name from 
     *       crnrstn.logging_oprofile.class.php 
     *       to crnrstn.logging_output_profile.class.php. 
     *       5 :: Saturday, August 1, 2026 @ 0008 hrs.
     *
     */

    protected $oSoapClient;
    protected $oSoapDataTransportLayer;
    protected $oLog_output_manager;

    public $logging_profile;
    public $isValid = false;

    protected $resource_key;
    protected $config_serial_hash;

    protected $profile_endpoint_criteria_ARRAY = array();
    protected $profile_endpoint_data_ARRAY = array();
    protected $profile_endpoint_set_flag_ARRAY = array();
    protected $wcr_profiles_cnt = 0;

    protected $mail_protocol_flag_ARRAY = array();
    protected $tmp_mail_protocol_options_ARRAY = array('SENDMAIL', 'MAIL', 'QMAIL', 'SMTP');
    protected $tmp_mail_protocol_options_cnt = 4;

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
    function __construct(
             $logging_profile, 
             $config_serial_hash, 
             $profile_endpoint_criteria_ARRAY)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Expire CRNRSTN :: Wild 
         *         Card Resource (WCR) driven 
         *         content with any modification 
         *         of the same to force refresh 
         *         before final output. 
         *
         */

        $this->profile_endpoint_criteria_ARRAY = $profile_endpoint_criteria_ARRAY;
        $this->logging_profile = $logging_profile;
        //$this->resource_key = $resource_key;
        $this->config_serial_hash = $config_serial_hash;

        //$this->active_by_default($logging_profile);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_profile_endpoint_data()
    {

        return $this->profile_endpoint_data_ARRAY;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=u4-PGjwdARg
     * TITLE :: Arcade Fire - No Cars Go (BEST version ever - Pinkpop 2014)
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
     * @access private
     *
     */
    private function no_cars_go_EMAIL_PROXY(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_EMAIL_PROXY 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0104 hrs.
         *
         */

        $data_type_family = 'CRNRSTN::RESOURCE::EMAIL_COMM';
        $tmp_data_tunnel_session_serial = $this->generate_new_key();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of 
         * the CRNRSTN :: Lightsaber 
         * SOAP Services Layer 
         * (CLR-SSL) Decoupled Data 
         * Object Multi-Channel 
         * (MC-DDO) Data Storage 
         * Services Layer 
         * class object. 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2113 hrs.
         *
         * $this->oSoapDataTransportLayer = new crnrstn_decoupled_data_object(
         *                                      $tmp_data_tunnel_session_serial, 
         *                                      'SOAP_DTL_SERIAL');
         *
         */
        $this->oSoapDataTransportLayer = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_decoupled_data_object', 
                                                $tmp_data_tunnel_session_serial, 
                                                'SOAP_DTL_SERIAL');

        $tmp_ISHTML = true;
        $tmp_exception_msg = $exception_obj->getMessage();
        $tmp_exception_linenum = $exception_obj->getLine();

        $this->load_log_output_mgr();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Remain still while 
         * your life is extracted. 
         *
         */
        foreach($this->profile_endpoint_data_ARRAY as 
            $config_version => $chunkArray0)
        {

            foreach($chunkArray0 as 
                $data_attribute => $chunkArray1)
            {

                /**
                 *error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . '] ' . 
                 *    $data_attribute . 
                 *    ' with value size=[' . 
                 *    sizeof($chunkArray1) . '].');
                 *
                 */

                foreach($chunkArray1 as 
                    $content_count => $attribute_content)
                {

                    if(isset($this->profile_endpoint_set_flag_ARRAY[$config_version][$data_attribute][$content_count])){

                        /**
                         *error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . '] [' . 
                         *    sizeof($chunkArray1) . '] $config_version[' . 
                         *    $config_version . '] $data_attribute[' . 
                         *    $data_attribute . '] $content_count[' . 
                         *    $content_count . '] $attribute_content[' . 
                         *    $attribute_content . 
                         *    '].');
                         *
                         */

                        switch($data_attribute){
                            case 'EMAIL_PROTOCOL':

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding to SSDTL ' . 
                                 *    'email, protocol=' . 
                                 *    $attribute_content);
                                 *
                                 */
                                $this->oSoapDataTransportLayer->add(
                                                                trim(strtoupper($attribute_content)), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'SMTP_AUTH':

                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'SMTP_KEEPALIVE':

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding to SSDTL ' . 
                                 *    'email, SMTP_KEEPALIVE=' . 
                                 *    $attribute_content);
                                 *
                                 */
                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'SMTP_AUTOTLS':

                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'SMTP_TIMEOUT':

                                $this->oSoapDataTransportLayer->add(
                                                                (int) $attribute_content, 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'DIBYA_SAHOO_SSL_CERT_BYPASS':

                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'USE_SENDMAIL_OPTIONS':

                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'WORDWRAP':

                                $this->oSoapDataTransportLayer->add(
                                                                (int) $attribute_content, 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'ISHTML':

                                $tmp_ISHTML = (bool) $this->tidy_boolean($attribute_content);

                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $tmp_ISHTML, 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'PRIORITY':

                                $tmp_PRIORITY = $attribute_content;

                                $priority = trim(strtoupper($tmp_PRIORITY));

                                switch($priority){
                                    case '1':
                                    case 1:
                                    case 'HIGH':

                                        $tmp_PRIORITY = 1;

                                    break;
                                    case '3':
                                    case 3:
                                    case 'NORMAL':

                                        $tmp_PRIORITY = 3;

                                    break;
                                    case '5':
                                    case 5:
                                    case 'LOW':

                                        $tmp_PRIORITY = 5;

                                    break;
                                    default:

                                        $tmp_PRIORITY = 3;

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * HOOOSTON, VE HAFF PROBLEM!
                                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                                         *
                                         */
                                        $this->error_log('The provided priority level of "' . 
                                                   $tmp_PRIORITY . 
                                                   '" is invalid; NORMAL priority ' . 
                                                   'has been applied. Options ' . 
                                                   'include, "HIGH" or 1, "NORMAL" ' . 
                                                   'or 3 and "LOW" or 5.', 
                                                   __LINE__, 
                                                   __METHOD__, 
                                                   __FILE__, 
                                                   CRNRSTN_BARNEY);

                                    break;

                                }

                                $this->oSoapDataTransportLayer->add(
                                                                $tmp_PRIORITY, 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'DUP_SUPPRESS':

                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'ALLOW_EMPTY':

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding to SSDTL ' . 
                                 *    'email, ALLOW_EMPTY=' . 
                                 *    $attribute_content);
                                 *
                                 */
                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            case 'TRY_OTHER_EMAIL_METHODS_ON_ERR':

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding to SSDTL, ' . 
                                 *    'TRY_OTHER_EMAIL_METHODS_ON_ERR=' . 
                                 *    $this->tidy_boolean($attribute_content));
                                 *
                                 */
                                $this->oSoapDataTransportLayer->add(
                                                                (bool) $this->tidy_boolean($attribute_content), 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;
                            default:

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding to SSDTL ' . 
                                 *    'email, oSoapDataTransportLayer add(' . 
                                 *    $data_attribute . ')=(' . 
                                 *    $attribute_content . ')');
                                 *
                                 */
                                $this->oSoapDataTransportLayer->add(
                                                                $attribute_content, 
                                                                $data_attribute, 
                                                                $data_type_family);

                            break;

                        }

                    }

                }

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get n count of 
         * recipient email 
         * addresses? 
         *
         */
        $tmp_recipient_email_cnt = $this->oSoapDataTransportLayer->count('RECIPIENT_EMAIL');

        /**
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] Recipient email cnt = ' . 
         *    $tmp_recipient_email_cnt);
         *
         */

        /**
         *for($i=0; $i<$tmp_recipient_email_cnt; $i++){
         * 
         * $tmp_email = $this->oSoapDataTransportLayer->preach(
         *                                              'data_value', 
         *                                              'RECIPIENT_EMAIL', 
         *                                              false, 
         *                                              $i);
         *
         * $tmp_name = $this->oSoapDataTransportLayer->preach(
         *                                             'data_value', 
         *                                             'RECIPIENT_NAME', 
         *                                             false, 
         *                                             $i);
         *
         * error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] [' . 
         *    $tmp_name . '] [' . 
         *    $this->str_sanitize(
         *           $tmp_email, 
         *           'email_private') . 
         *    ']');
         *
         *}
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants.
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str('EMAIL_TEXT');

        if($tmp_ISHTML == true){

            $tmp_php_trace_HTML = $this->return_PHP_exception_trace_pretty(
                                         $exception_obj->getTraceAsString(), 
                                         'HTML');
            $tmp_log_constant_HTML = $this->return_log_priority_pretty(
                                            $syslog_level, 
                                            'HTML');
            $tmp_crnrstn_trace_HTML = $this->oLog_output_manager->return_log_trace_output_str('EMAIL_HTML');

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Loop through n count to 
         * build n custom email 
         * (subject, HTML, TEXT), 
         * and store the data within 
         * the SOAP Data Tunnel Layer 
         * (DTL) object. 
         *
         */
        for ($i = 0; $i < $tmp_recipient_email_cnt; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Bring in The Messenger. 
             * Luke 1:19, 26; Daniel 8:16; 9:21-22.
             *
             * Return an instantiation of 
             * The CRNRSTN :: Lightsaber RoCEv2 
             * SOAP Services Layer (CLR-SSL) 
             * System Messenger From the 
             * Furthest Reaches of the North, 
             * oGabriel, class object. 
             *
             *
             * 5 :: Monday, July 15, 2024 @ 2116 hrs.
             *
             * $oCRNRSTN_GABRIEL = new crnrstn_messenger_from_north(
             *                         $i, 
             *                         'mail', 
             *                         NULL, 
             *                         NULL, 
             *                         NULL);
             *
             */
            $R_gabriel = $this->return_registered_resource(
                                       'new', 
                                       'crnrstn_messenger_from_north', 
                                       $i, 
                                       'mail', 
                                       NULL, 
                                       NULL, 
                                       NULL);

            $tmp_email = $this->oSoapDataTransportLayer->preach(
                                                         'data_value', 
                                                         'RECIPIENT_EMAIL', 
                                                         false, 
                                                         $i);

            /**
             *error_log('[lnum ' . 
             *    __LINE__ . '] [mthd ' . 
             *    __METHOD__ . 
             *    '] Building [' . 
             *    $i . '] of [' . 
             *    $tmp_recipient_email_cnt . 
             *    '] message for ' . 
             *    $this->str_sanitize(
             *           $tmp_email, 
             *           'email_private'));
             *
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Prepare TEXT version. 
             *
             */
            $tmp_TEXT_Body = $R_gabriel->return_CRNRSTN_SysMsgTEXTBody('EXCEPTION_NOTIFICATION::SOAP_TUNNEL');
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{SYSTEM_LOG_INTEGER_CONSTANT}', 
                                    $tmp_log_constant_TEXT, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{MESSAGE}', 
                                    $tmp_exception_msg, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{LINE_NUM}', 
                                    $tmp_exception_linenum, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{METHOD}', 
                                    $exception_method, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{PHP_TRACE}', 
                                    $tmp_php_trace_TEXT, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{SYSTEM_TIME}', 
                                    $exception_systemtime, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{PROCESS_RUN_TIME}', 
                                    $exception_runtime, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{EMAIL}', 
                                    $tmp_email, 
                                    $tmp_TEXT_Body);
            $tmp_TEXT_Body = $this->proper_replace(
                                    '{LOG_TRACE}', 
                                    $tmp_crnrstn_trace_TEXT, 
                                    $tmp_TEXT_Body);

            $tmp_MESSAGE_SUBJECT = 'Exception Notification from ' . 
                                   $_SERVER['SERVER_NAME'] . 
                                   ' via CRNRSTN ::';
            $this->oSoapDataTransportLayer->add(
                                            $tmp_MESSAGE_SUBJECT, 
                                            'MESSAGE_SUBJECT', 
                                            $data_type_family);
            $tmp_TEXT_Body = trim($tmp_TEXT_Body);
            $this->oSoapDataTransportLayer->add(
                                            $tmp_TEXT_Body, 
                                            'MESSAGE_BODY_TEXT', 
                                            $data_type_family);

            if($tmp_ISHTML){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Prepare HTML version. 
                 *
                 */
                $tmp_HTML_Body = $R_gabriel->return_CRNRSTN_SysMsgHTMLBody('EXCEPTION_NOTIFICATION::SOAP_TUNNEL');
                $tmp_HTML_Body = $this->proper_replace(
                                        '{SYSTEM_LOG_INTEGER_CONSTANT}', 
                                        $tmp_log_constant_HTML, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{MESSAGE}', 
                                        $tmp_exception_msg, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{LINE_NUM}', 
                                        $tmp_exception_linenum, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{METHOD}', 
                                        $exception_method, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{PHP_TRACE}', 
                                        $tmp_php_trace_HTML, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{SYSTEM_TIME}', 
                                        $exception_systemtime, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{PROCESS_RUN_TIME}', 
                                        $exception_runtime, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{EMAIL}', 
                                        $tmp_email, 
                                        $tmp_HTML_Body);
                $tmp_HTML_Body = $this->proper_replace(
                                        '{LOG_TRACE}', 
                                        $tmp_crnrstn_trace_HTML, 
                                        $tmp_HTML_Body);

                $tmp_HTML_Body = trim($tmp_HTML_Body);
                $this->oSoapDataTransportLayer->add(
                                                $tmp_HTML_Body, 
                                                'MESSAGE_BODY_HTML', 
                                                $data_type_family);

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Done. Build SOAP 
         * request and send 
         * to proxy. 
         *
         */
        $SOAP_endpoint = $this->oSoapDataTransportLayer->preach(
                                                         'data_value', 
                                                         'WSDL_URI');

        $SOAP_request = $this->oSoapDataTransportLayer->generate_SOAP_request_object(
                                                        'tunnelEncryptCalibrationRequest', 
                                                        NULL);

        /**
         *$this->print_r(
         *       $SOAP_request, 
         *       'CLIENT REQUEST :: ' . 
         *       'oTunnelEncryptionCalibrationRequest', 
         *       NULL, 
         *       __LINE__, 
         *       __METHOD__, 
         *       __FILE__);
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Submit services 
         * request [Limit of 65535 bytes]
         *
         */
        $tmp_response = $this->client_send_CRNRSTN_SOAP_REQUEST(
                               'tunnelEncryptCalibrationRequest', 
                               $SOAP_request[0], 
                               $SOAP_endpoint);

        $this->print_r(
               $tmp_response, 
               'SERVER RESPONSE :: tunnelEncryptCalibrationRequest', 
               NULL, 
               __LINE__, 
               __METHOD__, 
               __FILE__);

        if($tmp_response['CRNRSTN_PACKET_IS_ENCRYPTED'] != 'TRUE'){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Unable to continue. 
             * Encryption is required. 
             * Handle as error. 
             *
             */
            error_log('[lnum ' . 
              __LINE__ . '] [mthd ' . 
              __METHOD__ . 
              '] SOAP err CRNRSTN_PACKET_IS_ENCRYPTED != TRUE');

            die();

        }else{

            $tmp_SOAP_ENCRYPT_CIPHER = $this->oSoapDataTransportLayer->preach(
                                                                       'data_value', 
                                                                       'SOAP_ENCRYPT_CIPHER');
            $tmp_SOAP_ENCRYPT_SECRET_KEY = $this->oSoapDataTransportLayer->soap_encrypt_secret_key;
            $tmp_SOAP_ENCRYPT_HMAC_ALG = $this->oSoapDataTransportLayer->preach(
                                                                         'data_value', 
                                                                         'SOAP_ENCRYPT_HMAC_ALG');
            $tmp_SOAP_ENCRYPT_OPTIONS = $this->oSoapDataTransportLayer->preach(
                                                                        'data_value', 
                                                                        'SOAP_ENCRYPT_OPTIONS');

            $tmp_SOAP_SERVICES_AUTH_STATUS = $this->data_decrypt(
                                                    $tmp_response['SOAP_SERVICES_AUTH_STATUS'], 
                                                    'R_encrypt_SOAP', 
                                                    true, $tmp_SOAP_ENCRYPT_CIPHER, 
                                                    $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                                    $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                                    $tmp_SOAP_ENCRYPT_OPTIONS);
            $tmp_SOAP_ENCRYPT_CIPHER_resp = $this->data_decrypt(
                                                   $tmp_response['SOAP_ENCRYPT_CIPHER'], 
                                                   'R_encrypt_SOAP', 
                                                   true, $tmp_SOAP_ENCRYPT_CIPHER, 
                                                   $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                                   $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                                   $tmp_SOAP_ENCRYPT_OPTIONS);
            $tmp_SOAP_ENCRYPT_HMAC_ALG_resp = $this->data_decrypt(
                                                     $tmp_response['SOAP_ENCRYPT_HMAC_ALG'], 
                                                     'R_encrypt_SOAP', 
                                                     true, $tmp_SOAP_ENCRYPT_CIPHER, 
                                                     $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                                     $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                                     $tmp_SOAP_ENCRYPT_OPTIONS);
            $tmp_SOAP_ENCRYPT_OPTIONS_resp = $this->data_decrypt(
                                                    $tmp_response['SOAP_ENCRYPT_OPTIONS'], 
                                                    'R_encrypt_SOAP', 
                                                    true, $tmp_SOAP_ENCRYPT_CIPHER, 
                                                    $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                                    $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                                    $tmp_SOAP_ENCRYPT_OPTIONS);
            
            /*$tmp_STATUS_CODE = $this->data_decrypt(
             *                          $tmp_response['STATUS_CODE'], 
             *                          'R_encrypt_SOAP', 
             *                          true, 
             *                          $tmp_SOAP_ENCRYPT_CIPHER, 
             *                          $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                          $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                          $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_STATUS_MESSAGE = $this->data_decrypt(
             *                             $tmp_response['STATUS_MESSAGE'], 
             *                             'R_encrypt_SOAP', 
             *                             true, $tmp_SOAP_ENCRYPT_CIPHER, 
             *                             $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                             $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                             $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_ISERROR_CODE = $this->data_decrypt(
             *                           $tmp_response['ISERROR_CODE'], 
             *                           'R_encrypt_SOAP', 
             *                           true, 
             *                           $tmp_SOAP_ENCRYPT_CIPHER, 
             *                           $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                           $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                           $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_ISERROR_MESSAGE = $this->data_decrypt(
             *                              $tmp_response['ISERROR_MESSAGE'], 
             *                              'R_encrypt_SOAP', 
             *                              true, 
             *                              $tmp_SOAP_ENCRYPT_CIPHER, 
             *                              $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                              $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                              $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_DATE_RECEIVED_SOAP_REQUEST = $this->data_decrypt(
             *                                         $tmp_response['DATE_RECEIVED_SOAP_REQUEST'], 
             *                                         'R_encrypt_SOAP', 
             *                                         true, $tmp_SOAP_ENCRYPT_CIPHER, 
             *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_SERVER_NAME_SOAP_SERVER = $this->data_decrypt(
             *                                      $tmp_response['SERVER_NAME_SOAP_SERVER'], 
             *                                      'R_encrypt_SOAP', 
             *                                      true, 
             *                                      $tmp_SOAP_ENCRYPT_CIPHER, 
             *                                      $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                                      $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                                      $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_SERVER_ADDRESS_SOAP_SERVER = $this->data_decrypt(
             *                                         $tmp_response['SERVER_ADDRESS_SOAP_SERVER'], 
             *                                         'R_encrypt_SOAP', 
             *                                         true, 
             *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
             *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             *$tmp_DATE_CREATED_SOAP_RESPONSE = $this->data_decrypt(
             *                                         $tmp_response['DATE_CREATED_SOAP_RESPONSE'], 
             *                                         'R_encrypt_SOAP', 
             *                                         true, 
             *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
             *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
             *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
             *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
             *
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $this->print_r(
             *        $tmp_SOAP_SERVICES_AUTH_STATUS, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'SOAP_SERVICES_AUTH_STATUS', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_SOAP_ENCRYPT_CIPHER_resp, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'SOAP_ENCRYPT_CIPHER', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_SOAP_ENCRYPT_HMAC_ALG_resp, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'SOAP_ENCRYPT_HMAC_ALG', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_SOAP_ENCRYPT_OPTIONS_resp, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'SOAP_ENCRYPT_OPTIONS', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_STATUS_CODE, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'STATUS_CODE', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_STATUS_MESSAGE, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'STATUS_MESSAGE', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_ISERROR_CODE, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'ISERROR_CODE');
             * $this->print_r(
             *        $tmp_ISERROR_MESSAGE, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'ISERROR_MESSAGE');
             * $this->print_r(
             *        $tmp_DATE_RECEIVED_SOAP_REQUEST, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'DATE_RECEIVED_SOAP_REQUEST', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_SERVER_NAME_SOAP_SERVER, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'SERVER_NAME_SOAP_SERVER', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_SERVER_ADDRESS_SOAP_SERVER, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'SERVER_ADDRESS_SOAP_SERVER', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             * $this->print_r(
             *        $tmp_DATE_CREATED_SOAP_RESPONSE, 
             *        '', 
             *        'SERVER RESPONSE :: ' . 
             *        'tunnelEncryptCalibrationRequest :: ' . 
             *        'DATE_CREATED_SOAP_RESPONSE', 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__);
             *     
             */

            if($tmp_SOAP_SERVICES_AUTH_STATUS == 'AUTHORIZATION GRANTED'){

                $SOAP_request = $this->oSoapDataTransportLayer->generate_SOAP_request_object(
                                                                'mayItakeTheKingsHighway', 
                                                                $tmp_response);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * 'CRNRSTN_PACKET_IS_ENCRYPTED' => array(
                 *                                  'name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 
                 *                                  'type' => 'xsd:string'),
                 * 'CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES' => array(
                 *                                           'name' => 'CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES', 
                 *                                           'type' => 'xsd:string'),
                 * 'CRNRSTN_SOAP_SVC_METHOD_REQUESTED' => array(
                 *                                        'name' => 'CRNRSTN_SOAP_SVC_METHOD_REQUESTED', 
                 *                                        'type' => 'xsd:string'),
                 * 'CRNRSTN_SOAP_ACTION_TYPE' => array(
                 *                               'name' => 'CRNRSTN_SOAP_ACTION_TYPE', 
                 *                               'type' => 'xsd:string'),
                 * 'CRNRSTN_SOAP_SVC_AUTH_KEY' => array(
                 *                                'name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 
                 *                                'type' => 'xsd:string'),
                 * 'USERNAME' => array(
                 *               'name' => 'USERNAME', 
                 *               'type' => 'xsd:string'),
                 * 'PASSWORD' => array(
                 *               'name' => 'PASSWORD', 
                 *               'type' => 'xsd:string'),
                 * 'CRNRSTN_NOTIFICATION_TYPE' => array(
                 *                                'name' => 'CRNRSTN_NOTIFICATION_TYPE', 
                 *                                'type' => 'xsd:string'),
                 * 'SOAP_ENCRYPT_CIPHER' => array(
                 *                          'name' => 'SOAP_ENCRYPT_CIPHER', 
                 *                          'type' => 'xsd:string'),
                 * 'SOAP_ENCRYPT_SECRET_KEY' => array(
                 *                              'name' => 'SOAP_ENCRYPT_SECRET_KEY', 
                 *                              'type' => 'xsd:string'),
                 * 'SOAP_ENCRYPT_HMAC_ALG' => array(
                 *                            'name' => 'SOAP_ENCRYPT_HMAC_ALG', 
                 *                            'type' => 'xsd:string'),
                 * 'SOAP_ENCRYPT_OPTIONS' => array(
                 *                           'name' => 'SOAP_ENCRYPT_OPTIONS', 
                 *                           'type' => 'xsd:string')
                 *
                 */

                $this->print_r(
                       $SOAP_endpoint, 
                       '', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Submit services 
                 * request [limit of 65535 bytes]
                 *
                 */
                $tmp_response = $this->client_send_CRNRSTN_SOAP_REQUEST(
                                       'mayItakeTheKingsHighway', 
                                       $SOAP_request[0], 
                                       $SOAP_endpoint);

                /**
                 *$this->print_r(
                 *       $SOAP_request, 
                 *       'CLIENT REQUEST :: ' . 
                 *       'mayItakeTheKingsHighway', 
                 *       NULL, 
                 *       __LINE__, 
                 *       __METHOD__, 
                 *       __FILE__);
                 *
                 *$this->print_r(
                 *       $this->returnClientRequest(), 
                 *       'CLIENT REQUEST :: ' . 
                 *       'oKingsHighwayAuthRequest', 
                 *       NULL, 
                 *       __LINE__, 
                 *       __METHOD__, 
                 *       __FILE__);
                 *
                 */
                $this->print_r(
                       $tmp_response, 
                       'SERVER RESPONSE :: ' . 
                       'mayItakeTheKingsHighway', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);

                $tmp_CRNRSTN_PACKET_IS_ENCRYPTED = $tmp_response['CRNRSTN_PACKET_IS_ENCRYPTED'];
                if($tmp_CRNRSTN_PACKET_IS_ENCRYPTED != 'TRUE'){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Encryption required. 
                     * Do not continue. 
                     *
                     */

                }else{

                    $tmp_SOAP_ENCRYPT_CIPHER = $this->oSoapDataTransportLayer->preach(
                                                                               'data_value', 
                                                                               'SOAP_ENCRYPT_CIPHER');
                    $tmp_SOAP_ENCRYPT_SECRET_KEY_resp = $this->oSoapDataTransportLayer->soap_encrypt_secret_key;
                    $tmp_SOAP_ENCRYPT_HMAC_ALG = $this->oSoapDataTransportLayer->preach(
                                                                                 'data_value', 
                                                                                 'SOAP_ENCRYPT_HMAC_ALG');
                    $tmp_SOAP_ENCRYPT_OPTIONS = $this->oSoapDataTransportLayer->preach(
                                                                                'data_value', 
                                                                                'SOAP_ENCRYPT_OPTIONS');
                    $tmp_SOAP_ENCRYPT_SECRET_KEY = $this->oSoapDataTransportLayer->preach(
                                                                                   'data_value', 
                                                                                   'CRNRSTN_SOAP_SVC_ENCRYPTION_KEY');

                    /**
                     * mayItakeTheKingsHighway 
                     * decrypt with 
                     *
                     * [AES-192-OFB]
                     * [for_a_stranger-this-Is-the_soap-encrypti0n-key]
                     * [sha256]
                     * [1]
                     *
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * SOAP Object Decryption
                     *
                     *$tmp_CRNRSTN_SOAP_SVC_AUTH_KEY = $this->data_decrypt(
                     *                                        $tmp_response['CRNRSTN_SOAP_SVC_AUTH_KEY'], 
                     *                                        'R_encrypt_SOAP', 
                     *                                        true, 
                     *                                        $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                        $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                        $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                        $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_CRNRSTN_SOAP_SVC_USERNAME = $this->data_decrypt(
                     *                                        $tmp_response['CRNRSTN_SOAP_SVC_USERNAME'], 
                     *                                        'R_encrypt_SOAP', 
                     *                                        true, 
                     *                                        $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                        $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                        $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                        $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     */
                    $this->print_r(
                           'SOAP_SERVICES_AUTH_STATUS = ' . 
                           $tmp_response['SOAP_SERVICES_AUTH_STATUS'] . ' [' . 
                           $tmp_SOAP_ENCRYPT_CIPHER_resp . '] [' . 
                           $tmp_SOAP_ENCRYPT_SECRET_KEY_resp . '][' . 
                           $this->oSoapDataTransportLayer->soap_encrypt_secret_key . ']', 
                           'SERVER RESPONSE DECRYPT :: mayItakeTheKingsHighway', 
                           NULL, 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__);

                    /**
                     *error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] data_decrypt(1/2) [' . 
                     *    $tmp_SOAP_ENCRYPT_CIPHER_resp . '][' . 
                     *    $tmp_SOAP_ENCRYPT_SECRET_KEY_resp . '][' . 
                     *    $tmp_SOAP_ENCRYPT_HMAC_ALG_resp . '][' . 
                     *    $tmp_SOAP_ENCRYPT_OPTIONS_resp . 
                     *    '].');
                     *
                     */

                    $tmp_SOAP_SERVICES_AUTH_STATUS = $this->data_decrypt(
                                                            $tmp_response['SOAP_SERVICES_AUTH_STATUS'], 
                                                            'R_encrypt_SOAP', 
                                                            true, 
                                                            $tmp_SOAP_ENCRYPT_CIPHER_resp, 
                                                            $tmp_SOAP_ENCRYPT_SECRET_KEY_resp, 
                                                            $tmp_SOAP_ENCRYPT_HMAC_ALG_resp, 
                                                            $tmp_SOAP_ENCRYPT_OPTIONS_resp);

                    /**
                     *error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] data_decrypt(2/2) [' . 
                     *    $tmp_SOAP_ENCRYPT_CIPHER_resp . '][' . 
                     *    $tmp_SOAP_ENCRYPT_SECRET_KEY_resp . '][' . 
                     *    $tmp_SOAP_ENCRYPT_HMAC_ALG_resp . '][' . 
                     *    $tmp_SOAP_ENCRYPT_OPTIONS_resp . '].');
                     *
                     */

                    $this->print_r(
                           'SOAP_SERVICES_AUTH_STATUS = ' . 
                           $tmp_SOAP_SERVICES_AUTH_STATUS, 
                           'SERVER RESPONSE DECRYPT :: ' . 
                           'mayItakeTheKingsHighway', 
                           NULL, 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__);

                    /*$tmp_SOAP_ENCRYPT_CIPHER_resp = $this->data_decrypt(
                     *                                       $tmp_response['SOAP_ENCRYPT_CIPHER'], 
                     *                                       'R_encrypt_SOAP', 
                     *                                       true, 
                     *                                       $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                       $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                       $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                       $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SOAP_ENCRYPT_SECRET_KEY_resp = $this->data_decrypt(
                     *                                           $tmp_response['SOAP_ENCRYPT_SECRET_KEY'], 
                     *                                           'R_encrypt_SOAP', 
                     *                                           true, 
                     *                                           $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                           $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                           $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                           $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SOAP_ENCRYPT_HMAC_ALG_resp = $this->data_decrypt(
                     *                                         $tmp_response['SOAP_ENCRYPT_HMAC_ALG'], 
                     *                                         'R_encrypt_SOAP', 
                     *                                         true, 
                     *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SOAP_ENCRYPT_OPTIONS_resp = $this->data_decrypt(
                     *                                        $tmp_response['SOAP_ENCRYPT_OPTIONS'], 
                     *                                        'R_encrypt_SOAP', 
                     *                                        true, 
                     *                                        $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                        $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                        $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                        $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_STATUS_CODE = $this->data_decrypt(
                     *                          $tmp_response['STATUS_CODE'], 
                     *                          'R_encrypt_SOAP', 
                     *                          true, 
                     *                          $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                          $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                          $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                          $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_STATUS_MESSAGE = $this->data_decrypt(
                     *                             $tmp_response['STATUS_MESSAGE'], 
                     *                             'R_encrypt_SOAP', 
                     *                             true, 
                     *                             $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                             $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                             $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                             $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_ISERROR_CODE = $this->data_decrypt(
                     *                           $tmp_response['ISERROR_CODE'], 
                     *                           'R_encrypt_SOAP', 
                     *                           true, 
                     *                           $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                           $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                           $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                           $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_ISERROR_MESSAGE = $this->data_decrypt(
                     *                              $tmp_response['ISERROR_MESSAGE'], 
                     *                              'R_encrypt_SOAP', 
                     *                              true, 
                     *                              $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                              $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                              $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                              $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_DATE_RECEIVED_SOAP_REQUEST = $this->data_decrypt(
                     *                                         $tmp_response['DATE_RECEIVED_SOAP_REQUEST'], 
                     *                                         'R_encrypt_SOAP', 
                     *                                         true, 
                     *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SERVER_NAME_SOAP_SERVER = $this->data_decrypt(
                     *                                      $tmp_response['SERVER_NAME_SOAP_SERVER'], 
                     *                                      'R_encrypt_SOAP', 
                     *                                      true, 
                     *                                      $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                      $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                      $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                      $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SERVER_ADDRESS_SOAP_SERVER = $this->data_decrypt(
                     *                                         $tmp_response['SERVER_ADDRESS_SOAP_SERVER'], 
                     *                                         'R_encrypt_SOAP', 
                     *                                         true, 
                     *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_DATE_CREATED_SOAP_RESPONSE = $this->data_decrypt(
                     *                                         $tmp_response['DATE_CREATED_SOAP_RESPONSE'], 
                     *                                         'R_encrypt_SOAP', 
                     *                                         true, 
                     *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SERVER_NAME_SOAP_CLIENT = $this->data_decrypt(
                     *                                      $tmp_response['SERVER_NAME_SOAP_CLIENT'], 
                     *                                      'R_encrypt_SOAP', 
                     *                                      true, 
                     *                                      $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                      $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                      $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                      $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     *$tmp_SERVER_ADDRESS_SOAP_CLIENT = $this->data_decrypt(
                     *                                         $tmp_response['SERVER_ADDRESS_SOAP_CLIENT'], 
                     *                                         'R_encrypt_SOAP', 
                     *                                         true, 
                     *                                         $tmp_SOAP_ENCRYPT_CIPHER, 
                     *                                         $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                     *                                         $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                     *                                         $tmp_SOAP_ENCRYPT_OPTIONS);
                     *
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->print_r(
                     *        $tmp_CRNRSTN_SOAP_SVC_AUTH_KEY, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'CRNRSTN_SOAP_SVC_AUTH_KEY', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_CRNRSTN_SOAP_SVC_USERNAME, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'CRNRSTN_SOAP_SVC_USERNAME', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SOAP_SERVICES_AUTH_STATUS,  
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SOAP_SERVICES_AUTH_STATUS', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SOAP_ENCRYPT_CIPHER_resp, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SOAP_ENCRYPT_CIPHER', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SOAP_ENCRYPT_SECRET_KEY_resp, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SOAP_ENCRYPT_SECRET_KEY', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SOAP_ENCRYPT_HMAC_ALG_resp, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SOAP_ENCRYPT_HMAC_ALG', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SOAP_ENCRYPT_OPTIONS_resp, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SOAP_ENCRYPT_OPTIONS', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_STATUS_CODE, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'STATUS_CODE', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_STATUS_MESSAGE, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'STATUS_MESSAGE', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_ISERROR_CODE, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'ISERROR_CODE', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_ISERROR_MESSAGE, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'ISERROR_MESSAGE', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_DATE_RECEIVED_SOAP_REQUEST, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'DATE_RECEIVED_SOAP_REQUEST', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SERVER_NAME_SOAP_SERVER, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SERVER_NAME_SOAP_SERVER', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SERVER_ADDRESS_SOAP_SERVER, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SERVER_ADDRESS_SOAP_SERVER', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_DATE_CREATED_SOAP_RESPONSE, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'DATE_CREATED_SOAP_RESPONSE', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SERVER_NAME_SOAP_CLIENT, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SERVER_NAME_SOAP_CLIENT', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     * $this->print_r(
                     *        $tmp_SERVER_ADDRESS_SOAP_CLIENT, 
                     *        '', 
                     *        'Server Response - ' . 
                     *        'Approved for King\'s Highway :: ' . 
                     *        'SERVER_ADDRESS_SOAP_CLIENT', 
                     *       __LINE__, 
                     *       __METHOD__, 
                     *       __FILE__);
                     *
                     */

                    $this->print_r(
                           $tmp_SOAP_SERVICES_AUTH_STATUS, 
                           'SERVER RESPONSE :: ' . 
                           'mayItakeTheKingsHighway', 
                           NULL, 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__);

                    if($tmp_SOAP_SERVICES_AUTH_STATUS == 'AUTHORIZATION GRANTED'){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Build payload 
                         * SOAP request :: 
                         * 
                         * takeTheKingsHighway 
                         *
                         */
                        $this->oSoapDataTransportLayer->soap_encrypt_cipher = $tmp_SOAP_ENCRYPT_CIPHER_resp;
                        $this->oSoapDataTransportLayer->soap_encrypt_hmac_alg = $tmp_SOAP_ENCRYPT_HMAC_ALG_resp;
                        $this->oSoapDataTransportLayer->soap_encrypt_options = $tmp_SOAP_ENCRYPT_OPTIONS_resp;

                        $SOAP_request = $this->oSoapDataTransportLayer->generate_SOAP_request_object(
                                                                        'takeTheKingsHighway', 
                                                                        $tmp_response);

                        /**
                         *$this->print_r(
                         *       $SOAP_request, 
                         *       'CLIENT REQUEST :: ' . 
                         *       'takeTheKingsHighway', 
                         *       '', 
                         *       __LINE__, 
                         *       __METHOD__, 
                         *       __FILE__);
                         *
                         */

                        error_log('[lnum ' . 
                            __LINE__ . '] ' . 
                            '[mthd ' . 
                            __METHOD__ . 
                            '] Ready to takeTheKingsHighway to SERVER.');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Submit services 
                         * request [limit OF 65535 bytes].
                         *
                         */
                        $tmp_request_cnt = sizeof($SOAP_request);
                        /**
                         *error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . 
                         *    '] Ready to send count=' . 
                         *    $tmp_request_cnt . 
                         *    ' to server.');
                         *
                         */

                        for($ii = 0; $ii < $tmp_request_cnt; $ii++){

                            $tmp_cur = 1 + $ii;
                            $tmp_response = $this->client_send_CRNRSTN_SOAP_REQUEST(
                                                   'takeTheKingsHighway', 
                                                   $SOAP_request[$ii], 
                                                   $SOAP_endpoint);
                            $this->print_r(
                                   $tmp_response, 
                                   'Client - Server Response :: ' . 
                                   'takeTheKingsHighway ' . 
                                   $tmp_cur . ' of ' . 
                                   $tmp_request_cnt, 
                                   NULL, 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__);

                        }

                        /**
                         *error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . 
                         *    '] We just took takeTheKingsHighway ' . 
                         *    $ii . ' times!');
                         *
                         */

                    }

                }

            }else{

                error_log('[lnum ' . 
                    __LINE__ . '] [mthd ' . 
                    __METHOD__ . 
                    '] authorization not granted...');
                $tmp_STATUS_CODE = $this->data_decrypt(
                                          $tmp_response['STATUS_CODE'], 
                                          'R_encrypt_SOAP', 
                                          true, 
                                          $tmp_SOAP_ENCRYPT_CIPHER, 
                                          $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                          $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                          $tmp_SOAP_ENCRYPT_OPTIONS);
                $tmp_STATUS_MESSAGE = $this->data_decrypt(
                                             $tmp_response['STATUS_MESSAGE'], 
                                             'R_encrypt_SOAP', 
                                             true, 
                                             $tmp_SOAP_ENCRYPT_CIPHER, 
                                             $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                             $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                             $tmp_SOAP_ENCRYPT_OPTIONS);
                $tmp_ISERROR_CODE = $this->data_decrypt(
                                           $tmp_response['ISERROR_CODE'], 
                                           'R_encrypt_SOAP', 
                                           true, 
                                           $tmp_SOAP_ENCRYPT_CIPHER, 
                                           $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                           $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                           $tmp_SOAP_ENCRYPT_OPTIONS);
                $tmp_ISERROR_MESSAGE = $this->data_decrypt(
                                              $tmp_response['ISERROR_MESSAGE'], 
                                              'R_encrypt_SOAP', 
                                              true, 
                                              $tmp_SOAP_ENCRYPT_CIPHER, 
                                              $tmp_SOAP_ENCRYPT_SECRET_KEY, 
                                              $tmp_SOAP_ENCRYPT_HMAC_ALG, 
                                              $tmp_SOAP_ENCRYPT_OPTIONS);

                $this->error_log(
                       'CRNRSTN :: SOAP Services ' . 
                       'proxy error. Error Code: ' . 
                       $tmp_ISERROR_CODE . 
                       ' :: Error Message: ' . 
                       $tmp_ISERROR_MESSAGE . 
                       ' :: Status Code: ' . 
                       $tmp_STATUS_CODE . 
                       ' :: Status Message: ' . 
                       $tmp_STATUS_MESSAGE, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       'CRNRSTN_SOAP_SERVICES');

            }

            return true;

        }


        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function returnClientRequest()
    {

        return $this->oSoapClient->returnClientRequest();

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * [13-Jul-2021 23:57:18 America/Boise] 
     * [rtime 0.209134 secs] 
     * [methd crnrstn_user::catchException] 
     * [lnum 7140] 
     * PHP native exception output log trace received ::
     * #0 /home2/jonyfivc/public_html/alpha.jony5.com/
     * common/class/user_jony5_dot_com.php(299): 
     * crnrstn_user->{closure}(8, 'Undefined prope...', '/home2/jonyfivc...', 299, Array)
     * #1 /home2/jonyfivc/public_html/alpha.jony5.com/
     * common/class/user_jony5_dot_com.php(78): 
     * crnrstn_advanced_content_output_manager->add_content_resource('<meta charset="...', 421, 'page')
     * #2 /home2/jonyfivc/public_html/alpha.jony5.com/
     * common/inc/head/head.inc.php(49): 
     * user_jony5_dot_com->add_content_resource('<meta charset="...', 421, 'page')
     * #3 /home2/jonyfivc/public_html/
     * alpha.jony5.com/index.php(77): include_once('/home2/jonyfivc...')
     * #4 {main}
     * [13-Jul-2021 23:57:18 America/Boise] 6435 env - 
     * PROCESS[CRNRSTN::INTEGRATIONS] FOR WCR CRNRSTN::INTEGRATIONS
     * [13-Jul-2021 23:57:18 America/Boise] 6297 env - 
     * RUN receive_profile_EMAIL_WCR() 8051
     * [13-Jul-2021 23:57:18 America/Boise] [rtime 0.209529 secs] 
     * [methd {closure}()] [lnum 299] Undefined property: crnrstn_user::$oCRNRSTN_BITFLIP_MGR
     * [13-Jul-2021 23:57:18 America/Boise] 7223 env no_cars_go_EMAIL() 
     * [{closure}()][3]2021-07-13 23:57:18.189422 [rtime 0.209529 secs] 
     * [methd {closure}()] [lnum 299] Undefined property: 
     * crnrstn_user::$oCRNRSTN_BITFLIP_MGR  Undefined property: crnrstn_user::$oCRNRSTN_BITFLIP_MGR 299
     * [13-Jul-2021 23:57:18 America/Boise] 7762 env class to send email = crnrstn_user
     * [13-Jul-2021 23:57:18 America/Boise] 7777 processing recipient email=c00000101@gmail.com
     * [13-Jul-2021 23:57:18 America/Boise] 7886 env - DIBYA_SAHOO_SSL_CERT_BYPASS HAS BEEN APPLIED.
     * [13-Jul-2021 23:57:18 America/Boise] 7938 env - Adding Recipient:
     * Jonathan J5 Harris c00000101@gmail.com c*****@g*****.com
     * [13-Jul-2021 23:57:18 America/Boise] 7975 env - crnrstn_phpmailer->send()
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
     * @access private
     *
     */
    private function no_cars_go_EMAIL(
                    $tmp_exception_output_str, 
                    $syslog_level, 
                    $exception_method, 
                    $exception_runtime, 
                    $exception_systemtime, 
                    $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_EMAIL 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0106 hrs.
         *
         */

        $tmp_exception_msg = $exception_obj->getMessage();
        $tmp_exception_linenum = $exception_obj->getLine();

        error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . 
            '] no_cars_go_EMAIL() [' . 
            $exception_method . '][' . 
            $syslog_level . ']' . 
            $tmp_exception_output_str . ' ' . 
            $tmp_exception_msg . ' ' . 
            $tmp_exception_linenum);

        $this->load_log_output_mgr();

        $tmp_sent_suppression = array();
        $config_data_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * PHPMailer 
         * Default values. 
         *
         */
        $tmp_DUP_SUPPRESS = true;  // CLR-SSL default.
        $tmp_ALLOW_EMPTY = 
        $tmp_SMTP_KEEPALIVE = false;
        $tmp_isHTML = true;
        $tmp_SMTP_TIMEOUT = 300;
        $tmp_PRIORITY = 3;
        $tmp_WORDWRAP = 52;
        $tmp_EMAIL_PROTOCOL = 'mail';
        $tmp_TRY_OTHER_EMAIL_METHODS_ON_ERR = true;
        $tmp_SMTP_AUTH = false;
        $tmp_SMTP_SERVER = 'localhost';
        $tmp_SMTP_PORT_OUTGOING = 25;
        $tmp_SMTP_USERNAME = 
        $tmp_SMTP_PASSWORD = '';
        $tmp_CHARSET = 'iso-8859-1';
        $tmp_MESSAGE_ENCODING = '8bit';
        $tmp_SMTP_SECURE = '';
        $tmp_SMTP_AUTOTLS = true;
        //$tmp_FROM_EMAIL = 'root@localhost';
        $tmp_FROM_EMAIL = 'no_reply@'.$_SERVER['SERVER_NAME'];
        $tmp_FROM_NAME = 'CRNRSTN System Mailer';
        $tmp_RECIPIENT_EMAIL = 
        $tmp_RECIPIENT_NAME = 
        $tmp_REPLYTO_EMAIL = 
        $tmp_REPLYTO_NAME = 
        $tmp_CC_EMAIL = 
        $tmp_CC_NAME = 
        $tmp_BCC_EMAIL = 
        $tmp_BCC_NAME = array();
        $tmp_SENDMAIL_PATH = '/usr/sbin/sendmail';
        $tmp_USE_SENDMAIL_OPTIONS = 
        $tmp_DIBYA_SAHOO_SSL_CERT_BYPASS = true;

        /**
         * $tmp_size = sizeof($this->profile_endpoint_data_ARRAY);
         *
         */

        /**
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] profile_endpoint_data_ARRAY=' . 
         *    print_r($this->profile_endpoint_data_ARRAY, true));
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Remain still while 
         * your life is extracted. 
         *
         */
        foreach($this->profile_endpoint_data_ARRAY as 
            $config_version => $chunkArray0)
        {

            /**
             *error_log('[lnum ' . 
             *    __LINE__ . '] [mthd ' . 
             *    __METHOD__ . 
             *    '] should be (more than one) ' . 
             *    $tmp_size . '...config_version=' . 
             *    $config_version);
             *
             */

            foreach($chunkArray0 as 
                $data_attribute => $chunkArray1)
            {

                foreach($chunkArray1 as 
                    $content_count => $oDDO)
                {

                    /**
                     *error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] die() [' . 
                     *    $config_version . '] [' . 
                     *    $data_attribute . '] [' . 
                     *    $content_count . '] [' . 
                     *    get_class($oDDO) . ']');
                     *
                     * public function preach(
                     *                 $data_attribute = 'value', 
                     *                 $data_key = NULL, 
                     *                 $soap_transport = false, 
                     *                 $index = 0){
                     *
                     */
                    switch($data_attribute){
                        case 'RECIPIENT_EMAIL':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach RECIPIENT_EMAIL cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_RECIPIENT_EMAIL[] = $oDDO->preach(
                                                                'data_value', 
                                                                $data_attribute);

                            }else{

                                $tmp_RECIPIENT_EMAIL[] = $oDDO;

                            }

                        break;
                        case 'RECIPIENT_NAME':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach $tmp_RECIPIENT_NAME cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_RECIPIENT_NAME[] = $oDDO->preach(
                                                               'data_value', 
                                                               $data_attribute);

                            }else{

                                $tmp_RECIPIENT_NAME[] = $oDDO;

                            }

                        break;
                        case 'FROM_EMAIL':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach FROM_EMAIL cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_FROM_EMAIL = $oDDO->preach(
                                                         'data_value', 
                                                         $data_attribute);

                            }else{

                                $tmp_FROM_EMAIL = $oDDO;

                            }

                        break;
                        case 'FROM_NAME':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach FROM_NAME cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_FROM_NAME = $oDDO->preach(
                                                        'data_value', 
                                                        $data_attribute);

                            }else{

                                $tmp_FROM_NAME = $oDDO;

                            }

                        break;
                        case 'REPLYTO_EMAIL':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach REPLYTO_EMAIL cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_REPLYTO_EMAIL[] = $oDDO->preach(
                                                              'data_value', 
                                                              $data_attribute);

                            }else{

                                $tmp_REPLYTO_EMAIL[] = $oDDO;

                            }

                        break;
                        case 'REPLYTO_NAME':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach REPLYTO_NAME cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_REPLYTO_NAME[] = $oDDO->preach(
                                                             'data_value', 
                                                             $data_attribute);

                            }else{

                                $tmp_REPLYTO_NAME[] = $oDDO;

                            }

                        break;
                        case 'CC_EMAIL':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach CC_EMAIL cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_CC_EMAIL[] = $oDDO->preach(
                                                         'data_value', 
                                                         $data_attribute);

                            }else{

                                $tmp_CC_EMAIL[] = $oDDO;

                            }

                        break;
                        case 'CC_NAME':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach CC_NAME cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_CC_NAME[] = $oDDO->preach(
                                                        'data_value', 
                                                        $data_attribute);

                            }else{

                                $tmp_CC_NAME[] = $oDDO;

                            }

                        break;
                        case 'BCC_EMAIL':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach BCC_EMAIL cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_BCC_EMAIL[] = $oDDO->preach(
                                                          'data_value', 
                                                          $data_attribute);

                            }else{

                                $tmp_BCC_EMAIL[] = $oDDO;

                            }

                        break;
                        case 'BCC_NAME':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach BCC_NAME cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_BCC_NAME[] = $oDDO->preach(
                                                         'data_value', 
                                                         $data_attribute);

                            }else{

                                $tmp_BCC_NAME[] = $oDDO;

                            }

                        break;
                        case 'SMTP_KEEPALIVE':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] SMTP_KEEPALIVE=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_SMTP_KEEPALIVE = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                        'data_value', 
                                                                                        $data_attribute));

                            }else{

                                $tmp_SMTP_KEEPALIVE = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'DUP_SUPPRESS':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] DUP_SUPPRESS=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_DUP_SUPPRESS = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                      'data_value', 
                                                                                      $data_attribute));

                            }else{

                                $tmp_DUP_SUPPRESS = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'ALLOW_EMPTY':

                            if(is_object($oDDO)){

                                $tmp_ALLOW_EMPTY = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                     'data_value', 
                                                                                     $data_attribute));

                            }else{

                                $tmp_ALLOW_EMPTY = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'ISHTML':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] ISHTML=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_isHTML = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                'data_value', 
                                                                                $data_attribute));

                            }else{

                                $tmp_isHTML = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'SMTP_TIMEOUT':

                            if(is_object($oDDO)){

                                $tmp_SMTP_TIMEOUT = (int) $oDDO->preach(
                                                                 'data_value', 
                                                                 $data_attribute);

                            }else{

                                $tmp_SMTP_TIMEOUT = (int) $oDDO;

                            }

                        break;
                        case 'PRIORITY':

                            if(is_object($oDDO)){

                                if($oDDO->preach('type', $data_attribute) == 'string'){

                                    $tmp_PRIORITY = (string) $oDDO->preach(
                                                                    'data_value', 
                                                                    $data_attribute);

                                }else{

                                    $tmp_PRIORITY = (int) $oDDO->preach(
                                                                 'data_value', 
                                                                 $data_attribute);

                                }

                            }else{

                                $tmp_PRIORITY = $oDDO;

                            }

                            $priority = trim(strtoupper($tmp_PRIORITY));

                            switch($priority){
                                case '1':
                                case 1:
                                case 'HIGH':

                                    $tmp_PRIORITY = 1;

                                break;
                                case '3':
                                case 3:
                                case 'NORMAL':

                                    $tmp_PRIORITY = 3;

                                break;
                                case '5':
                                case 5:
                                case 'LOW':

                                    $tmp_PRIORITY = 5;

                                break;
                                default:

                                    $tmp_PRIORITY = 3;

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    $this->error_log('The provided priority level of "' . 
                                           $priority . 
                                           '" is invalid; NORMAL priority has ' . 
                                           'been applied. Options include, "HIGH" ' . 
                                           'or 1, "NORMAL" or 3 and "LOW" or 5.', 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_BARNEY);

                                break;

                            }

                        break;
                        case 'WORDWRAP':

                            if(is_object($oDDO)){

                                $tmp_WORDWRAP = (int) $oDDO->preach(
                                                             'data_value', 
                                                             $data_attribute);

                            }else{

                                $tmp_WORDWRAP = (int) $oDDO;

                            }

                        break;
                        case 'EMAIL_PROTOCOL':

                            if(is_object($oDDO)){

                                $tmp_EMAIL_PROTOCOL = trim(strtoupper($oDDO->preach(
                                                                             'data_value', 
                                                                             $data_attribute)));

                            }else{

                                $tmp_EMAIL_PROTOCOL = trim(strtoupper($oDDO));

                            }

                        break;
                        case 'CHARSET':

                            if(is_object($oDDO)){

                                $tmp_CHARSET = $oDDO->preach(
                                                      'data_value', 
                                                      $data_attribute);

                            }else{

                                $tmp_CHARSET = $oDDO;

                            }

                        break;
                        case 'MESSAGE_ENCODING':

                            if(is_object($oDDO)){

                                $tmp_MESSAGE_ENCODING = $oDDO->preach(
                                                               'data_value', 
                                                               $data_attribute);

                            }else{

                                $tmp_MESSAGE_ENCODING = $oDDO;

                            }

                        break;
                        case 'SMTP_SECURE':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] SMTP_AUTH=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_SMTP_SECURE = strtolower(trim($oDDO->preach(
                                                                          'data_value', 
                                                                          $data_attribute)));

                            }else{

                                $tmp_SMTP_SECURE = $oDDO;

                            }

                        break;
                        case 'SMTP_AUTOTLS':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] SMTP_AUTOTLS=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_SMTP_AUTOTLS = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                      'data_value', 
                                                                                      $data_attribute));

                            }else{

                                $tmp_SMTP_AUTOTLS = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'SMTP_AUTH':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] SMTP_AUTH=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_SMTP_AUTH = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                   'data_value', 
                                                                                   $data_attribute));

                            }else{

                                $tmp_SMTP_AUTH = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'SMTP_SERVER':

                            if(is_object($oDDO)){

                                $tmp_SMTP_SERVER = $oDDO->preach(
                                                          'data_value', 
                                                          $data_attribute);

                            }else{

                                $tmp_SMTP_SERVER = $oDDO;

                            }

                        break;
                        case 'SMTP_PORT_OUTGOING':

                            if(is_object($oDDO)){

                                $tmp_SMTP_PORT_OUTGOING = $oDDO->preach(
                                                                 'data_value', 
                                                                 $data_attribute);

                            }else{

                                $tmp_SMTP_PORT_OUTGOING = $oDDO;

                            }

                        break;
                        case 'SMTP_USERNAME':

                            if(is_object($oDDO)){

                                $tmp_SMTP_USERNAME = $oDDO->preach(
                                                            'data_value', 
                                                            $data_attribute);

                            }else{

                                $tmp_SMTP_USERNAME = $oDDO;

                            }

                        break;
                        case 'SMTP_PASSWORD':

                            if(is_object($oDDO)){

                                $tmp_SMTP_PASSWORD = $oDDO->preach(
                                                            'data_value', 
                                                            $data_attribute);

                            }else{

                                $tmp_SMTP_PASSWORD = $oDDO;

                            }

                        break;
                        case 'SENDMAIL_PATH':

                            if(is_object($oDDO)){

                                $tmp_SENDMAIL_PATH = $oDDO->preach(
                                                            'data_value', 
                                                            $data_attribute);

                            }else{

                                $tmp_SENDMAIL_PATH = $oDDO;

                            }

                        break;
                        case 'USE_SENDMAIL_OPTIONS':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    '] USE_SENDMAIL_OPTIONS=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_USE_SENDMAIL_OPTIONS = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                              'data_value', 
                                                                                              $data_attribute));

                            }else{

                                $tmp_USE_SENDMAIL_OPTIONS = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'DIBYA_SAHOO_SSL_CERT_BYPASS':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach DIBYA_SAHOO_SSL_CERT_BYPASS [' . 
                                 *    $oDDO->count($data_attribute) . 
                                 *    ']  DIBYA_SAHOO_SSL_CERT_BYPASS=' . 
                                 *    $oDDO->preach('type', $data_attribute));
                                 *
                                 */

                                $tmp_DIBYA_SAHOO_SSL_CERT_BYPASS = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                                     'data_value', 
                                                                                                     $data_attribute));

                            }else{

                                $tmp_DIBYA_SAHOO_SSL_CERT_BYPASS = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;
                        case 'TRY_OTHER_EMAIL_METHODS_ON_ERR':

                            if(is_object($oDDO)){

                                $tmp_TRY_OTHER_EMAIL_METHODS_ON_ERR = (bool) $this->tidy_boolean($oDDO->preach(
                                                                                                        'data_value', 
                                                                                                        $data_attribute));

                            }else{

                                $tmp_TRY_OTHER_EMAIL_METHODS_ON_ERR = (bool) $this->tidy_boolean($oDDO);

                            }

                        break;

                    }

                }

            }

        }

        /**
         *$tmp_config_version_cnt = sizeof($config_data_ARRAY);
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] $tmp_config_version_cnt=' . 
         *    $tmp_config_version_cnt);
         *
         * for($config_vs = 0; $config_vs < $tmp_config_version_cnt; $config_vs++){
         *
         */

        $tmp_oGabriel_serial = $this->generate_new_key(50);

                $tmp_recipient_cnt = count($tmp_RECIPIENT_EMAIL);

                for($i = 0; $i < $tmp_recipient_cnt; $i++){

                    error_log('[lnum ' . 
                        __LINE__ . '] [mthd ' . 
                        __METHOD__ . 
                        '] processing recipient email=' . 
                        $tmp_RECIPIENT_EMAIL[$i]);

                    if(!(($tmp_DUP_SUPPRESS == true) && 
                        isset($tmp_sent_suppression[strtolower($tmp_RECIPIENT_EMAIL[$i])])))
                    {

                        if($tmp_DUP_SUPPRESS == true){

                            $tmp_sent_suppression[strtolower($tmp_RECIPIENT_EMAIL[$i])] = 1;

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Bring in The Messenger. 
                         * Luke 1:19, 26; Daniel 8:16; 9:21-22. 
                         *
                         * Return an instantiation of 
                         * The CRNRSTN :: Lightsaber RoCEv2 
                         * SOAP Services Layer (CLR-SSL) 
                         * System Messenger From the 
                         * Furthest Reaches of the North, 
                         * oGabriel, class object. 
                         *
                         *
                         * 5 :: Monday, July 15, 2024 @ 2119 hrs.
                         *
                         * $oCRNRSTN_GABRIEL = new crnrstn_messenger_from_north(
                         *                         $tmp_oGabriel_serial, 
                         *                         $tmp_EMAIL_PROTOCOL, 
                         *                         $tmp_SMTP_USERNAME, 
                         *                         $tmp_SMTP_PASSWORD, 
                         *                         $tmp_SMTP_PORT_OUTGOING, 
                         *                         $oCRNRSTN);
                         *
                         */
                        $R_gabriel = $this->return_registered_resource(
                                                   'new', 
                                                   'crnrstn_messenger_from_north', 
                                                   $tmp_EMAIL_PROTOCOL, 
                                                   $tmp_SMTP_USERNAME, 
                                                   $tmp_SMTP_PASSWORD, 
                                                   $tmp_SMTP_PORT_OUTGOING);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Return an instantiation of
                         * the PHPMailer POP3 Email
                         * Messaging and Authentication
                         * Services Supported by
                         * CRNRSTN :: Lightsaber RoCEv2 SOAP
                         * Services Layer Framework
                         * Integrations class object.
                         *
                         *
                         * 5 :: Monday, July 15, 2024 @ 2120 hrs.
                         *
                         * $crnrstn_phpmailer = new \PHPMailer\crnrstn_PHPMailer\crnrstn_PHPMailer($oCRNRSTN);
                         *
                         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Edit: Renamed $crnrstn_phpmailer 
                         *       to $R_phpmailer. 
                         *       5 :: Tuesday, March 17, 2026 @ 0205 hrs.
                         *
                         */
                        $R_phpmailer = $this->return_registered_resource(
                                              'new', 
                                              'crnrstn_PHPMailer');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Where $tmp_EMAIL_PROTOCOL = 
                         * 'mail', 'qmail', 
                         * 'sendmail', or 'smtp'. 
                         *
                         */
                        $R_phpmailer->Mailer = strtolower($tmp_EMAIL_PROTOCOL);

                        $R_phpmailer->Priority = $tmp_PRIORITY;
                        $R_phpmailer->CharSet = $tmp_CHARSET;
                        $R_phpmailer->Encoding = $tmp_MESSAGE_ENCODING;
                        $R_phpmailer->Sendmail = $tmp_SENDMAIL_PATH;
                        $R_phpmailer->UseSendmailOptions = $tmp_USE_SENDMAIL_OPTIONS;

                        if($tmp_isHTML == true){

                            $R_phpmailer->isHTML();

                        }

                        $R_phpmailer->WordWrap = $tmp_WORDWRAP;
                        $R_phpmailer->AllowEmpty = $tmp_ALLOW_EMPTY;

                        $R_phpmailer->setFrom(
                                      $tmp_FROM_EMAIL, 
                                      $tmp_FROM_NAME);

                        /**
                         *error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . 
                         *    '] Adding setFrom:' . 
                         *    $tmp_FROM_NAME . ' ' . 
                         *    $tmp_FROM_EMAIL);
                         *
                         * $R_phpmailer->From = $config_data_ARRAY[$config_vs]['FROM_EMAIL'][0];
                         * $R_phpmailer->FromName = $config_data_ARRAY[$config_vs]['FROM_NAME'][0];
                         *
                         */

                        $tmp_e_cnt = sizeof($tmp_REPLYTO_EMAIL);
                        if($tmp_e_cnt > 0){

                            for($e_pos = 0; $e_pos < $tmp_e_cnt; $e_pos++){

                                $R_phpmailer->addReplyTo(
                                              $tmp_REPLYTO_EMAIL[$e_pos], 
                                              $tmp_REPLYTO_NAME[$e_pos]);
                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding ReplyTo:' . 
                                 *    $tmp_REPLYTO_NAME[$e_pos] . ' ' . 
                                 *    $tmp_REPLYTO_EMAIL[$e_pos]);
                                 *
                                 */

                            }

                        }

                        $tmp_e_cnt = sizeof($tmp_CC_EMAIL);
                        if($tmp_e_cnt > 0){

                            for($e_pos = 0; $e_pos < $tmp_e_cnt; $e_pos++){

                                $R_phpmailer->addCC(
                                              $tmp_CC_EMAIL[$e_pos], 
                                              $tmp_CC_NAME[$e_pos]);
                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Adding CC:' . 
                                 *    $tmp_CC_NAME[$e_pos] . ' ' . 
                                 *    $tmp_CC_EMAIL[$e_pos]);
                                 *
                                 */

                            }

                        }

                        $tmp_e_cnt = sizeof($tmp_BCC_EMAIL);
                        if($tmp_e_cnt > 0){

                            for($e_pos = 0; $e_pos < $tmp_e_cnt; $e_pos++){

                                $R_phpmailer->addBCC(
                                              $tmp_BCC_EMAIL[$e_pos], 
                                              $tmp_BCC_NAME[$e_pos]);
                                error_log('[lnum ' . 
                                    __LINE__ . '] [mthd ' . 
                                    __METHOD__ . 
                                    '] Adding BCC:' . 
                                    $tmp_BCC_NAME[$e_pos] . ' ' . 
                                    $tmp_BCC_EMAIL[$e_pos]);

                            }

                        }

                        switch($tmp_EMAIL_PROTOCOL){
                            case 'SMTP':

                                $R_phpmailer->Timeout = $tmp_SMTP_TIMEOUT;
                                $R_phpmailer->SMTPKeepAlive = $tmp_SMTP_KEEPALIVE;
                                $R_phpmailer->SMTPSecure = $tmp_SMTP_SECURE;
                                $R_phpmailer->SMTPAutoTLS = $tmp_SMTP_AUTOTLS;

                                if($tmp_SMTP_AUTH == true){

                                    $R_phpmailer->SMTPAuth = true;
                                    $R_phpmailer->Username = $tmp_SMTP_USERNAME;
                                    $R_phpmailer->Password = $tmp_SMTP_PASSWORD;
                                    $R_phpmailer->Host = $tmp_SMTP_SERVER;
                                    $R_phpmailer->Port = $tmp_SMTP_PORT_OUTGOING;

                                }

                                if($tmp_DIBYA_SAHOO_SSL_CERT_BYPASS == true){

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * This SMPTOptions data 
                                     * structure articulates a 
                                     * work around for PHPMailer 
                                     * SSL cert verification 
                                     * errors introduced through 
                                     * the stricter SSL behavior 
                                     * that came with the 
                                     * release of PHP 5.6. 
                                     *
                                     * You may not see this error; 
                                     * in implicit encryption mode 
                                     * (SMTPS) it may be hidden 
                                     * because there isn't a way for 
                                     * the channel to show messages. 
                                     *
                                     * SMTP + STARTTLS is generally 
                                     * easier to debug because of this.
                                     *
                                     * SOURCE :: https://pepipost.com/tutorials/phpmailer-smtp-error-could-not-connect-to-smtp-host/
                                     * AUTHOR :: https://pepipost.com/tutorials/author/dibya-sahoo/
                                     * DETAIL :: https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting#certificate-verification-failure
                                     *
                                     */
                                    $R_phpmailer->SMTPOptions = array(
                                        'ssl' => array(
                                            'verify_peer' => false,
                                            'verify_peer_name' => false,
                                            'allow_self_signed' => true
                                        )
                                    );

                                    error_log('[lnum ' . 
                                        __LINE__ . '] [mthd ' . 
                                        __METHOD__ . 
                                        '] DIBYA_SAHOO_SSL_CERT_BYPASS ' . 
                                        'HAS BEEN APPLIED.');

                                }else{

                                    error_log('[lnum ' . 
                                        __LINE__ . '] [mthd ' . 
                                        __METHOD__ . 
                                        '] DIBYA_SAHOO_SSL_CERT_BYPASS ' . 
                                        'HAS BEEN BYPASSED.');

                                }

                            break;
                            case 'SENDMAIL':

                                $R_phpmailer->isSendmail();

                            break;
                            case 'QMAIL':

                                $R_phpmailer->isQmail();

                            break;
                            case 'MAIL':

                                $R_phpmailer->isMail();

                            break;

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Constants. 
                         *
                         */
                        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                                     $exception_obj->getTraceAsString(), 
                                                     'TEXT');
                        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
                        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str('EMAIL_TEXT');
                        $R_phpmailer->Subject = 'Exception Notification from ' . 
                                                $_SERVER['SERVER_NAME'] . 
                                                ' via CRNRSTN ::';

                        if($tmp_isHTML == true){

                            $tmp_php_trace_HTML = $this->return_PHP_exception_trace_pretty(
                                                         $exception_obj->getTraceAsString(), 
                                                         'HTML');
                            $tmp_log_constant_HTML = $this->return_log_priority_pretty(
                                                            $syslog_level, 
                                                            'HTML');
                            $tmp_crnrstn_trace_HTML = $this->oLog_output_manager->return_log_trace_output_str('EMAIL_HTML');

                        }

                        if(isset($tmp_RECIPIENT_NAME[$i])){

                            $tmp_name = $tmp_RECIPIENT_NAME[$i];

                        }else{

                            $tmp_name = '';

                        }

                        error_log('[lnum ' . 
                            __LINE__ . '] [mthd ' . 
                            __METHOD__ . 
                            '] Adding Recipient:' . 
                            $tmp_name . ' ' . 
                            $this->str_sanitize(
                                   $tmp_RECIPIENT_EMAIL[$i], 
                                   'email_private'));

                        $R_phpmailer->AddAddress(
                                      $tmp_RECIPIENT_EMAIL[$i], 
                                      $tmp_name);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Prepare text version. 
                         *
                         */
                        $tmp_TEXT_Body = $R_gabriel->return_CRNRSTN_SysMsgTEXTBody('EXCEPTION_NOTIFICATION');
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{SYSTEM_LOG_INTEGER_CONSTANT}', 
                                                $tmp_log_constant_TEXT, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{MESSAGE}', 
                                                $tmp_exception_msg, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{LINE_NUM}', 
                                                $tmp_exception_linenum, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{METHOD}', 
                                                $exception_method, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{PHP_TRACE}', 
                                                $tmp_php_trace_TEXT, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{SYSTEM_TIME}', 
                                                $exception_systemtime, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{PROCESS_RUN_TIME}', 
                                                $exception_runtime, 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{EMAIL}', 
                                                $tmp_RECIPIENT_EMAIL[$i], 
                                                $tmp_TEXT_Body);
                        $tmp_TEXT_Body = $this->proper_replace(
                                                '{LOG_TRACE}', 
                                                $tmp_crnrstn_trace_TEXT, 
                                                $tmp_TEXT_Body);

                        $R_phpmailer->AltBody = $tmp_TEXT_Body;

                        if($tmp_isHTML){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Prepare HTML version. 
                             *
                             */
                            $tmp_HTML_Body = $R_gabriel->return_CRNRSTN_SysMsgHTMLBody('EXCEPTION_NOTIFICATION');
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{SYSTEM_LOG_INTEGER_CONSTANT}', 
                                                    $tmp_log_constant_HTML, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{MESSAGE}', 
                                                    $tmp_exception_msg, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{LINE_NUM}', 
                                                    $tmp_exception_linenum, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{METHOD}', 
                                                    $exception_method, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{PHP_TRACE}', 
                                                    $tmp_php_trace_HTML, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{SYSTEM_TIME}', 
                                                    $exception_systemtime, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{PROCESS_RUN_TIME}', 
                                                    $exception_runtime, 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{EMAIL}', 
                                                    $tmp_RECIPIENT_EMAIL[$i], 
                                                    $tmp_HTML_Body);
                            $tmp_HTML_Body = $this->proper_replace(
                                                    '{LOG_TRACE}', 
                                                    $tmp_crnrstn_trace_HTML, 
                                                    $tmp_HTML_Body);

                            $R_phpmailer->Body = $tmp_HTML_Body;

                        }

                        error_log('[lnum ' . 
                            __LINE__ . '] [mthd ' . 
                            __METHOD__ . 
                            '] crnrstn_phpmailer->send()');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Where $tmp_EMAIL_PROTOCOL = 
                         * 'mail', 'qmail', 
                         * 'sendmail', or 'smtp'. 
                         *
                         */
                        $R_phpmailer->Mailer = strtolower($tmp_EMAIL_PROTOCOL);

                        if(!($R_phpmailer->Send() == true)){

                            if($tmp_TRY_OTHER_EMAIL_METHODS_ON_ERR == true){

                                $this->error_log('An error was experienced ' . 
                                       'while attempting to send an email to ' . 
                                       $this->str_sanitize(
                                              $tmp_RECIPIENT_EMAIL[$i], 
                                              'email_private') . 
                                       ' via ' . 
                                       strtoupper($R_phpmailer->Mailer) . 
                                       '. Graceful degradation to secondary ' . 
                                       'email send protocol is commencing due to: ' . 
                                       $R_phpmailer->ErrorInfo, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_BARNEY);
                                error_log('[lnum ' . 
                                    __LINE__ . '] [mthd ' . 
                                    __METHOD__ . 
                                    '] An error was experienced while ' . 
                                    'attempting to send an email to ' . 
                                    $this->str_sanitize(
                                           $tmp_RECIPIENT_EMAIL[$i], 
                                           'email_private') . 
                                    ' via ' . 
                                    strtoupper($R_phpmailer->Mailer) . 
                                    '. Graceful degradation to secondary ' . 
                                    'email send protocol is commencing due to: ' . 
                                    $R_phpmailer->ErrorInfo);

                                $R_phpmailer = $this->next_mail_protocol_option($R_phpmailer);
                                if(!($R_phpmailer->Send() == true)){

                                    $this->error_log('An error was experienced while ' . 
                                           'attempting to send an email to ' . 
                                           $this->str_sanitize(
                                                  $tmp_RECIPIENT_EMAIL[$i], 
                                                  'email_private') . 
                                           ' via ' . 
                                           strtoupper($R_phpmailer->Mailer) . 
                                           '. Graceful degradation to tertiary email ' . 
                                           'send protocol is commencing due to: ' . 
                                           $R_phpmailer->ErrorInfo, 
                                           __LINE__, 
                                           __METHOD__, 
                                           __FILE__, 
                                           CRNRSTN_BARNEY);
                                    error_log('[lnum ' . 
                                        __LINE__ . '] [mthd ' . 
                                        __METHOD__ . 
                                        '] An error was experienced while ' . 
                                        'attempting to send an email to ' . 
                                        $this->str_sanitize(
                                               $tmp_RECIPIENT_EMAIL[$i], 
                                               'email_private') . 
                                        ' via ' . 
                                        strtoupper($R_phpmailer->Mailer) . 
                                        '. Graceful degradation to tertiary ' . 
                                        'email send protocol is commencing due to: ' . 
                                        $R_phpmailer->ErrorInfo);

                                    $R_phpmailer = $this->next_mail_protocol_option($R_phpmailer);
                                    if(!($R_phpmailer->Send() == true)){

                                        $this->error_log('An error was experienced while ' . 
                                               'attempting to send an email to ' . 
                                               $this->str_sanitize(
                                                      $tmp_RECIPIENT_EMAIL[$i], 
                                                      'email_private') . 
                                               ' via ' . 
                                               strtoupper($R_phpmailer->Mailer) . 
                                               '. Graceful degradation to quatiary email ' . 
                                               ' send protocol is commencing due to: ' . 
                                               $R_phpmailer->ErrorInfo, 
                                               __LINE__, 
                                               __METHOD__, 
                                               __FILE__, 
                                               CRNRSTN_BARNEY);
                                        error_log('[lnum ' . 
                                            __LINE__ . '] [mthd ' . 
                                            __METHOD__ . 
                                            '] An error was experienced while attempting ' . 
                                            'to send an email to ' . 
                                            $this->str_sanitize(
                                                   $tmp_RECIPIENT_EMAIL[$i], 
                                                   'email_private') . 
                                            ' via ' . 
                                            strtoupper($R_phpmailer->Mailer) . 
                                            '. Graceful degradation to quatiary email ' . 
                                            'send protocol is commencing due to: ' . 
                                            $R_phpmailer->ErrorInfo);

                                        $R_phpmailer = $this->next_mail_protocol_option($R_phpmailer);
                                        if(!($R_phpmailer->Send() == true)){

                                            $this->error_log('An error was experienced while ' . 
                                                   'attempting to send an email to ' . 
                                                   $this->str_sanitize(
                                                          $tmp_RECIPIENT_EMAIL[$i], 
                                                          'email_private') . 
                                                   ' via ' . 
                                                   strtoupper($R_phpmailer->Mailer) . 
                                                   '. Graceful degradation to pentiary email ' . 
                                                   'send protocol is commencing due to: ' . 
                                                   $R_phpmailer->ErrorInfo, 
                                                   __LINE__, 
                                                   __METHOD__, 
                                                   __FILE__, 
                                                   CRNRSTN_BARNEY);
                                            error_log('[lnum ' . 
                                                __LINE__ . '] [mthd ' . 
                                                __METHOD__ . 
                                                '] An error was experienced while attempting ' . 
                                                'to send an email to ' . 
                                                $this->str_sanitize(
                                                       $tmp_RECIPIENT_EMAIL[$i], 
                                                       'email_private') . 
                                                ' via ' . strtoupper($R_phpmailer->Mailer) . 
                                                '. Graceful degradation to pentiary email send ' . 
                                                'protocol is commencing due to: ' . 
                                                $R_phpmailer->ErrorInfo);

                                            $R_phpmailer = $this->next_mail_protocol_option($R_phpmailer);
                                            if(!($R_phpmailer->Send() == true)){

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * On my usage of the term, 
                                                 * "hexapolynomial" or 
                                                 * "hexapolynomiary", as being 
                                                 * of the same ilk as usages 
                                                 * (contained also herein) of 
                                                 * the words "secondary" 
                                                 * and "tertiary", I feel 
                                                 * pretty good standing in 
                                                 * the shadow of the 
                                                 * following source from 
                                                 * I. G. Burova of the 
                                                 * Dept. of Computational 
                                                 * Mathematics at St. Petersburg 
                                                 * State University: 
                                                 *
                                                 * SOURCE :: https://ieeexplore.ieee.org/abstract/document/9195628
                                                 * AUTHOR :: https://ieeexplore.ieee.org/author/37086360445
                                                 *
                                                 * This paper discusses twice 
                                                 * continuously differentiable 
                                                 * and three times continuously 
                                                 * differentiable approximations 
                                                 * with polynomial and 
                                                 * non-polynomial splines. 
                                                 *
                                                 * To construct the approximation, 
                                                 * a polynomial and non-polynomial 
                                                 * local basis of the second level 
                                                 * and the sixth order approximation 
                                                 * is constructed. 
                                                 *
                                                 * We call the approximation a second 
                                                 * level approximation because it 
                                                 * uses the first and the second 
                                                 * derivatives of the function. 
                                                 *
                                                 * The non-polynomial approximation 
                                                 * has the properties of polynomial 
                                                 * and trigonometric functions. 
                                                 *
                                                 * Here we have also constructed a 
                                                 * non-polynomial interpolating 
                                                 * spline which has the first, the 
                                                 * second and the third continuous 
                                                 * derivative. This approximation 
                                                 * uses the values of the function 
                                                 * at the nodes, the values of the 
                                                 * first derivative of the function 
                                                 * at the nodes and the values of 
                                                 * the second derivative of the 
                                                 * function at the ends of the 
                                                 * interval [a, b]. 
                                                 *
                                                 * The theorems of the approximations 
                                                 * are given. Numerical examples 
                                                 * are given. 
                                                 *
                                                 *
                                                 * - I. G. Burova, 
                                                 * St. Petersburg State University, 
                                                 * Dept. of Computational Mathematics 
                                                 *
                                                 *
                                                 * 5 :: Monday, November 9, 2020 @ 0845 hrs.
                                                 *
                                                 */

                                                $this->error_log('An error was experienced ' . 
                                                       'while attempting to send an email to ' . 
                                                       $this->str_sanitize(
                                                              $tmp_RECIPIENT_EMAIL[$i], 
                                                              'email_private') . 
                                                       ' via ' . 
                                                       strtoupper($R_phpmailer->Mailer) . 
                                                       '. Attempting final graceful ' . 
                                                       'degradation...hexapolynomial in ' . 
                                                       'nature...albeit CRNRSTN :: has, ' . 
                                                       'at this point, already measured ' . 
                                                       'and found to be wanting the ' . 
                                                       'fifth (5th) and final email send ' . 
                                                       'use case of the four (4) official ' . 
                                                       'and available protocols for things ' . 
                                                       'of this nature per /crnrstn_PHPMailer/. ' . 
                                                       'TLDR; ...an empty string will now ' . 
                                                       'be sent as the mailer protocol, and ' . 
                                                       'the results for which what one would ' . 
                                                       'hope...could only be the best. ' . 
                                                       $R_phpmailer->ErrorInfo, 
                                                       __LINE__, 
                                                       __METHOD__, 
                                                       __FILE__, 
                                                       CRNRSTN_BARNEY);
                                                error_log('[lnum ' . 
                                                    __LINE__ . '] [mthd ' . 
                                                    __METHOD__ . 
                                                    '] An error was experienced while ' . 
                                                    'attempting to send an email to ' . 
                                                    $this->str_sanitize(
                                                           $tmp_RECIPIENT_EMAIL[$i], 
                                                           'email_private') . 
                                                    ' via ' . strtoupper($R_phpmailer->Mailer) . 
                                                    '. Attempting final graceful ' . 
                                                    'degradation...hexapolynomial in ' . 
                                                    'nature...albeit CRNRSTN :: has, at this ' . 
                                                    'point, already measured and found to ' . 
                                                    'be wanting the fifth (5th) and final ' . 
                                                    'email send use case of the four (4) ' . 
                                                    'official and available protocols for ' . 
                                                    'things of this nature per /crnrstn_PHPMailer/. ' . 
                                                    'TLDR; ...an empty string will now be ' . 
                                                    'sent as the mailer protocol, and the ' . 
                                                   'results for which what one would ' . 
                                                   'hope...could only be the best. ' . 
                                                   $R_phpmailer->ErrorInfo);

                                                $R_phpmailer = $this->next_mail_protocol_option($R_phpmailer);
                                                if(!$R_phpmailer->Send()){

                                                    $this->error_log('An error was experienced ' . 
                                                           'while attempting to send an email to ' . 
                                                           $this->str_sanitize(
                                                                  $tmp_RECIPIENT_EMAIL[$i], 
                                                                  'email_private') . 
                                                           '. Abandoning email delivery efforts due to: ' . 
                                                           $R_phpmailer->ErrorInfo, 
                                                           __LINE__, 
                                                           __METHOD__, 
                                                           __FILE__, 
                                                           CRNRSTN_BARNEY);
                                                    error_log('[lnum ' . 
                                                        __LINE__ . '] [mthd ' . 
                                                        __METHOD__ . 
                                                        '] An error was experienced while ' . 
                                                        'attempting to send an email to ' . 
                                                        $this->str_sanitize(
                                                               $tmp_RECIPIENT_EMAIL[$i], 
                                                               'email_private') . 
                                                        '. Abandoning email delivery efforts due to: ' . 
                                                        $R_phpmailer->ErrorInfo);

                                                }

                                            }

                                        }

                                    }else{

                                        error_log('[lnum ' . 
                                            __LINE__ . '] [mthd ' . 
                                            __METHOD__ . 
                                            '] A SUCCESS was experienced while ' . 
                                            'attempting to send an email to ' . 
                                            $this->str_sanitize(
                                                   $tmp_RECIPIENT_EMAIL[$i], 
                                                   'email_private') . 
                                            ' via ' . 
                                            strtoupper($R_phpmailer->Mailer) . '.');

                                    }

                                }else{

                                    error_log('[lnum ' . 
                                        __LINE__ . '] [mthd ' . 
                                        __METHOD__ . 
                                        '] A SUCCESS was experienced while ' . 
                                        'attempting to send an email to ' . 
                                        $this->str_sanitize(
                                               $tmp_RECIPIENT_EMAIL[$i], 
                                               'email_private') . ' via ' . 
                                        strtoupper($R_phpmailer->Mailer) . '.');

                                }

                            }else{

                                $this->error_log('An error was experienced ' . 
                                       'while attempting to send an email to ' . 
                                       $this->str_sanitize(
                                              $tmp_RECIPIENT_EMAIL[$i], 
                                              'email_private') . 
                                       ' via ' . 
                                       strtoupper($R_phpmailer->Mailer) . 
                                       '. Abandoning email delivery efforts due to: ' . 
                                       $R_phpmailer->ErrorInfo, 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_BARNEY);
                                error_log('[lnum ' . 
                                    __LINE__ . '] [mthd ' . 
                                    __METHOD__ . 
                                    '] An error was experienced while ' . 
                                    'attempting to send an email to ' . 
                                    $this->str_sanitize(
                                           $tmp_RECIPIENT_EMAIL[$i], 
                                           'email_private') . 
                                    ' via ' . 
                                    strtoupper($R_phpmailer->Mailer) . 
                                    '. Abandoning email delivery ' . 
                                    'efforts due to: ' . 
                                    $R_phpmailer->ErrorInfo);

                            }

                        }else{

                            error_log('[lnum ' . 
                                __LINE__ . '] [mthd ' . 
                                __METHOD__ . 
                                '] A SUCCESS was experienced while ' . 
                                'attempting to send an email to ' . 
                                $this->str_sanitize(
                                       $tmp_RECIPIENT_EMAIL[$i], 
                                       'email_private') . 
                                ' via ' . 
                                strtoupper($R_phpmailer->Mailer) . '.');

                        }

                        array_splice($this->mail_protocol_flag_ARRAY, 0);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Clear send data 
                         * (also any message 
                         * attachments cleared). 
                         *
                         */
                        $R_phpmailer->ClearAddresses();

                    }

                }

                if(isset($tmp_SMTP_KEEPALIVE)){

                    if($tmp_SMTP_KEEPALIVE == true){

                        $R_phpmailer->smtpClose();

                    }

                }

        //}

        return true;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0614 hrs.
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
     * @access private
     *
     */
    private function no_cars_go_FILE(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_FILE 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0106 hrs.
         *
         */

        $this->load_log_output_mgr();

        $tmp_LOCAL_DIR_FILEPATH = array();
        $tmp_LOCAL_MKDIR_MODE = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Remain still while 
         * your life is extracted. 
         *
         */
        foreach($this->profile_endpoint_data_ARRAY as 
            $config_version => $chunkArray0)
        {

            /**
             *error_log('[lnum ' . 
             *    __LINE__ . '] [mthd ' . 
             *    __METHOD__ . 
             *    '] should be (more than one) ' . 
             *    $tmp_size . '...config_version=' . 
             *    $config_version);
             *
             */

            foreach($chunkArray0 as 
                $data_attribute => $chunkArray1)
            {

                foreach($chunkArray1 as 
                    $content_count => $oDDO)
                {

                    switch($data_attribute){
                        case 'LOCAL_DIR_PATH':
                        case 'LOCAL_DIR_FILEPATH':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach LOCAL_DIR_FILEPATH cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_LOCAL_DIR_FILEPATH[] = $oDDO->preach(
                                                                   'data_value', 
                                                                   $data_attribute);

                            }else{

                                $tmp_LOCAL_DIR_FILEPATH[] = $oDDO;

                            }

                        break;
                        case 'LOCAL_MKDIR_MODE':

                            if(is_object($oDDO)){

                                /**
                                 *error_log('[lnum ' . 
                                 *    __LINE__ . '] [mthd ' . 
                                 *    __METHOD__ . 
                                 *    '] Preach LOCAL_DIR_FILEPATH cnt=' . 
                                 *    $oDDO->count($data_attribute));
                                 *
                                 */

                                $tmp_LOCAL_MKDIR_MODE[] = $oDDO->preach(
                                                                 'data_value', 
                                                                 $data_attribute);

                            }else{

                                $tmp_LOCAL_MKDIR_MODE[] = $oDDO;

                            }

                        break;

                    }

                    /**
                     *error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] [' . 
                     *    $config_version . '] [' . 
                     *    $data_attribute . '] [' . 
                     *    $content_count . '] [' . 
                     *    $oDDO . ']');
                     *
                     */

                }

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants. 
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str('FILE', 0);

        /**
         *$tmp_config_version_cnt = sizeof($config_data_ARRAY);
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] The logging object profile integer type is ' . 
         *    $this->logging_profile);
         *
         */

        $tmp_log_output = $tmp_crnrstn_trace_TEXT . '
' . $tmp_php_trace_TEXT . '
';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Check file specific 
         * array and push to all. 
         *
         */
        foreach($tmp_LOCAL_DIR_FILEPATH as 
            $key => $log_filepath)
        {

            if(isset($tmp_LOCAL_MKDIR_MODE[$key])){

                $this->output_to_local_file(
                       $tmp_log_output, 
                       $log_filepath, 
                       $tmp_LOCAL_MKDIR_MODE[$key]);

            }else{

                $this->output_to_local_file(
                       $tmp_log_output, 
                       $log_filepath);

            }

        }

        return true;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0614 hrs.
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
     * @access private
     *
     */
    private function no_cars_go_LOG_FILE_FTP(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_LOG_FILE_FTP 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0107 hrs.
         *
         */

        $this->load_log_output_mgr();

        $tmp_val_tunnel_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Remain still while 
         * your life is extracted. 
         *
         */
        foreach($this->profile_endpoint_data_ARRAY as 
            $config_version => $chunkArray0)
        {

            /**
             *error_log('[lnum ' . 
             *    __LINE__ . '] [mthd ' . 
             *    __METHOD__ . 
             *    '] should be (more than one) ' . 
             *    $tmp_size . '...config_version=' . 
             *    $config_version);
             *
             */

            foreach($chunkArray0 as 
                $data_attribute => $chunkArray1)
            {

                foreach($chunkArray1 as 
                    $content_count => $oDDO)
                {

                    switch($data_attribute){
                        case 'FTP_SERVER':

                            $tmp_FTP_SERVER = $oDDO->preach(
                                                     'data_value', 
                                                     $data_attribute);

                        break;
                        case 'FTP_USERNAME':

                            $tmp_FTP_USERNAME = $oDDO->preach(
                                                       'data_value', 
                                                       $data_attribute);

                        break;
                        case 'FTP_PASSWORD':

                            $tmp_FTP_PASSWORD = $oDDO->preach(
                                                       'data_value', 
                                                       $data_attribute);

                        break;
                        case 'FTP_PORT':

                            $tmp_FTP_PORT = $oDDO->preach(
                                                   'data_value', 
                                                   $data_attribute);

                        break;
                        case 'FTP_TIMEOUT':

                            $tmp_FTP_IS_SSL = $oDDO->preach(
                                                     'data_value', 
                                                     $data_attribute);

                        break;
                        case 'FTP_IS_SSL':

                            $tmp_FTP_IS_SSL = $oDDO->preach(
                                                     'data_value', 
                                                     $data_attribute);

                        break;
                        case 'FTP_USE_PASV':

                            $tmp_FTP_USE_PASV = $oDDO->preach(
                                                       'data_value', 
                                                       $data_attribute);

                        break;
                        case 'FTP_USE_PASV_ADDR':

                            $tmp_FTP_USE_PASV_ADDR = $oDDO->preach(
                                                            'data_value', 
                                                            $data_attribute);

                        break;
                        case 'FTP_DISABLE_AUTOSEEK':

                            $tmp_FTP_DISABLE_AUTOSEEK = $oDDO->preach(
                                                               'data_value', 
                                                               $data_attribute);

                        break;
                        case 'FTP_DIR_PATH':

                            $tmp_FTP_DIR_PATH = $oDDO->preach(
                                                       'data_value', 
                                                       $data_attribute);

                        break;
                        case 'FTP_MKDIR_MODE':

                            $tmp_FTP_MKDIR_MODE = $oDDO->preach(
                                                         'data_value', 
                                                         $data_attribute);

                        break;

                    }

                }

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants. 
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str('FILE', 0);

        //$tmp_config_version_cnt = sizeof($config_data_ARRAY);
        error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . 
            '] the logging object ' . 
            'profile integer type is ' . 
            $this->logging_profile);

        $tmp_log_output = $tmp_crnrstn_trace_TEXT . '
' . $tmp_php_trace_TEXT . '
';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Check file specific 
         * array and push to all. 
         *
         */
        foreach($tmp_val_tunnel_ARRAY as 
            $config_ver => $attribute_array)
        {

            $this->output_to_file_ftp(
                   $tmp_log_output, 
                   $attribute_array);

        }

        return true;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0614 hrs.
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
     * @access private
     *
     */
    private function no_cars_go_SCREEN_HTML(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_SCREEN_HTML 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0107 hrs.
         *
         */

        $this->load_log_output_mgr();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants. 
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str('FILE', 0);

        $tmp_log_output = $tmp_crnrstn_trace_TEXT . '
' . $tmp_php_trace_TEXT . '
';
        error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . 
            '] no_cars_go_SCREEN_HTML() self class=' . 
            get_class($this));

        $this->destruct_output .= $this->print_r_str(
                                         $tmp_log_output, 
                                         $tmp_log_constant_TEXT, 
                                         NULL, 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__);

        return true;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0617 hrs.
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
     * @access private
     *
     */
    private function no_cars_go_SCREEN_TEXT(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_SCREEN_TEXT 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0108 hrs.
         *
         */

        $this->load_log_output_mgr();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants. 
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str(
                                                              'SCREEN_TEXT', 
                                                              74);

        $tmp_log_output = $tmp_crnrstn_trace_TEXT . '
' . $tmp_php_trace_TEXT . '
';

        $this->destruct_output .= $tmp_log_output;

        return true;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0618 hrs.
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
     * @access private
     *
     */
    private function no_cars_go_SCREEN_HTML_HIDDEN(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_SCREEN_HTML_HIDDEN 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0108 hrs.
         *
         */

        $this->load_log_output_mgr();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants. 
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str(
                                                              'FILE', 
                                                              0);

        $tmp_log_output = $tmp_crnrstn_trace_TEXT . '
' . $tmp_php_trace_TEXT . '
';

        $tmp_hidden_html = '<!--
' . htmlentities($tmp_log_output) . '
-->
';

        $this->destruct_output .= $tmp_hidden_html;


        return true;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.youtube.com/watch?v=83KR_UBWdPI
     * TITLE :: Arcade Fire - No Cars Go
     *
     *
     * 5 :: Saturday, December 2, 2023 @ 0618 hrs.
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
     * @access private
     *
     */
    private function no_cars_go_DEFAULT(
                     $tmp_exception_output_str, 
                     $syslog_level, 
                     $exception_method, 
                     $exception_runtime, 
                     $exception_systemtime, 
                     $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_go_DEFAULT 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0109 hrs.
         *
         */

        $this->load_log_output_mgr();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Constants. 
         *
         */
        $tmp_php_trace_TEXT = $this->return_PHP_exception_trace_pretty(
                                     $exception_obj->getTraceAsString(), 
                                     'TEXT');
        $tmp_log_constant_TEXT = $this->return_log_priority_pretty($syslog_level);
        $tmp_crnrstn_trace_TEXT = $this->oLog_output_manager->return_log_trace_output_str(
                                                              'ERROR_LOG', 
                                                              0);

        error_log($tmp_crnrstn_trace_TEXT);
        error_log($tmp_php_trace_TEXT);

        return true;

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
    private function output_to_file_ftp(
                     $tmp_log_output, 
                     $attribute_array)
    {

        /**
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] output_to_file_ftp [' . 
         *    $tmp_log_output . ']');
         *
         */

/**
 *        $tmp_FTP_SERVER = array();
 *        $tmp_FTP_USERNAME = array();
 *        $tmp_FTP_PASSWORD = array();
 *        $tmp_FTP_PORT = array();
 *        $tmp_FTP_TIMEOUT = array();
 *        $tmp_FTP_IS_SSL = array();
 *        $tmp_FTP_USE_PASV = array();
 *        $tmp_FTP_USE_PASV_ADDR = array();
 *        $tmp_FTP_DISABLE_AUTOSEEK = array();
 *        $tmp_FTP_DIR_PATH = array();
 *        $tmp_FTP_MKDIR_MODE = array();
 *
 */

        foreach($this->profile_endpoint_criteria_ARRAY[CRNRSTN_LOG_FILE_FTP] as 
            $key => $value)
        {

            /**
             *error_log('[lnum ' . 
             *    __LINE__ . '] [mthd ' . 
             *    __METHOD__ . 
             *    '] profile_endpoint_criteria_ARRAY [' . 
             *    print_r($key,true) . '] [' . 
             *    print_r($value,true) . ']');
             *
             */

            if(isset($attribute_array[$key])){

                if(is_object($attribute_array[$key][0])){

                    error_log('[lnum ' . 
                        __LINE__ . '] [mthd ' . 
                        __METHOD__ . 
                        '] output_to_file_ftp [' . 
                        $key . '][OBJECT]');

                }else{

                    error_log('[lnum ' . 
                        __LINE__ . '] [mthd ' . 
                        __METHOD__ . 
                        '] output_to_file_ftp [' . 
                        $key . '][' . 
                        print_r($attribute_array[$key][0], true) . 
                        ']');

                }

            }else{

                error_log('[lnum ' . 
                    __LINE__ . '] [mthd ' . 
                    __METHOD__ . 
                    '] output_to_file_ftp NO SET=[' . 
                    $key . '][' . 
                    print_r($attribute_array[$key], true) . 
                    ']');

            }

        }

        // self::$crnrstn_tmp_dir

        if($tmp_crnrstn_tmp_dir == $this->return_tmp()){

            error_log('[lnum ' . 
                __LINE__ . '] [mthd ' . 
                __METHOD__ . 
                '] Ready to write to /tmp, the error ' . 
                'log file for FTP delivery ' . 
                '(See wind_cloud_fire line 3088 area).');

            $file_source_path = $this->output_to_local_file(
                                       $tmp_log_output, 
                                       $tmp_crnrstn_tmp_dir);

            error_log('[lnum ' . 
                __LINE__ . '] [mthd ' . 
                __METHOD__ . 
                '] Completed write of file [' . 
                $file_source_path . '][' . 
                $this->return_bytes(filesize($file_source_path)) . 
                ']');

        }else{

            error_log('[lnum ' . 
                __LINE__ . '] [mthd ' . 
                __METHOD__ . 
                '] Unable to write /tmp error ' . 
                'log file for FTP delivery due ' . 
                'to missing embryonic /tmp dir.');

        }

        $ftp_stream_target = NULL;

/**
 *        if($this->file_local_send_by_ftp(
 *                  $ftp_stream_target, 
 *                  $file_source_path, 
 *                  $oEndpoint_serial_SOURCE, 
 *                  $oEndpoint_serial_DESTINATION, 
 *                  $oElectrum_STATS))
 *        {
 *
 *            //if($this->fileMove_DIR_DF(
 *            //          $dest_ftp_stream, 
 *            //          $dest_FTP_ROOT_DIR_PATH, 
 *            //          $this->DESTINATION_FILE_PATH, 
 *            //          $SOURCE_filePath))
 *            //{
 *
 *            $this->is_transferred = true;
 *
 *            //$this->oCRNRSTN_USR->error_log('oWheel TMP file write ' . 
 *            //                     'to FTP SUCCESS. Remove TMP file.', 
 *            //                     __LINE__, 
 *            //                     __METHOD__, 
 *            //                     __FILE__, 
 *            //                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
 *
 *        }else{
 *
 *            $error = error_get_last();
 *            $this->error_log('oWheel fileMove_DF() ERROR :: ' . 
 *                   $error['message'], 
 *                   __LINE__, 
 *                   __METHOD__, 
 *                   __FILE__, 
 *                   'CRNRSTN_oELECTRUM_FILE_TRANSFER');
 *
 *        }
 *
 */

        unlink($file_source_path);

    }

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
    private function output_to_local_file(
                     $str, 
                     $file_path, 
                     $mkdir_permissons_mode = 775)
    {

        if(is_dir($file_path)){

            if($this->validate_DIR_endpoint(
                      'DESTINATION', 
                      $file_path, 
                      $mkdir_permissons_mode) == true)
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We have a directory 
                 * path and no file name 
                 * provided; Create one. 
                 *
                 */
                $tmp_filename = 'crnrstn_errlog_' . $_SERVER['SERVER_NAME'];

                $file_path = rtrim($file_path, DIRECTORY_SEPARATOR);

                $file_path = $file_path . DIRECTORY_SEPARATOR . 
                             $tmp_filename . '.txt';

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Cannot write 
                 * log file due to end 
                 * point not valid. 
                 *
                 */
                $this->error_log('Unable to write data to ' . 
                       'local directory file, ' . 
                       $file_path . '.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_BARNEY_FILE);

                return false;

            }

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * We have proper 
             * file path. 
             *
             */
            $tmp_sniffed_dir = dirname($file_path);

            if(!($this->validate_DIR_endpoint(
                        'DESTINATION', 
                        $tmp_sniffed_dir, 
                        $mkdir_permissons_mode) == true))
            {

                $this->error_log('Unable to write data ' . 
                       'to local directory file, ' . 
                       $file_path . '.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_BARNEY_FILE);

                return false;

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Validate file path 
         * on file open for append. 
         *
         */
        if($fp = fopen($file_path, 'a')){

            fwrite($fp, $str);
            fclose($fp);

            return $file_path;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Modify directory permissions. 
             *
             */
            $this->error_log('CRNRSTN :: Unable to locate ' . 
                   'the provided path and/or open/create ' . 
                   'file for write only (i.e. append) ' . 
                   'at filepath="' . 
                   $file_path . '".', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_BARNEY_FILE);

            return false;

        }

    }

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
    private function validate_DIR_endpoint(
                     $flow_type, 
                     $dir_path, 
                     $permissions_chmod = 775)
    {

        switch($flow_type){
            case 'SOURCE':

                if(is_dir($dir_path)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * SOURCE - LOCAL_DIR. 
                     *
                     */
                    if(is_readable($dir_path)){

                        return true;

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        $this->error_log('CRNRSTN :: has experienced ' . 
                               'permissions related errors attempting ' . 
                               'to read from the source directory, ' . 
                               $dir_path . '.');

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $this->error_log('CRNRSTN :: has experienced ' . 
                           'errors attempting to find the ' . 
                           'source directory, ' . 
                           $dir_path . 
                           ', within the local file system.');

                }

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * DESTINATION - LOCAL_DIR. 
                 *
                 */
                if(is_dir($dir_path)){

                    if(is_writable($dir_path)){

                        /*error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . 
                         *    '] The directory is writable!');
                         *
                         */

                        return true;

                    }else{

                        error_log('[lnum ' . 
                            __LINE__ . '] [mthd ' . 
                            __METHOD__ . 
                            '] The directory is not writable');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Attempt to change the 
                         * directory permissions 
                         * and check again before 
                         * completely giving up. 
                         *
                         */
                        $tmp_current_perms = substr(decoct(fileperms($dir_path)), 2);
                        $tmp_config_serial_hash = $this->config_serial_hash;

                        $this->err_message_queue_push(
                               NULL, 
                               'CRNRSTN :: has experienced ' . 
                               'permissions related error as ' . 
                               'the destination directory, ' . 
                               $dir_path . ' (' . 
                               $tmp_current_perms . 
                               '), is not writable to ' . 
                               $permissions_chmod . 
                               ', and furthermore ');
                        if(chmod($dir_path, $permissions_chmod)){

                            $this->err_message_queue_clear();
                            return true;

                        }else{

                            $tmp_current_perms = substr(decoct(fileperms($dir_path)), 2);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            $this->error_log('CRNRSTN :: has experienced ' . 
                                   'permissions related error as the ' . 
                                   'destination directory, ' . 
                                   $dir_path . 
                                   ', is not writable with ' . 
                                   'current permissions as ' . 
                                   $tmp_current_perms . '.');

                        }

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Attempt to make directory 
                     * before completely giving up. 
                     *
                     */
                    if(!$this->mkdir_r($dir_path, $permissions_chmod)){

                        $permissions_chmod = octdec(str_pad($permissions_chmod, 4, '0', STR_PAD_LEFT));

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        $this->error_log('CRNRSTN :: has experienced ' . 
                            'error as the destination directory, ' . 
                            $dir_path . 
                            ', does not exist, and it could not be ' . 
                            'created as ' . 
                            $permissions_chmod . '.');

                    }else{

                        return true;

                    }

                }

            break;

        }

        return false;

    }

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
    function no_cars_tification_go(
             $tmp_exception_output_str, 
             $syslog_level, 
             $exception_method, 
             $exception_runtime, 
             $exception_systemtime, 
             $exception_obj)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_logging_oprofile->no_cars_tification_go 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0109 hrs.
         *
         */

        switch($this->logging_profile){
            case CRNRSTN_LOG_SCREEN:
            case CRNRSTN_LOG_SCREEN_HTML:

                return $this->no_cars_go_SCREEN_HTML(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_SCREEN_TEXT:

                return $this->no_cars_go_SCREEN_TEXT(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_SCREEN_HTML_HIDDEN:

                return $this->no_cars_go_SCREEN_HTML_HIDDEN(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_EMAIL:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Default CRNRSTN :: Configuration - 
                 * Recommendations for configuration 
                 * priority or for the graceful 
                 * degredation waterfall on email 
                 * send failure:
                 *
                 * EMAIL_PRIMARY         = The user's preference for 
                 *                         sending email from the  
                 *                         available protocols: SMTP, 
                 *                         QMAIL, SENDMAIL, or MAIL.
                 * EMAIL_SECONDARY       = Sendmail (no authentication) 
                 *                         with CRNRSTN :: WCR configuration.
                 * EMAIL_TERTIARY        = Mail (no authentication) 
                 *                         with CRNRSTN :: WCR configuration.
                 * EMAIL_QUATIARY        = Qmail (no authentication) 
                 *                         with CRNRSTN :: WCR configuration.
                 * EMAIL_PENTIARY        = Unauthenticated SMTP 
                 *                         with CRNRSTN :: WCR configuration.
                 * EMAIL_HEXAPOLYNOMIARY = NULL mode fire.
                 *
                 */

                return $this->no_cars_go_EMAIL(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL:

                /* $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_SOAP_SVC_AUTH_KEY'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CRNRSTN_PROXY_CONNECTION_ID'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOA_NAMESPACE'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WSDL_URI'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WSDL_CACHE_TTL'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['NUSOAP_USECURL'] = 1;
                 *
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_SECRET_KEY'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_CIPHER'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_OPTIONS'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SOAP_ENCRYPT_HMAC_ALG'] = 1;
                 *
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['EMAIL_PROTOCOL'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTH'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_SERVER'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_PORT_OUTGOING'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_USERNAME'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_PASSWORD'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_TIMEOUT'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_KEEPALIVE'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_SECURE'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTOTLS'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SMTP_AUTOTLS'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['DIBYA_SAHOO_SSL_CERT_BYPASS'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SENDMAIL_PATH'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['USE_SENDMAIL_OPTIONS'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ALLOW_EMPTY'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FROM_NAME'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['REPLYTO_NAME_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CC_NAME_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['BCC_NAME_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['RECIPIENTS_NAME_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['FROM_EMAIL'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['REPLYTO_EMAIL_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CC_EMAIL_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['BCC_EMAIL_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['RECIPIENTS_EMAIL_PIPED'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['SUBJECT_LINE'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_BODY_HTML'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_BODY_TEXT'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['WORDWRAP'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['ISHTML'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['PRIORITY'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['CHARSET'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['MESSAGE_ENCODING'] = 1;
                 * $this->profile_endpoint_criteria_ARRAY[$log_profile_key]['DUP_SUPPRESS'] = 1;
                 *
                 *error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . 
                 *    '] would run no_cars_go_EMAIL_PROXY() now for :: ' . 
                 *    $tmp_exception_output_str);
                 *
                 *$tmp_resp = $this->no_cars_go_EMAIL_PROXY(
                 *                   $tmp_exception_output_str, 
                 *                   $syslog_level, 
                 *                   $exception_method, 
                 *                   $exception_runtime, 
                 *                   $exception_systemtime, 
                 *                   $exception_obj);
                 *
                 *error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . 
                 *    '] no_cars_go_EMAIL_PROXY return=[' . 
                 *    $tmp_resp . 
                 *    ']');
                 *
                 *die();
                 *
                 */

                return $this->no_cars_go_EMAIL_PROXY(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_FILE:
            case 'R_channel_FILE':

                return $this->no_cars_go_FILE(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_FILE_FTP:

                return $this->no_cars_go_LOG_FILE_FTP(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;
            case CRNRSTN_LOG_DEFAULT:
            /*case 'R_channel_GET':
             *case 'R_channel_POST':
             *case 'R_channel_COOKIE':
             *case 'R_channel_SESSION':
             */
            case CRNRSTN_LOG_DATABASE:
            case CRNRSTN_LOG_SSDTLA:
            case CRNRSTN_LOG_PSSDTLA:
            case CRNRSTN_LOG_SOAP:
            /*case 'R_channel_ALL':
             *case 'R_channel_FORM':
             */
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Lightsaber RoCEv2 
                 * SOAP Services Layer (CLR-SSL) 
                 * Multi-Channel Decoupled Data
                 * Object (MC-DDO) channel 
                 * integrations.
                 *
                 * Let's strengthen and enrich 
                 * the CLR-SSL Logging 
                 * Services Layer. 
                 *
                 *
                 * 5 :: Saturday, December 2, 2023 @ 2023 hrs.
                 *
                 */
                $clr_ssl_msg = 'CRNRSTN :: Logging Services out [' . 
                       $this->return_int_const_profile(
                              $this->logging_profile, 
                              self::$R_data['int_flag']['R_string']) . '|' . 
                       $this->return_int_const_profile(
                              $this->logging_profile, 
                              self::$R_data['int_flag']['R_integer']) . 
                       '].';
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
                 * Native PHP 
                 * Error Logging. 
                 *
                 */
                return $this->no_cars_go_DEFAULT(
                              $tmp_exception_output_str, 
                              $syslog_level, 
                              $exception_method, 
                              $exception_runtime, 
                              $exception_systemtime, 
                              $exception_obj);

            break;

        }

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
    function client_send_CRNRSTN_SOAP_REQUEST(
             $SOAP_method, 
             $SOAP_request, 
             $SOAP_endpoint = NULL)
    {

        if(!isset($SOAP_endpoint)){

            $SOAP_endpoint = $this->oSoapDataTransportLayer->preach(
                                                             'data_value', 
                                                             'WSDL_URI');

        }

        $WSDL_cache_ttl = $this->oSoapDataTransportLayer->preach(
                                                          'data_value', 
                                                          'WSDL_CACHE_TTL');
        $nusoap_useCURL = $this->oSoapDataTransportLayer->preach(
                                                          'data_value', 
                                                          'NUSOAP_USECURL');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Instantiate a CRNRSTN :: 
         * Lightsaber RoCEv2 SOAP
         * Services Layer (CLR-SSL) 
         * SOAP Client Manager 
         * Class Object. 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2125 hrs.
         *
         * $this->oSoapClient = new crnrstn_soap_client_manager(
         *                          $this->oCRNRSTN, 
         *                          $SOAP_endpoint, 
         *                          $WSDL_cache_ttl, 
         *                          $nusoap_useCURL);
         *
         */
        $this->oSoapClient = $this->return_registered_resource(
                                    'new', 
                                    'crnrstn_soap_client_manager', 
                                    $SOAP_endpoint, 
                                    $WSDL_cache_ttl, 
                                    $nusoap_useCURL);

        /*return $this->oSoapClient->sendRequest_SOAP(
         *                           $SOAP_method, 
         *                           $SOAP_request);
         *
         */
        $this->print_r(
               $SOAP_request, 
               'Send client request :: ' . 
               $SOAP_method, 
               NULL, 
               __LINE__, 
               __METHOD__, 
               __FILE__);
        $tmp_resp = $this->oSoapClient->sendRequest_SOAP(
                                        $SOAP_method, 
                                        $SOAP_request);
        $this->print_r(
               $tmp_resp, 
               'Server Response Output :: ' . 
               $SOAP_method, 
               NULL, 
               __LINE__, 
               __METHOD__, 
               __FILE__);

        $tmp_title = 'Description: ' . 
                     $SOAP_method . ' returnError output.';
        $tmp_err = $this->oSoapClient->returnError();
        $tmp_arr = array();
        $tmp_arr[] = $tmp_title;
        $tmp_arr[] = $tmp_err;

        $this->print_r(
               $tmp_arr, 
               'Server Response Output :: ' . 
               $SOAP_method . 
               ' oSoapClient->returnError', 
               NULL, 
               __LINE__, 
               __METHOD__, 
               __FILE__);
        /*$this->print_r(
         *       $this->oSoapClient->returnClientResponse(), 
         *       'Server Response :: ' . 
         *       $SOAP_method . 
         *       ' oSoapClient->returnClientResponse', 
         *       NULL, 
         *       __LINE__, 
         *       __METHOD__, 
         *       __FILE__);
         *
         *$this->print_r(
         *       $this->oSoapClient->returnClientGetDebug(), 
         *       'Server Response :: ' . 
         *       $SOAP_method . ' oSoapClient->returnClientGetDebug', 
         *       NULL, 
         *       __LINE__, 
         *       __METHOD__, 
         *       __FILE__);
         *
         */

        return $tmp_resp;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function next_mail_protocol_option($R_phpmailer)
    {

        for($i = 0; $i < $this->tmp_mail_protocol_options_cnt; $i++){

            if(!isset($this->mail_protocol_flag_ARRAY[$this->tmp_mail_protocol_options_ARRAY[$i]])){

                $this->mail_protocol_flag_ARRAY[$this->tmp_mail_protocol_options_ARRAY[$i]] = 1;

                switch($this->tmp_mail_protocol_options_ARRAY[$i]){
                    case 'SMTP':

                        $R_phpmailer->SMTPAuth = false;
                        $R_phpmailer->Mailer = strtolower($this->tmp_mail_protocol_options_ARRAY[$i]);

                    break;
                    default:

                        $R_phpmailer->Mailer = strtolower($this->tmp_mail_protocol_options_ARRAY[$i]);

                    break;

                }

                return $R_phpmailer;

            }

        }

        $R_phpmailer->SMTPAuth = false;
        $R_phpmailer->Mailer   = '';

        return $R_phpmailer;

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
    function receive_profile_EMAIL_WCR(
             $oWCR, 
             $WCR_key)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am email profile. 
         * Receive email WCR data. 
         *
         */
        $this->wcr_profiles_cnt++;

        /*error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] profile_endpoint_criteria_ARRAY=' . 
         *    print_r($this->profile_endpoint_criteria_ARRAY, true));
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * *All* possible 
         * email WCR keys. 
         *
         */
        foreach($this->profile_endpoint_criteria_ARRAY[CRNRSTN_LOG_EMAIL] as 
            $param_key => $value)
        {

            /*error_log('[lnum ' . 
             *    __LINE__ . '] [mthd ' . 
             *    __METHOD__ . 
             *    '] Checking for existence of ' . 
             *    $param_key . 
             *    ' data within config init oWCR, ' . 
             *    $WCR_key);
             *
             */

            if($oWCR->isset_WCR($WCR_key, $param_key) == true){

                /*error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . 
                 *    '] Found existence of ' . 
                 *    $param_key . 
                 *    ' data within config init oWCR, ' . 
                 *    $WCR_key);
                 *
                 */

                $tmp_wcr_data = $oWCR->get_attribute(
                                       $WCR_key, 
                                       $param_key);

                if(is_object($tmp_wcr_data)){

                    switch($param_key){
                        case 'RECIPIENTS_NAME_PIPED':
                        case 'REPLYTO_NAME_PIPED':
                        case 'CC_NAME_PIPED':
                        case 'BCC_NAME_PIPED':
                        break;
                        case 'RECIPIENTS_EMAIL_PIPED':

                            $tmp_name_array = array();
                            $tmp_name_data = $oWCR->get_attribute(
                                                    $WCR_key, 
                                                    'RECIPIENTS_NAME_PIPED');

                            /*preach('isset', key)
                             *preach('type')
                             *preach('value')
                             *
                             */

                            if($tmp_name_data->preach('isset', $param_key) == true){

                                $tmp_name_array = explode(
                                                  '|', 
                                                  $tmp_name_data->preach(
                                                                  'data_value', 
                                                                  $param_key));

                            }

                            $this->receive_profile_EMAIL(
                                   $tmp_wcr_data, 
                                   $param_key, 
                                   $tmp_name_array);

                        break;
                        case 'REPLYTO_EMAIL_PIPED':

                            $tmp_name_array = array();
                            $tmp_name_data = $oWCR->get_attribute(
                                                    $WCR_key, 
                                                    'REPLYTO_NAME_PIPED');

                            if($tmp_name_data->preach('isset', $param_key) == true){

                                $tmp_name_array = explode(
                                                  '|', 
                                                  $tmp_name_data->preach(
                                                                  'data_value', 
                                                                  $param_key));

                            }

                            $this->receive_profile_EMAIL(
                                   $tmp_wcr_data, 
                                   $param_key, 
                                   $tmp_name_array);

                        break;
                        case 'CC_EMAIL_PIPED':

                            $tmp_name_array = array();
                            $tmp_name_data = $oWCR->get_attribute(
                                                    $WCR_key, 
                                                    'CC_NAME_PIPED');

                            if($tmp_name_data->preach('isset', $param_key) == true){

                                $tmp_name_array = explode(
                                                  '|', 
                                                  $tmp_name_data->preach(
                                                                  'data_value', 
                                                                  $param_key));

                            }

                            $this->receive_profile_EMAIL(
                                   $tmp_wcr_data, 
                                   $param_key, 
                                   $tmp_name_array);

                        break;
                        case 'BCC_EMAIL_PIPED':

                            $tmp_name_array = array();
                            $tmp_name_data = $oWCR->get_attribute(
                                                    $WCR_key, 
                                                    'BCC_NAME_PIPED');

                            if($tmp_name_data->preach('isset', $param_key) == true){

                                $tmp_name_array = explode(
                                                  '|', 
                                                  $tmp_name_data->preach(
                                                                  'isset', 
                                                                  $param_key));

                            }

                            $this->receive_profile_EMAIL(
                                   $tmp_wcr_data, 
                                   $param_key, 
                                   $tmp_name_array);

                        break;
                        default:

                            /*error_log('[lnum ' . 
                             *    __LINE__ . '] [mthd ' . 
                             *    __METHOD__ . 
                             *    '] profile_endpoint_data_ARRAY storing[' . 
                             *    $this->wcr_profiles_cnt . '][' . 
                             *    $param_key . '][' . 
                             *    get_class($tmp_wcr_data) . ']');
                             *
                             */
                            $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = $tmp_wcr_data;
                            $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = 1;

                        break;

                    }

                }

            }

        }

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
    function receive_profile_EMAIL(
             $oDDO, 
             $param_key, 
             $name_array = NULL)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am email profile. 
         * Receive email data. 
         *
         *$oWCR->add_attribute(
         *       'RECIPIENTS_EMAIL_PIPED', 
         *       'Jonathan J5 Harris eVifweb@gmail.com|jharris@eVifweb.com');
         *$oWCR->add_attribute(
         *       'RECIPIENTS_NAME_PIPED', 
         *       '|Jonathan J5 Harris');
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] I am email profile. ' . 
         *    'Receive email data. ' . 
         *    $oDDO);
         *
         */
        if(is_object($oDDO)){

            $tmp_email_name_ARRAY = $this->reformat_pipe_data(
                                           CRNRSTN_LOG_EMAIL, 
                                           $oDDO->preach(
                                                  'data_value', 
                                                  $param_key));

        }else{

            $tmp_email_name_ARRAY = $this->reformat_pipe_data(
                                           CRNRSTN_LOG_EMAIL, 
                                           $oDDO);

        }

        /*$tmp_email_name_ARRAY['email'][]
         *$tmp_email_name_ARRAY['name'][]
         *
         *return $tmp_email_name_ARRAY;
         *
         */

        $tmp_e_cnt = sizeof($tmp_email_name_ARRAY['email']);
        for($i = 0; $i < $tmp_e_cnt; $i++){

            switch($param_key){
                case 'RECIPIENTS_EMAIL_PIPED':

                    /*error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] storing RECIPIENT_EMAIL [' . 
                     *    $this->wcr_profiles_cnt . '][' . 
                     *    $param_key . '][' . 
                     *    $this->str_sanitize(
                     *           $tmp_email_name_ARRAY['email'][$i], 
                     *           'email_private') . 
                     *    ']');
                     *
                     */
                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_EMAIL'][] = $tmp_email_name_ARRAY['email'][$i];
                    $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_EMAIL'][] = 1;

                    if(isset($name_array[$i])){

                        if($name_array[$i] != ''){

                            /*error_log('[lnum ' . 
                             *    __LINE__ . '] [mthd ' . 
                             *    __METHOD__ . 
                             *    '] [' . $param_key.'] name[' . 
                             *    $i . ']' . 
                             *    $name_array[$i]);
                             *
                             */
                            $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = $name_array[$i];
                            $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = 1;

                        }else{

                            if(isset($tmp_email_name_ARRAY['name'][$i])){

                                if($tmp_email_name_ARRAY['name'][$i] !=''){

                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = $tmp_email_name_ARRAY['name'][$i];

                                }else{

                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = '';

                                }

                                $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = 1;

                            }

                        }

                    }else{

                        if(isset($tmp_email_name_ARRAY['name'][$i])){

                            if($tmp_email_name_ARRAY['name'][$i] != ''){

                                $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = $tmp_email_name_ARRAY['name'][$i];

                            }else{

                                $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = '';

                            }

                            $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['RECIPIENT_NAME'][] = 1;

                        }

                    }

                break;
                case 'REPLYTO_EMAIL_PIPED':

                    /*error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] storing REPLYTO_EMAIL_PIPED [' . 
                     *    $this->wcr_profiles_cnt . '][' . 
                     *    $param_key . '][' . 
                     *    $this->str_sanitize(
                     *           $tmp_email_name_ARRAY['email'][$i], 
                     *           'email_private') . 
                     *    ']');
                     *
                     */
                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_EMAIL'][] = $tmp_email_name_ARRAY['email'][$i];
                    $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_EMAIL'][] = 1;

                    if(isset($name_array)){

                        if(isset($name_array[$i])){

                            $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_NAME'][] = $name_array[$i];
                            $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_NAME'][] = 1;

                        }else{

                            if(isset($tmp_email_name_ARRAY['name'][$i])){

                                if($tmp_email_name_ARRAY['name'][$i] != ''){

                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_NAME'][] = $tmp_email_name_ARRAY['name'][$i];
                                    $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_NAME'][] = 1;

                                }else{

                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_NAME'][] = '';
                                    $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['REPLYTO_NAME'][] = 1;

                                }

                            }

                        }

                    }

                break;
                case 'CC_EMAIL_PIPED':

                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['CC_EMAIL'][] = $tmp_email_name_ARRAY['email'][$i];
                    $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['CC_EMAIL'][] = 1;

                    if(isset($name_array)){

                        if(isset($name_array[$i])){

                            /*error_log('[lnum ' . 
                             *    __LINE__ . '] [mthd ' . 
                             *    __METHOD__ . 
                             *    '] CC_EMAIL_PIPED name data[' . 
                             *    $i . '] saved=' . 
                             *    $name_array[$i]);
                             *
                             */
                            $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['CC_NAME'][] = $name_array[$i];
                            $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['CC_NAME'][] = 1;

                        }else{

                            if(isset($tmp_email_name_ARRAY['name'][$i])){

                                if($tmp_email_name_ARRAY['name'][$i] != ''){

                                    /*error_log('[lnum ' . 
                                     *    __LINE__ . '] [mthd ' . 
                                     *    __METHOD__ . 
                                     *    '] CC_EMAIL_PIPED WCR name data[' . 
                                     *    $i . '] saved=' . 
                                     *    $tmp_email_name_ARRAY['name'][$i]);
                                     *
                                     */
                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['CC_NAME'][] = $tmp_email_name_ARRAY['name'][$i];

                                }else{

                                    /*error_log('[lnum ' . 
                                     *    __LINE__ . '] [mthd ' . 
                                     *    __METHOD__ . 
                                     *    '] CC_EMAIL_PIPED WCR name data[' . 
                                     *    $i . 
                                     *    '] saved=[\'\']');
                                     *
                                     */
                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['CC_NAME'][] = '';

                                }

                                $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['CC_NAME'][] = 1;

                            }

                        }

                    }

                break;
                case 'BCC_EMAIL_PIPED':

                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['BCC_EMAIL'][] = $tmp_email_name_ARRAY['email'][$i];
                    $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['BCC_EMAIL'][] = 1;

                    if(isset($name_array)){

                        if(isset($name_array[$i])){

                            $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['BCC_NAME'][] = $name_array[$i];
                            $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['BCC_NAME'][] = 1;

                        }else{

                            if(isset($tmp_email_name_ARRAY['name'][$i])){

                                if($tmp_email_name_ARRAY['name'][$i] != ''){

                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['BCC_NAME'][] = $tmp_email_name_ARRAY['name'][$i];

                                }else{

                                    $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['BCC_NAME'][] = '';

                                }

                                $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['BCC_NAME'][] = 1;

                            }

                        }

                    }

                break;

            }

        }

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
    function receive_profile_RESOURCE_OPENSOURCE_WCR(
             $oWCR, 
             $WCR_key)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am FTP profile. 
         * Receive CRNRSTN :: WCR 
         * FTP data. 
         *
         *
         * error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] I am FTP profile. ' . 
         *    'Receive CRNRSTN :: WCR FTP data. ' . 
         *    $WCR_key);
         *
         */
        $this->wcr_profiles_cnt++;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * *All* possible FTP WCR keys. 
         *
         */
        foreach($this->profile_endpoint_criteria_ARRAY[CRNRSTN_RESOURCE_OPENSOURCE] as 
            $param_key => $value)
        {

            if($oWCR->isset_WCR($WCR_key, $param_key) == true){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: WCR data 
                 * can be (object) DDO, 
                 * int, double, string. 
                 *
                 */
                $tmp_wcr_data = $oWCR->get_attribute($WCR_key, $param_key);
                $this->error_log('We have received ' . 
                       'CRNRSTN_RESOURCE_OPENSOURCE data ' . 
                       $param_key . '=[' . 
                       print_r($tmp_wcr_data, true) . 
                       '] from wcr=' . 
                       $WCR_key . '.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       CRNRSTN_RESOURCE_OPENSOURCE);

                /*error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . 
                 *    '] STORING OBJECT [' . 
                 *    $param_key . ']=' . 
                 *    print_r($tmp_wcr_data, true));
                 *
                 */
                $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = $tmp_wcr_data;
                $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = 1;

            }

        }

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
    function receive_profile_EMAIL_PROXY_WCR(
             $oWCR, 
             $WCR_key)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am email proxy 
         * profile. Receive email 
         * proxy CRNRSTN :: WCR data. 
         *
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] I am email proxy. ' . 
         *    'Receive email proxy ' . 
         *    'CRNRSTN :: WCR data. ' . 
         *    $WCR_key);
         *
         */
        $this->wcr_profiles_cnt++;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * *All* possible email proxy 
         * CRNRSTN :: WCR keys. 
         *
         */
        foreach($this->profile_endpoint_criteria_ARRAY[CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL] as 
            $param_key => $value)
        {

            // $this->profile_endpoint_criteria_ARRAY[CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL]['ISHTML'] = 1;
            if($oWCR->isset_WCR($WCR_key, $param_key) == true){

                $tmp_wcr_data = $oWCR->get_attribute(
                                       $WCR_key, 
                                       $param_key, 
                                       true);

                switch($param_key){
                    case 'RECIPIENTS_NAME_PIPED':
                    case 'REPLYTO_NAME_PIPED':
                    case 'CC_NAME_PIPED':
                    case 'BCC_NAME_PIPED':
                    break;
                    case 'RECIPIENTS_EMAIL_PIPED':

                        $tmp_name_array = array();
                        $tmp_name_data = $oWCR->get_attribute(
                                                $WCR_key, 
                                                'RECIPIENTS_NAME_PIPED');

                        if($tmp_name_data->preach('isset', $param_key) == true){

                            $tmp_name_array = explode(
                                              '|', 
                                              $tmp_name_data->preach(
                                                              'data_value', 
                                                              $param_key));

                        }

                        //$tmp_email_array = $this->receive_profile_EMAIL($tmp_wcr_data, $param_key);
                        $this->receive_profile_EMAIL(
                               $tmp_wcr_data, 
                               $param_key, 
                               $tmp_name_array);

                    break;
                    case 'REPLYTO_EMAIL_PIPED':

                        $tmp_name_array = array();
                        $tmp_name_data = $oWCR->get_attribute(
                                                $WCR_key, 
                                                'REPLYTO_NAME_PIPED');

                        if($tmp_name_data->preach('isset', $param_key) == true){

                            $tmp_name_array = explode(
                                              '|', $tmp_name_data->preach(
                                                                   'data_value', 
                                                                   $param_key));

                        }

                        //$tmp_email_array = $this->receive_profile_EMAIL($tmp_wcr_data, $param_key);
                        $this->receive_profile_EMAIL($tmp_wcr_data, $param_key, $tmp_name_array);

                    break;
                    case 'CC_EMAIL_PIPED':

                        $tmp_name_array = array();
                        $tmp_name_data = $oWCR->get_attribute(
                                                $WCR_key, 
                                                'CC_NAME_PIPED');

                        if($tmp_name_data->preach('isset', $param_key) == true){

                            $tmp_name_array = explode(
                                              '|', 
                                              $tmp_name_data->preach(
                                                              'data_value', 
                                                              $param_key));

                        }

                        $this->receive_profile_EMAIL(
                               $tmp_wcr_data, 
                               $param_key, 
                               $tmp_name_array);

                    break;
                    case 'BCC_EMAIL_PIPED':

                        $tmp_name_array = array();
                        $tmp_name_data = $oWCR->get_attribute(
                                                $WCR_key, 
                                                'BCC_NAME_PIPED');

                        if($tmp_name_data->preach('isset', $param_key) == true){

                            $tmp_name_array = explode(
                                              '|', 
                                              $tmp_name_data->preach(
                                                              'data_value', 
                                                              $param_key));

                        }

                        $this->receive_profile_EMAIL(
                               $tmp_wcr_data, 
                               $param_key, 
                               $tmp_name_array);

                    break;
                    default:

                        /*error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . 
                         *    '] [' . 
                         *    $this->wcr_profiles_cnt . '][' . 
                         *    strtoupper($param_key) . '][' . 
                         *    $tmp_wcr_data . 
                         *    ']');
                         *
                         */
                        $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = $tmp_wcr_data;
                        $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = 1;

                    break;

                }

            }

        }

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
    function receive_profile_FTP_WCR(
             $oWCR, 
             $WCR_key)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am FTP profile. 
         * Receive FTP CRNRSTN :: WCR data.
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] I am FTP profile. ' . 
         *    'Receive FTP CRNRSTN :: WCR data. ' . 
         *    $WCR_key);
         *
         */
        $this->wcr_profiles_cnt++;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * *All* possible CRNRSTN :: WCR 
         * FTP keys. 
         *
         */
        foreach($this->profile_endpoint_criteria_ARRAY[CRNRSTN_LOG_FILE_FTP] as 
            $param_key => $value)
        {

            if($oWCR->isset_WCR($WCR_key, $param_key) == true){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: WCR data 
                 * can be (object) DDO, 
                 * int, double, string. 
                 *
                 */
                $tmp_wcr_data = $oWCR->get_attribute(
                                       $WCR_key, 
                                       $param_key);

                /*error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . 
                 *    '] STORING OBJECT [' . 
                 *    $param_key . ']=' . 
                 *    print_r($tmp_wcr_data, true));
                 *
                 */
                $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = $tmp_wcr_data;
                $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = 1;

            }

        }

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
    function receive_profile_FILE_WCR(
             $oWCR, 
             $WCR_key)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am file profile. 
         * Receive CRNRSTN :: WCR file data.
         *
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] I am file profile. ' . 
         *    'Receive CRNRSTN :: WCR file data. ' . 
         *    $WCR_key);
         *
         */
        $this->wcr_profiles_cnt++;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * *All* posible CRNRSTN :: WCR 
         * file keys. 
         *
         */
        foreach($this->profile_endpoint_criteria_ARRAY[CRNRSTN_LOG_FILE] as 
            $param_key => $value)
        {

            $tmp_wcr_data = $oWCR->get_attribute(
                                   $WCR_key, 
                                   $param_key);

            if(is_object($tmp_wcr_data)){

                /**
                 *error_log('[lnum ' . 
                 *    __LINE__ . '] [mthd ' . 
                 *    __METHOD__ . 
                 *    '] Data from WCR[' . 
                 *    $WCR_key . '] @ [' . 
                 *    $param_key . ']=[' . 
                 *    $tmp_wcr_data . ']');
                 *
                 */
                $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = $tmp_wcr_data;
                $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt][strtoupper($param_key)][] = 1;

            }

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
    function receive_profile_FILE($data)
    {

        $this->isValid = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * I am file profile. 
         * Receive CRNRSTN :: WCR 
         * file data. 
         *
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] I am file profile. ' . 
         *    'Receive CRNRSTN :: WCR file data. ' . 
         *    $data);
         *
         */
        $this->profile_endpoint_data_ARRAY[$this->wcr_profiles_cnt]['LOCAL_DIR_PATH'][] = $data;
        $this->profile_endpoint_set_flag_ARRAY[$this->wcr_profiles_cnt]['LOCAL_DIR_PATH'][] = 1;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_profile()
    {

        return $this->logging_profile;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function active_by_default($logging_profile)
    {

        switch($logging_profile){
            case CRNRSTN_LOG_DEFAULT:
            case CRNRSTN_LOG_SCREEN_TEXT:
            case CRNRSTN_LOG_SCREEN:
            case CRNRSTN_LOG_SCREEN_HTML:
            case CRNRSTN_LOG_SCREEN_HTML_HIDDEN:
            /*case 'R_channel_GET':
             *case 'R_channel_POST':
             *case 'R_channel_COOKIE':
             *case 'R_channel_SESSION':
             */
            case CRNRSTN_LOG_DATABASE:
            case CRNRSTN_LOG_SSDTLA:
            case CRNRSTN_LOG_PSSDTLA:
            case CRNRSTN_LOG_SOAP:
            /*case 'R_channel_FILE':
             *case 'R_channel_ALL':
             *case 'R_channel_FORM':
             *
             * CRNRSTN :: Lightsaber RoCEv2 
             * SOAP Services Layer (CLR-SSL) 
             * Multi-Channel Decoupled Data
             * Object (MC-DDO) channel 
             * integrations to strengthen 
             * and enrich the CLR-SSL 
             * Logging Services Layer. 
             *
             * 'R_channel_GET'
             * 'R_channel_POST'
             * 'R_channel_COOKIE'
             * 'R_channel_SESSION'
             * 'R_channel_DATABASE'
             * 'R_channel_SSDTLA'
             * 'R_channel_PSSDTLA'
             * 'R_channel_RUNTIME'
             * 'R_channel_SOAP'
             * 'R_channel_FILE'
             * 'R_channel_RDMA'
             * 'R_channel_FORM'
             * 'R_channel_ALL'
             *
             *
             * 5 :: Saturday, December 2, 2023 @ 1948 hrs.
             * Last Modified: Sunday, July 12, 2026 @ 1107 hrs.
             * 
             * //$this->isValid = true;
             *
             */

            break;

        }

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
    private function reformat_pipe_data(
                     $profile_key, 
                     $data)
    {

        $tmp_array = array();

        switch($profile_key){
            case CRNRSTN_LOG_EMAIL:
            case CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL:

                $tmp_pipe_to_array = explode('|', $data);

                if(count($tmp_pipe_to_array) < 2){

                    $tmp_pipe_to_array = explode(',', $data);

                }

                foreach($tmp_pipe_to_array as 
                    $key => $email_data)
                {

                    $email_data = trim($email_data);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we have an @ symbol?. If no, 
                     * skip and maybe log. 
                     *
                     */
                    $pos_at = strpos($email_data, '@');
                    if($pos_at !== false){

                        /**
                         *error_log('[lnum ' . 
                         *    __LINE__ . '] [mthd ' . 
                         *    __METHOD__ . 
                         *    '] We have email data in ' . 
                         *    $email_data);
                         *
                         */

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have email. 
                         * Check for spaces as 
                         * indication of presence 
                         * of name data. 
                         *
                         */
                        $pos_space = strpos($email_data, ' ');
                        if($pos_space === false){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * No name data? 
                             * Check for comma.
                             *
                             */
                            $pos_comma = strpos($email_data, ',');
                            if($pos_comma === false){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Yep. Just email. 
                                 *
                                 */
                                $tmp_array['email'][] = $email_data;
                                $tmp_array['name'][] = '';

                            }else{

                                $tmp_name = '';

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Explode on comma and 
                                 * process for single 
                                 * email and name combo. 
                                 *
                                 */
                                $tmp_comma_to_array = explode(',', $email_data);
                                foreach($tmp_comma_to_array as 
                                    $commaKey => $comma_delim_data)
                                {

                                    $pos_at = strpos($comma_delim_data, '@');
                                    if($pos_at !== false){

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Process email. 
                                         *
                                         */
                                        $tmp_email = $comma_delim_data;

                                    }else{

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * Process name. 
                                         *
                                         */
                                        if($comma_delim_data != ''){

                                            $tmp_name .= $comma_delim_data . ' ';

                                        }

                                    }

                                }

                                $tmp_name = rtrim($tmp_name, ' ');

                                $tmp_array['email'][] = $tmp_email;
                                $tmp_array['name'][] = $tmp_name;

                            }

                        }else{

                            $tmp_name = '';
                            /**
                             *error_log('[lnum ' . 
                             *    __LINE__ . '] [mthd ' . 
                             *    __METHOD__ . 
                             *    '] We have name data in ' . 
                             *    $email_data);
                             *
                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Check for name 
                             * and email due 
                             * to presence of 
                             * space char data. 
                             *
                             */
                            $tmp_space_to_array = explode(' ', $email_data);
                            foreach($tmp_space_to_array as 
                                $spaceKey => $space_delim_data)
                            {

                                $pos_at = strpos($space_delim_data, '@');
                                if($pos_at !== false){

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Process email. 
                                     *
                                     */
                                    $tmp_email = $space_delim_data;

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * Process name. 
                                     *
                                     */
                                    if($space_delim_data != ''){

                                        $tmp_name .= $space_delim_data . ' ';
                                        /**
                                         *error_log('[lnum ' . 
                                         *    __LINE__ . '] [mthd ' . 
                                         *    __METHOD__ . 
                                         *    '] Building name=>' . 
                                         *    $tmp_name);
                                         *
                                         */

                                    }

                                }

                            }

                            $tmp_name = rtrim($tmp_name, ' ');

                            $tmp_array['email'][] = $tmp_email;
                            $tmp_array['name'][] = $tmp_name;

                            /**
                             *error_log('[lnum ' . 
                             *    __LINE__ . '] [mthd ' . 
                             *    __METHOD__ . 
                             *    '] Adding name to ' . 
                             *    'tmp_array[\'name\']=>' . 
                             *    $tmp_name);
                             *
                             */

                        }

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * No email data 
                         * in this data! 
                         *
                         */
                        if(is_object($this->oCRNRSTN)){

                            $clr_ssl_msg = 'The provided ' . 
                                           $profile_key . ' data "' . 
                                           $data . '" does not contain ' . 
                                           'an email address, and it ' . 
                                           'will be ignored.';
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
                                   \LOG_NOTICE, 
                                   \E_NOTICE, 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__, 
                                   $token);

                        }

                    }

                }

            break;

        }

        /**
         *$tmp_array['email'][]
         *$tmp_array['name'][]
         *
         *error_log('[lnum ' . 
         *    __LINE__ . '] [mthd ' . 
         *    __METHOD__ . 
         *    '] returning tmp_array[\'email\'] & [\'name\']');
         *
         */

        return $tmp_array;

    }

    /**
     * public function load_CRNRSTN_ENV($oCRNRSTN_ENV)
     * {
     *
     *     $this->oCRNRSTN = $oCRNRSTN_ENV;
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
    private function load_log_output_mgr()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of 
         * the CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services Layer 
         * (CLR-SSL) Logging 
         * Services Layer Output 
         * Manager class object. 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2125 hrs.
         *
         * $this->oLog_output_manager = new crnrstn_log_output_manager($oCRNRSTN);
         *
         */
        $this->oLog_output_manager = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_log_output_manager');

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