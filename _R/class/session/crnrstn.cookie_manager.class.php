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
 * CLASS DEFINITION :: crnrstn_cookie_manager
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: September 11, 2012 @ 1720 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer 
 *                     Cookie Manager class 
 *                     object with data 
 *                     processing (read and 
 *                     write) integrations that 
 *                     pass through the OpenSSL 
 *                     powered CRNRSTN :: 
 *                     Lightsaber cookie data 
 *                     encryption services layer.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 0801 hrs.
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
class crnrstn_cookie_manager extends crnrstn
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_cookie_manager
     *       class object by adding an
     *       extension of the crnrstn object,
     *       by deleting the
     *       __construct($oCRNRSTN) input
     *       parameter with its public
     *       definition, and by removing the
     *       object assignment to the
     *       public $oCRNRSTN variable.
     *       5 :: Friday, August 21, 2026 @ 1043 hrs.
     *
     */

	public static $cookie_ARRAY = array();
	public $config_serial;
	public static $tmp_cookie_name;
	public static $cookieValue_Encrypted;
	public static $cookieName_Encrypted;
	private static $cookieName_ChecksumSeed = 'CRNRSTN';				// SEED CHARS VALID FOR COOKIE NAME.
	public static $thisCookieCrawler_ARRAY = array();

    public function __construct(){

	}
	
	public function addCookie($name, $value, $expire, $path, $domain, $secure, $httponly){

        if(isset($name)){

            //
            // SET THE COOKIE
            return setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            $clr_ssl_msg = 'A cookie failed to be ' .
                           'initialized due to missing ' .
                           'NAME parameter.';
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
	
	public function addRawCookie($name, $value, $expire, $path, $domain, $secure, $httponly){

        if(isset($name)){

            //
            // SET THE RAW COOKIE. CLEAR TEXT
            return setrawcookie($name, $value, $expire, $path, $domain, $secure, $httponly);

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            $clr_ssl_msg = 'A raw cookie failed to be ' .
                           'initialized due to missing ' .
                           'NAME parameter.';
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
	
	public function deleteCookie($name, $path){

        if(isset($name)){

            //
            // NO COOKIE ENCRYPTION. SET COOKIE.
            return setcookie($name, '', 1, $path);

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            $clr_ssl_msg = 'Failed to delete cookie due to ' .
                           'missing NAME parameter.';
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
	
	public function getCookie($name){

        if(isset($name)){

            //
            // NO ENCRYPTION. RETURN COOKIE.
            return $_COOKIE[$name];

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            $clr_ssl_msg = 'Failed to get cookie due ' .
                           'to missing NAME parameter.';
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

	private function param_cookie_encrypt($data = NULL, $cipher_override = NULL, $secret_key_override = NULL, $hmac_algorithm_override = NULL, $options_bitwise_override = NULL){
		
		try{

            if(isset($data)){

                //
                // DATA TYPE MUST BE ENCRYPTABLE...AND SAFE FOR URI
                //if(in_array(gettype($data), $this->oCRNRSTN->oCRNRSTN_ENV->encryptableDataTypes)){
                if(isset($this->oCRNRSTN->oCRNRSTN_ENV->encryptableDataTypes[gettype($data)])){

                    // public function preach($data_attribute = 'data_value', $data_key = NULL, $data_type_family = 'CRNRSTN::RESOURCE', $data_auth_request = 'R_channel_RUNTIME', $index = 0){
                    if($this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('isset', 'encrypt_cipher', 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION') == true){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Extract data from the
                         * CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer Multi-
                         * Channel Decoupled Data
                         * Object (MC-DDO).
                         *
                         */
                        $tmp_encrypt_cipher     = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                        $tmp_encrypt_secret_key = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_secret_key', 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                        $tmp_encrypt_options    = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_options', 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);
                        $tmp_hmac_alg           = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('hmac_alg', 'CRNRSTN::RESOURCE::COOKIE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), true);

                        #
                        # Source: http://php.net/manual/en/function.openssl-encrypt.php
                        #
                        $ivlen          = openssl_cipher_iv_length($cipher = $tmp_encrypt_cipher);
                        $iv             = openssl_random_pseudo_bytes($ivlen);
                        $ciphertext_raw = openssl_encrypt($data, $tmp_encrypt_cipher, $tmp_encrypt_secret_key, $options = $tmp_encrypt_options, $iv);
                        $hmac           = hash_hmac($tmp_hmac_alg, $ciphertext_raw, $tmp_encrypt_secret_key, $as_binary = true);
                        $ciphertext     = base64_encode($iv . $hmac . $ciphertext_raw);

                        return $ciphertext;

                    }else{

                        return $data;

                    }

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
             * Sunday, June 30, 2024 @ 1614 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN->catch_exception(
            	             $e, 
            	             LOG_ERR, 
            	             __METHOD__, 
            	             __NAMESPACE__);

			return false;

		}

        return NULL;

	}

	private function param_cookie_decrypt(
                     $data = NULL, 
                     $uri_passthrough = false, 
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

                if($uri_passthrough == true){

                    //
                    // BACK OUT OF URL ENCODING
                    $data = urldecode($data);

                }

                if($this->oCRNRSTN->oCRNRSTN_ENV->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('isset', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), false)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Extract data from the
                     * CRNRSTN :: Lightsaber RoCEv2
                     * SOAP Services Layer Multi-
                     * Channel Decoupled Data
                     * Object (MC-DDO).
                     *
                     */
                    $tmp_encrypt_cipher     = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_cipher', 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), false);
                    $tmp_encrypt_secret_key = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_secret_key', 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), false);
                    $tmp_encrypt_options    = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('encrypt_options', 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), false);
                    $tmp_hmac_alg           = $this->oCRNRSTN->oSESSION_MGR->oCRNRSTN_SESSION_DDO->preach('data_value', $this->oCRNRSTN->hash_ddo_memory_pointer('hmac_alg', 'CRNRSTN::RESOURCE::DATABASE_ENCRYPTION', CRNRSTN_RESOURCE_ALL), false);

                    //
                    // ENABLE CIPHER OVERRIDE :: v2.0.0
                    if(!isset($cipher_override))
                        $cipher = $tmp_encrypt_cipher;
                    else
                        $cipher = $cipher_override;

                    if(!isset($secret_key_override)){

                        $secret_key = $tmp_encrypt_secret_key;

                    }else{

                        $secret_key = $secret_key_override;
                        //$tmp_open_ssl_digest_profile = $this->oCRNRSTN->oCRNRSTN_ENV->return_openssl_digest_method();
                        $tmp_open_ssl_digest_profile = $this->oCRNRSTN->get_resource('openssl_cipher', 0, 'CRNRSTN::RESOURCE::GENERAL_SETTINGS');
                        $secret_key = \openssl_digest($secret_key, $tmp_open_ssl_digest_profile, true);

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
                        $hmac_algorithm = $tmp_hmac_alg;
                    else
                        $hmac_algorithm = $hmac_algorithm_override;

                    #
                    # Source: http://php.net/manual/en/function.openssl-encrypt.php
                    #
                    $c                  = \base64_decode($data);
                    $ivlen              = \openssl_cipher_iv_length($cipher);
                    $iv                 = \substr($c, 0, $ivlen);
                    $hmac               = \substr($c, $ivlen, $sha2len = 32);
                    $ciphertext_raw     = \substr($c, $ivlen + $sha2len);
                    $original_plaintext = \openssl_decrypt($ciphertext_raw, $cipher, $secret_key, $options = $options_bitwise, $iv);
                    $calcmac            = \hash_hmac($hmac_algorithm, $ciphertext_raw, $secret_key, $as_binary = true);

                    if(hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
                    {
                        return $original_plaintext;

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
		                 * HOOOSTON, VE HAFF PROBLEM!
		                 * https://www.wired.com/2011/04/alt-text-spacecraft/
		                 *
					     */
                        $clr_ssl_msg = 'CRNRSTN :: Tunnel Param Decrypt ' .
                                       'Notice :: Oops. Something went ' .
                                       'wrong. Hash_equals comparison failed ' .
                                       'during data decryption.';
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

                }else{

                    //
                    // NO ENCRYPTION. RETURN VAL
                    return $data;

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
             * Sunday, June 30, 2024 @ 1614 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN->catch_exception(
            	             $e, 
            	             LOG_ERR, 
            	             __METHOD__, 
            	             __NAMESPACE__);

            return false;

        }

	}	
	
	public function deleteAllCookies($path){
		
		//
		// LETS TRY WORKING WITH A HANDLE.
		self::$cookie_ARRAY=array_keys($_COOKIE);

		for($x = 0; $x < count(self::$cookie_ARRAY); $x++){

			setcookie(self::$cookie_ARRAY[$x], '', 1, $path);

		}
		
		return true;

	}

	public function __destruct() {

	}

}