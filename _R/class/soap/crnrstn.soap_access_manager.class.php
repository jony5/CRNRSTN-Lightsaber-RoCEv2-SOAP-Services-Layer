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
 * CLASS DEFINITION :: crnrstn_soap_access_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Friday, November 13, 2020 @ 1352 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber SOAP
 *                     Services Access Manager presides
 *                     over the architectural protocols
 *                     dictating SOAP handshakes
 *                     between a SOAP client (server or
 *                     any browser + the CRNRSTN ::
 *                     SSDTLA) and a SOAP server
 *                     (server) for alignment to and
 *                     with the proprietary CRNRSTN ::
 *                     Lightsaber SOAP Services Layer
 *                     server-client communications
 *                     architecture and the access
 *                     manager to determine the level
 *                     of authorization for access
 *                     unto the same.
 *
 *
 *                     5
 *
 *                     Tuesday, July 2, 2024 @ 0721 hrs.
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
class crnrstn_soap_access_manager extends crnrstn
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed the class,
     *       crnrstn_soap_services_access_manager
     *       to crnrstn_soap_access_manager
     *       as we re-onboard SOAP services (CRNRSTN ::
     *       Lightsaber (2022-2026) fired no
     *       database, email, or SOAP operations)
     *       within the CLR-SSL framework.
     *       5 :: Thursday, August 20, 2026 @ 0237 hrs.
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the
     *       crnrstn_soap_access_manager
     *       class object by adding an
     *       extension of the crnrstn object.
     *       5 :: Sunday, August 23, 2026 @ 2205 hrs.
     *
     */

    private static $oCRNRSTN_ENV;

    protected $encryptCipher;
    protected $encryptSecretKey;
    protected $encryptOptions;
    protected $hmac_alg;
    public $CRNRSTN_NUSOAP_SVC_debugMode;
    public $ISACTIVE = false;

    protected $SOAP_oAuth_ARRAY = array();
    protected $SOAP_oClient_ARRAY = array();

    public $serial;

    public function __construct()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * SOAP Services Layer
         * clean restart
         * for the CLR-SSL.
         *
         * 5 :: Thursday, August 20, 2026 @ 0309 hrs.
         *
         */

    }

    public function __pre_R_construct($env_key, $CRNRSTN_NUSOAP_SVC_debugMode, $oCRNRSTN_ENV)
    {

        if($oCRNRSTN_ENV->hash($env_key) == $oCRNRSTN_ENV->return_env_key_hash()){

            self::$oCRNRSTN_ENV = $oCRNRSTN_ENV;
            $this->serial = self::$oCRNRSTN_ENV->generate_new_key(50);

            error_log(__LINE__ . ' ' . $env_key .
                ' crnrstn_soap_access_manager (env) construct() is DISABLED for ' .
                $this->serial . '.');

//            $this->ISACTIVE = true;
//
//            $this->CRNRSTN_NUSOAP_SVC_debugMode = $CRNRSTN_NUSOAP_SVC_debugMode;
//
//            self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

            $this->resource_key = '';

        }else{

            //error_log(__LINE__ . ' ' . __METHOD__ . ' $env_key is not match ...so construct end...' . $env_key);

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
    function soa_object_registration($public_key = 'R_core')
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Sunday, August 23, 2026 @ "00" 2200 hrs.
         *
         * "00"..."00"..."00"...Oh,
         * Oh, Oh, Oh. You know what I mean.
         *
         * Yeah, you know what I mean:
         * "Oh, Oh, Oh"...
         * Yeah, you know what
         * I mean..."Oh"...yeah. ;)
         *
         */

        switch($public_key){
            case 'R_demo':

                $this->soa_register_objects_R_demo();

            break;
            case 'R_core':
            default:

                $this->soa_register_objects_R_core();

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
    function soa_method_registration($public_key = 'R_core')
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Sunday, August 23, 2026 @ "00" 2200 hrs.
         *
         * "00"..."00"..."00"...Oh,
         * Oh, Oh, Oh. You know what I mean.
         *
         * Yeah, you know what I mean:
         * "Oh, Oh, Oh"...
         * Yeah, you know what
         * I mean..."Oh"...yeah. ;)
         *
         */

        switch($public_key){
            case 'R_demo':

                $this->soa_register_methods_R_demo();
/*
                echo '<br><pre><code>[file ' .
                    __FILE__ . ']
[lnum ' .
                    __LINE__ . ']
[PHP v' . $this->version_php() . ']
[' .
                    $this->R['kivotos']['nusoap_server']->title . ' v' .
                    $this->R['kivotos']['nusoap_server']->version . ' ' .
                    $this->R['kivotos']['nusoap_server']->revision . ']
SOAP Resource: (' .
                    \gettype($this->R['kivotos']['nusoap_server']) . ') ' .
                    \get_class($this->R['kivotos']['nusoap_server']) .
                    '</code></pre>';

*/
            break;
            case 'R_core':
            default:

                $this->soa_register_methods_R_core();

            break;

        }

        return NULL;

    }

    public function isAuthorized_oAuth($CRNRSTN_SOAP_SVC_AUTH_KEY, $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES){

        //
        // SUPPORT FOR OPEN PROXY
        $tmp_is_authorized = true;

        error_log(__LINE__ . ' env - checking oAuth [' . $CRNRSTN_SOAP_SVC_AUTH_KEY . '][' . $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES . ']');
        foreach($this->SOAP_oAuth_ARRAY as $serial => $SOAP_oAuth){

            $wildcard_honor = false;

            if(!isset($mandatory_match_fulfilled_flag)){

                $mandatory_match_fulfilled_flag = false;

            }

            if($SOAP_oAuth->ISACTIVE == true){

                //
                // NOT JUST IS VALID CHECK.
                // AGGREGATE ALL AUTH CHECKS HERE (LIST THEM), AND THEN, TRACE ALL DATA DEPENDENCIES...BRING THEM HERE.
                $tmp_return_soap_services_auth_key_ARRAY = $SOAP_oAuth->return_soap_services_auth_key_ARRAY();

                //self::$oCRNRSTN_ENV->print_r('AUTH KEY=' . print_r($tmp_return_soap_services_auth_key_ARRAY, true), 'CRNRSTN :: v' . $oCRNRSTN_USR->version_crnrstn() . ' SOAP AUTH :: ', __LINE__, __METHOD__, __FILE__);

                //$tmp_bit_state_nomination = 'CRNRSTN_SOAP_AUTH_MGR_' . $this->serial;
                //self::$oCRNRSTN_ENV->initialize_serialized_bit($tmp_bit_state_nomination, $integer_constant);

                //$tmp_return_soap_services_resource_denyaccess_ARRAY = $SOAP_oAuth->return_soap_services_resource_denyaccess_ARRAY();
                //$tmp_return_soap_services_resource_access_ARRAY = $SOAP_oAuth->return_soap_services_resource_access_ARRAY();

                //error_log(__LINE__ . ' SERVER env die() - [' . $serial . '] ::' . print_r($tmp_return_soap_services_auth_key_ARRAY, true));

                //$tmp_requested_resources_ARRAY = explode('|', $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES);

                if((in_array(CRNRSTN_RESOURCE_ALL, $tmp_return_soap_services_auth_key_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial])) || (in_array(CRNRSTN_RESOURCE_ALL, $tmp_return_soap_services_auth_key_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial]))){

                    //
                    // WILDCARD AUTH KEY PROVIDED. ANY AUTH KEY (INCLUDING NULL) IS ACCEPTABLE.
                    $wildcard_honor = true;

                }

                if(isset($tmp_return_soap_services_auth_key_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial])){

                    foreach($tmp_return_soap_services_auth_key_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial] as $key0 => $auth_key){

                        //error_log(__LINE__ . ' env - [' . $auth_key . ']==[' . $CRNRSTN_SOAP_SVC_AUTH_KEY . ']');
                        if($auth_key == $CRNRSTN_SOAP_SVC_AUTH_KEY || ($wildcard_honor == true)){
                            //
                            // WE HAVE CRNRSTN :: SOAP Services LAYER oAuth OBJECT TO VERIFY THIS REQUEST AGAINST
                            //error_log(__LINE__ . ' SERVER env - soap_services_auth_key [' . $SOAP_oAuth->serial . '] VALIDATION GOING IN FOR ' . $auth_key);
                            $mandatory_match_fulfilled_flag = true;
//
//                            //
//                            // DENY ACCESS
//                            if(isset($tmp_return_soap_services_resource_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial])){
//
//                                //error_log(__LINE__ . ' SERVER env - we have tmp_return_soap_services_resource_denyaccess_ARRAY data[' . sizeof($tmp_return_soap_services_resource_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial]) . '].');
//                                foreach($tmp_return_soap_services_resource_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()] as $key1 => $SOAP_resource){
//
//                                    //error_log(__LINE__ . ' SERVER env - looking to honor denial of ' . $SOAP_resource . ', if requested.');
//
//                                    //
//                                    // IS THE CLIENT ASKING FOR RESOURCES WHICH ARE DENIED TO THIS AUTHORIZATION KEY?
//                                    if(in_array($SOAP_resource, $tmp_requested_resources_ARRAY)){
//
//                                        error_log(__LINE__ . ' SERVER env - ACCESS DENIED ON ACCOUNT OF THE ' . $SOAP_resource . ' CRNRSTN :: SOAP Services RESOURCE THAT IS REQUESTED...NOTE THAT ' . $SOAP_resource . ' HAS ALSO BEEN CONFIGURED AT THIS PROXY PROFILE TO BE DENIED TO THIS AUTH KEY.');
//                                        $tmp_is_authorized = false;
//
//                                    }
//
//                                }
//
//                            }

                            //if($tmp_is_authorized){

                            $tmp_SOAP_resource = true;

                            //$tmp_bit_state_nomination = 'CRNRSTN_SOAP_AUTH_MGR_' . $this->serial;
                            //self::$oCRNRSTN_ENV->initialize_serialized_bit($tmp_bit_state_nomination, $integer_constant);

                            //error_log(__LINE__ . ' ' . __METHOD__ . ' ' . self::$oCRNRSTN_ENV->print_r_str('hello 0101010010101!', 'BIT DRIVEN CLIENT AUTH :: isAuthorized_oAuth()', NULL, __LINE__, __METHOD__, __FILE__));
                            //die();

                            //
                            // CHECK FOR FLIPPED BITS
                            $tmp_bit_state_nomination = 'CRNRSTN_SOAP_AUTH_MGR_' . $SOAP_oAuth->serial;
                            $tmp_soap_auth_resource_ARRAY = self::$oCRNRSTN_ENV->return_set_serialized_bits($tmp_bit_state_nomination, self::$oCRNRSTN_ENV->system_resource_constants_ARRAY());

//                          error_log(__LINE__ . ' env '. print_r($tmp_soap_auth_resource_ARRAY, true));
//                          die();

                            if(isset($tmp_return_soap_services_resource_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial])){

                                // $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES is the new $tmp_requested_resources_ARRAY.
                                // HOW MANY CONSTANTS YOU HOLDING??
                                $tmp_requested_resources_ARRAY = $tmp_return_soap_services_resource_access_ARRAY = array();
                                foreach($tmp_requested_resources_ARRAY as $key2 => $resource_req){

                                    error_log(__LINE__ . ' env - $resource_req=' . $resource_req);
                                    $tmp_SOAP_resource = false;

                                    foreach($tmp_return_soap_services_resource_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial] as $key1 => $SOAP_resource){
                                        error_log(__LINE__ . ' env - $SOAP_resource=' . print_r($SOAP_resource, true));

                                        if($SOAP_resource == $resource_req){

                                            error_log(__LINE__ . ' SERVER env - soap_services_auth_key GRANT RESOURCE ACCESS = TRUE for ' . $SOAP_resource);
                                            $tmp_SOAP_resource = true;

                                        }

                                    }

                                    //
                                    // ALL REQUESTED RESOURCES MUST BE LISTED AS AUTHORIZED FOR THIS AUTHORIZATION KEY.
                                    if(!($tmp_SOAP_resource == true)){

                                        error_log(__LINE__ .' SERVER env - ACCESS DENIED ON ACCOUNT OF RESOURCE REQUESTED NOT BEING FOUND WITHIN THE PROXY PROFILE CONFIGURATION FOR THIS AUTH KEY.');
                                        $tmp_is_authorized = false;

                                    }

                                }

                            }

                            //}

                        }

                    }

                }

                if($tmp_is_authorized == true){

                    $tmp_return_soap_services_IP_denyaccess_ARRAY = $SOAP_oAuth->return_soap_services_IP_denyaccess_ARRAY();

                    //
                    // CHECK IP ACCESS - DENY
                    if(isset($tmp_return_soap_services_IP_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial])){

                        foreach($tmp_return_soap_services_IP_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial] as $key1 => $ip){

                            error_log(__LINE__ . ' SERVER env - checking denyIPAccess() on ' . $ip);
                            if(self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->denyIPAccess($ip) == true){

                                error_log(__LINE__ . ' SERVER env - BY IP...YOU ARE TO BE DENIED...' . self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->clientIpAddress());
                                $tmp_is_authorized = false;

                            }

                        }

                    }

                }

                if($tmp_is_authorized == true){

                    $tmp_return_soap_services_IP_access_ARRAY = $SOAP_oAuth->return_soap_services_IP_access_ARRAY();

                    //
                    // CHECK IP ACCESS - EXCLUSIVE ACCESS
                    if(isset($tmp_return_soap_services_IP_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial])){

                        foreach($tmp_return_soap_services_IP_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oAuth->serial] as $key => $ip){

                            //if(is_array($ip)){

                            //    self::$oCRNRSTN_ENV->print_r($ip, '', NULL, __LINE__, __METHOD__, __FILE__);
                            //    error_log(__LINE__ . ' SERVER env - die()::[' . $key . '] ' . print_r($ip, true));
                            //    die();

                            //}

                            //error_log(__LINE__ . ' SERVER env checking exclusiveAccess() on ' . $ip);
                            if(self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->exclusiveAccess($ip) == true){

                                //error_log(__LINE__ . ' SERVER env - BY IP...YOU ARE TO BE GRANTED ACCESS...' . self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->clientIpAddress());

                            }else{

                                error_log(__LINE__ . ' SERVER env - BY IP...YOU ARE TO BE DENIED...' . self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->clientIpAddress());
                                $tmp_is_authorized = false;

                            }

                        }

                    }

                }

            }

        }

        if(($tmp_is_authorized == true) && isset($mandatory_match_fulfilled_flag)){

            if(!$mandatory_match_fulfilled_flag == true){

                error_log(__LINE__ . ' SERVER env - THIS IS NOT AN OPEN PROXY. ACCESS DENIED ON ACCOUNT OF AT LEAST ONE AUTH KEY BEING CONFIGURED AT PROXY, BUT NO SUBSEQUENT MANDATORY MATCH WAS FULFILLED BY THE CLIENT.');
                $tmp_is_authorized = false;

            }

        }

        error_log(__LINE__ . ' SERVER env - returning oAuth validation result of [' . $tmp_is_authorized . '].');
        return $tmp_is_authorized;

    }

    public function isAuthorized_oClient($USERNAME, $PASSWORD, $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES, $CRNRSTN_SOAP_SVC_METHOD_REQUESTED, $CRNRSTN_SOAP_ACTION_TYPE){

        //
        // SUPPORT FOR OPEN PROXY
        $tmp_is_authorized = true;

        error_log(__LINE__ . ' SERVER env - checking oClient [' . $USERNAME . '][' . $PASSWORD . '][' . $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES . '][' . $CRNRSTN_SOAP_SVC_METHOD_REQUESTED . '][' . $CRNRSTN_SOAP_ACTION_TYPE . ']');

        //
        // CONVERT STRING BACK INTO BITWISE
        self::$oCRNRSTN_ENV->serialized_bit_stringin('CRNRSTN_CLIENT_SOAP_PERMS_REQUESTED', $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES);

        if(self::$oCRNRSTN_ENV->is_serialized_bit_set('CRNRSTN_CLIENT_SOAP_PERMS_REQUESTED', CRNRSTN_RESOURCE_OPENSOURCE) == true){

            error_log(__LINE__ . ' SERVER env - serialized_bit_stringin SET CRNRSTN_RESOURCE_OPENSOURCE=TRUE');


        }else{

            error_log(__LINE__ . ' SERVER env - serialized_bit_stringin DID NOT SET CRNRSTN_RESOURCE_OPENSOURCE');

        }

        foreach($this->SOAP_oClient_ARRAY as $serial => $SOAP_oClient){

            if(!isset($mandatory_match_fulfilled_flag)){

                $mandatory_match_fulfilled_flag = false;

            }

            if($SOAP_oClient->ISACTIVE == true){

                //
                // NOT JUST IS VALID CHECK.
                // AGGREGATE ALL AUTH CHECKS HERE (LIST THEM), AND THEN, TRACE ALL DATA DEPENDENCIES...BRING THEM HERE.
                $tmp_return_soap_services_username_ARRAY = $SOAP_oClient->return_soap_services_username_ARRAY();
                $tmp_return_soap_services_password_ARRAY = $SOAP_oClient->return_soap_services_password_ARRAY();
                $tmp_return_soap_services_resource_denyaccess_ARRAY = $SOAP_oClient->return_soap_services_resource_denyaccess_ARRAY();
                $tmp_return_soap_services_resource_access_ARRAY = $SOAP_oClient->return_soap_services_resource_access_ARRAY();
                $tmp_return_soap_services_method_activate_ARRAY = $SOAP_oClient->return_soap_services_method_activate_ARRAY();
                $tmp_return_soap_services_method_deactivate_ARRAY = $SOAP_oClient->return_soap_services_method_deactivate_ARRAY();

                $tmp_requested_resources_ARRAY = explode('|', $CRNRSTN_SOAP_SVC_REQUESTED_RESOURCES);

                if(isset($tmp_return_soap_services_username_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                    foreach($tmp_return_soap_services_username_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial] as $key0 => $username){

                        self::$oCRNRSTN_ENV->print_r('[' . $username . '][' . $USERNAME . ']', 'SERVER (env) :: isAuthorized_oClient', NULL, __LINE__, __METHOD__, __FILE__);
                        if($username == $USERNAME){

                            if(self::$oCRNRSTN_ENV->validate_pwd_hash_login($tmp_return_soap_services_password_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial][$key0], $PASSWORD) == true){

                                error_log(__LINE__ . ' SERVER env - CRNRSTN :: SOAP Services CLIENT LOGIN VALID. [' . $USERNAME . '][' . $PASSWORD . '][' . $tmp_return_soap_services_password_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial][$key0] . ']');

                            }else{

                                error_log(__LINE__ . ' SERVER env - CRNRSTN :: SOAP Services CLIENT LOGIN INVALID. [' . $USERNAME . '][' . $PASSWORD . '][' . $tmp_return_soap_services_password_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial][$key0] . ']');

                            }

                            //
                            // WE HAVE CRNRSTN :: SOAP Services LAYER oAuth OBJECT TO VERIFY THIS REQUEST AGAINST
                            error_log(__LINE__ . ' SERVER env - isAuthorized_oClient [' . $SOAP_oClient->serial . '] VALIDATION GOING IN FOR ' . $username);
                            $mandatory_match_fulfilled_flag = true;

                            //
                            // DENY ACCESS
                            if(isset($tmp_return_soap_services_resource_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                                error_log(__LINE__ . ' SERVER env - we have tmp_return_soap_services_resource_denyaccess_ARRAY data[' . sizeof($tmp_return_soap_services_resource_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial]) . '].');
                                foreach($tmp_return_soap_services_resource_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()] as $key1 => $SOAP_resource){

                                    error_log(__LINE__ . ' SERVER env - looking to honor denial of ' . $SOAP_resource . ', if requested.');

                                    //
                                    // IS THE CLIENT ASKING FOR RESOURCES WHICH ARE DENIED TO THIS AUTHORIZATION KEY?
                                    if(in_array($SOAP_resource, $tmp_requested_resources_ARRAY)){

                                        error_log(__LINE__ . ' SERVER env - ACCESS DENIED ON ACCOUNT OF THE ' . $SOAP_resource . ' CRNRSTN :: SOAP Services RESOURCE THAT IS REQUESTED...NOTE THAT ' . $SOAP_resource . ' HAS ALSO BEEN CONFIGURED AT THIS PROXY PROFILE TO BE DENIED TO THIS CLIENT.');
                                        $tmp_is_authorized = false;

                                    }

                                }

                            }

                            if($tmp_is_authorized == true){

                                $tmp_SOAP_resource = true;

                                if(isset($tmp_return_soap_services_resource_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                                    foreach($tmp_requested_resources_ARRAY as $key2 => $resource_req){

                                        error_log(__LINE__ . ' env make false[' . $resource_req . ']');
                                        $tmp_SOAP_resource = false;

                                        foreach($tmp_return_soap_services_resource_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial] as $key1 => $SOAP_resource){

                                            error_log(__LINE__ . ' env make true if[' . $resource_req . ']==[' . $SOAP_resource . ']');

                                            if($SOAP_resource == $resource_req){

                                                error_log(__LINE__ . ' env - soap_services_auth_key GRANT RESOURCE ACCESS = TRUE for ' . $SOAP_resource);
                                                $tmp_SOAP_resource = true;

                                            }

                                        }

                                        //
                                        // ALL REQUESTED RESOURCES MUST BE LISTED AS AUTHORIZED FOR THIS AUTHORIZATION KEY.
                                        if(!($tmp_SOAP_resource == true)){

                                            error_log(__LINE__ . ' SERVER env - ACCESS DENIED ON ACCOUNT OF RESOURCE REQUESTED NOT BEING FOUND WITHIN THE PROXY PROFILE CONFIGURATION FOR THIS CLIENT.');
                                            $tmp_is_authorized = false;

                                        }

                                    }

                                }else{

                                    error_log(__LINE__ . ' SERVER env - NEW ARRAY STRUCT...NOT SEEING.');

                                }

                            }

                            //
                            // CRNRSTN :: SOAP Services LAYER METHOD AUTHORIZATION
                            if($tmp_is_authorized == true){

                                $tmp_SOAP_resource = true;

                                if(isset($tmp_return_soap_services_method_activate_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                                    if(sizeof($tmp_return_soap_services_method_activate_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial]) > 0){

                                        $tmp_req_methods_ARRAY = explode('|', $CRNRSTN_SOAP_SVC_METHOD_REQUESTED);

                                        foreach($tmp_req_methods_ARRAY as $key2 => $method_req){
                                            error_log(__LINE__ . ' env make false [' . $method_req . ']');

                                            $tmp_SOAP_resource = false;

                                            foreach($tmp_return_soap_services_method_activate_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial] as $key1 => $SOAP_resource){
                                                error_log(__LINE__ . ' env make true if[' . $method_req . ']==[' . $SOAP_resource . ']');

                                                if($SOAP_resource == $method_req){

                                                    //error_log(__LINE__ . ' env - soap_services_auth_key GRANT RESOURCE ACCESS = TRUE for ' . $SOAP_resource);
                                                    $tmp_SOAP_resource = true;

                                                }

                                            }

                                            //
                                            // ALL REQUESTED RESOURCES MUST BE LISTED AS AUTHORIZED FOR THIS AUTHORIZATION KEY.
                                            if(!$tmp_SOAP_resource == true){

                                                error_log(__LINE__ . ' SERVER env - ACCESS DENIED ON ACCOUNT OF A REQUESTED METHOD NOT BEING FOUND WITHIN THE PROXY PROFILE CONFIGURATION FOR THIS CLIENT.');
                                                $tmp_is_authorized = false;

                                            }

                                        }

                                    }

                                }else{

                                    error_log(__LINE__ . ' SERVER env - NEW ARRAY STRUCT...NOT SEEING.');

                                }

                            }

                            //
                            // CRNRSTN :: SOAP Services LAYER METHOD AUTHORIZATION
                            if($tmp_is_authorized == true){

                                $tmp_SOAP_resource = true;

                                if(isset($tmp_return_soap_services_method_deactivate_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                                    if(sizeof($tmp_return_soap_services_method_deactivate_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial]) > 0){

                                        $tmp_req_methods_ARRAY = explode('|', $CRNRSTN_SOAP_SVC_METHOD_REQUESTED);

                                        foreach($tmp_req_methods_ARRAY as $key2 => $method_req){

                                            $tmp_SOAP_resource = false;

                                            foreach($tmp_return_soap_services_method_deactivate_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial] as $key1 => $SOAP_resource){

                                                if($SOAP_resource == $method_req){

                                                    $tmp_SOAP_resource = true;

                                                }

                                            }

                                            //
                                            // ALL REQUESTED RESOURCES MUST BE LISTED AS AUTHORIZED FOR THIS AUTHORIZATION KEY.
                                            if(!$tmp_SOAP_resource == true){

                                                error_log(__LINE__ . ' SERVER env - ACCESS DENIED ON ACCOUNT OF A REQUESTED METHOD NOT BEING FOUND WITHIN THE PROXY PROFILE CONFIGURATION FOR THIS CLIENT.');
                                                $tmp_is_authorized = false;

                                            }

                                        }

                                    }

                                }else{

                                    error_log(__LINE__ . ' SERVER env - NEW ARRAY STRUCT...NOT SEEING.');

                                }

                            }

                        }

                    }

                }

                if($tmp_is_authorized == true){

                    $tmp_return_soap_services_IP_denyaccess_ARRAY = $SOAP_oClient->return_soap_services_IP_denyaccess_ARRAY();

                    //
                    // CHECK IP ACCESS - DENY
                    if(isset($tmp_return_soap_services_IP_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                        foreach($tmp_return_soap_services_IP_denyaccess_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial] as $key => $ip){

                            error_log(__LINE__ . ' SERVER env checking denyIPAccess() on ' . $ip);
                            if(self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->denyIPAccess($ip) == true){

                                error_log(__LINE__ . ' SERVER env - BY IP...YOU ARE TO BE DENIED...' . self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->clientIpAddress());
                                $tmp_is_authorized = false;

                            }

                        }

                    }

                }

                if($tmp_is_authorized == true){

                    $tmp_return_soap_services_IP_access_ARRAY = $SOAP_oClient->return_soap_services_IP_access_ARRAY();

                    //
                    // CHECK IP ACCESS - EXCLUSIVE ACCESS
                    if(isset($tmp_return_soap_services_IP_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial])){

                        foreach($tmp_return_soap_services_IP_access_ARRAY[self::$oCRNRSTN_ENV->config_serial_hash][self::$oCRNRSTN_ENV->return_env_key_hash()][$SOAP_oClient->serial] as $key => $ip){

                            //error_log(__LINE__ . ' SERVER env checking exclusiveAccess() on ' . $ip);
                            if(self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->exclusiveAccess($ip) == true){

                                //error_log(__LINE__ . ' SERVER env - BY IP...YOU ARE TO BE GRANTED ACCESS...' . self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->clientIpAddress());

                            }else{

                                error_log(__LINE__ . ' SERVER env - BY IP...YOU ARE TO BE DENIED...' . self::$oCRNRSTN_ENV->oCRNRSTN_IPSECURITY_MGR->clientIpAddress());
                                $tmp_is_authorized = false;

                            }

                        }

                    }

                }

            }else{

                //error_log(__LINE__ . ' SERVER env - $SOAP_oClient is NOT ACTIVE.');

            }

        }

        if(($tmp_is_authorized == true) && isset($mandatory_match_fulfilled_flag)){

            if(!$mandatory_match_fulfilled_flag){

                error_log(__LINE__ . ' SERVER env - THIS IS NOT AN OPEN PROXY. ACCESS DENIED ON ACCOUNT OF AT LEAST ONE AUTH KEY BEING CONFIGURED AT PROXY, BUT NO SUBSEQUENT MANDATORY MATCH WAS FULFILLED BY THE CLIENT.');
                $tmp_is_authorized = false;

            }

        }

        return $tmp_is_authorized;

    }

    public function return_soap_encryption_config_param($param_key){

        switch($param_key){
            case 'SOAP_ENCRYPT_CIPHER':

                return $this->encryptCipher;

            break;
            case 'SOAP_ENCRYPT_SECRET_KEY':

                return $this->encryptSecretKey;

            break;
            case 'SOAP_ENCRYPT_HMAC_ALG':

                return $this->hmac_alg;

            break;
            case 'SOAP_ENCRYPT_OPTIONS':

                return $this->encryptOptions;

            break;
            default:

                return false;

            break;

        }

    }

    public function init_soap_encryption_config($env_key, $encryptCipher, $encryptSecretKey, $hmac_alg, $encryptOptions){

        $encryptSecretKey = self::$oCRNRSTN_ENV->hash($encryptSecretKey, 'md5');

        if($this->ISACTIVE == true){

            //error_log(__LINE__ . ' env $env_key [' . $env_key . '] ACTIVE.');

            $this->encryptCipher = $encryptCipher;
            $this->encryptSecretKey = $encryptSecretKey;
            $this->hmac_alg = $hmac_alg;
            $this->encryptOptions = $encryptOptions;

            self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

        }else{

            //error_log(__LINE__ . ' env $env_key [' . $env_key . '] NOT ACTIVE.');

        }

    }

    public function generate_SOAPAuthKey($env_key, $SOAP_AuthKey = CRNRSTN_RESOURCE_ALL){

        if($this->ISACTIVE == true){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of
             * the CRNRSTN :: Lightsaber
             * SOAP Services Layer
             * Authorization Manager
             * class object.
             *
             *
             * 5 :: Monday, July 15, 2024 @ 2226 hrs.
             *
             * $SOAP_oAuth = new crnrstn_soap_authorization_manager($env_key, $SOAP_AuthKey, self::$oCRNRSTN_ENV);
             *
             * CLR-SSL Resource Registry
             * Prototyping (2024-2026):
             * $SOAP_oAuth = self::$oCRNRSTN_ENV->return_registered_resource(
             *                                    'new',
             *                                    'crnrstn_soap_authorization_manager',
             *                                    $env_key,
             *                                    $SOAP_AuthKey,
             *                                    self::$oCRNRSTN_ENV);
             *
             */

            $spice_salt_mem_ptr = NULL;
            // 5 :: Saturday, August 22, 2026 @ 0701 hrs.
            $this->compound_ointment(
                   $spice_salt_mem_ptr,
                   'crnrstn_soap_authorization_manager',
                   $env_key,
                   $SOAP_AuthKey,
                   self::$oCRNRSTN_ENV);
            $this->anoint(
                   'crnrstn_soap_authorization_manager',
                   $R_bitmask);

            $this->SOAP_oAuth_ARRAY[$SOAP_oAuth->serial] = $SOAP_oAuth;

            self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

            return $SOAP_oAuth;

        }else{

            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            // Return an instantiation of
            // the CRNRSTN :: Lightsaber
            // SOAP Services Layer
            // Authorization Manager
            // class object.
            //
            //
            // 5 :: Monday, July 15, 2024 @ 2229 hrs.
            //
            // $SOAP_oAuth_NULL = new crnrstn_soap_authorization_manager('AUTH::NULL', $SOAP_AuthKey, self::$oCRNRSTN_ENV);
            $SOAP_oAuth_NULL = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authorization_manager', 'AUTH::NULL', $SOAP_AuthKey, self::$oCRNRSTN_ENV);

            return $SOAP_oAuth_NULL;

        }

    }

    public function generate_SOAPAuthKeyInGroup($env_key, $SOAP_AuthKey = CRNRSTN_RESOURCE_ALL, $SOAP_oAuth = NULL){

        if($this->ISACTIVE == true){

            if(isset($SOAP_oAuth)){

                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the CRNRSTN :: Lightsaber
                // SOAP Services Layer
                // Authorization Manager
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2230 hrs.
                //
                // $tmp_SOAP_oAuth = new crnrstn_soap_authorization_manager($env_key, $SOAP_AuthKey, self::$oCRNRSTN_ENV);
                $tmp_SOAP_oAuth = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authorization_manager', $env_key, $SOAP_AuthKey, self::$oCRNRSTN_ENV);

                $tmp_SOAP_oAuth->sync_to_services_authorization_group_key($SOAP_oAuth->services_authorization_group_key);

                $this->SOAP_oAuth_ARRAY[$tmp_SOAP_oAuth->serial] = $tmp_SOAP_oAuth;
                //error_log(__LINE__ . ' SERVER env - gkey[' . $SOAP_oAuth->services_authorization_group_key . '][' . $tmp_SOAP_oAuth->serial . '] $SOAP_AuthKey=' . $SOAP_AuthKey);

                self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

                return $tmp_SOAP_oAuth;

            }else{

                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the CRNRSTN :: Lightsaber
                // SOAP Services Layer
                // Authorization Manager
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2231 hrs.
                //
                // $SOAP_oAuth = new crnrstn_soap_authorization_manager($env_key, $SOAP_AuthKey, self::$oCRNRSTN_ENV);
                $SOAP_oAuth = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authorization_manager', $env_key, $SOAP_AuthKey, self::$oCRNRSTN_ENV);

                $SOAP_oAuth->init_services_authorization_group_key();

                $this->SOAP_oAuth_ARRAY[$SOAP_oAuth->serial] = $SOAP_oAuth;
                //error_log(__LINE__ . ' SERVER env - origin gkey[' . $SOAP_oAuth->services_authorization_group_key . '][' . $SOAP_oAuth->serial . '] $SOAP_AuthKey=' . $SOAP_AuthKey);

                self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

                return $SOAP_oAuth;

            }

        }

    }

    public function addClient($env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode = 0){

        if($this->ISACTIVE == true){

            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            // Return an instantiation of
            // the CRNRSTN :: Lightsaber
            // SOAP Services Layer
            // Client Management
            // class object.
            //
            //
            // 5 :: Monday, July 15, 2024 @ 2233 hrs.
            //
            // $SOAP_oClient = new crnrstn_soap_authentication_manager($env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);
            $SOAP_oClient = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authentication_manager', $env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);

            $this->SOAP_oClient_ARRAY[$SOAP_oClient->serial] = $SOAP_oClient;

            self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

            return $SOAP_oClient;

        }else{

            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            // Return an instantiation of
            // the CRNRSTN :: Lightsaber
            // SOAP Services Layer
            // Client Management
            // class object.
            //
            //
            // 5 :: Monday, July 15, 2024 @ 2234 hrs.
            //
            // $SOAP_oClient_NULL = new crnrstn_soap_authentication_manager('AUTH::NULL', $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);
            $SOAP_oClient_NULL = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authentication_manager', 'AUTH::NULL', $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);

            return $SOAP_oClient_NULL;

        }

    }

    public function addClientToGroup($env_key, $username, $password, $SOAP_oClient = NULL, $CRNRSTN_NUSOAP_SVC_debugMode = false){

        if($this->ISACTIVE == true){

            if(isset($SOAP_oClient)){

                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the CRNRSTN :: Lightsaber
                // SOAP Services Layer
                // Client Management
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2234 hrs.
                //
                // $tmp_SOAP_oClient = new crnrstn_soap_authentication_manager($env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);
                $tmp_SOAP_oClient = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authentication_manager', $env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);

                $tmp_SOAP_oClient->sync_to_services_client_group($SOAP_oClient->services_client_group_key);

                $this->SOAP_oClient_ARRAY[$tmp_SOAP_oClient->serial] = $tmp_SOAP_oClient;

                self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

                return $tmp_SOAP_oClient;

            }else{

                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the CRNRSTN :: Lightsaber
                // SOAP Services Layer
                // Client Management
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2236 hrs.
                //
                // $SOAP_oClient = new crnrstn_soap_authentication_manager($env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);
                $SOAP_oClient = self::$oCRNRSTN_ENV->return_registered_resource('new', 'crnrstn_soap_authentication_manager', $env_key, $username, $password, $CRNRSTN_NUSOAP_SVC_debugMode, self::$oCRNRSTN_ENV);

                $SOAP_oClient->init_services_client_group();

                $this->SOAP_oClient_ARRAY[$SOAP_oClient->serial] = $SOAP_oClient;

                self::$oCRNRSTN_ENV->update_SOAP_services_access_manager($this);

                return $SOAP_oClient;

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
    function soa_register_objects_R_core()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Sunday, August 23, 2026 @ 2213 hrs.
         *
         */

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'R_soap_hello_world',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'REQUEST_ID'          => array('name' => 'REQUEST_ID', 'type' => 'tns:oSOAP_Data'),
                'PHP_VERSION'         => array('name' => 'PHP_VERSION', 'type' => 'tns:oSOAP_Data'),
                'CRNRSTN_VERSION'     => array('name' => 'CRNRSTN_VERSION', 'type' => 'tns:oSOAP_Data'),
                'API_METHOD_NAME'     => array('name' => 'API_METHOD_NAME', 'type' => 'tns:oSOAP_Data'),
                'API_METHOD_PARAMS'   => array('name' => 'API_METHOD_PARAMS', 'type' => 'tns:oSOAP_Data'),
                'API_TARGET_RESOURCE' => array('name' => 'API_TARGET_RESOURCE', 'type' => 'tns:oSOAP_Data'),
                'API_TARGET_PARAMS'   => array('name' => 'API_TARGET_PARAMS', 'type' => 'tns:oSOAP_Data'),
                'REQUEST_RUNTIME'     => array('name' => 'REQUEST_RUNTIME', 'type' => 'tns:oSOAP_Data'),
                'REQUEST_IP'          => array('name' => 'REQUEST_IP', 'type' => 'tns:oSOAP_Data'),
                'REQUEST_DATECREATED' => array('name' => 'REQUEST_DATECREATED', 'type' => 'tns:oSOAP_Data')
            )
        );

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function soa_register_objects_R_demo()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Sunday, August 23, 2026 @ 2212 hrs.
         *
         */

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oElectrumPerformanceReport',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES' => array('name' => 'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES', 'type' => 'tns:oCRNRSTN_RESOURCE_CONSTANTS'),
                'CRNRSTN_SOAP_SVC_METHOD_REQUESTED' => array('name' => 'CRNRSTN_SOAP_SVC_METHOD_REQUESTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_ACTION_TYPE' => array('name' => 'CRNRSTN_SOAP_ACTION_TYPE', 'type' => 'xsd:string'),
                'TRY_OTHER_EMAIL_METHODS_ON_ERR' => array('name' => 'TRY_OTHER_EMAIL_METHODS_ON_ERR', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_PASSWORD' => array('name' => 'CRNRSTN_SOAP_SVC_PASSWORD', 'type' => 'xsd:string'),
                'CRNRSTN_PROXY_EMAIL_PROTOCOL' => array('name' => 'CRNRSTN_PROXY_EMAIL_PROTOCOL', 'type' => 'xsd:string'),
                'oRECIPIENT' => array('name' => 'oRECIPIENT', 'type' => 'tns:oEmailArray'),
                'oSENDER' => array('name' => 'oSENDER', 'type' => 'tns:oEmailArray'),
                'oREPLYTO' => array('name' => 'oREPLYTO', 'type' => 'tns:oEmailArray'),
                'oCC' => array('name' => 'oCC', 'type' => 'tns:oEmailArray'),
                'oBCC' => array('name' => 'oBCC', 'type' => 'tns:oEmailArray'),
                'SUPPRESS_DUPLICATE_RECIPIENT' => array('name' => 'SUPPRESS_DUPLICATE_RECIPIENT', 'type' => 'xsd:string'),
                'MESSAGE_SUBJECT' => array('name' => 'MESSAGE_SUBJECT', 'type' => 'xsd:string'),
                'WORDWRAP' => array('name' => 'WORDWRAP', 'type' => 'xsd:string'),
                'PRIORITY' => array('name' => 'PRIORITY', 'type' => 'xsd:string'),
                'IS_HTML' => array('name' => 'IS_HTML', 'type' => 'xsd:string'),
                'SYS_MESSAGE_TITLE_HTML' => array('name' => 'SYS_MESSAGE_TITLE_HTML', 'type' => 'xsd:string'),
                'SYS_MESSAGE_TITLE_TEXT' => array('name' => 'SYS_MESSAGE_TITLE_TEXT', 'type' => 'xsd:string'),
                'SYS_LOG_INTEGER_CONSTANT' => array('name' => 'SYS_LOG_INTEGER_CONSTANT', 'type' => 'xsd:string'),
                'SYS_MESSAGE_HTML' => array('name' => 'SYS_MESSAGE_HTML', 'type' => 'xsd:string'),
                'SYS_MESSAGE_TEXT' => array('name' => 'SYS_MESSAGE_TEXT', 'type' => 'xsd:string'),
                'SYS_REMOTE_ADDR' => array('name' => 'SYS_REMOTE_ADDR', 'type' => 'xsd:string'),
                'SYS_SERVER_NAME' => array('name' => 'SYS_SERVER_NAME', 'type' => 'xsd:string'),
                'SYS_SYSTEM_TIME' => array('name' => 'SYS_SYSTEM_TIME', 'type' => 'xsd:string'),
                'SYS_PROCESS_RUN_TIME' => array('name' => 'SYS_PROCESS_RUN_TIME', 'type' => 'xsd:string'),
                'ELECTRUM_ERRORS_TRACE_HTML' => array('name' => 'ELECTRUM_ERRORS_TRACE_HTML', 'type' => 'xsd:string'),
                'ELECTRUM_ERRORS_TRACE_TEXT' => array('name' => 'ELECTRUM_ERRORS_TRACE_TEXT', 'type' => 'xsd:string'),
                'ELECTRUM_START_TIME' => array('name' => 'ELECTRUM_START_TIME', 'type' => 'xsd:string'),
                'ELECTRUM_END_TIME' => array('name' => 'ELECTRUM_END_TIME', 'type' => 'xsd:string'),
                'ELECTRUM_PRETTY_RUN_TIME' => array('name' => 'ELECTRUM_PRETTY_RUN_TIME', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_COUNT_VALID_FOR_TRANSFER' => array('name' => 'ELECTRUM_TOTAL_COUNT_VALID_FOR_TRANSFER', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_COUNT_DESTINATION_ENDPOINTS' => array('name' => 'ELECTRUM_TOTAL_COUNT_DESTINATION_ENDPOINTS', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_COUNT_FILES_TRANSFERRED' => array('name' => 'ELECTRUM_TOTAL_COUNT_FILES_TRANSFERRED', 'type' => 'xsd:string'),
                'ELECTRUM_ENDPOINT_FILESIZE_FILES_TRANSFERRED' => array('name' => 'ELECTRUM_ENDPOINT_FILESIZE_FILES_TRANSFERRED', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_COUNT_FILES_SKIPPED' => array('name' => 'ELECTRUM_TOTAL_COUNT_FILES_SKIPPED', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_FILESIZE_FILES_TRANSFERRED' => array('name' => 'ELECTRUM_TOTAL_FILESIZE_FILES_TRANSFERRED', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_ERRORS_FILES_TRANSFERRED' => array('name' => 'ELECTRUM_TOTAL_ERRORS_FILES_TRANSFERRED', 'type' => 'xsd:string'),
                'ELECTRUM_TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR' => array('name' => 'ELECTRUM_TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR', 'type' => 'xsd:string'),
                'ELECTRUM_PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED' => array('name' => 'ELECTRUM_PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED', 'type' => 'xsd:string'),
                'ELECTRUM_DATA_SOURCE_HTML' => array('name' => 'ELECTRUM_DATA_SOURCE_HTML', 'type' => 'xsd:string'),
                'ELECTRUM_DATA_DESTINATION_HTML' => array('name' => 'ELECTRUM_DATA_DESTINATION_HTML', 'type' => 'xsd:string'),
                'ELECTRUM_DATA_HANDLING_PROFILE_HTML' => array('name' => 'ELECTRUM_DATA_HANDLING_PROFILE_HTML', 'type' => 'xsd:string'),
                'ELECTRUM_DATA_SOURCE_TEXT' => array('name' => 'ELECTRUM_DATA_SOURCE_TEXT', 'type' => 'xsd:string'),
                'ELECTRUM_DATA_DESTINATION_TEXT' => array('name' => 'ELECTRUM_DATA_DESTINATION_TEXT', 'type' => 'xsd:string'),
                'ELECTRUM_DATA_HANDLING_PROFILE_TEXT' => array('name' => 'ELECTRUM_DATA_HANDLING_PROFILE_TEXT', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string')

            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oKingsHighwayAuthRequest',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_PASSWORD' => array('name' => 'CRNRSTN_SOAP_SVC_PASSWORD', 'type' => 'xsd:string'),
                'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES' => array('name' => 'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES', 'type' => 'tns:oCRNRSTN_RESOURCE_CONSTANTS'),
                'CRNRSTN_SOAP_SVC_METHOD_REQUESTED' => array('name' => 'CRNRSTN_SOAP_SVC_METHOD_REQUESTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_ACTION_TYPE' => array('name' => 'CRNRSTN_SOAP_ACTION_TYPE', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oKingsHighwayAuthResponse',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'SOAP_SERVICES_AUTH_STATUS' => array('name' => 'SOAP_SERVICES_AUTH_STATUS', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_CIPHER' => array('name' => 'SOAP_ENCRYPT_CIPHER', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_SECRET_KEY' => array('name' => 'SOAP_ENCRYPT_SECRET_KEY', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_HMAC_ALG' => array('name' => 'SOAP_ENCRYPT_HMAC_ALG', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_OPTIONS' => array('name' => 'SOAP_ENCRYPT_OPTIONS', 'type' => 'xsd:string'),
                'STATUS_CODE' => array('name' => 'STATUS_CODE', 'type' => 'xsd:string'),
                'STATUS_MESSAGE' => array('name' => 'STATUS_MESSAGE', 'type' => 'xsd:string'),
                'ISERROR_CODE' => array('name' => 'ISERROR_CODE', 'type' => 'xsd:string'),
                'ISERROR_MESSAGE' => array('name' => 'ISERROR_MESSAGE', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_SERVER' => array('name' => 'SERVER_NAME_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_SERVER' => array('name' => 'SERVER_ADDRESS_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string'),
                'DATE_RECEIVED_SOAP_REQUEST' => array('name' => 'DATE_RECEIVED_SOAP_REQUEST', 'type' => 'xsd:string'),
                'DATE_CREATED_SOAP_RESPONSE' => array('name' => 'DATE_CREATED_SOAP_RESPONSE', 'type' => 'xsd:string'),
                'SOAP_OPERATION_RUNTIME_SECONDS' => array('name' => 'SOAP_OPERATION_RUNTIME_SECONDS', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oKingsHighwayNotification',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_PASSWORD' => array('name' => 'CRNRSTN_SOAP_SVC_PASSWORD', 'type' => 'xsd:string'),
                'AUTHENTICATION_TOKEN' => array('name' => 'AUTHENTICATION_TOKEN', 'type' => 'xsd:string'),
                'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES' => array('name' => 'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES', 'type' => 'tns:oCRNRSTN_RESOURCE_CONSTANTS'),
                'CRNRSTN_SOAP_SVC_METHOD_REQUESTED' => array('name' => 'CRNRSTN_SOAP_SVC_METHOD_REQUESTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_ACTION_TYPE' => array('name' => 'CRNRSTN_SOAP_ACTION_TYPE', 'type' => 'xsd:string'),
                'oRECIPIENT' => array('name' => 'oRECIPIENT', 'type' => 'tns:oEmailArray'),
                'oSENDER' => array('name' => 'oSENDER', 'type' => 'tns:oEmailArray'),
                'oREPLYTO' => array('name' => 'oREPLYTO', 'type' => 'tns:oEmailArray'),
                'oCC' => array('name' => 'oCC', 'type' => 'tns:oEmailArray'),
                'oBCC' => array('name' => 'oBCC', 'type' => 'tns:oEmailArray'),
                'MESSAGE_SUBJECT' => array('name' => 'MESSAGE_SUBJECT', 'type' => 'tns:oSOAP_Data'),
                'MESSAGE_BODY_HTML' => array('name' => 'MESSAGE_BODY_HTML', 'type' => 'tns:oSOAP_Data'),
                'MESSAGE_BODY_TEXT' => array('name' => 'MESSAGE_BODY_TEXT', 'type' => 'tns:oSOAP_Data'),
                'EMAIL_PROTOCOL' => array('name' => 'EMAIL_PROTOCOL', 'type' => 'tns:oSOAP_Data'),
                'TRY_OTHER_EMAIL_METHODS_ON_ERR' => array('name' => 'TRY_OTHER_EMAIL_METHODS_ON_ERR', 'type' => 'tns:oSOAP_Data'),
                'SMTP_AUTH' => array('name' => 'SMTP_AUTH', 'type' => 'tns:oSOAP_Data'),
                'SMTP_SERVER' => array('name' => 'SMTP_SERVER', 'type' => 'tns:oSOAP_Data'),
                'SMTP_PORT_OUTGOING' => array('name' => 'SMTP_PORT_OUTGOING', 'type' => 'tns:oSOAP_Data'),
                'SMTP_USERNAME' => array('name' => 'SMTP_USERNAME', 'type' => 'tns:oSOAP_Data'),
                'SMTP_PASSWORD' => array('name' => 'SMTP_PASSWORD', 'type' => 'tns:oSOAP_Data'),
                'SMTP_KEEPALIVE' => array('name' => 'SMTP_KEEPALIVE', 'type' => 'tns:oSOAP_Data'),
                'SMTP_SECURE' => array('name' => 'SMTP_SECURE', 'type' => 'tns:oSOAP_Data'),
                'SMTP_AUTOTLS' => array('name' => 'SMTP_AUTOTLS', 'type' => 'tns:oSOAP_Data'),
                'SMTP_TIMEOUT' => array('name' => 'SMTP_TIMEOUT', 'type' => 'tns:oSOAP_Data'),
                'DIBYA_SAHOO_SSL_CERT_BYPASS' => array('name' => 'DIBYA_SAHOO_SSL_CERT_BYPASS', 'type' => 'tns:oSOAP_Data'),
                'SENDMAIL_PATH' => array('name' => 'SENDMAIL_PATH', 'type' => 'tns:oSOAP_Data'),
                'USE_SENDMAIL_OPTIONS' => array('name' => 'USE_SENDMAIL_OPTIONS', 'type' => 'tns:oSOAP_Data'),
                'WORDWRAP' => array('name' => 'WORDWRAP', 'type' => 'tns:oSOAP_Data'),
                'ISHTML' => array('name' => 'ISHTML', 'type' => 'tns:oSOAP_Data'),
                'PRIORITY' => array('name' => 'PRIORITY', 'type' => 'tns:oSOAP_Data'),
                'DUP_SUPPRESS' => array('name' => 'DUP_SUPPRESS', 'type' => 'tns:oSOAP_Data'),
                'CHARSET' => array('name' => 'CHARSET', 'type' => 'tns:oSOAP_Data'),
                'MESSAGE_ENCODING' => array('name' => 'MESSAGE_ENCODING', 'type' => 'tns:oSOAP_Data'),
                'ALLOW_EMPTY' => array('name' => 'ALLOW_EMPTY', 'type' => 'tns:oSOAP_Data'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string')

            )

        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oCRNRSTN_UI_GLOBAL_SYNC_REQUEST',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES' => array('name' => 'oCRNRSTN_SOAP_SVC_REQUESTED_RESOURCES', 'type' => 'tns:oCRNRSTN_RESOURCE_CONSTANTS'),
                'CRNRSTN_SOAP_SVC_METHOD_REQUESTED' => array('name' => 'CRNRSTN_SOAP_SVC_METHOD_REQUESTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_ACTION_TYPE' => array('name' => 'CRNRSTN_SOAP_ACTION_TYPE', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_PASSWORD' => array('name' => 'CRNRSTN_SOAP_SVC_PASSWORD', 'type' => 'xsd:string'),

                'ELECTRUM_ERRORS_TRACE_HTML' => array('name' => 'ELECTRUM_ERRORS_TRACE_HTML', 'type' => 'xsd:string'),
                'ELECTRUM_ERRORS_TRACE_TEXT' => array('name' => 'ELECTRUM_ERRORS_TRACE_TEXT', 'type' => 'xsd:string'),
                'ELECTRUM_START_TIME' => array('name' => 'ELECTRUM_START_TIME', 'type' => 'xsd:string'),
                'ELECTRUM_END_TIME' => array('name' => 'ELECTRUM_END_TIME', 'type' => 'xsd:string'),
                'ELECTRUM_PRETTY_RUN_TIME' => array('name' => 'ELECTRUM_PRETTY_RUN_TIME', 'type' => 'xsd:string'),

                'RESPONSE_FORMAT' => array('name' => 'RESPONSE_FORMAT', 'type' => 'xsd:string'),

                'ACTIVITY_STATUS_MESSAGE' => array('name' => 'ACTIVITY_STATUS_MESSAGE', 'type' => 'xsd:string'),
                'oACTIVITY_STATUS_REPORT' => array('name' => 'oACTIVITY_STATUS_REPORT', 'type' => 'tns:oStatusReportArray'),
                'STATUS_CODE' => array('name' => 'STATUS_CODE', 'type' => 'xsd:string'),
                'STATUS_MESSAGE' => array('name' => 'STATUS_MESSAGE', 'type' => 'xsd:string'),
                'ISERROR_CODE' => array('name' => 'ISERROR_CODE', 'type' => 'xsd:string'),
                'ISERROR_MESSAGE' => array('name' => 'ISERROR_MESSAGE', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_SERVER' => array('name' => 'SERVER_NAME_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_SERVER' => array('name' => 'SERVER_ADDRESS_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SOAP_OPERATION_RUNTIME_SECONDS' => array('name' => 'SOAP_OPERATION_RUNTIME_SECONDS', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oEmailArray',
            'complexType',
            'array',
            '',
            'SOAP-ENC:Array',
            array(),
            array(
                array(
                    'ref' => 'SOAP-ENC:arrayType',
                    'wsdl:arrayType' => 'tns:oEmail[]'
                )
            ),
            'tns:oEmail'
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            '_____oEmailArray',
            'complexType',
            'array',
            '',
            'SOAP-ENC:Array',
            array(),
            array(
                array(
                    'ref' => 'SOAP-ENC:arrayType',
                    'wsdl:arrayType' => 'xsd:integer[]'
                )
            ),
            'xsd:integer'
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oEmail',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'EMAIL_PROXY_SERIAL' => array('name' => 'EMAIL_PROXY_SERIAL', 'type' => 'tns:oSOAP_Data'),
                'EMAIL' => array('name' => 'EMAIL', 'type' => 'tns:oSOAP_Data'),
                'NAME' => array('name' => 'NAME', 'type' => 'tns:oSOAP_Data'),
                'FIRSTNAME' => array('name' => 'FIRSTNAME', 'type' => 'tns:oSOAP_Data'),
                'LASTNAME' => array('name' => 'LASTNAME', 'type' => 'tns:oSOAP_Data')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oSOAP_Data',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CONTENT' => array('name' => 'CONTENT', 'type' => 'xsd:string'),
                'TYPE' => array('name' => 'TYPE', 'type' => 'xsd:string'),
                'LENGTH' => array('name' => 'LENGTH', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oCRNRSTN_UI_SYNC_PACKET',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED'=> array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'SOAP_SERVICES_AUTH_STATUS' => array('name' => 'SOAP_SERVICES_AUTH_STATUS', 'type' => 'xsd:string'),
                'RESPONSE_FORMAT' => array('name' => 'RESPONSE_FORMAT', 'type' => 'xsd:string'),
                'oBASSDRIVE' => array('name' => 'oBASSDRIVE', 'type' => 'tns:oBASSDRIVE'),
                'oWETHRBUG' => array('name' => 'oWETHRBUG', 'type' => 'tns:oWETHRBUG'),
                'oCSS_VALIDATOR' => array('name' => 'oCSS_VALIDATOR', 'type' => 'tns:oCSS_VALIDATOR'),
                'ACTIVITY_STATUS_MESSAGE' => array('name' => 'ACTIVITY_STATUS_MESSAGE', 'type' => 'xsd:string'),
                'oACTIVITY_STATUS_REPORT' => array('name' => 'oACTIVITY_STATUS_REPORT', 'type' => 'tns:oStatusReportArray'),
                'STATUS_CODE' => array('name' => 'STATUS_CODE', 'type' => 'xsd:string'),
                'STATUS_MESSAGE' => array('name' => 'STATUS_MESSAGE', 'type' => 'xsd:string'),
                'ISERROR_CODE' => array('name' => 'ISERROR_CODE', 'type' => 'xsd:string'),
                'ISERROR_MESSAGE' => array('name' => 'ISERROR_MESSAGE', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_SERVER' => array('name' => 'SERVER_NAME_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_SERVER' => array('name' => 'SERVER_ADDRESS_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string'),
                'DATE_RECEIVED_SOAP_REQUEST' => array('name' => 'DATE_RECEIVED_SOAP_REQUEST', 'type' => 'xsd:string'),
                'DATE_CREATED_SOAP_RESPONSE' => array('name' => 'DATE_CREATED_SOAP_RESPONSE', 'type' => 'xsd:string'),
                'SOAP_OPERATION_RUNTIME_SECONDS' => array('name' => 'SOAP_OPERATION_RUNTIME_SECONDS', 'type' => 'xsd:string')

            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oConstArray',
            'complexType',
            'array',
            '',
            'SOAP-ENC:Array',
            array(),
            array(
                array(
                    'ref' => 'SOAP-ENC:arrayType',
                    'wsdl:arrayType' => 'tns:oCRNRSTN_RESOURCE_CONSTANTS[]'
                )
            ),
            'tns:oCRNRSTN_RESOURCE_CONSTANTS'
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oCRNRSTN_RESOURCE_CONSTANTS',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CONSTANT_NOM'=> array('name' => 'CONSTANT_NOM', 'type' => 'xsd:string'),
                'CONSTANT_VALUE'=> array('name' => 'CONSTANT_VALUE', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oBASSDRIVE',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'DATA_OBJECT_RAW' => array('name' => 'DATA_OBJECT_RAW', 'type' => 'xsd:string'),
                'DATA_OBJECT_RAW_URI' => array('name' => 'DATA_OBJECT_RAW_URI', 'type' => 'xsd:string'),
                'STATUS' => array('name' => 'STATUS', 'type' => 'xsd:string'),
                'SHOW_TITLE' => array('name' => 'SHOW_TITLE', 'type' => 'xsd:string'),
                'SHOW_NATION_CREATIVE' => array('name' => 'SHOW_NATION_CREATIVE', 'type' => 'xsd:string'),
                'SHOW_LOCALE' => array('name' => 'SHOW_LOCALE', 'type' => 'xsd:string'),
                'ISLIVE' => array('name' => 'ISLIVE', 'type' => 'xsd:string'),
                'TRANSMISSION_RATE' => array('name' => 'TRANSMISSION_RATE', 'type' => 'xsd:string'),
                'LAST_UPDATED' => array('name' => 'LAST_UPDATED', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oWETHRBUG',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CITY' => array('name' => 'CITY', 'type' => 'xsd:string'),
                'ZIPCODE' => array('name' => 'ZIPCODE', 'type' => 'xsd:string'),
                'XYGRID_GEOZIP_URI' => array('name' => 'XYGRID_GEOZIP_URI', 'type' => 'xsd:string'),
                'GEOZIP_FORECAST_URI' => array('name' => 'GEOZIP_FORECAST_URI', 'type' => 'xsd:string'),

                'DAY00_NOM' => array('name' => 'DAY00_NOM', 'type' => 'xsd:string'),
                'DAY01_NOM' => array('name' => 'DAY01_NOM', 'type' => 'xsd:string'),
                'DAY02_NOM' => array('name' => 'DAY02_NOM', 'type' => 'xsd:string'),
                'DAY03_NOM' => array('name' => 'DAY03_NOM', 'type' => 'xsd:string'),
                'DAY04_NOM' => array('name' => 'DAY04_NOM', 'type' => 'xsd:string'),
                'DAY05_NOM' => array('name' => 'DAY05_NOM', 'type' => 'xsd:string'),
                'DAY06_NOM' => array('name' => 'DAY06_NOM', 'type' => 'xsd:string'),

                'DAY00_TEMP' => array('name' => 'DAY00_TEMP', 'type' => 'xsd:string'),
                'DAY01_TEMP' => array('name' => 'DAY01_TEMP', 'type' => 'xsd:string'),
                'DAY02_TEMP' => array('name' => 'DAY02_TEMP', 'type' => 'xsd:string'),
                'DAY03_TEMP' => array('name' => 'DAY03_TEMP', 'type' => 'xsd:string'),
                'DAY04_TEMP' => array('name' => 'DAY04_TEMP', 'type' => 'xsd:string'),
                'DAY05_TEMP' => array('name' => 'DAY05_TEMP', 'type' => 'xsd:string'),
                'DAY06_TEMP' => array('name' => 'DAY06_TEMP', 'type' => 'xsd:string'),

                'DAY00_TEMP_UNIT' => array('name' => 'DAY00_TEMP_UNIT', 'type' => 'xsd:string'),
                'DAY01_TEMP_UNIT' => array('name' => 'DAY01_TEMP_UNIT', 'type' => 'xsd:string'),
                'DAY02_TEMP_UNIT' => array('name' => 'DAY02_TEMP_UNIT', 'type' => 'xsd:string'),
                'DAY03_TEMP_UNIT' => array('name' => 'DAY03_TEMP_UNIT', 'type' => 'xsd:string'),
                'DAY04_TEMP_UNIT' => array('name' => 'DAY04_TEMP_UNIT', 'type' => 'xsd:string'),
                'DAY05_TEMP_UNIT' => array('name' => 'DAY05_TEMP_UNIT', 'type' => 'xsd:string'),
                'DAY06_TEMP_UNIT' => array('name' => 'DAY06_TEMP_UNIT', 'type' => 'xsd:string'),

                'DAY00_SHORT_FORECAST' => array('name' => 'DAY00_SHORT_FORECAST', 'type' => 'xsd:string'),
                'DAY01_SHORT_FORECAST' => array('name' => 'DAY01_SHORT_FORECAST', 'type' => 'xsd:string'),
                'DAY02_SHORT_FORECAST' => array('name' => 'DAY02_SHORT_FORECAST', 'type' => 'xsd:string'),
                'DAY03_SHORT_FORECAST' => array('name' => 'DAY03_SHORT_FORECAST', 'type' => 'xsd:string'),
                'DAY04_SHORT_FORECAST' => array('name' => 'DAY04_SHORT_FORECAST', 'type' => 'xsd:string'),
                'DAY05_SHORT_FORECAST' => array('name' => 'DAY05_SHORT_FORECAST', 'type' => 'xsd:string'),
                'DAY06_SHORT_FORECAST' => array('name' => 'DAY06_SHORT_FORECAST', 'type' => 'xsd:string'),

                'DAY00_DETAILED_FORECAST' => array('name' => 'DAY00_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'DAY01_DETAILED_FORECAST' => array('name' => 'DAY01_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'DAY02_DETAILED_FORECAST' => array('name' => 'DAY02_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'DAY03_DETAILED_FORECAST' => array('name' => 'DAY03_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'DAY04_DETAILED_FORECAST' => array('name' => 'DAY04_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'DAY05_DETAILED_FORECAST' => array('name' => 'DAY05_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'DAY06_DETAILED_FORECAST' => array('name' => 'DAY06_DETAILED_FORECAST', 'type' => 'xsd:string'),

                'DAY00_WINDAGE' => array('name' => 'DAY00_WINDAGE', 'type' => 'xsd:string'),
                'DAY01_WINDAGE' => array('name' => 'DAY01_WINDAGE', 'type' => 'xsd:string'),
                'DAY02_WINDAGE' => array('name' => 'DAY02_WINDAGE', 'type' => 'xsd:string'),
                'DAY03_WINDAGE' => array('name' => 'DAY03_WINDAGE', 'type' => 'xsd:string'),
                'DAY04_WINDAGE' => array('name' => 'DAY04_WINDAGE', 'type' => 'xsd:string'),
                'DAY05_WINDAGE' => array('name' => 'DAY05_WINDAGE', 'type' => 'xsd:string'),
                'DAY06_WINDAGE' => array('name' => 'DAY06_WINDAGE', 'type' => 'xsd:string'),

                'DAY00_START_TIME' => array('name' => 'DAY00_START_TIME', 'type' => 'xsd:string'),
                'DAY01_START_TIME' => array('name' => 'DAY01_START_TIME', 'type' => 'xsd:string'),
                'DAY02_START_TIME' => array('name' => 'DAY02_START_TIME', 'type' => 'xsd:string'),
                'DAY03_START_TIME' => array('name' => 'DAY03_START_TIME', 'type' => 'xsd:string'),
                'DAY04_START_TIME' => array('name' => 'DAY04_START_TIME', 'type' => 'xsd:string'),
                'DAY05_START_TIME' => array('name' => 'DAY05_START_TIME', 'type' => 'xsd:string'),
                'DAY06_START_TIME' => array('name' => 'DAY06_START_TIME', 'type' => 'xsd:string'),

                'DAY00_END_TIME' => array('name' => 'DAY00_END_TIME', 'type' => 'xsd:string'),
                'DAY01_END_TIME' => array('name' => 'DAY01_END_TIME', 'type' => 'xsd:string'),
                'DAY02_END_TIME' => array('name' => 'DAY02_END_TIME', 'type' => 'xsd:string'),
                'DAY03_END_TIME' => array('name' => 'DAY03_END_TIME', 'type' => 'xsd:string'),
                'DAY04_END_TIME' => array('name' => 'DAY04_END_TIME', 'type' => 'xsd:string'),
                'DAY05_END_TIME' => array('name' => 'DAY05_END_TIME', 'type' => 'xsd:string'),
                'DAY06_END_TIME' => array('name' => 'DAY06_END_TIME', 'type' => 'xsd:string'),

                'DAY00_ICON' => array('name' => 'DAY00_ICON', 'type' => 'xsd:string'),
                'DAY01_ICON' => array('name' => 'DAY01_ICON', 'type' => 'xsd:string'),
                'DAY02_ICON' => array('name' => 'DAY02_ICON', 'type' => 'xsd:string'),
                'DAY03_ICON' => array('name' => 'DAY03_ICON', 'type' => 'xsd:string'),
                'DAY04_ICON' => array('name' => 'DAY04_ICON', 'type' => 'xsd:string'),
                'DAY05_ICON' => array('name' => 'DAY05_ICON', 'type' => 'xsd:string'),
                'DAY06_ICON' => array('name' => 'DAY06_ICON', 'type' => 'xsd:string'),

                'NIGHT00_NOM' => array('name' => 'NIGHT00_NOM', 'type' => 'xsd:string'),
                'NIGHT01_NOM' => array('name' => 'NIGHT01_NOM', 'type' => 'xsd:string'),
                'NIGHT02_NOM' => array('name' => 'NIGHT02_NOM', 'type' => 'xsd:string'),
                'NIGHT03_NOM' => array('name' => 'NIGHT03_NOM', 'type' => 'xsd:string'),
                'NIGHT04_NOM' => array('name' => 'NIGHT04_NOM', 'type' => 'xsd:string'),
                'NIGHT05_NOM' => array('name' => 'NIGHT05_NOM', 'type' => 'xsd:string'),
                'NIGHT06_NOM' => array('name' => 'NIGHT06_NOM', 'type' => 'xsd:string'),

                'NIGHT00_TEMP' => array('name' => 'NIGHT00_TEMP', 'type' => 'xsd:string'),
                'NIGHT01_TEMP' => array('name' => 'NIGHT01_TEMP', 'type' => 'xsd:string'),
                'NIGHT02_TEMP' => array('name' => 'NIGHT02_TEMP', 'type' => 'xsd:string'),
                'NIGHT03_TEMP' => array('name' => 'NIGHT03_TEMP', 'type' => 'xsd:string'),
                'NIGHT04_TEMP' => array('name' => 'NIGHT04_TEMP', 'type' => 'xsd:string'),
                'NIGHT05_TEMP' => array('name' => 'NIGHT05_TEMP', 'type' => 'xsd:string'),
                'NIGHT06_TEMP' => array('name' => 'NIGHT06_TEMP', 'type' => 'xsd:string'),

                'NIGHT00_TEMP_UNIT' => array('name' => 'NIGHT00_TEMP_UNIT', 'type' => 'xsd:string'),
                'NIGHT01_TEMP_UNIT' => array('name' => 'NIGHT01_TEMP_UNIT', 'type' => 'xsd:string'),
                'NIGHT02_TEMP_UNIT' => array('name' => 'NIGHT02_TEMP_UNIT', 'type' => 'xsd:string'),
                'NIGHT03_TEMP_UNIT' => array('name' => 'NIGHT03_TEMP_UNIT', 'type' => 'xsd:string'),
                'NIGHT04_TEMP_UNIT' => array('name' => 'NIGHT04_TEMP_UNIT', 'type' => 'xsd:string'),
                'NIGHT05_TEMP_UNIT' => array('name' => 'NIGHT05_TEMP_UNIT', 'type' => 'xsd:string'),
                'NIGHT06_TEMP_UNIT' => array('name' => 'NIGHT06_TEMP_UNIT', 'type' => 'xsd:string'),

                'NIGHT00_SHORT_FORECAST' => array('name' => 'NIGHT00_SHORT_FORECAST', 'type' => 'xsd:string'),
                'NIGHT01_SHORT_FORECAST' => array('name' => 'NIGHT01_SHORT_FORECAST', 'type' => 'xsd:string'),
                'NIGHT02_SHORT_FORECAST' => array('name' => 'NIGHT02_SHORT_FORECAST', 'type' => 'xsd:string'),
                'NIGHT03_SHORT_FORECAST' => array('name' => 'NIGHT03_SHORT_FORECAST', 'type' => 'xsd:string'),
                'NIGHT04_SHORT_FORECAST' => array('name' => 'NIGHT04_SHORT_FORECAST', 'type' => 'xsd:string'),
                'NIGHT05_SHORT_FORECAST' => array('name' => 'NIGHT05_SHORT_FORECAST', 'type' => 'xsd:string'),
                'NIGHT06_SHORT_FORECAST' => array('name' => 'NIGHT06_SHORT_FORECAST', 'type' => 'xsd:string'),

                'NIGHT00_DETAILED_FORECAST' => array('name' => 'NIGHT00_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'NIGHT01_DETAILED_FORECAST' => array('name' => 'NIGHT01_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'NIGHT02_DETAILED_FORECAST' => array('name' => 'NIGHT02_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'NIGHT03_DETAILED_FORECAST' => array('name' => 'NIGHT03_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'NIGHT04_DETAILED_FORECAST' => array('name' => 'NIGHT04_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'NIGHT05_DETAILED_FORECAST' => array('name' => 'NIGHT05_DETAILED_FORECAST', 'type' => 'xsd:string'),
                'NIGHT06_DETAILED_FORECAST' => array('name' => 'NIGHT06_DETAILED_FORECAST', 'type' => 'xsd:string'),

                'NIGHT00_WINDAGE' => array('name' => 'NIGHT00_WINDAGE', 'type' => 'xsd:string'),
                'NIGHT01_WINDAGE' => array('name' => 'NIGHT01_WINDAGE', 'type' => 'xsd:string'),
                'NIGHT02_WINDAGE' => array('name' => 'NIGHT02_WINDAGE', 'type' => 'xsd:string'),
                'NIGHT03_WINDAGE' => array('name' => 'NIGHT03_WINDAGE', 'type' => 'xsd:string'),
                'NIGHT04_WINDAGE' => array('name' => 'NIGHT04_WINDAGE', 'type' => 'xsd:string'),
                'NIGHT05_WINDAGE' => array('name' => 'NIGHT05_WINDAGE', 'type' => 'xsd:string'),
                'NIGHT06_WINDAGE' => array('name' => 'NIGHT06_WINDAGE', 'type' => 'xsd:string'),

                'NIGHT00_START_TIME' => array('name' => 'NIGHT00_START_TIME', 'type' => 'xsd:string'),
                'NIGHT01_START_TIME' => array('name' => 'NIGHT01_START_TIME', 'type' => 'xsd:string'),
                'NIGHT02_START_TIME' => array('name' => 'NIGHT02_START_TIME', 'type' => 'xsd:string'),
                'NIGHT03_START_TIME' => array('name' => 'NIGHT03_START_TIME', 'type' => 'xsd:string'),
                'NIGHT04_START_TIME' => array('name' => 'NIGHT04_START_TIME', 'type' => 'xsd:string'),
                'NIGHT05_START_TIME' => array('name' => 'NIGHT05_START_TIME', 'type' => 'xsd:string'),
                'NIGHT06_START_TIME' => array('name' => 'NIGHT06_START_TIME', 'type' => 'xsd:string'),

                'NIGHT00_END_TIME' => array('name' => 'NIGHT00_END_TIME', 'type' => 'xsd:string'),
                'NIGHT01_END_TIME' => array('name' => 'NIGHT01_END_TIME', 'type' => 'xsd:string'),
                'NIGHT02_END_TIME' => array('name' => 'NIGHT02_END_TIME', 'type' => 'xsd:string'),
                'NIGHT03_END_TIME' => array('name' => 'NIGHT03_END_TIME', 'type' => 'xsd:string'),
                'NIGHT04_END_TIME' => array('name' => 'NIGHT04_END_TIME', 'type' => 'xsd:string'),
                'NIGHT05_END_TIME' => array('name' => 'NIGHT05_END_TIME', 'type' => 'xsd:string'),
                'NIGHT06_END_TIME' => array('name' => 'NIGHT06_END_TIME', 'type' => 'xsd:string'),

                'NIGHT00_ICON' => array('name' => 'NIGHT00_ICON', 'type' => 'xsd:string'),
                'NIGHT01_ICON' => array('name' => 'NIGHT01_ICON', 'type' => 'xsd:string'),
                'NIGHT02_ICON' => array('name' => 'NIGHT02_ICON', 'type' => 'xsd:string'),
                'NIGHT03_ICON' => array('name' => 'NIGHT03_ICON', 'type' => 'xsd:string'),
                'NIGHT04_ICON' => array('name' => 'NIGHT04_ICON', 'type' => 'xsd:string'),
                'NIGHT05_ICON' => array('name' => 'NIGHT05_ICON', 'type' => 'xsd:string'),
                'NIGHT06_ICON' => array('name' => 'NIGHT06_ICON', 'type' => 'xsd:string')

            )

        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oCSS_VALIDATOR',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CSS_ELEMENT_NOM' => array('name' => 'CSS_ELEMENT_NOM', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oEmailSendReport',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_AUTH_KEY' => array('name' => 'CRNRSTN_SOAP_SVC_AUTH_KEY', 'type' => 'xsd:string'),
                'CRNRSTN_SOAP_SVC_USERNAME' => array('name' => 'CRNRSTN_SOAP_SVC_USERNAME', 'type' => 'xsd:string'),
                'AUTHENTICATION_TOKEN' => array('name' => 'AUTHENTICATION_TOKEN', 'type' => 'xsd:string'),
                'SOAP_SERVICES_AUTH_STATUS' => array('name' => 'SOAP_SERVICES_AUTH_STATUS', 'type' => 'xsd:string'),
                'TOTAL_EMAILS_RECEIVED' => array('name' => 'TOTAL_EMAILS_RECEIVED', 'type' => 'xsd:string'),
                'TOTAL_EMAILS_SENT' => array('name' => 'TOTAL_EMAILS_SENT', 'type' => 'xsd:string'),
                'TOTAL_EMAILS_SUPPRESSED' => array('name' => 'TOTAL_EMAILS_SUPPRESSED', 'type' => 'xsd:string'),
                'TOTAL_EMAILS_ERROR' => array('name' => 'TOTAL_EMAILS_ERROR', 'type' => 'xsd:string'),
                'ACTIVITY_STATUS_MESSAGE' => array('name' => 'ACTIVITY_STATUS_MESSAGE', 'type' => 'xsd:string'),
                'oACTIVITY_STATUS_REPORT' => array('name' => 'oACTIVITY_STATUS_REPORT', 'type' => 'tns:oStatusReportArray'),
                'STATUS_CODE' => array('name' => 'STATUS_CODE', 'type' => 'xsd:string'),
                'STATUS_MESSAGE' => array('name' => 'STATUS_MESSAGE', 'type' => 'xsd:string'),
                'ISERROR_CODE' => array('name' => 'ISERROR_CODE', 'type' => 'xsd:string'),
                'ISERROR_MESSAGE' => array('name' => 'ISERROR_MESSAGE', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_SERVER' => array('name' => 'SERVER_NAME_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_SERVER' => array('name' => 'SERVER_ADDRESS_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string'),
                'DATE_RECEIVED_SOAP_REQUEST' => array('name' => 'DATE_RECEIVED_SOAP_REQUEST', 'type' => 'xsd:string'),
                'DATE_CREATED_SOAP_RESPONSE' => array('name' => 'DATE_CREATED_SOAP_RESPONSE', 'type' => 'xsd:string'),
                'SOAP_OPERATION_RUNTIME_SECONDS' => array('name' => 'SOAP_OPERATION_RUNTIME_SECONDS', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oStatusReportArray',
            'complexType',
            'array',
            '',
            'SOAP-ENC:Array',
            array(),
            array('name'=>array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:oStatusReport[]')
            ),
            'tns:oStatusReport'
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oStatusReport',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'EMAIL_PROXY_SERIAL' => array('name' => 'EMAIL_PROXY_SERIAL', 'type' => 'xsd:string'),
                'IS_SENT' => array('name' => 'IS_SENT', 'type' => 'xsd:string'),
                'SEND_TIMESTAMP' => array('name' => 'SEND_TIMESTAMP', 'type' => 'xsd:string'),
                'SEND_STATUS' => array('name' => 'SEND_STATUS', 'type' => 'xsd:string'),
                'STATUS_DETAIL' => array('name' => 'STATUS_DETAIL', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oTunnelEncryptionCalibrationRequest',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_CIPHER' => array('name' => 'SOAP_ENCRYPT_CIPHER', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_SECRET_KEY' => array('name' => 'SOAP_ENCRYPT_SECRET_KEY', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_HMAC_ALG' => array('name' => 'SOAP_ENCRYPT_HMAC_ALG', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_OPTIONS' => array('name' => 'SOAP_ENCRYPT_OPTIONS', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string')
            )
        );

        $this->R['kivotos']['nusoap_server']->wsdl->addComplexType(
            'oCalibrationResponse',
            'complexType',
            'struct',
            'all',
            '',
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED' => array('name' => 'CRNRSTN_PACKET_IS_ENCRYPTED', 'type' => 'xsd:string'),
                'SOAP_SERVICES_AUTH_STATUS' => array('name' => 'SOAP_SERVICES_AUTH_STATUS', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_CIPHER' => array('name' => 'SOAP_ENCRYPT_CIPHER', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_HMAC_ALG' => array('name' => 'SOAP_ENCRYPT_HMAC_ALG', 'type' => 'xsd:string'),
                'SOAP_ENCRYPT_OPTIONS' => array('name' => 'SOAP_ENCRYPT_OPTIONS', 'type' => 'xsd:string'),
                'STATUS_CODE' => array('name' => 'STATUS_CODE', 'type' => 'xsd:string'),
                'STATUS_MESSAGE' => array('name' => 'STATUS_MESSAGE', 'type' => 'xsd:string'),
                'ISERROR_CODE' => array('name' => 'ISERROR_CODE', 'type' => 'xsd:string'),
                'ISERROR_MESSAGE' => array('name' => 'ISERROR_MESSAGE', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_SERVER' => array('name' => 'SERVER_NAME_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_SERVER' => array('name' => 'SERVER_ADDRESS_SOAP_SERVER', 'type' => 'xsd:string'),
                'SERVER_NAME_SOAP_CLIENT' => array('name' => 'SERVER_NAME_SOAP_CLIENT', 'type' => 'xsd:string'),
                'SERVER_ADDRESS_SOAP_CLIENT' => array('name' => 'SERVER_ADDRESS_SOAP_CLIENT', 'type' => 'xsd:string'),
                'DATE_RECEIVED_SOAP_REQUEST' => array('name' => 'DATE_RECEIVED_SOAP_REQUEST', 'type' => 'xsd:string'),
                'DATE_CREATED_SOAP_RESPONSE' => array('name' => 'DATE_CREATED_SOAP_RESPONSE', 'type' => 'xsd:string'),
                'SOAP_OPERATION_RUNTIME_SECONDS' => array('name' => 'SOAP_OPERATION_RUNTIME_SECONDS', 'type' => 'xsd:string')
            )
        );

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function soa_register_methods_R_core()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Sunday, August 23, 2026 @ 2223 hrs.
         *
         * ...waitress asked, "How many bottles?".
         * I told her "twenty-three."
         *
         */

        $this->R['kivotos']['nusoap_server']->register('hello_world_ping', 
            array('oKingsHighwayAuthRequest' => 'tns:oKingsHighwayAuthRequest'), 
            array('return' => 'tns:oKingsHighwayAuthResponse'), 
            'urn:hello_world_pingwsdl', 
            'urn:hello_world_pingwsdl#hello_world_ping', 
            'rpc', 
            'encoded', 
            'The CRNRSTN :: Lightsaber RoCEv2 SOAP ' . 
            'Services Layer (CLR-SSL) Hello World WSDL.'
        );

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function soa_register_methods_R_demo()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * 5 :: Sunday, August 23, 2026 @ 2228 hrs.
         *
         */

        $this->R['kivotos']['nusoap_server']->register('tunnelEncryptCalibrationRequest', 
            array('oTunnelEncryptionCalibrationRequest' => 'tns:oTunnelEncryptionCalibrationRequest'), 
            array('return' => 'tns:oCalibrationResponse'), 
            'urn:tunnelEncryptCalibrationRequestwsdl', 
            'urn:tunnelEncryptCalibrationRequestwsdl#tunnelEncryptCalibrationRequest', 
            'rpc', 
            'encoded', 
            'Initiate handshake with the CRNRSTN :: SOAP Services Layer.'
        );

        $this->R['kivotos']['nusoap_server']->register('mayItakeTheKingsHighway',
            array('oKingsHighwayAuthRequest' => 'tns:oKingsHighwayAuthRequest'),
            array('return' => 'tns:oKingsHighwayAuthResponse'),
            'urn:mayItakeTheKingsHighwaywsdl',
            'urn:mayItakeTheKingsHighwaywsdl#mayItakeTheKingsHighway',
            'rpc',
            'encoded',
            'Authorization request to straight send an email ' .
            'message with no changes (i.e. dynamic content injection) to body.'
        );

        $this->R['kivotos']['nusoap_server']->register('takeTheKingsHighway',
            array('oKingsHighwayNotification' => 'tns:oKingsHighwayNotification'),
            array('return' => 'tns:oEmailSendReport'),
            'urn:takeTheKingsHighwaywsdl',
            'urn:takeTheKingsHighwaywsdl#takeTheKingsHighway',
            'rpc',
            'encoded',
            'Straight send an email message with no changes (i.e. dynamic content injection) to body.'
        );

        $this->R['kivotos']['nusoap_server']->register('sendElectrumPerformanceReport',
            array('oElectrumPerformanceReport' => 'tns:oElectrumPerformanceReport'),
            array('return' => 'tns:oEmailSendReport'),
            'urn:sendElectrumPerformanceReportwsdl',
            'urn:sendElectrumPerformanceReportwsdl#sendElectrumPerformanceReport',
            'rpc',
            'encoded',
            'Send a templated system notification reporting ' .
            'on the performance of a CRNRSTN :: Electrum process.'
        );

        $this->R['kivotos']['nusoap_server']->register('returnCRNRSTN_UI_GLOBAL_SYNC',
            array('oCRNRSTN_UI_GLOBAL_SYNC_REQUEST' => 'tns:oCRNRSTN_UI_GLOBAL_SYNC_REQUEST'),
            array('return' => 'tns:oCRNRSTN_UI_SYNC_PACKET'),
            'urn:returnCRNRSTN_UI_GLOBAL_SYNCwsdl',
            'urn:returnCRNRSTN_UI_GLOBAL_SYNCwsdl#returnCRNRSTN_UI_GLOBAL_SYNC',
            'rpc',
            'encoded',
            'Request a packet of data to refresh browser ui content.'
        );

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