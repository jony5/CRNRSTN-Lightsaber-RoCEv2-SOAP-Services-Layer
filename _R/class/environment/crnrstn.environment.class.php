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
 * CLASS DEFINITION :: crnrstn_environment
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: September 11, 2012 @ 1720 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Server
 *                     Environment Objectification
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber SOAP 
 *                     Services Layer Environmental 
 *                     class object was the original 
 *                     bow of the ship in the entire
 *                     framework for 
 *                     environmental detection. 
 *                     
 *                     The CRNRSTN :: Environmental 
 *                     Services Layer used to be the 
 *                     first layer (or object...in 
 *                     those days) in CRNRSTN :: to 
 *                     know who the SERVER was 
 *                     by name. 
 *                     
 *                     CRNRSTN :: Lightsaber thanks 
 *                     you for your service, 
 *                     CRNRSTN :: Environment.
 *
 *                     On account of the architectural 
 *                     requirements that were presented 
 *                     when making design decisions 
 *                     which ultimately had us going to 
 *                     what would later become 
 *                     CRNRSTN :: PLAID, we needed to 
 *                     satisfy environmental detection 
 *                     earlier in the stack or at a 
 *                     lower level.
 *                     
 *                     CRNRSTN :: Environment 
 *                     loads classes that support the 
 *                     kitchen sink (in terms of HTML 
 *                     output) for UI interactions.
 *                     This includes instantiating 
 *                     objects to support:
 *                       - managing the Lightsaber 
 *                         documentation web site, 
 *                       - owning PSSDTLA encrypted 
 *                         JSON object packet + HTML 
 *                         injection assembly, and
 *                       - listening for CRNRSTN :: 
 *                         Pseudo-SOAP Services Data 
 *                         Tunnel Layer Architecture 
 *                         (PSSDTLA) XHR requests 
 *                         coming from oCRNRSTN_JS 
 *                         at the browser. An XML 
 *                         document type response
 *                         return is the 
 *                         current regime.
 *
 *                     Because CRNRSTN :: PLAID just 
 *                     needs to buffer output return 
 *                     x.gif from:
 *
 *                     http://172.16.225.128/lightbox_helper/?crnrstn_0010111011=x.gif,
 *                     
 *                     all of our environmental 
 *                     detection responsibilities 
 *                     will need to be performed as 
 *                     early as possible, and in 
 *                     order to complete this 
 *                     assignment (the link will 
 *                     buffer return a 1x1 pixel 
 *                     gif image), we don't need the 
 *                     instantiations of all the
 *                     resources required to support 
 *                     CRNRSTN :: Lightsaber SOAP 
 *                     Services Layer documentation 
 *                     page assembly.
 *                     
 *                     Now, crnrstn is the lead 
 *                     class object performing 
 *                     environmental detection 
 *                     before I, crnrstn_environment, 
 *                     even come to exist.
 *
 *
 *                     5
 *
 *                     Saturday, August 20, 2022 @ 0410 hrs.
 *                     Last Modified: Tuesday, July 30, 2024 @ 0433 hrs.
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
class crnrstn_environment extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_environment 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Wednesday, March 11, 2026 @ 1019 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We refactored out $oCRNRSTN_USR 
     *       initialization standing upon 
     *       our extension of the crnrstn 
     *       class object. 
     *       5 :: Wednesday, March 11, 2026 @ 2259 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Modified all private static 
     *       crnrstn_environment object 
     *       variable declarations to 
     *       make them protected.
     *       5 :: Wednesday, March 11, 2026 @ 2323 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We refactored out $oCRNRSTN_ASSET_MGR 
     *       initialization standing upon 
     *       our extension of the crnrstn 
     *       class object. 
     *       5 :: Wednesday, March 11, 2026 @ 2325 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed crnrstn_environment->hash() 
     *       method, as crnrstn has a hash() 
     *       method, and we are 
     *       extending that class here. 
     *       5 :: Thursday, March 12, 2026 @ 0218 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Moved variable definition 
     *       for protected $oFINITE_EXPRESS 
     *       to crnrstn object boot. 
     *       5 :: Thursday, May 21, 2026 @ 0138 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the error_log() method 
     *       from the crnrstn_environment class 
     *       object added to crnrstn on  
     *       Thursday, August 18, 2022 @ 0224 hrs.
     *       in light of the 
     *       crnrstn_environment crnrstn 
     *       object extension.
     *
     *        public function error_log(
     *                        $str, 
     *                        $line_num = NULL, 
     *                        $method = NULL, 
     *                        $file = NULL, 
     *                        $log_silo_key = NULL)
     *        {
     *
     *             //
     *             // 5 :: Thursday, August 18, 2022 @ 0224 hrs.
     *             return $this->error_log(
     *                           $str, 
     *                           $line_num, 
     *                           $method, 
     *                           $file, 
     *                           $log_silo_key);
     *
     *       }
     *       5 :: Sunday, May 24, 2026 @ 1222 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed the $oCOOKIE_MGR, 
     *       $oHTTP_MGR, and $oLog_ProfileManager 
     *       variables to $R_cookie, 
     *       $R_http, and 
     *       $R_log_output_mgr. 
     *       5 :: Sunday, May 24, 2026 @ 1321 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed public methods, 
     *       - return_stripe_key_ARRAY() 
     *       - output_regression_stripe_ARRAY() 
     *       - return_regression_stripe_ARRAY() 
     *
     *       from the crnrstn_environment 
     *       class object on account of 
     *       the crnrstn_environment 
     *       extending crnrstn. 
     *       5 :: Sunday, May 24, 2026 @ 1706 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Removed the following 
     *       public (or private) methods 
     *       from the crnrstn_environment 
     *       class object on account of 
     *       the crnrstn_environment 
     *       extending crnrstn: 
     *
     *       - return_micro_time() 
     *       - wall_time() 
     *       - elapsed_delta_time() 
     *       - current_location() 
     *       - return_pretty_delta_time() 
     *       - elapsed_from_current() 
     *       - elapsed() 
     *       - elapsed_verbose() 
     *       - elapsed_verbose_from_current() 
     *       - print_r_str() 
     *       - print_r() 
     *       - return_component_branding_creative() 
     *       - return_PHP_exception_trace_pretty() 
     *       - return_log_priority_pretty() 
     *       - proper_replace() 
     *       - tidy_boolean() 
     *       - boolean_conversion() 
     *       - create_pwd_hash_for_storage()
     *       - highlight_text()
     *       - str_split_unicode()
     *       - explode_url()
     *       - append_url_param()
     *       - url_param_append()
     *       - return_param_name()
     *       - mb_parse_url()
     *       - return_oLog_ProfileManager()
     *
     *
     *       5 :: Sunday, May 24, 2026 @ 1817 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added $R_ui_trm and $R_usr to the 
     *       crnrstn_environment _construct(), 
     *       and removed $instanceType = NULL, 
     *       and removed 
     *       $WORDPRESS_debug_mode = NULL. 
     *       Also, we will deprecate and remove 
     *       all use of 
     *       crnrstn_environment->return_ENV_oCRNRSTN_USR() 
     *       for self::$R_usr initialization. 
     *       5 :: Sunday, July 26, 2026 @ 2016 hrs.
     *
     */

    private $R_data = array();

    private static $R_cookie;
    private static $R_http;
    private static $R_log_output_mgr;

    private static $env_key;
    private static $env_key_hash;

    private static $lang_content_ARRAY = array();
    private static $system_logging_output_profile_ARRAY = array();
    private static $sys_logging_meta_ARRAY = array();

    protected $system_hash_algo;
    public $total_bytes_encrypted = 0;

    private static $sess_env_param_ARRAY = array();
    private static $m_starttime = array();
    public $encryptableDataTypes = array();
    private static $hmac_algorithm_profile_ARRAY = array();
    private static $openssl_cipher_profile_ARRAY = array();
    private static $openssl_digest_profile_ARRAY = array();
    private static $system_resource_constants_ARRAY = array();
    public $system_theme_style_constants_ARRAY = array();
    private static $weighted_elements_keys_ARRAY = array();
    public $soap_permissions_file_path_ARRAY = array();

    private static $requestProtocol;

    public $starttime;
    //public $oCRNRSTN_oWCR_ARRAY = array();
    //public $wildCardResource_filePath = array();
    public $ini_set_ARRAY = array();
    protected $is_soap_data_tunnel_endpoint = false;
    public $destruct_output;

    protected $oSOAP_services_access_manager = array();
    protected $oSOAP_services_oClient_manager = array();
    protected $oSOAP_services_oAuth_manager = array();

    protected $oAdminAccount_ARRAY = array();

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * $system_setting_jpg_image_quality
     * -----
     * 0   = worst / smaller file. 
     * 100 = better / bigger file. 
     *
     */
    public $jpg_image_quality       = 100;  
    public $cache_ttl_default       = 80;
    public $useCURL_default         = true;
    protected $max_login_attempts   = 10;
    protected $max_seconds_inactive = 600;
    public $operating_system;
    public $process_id;

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
             $R_ui_trm, 
             $R_usr)
    {

        $this->R_data['int_flag']        = $this->get_crnrstn('int_flag');
        $this->R['kivotos']->R['ui_trm'] = $R_ui_trm;
        $this->R['kivotos']->R['usr']    = $R_usr;

        self::$env_key            = $this->return_env_key();
        self::$env_key_hash       = $this->return_env_key(true);
        $this->system_hash_algo   = $this->system_hash_algo();
        $this->operating_system   = $this->operating_system;
        $this->process_id         = $this->process_id;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize encryption 
         * profile. 
         *
         */
        $this->init_encrypt_profile();
        self::$system_resource_constants_ARRAY = $this->system_resource_constants_ARRAY();
        self::$weighted_elements_keys_ARRAY    = $this->weighted_elements_keys_ARRAY;
        self::$lang_content_ARRAY              = $this->return_lang_content_ARRAY();
        $this->ini_set_ARRAY                   = $this->ini_set_ARRAY;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Roll over 
         * soap permissions. 
         *
         */
        $this->soap_permissions_file_path_ARRAY = $this->soap_permissions_file_path_ARRAY;
        self::$m_starttime                      = $this->return_m_start_time();

        $clr_ssl_msg = 'Re-arch CLR-SSL Logging ' . 
                       'Mgmt. See use of ' . 
                       'sync_to_environment() ' . 
                       'twice in oENV.';
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
         * Roll over debug/error_log 
         * trace from CRNRSTN :: 
         * object and then continue 
         * to append. 
         *
         */
        self::$R_log_output_mgr = $this->return_R_log_output_mgr();
        //self::$R_log_output_mgr->sync_to_environment($this->oCRNRSTN, $this);

        $this->R_data['R_cluster_id'] = $this->get_crnrstn('R_cluster_id');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Object instantiation 
         *         refactoring to support 
         *         persistence of state. 
         *
         *         Cookie manager should 
         *         instantiate looking for 
         *         COOKIE::SSDTLA 
         *         integrations from 
         *         browser...
         *
         *         Session manager should 
         *         instantiate looking 
         *         for...from session....etc. 
         *
         *
         *         5 :: Thursday, August 18, 2022 @ 0247 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Note: This TODO is in reference 
         *       to the runtime character 
         *       of the CLR-SSL at its 
         *       initialization; this TODO 
         *       notes the character of the 
         *       CLR-SSL that is to be 
         *       assumed for processing 
         *       data according to what is 
         *       soon to become the CLR-SSL 
         *       MC-DDO order of operations 
         *       for the initialization of 
         *       proprietary data transport 
         *       architectures, protocols, 
         *       and channels. 
         *
         *       GPHSJTCDROMF
         *
         *
         *       5 :: Wednesday, March 11, 2026 @ 2111 hrs.
         *
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of 
         * the CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services Layer 
         * (CLR-SSL). 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2007 hrs.
         *
         * self::$oCOOKIE_MGR = new crnrstn_cookie_manager($this->oCRNRSTN);
         *
         * $this->oCOOKIE_MGR = $this->return_registered_resource(
         *                             'new', 
         *                             'crnrstn_cookie_manager');
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of 
         * the CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services Layer 
         * (CLR-SSL) Hypertext Transfer 
         * Protocol (HTTP) Management. 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2008 hrs.
         *
         * $this->oHTTP_MGR = new crnrstn_http_manager(
         *                        $this->oCRNRSTN, 
         *                        $this);
         *
         * $this->oHTTP_MGR = $this->return_registered_resource(
         *                           'new', 
         *                           'crnrstn_http_manager');
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize an instruction set to 
         * batch a series of requests into the 
         * CLR-SSL Resource Registry: 
         * - Object Initialization and 
         *   Instantiations, 
         * - Array Initializations, and 
         * - Runtime Executables. 
         *
         *
         * 5 :: Monday, March 30, 2026 @ 1609 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Completed the implementation 
         *       of the CLR-SSL anoint 
         *       (and the design of anoint_eval)
         *       architecture within the 
         *       crnrstn_environment __construct(). 
         *
         *       https://www.php.net/manual/en/language.references.pass.php
         *
         *
         *       * lights joint *
         *       * cracks can of Sweetwater® 420 with K-bar® *
         *       5 :: Sunday, May 24, 2026 @ 1412 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed $system_setting_jpg_image_quality 
         *       to $jpg_image_quality.
         *       5 :: Monday, May 25, 2026 @ 0456 hrs.
         *
         */
        // 5 :: Sunday, May 24, 2026 @ 1400 hrs.
        $this->anoint(
               'crnrstn_http_manager|' . 
               'crnrstn_cookie_manager', 
               self::$R_http, 
               self::$R_cookie);

        error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . '] (' . 
            \gettype(self::$R_http) . ')' . 
            \get_class(self::$R_http) . ' and (' . 
            \gettype(self::$R_cookie) . ')' . 
            \get_class(self::$R_cookie) . '.');

        $clr_ssl_msg = ' (' . 
                       \gettype(self::$R_http) . ')' . 
                       \get_class(self::$R_http) . ' and (' . 
                       \gettype(self::$R_cookie) . ')' . 
                       \get_class(self::$R_cookie) . '.';
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

        die();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * UNTIL WE GET SESSION 
         * MGMT NAILED DOWN 
         * (well, DATABASE, COOKIE, 
         * SSDTLA, PSSDTLA,... 
         * AND SESSION) THIS 
         * WILL ALWAYS EVALUATE 
         * TO TRUE. NO SESSION 
         * PINGS, YET. 
         * 
         * RUNTIME OPERATION GOES 
         * FROM 0-100 WITH NO
         * SESSION CACHE ASSISTANCE 
         * AND IS UP TO 1 SECOND 
         * FASTER ON PAGE LOADS! 
         * 
         * ...AND THIS LOW-LEVEL 
         * REFACTORING OPERATION IS 
         * NOT EVEN COMPLETE, YET!
         *
         *
         * 5 :: August 20, 2022 @ 0418 hrs.
         *
         */
        if(!($instanceType == 'session_initialization_ping')){

            try{

                //
                // DETERMINE KEY DESIGNATING 
                // THE RUNNING ENVIRONMENT, 
                // WHERE KEY = hash(env key) 
                if(self::$env_key_hash == ''){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * WE DON'T HAVE THE 
                     * ENVIRONMENT DETECTED. 
                     * THROW EXCEPTION. 
                     *
                     *
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    //throw new Exception('CRNRSTN :: environmental configuration error :: unable to detect environment on server ' . $_SERVER['SERVER_NAME'] . ' (' . $_SERVER['SERVER_ADDR'] . ').');
                    $this->oLog_output_ARRAY[] = $this->error_log('CRNRSTN :: environmental configuration error :: unable to detect environment on server ' . $_SERVER['SERVER_NAME'] . ' (' . $_SERVER['SERVER_ADDR'] . ').', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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
                     * \LOG_EMERG            => 'system is unusable.'
                     * \LOG_ALERT            => 'action must be
                     *                          taken immediately'
                     * \LOG_CRIT             => 'critical conditions'
                     * \LOG_ERR              => 'error conditions'
                     * \LOG_WARNING          => 'warning conditions'
                     * \LOG_NOTICE           => 'normal, but
                     *                          significant, condition'
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

                    $this->system_terminate('config_detection_error_help');

                    //error_log(__LINE__ . ' env ' . __METHOD__ . ' going out on 503.');
                    //$this->return_server_response_code(503, $this->return_CRNRSTN_ASCII_ART());
                    exit();

                }else{

                    //
                    // TODO :: DO NOT RUN THIS AGAIN...UNLESS YOU CAN
                    //         FIGURE SOMETHING ELSE OUT...OR JUST
                    //         CRUSH THIS PROPER. Thursday, December 7, 2023 @ 0352 hrs.
                    // FLASH WILD CARD RESOURCES OBJECT ARRAY TO ENVIRONMENTAL CLASS OBJECT
                    //$this->initializeWildCardResource();

                    //
                    // WE HAVE SELECTED 
                    // ENVIRONMENT KEY. 
                    // 
                    // INITIALIZE CONFIG 
                    // KEY AND ENV KEY.
                    // 
                    // FLASH CONFIG KEY 
                    // AND ENV KEY TO SESSION.
                    $this->initRuntimeConfig();

                    //
                    // INITIALIZE ERROR 
                    // REPORTING FOR 
                    // THIS ENVIRONMENT. 
                    $this->initializeErrorReporting();

                    //
                    // INITIALIZE ENVIRONMENTAL 
                    // LOGGING BEHAVIOR. 
                    $this->initEnvLoggingProfile();

                    //
                    // INITIALIZE IP 
                    // ADDRESS RESTRICTIONS 
                    // from grantExclusiveAccess(). 
                    if(isset($this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash])){

                        $this->initExclusiveAccess();

                    }

                    //
                    // INITIALIZE IP 
                    // ADDRESS RESTRICTIONS 
                    // from denyAccess(). 
                    if(isset($this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash])){

                        $this->initDenyAccess();

                    }

                    //
                    // INITIALIZE ADMINISTRATOR ACCESS.
                    if(isset($this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash])){

                        $this->initAdminAccess();

                    }

                    //
                    // BEFORE ALLOCATING 
                    // ADDITIONAL MEMORY 
                    // RESOURCES, PROCESS 
                    // IP AUTHENTICATION. 
                    if(isset($this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]) || 
                        isset($this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]))
                    {
                        //error_log(__LINE__ . ' env env_key=[' . self::$env_key . ']. die();');

                        $this->oLog_output_ARRAY[] = $this->error_log('We have IP restrictions to process and apply for CRNRSTN :: Cluster ID [' . $this->R_data['R_cluster_id'] . '] and environment key [' . self::$env_key_hash . '].', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
                        //error_log(__LINE__ . ' env env_key=[' . self::$env_key . ']. die();');
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

                        if(!($this->authorize_ip_access()) == true){
                        //if(!($this->oCRNRSTN_IPSECURITY_MGR->authorizeEnvAccess($this, self::$env_key_hash) == true)){
                            error_log(__LINE__ . ' env authorizeEnvAccess() DENIED ON env_key=[' . self::$env_key . ']. die();');

                            die();
                            //
                            // WE COULD PERHAPS USE A MORE GRACEFUL WAY TO TRANSITION TO ERR...BUT THIS WORKS
                            // THE METHOD return_server_response_code() CONTAINS SOME CUSTOM HTML FOR OUTPUT IF YOU WANT TO TWEAK ITS DESIGN
                            // PERHAPS SOME FUTURE RELEASE OF CRNRSTN CAN--
                            $this->return_server_response_code(403, $this->return_CRNRSTN_ASCII_ART());
                            exit();

                        }

                    }else{

                        $this->oLog_output_ARRAY[] = $this->error_log('There are NO IP restrictions to process and apply for CRNRSTN :: Cluster ID [' . $this->R_data['R_cluster_id'] . '] and environment key [' . self::$env_key_hash . '].', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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

                    }

                    //
                    // TODO :: THIS IS CHANGING
                    //
                    // INITIALIZE SOAP 
                    // AUTHORIZATION PROFILES 
                    // FOR THIS ENVIRONMENT. 
                    //$this->initSOAPAuthorizationProfiles();

                    //
                    // TODO :: THIS IS CHANGING
                    //
                    // INITIALIZE WORDPRESS 
                    // CONFIGURATION PROFILE(S) 
                    // FOR THIS ENVIRONMENT.
                    //$this->init_wp_config();

                    //
                    // TODO :: THIS IS CHANGING
                    //
                    // INITIALIZE ANALYTICS 
                    // CONFIGURATION PROFILE(S) 
                    // FOR THIS ENVIRONMENT. 
                    //$this->init_analytics_config();

                    //
                    // TODO :: THIS IS CHANGING 
                    //
                    // INITIALIZE ENGAGEMENT 
                    // TRACKING CONFIGURATION 
                    // PROFILE(S) FOR 
                    // THIS ENVIRONMENT. 
                    //$this->init_engagement_config();

                    //
                    // INITIALIZE INTERACT 
                    // UI PROFILE. 
                    $this->init_ui_interact_profile();

                    //$this->system_output_footer_html(CRNRSTN_SOAP_TUNNEL, true);

                    /**
                    DATA HANDLING ARCHITECTURES
                    -----
                    G :: HTTP $_GET REQUEST.
                    P :: HTTP $_POST REQUEST.
                    H :: PHP SERVER SESSION ($_SESSION SUPER GLOBAL ARRAY).
                    S :: CRNRSTN :: SSDTLA PACKET (SOAP WRAPPED ENCRYPTED PSSDTLA PACKET. THE BROWSER WILL TALK LIKE A SERVER).
                    J :: CRNRSTN :: PSSDTLA PACKET (OPENSSL ENCRYPTED JSON OBJECT).
                    C :: CARRIER PIGEON (AVIAN OF HOMING VARIANT)...OR BROWSER COOKIE...
                    D :: DATABASE (MySQLi CONNECTION).
                    R :: RUNTIME.
                    O :: SIMPLE OBJECT ACCESS PROTOCOL (NuSOAP 0.9.5, SOAP 1.1).
                    F :: SERVER LOCAL FILE SYSTEM.

                    GPHSJCDROF

                    */

//                    //
//                    // INITIALIZE CRNRSTN :: SOAP Services DATA TUNNEL LAYER PACKET - DSJPC
//                    // Note: DATABASE DATA STORAGE FORMAT WILL SHADOW/SUPPORT USE OF (S) AND (P)
//                    // ON A SESSION TO SESSION BASIS.
//                    $this->init_ssdtla_session_data_packet();

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
                 * Sunday, June 30, 2024 @ 1542 hrs.
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

        }else{

            //
            // THIS IS A SIMPLE 
            // CONFIG CHECK. 
            $this->oLog_output_ARRAY[] = $this->error_log(
                                                __METHOD__ . 
                                                ' performing simple config check ' . 
                                                'prior to loading of define_env_resource() ' . 
                                                'in the CRNRSTN :: config file . ', 
                                                __LINE__, 
                                                __METHOD__, 
                                                __FILE__, 
                                                $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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
    function config_load_static_application_data($data_type)
    {

        switch($data_type){
            case 'get_channel_system_parameters_ARRAY':

                return self::$R_http->config_load_static_application_data($data_type);

            break;
            case 'timezone_syntax_ARRAY':

                //return $this->oFINITE_EXPRESS->config_load_static_application_data($data_type, $this->oCRNRSTN);

            break;
            default:

                error_log(__LINE__ . 
                    ' env Unknown SWITCH ' . 
                    'CASE received. [' . 
                    strval($data_type) . 
                    '].');

            break;

        }

        return true;

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
    function set_openssl_digest_profile(
             $openssl_digest_profile = NULL, 
             $data_key = 'openssl_digest', 
             $data_type_family = 'CRNRSTN::RESOURCE')
    {

        if(!isset($openssl_digest_profile)){

            self::$openssl_digest_profile_ARRAY[$data_type_family][$data_key] = $this->get_resource(
                                                                                       'openssl_digest', 
                                                                                       0, 
                                                                                       'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        }else{

            self::$openssl_digest_profile_ARRAY[$data_type_family][$data_key] = $openssl_digest_profile;

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
    function set_openssl_cipher_profile(
             $openssl_cipher_profile = NULL, 
             $data_key = 'openssl_cipher', 
             $data_type_family = 'CRNRSTN::RESOURCE')
    {

        if(!isset($openssl_cipher_profile)){

            self::$openssl_cipher_profile_ARRAY[$data_type_family][$data_key] = $this->get_resource(
                                                                                       'openssl_cipher', 
                                                                                       0, 
                                                                                       'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        }else{

            self::$openssl_cipher_profile_ARRAY[$data_type_family][$data_key] = $openssl_cipher_profile;

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
    function set_hmac_algorithm_profile(
             $hmac_algorithm_profile = NULL, 
             $data_key = 'hmac_hash_algorithm', 
             $data_type_family = 'CRNRSTN::RESOURCE')
    {

        if(!isset($hmac_algorithm_profile)){

            self::$hmac_algorithm_profile_ARRAY[$data_type_family][$data_key] = $this->get_resource(
                                                                                       'hmac_hash_algorithm', 
                                                                                       0, 
                                                                                       'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        }else{

            self::$hmac_algorithm_profile_ARRAY[$data_type_family][$data_key] = $hmac_algorithm_profile;

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
    function isset_openssl_digest_profile(
             $data_key, 
             $data_type_family)
    {

        if(isset(self::$openssl_digest_profile_ARRAY[$data_type_family][$data_key])){

            return true;

        }

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
    function isset_openssl_cipher_profile(
             $data_key, 
             $data_type_family)
    {

        if(isset(self::$openssl_cipher_profile_ARRAY[$data_type_family][$data_key])){

            return true;

        }

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
    function isset_hmac_algorithm_profile(
             $data_key, 
             $data_type_family)
    {

        if(isset(self::$hmac_algorithm_profile_ARRAY[$data_type_family][$data_key])){

            return true;

        }

        return false;

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
    function get_openssl_digest_profile(
             $data_key, 
             $data_type_family, 
             $graceful_degrade = false)
    {

        if(isset(self::$openssl_digest_profile_ARRAY[$data_type_family][$data_key])){

            return self::$openssl_digest_profile_ARRAY[$data_type_family][$data_key];

        }

        if($graceful_degrade == true){

            return $this->get_resource(
                          'openssl_digest', 
                          0, 
                          'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        }

        return NULL;

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
    function get_openssl_cipher_profile(
             $data_key, 
             $data_type_family, 
             $graceful_degrade = true)
    {

        if(isset(self::$openssl_cipher_profile_ARRAY[$data_type_family][$data_key])){

            return self::$openssl_cipher_profile_ARRAY[$data_type_family][$data_key];

        }

        if($graceful_degrade == true){

            return $this->get_resource(
                          'openssl_cipher', 
                          0, 
                          'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        }

        return NULL;

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
    function get_hmac_algorithm_profile(
             $data_key, 
             $data_type_family, 
             $graceful_degrade = false)
    {

        if(isset(self::$hmac_algorithm_profile_ARRAY[$data_type_family][$data_key])){

            return self::$hmac_algorithm_profile_ARRAY[$data_type_family][$data_key];

        }

        if($graceful_degrade == true){

            return $this->get_resource(
                          'hmac_hash_algorithm', 
                          0, 
                          'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        }

        return NULL;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://aloneonahill.com/blog/if-php-were-british/
     * AUTHOR :: https://aloneonahill.com/blog/about-dave/
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function hello_world($is_bastard = true)
    {

        try{

            if($is_bastard == true){

                $str = 'Hello World.'; // bastard dialect

            }else{

                $str = 'Good morrow, fellow ' . 
                       'subjects of the crown.';

            }

            error_log('[lnum ' . __LINE__ . '] ' . 
                get_class() . ' exception! ' . 
                $str);
            throw new Exception('CRNRSTN :: v' . 
                $this->version_crnrstn() . ' :: ' . 
                $str . ' This is an exception handling test from ' . 
                $_SERVER['SERVER_NAME'] . ' (' . 
                $_SERVER['SERVER_ADDR'] . ').');

            if($this->is_bit_set($this->R_data['int_flag']['CRNRSTN_SCREEN_TEXT']) == true){

                $str .= '<br><br>' . $this->bit_stringout();

            }

            return $str;

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
             * Sunday, June 30, 2024 @ 1542 hrs.
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
     * @return
     * @access public
     *
     */
    function R_debug_mode()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed CRNRSTN_debug_mode() method 
         *       to simply, R_debug_mode(), 
         *       in order to align to 
         *       the crnrstn_registry_user 
         *       __construct() input 
         *       overhaul pivoting around 
         *       config_serial_override. 
         *       5 :: Saturday, June 20, 2026 @ 0355 hrs.
         *
         */

        return $this->get_crnrstn('R_debug_mode');

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function PHPMailer_debug_mode()
    {

        return $this->PHPMailer_debug_mode();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function WORDPRESS_debug_mode()
    {

        return $this->WORDPRESS_debug_mode();
        //return $this->retrieve_data_value(__METHOD__);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_crnrstn()
    {

        return $this->version_crnrstn();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_apache()
    {

        return $this->version_apache();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_apache_sysimg()
    {

        return $this->version_apache_sysimg();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_php()
    {

        return $this->version_php();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_soap()
    {

        return $this->version_soap();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_mysqli()
    {

        return $this->version_mysqli();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_openssl()
    {

        return $this->version_openssl();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_linux()
    {

        return $this->version_linux();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function system_resource_constants_ARRAY()
    {

        return $this->system_resource_constants_ARRAY();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function initialize_http_get_params()
    {

        self::$R_http->initialize_http_get_params();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function init_encrypt_profile()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize array of 
         * encryptable datatypes. 
         *
         */
        $this->encryptableDataTypes = $this->return_encryptable_data_types();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function consume_form_integration_packet()
    {

        return self::$R_http->consume_form_integration_packet();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function client_request_listen($listener_profile)
    {

        switch($listener_profile){
            //case CRNRSTN_ASSET_MAPPING:
            case $this->R_data['int_flag']['R_fs_map']:

                //
                // END OF CRNRSTN :: 
                // ENVIRONMENTAL CONFIG 
                // OPERATION. 
                $this->oLog_output_ARRAY[] = $this->error_log('You have reached the end ' . 
                                                    'of the CRNRSTN :: environmental ' . 
                                                    'detection and configuration process.', 
                                                    __LINE__, 
                                                    __METHOD__, 
                                                    __FILE__, 
                                                    $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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
                 * \LOG_EMERG            => 'system is unusable.'
                 * \LOG_ALERT            => 'action must be
                 *                          taken immediately'
                 * \LOG_CRIT             => 'critical conditions'
                 * \LOG_ERR              => 'error conditions'
                 * \LOG_WARNING          => 'warning conditions'
                 * \LOG_NOTICE           => 'normal, but
                 *                          significant, condition'
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
                $this->oLog_output_ARRAY[] = $this->error_log('CRNRSTN :: is now ' . 
                                                    'listening for requests.', 
                                                    __LINE__, 
                                                    __METHOD__, 
                                                    __FILE__, 
                                                    $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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
                error_log('[lnum ' . 
                    __LINE__ . 
                    '] [mthd ' . 
                    __METHOD__ . '] calling self::$R_http->' . 
                    'client_request_listen(' . 
                    $listener_profile . 
                    ').');

                return self::$R_http->client_request_listen($listener_profile);

            break;
            case 'RRS_MAP':

                return self::$R_http->client_request_listen($listener_profile);

            break;
            case 'SSDTLA':
            case 'PSSDTLA':
            default:

                //
                // END OF CRNRSTN :: 
                // ENVIRONMENTAL CONFIG 
                // OPERATION.
                $this->oLog_output_ARRAY[] = $this->error_log('You have reached the end of the CRNRSTN :: environmental detection and configuration process.', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                $this->oLog_output_ARRAY[] = $this->error_log('CRNRSTN :: is now listening for requests.', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                //error_log('[lnum ' . __LINE__ . 
                //    '] [mthd ' . __METHOD__ . '] env calling self::$R_http->' . 
                //    'client_request_listen.');
                return self::$R_http->client_request_listen($listener_profile);

            break;

        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function isset_crnrstn_services_http()
    {

        return self::$R_http->isset_crnrstn_services_http();

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

        return $this->oAdminAccount_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function update_admin_ARRAY($oAdmin_account_array)
    {

        $this->oAdminAccount_ARRAY = $oAdmin_account_array;

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
    function ui_content_module_out(
             $integer_constant, 
             $output_format = 'HTML')
    {

        switch($integer_constant){
            case $this->R_data['int_flag']['CRNRSTN_UI_INTERACT']:

                $tmp_array = $this->return_output_CRNRSTN_UI_MESSENGER();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_SOAP_TUNNEL']:

                $tmp_array = $this->return_output_CRNRSTN_SOAP_TUNNEL();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_WEB_ANALYTICS']:

                $tmp_array = $this->return_output_CRNRSTN_WEB_ANALYTICS();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_WEB_ENGAGEMENT']:

                $tmp_array = $this->return_output_CRNRSTN_WEB_ENGAGEMENT();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output.
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_CLIENT_SSDTLA']:

                $tmp_array = $this->return_output_CRNRSTN_CLIENT_SSDTLA();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION']:

                //$this->print_r_str(
                //       $integer_constant, 
                //       'ui_content_module_out $integer_constant.', 
                //       CRNRSTN_UI_PHPNIGHT, 
                //       __LINE__, 
                //       __METHOD__, 
                //       __FILE__);

                $tmp_array = $this->return_output_CRNRSTN_UI_DOCUMENTATION();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_RESOURCE_FOOTER']:

                $tmp_array = $this->return_output_CRNRSTN_UI_SYSTEM_FOOTER();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_RESOURCE_DEEP_LINK']:

                $tmp_array = $this->return_output_CRNRSTN_RESOURCE_DEEP_LINK();
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            case $this->R_data['int_flag']['CRNRSTN_RESPONSE_REPORT']:
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Edit: CHANGED TO $is_HTML = true
                 *       for testing before updates. 
                 *
                 *
                 * 5 :: Thursday, November 23, 2023 @ 1236 hrs.
                 *
                 */

                //error_log(__LINE__ . 
                //    ' env return_output_CRNRSTN_UI_' . 
                //    'SYSTEM_REPORT_RESPONSE_RETURN [' . 
                //    $output_format . 
                //    '].');
                //
                $tmp_array = $this->return_output_CRNRSTN_UI_SYSTEM_REPORT_RESPONSE_RETURN(true);
                $tmp_output = '';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Load output. 
                 *
                 */
                foreach($tmp_array as 
                    $key => $resource_content)
                {

                    $tmp_output .= $resource_content;

                }

                return $tmp_output;

            break;
            default:

                $this->error_log('The requested UI content ' . 
                       'module...honoring the provided ' . 
                       'integer constant, "' . 
                       $integer_constant . 
                       '", could not be found.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $this->R_data['int_flag']['CRNRSTN_BARNEY']);
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

                return '';

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
    function is_soap_data_tunnel_endpoint($set_value = NULL)
    {

        if(isset($set_value)){

            $this->is_soap_data_tunnel_endpoint = $set_value;

            return true;

        }else{

            return $this->is_soap_data_tunnel_endpoint;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_SOAP_TUNNEL()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Thursday, November 23, 2023 @ 1212 hrs.
         *
         * TODO :: Re-architect all 
         *         relevant use-cases. 
         *         5 :: Thursday, November 23, 2023 @ 1126 hrs.
         *
         * The Possibilities:
         *      $tmp_js_css_compress_mode = 'PROD'
         *      $tmp_js_css_compress_mode = 'DEV'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 $this->R_data['int_flag']['R_js_css_min_mode'], 
         *                 $this->R_data['int_flag']['R_js_css_min_mode'], 
         *                 $this->R_data['int_flag']['R_js_css_min_mode']);
         *
         */
        $tmp_js_css_compress_mode = $this->tidy_boolean(
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode']);
        switch($tmp_js_css_compress_mode){
            case 'DEV':

                error_log('[lnum ' . 
                    __LINE__ . ']' . 
                    ' [mthd ' . 
                    __METHOD__ . 
                    '] READY TO PROD/[' . 
                    $tmp_js_css_compress_mode . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "PROD/[DEV]".');

            break;
            default:
                //case 'PROD':

                error_log('[lnum ' . 
                    __LINE__ . ']' . 
                    ' [mthd ' . 
                    __METHOD__ . 
                    '] READY TO [' . 
                    $tmp_js_css_compress_mode . 
                    ']/DEV. Using tidy_boolean(), ' . 
                    'this should read as "[PROD]/DEV".');

            break;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: RE-ARCHITECT ALL 
         *         RELEVANT USE-CASES. 
         *         5 :: Thursday, November 23, 2023 @ 1126 hrs.
         *
         * The Possibilities:
         *      $tmp_asset_mapping_mode = 'ON'
         *      $tmp_asset_mapping_mode = 'OFF'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 $this->R_data['int_flag']['R_fs_map_css_lib'], 
         *                 $this->R_data['int_flag']['R_fs_map_css_lib'], 
         *                 $this->R_data['int_flag']['R_fs_map_css_lib']);
         *
         */
        $tmp_asset_mapping_mode = $this->tidy_boolean(
                                         $this->R_data['int_flag']['R_fs_map_css_lib'], 
                                         $this->R_data['int_flag']['R_fs_map_css_lib'], 
                                         $this->R_data['int_flag']['R_fs_map_css_lib']);
        switch($tmp_asset_mapping_mode){
            case 'OFF':

                error_log('[lnum ' . 
                    __LINE__ . '] ' . 
                    '[mthd ' . 
                    __METHOD__ . '] READY TO ON/[' . 
                    $tmp_asset_mapping_mode . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "ON/[OFF]".');

            break;
            default:
                //case 'ON':

                error_log('[lnum ' . 
                    __LINE__ . '] ' . 
                    '[mthd ' . 
                    __METHOD__ . '] READY TO [' . 
                    $tmp_asset_mapping_mode . 
                    ']/DEV. Using tidy_boolean(), ' . 
                    'this should read as "[ON]/OFF".');

            break;

        }

        //public function add(
        //                $data_value, 
        //                $data_key = NULL, 
        //                $data_type_family = 'CRNRSTN::RESOURCE', 
        //                $index = NULL, 
        //                $data_authorization_profile = 'R_channel_RUNTIME', 
        //                $ttl = 60)
        //{

        $this->R['kivotos']->R['usr']->form_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_xhr_root', 'crnrstn_xhr_root');

        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_interact_ui_sysdate', 'crnrstn_interact_ui_sysdate');
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_interact_ui_link_text_click', 'crnrstn_interact_ui_link_text_click');
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_request_source', 'crnrstn_request_source');
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_resource_initialize', 'crnrstn_resource_initialize');
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_interact_ui_loadbar_progress', 'crnrstn_interact_ui_loadbar_progress');
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_interact_ui_active_nav_links', 'crnrstn_interact_ui_active_nav_links');
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_pssdtl_packet', 'crnrstn_pssdtl_packet', $this->return_crnrstn_data_packet('R_channel_PSSDTLA'), CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_ssdtla_form_serial', 'crnrstn_ssdtla_form_serial', $this->salt(), CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_ssdtla_timestamp', 'crnrstn_ssdtla_timestamp', $this->R['kivotos']->R['usr']->return_micro_time());
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_ssdtl_packet_ttl', 'crnrstn_ssdtl_packet_ttl', $this->R['kivotos']->R['usr']->return_ssdtl_packet_ttl(), CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_client_user_agent', 'crnrstn_client_user_agent', $_SERVER['HTTP_USER_AGENT'], CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_server_ip', 'crnrstn_soap_service_server_ip', $_SERVER['SERVER_ADDR'], CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_client_ip', 'crnrstn_soap_service_client_ip', $this->client_ip(), CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_stime', 'crnrstn_soap_service_stime', $this->starttime);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_rtime', 'crnrstn_soap_service_rtime', $this->wall_time());
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_framework_version','crnrstn_soap_service_framework_version', $this->R['kivotos']->R['usr']->proper_version('SOAP'));
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_encoding', 'crnrstn_soap_service_encoding', $this->soap_defencoding());
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_session_client_auth_key', 'crnrstn_session_client_auth_key', $this->session_client_auth_key, CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_session_client_id', 'crnrstn_session_client_id', $this->session_client_id, CRNRSTN_INPUT_REQUIRED);
        $this->R['kivotos']->R['usr']->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_php_sessionid', 'crnrstn_php_sessionid', session_id(), CRNRSTN_INPUT_REQUIRED);

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $tmp_show_comments = true;
         * if($this->is_serialized_bit_set('crnrstn_html_comments_mode', 
         *     $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($tmp_show_comments == true)
            $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI SOAP-SERVICES DATA TUNNEL LAYER MODULE') . '
';

        error_log(__LINE__ . 
            ' env INTERACT UI SOAP-' . 
            'SERVICES DATA TUNNEL ' . 
            'LAYER MODULE.');

        $tmp_resource_initialize = '';
        $tmp_request_family = $this->return_crnrstn_asset_family();
        if($tmp_request_family == 'module_key' || 
            $tmp_request_family == 'meta')
        {

            $tmp_resource_initialize = $this->return_response_map_asset_meta_key();
            //error_log(__LINE__ . ' env $tmp_resource_initialize[' . $tmp_resource_initialize . '].');

        }

        $tmp_http_get_data_params = $this->return_http_data_services_meta('get');

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            $tmp_str = '<div id="crnrstn_soap_data_tunnel_form_shell" class="crnrstn_hidden"><form action="#" method="post" id="crnrstn_soap_data_tunnel_frm" name="crnrstn_soap_data_tunnel_frm" enctype="multipart/form-data"><textarea id="crnrstn_soap_srvc_data" name="crnrstn_soap_srvc_data" cols="130" rows="5">CRNRSTN :: SOAP-SERVICES DATA TUNNEL LAYER PACKET (SSDTLP)</textarea><button type="submit">SUBMIT</button><input type="hidden" id="crnrstn_xhr_root" name="crnrstn_xhr_root" value="' . $this->crnrstn_http_endpoint() . '"><input type="hidden" id="crnrstn_interact_ui_module_programme" name="crnrstn_interact_ui_module_programme" value="' . $this->R['kivotos']->R['ui_trm']->return_interact_ui_module_programme() . '"><input type="hidden" id="crnrstn_page_load_ttl" name="crnrstn_page_load_ttl" value="' . $this->get_resource('page_load_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '"><input type="hidden" id="crnrstn_inactivity_refresh_ttl" name="crnrstn_inactivity_refresh_ttl" value="' . $this->get_resource('inactivity_refresh_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '"><input type="hidden" id="crnrstn_ssdtla_module_sync_ttl" name="crnrstn_ssdtla_module_sync_ttl" value="' . $this->get_resource('ssdtla_module_sync_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '"><input type="hidden" id="crnrstn_share_module_inactivity_close_ttl" name="crnrstn_share_module_inactivity_close_ttl" value="' . $this->get_resource('share_module_inactivity_close_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '"><input type="hidden" id="crnrstn_debug_logging_output_channel" name="crnrstn_debug_logging_output_channel" value="' . $this->get_resource('debug_logging_output_channel', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '"><input type="hidden" id="crnrstn_client_debug_mode" name="crnrstn_client_debug_mode" value="' . $this->get_resource('client_debug_mode', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '"><input type="hidden" id="crnrstn_interact_ui_ttl" name="crnrstn_interact_ui_ttl" value="' . $this->return_interact_ui_ttl('interact_ui_ttl') . '"><input type="hidden" id="crnrstn_interact_ui_month_abbrev" name="crnrstn_interact_ui_month_abbrev" value="' . $this->return_interact_ui_ttl('interact_ui_month_abbrev') . '"><input type="hidden" id="crnrstn_interact_ui_month" name="crnrstn_interact_ui_month" value="' . $this->return_interact_ui_ttl('interact_ui_month') . '"><input type="hidden" id="crnrstn_interact_ui_day_abbrev" name="crnrstn_interact_ui_day_abbrev" value="' . $this->return_interact_ui_ttl('interact_ui_day_abbrev') . '"><input type="hidden" id="crnrstn_interact_ui_day" name="crnrstn_interact_ui_day" value="' . $this->return_interact_ui_ttl('interact_ui_day') . '"><input type="hidden" id="crnrstn_request_source" name="crnrstn_request_source" value=""><input type="hidden" id="crnrstn_resource_initialize" name="crnrstn_resource_initialize" value="' . $tmp_resource_initialize . '"><input type="hidden" id="crnrstn_interact_data_tunnel_get_params" name="crnrstn_interact_data_tunnel_get_params" value="' . $tmp_http_get_data_params . '"><input type="hidden" id="crnrstn_soap_service_client_ip" name="crnrstn_soap_service_client_ip" value="' . $this->data_encrypt($this->client_ip()) . '">' . $this->R['kivotos']->R['ui_trm']->return_interact_ui_module_programme('hidden_hash_input_array');
            $tmp_str .= $this->R['kivotos']->R['usr']->ui_content_module_out('R_channel_SSDTLA', 'crnrstn_soap_data_tunnel_form') . '</form><div id="crnrstn_interact_ui_loadbar_IMAGE_CACHE">' . $this->return_creative('UI_PAGELOAD_INDICATOR', CRNRSTN_HTML) . '</div><div id="crnrstn_interact_ui_mit_license_src" class="crnrstn_hidden"></div><div id="crnrstn_interact_ui_theme_profile" class="crnrstn_hidden"></div></div>';
            $this->channel_authorization_data_reporting_sync($tmp_str, 'PSSDTLA_ARCHITECTURE', 'DDO', 'pssdtla', 'R_channel_PSSDTLA');
            $tmp_str_array[] = $tmp_str;

        }else{

            $tmp_str = '<div id="crnrstn_soap_data_tunnel_form_shell" class="crnrstn_hidden">
    <form action="#" method="post" id="crnrstn_soap_data_tunnel_frm" name="crnrstn_soap_data_tunnel_frm" enctype="multipart/form-data">
        <textarea id="crnrstn_soap_srvc_data" name="crnrstn_soap_srvc_data" cols="130" rows="5">CRNRSTN :: SOAP-SERVICES DATA TUNNEL LAYER PACKET (SSDTLP)</textarea>
        <button type="submit">SUBMIT</button>
        <input type="hidden" id="crnrstn_xhr_root" name="crnrstn_xhr_root" value="' . $this->crnrstn_http_endpoint() . '">
        <input type="hidden" id="crnrstn_interact_ui_sysdate" name="crnrstn_interact_ui_sysdate" value="' . date('F j, Y H:i:s') . '">
        <input type="hidden" id="crnrstn_interact_ui_module_programme" name="crnrstn_interact_ui_module_programme" value="' . $this->R['kivotos']->R['ui_trm']->return_interact_ui_module_programme() . '">
        <input type="hidden" id="crnrstn_page_load_ttl" name="crnrstn_page_load_ttl" value="' . $this->get_resource('page_load_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '">
        <input type="hidden" id="crnrstn_inactivity_refresh_ttl" name="crnrstn_inactivity_refresh_ttl" value="' . $this->get_resource('inactivity_refresh_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '">
        <input type="hidden" id="crnrstn_ssdtla_module_sync_ttl" name="crnrstn_ssdtla_module_sync_ttl" value="' . $this->get_resource('ssdtla_module_sync_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '">
        <input type="hidden" id="crnrstn_share_module_inactivity_close_ttl" name="crnrstn_share_module_inactivity_close_ttl" value="' . $this->get_resource('share_module_inactivity_close_ttl', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '">
        <input type="hidden" id="crnrstn_debug_logging_output_channel" name="crnrstn_debug_logging_output_channel" value="' . $this->get_resource('debug_logging_output_channel', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '">
        <input type="hidden" id="crnrstn_client_debug_mode" name="crnrstn_client_debug_mode" value="' . $this->get_resource('client_debug_mode', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS') . '">
        <input type="hidden" id="crnrstn_interact_ui_ttl" name="crnrstn_interact_ui_ttl" value="' . $this->return_interact_ui_ttl('interact_ui_ttl') . '">
        <input type="hidden" id="crnrstn_interact_ui_month_abbrev" name="crnrstn_interact_ui_month_abbrev" value="' . $this->return_interact_ui_ttl('interact_ui_month_abbrev') . '">
        <input type="hidden" id="crnrstn_interact_ui_month" name="crnrstn_interact_ui_month" value="' . $this->return_interact_ui_ttl('interact_ui_month') . '">
        <input type="hidden" id="crnrstn_interact_ui_day_abbrev" name="crnrstn_interact_ui_day_abbrev" value="' . $this->return_interact_ui_ttl('interact_ui_day_abbrev') . '">
        <input type="hidden" id="crnrstn_interact_ui_day" name="crnrstn_interact_ui_day" value="' . $this->return_interact_ui_ttl('interact_ui_day') . '">
        <input type="hidden" id="crnrstn_request_source" name="crnrstn_request_source" value="">
        <input type="hidden" id="crnrstn_resource_initialize" name="crnrstn_resource_initialize" value="' . $tmp_resource_initialize . '">
        <input type="hidden" id="crnrstn_interact_data_tunnel_get_params" name="crnrstn_interact_data_tunnel_get_params" value="' . $tmp_http_get_data_params . '">
        <input type="hidden" id="crnrstn_soap_service_client_ip" name="crnrstn_soap_service_client_ip" value="' . $this->data_encrypt($this->client_ip()) . '">
' . $this->R['kivotos']->R['ui_trm']->return_interact_ui_module_programme('hidden_hash_input_array');

            $tmp_str .= $this->R['kivotos']->R['usr']->ui_content_module_out('R_channel_SSDTLA', 'crnrstn_soap_data_tunnel_form') . '</form>
    <div id="crnrstn_interact_ui_loadbar_IMAGE_CACHE">' . $this->return_creative('UI_PAGELOAD_INDICATOR', CRNRSTN_HTML) . '</div>
    <div id="crnrstn_interact_ui_mit_license_src" class="crnrstn_hidden"></div>
    <div id="crnrstn_interact_ui_theme_profile" class="crnrstn_hidden"></div>
</div>
';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * TODO :: MULTI-CHANNEL TESTING 
             *         AND DEVELOPMENT; 
             *         FIX CHANNEL REPORTING...,
             *         AS SYNC CRASHES 
             *         THE PSSDTLA!.
             *
             * $this->channel_authorization_data_reporting_sync(
             *        $tmp_str, 
             *        'PSSDTLA_ARCHITECTURE', 
             *        'DDO', 
             *        'pssdtla', 
             *        'R_channel_PSSDTLA');
             *
             */
            $tmp_str_array[] = $tmp_str;

        }

        if($tmp_show_comments == true){

            $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                      'SOAP-SERVICES DATA ' . 
                                      'TUNNEL LAYER MODULE', 
                                      'END') . '
';
        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_interact_ui_ttl($array_index)
    {

        $tmp_str = '';
        $tmp_ARRAY = $this->get_resource(
                            $array_index, 
                            0, 
                            'CRNRSTN::RESOURCE::GENERAL_SETTINGS');

        foreach($tmp_ARRAY as 
            $index => $ttl_element)
        {

            $tmp_str .= $ttl_element . '|';

        }

        $tmp_str = $this->strrtrim($tmp_str, '|');

        return $tmp_str;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_WEB_ANALYTICS()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Thursday, November 23, 2023 @ 1214 hrs.
         *
         * TODO :: RE-ARCHITECT ALL 
         *         RELEVANT USE-CASES.
         *         5 :: Thursday, November 23, 2023 @ 1126 hrs.
         *
         * The Possibilities:
         *      $tmp_js_css_compress_mode = 'PROD'
         *      $tmp_js_css_compress_mode = 'DEV'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
         *                 (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
         *                 (int) $this->R_data['int_flag']['R_js_css_min_mode']);
         *
         */
        $tmp_js_css_compress_mode = $this->tidy_boolean(
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode']);
        switch($tmp_js_css_compress_mode){
            case 'DEV':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO PROD/[' . 
                    $tmp_js_css_compress_mode . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "PROD/[DEV]".');

            break;
            default:
                //case 'PROD':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO [' . 
                    $tmp_js_css_compress_mode . 
                    ']/DEV. Using tidy_boolean(), ' . 
                    'this should read as "[PROD]/DEV".');

            break;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: RE-ARCHITECT ALL 
         *         RELEVANT USE-CASES.
         *         5 :: Thursday, November 23, 2023 @ 1126 hrs.
         *
         * The Possibilities:
         *      $tmp_asset_mapping_mode = 'ON'
         *      $tmp_asset_mapping_mode = 'OFF'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 $this->R_data['int_flag']['R_fs_map_css_lib'], 
         *                 $this->R_data['int_flag']['R_fs_map_css_lib'], 
         *                 $this->R_data['int_flag']['R_fs_map_css_lib']);
         *
         */
        $tmp_asset_mapping_mode = $this->tidy_boolean(
                                         $this->R_data['int_flag']['R_fs_map_css_lib'], 
                                         $this->R_data['int_flag']['R_fs_map_css_lib'], 
                                         $this->R_data['int_flag']['R_fs_map_css_lib']);
        switch($tmp_asset_mapping_mode){
            case 'OFF':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO ON[' . 
                    $tmp_asset_mapping_mode . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "ON/[OFF]".');

            break;
            default:
                //case 'ON':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO [' . 
                    $tmp_asset_mapping_mode . 
                    ']OFF. Using tidy_boolean(), ' . 
                    'this should read as "ON/[OFF]".');

            break;

        }

        $tmp_str_array = array();

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');
        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'ANALYTICS SEO MODULE');

            }

            $tmp_str_array[] = $this->return_module_content_seo_analytics();

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'ANALYTICS SEO MODULE', 'END');

            }

        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'ANALYTICS SEO MODULE') . '
';

            }

            $tmp_str_array[] = $this->return_module_content_seo_analytics();

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'ANALYTICS SEO MODULE', 'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_WEB_ENGAGEMENT()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Thursday, November 23, 2023 @ 1215 hrs.
         *
         * TODO :: Re-architect all 
         *         relevant use-cases.
         *         5 :: Thursday, November 23, 2023 @ 1126 hrs.
         *
         * The Possibilities:
         *      $tmp_js_css_compress_mode = 'PROD'
         *      $tmp_js_css_compress_mode = 'DEV'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
         *                 (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
         *                 (int) $this->R_data['int_flag']['R_js_css_min_mode']);
         *
         */
        $tmp_js_css_compress_mode = $this->tidy_boolean(
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode'], 
                                           (int) $this->R_data['int_flag']['R_js_css_min_mode']);
        switch($tmp_js_css_compress_mode){
            case 'DEV':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO PROD/[' . 
                    $tmp_js_css_compress_mode . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "PROD/[DEV]".');

            break;
            default:
                //case 'PROD':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO [' . 
                    $tmp_js_css_compress_mode . 
                    ']/DEV. Using tidy_boolean(), ' . 
                    'this should read as "[PROD]/DEV".');

            break;

        }

        /**
         * TODO :: RE-ARCHITECT ALL 
         *         RELEVANT USE-CASES. 
         *         5 :: Thursday, November 23, 2023 @ 1126 hrs.
         *
         * The Possibilities:
         *      $tmp_asset_mapping_mode = 'ON'
         *      $tmp_asset_mapping_mode = 'OFF'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 $this->R_data['int_flag']['R_fs_map_css_lib'], 
         *                 $this->R_data['int_flag']['R_fs_map_css_lib'], 
         *                 $this->R_data['int_flag']['R_fs_map_css_lib']);
         *
         */
        $tmp_asset_mapping_mode = $this->tidy_boolean(
                                         $this->R_data['int_flag']['R_fs_map_css_lib'], 
                                         $this->R_data['int_flag']['R_fs_map_css_lib'], 
                                         $this->R_data['int_flag']['R_fs_map_css_lib']);
        switch($tmp_asset_mapping_mode){
            case 'OFF':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO ON/[' . 
                    $tmp_asset_mapping_mode . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "ON/[OFF]".');

            break;
            default:
                //case 'ON':

                error_log('[lnum ' . __LINE__ . '] ' . 
                    '[mthd ' . __METHOD__ . '] READY TO ' . 
                    $tmp_asset_mapping_mode . 
                    '/[OFF]. Using tidy_boolean(), ' . 
                    'this should read as "ON/[OFF]".');

            break;

        }

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           CRNRSTN_HTML_COMMENTS_SILENT_GOLD) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'ENGAGEMENT MODULE');

            }

            $tmp_str_array[] = $this->return_module_content_seo_engagement();

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'ENGAGEMENT MODULE', 
                                          'END');

            }

        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'ENGAGEMENT MODULE') . '
';

            }

            $tmp_str_array[] = $this->return_module_content_seo_engagement();

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'ENGAGEMENT MODULE', 
                                          'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_RESOURCE_DEEP_LINK()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: January 14, 2023 @ 0509 hrs.
         *
         * Notes:
         * What about MIT license 
         * deep link?
         *
         * What about deep link for 
         * an article, a blog post, 
         * a landing page, etc.; 
         * the King's highway for 
         * page return. 
         *
         * What about static page 
         * return that does not use 
         * CRNRSTN_JS to load the 
         * content after DOM Ready? 
         *
         * Any use? 
         *
         */

        $tmp_str = '';
        $tmp_node_cnt = 0;
        $tmp_ARRAY = array();

        error_log(__LINE__  . 
            ' env LET THIS BREAK. ' . 
            'RE-WORKING...$_GET[]' . 
            '...WELL, ...SOON.');

        $tmp_crnrstn_request_ugc_val = $this->oCRNRSTN_RRS_MAP->get_salt_ugc();

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         * 
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if(strlen($tmp_crnrstn_request_ugc_val) > 0){

            error_log(__LINE__ . 
                ' env return_output_CRNRSTN_' . 
                'RESOURCE_DEEP_LINK RESPONSE RETURN [' . 
                $tmp_crnrstn_request_ugc_val . 
                '].');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * DOCUMENT. 
             *
             */
            $tmp_document_str = $this->oINTERACT_UI_HTML_MGR->out_ui_module_html_system_documentation_page($tmp_crnrstn_request_ugc_val);
            $tmp_ARRAY[] = '<div id="crnrstn_deep_link_src_node_' . 
                           $tmp_node_cnt . '">' . 
                           $tmp_document_str . 
                           '</div>';
            $tmp_node_cnt++;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * NAVIGATION. 
             *
             */
            $tmp_nav_str = $this->oINTERACT_UI_HTML_MGR->out_ui_module_html_system_documentation_nav();
            $tmp_hash_str = $this->oDATA_TUNNEL_SERVICES_MGR->retrieve_interact_ui_module_hash('crnrstn_interact_ui_documentation_side_nav_src');

            error_log(__LINE__ . 
                ' env DEEP LINK HTML PAGE ' . 
                'LOAD INJECT $tmp_hash_str[' . 
                $tmp_hash_str . ']. $tmp_nav_str[' . 
                $tmp_nav_str . 
                '].');
            $tmp_ARRAY[] = '<div id="crnrstn_deep_link_hash_node_' . 
                           $tmp_node_cnt . '">' . 
                           $tmp_hash_str . 
                           '</div>';
            $tmp_ARRAY[] = '<div id="crnrstn_deep_link_src_node_' . 
                           $tmp_node_cnt . '">' . 
                           $tmp_nav_str . 
                           '</div>';
            $tmp_node_cnt++;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * SYSTEM FOOTER. 
             *
             */
            $tmp_footer_str = $this->oINTERACT_UI_HTML_MGR->out_ui_module_html_system_footer_content_container();
            $tmp_ARRAY[] = '<div id="crnrstn_deep_link_src_node_' . 
                           $tmp_node_cnt . '">' . 
                           $tmp_footer_str . 
                           '</div>';
            $tmp_node_cnt++;

        }

        if($tmp_show_comments == true){

            $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                'DEEP LINK MODULE');

        }

        $tmp_str_array[] = '<div id="crnrstn_interact_ui_deep_link_src" class="crnrstn_hidden">
<div id="crnrstn_deep_link_src_node_count">' . 
$tmp_node_cnt . '</div>';

        foreach($tmp_ARRAY as 
            $index => $str_src)
        {

            $tmp_str_array[] = $str_src;

        }

        $tmp_str_array[] = '</div>';

        if($tmp_show_comments == true){

            $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                      'DEEP LINK MODULE', 
                                      'END');

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_UI_SYSTEM_FOOTER()
    {

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');
        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SYSTEM FOOTER MODULE');

            }

            $tmp_str_array[] = '<div id="crnrstn_interact_ui_' . 
                               'system_footer_src" class="' . 
                               'crnrstn_hidden"></div><div ' . 
                               'id="crnrstn_ui_system_footer_shell" ' . 
                               'class="crnrstn_ui_system_footer_shell">' . 
                               '</div>';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SYSTEM FOOTER MODULE', 
                                          'END');

            }

        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'SYSTEM FOOTER MODULE') . '
';

            }

            $tmp_str_array[] = '        <div id="crnrstn_interact_' . 
                               'ui_system_footer_src" class="crnrstn_hidden"></div>
        <div id="crnrstn_ui_system_footer_shell" class="' . 
                               'crnrstn_ui_system_footer_shell"></div>
        ';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SYSTEM FOOTER MODULE', 'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_UI_SYSTEM_REPORT_RESPONSE_RETURN($is_HTML = true)
    {

        $tmp_str_array = array();
        $tmp_show_comments = true;
        $tmp_comment_begin = '';
        $tmp_comment_end = '';

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');
        /* if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: READY FOR IMPLEMENTATION:
         *
         * The Possibilities:
         *      $tmp_content_type = 'HTML'
         *      $tmp_content_type = 'TEXT'
         *
         * See, $oCRNRSTN->tidy_boolean(
         *                 $is_HTML, 
         *                 CRNRSTN_STRING, 
         *                 $this->R_data['int_flag']['R_bool_is_html']);
         *
         */
        $tmp_content_type = $this->tidy_boolean(
                                   $is_HTML, 
                                   $this->R_data['int_flag']['R_string'], 
                                   (int) $this->R_data['int_flag']['R_bool_is_html']);

        switch($tmp_content_type){
            case 'TEXT':

                error_log('[lnum ' . __LINE__ . ']' .
                    ' [mthd ' . __METHOD__ . '] READY [' . 
                    $tmp_content_type . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "[TEXT]".');

            break;
            default:
                //case 'HTML':

                error_log('[lnum ' . __LINE__ . ']' .
                    ' [mthd ' . __METHOD__ . '] READY [' . 
                    $tmp_content_type . 
                    ']. Using tidy_boolean(), ' . 
                    'this should read as "[HTML]". ' . 
                    'Confirm and then delete ' . 
                    'this message.');

            break;

        }

        //
        // CRNRSTN :: MEMORY USAGE PERFORMANCE REPORTING.
        $is_HTML = false;
        if($is_HTML == 'HTML'){

            $is_HTML = true;

        }

        $mem_report_queue = $this->get_resource('mem_rpt_system_page_return_statistics_module', 0, 'CRNRSTN::RESOURCE::REPORTING');
        $tmp_txt_break = '
';
        $tmp_mem_str = $this->mem_report(
                              $mem_report_queue, 
                              'R_string', 
                              10, 
                              false, 
                              $is_HTML, 
                              $tmp_txt_break, 
                              '<br>');

        //
        // GENERATE SOCIAL MEDIA CONTENT PERFORMANCE REPORT.
        $tmp_social_meta_integrations_ARRAY = $this->return_output_CRNRSTN_SOCIAL_MEDIA_META_REPORT();

        switch($output_format){
            case 'HTML':

                $tmp_min_version = false;
                if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

                    $tmp_min_version = true;

                }

                if($tmp_show_comments == true){

                    $tmp_comment_begin = $this->html_version_burn('INTERACT UI SYSTEM REPORT OUTPUT :: RESPONSE RETURN RESOURCES CONSUMPTION');

                    $tmp_str_array[] = '
' . $tmp_comment_begin . '
';

                }

                $tmp_hashed_html = '';
                $tmp_hashed_html_out = '';
                $tmp_SSL_ENABLED = 'FALSE';
                if($this->is_SSL == true){

                    $tmp_SSL_ENABLED = 'TRUE';

                }

                /*
                $tmp_ARRAY[$i]['locale_identifier>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('locale_identifier', $i);
                $tmp_ARRAY[$i]['region_variant>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('region_variant', $i);
                $tmp_ARRAY[$i]['factor_weighting>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('factor_weighting', $i);
                $tmp_ARRAY[$i]['iso_language_nomination>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('iso_language_nomination', $i);
                $tmp_ARRAY[$i]['native_nomination>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('native_nomination', $i);
                $tmp_ARRAY[$i]['iso_639-1_2002>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('iso_639-1_2002', $i);
                $tmp_ARRAY[$i]['iso_639-2_1998>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('iso_639-2_1998', $i);
                $tmp_ARRAY[$i]['iso_639-3_2007>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('iso_639-3_2007', $i);
                $tmp_ARRAY[$i]['locale_identifier>'] = $oCRNRSTN_LANG_MGR->return_lang_pref_data('locale_identifier', $i);

                <language>
                    <language_preference>
                        <request_id timestamp="2022-11-11 14:21:01.974633">xzPlvuvDL2</request_id>
                        <request_referer>http://172.16.225.139/lightsaber.crnrstn.evifweb.com/</request_referer>
                        <locale_identifier>en</locale_identifier>
                        <region_variant>US</region_variant>
                        <factor_weighting>0.9</factor_weighting>
                        <iso_language_nomination>English</iso_language_nomination>
                        <native_nomination><![CDATA[English]]></native_nomination>
                        <iso_639-1_2002>en</iso_639-1_2002>
                        <iso_639-2_1998>eng</iso_639-2_1998>
                        <iso_639-3_2007>eng</iso_639-3_2007>
                    </language_preference>
                    <language_preference>
                        <request_id timestamp="2022-11-11 14:21:01.974841">0McMrF9QOg</request_id>
                        <request_referer>http://172.16.225.139/lightsaber.crnrstn.evifweb.com/</request_referer>
                        <locale_identifier>zh</locale_identifier>
                        <region_variant>CN</region_variant>
                        <factor_weighting>0.8</factor_weighting>
                        <iso_language_nomination>Chinese</iso_language_nomination>
                        <native_nomination><![CDATA[中文 (Zhōngwén), 汉语, 漢語]]></native_nomination>
                        <iso_639-1_2002>zh</iso_639-1_2002>
                        <iso_639-2_1998>zho</iso_639-2_1998>
                        <iso_639-3_2007>zho</iso_639-3_2007>
                    </language_preference>
                    <language_preference>
                        <request_id timestamp="2022-11-11 14:21:01.974927">3oU3N6Eyiy</request_id>
                        <request_referer>http://172.16.225.139/lightsaber.crnrstn.evifweb.com/</request_referer>
                        <locale_identifier>zh</locale_identifier>
                        <region_variant></region_variant>
                        <factor_weighting>0.7</factor_weighting>
                        <iso_language_nomination>Chinese</iso_language_nomination>
                        <native_nomination><![CDATA[中文 (Zhōngwén), 汉语, 漢語]]></native_nomination>
                        <iso_639-1_2002>zh</iso_639-1_2002>
                        <iso_639-2_1998>zho</iso_639-2_1998>
                        <iso_639-3_2007>zho</iso_639-3_2007>
                    </language_preference>
                </language>

                */

                //
                // SOCIAL MEDIA CONTENT PERFORMANCE REPORT.
                $tmp_social_meta_integrations = $tmp_social_meta_integrations_ARRAY[$output_format];

                $tmp_lang_ARRAY = $this->return_language_iso_profile();
                $tmp_lang_cnt = count($tmp_lang_ARRAY);

                $tmp_lang_report = '';
                if($tmp_lang_cnt > 0){

                    $tmp_lang_report = 'Accept-Language: ';

                    //
                    // BUILD LANGUAGE REPORT
                    for($ii = 0; $ii < $tmp_lang_cnt; $ii++){

                        $tmp_lang_report .= $tmp_lang_ARRAY[$ii]['native_nomination'] . '[' . $tmp_lang_ARRAY[$ii]['locale_identifier'] . '], ';

                    }

                    $tmp_lang_report = $this->strrtrim($tmp_lang_report, ', ');
                    $tmp_lang_report .= '.';

                }

                //
                // BYTES HASH REPORT
                $tmp_total_bytes = 0;
                foreach($this->total_bytes_hashed_ARRAY as $algo => $bytes){

                    $tmp_star_char = '&nbsp;';
                    $tmp_total_bytes += $bytes;

                    if($algo == $this->system_hash_algo()){

                        $tmp_star_char = '*';

                    }

                    if($tmp_min_version == true){

                        $tmp_hashed_html .= '<div class="crnrstn_documentation_page_stats_hash_shell">';
                        $tmp_hashed_html .= '<div class="crnrstn_documentation_page_stats_hash_algo">' . $tmp_star_char . $algo . ':</div><div class="crnrstn_documentation_page_stats_hash_algo_bytes">'. $this->return_bytes($bytes) . '</div>';
                        $tmp_hashed_html .= '</div><div class="crnrstn_cb"></div>';

                    }else{

                        $tmp_hashed_html .= '<div class="crnrstn_documentation_page_stats_hash_shell">';
                        $tmp_hashed_html .= '   <div class="crnrstn_documentation_page_stats_hash_algo">' . $tmp_star_char . $algo . ':</div>
                                                                    <div class="crnrstn_documentation_page_stats_hash_algo_bytes">'. $this->return_bytes($bytes) . '</div>';
                        $tmp_hashed_html .= '</div><div class="crnrstn_cb"></div>';

                    }

                }

                $tmp_hashed_html_out .= '<div class="crnrstn_documentation_page_stats_hash_shell">';
                $tmp_hashed_html_out .= '<div class="crnrstn_documentation_page_stats_hash_total">Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>hashed: ' . $this->return_bytes($tmp_total_bytes, 5) . '</div>';
                $tmp_hashed_html_out .= '</div>';
                $tmp_hashed_html_out .= $tmp_hashed_html;

                $tmp_referer = '';
                if($tmp_min_version == true){

                    if(isset($_SERVER['HTTP_REFERER'])){

                        $tmp_referer = 'Referer: ' . $_SERVER['HTTP_REFERER'] . '<br>';

                    }

                }else{

                    if(isset($_SERVER['HTTP_REFERER'])){

                        $tmp_referer = 'Referer: ' . $_SERVER['HTTP_REFERER'] . '<br>
';

                    }

                }

                //
                // FOR READABILITY, WE ARE NOW BYPASSING THE MIN/PROD VERSION (EVERYTHING ON ONE LINE) OF THE REPORT.
                // IF (OR BEFORE) TURNING THIS BACK ON...BE SURE TO SYNC ALL CONTENT WITH THE DEV VERSION. THX!

                $tmp_min_version = false;
                if($tmp_min_version == true){

                    $tmp_report = '<p style="margin-bottom:0;">Response returned in {CRNRSTN_DYNAMIC_CONTENT_MODULE::DOCUMENT_RESPONSE_TIME}.<br><br>CLIENT ::<br>Returned page size (in text data): {CRNRSTN_DYNAMIC_CONTENT_MODULE::DOCUMENT_PAGE_SIZE}.<br>' . $tmp_referer . 'Device type: ' . $this->device_type() . '<br>Accept-Language: ' . $this->return_client_header_value('Accept-Language') . '<br>' . $tmp_lang_report . '<br><br>SOCIAL MEDIA INTEGRATIONS ::<br>' . $tmp_social_meta_integrations . '<br><br>SERVER ::<br>SERVER ::<br>Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>stored: ' . $this->return_bytes($this->return_total_bytes_stored(), 5) . '</p>' . $tmp_hashed_html_out . '<p style="margin-top:0;">Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>encrypted: ' . $this->return_bytes($this->total_bytes_encrypted, 5) . '<br>Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>decrypted: ' . $this->return_bytes($this->total_bytes_decrypted, 5) . '<br>Server name: ' . $_SERVER['SERVER_NAME'] . '<br>Server address: ' . $_SERVER['SERVER_ADDR'] . '<br>SSL enabled: ' . $tmp_SSL_ENABLED . '<br>Request time: ' . $this->start_time() . '</p><div class="crnrstn_cb_20"></div><div class="crnrstn_documentation_page_stats_dagger_key_shell"><div class="crnrstn_documentation_page_stats_dagger_key_dag">&dagger;</div><div class="crnrstn_documentation_page_stats_dagger_key_description"><p>A statistic reflecting server resource consumption and performance requirements related to returning the content for this request.</p></div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb_10"></div><div class="crnrstn_documentation_page_stats_dagger_key_shell"><div class="crnrstn_documentation_page_stats_dagger_key_dag">*</div><div class="crnrstn_documentation_page_stats_dagger_key_description"><p>System default hashing algorithm.</p></div><div class="crnrstn_cb"></div></div><div class="crnrstn_cb_40"></div><p>[' . $this->return_micro_time() . '] [rtime ' . $this->wall_time() . ' secs]</p>';
                    $tmp_str_array[] = $tmp_report;

                    if($tmp_show_comments == true){

                        $tmp_str_array[] = $this->html_version_burn('INTERACT UI SYSTEM REPORT', 'END');

                    }

                }else{

                    $tmp_report = '<p style="margin-bottom:0;">Response returned in {CRNRSTN_DYNAMIC_CONTENT_MODULE::DOCUMENT_RESPONSE_TIME}.<br><br>

CLIENT ::<br>
Returned page size (in text data): {CRNRSTN_DYNAMIC_CONTENT_MODULE::DOCUMENT_PAGE_SIZE}.<br>
' . $tmp_referer . 'Device type: ' . $this->device_type() . '<br>
Accept-Language: ' . $this->return_client_header_value('Accept-Language') . '<br>
' . $tmp_lang_report . '<br><br>

SOCIAL MEDIA INTEGRATIONS ::<br>
' . $tmp_social_meta_integrations . '<br><br>

SERVER ::<br>
Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>stored: ' . $this->return_bytes($this->return_total_bytes_stored(), 5) . '
</p>
' . $tmp_hashed_html_out . '
<p style="margin-top:0;">
Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>encrypted: ' . $this->return_bytes($this->total_bytes_encrypted, 5) . '<br>
Bytes <sup class="crnrstn_documentation_page_stats_sup">&dagger;</sup>decrypted: ' . $this->return_bytes($this->total_bytes_decrypted, 5) . '<br>
Server name: ' . $_SERVER['SERVER_NAME'] . '<br>
Server address: ' . $_SERVER['SERVER_ADDR'] . '<br>
SSL enabled: ' . $tmp_SSL_ENABLED . '<br>
Request time: ' . $this->start_time() . '</p>

<div class="crnrstn_cb_20"></div>
<div class="crnrstn_documentation_page_stats_dagger_key_shell">
    <div class="crnrstn_documentation_page_stats_dagger_key_dag">&dagger;</div>
    <div class="crnrstn_documentation_page_stats_dagger_key_description"><p>A statistic reflecting server resource consumption and performance requirements related to returning the content for this request.</p></div>
    <div class="crnrstn_cb"></div>

</div>
<div class="crnrstn_cb_10"></div>
<div class="crnrstn_documentation_page_stats_dagger_key_shell">
    <div class="crnrstn_documentation_page_stats_dagger_key_dag">*</div>
    <div class="crnrstn_documentation_page_stats_dagger_key_description"><p>System default hashing algorithm.</p></div>
    <div class="crnrstn_cb"></div>

</div>
<div class="crnrstn_cb_10"></div>
<p>
' . $tmp_mem_str . '
</p>
<div class="crnrstn_cb_20"></div>
<p>[' . $this->return_micro_time() . '] [rtime ' . $this->wall_time() . ' secs]</p>
';
                    $tmp_str_array[] = $tmp_report;

                    if($tmp_show_comments == true){

                        $tmp_str_array[] = $this->html_version_burn('INTERACT UI SYSTEM REPORT', 'END') . '
';

                    }

                }

            break;
            case 'TEXT':
            default:

                if($tmp_show_comments == true){

                    $tmp_comment_begin = $this->html_version_burn('INTERACT UI SYSTEM REPORT', 'BEGIN', 'TEXT');
                    $tmp_comment_end = $this->html_version_burn('INTERACT UI SYSTEM REPORT', 'END', 'TEXT');

                }

                $tmp_str_array[] = '
' . $tmp_comment_begin  . '
= = = = = = = = = =
RESPONSE RETURN RESOURCES CONSUMPTION
';

                $tmp_hashed_html = '';
                $tmp_hashed_html_out = '';
                $tmp_SSL_ENABLED = 'FALSE';
                if($this->is_SSL == true){

                    $tmp_SSL_ENABLED = 'TRUE';

                }

                //
                // SOCIAL MEDIA CONTENT PERFORMANCE REPORT.
                $tmp_social_meta_integrations = $tmp_social_meta_integrations_ARRAY[$output_format];

                $tmp_lang_ARRAY = $this->return_language_iso_profile();
                $tmp_lang_cnt = count($tmp_lang_ARRAY);

                $tmp_lang_report = '';
                if($tmp_lang_cnt > 0){

                    $tmp_lang_report = 'Accept-Language: ';

                    //
                    // BUILD LANGUAGE REPORT
                    for($ii = 0; $ii < $tmp_lang_cnt; $ii++){

                        $tmp_lang_report .= $tmp_lang_ARRAY[$ii]['native_nomination'] . '[' . $tmp_lang_ARRAY[$ii]['locale_identifier'] . '], ';

                    }

                    $tmp_lang_report = $this->strrtrim($tmp_lang_report, ', ');
                    $tmp_lang_report .= '.';


                }

                //
                // BYTES HASH REPORT
                $tmp_total_bytes = 0;
                foreach($this->total_bytes_hashed_ARRAY as $algo => $bytes){

                    $tmp_star_char = '  ';
                    $tmp_br_char = '
';
                    $tmp_total_bytes += $bytes;

                    if($algo == $this->system_hash_algo()){

                        $tmp_star_char = '**';

                    }

                    $tmp_hashed_html .= '';
                    $tmp_hashed_html .= ' ' . $tmp_star_char . $algo . ': ' . $this->return_bytes($bytes);
                    $tmp_hashed_html .= '
';

                }

                $tmp_hashed_html = $this->strrtrim($tmp_hashed_html, $tmp_br_char);

                $tmp_hashed_html_out .= '';
                $tmp_hashed_html_out .= 'Bytes *hashed: ' . $this->return_bytes($tmp_total_bytes, 5);
                $tmp_hashed_html_out .= '
';

                // REQUIRES OUTPUT BUFFERING AT THE START...WHICH FOR THIS ONE REPORT...IS NOT WORTH...JUST.
                //$tmp_output = ob_get_contents();
                //$tmp_output_size = strlen($tmp_output);

                $tmp_hashed_html_out  .= $tmp_hashed_html;

                $tmp_referer = '';
                if(isset($_SERVER['HTTP_REFERER'])){

                    $tmp_referer = 'Referer: ' . $_SERVER['HTTP_REFERER'] .'
';

                }

                $tmp_report = 'Response returned in ' . $this->wall_time() . ' seconds.

CLIENT ::
' . $tmp_referer . 'Device type: ' . $this->device_type() . '
Accept-Language: ' . $this->return_client_header_value('Accept-Language') . '
' . $tmp_lang_report . '

SOCIAL MEDIA INTEGRATIONS ::
' . $tmp_social_meta_integrations . '

SERVER ::
' . $tmp_mem_str . '
Bytes *stored: ' . $this->return_bytes($this->return_total_bytes_stored(), 5) . '
' . $tmp_hashed_html_out . '
Bytes *encrypted: ' . $this->return_bytes($this->total_bytes_encrypted, 5) . '
Bytes *decrypted: ' . $this->return_bytes($this->total_bytes_decrypted, 5) . '
Server name: ' . $_SERVER['SERVER_NAME'] . '
Server address: ' . $_SERVER['SERVER_ADDR'] . '
SSL enabled: ' . $tmp_SSL_ENABLED . '
Request time: ' . $this->start_time() . '

* A statistic reflecting server resource consumption and performance
requirements related to returning the content for this request.

** System default hashing algorithm.

[' . $this->return_micro_time() . '] [rtime ' . $this->wall_time() . ' secs]

';
                $tmp_str_array[] = $tmp_report;
                $tmp_str_array[] = '= = = = = = = = = =
' . $tmp_comment_end  . '
';

            break;

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_SOCIAL_MEDIA_META_REPORT()
    {

        $tmp_str_out_ARRAY = array();
        $tmp_str_out_HTML = '';
        $tmp_str_out_TEXT = '';

        $this->error_log('SOCIAL MEDIA META ' . 
               'PERFORMANCE REPORTING READY ' . 
               'FOR 1ST PASS LOGIC REVIEW.', 
               __LINE__, 
               __METHOD__, 
               __FILE__, 
               $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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

        $tmp_data_type_family = 'CRNRSTN::RESOURCE::GENERAL_SETTINGS::META';
        $tmp_meta_cnt = $this->get_resource_count('HTML_HEAD_CRNRSTN_META', $tmp_data_type_family);
        for($i = 0; $i < $tmp_meta_cnt; $i++){

            $tmp_data = $this->get_resource('HTML_HEAD_CRNRSTN_META', $i, $tmp_data_type_family);
            if(is_array($tmp_data)){

                $tmp_cnt = sizeof($tmp_data);
                for ($ii = 0; $ii < $tmp_cnt; $ii++){

                    $tmp_str_out_HTML .= htmlentities($tmp_data[$ii]) . '<br>
        ';
                    $tmp_str_out_TEXT .= $tmp_data[$ii] . '
        ';

                }

            }else{

                $tmp_str_out_HTML .= htmlentities($tmp_data) . '<br>
        ';

                $tmp_str_out_TEXT .= $tmp_data . '
        ';

            }

        }

        //
        // REMOVE TRAILING 
        // LINE BREAK APPENDS. 
        $tmp_str_out_HTML = $this->strrtrim($tmp_str_out_HTML, '<br>
        ');

        $tmp_str_out_TEXT = $this->strrtrim($tmp_str_out_TEXT, '
        ');

        if(!isset($tmp_str_out_ARRAY['HTML'])){

            $tmp_str_out_ARRAY['HTML'] = $tmp_str_out_HTML;

        }else{

            $tmp_str_out_ARRAY['HTML'] .= $tmp_str_out_HTML;

        }

        if(!isset($tmp_str_out_ARRAY['TEXT'])){

            $tmp_str_out_ARRAY['TEXT'] = $tmp_str_out_HTML;

        }else{

            $tmp_str_out_ARRAY['TEXT'] .= $tmp_str_out_TEXT;

        }

        return $tmp_str_out_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_UI_DOCUMENTATION()
    {

        $tmp_str_array = array();

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'DOCUMENTATION MODULE');

            }

            $tmp_str_array[] = '<div id="crnrstn_interact_ui_' . 
                               'documentation_side_nav_src" ' . 
                               'class="crnrstn_hidden"></div>' . 
                               '<div id="crnrstn_interact_ui_' . 
                               'documentation_content_src" ' . 
                               'class="crnrstn_hidden"></div>' . 
                               '<div id="crnrstn_interact_ui_' . 
                               'search_src" class="crnrstn_' . 
                               'hidden"></div>';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'DOCUMENTATION MODULE', 
                                          'END');

            }


        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'DOCUMENTATION MODULE') . '
';

            }

            $tmp_str_array[] = '        <div id="crnrstn_interact' . 
                               '_ui_documentation_side_nav_src" ' . 
                               'class="crnrstn_hidden"></div>
        <div id="crnrstn_interact_ui_documentation_content_src" ' . 
                               'class="crnrstn_hidden"></div>
        <div id="crnrstn_interact_ui_search_src" ' . 
                               'class="crnrstn_hidden"></div>
        ';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'DOCUMENTATION MODULE', 'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_UI_MESSENGER()
    {

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'MESSENGER MODULE');

            }

            $tmp_str_array[] = '<div id="crnrstn_interact_ui_' . 
                               'messenger_src" class="crnrstn' . 
                               '_hidden"></div>';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'MESSENGER MODULE', 
                                          'END');

            }

        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'MESSENGER MODULE') . '
';

            }

            $tmp_str_array[] = '        <div id="crnrstn_interact_ui_' . 
                               'messenger_src" class="' . 
                               'crnrstn_hidden"></div>
        ';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'MESSENGER MODULE', 
                                          'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_UI_SEARCH()
    {

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true)
                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SEARCH MODULE');

            $tmp_str_array[] = '<div id="crnrstn_interact_ui_' . 
                               'messenger_src" class="crnrstn_hidden">' . 
                               '</div>';

            if($tmp_show_comments == true)
                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SEARCH MODULE', 
                                          'END');

        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'SEARCH MODULE') . '
';

            }

            $tmp_str_array[] = '        <div id="crnrstn_interact_ui' . 
                               '_messenger_src" class="crnrstn_hidden">' . 
                               '</div>
        ';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SEARCH MODULE', 'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_output_CRNRSTN_CLIENT_SSDTLA()
    {

        $tmp_show_comments = $this->tidy_boolean(
                                    $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD'], 
                                    $this->R_data['int_flag']['R_boolean'], 
                                    (int) $this->R_data['int_flag']['R_icy_bitmask'], 
                                    'crnrstn_html_comments_mode');

        /* $tmp_show_comments = true;
         * if($this->is_serialized_bit_set(
         *           'crnrstn_html_comments_mode', 
         *           $this->R_data['int_flag']['CRNRSTN_HTML_COMMENTS_SILENT_GOLD']) !== true)
         * {
         *
         *     $tmp_show_comments = false;
         *
         * }
         *
         */

        if($this->is_bit_set((int) $this->R_data['int_flag']['R_js_css_min_mode']) == true){

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SSDTLA DEBUG');

            }

            $tmp_str_array[] = '<div id="crnrstn_client_' . 
                               'ssdtla_debug_active"></div>';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SSDTLA DEBUG', 
                                          'END');

            }

        }else{

            if($tmp_show_comments == true){

                $tmp_str_array[] = '
' . $this->html_version_burn('INTERACT UI ' . 
           'SSDTLA DEBUG') . '
';

            }

            $tmp_str_array[] = '<div id="crnrstn_client_' . 
                               'ssdtla_debug_active"></div>';

            if($tmp_show_comments == true){

                $tmp_str_array[] = $this->html_version_burn('INTERACT UI ' . 
                                          'SSDTLA DEBUG', 'END') . '
';

            }

        }

        return $tmp_str_array;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_sys_logging_profile()
    {

        return self::$system_logging_output_profile_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_sys_logging_meta()
    {

        return self::$sys_logging_meta_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function _______return_file_path_user_class()
    {

        return $this->R_data['int_flag']['CRNRSTN_ROOT'] . '/_R/class/user/crnrstn.user.inc.php';

        //
        // CLASS DEFINITION BY 
        // SUPPORTED PHP VERSION. 
        if(\version_compare('8', $this->version_php()) < 1){

            //
            // PHP 8.0
            return $this->R_data['int_flag']['CRNRSTN_ROOT'] . '/_R/class/user/crnrstn.user_PHP8.0.inc.php';
            /*$this->print_r(
             *       'PHP ' . $this->version_php . 
             *       ' >= 8.0...' . 
             *       CRNRSTN_ROOT . 
             *       '/_R/class/user/crnrstn.user_PHP8.0.inc.php', 
             *       'version_php oCRNRSTN_USR driver', 
             *       CRNRSTN_HTML, 
             *       __LINE__, 
             *       __METHOD__, 
             *       __FILE__);
             *
             */
        }else{

            if(\version_compare('7', $this->version_php()) < 1){

                //
                // PHP 7.0
                return $this->R_data['int_flag']['CRNRSTN_ROOT'] . '/_R/class/user/crnrstn.user_PHP7.0.inc.php';
                /*$this->print_r(
                 *       'PHP ' . $this->version_php . 
                 *       ' >= 7.0...' . 
                 *       CRNRSTN_ROOT . 
                 *       '/_R/class/user/crnrstn.user_PHP7.0.inc.php', 
                 *       'version_php oCRNRSTN_USR driver', 
                 *       CRNRSTN_HTML, 
                 *       __LINE__, 
                 *       __METHOD__, 
                 *       __FILE__);
                 *
                 */
            }else{

                //
                // PHP < 7.0 (e.g. 5.5)
                return $this->R_data['int_flag']['CRNRSTN_ROOT'] . '/_crnrstn/class/user/crnrstn.user_PHP5.5.inc.php';
                /*$this->print_r(
                 *       'PHP ' . $this->version_php . 
                 *       ' < 7.0...' . 
                 *       CRNRSTN_ROOT . 
                 *       '/_R/class/user/crnrstn.user_PHP5.5.inc.php', 
                 *       'version_php oCRNRSTN_USR driver', 
                 *       CRNRSTN_HTML, 
                 *       __LINE__, 
                 *       __METHOD__, 
                 *       __FILE__);
                 *
                 */
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
    function return_ENV_oCRNRSTN_USR($WORDPRESS_debug_mode = NULL)
    {

        //
        // Will need to update 
        // this switch to accept 
        // any new debug constant 
        // for Wordpress®.
        switch($WORDPRESS_debug_mode){
            case $this->R_data['int_flag']['CRNRSTN_WORDPRESS_DEBUG']:

                //$this->retrieve_data_value(
                //       $data_key, 
                //       $data_type_family, 
                //       $index);
                $this->input_data_value(
                       self::$env_key, 
                       'WORDPRESS_debug_mode', 
                       $WORDPRESS_debug_mode, 
                       '');

                $this->toggle_bit($this->R_data['int_flag']['CRNRSTN_WORDPRESS_DEBUG']);

            break;

        }

        if(!isset($this->R['kivotos']->R['ui_trm']))
            // 
            // THIS IS BOUND TO 
            // THIRD PARTY SERVICE 
            // ON CONSTRUCTION. 
            //
            // BREAK DEPENDENCY 
            // BEFORE NEXT USE.
            //
            // INSTANTIATE THE TUNNEL 
            // RESPONSE MANAGER 
            // CLASS OBJECT. 
            $this->R['kivotos']->R['ui_trm'] = new crnrstn_ui_tunnel_response_manager();

        return $this->R['kivotos']->R['usr'];

    }

    /* Deleted return_oCRNRSTN_USR() method.
     * 5 :: Sunday, July 26, 2026 @ 2024 hrs.
     *
     * @return
     * @access public
     *
     *
    function return_oCRNRSTN_USR()
    {

        //return $this->R['kivotos']->R['usr'];
        return $this->R['kivotos']->R['usr'];

    }

    */

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function ssdtla_enabled()
    {

        return self::$R_http->ssdtla_enabled();

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
    function add_ssdtla_resource(
             $data_key, 
             $data_value, 
             $data_type_family, 
             $data_authorization_profile, 
             $index, 
             $ttl)
    {

        switch($data_authorization_profile){
            case $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_SESSION']:

                //
                // BASIC SESSION 
                // STORAGE. 
                $this->oSESSION_MGR->add_ssdtla_resource(
                                     $data_key, 
                                     $data_value, 
                                     $data_type_family, 
                                     $data_authorization_profile, 
                                     $index, 
                                     $ttl);

            break;
            case $this->R_data['int_flag']['R_authorize_all']:
            case $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_SESSION'] & 
                 $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_RUNTIME']:

                //
                // BASIC SESSION 
                // STORAGE. 
                $this->oSESSION_MGR->add_ssdtla_resource(
                                     $data_key, 
                                     $data_value, 
                                     $data_type_family, 
                                     $data_authorization_profile, 
                                     $index, 
                                     $ttl);

                //
                // BASIC RUNTIME 
                // STORAGE. 
                $this->add_resource(
                       $data_key, 
                       $data_value, 
                       $data_type_family, 
                       $data_authorization_profile, 
                       $index, 
                       $this->return_env_key(), 
                       $ttl);

            break;
            default:

                // CRNRSTN_AUTHORIZE & 
                // CRNRSTN_CHANNEL_RUNTIME
                //
                // BASIC RUNTIME 
                // STORAGE. 
                $this->add_resource(
                       $data_key, 
                       $data_value, 
                       $data_type_family, 
                       $data_authorization_profile, 
                       $index, 
                       $this->return_env_key(), 
                       $ttl);

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
    function chunkPageData(
             $tmp_page_content, 
             $max_len, 
             $encoding = 'UTF-8')
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of
         * the CRNRSTN :: Lightsaber
         * SOAP Services Layer Buffer
         * (Chunk) Output Controller.
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2012 hrs.
         *
         * $oChunkRestrictData = new crnrstn_chunk_restrictor(
         *                           $tmp_page_content, 
         *                           $max_len, 
         *                           $this, 
         *                           $encoding);
         *
         */
        $oChunkRestrictData = $this->return_registered_resource(
                                     'new', 
                                     'crnrstn_chunk_restrictor', 
                                     $tmp_page_content, 
                                     $max_len, 
                                     $this, 
                                     $encoding);

        return $oChunkRestrictData;

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
    function safe_getServerArrayVar(
             $param, 
             $oCRNRSTN_USR = NULL)
    {

        if($this->isset_ServerArrayVar($param) == true){

            return $this->getServerArrayVar($param, $oCRNRSTN_USR);

        }else{

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
    function isset_ServerArrayVar($param)
    {

        if(isset($_SERVER[$param])){

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
     * @return
     * @access public
     *
     */
    function getServerArrayVar(
             $param, 
             $oCRNRSTN_USR = NULL)
    {

        try{

            if(!isset($_SERVER[$param])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('The requested $_SERVER ' . 
                    'super global parameter [' . 
                    $param . 
                    '] cannot be found.');

            }else{

                return $_SERVER[$param];

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
             * Sunday, June 30, 2024 @ 1542 hrs.
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
    function return_client_header_value(
             $header_attribute, 
             $index)
    {

        return self::$R_http->return_client_header_value(
                              $header_attribute, 
                              $index);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function issetHTTP($transport_protocol)
    {

        if(is_array($transport_protocol)){

            return self::$R_http->issetHTTP($transport_protocol);

        }

        switch($transport_protocol){
            case 'GET':

                $super_global = $_GET;

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * POST. 
                 *
                 */
                $super_global = $_POST;

            break;

        }

        return self::$R_http->issetHTTP($super_global);

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

        foreach($this->oSOAP_services_access_manager as 
            $serial => $oSOAP_svc_mgr)
        {

            return $oSOAP_svc_mgr->return_soap_encryption_config_param($param_key);

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
    function return_SOAP_svc_oClient_meta(
             $param_key, 
             $CRNRSTN_SOAP_SVC_USERNAME, 
             $CRNRSTN_SOAP_SVC_PASSWORD)
    {

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $oSOAP_oClient)
        {

            $tmp_un  = $oSOAP_oClient->return_username();
            $tmp_pwd = $oSOAP_oClient->return_password();

            /* error_log('[lnum ' . 
             *      __LINE__ . ']' .
             *      ' [mthd ' . 
             *      __METHOD__ . '] [' . 
             *      $param_key . '][' . 
             *      $tmp_un . '][' . 
             *      $CRNRSTN_SOAP_SVC_USERNAME . '][' . 
             *      $tmp_pwd . '][' . 
             *      $CRNRSTN_SOAP_SVC_PASSWORD . ']');
             *
             */

            if($tmp_un == $CRNRSTN_SOAP_SVC_USERNAME && 
                $this->validate_pwd_hash_login(
                       $tmp_pwd, 
                       $CRNRSTN_SOAP_SVC_PASSWORD))
            {

                $tmp_soap_encryption_config_ARRAY = $oSOAP_oClient->return_soap_services_soap_encryption_config();

                switch($param_key){
                    case 'SOAP_ENCRYPT_CIPHER':

                        return $tmp_soap_encryption_config_ARRAY['encryptCipher'];

                    break;
                    case 'SOAP_ENCRYPT_SECRET_KEY':

                        return $tmp_soap_encryption_config_ARRAY['encryptSecretKey'];

                    break;
                    case 'SOAP_ENCRYPT_HMAC_ALG':

                        return $tmp_soap_encryption_config_ARRAY['hmac_alg'];

                    break;
                    case 'SOAP_ENCRYPT_OPTIONS':

                        return $tmp_soap_encryption_config_ARRAY['encryptOptions'];

                    break;
                    default:

                        return $tmp_soap_encryption_config_ARRAY;

                    break;

                }

            }

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function ___init_wp_config()
    {

        if(!!$this->wp_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])]){

            foreach($this->wp_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])] as 
                $key => $wp_config_file_path)
            {

                if($this->is_file($wp_config_file_path)){

                    $oCRNRSTN_oWCR_ARRAY = array();

                    /* $this->oLog_output_ARRAY[] = $this->error_log('We have a file to ' . 
                     *                                     'include and process for the ' . 
                     *                                     'initialization of WordPress ' . 
                     *                                     'profiles authorized to ' . 
                     *                                     'connect to CRNRSTN :: [' . 
                     *                                     $this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])][$key] . 
                     *                                     '].', 
                     *                                     __LINE__, 
                     *                                     __METHOD__, 
                     *                                     __FILE__, 
                     *                                     CRNRSTN_SETTINGS_CRNRSTN);
                     *
                     */                                    

                    include_once($wp_config_file_path);

                    $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

                }else{

                    error_log('[lnum ' . 
                        __LINE__ . ']' . 
                        ' [mthd ' . 
                        __METHOD__ . 
                        '] NOT A WP CONFIG FILE [' . 
                        $wp_config_file_path . 
                        ']');

                }

            }

        }else{

            if(!!$this->wp_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]){

                foreach($this->wp_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] as 
                    $key => $wp_config_file_path)
                {

                    if($this->is_file($wp_config_file_path)){

                        $oCRNRSTN_oWCR_ARRAY = array();

                        //
                        // EXTRACT PROFILE 
                        // FROM FILE. 
                        $this->oLog_output_ARRAY[] = $this->error_log('We have a file to include ' . 
                                                            'and process for the initialization ' . 
                                                            'of WordPress profiles authorized to ' . 
                                                            'connect to CRNRSTN :: [' . 
                                                            $this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash][$key] . 
                                                            '].', 
                                                            __LINE__, 
                                                            __METHOD__, 
                                                            __FILE__, 
                                                            $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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

                        include_once($wp_config_file_path);

                        $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

                    }else{

                        error_log('[lnum ' . 
                            __LINE__ . ']' . 
                            ' [mthd ' . 
                            __METHOD__ . 
                            '] NOT A WP CONFIG FILE [' . 
                            $wp_config_file_path . 
                            ']');

                    }

                }

            }else{

                error_log('[lnum ' . 
                    __LINE__ . ']' .
                    ' [mthd ' . 
                    __METHOD__ . 
                    '] NO WP CONFIG.');

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
    private function init_analytics_config()
    {

        if(!!$this->analytics_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])]){

            foreach($this->analytics_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])] as 
                $key => $analytics_config_file_path)
            {

                if($this->is_file($analytics_config_file_path)){

                    $oCRNRSTN_oWCR_ARRAY = array();

                    //
                    // EXTRACT PROFILE 
                    // FROM FILE. 
                    $this->oLog_output_ARRAY[] = $this->error_log('We have a file to ' . 
                                                        'include and process for the ' . 
                                                        'initialization of analytics ' . 
                                                        'SEO profiles from the ' . 
                                                        'CRNRSTN :: configuration file [' . 
                                                        $this->analytics_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])][$key] . 
                                                        '].', 
                                                        __LINE__, 
                                                        __METHOD__, 
                                                        __FILE__, 
                                                        $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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


                    include_once($analytics_config_file_path);

                    $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

                }else{

                    error_log('[lnum ' . 
                        __LINE__ . '] ' . 
                        '[mthd ' . 
                        __METHOD__ . 
                        '] NOT AN ANALYTICS ' . 
                        'SEO CONFIG FILE [' . 
                        $analytics_config_file_path . 
                        '].');

                }

            }

        }else{

            if(!!$this->analytics_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]){

                foreach($this->analytics_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] as 
                    $key => $analytics_config_file_path)
                {

                    if($this->is_file($analytics_config_file_path)){

                        $oCRNRSTN_oWCR_ARRAY = array();

                        //
                        // EXTRACT PROFILE 
                        // FROM FILE. 
                        $this->oLog_output_ARRAY[] = $this->error_log('We have a file to include ' . 
                                                            'and process for the initialization ' . 
                                                            'of analytics SEO profiles from the ' . 
                                                            'CRNRSTN :: configuration file [' . 
                                                            $this->analytics_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash][$key] . 
                                                            '].', 
                                                            __LINE__, 
                                                            __METHOD__, 
                                                            __FILE__, 
                                                            $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                        include_once($analytics_config_file_path);

                        $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

                    }else{

                        error_log(__LINE__ . 
                            ' env NOT AN ANALYTICS ' . 
                            'SEO CONFIG FILE [' . 
                            $analytics_config_file_path . 
                            '].');

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


                    }

                }

            }else{

                error_log(__LINE__ . 
                    ' env NO ANALYTICS ' . 
                    'SEO CONFIGURED.');

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
    function return_form_submitted_value(
             $getpost_input_name, 
             $transport_protocol = NULL)
    {

        return self::$R_http->return_form_submitted_value(
                              $getpost_input_name, 
                              $transport_protocol);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_crnrstn_data_packet($packet_type = 'R_channel_RUNTIME')
    {

        /*
        crnrstn_session
        SESSION_ID              char(26)
        SESSION_ID_CRC32        int(11) unsigned
        SERIAL_ID               char(128)
        SERIAL_ID_CRC32         int(11) unsigned
        SERIAL                  char(128)
        SERIAL_CRC32            int(11) unsigned
        ISACTIVE                tinyint(2) default 1
        CLIENT_ID               char(100)
        SERVER_IP               int(11) unsigned
        CLIENT_IP               int(11) unsigned
        DEVICE_TYPE_CONSTANT    int(11)
        DEVICE_TYPE             varchar(25) null allowed
        HTTP_USER_AGENT         varchar(500) null allowed
        ACCEPT_LANGUAGE         varchar(150) null allowed
        HTTP_REFERER	        varchar(500) null allowed
        DATEMODIFIED            datetime
        DATECREATED             timestamp default _CURRENT_TIMESTAMP

        */

        //if($this->R['kivotos']->R['usr']->isset_query_result_set_key('CRNRSTN_SESSION_DATA')){
        if(1 == 1){

            error_log('[lnum ' . 
                __LINE__ . '] ' . 
                '[mthd ' . 
                __METHOD__ . '] CRNRSTN_SESSION_DATA ' . 
                ' die();');
            die();
            $tmp_session_count = $this->R['kivotos']->R['usr']->return_record_count('CRNRSTN_SESSION_DATA');

            if($tmp_session_count > 0){

                // crnrstn_sessions TABLE DATA
                $tmp_client_ip  = $this->R['kivotos']->R['usr']->client_ip();
                $tmp_session_id = session_id();
                $tmp_SESSION_ID = $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_SESSION_DATA', 'SESSION_ID', 0, true);
                $tmp_SERVER_IP  = $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_SESSION_DATA', 'SERVER_IP', 0, true);
                $tmp_CLIENT_ID  = $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_SESSION_DATA', 'CLIENT_ID', 0, true);
                $tmp_CLIENT_IP  = $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_SESSION_DATA', 'CLIENT_IP', 0, true);
                $tmp_CRNRSTN_SESSION_DATA_DATEMODIFIED = $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_SESSION_DATA', 'DATEMODIFIED', 0, true);
                $tmp_CRNRSTN_SESSION_DATA_DATECREATED = $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_SESSION_DATA', 'DATECREATED', 0, true);

            }else{

                error_log('[lnum ' . 
                    __LINE__ . '] ' . 
                    '[mthd ' . 
                    __METHOD__ . 
                    '] CRNRSTN_SESSION_DATA ' . 
                    'HAS NO SESSION DATA.');

                $tmp_client_id = $this->return_form_submitted_value('crnrstn_client_id');
                $ts_json = $this->return_clean_json_string($this->return_query_date_time_stamp());

                // crnrstn_sessions TABLE DATA
                $tmp_client_ip  = $this->R['kivotos']->R['usr']->client_ip();
                $tmp_session_id = session_id();
                $tmp_SESSION_ID = $tmp_session_id;
                $tmp_SERVER_IP  = $this->return_clean_json_string($_SERVER['SERVER_ADDR']);
                $tmp_CLIENT_ID  = $this->return_clean_json_string($tmp_client_id);
                $tmp_CLIENT_IP  = $this->client_ip();
                $tmp_CRNRSTN_SESSION_DATA_DATEMODIFIED = $ts_json;
                $tmp_CRNRSTN_SESSION_DATA_DATECREATED = $ts_json;

            }

        }else{

            error_log(__LINE__ . 
                ' ui trans CRNRSTN_SESSION_DATA ' . 
                'isset_query_result_set IS NOT SET!');

            $tmp_client_id = $this->return_form_submitted_value('crnrstn_client_id');
            $ts_json = $this->return_clean_json_string($this->return_query_date_time_stamp());

            // crnrstn_sessions TABLE DATA
            $tmp_client_ip  = $this->R['kivotos']->R['usr']->client_ip();
            $tmp_session_id = session_id();
            $tmp_SESSION_ID = $tmp_session_id;
            $tmp_SERVER_IP  = $this->return_clean_json_string($_SERVER['SERVER_ADDR']);
            $tmp_CLIENT_ID  = $this->return_clean_json_string($tmp_client_id);
            $tmp_CLIENT_IP  = $this->R['kivotos']->R['usr']->client_ip();
            $tmp_CRNRSTN_SESSION_DATA_DATEMODIFIED = $ts_json;
            $tmp_CRNRSTN_SESSION_DATA_DATECREATED = $ts_json;

        }

        error_log('[lnum ' . 
            __LINE__ . '] ' . '[mthd ' . 
            __METHOD__ . '] $tmp_SESSION_ID=' . 
            $tmp_SESSION_ID);

        if($tmp_client_ip != $tmp_CLIENT_IP && 
            strlen($tmp_CLIENT_IP) > 0)
        {

            //
            // SOFT ALERT SINCE 
            // there is NO USER AUTHENTICATED 
            // EXPERIENCE. 
            $tmp_STATUS_TARGET_ELEMENT = 'null';
            $tmp_STATUS         = '200';
            $tmp_STATUS_CODE    = '418';
            $tmp_STATUS_MESSAGE = 'I\'m a teapot';
            $tmp_ERROR_CODE     = '2227';
            $tmp_ERROR_MESSAGE  = 'The client IP address ' . 
                                  'has straight deviated from ' . 
                                  'the CRNRSTN :: PSEUDO-SOAP ' . 
                                  'SERVICES Data Tunnel Layer ' . 
                                  'session initialization profile. ' . 
                                  'No immediate action needs ' . 
                                  'to be taken at this time.';

        }else{

            if(($tmp_session_id != $tmp_SESSION_ID) && 
                (strlen($tmp_SESSION_ID) > 0))
            {

                //
                // SOFT ALERT SINCE 
                // there is NO USER AUTHENTICATED 
                // EXPERIENCE. 
                $tmp_STATUS_TARGET_ELEMENT = 'null';
                $tmp_STATUS         = '200';
                $tmp_STATUS_CODE    = '418';
                $tmp_STATUS_MESSAGE = 'I\'m a teapot';
                $tmp_ERROR_CODE     = '2228';
                $tmp_ERROR_MESSAGE  = 'The SESSION profile of ' . 
                                      'the CRNRSTN :: PSEUDO-SOAP ' . 
                                      'SERVICES Data Tunnel Layer ' . 
                                      'Packet has straight deviated ' . 
                                      'from the server process ' . 
                                      'currently running the PSSDTL ' . 
                                      'profile[' . 
                                      $tmp_session_id . '][' . 
                                      $tmp_SESSION_ID . ']. ' . 
                                      'No immediate action needs to ' . 
                                      'be taken at this time.';

            }else{

                $tmp_STATUS_TARGET_ELEMENT = 'null';
                $tmp_STATUS                = '200';
                $tmp_STATUS_CODE           = '420';
                $tmp_STATUS_MESSAGE        = 'Enhance Your Calm';
                $tmp_ERROR_CODE            = '0';
                $tmp_ERROR_MESSAGE         = '0';

            }

        }

        /*
        ' . $CANVAS_PROFILE_CONTENT . '
        ' . $CANVAS_PROFILE_LOCK . '
        ' . $CANVAS_PROFILE_LOCK_TTL . '
        ' . $CANVAS_PROFILE_LOCK_ISACTIVE . '

        ' . $CANVAS_PROFILES_DIMENSION_POSITION_CHECKSUM . '
        ' . $CANVAS_PROFILES_DIMENSION_POSITION_CONTENT . '

        ' . $CANVAS_PROFILES_DIMENSION_POSITION_LOCK . '
        ' . $CANVAS_PROFILES_DIMENSION_POSITION_LOCK_TTL . '
        ' . $CANVAS_PROFILES_DIMENSION_POSITION_LOCK_ISACTIVE . '

        */

        // crnrstn_jony5_content_version_checksums TABLE DATA
        $CHECKSUM_PROFILE_ID = '"CHECKSUM_PROFILE_ID" : ' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'CHECKSUM_PROFILE_ID', 0, true) . ',';
        $PROGRAM_KEY = '"PROGRAM_KEY" : ' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'PROGRAM_KEY', 0, true) . ',';
        $DEVICE_TYPE_CHANNEL = '"DEVICE_TYPE_CHANNEL" : ' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'DEVICE_TYPE_CHANNEL', 0, true) . ',';

        $CANVAS_PROFILE_HASH = '"CANVAS_PROFILE_HASH" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum() . '",';
        $CANVAS_PROFILE_CONTENT = '"CANVAS_PROFILE_CONTENT" : "' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILE_CONTENT')) . '",';
        $CANVAS_PROFILE_LOCK = '"CANVAS_PROFILE_LOCK" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILE_LOCK') . '",';
        $CANVAS_PROFILE_LOCK_TTL = '"CANVAS_PROFILE_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILE_LOCK_TTL') . '",';
        $CANVAS_PROFILE_LOCK_ISACTIVE = '"CANVAS_PROFILE_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILE_LOCK_ISACTIVE') . '",';

        $CANVAS_PROFILES_DIMENSION_POSITION_CHECKSUM = '"CANVAS_PROFILES_DIMENSION_POSITION_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILES_DIMENSION_POSITION_CHECKSUM') . '",';
        $CANVAS_PROFILES_DIMENSION_POSITION_CONTENT = '"CANVAS_PROFILES_DIMENSION_POSITION_CONTENT" : "' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILES_DIMENSION_POSITION_CONTENT')) . '",';
        $CANVAS_PROFILES_DIMENSION_POSITION_LOCK = '"CANVAS_PROFILES_DIMENSION_POSITION_LOCK" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILES_DIMENSION_POSITION_LOCK') . '",';
        $CANVAS_PROFILES_DIMENSION_POSITION_LOCK_TTL = '"CANVAS_PROFILES_DIMENSION_POSITION_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILES_DIMENSION_POSITION_LOCK_TTL') . '",';
        $CANVAS_PROFILES_DIMENSION_POSITION_LOCK_ISACTIVE = '"CANVAS_PROFILES_DIMENSION_POSITION_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_ui_interact_canvas_profile_checksum('CANVAS_PROFILES_DIMENSION_POSITION_LOCK_ISACTIVE') . '",';

        $CONTENT_CHECKSUM_TTL = '"CONTENT_CHECKSUM_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'CONTENT_CHECKSUM_TTL', 0, true) . '",';
        $TITLE_CHECKSUM = '"TITLE_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'TITLE_CHECKSUM', 0, true) . '",';
        $TITLE_CONTENT = '"TITLE_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'TITLE_CONTENT', 0, true)) . ',';
        $TITLE_CONTENT_LOCK = '"TITLE_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'TITLE_CONTENT_LOCK', 0, true) . '",';
        $TITLE_CONTENT_LOCK_TTL = '"TITLE_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'TITLE_CONTENT_LOCK_TTL', 0, true) . '",';
        $TITLE_CONTENT_LOCK_ISACTIVE = '"TITLE_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'TITLE_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $SOCIAL_CHECKSUM = '"SOCIAL_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'SOCIAL_CHECKSUM', 0, true) . '",';
        $SOCIAL_CONTENT = '"SOCIAL_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'SOCIAL_CONTENT', 0, true)) . ',';
        $SOCIAL_CONTENT_LOCK = '"SOCIAL_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'SOCIAL_CONTENT_LOCK', 0, true) . '",';
        $SOCIAL_CONTENT_LOCK_TTL = '"SOCIAL_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'SOCIAL_CONTENT_LOCK_TTL', 0, true) . '",';
        $SOCIAL_CONTENT_LOCK_ISACTIVE = '"SOCIAL_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'SOCIAL_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $COLORS_CHECKSUM = '"COLORS_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'COLORS_CHECKSUM', 0, true) . '",';
        $COLORS_CONTENT = '"COLORS_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'COLORS_CONTENT', 0, true)) . ',';
        $COLORS_CONTENT_LOCK = '"COLORS_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'COLORS_CONTENT_LOCK', 0, true) . '",';
        $COLORS_CONTENT_LOCK_TTL = '"COLORS_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'COLORS_CONTENT_LOCK_TTL', 0, true) . '",';
        $COLORS_CONTENT_LOCK_ISACTIVE = '"COLORS_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'COLORS_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $STATS_CHECKSUM = '"STATS_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'STATS_CHECKSUM', 0, true) . '",';
        $STATS_CONTENT = '"STATS_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'STATS_CONTENT', 0, true)) . ',';
        $STATS_CONTENT_LOCK = '"STATS_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'STATS_CONTENT_LOCK', 0, true) . '",';
        $STATS_CONTENT_LOCK_TTL = '"STATS_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'STATS_CONTENT_LOCK_TTL', 0, true) . '",';
        $STATS_CONTENT_LOCK_ISACTIVE = '"STATS_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'STATS_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $RELAY_CHECKSUM = '"RELAY_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'RELAY_CHECKSUM', 0, true) . '",';
        $RELAY_CONTENT = '"RELAY_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'RELAY_CONTENT', 0, true)) . ',';
        $RELAY_CONTENT_LOCK = '"RELAY_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'RELAY_CONTENT_LOCK', 0, true) . '",';
        $RELAY_CONTENT_LOCK_TTL = '"RELAY_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'RELAY_CONTENT_LOCK_TTL', 0, true) . '",';
        $RELAY_CONTENT_LOCK_ISACTIVE = '"RELAY_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'RELAY_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $REPORTING_CHECKSUM = '"REPORTING_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'REPORTING_CHECKSUM', 0, true) . '",';
        $REPORTING_CONTENT = '"REPORTING_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'REPORTING_CONTENT', 0, true)) . ',';
        $REPORTING_CONTENT_LOCK = '"REPORTING_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'REPORTING_CONTENT_LOCK', 0, true) . '",';
        $REPORTING_CONTENT_LOCK_TTL = '"REPORTING_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'REPORTING_CONTENT_LOCK_TTL', 0, true) . '",';
        $REPORTING_CONTENT_LOCK_ISACTIVE = '"REPORTING_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'REPORTING_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $WILDCARD_CHECKSUM = '"WILDCARD_CHECKSUM" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'WILDCARD_CHECKSUM', 0, true) . '",';
        $WILDCARD_CONTENT = '"WILDCARD_CONTENT" : ' . $this->return_clean_json_string($this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'WILDCARD_CONTENT', 0, true)) . ',';
        $WILDCARD_CONTENT_LOCK = '"WILDCARD_CONTENT_LOCK" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'WILDCARD_CONTENT_LOCK', 0, true) . '",';
        $WILDCARD_CONTENT_LOCK_TTL = '"WILDCARD_CONTENT_LOCK_TTL" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'WILDCARD_CONTENT_LOCK_TTL', 0, true) . '",';
        $WILDCARD_CONTENT_LOCK_ISACTIVE = '"WILDCARD_CONTENT_LOCK_ISACTIVE" : "' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'WILDCARD_CONTENT_LOCK_ISACTIVE', 0, true) . '",';
        $tmp_CRNRSTN_CACHE_CHECKSUM_TTL_DATA_DATEMODIFIED = '"DATEMODIFIED" : ' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'DATEMODIFIED', 0, true) . ',';
        $tmp_CRNRSTN_CACHE_CHECKSUM_TTL_DATA_DATECREATED = '"DATECREATED" : ' . $this->R['kivotos']->R['usr']->return_database_value('CRNRSTN_CACHE_CHECKSUM_TTL_DATA', 'DATECREATED', 0, true) . ',';

        $tmp_CRNRSTN_ENVIRONMENTAL_RESOURCE_CONFIGURATION = $this->oSESSION_MGR->return_session_oDDO_profile('pssdtl');

        $tmp_json_data = '';

        switch($packet_type){
            case 'crnrstn_session_json':

                //$tmp_crnrstn_session = $this->return_form_submitted_value('crnrstn_session');
                /*

                12/18/2021 1311 hrs
                ORIGINAL JONY5.COM JSON SOURCE OBJECT BELOW.
                THANK YOU FOR YOUR SERVICES.

                $tmp_json_data = '{
                                   "ui_sync_controller_threads" : [
                                        {
                                        ' . $TITLE_CHECKSUM . '
                                        ' . $SOCIAL_CHECKSUM . '
                                        ' . $COLORS_CHECKSUM . '
                                        ' . $STATS_CHECKSUM . '
                                        "jony5_lifestyle_banner_checksum" : "8/16/2021 0345 :: Miss you, J5...my boy!"
                                        }
                                   ]
                                }';

                */

                // DO WE EVEN NEED THE xxxxx_CONTENT DATA HERE SINCE THIS ENCRYPTED
                // PACKET WILL NOT BE USED BY THE BROWSER?
                $tmp_json_data = '{
                    "oCRNRSTN_SESSION" : [
                        {
                        "SESSION_ID" : "' . $tmp_SESSION_ID . '",
                        "CLIENT_ID" : "' . $tmp_CLIENT_ID . '",
                        "CLIENT_IP" : "' . $tmp_CLIENT_IP . '",
                        "SERVER_IP" : ' . $tmp_SERVER_IP . ',
                        "EDGE_SERVER_IP" : ' . $this->return_clean_json_string($_SERVER['SERVER_ADDR']) . ',
                        "SESSION_ID_DATEMODIFIED" : ' . $tmp_CRNRSTN_SESSION_DATA_DATEMODIFIED . ',
                        "SESSION_ID_DATECREATED" : ' . $tmp_CRNRSTN_SESSION_DATA_DATECREATED . ',
                        "STATUS_REPORT" : [
                            {
                            "STATUS_TARGET_ELEMENT" : ' . $this->return_clean_json_string($tmp_STATUS_TARGET_ELEMENT) . ',
                            "STATUS" : "' . $this->return_clean_json_string($tmp_STATUS) . '",
                            "STATUS_CODE" : "' . $this->return_clean_json_string($tmp_STATUS_CODE) . '",
                            "STATUS_MESSAGE" : ' . $this->return_clean_json_string($tmp_STATUS_MESSAGE) . ',
                            "ERROR_CODE" : "' . $this->return_clean_json_string($tmp_ERROR_CODE) . '",
                            "ERROR_MESSAGE" : "' . $this->return_clean_json_string($tmp_ERROR_MESSAGE) . '"
                            },{
                            "STATUS_TARGET_ELEMENT" : ' . $this->return_clean_json_string($tmp_STATUS_TARGET_ELEMENT) . ',
                            "STATUS" : "' . $this->return_clean_json_string($tmp_STATUS) . '",
                            "STATUS_CODE" : "1234567890",
                            "STATUS_MESSAGE" : ' . $this->return_clean_json_string($tmp_STATUS_MESSAGE) . ',
                            "ERROR_CODE" : "' . $this->return_clean_json_string($tmp_ERROR_CODE) . '",
                            "ERROR_MESSAGE" : "' . $this->return_clean_json_string($tmp_ERROR_MESSAGE) . '"
                            },{
                            "STATUS_TARGET_ELEMENT" : ' . $this->return_clean_json_string($tmp_STATUS_TARGET_ELEMENT) . ',
                            "STATUS" : "' . $this->return_clean_json_string($tmp_STATUS) . '",
                            "STATUS_CODE" : "0987654321",
                            "STATUS_MESSAGE" : ' . $this->return_clean_json_string($tmp_STATUS_MESSAGE) . ',
                            "ERROR_CODE" : "' . $this->return_clean_json_string($tmp_ERROR_CODE) . '",
                            "ERROR_MESSAGE" : "' . $this->return_clean_json_string($tmp_ERROR_MESSAGE) . '"
                            }],
                        "UI_SYNC_CONTROLLER_THREADS" : [
                            {
                            ' . $CHECKSUM_PROFILE_ID . '
                            ' . $PROGRAM_KEY . '
                            ' . $DEVICE_TYPE_CHANNEL . '
                            ' . $CANVAS_PROFILE_CONTENT . '
                            ' . $CANVAS_PROFILE_HASH . '
                            ' . $CANVAS_PROFILE_LOCK . '
                            ' . $CANVAS_PROFILE_LOCK_TTL . '
                            ' . $CANVAS_PROFILE_LOCK_ISACTIVE . '
                            ' . $CANVAS_PROFILES_DIMENSION_POSITION_CONTENT . '
                            ' . $CANVAS_PROFILES_DIMENSION_POSITION_CHECKSUM . '
                            ' . $CANVAS_PROFILES_DIMENSION_POSITION_LOCK . '
                            ' . $CANVAS_PROFILES_DIMENSION_POSITION_LOCK_TTL . '
                            ' . $CANVAS_PROFILES_DIMENSION_POSITION_LOCK_ISACTIVE . '
                            ' . $CONTENT_CHECKSUM_TTL . '
                            ' . $TITLE_CONTENT . '
                            ' . $TITLE_CHECKSUM . '
                            ' . $TITLE_CONTENT_LOCK . '
                            ' . $TITLE_CONTENT_LOCK_TTL . '
                            ' . $TITLE_CONTENT_LOCK_ISACTIVE . '
                            ' . $SOCIAL_CONTENT . '
                            ' . $SOCIAL_CHECKSUM . '
                            ' . $SOCIAL_CONTENT_LOCK . '
                            ' . $SOCIAL_CONTENT_LOCK_TTL . '
                            ' . $SOCIAL_CONTENT_LOCK_ISACTIVE . '
                            ' . $COLORS_CONTENT . '
                            ' . $COLORS_CHECKSUM . '
                            ' . $COLORS_CONTENT_LOCK . '
                            ' . $COLORS_CONTENT_LOCK_TTL . '
                            ' . $COLORS_CONTENT_LOCK_ISACTIVE . '
                            ' . $STATS_CONTENT . '
                            ' . $STATS_CHECKSUM . '
                            ' . $STATS_CONTENT_LOCK . '
                            ' . $STATS_CONTENT_LOCK_TTL . '
                            ' . $STATS_CONTENT_LOCK_ISACTIVE . '
                            ' . $RELAY_CONTENT . '
                            ' . $RELAY_CHECKSUM . '
                            ' . $RELAY_CONTENT_LOCK . '
                            ' . $RELAY_CONTENT_LOCK_TTL . '
                            ' . $RELAY_CONTENT_LOCK_ISACTIVE . '
                            ' . $REPORTING_CONTENT . '
                            ' . $REPORTING_CHECKSUM . '
                            ' . $REPORTING_CONTENT_LOCK . '
                            ' . $REPORTING_CONTENT_LOCK_TTL . '
                            ' . $REPORTING_CONTENT_LOCK_ISACTIVE . '
                            ' . $WILDCARD_CONTENT . '
                            ' . $WILDCARD_CHECKSUM . '
                            ' . $WILDCARD_CONTENT_LOCK . '
                            ' . $WILDCARD_CONTENT_LOCK_TTL . '
                            ' . $WILDCARD_CONTENT_LOCK_ISACTIVE . '
                            ' . $tmp_CRNRSTN_CACHE_CHECKSUM_TTL_DATA_DATEMODIFIED . '
                            ' . $tmp_CRNRSTN_CACHE_CHECKSUM_TTL_DATA_DATECREATED . '
                             "jony5_lifestyle_banner_checksum" : "8/16/2021 0345 :: Miss you, J5...my boy!"

                        }],
                        "ENVIRONMENTAL_CONFIGURATION" : [
                            {
                            ' . $tmp_CRNRSTN_ENVIRONMENTAL_RESOURCE_CONFIGURATION . '
                             "jony5_lifestyle_banner_checksum" : "8/16/2021 0345 :: Miss you, J5...my boy!"

                        }]

                    }]

                }';

                break;

        }

        return $tmp_json_data;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function init_ssdtla_session_data_packet()
    {

        $this->oSESSION_MGR->init_session();

        /*
        DATA HANDLING ARCHITECTURES
        -----
        G :: HTTP $_GET REQUEST.
        P :: HTTP $_POST REQUEST.
        H :: PHP SERVER SESSION ($_SESSION SUPER GLOBAL ARRAY).
        S :: CRNRSTN :: SSDTLA PACKET (SOAP WRAPPED ENCRYPTED PSSDTLA PACKET. THE BROWSER WILL TALK LIKE A SERVER).
        J :: CRNRSTN :: PSSDTLA PACKET (OPENSSL ENCRYPTED JSON OBJECT).
        C :: CARRIER PIGEON (AVIAN OF HOMING VARIANT)...OR BROWSER COOKIE...
        D :: DATABASE (MySQLi CONNECTION).
        R :: RUNTIME.
        O :: SIMPLE OBJECT ACCESS PROTOCOL (NuSOAP 0.9.5, SOAP 1.1).
        F :: SERVER LOCAL FILE SYSTEM.

        GPHSJCDROF

        */

        //
        // Initialize CRNRSTN :: Lightsaber 
        // RoCEv2 SOAP Services Layer 
        // (CLR-SSL) DATA TUNNEL LAYER 
        // PACKET - GPHSJCDRO
        //
        // Note: DATABASE DATA STORAGE 
        //       FORMAT WILL SHADOW USE 
        //       OF S01 AND P02 ON A 
        //       SESSION TO SESSION BASIS.
        $tmp_pssdtl_session_packet = $this->return_crnrstn_data_packet($this->R_data['int_flag']['R_channel_PSSDTLA']);

        error_log('[lnum ' . 
            __LINE__ . '] ' . '[mthd ' . 
            __METHOD__ . 
            '] $tmp_pssdtl_session_packet::[' . 
            $tmp_pssdtl_session_packet . 
            '] die();');

        die();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function init_ui_interact_profile()
    {

        /*
        <theme_configuration>
        <canvas z_index="60" window_edge_padding="20" outline_border_edge_line_width="2" 
        outline_border_edge_line_style="solid" outline_border_edge_line_color="#767676" 
        border_width="10" border_color="#FFF" border_opacity="0.3" background_color="#FFF" 
        background_opacity="1" inner_content_edge_padding="25" checksum="' . 
        $this->hash('60202solid#76767610#FFF0.3#FFF125') . '"></canvas>
        <mini_canvas left="84%" width="100" height="70" checksum="' . $this->hash('10070') . '"></mini_canvas>
        <signin_canvas width="260" height="305" checksum="' . $this->hash('260305') . '"></signin_canvas>
        <main_canvas width="1080" height="760" checksum="' . $this->hash('1080760') . '"></main_canvas>
        <eula_canvas width="700" height="400" checksum="' . $this->hash('700400') . '"></eula_canvas>
        <mit_license_canvas width="500" height="400" checksum="' . $this->hash('500400') . '"></mit_license_canvas>
        </theme_configuration>

        TODO :: Need to pass dynamic 
                ID="crnrstn_xxxx" to 
                the oCRNRSTN_USR for 
                XML return. 
        TODO :: See line 2196 USER :: 
                return_interact_ui_profile() 
                return XML with custom nav 
                IDS from oENV. 

        oENV LINE 1219 :: return_output_CRNRSTN_UI_MESSENGER() OUTPUT BELOW FOR NOTES ON WHAT TO INITIALIZE...:
        <div id="crnrstn_interact_ui_primary_nav_menu" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

            <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_menu" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MENU', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_menu_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MENU') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MENU') . '"></div>

        </div>

        <div id="crnrstn_interact_ui_primary_nav_close_x" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

            <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_CLOSE_X', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_close_x_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_CLOSE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_CLOSE') . '"></div>

        </div>

        <div id="crnrstn_interact_ui_primary_nav_fs_expand" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

            <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_FULLSCREEN_EXPAND', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_fs_expand_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FULLSCREEN') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FULLSCREEN') . '"></div>

        </div>

        <div id="crnrstn_interact_ui_primary_nav_minimize" class="crnrstn_interact_ui_primary_navgroup_lnk_border">

            <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_inactive" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_INACTIVE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_hvr" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_HOVER', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_click" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_CLICK', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize" class="crnrstn_interact_ui_primary_nav_img_shell"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_MINIMIZE') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_MINIMIZE') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_fivedev_sm" class="crnrstn_interact_ui_primary_nav_img_shell crnrstn_interact_ui_active"><img src="' . $this->return_creative('PRIMARY_NAV_BLUE00_MINIMIZE_FIVEDEV_SMALL', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FIVEDEV') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FIVEDEV') . '"></div>
            <div id="crnrstn_interact_ui_primary_nav_img_shell_minimize_glass_case" class="crnrstn_interact_ui_primary_nav_glass_case" onmouseover="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseover\', this);" onmouseout="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseout\', this);" onmousedown="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmousedown\', this);" onmouseup="oCRNRSTN_JS.crnrstn_interact_ui_ux(\'onmouseup\', this);"><img src="' . $this->return_creative('TRANSPARENT_1X1', CRNRSTN_BASE64) . '" width="40" height="40" alt="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_ALT_FIVEDEV') . '" title="' . $this->multi_lang_content_return('UI_PRIMARY_NAV_TITLE_FIVEDEV') . '"></div>

        </div>

        */

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function init_engagement_config()
    {

        if(!!$this->engagement_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])]){

            foreach($this->engagement_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])] as 
                $key => $engagement_config_file_path)
            {

                if($this->is_file($engagement_config_file_path)){

                    $oCRNRSTN_oWCR_ARRAY = array();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Extract access-by-IP 
                     * authorization profile 
                     * from file. 
                     *
                     */
                    $this->oLog_output_ARRAY[] = $this->error_log('We have a file to include ' . 
                                                        'and process for the initialization ' . 
                                                        'of engagement tag profiles from the ' . 
                                                        'CRNRSTN :: configuration file [' . 
                                                        $this->engagement_config_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])][$key] . 
                                                        '].', 
                                                        __LINE__, 
                                                        __METHOD__, 
                                                        __FILE__, 
                                                        $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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

                    include_once($engagement_config_file_path);

                    $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

                }else{

                    error_log(__LINE__ . 
                        ' env NOT AN ENGAGEMENT ' . 
                        'TRACKING CONFIG FILE [' . 
                        $engagement_config_file_path . 
                        '].');

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


                }

            }

        }else{

            if(!!$this->engagement_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]){

                foreach($this->engagement_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] as 
                    $key => $engagement_config_file_path)
                {

                    if($this->is_file($engagement_config_file_path)){

                        $oCRNRSTN_oWCR_ARRAY = array();

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract access-by-IP 
                         * authorization profile 
                         * from file. 
                         *
                         */
                        $this->oLog_output_ARRAY[] = $this->error_log('We have a file to ' . 
                                                            'include and process for the ' . 
                                                            'initialization of engagement ' . 
                                                            'tag profiles from the CRNRSTN :: ' . 
                                                            'configuration file [' . 
                                                            $this->engagement_config_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash][$key] . 
                                                            '].', 
                                                            __LINE__, 
                                                            __METHOD__, 
                                                            __FILE__, 
                                                            $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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


                        include_once($engagement_config_file_path);

                        $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

                    }else{

                        error_log(__LINE__ . 
                            ' env NOT AN ENGAGEMENT ' . 
                            'TRACKING CONFIG FILE [' . 
                            $engagement_config_file_path . 
                            '].');

                    }

                }

            }else{

                error_log(__LINE__ . 
                    ' env NO ENGAGEMENT ' . 
                    'TRACKING CONFIGURED.');

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
    private function __initSOAPAuthorizationProfiles()
    {

        if(!!$this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])]){

            foreach($this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])] as 
                $key => $soap_config_file_path)
            {

                if($this->is_file($soap_config_file_path)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Extract access-by-IP 
                     * authorization profile 
                     * from file. 
                     *
                     */
                    $this->oLog_output_ARRAY[] = $this->error_log('We have a file to include and process for the initialization of endpoint profiles authorized to connect to the CRNRSTN :: SOAP Services layer [' . $this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])][$key] . '].', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                    //include_once($this->soap_permissions_file_path_ARRAY[$this->hash($this->R_data['R_cluster_id'])][self::$env_key_hash][$key]);
                    include_once($soap_config_file_path);

                }else{

                    error_log(__LINE__ . 
                        ' env NOT A SOAP ' . 
                        'AUTH CONFIG FILE [' . 
                        $soap_config_file_path . 
                        '].');

                }

            }

        }else{

            if(!!$this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]){

                foreach($this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] as 
                    $key => $soap_config_file_path)
                {

                    if($this->is_file($soap_config_file_path)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract access-by-IP 
                         * authorization profile 
                         * from file. 
                         *
                         */
                        $this->oLog_output_ARRAY[] = $this->error_log('We have a file to include ' . 
                                                            'and process for the initialization ' . 
                                                            'of endpoint profiles authorized to ' . 
                                                            'connect to the CRNRSTN :: SOAP ' . 
                                                            'Services layer [' . 
                                                            $this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash][$key] . 
                                                            '].', 
                                                            __LINE__, 
                                                            __METHOD__, 
                                                            __FILE__, 
                                                            CRNRSTN_SETTINGS_CRNRSTN);
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

                        //include_once($this->soap_permissions_file_path_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash][$key]);
                        include_once($soap_config_file_path);

                    }else{

                        error_log(__LINE__ . 
                            ' env NOT A SOAP ' . 
                            'AUTH CONFIG FILE [' . 
                            $soap_config_file_path . 
                            '].');

                    }

                }

            }else{

                error_log(__LINE__ . 
                    ' env NO SOAP ' . 
                    'AUTH CONFIG.');

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
    function update_SOAP_services_oAuth($SOAP_oAuth)
    {

        $this->oSOAP_services_oAuth_manager[$SOAP_oAuth->serial] = $SOAP_oAuth;

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
    function update_SOAP_services_oClient($SOAP_oClient)
    {

        $this->oSOAP_services_oClient_manager[$SOAP_oClient->serial] = $SOAP_oClient;

        return true;

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
    function update_SOAP_services_oAuth_update_permissions(
             $origin_oAuth_serial, 
             $services_authorization_group_key, 
             $integer_constant)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oAuth_manager as 
            $serial => $SOAP_oAuth)
        {

            if($SOAP_oAuth->services_authorization_group_key == $services_authorization_group_key){

                if($serial != $origin_oAuth_serial){

                    $tmp_bit_state_nomination = 'CRNRSTN_SOAP_AUTH_MGR_' . $serial;
                    $this->initialize_serialized_bit($tmp_bit_state_nomination, $integer_constant);

                    $SOAP_oAuth->sync_update_permissions($integer_constant);

                }

            }

            $tmp_array[$serial] = $SOAP_oAuth;

        }

        $this->oSOAP_services_oAuth_manager = $tmp_array;

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
    function update_SOAP_services_oClient_update_permissions(
             $origin_oClient_serial, 
             $services_client_group_key, 
             $integer_constant)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $SOAP_oClient)
        {

            if($SOAP_oClient->services_client_group_key == $services_client_group_key){

                if($serial != $origin_oClient_serial){

                    $tmp_bit_state_nomination = 'CRNRSTN_SOAP_CLIENT_MGR_' . $serial;
                    $this->initialize_serialized_bit($tmp_bit_state_nomination, $integer_constant);

                    $SOAP_oClient->sync_update_permissions($integer_constant);

                }

            }

            $tmp_array[$serial] = $SOAP_oClient;

        }

        $this->oSOAP_services_oClient_manager = $tmp_array;

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
    function update_SOAP_services_oAuth_soap_encryption_config(
             $origin_oAuth_serial, 
             $services_authorization_group_key, 
             $encryptCipher, 
             $encryptSecretKey, 
             $hmac_alg, 
             $encryptOptions)
    {

        $tmp_array = array();
        $encryptSecretKey = $this->hash($encryptSecretKey, 'md5');

        foreach($this->oSOAP_services_oAuth_manager as 
            $serial => $SOAP_oAuth)
        {

            if($SOAP_oAuth->services_authorization_group_key == $services_authorization_group_key){

                if($serial != $origin_oAuth_serial)
                    $SOAP_oAuth->sync_soap_encryption_config(
                                 $encryptCipher, 
                                 $encryptSecretKey, 
                                 $hmac_alg, 
                                 $encryptOptions);

            }

            $tmp_array[$serial] = $SOAP_oAuth;

        }

        $this->oSOAP_services_oAuth_manager = $tmp_array;

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
    function update_SOAP_services_oClient_soap_encryption_config(
             $origin_oClient_serial, 
             $services_client_group_key, 
             $encryptCipher, 
             $encryptSecretKey, 
             $hmac_alg, 
             $encryptOptions)
    {

        $tmp_array = array();

        $encryptSecretKey = $this->hash($encryptSecretKey, 'md5');

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $SOAP_oClient)
        {

            if($SOAP_oClient->services_client_group_key == $services_client_group_key){

                if($serial != $origin_oClient_serial)
                    $SOAP_oClient->sync_soap_encryption_config(
                                   $encryptCipher, 
                                   $encryptSecretKey, 
                                   $hmac_alg, 
                                   $encryptOptions);

            }

            $tmp_array[$serial] = $SOAP_oClient;

        }

        $this->oSOAP_services_oClient_manager = $tmp_array;

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
    function update_SOAP_services_oClient_activate_SOAP_method(
             $origin_oAuth_serial, 
             $services_client_group_key, 
             $soap_services_method_activate_ARRAY, 
             $soap_services_method_deactivate_ARRAY)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $SOAP_oClient)
        {

            if($SOAP_oClient->services_client_group_key == $services_client_group_key){

                if($serial != $origin_oAuth_serial){

                    $SOAP_oClient->sync_activate_SOAP_method(
                                   $soap_services_method_activate_ARRAY, 
                                   $soap_services_method_deactivate_ARRAY);
                    $SOAP_oClient->sync_deactivate_SOAP_method($soap_services_method_deactivate_ARRAY);

                }

            }

            $tmp_array[$serial] = $SOAP_oClient;

        }

        $this->oSOAP_services_oClient_manager = $tmp_array;

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
    function update_SOAP_services_oClient_deactivate_SOAP_method(
             $origin_oAuth_serial, 
             $services_client_group_key, 
             $soap_services_method_deactivate_ARRAY)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $SOAP_oClient)
        {

            if($SOAP_oClient->services_client_group_key == $services_client_group_key){

                if($serial != $origin_oAuth_serial)
                    $SOAP_oClient->sync_deactivate_SOAP_method($soap_services_method_deactivate_ARRAY);

            }

            $tmp_array[$serial] = $SOAP_oClient;

        }

        $this->oSOAP_services_oClient_manager = $tmp_array;

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
    function update_SOAP_services_oAuth_IP_denyAccess(
             $origin_oAuth_serial, 
             $services_authorization_group_key, 
             $ip_auth_denial_ARRAY)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oAuth_manager as 
            $serial => $SOAP_oAuth)
        {

            if($SOAP_oAuth->services_authorization_group_key == $services_authorization_group_key){

                if($SOAP_oAuth->serial != $origin_oAuth_serial)
                    $SOAP_oAuth->sync_IP_denyAccess($ip_auth_denial_ARRAY);

            }

            $tmp_array[$serial] = $SOAP_oAuth;

        }

        $this->oSOAP_services_oAuth_manager = $tmp_array;

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
    function update_SOAP_services_oClient_IP_denyAccess(
             $origin_oClient_serial, 
             $services_client_group_key, 
             $ip)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $SOAP_oClient)
        {

            if($SOAP_oClient->services_client_group_key == $services_client_group_key){

                if($SOAP_oClient->serial != $origin_oClient_serial)
                    $SOAP_oClient->sync_IP_denyAccess($ip);

            }

            $tmp_array[$serial] = $SOAP_oClient;

        }

        $this->oSOAP_services_oClient_manager = $tmp_array;

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
    function update_SOAP_services_oAuth_IP_exclusiveAccess(
             $origin_oAuth_serial, 
             $services_authorization_group_key, 
             $ip)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oAuth_manager as 
            $serial => $SOAP_oAuth)
        {

            if($SOAP_oAuth->services_authorization_group_key == $services_authorization_group_key){

                if($serial != $origin_oAuth_serial){

                    $SOAP_oAuth->sync_IP_exclusiveAccess($ip);

                }

            }

            $tmp_array[$serial] = $SOAP_oAuth;

        }

        $this->oSOAP_services_oAuth_manager = $tmp_array;

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
    function update_SOAP_services_oClient_IP_exclusiveAccess(
             $origin_oClient_serial, 
             $services_client_group_key, 
             $ip)
    {

        $tmp_array = array();

        foreach($this->oSOAP_services_oClient_manager as 
            $serial => $SOAP_oClient)
        {

            if($SOAP_oClient->services_client_group_key == $services_client_group_key){

                if($serial != $origin_oClient_serial){

                    $SOAP_oClient->sync_IP_exclusiveAccess($ip);

                }

            }

            $tmp_array[$serial] = $SOAP_oClient;

        }

        $this->oSOAP_services_oClient_manager = $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function update_SOAP_services_access_manager($oSOAP_svc_mgr)
    {

        $this->oSOAP_services_access_manager[$oSOAP_svc_mgr->serial] = $oSOAP_svc_mgr;

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_SOAP_SVC_debugMode()
    {

        foreach($this->oSOAP_services_access_manager as 
            $serial => $oSOAP_svc_mgr)
        {

            //error_log(__LINE__ . ' env - [' . 
            //    $serial . '][' . 
            //    is_object($oSOAP_svc_mgr) . '][' . 
            //    $oSOAP_svc_mgr->CRNRSTN_NUSOAP_SVC_debugMode . 
            //    '].');
            return $oSOAP_svc_mgr->CRNRSTN_NUSOAP_SVC_debugMode;

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

        //$AUTHORIZATION_GRANTED = false;
        $AUTHORIZATION_GRANTED_oAUTH = false;
        $AUTHORIZATION_GRANTED_oCLIENT = false;

        foreach($this->oSOAP_services_access_manager as 
            $serial => $oSOAP_svc_mgr)
        {

            error_log(__LINE__ . 
                ' env - RUN isAuthorized_oAuth()...');
            if($oSOAP_svc_mgr->isAuthorized_oAuth(
                               $CRNRSTN_SOAP_SVC_AUTH_KEY, 
                               $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES) == true)
            {

                $AUTHORIZATION_GRANTED_oAUTH = true;

            }

            error_log(__LINE__ . 
                ' env - RUN isAuthorized_oClient()...');
            if($oSOAP_svc_mgr->isAuthorized_oClient(
                               $USERNAME, 
                               $PASSWORD, 
                               $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES, 
                               $CRNRSTN_SOAP_SVC_METHOD_REQUESTED, 
                               $CRNRSTN_SOAP_ACTION_TYPE) == true)
            {

                $AUTHORIZATION_GRANTED_oCLIENT = true;

            }

        }

        if($AUTHORIZATION_GRANTED_oAUTH && 
            $AUTHORIZATION_GRANTED_oCLIENT)
        {

            error_log(__LINE__ . 
                ' SERVER (env) - proxy ' . 
                'login successful.');

            return true;

        }else{

            error_log(__LINE__ . 
                ' SERVER (env) - proxy ' . 
                'login denied.');

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
    private function initEnvLoggingProfile()
    {

        //
        // DETECTED RESOURCE 
        // KEY.
        if(isset(self::$env_key_hash)){

            //
            // CLEAR OUT BITS 
            // FOR NEW LOGGING 
            // PROFILE DATA. 
            foreach(self::$system_resource_constants_ARRAY as 
                $key => $integer_constant)
            {

                //
                // LET'S TRY THIS. 
                //
                // OTHERWISE, WE HAVE 
                // TO READ() AND THEN 
                // TOGGLE() IF TRUE. 
                $this->initialize_bit($integer_constant, false);

            }

            //
            // RETRIEVE LOGGING 
            // PROFILE DATA FROM 
            // CRNRSTN ::
            self::$system_logging_output_profile_ARRAY = $this->return_logging_profile(self::$env_key_hash);
            self::$sys_logging_meta_ARRAY              = $this->return_logging_meta(self::$env_key_hash);

            //
            // SESSION DRIVEN RRS MAP 
            // ASSET RETURNS (E.G. IMAGE 
            // FROM A LINK) HAPPEN BEFORE 
            // LOGGING CONFIGURATION. 
            //
            // THE ENV CLASS OBJECT 
            // INSTANTIATION (USED FOR 
            // BUILDING RESPONSE HEADER) 
            // EXPOSES THIS MISSING 
            // CONFIG DATA. 
            //
            // WE MAY NOT HAVE AN ARRAY. 
            //
            //
            // 5 :: Thursday, March 23, 2023 @ 2328 hrs
            if(is_array(self::$system_logging_output_profile_ARRAY)){

                //
                // FLIP BITWISE DATA 
                // FOR LOGGING PROFILE. 
                foreach(self::$system_logging_output_profile_ARRAY as 
                    $key => $int_const_profile)
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CRNRSTN :: ICY_DIGITALITCC-BITMASK INTEGER
                     * STATE (BIT FLIP) MANAGEMENT SERVICES LAYER.
                     * 
                     * CRNRSTN :: UGC DATA 
                     * INPUT [ICY_DIGITALITCC-BITMASK]
                     * 
                     * $this->initialize_bit($int_const_profile, true);
                     *
                     */
                    $this->error_log('CRNRSTN :: LOGGING PROFILE [' . 
                           strval($int_const_profile) . 
                           '] INIT BY-PASS FIRED - CRNRSTN ' . 
                           'ICY_BITMASK LOG PROFILE INITIALIZATION. ' . 
                           __METHOD__ . ' called. [rtime ' . 
                           $this->wall_time() . ' secs]', 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                }

            }

            error_log('[lnum ' . __LINE__ . 
                '] [' . __CLASS__ . 
                '] Re-arch CLR-SSL Logging ' . 
                'Mgmt. See use of ' . 
                'sync_to_environment() twice in oENV.');

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

            //
            // NOW THAT WE HAVE 
            // LOGGING PROFILE DATA...
            //
            // SYNC the LOGGING 
            // PROFILE MANAGER. 
            //self::$R_log_output_mgr->sync_to_environment(NULL, $this);
            $this->sync_olog_profile_manager(self::$R_log_output_mgr);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initRuntimeConfig()
    {

        //$this->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add(
        //                                           self::$env_key_hash, 
        //                                           'CRNRSTN_' . $this->R_data['R_cluster_id'] . 'CRNRSTN_ENV_KEY_CRC');

        //
        // INITIALIZE CONFIG 
        // AND ENV KEYS. 
        //$_SESSION['R_cluster_id'] = $this->R_data['R_cluster_id'];  # MOVED TO CRNRSTN __construct() @ ~line 105
        //$_SESSION['CRNRSTN_' . $this->R_data['R_cluster_id']]['CRNRSTN_ENV_KEY_CRC'] = self::$env_key_hash;
        $clr_ssl_msg = 'Initialize session[' . 
                       session_id() . 
                       '] with CRNRSTN :: Cluster ID [' . 
                       $this->R_data['R_cluster_id'] . 
                       '] and environmental resource key [' . 
                       self::$env_key_hash . 
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

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initializeErrorReporting()
    {

        if(isset($this->env_err_reporting_profile_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash])){
        //if($this->isset_resource('data_value', 'err_reporting_profile', 'CRNRSTN::RESOURCE::CONFIGURATION') == true){

            $this->oLog_output_ARRAY[] = $this->error_log('Initialize server ' . 
                                                'error_reporting() to [' . 
                                                $this->env_err_reporting_profile_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] . 
                                                '].', 
                                                __LINE__, 
                                                __METHOD__, 
                                                __FILE__, 
                                                $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

            error_reporting((int) $this->env_err_reporting_profile_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]);

            //$tmp_int = $this->get_resource('err_reporting_profile', 0, 'CRNRSTN::RESOURCE::CONFIGURATION');
            //$this->oLog_output_ARRAY[] = $this->error_log('Initialize server error_reporting() to [' . $tmp_int . '].', __LINE__, __METHOD__, __FILE__, CRNRSTN_SETTINGS_CRNRSTN);
            //error_reporting((int) $tmp_int);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initExclusiveAccess()
    {

        //
        // PROCESS IP ADDRESS 
        // ACCESS AND RESTRICTIONS 
        // FOR SELECTED ENVIRONMENT. 
        if($this->is_file($this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash])){

            //
            // EXTRACT ACCESS-BY-IP 
            // AUTHORIZATION PROFILE 
            // FROM FILE. 
            $this->oLog_output_ARRAY[] = $this->error_log('We have a file to include ' . 
                                                'and process for exclusive access IP ' . 
                                                'restrictions at [' . 
                                                $this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] . 
                                                '].', 
                                                __LINE__, 
                                                __METHOD__, 
                                                __FILE__, 
                                                $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

            include_once($this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]);

        }else{

            //
            // DO WE HAVE ANY 
            // IP DATA TO PROCESS? 
            if($this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] != ''){

                $this->oLog_output_ARRAY[] = $this->error_log('Process grant exclusive ' . 
                                                    'access IP[' . 
                                                    $this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] . 
                                                    '] for this connection.', 
                                                    __LINE__, 
                                                    __METHOD__, 
                                                    __FILE__, 
                                                    $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                $this->oCRNRSTN_IPSECURITY_MGR->grantAccessWKey(
                                                self::$env_key_hash, 
                                                $this->grant_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]);

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
    private function initDenyAccess()
    {

        if($this->is_file($this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash])){

            //
            // EXTRACT ACCESS-BY-IP 
            // AUTHORIZATION PROFILE 
            // FROM FILE. 
            $this->oLog_output_ARRAY[] = $this->error_log('We have a file to ' . 
                                                'include and process for deny ' . 
                                                'access IP restrictions at [' . 
                                                $this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] . 
                                                '].', 
                                                __LINE__, 
                                                __METHOD__, 
                                                __FILE__, 
                                                $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

            include_once($this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]);

        }else{

            if($this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] != ''){

                $this->oLog_output_ARRAY[] = $this->error_log('Process deny access IP[' . 
                                                    $this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash] . 
                                                    '] for this connection.', 
                                                    __LINE__, 
                                                    __METHOD__, 
                                                    __FILE__, 
                                                    $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                $this->oCRNRSTN_IPSECURITY_MGR->denyAccessWKey(
                                                self::$env_key_hash, 
                                                $this->deny_accessIP_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]);

            }else{

                //
                // No IP addresses 
                // provided. 
                // 
                // Nothing to do here.
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
    private function initAdminAccess()
    {

        $tmp_cnt = sizeof($this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['email']);

        for($i = 0; $i < $tmp_cnt; $i++){

            $tmp_email = $this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['email'][$i];
            $tmp_pwdhash = $this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['pwdhash'][$i];
            $tmp_ttl = $this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['ttl'][$i];

            if(isset($this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['max_login_attempts'][$i])){

                $this->max_login_attempts = $this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['max_login_attempts'][$i];

            }else{

                $this->max_login_attempts = 10;

            }

            if(isset($this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['seconds_inactive'][$i])){

                $this->max_seconds_inactive = $this->add_admin_creds_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]['seconds_inactive'][$i];

            }else{

                $this->max_seconds_inactive = 900;

            }

            $this->add_administrative_account($tmp_email, $tmp_pwdhash, $tmp_ttl);

        }

        return true;

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
    private function add_administrative_account(
                     $email, 
                     $pwdhash, 
                     $ttl)
    {

        //
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // Return an instantiation of
        // the CRNRSTN :: Lightsaber
        // SOAP Services
        // Layer Administration.
        //
        //
        // 5 :: Monday, July 15, 2024 @ 2014 hrs.
        //
        // $tmp_oAdmin = new crnrstn_administrative_account($this, $email, $pwdhash, $ttl, $this->max_login_attempts, $this->max_seconds_inactive);
        $tmp_oAdmin = $this->return_registered_resource('new', 'crnrstn_administrative_account', $this, $email, $pwdhash, $ttl, $this->max_login_attempts, $this->max_seconds_inactive);

        $tmp_serial = $tmp_oAdmin->account_get_resource('serial');
        $this->oAdminAccount_ARRAY[$tmp_serial] = $tmp_oAdmin;

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_max_login_attempts()
    {

        return $this->max_login_attempts;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_max_seconds_inactive()
    {

        return $this->max_seconds_inactive;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_login_attempts()
    {

        return 0;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_env_key_hash()
    {

        //
        // RETURN RESOURCE 
        // KEY FOR DETECTED 
        // ENVIRONMENT. 
        return self::$env_key_hash;

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

        return $this->is_bit_set($encryption_channel);

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
    private function return_data_encrypted(
                     $data, $encryption_channel, 
                     $cipher_override, 
                     $secret_key_override, 
                     $hmac_algorithm_override, 
                     $options_bitwise_override)
    {

        try{

            $this->total_bytes_encrypted += strlen($data);

            switch($encryption_channel){
                case $this->R_data['int_flag']['R_encrypt_TUNNEL']:

                    $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_encrypt_DATABASE']:

                    $data_type_family = 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_encrypt_SESSION']:

                    $data_type_family = 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_encrypt_COOKIE']:

                    $data_type_family = 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_encrypt_SOAP']:

                    $data_type_family = 'CRNRSTN::RESOURCE::SOAP_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_OERSL']:

                    $data_type_family = 'CRNRSTN::RESOURCE::OERSL_ENCRYPTION';

                break;
                default:
                    //
                    // CRNRSTN_ENCRYPT_TUNNEL

                    //
                    // RETRIEVE DATA.
                    // self::$oCRNRSTN_CONFIG_MGR->input_data_value($encrypt_cipher, 'encrypt_cipher','CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION',NULL, 'R_channel_RUNTIME', $env_key);
                    $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';
                    $this->error_log('Unknown encryption channel ' . 
                           'constant provided to ' . 
                           __METHOD__ .
                           '. A base-line Tunnel ' . 
                           'encryption profile ' . 
                           'has been applied.', 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           'CRNRSTN_SETTINGS_CRNRSTN');
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

                    error_log(
                        __LINE__ . ' ' . 
                        __METHOD__ . 
                        ' Unknown encryption channel ' . 
                        'constant provided to ' . 
                        __FUNCTION__ . 
                        '. Tunnel encryption profile ' . 
                        'has been applied.');

                break;

            }

            $tmp_encrypt_cipher     = $this->get_resource('encrypt_cipher', 0, $data_type_family);
            $tmp_encrypt_secret_key = $this->get_resource('encrypt_secret_key', 0, $data_type_family);
            $tmp_encrypt_options    = $this->get_resource('encrypt_options', 0, $data_type_family);
            $tmp_hmac_alg           = $this->get_resource('hmac_alg', 0, $data_type_family);
            // error_log(__LINE__ . ' ' . __METHOD__ .' $tmp_encrypt_cipher[' . $tmp_encrypt_cipher . '].  $tmp_encrypt_secret_key[' . $tmp_encrypt_secret_key . ']. $tmp_encrypt_options[' . $tmp_encrypt_options . ']. $tmp_hmac_alg[' . $tmp_hmac_alg . ']. [' . print_r(self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], true) . '].');
            // error_log(__LINE__ . ' ' . __METHOD__ .' $tmp_encrypt_cipher[' . $tmp_encrypt_cipher . ']. ');
            // error_log(__LINE__ . ' ' . __METHOD__ .' $tmp_encrypt_secret_key[' . $tmp_encrypt_secret_key . '].');
            // error_log(__LINE__ . ' ' . __METHOD__ .' $tmp_encrypt_options[' . $tmp_encrypt_options . '].');
            // error_log(__LINE__ . ' ' . __METHOD__ .' $tmp_hmac_alg[' . $tmp_hmac_alg . '].');

            if(isset($cipher_override) || 
                strlen($tmp_encrypt_cipher) > 0)
            {

                if(!isset($secret_key_override)){

                    //error_log('2902 tunnelParamEncrypt - secret_key from session...');
                    $secret_key = $tmp_encrypt_secret_key;

                }else{

                    $secret_key = $secret_key_override;
                    $secret_key = openssl_digest(
                                  $secret_key, 
                                  self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], 
                                  true);

                }

                //
                // ENABLE CIPHER OVERRIDE :: v2.0.0
                if(!isset($cipher_override))
                    //error_log('2916 tunnelParamEncrypt - cipher from session...');
                    $encrypt_cipher = $tmp_encrypt_cipher;
                else
                    $encrypt_cipher = $cipher_override;

                //
                // ENABLE OPTIONS BITWISE OVERRIDE :: v2.0.0
                if(!isset($options_bitwise_override))
                    //error_log('2942 tunnelParamEncrypt - bitwise from session...');
                    $options_bitwise = $tmp_encrypt_options;
                else
                    $options_bitwise = $options_bitwise_override;

                //
                // ENABLE HMAC ALG OVERRIDE :: v2.0.0
                if(!isset($hmac_algorithm_override))
                    //error_log('2929 tunnelParamEncrypt - hmac from session...');
                    $hmac_algorithm = $tmp_hmac_alg;
                else
                    $hmac_algorithm = $hmac_algorithm_override;

                //error_log(__LINE__ . ' ' . __METHOD__ .' $secret_key[' . $secret_key . '].  $encrypt_cipher[' . $encrypt_cipher . ']. $options_bitwise[' . $options_bitwise . ']. $tmp_hmac_alg[' . $tmp_hmac_alg . ']. $hmac_algorithm[' . $hmac_algorithm . ']. openssl_digest_profile_ARRAY[' . print_r(self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], true) . ']. die();');

                error_log(__LINE__ . ' ' . __METHOD__ .' $secret key[' . $secret_key . '].');
                error_log(__LINE__ . ' ' . __METHOD__ .' $encrypt cipher[' . $encrypt_cipher . '].');
                error_log(__LINE__ . ' ' . __METHOD__ .' $options bitwise[' . $options_bitwise . '].');
                error_log(__LINE__ . ' ' . __METHOD__ .' $tmp hmac alg[' . $tmp_hmac_alg . '].');
                error_log(__LINE__ . ' ' . __METHOD__ .' $hmac algorithm[' . $hmac_algorithm . '].');
                error_log(__LINE__ . ' ' . __METHOD__ .' $openssl digest profile ARRAY[' . print_r(self::$openssl_digest_profile_ARRAY, true) . ']. die();');

                $tmp = strlen(array('345678'));
                die();

                #
                # Source: http://php.net/manual/en/function.openssl-encrypt.php
                #
                $ivlen          = openssl_cipher_iv_length($cipher = $encrypt_cipher);
                $iv             = openssl_random_pseudo_bytes($ivlen);
                $ciphertext_raw = openssl_encrypt($data, $encrypt_cipher, $secret_key, $options = $options_bitwise, $iv);
                $hmac           = hash_hmac($hmac_algorithm, $ciphertext_raw, $secret_key, $as_binary = true);
                $ciphertext     = base64_encode($iv . $hmac . $ciphertext_raw);

                //$this->print_r('$ciphertext=[' . strlen($ciphertext) . '] $cipher=[' . $encrypt_cipher . '] $secret_key=[' . $secret_key . '] $options_bitwise=[' . $options_bitwise . '] $hmac_algorithm=[' . $hmac_algorithm . '] $data_len=[' . strlen($data) . '].', 'OpenSSL Integrations Testing', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);

                return $ciphertext;

            }else{

                //
                // DETERMINE WHO ALL IS MISSING DATA
                if(!isset($secret_key_override)){

                    $secret_key = $tmp_encrypt_secret_key;

                }else{

                    $secret_key = $secret_key_override;
                    $secret_key = openssl_digest($secret_key, self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], true);

                }

                if(!isset($cipher_override))
                    $cipher = $tmp_encrypt_cipher;
                else
                    $cipher = $cipher_override;

                if(!isset($hmac_algorithm_override))
                    $hmac_algorithm = $tmp_hmac_alg;
                else
                    $hmac_algorithm = $hmac_algorithm_override;

                $tmp_stripe_key_ARRAY = $this->return_stripe_key_ARRAY('$secret_key', '$cipher', '$hmac_algorithm');
                $tmp_param_err_str_ARRAY = $this->return_regression_stripe_ARRAY('MISSING_STRING_DATA', $tmp_stripe_key_ARRAY, $secret_key, $cipher, $hmac_algorithm);

                $tmp_param_missing_str = $tmp_param_err_str_ARRAY['string'];
                $this->error_log('Encryption of data aborted due missing of parameters. ' . $tmp_param_missing_str, __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

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

                return $data;

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
             * Sunday, June 30, 2024 @ 1542 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            return NULL;

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
     * @access private
     *
     */
    private function return_data_decrypted(
                     $data, 
                     $encryption_channel, 
                     $cipher_override, 
                     $secret_key_override, 
                     $hmac_algorithm_override, 
                     $options_bitwise_override)
    {

        try{

            switch($encryption_channel){
                case $this->R_data['int_flag']['R_encrypt_TUNNEL']:

                    $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_channel_DATABASE']:

                    $data_type_family = 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_channel_SESSION']:

                    $data_type_family = 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_channel_COOKIE']:

                    $data_type_family = 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                     $this->R_data['int_flag']['R_channel_SOAP']:

                    $data_type_family = 'CRNRSTN::RESOURCE::SOAP_ENCRYPTION';

                break;
                case $this->R_data['int_flag']['R_encrypt_OERSL']:

                    $data_type_family = 'CRNRSTN::RESOURCE::OERSL_ENCRYPTION';

                break;
                default:
                    //
                    // R_encrypt_TUNNEL

                    //
                    // RETRIEVE DATA
                    // self::$oCRNRSTN_CONFIG_MGR->input_data_value($encrypt_cipher, 'encrypt_cipher','CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION', NULL, 'R_channel_RUNTIME', $env_key);
                    $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';
                    $this->error_log('Unknown decryption channel constant provided to ' . __METHOD__ .'. Tunnel encryption profile has been applied.', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                break;

            }

            $tmp_encrypt_cipher     = $this->get_resource('encrypt_cipher', 0, $data_type_family);
            $tmp_encrypt_secret_key = $this->get_resource('encrypt_secret_key', 0, $data_type_family);
            $tmp_encrypt_options    = $this->get_resource('encrypt_options', 0, $data_type_family);
            $tmp_hmac_alg           = $this->get_resource('hmac_alg', 0, $data_type_family);

            if(isset($cipher_override) || 
                (strlen($tmp_encrypt_cipher) > 0))
            {

                //
                // ENABLE CIPHER OVERRIDE :: v2.0.0
                if(!isset($cipher_override))
                    $encrypt_cipher = $tmp_encrypt_cipher;
                else
                    $encrypt_cipher = $cipher_override;

                if(!isset($secret_key_override)){

                    $secret_key = $tmp_encrypt_secret_key;

                }else{

                    $secret_key = $secret_key_override;
                    $secret_key = openssl_digest($secret_key, self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], true);

                }

                //
                // ENABLE OPTIONS BITWISE OVERRIDE :: v2.0.0
                if(!isset($options_bitwise_override))
                    $options_bitwise = $tmp_encrypt_options;
                else
                    $options_bitwise = $options_bitwise_override;

                //
                // ENABLE HMAC ALG OVERRIDE :: v2.0.0
                if(!isset($hmac_algorithm_override))
                    $hmac_alg = $tmp_hmac_alg;
                else
                    $hmac_alg = $hmac_algorithm_override;

                //$this->print_r('$cipher=[' . $encrypt_cipher . '] $secret_key=[' . $secret_key . '] $options_bitwise=[' . $options_bitwise . '] $hmac_algorithm=[' . $hmac_alg . '] $data_len=[' . strlen($data) . '].', 'OpenSSL Integrations Testing', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);

                #
                # Source: http://php.net/manual/en/function.openssl-encrypt.php
                #
                $c                  = base64_decode($data);
                $ivlen              = openssl_cipher_iv_length($cipher = $encrypt_cipher);
                $iv                 = substr($c, 0, $ivlen);
                $hmac               = substr($c, $ivlen, $sha2len = 32);
                $ciphertext_raw     = substr($c, $ivlen + $sha2len);
                $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $secret_key, $options = $options_bitwise, $iv);
                $calcmac            = hash_hmac($hmac_alg, $ciphertext_raw, $secret_key, $as_binary = true);

                if(hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
                {
                    return $original_plaintext;

                }else{

                    //$this->print_r('die(); $cipher=[' . $encrypt_cipher . '] $secret_key=[' . $secret_key . '] $options_bitwise=[' . $options_bitwise . '] $hmac_algorithm=[' . $hmac_alg . '] $data_len=[' . strlen($data) . '].', 'OpenSSL Integrations Testing', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);

                    //die();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Data Decryption ' . 
                        'Notice :: Oops. Something went wrong. ' . 
                        'Hash_equals comparison failed during ' . 
                        'data decryption.');

                }

            }else{

                //
                // DETERMINE WHO ALL IS MISSING DATA
                if(!isset($secret_key_override)){

                    $secret_key = $tmp_encrypt_secret_key;

                }else{

                    $secret_key = $secret_key_override;
                    $secret_key = openssl_digest($secret_key, self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], true);

                }

                if(!isset($cipher_override))
                    $cipher = $tmp_encrypt_cipher;
                else
                    $cipher = $cipher_override;

                if(!isset($hmac_algorithm_override))
                    $hmac_algorithm = $tmp_hmac_alg;
                else
                    $hmac_algorithm = $hmac_algorithm_override;

                $tmp_stripe_key_ARRAY    = $this->return_stripe_key_ARRAY('$secret_key', '$cipher', '$hmac_algorithm');
                $tmp_param_err_str_ARRAY = $this->return_regression_stripe_ARRAY('MISSING_STRING_DATA', $tmp_stripe_key_ARRAY, $secret_key, $cipher, $hmac_algorithm);

                $tmp_param_missing_str = $tmp_param_err_str_ARRAY['string'];
                $this->error_log('Decryption of data aborted due to missing of parameters. ' . $tmp_param_missing_str, __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

//                die();

                //
                // NO ENCRYPTION. RETURN VAL
                return $data;

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
             * Sunday, June 30, 2024 @ 1542 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                  __NAMESPACE__);

            return NULL;

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
    function data_encrypt(
             $data = NULL, 
             $encryption_channel = 'R_encrypt_TUNNEL', 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        /*
        case 'R_encrypt_OERSL':
        case 'R_encrypt_GET':
        case 'R_encrypt_POST':
        case 'R_encrypt_DATABASE':
        case 'R_encrypt_SESSION':
        case 'R_encrypt_COOKIE':
        case 'R_encrypt_SOAP':
        case 'R_encrypt_TUNNEL':

        case 'encrypt_cipher':
        case 'encrypt_secret_key':
        case 'encrypt_options':
        case 'hmac_alg':
        case 'data_profile_ARRAY':
            // $tmp_data_profile_ARRAY['data_type_family'] = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';
            // $tmp_data_profile_ARRAY['data_type_title'] = 'CRNRSTN :: TUNNEL';
            // $tmp_data_profile_ARRAY['data_type_encryption_channel'] = CRNRSTN_ENCRYPT_TUNNEL;

        $data_type_family = $this->return_encryption_data_type_family('R_encrypt_DATABASE');

        //
        // The CRNRSTN :: Lightsaber RoCEv2 SOAP
        // Services Layer Multi-Channel
        // Decoupled Data Object (MC-DDO)
        // Data Storage Services Layer.
        //
        //
        // 5
        //
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // CRNRSTN :: UGC DATA INPUT [HASH ACCELERATION]
        $tmp_ = $this->add_resource($tmp_key, $tmp_hash_val, 'CRNRSTN::RESOURCE::HASH_ACCELERATION', 'R_channel_SESSION', 0);
        $tmp_ = $this->get_resource('err_reporting_profile', 0, 'CRNRSTN::RESOURCE::CONFIGURATION');
        $tmp_ = $this->get_resource_count('err_reporting_profile', 'CRNRSTN::RESOURCE::CONFIGURATION');
        if($this->isset_resource('data_value', 'err_reporting_profile', 'CRNRSTN::RESOURCE::CONFIGURATION') == true){}

        */

        try{

            if(isset($data)){

                if(is_string($encryption_channel)) 
                    // 5 :: Sunday, July 26, 2026 @ 1238 hrs.
                    $encryption_channel = $this->R_data['int_flag'][$encryption_channel];

                //
                // DATA TYPE MUST BE ENCRYPTABLE...AND SAFE FOR URI
                //if(in_array(gettype($data), $this->encryptableDataTypes)){
                if(isset($this->encryptableDataTypes[gettype($data)])){

                    $tmp_encrypt_val = $this->return_data_encrypted(
                                              $data, 
                                              $encryption_channel, 
                                              $cipher_override, 
                                              $secret_key_override, 
                                              $hmac_algorithm_override, 
                                              $options_bitwise_override);

                    //
                    // MAKE SAFE FOR URI PASSTHROUGH.
                    $tmp_encrypt_val = urlencode($tmp_encrypt_val);

                    return $tmp_encrypt_val;

                }else{

                    //
                    // NOT ENCRYPTABLE
                    return NULL;

                }

            }else{

                //
                // NOT ENCRYPTABLE
                return NULL;

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
             * Sunday, June 30, 2024 @ 1542 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

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
     * @access private
     *
     */
    function data_decrypt(
             $data = NULL, 
             $encryption_channel = 'R_encrypt_TUNNEL', 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        try{

            if(!isset($data) || 
                $data == '')
            {

                return NULL;

            }else{

                //
                // BACK OUT OF 
                // URL ENCODING. 
                $data = urldecode($data);

                if(is_string($encryption_channel)) 
                    // 5 :: Sunday, July 26, 2026 @ 1237 hrs.
                    $encryption_channel = $this->R_data['int_flag'][$encryption_channel];

                return $this->return_data_decrypted(
                              $data, 
                              $encryption_channel, 
                              $cipher_override, 
                              $secret_key_override, 
                              $hmac_algorithm_override, 
                              $options_bitwise_override);

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
             * Sunday, June 30, 2024 @ 1542 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            return NULL;

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
    function return_encrypt_settings(
             $val, 
             $encryption_channel = 'R_encrypt_TUNNEL', 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        $tmp_settings_array = array();
        $tmp_settings_array['raw data length'] = strlen($val);

        if(is_string($encryption_channel)) 
            $encryption_channel = $this->R_data['int_flag'][$encryption_channel];

        switch($encryption_channel){
            case $this->R_data['int_flag']['R_encrypt_TUNNEL']:

                $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & $this->R_data['int_flag']['R_channel_DATABASE']:

                $data_type_family = 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & $this->R_data['int_flag']['R_channel_SESSION']:

                $data_type_family = 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & $this->R_data['int_flag']['R_channel_COOKIE']:

                $data_type_family = 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & $this->R_data['int_flag']['R_channel_SOAP']:

                $data_type_family = 'CRNRSTN::RESOURCE::SOAP_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_OERSL']:

                $data_type_family = 'CRNRSTN::RESOURCE::OERSL_ENCRYPTION';

            break;
            default:
                //
                // 'R_encrypt_TUNNEL'

                //
                // Retrieve data.
                // self::$oCRNRSTN_CONFIG_MGR->input_data_value(
                //                             $encrypt_cipher, 
                //                             'encrypt_cipher', 
                //                             'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION', 
                //                             NULL, 
                //                             'R_channel_RUNTIME', 
                //                             $env_key);
                $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';
                $this->error_log('Unknown encryption channel ' . 
                       'constant provided to ' . 
                       __METHOD__ . 
                       '. Tunnel encryption ' . 
                       'profile has been applied.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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


            break;

        }

        $tmp_encrypt_cipher = $this->get_resource(
                                     'encrypt_cipher', 
                                     0, 
                                     $data_type_family);

        if(isset($cipher_override) || $tmp_encrypt_cipher != ''){

            //
            // RETRIEVE DATA FROM THE CRNRSTN :: MULTI-CHANNEL DECOUPLED DATA OBJECT (MC-DDO).
            $tmp_encrypt_secret_key = $this->get_resource('encrypt_secret_key', 0, $data_type_family);
            $tmp_encrypt_options    = $this->get_resource('encrypt_options', 0, $data_type_family);
            $tmp_hmac_alg           = $this->get_resource('hmac_alg', 0, $data_type_family);

            //
            // ENABLE CIPHER OVERRIDE :: v2.0.0
            if(!isset($cipher_override)){

                //error_log('2757 tunnelParamEncrypt - cipher from session...');
                $cipher = $tmp_encrypt_cipher;

            }else{

                $cipher = $cipher_override;

            }

            $tmp_settings_array['cipher'] = $cipher;

            if(!isset($secret_key_override)){

                //error_log('2741 tunnelParamEncrypt - secret_key from session...');
                $secret_key = $tmp_encrypt_secret_key;

            }else{

                $secret_key = $secret_key_override;
                $secret_key = openssl_digest(
                              $secret_key, 
                              self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], 
                              true);

            }

            $tmp_settings_array['secret_key'] = $secret_key;

            //
            // ENABLE OPTIONS BITWISE OVERRIDE :: v2.0.0
            if(!isset($options_bitwise_override)){

                //error_log('2787 tunnelParamEncrypt - bitwise from session...');
                $options_bitwise = $tmp_encrypt_options;

            }else{

                $options_bitwise = $options_bitwise_override;

            }

            $tmp_settings_array['options_bitwise'] = $options_bitwise;

            //
            // ENABLE HMAC ALG OVERRIDE :: v2.0.0
            if(!isset($hmac_algorithm_override)){

                //error_log('2772 tunnelParamEncrypt - hmac from session...');
                $hmac_algorithm = $tmp_hmac_alg;

            }else{

                $hmac_algorithm = $hmac_algorithm_override;

            }

            $tmp_settings_array['hmac_algorithm'] = $hmac_algorithm;

            #
            # Source: http://php.net/manual/en/function.openssl-encrypt.php
            #
            $ivlen          = \openssl_cipher_iv_length($cipher);
            $iv             = \openssl_random_pseudo_bytes($ivlen);
            $ciphertext_raw = \openssl_encrypt($val, $cipher, $secret_key, $options = $options_bitwise, $iv);
            $hmac           = \hash_hmac($hmac_algorithm, $ciphertext_raw, $secret_key, $as_binary = true);
            $ciphertext     = \base64_encode($iv . $hmac . $ciphertext_raw);

            $tmp_settings_array['output data length'] = strlen($ciphertext);

        }else{

            $tmp_settings_array['output data length'] = strlen($val);

        }

        $tmp_settings_array['raw data'] = $val;

        return $tmp_settings_array;

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
    function return_decrypt_settings(
             $data, 
             $encryption_channel = 'R_encrypt_TUNNEL', 
             $cipher_override = NULL, 
             $secret_key_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $options_bitwise_override = NULL)
    {

        try{

            $tmp_settings_array = array();
            $tmp_settings_array['raw data length'] = strlen($data);

            if(!isset($data) || 
                $data == '')
            {

                $tmp_settings_array['results'] = 'SUCCESS';
                return $tmp_settings_array;

            }else{

                //
                // BACK OUT OF 
                // URL ENCODING. 
                $data = urldecode($data);

                if(is_string($encryption_channel)) 
                    // 5 :: Sunday, July 26, 2026 @ 1231 hrs.
                    $encryption_channel = $this->R_data['int_flag'][$encryption_channel];

                return $this->decrypt_settings(
                              $data, 
                              $encryption_channel, 
                              $cipher_override, 
                              $secret_key_override, 
                              $hmac_algorithm_override, 
                              $options_bitwise_override);

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
             * Sunday, June 30, 2024 @ 1542 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            return NULL;

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Run this to check the 
     * tech suit compatibility 
     * for the current or a custom 
     * encryption profile. 
     *
     * Contents of the 
     * return array:
     * - $encrypt_profile_array['raw data length']   // strlen() of provided value to encrypt.
     * - $encrypt_profile_array['cipher']
     * - $encrypt_profile_array['secret_key']
     * - $encrypt_profile_array['options_bitwise']
     * - $encrypt_profile_array['hmac_algorithm']
     * - $encrypt_profile_array['digest']
     * - $encrypt_profile_array['results']  // Success or hash_equals FAIL :: ERROR.
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
    function decrypt_settings(
             $val, 
             $encryption_channel, 
             $cipher_override, 
             $secret_key_override, 
             $hmac_algorithm_override, 
             $options_bitwise_override)
    {

        $encrypt_profile_array = array();
        $encrypt_profile_array['raw data length'] = strlen($val);

        switch($encryption_channel){
            case $this->R_data['int_flag']['R_encrypt_TUNNEL']:

                $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                 $this->R_data['int_flag']['R_channel_DATABASE']:

                $data_type_family = 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                 $this->R_data['int_flag']['R_channel_SESSION']:

                $data_type_family = 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                 $this->R_data['int_flag']['R_channel_COOKIE']:

                $data_type_family = 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_TUNNEL'] & 
                 $this->R_data['int_flag']['R_channel_SOAP']:

                $data_type_family = 'CRNRSTN::RESOURCE::SOAP_ENCRYPTION';

            break;
            case $this->R_data['int_flag']['R_encrypt_OERSL']:

                $data_type_family = 'CRNRSTN::RESOURCE::OERSL_ENCRYPTION';

            break;
            default:
                //
                // 'R_encrypt_TUNNEL'

                //
                // RETRIEVE DATA.
                // self::$oCRNRSTN_CONFIG_MGR->input_data_value(
                //                             $encrypt_cipher, 
                //                             'encrypt_cipher', 
                //                             'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION', 
                //                             NULL, 
                //                             'R_channel_RUNTIME', 
                //                             $env_key);
                $data_type_family = 'CRNRSTN::RESOURCE::TUNNEL_ENCRYPTION';
                $this->error_log('Unknown encryption channel ' . 
                       'constant provided to ' . 
                       __METHOD__ .
                       '. Tunnel encryption ' . 
                       'profile has been applied.', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

            break;

        }

        $tmp_encrypt_cipher = $this->get_resource(
                                     'encrypt_cipher', 
                                     0, 
                                     $data_type_family);

        if(isset($cipher_override) || 
            ($tmp_encrypt_cipher != ''))
        {

            //
            // RETRIEVE DATA FROM 
            // SESSION CONFIG MANAGER. 
            $tmp_encrypt_secret_key = $this->get_resource('encrypt_secret_key', 0, $data_type_family);
            $tmp_encrypt_options    = $this->get_resource('encrypt_options', 0, $data_type_family);
            $tmp_hmac_alg           = $this->get_resource('hmac_alg', 0, $data_type_family);

            //
            // ENABLE CIPHER 
            // OVERRIDE :: v2.0.0 
            if(!isset($cipher_override)){

                $cipher = $tmp_encrypt_cipher;

            }else{

                $cipher = $cipher_override;

            }

            $encrypt_profile_array['cipher'] = $cipher;

            if(!isset($secret_key_override)){

                $secret_key = $tmp_encrypt_secret_key;

            }else{

                $secret_key = $secret_key_override;
                $secret_key = openssl_digest($secret_key, self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'], true);

            }

            $encrypt_profile_array['digest'] = self::$openssl_digest_profile_ARRAY[$data_type_family]['openssl_digest'];
            $encrypt_profile_array['secret_key'] = $secret_key;

            //
            // ENABLE OPTIONS 
            // BITWISE OVERRIDE :: v2.0.0
            if(!isset($options_bitwise_override)){

                $options_bitwise = $tmp_encrypt_options;

            }else{

                $options_bitwise = $options_bitwise_override;

            }

            $encrypt_profile_array['options_bitwise'] = $options_bitwise;

            //
            // ENABLE HMAC 
            // ALG OVERRIDE :: v2.0.0 
            if(!isset($hmac_algorithm_override)){

                $hmac_algorithm = $tmp_hmac_alg;

            }else{

                $hmac_algorithm = $hmac_algorithm_override;

            }

            $encrypt_profile_array['hmac_algorithm'] = $hmac_algorithm;

            #
            # Source: http://php.net/manual/en/function.openssl-encrypt.php
            #
            $c                  = \base64_decode($val);
            $ivlen              = \openssl_cipher_iv_length($cipher);
            $iv                 = \substr($c, 0, $ivlen);
            $hmac               = \substr($c, $ivlen, $sha2len = 32);
            $ciphertext_raw     = \substr($c, $ivlen + $sha2len);
            $original_plaintext = \openssl_decrypt($ciphertext_raw, $cipher, $secret_key, $options = $options_bitwise, $iv);
            $calcmac            = \hash_hmac($hmac_algorithm, $ciphertext_raw, $secret_key, $as_binary = true);

            if(\hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
            {

                $encrypt_profile_array['results'] = 'SUCCESS';

            }else{

                $encrypt_profile_array['results'] = 'hash_equals FAIL :: ERROR';

            }

        }else{

            //
            // No encryption. 
            // Return value.
            $encrypt_profile_array['results'] = 'SUCCESS';

        }

        return $encrypt_profile_array;

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
    function proper_response_return(
             $response, 
             $header_options_array, 
             $crnrstn_response_profile_key)
    {

        return self::$R_http->proper_response_return(
                              $response, 
                              $header_options_array, 
                              $crnrstn_response_profile_key);

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
    private function define_wildcard_resource(
                     $key, 
                     $data_authorization_profile = 'R_channel_RUNTIME')
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return an instantiation of 
         * the CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services Layer 
         * (CLR-SSL) Wild Card 
         * Resource (WCR). 
         *
         *
         * 5 :: Monday, July 15, 2024 @ 2016 hrs.
         *
         * $oWildCardResource = new crnrstn_wildcard_resource(
         *                          $key, 
         *                          $this);
         *
         */
        $oWildCardResource = $this->return_registered_resource(
                                    'new', 
                                    'crnrstn_wildcard_resource', 
                                    $key,
                                    $data_authorization_profile);

        return $oWildCardResource;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initializeWildCardResource()
    {

        $env_key = self::$env_key;

        if(!!$this->wildCardResource_filePath_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])]){

            $this->wildCardResource_filePath = $this->wildCardResource_filePath_ARRAY[$this->R_data['R_cluster_id']][$this->hash($this->R_data['int_flag']['CRNRSTN_RESOURCE_ALL'])];

        }else{

            if(!!$this->wildCardResource_filePath_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash]){

                $this->wildCardResource_filePath = $this->wildCardResource_filePath_ARRAY[$this->R_data['R_cluster_id']][self::$env_key_hash];

            }

        }

        $oCRNRSTN_oWCR_ARRAY = array();

        try{

            if($this->is_file($this->wildCardResource_filePath)){

                //
                // INITIALIZE WILDCARD 
                // RESOURCES.
                $this->oLog_output_ARRAY[] = $this->error_log('Storing initialized ' . 
                                                    'Wild Card Resources at [' . 
                                                    $this->wildCardResource_filePath . 
                                                    '] in memory for this environment [' . 
                                                    self::$env_key_hash . 
                                                    '].', 
                                                    __LINE__, 
                                                    __METHOD__, 
                                                    __FILE__, 
                                                    $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
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

                include_once($this->wildCardResource_filePath);

                $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']][] = $oCRNRSTN_oWCR_ARRAY;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: wildcard resource ' . 
                    'file cannot be loaded, because it [' . 
                    $this->wildCardResource_filePath . 
                    '] is not a file.');

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
             * Sunday, June 30, 2024 @ 1543 hrs.
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
     * @access public
     *
     */
    function return_server_response_code(
             $response_code, 
             $crnrstn_html_burn = NULL)
    {

        $tmp_curr_headers_ARRAY              = \headers_list();
        $tmp_crnrstn_signature_headers_ARRAY = $this->header_signature_options_return();

        //
        // ENSURE ALL SIGNATURE 
        // HEADERS ARE IN PLACE 
        // AND CONTINUE. 
        self::$R_http->header_options_add($tmp_crnrstn_signature_headers_ARRAY);

        //
        // ADD PRE-EXISTING HEADER 
        // OPTIONS AFTER DEFAULT 
        // FOR OVERWRITE. 
        self::$R_http->header_options_add($tmp_curr_headers_ARRAY);

        self::$R_http->header_options_apply();

        //
        // Source: http://php.net/manual/en/function.http-response-code.php
        // Source of source: Wikipedia "List_of_HTTP_status_codes"
        $http_status_codes = array(100 => 'Continue', 
                                   101 => 'Switching Protocols', 
                                   102 => 'Processing', 
                                   200 => 'OK', 
                                   201 => 'Created', 
                                   202 => 'Accepted', 
                                   203 => 'Non-Authoritative Information', 
                                   204 => 'No Content', 
                                   205 => 'Reset Content', 
                                   206 => 'Partial Content', 
                                   207 => 'Multi-Status', 
                                   300 => 'Multiple Choices', 
                                   301 => 'Moved Permanently', 
                                   302 => 'Found', 
                                   303 => 'See Other', 
                                   304 => 'Not Modified', 
                                   305 => 'Use Proxy', 
                                   306 => '(Unused)', 
                                   307 => 'Temporary Redirect', 
                                   308 => 'Permanent Redirect', 
                                   400 => 'Bad Request', 
                                   401 => 'Unauthorized', 
                                   402 => 'Payment Required', 
                                   403 => 'Forbidden', 
                                   404 => 'Not Found', 
                                   405 => 'Method Not Allowed', 
                                   406 => 'Not Acceptable', 
                                   407 => 'Proxy Authentication Required', 
                                   408 => 'Request Timeout', 
                                   409 => 'Conflict', 
                                   410 => 'Gone', 
                                   411 => 'Length Required', 
                                   412 => 'Precondition Failed', 
                                   413 => 'Request Entity Too Large', 
                                   414 => 'Request-URI Too Long', 
                                   415 => 'Unsupported Media Type', 
                                   416 => 'Requested Range Not Satisfiable', 
                                   417 => 'Expectation Failed', 
                                   418 => 'I\'m a teapot', 
                                   419 => 'Authentication Timeout', 
                                   420 => 'Enhance Your Calm', 
                                   422 => 'Unprocessable Entity', 
                                   423 => 'Locked', 
                                   424 => 'Failed Dependency', 
                                   424 => 'Method Failure', 
                                   425 => 'Unordered Collection', 
                                   426 => 'Upgrade Required', 
                                   428 => 'Precondition Required', 
                                   429 => 'Too Many Requests', 
                                   431 => 'Request Header Fields Too Large', 
                                   444 => 'No Response', 
                                   449 => 'Retry With', 
                                   450 => 'Blocked by Windows Parental Controls', 
                                   451 => 'Unavailable For Legal Reasons', 
                                   494 => 'Request Header Too Large', 
                                   495 => 'Cert Error', 
                                   496 => 'No Cert', 
                                   497 => 'HTTP to HTTPS', 
                                   499 => 'Client Closed Request', 
                                   500 => 'Internal Server Error', 
                                   501 => 'Not Implemented', 
                                   502 => 'Bad Gateway', 
                                   503 => 'Service Unavailable', 
                                   504 => 'Gateway Timeout', 
                                   505 => 'HTTP Version Not Supported', 
                                   506 => 'Variant Also Negotiates', 
                                   507 => 'Insufficient Storage', 
                                   508 => 'Loop Detected', 
                                   509 => 'Bandwidth Limit Exceeded', 
                                   510 => 'Not Extended', 
                                   511 => 'Network Authentication Required', 
                                   598 => 'Network read timeout error', 
                                   599 => 'Network connect timeout error');

        if(!isset($crnrstn_html_burn)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * There are two special-case 
             * header calls. 
             *
             * The first is a header that 
             * starts with the string "HTTP/" 
             * (case is not significant), which 
             * will be used to figure out the 
             * HTTP status code to send. 
             * 
             * For example, if you have configured 
             * Apache to use a PHP script to 
             * handle requests for missing files 
             * (using the ErrorDocument directive), 
             * you may want to make sure that your 
             * script generates the proper 
             * status code.
             * 
             */
            \header($_SERVER['SERVER_PROTOCOL'] . ' ' . 
                $response_code . ' ' . 
                $http_status_codes[$response_code]);
            exit();

        }

        \header($_SERVER['SERVER_PROTOCOL'] . ' ' . 
            $response_code . ' ' . 
            $http_status_codes[$response_code]);

        $str = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    ' . $this->return_creative('CRNRSTN_ICO', $this->R_data['int_flag']['CRNRSTN_ICO']) . '
    <title>' . $response_code . ' ' . $http_status_codes[$response_code] . '</title>
</head>
<body style="background-color: #FFF; ' . 
'width:100%; text-align: left; margin:0px auto;">
    <div style="display:block; clear:both; ' . 
    'height:0; line-height:0; overflow:hidden; ' . 
    'width:100%; font-size:1px; border-bottom: ' . 
    '2px solid #F90000;"></div>
    <div style="display:block; clear:both; ' . 
    'height:0; line-height:0; overflow:hidden; ' . 
    'width:100%; font-size:1px; border-bottom: ' . 
    '1px solid #DB1717;"></div>

    <div style=\'width:96%; margin:0 0 0 0; ' . 
    'padding:6px 2% 0 2%; color:#FFF; font-family:' . 
    '"trebuchet MS", Verdana, sans-serif; ' . 
    'background-color:#BEBEBE; height:30px; ' . 
    'line-height: 28px;\'><h1 style="font-size: ' . 
    '30px; overflow: hidden; height:23px; ' . 
    'padding-top:7px; margin-top: 0;">Server Error</h1></div>
    <div style="display:block; clear:both; ' . 
    'height:0; line-height:0; overflow:hidden; ' . 
    'width:100%; font-size:1px; border-top: ' . 
    '2px solid #FFF;"></div>

    <div style="height:5px; ' . 
    $this->return_creative('BG_ELEMENT_RESPONSE_CODE', $this->R_data['int_flag']['CRNRSTN_BASE64']) . 
    ' background-repeat: repeat-x;">
        <div style="display:block; clear:both; ' . 
        'height:0; line-height:0; overflow:hidden; ' . 
        'width:100%; font-size:1px;"></div>
    </div>

    <div style="padding:100px 0 300px 100px; ' . 
        'float:left; font-family:arial; ' . 
        'font-weight:bold; font-size:11px;">' . 
        $response_code . ' ' . 
        $http_status_codes[$response_code] . '</div>
    <!--
    <div style="position:absolute; padding:' . 
    '200px 0 0 10px; float:left;"><pre>

    ' . $crnrstn_html_burn . '

    </pre></div>
    -->
    <div style="padding:16px 2% 0 0; ' . 
    'float:right; width:260px;">
        <div style="float:right; ">
            ' . $this->return_component_branding_creative(
                       true, 
                       $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_MODE_BASE64']) . '
        </div>
    </div>

    <div style="float:right; padding:' . 
    '420px 0 0 0; margin:0; width:100%;">
        <div style="position: absolute; ' . 
        'width:100%; text-align: right; ' . 
        '/*background-color: #FFF;*/ padding-top: 20px;">
            ' . $this->return_creative('J5_WOLF_PUP_RAND') . '
        </div>
    </div>

    <div style="height:0; width:100%; ' . 
    'clear:both; display: block; overflow: hidden;"></div>

</body>
</html>';

        echo $str;

        exit();

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
    function get_resource_count(
             $data_key, 
             $data_type_family, 
             $env_key)
    {

        return $this->get_resource_count(
                      $data_key, 
                      $data_type_family, 
                      $env_key);

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
    function retrieve_data_value(
             $data_key, 
             $data_type_family = 'CRNRSTN::RESOURCE', 
             $index = NULL, 
             $env_key = NULL, 
             $soap_transport = false)
    {

        return $this->retrieve_data_value(
                      $data_key, 
                      $data_type_family, 
                      $index, 
                      $env_key, 
                      $soap_transport);

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
    function __getEnvParam(
             $paramName, 
             $index = 0, 
             $wildCardKey = NULL, 
             $soap_transport = false)
    {

        if(is_string($index)){

            error_log(__LINE__ . 
                ' env getEnvParam(\'' . 
                $paramName . 
                '\') needs the "inndex = 0" ' . 
                'added. thx, bro! die();');
            die();

        }

        try{

            //
            // CHECK FOR EXISTENCE 
            // OF PARAMETER WITHIN 
            // WILD CARD RESOURCE. 
            if(isset($wildCardKey)){

                if(isset($this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']])){

                    $tmp_oWCR_ARRAY = $this->oCRNRSTN_WCR_ARRAY[$this->R_data['R_cluster_id']][$this->R_data['int_flag']['CRNRSTN_LOG_ALL']];

                    foreach($tmp_oWCR_ARRAY as 
                        $key => $oWCR)
                    {

                        if(isset($oWCR[$wildCardKey])){

                            //error_log(__LINE__ . ' env WE HAVE A SET WCR KEY IN OBJ_ARRAY $wildCardKey=' . $wildCardKey);
                            $oWCR = $oWCR[$wildCardKey];

                            $tmp_oDDO = $oWCR->get_attribute($wildCardKey, $paramName, $soap_transport);

                            //
                            //'CRNRSTN_STRING','CRNRSTN_INT', 'CRNRSTN_INTEGER', 'CRNRSTN_BOOL',
                            //'CRNRSTN_BOOLEAN','CRNRSTN_FLOAT', 'CRNRSTN_DOUBLE', 'CRNRSTN_ARRAY',
                            //'CRNRSTN_OBJECT', 'CRNRSTN_RESOURCE',
                            //'CRNRSTN_RESOURCE_CLOSED', 'CRNRSTN_UNKNOWN_TYPE', 'CRNRSTN_NULL',
                            //
                            //$tmp_data_type_ARRAY = $this->gettype($url, CRNRSTN_ARRAY);
                            //switch($tmp_data_type_ARRAY[CRNRSTN_INTEGER]){}
                            //
                            //if(($tmp_data_type_ARRAY[CRNRSTN_INTEGER] == CRNRSTN_BOOLEAN) || ($tmp_data_type_ARRAY[CRNRSTN_INTEGER] == CRNRSTN_BOOL)){
                            // strings 'true' or 'false'
                            //if(is_bool($data_value) === true){
                            //
                            error_log(__LINE__ . 
                                ' ddo CHECK THAT THIS IS ' . 
                                'INTEGER PROCESSING OF ' . 
                                'CRNRSTN :: DDO DATA. ' . 
                                '$paramName[' . 
                                strval($paramName) . 
                                ']. die();');
                            die();

                            switch($tmp_oDDO->preach('type', $paramName)){
                                case $this->R_data['int_flag']['R_int']:

                                    return (int) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_integer']:

                                    return (integer) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_bool']:

                                    if($soap_transport == true){

                                        return $tmp_oDDO->preach('data_value', $paramName);

                                    }else{

                                        return $this->boolean_conversion($tmp_oDDO->preach('data_value', $paramName));

                                    }

                                break;
                                case $this->R_data['int_flag']['R_boolean']:

                                    if($soap_transport == true){

                                        return $tmp_oDDO->preach('data_value', $paramName);

                                    }else{

                                        return $this->boolean_conversion($tmp_oDDO->preach('data_value', $paramName));

                                    }

                                break;
                                case $this->R_data['int_flag']['R_float']:

                                    return (float) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_double']:

                                    return (double) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_resource']:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * TODO :: IS THIS THE BEST 
                                     *         OUTPUT? NO CAST...?
                                     *
                                     * 5 :: Wednesday, November 15, 2023 @ 0628 hrs.
                                     *
                                     */
                                    return $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_resource_closed']:

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * TODO :: IS THIS THE 
                                     *         BEST OUTPUT? NO CAST...?
                                     *
                                     * 5 :: Wednesday, November 15, 2023 @ 0629 hrs.
                                     *
                                     */
                                    return $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_string']:

                                    return (string) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_array']:

                                    return (array) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_object']:

                                    return (object) $tmp_oDDO->preach('data_value', $paramName);

                                break;
                                case $this->R_data['int_flag']['R_null']:

                                    return NULL;

                                break;
                                default:

                                    return $tmp_oDDO->preach('data_value', $paramName);

                                break;

                            }

                        }

                    }

//                    if(!isset($tmp_oWCR_ARRAY[$wildCardKey])){
//
//                        error_log(__LINE__ . ' die env after print_r');
//                        print_r($wildCardKey);
//                        print_r($tmp_oWCR_ARRAY);
//                        die();
//                        $this->error_log('The requested WCR ' . 
//                               '(wild card resource), "' . 
//                               $wildCardKey . 
//                               '", has not been configured ' . 
//                               'for this environment ' . 
//                               '(e.g. NULL WCR array index, ' . 
//                               'here)...albeit there are ' . 
//                               'other environments ' . 
//                               'CRNRSTN :: is currently ' . 
//                               'configured to support here ' . 
//                               'which have had at least ' . 
//                               'one (1) WCR defined and ' . 
//                               'initialized therein ' . 
//                               '(so...there is that).', 
//                               __LINE__, 
//                               __METHOD__, 
//                               __FILE__, 
//                               $this->R_data['int_flag']['CRNRSTN_BARNEY']);
                       
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
//                        throw new Exception('The requested WCR ' . 
//                            '(wild card resource), "' . 
//                            $wildCardKey . 
//                            '", has not been configured for ' . 
//                            'this environment (e.g. NULL WCR ' . 
//                            'array index, here)...albeit there ' . 
//                            'are other environments CRNRSTN :: ' . 
//                            'is currently configured to ' . 
//                            'support here which have had at ' . 
//                            'least one (1) WCR defined and ' . 
//                            'initialized therein (so...there ' . 
//                            'is that).');
//
//                    }else{
//
//                        $tmp_oWCR = $tmp_oWCR_ARRAY[$wildCardKey];
//
//                        if($tmp_oWCR->isset_WCR($wildCardKey, $paramName)){
//
//                            //
//                            // PARAM HAS BEEN 
//                            // DEFINED WITHIN 
//                            // WILD CARD RESOURCE. 
//                            $tmp_oDDO = $tmp_oWCR->get_attribute(
//                                                   $wildCardKey, 
//                                                   $paramName, 
//                                                   $soap_transport);
//
//                            //$tmp_oDDO
//                            //preach('isset', key). ..
//                            //preach('type')
//                            //preach('value')
//                            switch($tmp_oDDO->preach('type', $paramName)){
//                                case 'int':
//
//                                    return (int) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'integer':
//
//                                    return (integer) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'bool':
//
//                                    if($soap_transport){
//
//                                        return $tmp_oDDO->preach('data_value', $paramName);
//
//                                    }else{
//
//                                        return $this->boolean_conversion($tmp_oDDO->preach('data_value', $paramName));
//
//                                    }
//
//                                break;
//                                case 'boolean':
//
//                                    if($soap_transport){
//
//                                        return $tmp_oDDO->preach('data_value', $paramName);
//
//                                    }else{
//
//                                        return $this->boolean_conversion($tmp_oDDO->preach('data_value', $paramName));
//
//                                    }
//
//                                break;
//                                case 'float':
//
//                                    return (float) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'double':
//
//                                    return (double) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'real':
//
//                                    return (float) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'string':
//
//                                    return (string) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'array':
//
//                                    return (array) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'object':
//
//                                    return (object) $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//                                case 'NULL':
//
//                                    return NULL;
//
//                                break;
//                                default:
//
//                                    return $tmp_oDDO->preach('data_value', $paramName);
//
//                                break;
//
//                            }
//
//                        }else{
//
//                            $this->error_log('The "' . $paramName . '" parameter has been requested from wild card resource (i.e. WCR), "' . $wildCardKey . '", but this parameter was not found to have been initialized therein via oWCR->add_attribute().', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_BARNEY']);
//
//                            
                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
//                            throw new Exception('The "' . $paramName . '" parameter has been requested from wild card resource (i.e. WCR), "' . $wildCardKey . '", but this parameter was not found to have been initialized therein via oWCR->add_attribute().');
//
//                        }
//
//                    }

                }else{

                    $this->error_log('The wild card resource (i.e. WCR), "' . 
                           $wildCardKey . 
                           '", has been requested, but no WCR ' . 
                           'of the kind has been configured ' . 
                           'for this environment.', 
                           __LINE__, 
                           __METHOD__, 
                           __FILE__, 
                           $this->R_data['int_flag']['CRNRSTN_BARNEY']);
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


                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The wild card resource (i.e. WCR), "' . 
                        $wildCardKey . 
                        '", has been requested, but no WCR ' . 
                        'of the kind has been configured ' . 
                        'for this environment.');

                }

            }else{

                if(!isset(self::$sess_env_param_ARRAY[$paramName])){

                    self::$sess_env_param_ARRAY[$paramName] = $this->oSESSION_MGR->get_session_param($paramName, $soap_transport);

                }

                return self::$sess_env_param_ARRAY[$paramName];

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
             * Sunday, June 30, 2024 @ 1543 hrs.
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
    function openssl_get_md_methods(
             $exclude_weak = true, 
             $exclude_ecb = true)
    {

        $digests             = openssl_get_md_methods();
        $digests_and_aliases = openssl_get_md_methods(true);
        $digest_aliases      = array_diff($digests_and_aliases, $digests);

        if($exclude_ecb === true){

            //
            // ECB MODE SHOULD 
            // BE AVOIDED. 
            $digests = array_filter($digests, function($n){ return stripos($n, 'ecb') === FALSE; });

        }

        if($exclude_weak === true){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * At least as early 
             * as AUG 2016, OpenSSL 
             * declared the following 
             * weak: 
             * 
             * RC2, RC4, DES, 
             * 3DES, MD5 based.
             *
             */
            $digests = array_filter($digests, function($c){ return stripos($c, 'des') === FALSE; });
            $digests = array_filter($digests, function($c){ return stripos($c, 'rc2') === FALSE; });
            $digests = array_filter($digests, function($c){ return stripos($c, 'rc4') === FALSE; });
            $digests = array_filter($digests, function($c){ return stripos($c, 'md5') === FALSE; });
            $digest_aliases = array_filter($digest_aliases, function($c){ return stripos($c, 'des') === FALSE; });
            $digest_aliases = array_filter($digest_aliases, function($c){ return stripos($c, 'rc2') === FALSE; });

        }

        $merged_ciphers = array_merge($digests, $digest_aliases);

        return $merged_ciphers;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * @see http://php.net/manual/en/function.openssl-encrypt.php
     * @see https://www.php.net/manual/en/function.openssl-get-cipher-methods.php
     *
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
    function openssl_get_cipher_methods(
             $exclude_weak = true, 
             $exclude_ecb = true)
    {

        $ciphers             = openssl_get_cipher_methods();
        $ciphers_and_aliases = openssl_get_cipher_methods(true);
        $cipher_aliases      = array_diff($ciphers_and_aliases, $ciphers);

        if($exclude_ecb === true){

            //
            // ECB MODE SHOULD BE AVOIDED
            $ciphers = array_filter($ciphers, function($n){ return stripos($n, 'ecb') === FALSE; });

        }

        if($exclude_weak === true){

            //
            // AT LEAST AS EARLY AS AUG 2016, OPENSSL DECLARED THE FOLLOWING WEAK: RC2, RC4, DES, 3DES, MD5 based
            $ciphers = array_filter($ciphers, function($c){ return stripos($c, 'des') === FALSE; });
            $ciphers = array_filter($ciphers, function($c){ return stripos($c, 'rc2') === FALSE; });
            $ciphers = array_filter($ciphers, function($c){ return stripos($c, 'rc4') === FALSE; });
            $ciphers = array_filter($ciphers, function($c){ return stripos($c, 'md5') === FALSE; });
            $cipher_aliases = array_filter($cipher_aliases, function($c){ return stripos($c, 'des') === FALSE; });
            $cipher_aliases = array_filter($cipher_aliases, function($c){ return stripos($c, 'rc2') === FALSE; });

        }

        $merged_ciphers = array_merge($ciphers, $cipher_aliases);

        return $merged_ciphers;

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
    function return_set_serialized_bits(
             $const_nom, 
             $integer_constants_array)
    {

        $tmp_array = array();

        foreach($integer_constants_array as 
            $key => $int_constant)
        {

            if($this->is_serialized_bit_set($const_nom, $int_constant) == true){

                $tmp_array[] = $int_constant;

            }

        }

        return $tmp_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_set_bits($constants_int_ARRAY)
    {

        //$this->oCRNRSTN_BITWISE->set($integer_constant);
        //$this->oCRNRSTN_BITWISE->toggle($integer_constant);
        //$this->oCRNRSTN_BITWISE->read($integer_constant);
        //$this->oCRNRSTN_BITWISE->remove($integer_constant)
        //$this->oCRNRSTN_BITWISE->stringout()
        //$this->set($integer_constant, true);

        $tmp_array = array();

        foreach($constants_int_ARRAY as 
            $key => $int_constant)
        {

            if($this->is_bit_set($int_constant) == true){

                $tmp_array[] = $int_constant;

            }

        }

        return $tmp_array;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE   :: https://www.php.net/manual/en/function.base64-encode.php
     * AUTHOR   :: https://www.php.net/manual/en/function.base64-encode.php#105200
     *
     *
     * luke at lukeoliff.com
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
    function base64_encode_image(
             $filename, 
             $filetype)
    {

        if($this->is_file($filename))
        {

            $imgbinary = \fread(\fopen($filename, 'r'), $this->find_filesize($filename));

            return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE   :: https://www.php.net/manual/en/function.filesize.php
     * AUTHOR   :: https://www.php.net/manual/en/function.filesize.php#119435
     *
     *
     * C0nw0nk
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function find_filesize($file)
    {

       if(\strtoupper(\substr(PHP_OS, 0, 3)) == 'WIN')

            exec('for %I in ("' . $file . '") do @echo %~zI', $output);
            $return = $output[0];

        }else{

            $return = \filesize($file);

            //
            // SOURCE   :: https://www.php.net/manual/en/function.filesize.php
            // AUTHOR   :: https://www.php.net/manual/en/function.filesize.php#121437
            //
            //
            // synnus at gmail dot com
            //
            //$fsobj = new COM("Scripting.FileSystemObject");
            //$f = $fsobj->GetFile($file);
            //$return = $f->Size;

        }

        return $return;

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
             $userAgent = null, 
             $httpHeaders = null)
    {

        return self::$R_http->is(
                              $key, 
                              $userAgent, 
                              $httpHeaders);

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
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_file_system_integrations_serial(
                     $http_path, 
                     $file_path, 
                     $data_authorization_profile, 
                     $ttl, 
                     $FILEPATH, 
                     $output_mode, 
                     $width, 
                     $height, 
                     $hyperlink, 
                     $alt, 
                     $title, 
                     $target)
    {

        $tmp_serial = '';
        $tmp_integrations_meta_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services Layer 
         * (CLR-SSL) File Integrations. 
         *
         * The original assets 
         * will not be moved.
         *
         * In effect, we will shard 
         * pointers to the base64 
         * support silo for 
         * each resource:
         *   - by resource function: 
         *     favicon, css, js,...etc.
         *   - by file type: gif, 
         *     png, jpeg.
         *   - cache meta and file 
         *     system details for 
         *     the resource.
         *
         * This is a high-level first 
         * pass to arrive at an integer 
         * driven system 
         * integrations configuration. 
         *
         * Internally, there will 
         * need to be kindness...in 
         * the form of more delicate 
         * mimetype detection and a 
         * shift or "re-routing"
         * at time of write.
         *
         */
        switch($output_mode){
            case $this->R_data['int_flag']['CRNRSTN_ICO']:

                $clr_ssl_msg = 'Warning DEPRECATED.';
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

                $tmp_integrations_seed                              = 'favicon';
                $tmp_integrations_meta_ARRAY['integrations_family'] = $tmp_integrations_seed;
                $tmp_integrations_meta_ARRAY['integrations_path']   = 'ui' .  \DIRECTORY_SEPARATOR . 
                                                                      'imgs' . \DIRECTORY_SEPARATOR . 
                                                                      $tmp_integrations_seed . \DIRECTORY_SEPARATOR . 
                                                                      'integrations';

                /* $this->R_data['int_flag']['R_fs_map'] //CRNRSTN_ASSET_MAPPING
                $this->config_init_asset_map_favicon(CRNRSTN_RESOURCE_ALL, true, CRNRSTN_ROOT . '/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs/favicon/system');
                $this->config_init_asset_map_css(CRNRSTN_RESOURCE_ALL, true, CRNRSTN_ROOT . '/_R/ui' .  DIRECTORY_SEPARATOR . 'css');
                $this->config_init_asset_map_js(CRNRSTN_RESOURCE_ALL, true, CRNRSTN_ROOT . '/_R/ui' .  DIRECTORY_SEPARATOR . 'js');
                $this->config_init_asset_map_system_img(CRNRSTN_RESOURCE_ALL, true, CRNRSTN_ROOT . '/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs');
                $this->config_init_asset_map_social_img(CRNRSTN_RESOURCE_ALL, true, CRNRSTN_ROOT . '/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs');
                $this->config_init_asset_map_meta_img(CRNRSTN_RESOURCE_ALL, true, CRNRSTN_ROOT . '/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs');

                $this->config_init_http('BLUEHOST_JONY5', 'https://lightsaber.crnrstn.jony5.com/', CRNRSTN_ROOT, '_R');
                $this->config_init_http('BLUEHOST_EVIFWEB', 'https://lightsaber.crnrstn.evifweb.com/', CRNRSTN_ROOT, '_R');
                $this->config_init_http('LOCALHOST_PC', 'http://172.16.225.128/jony5/', CRNRSTN_ROOT, '_R');
                $this->config_init_http('LOCALHOST_CHAD_MACBOOKPRO', 'http://172.16.225.139/evifweb.com/', CRNRSTN_ROOT, '_R');

                 *
                 * TODO :: Follow this array 
                 *         and replace it 
                 *         everywhere with
                 *         the $oCRNRSTN_CONFIG_MGR
                self::$oCRNRSTN_CONFIG_MGR->input_data_value($crnrstn_http_endpoint, 'crnrstn_http_endpoint', 'CRNRSTN::RESOURCE::HTTP_IMAGES', 0, 'R_channel_SESSION', $env_key);
                self::$oCRNRSTN_CONFIG_MGR->input_data_value($crnrstn_path_dir, 'crnrstn_path_directory', 'CRNRSTN::RESOURCE::HTTP_IMAGES', 0, NULL, $env_key);
                self::$oCRNRSTN_CONFIG_MGR->input_data_value($crnrstn_system_directory, 'crnrstn_system_directory', 'CRNRSTN::RESOURCE::HTTP_IMAGES', 0, NULL, $env_key);
                self::$oCRNRSTN_CONFIG_MGR->input_data_value($crnrstn_path_integrations, 'crnrstn_integrations_asset_map_dir_path', 'CRNRSTN::RESOURCE::ASSET_INTEGRATIONS', 0, NULL, $env_key);

                self::$oCRNRSTN_CONFIG_MGR->input_data_value($dir_path, 'crnrstn_favicon_asset_map_dir_root', 'CRNRSTN::RESOURCE::ASSET_PATH');
                self::$oCRNRSTN_CONFIG_MGR->input_data_value($http_path, 'crnrstn_favicon_asset_map_http_root', 'CRNRSTN::RESOURCE::ASSET_PATH');

                 */

                $tmp_crnrstn_favicon_asset_map_dir_root = $this->get_resource(
                                                                 'crnrstn_favicon_asset_map_dir_root', 
                                                                 0, 
                                                                 'CRNRSTN::RESOURCE::ASSET_PATH');
                $tmp_crnrstn_favicon_asset_map_http_root = $this->get_resource(
                                                                  'crnrstn_favicon_asset_map_http_root', 
                                                                  0, 
                                                                  'CRNRSTN::RESOURCE::ASSET_PATH');
                
                /*
                error_log('[lnum ' . 
                    __LINE__ . '] [mthd ' . 
                    __METHOD__ . '] $tmp_crnrstn_favicon_asset_map_dir_root[' . 
                    $tmp_crnrstn_favicon_asset_map_dir_root . 
                    ']. $tmp_crnrstn_favicon_asset_map_http_root[' . 
                    $tmp_crnrstn_favicon_asset_map_http_root . '].');
                [Mon Jun 05 15:27:41.531274 2023] [:error] [pid 8211] [client 172.16.225.1:62930] 5648 env
                $tmp_crnrstn_favicon_asset_map_dir_root=/var/www/html/evifweb.com/_crnrstn/ui' .  DIRECTORY_SEPARATOR . 'imgs/favicon
                $tmp_crnrstn_favicon_asset_map_http_root[].

                */

                $tmp_crnrstn_path_directory = $this->get_resource(
                                                     'crnrstn_path_directory', 
                                                     0, 
                                                     'CRNRSTN::RESOURCE::HTTP_IMAGES');
                $tmp_crnrstn_http_endpoint = $this->get_resource(
                                                    'crnrstn_http_endpoint', 
                                                    0, 
                                                    'CRNRSTN::RESOURCE::HTTP_IMAGES');
                $tmp_crnrstn_system_directory = $this->get_resource(
                                                       'crnrstn_system_directory', 
                                                       0, 
                                                       'CRNRSTN::RESOURCE::HTTP_IMAGES');
                $tmp_crnrstn_integrations_asset_map_dir_path = $this->get_resource(
                                                                      'crnrstn_integrations_asset_map_dir_path', 
                                                                      0, 
                                                                      'CRNRSTN::RESOURCE::ASSET_INTEGRATIONS');

                /*
                error_log('[lnum ' . 
                    __LINE__ . '] [mthd ' . 
                    __METHOD__ . '] map_dir_path[' . 
                    $tmp_crnrstn_integrations_asset_map_dir_path . ']. crnrstn_http_endpoint[' . 
                    $tmp_crnrstn_http_endpoint . ']. crnrstn_path_directory[' . 
                    $tmp_crnrstn_path_directory . ']. crnrstn_system_directory[' . 
                    $tmp_crnrstn_system_directory . ']. output_mode[' . 
                    $this->return_int_const_profile($output_mode, CRNRSTN_STRING) . '].');
                [Mon Jun 05 15:12:31.661349 2023] [:error] [pid 8213] [client 172.16.225.1:62796]
                5647 env

                crnrstn_integrations_asset_map_dir_path     = /var/www/html/evifweb.com/_R/ui
                -----
                $crnrstn_http_endpoint                      = http://172.16.225.139/evifweb.com/
                $crnrstn_path_directory                     = /var/www/html/evifweb.com
                $crnrstn_system_directory                   = _R
                -----
                $crnrstn_favicon_asset_map_dir_root         = /var/www/html/evifweb.com/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs/favicon
                $crnrstn_favicon_asset_map_http_root        =

                OUTPUT_MODE[CRNRSTN_ICO].

                SYS_CONFIG_HEAD_FILE

                $crnrstn_favicon_asset_map_dir_root . \DIRECTORY_SEPARATOR . 'integrations' . \DIRECTORY_SEPARATOR . '_' . $SALT;

                HEAD/INDEX ::
                /var/www/html/evifweb.com/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs/favicon/integrations/_crnrstn_tmp_plaid_cache_{SALT}

                ASSET/BODY ::

                /var/www/html/evifweb.com/_R/ui' .  DIRECTORY_SEPARATOR . 'imgs/favicon/integrations/crnrstn_tmp_plaid_cache_{SALT}

                */

                $tmp_sys_config_head_file_path = $tmp_crnrstn_favicon_asset_map_dir_root . \DIRECTORY_SEPARATOR . 
                                                 'integrations' . \DIRECTORY_SEPARATOR . 
                                                 $tmp_crnrstn_system_directory . '_' . 
                                                 self::$env_key_hash;

                //
                // GENERATE A CRNRSTN :: 
                // INTEGRATIONS CONFIGURATION 
                // FILE FOR THE ENVIRONMENT. 
                $this->R_asset_mgr->crnrstn_integrations_synchronize(
                                    $tmp_sys_config_head_file_path, 
                                    $http_path, 
                                    $file_path, 
                                    $data_authorization_profile, 
                                    $ttl, 
                                    $FILEPATH, 
                                    $output_mode, 
                                    $width, 
                                    $height, 
                                    $hyperlink, 
                                    $alt, 
                                    $title, 
                                    $target);
                //$this->generate_420_timestamp_echo_output(4, __LINE__, __METHOD__);

            break;

        }

        return $tmp_serial;

    }

/**
 *    private function return_system_integrations_algo_filepath_ARRAY(
 *                     $file_path, 
 *                     $index, 
 *                     $output_mode)
 *    {
 *
 *      Where, $tmp_asset_algo_gen_path_ARRAY = $this->return_system_integrations_algo_filepath_ARRAY($file_path, $i, $output_mode);
 *
 *        $tmp_file_path_final = '';
 *        $tmp_http_path = $this->get_resource('http_path', $index, $data_type_family);
 *        $tmp_dir_path = $this->get_resource('dir_path', $index, $data_type_family);
 *        $tmp_data_authorization_profile = $this->get_resource('data_authorization_profile', $index, $data_type_family);
 *        $tmp_ttl = $this->get_resource('ttl', $index, $data_type_family);
 *
 *    }
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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function system_output_file_html(
             $file_path, 
             $output_mode, 
             $width, 
             $height, 
             $hyperlink, 
             $alt, 
             $title, 
             $target)
    {

        $tmp_html_out = '';
        $tmp_is_unit_test = false;
        $removed_segment_count = 0;

        $tmp_is_valid_resource = false;

        /**
        $this->system_output_file_html('/favicon.ico', CRNRSTN_ICO);
        $this->system_output_file_html('/css/main.css', CRNRSTN_CSS);
        $this->system_output_file_html('/js/main.js', CRNRSTN_JS);
        $this->system_output_file_html('/imgs/reflection_of_5.png', CRNRSTN_HTML, '75', '', '5', '5', '/', '_self');

        $this->input_data_value('http_path', $http_path, $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
        $this->input_data_value('dir_path', $dir_path, $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
        $this->input_data_value('data_authorization_profile', $data_authorization_profile, $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
        $this->input_data_value('ttl', $ttl, $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);

        */

        $data_type_family = 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM';
        $tmp_res_cnt = $this->get_resource_count('dir_path', $data_type_family);

        for($i = 0; $i < $tmp_res_cnt; $i++){

            $tmp_file_path_final = $tmp_file_path_chopped = $tmp_http_path_chopped = '';
            $tmp_http_path       = $this->get_resource('http_path', $i, $data_type_family);
            $tmp_dir_path        = $this->get_resource('dir_path', $i, $data_type_family);
            $tmp_data_authorization_profile = $this->get_resource('data_authorization_profile', $i, $data_type_family);
            $tmp_ttl = $this->get_resource('ttl', $i, $data_type_family);

            //error_log(__LINE__ . ' env FILE OUT [' . $file_path . ']. OUTPUT_MODE[' . $this->return_int_const_profile($output_mode, CRNRSTN_INTEGER) . '].');

            //error_log(__LINE__ . ' env $tmp_dir_path[' . $tmp_dir_path  . '].');
            $tmp_dir_path_sanitized = $this->str_sanitize($tmp_dir_path, 'integrations_dir_path');
            //error_log(__LINE__ . ' env $tmp_dir_path_sanitized[' . print_r($tmp_dir_path_sanitized, true) . '].');

            //error_log(__LINE__ . ' env $tmp_http_path[' . $tmp_http_path  . '].');
            $tmp_http_path_from_chop_shop = $tmp_http_path_sanitized = $this->str_sanitize($tmp_http_path, 'integrations_http_path');
            $tmp_http_path_reversed_for_chop_ARRAY = array_reverse(str_split($tmp_http_path_sanitized));

            //error_log(__LINE__ . ' env $tmp_file_path_sanitized[' . print_r($tmp_http_path_sanitized, true) . '].');

            //error_log(__LINE__ . ' env $file_path[' . $file_path  . '].');
            $tmp_file_path_meta_ARRAY = $this->str_sanitize($file_path, 'integrations_file_path_append');
            //error_log(__LINE__ . ' env $tmp_file_path_sanitized[' . print_r($tmp_file_path_meta_ARRAY, true) . '].');

            foreach($tmp_file_path_meta_ARRAY['dir_nom_segment_str_len'] as $nom_index => $nom_len){

                if($nom_len == 2){

                    $removed_segment_count++;
                    //error_log(__LINE__ . ' env $file_path[' . $file_path  . ']. $removed_segment_count[' . $removed_segment_count .'].');

                }

            }

            if($removed_segment_count > 0){

                $tmp_chop_assemble = '';

                $tmp_http_path_reversed_ARRAY = array_reverse(str_split($tmp_http_path_sanitized));
                $tmp_cnt = count($tmp_http_path_reversed_ARRAY);
                for($ii = 0; $ii < $tmp_cnt; $ii++){

                    if($tmp_http_path_reversed_ARRAY[$ii] == \DIRECTORY_SEPARATOR){

                        $removed_segment_count--;

                    }

                    if($removed_segment_count > -1){

                        array_shift($tmp_http_path_reversed_for_chop_ARRAY);

                    }

                }

                //
                // REVERSE...THE REVERSED ARRAY.
                $tmp_http_path_reversed_for_chop_ARRAY = array_reverse($tmp_http_path_reversed_for_chop_ARRAY);

                $tmp_http_path_from_chop_shop = implode($tmp_http_path_reversed_for_chop_ARRAY);

            }

            //
            // TRIM LEADING SLASH IF NO DIRECTORY DELETE.
            if($tmp_file_path_meta_ARRAY['no_segment_zero_dot'] == 1){

                //
                // TRIM ANY LEADING DIRECTORY_SEPARATOR.
                $file_path = $this->str_sanitize($file_path, 'leading_slash');

            }

            $tmp_asset_algo_gen_path_ARRAY = array();
            if($tmp_file_path_meta_ARRAY['slash_segment_cnt'] > 0  && 
                ($tmp_file_path_meta_ARRAY['no_segment_zero_dot'] == 0))
            {

                //
                // WE HAVE '../' TYPE OF INPUT.
                // PROCESS THE $tmp_dir_path_sanitized ACCORDINGLY.
                $tmp_dir_path_segment_ARRAY = explode(DIRECTORY_SEPARATOR, $tmp_dir_path_sanitized);
                $tmp_dir_path_segment_cnt = count($tmp_dir_path_segment_ARRAY);
                $tmp_dir_path_max_segment_cnt = $tmp_dir_path_segment_cnt - (int) $tmp_file_path_meta_ARRAY['slash_segment_cnt'];
                for($i = 0; $i < $tmp_dir_path_max_segment_cnt; $i++){

                    $tmp_file_path_chopped .= $tmp_dir_path_segment_ARRAY[$i] . DIRECTORY_SEPARATOR;

                    if($i == ($tmp_dir_path_max_segment_cnt - 1)){

                        $tmp_file_path_final = $tmp_file_path_chopped;

                        $tmp_small_section = '';
                        foreach($tmp_file_path_meta_ARRAY['segment_str'] as $seg_index => $seg_str){

                            $tmp_small_section .= $tmp_file_path_meta_ARRAY['segment_str'][$seg_index] . \DIRECTORY_SEPARATOR;

                        }

                        //
                        // REMOVE TRAILING DIRECTORY_SEPARATOR.
                        $tmp_small_section = $this->strrtrim($tmp_small_section, \DIRECTORY_SEPARATOR);

                        $tmp_asset_algo_gen_path_ARRAY[] = $tmp_file_path_final . $tmp_small_section;
                        //error_log(__LINE__ . ' env $i[' . $i . ']. $tmp_dir_path_segment_cnt[' . $tmp_dir_path_segment_cnt . ']. slash_segment_cnt[' . $tmp_file_path_meta_ARRAY['slash_segment_cnt'] . ']. $tmp_file_path_final[' . $tmp_file_path_final . ']. $tmp_small_section[' . $tmp_small_section . '].');

                        break;

                    }

                }

                try{

                    $tmp_is_valid_resource = false;

                    //
                    // DO WE HAVE A VALID FILE PATH?
                    foreach($tmp_asset_algo_gen_path_ARRAY as 
                        $fp_index => $tmp_filepath)
                    {

                        if($this->is_file($tmp_filepath)){

                            $tmp_is_valid_resource = true;

                            break;

                        }

                    }

                    if($tmp_is_valid_resource == false){

                        //
                        // FAIL QUIETLY.
                        $this->error_log('Unable to locate the file resource associated with the provided file path of [' . $file_path . '].', __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);
                        error_log(__LINE__ . ' crnrstn Unable to locate the file resource associated with the provided file path of [' . $file_path . '].');
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

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         *
                         * throw new Exception('Unable to locate resource associated with the provided file path of [' . $file_path . '].');
                         *
                         */

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
                     * Sunday, June 30, 2024 @ 1543 hrs.
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

            //
            // BUILD THE FILE PATH BY NOW, OR FOREVER HOLD YOUR PEACE.
            if($tmp_is_valid_resource !== true){

                //
                // LOCATE AND SERIALIZE PROFILE OF FILE SYSTEM SOURCE.
                $tmp_filepath = $tmp_dir_path . $file_path;
                if($this->is_file($tmp_filepath)){

                    $tmp_is_valid_resource = true;
                    $removed_segment_count = 0;

                }

            }

            switch($output_mode){
                case $this->R_data['int_flag']['CRNRSTN_ICO']:

                    if($tmp_is_valid_resource == true){

                        //
                        // CRNRSTN :: INTEGRATIONS INITIALIZATION CHECK AND RESPONSE RETURN SERIALIZATION (RRS) MAP SUPPORT.
                        $tmp_CONFIG_INTEGRATIONS_SALT = $this->return_file_system_integrations_serial(
                                                               $tmp_http_path_from_chop_shop, 
                                                               $tmp_file_path_final, 
                                                               $tmp_data_authorization_profile, 
                                                               $tmp_ttl, 
                                                               $tmp_filepath, 
                                                               $output_mode, 
                                                               $width, 
                                                               $height, 
                                                               $hyperlink, 
                                                               $alt, 
                                                               $title, 
                                                               $target);

                        //
                        // TODO :: THE $tmp_CONFIG_INTEGRATIONS_SALT IS USED TO NOW LOAD THE ACTUAL RESOURCE FILE.
                        return $this->return_html_favicon_head_meta(
                                      $tmp_filepath, 
                                      $tmp_http_path_from_chop_shop, 
                                      $tmp_file_path_final);

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_CSS']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_JS']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_GIF']:
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_JPEG']:
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_PNG']:
                case $this->R_data['int_flag']['CRNRSTN_HTML']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_BASE64']:
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_BASE64'] & $this->R_data['int_flag']['CRNRSTN_PNG']:
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_BASE64'] & $this->R_data['int_flag']['CRNRSTN_JPEG']:
                case $this->R_data['int_flag']['CRNRSTN_HTML'] & $this->R_data['int_flag']['CRNRSTN_BASE64'] & $this->R_data['int_flag']['CRNRSTN_GIF']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_STRING']:
                case $this->R_data['int_flag']['CRNRSTN_PNG']:
                case $this->R_data['int_flag']['CRNRSTN_MODE_PNG']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_GIF']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_JPEG']:
                case $this->R_data['int_flag']['CRNRSTN_MODE_JPEG']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                case $this->R_data['int_flag']['CRNRSTN_BASE64'] & $this->R_data['int_flag']['CRNRSTN_PNG']:
                case $this->R_data['int_flag']['CRNRSTN_BASE64'] & $this->R_data['int_flag']['CRNRSTN_JPEG']:
                case $this->R_data['int_flag']['CRNRSTN_BASE64'] & $this->R_data['int_flag']['CRNRSTN_GIF']:
                case $this->R_data['int_flag']['CRNRSTN_BASE64']:

                    if($tmp_is_valid_resource == true){

                        error_log(__LINE__ . ' env WE HAVE A VALID FILE PATH. PROCEED. [' . $tmp_filepath . '].');

                        return $tmp_filepath;

                    }

                break;
                default:

                    if($tmp_is_valid_resource == true){

                        //
                        // http://172.16.225.139/evifweb.com/?crnrstn_unittest=true&crnrstn_extenstion=ZIP
                        $tmp_file_type_meta_ARRAY = $this->oCRNRSTN_CS_CONTROLLER->return_file_profile($tmp_filepath, $tmp_is_unit_test);

                        $tmp_str_out = $this->oINTERACT_UI_HTML_MGR->out_ui_html_module_system_icon($tmp_filepath, $tmp_file_type_meta_ARRAY, $output_mode, $width, $height, $hyperlink, $alt, $title, $target);

                        return $tmp_str_out;

                    }

                break;

            }

        }

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
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function download_file_system(
             $file_path, 
             $output_mode, 
             $width = NULL, 
             $height = NULL, 
             $hyperlink = NULL, 
             $alt = NULL, 
             $title = NULL, 
             $target = NULL)
    {

        $tmp_html_out = '';

        $data_type_family = 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM';
        $tmp_res_cnt = $this->get_resource_count('dir_path', $data_type_family);
        for($i = 0; $i < $tmp_res_cnt; $i++){

            $tmp_http_path = $this->get_resource('http_path', $i, $data_type_family);
            $tmp_dir_path = $this->get_resource('dir_path', $i, $data_type_family);
            $tmp_data_authorization_profile = $this->get_resource('data_authorization_profile', $i, $data_type_family);
            $tmp_ttl = $this->get_resource('ttl', $i, $data_type_family);

            error_log('[lnum ' . __LINE__ . '] [mthd ' . 
                __METHOD__ . '] File download HTML out [' . 
                $file_path . ']. output_mode[' . 
                $this->return_int_const_profile($output_mode, $this->R_data['int_flag']['R_integer']) . '].');

            //
            // LOCATE AND SERIALIZE PROFILE OF FILE SYSTEM SOURCE.
            $tmp_filepath = $tmp_dir_path . $file_path;
            if($this->is_file($tmp_dir_path)){

                error_log(__LINE__ . ' env DEFINITELY, IS A FILE! [' . $tmp_filepath . '].');

            }else{

                error_log(__LINE__ . ' env NOT A FILE, BRUV. [' . $tmp_filepath . '].');

            }

        }

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
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function details_file_system(
             $file_path, 
             $output_mode, 
             $width = NULL, 
             $height = NULL, 
             $hyperlink = NULL, 
             $alt = NULL, 
             $title = NULL, 
             $target = NULL)
    {

        $tmp_html_out = '';
        $data_type_family = 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM';
        $tmp_res_cnt = $this->get_resource_count('dir_path', $data_type_family);
        for($i = 0; $i < $tmp_res_cnt; $i++){

            $tmp_http_path = $this->get_resource('http_path', $i, $data_type_family);
            $tmp_dir_path = $this->get_resource('dir_path', $i, $data_type_family);
            $tmp_data_authorization_profile = $this->get_resource('data_authorization_profile', $i, $data_type_family);
            $tmp_ttl = $this->get_resource('ttl', $i, $data_type_family);

            error_log(__LINE__ . 
                ' env FILE DETAILS HTML OUT[' . 
                $file_path . ']. OUTPUT_MODE[' . 
                $this->return_int_const_profile($output_mode, $this->R_data['int_flag']['R_integer']) . 
                '].');

            //
            // LOCATE AND SERIALIZE PROFILE OF FILE SYSTEM SOURCE.
            $tmp_filepath = $tmp_dir_path . $file_path;
            if($this->is_file($tmp_dir_path)){

                error_log(__LINE__ . ' env DEFINITELY, IS A FILE! [' . $tmp_filepath . '].');

            }else{

                error_log(__LINE__ . ' env NOT A FILE, BRUV. [' . $tmp_filepath . '].');

            }

        }

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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function config_integrate_file_system(
             $env_key, 
             $http_path, 
             $dir_path, 
             $data_authorization_profile, 
             $ttl, 
             $host, 
             $excluded_file_ext_ARRAY)
    {

        //
        // Sunday, June 4, 2023 @ 1726 hrs.
        // CRNRSTN :: LOCAL FILE SYSTEM INTEGRATIONS.
        switch($host){
            case 'localhost':

                $data_type_family = 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM';

                //error_log(__LINE__ . ' env $http_path[' . $http_path . ']. $dir_path[' . $dir_path . '].');
                $this->input_data_value($http_path, 'http_path', $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
                $this->input_data_value($dir_path, 'dir_path', $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
                $this->input_data_value($data_authorization_profile, 'data_authorization_profile', $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
                $this->input_data_value($ttl, 'ttl', $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);
                $this->input_data_value($excluded_file_ext_ARRAY, 'excluded_file_ext_ARRAY', $data_type_family, NULL, $data_authorization_profile, $env_key, $ttl);

            break;
            case 'ftp':
                // PENDING IMPLEMENTATION.
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
    function system_base64_synchronize($data_key = NULL)
    {

        return $this->R_asset_mgr->system_base64_synchronize($data_key);

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
    function system_base64_integrate(
             $dir_filepath, 
             $img_batch_size = 5)
    {

//        $tmp_current_batch = $tmp_batch_size = $img_batch_size;
//        $tmp_filtered_filename_ARRAY = array();
//        $tmp_processed_filename_ARRAY = array();

//        $tmp_request_salt = $this->salt(26);

        //$this->print_r($dir_filepath, 'system_base64_integrate processing.', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);
        if(is_dir($dir_filepath)){

            //
            // SOURCE - LOCAL_DIR
            if(is_readable($dir_filepath)){

                $this->print_r('THIS IS A ' . 
                    'READABLE DIRECTORY: ' . 
                       $dir_filepath, 
                       'is_readable().', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);

                //
                // SCAN DIR FOR 
                // IMAGE FILE CONTENT.

                /**
                lnum 94 :: crnrstn_asset_validator::__construct($type, $ext, $mime)
                switch($type){
                case 'CREATIVE':
                $this->add_auth_mime_type('jpg','image/jpeg');
                $this->add_auth_mime_type('jpeg','image/jpeg');
                $this->add_auth_mime_type('jpg2','image/jpeg');
                $this->add_auth_mime_type('gif','image/gif');
                $this->add_auth_mime_type('bmp','image/bmp');
                $this->add_auth_mime_type('bmp','image/x-windows-bmp');
                $this->add_auth_mime_type('jpe','image/jpeg');
                $this->add_auth_mime_type('tif','image/tiff');
                $this->add_auth_mime_type('tif','image/x-tiff');
                $this->add_auth_mime_type('ico','image/x-icon');
                $this->add_auth_mime_type('svg','image/svg+xml');
                $this->add_auth_mime_type('pic','image/pict');
                $this->add_auth_mime_type('pict','image/pict');
                $this->add_auth_mime_type('png','image/png');

                */

                $this->print_r('Scanning Images: ' . 
                       $dir_filepath, 
                       'Image Processing.', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);
                $this->error_log('CRNRSTN :: BASE64 ' . 
                       'services scanning ' . 
                       'system images: ' . 
                       $dir_filepath, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $this->R_data['int_flag']['CRNRSTN_BARNEY']);
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

                $tmp_scraped_filename_ARRAY = $this->better_scandir($dir_filepath);

//                $tmp = array_pop($tmp_scraped_filename_ARRAY);
//                $tmp = array_pop($tmp_scraped_filename_ARRAY);

                //oCRNRSTN_ASSET_MGR
                // CUSTOM IMAGES
                $tmp_img_cnt = sizeof($tmp_scraped_filename_ARRAY);
                for($i = 0; $i < $tmp_img_cnt; $i++){

                    $this->print_r('FILE[' . $i . ' of ' . $tmp_img_cnt . ']: ' . $tmp_scraped_filename_ARRAY[$i], 'oCRNRSTN_ASSET_MGR::is_approved_mime_type().', NULL, __LINE__, __METHOD__, __FILE__);

//                    if($this->is_approved_mime_type(CRNRSTN_RESOURCE_IMAGE, $dir_filepath, $tmp_scraped_filename_ARRAY[$i])){
//
//                        $this->print_r('APPROVED FILE: ' . $tmp_scraped_filename_ARRAY[$i], 'oCRNRSTN::is_approved_mime_type().', NULL, __LINE__, __METHOD__, __FILE__);
//
//                        die();
//
//                    }else{
//
//                        $this->print_r('UNAUTHORIZED FILE TYPE: ' . $tmp_scraped_filename_ARRAY[$i], 'oCRNRSTN::is_approved_mime_type().', NULL, __LINE__, __METHOD__, __FILE__);
//
//                        die();
//
//                    }

                }


                return true;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 *
                 * $this->error_log(
                 *        'CRNRSTN :: has experienced ' . 
                 *        'permissions related errors ' . 
                 *        'attempting to read from the ' . 
                 *        'source directory, ' . 
                 *        $dir_path . 
                 *        '.');
                 *
                 */
                $this->print_r(
                       'NOT READABLE DIRECTORY: ' . 
                       $dir_filepath, 
                       'is_readable().', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);
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

            }

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             *
             * $this->error_log(
             *        'CRNRSTN :: has experienced ' . 
             *        'errors attempting to find ' . 
             *        'the source directory, ' . 
             *        $dir_path . 
             *        ', within the local ' . 
             *        'file system.');
             *
             */
            $this->print_r(
                  'NOT A DIRECTORY: ' . 
                  $dir_filepath, 
                  'is_dir(). ', 
                  NULL, 
                  __LINE__, 
                  __METHOD__, 
                  __FILE__);

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

            if($this->is_file($dir_filepath) && 
                \strlen($dir_filepath) > 0)
            {

                $this->print_r(
                       'THIS IS A FILE: ' . 
                       $dir_filepath, 
                       'is_file(). ', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);

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


            }else{

                $this->print_r(
                       'NOT A FILE: ' . 
                       $dir_filepath, 
                       'is_file(). ', 
                       NULL, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);

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

            }

        }

        die();

        //$this->print_r('Images count: [' . count($tmp_filtered_filename_ARRAY) . '].', 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);

        //
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // Return an instantiation of
        // the CRNRSTN :: Lightsaber
        // SOAP Services Layer System
        // Asset Manager.
        //
        //
        // 5 :: Monday, July 15, 2024 @ 2017 hrs.
        //
        // $tmp_oMEDIA_CONVERTOR = new crnrstn_system_asset_manager($this->oCRNRSTN);
        $tmp_oMEDIA_CONVERTOR = $this->return_registered_resource('new', 'crnrstn_system_asset_manager', $this->oCRNRSTN);

        foreach($tmp_filtered_filename_ARRAY as $index => $tmp_filename){

            $pos_dot = stripos($tmp_filename, '.');
            if($pos_dot !== false){

                $img_name = '';

                //
                // WE HAVE POTENTIAL FILENAME DOT
                $tmp_filename_ARRAY = explode('.', $tmp_filename);
                $tmp_original_file_extension_clean = array_pop($tmp_filename_ARRAY);   // $tmp_filename IS NOW ARRAY RETURN
                foreach($tmp_filename_ARRAY as $index_img_=> $val_img){

                    $img_name .= $val_img . '.';

                }

                $img_name = $this->strrtrim($img_name, '.');

            }

            if(!isset($tmp_flagged_filename_ARRAY[$img_name])){

                $tmp_current_batch--;

                if($tmp_current_batch < 0){

                    $tmp_current_batch = $tmp_batch_size;

                    //
                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                    // Return an instantiation of
                    // the CRNRSTN :: Lightsaber
                    // SOAP Services Layer System
                    // Asset Manager.
                    //
                    //
                    // 5 :: Monday, July 15, 2024 @ 2019 hrs.
                    //
                    // $tmp_oMEDIA_CONVERTOR = new crnrstn_system_asset_manager($this->oCRNRSTN);
                    $tmp_oMEDIA_CONVERTOR = $this->return_registered_resource('new', 'crnrstn_system_asset_manager', $this->oCRNRSTN);

                }

                if($tmp_oMEDIA_CONVERTOR->system_base64_synchronize($tmp_filename) == true){

                    //$this->print_r('Processed image: [' . $tmp_filename . '].', 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);
                    $tmp_processed_filename_ARRAY[] = $tmp_filename;
                    $tmp_flagged_filename_ARRAY[$img_name] = 1;

                }

            }

        }

        //$this->print_r('Processed Images [skipped=' . $tmp_skipped . '] [err=' . $tmp_err_cnt . '][' . print_r($tmp_processed_filename_ARRAY, true) . '].', 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);

        return true;





        return $this->R_asset_mgr->system_base64_integrate($dir_path, $img_batch_size);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function system_base64_synchronize_batch($img_batch_size = 5)
    {

        $tmp_current_batch = $tmp_batch_size = $img_batch_size;
        $tmp_filtered_filename_ARRAY = array();
        $tmp_processed_filename_ARRAY = array();

        $tmp_path_directory    = $this->get_resource('crnrstn_path_directory', 0, 'CRNRSTN::RESOURCE::HTTP_IMAGES');
        $tmp_system_directory  = $this->get_resource('crnrstn_system_directory', 0, 'CRNRSTN::RESOURCE::HTTP_IMAGES');

        $tmp_png_path_ARRAY    = array();
        $tmp_jpeg_path_ARRAY   = array();
        $tmp_png_path_ARRAY[]  = $tmp_path_directory . \DIRECTORY_SEPARATOR . 
                                 $tmp_system_directory . \DIRECTORY_SEPARATOR . 
                                 'ui' .  \DIRECTORY_SEPARATOR . 
                                 'imgs' .  \DIRECTORY_SEPARATOR . 
                                 'png' .  \DIRECTORY_SEPARATOR . 
                                 'system' .  \DIRECTORY_SEPARATOR;
        $tmp_png_path_ARRAY[]  = $tmp_path_directory . \DIRECTORY_SEPARATOR . 
                                 $tmp_system_directory . \DIRECTORY_SEPARATOR . 
                                 'ui' .  DIRECTORY_SEPARATOR . 
                                 'imgs' .  \DIRECTORY_SEPARATOR . 
                                 'png' .  \DIRECTORY_SEPARATOR . 
                                 'social' .  \DIRECTORY_SEPARATOR;
        $tmp_jpeg_path_ARRAY[] = $tmp_path_directory . \DIRECTORY_SEPARATOR . 
                                 $tmp_system_directory . \DIRECTORY_SEPARATOR . 
                                 'ui' .  DIRECTORY_SEPARATOR . 
                                 'imgs' .  \DIRECTORY_SEPARATOR . 
                                 'jpg' .  \DIRECTORY_SEPARATOR . 
                                 'system' .  \DIRECTORY_SEPARATOR;
        $tmp_jpeg_path_ARRAY[] = $tmp_path_directory . \DIRECTORY_SEPARATOR . 
                                 $tmp_system_directory . \DIRECTORY_SEPARATOR . 
                                 'ui' .  DIRECTORY_SEPARATOR . 
                                 'imgs' .  \DIRECTORY_SEPARATOR . 
                                 'jpg' .  \DIRECTORY_SEPARATOR . 
                                 'social' .  \DIRECTORY_SEPARATOR;

        for($ii = 0; $ii < 2; $ii++){

            $tmp_dir_path_PNG  = $tmp_png_path_ARRAY[$ii];
            $tmp_dir_path_JPEG = $tmp_jpeg_path_ARRAY[$ii];

            //$this->print_r('Scanning Images: ' . $tmp_dir_path_PNG, 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);
            $this->error_log('CRNRSTN :: BASE64 services scanning system images: ' . $tmp_dir_path_PNG, __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_BARNEY']);
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

            $tmp_scraped_filename_PNG_ARRAY = $this->better_scandir($tmp_dir_path_PNG);

            //$this->print_r('Scanning Images: ' . $tmp_dir_path_JPEG, 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);
            $this->error_log('CRNRSTN :: BASE64 services scanning system images: ' . $tmp_dir_path_JPEG, __LINE__, __METHOD__, __FILE__, $this->R_data['int_flag']['CRNRSTN_BARNEY']);

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

            $tmp_scraped_filename_JPEG_ARRAY = $this->better_scandir($tmp_dir_path_JPEG);

//        $tmp = array_pop($tmp_scraped_filename_PNG_ARRAY);
//        $tmp = array_pop($tmp_scraped_filename_PNG_ARRAY);
//        $tmp = array_pop($tmp_scraped_filename_JPEG_ARRAY);
//        $tmp = array_pop($tmp_scraped_filename_JPEG_ARRAY);

            // PNG
            $tmp_img_cnt = \sizeof($tmp_scraped_filename_PNG_ARRAY);
            for ($i = 0; $i < $tmp_img_cnt; $i++){

                $tmp_pos_png      = \strpos($tmp_scraped_filename_PNG_ARRAY[$i], '.png');
                $tmp_pos_ds_store = \strpos($tmp_scraped_filename_PNG_ARRAY[$i], 'DS_Store');

                if(($tmp_pos_png !== false) && 
                    ($tmp_pos_ds_store == false))
                {

                    $tmp_filtered_filename_ARRAY[] = $tmp_scraped_filename_PNG_ARRAY[$i];

                }else{

                    $tmp_skipped_filename_ARRAY[] = $tmp_scraped_filename_PNG_ARRAY[$i];

                }

            }

            // JPEG
            $tmp_img_cnt = sizeof($tmp_scraped_filename_JPEG_ARRAY);
            for ($i = 0; $i < $tmp_img_cnt; $i++){

                $tmp_pos_jpg      = \strpos($tmp_scraped_filename_JPEG_ARRAY[$i], '.jpg');
                $tmp_pos_jpeg     = \strpos($tmp_scraped_filename_JPEG_ARRAY[$i], '.jpeg');
                $tmp_pos_jpg2     = \strpos($tmp_scraped_filename_JPEG_ARRAY[$i], '.jpg2');
                $tmp_pos_ds_store = \strpos($tmp_scraped_filename_JPEG_ARRAY[$i], 'DS_Store');

                if((($tmp_pos_jpg !== false) || 
                    ($tmp_pos_jpeg !== false) || 
                    ($tmp_pos_jpg2 !== false)) && 
                    ($tmp_pos_ds_store == false))
                {

                    $tmp_filtered_filename_ARRAY[] = $tmp_scraped_filename_JPEG_ARRAY[$i];

                }else{

                    $tmp_skipped_filename_ARRAY[] = $tmp_scraped_filename_JPEG_ARRAY[$i];

                }

            }

        }

        //$this->print_r('Images count: [' . count($tmp_filtered_filename_ARRAY) . '].', 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);

        //
        // # C # R # N # R # S # T # N # :: # L # I # G # H # T
        // Return an instantiation of
        // the CRNRSTN :: Lightsaber
        // SOAP Services Layer System
        // Asset Manager.
        //
        //
        // 5 :: Monday, July 15, 2024 @ 2020 hrs.
        //
        // $tmp_oMEDIA_CONVERTOR = new crnrstn_system_asset_manager($this->oCRNRSTN);
        $tmp_oMEDIA_CONVERTOR = $this->return_registered_resource('new', 'crnrstn_system_asset_manager', $this->oCRNRSTN);

        foreach($tmp_filtered_filename_ARRAY as $index => $tmp_filename){

            $pos_dot = stripos($tmp_filename, '.');
            if($pos_dot !== false){

                $img_name = '';

                //
                // WE HAVE POTENTIAL FILENAME DOT
                $tmp_filename_ARRAY = explode('.', $tmp_filename);
                $tmp_original_file_extension_clean = array_pop($tmp_filename_ARRAY);   // $tmp_filename IS NOW ARRAY RETURN
                foreach($tmp_filename_ARRAY as $index_img_=> $val_img){

                    $img_name .= $val_img . '.';

                }

                $img_name = $this->strrtrim($img_name, '.');

            }

            if(!isset($tmp_flagged_filename_ARRAY[$img_name])){

                $tmp_current_batch--;


                if($tmp_current_batch < 0){

                    $tmp_current_batch = $tmp_batch_size;

                    //
                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                    // Return an instantiation of
                    // the CRNRSTN :: Lightsaber
                    // SOAP Services Layer System
                    // Asset Manager.
                    //
                    //
                    // 5 :: Monday, July 15, 2024 @ 2021 hrs.
                    //
                    // $tmp_oMEDIA_CONVERTOR = new crnrstn_system_asset_manager($this->oCRNRSTN);
                    $tmp_oMEDIA_CONVERTOR = $this->return_registered_resource('new', 'crnrstn_system_asset_manager', $this->oCRNRSTN);

                }

                //$this->error_log('$tmp_filename[' . $tmp_filename . '].', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);

                if($tmp_oMEDIA_CONVERTOR->system_base64_synchronize($tmp_filename) == true){

                    //$this->error_log('SUCCESS. $tmp_filename[' . $tmp_filename . '].', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY);

                    //$this->print_r('Processed image: [' . $tmp_filename . '].', 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);
                    $tmp_processed_filename_ARRAY[] = $tmp_filename;
                    $tmp_flagged_filename_ARRAY[$img_name] = 1;

                }

            }

        }

        $this->print_r('Processed Images [' . 
               \print_r($tmp_processed_filename_ARRAY, true) . 
               '].', 'Image Processing.', NULL, __LINE__, __METHOD__, __FILE__);
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


        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_lang_content_ARRAY()
    {

        return self::$lang_content_ARRAY;

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
    function validate_pwd_hash_login(
             $user_submitted_password, 
             $database_result_pwd_hash)
    {

        return \password_verify(
               $user_submitted_password, 
               $database_result_pwd_hash);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function header_signature_options_return()
    {

        return self::$R_http->header_signature_options_return();

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
    function header_options_add(
             $header_array, 
             $overwrite_existing)
    {

        self::$R_http->header_options_add(
                       $header_array, 
                       $overwrite_existing);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function header_options_apply()
    {

        self::$R_http->header_options_apply();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_headers($return_type)
    {

        return self::$R_http->get_headers($return_type);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_user_agent()
    {

        return self::$R_http->get_user_agent();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_mobile_devices()
    {

        return self::$R_http->get_mobile_devices();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_tablet_devices()
    {

        return self::$R_http->get_tablet_devices();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_browsers()
    {

        return self::$R_http->get_browsers();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function get_mobile_os()
    {

        return self::$R_http->get_mobile_os();

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
    function add_cookie(
             $name, 
             $value, 
             $expires_or_options, 
             $path, 
             $domain, 
             $secure, 
             $httponly)
    {

        return self::$R_cookie->addCookie(
                                $name, 
                                $value, 
                                $expires_or_options, 
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
    function add_raw_cookie(
             $name, 
             $value, 
             $expires_or_options, 
             $path, 
             $domain, 
             $secure, 
             $httponly)
    {

        return self::$R_cookie->addRawCookie(
                                $name, 
                                $value, 
                                $expires_or_options, 
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
    function delete_all_cookies($path)
    {

        return self::$R_cookie->deleteAllCookies($path);

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
    function delete_cookie(
             $name, 
             $path)
    {

        return self::$R_cookie->deleteCookie(
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
    function get_cookie($name)
    {

        return self::$R_cookie->getCookie($name);

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

        $this->oLog_output_ARRAY[] = $this->error_log('goodbye crnrstn :: ' . 
                                            __CLASS__ . '::' . 
                                            __METHOD__ . 
                                            ' called. [rtime ' . 
                                            $this->wall_time() . 
                                            ' secs][bytes_encrypted ' . 
                                            $this->return_bytes($this->total_bytes_encrypted, 5) . 
                                            '].', 
                                            __LINE__, 
                                            __METHOD__, 
                                            __FILE__, 
                                            $this->R_data['int_flag']['CRNRSTN_BARNEY']);
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


    }

}