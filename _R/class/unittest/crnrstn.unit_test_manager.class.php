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
 * CLASS DEFINITION :: crnrstn_unit_test_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: May 19, 2022 @ 1350 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Unit
 *                     Test Manager for the
 *                     execution and support of
 *                     OpenSSL HMAC hash algorithm
 *                     encryption and decryption
 *                     multi-variant compatibility
 *                     testing against:
 *                      - different length
 *                        passwords,
 *                      - different ciphers,
 *                      - different HMAC
 *                        hash algorithm, and
 *                      - different combinations
 *                        of all of the above.
 *
 *                     This will allow us to then
 *                     support the CRNRSTN :: OpenSSL
 *                     Encryption Rotation Services
 *                     Layer (OERSL) with a strong
 *                     matrix of pre-tested combinations
 *                     of prefabricated
 *                     encryption profiles for fast
 *                     static load by CRNRSTN :: PLAID.
 *
 *                     When the data r/w application
 *                     acceleration cache for the
 *                     CRNRSTN :: Multi-Channel
 *                     Decoupled Data Object (MC-DDO)
 *                     is complete, the integer
 *                     constants that will be driving
 *                     the channel switching on the
 *                     Icy Digital ITCC Bitwise PHP
 *                     Technology will need to be
 *                     tested and strengthened to
 *                     honor all the bitwise
 *                     operations that the CRNRSTN ::
 *                     Lightsaber SOAP Services
 *                     Layer will need to support.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 1142 hrs.
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
class crnrstn_unit_test_manager extends crnrstn_user
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_unit_test_manager 
     *       class object by applying an 
     *       extension of the crnrstn object. 
     *       5 :: Monday, April 13, 2026 @ 0225 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed the 
     *       crnrstn_unit_test_manager 
     *       class extension from crnrstn 
     *       to crnrstn_user, deleted the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Tuesday, June 16, 2026 @ 0737 hrs.
     *
     */

    public $unit_test_profile_ARRAY = array();
    public $unit_test_serialization_ARRAY = array();
    public $runtime_ARRAY = array();
    public $result_ARRAY = array();

    private static $curl_raw_data_ARRAY = array();
    private static $openssl_raw_data_ARRAY = array();
    private static $openssl_cipher;
    private static $openssl_algorithm;
    private static $openssl_secret_key;
    private static $openssl_options;

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
     * @access private
     *
     */
    private function generate_test_string_dataset(
                     $data_size, 
                     $force_overwrite)
    {

        $tmp_dataset_filepath = $this->get_resource('DOCUMENT_ROOT') . $this->get_resource('DOCUMENT_ROOT_DIR');

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
    private function return_prepared_test_data(
                     $data_type, 
                     $data_size, 
                     $force_overwrite = true)
    {

        $data_out = '';

        try{

            switch($data_type){
                case 'string':

                    $this->generate_test_string_dataset($data_size, $force_overwrite);

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Unknown unit test ' . 
                        'data type requested: ' . 
                        $data_type . ' [size=' . 
                        $data_size . '] on server ' . 
                        $_SERVER['SERVER_NAME'] . ' (' . 
                         $_SERVER['SERVER_ADDR'] . 
                         ').');

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
             * Sunday, June 30, 2024 @ 1624 hrs.
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

        return $data_out;

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
    private function init_unit_test_data_set(
                     $unit_test_profile, 
                     $iterator = 0)
    {

        try{

            switch ($unit_test_profile) {
                case 'openssl_mysql_storage_performance':

                    //
                    // EMPTY STRING
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = '';

                    //
                    // STRING (10)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 10);

                    //
                    // STRING (100)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 100);

                    //
                    // STRING (255)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 255);

                    //
                    // STRING (1,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 1000);

                    //
                    // STRING (2,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 2000);

                    //
                    // STRING (15,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 15000);

                    //
                    // STRING (100,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 100000);

                    //
                    // STRING (1,000,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 1000000);

                    //
                    // STRING (3,000,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 3000000);

                    //
                    // STRING (5,000,000)
                    self::$openssl_raw_data_ARRAY[$unit_test_profile][$this->unit_test_serialization_ARRAY[$unit_test_profile][$iterator]][] = $this->return_prepared_test_data('string', 5000000);

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Unknown unit ' . 
                        'test profile provided: ' . 
                        $unit_test_profile . ' on server ' . 
                        $_SERVER['SERVER_NAME'] . ' (' . 
                        $_SERVER['SERVER_ADDR'] . 
                        ').');

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
             * Sunday, June 30, 2024 @ 1625 hrs.
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
     * @access private
     *
     */
    private function execute_unit_test_curl()
    {

        foreach(self::$curl_raw_data_ARRAY as $unit_test_profile => $serialARRAY0){

            foreach($serialARRAY0 as $serial => $uri){

                //
                // GET START TIME
                $this->runtime_ARRAY[$unit_test_profile][$this->hash($uri, 'md5')] = $this->monitoring_delta_time_for($serial);

                //
                // EXECUTE TEST AND STORE RESULT
                $this->result_ARRAY[$unit_test_profile][$this->hash($uri, 'md5')] = $this->get_url_content($uri);

                //
                // GET END TIME
                $this->runtime_ARRAY[$unit_test_profile][$this->hash($uri, 'md5')] = $this->monitoring_delta_time_for($serial);

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
    function execute_unit_test()
    {

        try{

            //
            // FOR EACH UNIT TEST PROFILE
            foreach($this->unit_test_serialization_ARRAY as $test_profile => $array0){

                switch ($test_profile){
                    case 'curl':

                        //$this->unit_test_serialization_ARRAY[$unit_test_profile][] = $tmp_serial;
                        //$this->unit_test_profile_ARRAY[$tmp_serial] = $unit_test_profile;

                        //self::$curl_raw_data_ARRAY[$unit_test_profile][$tmp_serial];

                        $this->execute_unit_test_curl();

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('CRNRSTN :: Unknown unit ' . 
                            'test execution profile type: ' . 
                            $test_profile . ' on server ' . 
                            $_SERVER['SERVER_NAME'] . ' (' . 
                            $_SERVER['SERVER_ADDR'] . 
                            ').');

                    break;

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
             * Sunday, June 30, 2024 @ 1625 hrs.
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
    function byte_processing()
    {

        $tmp_test_byte_processing_ARRAY = array(
            '5 YiB',
            "42 MiB",
            '256 TiB',
            '256 KiB',
            '256 BYTES',
            '256 GiB',
            "43MB",
            '256TiB',
            "42.4442 KB",
            "42.4442 GB",
            '255.878 EB',
            "42.8790YB",
            '255.8782TiB',
            17592199997952,
            17592199,
            '17592199997952',
            '17592199',
            "312839038 Yottabyte",
            "312839038 YB",
            "312839038 Exabyte",
            "312839038 EB",
            "312839038 Terabyte",
            "312839038 TB",
            "312839038 Yotta byte",
            "312839038 Yotta bytes",
            "312839038YB",
            "312839038 Exa byte",
            "312839038 Yottabytes",
            "312839038 Exabytes",
            "312839038 Terabytes",
            "312839038byte",
            "312839038bytes",
            "312839038 byte",
            "312839038 bytes",
            "312839038 KB",
            "4324324234B",
            "4324324234 B",
            "not numeric",
            array(),
            43249.431,
            null,
            "312839038 Gibibyte",
            "312839038 Tebibyte",
            "312839038 Pebibyte",
            "312839038 Exbibyte",
            "312839038 Zebibyte",
            "312839038 Gibibytes",
            "312839038 Tebibytes",
            "312839038 Pebibytes",
            "312839038 Exbibytes",
            "312839038 Zebibytes",
            "312839038 Gibi byte",
            "312839038 Tebi b yte",
            "312839038 P ebi byte",
            "312839038 Exbi byte",
            "312839038 Zebi byte",
            "312839038 Gibi by tes",
            "312839038 T ebi byte s",
            "312839038 Pe bi b ytes",
            "312839038 Exbi by tes",
            "312839038 Zeb i b ytes",
            '255.8782T iB',
            '255.8782GiB',
            '255.8782 Ki B',
            '255.8782MiB',
            '255.8782 MiB',
            ''
        );

        $tmp_str_html_out = '';

        foreach($tmp_test_byte_processing_ARRAY as $byte_input){

            if(is_numeric($byte_input)){

                //echo var_export($byte_input, true) . " is numeric.", PHP_EOL;
                $tmp_bytes_int_converted = $this->return_bytes($byte_input);
                $this->oCRNRSTN->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html mgr ' . print_r(var_export($byte_input, true), true) . ' is numeric. ' . print_r($tmp_bytes_int_converted, true));

            }else{

                //echo var_export($byte_input, true) . " is NOT numeric.", PHP_EOL;
                $tmp_bytes_int_converted = $this->return_bytes($byte_input);
                $this->oCRNRSTN->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html mgr ' . print_r(var_export($byte_input, true), true) . ' is NOT numeric. ' . print_r($tmp_bytes_int_converted, true));

            }

            if(is_int($byte_input)){

                //echo var_export($byte_input, true) . " is integer.", PHP_EOL;
                $tmp_bytes_int_converted = $this->return_bytes($byte_input);
                $this->oCRNRSTN->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html mgr ' . print_r(var_export($byte_input, true), true) . ' is integer. ' . print_r($tmp_bytes_int_converted, true));

            }else{

                //echo var_export($byte_input, true) . " is NOT integer.", PHP_EOL;
                $tmp_bytes_int_converted = $this->return_bytes($byte_input);
                $this->oCRNRSTN->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html mgr ' . print_r(var_export($byte_input, true), true) . ' is NOT integer. ' . print_r($tmp_bytes_int_converted, true));

            }

            if(is_double($byte_input)){

                //echo var_export($byte_input, true) . " is integer.", PHP_EOL;
                $tmp_bytes_int_converted = $this->return_bytes($byte_input);
                $this->oCRNRSTN->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html mgr ' . print_r(var_export($byte_input, true), true) . ' is double. ' . print_r($tmp_bytes_int_converted, true));

            }else{

                //echo var_export($byte_input, true) . " is NOT integer.", PHP_EOL;
                $tmp_bytes_int_converted = $this->return_bytes($byte_input);
                $this->oCRNRSTN->concat_log_string($tmp_str_html_out, __LINE__ . ' ui html mgr ' . print_r(var_export($byte_input, true), true) . ' is NOT double. ' . print_r($tmp_bytes_int_converted, true));

            }

        }

        return $tmp_str_html_out;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isset_report($unit_test_profile)
    {

        if(isset($this->runtime_ARRAY[$unit_test_profile])){

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
    function return_report(
             $unit_test_profile, 
             $output_mode = 'HTML_INJECTION')
    {

        switch($unit_test_profile){
            case 'curl':

                $tmp_output = '';

                //error_log(print_r('unit test 284 return_report() raw data array = ' . self::$curl_raw_data_ARRAY, true));

                foreach($this->result_ARRAY[$unit_test_profile] as $serial => $raw_output){

                    switch($output_mode){
                        case 'HTML_INJECTION':

                            //$raw_output = html_entity_decode($raw_output);
                            //$raw_output = htmlspecialchars_decode($raw_output);
                            //$raw_output = htmlentities($raw_output);
                            //$raw_output = htmlspecialchars($raw_output);
                            //$raw_output = html

                        break;

                    }

                    $tmp_output .= '<div style="width:100%; height:10px; background-color:#B1B1B1;"></div>';
                    $tmp_output .= '<div style="font-weight: bold; font-size: 16px; padding: 10px 0 10px 0;">' . self::$curl_raw_data_ARRAY[$unit_test_profile][$serial] . '</div>';
                    $tmp_output .= '<div style="width:100%; height:2px; background-color:#CD1010;"></div>';
                    $tmp_output .= '<div class="crnrstn_cb_20"></div>';
                    $tmp_output .= '<div style="width:100%; height:10px; background-color:#B1B1B1;"></div>';

                    $tmp_output .= $raw_output;
                    $tmp_output .= '<div class="crnrstn_cb_10"></div>';

                }

                return $tmp_output;

            break;
            default:

                return '<h1 style="padding:20px 0 20px 0; font-style: italic;">hello report[' . $unit_test_profile . ']</h1>';

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
    function return_automation_initialization(
             $unit_test_profile, 
             $output_mode = 'HTML_INJECTION')
    {

        try{

            switch($unit_test_profile){
                case 'curl':
                    return '<!-- CRNRSTN :: v' . $this->version_crnrstn() . ' :: UNIT TEST JS :: ' . $this->return_micro_time() . ' --><script> //<!--

// -->
</script>';
                break;
                case 'openssl_mysql_storage_performance':

                    return '<!-- CRNRSTN :: v' . $this->version_crnrstn() . ' :: UNIT TEST JS :: ' . $this->return_micro_time() . ' --><script> //<!--

        function crnrstn_add_unittest_openssl_dataset_input(){

            //
            // APPEND NEW INPUT TO FORM
            $(\'<input type="text" name="crnrstn_add_unittest_openssl_dataset_input" style="width:150px;" value="" placeholder="' . $this->oCRNRSTN->multi_lang_content_return('TEXT_PLACEHOLDER_CHAR_COUNT'). '">\').appendTo($(\'#crnrstn_unittest_openssl_dataset_input_wrapper\'));

        }

// -->
</script>';

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Unknown unit ' . 
                        'test profile provided: ' . 
                        $unit_test_profile . ' on server ' . 
                        $_SERVER['SERVER_NAME'] . ' (' . 
                        $_SERVER['SERVER_ADDR'] . 
                        ').');

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
             * Sunday, June 30, 2024 @ 1625 hrs.
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
    function rtime(
             $unit_test_profile, 
             $uri_hash_serial)
    {

        switch($unit_test_profile){
            case 'curl':

                $tmp_rtime = $this->runtime_ARRAY[$unit_test_profile][$uri_hash_serial];

                return $tmp_rtime . ' secs';

            break;
            default:

                return 'unknown profile';

            break;

        }

    }

    //
    // CONFIGURE UNIT TEST PROFILE INPUT PARAMETER PROFILES ::
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
    function configure_unit_test(
             $unit_test_profile, 
             $param_1 = NULL, 
             $param_2 = NULL, 
             $param_3 = NULL, 
             $param_4 = NULL, 
             $param_5 = NULL)
    {

        try{

            switch($unit_test_profile){
                case 'curl':
                    // where,
                    // $param_1 = $crnrstn_curl_uri_endpoint (optional)
                    // $param_2 = $tmp_crnrstn_curl_batch_count

                    //$tmp_serial = $this->generate_new_key(64, -2);
                    $tmp_serial = $this->hash($param_1, 'md5');
                    $this->unit_test_serialization_ARRAY[$unit_test_profile][] = $tmp_serial;

                    $this->unit_test_profile_ARRAY[$tmp_serial] = $unit_test_profile;

                    if(isset($param_1)){

                        self::$curl_raw_data_ARRAY[$unit_test_profile][$tmp_serial] = $param_1;

                    }

                    if(isset($param_2)){

                        if($param_2 > 0){

                            for($i = 0; $i < $param_2; $i++){

                                $tmp_serial = $this->generate_new_key(64, -2);
                                $this->unit_test_serialization_ARRAY[$unit_test_profile][] = $tmp_serial;

                                $this->unit_test_profile_ARRAY[$tmp_serial] = $unit_test_profile;

                                self::$curl_raw_data_ARRAY[$unit_test_profile][$tmp_serial] = $this->return_form_submitted_value('crnrstn_curl_batch_uri_' . $i);

                            }

                        }

                    }

                break;
                case 'openssl_storage_performance':
                    // where,
                    // $param_1 = $openssl_raw_data  (optional)
                    // $param_2 = $openssl_cipher
                    // $param_3 = $openssl_algorithm
                    // $param_4 = $openssl_secret_key
                    // $param_5 = $openssl_options

                    $tmp_serial = $this->generate_new_key(64, -2);
                    $this->unit_test_serialization_ARRAY[$unit_test_profile][] = $tmp_serial;

                    $this->unit_test_profile_ARRAY[$tmp_serial] = $unit_test_profile;

                    if(isset($param_1)){

                        self::$openssl_raw_data_ARRAY[$unit_test_profile][$tmp_serial] = $param_1;

                    }else{

                        $this->init_unit_test_data_set($unit_test_profile);

                    }

                    self::$openssl_cipher = $param_2;
                    self::$openssl_algorithm = $param_3;
                    self::$openssl_secret_key = $param_4;
                    self::$openssl_options = $param_5;

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Unknown unit ' . 
                        'test profile provided: ' . 
                        $unit_test_profile . ' on server ' . 
                        $_SERVER['SERVER_NAME'] . ' (' . 
                        $_SERVER['SERVER_ADDR'] . 
                        ').');

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
             * Sunday, June 30, 2024 @ 1625 hrs.
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
    function __destruct()
    {

    }

}