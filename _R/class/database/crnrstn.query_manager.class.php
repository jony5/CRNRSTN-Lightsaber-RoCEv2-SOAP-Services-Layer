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
 * CLASS DEFINITION :: crnrstn_query_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, July 13, 2020 @ 0518 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQL
 *                     Database Integrations
 *                     Query Manager class object
 *                     of the CRNRSTN :: Lightsaber
 *                     MySQL Database Integrations
 *                     Services Layer
 * DESCRIPTION      :: The CRNRSTN :: Query Manager
 *                     class object of the CRNRSTN ::
 *                     Lightsaber SOAP Services
 *                     Layer really gets down and
 *                     dirty putting everything
 *                     that happens between:
 *
 *                     1) the original SQL
 *                        query,
 *
 *                     2) the request that was
 *                        sent to the MySQL database,
 *                        and
 *
 *                     3) the MySQLi database
 *                        response result set that
 *                        was returned from the MySQL
 *                        database to the CRNRSTN ::
 *                        Database Services Layer.
 *
 *                     There are a number of SQL
 *                     query response result set
 *                     processing utility methods
 *                     that can restructure the
 *                     database response to produce
 *                     essentially multi-variant
 *                     pointer (n+1 and where, n < 40)
 *                     lookup datasets supporting
 *                     custom n key data set lookups.
 *
 *                     E.g. return 'ACCOUNT_NUM' from
 *                     the MySQL database MySQLi
 *                     response result set where:
 *
 *                     'ACCNT_AREA' = 'north', and
 *                     'OFFICE'     = 'New York', and
 *                     'EMAIL_DNS'  = 'gmail.com', and
 *                     'is_active'  = 1.
 *
 *                     The CRNRSTN :: Lightsaber SOAP
 *                     Services Layer CRNRSTN :: Database
 *                     Services Layer OOP implementation
 *                     would look something like:
 *
 *                     $lookup_fieldname        = 'ACCOUNT_NUM';
 *                     $piped_primary_id_fields = 'ACCNT_AREA|OFFICE|EMAIL_DNS|IS_ACTIVE';
 *                     $piped_lookup_id_data    = 'north|New York|gmail.com|1';
 *
 *                     $result = $oCRNRSTN->retrieve_data_by_id(
 *                                                 $result_set_key,
 *                                                 $lookup_fieldname,
 *                                                 $piped_primary_id_fields,
 *                                                 $piped_lookup_id_data
 *                                                 );
 *
 *                     echo 'MySQLi Result: ' . print_r($result, true);
 *                     exit();
 *
 *
 *                     5
 *
 *                     Friday, July 26, 2024 @ 0711 hrs.
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
class crnrstn_query_manager 
{

    public $oCRNRSTN_USR;
    protected $oQuery_ARRAY = array();
    protected $select_query_total_position = array();
    protected $oRequest_ARRAY = array();

    public $crnrstn_query_manager_serial;

    private static $validQuerySerial_log = array();
    private static $validQuery = array();
    private static $requestSerialByKey = array();

    private static $PQP_sql_accelerate_FLAG = array();
    private static $PQP_oCRNRSTN_MySQLi = array();
    private static $PQP_batch_key = array();
    private static $PQP_result_set_key = array();
    private static $PQP_result_handle = array();
    private static $PQP_query_override = array();
    private static $PQP_key = array();

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * TODO :: Remove this @todo after shifting 
     *         all CLR-SSL Database Services Layer 
     *         data out of array() data structures 
     *         and into the SPL SplFixedArray 
     *         class (PHP 5, PHP 7, PHP 8) for 
     *         immediate gains in performance 
     *         (up to 33% faster) and resource 
     *         requirements (up to 75% less 
     *         server memory required). 
     *
     *         SplFixedArray
     *         Memory usage for arrays of 
     *         1132766 ints (data derived from 
     *         some 1kx1k img):
     *         Regular:  76453160B (67.5B/int)
     *         SplFixed: 18898744B (16.7B/int)
     *
     *         In my application, SFA uses 75% 
     *         less RAM, which is a life-saver. 
     *
     *         Speed comparison:
     *         Regular: 449ms
     *         SplFixed (resized before every element): 791ms
     *         SplFixed (fully preallocated): 392ms
     *         SplFixed (preall-d to 1M and then resized): 547ms
     *
     *         Pros and cons:
     *         + much more efficient RAM-wise
     *         + a bit faster if max size is known
     *         ~ a bit slower if max size is only approximated
     *         - much slower if max size is not known
     *         - cannot be used with most array functions
     *         
     *         To sum up:
     *         SplFixedArray is a very good choice 
     *         for storing giant amount of data, 
     *         though only as long as you at least 
     *         roughly know the size and can work 
     *         without array functions.
     *         
     *         SOURCE  :: https://www.php.net/manual/en/class.splfixedarray.php
     *         COMMENT :: https://www.php.net/manual/en/class.splfixedarray.php#124555
     *         AUTHOR  :: herhor67 at interia dot pl
     *
     *         5 :: Tuesday, June 30, 2026 @ 0711 hrs.
     *
     */
    public function __construct($oCRNRSTN_USR)
    {

        try{

            if(isset($oCRNRSTN_USR)){

                $this->oCRNRSTN_USR = $oCRNRSTN_USR;

                //
                // Serialize this
                // object.
                //
                // [Len=32]
                $this->crnrstn_query_manager_serial = $this->oCRNRSTN_USR->generate_new_key();

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('oCRNRSTN_USR is a required ' . 
                    'parameter for crnrstn_query_manager ' . 
                    ':: __construct().');

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
             * Sunday, June 30, 2024 @ 1556 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

        }

    }

    public function load_previous_record_lookup(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $lookup_serial)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    $oQuery->load_previous_record_lookup($result_set_key, $lookup_serial);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to return the ' . 
                        'database connection associated ' . 
                        'with the result set key [' . 
                        $result_set_key . 
                        '].');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1556 hrs.
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

        return NULL;

    }

    public function init_lookup_by_id(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    $oQuery->init_lookup_by_id($result_set_key);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to return the database ' . 
                        'connection associated with ' . 
                        'the result set key [' . 
                        $result_set_key . 
                        '].');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1556 hrs.
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

        return NULL;

    }

    public function add_lookup_field_data(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $field_name, 
                    $field_value)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    return $oQuery->add_lookup_field_data($result_set_key, $field_name, $field_value);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to return the ' . 
                        'database connection associated with ' . 
                        'the result set key [' . 
                        $result_set_key . 
                        '].');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1556 hrs.
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

    public function keyDataByID(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $piped_primary_id_fields)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    return $oQuery->keyDataByID($result_set_key, $piped_primary_id_fields);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to return the ' . 
                        'database connection associated ' . 
                        'with the result set key [' . 
                        $result_set_key . 
                        '].');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any database ' . 
                    'connection associated with the ' . 
                    'result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1556 hrs.
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

    public function retrieve_data_by_id(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $piped_lookup_fieldname, 
                    $piped_lookup_id_data)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    return $oQuery->retrieve_data_by_id($result_set_key, $piped_lookup_fieldname, $piped_lookup_id_data);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Duplicate query sent to ' . 
                        'system. Unable to check on existence ' . 
                        'of value in ' . 
                        $result_handle . '/' . 
                        $result_set_key . 
                        ' data.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1556 hrs.
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

    public function resultSetMerge(
                    $oDB_wiring, 
                    $oQueryProfileMgr, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $target_result_set_key, 
                    $merge_fields_piped, 
                    $merge_fields_distinct_val, 
                    $sequence_fields_piped, 
                    $sequence_fields_datatype_piped)
    {

        try{

            $oCRNRSTN_MySQLi = $oQueryProfileMgr->return_MySQLi($result_set_key);

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();
                //error_log('321 mgr - pingProfileExistence() [' . $connection_serial . '][' . $result_handle.'][' . $batch_key.'][' . $result_set_key.']');

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    //
                    // RETRIEVE oQuery 
                    // TO MERGE. 
                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    //
                    // DETERMINE STATUS OF 
                    // EXISTENCE OF AGGREGATE 
                    // FAKEY QUERY AT 
                    // $target_result_set_key. 
                    $fakey_result_handle = 'CRNRSTN_FAKEY_RESULT_HANDLE';
                    $fakey_batch_key = 'CRNRSTN_FAKEY_BATCH_KEY';
                    $fakey_mysqli_serial = $this->oCRNRSTN_USR->crc_int32('CRNRSTN_FAKEY_CONN_SERIAL');

                    $fakey_oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_oCRNRSTN_MySQLi_Fakey($fakey_mysqli_serial);

                    if(!($this->pingProfileExistence($fakey_oCRNRSTN_MySQLi, $fakey_result_handle, $fakey_batch_key, $target_result_set_key))){

                        //
                        // CREATE FAKEY QUERY 
                        // TO HOLD ALL RESULT 
                        // SETS TO BE MERGED.
                        $fakey_query = "SELECT `FAKEY_KICK_FLIP`.`CRNRSTN_200TMP` FROM `FAKEY_KICK_FLIP` LIMIT 0;";

                        //
                        // RETURN FAKEY 
                        // CRNRSTN MYSQLI 
                        // CONNECTION OBJECT. 
                        $fakey_oCRNRSTN_MySQLi = new crnrstn_database_conn_handle($this->oCRNRSTN_USR);
                        $fakey_oCRNRSTN_MySQLi->load_connection_serial($fakey_mysqli_serial);

                        //
                        // USING A LEGIT 
                        // MYSQLI DB CONN 
                        // OBJECT WITH 
                        // FAKEY SERIAL. 
                        $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

                        $tmp_fakey_mysqli = $this->oCRNRSTN_USR->pushFakeyDBConn($fakey_mysqli_serial, $mysqli);
                        $fakey_oCRNRSTN_MySQLi->load_connection_obj($tmp_fakey_mysqli);

                        $fakey_oQuery = $this->load_fakey_databaseQuery($oDB_wiring, $fakey_oCRNRSTN_MySQLi, $fakey_result_handle, $fakey_batch_key, $target_result_set_key, $fakey_query);

                        //
                        // MUST FAKEY SEND 
                        // UPON INITIALIZATION 
                        // TO BE ABLE TO 
                        // GRIP/RETRIEVE THE 
                        // FAKEY oQUERY OBJECT 
                        // HOLDING n+1 RESULT 
                        // SET AGGREGATION. 
                        $tmp_request_serial = $this->oCRNRSTN_USR->crc_int32('CRNRSTN_FAKEY_REQUEST_SERIAL');

                        $oQueryProfileMgr->loadQueryProfile(
                                           $fakey_oCRNRSTN_MySQLi, 
                                           $fakey_result_handle, 
                                           $fakey_batch_key, 
                                           $target_result_set_key);

                        $this->sendQuery_Fakey(
                               $tmp_request_serial, 
                               $fakey_oQuery, 
                               $oDB_wiring, 
                               $fakey_oCRNRSTN_MySQLi, 
                               $fakey_result_handle, 
                               $fakey_batch_key, 
                               $target_result_set_key);

                    }

                    //
                    // RETRIEVE FAKEY 
                    // QUERY. 
                    $fakey_request_serial = self::$requestSerialByKey[$fakey_mysqli_serial][$fakey_result_handle][$fakey_batch_key][$target_result_set_key][0];

                    $fakey_query_serial = $oDB_wiring->returnQuerySerialByKey(
                                                       $fakey_request_serial, 
                                                       $fakey_mysqli_serial, 
                                                       $fakey_batch_key, 
                                                       $target_result_set_key);

                    //
                    // RETRIEVE FAKEY 
                    // oQuery TO RECEIVE 
                    // ALL MERGE. 
                    $oQuery_fakey = $this->oQuery_ARRAY[$this->select_query_total_position[$fakey_query_serial]][$fakey_query_serial];

                    //
                    // PROCEED TO MERGE 
                    // CURRENT oQUERY 
                    // RESULT SET INTO 
                    // FAKEY oQUERY. 
                    $oQuery_fakey->resultSetMerge(
                                   $oQuery, 
                                   $target_result_set_key, 
                                   $merge_fields_piped, 
                                   $merge_fields_distinct_val, 
                                   $sequence_fields_piped, 
                                   $sequence_fields_datatype_piped);

                    //return $oQuery->return_db_value(
                    //                $result_set_key, 
                    //                $fieldname, 
                    //                $pos);

                    //$target_result_set_key

                    return NULL;

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Duplicate query sent to ' . 
                        'system. Unable to check on existence ' . 
                        'of value in ' . 
                        $result_handle . '/' . 
                        $result_set_key . 
                        ' data.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1557 hrs.
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

    public function return_db_value(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $fieldname, 
                    $pos)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence($oCRNRSTN_MySQLi, $result_handle, $batch_key, $result_set_key)){
                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    $query_serial = $oDB_wiring->returnQuerySerialByKey($request_serial, $connection_serial, $batch_key, $result_set_key);

                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    return $oQuery->return_db_value($result_set_key, $fieldname, $pos);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Duplicate query sent to ' . 
                        'system. Unable to check on ' . 
                        'existence of value in ' . 
                        $result_handle . '/' . 
                        $result_set_key . 
                        ' data.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1557 hrs.
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

    public function ping_value_existence(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $fieldname, 
                    $value)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){
                if($this->pingProfileExistence(
                          $oCRNRSTN_MySQLi, 
                          $result_handle, 
                          $batch_key, 
                          $result_set_key))
                {

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    //error_log('136 mgr - 1[' . 
                    //    $connection_serial . '] 2[' . 
                    //    $result_handle.'] 3[' . 
                    //    $batch_key.'] 4[' . 
                    //    $result_set_key.'] 5[' . 
                    //    $request_serial . 
                    //    ']');
                    $query_serial = $oDB_wiring->returnQuerySerialByKey(
                                                 $request_serial, 
                                                 $connection_serial, 
                                                 $batch_key, 
                                                 $result_set_key);

                    //error_log('139 mgr - [' . 
                    //    $this->select_query_total_position[$query_serial] . '][' . 
                    //    $query_serial . 
                    //    ']');
                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    return $oQuery->ping_value_existence(
                                    $result_set_key, 
                                    $fieldname, 
                                    $value);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Duplicate query sent ' . 
                        'to system. Unable to check on ' . 
                        'existence of value in ' . 
                        $result_handle . '/' . 
                        $result_set_key .' data.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated with ' . 
                    'the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1557 hrs.
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

    public function pingProfileExistence(
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //
                // A BASIC CHECK 
                // FOR FAKEY 
                // INITIALIZATION. 
                if(isset(self::$requestSerialByKey[$connection_serial])){

                    if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key]) == 1){

                        return true;

                    }else{

                        return false;
                    }

                }else{

                    return false;

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1557 hrs.
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

    public function receive_process_query_param(
                    $key, 
                    $val, 
                    $request_serial)
    {

        //
        // RECEIVE ANY RESTRICTIONS 
        // TO THE PROCESSING OF ALL 
        // (100%) QUERY AVAILABLE FOR 
        // DIRECT SUBSET ACQUISITION. 
        self::$PQP_key[$request_serial][] = $key;

        try{

            switch($key){
                case 'sql_accelerate_FLAG':

                    self::$PQP_sql_accelerate_FLAG[$request_serial][] = $val;

                break;
                case 'oCRNRSTN_MySQLi':

                    self::$PQP_oCRNRSTN_MySQLi[$request_serial][] = $val;

                break;
                case 'batch_key':

                    self::$PQP_batch_key[$request_serial][] = $val;

                break;
                case 'result_set_key':

                    self::$PQP_result_set_key[$request_serial][] = $val;

                break;
                case 'result_handle':

                    self::$PQP_result_handle[$request_serial][] = $val;

                break;
                case 'query_override':

                    self::$PQP_query_override[$request_serial][] = $val;

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unknown key provided as ' . 
                        'parameter reference to oCRNRSTN_USR->' . 
                        'process_query() meta-data crnrstn_query' . 
                        '_manager :: receive_process_query_param().');

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
             * Sunday, June 30, 2024 @ 1557 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

        }

    }

    public function return_record_count(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $connection_serial = $oCRNRSTN_MySQLi->returnConnSerial();

                //if(sizeof(self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key])==1){
                if($this->pingProfileExistence(
                          $oCRNRSTN_MySQLi, 
                          $result_handle, 
                          $batch_key, 
                          $result_set_key))
                {

                    $request_serial = self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][0];

                    //error_log('136 mgr - 1[' . 
                    //    $connection_serial . '] 2[' . 
                    //    $result_handle.'] 3[' . 
                    //    $batch_key.'] 4[' . 
                    //    $result_set_key.'] 5[' . 
                    //    $request_serial . 
                    //    ']');
                    $query_serial = $oDB_wiring->returnQuerySerialByKey(
                                                 $request_serial, 
                                                 $connection_serial, 
                                                 $batch_key, 
                                                 $result_set_key);

                    //error_log('139 mgr - [' . 
                    //    $this->select_query_total_position[$query_serial] . '][' . 
                    //    $query_serial . 
                    //    ']');
                    $oQuery = $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

                    return $oQuery->return_record_count();

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Duplicate query sent ' . 
                        'to system. Unable to report on ' . 
                        'record count for ' . 
                        $result_handle . '/' . 
                        $result_set_key . 
                        ' data.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1558 hrs.
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

    public function sendQuery_Fakey(
                    $request_serial, 
                    $oQuery, 
                    $oDB_wiring, 
                    $fakey_oCRNRSTN_MySQLi, 
                    $fakey_result_handle, 
                    $fakey_batch_key, 
                    $target_result_set_key)
    {

        $oUserRequest = new crnrstn_database_request($this->oCRNRSTN_USR);

        try{

            if(isset($request_serial)){

                //foreach(self::$validQuery[$request_serial] as $key=>$oQuery){

                    $oUserRequest->spoolQuery($oQuery, $request_serial, $oDB_wiring);

                    $fakey_connection_serial = $fakey_oCRNRSTN_MySQLi->returnConnSerial();

                    self::$requestSerialByKey[$fakey_connection_serial][$fakey_result_handle][$fakey_batch_key][$target_result_set_key][] = $request_serial;

                //}

                //
                // THIS IS A QUERY 
                // FAKEY...DON'T 
                // SEEENND IIIIT! 
                //$tmp_req_status = $oUserRequest->sendIt(
                //                                 $request_serial, 
                //                                 $oDB_wiring, 
                //                                 $this);

                $this->oRequest_ARRAY[$request_serial] = $oUserRequest;

                //return $tmp_req_status;

                return true;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Missing or NULL ' . 
                    'request_serial parameter for ' . 
                    __FUNCTION__ . 
                    '.');

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
             * Sunday, June 30, 2024 @ 1558 hrs.
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

    public function sendQuery(
                    $request_serial, 
                    $oDB_wiring)
    {

        $oUserRequest = new crnrstn_database_request($this->oCRNRSTN_USR);

        try{

            if(isset($request_serial)){

                foreach(self::$validQuery[$request_serial] as 
                    $key => $oQuery)
                {

                    $oUserRequest->spoolQuery(
                                   $oQuery, 
                                   $request_serial, 
                                   $oDB_wiring);

                    $connection_serial = $oQuery->return_attribute('connection_serial');
                    $result_handle = $oQuery->return_attribute('result_handle');
                    $batch_key = $oQuery->return_attribute('batch_key');
                    $result_set_key = $oQuery->return_attribute('result_set_key');

                    $this->oCRNRSTN_USR->error_log('Spooling query for ' . 
                                         'delivery :: Batch Key=' . 
                                         $batch_key . ' Result Set Key=' . 
                                         $result_set_key, 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_DATABASE_QUERY);

                    self::$requestSerialByKey[$connection_serial][$result_handle][$batch_key][$result_set_key][] = $request_serial;

                }

                $tmp_req_status = $oUserRequest->sendIt(
                                                 $request_serial, 
                                                 $oDB_wiring, 
                                                 $this);

                $this->oRequest_ARRAY[$request_serial] = $oUserRequest;

                return $tmp_req_status;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Missing or NULL ' . 
                    'request_serial parameter for ' . 
                    __FUNCTION__ .'.');

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
             * Sunday, June 30, 2024 @ 1558 hrs.
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

    public function queueValidQuery(
                    $request_serial, 
                    $oDB_wiring)
    {

        $tmp_validQuery = false;
        $tmp_PQP_key_cnt = sizeof(self::$PQP_key[$request_serial]);

        foreach($this->oQuery_ARRAY as 
            $key => $chunkArray0)
        {

            foreach($chunkArray0 as 
                $query_serial => $oQuery)
            {

                if(!in_array($query_serial, self::$validQuerySerial_log)){

                    switch ($oQuery->query_life_stage){
                        case 'READY':

                            /*
                            self::$PQP_sql_accelerate_FLAG[$request_serial]

                            self::$PQP_oCRNRSTN_MySQLi[$request_serial]
                            self::$PQP_batch_key[$request_serial]
                            self::$PQP_result_set_key[$request_serial]
                            self::$PQP_result_handle[$request_serial]
                            self::$PQP_query_override[$request_serial]

                            self::$PQP_key[$request_serial]

                            */

                            //
                            // TODO :: SEND QUERY SUBSET TO DATABASE
                            //error_log('469 query mgr - A TODO IS HERE...SEND QUERY SUBSET TO DATABASE...');
                            if($tmp_PQP_key_cnt>1){

                                //
                                // WE HAVE MORE SPECIFIC SUBSET TO CONSIDER WITHIN ALL AVAILABLE

                            }else{

                                //
                                // OK TO PROCESS AVAILABLE QUERY.
                                self::$validQuery[$request_serial][] = $oQuery;
                                self::$validQuerySerial_log[] = $oQuery->crnrstn_db_query_serial;
                                $tmp_validQuery = true;

                                $oDB_wiring->activateQuery($request_serial, $oQuery);

                            }

                        break;

                    }

                }

            }

        }

        return $tmp_validQuery;

    }

    public function load_database_query(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $query)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $oQuery = new crnrstn_database_query($this->oCRNRSTN_USR);

                //
                // INGEST CONNECTION 
                // DATA.
                $oQuery->load_mysqli_connection($oCRNRSTN_MySQLi);

                //
                // INGEST KEY 
                // DATA.
                $oQuery->load_query_key($result_handle, $batch_key, $result_set_key);

                //
                // INGEST QUERY 
                // DATA.
                $oQuery->load_query($query);

                //
                // PREP QUERY FOR 
                // DATABASE REQUEST. 
                $oQuery->initialize();

                $oQuery = $oDB_wiring->connectQuery($oQuery);

                $tmp_array = array();
                $query_serial = $oQuery->crnrstn_db_query_serial;
                $tmp_array[$query_serial] = $oQuery;

                $this->oQuery_ARRAY[] = $tmp_array;

                $tmp_position = sizeof($this->oQuery_ARRAY);
                $tmp_position -= 1;

                $this->select_query_total_position[$query_serial] = $tmp_position;

                return true;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1558 hrs.
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

    public function load_fakey_databaseQuery(
                    $oDB_wiring, 
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $target_result_set_key, 
                    $query)
    {

        try{

            if(is_object($oCRNRSTN_MySQLi)){

                $oQuery = new crnrstn_database_query($this->oCRNRSTN_USR);

                //
                // INGEST FAKEY 
                // CONNECTION DATA. 
                $oQuery->load_mysqli_connection($oCRNRSTN_MySQLi);

                //
                // INGEST KEY 
                // DATA. 
                $oQuery->load_query_key($result_handle, $batch_key, $target_result_set_key);

                //
                // INGEST QUERY 
                // DATA. 
                $oQuery->load_query($query);

                //
                // PREP QUERY FOR 
                // DATABASE REQUEST. 
                $oQuery->initialize();

                $oQuery = $oDB_wiring->connectQuery($oQuery);

                $tmp_array = array();
                $query_serial = $oQuery->crnrstn_db_query_serial;
                $tmp_array[$query_serial] = $oQuery;

                $this->oQuery_ARRAY[] = $tmp_array;

                $tmp_position = sizeof($this->oQuery_ARRAY);
                $tmp_position -= 1;

                $this->select_query_total_position[$query_serial] = $tmp_position;

                //return true;
                return $oQuery;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to access any ' . 
                    'database connection associated ' . 
                    'with the result set key [' . 
                    $target_result_set_key . 
                    '].');

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
             * Sunday, June 30, 2024 @ 1558 hrs.
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

    public function returnQuery($query_serial)
    {

        try{

            if(isset($this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial])){

                return $this->oQuery_ARRAY[$this->select_query_total_position[$query_serial]][$query_serial];

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate a query ' . 
                    'object associated with the query serial, "' . 
                    $query_serial . 
                    '".');

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
             * Sunday, June 30, 2024 @ 1627 hrs.
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

    public function __destruct()
    {

    }

}