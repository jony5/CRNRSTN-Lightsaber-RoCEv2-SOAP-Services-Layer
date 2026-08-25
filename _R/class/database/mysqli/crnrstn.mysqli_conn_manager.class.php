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
 * CLASS DEFINITION :: crnrstn_mysqli_conn_manager
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: September 28, 2013 @ 1720 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQLi
 *                     Database Connection Manager
 *                     class object for the
 *                     CRNRSTN :: Lightsaber
 *                     MySQL Database
 *                     Integrations Services Layer
 * DESCRIPTION      :: A manager of MySQLi database
 *                     connections for the CRNRSTN ::
 *                     Lightsaber Multi-Channel
 *                     Decoupled Data Object
 *                     (MC-DDO) SOAP
 *                     Services Layer.
 *
 *
 *                     5
 *
 *                     Tuesday, July 2, 2024 @ 0820 hrs.
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
class crnrstn_mysqli_conn_manager extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_mysqli_conn_manager
     *       class object by adding an
     *       extension of the crnrstn object,
     *       by deleting the
     *       __construct($oCRNRSTN) input
     *       parameter with its public
     *       definition, and by removing the
     *       object assignment to the
     *       public $oCRNRSTN variable.
     *       5 :: Wednesday, March 11, 2026 @ 0920 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations
     *       to crc_int32().
     *       5 :: Wednesday, July 1, 2026 @ 0527 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the following method(s)
     *       in order to resolve conflicts with
     *       crnrstn due to the inheritance of the
     *       object by crnrstn_mysqli_conn_manager:
     *
     *       - return_dataset_nomination_prefix()
     *         -----
     *         Fatal error: Access level to
     *         CRNRSTN\crnrstn_mysqli_conn_manager::
     *         return_dataset_nomination_prefix() must
     *         be public (as in class CRNRSTN\crnrstn) in
     *         C:\xampp\htdocs\_R\class\database\mysqli
     *         \crnrstn.mysqli_conn_manager.class.php
     *         on line 2209
     *
     *         5 :: Sunday, August 16, 2026 @ 0637 hrs.
     *
     */

    public $oCRNRSTN_USR;

    private $R_data = array();

    private static $db_env_ARRAY = array();
    private static $db_profile_is_selected_ARRAY = array();
    private static $db_host_ARRAY = array();      // $host;
    private static $db_un_ARRAY = array();        // $un;
    private static $db_pwd_ARRAY = array();       // $pwd;
    private static $db_db_ARRAY = array();        // $dbname;
    private static $db_port_ARRAY = array();      // $port;

    private static $host;			        // runtime return $host;
    private static $un;			            // runtime return $un;
    private static $pwd;			        // runtime return $pwd;
    private static $db;			            // runtime return $dbname;
    private static $port;			        // runtime return $port;

    private static $profile_is_selected;    // initialization optimization
                                            // for a single database architecture

    private static $cache_db_pwd;		     // = $pwd;
    private static $cache_db_port;	         // = $port;

    private static $tmp_oCRNRSTN_SESSION_oDDO_ARRAY = array();
    private static $tmp_oDDO;

    private static $mysqli;

    private static $appEnvKey;

    public function __construct()
    {

        $this->R_data['R_cluster_id'] = $this->get_crnrstn('R_cluster_id');

        //$this->print_r('cluster id =[' . 
        //       $this->R_data['R_cluster_id'] . '] for ' .
        //       __CLASS__ . '.', 
        //       NULL, 
        //       CRNRSTN_UI_DARKNIGHT, 
        //       __LINE__, 
        //       __METHOD__, 
        //       __FILE__);

    }

    public function config_add_data_wp(
                    $env_key, 
                    $data_key, 
                    $data_value, 
                    $data_type_family = 'CRNRSTN::WP::INTEGRATIONS')
    {

        $this->config_add_resource(
               $env_key, 
               $data_key, 
               $data_value, 
               $data_type_family);

    }

    public function get_resource_wp(
                    $data_key, 
                    $index = 0, 
                    $data_type_family = 'CRNRSTN::WP::INTEGRATIONS', 
                    $soap_transport = false)
    {

        $this->error_log('CRNRSTN :: is returning the data, ' .
               $data_key . 
               ', for a WordPress related request.', 
               __LINE__, 
               __METHOD__, 
               __FILE__, 
               CRNRSTN_SETTINGS_WORDPRESS);

        return $this->get_resource(
                      $data_key, 
                      $index, 
                      $data_type_family, 
                      $soap_transport);

    }

    public function add_database_table_profile(
                    $env_key, 
                    $table_prefix, 
                    $logs_rollover_profile, 
                    $storage_engine, 
                    $collation, 
                    $max_log_table_records)
    {

        /**
        Sunday May 21, 2023 @ 0453 hrs.

        $logs_rollover_profile
        -----
        CRNRSTN_DB_LOG_TABLE_NO_ROLLOVER           Keeps 100% of the
                                                    logs. The default mode.

        CRNRSTN_DB_LOG_TABLE_SHARD_SIZE          Log tables would have
                                                    shit like system base64
                                                    file write activity,
                                                    ...when hard days come
                                                    (plz read as sick levels
                                                    of success; ...not just
                                                    grotesque neglect
                                                    up to the disk full
                                                    warnings).

                                                    This will buy you
                                                    some time.

                                                    This *will* result in
                                                    100% empty log tables
                                                    over time.

        CRNRSTN_DB_LOG_TABLE_ROLLOVER_MAX_RECORDS   Max record count for
                                                    log tables.

                                                    Older records will roll
                                                    off first (fifo).

        */

        $tmp_data_type_family = 'CRNRSTN::RESOURCE::CRNRSTN_DATABASE_TABLE';
        $this->config_add_resource(
               $env_key, 
               'table_prefix', 
               $table_prefix, 
               $tmp_data_type_family);
        $this->config_add_resource(
               $env_key, 
               'logs_rollover_profile', 
               $logs_rollover_profile, 
               $tmp_data_type_family);
        $this->config_add_resource(
               $env_key, 
               'storage_engine', 
               $storage_engine, 
               $tmp_data_type_family);
        $this->config_add_resource(
               $env_key, 
               'collation', 
               $collation, 
               $tmp_data_type_family);

        //
        // The integer
        // constant profile
        // supporting $logs_rollover_profile,
        // is CRNRSTN_DB_LOG_TABLE_ROLLOVER_MAX_RECORDS.
        //
        // -1 = No maximum limit.
        //      Note max_log_table_records
        //      is only active
        //      when logs rollover.
        $this->config_add_resource(
               $env_key, 
               'max_log_table_records', 
               $max_log_table_records, 
               $tmp_data_type_family);

    }

    public function ____add_connection(
                    $env_key, 
                    $host, 
                    $un, 
                    $pwd, 
                    $db, 
                    $port = NULL)
    {

        /**

        Nomination of certain data 
        artifacts can be hard coded 
        to some "mainstream" standard. 

        Apart from increasing the 
        portability of CRNRSTN ::,
        this will also speed up the 
        adoption of CRNRSTN :: within 
        the business context. 

        Thus, if one would even by 
        per chance,...neigh, even 
        have a mere glance at this 
        shit right here, and 
        CRNRSTN :: will *undeniably* 
        be perceived and exponentially 
        more readily received as 
        one being in and of itself 
        found to be in fashion with 
        and in all accordance unto 
        most well known industry 
        standards...no funny stuff...a 
        more than suitable business 
        facing services oriented 
        architecture of only the 
        highest quality and which 
        while having lack of 
        warranty of merchantability 
        or suitability fit for a 
        purpose guarantee,...said 
        SOA would and could never 
        have its light be dimmed 
        on account thereof with 
        respect to the lack of 
        any warranty of 
        merchantability or 
        suitability fit for a 
        purpose guarantee. 

        EMAIL
            - PHPMAILER
            - MAIL()

        DATABASE
            - Request processing.
            - Response handling.

        FILE HANDLING
            - Permissions management.
            - Dirctory Reads/Write.

        CONNECTIONS
            - FTP
            - SFTP
            - SMTP
            - DATABASE

        CONNECTIONS :: DATABASE.
        string $hostname = ini_get("mysqli.default_host");
        string $username = ini_get("mysqli.default_user");
        string $password = ini_get("mysqli.default_pw");
        string $database = "";
        int $port = ini_get("mysqli.default_port");
        string $socket = ini_get("mysqli.default_socket");

        $tmp_array_out_ARRAY['str_out'] = $tmp_str_out;
        $tmp_array_out_ARRAY['str_section_array'] = $tmp_array_str_unit_ARRAY;

        return $tmp_array_out_ARRAY;

        */

        //
        // 5
        //
        // Wednesday, August 10, 2022 0628 hrs.
        //
        // Passing null for index 
        // allows for n+1 profiles. 
        //
        // Basically array appends. 
        //
        // Passing 0, says write 
        // to index 0! 
        //
        // See cut off in prepDatabaseConfig() 
        // for n+1 support testing. 
        //
        // I've got to circle back 
        // around for that. 
        $tmp_data_type_family = 'CRNRSTN::RESOURCE::CRNRSTN_DATABASE';
        $this->config_add_resource($env_key, 'env_key',  $env_key, $tmp_data_type_family);
        $this->config_add_resource($env_key, 'host',  $host, $tmp_data_type_family);
        $this->config_add_resource($env_key, 'un', $un, $tmp_data_type_family);
        $this->config_add_resource($env_key, 'pwd', $pwd, $tmp_data_type_family);
        $this->config_add_resource($env_key, 'db', $db, $tmp_data_type_family);
        $this->config_add_resource($env_key, 'port', $port, $tmp_data_type_family);

    }

    function config_add_resource(
             $env_key,
             $data_key,
             $data_value = NULL,
             $data_type_family = 'CRNRSTN::RESOURCE',
             $data_authorization_profile = 'R_authorize & R_channel_RUNTIME',
             $index = NULL,
             $ttl = 60)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed method visibility of the
         *       method config_add_resource from
         *       private to public and added the
         *       inputs, $index = NULL and
         *       $ttl = 60 in order to align
         *       this method to crnrstn's usage
         *       of the same:
         *
         *       Fatal error: Access level to
         *       CRNRSTN\crnrstn_mysqli_conn_manager::
         *       config_add_resource() must be public
         *       (as in class CRNRSTN\crnrstn) in
         *       C:\xampp\htdocs\_R\class\database\mysqli
         *       \crnrstn.mysqli_conn_manager.class.php
         *       on line 604
         *
         *       5 :: Sunday, August 16, 2026 @ 0623 hrs.
         *
         */

        if(is_string($data_authorization_profile)){

            switch($data_authorization_profile){
                case 'R_authorize & R_channel_RUNTIME':
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Convert CLR-SSL channel
                     * data to integer.
                     *
                     *
                     * 5 :: Sunday, August 16, 2026 @ 0625 hrs.
                     *
                     */
                    $data_authorization_profile = $this->R_data['int_flag']['R_authorize'] &
                                                  $this->R_data['int_flag']['R_channel_RUNTIME'];

                break;

            }

        }

        $this->add_resource(
               $data_key,
               $data_value, 
               $data_type_family,
               $data_authorization_profile,
               $index,
               $ttl);

    }

    private function prepDatabaseConfig(
                     $host = NULL, 
                     $db = NULL, 
                     $un = NULL, 
                     $port = NULL, 
                     $pwd = NULL)
    {

        try{

            //
            // Is configuration custom?
            $tmp_config_hash_ARRAY = array();
            $tmp_is_custom_config = false;
            $tmp_stripe_key_ARRAY = $this->return_stripe_key_array(
                                           '$host', 
                                           '$db', 
                                           '$un', 
                                           '$port', 
                                           '$pwd');
            $tmp_custom_db_config_status_ARRAY = $this->return_regression_stripe_ARRAY(
                                                        'HAS_STRING_DATA', 
                                                        $tmp_stripe_key_ARRAY, 
                                                        $host, 
                                                        $db, 
                                                        $un, 
                                                        $port, 
                                                        $pwd);

            //error_log(__LINE__ . 
            //    ' mysqli ' . 
            //    __METHOD__ . ':: [' . 
            //    print_r($tmp_custom_db_config_status_ARRAY, true) . 
            //    ']');
            //die();
            $tmp_custom_db_config_status = $tmp_custom_db_config_status_ARRAY['string'];
            $tmp_custom_db_config_status_ARRAY = $tmp_custom_db_config_status_ARRAY['index_array'];

            if(strlen($tmp_custom_db_config_status > 0)){

                $tmp_is_custom_config = true;

            }

            $tmp_data_key = 'db';
            $tmp_data_type_family = 'CRNRSTN::RESOURCE::CRNRSTN_DATABASE';
            //$tmp_db_profile_cnt = $this->get_resource_count($tmp_data_key, $tmp_data_family_str, $this->env_key());
            $tmp_db_profile_cnt = $this->retrieve_data_count($tmp_data_key, $tmp_data_type_family);
            self::$db = $this->get_resource('db', 0, $tmp_data_type_family);
            //self::$db = $this->retrieve_data_value($tmp_data_key, $tmp_data_type_family);

            $this->print_r('self::$db=[' .
                   self::$db . ']. $tmp_data_key=[' .
                   $tmp_data_key . ']. $tmp_data_type_family=[' .
                   $tmp_data_type_family . ']. $tmp_db_profile_cnt=[' .
                   $tmp_db_profile_cnt . ']', 
                   NULL, 
                   CRNRSTN_UI_PHPNIGHT, 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__);

            die();

            if(!$tmp_is_custom_config && 
                ($tmp_db_profile_cnt == 1))
            {

                //
                // Only one database 
                // configuration for 
                // CRNRSTN :: 
                //
                // This is not the same as 
                // n+1 WordPress configuration .
                self::$host = $this->get_resource('host', 0, $tmp_data_type_family);
                self::$db = $this->get_resource('db', 0, $tmp_data_type_family);
                self::$un = $this->get_resource('un', 0, $tmp_data_type_family);
                self::$pwd = $this->get_resource('pwd', 0, $tmp_data_type_family);
                self::$port = $this->get_resource('port', 0, $tmp_data_type_family);

                $this->print_r('self::$db=[' . 
                       self::$db . ']. $tmp_data_key=[' . 
                       $tmp_data_key . ']. $tmp_data_type_family=[' . 
                       $tmp_data_type_family . ']. $tmp_db_profile_cnt=[' . 
                       $tmp_db_profile_cnt . ']', 
                       NULL, 
                       CRNRSTN_UI_PHPNIGHT, 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__);

                die();
                $tmp_db_configuration_hash_salt = $this->return_dataset_nomination_prefix(
                                                         'string', 
                                                         self::$host, 
                                                         self::$db, 
                                                         self::$un, 
                                                         self::$pwd, 
                                                         self::$port);
                $tmp_db_configuration_hash_salt_md5 = md5($tmp_db_configuration_hash_salt);

                //
                // Have we seen 
                // this before? 
                if(!in_array($tmp_db_configuration_hash_salt_md5, $tmp_config_hash_ARRAY)){

                    //$this->oCRNRSTN_USR->print_r('We do not have hash ' . 
                    //                     $tmp_db_configuration_hash_salt_md5 . 
                    //                     ' in the $tmp_config_hash_ARRAY array[' . 
                    //                     print_r($tmp_config_hash_ARRAY, true) . 
                    //                     '].', 'oDDO Testing', 
                    //                     CRNRSTN_UI_DARKNIGHT, 
                    //                     __LINE__, 
                    //                     __METHOD__, 
                    //                     __FILE__);
                    $tmp_config_hash_ARRAY[] = $tmp_db_configuration_hash_salt_md5;

                    //$this->config_add_resource(
                    //       $this->oCRNRSTN_USR->env_key(), 
                    //       '_CRNRSTN_DB_CNFG_HASH_ARRAY', 
                    //       $tmp_config_hash_ARRAY, 
                    //       $tmp_data_type_family, 
                    //       CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME);

                }

                return true;

            }

            error_log(__LINE__ . ' mysqli ' . 
                __METHOD__ . 
                ' We can come back later to ' .
               'support n+1 database connection ' .
               'profiles. die();');

            die();
            //if($tmp_profile_cnt > 0){

            for($i = 0; $i < $tmp_profile_cnt; $i++){

                if(!isset(self::$db)){

                    self::$profile_is_selected = 1;

//                        self::$db_host_ARRAY[] = self::$host;
//                        self::$db_un_ARRAY[] = self::$un;
//                        self::$db_pwd_ARRAY[] = self::$pwd;
//                        self::$db_db_ARRAY[] = self::$db;
//                        self::$db_port_ARRAY[] = self::$port;

                }else{

                    //
                    // Honor any
                    // parameter overrides.
                    //
                    // $host = NULL,
                    // $db   = NULL,
                    // $un   = NULL,
                    // $port = NULL,
                    // $pwd  = NULL.
                    //if(isset($host) || $tmp_is_custom_config){
                    if(isset($host)){

                        self::$host = $host;
                        //self::$host = $tmp_oDDO->preach(
                        //                         'data_value', 
                        //                         $tmp_dataset_prefix_str . 
                        //                         'HOSTNAME', 
                        //                         false, 
                        //                         $i, 
                        //                         false);

                    }

                    if(isset($un) || 
                        $tmp_is_custom_config)
                    {

                        self::$un = $un;
                        //self::$un = $tmp_oDDO->preach(
                        //                       'data_value', 
                        //                       $tmp_dataset_prefix_str . 
                        //                       'USERNAME', 
                        //                       false, 
                        //                       $i, 
                        //                       false);

                    }

                    if(isset($pwd) || 
                        $tmp_is_custom_config)
                    {

                        if($pwd != $tmp_oDDO->preach(
                                              'data_value', 
                                              $tmp_dataset_prefix_str . 
                                              'PASSWORD', 
                                              false, 
                                              $i, 
                                              false))
                        {

                            self::$pwd = $db;

                        }else{

                            self::$pwd = $tmp_oDDO->preach(
                                                    'data_value', 
                                                    $tmp_dataset_prefix_str . 
                                                    'PASSWORD', 
                                                    false, 
                                                    $i, 
                                                    false);

                        }

                    }

                    if(isset($db) || 
                        $tmp_is_custom_config)
                    {

                        if($db != $tmp_oDDO->preach(
                                             'data_value', 
                                             $tmp_dataset_prefix_str . 
                                             'DATABASE', 
                                             false, 
                                             $i, 
                                             false))
                        {

                            self::$db = $db;

                        }else{

                            self::$db = $tmp_oDDO->preach(
                                                   'data_value', 
                                                   $tmp_dataset_prefix_str . 
                                                   'DATABASE', 
                                                   false, 
                                                   $i, 
                                                   false);

                        }

                    }

                    if(isset($port) || $tmp_is_custom_config){

                        if($port != $tmp_oDDO->preach(
                                               'data_value', 
                                               $tmp_dataset_prefix_str . 
                                               'PORT', 
                                               false, 
                                               $i, 
                                               false))
                        {

                            self::$port = $port;

                        }else{

                            self::$port = $tmp_oDDO->preach(
                                                     'data_value', 
                                                     $tmp_dataset_prefix_str . 
                                                     'PORT', 
                                                     false, 
                                                     $i, 
                                                     false);

                        }

                    }

                }

            }

//                if(self::$profile_is_selected == 2){
//
//                    self::$db_host_ARRAY[] = self::$host;
//                    self::$db_un_ARRAY[] = self::$un;
//                    self::$db_pwd_ARRAY[] = self::$pwd;
//                    self::$db_db_ARRAY[] = self::$db;
//                    self::$db_port_ARRAY[] = self::$port;
//
//                    self::$profile_is_selected = 0;
//
//                }

            //}

            $tmp_db_configuration_hash_salt = $this->return_dataset_nomination_prefix(
                                                     'string', 
                                                     self::$host, 
                                                     self::$db, 
                                                     self::$un, 
                                                     self::$port, 
                                                     self::$pwd);
            $tmp_db_configuration_hash_salt_md5 = $this->hash(
                                                         $tmp_db_configuration_hash_salt, 
                                                         'md5');

            //
            // If hashed input 
            // parameters match 
            // what has been stored 
            // in session, 
            // preparation is complete. 
            $tmp_database_hash_config_ARRAY = $this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_CNFG_HASH_ARRAY');

            if(is_array($tmp_database_hash_config_ARRAY)){

                if(in_array($tmp_db_configuration_hash_salt_md5, $tmp_database_hash_config_ARRAY)){

                    error_log(__LINE__ . ' mysqli SALT [' . 
                        $tmp_db_configuration_hash_salt_md5 . 
                        '] FOUND IN ARRAY[' . 
                        print_r($tmp_database_hash_config_ARRAY, true) . 
                        '].');

                    die();

                    return true;

                }else{

                    //
                    // We need to 
                    // initialize the 
                    // database configuration. 
                    $tmp_database_hash_config_ARRAY[] = $tmp_db_configuration_hash_salt_md5;

                    $this->oCRNRSTN_USR->input_data_value(
                                         $tmp_database_hash_config_ARRAY, 
                                         '_CRNRSTN_DB_CNFG_HASH_ARRAY', 
                                         NULL, 
                                         0);
                    //$this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_CNFG_HASH_ARRAY', $tmp_database_hash_config_ARRAY);

                    //$tmp_database_hash_config_ARRAY = $this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_CNFG_HASH_ARRAY');
                    $tmp_database_hash_config_ARRAY = $this->oCRNRSTN_USR->get_resource('_CRNRSTN_DB_CNFG_HASH_ARRAY');

                    if(in_array($tmp_db_configuration_hash_salt_md5, $tmp_database_hash_config_ARRAY)){

                        error_log(__LINE__ . ' mysqli SALT [' . 
                            $tmp_db_configuration_hash_salt_md5 . 
                            '] FOUND IN ARRAY[' . 
                            print_r($tmp_database_hash_config_ARRAY, true) . 
                            '].');

                        die();

                        return true;

                    }else{

                        if(!is_array($tmp_database_hash_config_ARRAY)){

                            error_log(__LINE__ . ' mysqli SALT [' . 
                            $tmp_db_configuration_hash_salt_md5 . 
                            '] NOT FOUND IN [' . 
                            print_r($tmp_database_hash_config_ARRAY, true) . 
                            '].');

                            die();
                            $tmp_database_hash_config_ARRAY = array();

                        }

                        error_log(__LINE__ . ' mysqli SALT [' . 
                            $tmp_db_configuration_hash_salt_md5 . 
                            '] FOUND IN ARRAY[' . 
                            print_r($tmp_database_hash_config_ARRAY, true) . 
                            '].');

                        die();

                    }

//                //
//                // Initialize/refresh 
//                // session parameters. 
//                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_ENV', self::$appEnvKey);
//                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_HOST', $tmp_db_host);
//                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_DB', $tmp_db_db);
//                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_UN', $tmp_un);
//
//                //
//                // Initialize/refresh
//                // session parameter
//                // optimization hash
//                // (in session) to
//                // streamline preparation
//                // of database connection.
//                $this->oCRNRSTN_USR->set_session_param(
//                                     '_CRNRSTN_DB_CNFG', 
//                                     md5($host . '::' . 
//                                     $db . '::' . 
//                                     $un . '::' . 
//                                     $port . '::' . 
//                                     $pwd));

                }

            }else{

                $tmp_database_hash_config_ARRAY = array();

                //
                // Need to initialize 
                // database configuration. 
                $tmp_database_hash_config_ARRAY[] = $tmp_db_configuration_hash_salt_md5;

                $this->oCRNRSTN_USR->input_data_value(
                                     $tmp_database_hash_config_ARRAY, 
                                     '_CRNRSTN_DB_CNFG_HASH_ARRAY', 
                                     NULL, 
                                     0);
                //$this->oCRNRSTN_USR->set_session_param(
                //                     '_CRNRSTN_DB_CNFG_HASH_ARRAY', 
                //                     $tmp_database_hash_config_ARRAY);

                $tmp_database_hash_config_ARRAY = $this->oCRNRSTN_USR->get_resource('_CRNRSTN_DB_CNFG_HASH_ARRAY');
                //$tmp_database_hash_config_ARRAY = $this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_CNFG_HASH_ARRAY');

                if(in_array($tmp_db_configuration_hash_salt_md5, $tmp_database_hash_config_ARRAY)){

                    error_log(__LINE__ . ' mysqli SALT [' . 
                        $tmp_db_configuration_hash_salt_md5 .
                        '] FOUND IN ARRAY[' . 
                        print_r($tmp_database_hash_config_ARRAY, true) . 
                        '].');

                    die();
                    return true;

                }else{

                    if(!is_array($tmp_database_hash_config_ARRAY)){

                        error_log(__LINE__ . ' mysqli SALT [' . 
                            $tmp_db_configuration_hash_salt_md5 . 
                            '] NOT FOUND IN [' . 
                            print_r($tmp_database_hash_config_ARRAY, true) . 
                            '].');

                        die();

                    }

                    error_log(__LINE__ . ' mysqli SALT [' . 
                        $tmp_db_configuration_hash_salt_md5 . 
                        '] FOUND IN ARRAY[' . 
                        print_r($tmp_database_hash_config_ARRAY, true) . 
                        '].');

                    die();

                }

            }

            error_log(__LINE__ . ' mysqli prep total database count=' . 
                $tmp_oDDO->count(
                           $tmp_dataset_prefix_str . 'DATABASE', 
                           false));

            if($tmp_profile_cnt < 1){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any database ' . 
                    'configuration data for this connection.');

            }

            if($tmp_profile_cnt > 0){

                error_log(__LINE__ . ' mysqli ' . __METHOD__ .
                ' only 1 database for this environment. ' .
                $tmp_oDDO->preach(
                           'data_value', 
                           $tmp_dataset_prefix_str . 
                           'DATABASE', 
                           false, 
                           0, 
                           false));

                for($i = 0; $i < $tmp_profile_cnt; $i++){


                }

            }

            if($tmp_profile_cnt <> 1){

                error_log(__LINE__ . ' mysqli ' . 
                    __METHOD__ . ':: ' . 
                    $tmp_cnt . ' database found ' . 
                    'for this environment.');

            }

            die();

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
             * Sunday, June 30, 2024 @ 1551 hrs.
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

        //
        // $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection();
        if($host == NULL){

            //
            // If no params or cache, 
            // locally cache first 
            // solution from 
            // multi-dimension array. 
            //
            // CRNRSTN :: Lightsaber 
            // environmental detection
            // and values from the
            // configuration file. 
            if(!($this->oCRNRSTN_USR->isset_session_param('_CRNRSTN_DB_HOST'))){

                if(isset(self::$db_host[$this->R_data['R_cluster_id']])){

                    foreach(self::$db_host[$this->R_data['R_cluster_id']][self::$appEnvKey] as
                        $tmp_db_host => $tmp_host_array)
                    {

                        foreach($tmp_host_array as 
                            $tmp_db_db => $tmp_db_array)
                        {

                            foreach($tmp_db_array as 
                                $tmp_un => $oMYSQLI)
                            {

                                error_log(__LINE__ . 
                                    ' mysqli conn mgr ' . 
                                    __METHOD__ .
                                    ':: [$tmp_db_db=' . $tmp_db_db .
                                    '][' . 
                                    print_r(self::$db_host[$this->R_data['R_cluster_id']][self::$appEnvKey], true) .
                                    '].');

                                //
                                // Initialize/refresh 
                                // session parameters. 
                                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_ENV', self::$appEnvKey);
                                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_HOST', $tmp_db_host);
                                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_DB', $tmp_db_db);
                                $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_UN', $tmp_un);

                                //
                                // Initialize/refresh 
                                // optimization hash 
                                // (in session) to 
                                // streamline preparation 
                                // of database connection. 
                                $this->oCRNRSTN_USR->set_session_param(
                                                     '_CRNRSTN_DB_CNFG', 
                                                     md5($host . '::' . 
                                                         $db . '::' . 
                                                         $un . '::' . 
                                                         $port . '::' . 
                                                         $pwd));

                                return true;

                            }

                        }

                    }

                }else{

                    return false;

                }

            }else{

                //
                // Initialize/refresh
                // optimization hash
                // (in session) to
                // streamline preparation
                // of database connection.
                $this->oCRNRSTN_USR->set_session_param(
                                     '_CRNRSTN_DB_CNFG', 
                                     md5($host . '::' . 
                                         $db . '::' . 
                                         $un . '::' . 
                                         $port . '::' . 
                                         $pwd));

                error_log(__LINE__ . 
                    ' mysqli conn mgr ' . 
                    __METHOD__ .
                    ':: [$tmp_db_db=' . 
                    $db . 
                    '].');

                //
                // If no values 
                // passed, but 
                // cache has 
                // been set, 
                // ...use cache. 
                return true;

            }

        }else{

            //
            // $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host');
            if($db == NULL){

                if(!($this->oCRNRSTN_USR->isset_session_param('_CRNRSTN_DB_DB'))){

                    foreach(self::$db_host[self::$appEnvKey] as 
                        $tmp_db_host => $tmp_host_array)
                    {

                        if($tmp_db_host == $this->crc_int32($host)){

                            foreach($tmp_host_array as 
                                $tmp_db_db => $tmp_db_array)
                            {

                                foreach($tmp_db_array as 
                                    $tmp_un => $oMYSQLI)
                                {

                                    //
                                    // Initialize/refresh 
                                    // session parameters. 
                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_ENV', self::$appEnvKey);
                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_HOST', $tmp_db_host);
                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_DB', $tmp_db_db);
                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_UN', $tmp_un);

                                    //
                                    // Initialize/refresh 
                                    // optimization hash 
                                    // (in session) to 
                                    // streamline preparation 
                                    // of database connection. 
                                    $this->oCRNRSTN_USR->set_session_param(
                                                         '_CRNRSTN_DB_CNFG', 
                                                         md5($host . '::' . 
                                                             $db . '::' . 
                                                             $un . '::' . 
                                                             $port . '::' . 
                                                             $pwd));

                                    return true;

                                }

                            }

                        }

                    }

                }else{

                    //
                    // Check for changes 
                    // from session 
                    // in HOST::DB. 
                    if($this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_HOST') == $this->crc_int32($host)){

                        //
                        // Initialize/refresh 
                        // optimization hash 
                        // (in session) to 
                        // streamline preparation 
                        // of database connection. 
                        $this->oCRNRSTN_USR->set_session_param(
                                             '_CRNRSTN_DB_CNFG', 
                                             md5($host . '::' . 
                                                 $db . '::' . 
                                                 $un . '::' . 
                                                 $port . '::' . 
                                                 $pwd));

                        //
                        // Use local object 
                        // cache...since it 
                        // has already 
                        // been set. 
                        return true;

                    }else{

                        //
                        // Something changed. 
                        //
                        // Session no longer 
                        // matches returnconnection() 
                        // input params. 
                        return false;

                    }

                }

            }else{

                if($un == NULL){

                    //
                    // $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database');
                    if(!($this->oCRNRSTN_USR->isset_session_param('_CRNRSTN_DB_UN'))){

                        foreach(self::$db_host[self::$appEnvKey] as 
                            $tmp_db_host => $tmp_host_array)
                        {

                            if($tmp_db_host == $this->crc_int32($host)){

                                foreach($tmp_host_array as 
                                    $tmp_db_db => $tmp_db_array)
                                {

                                    if($tmp_db_db == $this->crc_int32($db)){

                                        foreach($tmp_db_array as 
                                            $tmp_un => $oMYSQLI)
                                        {

                                            //
                                            // Initialize/refresh 
                                            // session parameters. 
                                            $this->oCRNRSTN_USR->set_session_param(
                                                                 '_CRNRSTN_DB_ENV', 
                                                                 self::$appEnvKey);
                                            $this->oCRNRSTN_USR->set_session_param(
                                                                 '_CRNRSTN_DB_HOST', 
                                                                 $tmp_db_host);
                                            $this->oCRNRSTN_USR->set_session_param(
                                                                 '_CRNRSTN_DB_DB', 
                                                                 $tmp_db_db);
                                            $this->oCRNRSTN_USR->set_session_param(
                                                                 '_CRNRSTN_DB_UN', 
                                                                 $tmp_un);

                                            //
                                            // Initialize/refresh 
                                            // optimization hash 
                                            // (in session) to 
                                            // streamline preparation 
                                            // of database connection. 
                                            $this->oCRNRSTN_USR->set_session_param(
                                                                 '_CRNRSTN_DB_CNFG', 
                                                                 md5($host . '::' . 
                                                                     $db . '::' . 
                                                                     $un . '::' . 
                                                                     $port . '::' . 
                                                                     $pwd));

                                            return true;

                                        }

                                    }

                                }

                            }

                        }

                    }else{

                        //
                        // Check for changes 
                        // from session 
                        // in HOST::DB. 
                        if($this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_HOST') == $this->crc_int32($host) && $this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_DB') == $this->crc_int32($db)){

                            //
                            // Initialize/refresh 
                            // optimization hash 
                            // (in session) to 
                            // streamline preparation 
                            // of database connection. 
                            $this->oCRNRSTN_USR->set_session_param(
                                                 '_CRNRSTN_DB_CNFG', 
                                                 md5($host . '::' . 
                                                     $db . '::' . 
                                                     $un . '::' . 
                                                     $port . '::' . 
                                                     $pwd));

                            //
                            // Use local object 
                            // cache...since it 
                            // has already 
                            // been set. 
                            return true;

                        }else{

                            //
                            // Something changed. 
                            //
                            // session no longer 
                            // matches returnconnection() 
                            // input params. 
                            return false;

                        }

                    }

                }else{

                    if($port == NULL && 
                        $pwd == NULL)
                    {

                        //
                        // $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database', 'user');
                        if($this->crc_int32($un) != $this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_UN')){

                            foreach(self::$db_host[self::$appEnvKey] as 
                                $tmp_db_host => $tmp_host_array)
                            {

                                if($tmp_db_host == $this->crc_int32($host)){

                                    foreach($tmp_host_array as 
                                        $tmp_db_db => $tmp_db_array)
                                    {

                                        if($tmp_db_db == $this->crc_int32($db)){

                                            foreach($tmp_db_array as 
                                                $tmp_un => $oMYSQLI)
                                            {

                                                if($tmp_un == $this->crc_int32($un)){

                                                    //
                                                    // Initialize/refresh 
                                                    // session parameters. 
                                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_ENV', self::$appEnvKey);
                                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_HOST', $tmp_db_host);
                                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_DB', $tmp_db_db);
                                                    $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_UN', $tmp_un);

                                                    //
                                                    // Initialize/refresh 
                                                    // optimization hash 
                                                    // (in session) to 
                                                    // streamline preparation 
                                                    // of database connection. 
                                                    $this->oCRNRSTN_USR->set_session_param(
                                                                         '_CRNRSTN_DB_CNFG', 
                                                                         md5($host . '::' . 
                                                                             $db . '::' . 
                                                                             $un . '::' . 
                                                                             $port . '::' . 
                                                                             $pwd));

                                                    return true;

                                                }

                                            }

                                        }

                                    }

                                }

                            }

                        }else{

                            //
                            // Check for changes 
                            // from session 
                            // in HOST::DB. 
                            if(($this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_HOST') == $this->crc_int32($host)) && 
                                ($this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_DB') == $this->crc_int32($db)))
                            {

                                //
                                // Initialize/refresh 
                                // optimization hash 
                                // (in session) to 
                                // streamline preparation 
                                // of database connection. 
                                $this->oCRNRSTN_USR->set_session_param(
                                                     '_CRNRSTN_DB_CNFG', 
                                                     md5($host . '::' . 
                                                         $db .'::' . 
                                                         $un . '::' . 
                                                         $port . '::' . 
                                                         $pwd));

                                //
                                // Use local object 
                                // cache...since it 
                                // has already 
                                // been set. 
                                return true;

                            }else{

                                //
                                // Something changed. 
                                //
                                // session no longer 
                                // matchesreturnConnection() 
                                // input params. 
                                return false;

                            }

                        }

                    }else{

                        if(($pwd == NULL) && 
                            ($port != NULL))
                        {

                            //
                            // CRNRSTN :: Lightsaber 
                            // environmental detection 
                            // and values from the 
                            // configuration file. 
                            //
                            // $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection(
                            //                                  'host', 
                            //                                  'database', 
                            //                                  'user', 
                            //                                  'port');
                            if($this->crc_int32($un) != $this->oCRNRSTN_USR->get_session_param('_CRNRSTN_DB_UN')){

                                foreach(self::$db_host[self::$appEnvKey] as 
                                    $tmp_db_host => $tmp_host_array)
                                {

                                    if($tmp_db_host == $this->crc_int32($host)){

                                        foreach($tmp_host_array as 
                                            $tmp_db_db => $tmp_db_array)
                                        {

                                            if($tmp_db_db == $this->crc_int32($db)){

                                                foreach($tmp_db_array as 
                                                    $tmp_un => $oMYSQLI)
                                                {

                                                    if($tmp_un == $this->crc_int32($un)){

                                                        //
                                                        // Initialize/refresh 
                                                        // session parameters. 
                                                        $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_ENV', self::$appEnvKey);
                                                        $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_HOST', $tmp_db_host);
                                                        $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_DB', $tmp_db_db);
                                                        $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_UN', $tmp_un);

                                                        //
                                                        // Log a notice if 
                                                        // database PORT from 
                                                        // the parameter 
                                                        // differs from 
                                                        // database PORT 
                                                        // in the 
                                                        // configuration file. 
                                                        //
                                                        // Use the value from 
                                                        // the parameter. 
                                                        if($port != self::$db_port[self::$appEnvKey][$tmp_db_host][$tmp_db_db][$tmp_un]){

                                                            $this->oCRNRSTN_USR->error_log('Database port from ' . 
                                                                                 'CRNRSTN :: configuration file ' . 
                                                                                 'differs from the programmatically ' . 
                                                                                 'provided value of (' . 
                                                                                 $port . ').', 
                                                                                 __LINE__, 
                                                                                 __METHOD__, 
                                                                                 __FILE__, 
                                                                                 CRNRSTN_DATABASE_CONNECTION);

                                                        }

                                                        //
                                                        // Initialize/refresh 
                                                        // optimization hash 
                                                        // (in session) to 
                                                        // streamline preparation 
                                                        // of database connection. 
                                                        $this->oCRNRSTN_USR->set_session_param(
                                                                             '_CRNRSTN_DB_CNFG', 
                                                                             md5($host . '::' . 
                                                                                 $db . '::' . 
                                                                                 $un . '::' . 
                                                                                 $port . '::' . 
                                                                                 $pwd));

                                                        return true;

                                                    }

                                                }

                                            }

                                        }

                                    }

                                }

                            }else{

                                //
                                // Initialize/refresh 
                                // optimization hash 
                                // (in session) to 
                                // streamline preparation 
                                // of database connection. 
                                $this->oCRNRSTN_USR->set_session_param(
                                                     '_CRNRSTN_DB_CNFG', 
                                                     md5($host . '::' . 
                                                         $db . '::' . 
                                                         $un . '::' . 
                                                         $port . '::' . 
                                                         $pwd));

                                //
                                // Use local object 
                                // cache...since it has 
                                // already been set. 
                                return true;

                            }

                        }else{

                            //
                            // $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database', 'user', 'port', 'pwd');
                            $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_ENV', self::$appEnvKey);
                            $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_HOST', $this->crc_int32($host));
                            $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_DB', $this->crc_int32($db));
                            $this->oCRNRSTN_USR->set_session_param('_CRNRSTN_DB_UN', $this->crc_int32($un));

                            self::$db_host[self::$appEnvKey][$this->crc_int32($host)][$this->crc_int32($db)][$this->crc_int32($un)] = $host;
                            self::$db_un[self::$appEnvKey][$this->crc_int32($host)][$this->crc_int32($db)][$this->crc_int32($un)] = $un;
                            self::$db_db[self::$appEnvKey][$this->crc_int32($host)][$this->crc_int32($db)][$this->crc_int32($un)] = $db;

                            //
                            // Initialize/refresh 
                            // optimization hash 
                            // (in session) to 
                            // streamline preparation 
                            // of database connection. 
                            $this->oCRNRSTN_USR->set_session_param(
                                                 '_CRNRSTN_DB_CNFG', 
                                                 md5($host . '::' . 
                                                     $db . '::' . 
                                                     $un . '::' . 
                                                     $port . '::' . 
                                                     $pwd));

                            return true;

                        }

                    }

                }

            }

        }

        return false;

    }

    public function closeConnection($mysqli)
    {

        if($mysqli){

            return $mysqli->close();

        }else{

            return false;

        }

    }

    public function returnConnection(
                    $host = NULL, 
                    $db = NULL, 
                    $un = NULL, 
                    $port = NULL, 
                    $pwd = NULL)
    {
        /**
         *$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database', 'user', 'port', 'password');
         *$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database', 'user', 'port');
         *$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database', 'user');
         *$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host', 'database');
         *$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection('host');
         *$mysqli = $oCRNRSTN_ENV->oMYSQLI_CONN_MGR->returnConnection();
         *
         * Establish database 
         * connectivity parameters. 
         *
         */
        try{

            if($this->prepDatabaseConfig(
                      $host, 
                      $db, 
                      $un, 
                      $port, 
                      $pwd))
            {

                if($port != ''){

                    self::$cache_db_port = (int) $port;

                }else{

                    self::$cache_db_port = self::$port;

                }

                if($pwd != ''){

                    self::$cache_db_pwd = $pwd;

                }else{

                    self::$cache_db_pwd = self::$pwd;

                }

                //
                // Instantiate a 
                // MySQLi connection 
                // class object. 
                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation 
                // of the MySQLi Database 
                // Connection object. 
                //
                //
                // 5
                //
                // Monday, July 15, 2024 @ 1955 hrs.
                //
                // $oMYSQLI = new crnrstn_mysqli_conn(
                //                self::$host, 
                //                self::$un, 
                //                self::$cache_db_pwd, 
                //                self::$db, 
                //                self::$cache_db_port, 
                //                $this->oCRNRSTN_USR);
                $oMYSQLI = $this->return_registered_resource(
                                  'new', 
                                  'crnrstn_mysqli_conn', 
                                  self::$host, 
                                  self::$un, 
                                  self::$cache_db_pwd, 
                                  self::$db, 
                                  self::$cache_db_port, 
                                  $this->oCRNRSTN_USR);

                //
                // Establish a 
                // database connection 
                // and return the 
                // connection handle. 
                self::$mysqli = $oMYSQLI->connReturn();

                return self::$mysqli;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: mysqli ' . 
                    'connection manager error :: ' . 
                    'failed to prepDatabaseConfig() ' . 
                    'for MySQL on server ' . 
                    $_SERVER['SERVER_NAME'] . ' (' . 
                    $_SERVER['SERVER_ADDR'] . 
                    ').');

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
             * Sunday, June 30, 2024 @ 1551 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            //
            // Return false.
            return false;

        }

    }

    public function get_conn_auth_data_wp($type)
    {

        switch($type){
            case 'db_name':

                return $this->wp_db_name();

            break;
            case 'db_user':

                return $this->wp_db_user();

            break;
            case 'db_password':

                return $this->wp_db_password();

            break;
            case 'db_host':

                return $this->wp_db_host();

            break;

        }

        return false;

    }

    public function processQuery(
                    $mysqli, 
                    $query, 
                    $resultMode = NULL)
    {

        try{

            if(isset($resultMode)){

                switch($resultMode){
                    case MYSQLI_USE_RESULT:

                        if($result = $mysqli->query($query, MYSQLI_USE_RESULT)){

                            return $result;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('CRNRSTN :: mysqli query ' . 
                                'error :: failed to execute query(). ' .
                                $mysqli->error);

                        }

                    break;
                    case MYSQLI_STORE_RESULT:

                        if($result = $mysqli->query($query, MYSQLI_STORE_RESULT)){

                            return $result;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('CRNRSTN :: mysqli ' . 
                                'query error :: failed to ' . 
                                'execute query(). ' . 
                                $mysqli->error);

                        }

                    break;
                    case MYSQLI_ASYNC:

                        if($result = $mysqli->query($query, MYSQLI_ASYNC)){

                            return $result;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('CRNRSTN :: mysqli ' . 
                                'query error :: failed to ' .
                                'execute query(). ' . 
                                $mysqli->error);

                        }

                    break;

                }

            }else{

                if($result = $mysqli->query($query)){

                    return $result;

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: mysqli ' . 
                        'query error :: failed to ' .
                        'execute query(). ' . 
                        $mysqli->error);

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
             * Sunday, June 30, 2024 @ 1551 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            //
            // Return false. 
            //
            // Should we return 
            // MySQLi obj, tho? 
            return false;

        }

        return false;

    }

    public function processMultiQuery(
                    $mysqli, 
                    $query)
    {

        try{

            if($mysqli){

                if($mysqli->multi_query($query)){

                    //
                    // Just return MySQLi 
                    // connection object 
                    // to have result 
                    // extracted later. 
                    return $mysqli;

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unable to process multi-query. [' . 
                        $mysqli->error . 
                        '] You may also want ' . 
                        'to check the path provided to ' . 
                        'add_database() in the CRNRSTN :: ' . 
                        'configuration file for this ' . 
                        'environment to confirm the ' . 
                        'database access credentials ' . 
                        'being used.');

                }

            }else{

                throw new Exception('Unable to process multi-' .
                'query due to provided ' .
                'mysqli object is false.');

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
             * Sunday, June 30, 2024 @ 1551 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            //
            // Return MySQLi 
            // connection object. 
            return $mysqli;

        }

    }

    public function __destruct()
    {

    }

}