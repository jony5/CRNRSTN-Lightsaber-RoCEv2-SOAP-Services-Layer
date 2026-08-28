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

use networking\ftp\crnrstn_wind_cloud_fire;/**
 * 
 *
 * CLASS DEFINITION :: crnrstn_user
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: September 11, 2012 @ 1720 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The original CRNRSTN :: framework
 *                     was architected to be a set of
 *                     objects used like tools or the
 *                     parts of a car that could be
 *                     worked as independent pieces
 *                     into an application.
 *
 *                     With the CRNRSTN :: User class
 *                     object, what was an unwieldy jumble
 *                     of separate car parts in the front
 *                     yard for a developer to pick through
 *                     and put to use received some
 *                     consolidation and organization.
 *
 *                     We tried to make a good framework
 *                     handle for the developer, and
 *                     ended up absolutely crushing a
 *                     bunch of database kit making the
 *                     User class object (and later the
 *                     Bassdrive Stream JSON Relay) to
 *                     be strong in database support.
 *
 *                     The user class bolted down seats
 *                     and a steering wheel onto CRNRSTN ::
 *                     for the user (i.e. PHP developer).
 *
 *                     [2023 UPDATE]
 *                     The CRNRSTN :: class object has
 *                     been promoted to take the place of
 *                     the User class object as the
 *                     representation and singular utility
 *                     object to be handled as THE
 *                     instantiation of the  CRNRSTN ::
 *                     Lightsaber SOAP Services Layer.
 *
 *                     Now, the original user class object
 *                     (this class) is what CRNRSTN ::
 *                     Lightsaber articulates to do stuff.
 *
 *                     So the developer will be using
 *                     CRNRSTN :: Lightsaber, and CRNRSTN ::
 *                     Lightsaber uses the CRNRSTN :: User
 *                     class object giving CRNRSTN ::
 *                     Lightsaber the framework User
 *                     seats, giving CRNRSTN :: Lightsaber
 *                     the steering wheel, and giving
 *                     CRNRSTN :: Lightsaber the gas
 *                     pedal, too.
 *
 *                     Then CRNRSTN :: PLAID came along
 *                     and the CRNRSTN :: Lightsaber
 *                     SOAP Services Layer got a carbon
 *                     fiber hood with a NACA duct
 *                     ram air scoop.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 1358 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @return object
 * @access public
 *
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @package CRNRSTN
 *
 */
class crnrstn_user extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_user 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN, $oCRNRSTN_ENV) input 
     *       parameters with their public 
     *       definitions, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN and 
     *       $oCRNRSTN_ENV variables. 
     *       5 :: Tuesday, March 31, 2026 @ 1334 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Replaced use of private static 
     *       $config_serial with private 
     *       static $R_data.
     *       5 :: Sunday, June 14, 2026 @ 1247 hrs.
     *
     */
    public $R                 = array();
    private $R_data           = array();

    protected $oNUSOAP_BASE;
    protected $oCRNRSTN_TRM;
    protected $oCRNRSTN_BASSDRIVE;
    protected $oCRNRSTN_AUTH;
    protected $oCRNRSTN_ACCNT;
    protected $oCRNRSTN_VSC;
    private static $oRedirectCntrlr;
    public $oMySQLi_ARRAY = array();
    private static $oMySQLi_hash_ARRAY = array();
    private static $oCRNRSTN_SQL_SILO;
    private static $oPaginator;
    protected $oSoapClient;
    protected $oCRNRSTN_UX;
    private static $oCRNRSTN_CSS_VALIDATOR;

    public $account_serial;

    private static $oLog_ProfileManager;

    public $cache_ttl_default = 80;
    public $useCURL_default = true;
    protected $ssdtl_packet_ttl = -1;
    protected $secret_key_override_ARRAY = array();
    protected $cipher_override_ARRAY = array();
    protected $hmac_algorithm_override_ARRAY = array();
    protected $options_bitwise_override_ARRAY = array();
    protected $WSDL_cache_ttl_ARRAY = array();
    protected $nusoap_useCURL_ARRAY = array();

    private static $form_handle_ARRAY = array();
    private static $form_input_general_ARRAY = array();
    private static $form_input_hidden_ARRAY = array();
    private static $form_input_transaction_copy_ARRAY = array();
    private static $formIntegrationPacket_ARRAY = array();
    private static $formIntegrationPacketReceived_ARRAY = array();
    private static $http_param_handle_ARRAY = array();
    private static $formIntegrationIsset_ARRAY = array();
    private static $formIntegrationErr_ARRAY = array();
    private static $formIntegrationIcon_ARRAY = array();
    private static $adHocVariable_ARRAY = array();

    public $query_ttl;
    public $ini_set_ARRAY = array();

    public $env_key;
    public $env_key_hash;

    protected $oMessenger_ARRAY = array();
    private static $bitwise_serialization_cnt = 0;
    protected $is_soap_data_tunnel_endpoint = false;
    public $destruct_output = '';
    public $ui_module_state_response_output = '';
    public $soap_data_tunnel_output = '';
    protected $new_serial_log_ARRAY = array();
    protected $wcr_wp_profile_version_key = 'CRNRSTN::WP::INTEGRATIONS';

    private static $lang_struct_time = array();

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct(
             $R_asset_mgr, 
             $R_log_output_mgr, 
             $R_sql_profile_mgr, 
             $R_redirect_cntrlr, 
             $R_pagination_mgr, 
             $R_ux_mgr)
    {

        $this->R_data['R_cluster_id'] = $this->get_crnrstn('R_cluster_id');
        $this->R_data['R_node_id']    = $this->get_crnrstn('R_node_id');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize CLR-SSL System Asset 
         * Manager which was originally a 
         * dynamic content controller class 
         * for putting images into system 
         * generated email messages. 
         *
         *
         * 5 :: Sunday, July 26, 2026 @ 2246 hrs.
         *
         */
        $this->R['asset_mgr']       = $R_asset_mgr;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize the CLR-SSL Logging 
         * Services Layer Output Manager.
         *
         *
         * 5 :: Monday, July 26, 2026 @ 0042 hrs.
         *
         */
        $this->R['log_output_mgr']  = $R_log_output_mgr;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize the CRNRSTN :: 
         * Lightsaber RoCEv2 SOAP Services 
         * Layer (CLR-SSL) MySQL Database 
         * Integration Services Layer 
         * Query Profile Manager 
         * class object. 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2248 hrs.
         *
         * $this->oCRNRSTN_QPM = new crnrstn_sql_profile_manager($this);
         *
         * $this->oCRNRSTN_QPM = $this->return_registered_resource(
         *                              'new', 
         *                              'crnrstn_sql_profile_manager',
         *                              $this);
         *
         */
        $this->R['sql_profile_mgr'] = $R_sql_profile_mgr;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of
         * the CRNRSTN :: Lightsaber
         * SOAP Services Layer
         * Redirect Controller
         * class object.
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2250 hrs.
         *
         * self::$oRedirectCntrlr = new crnrstn_redirect_controller($this);
         *
         * self::$oRedirectCntrlr = $this->return_registered_resource(
         *                              'new', 
         *                              'crnrstn_redirect_controller', 
         *                              $this);
         *
         */
        $this->R['redirect_cntrlr'] = $R_redirect_cntrlr;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of
         * the CRNRSTN :: Lightsaber
         * SOAP Services Layer MySQL
         * Database Integrations
         * Result Set Pagination
         * Manager class object.
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2251 hrs.
         *
         * self::$oPaginator = new crnrstn_result_set_pagination_manager($this);
         *
         * self::$oPaginator = $this->return_registered_resource(
         *                            'new', 
         *                            'crnrstn_result_set_pagination_manager', 
         *                            $this);
         *
         */
        $this->R['pagination_mgr'] = $R_pagination_mgr;

        $this->env_key           = $this->return_env_key();
        $this->env_key_hash      = $this->return_env_key(true);
        //$this->destruct_output = $this->R_env->destruct_output; 

        //self::$lang_struct_time = $this->R_env->return_lang_content_ARRAY();
        self::$lang_struct_time = $this->return_lang_content_ARRAY();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of
         * the CRNRSTN :: Lightsaber
         * SOAP Services Layer User
         * Experience (UX) Manager
         * class object.
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2253 hrs.
         *
         * $this->oCRNRSTN_UX = new crnrstn_ux_manager($this);
         *
         * $this->oCRNRSTN_UX = $this->return_registered_resource(
         *                             'new', 
         *                             'crnrstn_ux_manager', 
         *                             $this);
         *
         */
        $this->R['ux'] = $R_ux_mgr;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function init_query_silo()
    {

        //
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // Return an instantiation of
        // the CRNRSTN :: Lightsaber
        // SOAP Services Layer MySQL
        // Database Integrations
        // Query Silo Storage
        // class object.
        //
        //
        // 5 :: Monday, July 15, 2024 @ 2258 hrs.
        //
        // self::$oCRNRSTN_SQL_SILO = new crnrstn_database_sql_silo($oCRNRSTN);
        self::$oCRNRSTN_SQL_SILO = $this->return_registered_resource(
                                          'new', 
                                          'crnrstn_database_sql_silo');

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function session_load_complete()
    {

        //if(!$this->isset_query_result_set_key('CRNRSTN_CACHE_CHECKSUM_TTL_DATA')){
//
//            $tmp_query = 'SELECT `crnrstn_jony5_content_version_checksums`.`CHECKSUM_PROFILE_ID`,
//                `crnrstn_jony5_content_version_checksums`.`PROGRAM_KEY`,
//                `crnrstn_jony5_content_version_checksums`.`DEVICE_TYPE_CHANNEL`,
//                `crnrstn_jony5_content_version_checksums`.`CONTENT_CHECKSUM_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`TITLE_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`COLORS_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`STATS_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`RELAY_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`REPORTING_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CHECKSUM`,
//                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT`,
//                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT_LOCK`,
//                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT_LOCK_TTL`,
//                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT_LOCK_ISACTIVE`,
//                `crnrstn_jony5_content_version_checksums`.`DATEMODIFIED`,
//                `crnrstn_jony5_content_version_checksums`.`DATECREATED`
//            FROM `crnrstn_jony5_content_version_checksums`
//            WHERE `crnrstn_jony5_content_version_checksums`.`PROGRAM_KEY` = "BASSDRIVE"
//            AND (`crnrstn_jony5_content_version_checksums`.`DEVICE_TYPE_CHANNEL` = "DESKTOP"
//            OR `crnrstn_jony5_content_version_checksums`.`DEVICE_TYPE_CHANNEL` = "' . $this->device_type . '") LIMIT 1;';
//            $tmp_result_set_key = $this->load_query_profile('CRNRSTN_SESSION', '!jesus_is_my_dear_lord!', 'CRNRSTN_CACHE_CHECKSUM_TTL_DATA', __LINE__, __METHOD__);
//            $this->add_database_query($tmp_result_set_key, $tmp_query);

     //   }
//
//        $tmp_query = 'SELECT `crnrstn_session`.`SESSION_ID`,
//            `crnrstn_session`.`SERIAL_ID`,
//            `crnrstn_session`.`SERIAL`,
//            `crnrstn_session`.`CLIENT_ID`,
//            `crnrstn_session`.`SERVER_IP`,
//            `crnrstn_session`.`CLIENT_IP`,
//            `crnrstn_session`.`DEVICE_TYPE_CONSTANT`,
//            `crnrstn_session`.`DEVICE_TYPE`,
//            `crnrstn_session`.`HTTP_USER_AGENT`,
//            `crnrstn_session`.`ACCEPT_LANGUAGE`,
//            `crnrstn_session`.`HTTP_REFERER`,
//            `crnrstn_session`.`DATEMODIFIED`,
//            `crnrstn_session`.`DATECREATED`
//        FROM `crnrstn_session`
//        WHERE `crnrstn_session`.`SESSION_ID` = "' . session_id() . '"
//        AND `crnrstn_session`.`SESSION_ID_CRC32` = ' . $this->crc_int32(session_id()) . '
//        AND `crnrstn_session`.`ISACTIVE` = 1 LIMIT 1;';
//        $tmp_result_set_key = $this->load_query_profile('CRNRSTN_SESSION', '!jesus_is_my_dear_lord!', 'CRNRSTN_SESSION_DATA', __LINE__, __METHOD__);
//        $this->add_database_query($tmp_result_set_key, $tmp_query);

        //
        // PROCESS ALL 
        // QUERY TO CONNECTION(S)
        $this->process_query();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function reset_auth_account()
    {

        /*
        Sunday May 9, 2021 1000hrs
        REDIRECT ON INVALID GET REQUEST
         - 503 ERROR
         - REDIRECT TO SIGN IN FORM

        if($this->isset_resource(
                            'data_value', 
                            $crnrstn_form_handle, 
                            $tmp_data_type_family) == true)
        {

        */

        // 
        // CHECK FOR 
        // EXISTING SESSION. 
        if($this->isset_resource(
                  'data_value', 
                  'R_account_status') == true)
        {
        //if($this->isset_data_key('R_account_status')){

            $tmp_status = $this->get_session_param('R_account_status');

            if($tmp_status == 'AUTH_ACTIVE'){

                $this->toggle_bit($this->R_data['int_flag']['R_account'], false);
                $this->set_session_param('R_account_status', 'LOGGED_OUT');

                if($this->isset_resource(
                          'data_value', 
                          'R_account') == true)
                {
                    //if($this->isset_data_key('R_account')){

                    $tmp_oAUTH_ACCNT = $this->get_session_param('R_account');

                    if(!is_object($tmp_oAUTH_ACCNT)){

                        //
                        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                        // Return an instantiation of
                        // the CRNRSTN :: Lightsaber
                        // SOAP Services Layer User
                        // Authorization Manager
                        // class object.
                        //
                        //
                        // 5 :: Monday, July 15, 2024 @ 2300 hrs.
                        //
                        // $this->oCRNRSTN_AUTH = new crnrstn_user_authorization($this);
                        $this->oCRNRSTN_AUTH = $this->return_registered_resource(
                                                      'new', 
                                                      'crnrstn_user_authorization_manager', 
                                                      $this);

                    }else{

                        if($tmp_oAUTH_ACCNT->is_expired()){

                            //
                            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                            // Return an instantiation of
                            // the CRNRSTN :: Lightsaber
                            // SOAP Services Layer User
                            // Authorization Manager
                            // class object.
                            //
                            //
                            // 5 :: Monday, July 15, 2024 @ 2301 hrs.
                            //
                            // $this->oCRNRSTN_AUTH = new crnrstn_user_authorization($this);
                            $this->oCRNRSTN_AUTH = $this->return_registered_resource(
                                                          'new', 
                                                          'crnrstn_user_authorization_manager', 
                                                          $this);

                        }else{

                            $this->oCRNRSTN_AUTH = $tmp_oAUTH_ACCNT;
                            $this->oCRNRSTN_AUTH->is_logged_in(false);

                        }

                    }

                }

                //
                // SYNC SESSION 
                // WITH THE USER 
                // OBJECT. 
                $this->set_session_param(
                       'R_account', 
                       $this->oCRNRSTN_AUTH);

            }else{

                error_log(__LINE__ . 
                    ' user init auth ' . 
                    'SOMETHING HERE.....');

            }

        }else{

            //
            // NO SESSION ACCOUNT 
            // STATE IS SET. 
            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            // Return an instantiation of
            // the CRNRSTN :: Lightsaber
            // SOAP Services Layer User
            // Authorization Manager
            // class object.
            //
            //
            // 5 :: Monday, July 15, 2024 @ 2303 hrs.
            //
            // $this->oCRNRSTN_AUTH = new crnrstn_user_authorization($this);
            $this->oCRNRSTN_AUTH = $this->return_registered_resource(
                                          'new', 
                                          'crnrstn_user_authorization_manager', 
                                          $this);

            $this->toggle_bit($this->R_data['int_flag']['R_account'], false);

            //
            // SYNC SESSION 
            // WITH THE USER 
            // OBJECT. 
            $this->set_session_param(
                   'R_account', 
                   $this->oCRNRSTN_AUTH);

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
    function account_get_resource($data_type)
    {

        if($this->oCRNRSTN_AUTH->is_set()){

            error_log(__LINE__ . 
                ' user account_get_resource ' . 
                'isset=true and requesting ' . 
                '$data_type=[' . 
                $data_type . ']');

            return $this->oCRNRSTN_AUTH->account_get_resource($data_type);

        }else{

            error_log(__LINE__ . 
                ' user account_get_resource ' . 
                'isset=false and requesting ' . 
                '$data_type=[' . 
                $data_type . ']');

            switch($data_type){
                case 'max_seconds_inactive':

                    return $this->R_env->return_max_seconds_inactive();

                break;
                case 'max_login_attempts':

                    return $this->R_env->return_max_login_attempts();

                break;

            }

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function account_max_secs_inactive($secs_override = NULL)
    {

        if(isset($this->oCRNRSTN_AUTH)){

            if($this->oCRNRSTN_AUTH->is_set()){

                return $this->account_max_secs_inactive($secs_override);

            }else{

                return $this->R_env->return_max_seconds_inactive();

            }

        }else{

            return $this->R_env->return_max_seconds_inactive();

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
    function account_max_login_attempts($count_override = NULL)
    {

        if(isset($this->oCRNRSTN_AUTH)){

            if($this->oCRNRSTN_AUTH->is_set()){

                return $this->account_get_resource('max_login_attempts');

            }else{

                return $this->R_env->return_max_login_attempts();

            }

        }else{

            return $this->R_env->return_max_login_attempts();

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
    function account_remaining_login_attempts($count_override = NULL)
    {

        if(isset($this->oCRNRSTN_AUTH)){

            if($this->oCRNRSTN_AUTH->is_set()){

                return $this->oCRNRSTN_AUTH->account_remaining_login_attempts($count_override);

            }else{

                return $this->R_env->return_max_login_attempts();

            }

        }else{

            return $this->R_env->return_max_login_attempts();

        }

    }

/*
      public function return_max_seconds_inactive()
      {

          return $this->R_env->return_max_seconds_inactive();

      }

      private function return_max_login_attempts($meta_type = 'counts')
      {

          return $this->R_env->return_max_login_attempts();

      }

      public function return_login_attempts($meta_type = 'count')
      {

          switch($meta_type){
              case 'max':

                  return $this->return_max_login_attempts();

              break;
              case 'remaining':

                  if(isset($this->oCRNRSTN_AUTH)){

                      return $this->oCRNRSTN_AUTH->return_login_attempts_remaining();

                  }else{

                      return $this->return_max_login_attempts();

                  }

              break;
              default:

                  if(isset($this->oCRNRSTN_AUTH)){

                      return $this->oCRNRSTN_AUTH->return_login_attempts();

                  }

              break;

          }

          return 0;

      }
 */

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_wcr_wp_key($profile_key_override = NULL)
    {

         if(isset($profile_key_override)){

             $this->wcr_wp_profile_version_key = $profile_key_override;

         }

         return $this->wcr_wp_profile_version_key;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_admin_ARRAY()
    {

        return $this->R_env->return_admin_ARRAY();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function update_admin_ARRAY($tmp_array)
    {

        return $this->R_env->update_admin_ARRAY($tmp_array);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function is_soap_data_tunnel_endpoint($set_value = NULL)
    {

        if(isset($set_value)){

            $this->is_soap_data_tunnel_endpoint = $set_value;
            $this->R_env->is_soap_data_tunnel_endpoint($set_value);

            return true;

        }else{

            return $this->is_soap_data_tunnel_endpoint;

        }

    }


/*
      private function compile_form_integration_packet(
                       $crnrstn_form_handle,
                       $field_input_name,
                       $encryption_status = TRUE,
                       $server_side_validation = NULL)
      {

          //
          // DATA PROFILE FOR
          // SUCCESSFUL CRNRSTN ::
          // FORM CAPTURE INTEGRATION
          # COMPILE TIMESTAMP (SERVER) 1 - 1
          # FORM HANDLE 1 - 1                 $crnrstn_form_handle
          # FORM TUNNEL PROTOCOL 1 - 1  self::$form_handle_ARRAY[$crnrstn_form_handle]
          # ALL INPUT NAME 1 - n
          # INPUT ENCRYPTION STATUS FOR HIDDEN FIELDS 1 - n
          # SERVER-SIDE VALIDATION STRING FOR DATA TREATMENT 1 - n

          // self::$formIntegrationPacket_ARRAY['timestamp']
          // self::$formIntegrationPacket_ARRAY['crnrstn_form_handle'] = $crnrstn_form_handle;
          // self::$formIntegrationPacket_ARRAY['transport_protocol'] = self::$form_handle_ARRAY[$crnrstn_form_handle]
          // self::$formIntegrationPacket_ARRAY['input_name'][n] =
          // self::$formIntegrationPacket_ARRAY['input_encrypt'][n] =
          // self::$formIntegrationPacket_ARRAY['input_validation'][n] =

          if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['timestamp'])){

              self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['timestamp'] = $this->return_micro_time();

          }

          if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['crnrstn_form_handle'])){

              self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['crnrstn_form_handle'] = $crnrstn_form_handle;

          }

          if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['transport_protocol'])){

              self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['transport_protocol'] = self::$form_handle_ARRAY[$crnrstn_form_handle];

          }

          if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['integration_packet_encrypt'])){

              self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['integration_packet_encrypt'] = 'true';

          }

          self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_name'][] = $field_input_name;

          if($encryption_status){

              $encryption_status = 'true';

          }else{

              $encryption_status = 'false';

          }

          self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_encrypt'][] = $encryption_status;

          if(!isset($server_side_validation)){

              $server_side_validation = 'false';

          }

          self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_validation'][] = $server_side_validation;

      }

      private function return_form_integration_packet($crnrstn_form_handle)
      {

          $tmp_html_out = '';
          $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['timestamp']);
          $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['crnrstn_form_handle']);
          $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['transport_protocol']);

          $tmp_input_cnt = sizeof(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_name']);
          for ($i = 0; $i < $tmp_input_cnt; $i++){

              $tmp_html_out .= $this->concatIntegrationPacketDatum($i, ":");
              $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_name'][$i], ":");
              $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_encrypt'][$i], ":");
              $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_validation'][$i], ":");

              $tmp_html_out = rtrim($tmp_html_out, ':');

              //self::$formIntegrationPacket_ARRAY['input_name']
              //self::$formIntegrationPacket_ARRAY['input_encrypt']
              //self::$formIntegrationPacket_ARRAY['input_validation']

              $tmp_html_out = $this->concatIntegrationPacketDatum($tmp_html_out);

              # <input type="hidden" name="crnrstn_pssdtl_packet" value="">

              /* value="TIMESTAMP[CRNRSTN::2.0.0]FORM_HANDLE[CRNRSTN::2.0.0]TUNNEL_PROTOCOL[CRNRSTN::2.0.0]
               * 0:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
               * 1:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
               * 2:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
               * 3:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
               * n:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]"
               *


          }

          $tmp_encrypted_flag = false;
          $tmp_html_out = rtrim($tmp_html_out, '[CRNRSTN::2.0.0]');
          if(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['packet_encryption_status'] == 'true'){

              $tmp_html_out = $this->R_env->data_encrypt($tmp_html_out);

              if($tmp_html_out != ""){

                  $tmp_encrypted_flag = true;

              }

          }

          $tmp_html_out = '<input type="hidden" ' .
                          'name="crnrstn_pssdtl_packet" ' .
                          'value="' .
                          $tmp_html_out .
                          '">';

          if($tmp_encrypted_flag){
              $tmp_html_out .= '<input type="hidden" ' .
                               'name="crnrstn_pssdtl_packet_' .
                               'ENCRYPTED" value="true">';

          }

          return $tmp_html_out;

      }

      /*
       * Retrieves an environmental lorem of
       * the ipsum.. If it doesn't exist,
       * no exception/error is caused.
       * Simply Dolor Amet is returned.
       *
       * Note ::
       *
       * @param string $resource_key The resource key.
       * @return string|null|mixed The Lorem of the Ipsum.
       * @access   private
       *
      public function return_err_data_validation_check($transport_protocol = 'POST')
      {

          $tmp_null_array = array();

          $http_protocol = strtoupper($transport_protocol);
          $http_protocol = $this->str_sanitize($http_protocol, 'http_protocol_simple');

          if(isset(self::$formIntegrationErr_ARRAY[$http_protocol])){

              if(sizeof(self::$formIntegrationErr_ARRAY[$http_protocol]) > 0){

                  return self::$formIntegrationErr_ARRAY[$http_protocol];

              }else{

                  return $tmp_null_array;

              }

          }else{

              return $tmp_null_array;

          }

      }

*/

    // SOURCE :: https://www.php.net/manual/en/function.parse-url.php
    // AUTHOR :: ivijan dot stefan at gmail dot com :: https://www.php.net/manual/en/function.parse-url.php#114704
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
    function return_youtube_embed(
             $url, 
             $width = 560, 
             $height = 315, 
             $fullscreen = true)
    {

        parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
        $youtube= '<iframe allowtransparency="true" ' . 
                  'scrolling="no" width="' . 
                  $width . '" height="' . 
                  $height . '" src="//www.youtube.com/embed/' . 
                  $my_array_of_vars['v'] . '" frameborder="0"' . 
                  ($fullscreen?' allowfullscreen':NULL) . 
                  '></iframe>';

        return $youtube;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function sync_back_link_state()
    {

        $this->oCRNRSTN_UX->sync_back_link_state();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_back_link()
    {

        return $this->oCRNRSTN_UX->return_back_link();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function pretty_elapsed_time()
    {

        $tmp_runtime = $this->wall_time();
        $tmp_microsecs_explode = explode(".", $tmp_runtime);

        return $this->return_pretty_delta_time($tmp_runtime, $tmp_microsecs_explode[1], 'ELAPSED_VERBOSE');

    }

//    public function return_crnrstn_language_manager($header_language_attribute = null){
//
//        return $this->R_env->return_crnrstn_language_manager($this, $header_language_attribute);
//
//    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function init_session()
    {

        //$this->R_env->init_session($this);
        //$this->R_env->oSESSION_MGR->init_session();

        error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . 
            '] Why am I running? die();');

        die();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function jpg_image_quality()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Where, 0 = worst / smaller file, 
         * and 100 = better / bigger file. 
         *
         */
        return $this->R_env->jpg_image_quality;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function system_filename_convert_jpg_to_png($file_path)
    {

        $tmp_is_jpg = false;

        //
        // NEED TO RETURN PNG FILE PATH FROM THIS INPUT STRING (WHICH SHOULD BE TO A JPG IMAGE FILE)
        if(stripos($file_path, '.jpeg') !== false || stripos($file_path, '.jpg') !== false){

            //
            // WE HAVE .JPEG
            $tmp_is_jpg = true;

            //
            // ONLY WORKING WITH SYSTEM JPG FILES
            if(is_file($file_path)){

                //
                // STRING PARSE NINJA BACKFLIP INTO PNG FILE PATH FROM JPG/JPEG
                $tmp_cleaned_ext_file_path = $this->strrtrim($file_path, '.jpg');

                if(strlen($tmp_cleaned_ext_file_path) == strlen($file_path)){

                    $tmp_cleaned_ext_file_path = $this->strrtrim($tmp_cleaned_ext_file_path, '.jpeg');

                }

                $tmp_cleaned_file_path_png = $tmp_cleaned_ext_file_path . '.png';

                //
                // VERIFY PNG FILE IS A FILE.
                if(is_file($tmp_cleaned_file_path_png)){

                    return $tmp_cleaned_file_path_png;

                }

            }

        }

        return '';

    }

    // Fri, July 29, 2022 1207 hrs.
    // TAKE UP ARMS AND FIGHT, SON!
    // public function base64_asset_path_listener()
    // {
//    public function ___system_link_reset_jpeg_from_png($crnrstn_png = 'I AM NOT A FILE')
//    {
//
//        $tmp_is_png = false;
//        $tmp_is_jpg = false;
//        $crnrstn_jpg = $tmp_png_filepath = $this->R_env->data_decrypt($crnrstn_png, CRNRSTN_ENCRYPT_TUNNEL, 'GET');
//
//        //crnrstn_resource_filecache_version
//        $tmp_filename = $this->return_form_submitted_value('crnrstn_image_to_process_name');
//
//        if(strlen($tmp_filename) > 2){
//
//            if(stripos($tmp_filename, '.png') !== false || $tmp_png_filepath != ''){
//
//                //
//                // WE HAVE .PNG
//                $tmp_is_png = true;
//                $crnrstn_png = $tmp_filename;
//
//                if($tmp_png_filepath != ''){
//
//                    $crnrstn_png = $tmp_png_filepath;
//
//                }
//
//                $_SESSION['CRNRSTN_' . $this->R_data['R_cluster_id']]['CRNRSTN_EXCEPTION_PREFIX'] = 'system_link_reset_jpeg_from_png() attempting to create image file ' . $crnrstn_jpg . ' from source: ' . $crnrstn_png . '. ';
//
//
//                error_log(__LINE__ . ' user ' . __METHOD__ . ':: attempting to create image file ' . $crnrstn_jpg . ' from source: ' . $crnrstn_png . '. die();');
//                die();
//
//
//                //
//                // SOURCE :: https://stackoverflow.com/questions/1201798/use-php-to-convert-png-to-jpg-with-compression
//                // AUTHOR :: Daniel De LeónDaniel De León :: https://stackoverflow.com/users/980442/daniel-de-le%c3%b3n
////                $image = imagecreatefrompng($crnrstn_png);
////                $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
////                imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
////                imagealphablending($bg, TRUE);
////                imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
////                imagedestroy($image);
////                $quality = $this->jpg_image_quality(); // 0 = worst / smaller file, 100 = better / bigger file
////                imagejpeg($bg, $crnrstn_jpg . ".jpg", $quality);
////                imagedestroy($bg);
//
//            }
//
//            if($tmp_is_jpg){
//
//
//            }
//
//        }
//
//        $tmp_file_path = $this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/jpg/' . $tmp_filename;
//
//    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function return_form_submitted_value(
             $getpost_input_name, 
             $transport_protocol = NULL)
    {

        return $this->R_env->return_form_submitted_value(
                             $getpost_input_name, 
                             $transport_protocol);

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
    private function system_link_reset_base64_from_png(
                     $base64_encode = 'I AM NOT BASE64', 
                     $filepath = NULL, 
                     $filetype = NULL)
    {

        $file_extension_jpg =
        $file_extension_png =
        $tmp_filetype       = $filetype;
        $tmp_crnrstn_png    = $this->R_env->data_decrypt($filepath);
        $tmp_filename_POST  = $this->return_form_submitted_value('crnrstn_image_to_process_name');

        $clr_ssl_msg = 'CRNRSTN :: system_link_reset_base64' .
                       '_from_png() We have a file or something ' .
                       'actually made it through CRNRSTN :: ' .
                       'OpenSSL decryption.';
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

        $clr_ssl_msg = 'CRNRSTN :: system_link_reset_' .
                       'base64_from_png[Input Type:' .
                       $filetype . '. base64_len(' .
                       \strlen($base64_encode) . ')' .
                       $tmp_crnrstn_png . ']';
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

        if(!isset($tmp_filetype)){

            $file_extension_jpg = $file_extension_png = pathinfo($tmp_crnrstn_png, PATHINFO_EXTENSION);
            //$tmp_filetype = '.png;base64,';

        }
        //die();

        //if($this->isset_http_param($this->R_env->data_decrypt($this->get_resource('CRNRSTN_SYSTEM_DATA_GET'), CRNRSTN_ENCRYPT_TUNNEL, 'GET'))){

        //$tmp_filename = $this->R_env->data_decrypt($tmp_filename);

        if($base64_encode == 'I AM NOT BASE64'){

            $tmp_filetype = strtolower($tmp_filetype);
            //if($tmp_filetype == '.png;base64,'){

            //
            // WE NEED TO ATTEMPT TO EXTRACT BASE64 FROM THE (ASSUMED) PARENT PNG FILE, IF THE STRING RECEIVED
            // CAN EVEN BE TRACED TO AN EXISTING PNG FILE.
            // 1/PNG-2/JPG-3/BASE64
            $tmp_is_png = false;
            $tmp_is_jpg = false;
            $crnrstn_jpg = $tmp_crnrstn_png;

            //crnrstn_resource_filecache_version

            //
            // DO WE WANT TO USE UGC POST VALUE AS A CHECK HERE? THIS METHOD IS PRIVATE.
            if(stripos($tmp_crnrstn_png, '.png') !== false || 
                $tmp_filename_POST != '')
            {

                //
                // WE HAVE .PNG (OR UGC TO CHECK AT THE LEAST)
                $filetype = '';
                $tmp_is_png = true;
                $crnrstn_png = $tmp_crnrstn_png;

                if($tmp_filename_POST != ''){

                    $crnrstn_png = $tmp_filename_POST;

                    //
                    // SO THAT I CAN BE LAZY AND TRUNCATE FILE EXTENSION DURING MY UGC TESTING
                    if(stripos($crnrstn_png, '.png') == false){

                        $crnrstn_png = $crnrstn_png . '.png';

                    }

                    if(!is_file($crnrstn_png)){

                        $crnrstn_png = $this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/png/' . $crnrstn_png;

                    }

                }

                if(is_file($crnrstn_png)){

                    //
                    // BASE64 THIS PNG
                    error_log(__LINE__ . ' user ' . __METHOD__ . ':: attempting to open image file ' . $crnrstn_png . ', ' . $this->find_filesize($crnrstn_png) . ' bytes. ');
                    $this->err_message_queue_push(NULL, 'system_link_reset_jpeg_from_png() attempting to open image file ' . $crnrstn_png . ', ' . $this->find_filesize($crnrstn_png) . ' bytes. ');
                    $img_binary = fread(fopen($crnrstn_png, 'r'), $this->find_filesize($crnrstn_png));
                    $this->err_message_queue_clear();
                    $mime_content_type_png = mime_content_type($img_binary);
                    $md5_png = md5_file($img_binary);
                    $sha1_png = sha1_file($img_binary);
                    $base64_encode_png = 'data:image/' . $filetype . ';base64,' . base64_encode($img_binary);

                    //
                    // STRING PARSE NINJA BACKFLIP INTO PNG FILE PATH FROM JPG/JPEG
                    // SOURCE :: https://stackoverflow.com/questions/3967515/how-to-convert-an-image-to-base64-encoding
                    // AUTHOR :: Ronny Sherer :: https://stackoverflow.com/users/380561/ronny-sherer
                    //$type = pathinfo($crnrstn_jpg, PATHINFO_EXTENSION);
                    //$data = file_get_contents($crnrstn_jpg);
                    //$base64_jpg = 'data:image/' . $type . ';base64,' . base64_encode($data);

                }

            }

            //
            // I DON'T EXPECT THIS TO RUN. BUT IF ADMIN/APPLICATION HANDLES JPG OUTSIDE
            // CRNRSTN :: ARCHITECTURE'S TARGET SCOPE (HOW I USE THE TOOL), WE CAN HANDLE IT.
            if(((stripos($crnrstn_jpg, '.jpeg') !== false || stripos($crnrstn_jpg, '.jpg') !== false) && !$tmp_is_png) || ($tmp_filename_POST != '' && !$tmp_is_png)){

                if($tmp_filename_POST != ''){

                    $crnrstn_jpg = $tmp_filename_POST;

                    //
                    // SO THAT I CAN BE LAZY AND TRUNCATE FILE EXTENSION DURING MY UGC TESTING
                    if(stripos($crnrstn_jpg, '.jpg') == false && stripos($crnrstn_jpg, '.jpeg') == false){

                        $crnrstn_jpg = $crnrstn_jpg . '.jpg';

                    }

                    if(!is_file($crnrstn_jpg)){

                        $crnrstn_jpg = $this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/jpg/' . $crnrstn_jpg;

                    }

                }

                //
                // VERIFY JPG FILE IS A FILE.
                if(is_file($crnrstn_jpg)){

                    //
                    // WE HAVE A JPG
                    $tmp_is_jpg = true;

                    //
                    // STRING PARSE NINJA BACKFLIP INTO PNG FILE PATH FROM JPG/JPEG
                    // SOURCE :: https://stackoverflow.com/questions/3967515/how-to-convert-an-image-to-base64-encoding
                    // COMMENT :: https://stackoverflow.com/a/13758760
                    // AUTHOR :: Ronny Sherer :: https://stackoverflow.com/users/380561/ronny-sherer
                    $file_extension_jpg = pathinfo($crnrstn_jpg, PATHINFO_EXTENSION);
                    $img_binary = fread(fopen($crnrstn_jpg, 'r'), $this->find_filesize($crnrstn_jpg));
                    $mime_content_type_jpg = mime_content_type($img_binary);
                    $md5_jpg = md5_file($img_binary);
                    $sha1_jpg = sha1_file($img_binary);
                    $base64_encode_jpg = 'data:image/' . $file_extension_jpg . ';base64,' . base64_encode($img_binary);

                    //
                    // BASE64 THIS JPG IF CURRENT BASE64 IS DIFFERENT.
                    @include($this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/png/' . $tmp_filename);

                    //$this->assetParams['FILE_MD5'] = md5_file($_FILES["assetfile"]["tmp_name"]);  // 32
                    //$this->assetParams['FILE_SHA1'] = sha1_file($_FILES["assetfile"]["tmp_name"]);  // 40
                }


            }

            $tmp_file_path = $this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/jpg/' . $tmp_filename;


            //}

            $tmp_pos_png = stripos($tmp_filename_POST, $tmp_filetype);
            if($tmp_pos_png == false){

                //
                // THIS IS JUST SO I CAN BE LAZY WITH UGC AND CAN EXCLUDE FILE
                // EXTENSION ON .PNG base64 CHECKS (NOW base64 UPDATES).
                $tmp_filename_POST = $tmp_filename_POST . $tmp_filetype;

            }

        }

        //
        // CONFIRM BASE64 ENCODING WITH PROVIDED FILE

        $tmp_file_path = $this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/base64/' . $tmp_filename_POST;

        if(is_file($tmp_file_path)){

            $tmp_str = '';

            //
            // $tmp_str = 'data:image/png;base64,iVBORw0KGgoAAA...geWQ====';
            @include_once($this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR') . '/_R/ui/imgs/base64/' . $tmp_filename);

            //
            // WRITE THE FILE HERE IF DIFFERENT
            if($base64_encode !== $tmp_str){

                $clr_ssl_msg = 'CRNRSTN :: There is a base64 ' .
                               'content mismatch for PHP file,' .
                               $tmp_file_path . '.';
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

                $clr_ssl_msg = 'We need to ' .
                               're-write/write the base64 PHP file, ' .
                               $tmp_file_path . '.';
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

                $tmp_file_input_str = '';

                //
                // BASE64 FILE HEADER :: July 30, 2022 @ 1908 hrs
                $tmp_file_input_str .= '/*
<?php
/*
// 5 ::
// Code is Poetry *
CRNRSTN :: v' . $this->version_crnrstn() . '

FILE_NAME: ' . $tmp_file_path . '
DATE GENERATED: ' . $this->return_micro_time() . '
SERVER IP: ' . $_SERVER['SERVER_ADDR'] . '
CLIENT IP: ' . $this->client_ip() . ' (' . 
$_SERVER['REMOTE_ADDR'] . ')
PHPSESSION: ' . session_id() . '

' . $this->return_CRNRSTN_ASCII_ART(0) . '

';

                //
                // WE HAVE $base64_encode_png AND $base64_encode_jpg TO CHECK AGAINST THE BASE64 $TMP_STR[] SITUATION
                // THAT YOU SAID YOU'D TAKE CARE OF, REAL QUICK.
                if($tmp_is_png){

                    $tmp_file_input_str .= '
ORIGINAL FILE ::
FILE EXTENSION: ' . $file_extension_png . '
FILE MIME TYPE: ' . $mime_content_type_png . '
FILE PATH: ' . $tmp_file_path . '
FILE MD5: ' . $md5_png . '
FILE SHA1: ' . $sha1_png . '
FILE BASE64: ' . $base64_encode_png . '
PROFILE ACCESS: ANONYMOUS
ACCESS TYPE: SYSTEM LEVEL ACCESS
';

                    }

                //
                // WE HAVE $base64_encode_png AND $base64_encode_jpg TO CHECK AGAINST THE BASE64 $TMP_STR[] SITUATION
                // THAT YOU SAID YOU'D TAKE CARE OF, REAL QUICK.
                if($tmp_is_jpg){

                    $tmp_file_input_str .= '
ORIGINAL FILE ::
FILE EXTENSION: ' . $file_extension_jpg . '
FILE MIME TYPE: ' . $mime_content_type_jpg . '
FILE PATH: ' . $tmp_file_path . '
FILE MD5: ' . $md5_jpg . '
FILE SHA1: ' . $sha1_jpg . '
FILE BASE64: ' . $base64_encode_jpg . '
PROFILE ACCESS: ANONYMOUS
ACCESS TYPE: SYSTEM LEVEL ACCESS
';

                }
                /*
                //
                // July 31, 2022 @ 0259 hrs :: EVIFWEB IP INTEGRATIONS FOR (PNG/JPG)BASE64 .PHP FILE MANAGEMENT
                $tmp_client_dir = substr(self::$oUser->retrieve_Form_Data("CLIENT_ID"), 0, -25);
                $tmp_assetSerial = self::$oUser->generateNewKey(50);

                $tmp_name = explode(\'.\', $_FILES[\'assetfile\'][\'name\']);

                $this->assetParams[\'FILE_EXT\'] = strtolower(array_pop($tmp_name));
                $this->assetParams[\'FILE_MIME_TYPE\'] = mime_content_type($_FILES["assetfile"]["tmp_name"]);
                $this->assetParams[\'FILE_MD5\'] = md5_file($_FILES["assetfile"]["tmp_name"]);  // 32
                $this->assetParams[\'FILE_SHA1\'] = sha1_file($_FILES["assetfile"]["tmp_name"]);  // 40
                error_log("assetmgr (954) sha1[".$this->assetParams[\'FILE_SHA1\']."] len[".strlen($this->assetParams[\'FILE_SHA1\'])."]");

                */

                $tmp_file_input_str .= '*/
';

                //
                // CHECK DISK CAPACITY BEFORE ANY WRITE (LIKE 20%...SO..MAYBE AT MOST 80%, DUDE. FOR SURE...NOT 100)
                error_log(__LINE__ . 
                    ' user fwrite(w).' . __METHOD__ . '::[' . 
                    print_r($tmp_file_input_str, true) . 
                    ']. die();');
                die();

                //
                // VALIDATE FILE PATH ON FILE OPEN FOR APPEND
                if($fp = fopen($tmp_file_path, 'w')){

                    //fwrite($fp, $tmp_file_input_str);
                    //fclose($fp);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    $clr_ssl_msg = '[SYSTEM_BASE64] Unable ' .
                                   'to write file: ' .
                                   $tmp_file_path .
                                   '.';
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
    private function ______user_request_listener()
    {

        //
        // ENABLE THIS PAGE TO RECEIVE HTTP POST/GET DATA
        if($this->http_data_services_initialize()){

            if($this->isset_crnrstn_services_http()){

                //
                // LOGIN SUCCESS PATHWAY
                $tmp_form_handle = $this->extract_data_http('crnrstn_pssdtl_packet', 'POST', true);
                switch($tmp_form_handle){
                    case 'signin':

                        error_log(__LINE__ . ' user die() :: LOGIN SUCCESS PATHWAY [' . $tmp_form_handle . ']');

                        die();

                    break;
                    case 'crnrstn_validate_css':

                        error_log(__LINE__ . ' user :: CSS VALIDATOR PATHWAY [' . $tmp_form_handle . ']');

                        //
                        // VALIDATE CSS
                        $raw_html_data = $this->extract_data_http('ugc_html', 'POST');

                        $tmp_validation_results_ARRAY = $this->validate_css($raw_html_data);

                        $tmp_validation_results = $tmp_validation_results_ARRAY['HTML_OUT'];

                        $tmp_key = $this->generate_new_key(50);

                        $this->set_session_param('CRNRSTN_CSS_VALIDATION_RESP', $tmp_validation_results);

                        $tmp_score_numeric_raw = $tmp_validation_results_ARRAY['SCORE_NUMERIC_RAW'];
                        $tmp_packet_size = $tmp_validation_results_ARRAY['PACKET_BYTES_SIZE'];
                        $tmp_run_time = $tmp_validation_results_ARRAY['WALLTIME'];
                        $tmp_run_time = $tmp_run_time . 'secs';

                        if($this->is_ssl()){

                            $tmp_post_uri = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                        }else{

                            $tmp_post_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                        }

                        $pos_quest = strpos($tmp_post_uri, '?');
                        if($pos_quest !== false){

                            $tmp_post_uri = $tmp_post_uri . '&crnrstn_l=' . $this->data_encrypt('css_validator') . '&crnrstn_css_rtime=' . urlencode($tmp_run_time) . '&bytes=' . urlencode($tmp_packet_size) . '&score=' . urlencode($tmp_score_numeric_raw);

                        }else{

                            $tmp_post_uri = $tmp_post_uri . '?crnrstn_l=' . $this->data_encrypt('css_validator') . '&crnrstn_css_rtime=' . urlencode($tmp_run_time) . '&bytes=' . urlencode($tmp_packet_size) . '&score=' . urlencode($tmp_score_numeric_raw);

                        }

                        //
                        // SUPPORT BACK LINK FOR MIT LICENSE PAGE
                        $this->sync_back_link_state();

                        error_log(__LINE__ . ' user POST CSS $tmp_post_uri = ' . $tmp_post_uri);

                        //
                        // I WOULD LIKE TO SEE GOOGLE ANALYTICS DATA WITH CSS SCORES AND PERFORMANCE OF THE SYSTEM.
                        header("Location: " . $tmp_post_uri);
                        exit();

                    break;

                }

                //}else{
//
//                    error_log(__LINE__ . __METHOD__ . ' user $user_auth_check is true');
//
//                    //
//                    // SUPPORT BACK LINK FOR MIT LICENSE PAGE
//                    $this->sync_back_link_state();
//
//                    echo $this->ui_module_out('css_validator');
//                    exit();
//
//                }


            }else{

                //
                // LOGIN ERROR PATHWAY
                error_log(__LINE__ . ' user :: LOGIN ERROR PATHWAY');

                //
                // FORM INPUT ERROR HANDLING. CAN MANUALLY HANDLE REDIRECTS HERE IF DESIRED.
                $tmp_err_array = $this->return_err_data_validation_check('POST');
                $test = '';

                foreach($tmp_err_array as $key => $chunkArray0){
                    foreach($chunkArray0 as $key0 => $val){

                        $test .= $val . '<br>';

                    }
                }

                echo __LINE__ . ' ' . __METHOD__ . ' <br>' . $test;
                die();

                //
                // FORM INPUT ERROR HANDLING. CAN MANUALLY HANDLE REDIRECTS HERE IF DESIRED.
                $tmp_err_array = $this->return_err_data_validation_check('GET');
                //$test = '';

                foreach($tmp_err_array as $key => $val){

                    $test .= $val . '<br>';

                }

                $test .= '<br>' . session_id() . '<br>';

                error_log(__LINE__ . ' user error=' . $test);

            }

        }else{

            error_log(__LINE__ . ' user :: HTTP VAR PROCESSING :: NON-FORM-INTEGRATION PATHWAY');
            return $this->oCRNRSTN_VSC->return_client_response();

//
//                if($this->R_env->oHTTP_MGR->issetParam($_GET, 'crnrstn_l')){
//
//                    if($this->R_env->oHTTP_MGR->issetParam($_GET, 'crnrstn_css_rtime')){
//
//                        $tmp_output_html = $this->get_session_param('CRNRSTN_CSS_VALIDATION_RESP');
//
//                        if(strlen($tmp_output_html) > 1){
//
//                            echo $tmp_output_html;
//                            exit();
//
//                        }else{
//
//                            //
//                            // IF SESSION RETURNS NOTHING, JUST RELOAD THE FORM.
//                            echo $this->ui_module_out('css_validator');
//                            exit();
//
//                        }
//
//                    }
//
//                }
//
//            }
//
//            if($this->isset_http_param('crnrstn_l', 'GET')){
//
//                $tmp_req = $this->extract_data_http('crnrstn_l', true);
//                $tmp_mit = $this->extract_data_http('crnrstn_mit');
//                //$tmp_crnrstn_kivotos = $this->extract_data_http('crnrstn_kivotos');
//                $tmp_crnrstn_css_rtime = $this->extract_data_http('crnrstn_css_rtime');
//
//                if((strlen($tmp_mit) > 0) || (strlen($tmp_crnrstn_css_rtime) > 0)){
//
//                    if($tmp_mit != ''){
//
//                        return $this->ui_module_out('MIT_license');
//
//                    }else{
//                        error_log(__LINE__ . ' user DIE() crnrstn_css_rtime is set. get_session_param() result.....]');
//
//                        die();
//                        //
//                        // OUTPUT CSS VALIDATOR RESULTS PAGE FROM SESSION
//                        $tmp_validation_results = $this->get_session_param('CRNRSTN_CSS_VALIDATION_RESP');
//                        error_log(__LINE__ . ' crnrstn_css_rtime is set. get_session_param() results[' . strlen($tmp_validation_results) . ']');
//
//                        if(strlen($tmp_validation_results) > 1){
//
//                            $this->set_session_param('CRNRSTN_CSS_VALIDATION_RESP','0');
//
//                            //
//                            // RETURN CSS VALIDATION SCORE RESULTS PAGE
//                            header('Content-type: text/html; charset=utf-8');
//                            echo $tmp_validation_results;
//
//                        }else{
//
//                            //
//                            // DATA ENTRY FORM PAGE. OR MAYBE THIS WILL BECOME SIGN IN FORM PAGE.
//                            echo $this->ui_module_out('css_validator');
//
//                        }
//
//                    }
//
//                }else{
//
//                    switch($tmp_req){
//                        case 'dashboard':
//
//                            return $this->ui_module_out($tmp_req);
//
//                        break;
//                        case 'signin':
//
//                            return $this->ui_module_out($tmp_req);
//
//                        break;
//                        case 'signin_m':
//
//                            return $this->ui_module_out($tmp_req);
//
//                        break;
//                        case 'css_validator':
//
//                            if($this->isset_http_param('crnrstn_r', 'GET')){
//
//                                $this->proper_response_return($this->sticky_uri_listener(), NULL, 'RESPONSE_STICKY');
//
//                            }else{
//
//                                if(strlen($tmp_crnrstn_css_rtime) > 0){
//
//                                    $tmp_validation_results = $this->get_session_param('CRNRSTN_CSS_VALIDATION_RESP');
//                                    error_log(__LINE__ . ' crnrstn_css_rtime is set. get_session_param results[' . strlen($tmp_validation_results) . ']');
//
//                                    if(strlen($tmp_validation_results) > 1){
//
//                                        $this->set_session_param('CRNRSTN_CSS_VALIDATION_RESP','0');
//
//                                        //
//                                        // VALIDATION SCORE RESULTS PAGE
//                                        header('Content-type: text/html; charset=utf-8');
//                                        echo $tmp_validation_results;
//
//                                    }else{
//
//                                        //
//                                        // DATA ENTRY FORM PAGE
//                                        echo $this->ui_module_out('css_validator');
//
//                                    }
//
//                                }else{
//
//                                    error_log(__LINE__ . ' crnrstn_css_rtime is NOT set.');
//
//                                    if($this->isset_http_param('crnrstn_css_valptrn', 'GET')){
//
//                                        //
//                                        // VALIDATOR ALGORITHM LOGICAL PROFILE PRESENTATION PAGE
//                                        echo $this->ui_module_out('css_validator_profile');
//
//                                    }else{
//
//                                        error_log(__LINE__ . ' crnrstn_css_valptrn is NOT set.');
//
//                                        //
//                                        // DATA ENTRY FORM PAGE
//                                        echo $this->ui_module_out('css_validator');
//
//                                    }
//
//                                }
//
//                            }
//
//                        break;
//                        default:
//
//                            return false;
//
//                        break;
//
//                    }
//
//                }
//
//            }

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function crnrstn_session_load()
    {

        if($this->isset_resource('data_value', 'R_account') == true){
            //if($this->isset_data_key('R_account')){

            error_log(__LINE__ . ' user ' . __METHOD__ . ':: running some untested lab shit, I see...die();');
            die();
            $this->oCRNRSTN_AUTH = $this->get_session_param('R_account');

        }else{

            if(isset($this->oCRNRSTN_AUTH)){

                error_log(__LINE__ . ' user ' . __METHOD__ . ':: running some untested lab shit, I see...die();');
                die();

                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the CRNRSTN :: Lightsaber
                // SOAP Services Layer User
                // Authorization Manager
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2304 hrs.
                //
                // $this->oCRNRSTN_AUTH = new crnrstn_user_authorization($this);
                $this->oCRNRSTN_AUTH = $this->return_registered_resource('new', 'crnrstn_user_authorization_manager', $this);

            }

        }

    }

//    public function sync_device_detected()
//    {
//
//        return $this->R_env->sync_device_detected();
//
//    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function ui_module_alerts_sync()
    {
//
//        self::$formIntegrationIsset_ARRAY[$transport_protocol] = false;
//        self::$formIntegrationErr_ARRAY[$transport_protocol][] = 'A ' . $transport_protocol . ' parameter [' . $packet_received_array['INPUT_NAME'] . '] has failed server-side validation [' . $packet_received_array['INPUT_VALIDATION'] . '].';
//
//        //
//        // SUCCESS_CHECK, ERR_X, NOTICE_TRI_ALERT
//        self::$formIntegrationIcon_ARRAY[$transport_protocol][] = 'ERR_X';
//


        $tmp_variables_order = $this->ini_get('variables_order');
        $tmp_vo_ARRAY        = str_split($tmp_variables_order);
        $tmp_out             = '';

        foreach($tmp_vo_ARRAY as $key => $value){

            switch ($value){
                case 'G':

                    if(isset(self::$formIntegrationIsset_ARRAY['GET'])){

                        if(isset(self::$formIntegrationErr_ARRAY['GET'])){

                            $tmp_cnt = count(self::$formIntegrationErr_ARRAY['GET']);

                            for($i = 0; $i < $tmp_cnt; $i++){

                                $this->ui_module_state_response_output .= $i . ' [' . self::$formIntegrationIcon_ARRAY['GET'][$i] . '] [' . self::$formIntegrationErr_ARRAY['GET'][$i] . ']<br>';

                            }

                        }

                    }

                break;
                case 'P':

                    if(isset(self::$formIntegrationIsset_ARRAY['POST'])){

                        if(isset(self::$formIntegrationErr_ARRAY['POST'])){

                            $tmp_cnt = count(self::$formIntegrationErr_ARRAY['POST']);

                            for($i = 0; $i < $tmp_cnt; $i++){

                                $this->ui_module_state_response_output .= $i . ' [' . self::$formIntegrationIcon_ARRAY['POST'][$i] . '] [' . self::$formIntegrationErr_ARRAY['POST'][$i] . ']<br>';

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
     * @return
     * @access public
     *
     */
    function ui_module_alerts_out()
    {

        return $this->ui_module_state_response_output;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function ui_module_out(
             $module,
             $module_permissions_profile = 'R_channel_RUNTIME')
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added
         *       $module_permissions_profile = 'R_channel_RUNTIME'
         *       ui_module_out method input,
         *       to align to the  use of this method
         *       by crnrstn:
         *
         *       Fatal error: Declaration of
         *       CRNRSTN\crnrstn_user::ui_module_out($module)
         *       must be compatible with
         *       CRNRSTN\crnrstn::ui_module_out($module,
         *       $module_permissions_profile = 'R_channel_...')
         *       in C:\xampp\htdocs\_R\class\user
         *       \crnrstn.user.class.php
         *       on line 2412
         *
         *
         *       5 :: Friday, August 21, 2026 @ 0823 hrs.
         *
         */

        $module = strtolower($module);

        switch($module){
            case 'documentation':

                //$this->oCRNRSTN_UX->sync_back_link_state();
                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_documentation();

            break;
            case 'bassdrive_inject':

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_inject_bassdrive();

            break;
            case 'bassdrive_popup':

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_bassdrive_popup();

            break;
            case 'signin':

                $this->oCRNRSTN_UX->sync_back_link_state();

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_signin();

            break;
            case 'signin_m':

                $this->oCRNRSTN_UX->sync_back_link_state();

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_signin_m();

            break;
            case 'mit_license':

                //$this->oCRNRSTN_UX->sync_back_link_state();

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_mit_license();

            break;
            case 'css_validator':

                $this->oCRNRSTN_UX->sync_back_link_state();

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_css_validator();

            break;
            case 'css_validator_profile':

                $this->oCRNRSTN_UX->sync_back_link_state();

                return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_css_validator_profile();

            break;
            case 'dashboard':

                $this->oCRNRSTN_UX->sync_back_link_state();

                if($this->is_account_valid()){

                    return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_dashboard();

                }else{

                    return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_signin();

                }

            break;
            case 'config_wordpress':

                $this->oCRNRSTN_UX->sync_back_link_state();

                error_log(__LINE__ . ' user switch(config_wordpress) get class[' . get_class($this->oCRNRSTN_AUTH) . ']');
                if($this->is_account_valid()){

                    error_log(__LINE__ . ' user switch(config_wordpress) is_valid return true');
                    return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_config_wordpress();

                }else{

                    error_log(__LINE__ . ' user switch(config_wordpress) is_valid return false');
                    return $this->oINTERACT_UI_HTML_MGR->out_ui_html_doc_signin();

                }

            break;
            default:

                return '<html><head><title>DEFAULT switch() case ' . 
                       __METHOD__ . '</title></head><body>ui_module_out(' . 
                       $module . ') is ready to be setup, good sir.</body></html>';

            break;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function is_account_valid()
    {

        if($this->isset_resource('data_value', 'R_account') == true){
            //if($this->isset_data_key('R_account')){

            error_log(__LINE__ . ' user session set R_account.');
            $this->oCRNRSTN_AUTH = $this->get_session_param('R_account');

            $tmp_account = $this->oCRNRSTN_AUTH->return_account();
            //error_log(__LINE__ . ' user oCRNRSTN_AUTH=[' . get_class($this->oCRNRSTN_AUTH) . '] $tmp_account=[' . get_class($tmp_account) .']');

           //$tmp_account_profile = $tmp_account->return_account();

            //error_log(__LINE__ . ' $tmp_account_profile=[' . get_class($tmp_account) . '][' . $tmp_account->account_get_resource('session_ip_address') . ']');

        }else{

            error_log(__LINE__ . ' user session NOT!! set R_account.');

        }

        if(is_object($this->oCRNRSTN_AUTH)){

            error_log(__LINE__ . ' user oCRNRSTN_AUTH to OBJECT.');

            return $this->oCRNRSTN_AUTH->is_account_valid();

        }else{

            error_log(__LINE__ . ' user NOT!! oCRNRSTN_AUTH to OBJECT.');

            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_oLog_ProfileManager()
    {

        return self::$oLog_ProfileManager;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function output_str_append($str)
    {

        $this->destruct_output = $str;

    }

    /*
    public function proxyEmailFire(
                    $WCR_key_email_packet, 
                    $endpoint_uri = NULL, 
                    $oKingsHighway = NULL)
    {

        if(!isset($endpoint_uri)){

            $endpoint_uri = $this->get_resource('CRNRSTN_PROXY_WSDL_ENDPOINT');

            if($endpoint_uri == ''){

                $endpoint_uri = $this->get_resource('CRNRSTN_PROXY_WSDL_ENDPOINT', $WCR_key_email_packet);

            }

        }

        //
        // SOAP
        $tmp_SOAP_request = $this->return_oKingsHighwaySOAP();

        $soapClient = new crnrstn_soap_client_manager($this,'WSDL_URI','WSDL_CACHE_TTL','NUSOAP_USECURL');

        $response = $soapClient->sendRequest_SOAP('takeTheKingsHighway', $tmp_SOAP_request);

        $tmp_key_raw = urldecode($response['CRNRSTN_SOAP_SVC_AUTH_KEY']);
        $this->error_log('TOTAL_EMAILS_RECEIVED=' . $response['TOTAL_EMAILS_RECEIVED'], __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);

        $this->error_log('CRNRSTN_SOAP_SVC_AUTH_KEY=' . $tmp_key_raw, __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);
        $this->error_log('data_decrypt/true-CRNRSTN_SOAP_SVC_AUTH_KEY=' . $this->R_env->data_decrypt($tmp_key_raw, CRNRSTN_ENCRYPT_TUNNEL, true), __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);

        $this->error_log('377 - returnResult=' . $soapClient->returnResult(), __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);

        $tmp_serial = $this->generate_new_key(10);
        $packet_delimiter = '[CRNRSTN200_' . $tmp_serial . ']';

        $tmp_email_packet_datum = $this->return_emailProxyIntegrationPacket($WCR_key_email_packet, $packet_delimiter);

        if(isset($oKingsHighway)){

            $tmp_cipher_override = $oKingsHighway->return_cipher();
            $tmp_secret_key_override = $oKingsHighway->return_secret_key();
            $tmp_hmac_algorithm_override = $oKingsHighway->return_hmac_algorithm();
            $tmp_options_bitwise_override = $oKingsHighway->return_options_bitwise();

        }else{

            $tmp_cipher_override = NULL;
            $tmp_secret_key_override = NULL;
            $tmp_hmac_algorithm_override = NULL;
            $tmp_options_bitwise_override = NULL;

        }

        //
        // ENCRYPT DATA PACKET
        if($this->is_tunnel_encrypt_configured($tmp_cipher_override, $tmp_secret_key_override, $tmp_hmac_algorithm_override, $tmp_options_bitwise_override)){

            $is_encrypted = 'true';
            $tmp_email_packet_datum = $this->data_encrypt($tmp_email_packet_datum, CRNRSTN_ENCRYPT_TUNNEL, $tmp_cipher_override, $tmp_secret_key_override, $tmp_hmac_algorithm_override, $tmp_options_bitwise_override);
            $packet_delimiter = $this->data_encrypt($packet_delimiter, CRNRSTN_ENCRYPT_TUNNEL, $tmp_cipher_override, $tmp_secret_key_override, $tmp_hmac_algorithm_override, $tmp_options_bitwise_override);

        }else{

            $is_encrypted = 'false';

        }

        //
        // BUILD CURL POST EXPERIENCE
        $proxy_packet_datum = array("CRNRSTN_COMM_PROXY_PACKET" => 'v2.0.0',
        "CRNRSTN_PACKET_ENCRYPTED" => $is_encrypted,
            "CRNRSTN_PACKET_DELIMITER" => $packet_delimiter,
            "CRNRSTN_PACKET_DATUM" => $tmp_email_packet_datum);

        //$tmp_curl_response = $this->curl_post($endpoint_uri, $proxy_packet_datum);

        $this->error_log('The CRNRSTN :: Electrum process notification SOAP has been sent.', __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);

    }

    private function return_oKingsHighwaySOAP()
    {

        $this->soapRequest_ARRAY = array('oKingsHighwayNotification' =>
            array(
                'CRNRSTN_PACKET_ENCRYPTED' => 'TRUE',
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => $this->data_encrypt($this->get_resource('CRNRSTN_SOAP_SVC_AUTH_KEY'), CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP)
            ));

        return $this->soapRequest_ARRAY;

    }
  */

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

            $SOAP_endpoint = $this->get_resource('WSDL_URI', 'CRNRSTN::INTEGRATIONS');

        }

        if(isset($this->WSDL_cache_ttl_ARRAY[$this->hash($SOAP_endpoint)])){

            $WSDL_cache_ttl = $this->WSDL_cache_ttl_ARRAY[$this->hash($SOAP_endpoint)];

        }else{

            $WSDL_cache_ttl = $this->get_resource('WSDL_CACHE_TTL', 'CRNRSTN::INTEGRATIONS');

        }

        if(isset($this->nusoap_useCURL_ARRAY[$this->hash($SOAP_endpoint)])){

            $nusoap_useCURL = $this->nusoap_useCURL_ARRAY[$this->hash($SOAP_endpoint)];

        }else{

            $nusoap_useCURL = $this->get_resource('NUSOAP_USECURL', 'CRNRSTN::INTEGRATIONS');

        }

        $this->print_r('[' . $SOAP_endpoint . '][' . $WSDL_cache_ttl . '][' . $nusoap_useCURL . ']', 'SEND CLIENT REQUEST', NULL, __LINE__, __METHOD__, __FILE__);

        //
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // Return an instantiation of
        // the CRNRSTN :: Lightsaber
        // SOAP Services Layer SOAP
        // Client Management
        // class object.
        //
        //
        // 5 :: Monday, July 15, 2024 @ 2304 hrs.
        //
        // $this->oSoapClient = new crnrstn_soap_client_manager($this, $SOAP_endpoint, $WSDL_cache_ttl, $nusoap_useCURL);
        $this->oSoapClient = $this->return_registered_resource('new', 'crnrstn_soap_client_manager', $this, $SOAP_endpoint, $WSDL_cache_ttl, $nusoap_useCURL);

        $this->print_r('[' . gettype($this->oSoapClient) . '][' . get_class($this->oSoapClient) . '] [' . $SOAP_method . '][' . print_r($SOAP_request, true) . ']', 'SEND CLIENT REQUEST', NULL, __LINE__, __METHOD__, __FILE__);
        //$this->print_r('[' . $SOAP_method . '][' . print_r($SOAP_request, true) . ']', 'SEND CLIENT REQUEST', NULL, __LINE__, __METHOD__, __FILE__);

        return $this->oSoapClient->sendRequest_SOAP($SOAP_method, $SOAP_request);

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
    function return_oEmailArraySOAP_struct(
             $email_pipe_delim, 
             $name_pipe_delim = NULL, 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        $tmp_email_ARRAY = array();

        if(!isset($name_pipe_delim)){

            $pos_pipe = strpos($email_pipe_delim, '|');

            if($pos_pipe == false){

                //
                // SINGLE NAME-EMAIL
                $email_pipe_delim = trim($email_pipe_delim);
                $pos_space = strpos($email_pipe_delim, ' ');

                if($pos_space == false){

                    $tmp_email_pipe_delim_hash = $this->hash($email_pipe_delim);

                    array_push($tmp_email_ARRAY, array(
                        'EMAIL_PROXY_SERIAL' => $this->R_env->data_encrypt($tmp_email_pipe_delim_hash, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                        'EMAILADDRESS' => $this->R_env->data_encrypt($email_pipe_delim, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override)
                    ));

                }else{

                    $tmp_email = '';
                    $tmp_firstname = '';
                    $tmp_lastname = '';

                    $tmp_name_email_ARRAY = explode(' ', $email_pipe_delim);
                    $tmp_content_cnt = sizeof($tmp_name_email_ARRAY);
                    for($i=0; $i<$tmp_content_cnt; $i++){

                        $pos_at = strpos($tmp_name_email_ARRAY[$i], '@');
                        $pos_dot = strpos($tmp_name_email_ARRAY[$i], '.');

                        if($pos_at !== false && $pos_dot !== false && $tmp_email==''){

                            //
                            // TAKE EMAIL ADDRESS
                            $tmp_email = $tmp_name_email_ARRAY[$i];

                        }else{

                            //
                            // TAKE NAME ELEMENT
                            if($tmp_firstname==''){

                                $tmp_firstname .= $tmp_name_email_ARRAY[$i];

                            }else{

                                $tmp_lastname .= $tmp_name_email_ARRAY[$i].' ';

                            }

                        }

                    }

                    $tmp_email_hash = $this->hash($tmp_email);

                    $tmp_lastname = rtrim($tmp_lastname, ' ');
                    array_push($tmp_email_ARRAY, array(
                        'EMAIL_PROXY_SERIAL' => $this->R_env->data_encrypt($tmp_email_hash, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                        'EMAILADDRESS' => $this->R_env->data_encrypt($tmp_email, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                        'FIRSTNAME' => $this->R_env->data_encrypt($tmp_firstname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                        'LASTNAME' => $this->R_env->data_encrypt($tmp_lastname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override)
                    ));

                }

            }else{

                //
                // MULTIPLE NAME-EMAIL
                $tmp_name_email_ARRAY = explode('|', $email_pipe_delim);

                $tmp_email_cnt = sizeof($tmp_name_email_ARRAY);
                for($i = 0; $i < $tmp_email_cnt; $i++){

                    $pos_space = strpos($tmp_name_email_ARRAY[$i], ' ');

                    if($pos_space == false){

                        $tmp_name_email_hash = $this->hash($tmp_name_email_ARRAY[$i]);

                        array_push($tmp_email_ARRAY, array(
                            'EMAIL_PROXY_SERIAL' => $this->R_env->data_encrypt($tmp_name_email_hash, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'EMAILADDRESS' => $this->R_env->data_encrypt($tmp_name_email_ARRAY[$i], CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override)
                        ));

                    }else{

                        $tmp_email = '';
                        $tmp_firstname = '';
                        $tmp_lastname = '';

                        $tmp_name_check_ARRAY = explode(' ', $tmp_name_email_ARRAY[$i]);
                        $tmp_content_cnt = sizeof($tmp_name_check_ARRAY);
                        for($ii=0; $ii<$tmp_content_cnt; $ii++){

                            $pos_at = strpos($tmp_name_check_ARRAY[$ii], '@');
                            $pos_dot = strpos($tmp_name_check_ARRAY[$ii], '.');

                            if($pos_at !== false && $pos_dot !== false && $tmp_email == ''){

                                //
                                // TAKE EMAIL ADDRESS
                                $tmp_email = $tmp_name_check_ARRAY[$ii];

                            }else{

                                //
                                // TAKE NAME ELEMENT
                                if($tmp_firstname == ''){

                                    $tmp_firstname .= $tmp_name_check_ARRAY[$ii];

                                }else{

                                    $tmp_lastname .= $tmp_name_check_ARRAY[$ii].' ';

                                }

                            }

                        }

                        $tmp_email_hash = $this->hash($tmp_email);

                        $tmp_lastname = rtrim($tmp_lastname, ' ');
                        array_push($tmp_email_ARRAY, array(
                            'EMAIL_PROXY_SERIAL' => $this->R_env->data_encrypt($tmp_email_hash, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'EMAILADDRESS' => $this->R_env->data_encrypt($tmp_email, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'FIRSTNAME' => $this->R_env->data_encrypt($tmp_firstname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'LASTNAME' => $this->R_env->data_encrypt($tmp_lastname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override)
                        ));

                    }

                }

            }

        }else{

            $tmp_email = '';
            $tmp_firstname = '';
            $tmp_lastname = '';

            //
            // PROCESS NAMES AS SEPARATE pipe DELIM
            // $email_pipe_delim, $name_pipe_delim
            $pos_pipe = strpos($email_pipe_delim, '|');
            if($pos_pipe !== false){

                //
                // MULTIPLE EMAIL
                $tmp_email_breakout_ARRAY = explode('|', $email_pipe_delim);
                $tmp_name_breakout_ARRAY = explode('|', $name_pipe_delim);

                $tmp_email_breakout_cnt = sizeof($tmp_email_breakout_ARRAY);
                $tmp_name_breakout_cnt = sizeof($tmp_name_breakout_ARRAY);

                if($tmp_email_breakout_cnt == $tmp_name_breakout_cnt){

                    for($i = 0; $i < $tmp_email_breakout_cnt; $i++){

                        $tmp_email = trim($tmp_email_breakout_ARRAY[$i]);
                        $tmp_name = trim($tmp_name_breakout_ARRAY[$i]);

                        $tmp_space = strpos($tmp_name, ' ');
                        if($tmp_space!==false){
                            $tmp_name_bo_ARRAY = explode(' ', $tmp_name);
                            $tmp_name_bo_cnt = sizeof($tmp_name_bo_ARRAY);
                            for($ii = 0; $ii < $tmp_name_bo_cnt; $ii++){

                                //
                                // TAKE NAME ELEMENT
                                if($tmp_firstname == ''){

                                    $tmp_firstname .= $tmp_name_bo_ARRAY[$ii];

                                }else{

                                    $tmp_lastname .= $tmp_name_bo_ARRAY[$ii] . ' ';

                                }

                            }

                        }else{

                            $tmp_firstname = $tmp_name;

                        }

                        $tmp_email_hash = $this->hash($tmp_email);

                        $tmp_lastname = rtrim($tmp_lastname, ' ');
                        array_push($tmp_email_ARRAY, array(
                            'EMAIL_PROXY_SERIAL' => $this->R_env->data_encrypt($tmp_email_hash, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'EMAILADDRESS' => $this->R_env->data_encrypt($tmp_email, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'FIRSTNAME' => $this->R_env->data_encrypt($tmp_firstname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                            'LASTNAME' => $this->R_env->data_encrypt($tmp_lastname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override)
                        ));
                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: has received a mismatch between the number of email addresses provided and the number of names...' . $tmp_email_breakout_cnt . ' to ' . $tmp_name_breakout_cnt . ', respectively.');

                }

            }else{

                //
                // SINGLE EMAIL
                $pos_space = strpos($name_pipe_delim, ' ');
                if($pos_space !== false){

                    $tmp_name_sep_ARRAY = explode(' ', $name_pipe_delim);
                    $tmp_name_element_cnt = sizeof($tmp_name_sep_ARRAY);

                    for($i = 0; $i < $tmp_name_element_cnt; $i++){

                        //
                        // TAKE NAME ELEMENT
                        if($tmp_firstname == ''){

                            $tmp_firstname .= $tmp_name_sep_ARRAY[$i];

                        }else{

                            $tmp_lastname .= $tmp_name_sep_ARRAY[$i] . ' ';

                        }

                    }

                }else{

                    //
                    // ONLY "FIRST" NAME
                    $tmp_firstname = $name_pipe_delim;

                }

                $tmp_email_pipe_delim_hash = $this->hash($email_pipe_delim);

                $tmp_lastname = rtrim($tmp_lastname, ' ');
                array_push($tmp_email_ARRAY, array(
                    'EMAIL_PROXY_SERIAL' => $this->R_env->data_encrypt($tmp_email_pipe_delim_hash, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                    'EMAILADDRESS' => $this->R_env->data_encrypt($email_pipe_delim, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                    'FIRSTNAME' => $this->R_env->data_encrypt($tmp_firstname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override),
                    'LASTNAME' => $this->R_env->data_encrypt($tmp_lastname, CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override)
                ));

            }

        }

        return $tmp_email_ARRAY;

    }

    /*
    private function return_emailProxyIntegrationPacket(
                     $WCR_key_email_packet, 
                     $packet_delimiter)
    {

        $tmp_str = '';
        switch($WCR_key_email_packet){
            case 'THE_KINGS_HIGHWAY_oGABRIEL_NOTIFICATION':

                $tmp_str .= $this->concatIntegrationPacketDatum($WCR_key_email_packet, $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CRNRSTN_SOAP_SVC_AUTH_KEY', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('RECIPIENT_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('RECIPIENT_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('FROM_EMAIL', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('FROM_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CC_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CC_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('BCC_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('BCC_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_SUBJECT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_BODY_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_BODY_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('WORDWRAP', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('PRIORITY', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('IS_HTML', $WCR_key_email_packet), $packet_delimiter);

            break;
            case 'ELECTRUM_NOTIFICATION_DETAIL':

                $tmp_str .= $this->concatIntegrationPacketDatum($WCR_key_email_packet, $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('RECIPIENT_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('RECIPIENT_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('FROM_EMAIL', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('FROM_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_EMAIL', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_SUBJECT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_BODY_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_BODY_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_TITLE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_TITLE_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_LOG_INTEGER_CONSTANT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_REMOTE_ADDR', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_SERVER_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_SYSTEM_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_PROCESS_RUN_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_ACTIVITY_TRACE_TITLE', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_ACTIVITY_TRACE_CONTENT_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_ACTIVITY_TRACE_CONTENT_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CRNRSTN_SOAP_SVC_AUTH_KEY'), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_START_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_END_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_PRETTY_RUN_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_COUNT_FILES_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_COUNT_FILES_SKIPPED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_FILESIZE_FILES_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_ERRORS_FILES_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_SOURCE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_DESTINATION_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_HANDLING_PROFILE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_SOURCE_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_DESTINATION_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_HANDLING_PROFILE_TEXT', $WCR_key_email_packet), $packet_delimiter);

            break;
            default:

                $tmp_str .= $this->concatIntegrationPacketDatum($WCR_key_email_packet, $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CRNRSTN_SOAP_SVC_AUTH_KEY', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('RECIPIENT_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('RECIPIENT_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('FROM_EMAIL', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('FROM_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CC_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CC_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('BCC_EMAIL_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('BCC_NAME_COMMA_DELIM', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_SUBJECT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_BODY_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('MESSAGE_BODY_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('WORDWRAP', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('PRIORITY', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('IS_HTML', $WCR_key_email_packet), $packet_delimiter);

                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_EMAIL', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('REPLY_TO_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_TITLE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_TITLE_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_LOG_INTEGER_CONSTANT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_MESSAGE_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_REMOTE_ADDR', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_SERVER_NAME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_SYSTEM_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_PROCESS_RUN_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_ACTIVITY_TRACE_TITLE', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_ACTIVITY_TRACE_CONTENT_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('SYS_ACTIVITY_TRACE_CONTENT_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('CRNRSTN_CRNRSTN_SOAP_SVC_AUTH_KEY'), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_START_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_END_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_PRETTY_RUN_TIME', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_COUNT_FILES_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_COUNT_FILES_SKIPPED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_FILESIZE_FILES_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_ERRORS_FILES_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_SOURCE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_DESTINATION_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_HANDLING_PROFILE_HTML', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_SOURCE_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_DESTINATION_TEXT', $WCR_key_email_packet), $packet_delimiter);
                $tmp_str .= $this->concatIntegrationPacketDatum($this->get_resource('ELECTRUM_DATA_HANDLING_PROFILE_TEXT', $WCR_key_email_packet), $packet_delimiter);

            break;

        }

        //$tmp_str = rtrim($tmp_str, $packet_delimiter);
        return $tmp_str;

    }

    */

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_secret_key_override($SOAP_endpoint)
    {

        if(isset($this->secret_key_override_ARRAY[$this->hash($SOAP_endpoint)])){

            return $this->secret_key_override_ARRAY[$this->hash($SOAP_endpoint)];

        }else{

            return NULL;

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
    function return_cipher_override($SOAP_endpoint)
    {

        if(isset($this->cipher_override_ARRAY[$this->hash($SOAP_endpoint)])){

            return $this->cipher_override_ARRAY[$this->hash($SOAP_endpoint)];

        }else{

            return NULL;

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
    function return_hmac_algorithm_override($SOAP_endpoint)
    {

        if(isset($this->hmac_algorithm_override_ARRAY[$this->hash($SOAP_endpoint)])){

            return $this->hmac_algorithm_override_ARRAY[$this->hash($SOAP_endpoint)];

        }else{

            return NULL;

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
    function return_options_bitwise_override($SOAP_endpoint)
    {

        if(isset($this->options_bitwise_override_ARRAY[$this->hash($SOAP_endpoint)])){

            return $this->options_bitwise_override_ARRAY[$this->hash($SOAP_endpoint)];

        }else{

            return NULL;

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
    function initSOAP_WSDL_connectionProfile(
             $SOAP_endpoint, 
             $WSDL_cache_ttl, 
             $nusoap_useCURL)
    {

        $this->WSDL_cache_ttl_ARRAY[$this->hash($SOAP_endpoint)] = $WSDL_cache_ttl;
        $this->nusoap_useCURL_ARRAY[$this->hash($SOAP_endpoint)] = $nusoap_useCURL;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function SOAP_isset_soap_client()
    {

        if(isset($this->oSoapClient)){

            return $this->oSoapClient->isset_soap_client();

        }else{

            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function SOAP_return_client_request()
    {

        try{

            if(isset($this->oSoapClient)){

                return $this->oSoapClient->returnClientRequest();

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No SOAP request has been ' . 
                    'sent, leaving the oSoapClient object ' . 
                    'uninstantiated and, therefore, unable ' . 
                    'to return a client request.');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

            //
            // RETURN FALSE.
            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function SOAP_return_client_response()
    {

        try{

            if(isset($this->oSoapClient)){

                return $this->oSoapClient->returnClientResponse();

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No SOAP request has been sent, leaving the oSoapClient object uninstantiated and, therefore, unable to return a client response.');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

            //
            // RETURN FALSE.
            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function SOAP_return_result()
    {

        try{

            if(isset($this->oSoapClient)){

                return $this->oSoapClient->returnResult();

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No SOAP request has ' . 
                    'been sent, leaving the oSoapClient ' . 
                    'object uninstantiated and, therefore, ' . 
                    'unable to return a result from ' . 
                    'a SOAP server.');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

            //
            // RETURN FALSE.
            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function SOAP_return_client_get_debug()
    {

        try{

            if(isset($this->oSoapClient)){

                return $this->oSoapClient->returnClientGetDebug();

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No SOAP request has ' . 
                    'been sent, leaving the oSoapClient ' . 
                    'object uninstantiated and, ' . 
                    'therefore, unable to return any ' . 
                    'SOAP client debug information.');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

            //
            // RETURN FALSE.
            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function SOAP_return_error()
    {

        try{

            if(isset($this->oSoapClient)){

                return $this->oSoapClient->returnError();

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No SOAP request has ' . 
                    'been sent, leaving the oSoapClient ' . 
                    'object uninstantiated and, ' . 
                    'therefore, unable to return any ' . 
                    'SOAP request error information.');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

            //
            // RETURN FALSE.
            return false;

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
     * @return
     * @access public
     *
     */
    function isAuthorized_SOAP_request(
             $CRNRSTN_SOAP_SVC_AUTH_KEY, 
             $USERNAME, 
             $PASSWORD, 
             $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES, 
             $CRNRSTN_SOAP_SVC_METHOD_REQUESTED, 
             $CRNRSTN_SOAP_ACTION_TYPE)
    {

        return $this->R_env->isAuthorized_SOAP_request(
                             $CRNRSTN_SOAP_SVC_AUTH_KEY, 
                             $USERNAME, 
                             $PASSWORD, 
                             $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES, 
                             $CRNRSTN_SOAP_SVC_METHOD_REQUESTED, 
                             $CRNRSTN_SOAP_ACTION_TYPE);

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
    function electrum_initNotifications(
             $CRNRSTN_oELECTRUM, 
             $email_pipe_delim, 
             $notificationProfile = 'EMAIL', 
             $SOAP_endpoint = NULL, 
             $email_protocol = 'SMTP')
    {

        $CRNRSTN_oELECTRUM->initNotifications(
                            $email_pipe_delim, 
                            $notificationProfile, 
                            $SOAP_endpoint, 
                            $email_protocol);

        return $CRNRSTN_oELECTRUM;

    }

    /* Deleted session_salt.
     * [Sun Jul 26 21:28:01.393686 2026] [:error] [pid 20171] 
     * [client 172.16.225.1:61687] 
     * PHP Warning:  Declaration of 
     * CRNRSTN\\crnrstn_user::session_salt() 
     * should be compatible with 
     * CRNRSTN\\crnrstn::session_salt($type = 'NO_MATCH') 
     * in /var/www/html/_R/class/user
     * /crnrstn.user.class.php 
     * on line 23307
     *
     * @return
     * @access public
     *
    function session_salt()
    {

        return $this->session_salt();

    }
     */

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function ui_content_module_out(
             $channel_constant, 
             $crnrstn_form_handle = NULL)
    {

        switch($channel_constant){
            case CRNRSTN_PSSDTLA_PACKET:
            case CRNRSTN_CHANNEL_SSDTLA:
            case CRNRSTN_CHANNEL_FORM:

                $this->form_input_add($crnrstn_form_handle, 'crnrstn_session_salt', NULL, NULL, CRNRSTN_INPUT_REQUIRED);
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_pssdtlp_clear_text_bytes', NULL, NULL, CRNRSTN_INPUT_REQUIRED);
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_pssdtlp_encrypted_bytes', NULL, NULL, CRNRSTN_INPUT_REQUIRED);
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_pssdtlp_hash', NULL, NULL, CRNRSTN_INPUT_REQUIRED);
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_pssdtl_packet', NULL, NULL, CRNRSTN_INPUT_REQUIRED);
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_pssdtlp_index');
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_request_serialization_key');
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_request_serialization_hash');
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_interact_ui_link_text_click');
                $this->form_input_add($crnrstn_form_handle, 'crnrstn_interact_ui_loadbar_progress');

                return $this->return_serialized_input_fields_html($channel_constant, $crnrstn_form_handle);

            break;
            default:

                return $this->R_env->ui_content_module_out($channel_constant, $crnrstn_form_handle);

            break;

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
    function initElectrum_FileCopy(
             $FtpToFtp_tmp_dirPath, 
             $directoryDateName_versioning_pattern = NULL)
    {

        $clr_ssl_msg = 'Initialize a new Electrum operation.';
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

        $oELECTRUM = new crnrstn_wind_cloud_fire(
                         $this, 
                         $FtpToFtp_tmp_dirPath, 
                         $directoryDateName_versioning_pattern);

        return $oELECTRUM;

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
    function electrum_copyFilesToFolder(
             $CRNRSTN_oELECTRUM, 
             $custom_folder_name)
    {

        $CRNRSTN_oELECTRUM->copyFilesToFolder($custom_folder_name);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_moveContentWithinSourceDir(
             $CRNRSTN_oELECTRUM, 
             $excludeContainingDir = true)
    {

        $CRNRSTN_oELECTRUM->moveContentInSourceDirOnly($excludeContainingDir);

        return $CRNRSTN_oELECTRUM;
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
    function electrum_doNotPassDiskUsagePercent(
             $CRNRSTN_oELECTRUM, 
             $maxStorageUse = NULL)
    {

        if(!isset($maxStorageUse)){
            // 5 :: Sunday, May 24, 2026 @ 1150 hrs.

            $maxStorageUse = $this->get_crnrstn('max_disk_storage_utilization');

        }

        $clr_ssl_msg = 'Maximum storage usage at ' . 
                       'ANY destination LOCAL (note FTP is not ' . 
                       'monitored) directory for this ' . 
                       'CRNRSTN :: Electrum process is being ' . 
                       'set to ' . 
                       $maxStorageUse . '%.';
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

        $CRNRSTN_oELECTRUM->localStorageUse_doNotPassUsagePercent($maxStorageUse);

        return $CRNRSTN_oELECTRUM;
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
    function electrum_deleteSourceData_OnSuccess(
             $CRNRSTN_oELECTRUM, 
             $WCR_key_Or_DirPath, 
             $require_ALL_destination_success = true)
    {

        $clr_ssl_msg = 'On SUCCESS, remove all ' .
                       '"processed-to-destination" ' .
                       'files at the SOURCE endpoint, ' .
                       $WCR_key_Or_DirPath;
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

        $CRNRSTN_oELECTRUM->deleteSourceData_OnSuccess($WCR_key_Or_DirPath, $require_ALL_destination_success);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addSourceFTP_WCR(
             $CRNRSTN_oELECTRUM, 
             $WildCardResource_key)
    {

        $clr_ssl_msg = 'Add new WCR[' .
                       $WildCardResource_key . '] source[' .
                       $this->get_resource('FTP_SERVER',
                       $WildCardResource_key) . '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addSource_FTP_WCR($WildCardResource_key);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addDestinationFTP_WCR(
             $CRNRSTN_oELECTRUM, 
             $WildCardResource_key)
    {

        $clr_ssl_msg = 'Add new WCR[' .
                       $WildCardResource_key . '] destination[' .
                       $this->get_resource('FTP_SERVER', $WildCardResource_key) .
                       '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addDestination_FTP_WCR($WildCardResource_key);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addFlattenedDestinationFTP_WCR(
             $CRNRSTN_oELECTRUM, 
             $WildCardResource_key)
    {

        $clr_ssl_msg = 'Add new WCR[' .
                       $WildCardResource_key .
                       '] flatten all files to the ' .
                       'same dDirectory DESTINATION [' .
                       $this->get_resource('FTP_SERVER',
                        $WildCardResource_key) .
                       '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addFlattenedDestinationFTP_WCR($WildCardResource_key);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addSourceLOCAL(
             $CRNRSTN_oELECTRUM, 
             $dirPath)
    {

        $clr_ssl_msg = 'Add new Directory source[' .
                       $dirPath .
                       '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addSourceLOCAL($dirPath);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addSourceLOCAL_WCR(
             $CRNRSTN_oELECTRUM, 
             $WildCardResource_key)
    {

        $clr_ssl_msg = 'Add new WCR[' .
                       $WildCardResource_key . '] source[' .
                       $this->get_resource(
                              'LOCAL_DIR_PATH',
                              $WildCardResource_key) .
                       '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addSourceLOCAL_WCR($WildCardResource_key);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addDestinationLOCAL_WCR(
             $CRNRSTN_oELECTRUM, 
             $WildCardResource_key)
    {

        $tmp_path = $this->get_resource('LOCAL_DIR_PATH', $WildCardResource_key);
        //$tmp_mode = $this->get_resource('LOCAL_MKDIR_MODE', $WildCardResource_key);

        $clr_ssl_msg = 'Add new DIR [' .
                       $WildCardResource_key . '] destination[' .
                       $tmp_path . '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addDestinationLOCAL_WCR($WildCardResource_key);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addFlattenedDestinationLOCAL_WCR(
             $CRNRSTN_oELECTRUM, 
             $WildCardResource_key)
    {

        $tmp_path = $this->get_resource('LOCAL_DIR_PATH', $WildCardResource_key);
        //$tmp_mode = $this->get_resource('LOCAL_MKDIR_MODE', $WildCardResource_key);

        $clr_ssl_msg = 'Add new FLATTEN ALL FILES TO SAME Directory [' .
                       $WildCardResource_key . '] destination[' .
                       $tmp_path . '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addFlattenedDestinationLOCAL_WCR($WildCardResource_key);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addDestinationLOCAL(
             $CRNRSTN_oELECTRUM, 
             $dirPath, 
             $mkdir_permissons_mode = 777)
    {

        $clr_ssl_msg = 'Add new Directory destination[' .
                       $dirPath .
                       '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addDestinationLOCAL($dirPath, $mkdir_permissons_mode);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_addFlattenedDestinationLOCAL(
             $CRNRSTN_oELECTRUM, 
             $dirPath, 
             $mkdir_permissons_mode = 777)
    {

        $clr_ssl_msg = 'Add new FLATTEN ALL FILES TO SAME Directory destination[' .
                       $dirPath . '] to this electrum.';
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

        $CRNRSTN_oELECTRUM->addFlattenedDestinationLOCAL($dirPath, $mkdir_permissons_mode);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_DIR(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new DIR Exclusion of "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_DIR($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_FILE(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new FILE Exclusion of "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_FILE($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_fileSizeGreaterThan(
             $CRNRSTN_oELECTRUM, 
             $bytes, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new FILE Exclusion where FILE SIZE > ' .
                       $bytes . ' bytes to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_fileSizeGreaterThan($bytes, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_fileSizeLessThan(
             $CRNRSTN_oELECTRUM, 
             $bytes, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new FILE Exclusion where FILE SIZE < ' .
                       $bytes . ' bytes to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_fileSizeLessThan($bytes, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_accessedOlderThan(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new exclusion of ACCESSED OLDER THAN "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_accessedOlderThan($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_accessedNewerThan(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new exclusion of ACCESSED NEWER THAN "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_accessedNewerThan($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_modifiedOlderThan(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new exclusion of MODIFIED OLDER THAN "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_modifiedOlderThan($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_modifiedNewerThan(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new exclusion of MODIFIED NEWER THAN "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_modifiedNewerThan($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_assetUserID(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new exclusion of FILE OWNER USER ID "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_assetUserID($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

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
    function electrum_exclude_assetGroupID(
             $CRNRSTN_oELECTRUM, 
             $pattern, 
             $WCRkey_or_DIRPATH = NULL)
    {

        $clr_ssl_msg = 'Add new exclusion of FILE OWNER GROUP ID "' .
                       $pattern . '" to this electrum.';
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

        $CRNRSTN_oELECTRUM->exclude_assetGroupID($pattern, $WCRkey_or_DIRPATH);

        return $CRNRSTN_oELECTRUM;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function electrum_EXECUTE($CRNRSTN_oELECTRUM)
    {

        $clr_ssl_msg = 'Begin execution of CRNRSTN :: Electrum operation.';
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

        $tmp_execution_serial = $this->generate_new_key(100);

        $CRNRSTN_oELECTRUM->execute($tmp_execution_serial);

        return $CRNRSTN_oELECTRUM;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function electrum_closeConnections($CRNRSTN_oELECTRUM)
    {

        $clr_ssl_msg = 'Close all connections associated ' .
                       'with this electrum operation.';
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
         *        CRNRSTN_CHANNEL_SESSION);
         *
         * Syslog Levels:
         * Constant                 Description
         * \LOG_EMERG            => 'system is unusable.'
         * \LOG_ALERT            => 'action must be
         *                           taken immediately'
         * \LOG_CRIT             => 'critical conditions'
         * \LOG_ERR              => 'error conditions'
         * \LOG_WARNING          => 'warning conditions'
         * \LOG_NOTICE           => 'normal, but
         *                           significant, condition'
         * \LOG_INFO             => 'informational message'
         * \LOG_DEBUG            => 'debug-level message'
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

        $CRNRSTN_oELECTRUM->terminate_all_ftp();

        return $CRNRSTN_oELECTRUM;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function is_current_environment($env_key)
    {

        //
        // METHOD HAS BEEN MODIFIED BUT IS UNTESTED :: Friday, August 5, 2022 @ 2013 hrs.
        $tmp_env_key_hash = $this->hash($env_key);

        if($tmp_env_key_hash == $this->R_env->env_key_hash){

            return true;

        }else{

            return false;

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
    function initialize_oGabriel(
             $messenger_serial, 
             $mail_protocol = 'SMTP', 
             $username = NULL, 
             $password = NULL, 
             $port = NULL)
    {

        //
        // BRING IN THE MESSENGER
        // Luke 1:19, 26; Daniel 8:16; 9:21-22
        $oCRNRSTN_GABRIEL = new crnrstn_messenger_from_north(
                                $messenger_serial, 
                                $mail_protocol, 
                                $username, 
                                $password, 
                                $port, 
                                $this);

        $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial] = $oCRNRSTN_GABRIEL;

        return $oCRNRSTN_GABRIEL;

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
    function initProxySend(
             $oCRNRSTN_GABRIEL, 
             $proxy_endpoint_uri, 
             $proxy_auth_key)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->initProxySend($proxy_endpoint_uri, $proxy_auth_key);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function proxyEncrypt_setCipherOverride(
             $oCRNRSTN_GABRIEL, 
             $cipher)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->proxyEncrypt_setCipherOverride($cipher);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function proxyEncrypt_setSecretKeyOverride(
             $oCRNRSTN_GABRIEL, 
             $proxy_secret_key)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->proxyEncrypt_setSecretKeyOverride($proxy_secret_key);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function proxyEncrypt_setAlgorithmOverride(
             $oCRNRSTN_GABRIEL, 
             $proxy_encrypt_hmac_algorithm)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->proxyEncrypt_setAlgorithmOverride($proxy_encrypt_hmac_algorithm);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addHostServers(
             $oCRNRSTN_GABRIEL, 
             $mail_host_servers)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addHostServers($mail_host_servers);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addReplyTo(
             $oCRNRSTN_GABRIEL, 
             $reply_to_email, 
             $reply_to_recipient_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addReplyTo($reply_to_email, $reply_to_recipient_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addFrom(
             $oCRNRSTN_GABRIEL, 
             $sender_email, 
             $sender_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addFrom($sender_email, $sender_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function wordWrap(
             $oCRNRSTN_GABRIEL, 
             $max_char_column_cnt = 72)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->wordWrap($max_char_column_cnt);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function isHTML(
             $oCRNRSTN_GABRIEL, 
             $bool_isHTML)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->isHTML($bool_isHTML);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function setPriority(
             $oCRNRSTN_GABRIEL, 
             $priority = 'NORMAL')
    {

        // 1 = HIGH, 3 = NORMAL, 5 = LOW, null (default)
        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->setPriority($priority);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addSubject(
             $oCRNRSTN_GABRIEL, 
             $subject_line = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addSubject($subject_line);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addMsgBody_HTMLversion(
             $oCRNRSTN_GABRIEL, 
             $html_message = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addMsgBody_HTMLversion($html_message);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addMsgBody_TEXTversion(
             $oCRNRSTN_GABRIEL, 
             $text_message = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addMsgBody_TEXTversion($text_message);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;
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
    function suppressEmailDuplicates(
             $oCRNRSTN_GABRIEL, 
             $bool_suppress_dups = true)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->suppressEmailDuplicates($bool_suppress_dups);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function optOutDoNotSendEmail(
             $oCRNRSTN_GABRIEL, 
             $optout_emails)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->optOutDoNotSendEmail($optout_emails);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addAddress(
             $oCRNRSTN_GABRIEL, 
             $recipient_email, 
             $recipient_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $email_experience_tracker = $oGabriel->addAddress($recipient_email, $recipient_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

        return $email_experience_tracker;

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
    function addCC(
             $oCRNRSTN_GABRIEL, 
             $recipient_email, 
             $recipient_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addCC($recipient_email, $recipient_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addBCC(
             $oCRNRSTN_GABRIEL, 
             $recipient_email, 
             $recipient_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addBCC($recipient_email, $recipient_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addDynamicContent_SUBJECT(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addDynamicContent_SUBJECT($email_experience_tracker, $content_place_holder, $dynamic_content);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addDynamicContent_HTML(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addDynamicContent_HTML($email_experience_tracker, $content_place_holder, $dynamic_content);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addDynamicContent_TEXT(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addDynamicContent_TEXT($email_experience_tracker, $content_place_holder, $dynamic_content);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addDynamicContent_MULTIPART(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addDynamicContent_MULTIPART($email_experience_tracker, $content_place_holder, $dynamic_content);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function oGabriel_ProxySend($oCRNRSTN_GABRIEL = NULL)
    {

        $tmp_flag_messenger_send_ARRAY = array();

        if(!isset($oCRNRSTN_GABRIEL)){

            //
            // FIRE EVERYTHING!
            foreach($this->oMessenger_ARRAY as $serial => $oGabriel){

                if(!isset($tmp_flag_messenger_send_ARRAY[$oGabriel->messenger_serial])){

                    $tmp_flag_messenger_send_ARRAY[$oGabriel->messenger_serial] = 1;

                    $oGabriel->proxySend();

                    $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

                    $clr_ssl_msg = 'Finished Triggering oGabriel_ProxySend(' .
                                   $oGabriel->messenger_serial . ').';
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

            }

        }else{

            $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

            $oGabriel->proxySend();

            $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

            $clr_ssl_msg = 'Finished Trigger oGabriel_ProxySend(' .
                           $oGabriel->messenger_serial . ').';
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function oGabriel_Send($oCRNRSTN_GABRIEL = NULL)
    {

        $tmp_flag_messenger_send_ARRAY = array();
        if(!isset($oCRNRSTN_GABRIEL)){

            //
            // FIRE EVERYTHING!
            foreach($this->oMessenger_ARRAY as $serial => $oGabriel){

                if(!isset($tmp_flag_messenger_send_ARRAY[$oGabriel->messenger_serial])){

                    $tmp_flag_messenger_send_ARRAY[$oGabriel->messenger_serial] = 1;

                    $send_result_array[] = $oGabriel->send();

                    $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

                    $clr_ssl_msg = 'Finished Triggering oGabriel->send(' .
                                   $oGabriel->messenger_serial . ').';
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

            }

        }else{

            $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

            $send_result_array[] = $oGabriel->send();

            $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

            $clr_ssl_msg = 'Finished Trigger oGabriel->send(' .
                           $oGabriel->messenger_serial . ').';
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

        return $send_result_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function oGabriel_SendReport($oCRNRSTN_GABRIEL)
    {

        $clr_ssl_msg = 'Trigger oGabriel_SendReport().';
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

        // where $emailSendReport_ARRAY = array['0'=>['email@email.com'=>'success'], '1'=>['test@test.com'=>'duplicate_suppressed'], test2@test.com'=>'error']
        /*
                foreach($emailSendReport_ARRAY as $index=>$emailReport){
                    foreach($emailReport as $email=>$sendStatus){

                        'UPDATE table where 'EMAIL'= $email SET...;'

                    }
                }
        */

        return true;

    }

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
    function addAddressBulk(
             $oCRNRSTN_GABRIEL, 
             $recipient_email, 
             $recipient_name = '', 
             $email_experience_tracker = NULL)
    {

        if(!isset($email_experience_tracker))
            $email_experience_tracker = $this->generate_new_key(70);

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addAddressBulk($email_experience_tracker, $recipient_email, $recipient_name);

        //
        // DEFAULT ISHTML TO FALSE...JUST LIKE SINGLE EMAIL
        $oGabriel->isHTMLBulk($email_experience_tracker, false);

        //
        // DEFAULT WORDWRAP...JUST LIKE SINGLE EMAIL
        $oGabriel->wordWrapBulk($email_experience_tracker, 72);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

        return $email_experience_tracker;

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
    function isHTMLBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $bool_isHTML)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->isHTMLBulk($email_experience_tracker, $bool_isHTML);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function setPriorityBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $priority = 'NORMAL')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->setPriorityBulk($email_experience_tracker, $priority);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addFromBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $sender_email, 
             $sender_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addFromBulk($email_experience_tracker, $sender_email, $sender_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function wordWrapBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $max_char_column_cnt = 72)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->wordWrapBulk($email_experience_tracker, $max_char_column_cnt);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addReplyToBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $reply_to_email, 
             $reply_to_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addReplyToBulk($email_experience_tracker, $reply_to_email, $reply_to_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addCCBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $cc_email, 
             $cc_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addCCBulk($email_experience_tracker, $cc_email, $cc_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

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
    function addBCCBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $bcc_email, 
             $bcc_name = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addBCCBulk($email_experience_tracker, $bcc_email, $bcc_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addSubjectBulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $subject_line = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addSubjectBulk($email_experience_tracker, $subject_line);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addHTMLver_Bulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $html_message = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addHTMLver_Bulk($email_experience_tracker, $html_message);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

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
    function addTEXTver_Bulk(
             $oCRNRSTN_GABRIEL, 
             $email_experience_tracker, 
             $text_message = '')
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->addTEXTver_Bulk($email_experience_tracker, $text_message);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

    //
    // BATCH MANAGEMENT TO LIMIT RESOURCE CONSUMPTION - where here, it is 25 email messages per batch
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function batchReadyToSend(
             $oCRNRSTN_GABRIEL, 
             $max_batch_count = 0)
    {

        // USE LIKE THIS
        //if($oCRNRSTN_USR->batchReadyToSend($oCRNRSTN_GABRIEL, 25)){

        //}
        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        return $oGabriel->batchReadyToSend($max_batch_count);

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
    function sendStatusReportEmail(
             $oCRNRSTN_GABRIEL, 
             $recipient_email, 
             $recipient_name)
    {

        $oGabriel = $this->oMessenger_ARRAY[$oCRNRSTN_GABRIEL->messenger_serial];

        $oGabriel->sendStatusReportEmail($recipient_email, $recipient_name);

        $this->oMessenger_ARRAY[$oGabriel->messenger_serial] = $oGabriel;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_oCRNRSTN_ENV()
    {

        return $this->R_env;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_ssdtl_packet_ttl()
    {

        return $this->ssdtl_packet_ttl;

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
    function return_SOAP_svc_oClient_meta(
             $param_key, 
             $CRNRSTN_SOAP_SVC_USERNAME, 
             $CRNRSTN_SOAP_SVC_PASSWORD)
    {

        return $this->R_env->return_SOAP_svc_oClient_meta(
                             $param_key, 
                             $CRNRSTN_SOAP_SVC_USERNAME, 
                             $CRNRSTN_SOAP_SVC_PASSWORD);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_SOAP_svc_config_param($param_key)
    {

        return $this->R_env->return_SOAP_svc_config_param($param_key);

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
    function client_agent_is(
             $key, 
             $userAgent = NULL, 
             $httpHeaders = NULL)
    {

        return $this->R_env->client_agent_is(
                             $key, 
                             $userAgent, 
                             $httpHeaders);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function form_serialize_new(
             $crnrstn_form_handle, 
             $transport_protocol = 'POST')
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed method visibility from 
         *       private to public and added the 
         *       $transport_protocol = 'POST' 
         *       input paramater in order to align 
         *       to method usage in crnrstn. 
         *       5 :: Sunday, July 26, 2026 @ 2210 hrs.
         *
         */

        try{

            $tmp_stripe_key_ARRAY    = $this->return_stripe_key_ARRAY('$crnrstn_form_handle');
            $tmp_param_err_str_ARRAY = $this->return_regression_stripe_ARRAY('MISSING_STRING_DATA', $tmp_stripe_key_ARRAY, $crnrstn_form_handle);

            $tmp_param_missing_str   = $tmp_param_err_str_ARRAY['string'];
            $tmp_param_missing_ARRAY = $tmp_param_err_str_ARRAY['index_array'];

            //if(count($tmp_param_missing_ARRAY) > 0){
            if(!!$tmp_param_missing_ARRAY){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: Form handling configuration error :: ' . $tmp_param_missing_str);

            }else{

                // HOW TO GET SUBMITTED FORM FIELD DATA
                //$this->get_resource_submitted('input_field_name', $transport_protocol);
                // PREVIOUS METHOD:
                //$this->return_form_submitted_value('input_field_name', $transport_protocol);
                $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
                $tmp_data_type_family = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash;
                if(!($this->isset_resource('data_value', $crnrstn_form_handle, $tmp_data_type_family) == true)){
                    //if(!$this->isset_data_key($crnrstn_form_handle, $tmp_data_type_family)){

                    // function add_resource($data_key, $data_value, $data_type_family = 'CRNRSTN::RESOURCE', $data_authorization_profile = 'R_authorize & R_channel_RUNTIME'){
                    $tmp_serialized_data_key = $this->add_resource('crnrstn_pssdtl_packet', $crnrstn_form_handle, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family . 'crnrstn_pssdtl_packet'][] = $tmp_serialized_data_key;

                }

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
    function form_input_add(
             $crnrstn_form_handle = NULL, 
             $field_input_name = NULL, 
             $field_input_id = NULL, 
             $default_value = NULL, 
             $validation_constant_profile = CRNRSTN_INPUT_OPTIONAL, 
             $table_field_name = NULL)
    {

        /*
        5 :: Saturday, September 3, 2022 @ 0726 hrs.
        Last Modified: Saturday, February, 14, 2026 @ 0915 hrs.

        CRNRSTN ::
        CRNRSTN_INPUT_OPTIONAL
        CRNRSTN_INPUT_REQUIRED
        CRNRSTN_INPUT_IS_PASSWORD
        x---CRNRSTN_INPUT_IS_FILE_IMAGE_JPEG
        x---CRNRSTN_INPUT_IS_FILE_IMAGE_PNG
        x---CRNRSTN_INPUT_IS_FILE_IMAGE_GIF
        x---CRNRSTN_INPUT_IS_FILE_IMAGE
        x---CRNRSTN_INPUT_IS_FILE_DOCUMENT
        x---CRNRSTN_INPUT_IS_FILE_ZIP
        CRNRSTN_INPUT_IS_EMAIL
        CRNRSTN_INPUT_CHAR_RESTRICTIONS
        CRNRSTN_INPUT_CHAR_LIMITS

        CRNRSTN_INPUT_IS_PASSWORD (OUTPUT NOTE TO USER WITH THESE RULES)
            - CHAR COUNT RULES (MINIMUM LENGTH)
            - REQUIRED CHAR TYPES
            - ILLEGAL CHARS

        CRNRSTN_INPUT_CHAR_RESTRICTIONS (OUTPUT NOTE TO USER WITH THESE RULES)
            - PERMISSIBLE CHARS
            - ILLEGAL CHARS

        CRNRSTN_INPUT_CHAR_LIMIT (OUTPUT NOTE TO USER WITH THESE RULES)
            - NUMBER OF CHARS UPPER LIMIT.
            - NUMBER OFF CHARS LOWER LIMIT

        */

        $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
        $tmp_data_type_family = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash;
        if($this->isset_resource('data_value', $crnrstn_form_handle, $tmp_data_type_family) == true){
        //if(!$this->isset_data_key($crnrstn_form_handle, $tmp_data_type_family)){

            $this->form_serialize_new($crnrstn_form_handle);

        }

        try{

            $tmp_stripe_key_ARRAY = $this->return_stripe_key_ARRAY('$crnrstn_form_handle', '$field_input_name');
            $tmp_param_err_str_ARRAY = $this->return_regression_stripe_ARRAY('MISSING_STRING_DATA', $tmp_stripe_key_ARRAY, $field_input_name);

            $tmp_param_missing_str = $tmp_param_err_str_ARRAY['string'];
            $tmp_param_missing_ARRAY = $tmp_param_err_str_ARRAY['index_array'];

            //if(count($tmp_param_missing_ARRAY) > 0){
            if(!!$tmp_param_missing_ARRAY){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: Form handling configuration error :: ' . $tmp_param_missing_str);

            }else{

                $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
                $tmp_field_input_name_hash = $this->hash($field_input_name);

                $tmp_dtf_FORM_HANDLE = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash . '::' . $tmp_field_input_name_hash;
                //if(!$this->isset_data_key('FORM_INPUT_NAME', $tmp_dtf_FORM_HANDLE)){

                $tmp_data_key = 'CRNRSTN_FIELD_INPUT_NAME';
                $tmp_data_type_family = $tmp_dtf_FORM_HANDLE  . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $field_input_name, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                $tmp_str = '$field_input_name=[' . $field_input_name . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                if(isset($field_input_id)){

                    $tmp_data_key = 'CRNRSTN_FIELD_INPUT_ID';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE  . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $field_input_id, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$field_input_id=[' . $field_input_id . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                }

                if(isset($default_value)){

                    $tmp_data_key = 'DEFAULT_VALUE';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE  . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $default_value, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$default_value=[' . $default_value . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                }

                if(isset($table_field_name)){

                    $tmp_data_key = 'TABLE_FIELD_NAME';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE  . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $table_field_name, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$table_field_name=[' . $table_field_name . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                }

                if(isset($validation_constant_profile)){

                    $tmp_data_key = 'VALIDATION_CONSTANTS_PROFILE';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE  . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $validation_constant_profile, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$validation_constant_profile=[' . $validation_constant_profile . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                }

                //}

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
    function form_response_add(
             $crnrstn_form_handle, 
             $field_input_name = NULL,
             $success_response_data = NULL,
             $success_response_type = NULL,
             $error_response_data = NULL,
             $error_response_type = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added default values for the
         *       form_response_add method inputs:
         *       $field_input_name = NULL,
         *       $success_response_data = NULL,
         *       $success_response_type = NULL,
         *       $error_response_data = NULL, and
         *       $error_response_type = NULL so
         *       as to align to the use of
         *       this method by crnrstn:
         *
         *       Fatal error: Declaration of
         *       CRNRSTN\crnrstn_user::form_response_add(
         *       $crnrstn_form_handle, $field_input_name,
         *       $success_response_data,
         *       $success_response_type,
         *       $error_response_data,
         *       $error_response_type) must be
         *       compatible with
         *       CRNRSTN\crnrstn::form_response_add(
         *       $crnrstn_form_handle,
         *       $field_input_name = null,
         *       $success_response_data = null,
         *       $success_response_type = null,
         *       $error_response_data = null,
         *       $error_response_type = null) in
         *       C:\xampp\htdocs\_R\class\user
         *       \crnrstn.user.class.php
         *       on line 11781
         *
         *
         *       5 :: Friday, August 21, 2026 @ 0521 hrs.
         *
         */
        /*
        WHERE $success_response_type=
        WHERE $error_response_type=
            CRNRSTN_HTTP_REDIRECT
            CRNRSTN_HTTPS_REDIRECT
            CRNRSTN_HTTP_DATA_RETURN     // UGC RESPONSE HEADER DATA???
            CRNRSTN_HTTPS_DATA_RETURN    // UGC RESPONSE HEADER DATA???
            CRNRSTN_JSON_RETURN
            CRNRSTN_XML_RETURN
            CRNRSTN_SOAP_RETURN
            CRNRSTN_HTML_TEXT_RETURN
            CRNRSTN_DOCUMENT_FILE_RETURN
            CRNRSTN_SERVER_RESPONSE_CODE

        'CRNRSTN_HTTP_REDIRECT', 'CRNRSTN_HTTPS_REDIRECT', 'CRNRSTN_HTTP_DATA_RETURN',
        'CRNRSTN_HTTPS_DATA_RETURN', 'CRNRSTN_JSON_RETURN', 'CRNRSTN_XML_RETURN', 'CRNRSTN_SOAP_RETURN',
        'CRNRSTN_HTML_TEXT_RETURN', 'CRNRSTN_DOCUMENT_FILE_RETURN', 'CRNRSTN_SERVER_RESPONSE_CODE'

        */
        $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
        $tmp_data_type_family = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash;
        if(!($this->isset_resource('data_value', $crnrstn_form_handle, $tmp_data_type_family) == true)){
            //if(!$this->isset_data_key($crnrstn_form_handle, $tmp_data_type_family)){

            $this->form_serialize_new($crnrstn_form_handle);

        }

        $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);

        if(isset($field_input_name)){

            $tmp_data_key = 'SUCCESS_RESPONSE';
            $tmp_dtf_FORM_RESPONSE = 'CRNRSTN::RESOURCE::FORM_INPUT_RESPONSE::' . $tmp_form_handle_hash . '::' . $field_input_name;

            if(!isset($this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_RESPONSE.$tmp_data_key]) && isset($success_response_data)){

                //
                // UNLESS WE WANT MULTIPLE SUCCESS REDIRECTS TO BE ASSOCIATED
                // WITH EACH INPUT...SPOIL isset_data_key().
                $this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_RESPONSE.$tmp_data_key] = 1;

                $tmp_data_key = 'SUCCESS_RESPONSE';
                $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $success_response_data, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                $tmp_data_key = 'SUCCESS_RESPONSE_TYPE';
                $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $success_response_type, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                $tmp_str = '$success_response_data=[' . $success_response_data . '].
//$success_response_type=[' . $success_response_type . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

            }

            $tmp_data_key = 'ERROR_RESPONSE';
            if(!isset($this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_RESPONSE.$tmp_data_key]) && isset($error_response_data)){

                //
                // UNLESS WE WANT MULTIPLE ERROR RESPONSE/REDIRECT TO BE ASSOCIATED
                // WITH EACH INPUT...SPOIL.
                $this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_RESPONSE.$tmp_data_key] = 1;

                $tmp_data_key = 'ERROR_RESPONSE';
                $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $error_response_data, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                $tmp_data_key = 'ERROR_RESPONSE_TYPE';
                $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $error_response_type, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                $tmp_str = '$error_response_data=[' . $error_response_data . '].
//$error_response_type=[' . $error_response_type . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

            }

        }

        $tmp_data_key = 'SUCCESS_RESPONSE';
        $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE = 'CRNRSTN::RESOURCE::FORM_RESPONSE::' . $tmp_form_handle_hash;

        if(!isset($this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family.$tmp_data_key])){

            //
            // UNLESS WE WANT *ALL* SUCCESS RESPONSE TO BE ASSOCIATED
            // WITH THIS FORM...AS WELL AS THEIR RESPECTIVE INPUTS...SPOIL.
            $this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family.$tmp_data_key] = 1;

            $tmp_data_key = 'SUCCESS_RESPONSE';
            $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
            $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $success_response_data, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
            $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

            $tmp_data_key = 'SUCCESS_RESPONSE_TYPE';
            $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
            $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $success_response_type, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
            $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//            $tmp_str = '$success_response_data=[' . $success_response_data . '].
//$success_response_type=[' . $success_response_type . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//            $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

        }

        $tmp_data_key = 'ERROR_RESPONSE';
        $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE = 'CRNRSTN::RESOURCE::FORM_RESPONSE::' . $tmp_form_handle_hash;

        if(!isset($this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family.$tmp_data_key]) && isset($error_response_data)){

            //
            // UNLESS WE WANT *ALL* ERROR REDIRECTS TO BE ASSOCIATED
            // WITH FORM...AS WELL AS THEIR RESPECTIVE INPUTS...SPOIL.
            $this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family.$tmp_data_key] = 1;

            $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
            $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $error_response_data, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
            $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

            $tmp_data_key = 'ERROR_RESPONSE_TYPE';
            $tmp_data_type_family = $tmp_dtf_FORM_RESPONSE . '::' . $tmp_data_key;
            $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $error_response_type, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
            $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//            $tmp_str = '$error_response_data=[' . $error_response_data . '].
//$error_response_type=[' . $error_response_type . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//            $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

        }

        return true;

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
    function form_hidden_input_add(
             $crnrstn_form_handle = NULL, 
             $field_input_name = NULL, 
             $field_input_id = NULL, 
             $default_value = NULL, 
             $validation_constant_profile = CRNRSTN_INPUT_OPTIONAL, 
             $table_field_name = NULL, 
             $encrypt_data = true)
    {

        try{

            $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
            $tmp_data_type_family = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash;
            if(!($this->isset_resource('data_value', $crnrstn_form_handle, $tmp_data_type_family) == true)){
                //if(!$this->isset_data_key($crnrstn_form_handle, $tmp_data_type_family)){

                $this->form_serialize_new($crnrstn_form_handle);

            }

            $tmp_stripe_key_ARRAY = $this->return_stripe_key_ARRAY('$crnrstn_form_handle', '$field_input_name');
            $tmp_param_err_str_ARRAY = $this->return_regression_stripe_ARRAY('MISSING_STRING_DATA', $tmp_stripe_key_ARRAY, $field_input_name);

            $tmp_param_missing_str = $tmp_param_err_str_ARRAY['string'];
            $tmp_param_missing_ARRAY = $tmp_param_err_str_ARRAY['index_array'];

            //if(count($tmp_param_missing_ARRAY) > 0){
            if(!!$tmp_param_missing_ARRAY){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: Form handling configuration error :: ' . $tmp_param_missing_str);

            }

            if(!isset($field_input_name)){

                $field_input_name = 'crnrstn_input_' . $this->generate_new_key(26);

            }

            $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
            $tmp_html_form_input_name_hash = $this->hash($field_input_name);

            $tmp_data_key = 'CRNRSTN_FIELD_HIDDEN_INPUT_NAME';
            $tmp_dtf_FORM_HANDLE = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash . '::' . $tmp_html_form_input_name_hash;

            if(!isset($this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_HANDLE.$tmp_data_key])){

                //
                // SPOIL
                $this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_HANDLE.$tmp_data_key] = 1;

                if(isset($field_input_name)){

                    $tmp_data_key = 'CRNRSTN_FIELD_HIDDEN_INPUT_NAME';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $field_input_name, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$field_input_name=[' . $field_input_name . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

                }

                if(isset($field_input_id)){

                    $tmp_data_key = 'CRNRSTN_FIELD_HIDDEN_INPUT_ID';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $field_input_name, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$field_input_name=[' . $field_input_name . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

                }

                if(isset($default_value)){

                    $tmp_data_key = 'DEFAULT_VALUE';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $default_value, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$default_value=[' . $default_value . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

                }

                if(isset($table_field_name)){

                    $tmp_data_key = 'TABLE_FIELD_NAME';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $table_field_name, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$default_value=[' . $default_value . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

                }

                if(isset($validation_constant_profile)){

                    $tmp_data_key = 'VALIDATION_CONSTANT_PROFILE';
                    $tmp_data_type_family = $tmp_dtf_FORM_HANDLE . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $validation_constant_profile, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                    $tmp_str = '$validation_constant_profile=[' . $validation_constant_profile . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                    $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

                }

                $tmp_data_key = 'IS_ENCRYPTED';
                $tmp_data_type_family = $tmp_dtf_FORM_HANDLE . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $encrypt_data, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

//                $tmp_str = '$encrypt_data=[' . $encrypt_data . '].
//$tmp_data_key=[' . $tmp_data_key . '].
//$tmp_data_type_family=[' . $tmp_data_type_family . '].';
//                $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

            }

        }catch (Exception $e){

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
     * @access private
     * @access public
     *
     */
    function form_input_feedback_copy_add(
             $crnrstn_form_handle, 
             $validation_constant_profile, 
             $field_input_name, 
             $field_input_id = NULL, 
             $err_msg = NULL, 
             $success_msg = NULL, 
             $info_msg = NULL)
    {

        /*
        $tmp_str = '$crnrstn_form_handle=[' . 
                   $crnrstn_form_handle . ']. $validation_constant_profile=[' . 
                   $validation_constant_profile . ']. $field_input_name=[' . 
                   $field_input_name . ']. $field_input_id=[' . 
                   $field_input_id . '].  $err_msg=[' . 
                   $err_msg . ']. $success_msg=[' . 
                   $success_msg . '].  $info_msg=[' . 
                   $info_msg . '].';

        $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

         */

        try{

            $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);
            $tmp_data_type_family = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash;
            if(!($this->isset_resource('data_value', $crnrstn_form_handle, $tmp_data_type_family) == true)){
                //if(!$this->isset_data_key($crnrstn_form_handle, $tmp_data_type_family)){

                $this->form_serialize_new($crnrstn_form_handle);

            }

            $tmp_stripe_key_ARRAY = $this->return_stripe_key_ARRAY('$crnrstn_form_handle', '$field_input_name');
            $tmp_param_err_str_ARRAY = $this->return_regression_stripe_ARRAY('MISSING_STRING_DATA', $tmp_stripe_key_ARRAY, $field_input_name);

            $tmp_param_missing_str = $tmp_param_err_str_ARRAY['string'];
            $tmp_param_missing_ARRAY = $tmp_param_err_str_ARRAY['index_array'];

            //if(count($tmp_param_missing_ARRAY) > 0){
            if(!!$tmp_param_missing_ARRAY){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: Form handling configuration error :: ' . $tmp_param_missing_str);

            }

            $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);

            $tmp_data_key = 'CRNRSTN_FIELD_INPUT_NAME';
            $tmp_dtf_FORM_INPUT_VALIDATION = 'CRNRSTN::RESOURCE::FORM_INPUT_VALIDATION::' . $tmp_form_handle_hash . '::' . $tmp_data_key;

            if(!isset($this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_INPUT_VALIDATION])){

                //
                // SPOIL
                $this->crnrstn_data_packet_spoiler_ARRAY[$tmp_form_handle_hash][$tmp_dtf_FORM_INPUT_VALIDATION] = 1;

                $tmp_data_key = 'VALIDATION_PROFILE';
                $tmp_data_type_family = $tmp_dtf_FORM_INPUT_VALIDATION . '::' . $tmp_data_key;
                $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $validation_constant_profile, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                /*
                $tmp_str = '$success_msg=[' . 
                           $success_msg . ']. $tmp_data_key=[' . 
                           $tmp_data_key . ']. $tmp_data_type_family=[' . 
                           $tmp_data_type_family . '].';

                $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                 */

                if(isset($field_input_name)){

                    $tmp_data_key = 'CRNRSTN_FIELD_INPUT_NAME';
                    $tmp_data_type_family = $tmp_dtf_FORM_INPUT_VALIDATION . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $field_input_name, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                    /*
                    $tmp_str = '$field_input_name=[' . 
                               $field_input_name . ']. $tmp_data_key=[' . 
                               $tmp_data_key . ']. $tmp_data_type_family=[' . 
                               $tmp_data_type_family . '].';

                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                     */

                }

                if(isset($field_input_id)){

                    $tmp_data_key = 'CRNRSTN_FIELD_INPUT_ID';
                    $tmp_data_type_family = $tmp_dtf_FORM_INPUT_VALIDATION . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $field_input_id, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                    /*
                    $tmp_str = '$field_input_id=[' . 
                               $field_input_id . ']. $tmp_data_key=[' . 
                               $tmp_data_key . ']. $tmp_data_type_family=[' . 
                               $tmp_data_type_family . '].';

                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                     */

                }

                if(isset($err_msg)){

                    if(strlen($err_msg) > 0){

                        $tmp_data_key = 'ERR_MESSAGE';
                        $tmp_data_type_family = $tmp_dtf_FORM_INPUT_VALIDATION . '::' . $tmp_data_key;
                        $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $err_msg, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                        $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                        /*
                        $tmp_str = '$err_msg=[' . 
                                   $err_msg . ']. $tmp_data_key=[' . 
                                   $tmp_data_key . ']. $tmp_data_type_family=[' . 
                                   $tmp_data_type_family . '].';

                        $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                        $this->spool_destruct_output($this->print_r_str($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__));

                         */

                    }

                }

                if(isset($success_msg)){

                    if(strlen($success_msg) > 0){

                        $tmp_data_key = 'SUCCESS_MESSAGE';
                        $tmp_data_type_family = $tmp_dtf_FORM_INPUT_VALIDATION . '::' . $tmp_data_key;
                        $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $success_msg, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                        $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                        /*
                        $tmp_str = '$success_msg=[' . 
                                   $success_msg . ']. $tmp_data_key=[' . 
                                   $tmp_data_key . ']. $tmp_data_type_family=[' . 
                                   $tmp_data_type_family . '].';

                        $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                         */

                    }

                }

                if(isset($info_msg)){

                    $tmp_data_key = 'INFO_MESSAGE';
                    $tmp_data_type_family = $tmp_dtf_FORM_INPUT_VALIDATION . '::' . $tmp_data_key;
                    $tmp_serialized_data_key = $this->add_resource($tmp_data_key, $info_msg, $tmp_data_type_family, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                    $this->crnrstn_data_packet_data_key_index_ARRAY[$tmp_form_handle_hash][$tmp_data_type_family] = $tmp_serialized_data_key;

                    /*
                    $tmp_str = '$info_msg=[' . 
                               $info_msg . ']. $tmp_data_key=[' . 
                               $tmp_data_key . ']. $tmp_data_type_family=[' . 
                               $tmp_data_type_family . '].';

                    $this->print_r($tmp_str, NULL, NULL, __LINE__, __METHOD__, __FILE__);

                     */

                }

            }

            return true;

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
    private function return_serialized_input_fields_html(
                     $channel_constant, 
                     $crnrstn_form_handle)
    {

        $tmp_form_handle_hash = $this->hash($crnrstn_form_handle);

        $tmp_pssdtlp_data = $this->crnrstn_data_packet_return($channel_constant, $tmp_form_handle_hash);
        $tmp_pssdtlp_data_encrypted = $this->data_encrypt($tmp_pssdtlp_data);

        //
        // PERFORM INDEX (FORM_INPUT_NAME) AGGREGATION LAST
        $tmp_html_out  = '        <input type="hidden" id="crnrstn_session_salt" name="crnrstn_session_salt" value="' . $this->session_salt(). '">
';
        $tmp_html_out  .= '        <input type="hidden" name="crnrstn_pssdtlp_clear_text_bytes" value="' . strlen($tmp_pssdtlp_data) . '">
';
        $tmp_html_out  .= '        <input type="hidden" name="crnrstn_pssdtlp_encrypted_bytes" value="' . strlen($tmp_pssdtlp_data_encrypted) . '">
';
        $tmp_html_out  .= '        <input type="hidden" name="crnrstn_pssdtlp_hash" value="' . $this->hash($tmp_pssdtlp_data) . '">
';
        $tmp_html_out  .= '        <input type="hidden" name="crnrstn_pssdtl_packet" value="' . $tmp_pssdtlp_data_encrypted . '">';
        $tmp_html_out .= $this->crnrstn_data_packet_hidden_input_return($channel_constant, $tmp_form_handle_hash) . '
';
        $tmp_pssdtlp_index_str = $this->form_integrations_data_index($tmp_form_handle_hash, 'string');

        if($channel_constant == $this->R_data['int_flag']['R_channel_SSDTLA']){

            $tmp_html_out  .= '        <input type="hidden" name="crnrstn_pssdtlp_index" value="' . $tmp_pssdtlp_index_str . '">
';
        }

        //$this->print_r($tmp_html_out, NULL, NULL, __LINE__, __METHOD__, __FILE__);

        //error_log(__LINE__  . ' user ' . __METHOD__ . ' [' . print_r($tmp_html_out, true) . '].');

        return $tmp_html_out;

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
    function return_crnrstn_mysqli(
             $host = NULL, 
             $db = NULL, 
             $un = NULL, 
             $port = NULL, 
             $pwd = NULL)
    {

        if(!isset($host))
            $tmp_host_hashable = $this->hash('{empty}');
        else
            $tmp_host_hashable = $this->hash($host);

        if(!isset($db))
            $tmp_db_hashable = $this->hash('{empty}');
        else
            $tmp_db_hashable = $this->hash($db);

        if(!isset($un))
            $tmp_un_hashable = $this->hash('{empty}');
        else
            $tmp_un_hashable = $this->hash($un);

        if(!isset($port))
            $tmp_port_hashable = $this->hash('{empty}');
        else
            $tmp_port_hashable = $this->hash($port);

        if(!isset($pwd))
            $tmp_pwd_hashable = $this->hash('{empty}');
        else
//            $tmp_form_handle_hash = hash($this->system_hash_algo(), $crnrstn_form_handle);
//            $tmp_field_input_name_hash = hash($this->system_hash_algo(), $field_input_name);
            $tmp_pwd_hashable = $this->hash($pwd);

        $tmp_mysqli_serial = $this->hash($tmp_host_hashable . 
                                         $tmp_db_hashable . 
                                         $tmp_un_hashable . 
                                         $tmp_port_hashable . 
                                         $tmp_pwd_hashable);

        if(isset($this->oMySQLi_ARRAY[$tmp_mysqli_serial])){

            if($this->oMySQLi_ARRAY[$tmp_mysqli_serial]->ping()){

                //
                // THERE IS ALREADY AN OPEN DATABASE CONNECTION
                $this->oMySQLi_ARRAY[$tmp_mysqli_serial] = $this->oMYSQLI_CONN_MGR->returnConnection($host, $db, $un, $port, $pwd);
                self::$oMySQLi_hash_ARRAY[] = $tmp_mysqli_serial;

            }

        }else{

            //error_log(__LINE__ . ' user I need to open a new connection [' . $tmp_mysqli_serial . '] now! ...mysqli not set.');
            $clr_ssl_msg = 'Opening a new MYSQLi database connection.';
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

            // Open a database connection.
            $this->oMySQLi_ARRAY[$tmp_mysqli_serial] = $this->oMYSQLI_CONN_MGR->returnConnection($host, $db, $un, $port, $pwd);
            self::$oMySQLi_hash_ARRAY[] = $tmp_mysqli_serial;

        }

        // Return a CRNRSTN :: MySQLi connection object.
        $oCRNRSTN_MySQLi = new crnrstn_database_connection_handle($this);
        $oCRNRSTN_MySQLi->load_connection_serial($tmp_mysqli_serial);
        $oCRNRSTN_MySQLi->load_connection_obj($this->oMySQLi_ARRAY[$tmp_mysqli_serial]);

        $tmp_version_mysqli = $oCRNRSTN_MySQLi->version_mysqli;
        //$this->input_data_value($tmp_version_mysqli, 'version_mysqli', NULL, 0, $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME'], NULL);


        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * The CRNRSTN :: Lightsaber RoCEv2 
         * SOAP Services Layer (CLR-SSL) 
         * Configuration Manager will 
         * input clean UGC data or look 
         * for the best and most elegant 
         * (please read as graceful) 
         * degradation pathways to a 
         * vanilla default. 
         *
         * On critical ERR, 
         * $oCRNRSTN->config_ugc_input_clean_data() 
         * returns null, and a system 
         * exception is thrown. 
         *
         * Otherwise, if the input data 
         * is not valid, but the data can 
         * be overridden with a known 
         * PHP.INI configuration default 
         * value, there is an on the fly 
         * patch that will be made, and a 
         * system notification with 
         * details about the internal 
         * override is quietly captured. 
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         *
         * - $oCRNRSTN->err_message_queue_push(), 
         * - $oCRNRSTN->err_message_queue_retrieve(), 
         * - $oCRNRSTN->err_message_queue_clear(), and 
         * - $oCRNRSTN->err_message_count(). 
         *
         * 5 :: Monday, December 11, 2023 @ 1120 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         *
         * Please note that 
         * $oCRNRSTN->err_message_queue_retrieve() 
         * can receive an err message output 
         * override as input. 
         *
         * Also of note, especially to the 
         * CLR-SSL Logging Services Layer 
         * internally, is that acceptable 
         * input can include data such as 
         * empty string, SOAP error object, 
         * or even an OpenSSL v1.1.1 
         * encrypted JSON packet containing 
         * session meta and a cache 
         * expiration TTL. 
         *
         *
         * 5
         *
         * Sunday, December 3, 2023 @ 2116 hrs.
         *
         */
        if(!($tmp_result = $this->config_ugc_input_clean_data(__FUNCTION__ . '_string', $tmp_version_mysqli, 'version_mysqli', 'CRNRSTN::RESOURCE::CONFIGURATION', 0))){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            throw new Exception($this->err_message_queue_retrieve());

        }

        return $oCRNRSTN_MySQLi;

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
    function pushFakeyDBConn(
             $fakey_mysqli_serial, 
             $mysqli)
    {

        $this->oMySQLi_ARRAY[$fakey_mysqli_serial] = $mysqli;
        self::$oMySQLi_hash_ARRAY[]                = $fakey_mysqli_serial;

        return $mysqli;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_oCRNRSTN_MySQLi_Fakey($fakey_mysqli_serial)
    {

        $oCRNRSTN_MySQLi = new crnrstn_database_connection_handle($this);
        $oCRNRSTN_MySQLi->load_connection_serial($fakey_mysqli_serial);

        return $oCRNRSTN_MySQLi;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function closeConnection_MySQLi($mysqli)
    {

        //error_log("4122 user - I will manually close connection now!");
        $this->oMYSQLI_CONN_MGR->closeConnection($mysqli);

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
    function return_encrypt_settings(
             $data = NULL, 
             $encryption_channel = CRNRSTN_ENCRYPT_TUNNEL, 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        return $this->R_env->return_encrypt_settings(
                             $data, 
                             $encryption_channel, 
                             $cipher_override, 
                             $secret_key_override, 
                             $hmac_algorithm_override, 
                             $options_bitwise_override);

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
    function return_decrypt_settings(
             $data = NULL, 
             $encryption_channel = CRNRSTN_ENCRYPT_TUNNEL, 
             $uri_passthrough = false, 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        return $this->R_env->return_decrypt_settings(
                             $data, 
                             $encryption_channel, 
                             $uri_passthrough, 
                             $cipher_override, 
                             $secret_key_override, 
                             $hmac_algorithm_override, 
                             $options_bitwise_override);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isset_encryption($encryption_channel)
    {

        return $this->oCRNRSTN_BITFLIP_MGR->is_bit_set($encryption_channel);

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
    function data_encrypt(
             $data = NULL, 
             $encryption_channel = CRNRSTN_ENCRYPT_TUNNEL, 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        return $this->R_env->data_encrypt(
                             $data, 
                             $encryption_channel, 
                             $cipher_override, 
                             $secret_key_override, 
                             $hmac_algorithm_override, 
                             $options_bitwise_override);

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
    function data_decrypt(
             $data = NULL, 
             $encryption_channel = CRNRSTN_ENCRYPT_TUNNEL, 
             $uri_passthrough = false, 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        return $this->R_env->data_decrypt(
                             $data, 
                             $encryption_channel, 
                             $uri_passthrough, 
                             $cipher_override, 
                             $secret_key_override, 
                             $hmac_algorithm_override, 
                             $options_bitwise_override);

    }

    // REPLACED BY public function isset_encryption($encryption_channel)
    // OLD METHOD NAME: $this->is_tunnel_encrypt_configured()
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
    function is_encryption_configured(
             $encryption_channel, 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        $tmp_test_str = 'The quick brown fox jumped over the lazy dog.';
        $tmp_encryptedVal = $this->R_env->data_encrypt($tmp_test_str, $encryption_channel, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override);
        //error_log('5936 user - Fire Decrypt TEST...[' . $tmp_test_str.']==[' . $tmp_encryptedVal.']');
        $tmp_decryptedVal = $this->R_env->data_decrypt($tmp_encryptedVal, $encryption_channel, true, $cipher_override, $secret_key_override, $hmac_algorithm_override, $options_bitwise_override);
        //error_log('5938 user - Fire Decrypt TEST...[' . $tmp_test_str.']==[' . $tmp_decryptedVal.']');

        if($tmp_test_str == $tmp_decryptedVal){

            return true;

        }else{

            return false;

        }

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
    private function compile_form_integration_packet(
                     $crnrstn_form_handle, 
                     $field_input_name, 
                     $encryption_status = true, 
                     $server_side_validation = NULL)
    {

        //
        // DATA PROFILE FOR SUCCESSFUL CRNRSTN FORM CAPTURE INTEGRATION
        # COMPILE TIMESTAMP (SERVER) 1 - 1
        # FORM HANDLE 1 - 1              $crnrstn_form_handle
        # FORM TUNNEL PROTOCOL 1 - 1  self::$form_handle_ARRAY[$crnrstn_form_handle]
        # ALL INPUT NAME 1 - n
        # INPUT ENCRYPTION STATUS FOR HIDDEN FIELDS 1 - n
        # SERVER-SIDE VALIDATION STRING FOR DATA TREATMENT 1 - n

        // self::$formIntegrationPacket_ARRAY['timestamp']
        // self::$formIntegrationPacket_ARRAY['crnrstn_form_handle'] = $crnrstn_form_handle;
        // self::$formIntegrationPacket_ARRAY['transport_protocol'] = self::$form_handle_ARRAY[$crnrstn_form_handle]
        // self::$formIntegrationPacket_ARRAY['input_name'][n] =
        // self::$formIntegrationPacket_ARRAY['input_encrypt'][n] =
        // self::$formIntegrationPacket_ARRAY['input_validation'][n] =

        if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['timestamp'])){

            self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['timestamp'] = $this->return_micro_time();

        }

        if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['crnrstn_form_handle'])){

            self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['crnrstn_form_handle'] = $crnrstn_form_handle;

        }

        if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['transport_protocol'])){

            self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['transport_protocol'] = self::$form_handle_ARRAY[$crnrstn_form_handle];

        }

        if(!isset(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['integration_packet_encrypt'])){

            self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['integration_packet_encrypt'] = 'true';

        }

        self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_name'][] = $field_input_name;

        if($encryption_status){

            $encryption_status = 'true';

        }else{

            $encryption_status = 'false';

        }

        self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_encrypt'][] = $encryption_status;

        if(!isset($server_side_validation)){

            $server_side_validation = 'false';

        }

        self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_validation'][] = $server_side_validation;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_form_integration_packet($crnrstn_form_handle)
    {

        $tmp_html_out = '';
        $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['timestamp']);
        $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['crnrstn_form_handle']);
        $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['transport_protocol']);

        $tmp_input_cnt = sizeof(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_name']);
        for ($i = 0; $i < $tmp_input_cnt; $i++){

            $tmp_html_out .= $this->concatIntegrationPacketDatum($i, ':');
            $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_name'][$i], ':');
            $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_encrypt'][$i], ':');
            $tmp_html_out .= $this->concatIntegrationPacketDatum(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['input_validation'][$i], ':');

            $tmp_html_out = rtrim($tmp_html_out, ':');

            //self::$formIntegrationPacket_ARRAY['input_name']
            //self::$formIntegrationPacket_ARRAY['input_encrypt']
            //self::$formIntegrationPacket_ARRAY['input_validation']

            $tmp_html_out = $this->concatIntegrationPacketDatum($tmp_html_out);

            # <input type="hidden" name="crnrstn_pssdtl_packet" value="">

            /*
            value="TIMESTAMP[CRNRSTN::2.0.0]FORM_HANDLE[CRNRSTN::2.0.0]TUNNEL_PROTOCOL[CRNRSTN::2.0.0]
            0:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
            1:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
            2:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
            3:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]
            n:input_name:input_encrypt:input_validation[CRNRSTN::2.0.0]"

            */

        }

        $tmp_encrypted_flag = false;
        $tmp_html_out = rtrim($tmp_html_out, '[CRNRSTN::2.0.0]');
        if(self::$formIntegrationPacket_ARRAY[$crnrstn_form_handle]['packet_encryption_status'] == 'true'){

            $tmp_array_outer = array();
            $tmp_html_out = $this->R_env->data_encrypt($tmp_html_out);
            $tmp_array = $this->return_encrypt_settings($tmp_html_out, CRNRSTN_ENCRYPT_TUNNEL);

            //if(!$this->isset_session_param('ENCRYPT_PARAMS')){
            if(!($this->isset_resource('data_value', 'ENCRYPT_PARAMS') == true)){
                //if(!$this->isset_data_key('ENCRYPT_PARAMS')){

                $tmp_array_outer[] = $tmp_array;

                $this->add_resource($tmp_array_outer, 'ENCRYPT_PARAMS', 0, 'CRNRSTN::RESOURCE::FORM_INTEGRATIONS', $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                //$this->set_session_param('ENCRYPT_PARAMS', $tmp_array_outer);

            }else{

                $tmp_array_outer_sess = $this->get_resource('ENCRYPT_PARAMS');
                //$tmp_array_outer_sess = $this->get_session_param('ENCRYPT_PARAMS');

                $tmp_array_outer_sess[] = $tmp_array;

                $this->add_resource($tmp_array_outer_sess, 'ENCRYPT_PARAMS', 0, 'CRNRSTN::RESOURCE::FORM_INTEGRATIONS', $this->R_data['int_flag']['R_authorize'] & $this->R_data['int_flag']['R_channel_RUNTIME']);
                //$this->set_session_param('ENCRYPT_PARAMS', $tmp_array_outer_sess);

            }

            if($tmp_html_out != ''){

                $tmp_encrypted_flag = true;

            }

        }

        $tmp_html_out = '<input type="hidden" name="crnrstn_pssdtl_packet" value="' . $tmp_html_out . '">';

        if($tmp_encrypted_flag){

            $tmp_html_out .= '<input type="hidden" name="crnrstn_pssdtl_packet_ENCRYPTED" value="true">';

        }

        return $tmp_html_out;

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
    function add_database_query(
             $result_set_key, 
             $query_override = NULL)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);
            $result_handle   = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
            $batch_key       = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                if(!isset($query_override)){

                    $tmp_query = self::$oCRNRSTN_SQL_SILO->returnDatabaseQuery($this, $oCRNRSTN_MySQLi, $result_set_key);

                    if(strlen($tmp_query)<1)
                        $tmp_query = 'No query was able to be loaded.';

                }else{

                    $tmp_query = $query_override;

                }

                $clr_ssl_msg = 'Adding database query ' .
                               'to CRNRSTN :: Batch Key=' .
                               $batch_key .
                               ' Result Set Key=' .
                               $result_set_key;
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

                if(isset($query_override)){

                    //
                    // LOAD QUERY - OVERRIDE
                    // DATABASE QUERY/CONNECTION CRNRSTN CONTACT POINT
                    return $this->oCRNRSTN_DATABASE->load_database_query(
                                                     $oCRNRSTN_MySQLi, 
                                                     $result_handle, 
                                                     $batch_key, 
                                                     $result_set_key, 
                                                     $query_override);

                }else{

                    //
                    // PROCESS QUERY VIA CENTRALIZED DATABASE RESOURCES
                    $query = self::$oCRNRSTN_SQL_SILO->returnDatabaseQuery($this, $oCRNRSTN_MySQLi, $result_set_key);

                    if(strlen($query) > 0){

                        //
                        // DATABASE QUERY/CONNECTION CRNRSTN CONTACT POINT
                        return $this->oCRNRSTN_DATABASE->load_database_query(
                                                         $oCRNRSTN_MySQLi, 
                                                         $result_handle, 
                                                         $batch_key, 
                                                         $result_set_key, 
                                                         $query);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('No query was able to be loaded from the provided handle and keys [' . $result_handle . '|' . $batch_key . '|' . $result_set_key . '].');

                    }

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
    function process_query(
             $application_acceleration = true, 
             $oCRNRSTN_MySQLi = NULL, 
             $batch_key = NULL, 
             $result_set_key = NULL, 
             $result_handle = NULL, 
             $query_override = NULL)
    {

        if(is_bool($application_acceleration)){

            $tmp_request_serial = $this->generate_new_key(50);

            //
            // TRACK ON THIS AND KEY OFF OF IT TO ACTIVATE APPLICATION ACCELERATION
            // THROUGH REUSE OF RESULT SET ARRAY DATA vs FORCE REFRESH OF THE SAME.
            $this->oCRNRSTN_DATABASE->receive_process_query_param('sql_accelerate_FLAG', $application_acceleration, $tmp_request_serial);

            if(isset($oCRNRSTN_MySQLi)){

                $this->oCRNRSTN_DATABASE->receive_process_query_param('oCRNRSTN_MySQLi', $oCRNRSTN_MySQLi, $tmp_request_serial);

            }

            if(isset($batch_key)){

                $this->oCRNRSTN_DATABASE->receive_process_query_param('batch_key', $batch_key, $tmp_request_serial);

            }

            if(isset($result_set_key)){

                $this->oCRNRSTN_DATABASE->receive_process_query_param('result_set_key', $result_set_key, $tmp_request_serial);

            }

            if(isset($result_handle)){

                $this->oCRNRSTN_DATABASE->receive_process_query_param('result_handle', $result_handle, $tmp_request_serial);

            }

            if(isset($query_override)){

                $this->oCRNRSTN_DATABASE->receive_process_query_param('query_override', $query_override, $tmp_request_serial);

            }

            //
            // PROCESS
            return $this->oCRNRSTN_DATABASE->process_query($tmp_request_serial);

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            $clr_ssl_msg = 'No database query processed. Please indicate (BOOLEAN) ' .
                           'desire for application acceleration, as ' .
                           'CRNRSTN :: prepares to touch database with SQL.';
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

        return false;

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
    private function buildHTTP_ParamHandle(
                     $packet_received_array, 
                     $transport_protocol)
    {

        try{

            //error_log(__LINE__ . ' user $packet_received_array=[' . print_r($packet_received_array, true) . ']');

            switch ($transport_protocol){
                case 'POST':

                    //
                    // VALIDATE DATA PER CRNRSTN :: FORM INTEGRATION REQUIREMENTS.
                    if(isset($packet_received_array['INPUT_VALIDATION'])){

                        //error_log(__LINE__ . ' user $packet_received_array=[' . print_r($packet_received_array['INPUT_VALIDATION'], true) . ']');
                        switch ($packet_received_array['INPUT_VALIDATION']){
                            case 'is_FILE':
                                //
                                // TODO :: SERVER-SIDE INPUT VALIDATION
                            case 'is_DOCUMENT':
                            case 'is_COMPRESSED':
                            case 'is_ZIP':
                            case 'is_TAR':
                            case 'is_AUDIO':
                            case 'is_MP3':
                            case 'is_WAVE':
                            case 'is_MIDI':
                            case 'is_VIDEO':
                            case 'is_MP4':
                            case 'is_MOV':
                            case 'is_FLV':
                            case 'is_MKV':
                            case 'is_IMAGE':
                            case 'is_JPEG':
                            case 'is_GIF':
                            case 'is_PNG':
                            case 'is_TIFF':
                            case 'is_PDF':

                            break;
                            case 'is_integer':
                                //
                                // TODO :: is_integer SERVER-SIDE INPUT VALIDATION
                            break;
                            case 'is_string':
                                //
                                // TODO :: is_string SERVER-SIDE INPUT VALIDATION
                            break;
                            case 'is_email':
                                //
                                // TODO :: is_email SERVER-SIDE INPUT VALIDATION
                            break;
                            case 'is_required':

                                //error_log(__LINE__ . ' user INPUT_ENCRYPT $packet_received_array=[' . print_r($packet_received_array['INPUT_ENCRYPT'], true) . ']');

                                if($packet_received_array['INPUT_ENCRYPT'] == 'true'){

                                    //error_log(__LINE__ . ' user run DECRYPT ON ' . $packet_received_array['INPUT_NAME'] . ' data=[' . $this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']) . ']');

                                    //
                                    // THIS WANTS TRUE ON URI PASSTHROUGH. CAN DO CHECK FOR '%' FOR URLDECODE DETECT, IF WE FIND OURSELVES BACK HERE AGAIN.
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']), CRNRSTN_ENCRYPT_TUNNEL, true);

                                    //error_log(__LINE__ . ' user DECRYPT OF INPUT_NAME=[' . print_r(self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']], true) . ']');

                                }else{

                                    //error_log(__LINE__ . ' user NO INPUT_ENCRYPT $packet_received_array[' . $this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']) . ']]');

                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']);

                                }

                                //error_log('4445 - ' . $packet_received_array['INPUT_NAME'] . '=' . self::$http_param_handle_ARRAY[$packet_received_array['INPUT_NAME']]);

                                if(self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] == ''){

                                    //error_log(__LINE__ . ' user HOOOSTON, VE HAFF PROBLEM! $packet_received_array=[A ' . $transport_protocol . ' parameter [' . $packet_received_array['INPUT_NAME'] . '] has failed server-side validation [' . $packet_received_array['INPUT_VALIDATION'] . ']');

                                    self::$formIntegrationIsset_ARRAY[$transport_protocol] = false;
                                    self::$formIntegrationErr_ARRAY[$transport_protocol][] = 'A ' . $transport_protocol . ' parameter [' . $packet_received_array['INPUT_NAME'] . '] has failed server-side validation [' . $packet_received_array['INPUT_VALIDATION'] . '].';

                                    //
                                    // SUCCESS_CHECK, ERR_X, NOTICE_TRI_ALERT
                                    self::$formIntegrationIcon_ARRAY[$transport_protocol][] = 'ERR_X';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    //throw new Exception('A ' . $transport_protocol . ' parameter [' . $packet_received_array['INPUT_NAME'] . '] has failed server-side validation [' . $packet_received_array['INPUT_VALIDATION'] . '].');
                                    $clr_ssl_msg = 'A ' . $transport_protocol .
                                                   ' parameter [' .
                                                   $packet_received_array['INPUT_NAME'] .
                                                   '] has failed server-side validation [' .
                                                   $packet_received_array['INPUT_VALIDATION'] . '].';
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

                            break;
                            case 'false':

                                //
                                // NOTHING TO DO. JUST KIDDING...
                                // error_log('4790 user - I think that I have nothing to do.');
                                if($packet_received_array['INPUT_ENCRYPT'] == 'true')
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']));
                                else
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']);

                            break;
                            default:

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * HOOOSTON, VE HAFF PROBLEM!
                                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                                 *
                                 */
                                //throw new Exception('The requested server-side input validation [' . $packet_received_array['INPUT_VALIDATION'] . '] is not available.');
                                $clr_ssl_msg = 'The requested server-side input validation [' .
                                               $packet_received_array['INPUT_VALIDATION'] .
                                               '] is not available.';
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

                            break;

                        }

                    }else{

                        //
                        // NO SERVER-SIDE VALIDATION. PROCESS.
                        if($packet_received_array['INPUT_ENCRYPT'] == 'true'){

                            //error_log(__LINE__ . ' user receiving ENCRYPTED POST DATA');
                            //error_log(__LINE__ . ' user receive POST DATA :: ' . $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME'])));
                            self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']));

                        }else{

                            //error_log(__LINE__ . ' user receiving CLEAR TEXT POST DATA');
                            //error_log(__LINE__ . ' user receive POST DATA :: ' . $this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']));

                            self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->oHTTP_MGR->extractData($_POST, $packet_received_array['INPUT_NAME']);

                        }

                        // error_log('4483 - ' . $packet_received_array['INPUT_NAME'] . '=' . self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']]);

                    }

                break;
                default:
                    //
                    // $_GET PROTOCOL RECEIVED

                    //
                    // VALIDATE DATA PER CRNRSTN :: FORM INTEGRATION REQUIREMENTS
                    if($packet_received_array['INPUT_VALIDATION'] != ''){

                        switch ($packet_received_array['INPUT_VALIDATION']){
                            case 'is_FILE':
                            case 'is_DOCUMENT':
                            case 'is_COMPRESSED':
                            case 'is_ZIP':
                            case 'is_TAR':

                            case 'is_AUDIO':
                            case 'is_MP3':
                            case 'is_WAVE':
                            case 'is_MIDI':

                            case 'is_VIDEO':
                            case 'is_MP4':
                            case 'is_MOV':
                            case 'is_FLV':
                            case 'is_MKV':

                            case 'is_IMAGE':
                            case 'is_JPEG':
                            case 'is_GIF':
                            case 'is_PNG':
                            case 'is_TIFF':
                            case 'is_PDF':

                            break;
                            case 'is_integer':
                                //
                                // TODO :: is_integer SERVER-SIDE INPUT VALIDATION

                            break;
                            case 'is_string':
                                //
                                // TODO :: is_string SERVER-SIDE INPUT VALIDATION

                            break;
                            case 'is_email':
                                //
                                // TODO :: is_email SERVER-SIDE INPUT VALIDATION

                            break;
                            case 'is_required':

                                if($packet_received_array['INPUT_ENCRYPT'] == 'true')
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_GET, $packet_received_array['INPUT_NAME'], true));
                                else
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->oHTTP_MGR->extractData($_GET, $packet_received_array['INPUT_NAME']);

                                if(self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] == ''){

                                    self::$formIntegrationIsset_ARRAY[$transport_protocol] = false;
                                    self::$formIntegrationErr_ARRAY[$transport_protocol][] = 'A ' . $transport_protocol . ' parameter [' . $packet_received_array['INPUT_NAME'] . '] has failed server-side validation [' . $packet_received_array['INPUT_VALIDATION'] . '].';

                                    //
                                    // SUCCESS_CHECK, ERR_X, NOTICE_TRI_ALERT
                                    self::$formIntegrationIcon_ARRAY[$transport_protocol][] = 'ERR_X';

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    //throw new Exception('A ' . $transport_protocol . ' parameter [' . $packet_received_array['INPUT_NAME'] . '] has failed server-side validation [' . $packet_received_array['INPUT_VALIDATION'] . '].');
                                    $clr_ssl_msg = 'A ' . $transport_protocol .
                                                   ' parameter [' .
                                                   $packet_received_array['INPUT_NAME'] .
                                                   '] has failed server-side validation [' .
                                                   $packet_received_array['INPUT_VALIDATION'] . '].';
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

                                // error_log('4514 - ' . $packet_received_array['INPUT_NAME'].'='.self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']]);

                            break;
                            case 'false':
                                //
                                // NOTHING TO DO. JUST KIDDING...
                                // error_log('4790 user - I think that I have nothing to do.');
                                if($packet_received_array['INPUT_ENCRYPT'] == 'true')
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_GET, $packet_received_array['INPUT_NAME']), CRNRSTN_ENCRYPT_TUNNEL, true);
                                else
                                    self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->oHTTP_MGR->extractData($_GET, $packet_received_array['INPUT_NAME']);

                            break;
                            default:

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * HOOOSTON, VE HAFF PROBLEM!
                                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                                 *
                                 */
                                //throw new Exception('The requested server-side input validation [' . $packet_received_array['INPUT_VALIDATION'] . '] is not available.');
                                $clr_ssl_msg = 'The requested server-side ' .
                                               'input validation [' .
                                               $packet_received_array['INPUT_VALIDATION'] .
                                               '] is not available.';
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

                            break;

                        }

                    }else{

                        //
                        // NO SERVER-SIDE VALIDATION. PROCESS.
                        if($packet_received_array['INPUT_ENCRYPT'] == 'true'){

                            self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->data_decrypt($this->R_env->oHTTP_MGR->extractData($_GET, $packet_received_array['INPUT_NAME']));

                        }else{

                            self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']] = $this->R_env->oHTTP_MGR->extractData($_GET, $packet_received_array['INPUT_NAME']);

                        }

                        //error_log('4913 user - ' . $packet_received_array['INPUT_NAME'] . '=' . self::$http_param_handle_ARRAY[$transport_protocol][$packet_received_array['INPUT_NAME']]);

                    }

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
             * Sunday, June 30, 2024 @ 1621 hrs.
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

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function concatIntegrationPacketDatum(
                     $str, 
                     $delim = NULL)
    {

        if(!isset($delim)){

            return $str . '[CRNRSTN::2.0.0]';

        }else{

            return $str . $delim;

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
    function addCookie(
             $name, 
             $value = NULL, 
             $expire = NULL, 
             $path = NULL, 
             $domain = NULL, 
             $secure = NULL, 
             $httponly = NULL)
    {

        return $this->R_env->oCOOKIE_MGR->addCookie(
                                          $name, 
                                          $value, 
                                          $expire, 
                                          $path, 
                                          $domain, 
                                          $secure, 
                                          $httponly);

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
    function addRawCookie(
             $name, 
             $value = NULL, 
             $expire = NULL, 
             $path = NULL, 
             $domain = NULL, 
             $secure = NULL, 
             $httponly = NULL)
    {

        return $this->R_env->oCOOKIE_MGR->addRawCookie(
                                          $name, 
                                          $value, 
                                          $expire, 
                                          $path, 
                                          $domain, 
                                          $secure, 
                                          $httponly);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function getCookie($name)
    {

        return $this->R_env->oCOOKIE_MGR->getCookie($name);

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
    function deleteCookie(
             $name, 
             $path = NULL)
    {

        return $this->R_env->oCOOKIE_MGR->deleteCookie(
                                          $name, 
                                          $path);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function deleteAllCookies($path = NULL)
    {

        return $this->R_env->oCOOKIE_MGR->deleteAllCookies($path);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function returnHeaders($returnType = NULL)
    {

        return $this->R_env->oHTTP_MGR->get_headers($returnType);

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
    function isset_http_param(
             $param, 
             $transport_protocol = 'POST')
    {

        //
        // WE WILL STILL TAKE $_POST, $_GET, etc...ONLY NEED THIS FOR HTTP AT THE MOMENT.
        // IF SENDING STRING, ONLY THINGS LIKE 'POST', '$_POST', OR 'GET'...etc...WILL WORK. NOT 'FILE'. NOT 'SESSION'...
        if(is_array($transport_protocol)){

            return $this->R_env->issetHTTP($transport_protocol);

        }

        $http_protocol = strtoupper($transport_protocol);
        $http_protocol = $this->str_sanitize($http_protocol, 'http_protocol_simple');

        try{

            switch ($http_protocol){
                case 'POST':

                    if($this->R_env->oHTTP_MGR->issetParam($_POST, $param)){

                            return true;

                    }else{

                        return false;

                    }

                default:

                    //
                    // $_GET
                    if($this->R_env->oHTTP_MGR->issetParam($_GET, $param)){

                            return true;

                    }else{

                        return false;

                    }

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
             * Sunday, June 30, 2024 @ 1621 hrs.
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
    function extract_data_http(
             $param, 
             $transport_protocol = 'GET', 
             $tunnel_encrypted = false)
    {

        //
        // WE WILL STILL TAKE $_POST, $_GET, etc...ONLY NEED THIS FOR HTTP AT THE MOMENT.
        // IF SENDING STRING, ONLY THINGS LIKE 'POST', '$_POST', OR 'GET'...etc...WILL WORK. NOT 'FILE'. NOT 'SESSION'...
        if(is_array($transport_protocol)){

            return $this->R_env->oHTTP_MGR->extractData($transport_protocol, $param, $tunnel_encrypted);

        }

        $http_protocol = strtoupper($transport_protocol);
        $http_protocol = $this->str_sanitize($http_protocol, 'http_protocol_simple');

        try{

            switch ($http_protocol){
                case 'POST':
                    if($this->R_env->oHTTP_MGR->issetParam($_POST, $param)){

                        return $this->R_env->oHTTP_MGR->extractData($_POST, $param, $tunnel_encrypted);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('The desired HTTP _' . $http_protocol . ' parameter, ' . $param . ', is not available.');

                    }

                break;
                default:

                    //
                    // $_GET
                    if($this->R_env->oHTTP_MGR->issetParam($_GET, $param)){

                        return $this->R_env->oHTTP_MGR->extractData($_GET, $param, $tunnel_encrypted);

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        //throw new Exception('The desired HTTP _' . $http_protocol . ' parameter, ' . $param . ', is not available.');
                        //$this->error_log('The desired HTTP _' . $http_protocol . ' parameter, ' . $param . ', is not available.', __LINE__, __METHOD__, __FILE__, CRNRSTN_SETTINGS_CRNRSTN);

                        return false;

                    }

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
             * Sunday, June 30, 2024 @ 1621 hrs.
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isset_SERVER_param($param)
    {

        return $this->R_env->isset_ServerArrayVar($param);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function wall_time()
    {

        return $this->R_env->wall_time();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_micro_time()
    {

        return $this->return_micro_time();

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
    function monitoring_delta_time_for(
             $watchKey, 
             $decimal = 8)
    {

        return $this->R_env->elapsed_delta_time($watchKey, $decimal);

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
    function isDateOlderThan(
             $duration_seconds, 
             $start_time_seconds = NULL, 
             $qualification_pattern = NULL)
    {

        if(!isset($qualification_pattern)){

            //
            // PROVIDED DATE ($seconds) OLDER THAN NOW?
            //if(strtotime("now") > (double) $seconds){
            if(isset($start_time_seconds)){

            }else{

                if(\strtotime("now") > (double) $duration_seconds)
                    return true;
                else
                    return false;

            }

        }else{

            //
            // DO WE HAVE PROPER DATE...OR A TIME PERIOD REPRESENTATION
            $pos_day   = stripos($qualification_pattern, 'day');
            $pos_week  = stripos($qualification_pattern, 'week');
            $pos_month = stripos($qualification_pattern, 'month');
            $pos_year  = stripos($qualification_pattern, 'year');
            $pos_sec   = stripos($qualification_pattern, 'sec');
            $pos_min   = stripos($qualification_pattern, 'min');
            $pos_hour  = stripos($qualification_pattern, 'hour');

            if(($pos_year == false) &&
                ($pos_month == false) &&
                ($pos_week == false) &&
                ($pos_day == false) &&
                ($pos_hour == false) &&
                ($pos_min == false) &&
                ($pos_sec == false))
            {

                //
                // PROVIDED DATE ($seconds) OLDER THAN DATE PATTERN?
                if(\strtotime($qualification_pattern) > $duration_seconds)
                    return true;
                else
                    return false;

            }else{

                //
                // IF TIME PERIOD...IS THERE ANY INDICATION OF FORE(+) OR AFT(-)?
                $pos_yesterday = \stripos($qualification_pattern, 'yesterday');
                $pos_tomorrow  = \stripos($qualification_pattern, 'tomorrow');
                $pos_next      = \stripos($qualification_pattern, 'next');
                $pos_last      = \stripos($qualification_pattern, 'last');
                $pos_plus      = \stripos($qualification_pattern, '+');
                $pos_minus     = \stripos($qualification_pattern, '-');

                if(($pos_yesterday == false) &&
                    ($pos_tomorrow == false) &&
                    ($pos_next == false) &&
                    ($pos_last == false) &&
                    ($pos_plus == false) &&
                    ($pos_minus == false))
                {

                    //
                    // PREFIX A MINUS TO PATTERN, AND THEN CHECK IF PROVIDED DATE ($seconds) OLDER
                    // THAN MODIFIED DATE PATTERN?
                    $qualification_pattern = '- ' . $qualification_pattern;
                    if(strtotime($qualification_pattern) > $duration_seconds)
                        return true;
                    else
                        return false;

                }else{

                    //
                    // PROVIDED DATE ($seconds) OLDER THAN DATE PATTERN?
                    if(strtotime($qualification_pattern) > $duration_seconds)
                        return true;
                    else
                        return false;

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
    function isDateNewerThan(
             $duration_seconds, 
             $qualification_pattern = NULL)
    {

        if(!isset($qualification_pattern)){

            //
            // PROVIDED DATE ($seconds) NEWER THAN NOW?
            if(\strtotime('now') < $duration_seconds)
                return true;
            else
                return false;

        }else{

            //
            // DO WE HAVE PROPER DATE...OR A TIME PERIOD REPRESENTATION
            $pos_day   = \stripos($qualification_pattern, 'day');
            $pos_week  = \stripos($qualification_pattern, 'week');
            $pos_month = \stripos($qualification_pattern, 'month');
            $pos_year  = \stripos($qualification_pattern, 'year');
            $pos_sec   = \stripos($qualification_pattern, 'sec');
            $pos_min   = \stripos($qualification_pattern, 'min');
            $pos_hour  = \stripos($qualification_pattern, 'hour');

            if(($pos_year == false) &&
                ($pos_month == false) &&
                ($pos_week == false) &&
                ($pos_day == false) &&
                ($pos_hour == false) &&
                ($pos_min == false) &&
                ($pos_sec == false))
            {

                //
                // PROVIDED DATE ($seconds) NEWER THAN DATE PATTERN?
                if(strtotime($qualification_pattern) < $duration_seconds)
                    return true;
                else
                    return false;

            }else{

                //
                // IF TIME PERIOD...IS THERE ANY INDICATION OF FORE(+) OR AFT(-)?
                $pos_yesterday = \stripos($qualification_pattern, 'yesterday');
                $pos_tomorrow  = \stripos($qualification_pattern, 'tomorrow');
                $pos_next      = \stripos($qualification_pattern, 'next');
                $pos_last      = \stripos($qualification_pattern, 'last');
                $pos_plus      = \stripos($qualification_pattern, '+');
                $pos_minus     = \stripos($qualification_pattern, '-');

                if(($pos_yesterday == false) &&
                    ($pos_tomorrow == false) &&
                    ($pos_next == false) &&
                    ($pos_last == false) &&
                    ($pos_plus == false) &&
                    ($pos_minus == false))
                {

                    //
                    // PREFIX A MINUS TO PATTERN, AND THEN CHECK IF PROVIDED DATE ($seconds) NEWER
                    // THAN MODIFIED DATE PATTERN?
                    $qualification_pattern = '- ' . $qualification_pattern;
                    if(strtotime($qualification_pattern) < $duration_seconds)
                        return true;
                    else
                        return false;

                }else{

                    //
                    // PROVIDED DATE ($seconds) NEWER THAN DATE PATTERN?
                    if(strtotime($qualification_pattern) < $duration_seconds)
                        return true;
                    else
                        return false;

                }

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
    function get_SERVER_param($param = NULL)
    {

        try{

            if(!isset($param)){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('A value has not been ' .
                    'provided to indicate which _SERVER ' .
                    'parameter should be retrieved.');

            }else{

                return $this->R_env->getServerArrayVar($param, $this);

            }

        }catch(Exception $e){

            # ['COMM_EXCEPTION', 'COMM_NOTICE']
            /*
            [DEFAULT, GOOGLE_ANALYTICS,
            SCREEN|SCREEN_HTML, SCREEN_TEXT,
            SCREEN_HTML_HIDDEN, SOAP_ENDPOINT,
            EMAIL, SPLUNK, MISC_THIRD_PARTY_ENDPOINT]
            */

            # {CUSTOM ON LOCATION CALL STRING}
            # {ERROR_OBJECT..e.g. $e}
            # {oCRNRSTN_USR}
            # INCIDENT LOCATION META (LINE, METHOD, FILE, NAMESPACE)

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
             * Sunday, June 30, 2024 @ 1621 hrs.
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_session_param($data_key)
    {

        error_log(__LINE__ . ' APPLICATION ARCHITECTURE ERROR!!! ' . __METHOD__ . '(\'' . $data_key . '\'):: IS DEPRECATED.');
        die();

        return $this->R_env->oSESSION_MGR->get_session_param($name);

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
    function set_session_param(
             $name, 
             $value = '')
    {

        return $this->R_env->oSESSION_MGR->set_session_param($name, $value);

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
    function define_env_resource(
             $key, 
             $value)
    {

        $this->R_env->oSESSION_MGR->set_session_param($key, $value);

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
    function load_query_profile(
             $result_handle, 
             $batch_key, 
             $result_set_key = NULL, 
             $lnum = NULL, 
             $method = NULL)
    {

        if(!isset($result_set_key) || 
            ($result_set_key == ''))
        {

            if(isset($method)){

                $tmp_method = '[method ' . $method . '] ';

            }else{

                $tmp_method = '';

            }

            if(isset($lnum)){

                $tmp_lnum = '[lnum ' . $lnum . '] ';

            }else{

                $tmp_lnum = '';

            }

            $result_set_key = $tmp_lnum . $tmp_method . $this->generate_new_key(25);
            $tmp_output = $result_set_key;

        }

        $this->R['sql_profile_mgr']->loadQueryProfile(
                                     $result_handle,
                                     $batch_key,
                                     $result_set_key);

        if(isset($tmp_output))
            return $tmp_output;

        return $result_set_key;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_record_count($result_set_key)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                if(!is_object($oCRNRSTN_MySQLi) || !isset($result_handle) || !isset($batch_key) || !isset($result_set_key)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Missing input parameter(s) for this method.');

                }else{

                    return $this->oCRNRSTN_DATABASE->return_record_count($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key);

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1621 hrs.
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isset_query_result_set_key($result_set_key)
    {
        error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . '] Always returns false, yo.');

        return false;

        return $this->R['sql_profile_mgr']->isset_query_result_set_key($result_set_key);

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
    function load_previous_record_lookup(
             $result_set_key, 
             $lookupSerial)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                $this->oCRNRSTN_DATABASE->load_previous_record_lookup(
                                          $oCRNRSTN_MySQLi, 
                                          $result_handle, 
                                          $batch_key, 
                                          $result_set_key, 
                                          $lookupSerial);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function init_lookup_by_id($result_set_key)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                $this->oCRNRSTN_DATABASE->init_lookup_by_id($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

            //$this->catch_exception($e, LOG_ERR, __METHOD__, __NAMESPACE__, CRNRSTN_LOG_EMAIL, 'j5@jony5.com');

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
     * @access public
     *
     */
    function add_lookup_field_data(
             $result_set_key, 
             $field_name, 
             $field_value)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                return $this->oCRNRSTN_DATABASE->add_lookup_field_data(
                                                 $oCRNRSTN_MySQLi, 
                                                 $result_handle, 
                                                 $batch_key, 
                                                 $result_set_key, 
                                                 $field_name, 
                                                 $field_value);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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

    }

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
    function retrieve_data_by_id(
             $result_set_key, 
             $lookup_fieldname, 
             $piped_primary_id_fields = NULL, 
             $piped_lookup_id_data = NULL){

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                $this->oCRNRSTN_DATABASE->keyDataByID(
                                          $oCRNRSTN_MySQLi, 
                                          $result_handle, 
                                          $batch_key, 
                                          $result_set_key, 
                                          $piped_primary_id_fields);

                return $this->oCRNRSTN_DATABASE->retrieve_data_by_id(
                                                 $oCRNRSTN_MySQLi, 
                                                 $result_handle, 
                                                 $batch_key, 
                                                 $result_set_key, 
                                                 $lookup_fieldname, 
                                                 $piped_lookup_id_data);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
    function ping_value_existence(
             $result_set_key, 
             $fieldname, 
             $value)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                return $this->oCRNRSTN_DATABASE->ping_value_existence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key, $fieldname, $value);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function ping_result_set_existence($result_set_key)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                return $this->oCRNRSTN_DATABASE->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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
    function resultSetMerge(
             $result_set_key, 
             $target_result_set_key, 
             $merge_fields_piped, 
             $merge_fields_distinct_val = true, 
             $sequence_fields_piped = NULL, 
             $sequence_fields_datatype_piped = NULL){

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                if(isset($result_handle) && isset($batch_key) && isset($result_set_key) && isset($target_result_set_key) && isset($merge_fields_piped)){

                    return $this->oCRNRSTN_DATABASE->resultSetMerge(
                                                     $this->R['sql_profile_mgr'],
                                                     $result_handle, 
                                                     $batch_key, 
                                                     $result_set_key, 
                                                     $target_result_set_key, 
                                                     $merge_fields_piped, 
                                                     $merge_fields_distinct_val, 
                                                     $sequence_fields_piped, 
                                                     $sequence_fields_datatype_piped);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to return the requested MySQL data due to missing param(s)...result handle[' . $result_handle . '], batch key[' . $batch_key . '], result_set_key[' . $result_set_key . '], target_result_set_key[' . $target_result_set_key . '] and/or the desired merge field(s)[' . $merge_fields_piped . '].');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1621 hrs.
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

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_clean_json_string($val)
    {

        return $this->return_clean_json_string($val);

    }

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
    function return_database_value(
             $result_set_key, 
             $fieldname, 
             $pos = 0, 
             $json_out = false)
    {

        try{

            $oCRNRSTN_MySQLi = $this->R['sql_profile_mgr']->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $result_handle = $this->R['sql_profile_mgr']->return_resultHandle($result_set_key);
                $batch_key     = $this->R['sql_profile_mgr']->return_batchKey($result_set_key);

                if(isset($result_handle) && isset($batch_key) && isset($result_set_key) && isset($fieldname)){

                    if($json_out){

                        $db_resp_out = $this->oCRNRSTN_DATABASE->return_database_value($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key, $fieldname, $pos);

                        //
                        // SOURCE :: https://www.php.net/manual/en/json.constants.php
                        // AUTHOR :: majid4466 at gmail dot com :: https://www.php.net/manual/en/json.constants.php#119565
                        $db_resp_out = $this->return_clean_json_string($db_resp_out);

                        return $db_resp_out;

                    }else{

                        return $this->oCRNRSTN_DATABASE->return_database_value($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key, $fieldname, $pos);

                    }

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to return the requested MySQL data due to missing param(s)...result handle[' . $result_handle . '], batch key[' . $batch_key . '], result_set_key[' . $result_set_key . '] and/or the desired database field name[' . $fieldname . '].');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the database connection associated with the result set key [' . $result_set_key . '].');

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
             * Sunday, June 30, 2024 @ 1622 hrs.
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
    function create_AdHocVar(
             $key, 
             $var = NULL)
    {

        //
        // TODO :: CONSIDER USING THE CRNRSTN :: DECOUPLED DATA OBJECT HERE...FOR '' SUPPORT.
        self::$adHocVariable_ARRAY[$key] = $var;

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
    function get_AdHocVar($key)
    {

        if(isset(self::$adHocVariable_ARRAY[$key])){

            return self::$adHocVariable_ARRAY[$key];

        }else{

            return NULL;

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
    function specifyPaginationVariableName(
             $variable_name, 
             $pagination_serial = NULL)
    {

        self::$oPaginator->specify_pagination_variable_name($variable_name, $pagination_serial);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function getPaginationVariableName($pagination_serial = NULL)
    {

        return self::$oPaginator->get_pagination_variable_name($pagination_serial);

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
    function addPaginationPassthroughInputVal(
             $input_name, 
             $input_value, 
             $pagination_serial)
    {

        self::$oPaginator->add_pagination_passthrough_input_val(
                           $input_name, 
                           $input_value, 
                           $pagination_serial);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function returnCurrentPaginationPos($pagination_serial = NULL)
    {

        $tmp_var_name = $this->getPaginationVariableName($pagination_serial);
        $tmp_pos = $this->get_http_resource($tmp_var_name);

        if($tmp_pos == ''){

            $tmp_pos = 1;

        }

        return $tmp_pos;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function returnPaginationSerial()
    {

        return self::$oPaginator->return_pagination_serial();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function returnPaginationStateHTML($pagination_serial = NULL)
    {

        return self::$oPaginator->return_pagination_state_HTML($pagination_serial);

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
    function increment_results_count_total(
             $result_count = 1, 
             $pagination_serial = NULL)
    {

        //error_log('5531 user - increment_results_count_total [' . $result_count . ']');
        self::$oPaginator->increment_results_count_total($result_count, $pagination_serial);

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
    function set_maximum_display_result_count(
             $maximum_display_count, 
             $pagination_serial = NULL)
    {

        self::$oPaginator->set_maximum_display_result_count($maximum_display_count, $pagination_serial);

    }

    //
    // SOURCE  :: https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string
    // COMMENT :: https://stackoverflow.com/a/13733588
    // AUTHOR  :: https://stackoverflow.com/users/1698153/scott
    //
    //
    // Scott
    //
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
    function generate_new_key(
             $len = 32, 
             $char_selection = NULL, 
             $system_hashed_return = false, 
             $algorithm_override = NULL, 
             $binary_return = false, 
             $runtime_acceleration = false, 
             $session_acceleration_key = NULL){

        //
        // $char_selection = NULL [or (int) 0]:
        //
        //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
        //                       abcdefghijklmnopqrstuvwxyz
        //                       0123456789
        //
        // $char_selection = '01':
        //
        //       $codeAlphabet = 01
        //
        // $char_selection = (int) -3:
        //
        //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
        //                       abcdefghijklmnopqrstuvwxyz
        //                       0123456789:+=_- )(*$#@!~.
        //
        // $char_selection = (int) -2:
        //
        //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
        //                       abcdefghijklmnopqrstuvwxyz
        //                       0123456789{}[]:+=_- )(*&%$#@!~?.
        //
        // $char_selection = (int) -1:
        //
        //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
        //                       abcdefghijklmnopqrstuvwxyz
        //                       0123456789{}[]:;\"\'|\\+=_- )(*&^%$#@!~
        //                       `?/<>.,   '
        //
        // Note: $char_selection = -1 will use
        //       *all* characters across all
        //       dimensions in the known ASCII
        //       universe for system
        //       key generation.
        //
        //       There are some character
        //       omissions to note, however.
        //
        //       $char_selection = -1 evokes
        //       *all* characters except:
        //          - The sequence \e escape
        //            key (ESC or 0x1B (27)
        //            in ASCII), and
        //
        //          - we're not splitting
        //            hairs choosing between
        //            sequence \n LINEFEED
        //            (LF or 0x0A (10) in ASCII)
        //            and the sequence \r
        //            carriage RETURN (CR or
        //            0x0D (13) in ASCII) as
        //            I just let the PhpStorm
        //            IDE choose how to convey
        //            the ENTER key to
        //            text, and
        //
        //          - also screw both \f form
        //            feed (FF or 0x0C (12) in
        //            ASCII) and \v VERTICAL
        //            TAB (VT or 0x0B (11) in
        //            ASCII) sequences; we do
        //            not use these characters
        //            for system key generation.
        //
        // Note: $char_selection = -3 produces a
        //       little more variation in output
        //       key (over $char_selection = NULL);
        //       it has just a few more characters
        //       added to the set beyond the plain
        //       alpha numeric ones.
        //
        //       -3 is the coolest however, because
        //       these new characters were hand
        //       selected for being the nicest
        //       (imho) to work with as data in the
        //       data handling world.
        //
        // TLDR; $char_selection = -3 produces CSV
        //       safe data. The output has no
        //       quotes, no commas, no semi-
        //       colons...etc., but it has the most
        //       distinct number of characters for
        //       the strongest possible variation
        //       in system key generation output
        //       by the CRNRSTN :: Lightsaber SOAP
        //       Services Layer.
        //
        //       5 :: Wednesday, December 6, 2023 @ 2128 hrs.
        //
        // https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double
        return $this->generate_new_key($len, $char_selection, $system_hashed_return, $algorithm_override, $binary_return, $runtime_acceleration, $session_acceleration_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function current_location()
    {

        return $this->R_env->current_location();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_endpointProfile()
    {

        return $this->R_env->return_endpointProfile();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_loggingProfile()
    {

        return $this->R_env->return_loggingProfile();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function exclusiveAccess($ip = '*.*')
    {

        return $this->R_env->oCRNRSTN_IPSECURITY_MGR->exclusiveAccess($ip);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function denyIPAccess($ip = '*.*')
    {

        return $this->R_env->oCRNRSTN_IPSECURITY_MGR->denyIPAccess($ip);

    }

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
    function return_sticky_media_link(
             $media_element_key, 
             $url = NULL, 
             $target = '_blank', 
             $email_channel = false)
    {

        // TESTING NOTE:
        // IS IT POSSIBLE FOR Z-INDEX TO CAUSE TROUBLE (...AS THE DEEPEST DOM ELEM IS ABSOLUTE POSITIONED)?
        /*
        SOUNDCLOUD
        FACEBOOK
        INSTAGRAM
        TWITTER
        WWW
        JSON
        APPLE_ANDROID
        FEEDBURNER
        SLASHDOT_ICON
        XHAMSTER_ICON
        MOZILLA_ICON
        MIXCLOUD
        DISCOGS
        BEATPORT
        BANDCAMP
        SPOTIFY
        ROLLDABEATS
        STACKOVERFLOW
        KINK
        PHP
        REDDIT
        YOUTUBE
        PAYPAL
        HISTORY
        ARCHIVES
        BASSDRIVE
        GITHUB_ICON
        XNXX
        LINKEDIN
        GOOGLE_MAPS_ANNIVERSARY
        FLICKR
        WIKIPEDIA
        BLOGSPOT
        PINTEREST
        SERVER_FAULT
        GOOGLE_DRIVE
        BLUEHOST_ICON
        AMAZON
        PORNHUB
        EBAY
        MOZILLA_WORDMARK
        PATREON
        TWITCH
        MICROSOFT
        INTERNET_ARCHIVE
        W3C
        XHAMSTER_WORDMARK
        ETSY
        APPLE_MUSIC
        XVIDEOS
        SLASHDOT_WORDMARK
        VIMEO_BLUE_ICON
        IDEONE
        GOOGLE_MAPS_SQUARE
        BLUEHOST_WORDMARK
        PANDORA
        LAST_FM
        VIMEO_BLUE_WORDMARK
        VIMEO_DARKFOREST_WORDMARK
        APPLE_LOGO_WHT_BLK_CIRCLE

        */

        $curr_creative_element_key = trim(strtoupper($media_element_key));

        try{

            //
            // DETERMINE ICON SIZE PREFERENCE (SMALL, MEDIUM, LARGE)
            $tmp_social_element_meta_ARRAY = explode('_', $curr_creative_element_key);
            $tmp_nom_section_cnt = count($tmp_social_element_meta_ARRAY);
            $tmp_nom_section_cnt--;

            if($tmp_nom_section_cnt < 1){

                throw new Exception('The social media key [' . $media_element_key . '] does not specify size (e.g. \'FACEBOOK_MEDIUM\').');

            }

            //error_log(__LINE__ . ' user $tmp_social_element_meta_ARRAY[$tmp_nom_section_cnt][' . $tmp_social_element_meta_ARRAY[$tmp_nom_section_cnt] . ']. [' . print_r($tmp_social_element_meta_ARRAY, true) . '].');

            //
            // INITIALIZATION OF SOCIAL MEDIA IMAGE SPRITE DIMENSIONS
            switch($tmp_social_element_meta_ARRAY[$tmp_nom_section_cnt]){
                case 'SMALL':

                    $tmp_social_media_endpoint = '';
                    for($i = 0; $i < $tmp_nom_section_cnt; $i++){

                        $tmp_social_media_endpoint .= $tmp_social_element_meta_ARRAY[$i] . '_';

                    }

                    $tmp_social_media_endpoint = $this->strrtrim($tmp_social_media_endpoint, '_');
                    $tmp_icon_family_size = $tmp_social_element_meta_ARRAY[$tmp_nom_section_cnt];

                    $tmp_social_media_data_key = $tmp_social_media_endpoint;
                    $tmp_social_media_sprite = 'SOCIAL_SPRITE';

                    //
                    // LOCKED IN AT 319x414 WITH SOUNDCLOUD(25x25)
                    $tmp_sprite_width = 319;
                    $tmp_sprite_height = 414;

                break;
                case 'MEDIUM':

                    $tmp_social_media_endpoint = '';
                    for($i = 0; $i < $tmp_nom_section_cnt; $i++){

                        $tmp_social_media_endpoint .= $tmp_social_element_meta_ARRAY[$i] . '_';

                    }

                    $tmp_social_media_data_key = $tmp_social_media_endpoint;

                    $tmp_social_media_endpoint = $this->strrtrim($tmp_social_media_endpoint, '_');
                    $tmp_icon_family_size = $tmp_social_element_meta_ARRAY[$tmp_nom_section_cnt];

                    //
                    // APPLY HQ IMAGE SELECTION FOR ACCESS TO 230x230 DIMENSIONS.
                    $tmp_social_media_data_key .= 'HQ';
                    $tmp_social_media_sprite = 'SOCIAL_SPRITE_HQ';

                    //
                    // LOCKED IN AT 648x864 WITH SOUNDCLOUD(50x50)
                    // LOCKED IN AT 639x851 WITH SOUNDCLOUD(50x50)
                    $tmp_sprite_width = 639;
                    $tmp_sprite_height = 851;

                break;
                case 'LARGE':

                    $tmp_social_media_endpoint = '';
                    for($i = 0; $i < $tmp_nom_section_cnt; $i++){

                        $tmp_social_media_endpoint .= $tmp_social_element_meta_ARRAY[$i] . '_';

                    }

                    $tmp_social_media_data_key = $tmp_social_media_endpoint;

                    $tmp_social_media_endpoint = $this->strrtrim($tmp_social_media_endpoint, '_');
                    $tmp_icon_family_size = $tmp_social_element_meta_ARRAY[$tmp_nom_section_cnt];

                    //
                    // APPLY HQ IMAGE SELECTION FOR ACCESS TO 230x230 DIMENSIONS.
                    $tmp_social_media_data_key .= 'HQ';
                    $tmp_social_media_sprite = 'SOCIAL_SPRITE_HQ';

                    //
                    // LOCKED IN AT 959x1279 WITH SOUNDCLOUD(75x75)
                    $tmp_sprite_width = 959;
                    $tmp_sprite_height = 1279;

                    //error_log(__LINE__ . ' user $tmp_social_media_endpoint[' . $tmp_social_media_endpoint . ']. $tmp_icon_family_size[' . $tmp_icon_family_size . '].');

                break;
                default:

                    throw new Exception('The social media key [' . $media_element_key . '] does not specify a size of SMALL, MEDIUM OR LARGE correctly (e.g. \'FACEBOOK_MEDIUM\').');

                break;

            }

            switch($tmp_social_media_endpoint){
                case 'AMAZON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -3;
                            $tmp_social_img_top = -117;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -8;
                            $tmp_social_img_top = -224;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -12;
                            $tmp_social_img_top = -336;

                        break;

                    }

                    $tmp_social_img_alt = 'Amazon';
                    $tmp_social_img_title = 'Link to Amazon related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_BLK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 20;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -205;
                            $tmp_social_img_top = -230;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 41;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -415;
                            $tmp_social_img_top = -448;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 61;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -623;
                            $tmp_social_img_top = -674;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_BLK_WHT_CIRCLE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -178;
                            $tmp_social_img_top = -231;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -359;
                            $tmp_social_img_top = -449;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -539;
                            $tmp_social_img_top = -675;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_GREY':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 21;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -251;
                            $tmp_social_img_top = -230;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 42;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -508;
                            $tmp_social_img_top = -448;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 63;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -762;
                            $tmp_social_img_top = -674;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_GREY_BLK_CIRCLE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -275;
                            $tmp_social_img_top = -230;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -556;
                            $tmp_social_img_top = -448;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -834;
                            $tmp_social_img_top = -674;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_GREY_WHT_CIRCLE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -259;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -507;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -762;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_WHT':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 20;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -228;
                            $tmp_social_img_top = -230;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 41;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -461;
                            $tmp_social_img_top = -448;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 61;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -693;
                            $tmp_social_img_top = -674;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_LOGO_WHT_BLK_CIRCLE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -28;
                            $tmp_social_img_top = -173;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -56;
                            $tmp_social_img_top = -340;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -84;
                            $tmp_social_img_top = -511;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple';
                    $tmp_social_img_title = 'Link to Apple related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'APPLE_MUSIC':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -168;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -343;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -514;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Apple Music';
                    $tmp_social_img_title = 'Link to Apple Music related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'ARCHIVES':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 39;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -102;
                            $tmp_social_img_top = -60;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 78;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -209;
                            $tmp_social_img_top = -111;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 116;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -314;
                            $tmp_social_img_top = -166;

                        break;

                    }

                    $tmp_social_img_alt = 'Archives';
                    $tmp_social_img_title = 'Link to Archives.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'BANDCAMP':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -81;
                            $tmp_social_img_top = -27;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -167;
                            $tmp_social_img_top = -55;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -251;
                            $tmp_social_img_top = -83;

                        break;

                    }

                    $tmp_social_img_alt = 'Bandcamp';
                    $tmp_social_img_title = 'Link to Bandcamp music page.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'BASSDRIVE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 30;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -144;
                            $tmp_social_img_top = -59;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 61;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -292;
                            $tmp_social_img_top = -112;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 91;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -439;
                            $tmp_social_img_top = -167;

                        break;

                    }

                    $tmp_social_img_alt = 'Bassdrive';
                    $tmp_social_img_title = 'Link to Bassdrive resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'BEATPORT':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -53;
                            $tmp_social_img_top = -27;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -111;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -167;
                            $tmp_social_img_top = -83;

                        break;

                    }

                    $tmp_social_img_alt = 'Beatport';
                    $tmp_social_img_title = 'Link to Beatport featured tracks.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'BLOGSPOT':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -159;
                            $tmp_social_img_top = -88;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -316;
                            $tmp_social_img_top = -169;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -475;
                            $tmp_social_img_top = -254;

                        break;

                    }

                    $tmp_social_img_alt = 'Blogspot';
                    $tmp_social_img_title = 'Link to Blogspot related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'BLUEHOST_ICON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -293;
                            $tmp_social_img_top = -88;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -572;
                            $tmp_social_img_top = -169;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -858;
                            $tmp_social_img_top = -254;

                        break;

                    }

                    $tmp_social_img_alt = 'Bluehost';
                    $tmp_social_img_title = 'Link to Bluehost hosted resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'BLUEHOST_WORDMARK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 152;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -203;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 302;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -396;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 453;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -595;

                        break;

                    }

                    $tmp_social_img_alt = 'Bluehost';
                    $tmp_social_img_title = 'Link to Bluehost hosted resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'DISCOGS':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -26;
                            $tmp_social_img_top = -27;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -56;
                            $tmp_social_img_top = -55;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -84;
                            $tmp_social_img_top = -83;

                        break;

                    }

                    $tmp_social_img_alt = 'Discogs';
                    $tmp_social_img_title = 'Link to Discogs music selection.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'DRIBBLE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 102;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -28;
                            $tmp_social_img_top = -259;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 204;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -55;
                            $tmp_social_img_top = -507;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 306;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -83;
                            $tmp_social_img_top = -762;

                        break;

                    }

                    $tmp_social_img_alt = 'Dribble';
                    $tmp_social_img_title = 'Link to Dribble music selection.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'EBAY':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 63;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -127;
                            $tmp_social_img_top = -118;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 125;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -250;
                            $tmp_social_img_top = -224;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 187;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -374;
                            $tmp_social_img_top = -337;

                        break;

                    }

                    $tmp_social_img_alt = 'eBay';
                    $tmp_social_img_title = 'Link to eBay related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'ETSY':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -173;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -340;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -511;

                        break;

                    }

                    $tmp_social_img_alt = 'Etsy';
                    $tmp_social_img_title = 'Link to Etsy resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'FACEBOOK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -26;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -55;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -82;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Facebook';
                    $tmp_social_img_title = 'Link to Facebook related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'FEEDBURNER':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -195;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -401;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -603;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Feedburner';
                    $tmp_social_img_title = 'Link to Feedburner feed proxy.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'FLICKR':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 54;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -60;
                            $tmp_social_img_top = -88;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 108;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -122;
                            $tmp_social_img_top = -166;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 161;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -182;
                            $tmp_social_img_top = -250;

                        break;

                    }

                    $tmp_social_img_alt = 'Flickr';
                    $tmp_social_img_title = 'Link to Flickr related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'GITHUB':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -180;
                            $tmp_social_img_top = -58;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -362;
                            $tmp_social_img_top = -111;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -543;
                            $tmp_social_img_top = -167;

                        break;

                    }

                    $tmp_social_img_alt = 'Github';
                    $tmp_social_img_title = 'Link to Github resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'GOOGLE_DRIVE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 28;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -261;
                            $tmp_social_img_top = -88;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 56;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -510;
                            $tmp_social_img_top = -169;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 84;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -765;
                            $tmp_social_img_top = -254;

                        break;

                    }

                    $tmp_social_img_alt = 'Google Drive';
                    $tmp_social_img_title = 'Link to Google Drive resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'GOOGLE_MAPS':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -31;
                            $tmp_social_img_top = -90;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -61;
                            $tmp_social_img_top = -166;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -91;
                            $tmp_social_img_top = -249;

                        break;

                    }

                    $tmp_social_img_alt = 'Google Maps 15th Anniversary';
                    $tmp_social_img_title = 'Link to Google Maps resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'GOOGLE_MAPS_SQUARE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -293;
                            $tmp_social_img_top = -175;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -585;
                            $tmp_social_img_top = -337;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -878;
                            $tmp_social_img_top = -507;

                        break;

                    }

                    $tmp_social_img_alt = 'Google Maps';
                    $tmp_social_img_title = 'Link to Google Maps resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'HISTORY':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 36;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -65;
                            $tmp_social_img_top = -60;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 72;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -132;
                            $tmp_social_img_top = -111;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 108;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -198;
                            $tmp_social_img_top = -166;

                        break;

                    }

                    $tmp_social_img_alt = 'History';
                    $tmp_social_img_title = 'Link to history.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'IDEONE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -265;
                            $tmp_social_img_top = -176;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -530;
                            $tmp_social_img_top = -338;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -795;
                            $tmp_social_img_top = -508;

                        break;

                    }

                    $tmp_social_img_alt = 'IDE ONE';
                    $tmp_social_img_title = 'Link to IDE ONE resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'INSTAGRAM':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -52;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -111;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -165;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Instagram';
                    $tmp_social_img_title = 'Link to Instagram feed.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'INTERNET_ARCHIVE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 26;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -96;
                            $tmp_social_img_top = -147;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 52;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -189;
                            $tmp_social_img_top = -277;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 77;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -284;
                            $tmp_social_img_top = -417;

                        break;

                    }

                    $tmp_social_img_alt = 'INTERNET ARCHIVE';
                    $tmp_social_img_title = 'Link to INTERNET ARCHIVE resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'JSON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -138;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -285;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 74;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -428;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'JSON';
                    $tmp_social_img_title = 'Link to JSON object.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'KINK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -194;
                            $tmp_social_img_top = -30;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -394;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -592;
                            $tmp_social_img_top = -85;

                        break;

                    }

                    $tmp_social_img_alt = 'Kink.com';
                    $tmp_social_img_title = 'Link to Kink.com related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'LAST_FM':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 99;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -183;
                            $tmp_social_img_top = -203;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 198;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -375;
                            $tmp_social_img_top = -393;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 297;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -564;
                            $tmp_social_img_top = -591;

                        break;

                    }

                    $tmp_social_img_alt = 'Last.fm';
                    $tmp_social_img_title = 'Link to Last.fm resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'LINKEDIN':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -2;
                            $tmp_social_img_top = -89;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -168;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -253;

                        break;

                    }

                    $tmp_social_img_alt = 'LinkedIn';
                    $tmp_social_img_title = 'Link to LinkedIn related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'MICROSOFT':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -66;
                            $tmp_social_img_top = -147;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -134;
                            $tmp_social_img_top = -277;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -201;
                            $tmp_social_img_top = -418;

                        break;

                    }

                    $tmp_social_img_alt = 'Microsoft';
                    $tmp_social_img_title = 'Link to Microsoft related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'MIXCLOUD':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -27;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -84;

                        break;

                    }

                    $tmp_social_img_alt = 'Mixcloud';
                    $tmp_social_img_title = 'Link to Mixcloud community.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'MOZILLA_ICON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -281;
                            $tmp_social_img_top = -1;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -572;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -859;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Mozilla';
                    $tmp_social_img_title = 'Link to Mozilla resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'MOZILLA_WORDMARK':

                    /*
                     case 'SMALL':

                            $tmp_social_img_width = 63;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -127;
                            $tmp_social_img_top = -118;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 125;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -250;
                            $tmp_social_img_top = -224;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 187;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -374;
                            $tmp_social_img_top = -337;

                    */
                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 114;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -192;
                            $tmp_social_img_top = -118;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 227;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -380;
                            $tmp_social_img_top = -224;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 341;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -570;
                            $tmp_social_img_top = -337;

                        break;

                    }

                    $tmp_social_img_alt = 'Mozilla';
                    $tmp_social_img_title = 'Link to Mozilla resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'PANDORA':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -154;
                            $tmp_social_img_top = -203;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -311;
                            $tmp_social_img_top = -393;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -466;
                            $tmp_social_img_top = -591;

                        break;

                    }

                    $tmp_social_img_alt = 'Pandora';
                    $tmp_social_img_title = 'Link to Pandora resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'PATREON':
                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 26;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -146;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 52;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -279;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 78;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -1;
                            $tmp_social_img_top = -420;

                        break;

                    }

                    $tmp_social_img_alt = 'Paetron';
                    $tmp_social_img_title = 'Link to Paetron related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'PAYPAL':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -38;
                            $tmp_social_img_top = -59;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -77;
                            $tmp_social_img_top = -111;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -115;
                            $tmp_social_img_top = -166;

                        break;

                    }

                    $tmp_social_img_alt = 'Paypal';
                    $tmp_social_img_title = 'Link to Paypal related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'PHP':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 47;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -223;
                            $tmp_social_img_top = -30;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 95;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -456;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 143;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -686;
                            $tmp_social_img_top = -84;

                        break;

                    }

                    $tmp_social_img_alt = 'PHP.net';
                    $tmp_social_img_title = 'Link to PHP related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'PINTEREST':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -188;
                            $tmp_social_img_top = -88;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -372;
                            $tmp_social_img_top = -169;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -558;
                            $tmp_social_img_top = -254;

                        break;

                    }

                    $tmp_social_img_alt = 'Pinterest';
                    $tmp_social_img_title = 'Link to Pinterest related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'PORNHUB':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 87;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -37;
                            $tmp_social_img_top = -118;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 176;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -69;
                            $tmp_social_img_top = -222;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 265;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -104;
                            $tmp_social_img_top = -333;

                        break;

                    }

                    $tmp_social_img_alt = 'Pornhub';
                    $tmp_social_img_title = 'Link to Pornhub related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'REDDIT':

                    /*
                    case 'SMALL':

                            $tmp_social_img_width = 47;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -223;
                            $tmp_social_img_top = -30;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 95;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -456;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 143;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -686;
                            $tmp_social_img_top = -84;

                    */
                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -274;
                            $tmp_social_img_top = -29;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -559;
                            $tmp_social_img_top = -57;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -838;
                            $tmp_social_img_top = -86;

                        break;

                    }

                    $tmp_social_img_alt = 'Reddit';
                    $tmp_social_img_title = 'Link to Reddit resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'ROLLDABEATS':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -137;
                            $tmp_social_img_top = -30;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -279;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -418;
                            $tmp_social_img_top = -83;

                        break;

                    }

                    $tmp_social_img_alt = 'RollDaBeats';
                    $tmp_social_img_title = 'Link to RollDaBeats catalog.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'SERVER_FAULT':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 38;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -218;
                            $tmp_social_img_top = -88;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 76;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -428;
                            $tmp_social_img_top = -169;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 114;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -643;
                            $tmp_social_img_top = -254;

                        break;

                    }

                    $tmp_social_img_alt = 'ServerFault';
                    $tmp_social_img_title = 'Link to ServerFault related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'SLASHDOT_ICON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -223;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -457;
                            $tmp_social_img_top = -1;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -686;
                            $tmp_social_img_top = -1;

                        break;

                    }

                    $tmp_social_img_alt = 'Slashdot';
                    $tmp_social_img_title = 'Link to Slashdot related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'SLASHDOT_WORDMARK':

                    /*
                     case 'SMALL':

                            $tmp_social_img_width = 99;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -57;
                            $tmp_social_img_top = -175;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 197;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -111;
                            $tmp_social_img_top = -337;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 295;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -167;
                            $tmp_social_img_top = -507;

                    */

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 79;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -156;
                            $tmp_social_img_top = -175;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 156;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -311;
                            $tmp_social_img_top = -337;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 235;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -468;
                            $tmp_social_img_top = -507;

                        break;

                    }

                    $tmp_social_img_alt = 'Slashdot';
                    $tmp_social_img_title = 'Link to Slashdot resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'SOUNDCLOUD':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -1;

                        break;

                    }

                    $tmp_social_img_alt = 'SoundCloud';
                    $tmp_social_img_title = 'Link to SoundCloud tracks.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'SPOTIFY':

                    /*
                    case 'SMALL':
                    $tmp_social_img_left = -81;
                    $tmp_social_img_top = -27;

                    break;
                    case 'MEDIUM':
                    $tmp_social_img_left = -169;
                    $tmp_social_img_top = -56;

                    break;
                    default:
                    // 'LARGE':
                    $tmp_social_img_left = -251;
                    $tmp_social_img_top = -83;

                    */

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -110;
                            $tmp_social_img_top = -31;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -223;
                            $tmp_social_img_top = -55;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -334;
                            $tmp_social_img_top = -83;

                        break;

                    }

                    $tmp_social_img_alt = 'Spotify';
                    $tmp_social_img_title = 'Link to Spotify community.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'STACKOVERFLOW':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -166;
                            $tmp_social_img_top = -28;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -336;
                            $tmp_social_img_top = -56;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 74;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -505;
                            $tmp_social_img_top = -85;

                        break;

                    }

                    $tmp_social_img_alt = 'Stackoverflow';
                    $tmp_social_img_title = 'Link to Stackoverflow related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'TWITCH':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -32;
                            $tmp_social_img_top = -146;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -71;
                            $tmp_social_img_top = -277;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -106;
                            $tmp_social_img_top = -420;

                        break;

                    }

                    $tmp_social_img_alt = 'Twitch';
                    $tmp_social_img_title = 'Link to Twitch related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'TWITTER':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -80;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -166;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -249;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Twitter';
                    $tmp_social_img_title = 'Link to Twitter feed.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'VIMEO_BLUE_ICON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -237;
                            $tmp_social_img_top = -175;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 50;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -472;
                            $tmp_social_img_top = -337;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 75;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -710;
                            $tmp_social_img_top = -507;

                        break;

                    }

                    $tmp_social_img_alt = 'Vimeo';
                    $tmp_social_img_title = 'Link to Vimeo resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'VIMEO_BLUE_WORDMARK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 87;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -231;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 177;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -451;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 265;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -678;

                        break;

                    }

                    $tmp_social_img_alt = 'Vimeo';
                    $tmp_social_img_title = 'Link to Vimeo resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'VIMEO_DARKFOREST_WORDMARK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 87;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -89;
                            $tmp_social_img_top = -231;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 177;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -179;
                            $tmp_social_img_top = -451;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 265;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -269;
                            $tmp_social_img_top = -678;

                        break;

                    }

                    $tmp_social_img_alt = 'Vimeo';
                    $tmp_social_img_title = 'Link to Vimeo resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'W3C':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 52;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -126;
                            $tmp_social_img_top = -147;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 105;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -246;
                            $tmp_social_img_top = -281;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 157;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -369;
                            $tmp_social_img_top = -422;

                        break;

                    }

                    $tmp_social_img_alt = 'W3C';
                    $tmp_social_img_title = 'Link to W3C resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'WIKIPEDIA':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 38;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -117;
                            $tmp_social_img_top = -89;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 77;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -234;
                            $tmp_social_img_top = -169;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 116;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -351;
                            $tmp_social_img_top = -254;

                        break;

                    }

                    $tmp_social_img_alt = 'Wikipedia';
                    $tmp_social_img_title = 'Link to Wikipedia related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'WWW':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 25;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -108;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 52;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -227;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 77;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -339;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'Website';
                    $tmp_social_img_title = 'Link to website.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'XHAMSTER_ICON':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 27;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -251;
                            $tmp_social_img_top = 0;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 54;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -513;
                            $tmp_social_img_top = 0;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 81;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -769;
                            $tmp_social_img_top = 0;

                        break;

                    }

                    $tmp_social_img_alt = 'XHAMSTER';
                    $tmp_social_img_title = 'Link to XHAMSTER related resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'XHAMSTER_WORDMARK':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 121;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -189;
                            $tmp_social_img_top = -146;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 242;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -357;
                            $tmp_social_img_top = -279;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 363;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -536;
                            $tmp_social_img_top = -420;

                        break;

                    }

                    $tmp_social_img_alt = 'XHAMSTER';
                    $tmp_social_img_title = 'Link to XHAMSTER resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'XNXX':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 112;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -210;
                            $tmp_social_img_top = -60;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 224;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -418;
                            $tmp_social_img_top = -113;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 336;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -627;
                            $tmp_social_img_top = -167;

                        break;

                    }

                    $tmp_social_img_alt = 'XNXX.com';
                    $tmp_social_img_title = 'Link to XNXX resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'XVIDEOS':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 99;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = -57;
                            $tmp_social_img_top = -175;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 197;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = -111;
                            $tmp_social_img_top = -337;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 295;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = -167;
                            $tmp_social_img_top = -507;

                        break;

                    }

                    $tmp_social_img_alt = 'XVIDEOS';
                    $tmp_social_img_title = 'Link to XVIDEOS resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                case 'YOUTUBE':

                    switch($tmp_icon_family_size){
                        case 'SMALL':

                            $tmp_social_img_width = 35;
                            $tmp_social_img_height = 25;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -58;

                        break;
                        case 'MEDIUM':

                            $tmp_social_img_width = 71;
                            $tmp_social_img_height = 50;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -112;

                        break;
                        default:
                            // 'LARGE':

                            $tmp_social_img_width = 106;
                            $tmp_social_img_height = 75;
                            $tmp_social_img_left = 0;
                            $tmp_social_img_top = -168;

                        break;

                    }

                    $tmp_social_img_alt = 'YouTube';
                    $tmp_social_img_title = 'Link to YouTube resource.';
                    $tmp_sticky_link_meta = strtolower($tmp_social_img_alt) . '_social_media_lnk';

                break;
                default:

                    return '';

                break;

            }

            //
            // BASIC URL HAS DATA CHECK
            $valid_url = true;

            if(!isset($url)){

                $valid_url = false;

            }else{

                if(strlen($url) < 1){

                    $valid_url = false;

                }

            }

            if(isset($tmp_sticky_link_meta)){

                if($email_channel){

                    //return $this->return_system_image('CRNRSTN_LOGO', '', 250, NULL, NULL, NULL, NULL, CRNRSTN_HTML);

                    if($valid_url){

                        return $this->return_system_image('SOCIAL_' . $tmp_social_media_data_key, $tmp_social_img_width, $tmp_social_img_height, $this->return_sticky_link($url, $tmp_sticky_link_meta), $tmp_social_img_alt, $tmp_social_img_title, $target, CRNRSTN_HTML);
                        //return '<a href="' . $this->return_sticky_link($url, $tmp_sticky_link_meta) . '" target="' . $target . '"><img src="' . $this->R['asset_mgr']->return_creative('SOCIAL_' . $tmp_social_media_data_key, CRNRSTN_BASE64) . '" width="' . $tmp_social_img_width . '" height="' . $tmp_social_img_height . '" alt="' . $tmp_social_img_alt . '" title="' . $tmp_social_img_title .'" border="0" style="border: 0;"></a>';

                    }

                    return $this->return_system_image('SOCIAL_' . $tmp_social_media_data_key, $tmp_social_img_width, $tmp_social_img_height, '#', $tmp_social_img_alt, $tmp_social_img_title, '_self', CRNRSTN_HTML);
                    //return '<a href="#" target="_self"><img src="' . $this->R['asset_mgr']->return_creative('SOCIAL_' . $tmp_social_media_data_key, CRNRSTN_BASE64) . '" width="' . $tmp_social_img_width . '" height="' . $tmp_social_img_height . '" alt="' . $tmp_social_img_alt . '" title="' . $tmp_social_img_title .'" border="0" style="border: 0;"></a>';

                }

//                //
//                // CONSIDER SUPPORTING MEDIA IMAGE INTEGRATIONS INTO EMAIL WITH A CHECK HERE.
//                if($this->tmp_restrict_this_image_sprite_media_constant($tmp_social_media_endpoint)){
//
//                    //    public function return_system_image($media_element_key, $width = NULL, $height = NULL, $hyperlink = NULL, $alt = NULL, $title = NULL, $target = NULL, $image_output_mode = NULL){
//                    //return $this->return_system_image('SOCIAL_' . $tmp_social_media_data_key, $tmp_social_img_width, $tmp_social_img_height, $this->return_sticky_link($url, $tmp_sticky_link_meta), $tmp_social_img_alt, $tmp_social_img_title, $target, CRNRSTN_HTML);
//                    //return $this->return_system_image('CRNRSTN_LOGO', '', 250, NULL, NULL, NULL, NULL, CRNRSTN_HTML);
//
//                    if($valid_url){
//
//                        $tmp_note = '<!-- CRNRSTN :: v' . $this->version_crnrstn() . ' :: Graceful degradation to $email_channel=true until ' . $tmp_social_media_endpoint . ' image sprite coordinates can be approved. -->';
//
//                        return $tmp_note . $this->return_system_image('SOCIAL_' . $tmp_social_media_data_key, $tmp_social_img_width, $tmp_social_img_height, $this->return_sticky_link($url, $tmp_sticky_link_meta), $tmp_social_img_alt, $tmp_social_img_title, $target, CRNRSTN_HTML);
//                        //return $tmp_note . '<a href="' . $this->return_sticky_link($url, $tmp_sticky_link_meta) . '" target="' . $target . '"><img src="' . $this->R['asset_mgr']->return_creative('SOCIAL_' . $tmp_social_media_data_key, CRNRSTN_BASE64) . '" width="' . $tmp_social_img_width . '" height="' . $tmp_social_img_height . '" alt="' . $tmp_social_img_alt . '" title="' . $tmp_social_img_title .'" border="0" style="border: 0;"></a>';
//
//                    }
//
//                    $tmp_note = '<!-- CRNRSTN :: v' . $this->version_crnrstn() . ' :: Graceful degradation to $email_channel=true until ' . $tmp_social_media_endpoint . ' image sprite coordinates can be approved. -->';
//                    return $tmp_note . $this->return_system_image('SOCIAL_' . $tmp_social_media_data_key, $tmp_social_img_width, $tmp_social_img_height, '#', $tmp_social_img_alt, $tmp_social_img_title, '_self', CRNRSTN_HTML);
//                    //return $tmp_note . '<a href="#" target="_self"><img src="' . $this->R['asset_mgr']->return_creative('SOCIAL_' . $tmp_social_media_data_key, CRNRSTN_BASE64) . '" width="' . $tmp_social_img_width . '" height="' . $tmp_social_img_height . '" alt="' . $tmp_social_img_alt . '" title="' . $tmp_social_img_title .'" border="0" style="border: 0;"></a>';
//
//                }

                if($valid_url){

//  BREAKS WITH # AS URL
//                    $tmp_social_html = '<div style="display: inline-block; width:' . $tmp_social_img_width . 'px; height:' . $tmp_social_img_height . 'px; cursor:pointer; overflow: hidden;" onclick="window.open(\'' . $this->return_sticky_link($url, $tmp_sticky_link_meta) . '\', \'' . $target . '\'); return false;">
//                                    <div style="position: relative;"><div style="position: absolute; left:' . $tmp_social_img_left . 'px; top: ' . $tmp_social_img_top . 'px;">
//                                        <img src="' . $this->R['asset_mgr']->return_creative($tmp_social_media_sprite, CRNRSTN_BASE64) . '" width="' . $tmp_sprite_width . '" height="' . $tmp_sprite_height . '" alt="' . $tmp_social_img_alt . '" title="' . $tmp_social_img_title .'">
//                                    </div></div></div>';

                    $tmp_social_serial = $this->generate_new_key(50);

                    $tmp_script = '<script>
function crnrstn_sticky_' . $tmp_social_serial . '(ux_action, url, target, elem){

        switch(ux_action){
            case \'onmouseover\':

            break;
            case \'onmouseout\':

            break;
            case \'onmousedown\':

            break;
            case \'onmouseup\':

            break;
            case \'onclick\':

                if(url !== \'#\'){

                    window.open(url, target);

                }

                break;

            }

            return false;

        }

</script>';

                    $tmp_social_html = '<div id="crnrstn_media_sticky_link_'. $tmp_social_serial .'" style="display: inline-block; width:' . $tmp_social_img_width . 'px; height:' . $tmp_social_img_height . 'px; cursor:pointer; overflow: hidden;" onclick="crnrstn_sticky_' . $tmp_social_serial . '(\'onclick\', \''. $this->return_sticky_link($url, $tmp_sticky_link_meta) .'\', \'' . $target . '\', this);">
                                    <div style="position: relative;"><div style="position: absolute; left:' . $tmp_social_img_left . 'px; top: ' . $tmp_social_img_top . 'px;">
                                        ' . $this->return_system_image($tmp_social_media_sprite, $tmp_sprite_width, $tmp_sprite_height, '', $tmp_social_img_alt, $tmp_social_img_title, $target, CRNRSTN_HTML) . '
                                    </div></div></div>' . $tmp_script;

                    return $tmp_social_html;

                }

                //
                // INVALID URL MEDIA IMAGE STICKY LINK
//                $tmp_social_html = '<div style="display: inline-block; width:' . $tmp_social_img_width . 'px; height:' . $tmp_social_img_height . 'px; overflow: hidden;">
//                                    <div style="position: relative;"><div style="position: absolute; left:' . $tmp_social_img_left . 'px; top: ' . $tmp_social_img_top . 'px;">
//                                        <img src="' . $this->R['asset_mgr']->return_creative($tmp_social_media_sprite, CRNRSTN_BASE64) . '" width="' . $tmp_sprite_width . '" height="' . $tmp_sprite_height . '" alt="' . $tmp_social_img_alt . '" title="' . $tmp_social_img_title .'">
//                                    </div></div></div>';

                $tmp_social_html = '<div style="display: inline-block; width:' . $tmp_social_img_width . 'px; height:' . $tmp_social_img_height . 'px; overflow: hidden;">
                                    <div style="position: relative;"><div style="position: absolute; left:' . $tmp_social_img_left . 'px; top: ' . $tmp_social_img_top . 'px;">
                                        ' . $this->return_system_image($tmp_social_media_sprite, $tmp_sprite_width, $tmp_sprite_height, '', $tmp_social_img_alt, $tmp_social_img_title, '_self', CRNRSTN_HTML) . '
                                    </div></div></div>';
                return $tmp_social_html;

            }

            return '';

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
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

        }

        /*
        THE ORIGINAL (PRE-LIGHTSABER) 18 MEDIA ICONS.
        social_archives.png
        social_bandcamp.png
        social_bassdrive.png
        social_beatport.png
        social_discogs.png
        social_facebook.png
        social_history.png
        social_instagram.png
        social_json.png
        social_linkedin.png
        social_mixcloud.png
        social_paypal.png
        social_rolldabeats.png
        social_soundcloud.png
        social_spotify.png
        sprite.png
        social_twitter.png
        social_www.png
        social_youtube.png

        */
        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function shortenColorHex($color_hex)
    {

        $tmp_hex_array = str_split($color_hex);

        if($tmp_hex_array[1] == $tmp_hex_array[2] && $tmp_hex_array[3] == $tmp_hex_array[4] && $tmp_hex_array[5] == $tmp_hex_array[6]){

            $color_hex = '#' . $tmp_hex_array[1] . $tmp_hex_array[3] . $tmp_hex_array[5];

        }

        return $color_hex;

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
    private function return_image_to_html_str(
                     $width, 
                     $height, 
                     $table_row_HTML)
    {

        $str = '';
        $str .= '
<table cellpadding="0" cellspacing="0" border="0" width="' . $width . '" style="width:' . $width . 'px; height:' . $height . 'px;">';
        $str .= $table_row_HTML;
        $str .= '</table>
';

        return $str;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_styled_row_HTML($table_col_HTML)
    {

        $str = '<tr>';
        $str .= $table_col_HTML;
        $str .= '</tr>';

        return $str;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_styled_column_HTML($color_hex)
    {

        //$str = '<td style="width:1px; height:1px; overflow: hidden; padding: 0; margin: 0; background-color: ' . $color_hex . ';"><div style="width: 1px; height: 1px; overflow: hidden;">&nbsp;</div></td>';

        $str = '<td style="background-color:' . $color_hex . ';"><div style="width:1px;height:1px;overflow:hidden;">&nbsp;</div></td>';

        return $str;

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
    private function return_pixelHex(
                     $x, 
                     $y, 
                     $oImageMagi)
    {

        $pixel = $oImageMagi->getImagePixelColor($x, $y);

        $tmp_color_str = $pixel->getColorAsString();
        $tmp_color_str = $this->proper_replace('%','', $tmp_color_str);
        $tmp_color_str = $this->proper_replace('srgb','', $tmp_color_str);
        $tmp_color_str = $this->proper_replace('(','', $tmp_color_str);
        $tmp_color_str = $this->proper_replace(')','', $tmp_color_str);

        $tmp_color_explode = explode(',', $tmp_color_str);

        //
        // SOURCE :: https://stackoverflow.com/questions/32962624/convert-rgb-to-hex-color-values-in-php
        // COMMENT :: https://stackoverflow.com/a/32977705
        // AUTHOR :: https://stackoverflow.com/users/3942918/user3942918
        $color_hex = sprintf('#%02x%02x%02x', $tmp_color_explode[0], $tmp_color_explode[1], $tmp_color_explode[2]);

        $color_hex = strtoupper($color_hex);

        $color_hex = $this->shortenColorHex($color_hex);

        return $color_hex;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_image_as_table_HTML($filePath)
    {

        $tmp_image_to_html_str = '';

        if(is_file($filePath)){

            $oImageMagi = new Imagick($filePath);

            $height = $oImageMagi->getImageHeight();
            $width  = $oImageMagi->getImageWidth();
            $x      = 0;

            $table_row_HTML = '';
            for($y = 0; $y <= $height; $y++){

                $table_col_HTML = '';
                for($x = 0; $x <= $width; $x++){

                    $tmp_pixel_color_hex = $this->return_pixelHex($x, $y, $oImageMagi);

                    $table_col_HTML .= $this->return_styled_column_HTML($tmp_pixel_color_hex);

                }

                $table_row_HTML .= $this->return_styled_row_HTML($table_col_HTML);

            }

            $tmp_image_to_html_str = $this->return_image_to_html_str($width, $height, $table_row_HTML);

            $clr_ssl_msg = 'IMAGE[' . $filePath .
                           ']_HTML=' . $tmp_image_to_html_str;
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

        }else{

            $tmp_image_to_html_str = 'Path to file [' . $filePath . '] is not recognized as a file.';

        }

        return $tmp_image_to_html_str;

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
    function isMatchedStrPattern(
             $str, 
             $condition_pattern, 
             $case_insensitive = false)
    {

        if($case_insensitive){

            $tmp_str     = \strtolower($str);
            $tmp_pattern = \strtolower($condition_pattern);

            if(fnmatch($tmp_pattern, $tmp_str)){

                return true;

            }else{

                return false;

            }

        }else{

            if(fnmatch($condition_pattern, $str)){

                return true;

            }else{

                return false;

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
     * @return
     * @access public
     *
     */
    function valid_primary_key_check(
             $original_serial, 
             $key_field_type, 
             $key_length, 
             $key_string_chars = NULL)
    {

        $key_field_type = trim(strtolower($key_field_type));
        $key_length     = ((int) $key_length * 1) + 0;

        switch($key_field_type){
            case 'char':
            case 'varchar':
            case 'text':

                $tmp_original_serial_len = strlen($original_serial);

                if($tmp_original_serial_len != $key_length){

                    return $this->generate_new_key($key_length, $key_string_chars);

                }

            break;

        }

        return $original_serial;

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
    function return_valid_primary_key(
             $original_serial, 
             $key_field_type, 
             $key_length, 
             $table_name, 
             $field_name, 
             $checksum_field_name = NULL, 
             $key_string_chars = NULL)
    {

        try{

            $tmp_out_serial = $original_serial;
            $key_field_type = trim(strtolower($key_field_type));
            $key_length     = ((int) $key_length * 1) + 0;

            //
            // STRING LENGTH BUFFER/TRIM ORIGINAL SERIAL...AN INTEGRITY CHECK FOR STRING DATA TYPE SERIALS
            // I NEED THIS TO CLEAN UP AN AUTO INCREMENT INT(11) FIELD FROM AN OLD ARCHITECTURE AND TO
            // BRING SERIAL IN LINE WITH THE NEW FIELD LENGTH
            switch($key_field_type){
                case 'char':
                case 'varchar':
                case 'text':

                    $tmp_original_serial_len = strlen($original_serial);

                    if($tmp_original_serial_len != $key_length){

                        //error_log(__LINE__ . ' crnrstn_usr ORIGINAL ' . $table_name . '.' . $field_name . ' SERIAL LENGTH[' . $tmp_original_serial_len.'] ERROR ON LENGTH! REQUIRED LENGTH, ' . $key_length . '.');
                        $tmp_out_serial = $this->return_clean_primary_key($original_serial, $key_length, $key_string_chars);

                    }

                break;

            }

            $tmp_check_expired = false;
            $tmp_search_cnt = 0;
            $tmp_max_attempt_sql_key_search = 10;      // THIS SHOULD BE CONFIGURABLE.
            while($tmp_check_expired == false){

                //
                // RETURN STRING IF UNIQUE
                if($this->primary_key_is_unique($tmp_out_serial, $table_name, $field_name, $checksum_field_name)){

                    $this->new_serial_log_ARRAY[] = $tmp_out_serial;
                    $tmp_check_expired = true;

                    return $tmp_out_serial;

                }

                $tmp_search_cnt++;

                if($tmp_search_cnt > $tmp_max_attempt_sql_key_search){

                    $tmp_check_expired = true;

                }

            }

            throw new Exception('CRNRSTN :: After ' . $tmp_search_cnt.' serial refresh attempts, still unable to confirm uniqueness of key[' . $tmp_out_serial . '] for ' . $table_name . $field_name . '[' . $checksum_field_name . '].');

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

    }

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
    function table_field_value_exists(
             $value, 
             $table_name, 
             $field_name, 
             $field_name_crc32 = NULL)
    {

        $oCRNRSTN_MySQLi = $this->return_crnrstn_mysqli();
        $mysqli          = $oCRNRSTN_MySQLi->return_conn_object();

        //
        // CONFIRM WHETHER A MATCH IS IN TABLE.
        if(isset($field_name_crc32)){

            $tmp_query = 'SELECT `' . $table_name . '`.`' . $field_name . '`
            FROM `' . $table_name . '`
            WHERE `' . $table_name . '`.`' . $field_name . '` = "' . $mysqli->real_escape_string($value) . '"
            AND `' . $table_name . '`.`' . $field_name_crc32 . '` = "' . $this->hash($value, 'crc32') . '" LIMIT 1;';

        }else{

            $tmp_query = 'SELECT `' . $table_name . '`.`' . $field_name . '`
            FROM `' . $table_name . '`
            WHERE `' . $table_name . '`.`' . $field_name . '` = "' . $mysqli->real_escape_string($value) . '" LIMIT 1;';

        }

        $tmp_sql_serial = $this->generate_new_key(25);
        $this->load_query_profile('CRNRSTN_SYSTEM_SUPPORT_REQUEST', '!jesus_is_my_dear_lord!', 'VALUE_EXISTENCE_CHECK_' . $tmp_sql_serial);
        $this->add_database_query('VALUE_EXISTENCE_CHECK_' . $tmp_sql_serial, $tmp_query);

        //
        // PROCESS ALL QUERY TO CONNECTION(S)
        $this->process_query();

        $tmp_count = $this->return_record_count('VALUE_EXISTENCE_CHECK_' . $tmp_sql_serial);

        if($tmp_count > 0){

            return true;

        }else{

            return false;

        }

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
    private function primary_key_is_unique(
                     $tmp_out_serial, 
                     $table_name, 
                     $field_name, 
                     $checksum_field_name)
    {

        //
        // NOTE: ANY FIELDS COMING INTO THIS PLACE SHOULD DEFINITELY BE MYSQL TABLE INDEXED BY THE TIME OF
        // RTM TO PRODUCTION
        //
        // CHECK TABLE FOR EXISTENCE OF THIS NEW SERIAL. FOR VICTORY, WE NEED GUARANTEE OF SERIAL UNIQUENESS + FEEDBACK
        // LOOP TO RECOVERY.

        //
        // QUERY FOR CONFIRMATION OF UNIQUENESS
        if(isset($checksum_field_name)){

            $tmp_query = 'SELECT COUNT(*) AS `DUP_COUNT`
            FROM `' . $table_name . '`
            WHERE `' . $table_name . '`.`' . $field_name . '`= "' . $tmp_out_serial . '"
            AND `' . $table_name . '`.`' . $checksum_field_name . '`= "' . $this->hash($tmp_out_serial, 'crc32') . '";';

        }else{

            $tmp_query = 'SELECT COUNT(*) AS `DUP_COUNT`
            FROM `' . $table_name . '`
            WHERE `' . $table_name . '`.`' . $field_name . '`="' . $tmp_out_serial . '";';

        }

        //
        //add_database_query() WILL SERIALIZE THE QUERY TO THE CONNECTION PROVIDED. CRNRSTN :: SUPPORTS n+1 MYSQLI DATABASE CONNECTIONS.
        $tmp_query_serial = $this->generate_new_key(25);
        $this->load_query_profile('CRNRSTN_SYSTEM_SUPPORT_REQUEST', '!jesus_is_my_dear_lord!', 'SERIAL_UNIQUENESS_CHECK_' . $tmp_query_serial);
        $this->add_database_query('SERIAL_UNIQUENESS_CHECK_' . $tmp_query_serial, $tmp_query);

        //
        // PROCESS ALL QUERY TO CONNECTION(S)
        $this->process_query(true);

        $tmp_duplicate_serial_count = $this->return_database_value('SERIAL_UNIQUENESS_CHECK_' . $tmp_query_serial, 'DUP_COUNT');

        $tmp_duplicate_serial_count = (int) $tmp_duplicate_serial_count * 1;

        if($tmp_duplicate_serial_count > 0){

            return false;

        }else{

            if($tmp_duplicate_serial_count == 0){

                return true;

            }else{

                return false;

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
     * @access private
     *
     */
    private function return_clean_primary_key(
                     $original_serial, 
                     $key_length, 
                     $key_string_chars)
    {

        $tmp_string_out = '';
        $tmp_original_serial_len = strlen($original_serial);
        if($tmp_original_serial_len < $key_length){

            $tmp_padding_str_len = $key_length - $tmp_original_serial_len;
            $tmp_padding_str = $this->generate_new_key($tmp_padding_str_len, $key_string_chars);

            $tmp_string_out = $original_serial.$tmp_padding_str;

        }else{

            //
            // NEED TO TRIM STRING TO APPROPRIATE LENGTH OF $key_length
            $tmp_original_str_ARRAY = str_split($original_serial);

            for($i = 0; $i < $key_length; $i++){

                $tmp_string_out .= $tmp_original_str_ARRAY[$i];

            }

        }

        $tmp_serial_generation_expired = false;
        $tmp_max_attempt_serial_gen = 50;      // THIS SHOULD BE CONFIGURABLE.
        while($tmp_serial_generation_expired == false){

            $tmp_max_attempt_serial_gen--;

            if(in_array($tmp_string_out, $this->new_serial_log_ARRAY)){

                //
                // GENERATE NEW SERIAL
                $tmp_string_out = $this->generate_new_key($tmp_padding_str_len, $key_string_chars);

            }else{

                $tmp_serial_generation_expired = true;

            }

            if($tmp_max_attempt_serial_gen < 0){

                $tmp_serial_generation_expired = true;

            }

        }

        return $tmp_string_out;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function validate_css($raw_html_data)
    {

        if(!isset(self::$oCRNRSTN_CSS_VALIDATOR)){

            //self::$oCRNRSTN_CSS_VALIDATOR = new crnrstn_communications_css_standard($this, $raw_html_data);

            $spice_salt_mem_ptr = NULL;
            // 5 :: Friday, August 21, 2026 @ 0620 hrs.
            $this->compound_ointment(
                   $spice_salt_mem_ptr,
                   'crnrstn_communications_css_standard',
                   $this,
                   $raw_html_data);
            $this->anoint(
                   'crnrstn_communications_css_standard',
                   self::$oCRNRSTN_CSS_VALIDATOR);

        }

        return self::$oCRNRSTN_CSS_VALIDATOR->return_validation_results();

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Deleted resource_filecache_version in
     * the shift over to file_url_cache_id().
     * 5 :: Sunday, July 26, 2026 @ 0442 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the following methods
     *       in order to get behind the
     *       crnrstn_user's extension
     *       of crnrstn and to remove
     *       unrelated-to-CLR-SSL clutter:
     *
     *       define_wildcard_resource()
     *       return_query_date_time_stamp()
     *       return_prettyElapsedTime()
     *       return_pretty_delta_time()
     *       elapsed_from_current()
     *       elapsed()
     *       elapsed_verbose()
     *       elapsed_verbose_from_current()
     *       get_lang_copy()
     *       is_tablet()
     *       is_mobile()
     *       set_desktop()
     *       set_tablet()
     *       set_mobile()
     *       set_mobile_custom()
     *       return_client_header_value()
     *       append_url_param()
     *       url_param_append()
     *       return_param_name()
     *       system_device_channel_constants()
     *       __SOAP_service_listen()
     *       return_SOAP_SVC_debugMode()
     *       explode_url()
     *       add_resource()
     *       get_resource()
     *       get_resource_count()
     *       return_oNUSOAP_BASE()
     *       str_split_unicode()
     *       str_sanitize()
     *       client_ip()
     *       return_log_priority_pretty()
     *       get_error_log_trace()
     *       highlight_text()
     *       return_creative()
     *       format_bytes()
     *       number_format_keep_precision()
     *       readfile_chunked()
     *       elapsed_delta_time()
     *       ___isset_data_key()
     *       isset_http_superglobal()
     *       ini_set()
     *       ini_get()
     *       get_url_content()                 // Moved to crnrstn_stream.
     *       __get_url_content()               // Moved to crnrstn_curl.
     *       ___get_url_content()              // Moved to crnrstn_curl.
     *       hello_world()
     *       mb_parse_url()
     *       validate_DIR_endpoint()
     *       output_agg_destruct_str()
     *       proper_replace()
     *       chunkPageData()
     *       curl_post()                       // Moved to crnrstn_curl.
     *       curl_get()                        // Moved to crnrstn_curl.
     *       return_server_response_code
     *       benchmark_bestPasswordHashCost()  // Moved to crnrstn.
     *       validate_pwd_hash_login()         // Moved to crnrstn.
     *       create_pwd_hash_for_storage()
     *       print_r_str
     *       print_r()
     *       return_branding_creative()
     *       hash()
     *       encode_image()
     *       find_filesize()
     *       return_PHP_exception_trace_pretty()
     *       return_bit_constant()
     *       return_set_bits()
     *       return_serialized_bit_nom()
     *       return_set_serialized_bits()
     *       serialized_bit_stringin()
     *       serialized_bit_stringout()
     *       is_serialized_bit_set()
     *       toggle_serialized_bit()
     *       toggle_bit()
     *       is_bit_set()
     *       bit_stringin()
     *       bit_stringout
     *       initialize_serialized_bit()
     *       initialize_bit()
     *       R_debug_mode()
     *       PHPMailer_debug_mode()
     *       WORDPRESS_debug_mode()
     *       version_crnrstn()
     *       version_apache()
     *       version_apache_sysimg()
     *       version_php()
     *       version_soap()
     *       version_mysqli()
     *       version_openssl()
     *       version_linux()
     *       return_dataset_nomination_prefix()
     *       hash_ddo_memory_pointer()
     *       proper_version()
     *       crnrstn_http_endpoint()
     *       define_resource_env_tmp()
     *       return_CRNRSTN_ASCII_ART()
     *       return_jony5_content()
     *       return_bassdrive_element()
     *       reporting_sync_bassdrive_log()
     *       relay_sync_bassdrive_log()
     *       log_bassdrive_nowplaying()
     *       refresh_bassdrive_history()
     *
     *       Fatal error: Declaration of
     *       CRNRSTN\crnrstn_user::is_serialized_bit_set(
     *       $const_nom, $integer_const) must be
     *       compatible with
     *       CRNRSTN\crnrstn::is_serialized_bit_set(
     *       $name, $integer_constant,
     *       $return_raw_byte_read = false) in
     *       C:\xampp\htdocs\_R\class\user
     *       \crnrstn.user.class.php
     *       on line 21697
     *
     *
     *       5 :: Friday, August 21, 2026 @ 0532 hrs.
     *
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

        //$this->output_agg_destruct_str();
        //$this->oLog_output_ARRAY[] = $this->error_log('', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);

        $clr_ssl_msg = 'goodbye crnrstn.';
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

}