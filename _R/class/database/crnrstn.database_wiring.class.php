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
 * CLASS DEFINITION :: crnrstn_database_wiring
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: July 15, 2020 @ 1209 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQL
 *                     Database Query Handle
 *                     Wiring class object for
 *                     the CRNRSTN :: Lightsaber
 *                     MySQL Database Integrations
 *                     Services Layer
 * DESCRIPTION      :: Between the original SQL
 *                     query and the MySQLi
 *                     database response result
 *                     set that was returned
 *                     from the MySQL database
 *                     to the CRNRSTN :: Database
 *                     Services Layer, the CRNRSTN ::
 *                     Database Wiring class
 *                     object really ties it
 *                     all together in support
 *                     of the CRNRSTN :: Lightsaber
 *                     SOAP Services Layer.
 *
 *
 *                     5
 *
 *                     Friday, July 26, 2024 @ 0653 hrs.
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
class crnrstn_database_wiring 
{

    public $class_name;

    public $oCRNRSTN_USR;

    private static $RAIL_query_wiring_serial = array();
    private static $RAIL_crnrstn_db_query_serial = array();
    private static $RAIL_connection_serial = array();
    private static $RAIL_query_MD5 = array();
    private static $RAIL_activeQuery = array();

    private static $RAIL_result_handle = array();
    private static $RAIL_batch_key = array();
    private static $RAIL_result_set_key = array();

    private static $expectResultSetQuery = array();

    private static $positionInTotal = array();
    private static $positionInSelect = array();

    protected $query = array();
    private static $mysqli = array();
    private static $queryType = array();

    public $currentSelectQueryPos;

    private static $querySerialByKey = array();

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

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CLR-SSL Database Integrations
         * Services Layer clean restart.
         *
         * 5 :: Sunday, August 16, 2026 @ 0319 hrs.
         *
         */

    }

    public function __clr_ssl_construct($oCRNRSTN_USR)
    {

        $this->class_name = get_class();

        try{

            if(isset($oCRNRSTN_USR)){

                $this->oCRNRSTN_USR = $oCRNRSTN_USR;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('oCRNRSTN_USR is a ' . 
                    'required parameter for ' . 
                    $this->class_name . ' :: ' . 
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
             * Sunday, June 30, 2024 @ 1555 hrs.
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

    public function hasSelectResults(
                    $request_serial, 
                    $connection_serial, 
                    $batch_key)
    {

        if(!isset(self::$expectResultSetQuery[$request_serial][$connection_serial][$batch_key])){

            return false;

        }else{

            return true;

        }

    }

    public function returnQuerySerialByKey(
                    $request_serial, 
                    $connection_serial, 
                    $batch_key, 
                    $result_set_key)
    {

        try{

            if(isset(self::$querySerialByKey[$request_serial][$connection_serial][$batch_key][$result_set_key])){

                return self::$querySerialByKey[$request_serial][$connection_serial][$batch_key][$result_set_key];

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate the ' . 
                    'initialized query serial by key, ' . 
                    'where connection serial=[' . 
                    $connection_serial . 
                    '] batch key=[' . 
                    $batch_key . 
                    '] and result set key=[' . 
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
             * Sunday, June 30, 2024 @ 1555 hrs.
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

    public function returnQuerySerial(
                    $request_serial, 
                    $connection_serial, 
                    $batch_key)
    {

        try{

            if(isset(self::$expectResultSetQuery[$request_serial][$connection_serial][$batch_key][$this->currentSelectQueryPos])){

                return self::$expectResultSetQuery[$request_serial][$connection_serial][$batch_key][$this->currentSelectQueryPos];

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the ' . 
                    'initialized query serial, where ' . 
                    'the connection serial=[' . 
                    $connection_serial . 
                    '] and the batch key=[' . 
                    $batch_key . 
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
             * Sunday, June 30, 2024 @ 1555 hrs.
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

    public function returnConn(
                    $request_serial, 
                    $connection_serial, 
                    $batch_key)
    {

        try{

            if(isset(self::$mysqli[$request_serial][$connection_serial][$batch_key])){

                return self::$mysqli[$request_serial][$connection_serial][$batch_key];

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to return the ' . 
                    'mysqli connection, where the ' . 
                    'connection serial=[' . 
                    $connection_serial . 
                    '] and the batch key=[' . 
                    $batch_key . 
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

    public function returnSQLSpooledConn($request_serial)
    {

        try{

            if(isset($this->query[$request_serial])){

                $tmp_spooled_conn_ARRAY = array();
                $i = 0;

                //
                // FOR EACH 
                // CONNECTION. 
                foreach($this->query[$request_serial] as 
                    $connection_serial => $batchkeyArray)
                {

                    //
                    // FOR EACH BATCH 
                    // PER CONNECTION. 
                    foreach($batchkeyArray as $batch_key => $query){

                        $tmp_spooled_conn_ARRAY[$i]['query'] = $query;
                        $tmp_spooled_conn_ARRAY[$i]['batch_key'] = $batch_key;
                        $tmp_spooled_conn_ARRAY[$i]['connection_serial'] = $connection_serial;
                        $tmp_spooled_conn_ARRAY[$i]['type'] = self::$queryType[$request_serial][$connection_serial][$batch_key];

                        //
                        // FIX ADDED AND 
                        // CONFIRMED ON 
                        // 11.18.2021 @ 1848 hrs - J5.
                        $i++;

                    }

                }

                return $tmp_spooled_conn_ARRAY;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No database connections ' . 
                    'have been spooled for the request serial, "' . 
                    $request_serial . 
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

    public function spoolRequestedQuery(
                    $oQuery, 
                    $request_serial)
    {

        $tmp_crnrstn_db_query_serial = $oQuery->crnrstn_db_query_serial;
        $tmp_connection_serial = $oQuery->return_attribute('connection_serial');
        //$tmp_select_query = $oQuery->return_attribute('select_query');
        $tmp_batch_key = $oQuery->return_attribute('batch_key');
        $tmp_result_set_key = $oQuery->return_attribute('result_set_key');
        //$tmp_query_wiring_serial = $oQuery->return_attribute('query_wiring_serial');

        //error_log('248 wire - [' . $request_serial . '][' . $tmp_connection_serial . '][' . $tmp_batch_key.'][' . $tmp_result_set_key.'][' . $tmp_crnrstn_db_query_serial . ']');
        self::$querySerialByKey[$request_serial][$tmp_connection_serial][$tmp_batch_key][$tmp_result_set_key] = $tmp_crnrstn_db_query_serial;

        if(!isset($this->query[$request_serial][$tmp_connection_serial][$tmp_batch_key])){
            //error_log('First batch query=>[' . $request_serial . '][' . $tmp_connection_serial . '][' . $tmp_batch_key.'][' . $tmp_select_query.']');
            $this->query[$request_serial][$tmp_connection_serial][$tmp_batch_key] = '';
            self::$queryType[$request_serial][$tmp_connection_serial][$tmp_batch_key] = 'single';
            self::$mysqli[$request_serial][$tmp_connection_serial][$tmp_batch_key] = $oQuery->return_attribute('mysqli');

        }else{

            //error_log('Multi batch query=>[' . $request_serial . '][' . $tmp_connection_serial . '][' . $tmp_batch_key.'][' . $tmp_select_query.']');
            self::$queryType[$request_serial][$tmp_connection_serial][$tmp_batch_key] = 'multi';

        }

        $this->query[$request_serial][$tmp_connection_serial][$tmp_batch_key] .= $oQuery->return_attribute('raw_query');

    }

    public function activateQuery(
                    $request_serial, 
                    $oQuery)
    {

        $tmp_crnrstn_db_query_serial = $oQuery->crnrstn_db_query_serial;
        $tmp_connection_serial = $oQuery->return_attribute('connection_serial');
        $tmp_select_query = $oQuery->return_attribute('select_query');
        $tmp_batch_key = $oQuery->return_attribute('batch_key');

        //
        // TOTAL QUERY.
        self::$RAIL_activeQuery[$request_serial][$tmp_connection_serial][$tmp_batch_key][] = $tmp_crnrstn_db_query_serial;

        //
        // SELECT QUERY.
        if(strlen($tmp_select_query)>0){

            if(!isset(self::$expectResultSetQuery[$request_serial][$tmp_connection_serial][$tmp_batch_key])){

                $tmp_sel_query_cnt = 0;

            }else{

                $tmp_sel_query_cnt = sizeof(self::$expectResultSetQuery[$request_serial][$tmp_connection_serial][$tmp_batch_key]);

            }

            self::$expectResultSetQuery[$request_serial][$tmp_connection_serial][$tmp_batch_key][] = $tmp_crnrstn_db_query_serial;
            self::$positionInSelect[$request_serial][$tmp_connection_serial][$tmp_batch_key][] = $tmp_sel_query_cnt;

        }else{

           //error_log('182 wire - die(); ' . 
           //    'YEPPERS! NEED TO INIT...');

        }

    }

    public function connectQuery($oQuery)
    {

        $tmp_query_wiring_serial = $this->oCRNRSTN_USR->generate_new_key(70);

        //
        // STORE QUERY 
        // METADATA. 
        return $this->wireQueryUp($tmp_query_wiring_serial, $oQuery);

    }

    private function wireQueryUp(
                     $query_wiring_serial, 
                     $oQuery)
    {

        $tmp_current_query_count = sizeof(self::$RAIL_query_wiring_serial);

        $oQuery->load_wire_serial($query_wiring_serial);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Remain still while 
         * your life is extracted. 
         *
         */
        $tmp_crnrstn_db_query_serial = $oQuery->crnrstn_db_query_serial;
        $tmp_connection_serial = $oQuery->return_attribute('connection_serial');
        $tmp_query_MD5 = $oQuery->return_attribute('query_MD5');
        $tmp_result_handle = $oQuery->return_attribute('result_handle');
        $tmp_batch_key = $oQuery->return_attribute('batch_key');
        $tmp_result_set_key = $oQuery->return_attribute('result_set_key');

        self::$RAIL_query_wiring_serial[] = $query_wiring_serial;
        self::$RAIL_crnrstn_db_query_serial[] = $tmp_crnrstn_db_query_serial;
        self::$RAIL_connection_serial[] = $tmp_connection_serial;
        self::$RAIL_query_MD5[] = $tmp_query_MD5;

        self::$RAIL_result_handle[] = $tmp_result_handle;
        self::$RAIL_batch_key[] = $tmp_batch_key;
        self::$RAIL_result_set_key[] = $tmp_result_set_key;

        self::$positionInTotal[$tmp_connection_serial][$query_wiring_serial][] = $tmp_current_query_count;

        return $oQuery;

    }

    public function __destruct()
    {

    }

}