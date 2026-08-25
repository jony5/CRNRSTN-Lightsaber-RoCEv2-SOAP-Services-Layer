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

/**
 * 
 *
 * CLASS DEFINITION :: crnrstn_fire_ftp_conn_manager
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: November 10, 2018 @ 1718 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Electrum :: 
 *                     Ezekiel 1:4 :: Fire 
 *                     (Lightning) FTP Connection 
 *                     Manager
 * DESCRIPTION      :: In support of file
 *                     transfers for the CRNRSTN ::
 *                     Lightsaber SOAP Services
 *                     Layer the CRNRSTN :: Fire
 *                     FTP Connection Manager is
 *                     pretty much just an
 *                     absolute fire SFTP/FTP
 *                     connection manager that
 *                     supports CRNRSTN :: Electrum.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 0836 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * Ezekiel 1:5a  And from the midst of 
 *               it [fire] there came 
 *               the likeness of four 
 *               living creatures. 
 *
 */
class crnrstn_fire_ftp_conn_manager extends crnrstn_user 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_fire_ftp_conn_manager 
     *       class object by applying an 
     *       extension of the crnrstn_user object, 
     *       by deleting the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Saturday, June 13, 2026 @ 2123 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations 
     *       to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0529 hrs.
     *
     */

    public $lightning_FTP_conn_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        $clr_ssl_msg = 'New Four Living ' . 
                       'Creatures Fire FTP ' . 
                       'Connection Mgr Instantiated.';
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

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function establishConnection(
                     $endpoint_data, 
                     $endpoint_id)
    {

        /**
         * $oWCR->addAttribute('FTP_SERVER', '172.16.195.132');
         * $oWCR->addAttribute('FTP_USERNAME', 'jony5');
         * $oWCR->addAttribute('FTP_PASSWORD', 'gY96sb21');
         * $oWCR->addAttribute('FTP_PORT', 21);
         * $oWCR->addAttribute('FTP_TIMEOUT', 90);
         * $oWCR->addAttribute('FTP_IS_SSL', false);
         * $oWCR->addAttribute('FTP_USE_PASV', false);
         * $oWCR->addAttribute('FTP_USE_PASV_ADDR', false);
         * $oWCR->addAttribute('FTP_DISABLE_AUTOSEEK', true);
         * $oWCR->addAttribute('FTP_DIR_PATH', '../../var/www/html/_backup_test/');
         *
         */

        $tmp_FTP_SERVER_WCR           = $this->get_resource(
                                               'FTP_SERVER', 
                                               $endpoint_data);
        $tmp_FTP_USERNAME_WCR         = $this->get_resource(
                                               'FTP_USERNAME', 
                                               $endpoint_data);
        $tmp_FTP_PASSWORD_WCR         = $this->get_resource(
                                               'FTP_PASSWORD', 
                                               $endpoint_data);
        $tmp_FTP_PORT_WCR             = $this->get_resource(
                                               'FTP_PORT', 
                                               $endpoint_data);
        $tmp_FTP_TIMEOUT_WCR          = $this->get_resource(
                                               'FTP_TIMEOUT', 
                                               $endpoint_data);
        $tmp_FTP_IS_SSL_WCR           = $this->get_resource(
                                               'FTP_IS_SSL', 
                                               $endpoint_data);
        $tmp_FTP_USE_PASV_WCR         = $this->get_resource(
                                               'FTP_USE_PASV', 
                                               $endpoint_data);
        $tmp_FTP_USE_PASV_ADDR_WCR    = $this->get_resource(
                                               'FTP_USE_PASV_ADDR', 
                                               $endpoint_data);
        $tmp_FTP_DISABLE_AUTOSEEK_WCR = $this->get_resource(
                                               'FTP_DISABLE_AUTOSEEK', 
                                               $endpoint_data);

        /* $tmp_endpoint_id = md5(
         *                     $tmp_FTP_SERVER_WCR . 
         *                     $tmp_FTP_USERNAME_WCR . 
         *                     $tmp_FTP_PASSWORD_WCR . 
         *                     $tmp_FTP_PORT_WCR);
         *
         */

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Do we have existing 
             * connection for 
             * this endpoint? 
             *
             */
            if(isset($this->lightning_FTP_conn_ARRAY[$endpoint_id])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Consider a ping for 
                 * $oLightning_conn as 
                 * in if($oLightning_conn->conn_ping(ftp_conn)){ Proceed...
                 *
                 *return $this->lightning_FTP_conn_ARRAY[$tmp_endpoint_serial];
                 *
                 */
                $clr_ssl_msg = 'Four Living ' . 
                               'Creatures - Connection exists already.';
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

                //return $tmp_endpoint_serial;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Confirm that there 
                 * are not too many 
                 * FTP connections already. 
                 *
                 *if($this->too_many_connections(
                 *          $endpoint_id, 
                 *          $oElectrum, 
                 *          $oDATA, 
                 *          $oDB_RESP)){
                 * 
                 *    $this->transaction_status = 'Too many active connections ' . 
                 *                                'to this endpoint. Connection ' . 
                 *                                'attempt suppressed.';
                 *
                 *    return false;
                 *}
                 *
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum ::
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) FTP Connection 
                 * Objectification. 
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2022 hrs.
                 *
                 * $oLightning_conn = new crnrstn_lightning_ftp_conn($this->oCRNRSTN_USR);
                 *
                 * CLR-SSL Resource Registry
                 * Prototyping (2024-2026):
                 * $oLightning_conn = $this->return_registered_resource(
                 *                           'new',
                 *                           'crnrstn_lightning_ftp_conn',
                 *                           $this->oCRNRSTN_USR);
                 *
                 */

                $spice_salt_mem_ptr = NULL;
                // 5 :: Saturday, August 22, 2026 @ 0536 hrs.
                $this->compound_ointment(
                       $spice_salt_mem_ptr,
                       'crnrstn_lightning_ftp_conn');
                $this->anoint(
                       'crnrstn_lightning_ftp_conn',
                       $oLightning_conn);

                $oLightning_conn->save_connection_datum(
                                  $tmp_FTP_SERVER_WCR, 
                                  $tmp_FTP_USERNAME_WCR, 
                                  $tmp_FTP_PASSWORD_WCR, 
                                  $tmp_FTP_PORT_WCR, 
                                  $tmp_FTP_TIMEOUT_WCR);

                if($tmp_FTP_IS_SSL_WCR)
                    $oLightning_conn->enable_ssl(true);

                $oLightning_conn->establish_connection();

                if($tmp_FTP_USE_PASV_WCR){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Pro 
                     * Tip: Call the following method, 
                     *      $oLightning_conn->enable_passive() 
                     *      only after calling 
                     *      $oLightning_conn->establish_connection().
                     *
                     */
                    $oLightning_conn->enable_passive(true);

                    if(!$tmp_FTP_USE_PASV_ADDR_WCR)
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Pro 
                         * Tip: FTP_USEPASVADDRESS is enabled 
                         *      by default. We set 
                         *      FTP_USEPASVADDRESS to false 
                         *      in order to disable it. 
                         *
                         */
                        $oLightning_conn->set_option(FTP_USEPASVADDRESS, false);

                }

                if($tmp_FTP_DISABLE_AUTOSEEK_WCR)
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Pro 
                     * Tip: FTP_AUTOSEEK is enabled 
                     *      by default. We set 
                     *      FTP_AUTOSEEK to false 
                     *      in order to disable it. 
                     *
                     */
                    $oLightning_conn->set_option(FTP_AUTOSEEK, false);

                //$this->lightning_FTP_conn_ARRAY[$tmp_endpoint_serial] = $oLightning_conn->return_ftp_stream();
                $this->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_conn;

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
             * Sunday, June 30, 2024 @ 1602 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

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
    function return_lightningFTPConn($endpoint_serial)
    {

        return $this->lightning_FTP_conn_ARRAY[$endpoint_serial];

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
    function initialize_ftp_endpoint(
             $flow_type, 
             $endpoint_data, 
             $endpoint_id)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * For this end point, 
             * perform generic 
             * connection open 
             * protocols. 
             *
             */
            $this->establishConnection(
                   $endpoint_data, 
                   $endpoint_id);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * If the connection is 
             * established, for the SOURCE 
             * endpoint, do I have read access? 
             *
             */
            if(!isset($this->lightning_FTP_conn_ARRAY[$endpoint_id])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to establish FTP connection.');

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Am I SOURCE or 
                 * DESTINATION? 
                 *
                 */
                switch($flow_type){
                    case 'SOURCE':

                        $tmp_read_permissions = false;
                        $tmp_FTP_DIR_PATH_WCR = $this->get_resource(
                                                'FTP_DIR_PATH', 
                                                $endpoint_data);
                        $tmp_FTP_SERVER_WCR = $this->get_resource(
                                                     'FTP_SERVER', 
                                                     $endpoint_data);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have established 
                         * a valid FTP conn 
                         * to a source. Now just 
                         * verify that we 
                         * can read. 
                         *
                         */
                        $oLightning_ftp_conn = $this->lightning_FTP_conn_ARRAY[$endpoint_id];
                        $tmp_ftp_conn        = $oLightning_ftp_conn->return_ftp_stream();
                        $tmp_R_cluster_id   = $this->get_crnrstn('R_cluster_id');

                        $_SESSION['CRNRSTN_' . $this->crc_int32($tmp_R_cluster_id)]['CRNRSTN_EXCEPTION_PREFIX'] = 'The CRNRSTN :: Electrum process ' . 
                                                                                                                'has experienced permissions ' . 
                                                                                                                'related error as the ' . 
                                                                                                                $tmp_FTP_SERVER_WCR . 
                                                                                                                ' SOURCE FTP directory, ' . 
                                                                                                                $tmp_FTP_DIR_PATH_WCR . 
                                                                                                                ', is NOT readable by ftp_nlist() ';
                        $endpoint_contents = ftp_nlist($tmp_ftp_conn, $tmp_FTP_DIR_PATH_WCR);
                        $_SESSION['CRNRSTN_' . $this->crc_int32($tmp_R_cluster_id)]['CRNRSTN_EXCEPTION_PREFIX'] = '';

                        if($endpoint_contents){

                            $tmp_read_permissions = true;

                        }

                        if($tmp_read_permissions){

                            $clr_ssl_msg = 'Electrum FTP success ' . 
                                           'on read permissions.';
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

                            $oLightning_ftp_conn->isValid                 = true;
                            $this->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_ftp_conn;

                            return true;

                        }else{

                            $tmp_FTP_SERVER_WCR = $this->get_resource(
                                                         'FTP_SERVER', 
                                                         $endpoint_data);
                            $tmp_FTP_USERNAME_WCR = $this->get_resource(
                                                           'FTP_USERNAME', 
                                                           $endpoint_data);
                            $tmp_FTP_PORT_WCR = $this->get_resource(
                                                       'FTP_PORT', 
                                                       $endpoint_data);

                            $oLightning_ftp_conn->isValid                 = false;
                            $this->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_ftp_conn;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('Unable to read [' . 
                                $tmp_FTP_DIR_PATH_WCR . 
                                '] from FTP endpoint ' . 
                                $tmp_FTP_SERVER_WCR . '::' . 
                                $tmp_FTP_USERNAME_WCR . ' on port ' . 
                                $tmp_FTP_PORT_WCR . 
                                '.');

                        }

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * DESTINATION FTP.
                         *
                         */
                        $clr_ssl_msg = 'TODO :: Consider FTP ' . 
                                       'destination preload ' . 
                                       'integrity validation check...';
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

                        $oLightning_ftp_conn                          = $this->lightning_FTP_conn_ARRAY[$endpoint_id];
                        $oLightning_ftp_conn->isValid                 = true;
                        $this->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_ftp_conn;

                        return true;

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
             * Sunday, June 30, 2024 @ 1603 hrs.
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