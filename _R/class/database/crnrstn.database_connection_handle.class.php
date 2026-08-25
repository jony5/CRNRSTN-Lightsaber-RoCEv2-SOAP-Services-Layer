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
 * CLASS DEFINITION :: crnrstn_database_connection_handle
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, July 13, 2020 @ 0705 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQL
 *                     Database Connection
 *                     Grip/Management class
 *                     object for the
 *                     CRNRSTN :: Lightsaber
 *                     MySQL Database Integrations
 *                     Services Layer
 * DESCRIPTION      :: Within the CRNRSTN :: Database
 *                     Services Layer, the CRNRSTN ::
 *                     Database Connection Handle
 *                     grips all MySQLi database
 *                     connection objects for the CRNRSTN ::
 *                     Lightsaber SOAP Services Layer.
 *
 *                     This class also gets a handle
 *                     on MySQLi database connection
 *                     objects for any application
 *                     or service that is built on top
 *                     of CRNRSTN :: Lightsaber and
 *                     that relies upon just the same
 *                     for all of its MySQLi database
 *                     connection objects.
 *
 *
 *                     5
 *
 *                     Friday, July 26, 2024 @ 0445 hrs.
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
class crnrstn_database_connection_handle extends crnrstn
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_database_connection_handle 
     *       class object by applying an 
     *       extension of the crnrstn_user object, 
     *       by deleting the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Wednesday, June 17, 2026 @ 2212 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We changed the
     *       crnrstn_database_connection_handle
     *       class object definition so that it
     *       extends crnrstn and not the
     *       crnrstn_user class object as we
     *       restart CLR-SSL Database Services
     *       Layer integrations development
     *       from scratch.
     *       5 :: Sunday, August 16, 2026 @ 0508 hrs.
     *
     */

    protected $connection_serial;
    public $oConnection;

    public $version_mysqli;

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
         * Edit: Changed the name of 
         *       the crnrstn_database_conn_handle 
         *       class definition to 
         *       crnrstn_database_connection_handle. 
         *       5 :: Wednesday, June 17, 2026 @ 2206 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed the name of 
         *       the crnrstn_database_connection_handle 
         *       file from 
         *       crnrstn.database_conn_handle.class.php
         *       to crnrstn.database_connection_handle.class.php. 
         *       5 :: Wednesday, June 17, 2026 @ 2208 hrs.
         *
         */

    }

    /**
     * R :: Content pending. 
     * 
     * @param
     * @return
     * @access public
     *
     */
    function load_connection_serial($tmp_mysqli_serial)
    {

        $this->connection_serial = $tmp_mysqli_serial;

    }

    /**
     * R :: Content pending. 
     * 
     * @param
     * @return
     * @access public
     *
     */
    function load_connection_obj($mysqli)
    {

        $this->oConnection = $mysqli;

        if(is_object($this->oConnection)){

            $version = explode('.', $this->oConnection->server_info);
            $patch = '';

            $tmp_array = str_split($version[2]);

            $tmp_size = sizeof($tmp_array);

            for($i = 0; $i < $tmp_size; $i++){

                if(is_numeric($tmp_array[$i])){

                    $patch .= $tmp_array[$i];

                }else{

                    $i = $tmp_size + 1;

                }

            }

            if(strlen($patch) > 0){

                $tmp_version_mysqli = $version[0] . '.' . $version[1] . '.' . $patch;
                $this->input_data_value_simple($tmp_version_mysqli, 'version_mysqli');

            }else{

                $tmp_version_mysqli = $version[0] . '.' . $version[1];
                $this->input_data_value_simple($tmp_version_mysqli, 'version_mysqli');

            }

        }

        return false;

        /*
        // 5 ::
        //
        // Select MySQLi Properties:

            int           $affected_rows;
            static int    $connect_errno;
            static string $connect_error;
            int           $errno;
            array         $error_list;
            string        $error;
            int           $field_count;
            string        $client_info;
            int           $client_version;
            string        $host_info;
            string        $protocol_version;
            string        $server_info;
            int           $server_version;
            string        $info;
            mixed         $insert_id;
            string        $sqlstate;
            int           $thread_id;
            int           $warning_count;

            mysqli_stat() returns
                a string containing
                information similar
                to that provided by the
                'mysqladmin status' command.

                This includes uptime in
                seconds and the number of
                running threads, questions,
                reloads, and open tables.
                Here is an explanation of
                the values that appear in
                connection->stat()
                returned string.

                It was taken from Ai Hua's
                April 29, 2006 answer on
                http://forums.mysql.com/read.php?12,86570,86570.

                Uptime       -- The number of
                                seconds the MySQL
                                server has
                                been running.

                Threads      -- The number of active
                                threads (clients).

                Questions    -- The number of questions
                                (queries) from clients
                                since the server
                                was started.

                Slow queries -- The number of queries
                                that have taken more
                                than long_query_time seconds.

                Opens        -- The number of tables
                                the server has opened.

                Flush tables -- The number of flush-*,
                                refresh, and reload
                                commands the server
                                has executed.

                Open tables  -- The number of tables
                                that currently are open.

                Queries per
                second avg   -- Questions divided by Uptime

                mysqli_get_connection_stats($link)

                Don't forget that "mysqlnd.collect_statistics"
                must be set to "1" in your ini config to use
                this method.

                print_r(mysqli_get_connection_stats($link));

                ...or...

                $result = $mysqli->query('SHOW SESSION STATUS;', MYSQLI_USE_RESULT);

                while ($row = $result->fetch_assoc()){

                    $array[$row['Variable_name']] = $row['Value'];

                }

                $result->close();

                print_r($array);

                printf("Client library version: %s\n", mysqli_get_client_info());


        5

        Friday, July 26, 2024 @ 0432 hrs.

        */

    }

    /**
     * R :: Content pending. 
     * 
     * @param
     * @return
     * @access public
     *
     */
    function return_conn_object($type = 'mysqli')
    {

        try{

            if(isset($this->oConnection)){

                return $this->oConnection;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('MYSQLI database ' . 
                    'connection object not set. Unable to ' . 
                    'return on server ' . $_SERVER['SERVER_NAME'] . 
                    ' (' . $_SERVER['SERVER_ADDR'] . ').');

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
    function returnConnSerial()
    {

        try{

            if(isset($this->connection_serial)){

                return $this->connection_serial;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('MYSQLI database ' .
                'connection object serialization is ' .
                'not set. Unable to return serial ' .
                'for connection on server ' . 
                $_SERVER['SERVER_NAME'] .
                ' (' . 
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
             * Sunday, June 30, 2024 @ 1629 hrs.
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
    function __destruct()
    {

    }

}