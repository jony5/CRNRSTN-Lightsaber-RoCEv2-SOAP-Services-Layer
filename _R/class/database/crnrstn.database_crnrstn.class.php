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
 * CLASS DEFINITION :: crnrstn_database_crnrstn
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, July 13, 2020 @ 0448 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQL
 *                     Database Integrations
 *                     Services Layer class object
 * DESCRIPTION      :: I go wherever the CRNRSTN ::
 *                     Lightsaber SOAP Services
 *                     Layer goes, and I go for
 *                     database support, properly.
 *
 *                     I am the cornerstone
 *                     behind the CRNRSTN ::
 *                     Database Services Layer of
 *                     the CRNRSTN :: Lightsaber
 *                     SOAP Services Layer.
 *
 *
 *                     5
 *
 *                     Friday, July, 26, 2024 @ 0521 hrs.
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
class crnrstn_database_crnrstn extends crnrstn
{

    private static $_R = array();
    private $R_data    = array();

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
         * 5 :: Sunday, August 16, 2026 @ 0247 hrs.
         *
         */

        $this->R_data['R_debug_mode']         = $this->get_crnrstn('R_debug_mode');
        $this->R_data['phpmailer_debug_mode'] = $this->get_crnrstn('phpmailer_debug_mode');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Acquire an instantiation of
         * the CLR-SSL MySQL Database
         * Query Handle Wiring
         * Class Object from the CLR-SSL
         * Resource Kivotós Advanced
         * Object Storage Ark.
         *
         * 5 :: Sunday, August 16, 2026 @ 0247 hrs.
         *
         */
        self::$_R['kivotos']['db_wiring'] = $this->kivotos_storage('db_wiring');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Acquire an instantiation of
         * the CLR-SSL MySQL Database
         * Integrations Query Manager
         * Class Object from the CLR-SSL
         * Resource Kivotós Advanced
         * Object Storage Ark for the
         * CRNRSTN :: Lightsaber MySQL
         * Database Integrations
         * Services Layer.
         *
         *
         * 5 :: Tuesday, August 25, 2026 @ 2351 hrs.
         *
         * Previously initialized as:
         * self::$oQueryManager = new crnrstn_sql_manager($this->oCRNRSTN_USR);
         *
         */
        self::$_R['kivotos']['sql_mgr'] = $this->kivotos_storage('sql_mgr');

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
     * @return
     * @access public
     *
     */
    function error_log(
             $message_str = NULL,
             $syslog_level = \LOG_DEBUG,
             $error_reporting_level = \E_NOTICE,
             $line_num = NULL,
             $method = NULL,
             $file = NULL,
             $token = NULL,
             $spool = false,
             $spool_channel = 'R_channel_RUNTIME',
             $syslog_prefix = 'R :: ',
             $syslog_prefix_passthrough = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We copied the method
         * definition for error_log()
         * from crnrstn to
         * crnrstn_database_crnrstn.
         * 5 :: Tuesday, August 25, 2026 @ 2328 hrs.
         *
         */

        echo '<br><pre><code>[' . $this->return_micro_time() . '] 
[mthd ' .
            __METHOD__ . '] 
[lnum ' .
            __LINE__ . '] 
[rtime ' .
            $this->wall_time() . ' secs] 
' .
'Please log this data to database: 
date [' .
    \print_r(\gettimeofday(), true) . '] ' .
            '
R_debug_mode[' .
            self::$R_data['R_debug_mode'] . '] ' .
            '
phpmailer_debug_mode[' .
            self::$R_data['phpmailer_debug_mode'] . '] ' .
            '
message_str [' .
            \strval($message_str) . '] ' .
            '
syslog_level [' .
            \strval($syslog_level) . '] ' .
            '
error_reporting_level [' .
            \strval($error_reporting_level) . '] ' .
            '
line_num [' .
            \strval($line_num) . '] ' .
            '
method [' .
            \strval($method) . '] ' .
            '
token [' .
    \print_r($token, true) . '] ' .
            '
spool [' .
            \strval($spool) . ']</code></pre>';

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
    function config_load_static_application_data(
             $data_type,
             $oCRNRSTN = NULL)
    {

        switch($data_type){
            case 'sql_interval_values':
            case 'sql_interval_ARRAY[UNITS][STRING_PATTERN]':
            case 'sql_interval_string_patterns':
            case 'sql_interval_ARRAY[UNITS][VALUES]':

                return _crnrstn_settings($data_type, $oCRNRSTN);

            break;
            default:

                error_log(__LINE__ . ' env Unknown SWITCH CASE received. ['. strval($data_type) . '].');

            break;

        }

    }

    //public function return_database_value(
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
    function return_db_value(
             $oCRNRSTN_MySQLi,
             $result_handle,
             $batch_key,
             $result_set_key,
             $fieldname,
             $pos)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the method return_database_value()
         *       to return_db_value() due to conflict:
         *
         *       Fatal error: Declaration of
         *       CRNRSTN\crnrstn_database_crnrstn::
         *       return_database_value($oCRNRSTN_MySQLi,
         *       $result_handle, $batch_key, $result_set_key,
         *       $fieldname, $pos) must be compatible with
         *       CRNRSTN\crnrstn::return_database_value
         *       $result_set_key, $fieldname, $pos = 0,
         *       $json_out = false) in
         *       C:\xampp\htdocs\_R\class\database
         *       \crnrstn.database_crnrstn.class.php
         *       on line 433
         *       5 :: Sunday, August 16, 2026 @ 0724 hrs.
         *
         */

        return self::$_R['kivotos']['sql_mgr']->return_db_value(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key,
                                                $fieldname,
                                                $pos);

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
     * @return
     * @access public
     *
     */
    function resultSetMerge(
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

        return self::$_R['kivotos']['sql_mgr']->resultSetMerge(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oQueryProfileMgr,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key,
                                                $target_result_set_key,
                                                $merge_fields_piped,
                                                $merge_fields_distinct_val,
                                                $sequence_fields_piped,
                                                $sequence_fields_datatype_piped);

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
    function ping_value_existence(
             $oCRNRSTN_MySQLi,
             $result_handle,
             $batch_key,
             $result_set_key,
             $fieldname,
             $value)
    {

        return self::$_R['kivotos']['sql_mgr']->ping_value_existence(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key,
                                                $fieldname,
                                                $value);

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
    function pingProfileExistence(
             $oCRNRSTN_MySQLi,
             $result_handle,
             $batch_key,
             $result_set_key)
    {

        return self::$_R['kivotos']['sql_mgr']->pingProfileExistence(
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key);

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
    function return_record_count(
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key)
    {

        return self::$_R['kivotos']['sql_mgr']->return_record_count(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key);

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
    function load_previous_record_lookup(
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $lookup_serial)
    {

        self::$_R['kivotos']['sql_mgr']->load_previous_record_lookup(
                                         self::$_R['kivotos']['db_wiring'],
                                         $oCRNRSTN_MySQLi,
                                         $result_handle,
                                         $batch_key,
                                         $result_set_key,
                                         $lookup_serial);

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
    function init_lookup_by_id(
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key)
    {

        self::$_R['kivotos']['sql_mgr']->init_lookup_by_id(
                                         self::$_R['kivotos']['db_wiring'],
                                         $oCRNRSTN_MySQLi,
                                         $result_handle,
                                         $batch_key,
                                         $result_set_key);

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
    function add_lookup_field_data(
                    $oCRNRSTN_MySQLi, 
                    $result_handle, 
                    $batch_key, 
                    $result_set_key, 
                    $field_name, 
                    $field_value)
    {

        return self::$_R['kivotos']['sql_mgr']->add_lookup_field_data(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key,
                                                $field_name,
                                                $field_value);

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
    function keyDataByID(
             $oCRNRSTN_MySQLi,
             $result_handle,
             $batch_key,
             $result_set_key,
             $piped_primary_id_fields)
    {

        self::$_R['kivotos']['sql_mgr']->keyDataByID(
                                         self::$_R['kivotos']['db_wiring'],
                                         $oCRNRSTN_MySQLi,
                                         $result_handle,
                                         $batch_key,
                                         $result_set_key,
                                         $piped_primary_id_fields);

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
    function retrieve_data_by_id(
             $oCRNRSTN_MySQLi,
             $result_handle,
             $batch_key,
             $result_set_key,
             $piped_lookup_fieldname,
             $piped_lookup_id_data)
    {

        return self::$_R['kivotos']['sql_mgr']->retrieve_data_by_id(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key,
                                                $piped_lookup_fieldname,
                                                $piped_lookup_id_data);

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function process_query($request_serial)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Do we have any
         * subset to consider?
         *
         */
        if(self::$_R['kivotos']['sql_mgr']->queueValidQuery(
                                            $request_serial,
                                            self::$_R['kivotos']['db_wiring']))
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Send to database.
             *
             */
            return self::$_R['kivotos']['sql_mgr']->sendQuery(
                                                    $request_serial,
                                                    self::$_R['kivotos']['db_wiring']);

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
     * @return
     * @access public
     *
     */
    function load_database_query(
             $oCRNRSTN_MySQLi,
             $result_handle,
             $batch_key,
             $result_set_key,
             $query)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Load the query object into
         * the MySQL Database Integrations
         * Query Manager Class Object of
         * the CRNRSTN :: Lightsaber MySQL
         * Database Integrations
         * Services Layer.
         *
         */
        return self::$_R['kivotos']['sql_mgr']->load_database_query(
                                                self::$_R['kivotos']['db_wiring'],
                                                $oCRNRSTN_MySQLi,
                                                $result_handle,
                                                $batch_key,
                                                $result_set_key,
                                                $query);

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
    function receive_process_query_param(
             $key,
             $val,
             $request_serial)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Receive any restrictions
         * to the processing of all
         * (100%) of the query that
         * are available in memory for
         * direct subset acquisition.
         *
         */

        try{

            switch($key){
                case 'sql_accelerate_FLAG':
                case 'oCRNRSTN_MySQLi':
                case 'batch_key':
                case 'result_set_key':
                case 'result_handle':
                case 'query_override':

                self::$_R['kivotos']['sql_mgr']->receive_process_query_param(
                                                 $key,
                                                 $val,
                                                 $request_serial);

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unknown key provided as ' . 
                        'parameter reference to oCRNRSTN_USR' . 
                        '->process_query() meta-data '. 
                        __CLASS__ . ' :: '. 
                        __FUNCTION__ . 
                        '.');

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
             * Sunday, June 30, 2024 @ 1552 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e,
                   \LOG_ERR,
                   __METHOD__,
                   __NAMESPACE__);

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