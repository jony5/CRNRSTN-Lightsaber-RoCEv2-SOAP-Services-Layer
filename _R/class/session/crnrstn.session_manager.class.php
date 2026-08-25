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
 * CLASS DEFINITION :: crnrstn_session_manager
 * CLASS VERSION    :: 1.00.0001
 * DATE             :: September 11, 2012 @ 1720 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer 
 *                     Session Manager class 
 *                     object with data 
 *                     processing (read and write) 
 *                     integrations that pass 
 *                     through the OpenSSL powered
 *                     CRNRSTN :: Lightsaber 
 *                     session data encryption 
 *                     services layer.
 *                     
 *                     
 *                     5
 *                     
 *                     Monday, July 29, 2024 @ 0819 hrs.
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
class crnrstn_session_manager extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_session_manager 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Monday, April 13, 2026 @ 0203 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations 
     *       to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0532 hrs.
     *
     */

    private $R_data;

    public $oCRNRSTN_USR;
    public $oCRNRSTN_ENV;
    public $oCRNRSTN_SESSION_DDO;
    public $oCRNRSTN_MySQLi;

    //
    // Configuration serial and
    // environmental resource key.
    private static $config_serial;
    public $env_key_crc;
    private static $minimum_serialization_seed_length = 26;
    private static $hmac_algorithm = 'sha256';

    public $mysqli;

    private static $resource_oDDO_ARRAY = array();
    private static $cacheSessionParam_ARRAY = array();
	private static $encryptableDataTypes = array();

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
             $config_serial_override = NULL, 
             $hmac_algorithm_override = NULL, 
             $CRNRSTN_config_salt_override = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Removed crnrstn_session_manager 
         *       __construct input parameter, 
         *       $file_modification_resets_configuration.
         *       5 :: Saturday, April 25, 2026 @ 0649 hrs.
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Perform the necessary
         * input validation
         * for $config_serial_override.
         *
         *
         * 5
         *
         * Monday, August 12, 2024 @ 0510 hrs.
         *
         */
        if(isset($config_serial_override)){

            $config_serial_override = $this->config_ugc_input_clean_data(
                                             'serialization_override', 
                                             $config_serial_override, 
                                             'config_serial');

        }else{
            // 5 :: Tuesday, June 9, 2026 @ 1817 hrs.

            if(!isset($_SESSION['R_cluster_id']) || 
                !isset($_SESSION['R_node_id']) || 
                !isset($_SESSION['R_client_id']))
            {

                $_SESSION['R_cluster_id']     = 
                $this->R_data['R_cluster_id'] = 
                $this->generate_key('R_cluster_id');

                $_SESSION['R_node_id']        = 
                $this->R_data['R_node_id']    = 
                $this->generate_key('R_node_id');

                $_SESSION['R_client_id']      = 
                $this->R_data['R_client_id']  = 
                $this->generate_key('R_client_id');

                $_SESSION['R_cluster_id_starttime'] = $this->microtime_float();

                $clr_ssl_msg = 'TODO :: Maintain the configuration ' . 
                               'serial for SOAP requests using ' . 
                               'the database. $R_cluster_id = ' . 
                               $_SESSION['R_cluster_id'];
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

                $this->R_data['R_cluster_id'] = $_SESSION['R_cluster_id'];
                $this->R_data['R_node_id']    = $_SESSION['R_node_id'];
                $this->R_data['R_client_id']  = $_SESSION['R_client_id'];

            }

        }

        //
        // Perform the necessary
        // input validation
        // for the boolean data,
        //
        // $file_modification_resets_configuration.
        //
        //
        // 5
        //
        // Monday, August 12, 2024 @ 0348 hrs.
        //$file_modification_resets_configuration = $this->config_ugc_input_clean_data('boolean_data', $file_modification_resets_configuration, 'boolean_data_ugc_true_on_error');

        //
        // Perform the necessary
        // input validation
        // for $CRNRSTN_config_salt_override.
        //
        //
        // 5
        //
        // Monday, August 12, 2024 @ 0322 hrs.
        //if(isset($CRNRSTN_config_salt_override)){

            //$CRNRSTN_config_salt_override = $this->config_ugc_input_clean_data('serialization_override', $CRNRSTN_config_salt_override, 'CRNRSTN_config_salt_override');

        //}

        //
        // Perform the necessary
        // input validation
        // for $hmac_algorithm_override.
        //
        //
        // 5
        //
        // Monday, August 12, 2024 @ 0314 hrs.
        //if(isset($hmac_algorithm_override)){

            //self::$hmac_algorithm = $this->config_ugc_input_clean_data('object_boot_sequence_initialization_encryption', $hmac_algorithm_override, 'hmac_alg');

        //}

	    /*
        // Initialize serialization for
        // the session configuration of
        // the CRNRSTN :: Lightsaber
        // SOAP Services Layer.
        //
        //
        // 5
        //
        // Monday, August 12, 2024 @ 0209 hrs.
	    $this->initialize_config_serialization(
               $config_serial_override, 
               $CRNRSTN_config_salt_override, 
               $hmac_algorithm_override, 
               $file_modification_resets_configuration);

        */

	    /*
	    5 :: Thursday, August 1, 2024 @ 2246 hrs.

        Predefined Constants
        The constants below are
	    defined by this extension,
	    and will only be
	    available when the
	    extension has either
	    been compiled into PHP
	    or dynamically loaded
	    at runtime.

        SID (string)
            Constant containing either
            the session name and
            session ID in the form
            of "name=ID" or empty
            string if session ID was
            set in an appropriate
            session cookie.

            This is the same id as
            the one returned
            by session_id().

	    PHP_SESSION_DISABLED (int)
            Return value of session_status()
            if sessions are disabled.

	    PHP_SESSION_NONE (int)
            Return value of session_status()
            if sessions are enabled,
            but no session exists.

	    PHP_SESSION_ACTIVE (int)
            Return value of session_status()
            if sessions are enabled,
            and a session exists.

	    */

        //
        // INITIALIZE ARRAY OF ENCRYPTABLE DATATYPES
        self::$encryptableDataTypes = array('string' => 'string', 
                                            'integer' => 'integer', 
                                            'double' => 'double', 
                                            'float' => 'float', 
                                            'int' => 'int');

		//
		// Function Source ::
		// http://php.net/manual/en/function.hash-equals.php#115635
		// To transparently support
        // decryption dependency with
        // hash_equals on older versions of PHP:
		if(!function_exists('hash_equals')){

            function hash_equals($str1, $str2){

                if(\strlen($str1) != \strlen($str2)){

                    return false;

                }else{

                    $res = $str1 ^ $str2;
                    $ret = 0;

                    for($i = \strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
                    return !$ret;

                }

            }

        }

        /*
        CRNRSTN :: Inventory of session data
        ----
        $_SESSION['R_cluster_id'] = self::$config_serial;
        $_SESSION['CRNRSTN_' . self::$config_serial]['CRNRSTN_EXCEPTION_PREFIX']['RRS_MAP']
        $_SESSION['CRNRSTN_' . self::$config_serial]['CRNRSTN_EXCEPTION_PREFIX']['RRS_MAP_CACHE_REPORT']

        //
        // SPECIAL USE
        $_SESSION['CRNRSTN_' . self::$config_serial]['CRNRSTN_EXCEPTION_PREFIX'] = '';

        */

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
    function session_runtime(
             $reporting_mode = 'R_float', 
             $finite_express_mode = 'ELAPSED', 
             $decimal = 8)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added input parameters, 
         *       $reporting_mode and 
         *       $finite_express_mode to the 
         *       session_manager's 
         *       session_runtime method.
         *
         *       Where, $reporting_mode = [(int) CRNRSTN_FLOAT, 
         *                                 (int) CRNRSTN_DOUBLE, 
         *                                 (int) CRNRSTN_INT, 
         *                                 (int) $this->R_data['int_flag']['R_integer'], 
         *                                 (int) $this->R_data['int_flag']['R_string']]
         *
         *       Where, $finite_express_mode = [(string) 'ELAPSED', 
         *                                     (string) 'ELAPSED_VERBOSE']
         *
         *       E.g., 'ELAPSED_VERBOSE' Output: 
         *             (string) '15 weeks 3 days 4 hours 2 minutes 5 seconds ago'.
         *
         *       E.g., 'ELAPSED' Output: 
         *             (string) '15w 3d 4h 2m 5s ago'.
         *       5 :: Thursday, May 21, 2026 @ 0208 hrs.
         *
         */

	    if(!isset($_SESSION['R_cluster_id_starttime'])){

            $_SESSION['R_cluster_id_starttime'] = $this->microtime_float();

        }

        $tmp_mirco_time_float = $this->microtime_float();

        $timediff = $tmp_mirco_time_float - $_SESSION['R_cluster_id_starttime'];

        $len = $decimal * -1;

        switch($reporting_mode){
            //case CRNRSTN_STRING:
            case 'R_string':
            case $this->R_data['int_flag']['R_string']:

                return $this->incarnate($finite_express_mode, $timediff, true);

            break;
            //case CRNRSTN_FLOAT:
            //case CRNRSTN_DOUBLE:
            case 'R_float':
            case $this->R_data['int_flag']['R_float']:
            case 'R_double':
            case $this->R_data['int_flag']['R_double']:


                if($this->get_crnrstn('operating_system', 'name') == 'Windows®'){

                    return (double) $timediff;

                }

                return \substr($timediff, 0, $len);

            break;
            //case CRNRSTN_INT:
            //case CRNRSTN_INTEGER:
            case 'R_int':
            case $this->R_data['int_flag']['R_int']:
            case 'R_integer':
            case $this->R_data['int_flag']['R_integer']:
            default:

                if($this->get_crnrstn('operating_system', 'name') == 'Windows®'){

                    return (int) $timediff;

                }

                return \substr($timediff, 0, $len);

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
     * @return
     * @access public
     *
     */
    function R_session_data(
             $request_type, 
             $loading_architecture, 
             $resource_name,
             $eval_ttl = -1)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Copied the R_session_data method 
         * from crnrstn to the 
         * crnrstn_session_manager 
         * class object. 
         * 5 :: Wednesday, June 10, 2026 @ 2111 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_session_manager 
         *       R_session_data method 
         *       scope visibility from 
         *       private to public.
         *       
         *       [Thu Jun 11 06:23:17.269303 2026] [:error] 
         *       [pid 47378] [client 172.16.225.1:58637] 
         *       PHP Fatal error:  Uncaught Error: 
         *       Call to private method 
         *       CRNRSTN\\crnrstn_session_manager::R_session_data() 
         *       from context 'CRNRSTN\\crnrstn_registry_user' 
         *       in /var/www/html/sysops/_crnrstn/class/registr
         *       /crnrstn.registry_user.class.php:1756\nStack 
         *       trace:\n#0 /var/www/html/sysops/_crnrstn/class
         *       /registry/crnrstn.registry_user.class.php(1622): 
         *       CRNRSTN\\crnrstn_registry_user->R_session_data(
         *       'clr_ssl_load_ap...', 9878, '/var/www/html/s...', 
         *       -1)\n#1 /var/www/html/sysops/_crnrstn/_config
         *       /_config.resource_registry
         *       /crnrstn.native_resource_registry.function.php
         *       (4287): CRNRSTN\\crnrstn_registry_user->
         *       clr_ssl_load_approved(9878, '/var/www/html/s...', 
         *       -1)\n#2 /var/www/html/sysops/_crnrstn/_config
         *       /_config.resource_registry
         *       /crnrstn.native_resource_registry.function.php(6820): 
         *       CRNRSTN\\_crnrstn_native_resource_registry(
         *       'CRNRSTN\\\\_crnrst...', Object(CRNRSTN\\
         *       crnrstn_registry_user), 'evaluate[RUNTIM...', 
         *       Array, 2, 'e24786d38395b42...', true)\n#3 
         *       /var/www/html/sysops/_crnrstn/class/registry
         *       /crnrstn.registry_user.class.php(4175): 
         *       CRNRSTN\\_crnrstn_native_resou in /var/www
         *       /html/sysops/_crnrstn/class/registry
         *       /crnrstn.registry_user.class.php on line 1756
         *
         *       5 :: Thursday, June 11, 2026 @ 0742 hrs.
         *
         */

        switch($request_type){
            case 'clr_ssl_load_approved':

                switch($loading_architecture){
                    case 'R_load_1_to_1_session':

                        if(!(isset($_SESSION['CRNRSTN']['spool']['evaluated_resources']['clr_ssl_load_approved'][$loading_architecture][$resource_name])))
                        {

                            $this->R_data['spool']['evaluated_resources']['clr_ssl_load_approved'][$loading_architecture][$resource_name] = 1;

                            $clr_ssl_msg = 'The CLR-SSL Registry Resource, ' . 
                                           \strval($resource_name) . 
                                           ', is approved for file evaluation ' . 
                                           'once per client session.';
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

                            return true;

                        }

                        $clr_ssl_msg = 'The CLR-SSL Registry Resource, ' . 
                                       \strval($resource_name) . 
                                       ', is not approved for file evaluation. ' . 
                                       'Once per client session, is the maximum.';
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

                        return false;


                    break;
                    case 'R_load_on_ttl_expire':

                        if(!(isset($this->R_data['spool']['evaluated_resources']['clr_ssl_load_approved'][$loading_architecture][$resource_name])))
                        {

                            $this->R_data['spool']['evaluated_resources']['clr_ssl_load_approved'][$loading_architecture][$resource_name] = 1;
                            $this->R_data['spool']['evaluated_resources']['clr_ssl_load_approved']['timestamp_microtime_float'][$resource_name] = $this->microtime_float();

                            $clr_ssl_msg = 'The CLR-SSL Registry Resource, ' . 
                                           \strval($resource_name) . 
                                           ', is approved for file evaluation ' . 
                                           'as the TTL of ' . 
                                           \strval($eval_ttl) . 
                                           ' seconds will be initialized just now.';
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

                            return true;

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * The resource has been loaded 
                         * before so check the TTL for 
                         * approval to evaluate. 
                         *
                         *
                         * 5 :: Thursday, April 9, 2026 @ 0415 hrs.
                         *
                         */
                        $tmp_ttl_delta = $this->microtime_float() - $this->R_data['spool']['evaluated_resources']['clr_ssl_load_approved']['timestamp_microtime_float'][$resource_name];
                        if($tmp_ttl_delta > (int) $eval_ttl)
                        {

                            $clr_ssl_msg = 'The CLR-SSL Registry Resource, ' . 
                                           \strval($resource_name) . 
                                           ', is approved for file evaluation ' . 
                                           'as the TTL of ' . 
                                           \strval($eval_ttl) . 
                                           ' seconds is expired by ' . 
                                           $tmp_ttl_delta . 
                                           ' seconds.';
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

                            return true;

                        }

                        $clr_ssl_msg = 'The CLR-SSL Registry Resource, ' . 
                                       \strval($resource_name) . 
                                       ', is not approved for file evaluation as ' . 
                                       'the TTL of ' . 
                                       \strval($eval_ttl) . 
                                       ' seconds has not yet expired. ' . 
                                       \strval($tmp_ttl_delta) . 
                                       ' seconds still remain.';
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

                        return false;

                    break;

                }

            break;
            default:

                $clr_ssl_msg = 'Unknown session data request, [' . 
                               \strval($request_type) . 
                               '], received for CLR-SSL Registry resource, [' . 
                               \strval($resource_name) . 
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

            break;

        }

    }

    function _____initialize_config_serialization()
    { 
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Commented out for initialization testing. 
         * 5 :: Saturday, April 25, 2026 @ 0641 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Removed all input parameters from 
         *       crnrstn_session_manager->initialize_config_serialization(), 
         *       as crnrstn_session_manager 
         *       extends crnrstn. 
         *       - $config_serial_override
         *       - $CRNRSTN_config_salt
         *       - $hmac_algorithm
         *       - $file_modification_resets_configuration = true
         *      5 :: Friday, May 15, 2026 @ 0646 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed method to 
         *      _____initialize_config_serialization(). 
         *      5 :: Wednesday, June 10, 2026 @ 1606 hrs.
         *
         */

        $config_filepath = __FILE__; // There is no longer "a" config file.
        $file_modification_resets_configuration = $tmp_init_salt = false;
        $hmac_algorithm = $this->get_crnrstn('hmac_algorithm');

        //
        // This could be developed
        // to be a bit more sufficient
        // for such a low
        // level err...tho.
        //
        // TODO :: This is about to be
        //         automated. 5 :: Saturday, October 28, 2023 @ 1839 hrs.
        //
        $tmp_previous_total_session_packet_size = 
        $tmp_previous_session_packet_size = 
        $tmp_pre_cleaned_total_session_packet_size = 
        $tmp_post_cleaned_total_session_packet_size = 'NA';

        //
        // The CRNRSTN :: Lightsaber
        // SOAP Services Layer
        // Configuration initialization
        // first run.
        //
        // TODO :: Push this through the
        //         CRNRSTN :: Lightsaber
        //         SOAP Services Layer
        //         Session Manager, and
        //         add support for database
        //         driven session management.
        //
        //
        // 5
        //
        // Friday, December 8, 2023 @ 1735 hrs.
        if(!isset($_SESSION['R_cluster_id']) ||
            ($_SESSION['R_cluster_id'] == 'CONFIG_MOD_RESET' ||
            $_SESSION['R_cluster_id'] == 'FILE_MOD_RESET')){

            //
            // Automate the generation of
            // a system configuration key
            // and persist this key
            // in session.
            //
            // Note: The SOAP data channel of
            //       the CRNRSTN :: Lightsaber
            //       SOAP Services Layer Multi-
            //       Channel Decoupled Data
            //       Object (MC-DDO) cannot not
            //       fully articulate all server
            //       $_SESSION[] dependent
            //       technologies, and therefore
            //       CRNRSTN :: SOAP cannot
            //       depend upon, the CRNRSTN ::
            //       MC-DDO Session data channel.
            //
            //
            // 5
            //
            // Friday, December 9, 2023 @ 0304 hrs.
            $tmp_init_salt = true;
            if(isset($config_serial_override)){

                if(is_string($config_serial_override)){

                    if(strlen($config_serial_override) >= self::$minimum_serialization_seed_length){

                        //
                        // Initialize the CRNRSTN ::
                        // Lightsaber SOAP Services
                        // Layer configuration salt
                        // for this new session
                        // from __constructor()
                        // input data.
                        //
                        //
                        // 5
                        //
                        // Monday, August 12, 2024 @ 0307 hrs.
                        $_SESSION['CRNRSTN_CONFIG_SERIALIZATION_SALT'] = $config_serial_override;
                        $tmp_init_salt = false;

                    }

                }

            }

            if($tmp_init_salt !== false){

                //
                // Manually initialize a
                // configuration salt
                // for a new session with
                // the CRNRSTN :: Lightsaber
                // SOAP Services Layer.
                //
                //
                // 5
                //
                // Monday, August 12, 2024 @ 0307 hrs.
                $_SESSION['CRNRSTN_CONFIG_SERIALIZATION_SALT'] = $tmp_session_salt = $this->generate_key('session_config_salt');

            }

            if($file_modification_resets_configuration !== false){

                //
                // Create a corporate key
                // to represent this
                // configuration profile.
                //
                // Force the re-serialization
                // of session with
                // configuration file changes.
                //$tmp_configuration_serial = $tmp_session_salt . '_420.000.' . filesize($config_filepath) . '.' . filemtime($config_filepath) . '.5';
                $tmp_configuration_serial = $tmp_session_salt . $this->file_url_cache_id($config_filepath);

            }else{

                //
                // Create a corporate key
                // to represent this
                // configuration profile.
                //
                // Ignore any configuration
                // file changes.
                $tmp_configuration_serial = $tmp_session_salt . '_420.' . $config_filepath . '.5';

            }

            $_SESSION['R_cluster_id'] = self::$config_serial = $this->hash(
                                                                      $tmp_configuration_serial, 
                                                                      $hmac_algorithm);
            $_SESSION['R_cluster_id_starttime'] = $this->microtime_float();

            //
            // TODO :: Session persist the
            //         detection and configuration
            //         of the CRNRSTN :: Lightsaber
            //         SOAP Services Layer; we can
            //         actually talk about how we
            //         actually max accelerate all
            //         request fulfillment. 5 :: 8/12/2024 @ 0243 hrs.
            //
            //$_SESSION['CRNRSTN_ENV_KEY_' . self::$config_serial] = $env_key;

            $clr_ssl_msg = 'Session configuration initialization [' . 
                           self::$config_serial . 
                           ']. [session_rtime ' . 
                           $this->session_runtime() . 
                           ' secs].';
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

            //
            // SESSION IS SET.
            if($file_modification_resets_configuration !== false){

                //
                // FORCE RE-SERIALIZATION OF SESSION WITH CONFIG FILE CHANGE.
                $tmp_configuration_serial = $_SESSION['CRNRSTN_CONFIG_SERIALIZATION_SALT'] . '_' . $this->file_url_cache_id($config_filepath);
                $tmp_session_reset_code = 'FILE_MOD_RESET';

            }else{

                //
                // IGNORE CONFIG FILE CHANGES.
                $tmp_configuration_serial = $_SESSION['CRNRSTN_CONFIG_SERIALIZATION_SALT'] . '_420.000.' . $config_filepath . '.5';
                $tmp_session_reset_code = 'CONFIG_MOD_RESET';

            }

            self::$config_serial = $this->hash($tmp_configuration_serial, $hmac_algorithm);

            //
            // CHECK FOR CONFIG DELTA.
            if($_SESSION['R_cluster_id'] != self::$config_serial){

                error_log(__LINE__ . ' ' . __METHOD__ . ' RESETTING SESSION CONFIGURATION. CODE[' . $tmp_session_reset_code . '].');
                $tmp_previous_config_serial = $_SESSION['R_cluster_id'];

                if(isset($_SESSION['CRNRSTN_' . $tmp_previous_config_serial])){

                    $tmp_previous_total_session_packet_size = $this->return_bytes($_SESSION);
                    $tmp_previous_session_packet_size = $this->return_bytes($_SESSION['CRNRSTN_' . $tmp_previous_config_serial]);

                }else{

                    error_log(__LINE__ . ' ' . __METHOD__ . ' SESSION DATA IS UNINITIALIZED. COULD NOT FIND [' . 
                        $tmp_previous_config_serial . '] IN $_SESSION[].');

                }

                $_SESSION['R_cluster_id'] = $tmp_session_reset_code;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Re-initialize CRNRSTN :: 
                 * CONFIGURATION.
                 *
                 * // $this->initialize_config_serialization(
                 * //        $config_filepath, 
                 * //        $CRNRSTN_config_salt, 
                 * //        $file_modification_resets_configuration, 
                 * //        $hmac_algorithm);
                 *
                 * $this->initialize_config_serialization();
                 *
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Edit: Removed initialize_config_serialization 
                 *       from runtime and renamed to 
                 *       _____initialize_config_serialization().
                 *       5 :: Wednesday, June 10, 2026 @ 1611 hrs.
                 *        
                 */

                $tmp_pre_cleaned_total_session_packet_size = $this->return_bytes($_SESSION);

                error_log(__LINE__ . ' ' . 
                    __METHOD__ . 
                    ' SESSION DATA REPORT. OLD DATA TOTAL[' . 
                    $tmp_previous_total_session_packet_size . ']. OLD HASH VERSIONED DATA[' . 
                    $tmp_previous_session_packet_size . '].');

                //
                // CLEAN UP SESSION DATA.
                // BY REMOVING THE OLD HASH DATA TREE.
                //  - USE CLEAN DELETE, OR
                //  - SESSION RE-BUILD VIA OLD HASH
                //    NODE TRAVERSAL AND TTL OLD CONTENT
                if(isset($_SESSION['CRNRSTN_' . $tmp_previous_config_serial])){

                    error_log(__LINE__ . ' ' . __METHOD__ . ' DELETING OLD SESSION DATA. OLD PACKET SIZE[' . $tmp_previous_session_packet_size . '].');
                    array_splice($_SESSION['CRNRSTN_' . $tmp_previous_config_serial], 0);

                }

                $tmp_post_cleaned_total_session_packet_size = $this->return_bytes($_SESSION);

                error_log(__LINE__ . ' ' . __METHOD__ . ' SESSION DATA REPORT. PRE-CLEANED SESSION DATA[' . $tmp_pre_cleaned_total_session_packet_size . ']. FINAL (CLEAN) SESSION DATA[' . $tmp_post_cleaned_total_session_packet_size . ']. [session_rtime ' . $this->session_runtime() . ' seconds].');

            }else{

                $clr_ssl_msg = 'Recycling session configuration [' . 
                               $_SESSION['R_cluster_id'] . 
                               ']. [session_rtime ' . 
                               $this->session_runtime() . ' secs].';
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

                /*
                R :: [2026-05-19 23:41:09.710996] 
                     [file /var/www/html/sysops/_crnrstn/class/session/crnrstn.session_manager.class.php] 
                     [mthd CRNRSTN\crnrstn_session_manager::initialize_config_serialization] 
                     [lnum 785] 
                     [rtime 0.075036] 
                     [1168]: 
                     Recycling session configuration 
                     [beab64c9f58bac5e04fc999dab031b81c3a419e71bfc9a0f1aa862d669a85c61]. 
                     [session_rtime 3289.73 secs].

                 */

            }

        }

        //
        // SETTING THIS ARRAY DURING THE INITIALIZATION OF CRNRSTN :: WILL RUN SYSTEM TERMINATE.
        //$this->terminate_configuration_error_ARRAY['EMPTY_CONFIG_SERIAL'] = '$CRNRSTN_config_salt is length ' . $tmp_configuration_serial_len . '.';

        return self::$config_serial;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isvalid_ssdtla_session_data($data_key)
    {

	    if(!isset($_SESSION['CRNRSTN_' . self::$config_serial][$data_key])){

	        return false;

        }

        if($this->is_ssdtla_ttl_expired($data_key)){

            return false;

        }else{

            return true;

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
    function is_ssdtla_ttl_expired($data_key)
    {

        //
        // $tmp_ssdtla_data_ARRAY['datecreated'] = time();
        // $tmp_ssdtla_data_ARRAY['data_value'] = $data_value;
        // $tmp_ssdtla_data_ARRAY['data_type_family'] = $data_type_family;
        // $tmp_ssdtla_data_ARRAY['ttl'] = $ttl;
        if(!isset($_SESSION['CRNRSTN_' . self::$config_serial][$data_key])){

            return false;

        }

        $tmp_ssdtla_data_ARRAY = $_SESSION['CRNRSTN_' . self::$config_serial][$data_key];

        $tmp_currtime_secs = time();
        $tmp_starttime_secs = $tmp_ssdtla_data_ARRAY['datecreated'];

        if($tmp_currtime_secs > $tmp_starttime_secs){

            if(($tmp_currtime_secs - $tmp_starttime_secs) > (int) $tmp_ssdtla_data_ARRAY['ttl']){

                return true;

            }

        }else{

            //
            // PROVIDED START TIME IS AHEAD OF CURRENT SYSTEM TIME. LIKE, HUH?
            return false;

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
    function set_session_resource(
             $data_key, 
             $data_value)
    {
	
	    $_SESSION['CRNRSTN_' . self::$config_serial][$data_key] = $data_value;
	
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
    function get_session_resource($data_key)
    {

        if(isset($_SESSION['CRNRSTN_' . self::$config_serial][$data_key])){

            return $_SESSION['CRNRSTN_' . self::$config_serial][$data_key];

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
    function isset_session_resource($data_key)
    {

        if(isset($_SESSION['CRNRSTN_' . self::$config_serial][$data_key])){

            return true;

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
    function get_ssdtla_session_resource($data_key)
    {

	    //
        // TODO :: GET THIS BEHIND SESSION CHANNEL.
        if(isset($_SESSION['CRNRSTN_' . self::$config_serial][$data_key])){

            $tmp_ssdtla_ARRAY = $_SESSION['CRNRSTN_' . self::$config_serial][$data_key];

            return $tmp_ssdtla_ARRAY['data_value'];

        }

        return false;

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
    function add_ssdtla_resource(
             $data_key, 
             $data_value, 
             $data_type_family = 'CRNRSTN::RESOURCE', 
             $data_authorization_profile = NULL, 
             $index = NULL, 
             $ttl = NULL, 
             $spool_resource = false)
    {

        switch($data_authorization_profile){
            //case CRNRSTN_AUTHORIZE_ALL:
            //case CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION:
            //case CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION & CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME:
            //case CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION & CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_DATABASE:
            case $this->R_data['int_flag']['R_authorize_all']:
            case $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_SESSION']:
            case $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_SESSION'] & 
                 $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_RUNTIME']:
            case $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_SESSION'] & 
                 $this->R_data['int_flag']['R_authorize'] & 
                 $this->R_data['int_flag']['R_channel_DATABASE']:

                $tmp_ARRAY                     = array();
                $tmp_ARRAY['datecreated']      = time();
                $tmp_ARRAY['data_value']       = $data_value;
                $tmp_ARRAY['data_type_family'] = $data_type_family;
                $tmp_ARRAY['ttl']              = $ttl;

                //
                // BASIC SESSION STORAGE
                $_SESSION['CRNRSTN_' . self::$config_serial][$data_key] = $tmp_ARRAY;

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
    function init_session()
    {

        //
	    // CRNRSTN :: SESSION INITIALIZATION :: CURRENTLY PSSDTL ONLY

        //
        // HAS CRNRSTN_SESSION_DATA SQL PROFILE BEEN PROCESSED?
        if($this->oCRNRSTN_USR->isset_query_result_set_key('CRNRSTN_SESSION_DATA')){

            $tmp_session_count = $this->oCRNRSTN_USR->return_record_count('CRNRSTN_SESSION_DATA');

            if($tmp_session_count > 0){

                //
                // SESSION DATA FOR THREAD TO USE/ACCESS
                //error_log(__LINE__ . ' session COUNT OF SESSION MATCH=' . $tmp_session_count . '. NEED TO UPDATE CRNRSTN :: SESSION TABLE WITH FRESH ACTIVITY TIMESTAMPS.');


            }else{

                //
                // NEED TO CLEAN (OR PSSDTL) INITIALIZE A NEW CRNRSTN :: SESSION
                //error_log(__LINE__ . ' session COUNT OF SESSION MATCH=' . $tmp_session_count . '. NEED TO RECORD NEW SESSION.');

                //
                // DO WE START WITH PSSDTL / SSDTL DRIVEN SESSION DATA PROFILE
                if(!$this->init_session_from_pssdtl()){

                    //
                    // JUST INITIALIZE ME A CLEAN SESSION, OK?
                    $this->init_session_sans_pssdtl();

                }

            }

        }else{

            //
            // FIRE CRNRSTN :: SESSION SUPPORTING QUERY
            $this->load_session_sql();

            $tmp_session_count = $this->oCRNRSTN_USR->return_record_count('CRNRSTN_SESSION_DATA');

            if($tmp_session_count > 0){

                //
                // SESSION DATA FOR THREAD TO USE/ACCESS
                //error_log(__LINE__ . ' session COUNT OF SESSION MATCH=' . $tmp_session_count . '. NEED TO UPDATE CRNRSTN :: SESSION TABLE WITH FRESH ACTIVITY TIMESTAMPS.');

            }else{

                //
                // NEED TO CLEAN (OR PSSDTL) INITIALIZE A NEW CRNRSTN :: SESSION
                //error_log(__LINE__ . ' session COUNT OF SESSION MATCH=' . $tmp_session_count . '. NEED TO RECORD NEW SESSION.');

                //
                // DO WE START WITH PSSDTL / SSDTL DRIVEN SESSION DATA PROFILE
                if(!$this->init_session_from_pssdtl()){

                    //
                    // JUST INITIALIZE ME A CLEAN SESSION, OK?
                    $this->init_session_sans_pssdtl();

                }

            }

        }

        $this->CRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
        $this->mysqli = $this->oCRNRSTN_MySQLi->return_conn_object();

        //
        // DO WE NEED TO INSERT A NEW SESSION INTO THE MYSQL DATABASE?
        if($tmp_session_count > 0){

            //
            // JUST NEED TO PERFORM BASIC SESSION MAINTENANCE UPDATE
            $this->touch_session();

        }else{

            //
            // CREATE NEW SESSION IN SESSION TABLE
            $this->create_session();

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function create_session()
    {

        $tmp_ip = $this->return_session_meta('crnrstn_soap_srvc_server_ip_HOST');
        if(strlen($tmp_ip) < 8){

            $this->consume_session_meta('crnrstn_soap_srvc_server_ip_HOST', $_SERVER['SERVER_ADDR']);

        }

        $tmp_ip = $this->return_session_meta('crnrstn_soap_srvc_server_ip_EDGE');
        if(strlen($tmp_ip) < 8){

            $this->consume_session_meta('crnrstn_soap_srvc_server_ip_EDGE', $_SERVER['SERVER_ADDR']);

        }

        $this->consume_session_meta('crnrstn_session_serial_id', $this->oCRNRSTN_USR->generate_new_key(128, -1));
        $this->consume_session_meta('crnrstn_session_serial', $this->oCRNRSTN_USR->generate_new_key(128, '01'));

        $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();
        $tmp_query = 'INSERT INTO `crnrstn_session`
        (`SERIAL_ID`,
        `SERIAL_ID_CRC32`,
        `SESSION_ID`,
        `SESSION_ID_CRC32`,
        `SERIAL`,
        `SERIAL_CRC32`,
        `CLIENT_ID`,
        `CLIENT_ID_CRC32`,
        `SERVER_IP`,
        `EDGE_SERVER_IP`,
        `CLIENT_IP`,
        `DEVICE_TYPE_CONSTANT`,
        `DEVICE_TYPE`,
        `HTTP_USER_AGENT`,
        `ACCEPT_LANGUAGE`,
        `HTTP_REFERER`,
        `SSDTL_PACKET`,
        `ACTIVITY_TIMESTAMP`,
        `DATEMODIFIED`,
        `DATECREATED`)
        VALUES
        ("' . $this->mysqli->real_escape_string($this->return_session_meta('crnrstn_session_serial_id')) . '",
        "' . $this->oCRNRSTN_USR->crc_int32($this->return_session_meta('crnrstn_session_serial_id')) . '",
        "' . $this->mysqli->real_escape_string($this->return_session_meta('SESSION_ID')) . '",
        "' . $this->oCRNRSTN_USR->crc_int32($this->return_session_meta('SESSION_ID')) . '",
        "' . $this->mysqli->real_escape_string($this->return_session_meta('crnrstn_session_serial')) . '",
        "' . $this->oCRNRSTN_USR->crc_int32($this->return_session_meta('crnrstn_session_serial')) . '",
        "' . $this->mysqli->real_escape_string($this->return_session_meta('crnrstn_client_id')) . '",
        "' . $this->oCRNRSTN_USR->crc_int32($this->return_session_meta('crnrstn_client_id')) . '",
        INET_ATON("' . $this->return_session_meta('crnrstn_soap_srvc_server_ip_HOST') . '"),
        INET_ATON("' . $this->return_session_meta('crnrstn_soap_srvc_server_ip_EDGE') . '"),
        INET_ATON("' . $this->mysqli->real_escape_string($this->return_session_meta('crnrstn_soap_service_client_ip')) . '"),
        "' . $this->mysqli->real_escape_string($this->device_type_bit) . '",
        "' . $this->mysqli->real_escape_string($this->device_type) . '",
        "' . $this->mysqli->real_escape_string($this->return_session_meta('crnrstn_soap_srvc_user_agent')) . '",
        "' . $this->mysqli->real_escape_string($this->oCRNRSTN_USR->return_client_header_value('Accept-Language')) . '",
        "' . $this->mysqli->real_escape_string($_SERVER['HTTP_REFERER']) . '",
        "' . $this->mysqli->real_escape_string($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'crnrstn_session')) . '",
        "' . $ts . '",
        "' . $this->mysqli->real_escape_string($this->return_session_meta('SESSION_ID_DATEMODIFIED')) . '",
        "' . $this->mysqli->real_escape_string($this->return_session_meta('SESSION_ID_DATECREATED')) . '");';
        $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile('CRNRSTN_SESSION', '!jesus_is_my_dear_lord!', '', __LINE__, __METHOD__);
        $this->oCRNRSTN_USR->add_database_query($tmp_result_set_key, $tmp_query);

        error_log(__LINE__ . ' session ' . __METHOD__ . ' inserting PSSDTLP (len=' . strlen($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'crnrstn_session')) . ')');

        //
        // PROCESS ALL QUERY TO CONNECTION(S)
        $this->oCRNRSTN_USR->process_query();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function touch_session()
    {

	    error_log('[lum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . 
            '] Touch session MySQL ' . 
            'table for last activity update.');

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
    private function consume_session_meta(
                     $parameter_name, 
                     $parameter_value)
    {
	    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * , 'CRNRSTN::RESOURCE::SESSION_META'
         * function add(
         *          $data_value, 
         *          $data_key = NULL, 
         *          $data_type_family = 'CRNRSTN::RESOURCE', 
         *          $index = NULL, 
         *          $data_authorization_profile = 'R_channel_RUNTIME', 
         *          $ttl = 60)
         * {
         *
         */
        $this->oCRNRSTN_SESSION_DDO->add($parameter_value, $parameter_name);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_session_meta($parameter_name)
    {

	    return $this->oCRNRSTN_SESSION_DDO->preach(
                                            'data_value', 
                                            $parameter_name, 
                                            true);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function init_session_sans_pssdtl()
    {

        $this->consume_session_meta('CRNRSTN_SESSION_ID', session_id());
        $this->consume_session_meta('CRNRSTN_SESSION_ID_DATECREATED', $this->oCRNRSTN_USR->return_query_date_time_stamp());
        $this->consume_session_meta('CRNRSTN_SESSION_ID_DATEMODIFIED', $this->oCRNRSTN_USR->return_query_date_time_stamp());
        $this->consume_session_meta('crnrstn_client_id', $this->oCRNRSTN_USR->generate_new_key(128, '01'));
        $this->consume_session_meta('crnrstn_client_auth_key', $this->oCRNRSTN_USR->generate_new_key(64));
        $this->consume_session_meta('crnrstn_soap_srvc_stime', $this->oCRNRSTN_USR->starttime);
        $this->consume_session_meta('crnrstn_soap_service_client_ip', $this->oCRNRSTN_USR->client_ip());
        $this->consume_session_meta('crnrstn_soap_srvc_user_agent', $_SERVER['HTTP_USER_AGENT']);
        $this->consume_session_meta('jony5_lifestyle_banner_checksum', '8/16/2021 0345 :: Miss you, J5...my boy!');

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function init_session_from_pssdtl()
    {

        if($this->oCRNRSTN_USR->receive_form_integration_packet()){

            if($this->oCRNRSTN_USR->isvalid_data_validation_check()){

                $tmp_crnrstn_session = $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_session');

                // This function (json_decode) only works with UTF-8 encoded strings.
                $tmp_crnrstn_session_ojson = json_decode($tmp_crnrstn_session, TRUE, 6);

                //echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;
                //error_log(__LINE__ . ' session $tmp_crnrstn_session=[' . print_r($tmp_crnrstn_session, true) . ']');
                error_log(__LINE__ . ' session init_session_from_pssdtl() json_last_error_msg=[' . json_last_error_msg() . ']');
                //die();

                $tmp_client_id_HOST = $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['CLIENT_ID'];
                $tmp_client_id_EDGE = $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_client_id');

                if(strlen($tmp_client_id_HOST) < 128){

                    if(strlen($tmp_client_id_EDGE) < 128){

                        $tmp_client_id = $this->oCRNRSTN_USR->generate_new_key(128, '01');

                    }else{

                        $tmp_client_id = $tmp_client_id_EDGE;

                    }

                }else{

                    $tmp_client_id = $tmp_client_id_HOST;

                }

                $this->consume_session_meta('crnrstn_client_id', $tmp_client_id);
                $this->consume_session_meta('crnrstn_client_auth_key', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_client_auth_key'));
                $this->consume_session_meta('crnrstn_soap_srvc_rtime', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_rtime'));
                $this->consume_session_meta('crnrstn_soap_srvc_stime', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_stime'));

                $tmp_crnrstn_soap_service_client_ip = $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_service_client_ip');
                $tmp_pssdtl_CLIENT_IP = $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['CLIENT_IP'];

                if(strlen($tmp_pssdtl_CLIENT_IP) > 0){

                    $this->consume_session_meta('crnrstn_soap_service_client_ip', $tmp_pssdtl_CLIENT_IP);

                }else{

                    if(strlen($tmp_crnrstn_soap_service_client_ip) > 0){

                        $this->consume_session_meta('crnrstn_soap_service_client_ip', $tmp_crnrstn_soap_service_client_ip);

                    }else{

                        $this->consume_session_meta('crnrstn_soap_service_client_ip', $this->oCRNRSTN_USR->client_ip());

                    }

                }

                $this->consume_session_meta('crnrstn_soap_srvc_user_agent', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_user_agent'));
                $this->consume_session_meta('crnrstn_soap_srvc_ttl', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_ttl'));
                $this->consume_session_meta('crnrstn_soap_srvc_form_serial', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_form_serial'));
                $this->consume_session_meta('crnrstn_request_serialization_key', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_request_serialization_key'));
                $this->consume_session_meta('crnrstn_request_serialization_hash', $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_request_serialization_hash'));

                // = = = = = = = =
                // = = = = = = = =
                // HOST SERVER / DOMAIN CONTROLLER      EDGE SERVER / USER CONTACT POINT
                //
                // $tmp_client_id_HOST                  $tmp_client_id_EDGE

                $tmp_crnrstn_php_sessionid_HOST = $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SESSION_ID'];
                $tmp_crnrstn_php_sessionid_EDGE = $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_php_sessionid');

                if(strlen($tmp_crnrstn_php_sessionid_HOST) == 26){

                    $this->consume_session_meta('crnrstn_php_sessionid_HOST', $tmp_crnrstn_php_sessionid_HOST);

                }else{

                    $this->consume_session_meta('crnrstn_php_sessionid_HOST', session_id());

                }

                if(strlen($tmp_crnrstn_php_sessionid_EDGE) == 26){

                    $this->consume_session_meta('crnrstn_php_sessionid_EDGE', $tmp_crnrstn_php_sessionid_EDGE);

                }

                $tmp_crnrstn_server_ip_EDGE = $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_server_ip');
                $tmp_crnrstn_server_ip_HOST = $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SERVER_IP'];

                if(strlen($tmp_crnrstn_server_ip_EDGE) < 8){

                    $this->consume_session_meta('crnrstn_soap_srvc_server_ip_EDGE', $_SERVER['SERVER_ADDR']);

                }else{

                    $this->consume_session_meta('crnrstn_soap_srvc_server_ip_EDGE', $tmp_crnrstn_server_ip_EDGE);

                }

                if(strlen($tmp_crnrstn_server_ip_HOST) < 8){

                    //$this->consume_session_meta('crnrstn_soap_srvc_server_ip_HOST', $_SERVER['SERVER_ADDR']);

                }else{

                    $this->consume_session_meta('crnrstn_soap_srvc_server_ip_HOST', $tmp_crnrstn_server_ip_HOST);

                }

                $tmp_pssdtl_SESSION_ID_DATEMODIFIED = $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SESSION_ID_DATEMODIFIED'];
                $tmp_pssdtl_SESSION_ID_DATECREATED = $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SESSION_ID_DATECREATED'];
                $this->consume_session_meta('crnrstn_soap_srvc_timestamp_HOST', $tmp_pssdtl_SESSION_ID_DATECREATED);

                $tmp_crnrstn_soap_srvc_timestamp = $this->oCRNRSTN_USR->return_form_submitted_value('crnrstn_soap_srvc_timestamp');
                $this->consume_session_meta('crnrstn_soap_srvc_timestamp_EDGE', $tmp_crnrstn_soap_srvc_timestamp);

                $tmp_len = count($tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT']);

                for($i = 0; $i < $tmp_len; $i++){

                    $this->consume_session_meta('STATUS_TARGET_ELEMENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT'][$i]['STATUS_TARGET_ELEMENT']);
                    $this->consume_session_meta('STATUS', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT'][$i]['STATUS']);
                    $this->consume_session_meta('STATUS_CODE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT'][$i]['STATUS_CODE']);
                    $this->consume_session_meta('STATUS_MESSAGE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT'][$i]['STATUS_MESSAGE']);
                    $this->consume_session_meta('ERROR_CODE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT'][$i]['ERROR_CODE']);
                    $this->consume_session_meta('ERROR_MESSAGE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['STATUS_REPORT'][$i]['ERROR_MESSAGE']);

                }

                $this->consume_session_meta('SESSION_ID', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SESSION_ID']);
                $this->consume_session_meta('SESSION_ID_DATEMODIFIED', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SESSION_ID_DATEMODIFIED']);
                $this->consume_session_meta('SESSION_ID_DATECREATED', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['SESSION_ID_DATECREATED']);

                $this->consume_session_meta('CHECKSUM_PROFILE_ID', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['CHECKSUM_PROFILE_ID']);
                $this->consume_session_meta('PROGRAM_KEY', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['PROGRAM_KEY']);
                $this->consume_session_meta('DEVICE_TYPE_CHANNEL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['DEVICE_TYPE_CHANNEL']);
                $this->consume_session_meta('CONTENT_CHECKSUM_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['CONTENT_CHECKSUM_TTL']);

                $this->consume_session_meta('TITLE_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['TITLE_CHECKSUM']);
                $this->consume_session_meta('TITLE_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['TITLE_CONTENT']);
                $this->consume_session_meta('TITLE_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['TITLE_CONTENT_LOCK']);
                $this->consume_session_meta('TITLE_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['TITLE_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('TITLE_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['TITLE_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('SOCIAL_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['SOCIAL_CHECKSUM']);
                $this->consume_session_meta('SOCIAL_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['SOCIAL_CONTENT']);
                $this->consume_session_meta('SOCIAL_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['SOCIAL_CONTENT_LOCK']);
                $this->consume_session_meta('SOCIAL_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['SOCIAL_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('SOCIAL_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['SOCIAL_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('COLORS_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['COLORS_CHECKSUM']);
                $this->consume_session_meta('COLORS_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['COLORS_CONTENT']);
                $this->consume_session_meta('COLORS_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['COLORS_CONTENT_LOCK']);
                $this->consume_session_meta('COLORS_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['COLORS_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('COLORS_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['COLORS_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('STATS_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['STATS_CHECKSUM']);
                $this->consume_session_meta('STATS_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['STATS_CONTENT']);
                $this->consume_session_meta('STATS_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['STATS_CONTENT_LOCK']);
                $this->consume_session_meta('STATS_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['STATS_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('STATS_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['STATS_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('RELAY_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['RELAY_CHECKSUM']);
                $this->consume_session_meta('RELAY_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['RELAY_CONTENT']);
                $this->consume_session_meta('RELAY_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['RELAY_CONTENT_LOCK']);
                $this->consume_session_meta('RELAY_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['RELAY_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('RELAY_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['RELAY_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('REPORTING_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['REPORTING_CHECKSUM']);
                $this->consume_session_meta('REPORTING_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['REPORTING_CONTENT']);
                $this->consume_session_meta('REPORTING_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['REPORTING_CONTENT_LOCK']);
                $this->consume_session_meta('REPORTING_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['REPORTING_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('REPORTING_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['REPORTING_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('WILDCARD_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['WILDCARD_CHECKSUM']);
                $this->consume_session_meta('WILDCARD_CONTENT', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['WILDCARD_CONTENT']);
                $this->consume_session_meta('WILDCARD_CONTENT_LOCK', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['WILDCARD_CONTENT_LOCK']);
                $this->consume_session_meta('WILDCARD_CONTENT_LOCK_TTL', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['WILDCARD_CONTENT_LOCK_TTL']);
                $this->consume_session_meta('WILDCARD_CONTENT_LOCK_ISACTIVE', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['WILDCARD_CONTENT_LOCK_ISACTIVE']);
                $this->consume_session_meta('CRNRSTN_CACHE_CHECKSUM_TTL_DATA_DATEMODIFIED', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['DATEMODIFIED']);
                $this->consume_session_meta('CRNRSTN_CACHE_CHECKSUM_TTL_DATA_DATECREATED', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['UI_SYNC_CONTROLLER_THREADS'][0]['DATECREATED']);
                $this->consume_session_meta('jony5_lifestyle_banner_checksum', '8/16/2021 0345 :: Miss you, J5...my boy!');

                $tmp_len_params_index = count($tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter_index']);
                $tmp_len_params = count($tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter']);

                error_log(__LINE__ . ' session ' . __METHOD__ . ' Begin session_oDDO consumption of PSSDTLP ' . $tmp_len_params_index . '/' . $tmp_len_params . ' param values from client.');

                for($i = 0; $i < $tmp_len_params_index; $i++){

                    /*
                     {
                        "CHECKSUM" : ' . $this->oCRNRSTN_USR->crc_int32($tmp_attribute_key . md5($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                        "KEY" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_attribute_key) . '",
                        "LENGTH" : "' . strlen($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                        "TYPE" : "' . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator] . '",
                        "VALUE" : ' . $this->oCRNRSTN_USR->return_json_value($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '
                    }

                    */

                    $this->consume_session_meta($tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter_index'][$i] . '_CHECKSUM', $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter'][$i][0]['CHECKSUM']);
                    $this->consume_session_meta($tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter_index'][$i], $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter'][$i][0]['VALUE']);
                    error_log(__LINE__ . ' session PSSDTLA processed checksum[' . $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter'][$i][0]['CHECKSUM'] . '] [' . $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter_index'][$i] . '==' . $tmp_crnrstn_session_ojson['oCRNRSTN_SESSION'][0]['ENVIRONMENTAL_CONFIGURATION'][0]['crnrstn_system_configuration_parameter'][$i][0]['VALUE'] . ']. ' . $i . ' of ' . $tmp_len_params_index . '.');

                }

                /*
                $this->oCRNRSTN_USR->form_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_request_serialization_key', true);
                $this->oCRNRSTN_USR->form_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_request_serialization_hash', true);

                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_session', true, $this->oCRNRSTN_USR->return_crnrstn_data_packet('jony5.com'), 'crnrstn_session');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_form_serial', true, $this->oCRNRSTN_USR->generate_new_key(64), 'crnrstn_soap_srvc_form_serial');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_timestamp', true, $this->oCRNRSTN_USR->return_micro_time(), 'crnrstn_soap_srvc_timestamp');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_ttl', true, $this->oCRNRSTN_USR->return_ssdtl_packet_ttl(), 'crnrstn_soap_srvc_ttl');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_user_agent', true, $_SERVER['HTTP_USER_AGENT'], 'crnrstn_soap_srvc_user_agent');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_server_ip', true, $_SERVER['SERVER_ADDR'], 'crnrstn_soap_srvc_server_ip');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_service_client_ip', true, $this->oCRNRSTN_USR->client_ip(), 'crnrstn_soap_service_client_ip');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_stime', true, $this->start_time(true), 'crnrstn_soap_srvc_stime');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_rtime', true, $this->wall_time(), 'crnrstn_soap_srvc_rtime');
                //$this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_protocol_version', true, $this->oCRNRSTN_USR->proper_version('SOAP'), 'crnrstn_soap_srvc_protocol_version');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_php_sessionid', true, session_id());
                //$this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_soap_srvc_encoding', true, $tmp_oNUSOAP_BASE->soap_defencoding, 'crnrstn_soap_srvc_protocol_version');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_client_auth_key', true, $this->oCRNRSTN_USR->generate_new_key(50), 'crnrstn_client_auth_key');
                $this->oCRNRSTN_USR->form_hidden_input_add('crnrstn_soap_data_tunnel_form', 'crnrstn_client_id', true, $this->oCRNRSTN_USR->generate_new_key(128, '01'), 'crnrstn_client_id');

                 "oCRNRSTN_SESSION" : [{
                    "SESSION_ID" : "' . $tmp_SESSION_ID . '",
                    "CLIENT_ID" : "' . $tmp_CLIENT_ID . '",
                    "CLIENT_IP" : "' . $tmp_CLIENT_IP . '",
                    "SERVER_IP" : ' . $tmp_SERVER_IP . ',
                    "EDGE_SERVER_IP" : ' . $this->oCRNRSTN_USR->return_json_value($_SERVER['SERVER_ADDR']) . ',
                    "SESSION_ID_DATEMODIFIED" : ' . $tmp_CRNRSTN_SESSION_DATA_DATEMODIFIED . ',
                    "SESSION_ID_DATECREATED" : ' . $tmp_CRNRSTN_SESSION_DATA_DATECREATED . ',
                    "STATUS_REPORT" : [{
                        "STATUS_TARGET_ELEMENT" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_TARGET_ELEMENT) . '",
                        "STATUS" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS) . '",
                        "STATUS_CODE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_CODE) . '",
                        "STATUS_MESSAGE" : ' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_MESSAGE) . ',
                        "ERROR_CODE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_ERROR_CODE) . '",
                        "ERROR_MESSAGE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_ERROR_MESSAGE) . '"
                        },{
                        "STATUS_TARGET_ELEMENT" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_TARGET_ELEMENT) . '",
                        "STATUS" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS) . '",
                        "STATUS_CODE" : "1234567890",
                        "STATUS_MESSAGE" : ' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_MESSAGE) . ',
                        "ERROR_CODE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_ERROR_CODE) . '",
                        "ERROR_MESSAGE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_ERROR_MESSAGE) . '"
                        },{
                        "STATUS_TARGET_ELEMENT" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_TARGET_ELEMENT) . '",
                        "STATUS" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS) . '",
                        "STATUS_CODE" : "0987654321",
                        "STATUS_MESSAGE" : ' . $this->oCRNRSTN_USR->return_json_value($tmp_STATUS_MESSAGE) . ',
                        "ERROR_CODE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_ERROR_CODE) . '",
                        "ERROR_MESSAGE" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_ERROR_MESSAGE) . '"
                        }],
                    "UI_SYNC_CONTROLLER_THREADS" : [{
                        ' . $CHECKSUM_PROFILE_ID . '
                        ' . $PROGRAM_KEY . '
                        ' . $DEVICE_TYPE_CHANNEL . '
                        ' . $CONTENT_CHECKSUM_TTL . '
                        ' . $TITLE_CHECKSUM . '
                        ' . $TITLE_CONTENT . '
                        ' . $TITLE_CONTENT_LOCK . '
                        ' . $TITLE_CONTENT_LOCK_TTL . '
                        ' . $TITLE_CONTENT_LOCK_ISACTIVE . '
                        ' . $SOCIAL_CHECKSUM . '
                        ' . $SOCIAL_CONTENT . '
                        ' . $SOCIAL_CONTENT_LOCK . '
                        ' . $SOCIAL_CONTENT_LOCK_TTL . '
                        ' . $SOCIAL_CONTENT_LOCK_ISACTIVE . '
                        ' . $COLORS_CHECKSUM . '
                        ' . $COLORS_CONTENT . '
                        ' . $COLORS_CONTENT_LOCK . '
                        ' . $COLORS_CONTENT_LOCK_TTL . '
                        ' . $COLORS_CONTENT_LOCK_ISACTIVE . '
                        ' . $STATS_CHECKSUM . '
                        ' . $STATS_CONTENT . '
                        ' . $STATS_CONTENT_LOCK . '
                        ' . $STATS_CONTENT_LOCK_TTL . '
                        ' . $STATS_CONTENT_LOCK_ISACTIVE . '
                        ' . $RELAY_CHECKSUM . '
                        ' . $RELAY_CONTENT . '
                        ' . $RELAY_CONTENT_LOCK . '
                        ' . $RELAY_CONTENT_LOCK_TTL . '
                        ' . $RELAY_CONTENT_LOCK_ISACTIVE . '
                        ' . $REPORTING_CHECKSUM . '
                        ' . $REPORTING_CONTENT . '
                        ' . $REPORTING_CONTENT_LOCK . '
                        ' . $REPORTING_CONTENT_LOCK_TTL . '
                        ' . $REPORTING_CONTENT_LOCK_ISACTIVE . '
                        ' . $WILDCARD_CHECKSUM . '
                        ' . $WILDCARD_CONTENT . '
                        ' . $WILDCARD_CONTENT_LOCK . '
                        ' . $WILDCARD_CONTENT_LOCK_TTL . '
                        ' . $WILDCARD_CONTENT_LOCK_ISACTIVE . '
                        ' . $DATEMODIFIED . '
                        ' . $DATECREATED . '
                         "jony5_lifestyle_banner_checksum" : "8/16/2021 0345 :: Miss you, J5...my boy!"
                        }],
                    "crnrstn_system_configuration_parameter_index" : [],
                    "crnrstn_system_configuration_parameter" : [
                        {
                            "CHECKSUM" : ' . $this->oCRNRSTN_USR->crc_int32($tmp_attribute_key . md5($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "KEY" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_attribute_key) . '",
                            "LENGTH" : "' . strlen($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "TYPE" : "' . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator] . '",
                            "VALUE" : ' . $this->oCRNRSTN_USR->return_json_value($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '
                        },
                        {
                            "CHECKSUM" : ' . $this->oCRNRSTN_USR->crc_int32($tmp_attribute_key . md5($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "KEY" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_attribute_key) . '",
                            "LENGTH" : "' . strlen($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "TYPE" : "' . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator] . '",
                            "VALUE" : ' . $this->oCRNRSTN_USR->return_json_value($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '
                        },
                        {
                            "CHECKSUM" : ' . $this->oCRNRSTN_USR->crc_int32($tmp_attribute_key . md5($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "KEY" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_attribute_key) . '",
                            "LENGTH" : "' . strlen($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "TYPE" : "' . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator] . '",
                            "VALUE" : ' . $this->oCRNRSTN_USR->return_json_value($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '
                        },
                        {
                            "CHECKSUM" : ' . $this->oCRNRSTN_USR->crc_int32($tmp_attribute_key . md5($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "KEY" : "' . $this->oCRNRSTN_USR->return_json_value($tmp_attribute_key) . '",
                            "LENGTH" : "' . strlen($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '",
                            "TYPE" : "' . $this->attribute_type_ARRAY[$tmp_attribute_key][$tmp_iterator] . '",
                            "VALUE" : ' . $this->oCRNRSTN_USR->return_json_value($this->attribute_value_ARRAY[$tmp_attribute_key][$tmp_iterator]) . '
                        }
                ]

                */

                return true;

            }

        }else{

            return false;

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
    private function load_session_sql()
    {

        $tmp_query = 'SELECT `crnrstn_jony5_content_version_checksums`.`CHECKSUM_PROFILE_ID`,
                `crnrstn_jony5_content_version_checksums`.`PROGRAM_KEY`,
                `crnrstn_jony5_content_version_checksums`.`DEVICE_TYPE_CHANNEL`,
                `crnrstn_jony5_content_version_checksums`.`CONTENT_CHECKSUM_TTL`,
                `crnrstn_jony5_content_version_checksums`.`TITLE_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`TITLE_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`SOCIAL_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`COLORS_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`COLORS_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`STATS_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`STATS_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`RELAY_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`RELAY_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`REPORTING_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`REPORTING_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CHECKSUM`,
                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT`,
                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT_LOCK`,
                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT_LOCK_TTL`,
                `crnrstn_jony5_content_version_checksums`.`WILDCARD_CONTENT_LOCK_ISACTIVE`,
                `crnrstn_jony5_content_version_checksums`.`DATEMODIFIED`,
                `crnrstn_jony5_content_version_checksums`.`DATECREATED`
            FROM `crnrstn_jony5_content_version_checksums`
            WHERE `crnrstn_jony5_content_version_checksums`.`PROGRAM_KEY` = "BASSDRIVE"
            AND (`crnrstn_jony5_content_version_checksums`.`DEVICE_TYPE_CHANNEL` = "DESKTOP"
            OR `crnrstn_jony5_content_version_checksums`.`DEVICE_TYPE_CHANNEL` = "' . $this->device_type . '") LIMIT 1;';
        $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile('CRNRSTN_SESSION', '!jesus_is_my_dear_lord!', 'CRNRSTN_CACHE_CHECKSUM_TTL_DATA', __LINE__, __METHOD__);
        $this->oCRNRSTN_USR->add_database_query($tmp_result_set_key, $tmp_query);

        //
        // RUN CRNRSTN_SESSION_DATA SQL. THEN CHECK COUNTS...
        $tmp_query = 'SELECT `crnrstn_session`.`SERIAL_ID`,
            `crnrstn_session`.`SESSION_ID`,
            `crnrstn_session`.`SERIAL`,
            `crnrstn_session`.`CLIENT_ID`,
            `crnrstn_session`.`SERVER_IP`,
            `crnrstn_session`.`EDGE_SERVER_IP`,
            `crnrstn_session`.`CLIENT_IP`,
            `crnrstn_session`.`DEVICE_TYPE_CONSTANT`,
            `crnrstn_session`.`DEVICE_TYPE`,
            `crnrstn_session`.`HTTP_USER_AGENT`,
            `crnrstn_session`.`ACCEPT_LANGUAGE`,
            `crnrstn_session`.`HTTP_REFERER`,
            `crnrstn_session`.`SSDTL_PACKET`,
            `crnrstn_session`.`DATEMODIFIED`,
            `crnrstn_session`.`DATECREATED`
        FROM `crnrstn_session`
        WHERE `crnrstn_session`.`SESSION_ID` = "' . session_id() . '"
        AND `crnrstn_session`.`SESSION_ID_CRC32` = ' . $this->oCRNRSTN_USR->crc_int32(session_id()) . '
        AND `crnrstn_session`.`ISACTIVE` = 1 LIMIT 1;';
        $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile('CRNRSTN_SESSION', '!jesus_is_my_dear_lord!', 'CRNRSTN_SESSION_DATA', __LINE__, __METHOD__);
        $this->oCRNRSTN_USR->add_database_query($tmp_result_set_key, $tmp_query);

        //
        // PROCESS ALL QUERY TO CONNECTION(S)
        $this->oCRNRSTN_USR->process_query();

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
    function set_session_param(
             $session_param_key, 
             $val = NULL, 
             $iterator = 0)
    {

        $tmp_data_type = gettype($val);
        $session_param_key_crc = $this->hash($session_param_key);

        //if(in_array($tmp_data_type, self::$encryptableDataTypes)){
        if(isset(self::$encryptableDataTypes[$tmp_data_type])){

            $tmp_val_encrypted = $this->sessionParamEncrypt($val);
            $tmp_prefixed_ddo_key = $this->oCRNRSTN_USR->hash_ddo_memory_pointer($session_param_key);

            error_log(__LINE__  . ' session TIME TO WORK, I GUESS. die();');
            die();
            //public function add($data_value, $data_key = NULL, $data_type_family = 'CRNRSTN::RESOURCE', $index = NULL, $data_authorization_profile = 'R_channel_RUNTIME', $ttl = 60){
            $this->oCRNRSTN_SESSION_DDO->add($tmp_val_encrypted, $tmp_prefixed_ddo_key, $iterator);
            //$this->oCRNRSTN_SESSION_DDO->add(1, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_ENCRYPT_' . $session_param_key_crc);

		}else{

            //
            // OBJECT CHECK
            if($tmp_data_type == 'object'){

                $tmp_val_serialized = $this->sessionParamEncrypt(serialize($val));
                error_log(__LINE__  . ' session TIME TO WORK, I GUESS. die();');
                die();
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * function add(
                 *          $data_value, 
                 *          $data_key = NULL, 
                 *          $data_type_family = 'CRNRSTN::RESOURCE', 
                 *          $index = NULL, 
                 *          $data_authorization_profile = 'R_channel_RUNTIME', 
                 *          $ttl = 60)
                 * {
                 *
                 */

                $tmp_prefixed_ddo_key = $this->oCRNRSTN_USR->hash_ddo_memory_pointer($session_param_key);
                $this->oCRNRSTN_SESSION_DDO->add($tmp_val_serialized, $tmp_prefixed_ddo_key, $iterator);
                //$this->oCRNRSTN_SESSION_DDO->add(1, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_ENCRYPT_' . $session_param_key_crc);

            }else{

                error_log(__LINE__  . ' session TIME TO WORK, I GUESS. die();');
                die();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * function add(
                 *          $data_value, 
                 *          $data_key = NULL, 
                 *          $data_type_family = 'CRNRSTN::RESOURCE', 
                 *          $index = NULL, 
                 *          $data_authorization_profile = 'R_channel_RUNTIME', 
                 *          $ttl = 60)
                 * {
                 *
                 */

                $tmp_prefixed_ddo_key = $this->oCRNRSTN_USR->hash_ddo_memory_pointer($session_param_key);
                $this->oCRNRSTN_SESSION_DDO->add($val, $tmp_prefixed_ddo_key, $iterator);
                //$this->oCRNRSTN_SESSION_DDO->add(0, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_ENCRYPT_' . $session_param_key_crc);

            }

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
     * @return
     * @access public
     *
     */
    function get_session_param(
             $data_key, 
             $soap_transport = false, 
             $index = 0, 
             $data_type_family = NULL)
    {

        return $this->oCRNRSTN_ENV->retrieve_data_value(
                                    $data_key, 
                                    $data_type_family, 
                                    $index, 
                                    $this->oCRNRSTN_ENV->env_key, 
                                    $soap_transport);

	}
	
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isset_session_param($session_param_key)
    {

        $tmp_prefixed_data_key = $this->oCRNRSTN_USR->hash_ddo_memory_pointer($session_param_key, CRNRSTN_RESOURCE_ALL);

        error_log(__LINE__ . ' session $tmp_prefixed_data_key=[' . $tmp_prefixed_data_key . ']. die();');
        die();
        return $this->oCRNRSTN_SESSION_DDO->preach('isset', $tmp_prefixed_data_key);

		//
		// RETURN THE VALUE ASSIGNED TO A PARTICULAR SESSION PARAMETER
		if(isset($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)])){
			
			//
			// IF SESSION ENCRYPTION IS ENABLED, WE HAVE TO DECRYPT BEFORE WE CAN CHECK IF EMPTY
			if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_ENCRYPT_' . $this->crc_int32($session_param_key)]>0){

				if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

					if(self::$cacheSessionParam_ARRAY[$session_param_key]!=""){

						return true;

					}else{

						return false;

					}

				}else{

                    if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_DTYPE_' . $this->crc_int32($session_param_key)] == 'object'){

                        self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)]);

                        if(is_object(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return true;

                        }else{

                            return false;

                        }

                    }else{

                        self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)]));

                        if(self::$cacheSessionParam_ARRAY[$session_param_key]!=""){

                            return true;

                        }else{

                            return false;

                        }

                    }

				}
			
			}else{
				
				//
				// NO ENCRYPTION APPLIED TO PARAM. CHECK IF EMPTY.
				if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)]!=""){

				    return true;

				}else{

					return false;

				}

			}

		}else{

			return false;

		}

	}

    function ___set_session_tmp_param(
             $session_param_key, 
             $val = NULL, 
             $iterator = 0)
    {

        $tmp_data_type = gettype($val);
        $session_param_key = $this->crc_int32($session_param_key);

        //if(in_array($tmp_data_type, self::$encryptableDataTypes)){
        if(isset(self::$encryptableDataTypes[$tmp_data_type])){

            $tmp_val_encrypted = $this->sessionParamEncrypt($val);
            $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add($tmp_val_encrypted, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_' . $session_param_key, 0, false);
            $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add(1, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_ENCRYPT_' . $session_param_key, 0, false);

//            //
//            // FOR NOW, ARE WE JUST GOING TO ALLOW SESSION STORAGE TO RUN IN PARALLEL?
//            // WE WILL NEED IT UNTIL EITHER PSSDTLP (JSON INTEGRATION) IS COMPLETE WITH
//            // FEEDBACK LOOP OR DATABASE...THE SAME.
//
//            // 'CRNRSTN_' . $this->crc_int32($_SESSION['R_cluster_id']) . 'CRNRSTN_' . $this->env_key_crc .
//            //
//            // CLEAR POTENTIAL CACHE TO FORCE REFRESH
//            unset(self::$cacheSessionParam_ARRAY[$session_param_key]);
//            $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key] = $tmp_val_encrypted;
//            $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_ENCRYPT_' . $session_param_key] = 1;
//            $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_DTYPE_' . $session_param_key] = $tmp_data_type;

        }else{

            //
            // OBJECT CHECK
            if($tmp_data_type == 'object'){

                $tmp_val_serialized = $this->sessionParamEncrypt(serialize($val));
                $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add($tmp_val_serialized, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_' . $session_param_key, 0, false);
                $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add(1, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_ENCRYPT_' . $session_param_key,  0, false);

//                //
//                // FOR NOW, ARE WE JUST GOING TO ALLOW SESSION STORAGE TO RUN IN PARALLEL?
//                // WE WILL NEED IT UNTIL EITHER PSSDTLP (JSON INTEGRATION) IS COMPLETE WITH
//                // FEEDBACK LOOP OR DATABASE...THE SAME.
//
//                //
//                // CLEAR POTENTIAL CACHE TO FORCE REFRESH
//                unset(self::$cacheSessionParam_ARRAY[$session_param_key]);
//                //error_log(__LINE__ . ' object serialize this $session_param_key=' . $session_param_key);
//                $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key] = $tmp_val_serialized;
//                $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_ENCRYPT_' . $session_param_key] = 1;
//                $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_DTYPE_' . $session_param_key] = $tmp_data_type;

            }else{

                error_log(__LINE__ . ' session '  . __METHOD__ . ':: ' . $tmp_data_type . ' env_key_crc=[' . $this->env_key_crc . '] ' . print_r($val, true) . '. die();');
                //die();

                $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add($val, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_' . $session_param_key, 0, false);
                $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->add(0, 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_' . $this->env_key_crc . 'CRNRSTN_ENCRYPT_' . $session_param_key, 0, false);

//                //
//                // FOR NOW, ARE WE JUST GOING TO ALLOW SESSION STORAGE TO RUN IN PARALLEL?
//                // WE WILL NEED IT UNTIL EITHER PSSDTLP (JSON INTEGRATION) IS COMPLETE WITH
//                // FEEDBACK LOOP OR DATABASE...THE SAME.
//
//                //
//                //
//                // NOT ENCRYPTABLE
//                unset(self::$cacheSessionParam_ARRAY[$session_param_key]);
//                $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key] = $val;
//                $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_ENCRYPT_' . $session_param_key] = 0;
//                $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_DTYPE_' . $session_param_key] = $tmp_data_type;

            }

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
    function get_session_tmp_param(
             $session_param_key, 
             $soap_transport = false, 
             $iterator = 0)
    {

        //
        // TODO :: RE-CODE THIS.
        // Wednesday, November 15, 2023 @ 0444 hrs. and 44 secs.
        //
        //$this->R_data['int_flag']['R_string'],'CRNRSTN_INT', '$this->R_data['int_flag']['R_integer']', 'CRNRSTN_BOOL',
        //'CRNRSTN_BOOLEAN','CRNRSTN_FLOAT', 'CRNRSTN_DOUBLE', 'CRNRSTN_ARRAY',
        //'CRNRSTN_OBJECT', 'CRNRSTN_RESOURCE',
        //'CRNRSTN_RESOURCE_CLOSED', 'CRNRSTN_UNKNOWN_TYPE', 'CRNRSTN_NULL',
        //
        //$tmp_data_type_ARRAY = $this->gettype($url);
        //switch($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']]){}
        //
        //
        // IF THE CRNRSTN :: MULTI-CHANNEL DECOUPLED DATA OBJECT (MC-DDO) IS PROPER, JUST USE THIS AND RETURN.
        if($this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('isset', $session_param_key, $soap_transport, $iterator, false)){

            if($this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_ENCRYPT_' . $session_param_key, $soap_transport, $iterator, false) > 0){

                error_log(__LINE__ . ' session mgr CHECK THAT THIS IS INTEGER PROCESSING OF CRNRSTN :: DDO DATA. TYPE[' . strval($this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_DTYPE_' . $session_param_key, $soap_transport, $iterator, false)) . ']. die();');

                //
                //$this->R_data['int_flag']['R_string'], 'CRNRSTN_INT', '$this->R_data['int_flag']['R_integer']', 'CRNRSTN_BOOL',
                //'CRNRSTN_BOOLEAN','CRNRSTN_FLOAT', 'CRNRSTN_DOUBLE', 'CRNRSTN_ARRAY', 'CRNRSTN_OBJECT', 'CRNRSTN_RESOURCE',
                //'CRNRSTN_RESOURCE_CLOSED', 'CRNRSTN_UNKNOWN_TYPE', 'CRNRSTN_NULL',
                //
                //$tmp_data_type_ARRAY = $this->gettype($url);
                //switch($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']]){}
                //
                //if(($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']] == CRNRSTN_BOOLEAN) || ($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']] == CRNRSTN_BOOL)){
                // strings 'true' or 'false'
                //if(is_bool($data_value) === true){
                // Wednesday, November 15, 2023 @ 0747 hrs.
                // THE IMPRESSION THAT I GET...IS THAT WE ARE GETTING HIGH AT 0747 IN THE MORNING.
                die();

                switch($this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_DTYPE_' . $session_param_key, $soap_transport, $iterator, false)){
                    //case CRNRSTN_STRING:
                    case 'R_string':
                    case $this->R_data['int_flag']['R_string']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));
                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_INTEGER:
                    case 'R_integer':
                    case $this->R_data['int_flag']['R_integer']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (integer) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));

                            return (integer) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_INT:
                    case 'R_int':
                    case $this->R_data['int_flag']['R_int']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (int) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));

                            return (int) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_DOUBLE:
                    case 'R_double':
                    case $this->R_data['int_flag']['R_double']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (double) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));

                            return (double) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_FLOAT:
                    case 'R_float':
                    case $this->R_data['int_flag']['R_float']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (float) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));

                            return (float) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_BOOL:
                    case 'R_bool':
                    case $this->R_data['int_flag']['R_bool']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (bool) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));

                            return (bool) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_BOOLEAN:
                    case 'R_boolean':
                    case $this->R_data['int_flag']['R_boolean']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (boolean) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));
                            self::$cacheSessionParam_ARRAY[$session_param_key] = $this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false));

                            return (boolean) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_OBJECT:
                    case 'R_object':
                    case $this->R_data['int_flag']['R_object']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (object) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);
                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, 0, false)));

                            return (object) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_RESOURCE:
                    case 'R_resource':
                    case $this->R_data['int_flag']['R_resource']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);
                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, 0, false)));

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_RESOURCE_CLOSED:
                    case 'R_resource_closed':
                    case $this->R_data['int_flag']['R_resource_closed']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);
                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, 0, false)));

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_ARRAY:
                    case 'R_array':
                    case $this->R_data['int_flag']['R_array']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            //self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);
                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($this->sessionParamDecrypt($this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, 0, false)));

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_NULL:
                    case 'R_null':
                    case $this->R_data['int_flag']['R_null']:

                        return NULL;

                    break;

                }

            }else{

                //
                // NO ENCRYPTION APPLIED TO PARAM. RETURN SESSION VALUE.
                //return $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key];
                return $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $session_param_key, $soap_transport, $iterator, false);

            }

            return $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $session_param_key, $soap_transport, $iterator, false);

        }

        error_log(__LINE__ . ' session ' . __METHOD__ . ' :: Well, apparently we still need $_SESSION to get a parameter (' . $session_param_key . ')! CRNRSTN_ENV_KEY_CRC=' . $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_ENV_KEY_CRC', $soap_transport) . ' returning false;');
        //die();
        return false;
        //
        //$this->R_data['int_flag']['R_string'], 'CRNRSTN_INT', '$this->R_data['int_flag']['R_integer']', 'CRNRSTN_BOOL',
        //'CRNRSTN_BOOLEAN','CRNRSTN_FLOAT', 'CRNRSTN_DOUBLE', 'CRNRSTN_ARRAY',
        //'CRNRSTN_OBJECT', 'CRNRSTN_RESOURCE', 'CRNRSTN_NULL',
        //'CRNRSTN_RESOURCE_CLOSED', 'CRNRSTN_UNKNOWN_TYPE',
        //
        //$tmp_data_type_ARRAY = $this->gettype($url);
        //switch($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']]){}
        //
        //if(($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']] == CRNRSTN_BOOLEAN) || ($tmp_data_type_ARRAY[$this->R_data['int_flag']['R_integer']] == CRNRSTN_BOOL)){
        // strings 'true' or 'false'
        //if(is_bool($data_value) === true){

        //
        // RETURN THE VALUE ASSIGNED TO A PARTICULAR SESSION PARAMETER AND ENSURE THAT THE APPROPRIATE TYPE IS CAST
        if(isset($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key])){

            if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_ENCRYPT_' . $session_param_key] > 0){

                switch($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_DTYPE_' . $session_param_key]){
                    //case CRNRSTN_STRING:
                    case 'R_string':
                    case $this->R_data['int_flag']['R_string']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_INTEGER:
                    case 'R_integer':
                    case $this->R_data['int_flag']['R_integer']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (integer) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return (integer) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_INT:
                    case 'R_int':
                    case $this->R_data['int_flag']['R_int']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (int) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return (int) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_DOUBLE:
                    case 'R_double':
                    case $this->R_data['int_flag']['R_double']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (double) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return (double) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_FLOAT:
                    case 'R_float':
                    case $this->R_data['int_flag']['R_float']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (float) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return (float) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_BOOL:
                    case 'R_bool':
                    case $this->R_data['int_flag']['R_bool']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (bool) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return (bool) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_BOOLEAN:
                    case 'R_boolean':
                    case $this->R_data['int_flag']['R_boolean']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (boolean) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]));

                            return (boolean) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_OBJECT:
                    case 'R_object':
                    case $this->R_data['int_flag']['R_object']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return (object) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);

                            return (object) self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_RESOURCE:
                    case 'R_resource':
                    case $this->R_data['int_flag']['R_resource']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_RESOURCE_CLOSED:
                    case 'R_resource_closed':
                    case $this->R_data['int_flag']['R_resource_closed']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_ARRAY:
                    case 'R_array':
                    case $this->R_data['int_flag']['R_array']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    //case CRNRSTN_UNKNOWN_TYPE:
                    case 'R_unknown_type':
                    case $this->R_data['int_flag']['R_unknown_type']:

                        if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }else{

                            self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key]);

                            return self::$cacheSessionParam_ARRAY[$session_param_key];

                        }

                    break;
                    case CRNRSTN_NULL:
                    case 'R_null':
                    case $this->R_data['int_flag']['R_null']:

                        return NULL;

                    break;
                }

            }else{

                //
                // NO ENCRYPTION APPLIED TO PARAM. RETURN SESSION VALUE.
                return $_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $session_param_key];

            }

        }else{

            return false;

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
    function isset_session_tmp_param(
             $session_param_key, 
             $iterator = 0)
    {

        return $this->oCRNRSTN_USR->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('isset', $session_param_key, false, $iterator);

        //
        // RETURN THE VALUE ASSIGNED TO A PARTICULAR SESSION PARAMETER
        if(isset($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)])){

            //
            // IF SESSION ENCRYPTION IS ENABLED, WE HAVE TO DECRYPT BEFORE WE CAN CHECK IF EMPTY
            if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_ENCRYPT_' . $this->crc_int32($session_param_key)]>0){

                if(isset(self::$cacheSessionParam_ARRAY[$session_param_key])){

                    if(self::$cacheSessionParam_ARRAY[$session_param_key]!=""){

                        return true;

                    }else{

                        return false;

                    }

                }else{

                    if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_DTYPE_' . $this->crc_int32($session_param_key)] == 'object'){

                        self::$cacheSessionParam_ARRAY[$session_param_key] = unserialize($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)]);

                        if(is_object(self::$cacheSessionParam_ARRAY[$session_param_key])){

                            return true;

                        }else{

                            return false;

                        }

                    }else{

                        self::$cacheSessionParam_ARRAY[$session_param_key] = trim($this->sessionParamDecrypt($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)]));

                        if(self::$cacheSessionParam_ARRAY[$session_param_key]!=""){

                            return true;

                        }else{

                            return false;

                        }

                    }

                }

            }else{

                //
                // NO ENCRYPTION APPLIED TO PARAM. CHECK IF EMPTY.
                if($_SESSION['CRNRSTN_' . $_SESSION['R_cluster_id']]['CRNRSTN_' . $this->env_key_crc]['CRNRSTN_' . $this->crc_int32($session_param_key)]!=""){

                    return true;

                }else{

                    return false;

                }

            }

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
    function getSessionKey()
    {

        if($this->oCRNRSTN_SESSION_DDO->preach('isset', 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_ENV_KEY_CRC')){

            return $this->oCRNRSTN_SESSION_DDO->preach('data_value', 'CRNRSTN_' . $_SESSION['R_cluster_id'] . 'CRNRSTN_ENV_KEY_CRC');

        }

        error_log(__LINE__ . ' session '. __METHOD__ . ':: We apparently still need session on this one. ');

        return $_SESSION['CRNRSTN_' . $_SESSION['CRNRSTN_CONFIG_SERIAL_CRC']]['CRNRSTN_ENV_KEY_CRC'];
		
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
    function setSessionIp(
             $key, 
             $ip)
    {

	    error_log(__LINE__ . ' session mgr DO WE STILL RUN? key[' . $key . ']. ip[' . $ip . ']. die();');
	    die();
	    $this->oCRNRSTN_SESSION_DDO->add($ip,'CRNRSTN_' . self::$config_serial . $this->crc_int32($key));

		$_SESSION['CRNRSTN_' . self::$config_serial . $this->crc_int32($key)] = $ip;

	}
	
    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function getSessionIp()
    {

	    error_log(__LINE__ . ' session ' . __METHOD__ . ' SESSION IP IS [' . $this->oCRNRSTN_USR->get_resource('CRNRSTN_SESSION_IP') . ']. die();');
	    die();

        return $this->oCRNRSTN_USR->get_resource('CRNRSTN_SESSION_IP');

	}

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    private function sessionParamEncrypt($val)
    {

		try{

		    $tmp_class_name = get_class($this->oCRNRSTN_USR);

//		    if($tmp_class_name != 'crnrstn_user'){
//
//		        error_log(__LINE__ . ' session ' . __METHOD__ . ' WE HAVE UNEXPECTED CLASS [' . $tmp_class_name . '] CALLING SESSION ENCRYPT.');
//		        die();
//
//            }

			if($this->oCRNRSTN_SESSION_DDO->preach('isset', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true)){

			    //
                // EXTRACT DATA FROM SESSION DDO
                $tmp_encrypt_cipher = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                $tmp_encrypt_secret_key = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_secret_key', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                $tmp_encrypt_options = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_options', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                $tmp_hmac_alg = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('hmac_alg', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);

                #
				# Source: http://php.net/manual/en/function.openssl-encrypt.php
				#
				$ivlen = openssl_cipher_iv_length($cipher = $tmp_encrypt_cipher);
				$iv = openssl_random_pseudo_bytes($ivlen);
				$ciphertext_raw = openssl_encrypt($val, $tmp_encrypt_cipher, $tmp_encrypt_secret_key, $options = $tmp_encrypt_options, $iv);
				$hmac = hash_hmac($tmp_hmac_alg, $ciphertext_raw, $tmp_encrypt_secret_key, $as_binary = true);
				$ciphertext = base64_encode( $iv . $hmac . $ciphertext_raw );
				
				return $ciphertext;

			}else{
				
				return $val;

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
             * Sunday, June 30, 2024 @ 1616 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
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
     * @access private
     *
     */
    private function sessionParamDecrypt($val)
    {

		try{

            if($this->oCRNRSTN_SESSION_DDO->preach('isset', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true)){

                //
                // EXTRACT DATA FROM SESSION DDO
                $tmp_encrypt_cipher     = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                $tmp_encrypt_secret_key = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_secret_key', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                $tmp_encrypt_options    = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('encrypt_options', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                $tmp_hmac_alg           = $this->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN_USR->hash_ddo_memory_pointer('hmac_alg', 'CRNRSTN::RESOURCE::SESSION_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);

                #
				# Source: http://php.net/manual/en/function.openssl-encrypt.php
				#
				$c                  = base64_decode($val);
				$ivlen              = openssl_cipher_iv_length($cipher = $tmp_encrypt_cipher);
				$iv                 = substr($c, 0, $ivlen);
				$hmac               = substr($c, $ivlen, $sha2len=32);
				$ciphertext_raw     = substr($c, $ivlen+$sha2len);
				$original_plaintext = openssl_decrypt($ciphertext_raw, $tmp_encrypt_cipher, $tmp_encrypt_secret_key, $options = $tmp_encrypt_options, $iv);
				$calcmac            = hash_hmac($tmp_hmac_alg, $ciphertext_raw, $tmp_encrypt_secret_key, $as_binary = true);
				
				if(hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
				{
					return $original_plaintext;

				}else{
					
					/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
					throw new Exception('CRNRSTN :: Session Param Decrypt Notice :: Oops. Something went wrong. Hash_equals comparison failed during data decryption.');

				}
			
			}else{
				
				//
				// NO ENCRYPTION. RETURN VAL
                //error_log('316 session - NO ENCRYPTION. RETURN VAL.');
				return $val;

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
             * Sunday, June 30, 2024 @ 1616 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
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
    function __destruct()
    {

    }

}