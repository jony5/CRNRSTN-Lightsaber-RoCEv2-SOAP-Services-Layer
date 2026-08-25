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

namespace networking\ftp;

use CRNRSTN\crnrstn_user;
use CRNRSTN\Exception;
use const CRNRSTN\CRNRSTN_ELECTRUM;

/**
 * 
 *
 * CLASS DEFINITION :: crnrstn_lightning_ftp_conn
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: November 10, 2018 @ 1730 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Electrum :: 
 *                     Ezekiel 1:4 :: Lightning 
 *                     (Fire) FTP Connection 
 *                     Objectification
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     CRNRSTN :: Lightening FTP
 *                     Connection class object
 *                     is the objectification of
 *                     an SFTP/FTP connection...,
 *                     as being straight
 *                     lightening fire, ...and bright.
 *
 *
 *                     5
 *
 *                     Monday, July, 29, 2024 @ 0506 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * Ezekiel 1:13b  And the fire was 
 *                bright; and out of 
 *                the fire went 
 *                forth lightening. 
 *
 */
class crnrstn_lightning_ftp_conn extends crnrstn_user 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_lightning_ftp_conn 
     *       class object by applying an 
     *       extension of the crnrstn_user object, 
     *       by deleting the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Sunday, June 14, 2026 @ 1140 hrs.
     *
     */

    protected $ftp_server;
    protected $ftp_username;
    protected $ftp_password;
    protected $ftp_port;
    protected $ftp_timeout;

    protected $ftp_is_ssl = false;

    protected $ftp_conn_id;
    protected $ftp_login_result;
    public $isValid = false;
    public $connection_status = 'new';
    public $connection_status_log = array();
    protected $start_time_micro;
    protected $start_time_timestamp;
    protected $elapsed_time_at_start;

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        $this->start_time_micro = $this->return_micro_time();
        $this->start_time_timestamp = $this->return_query_date_time_stamp();
        $this->elapsed_time_at_start = $this->wall_time();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_start_time_timestamp()
    {

        return $this->start_time_timestamp;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_elapsed_time_at_start()
    {

        return $this->elapsed_time_at_start;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_start_time_micro()
    {

        return $this->start_time_micro;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_ftp_stream()
    {

        return $this->ftp_conn_id;

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
    function set_option(
             $option, 
             $value)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * FTP_TIMEOUT_SEC
         * FTP_AUTOSEEK
         * FTP_USEPASVADDRESS
         *
         */

        try{

            if(!ftp_set_option(
                $this->ftp_conn_id, 
                $option, 
                $value))
            {

                $this->log_connection_status(
                       'error :: setting option [' . 
                       $option . '] to value [' . 
                       $value . '].');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('An error was experienced ' . 
                    'while setting option [' . 
                    $option . '] to value [' . 
                    $value . '] for ftp connection with ' . 
                    $this->ftp_server . ' at ' . 
                    $this->ftp_port . '.');

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
             * Sunday, June 30, 2024 @ 1604 hrs.
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
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function save_connection_datum(
             $FTP_SERVER_WCR, 
             $FTP_USERNAME_WCR, 
             $FTP_PASSWORD_WCR, 
             $FTP_PORT_WCR, 
             $FTP_TIMEOUT_WCR)
    {

        $this->ftp_server   = $FTP_SERVER_WCR;
        $this->ftp_username = $FTP_USERNAME_WCR;
        $this->ftp_password = $FTP_PASSWORD_WCR;
        $this->ftp_port     = $FTP_PORT_WCR;
        $this->ftp_timeout  = $FTP_TIMEOUT_WCR;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function enable_ssl($FTP_IS_SSL_WCR)
    {

        $this->ftp_is_ssl = $FTP_IS_SSL_WCR;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function establish_connection()
    {
        $this->error_log('Electrum ESTABLISHING ' . 
                             'FTP CONNECTION.', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Establish and 
         * return FTP 
         * connection. 
         *
         */
        try{

            $tmp_option = ' ';

            if($this->ftp_is_ssl){

                $this->error_log('SSL CONNECT.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

                $this->ftp_conn_id = ftp_ssl_connect(
                                     $this->ftp_server, 
                                     $this->ftp_port, 
                                     $this->ftp_timeout);

            }else{

                $this->error_log('NON-SSL CONNECT.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

                $this->ftp_conn_id = ftp_connect(
                                     $this->ftp_server, 
                                     $this->ftp_port, 
                                     $this->ftp_timeout);

            }

            if(!$this->ftp_conn_id){

                if($this->ftp_is_ssl){

                    $tmp_option = ' secure ';

                }

                $this->log_connection_status('error :: connection initialization');

                $this->error_log('CONNECTION ERROR.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('An error was experienced ' . 
                    'while attempting to open a' . 
                    $tmp_option . 
                    'FTP connection with ' . 
                    $this->ftp_server . ' at ' . 
                    $this->ftp_port . '.');

            }else{

                $this->ftp_login_result = ftp_login(
                                          $this->ftp_conn_id, 
                                          $this->ftp_username, 
                                          $this->ftp_password);

                if(!$this->ftp_login_result){

                    $this->error_log('LOGIN ERROR.', 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                    $this->log_connection_status('error :: connection ' . 
                           'login authorization');

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('An error was experienced ' . 
                        'while attempting to log into an open ' . 
                        $tmp_option . 
                        ' FTP connection with ' . 
                        $this->ftp_server . '::' . 
                        $this->ftp_username . ' at ' . 
                        $this->ftp_port . '.');

                }else{

                    $this->start_time_micro = $this->return_micro_time();
                    $this->start_time_timestamp = $this->return_query_date_time_stamp();
                    $this->elapsed_time_at_start = $this->wall_time();

                    $this->log_connection_status('ready');

                    $this->error_log('Electrum FTP ' . 
                                         'CONNECTION SUCCESS for ' . 
                                         $this->ftp_username . '!', 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1604 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            //
            // Return FALSE. 
            return false;
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
    function enable_passive($is_passive = false)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Turn on 
             * passive mode. 
             *
             */
            if(!ftp_pasv(
                $this->ftp_conn_id, 
                $is_passive))
            {

                $this->log_connection_status('error :: enabling ' . 
                       'passive mode');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('An error was experienced ' . 
                    'while enabling passive mode ' . 
                    'for ftp connection with ' . 
                    $this->ftp_server . ' at ' . 
                    $this->ftp_port . '.');

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
             * Sunday, June 30, 2024 @ 1626 hrs.
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
     * @return
     * @access public
     *
     */
    function log_connection_status($str)
    {

        $this->connection_status = $str;
        $this->connection_status_log[] = $str;

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