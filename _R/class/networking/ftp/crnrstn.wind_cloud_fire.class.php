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
use CRNRSTN\RecursiveDirectoryIterator;
use CRNRSTN\RecursiveIteratorIterator;
use const CRNRSTN\CRNRSTN_CHANNEL_SOAP;
use const CRNRSTN\CRNRSTN_ELECTRUM;
use const CRNRSTN\CRNRSTN_ELECTRUM_THREAD;
use const CRNRSTN\CRNRSTN_ENCRYPT_TUNNEL;

/**
 * 
 *
 * CLASS DEFINITION :: crnrstn_wind_cloud_fire
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: November 9, 2018 @ 1117 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Electrum ::
 *                     Ezekiel 1:4 :: Wind Cloud 
 *                     Fire Objectification
 * DESCRIPTION      :: CRNRSTN :: Wind Cloud Fire,
 *                     or simply:
 *
 *                     CRNRSTN :: Electrum,
 *
 *                     is a robust SFTP, FTP, and 
 *                     local directory file movement, 
 *                     file management, and system 
 *                     automation and performance 
 *                     reporting application 
 *                     architecture that provides 
 *                     support for the server's 
 *                     file system universe and 
 *                     is powered by SOAP. 
 *
 *                     CRNRSTN :: Wind Cloud Fire 
 *                     (Electrum) has families of 
 *                     methods from various 
 *                     supporting objects, such as 
 *                     the CRNRSTN :: Lightening 
 *                     FTP Connection class object. 
 *
 *                     These method families are 
 *                     functionally complete, and 
 *                     when put together by a 
 *                     skilled engineer or 
 *                     application architect are 
 *                     able to support headless 
 *                     cron job fired multi-step 
 *                     and multi-channel data 
 *                     movement processes 
 *                     such as: 
 *
 *                       - Moving any read
 *                         accessible file or
 *                         files from any SFTP or
 *                         FTP endpoint directory
 *                         to any local server
 *                         file system directory
 *                         where there are
 *                         write permissions.
 *
 *                       - Moving any read
 *                         accessible file or
 *                         files from any local
 *                         server file system
 *                         directory to any SFTP
 *                         or FTP endpoint
 *                         directory where there
 *                         are write permissions.
 *
 *                       - Moving any read
 *                         accessible file or
 *                         files from any SFTP or
 *                         FTP endpoint directory
 *                         to any SFTP or FTP
 *                         endpoint directory
 *                         where there are write
 *                         permissions.
 *
 *                         Please note that
 *                         CRNRSTN :: Wind Cloud Fire
 *                         (CRNRSTN :: Electrum) needs
 *                         to be given write
 *                         permissions to a /_tmp
 *                         folder on the local
 *                         server's file system in
 *                         order to support moving
 *                         a file or files from a
 *                         SFTP/FTP read accessed
 *                         directory to a SFTP/FTP
 *                         write accessed directory.
 *
 *                         Electrum will quietly
 *                         "stitch" two (2)
 *                         jobs together to satisfy
 *                         this request, and so the
 *                         detailed file movement
 *                         performance reporting
 *                         still applies:
 *
 *                            1) Moving read
 *                               accessed SFTP or
 *                               FTP file data to
 *                               a local /_tmp file
 *                               system directory and
 *                               with the data being
 *                               written with a system
 *                               generated .tmp file name,
 *                               and then
 *
 *                            2) moving the read
 *                               accessible .tmp file
 *                               or files from the /tmp
 *                               local server file system
 *                               directory to any SFTP
 *                               or FTP endpoint
 *                               directory where there
 *                               are write permissions,
 *                               and where the file is
 *                               written according to
 *                               the original file name.
 *
 *                        This is CRNRSTN :: Electrum ::
 *
 *
 *                        5
 *
 *                        Monday, July 29, 2024 @ 0605 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * Ezekiel 1:4  And I looked, and there
 *              came a storm wind from
 *              the north, a great cloud
 *              and a fire flashing
 *              incessantly; and there was
 *              a brightness around it,
 *              and from the midst of it
 *              there was something like
 *              the sight of electrum,
 *              from the midst of
 *              the fire.
 *
 */
class crnrstn_wind_cloud_fire extends crnrstn_user 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_wind_cloud_fire 
     *       class object by applying an 
     *       extension of the crnrstn object. 
     *       5 :: Monday, April 13, 2026 @ 0230 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the 
     *       crnrstn_wind_cloud_fire 
     *       class object by changing to an 
     *       extension of the crnrstn_user object 
     *       from the crnrstn object, by deleting 
     *       the __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Saturday, June 13, 2026 @ 2150 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations 
     *       to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0530 hrs.
     *
     */

    protected $oElectrum_STATS;
    private static $oFourLivingCreatures_FTP;
    protected $oLighting_bolt_ARRAY = array();
    protected $oWheel_high_awesome_ARRAY = array();

    public $electrum_process_id;
    protected $preload_spoiled_ARRAY = array();
    protected $preload_endpoint_validation_fail = array();
    protected $asset_transfer_suppression_ARRAY = array();
    protected $endpoint_isValid_ARRAY = array();
    protected $destination_transfer_cnt_ARRAY = array();
    protected $asset_suppressed_ARRAY = array();
    protected $processed_source_ARRAY = array();
    protected $processed_destination_ARRAY = array();
    protected $flag_source_ARRAY = array();
    protected $endpoint_ts_serial_sequence_ARRAY = array();

    protected $execute_to_destination_authorization;
    protected $execute_from_source_authorization;

    protected $queued_endpoint_ARRAY = array();
    protected $source_total_filesize_ARRAY = array();

    protected $FtpToFtp_tmp_dirPath;
    protected $timestamp_nom_pattern;
    protected $global_execute_authorization = true;
    protected $global_execute_authorization_reason = '';

    protected $directory_content_ARRAY = array();
    protected $directory_dir_content_ARRAY = array();

    protected $source_file_size_at_path_ARRAY = array();
    protected $source_file_lastaccess_at_path_ARRAY = array();
    protected $source_file_lastmodify_at_path_ARRAY = array();
    protected $source_file_blocksize_at_path_ARRAY = array();
    protected $source_file_blockallocate_at_path_ARRAY = array();
    protected $source_file_fullpermissions_at_path_ARRAY = array();
    protected $source_file_octalpermissions_at_path_ARRAY = array();
    protected $source_file_uid_STRING_at_path_ARRAY = array();
    protected $source_file_gid_STRING_at_path_ARRAY = array();
    protected $source_file_uid_INT_at_path_ARRAY = array();
    protected $source_file_gid_INT_at_path_ARRAY = array();

    protected $max_disk_storage_utilization = 90;

    protected $ftp_recursive_sniffed_directory_ARRAY = array();

    protected $execution_batch_serial;

    protected $notifications_email_pipe_delim;
    protected $notifications_sender;
    protected $notifications_replyto_pipe_delim;
    protected $notifications_cc_pipe_delim;
    protected $notifications_bcc_pipe_delim;

    protected $notifications_profile;
    protected $notifications_SOAP_endpoint;
    protected $notifications_email_protocol;

    protected $secret_key_override;
    protected $cipher_override;
    protected $hmac_algorithm_override;
    protected $options_bitwise_override;

    protected $startTime;
    protected $endTime;
    protected $elapsedTime;

    protected $exclude_source_dir_from_copy = false;

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function __construct(
             $FtpToFtp_tmp_dirPath, 
             $timestamp_versioning_pattern)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of 
             * the CRNRSTN :: Electrum :: 
             * Ezekiel 1:4 :: File Transfer 
             * Data Statistician class object. 
             *
             *
             * 5 :: Monday, July 15, 2024 @ 2024 hrs.
             *
             * $this->oElectrum_STATS = new crnrstn_electrum_the_statistician($oCRNRSTN_USR);
             *
             */
            $this->oElectrum_STATS = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_electrum_the_statistician');

            // START_ELECTRUM_PROCESS_ID
            $this->electrum_process_id = $this->generate_new_key(100);
            $this->startTime           = $this->return_micro_time();
            $this->elapsedTime         = $this->elapsed_delta_time('ELECTRUM_PERFORMANCE_CLIENT');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Batch execution 
             * serialization. 
             *
             */
            $this->execution_batch_serial = $this->generate_new_key(100);

            $this->oElectrum_STATS->init_electrum(
                                    $this->electrum_process_id, 
                                    $this->execution_batch_serial, 
                                    $this->startTime, 
                                    $timestamp_versioning_pattern);

            $this->FtpToFtp_tmp_dirPath  = $FtpToFtp_tmp_dirPath;
            $this->timestamp_nom_pattern = $timestamp_versioning_pattern;

            if($this->validate_DIR_endpoint(
                      'DESTINATION', 
                      $this->FtpToFtp_tmp_dirPath))
            {

                if($this->validate_DIR_endpoint(
                          'SOURCE', 
                          $this->FtpToFtp_tmp_dirPath))
                {

                }else{

                    $this->global_execute_authorization        = false;
                    $this->global_execute_authorization_reason = 'ERR420.5 - Invalid read ' . 
                                                                 'permissions at _tmp directory ' . 
                                                                 'path passed to oCRNRSTN_USR->' . 
                                                                 'initElectrum_FileCopy().';

                    if(is_dir($this->FtpToFtp_tmp_dirPath)){

                        $tmp_current_perms = substr(decoct(fileperms($this->FtpToFtp_tmp_dirPath)), 2);

                    }else{

                        $tmp_current_perms = 'invalid path';

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The CRNRSTN :: Electrum ' . 
                        'constructor failed due to the ' . 
                        'provided temporary directory endpoint (' . 
                        $this->FtpToFtp_tmp_dirPath . 
                        ') being an invalid source (' . 
                        $tmp_current_perms . 
                        ') for temporary asset retrieval.');

                }

            }else{

                $this->global_execute_authorization        = false;
                $this->global_execute_authorization_reason = 'ERR420.0 - Invalid write ' . 
                                                             'permissions at _tmp directory ' . 
                                                             'path passed to oCRNRSTN_USR->' . 
                                                             'initElectrum_FileCopy().';

                if(is_dir($this->FtpToFtp_tmp_dirPath)){

                    $tmp_current_perms = substr(decoct(fileperms($this->FtpToFtp_tmp_dirPath)), 2);

                }else{

                    $tmp_current_perms = 'invalid path';

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('The CRNRSTN :: Electrum constructor ' . 
                    'failed due to the provided ' . 
                    'temporary directory endpoint (' . 
                    $this->FtpToFtp_tmp_dirPath . 
                    ') being an invalid destination (' . 
                    $tmp_current_perms . 
                    ') for temporary asset storage.');

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false. 
             *
             */
            return false;

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
    function copyFilesToFolder($custom_folder_name)
    {

        $this->oElectrum_STATS->copyFilesToFolder($custom_folder_name);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_moveSourceContentsOnly()
    {

        return $this->exclude_source_dir_from_copy;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function moveContentInSourceDirOnly($excludeContainingDir)
    {

        $this->exclude_source_dir_from_copy = $excludeContainingDir;
        $this->oElectrum_STATS->moveContentOnly($excludeContainingDir);

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
    private function return_oElectrumPerfReportSOAP(
                     $execution_serial, 
                     $batch_serial)
    {

        $this->secret_key_override      = $this->return_secret_key_override($this->notifications_SOAP_endpoint);
        $this->cipher_override          = $this->return_cipher_override($this->notifications_SOAP_endpoint);
        $this->hmac_algorithm_override  = $this->return_hmac_algorithm_override($this->notifications_SOAP_endpoint);
        $this->options_bitwise_override = $this->return_options_bitwise_override($this->notifications_SOAP_endpoint);

        /* error_log('155 - electrum notifications' . 
         *     '_email_pipe_delim=' . 
         *     $this->notifications_email_pipe_delim);
         *
         */

        $tmp_RECIPIENT_ARRAY = $this->return_oEmailArraySOAP_struct(
                                      $this->notifications_email_pipe_delim, 
                                      NULL, 
                                      $this->cipher_override, 
                                      $this->secret_key_override, 
                                      $this->hmac_algorithm_override, 
                                      $this->options_bitwise_override);
        
        /* error_log('157 electrum email ' . 
         *     'array size = ' . 
         *     sizeof($tmp_RECIPIENT_ARRAY));
         *
         */
        
        if(isset($this->notifications_sender)){

            $tmp_SENDER_ARRAY = $this->return_oEmailArraySOAP_struct(
                                       $this->notifications_sender, 
                                       NULL, 
                                       $this->cipher_override, 
                                       $this->secret_key_override, 
                                       $this->hmac_algorithm_override, 
                                       $this->options_bitwise_override);

        }else{

            $tmp_SENDER_ARRAY = array();

        }

        if(isset($this->notifications_replyto_pipe_delim)){

            $tmp_REPLYTO_ARRAY = $this->return_oEmailArraySOAP_struct(
                                        $this->notifications_replyto_pipe_delim, 
                                        NULL, 
                                        $this->cipher_override, 
                                        $this->secret_key_override, 
                                        $this->hmac_algorithm_override, 
                                        $this->options_bitwise_override);

        }else{

            $tmp_REPLYTO_ARRAY = array();

        }

        if(isset($this->notifications_cc_pipe_delim)){

            $tmp_CC_ARRAY = $this->return_oEmailArraySOAP_struct(
                                   $this->notifications_cc_pipe_delim, 
                                   NULL, 
                                   $this->cipher_override, 
                                   $this->secret_key_override, 
                                   $this->hmac_algorithm_override, 
                                   $this->options_bitwise_override);

        }else{

            $tmp_CC_ARRAY = array();

        }

        if(isset($this->notifications_bcc_pipe_delim)){

            $tmp_BCC_ARRAY = $this->return_oEmailArraySOAP_struct(
                                  $this->notifications_bcc_pipe_delim, 
                                  NULL, 
                                  $this->cipher_override, 
                                  $this->secret_key_override, 
                                  $this->hmac_algorithm_override, 
                                  $this->options_bitwise_override);

        }else{

            $tmp_BCC_ARRAY = array();

        }

        $tmp_runtime           = $this->wall_time();
        $tmp_microsecs_explode = explode('.', $tmp_runtime);

        $HTML_process_state_message = 'The <span style="font-weight: normal;">' . 
                                      'C<span style="color: #F90000;">R</span>NRSTN :: ' . 
                                      'Electrum process has completed successfully.</span>';
        $TEXT_process_state_message = 'The CRNRSTN :: Electrum process ' . 
                                      'has completed successfully.';

        $transfer_count                       =
        $transfer_err_count                   =
        $skipped_count                        =
        $file_size                            =
        $endpoint_validation_fail_count       =
        $unique_auth_asset_filesize_at_source =
        $unique_auth_asset_count_at_source    = 0;
        $transfer_error_trace_HTML            =
        $transfer_error_trace_TEXT            = '';

        foreach($this->preload_endpoint_validation_fail as 
            $id => $is_fail_state)
        {

            if($is_fail_state){

                $endpoint_validation_fail_count++;

            }

        }

        $total_asset_count = sizeof($this->oWheel_high_awesome_ARRAY[$execution_serial]);

        foreach($this->oWheel_high_awesome_ARRAY[$execution_serial] as 
            $key => $wheel_high_awesome_eyes)
        {

            $unique_auth_asset_count_at_source += $wheel_high_awesome_eyes->unique_asset_count_at_SOURCE;
            $unique_auth_asset_filesize_at_source += $wheel_high_awesome_eyes->unique_asset_filesize_at_SOURCE;

            if($wheel_high_awesome_eyes->is_transferred()){

                $transfer_count++;
                $file_size = $file_size + $wheel_high_awesome_eyes->return_filesize_bytes();

            }

            if($wheel_high_awesome_eyes->is_skipped()){

                $skipped_count++;

            }

            if($wheel_high_awesome_eyes->is_transfer_error()){

                $transfer_err_count++;

                $err_message = $wheel_high_awesome_eyes->transfer_error_message();

                $err_file             = $wheel_high_awesome_eyes->return_filepath_SOURCE();
                $source_endpoint      = $wheel_high_awesome_eyes->return_endpoint_SOURCE();
                $destination_endpoint = $wheel_high_awesome_eyes->return_endpoint_DESTINATION();

                $tmp_HTML = $err_message;
                $tmp_TEXT = $err_message . '
';

                $tmp_HTML = $this->proper_replace(
                                   '{FTP_OR_LOCAL_DETAIL}', 
                                   $destination_endpoint, 
                                   $tmp_HTML);
                $tmp_TEXT = $this->proper_replace(
                                   '{FTP_OR_LOCAL_DETAIL}', 
                                   $destination_endpoint, 
                                   $tmp_TEXT);

                $tmp_HTML_str = '';
                $tmp_TEXT_str = '';

                $tmp_HTML_ARRAY = $this->return_universalPathProperBreak($tmp_HTML, 96, true, true);
                $tmp_TEXT_ARRAY = $this->return_universalPathProperBreak($tmp_TEXT, 52);

                $transfer_error_trace_HTML .= '<div style="border-bottom: 15px solid #FFF;">' . 
                                              $tmp_HTML_ARRAY['str'] . '</div>';
                $transfer_error_trace_TEXT .= $tmp_TEXT_ARRAY['str'] . '

';

            }

        }

        $tmp_HTML_ERR_TRACE = $this->return_CRNRSTN_SysMsgContent(
                                     $execution_serial, 
                                     $batch_serial, 
                                     'ELECTRUM_ERRORS_TRACE_HTML', 
                                     'HTML');
        $tmp_TEXT_ERR_TRACE = $this->return_CRNRSTN_SysMsgContent(
                                     $execution_serial, 
                                     $batch_serial, 
                                     'ELECTRUM_ERRORS_TRACE_TEXT');

        if($transfer_error_trace_HTML != ''){

            $tmp_HTML_ERR_TRACE = $this->proper_replace(
                                         '{ERR_TRACE}', 
                                         $transfer_error_trace_HTML, 
                                         $tmp_HTML_ERR_TRACE);
            $tmp_TEXT_ERR_TRACE = $this->proper_replace(
                                         '{ERR_TRACE}', 
                                         $transfer_error_trace_TEXT, 
                                         $tmp_TEXT_ERR_TRACE);

        }else{

            $tmp_HTML_ERR_TRACE = $this->proper_replace(
                                         '{ERR_TRACE}', 
                                         'There are no errors to report.', 
                                         $tmp_HTML_ERR_TRACE);
            $tmp_TEXT_ERR_TRACE = $this->proper_replace(
                                         '{ERR_TRACE}', 
                                         'There are no errors to report.', 
                                         $tmp_TEXT_ERR_TRACE);

        }

        if(($endpoint_validation_fail_count > 0) && 
            ($transfer_err_count > 0))
        {

            if($endpoint_validation_fail_count == 1){

                $tmp_evfc = 'error';

            }else{

                $tmp_evfc = 'errors';

            }

            if($transfer_err_count == 1){

                $tmp_tec = 'error was';

            }else{

                $tmp_tec = 'errors were';

            }

            $tmp_fail_cnt = $this->number_format_keep_precision($endpoint_validation_fail_count);

            $HTML_process_state_message = 'The <span style="font-weight: normal;">' . 
                                          'C<span style="color: #F90000;">R</span>' . 
                                          'NRSTN :: Electrum process ' . 
                                          'has completed, however, ' . 
                                          $tmp_fail_cnt . 
                                          ' endpoint connection ' . 
                                          $tmp_evfc . ' and ' . 
                                          $transfer_err_count . 
                                          ' file transfer ' . 
                                          $tmp_tec . 
                                          ' experienced.</span>';
            $TEXT_process_state_message = 'The CRNRSTN :: Electrum process ' . 
                                          'has completed, however, ' . 
                                          $tmp_fail_cnt . 
                                          ' endpoint connection ' . 
                                          $tmp_evfc . ' and ' . 
                                          $transfer_err_count . 
                                          ' file transfer ' . 
                                          $tmp_tec . ' experienced.';

        }else{

            if($transfer_err_count > 0){

                $tmp_transfer_fail_cnt = $this->number_format_keep_precision($transfer_err_count);

                if($transfer_err_count == 1){

                    $HTML_process_state_message = 'The <span style="font-weight: normal;">' . 
                                                  'C<span style="color: #F90000;">R</span>' . 
                                                  'NRSTN :: Electrum process has ' . 
                                                  'completed successfully, however, ' . 
                                                  $tmp_transfer_fail_cnt . 
                                                  ' file transfer error was experienced.</span>';
                    $TEXT_process_state_message = 'The CRNRSTN :: Electrum process has ' . 
                                                  'completed successfully, however, ' . 
                                                  $tmp_transfer_fail_cnt . 
                                                  ' file transfer error was experienced.';

                }else{

                    $HTML_process_state_message = 'The <span style="font-weight: normal;">' . 
                                                  'C<span style="color: #F90000;">R</span>' . 
                                                  'NRSTN :: Electrum process has ' . 
                                                  'completed successfully, however, ' . 
                                                  $tmp_transfer_fail_cnt . 
                                                  ' file transfer errors were experienced.</span>';
                    $TEXT_process_state_message = 'The CRNRSTN :: Electrum process ' . 
                                                  'has completed successfully, however, ' . 
                                                  $tmp_transfer_fail_cnt . 
                                                  ' file transfer errors were experienced.';

                }

            }else{

                if($endpoint_validation_fail_count > 0){

                    $tmp_endpoint_fail_cnt = $this->number_format_keep_precision($endpoint_validation_fail_count);

                    if($endpoint_validation_fail_count == 1){

                        $HTML_process_state_message = 'The <span style="font-weight: normal;">' . 
                                                      'C<span style="color: #F90000;">R</span>' . 
                                                      'NRSTN :: Electrum process ' . 
                                                      'has completed, however, ' . 
                                                       $tmp_endpoint_fail_cnt . 
                                                      ' endpoint connection error was experienced.</span>';
                        $TEXT_process_state_message = 'The CRNRSTN :: Electrum process ' . 
                                                      'has completed, however, ' . 
                                                      $tmp_endpoint_fail_cnt . 
                                                      ' endpoint connection error was experienced.';

                    }else{

                        $HTML_process_state_message = 'The <span style="font-weight: normal;">' . 
                                                      'C<span style="color: #F90000;">R</span>' . 
                                                      'NRSTN :: Electrum process ' . 
                                                      'has completed, however, ' . 
                                                      $tmp_endpoint_fail_cnt . 
                                                      ' endpoint connection errors were experienced.</span>';
                        $TEXT_process_state_message = 'The CRNRSTN :: Electrum process ' . 
                                                      'has completed, however, ' . 
                                                      $tmp_endpoint_fail_cnt . 
                                                      ' endpoint connection errors were experienced.';

                    }

                }

            }

        }

        $percent_files_successful = 100 - (($transfer_err_count / ($total_asset_count - $skipped_count)) * 100);

        $percent_files_successful = $this->number_format_keep_precision(
                                           $percent_files_successful, 
                                           2, 
                                           '.');

        $tmp_destination_count = 0;
        foreach($this->queued_endpoint_ARRAY[$batch_serial]['DESTINATION'] as 
            $key_src => $hot_src_connection_ARRAY)
        {

            $tmp_destination_count++;

        }

        $skipped_count = $skipped_count / $tmp_destination_count;

        $this->soapRequest_ARRAY = array('oElectrumPerformanceReport' =>
            array(
                'CRNRSTN_PACKET_IS_ENCRYPTED'  => 'TRUE',
                'CRNRSTN_SOAP_SVC_AUTH_KEY'    => $this->data_encrypt(
                                                         $this->get_resource('CRNRSTN_SOAP_SVC_AUTH_KEY'), 
                                                         CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                         $this->cipher_override, 
                                                         $this->secret_key_override, 
                                                         $this->hmac_algorithm_override, 
                                                         $this->options_bitwise_override),
                'CRNRSTN_PROXY_EMAIL_PROTOCOL' => $this->data_encrypt(
                                                         $this->notifications_email_protocol, 
                                                         CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                         $this->cipher_override, 
                                                         $this->secret_key_override, 
                                                         $this->hmac_algorithm_override, 
                                                         $this->options_bitwise_override),
                'oRECIPIENT'                   => $tmp_RECIPIENT_ARRAY,
                'oSENDER'                      => $tmp_SENDER_ARRAY,
                'oREPLYTO'                     => $tmp_REPLYTO_ARRAY,
                'oCC'                          => $tmp_CC_ARRAY,
                'oBCC'                         => $tmp_BCC_ARRAY,
                'SUPPRESS_DUPLICATE_RECIPIENT' => $this->data_encrypt(
                                                         'true', 
                                                         CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                         $this->cipher_override, 
                                                         $this->secret_key_override, 
                                                         $this->hmac_algorithm_override, 
                                                         $this->options_bitwise_override),
                'MESSAGE_SUBJECT' => $this->data_encrypt(
                                            'CRNRSTN :: Electrum performance report from ' . 
                                            $_SERVER['REMOTE_ADDR'] . ' (' . 
                                            $_SERVER['SERVER_NAME'] . ')', 
                                            CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                            $this->cipher_override, 
                                            $this->secret_key_override, 
                                            $this->hmac_algorithm_override, 
                                            $this->options_bitwise_override),
                'WORDWRAP' => $this->data_encrypt(
                                     '72', 
                                     CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                     $this->cipher_override, 
                                     $this->secret_key_override, 
                                     $this->hmac_algorithm_override, 
                                     $this->options_bitwise_override),
                'PRIORITY' => $this->data_encrypt(
                                     '3', 
                                     CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                     $this->cipher_override, 
                                     $this->secret_key_override, 
                                     $this->hmac_algorithm_override, 
                                     $this->options_bitwise_override),
                'IS_HTML' => $this->data_encrypt(
                                    'true', 
                                    CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                    $this->cipher_override, 
                                    $this->secret_key_override, 
                                    $this->hmac_algorithm_override, 
                                    $this->options_bitwise_override),
                'SYS_MESSAGE_TITLE_HTML' => $this->data_encrypt(
                                                   'C<span style="color: #F90000;">R</span>' . 
                                                   'NRSTN :: Electrum Performance Notification', 
                                                   CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                   $this->cipher_override, 
                                                   $this->secret_key_override, 
                                                   $this->hmac_algorithm_override, 
                                                   $this->options_bitwise_override),
                'SYS_MESSAGE_TITLE_TEXT' => $this->data_encrypt(
                                                   'CRNRSTN :: Electrum Performance Notification', 
                                                   CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                   $this->cipher_override, 
                                                   $this->secret_key_override, 
                                                   $this->hmac_algorithm_override, 
                                                   $this->options_bitwise_override),
                'SYS_LOG_INTEGER_CONSTANT' => $this->data_encrypt(
                                                     'LOG_INFO', 
                                                     CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                     $this->cipher_override, 
                                                     $this->secret_key_override, 
                                                     $this->hmac_algorithm_override, 
                                                     $this->options_bitwise_override),
                'SYS_MESSAGE_HTML' => $this->data_encrypt(
                                             $HTML_process_state_message, 
                                             CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                             $this->cipher_override, 
                                             $this->secret_key_override, 
                                             $this->hmac_algorithm_override, 
                                             $this->options_bitwise_override),
                'SYS_MESSAGE_TEXT' => $this->data_encrypt(
                                             $TEXT_process_state_message, 
                                             CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                             $this->cipher_override, 
                                             $this->secret_key_override, 
                                             $this->hmac_algorithm_override, 
                                             $this->options_bitwise_override),
                'SYS_REMOTE_ADDR' => $this->data_encrypt(
                                            $_SERVER['REMOTE_ADDR'], 
                                            CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                            $this->cipher_override, 
                                            $this->secret_key_override, 
                                            $this->hmac_algorithm_override, 
                                            $this->options_bitwise_override),
                'SYS_SERVER_NAME' => $this->data_encrypt(
                                            $_SERVER['SERVER_NAME'], 
                                            CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                            $this->cipher_override, 
                                            $this->secret_key_override, 
                                            $this->hmac_algorithm_override, 
                                            $this->options_bitwise_override),
                'SYS_SYSTEM_TIME' => $this->data_encrypt(
                                            $this->return_query_date_time_stamp(), 
                                            CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                            $this->cipher_override, 
                                            $this->secret_key_override, 
                                            $this->hmac_algorithm_override, 
                                            $this->options_bitwise_override),
                'SYS_PROCESS_RUN_TIME' => $this->data_encrypt(
                                                 $tmp_runtime, 
                                                 CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                 $this->cipher_override, $this->secret_key_override, 
                                                 $this->hmac_algorithm_override, 
                                                 $this->options_bitwise_override),
                'ELECTRUM_START_TIME' => $this->data_encrypt(
                                                $this->startTime, 
                                                CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                $this->cipher_override, $this->secret_key_override, 
                                                $this->hmac_algorithm_override, 
                                                $this->options_bitwise_override),
                'ELECTRUM_END_TIME' => $this->data_encrypt(
                                              $this->endTime, 
                                              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                              $this->cipher_override, $this->secret_key_override, 
                                              $this->hmac_algorithm_override, 
                                              $this->options_bitwise_override),
                'ELECTRUM_PRETTY_RUN_TIME' => $this->data_encrypt(
                                                     $this->return_pretty_delta_time(
                                                            $this->elapsedTime, 
                                                            $tmp_microsecs_explode[1]), 
                                                     CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                     $this->cipher_override, 
                                                     $this->secret_key_override, 
                                                     $this->hmac_algorithm_override, 
                                                     $this->options_bitwise_override),
                'ELECTRUM_TOTAL_COUNT_DESTINATION_ENDPOINTS' => $this->data_encrypt(
                                                                       $this->number_format_keep_precision(
                                                                              $tmp_destination_count), 
                                                                       CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                       $this->cipher_override, 
                                                                       $this->secret_key_override, 
                                                                       $this->hmac_algorithm_override, 
                                                                       $this->options_bitwise_override),
                'ELECTRUM_TOTAL_COUNT_FILES_TRANSFERRED' => $this->data_encrypt(
                                                                   $this->number_format_keep_precision(
                                                                          $transfer_count), 
                                                                   CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                   $this->cipher_override, 
                                                                   $this->secret_key_override, 
                                                                   $this->hmac_algorithm_override, 
                                                                   $this->options_bitwise_override),
                'ELECTRUM_TOTAL_COUNT_VALID_FOR_TRANSFER' => $this->data_encrypt(
                                                                    $this->number_format_keep_precision(
                                                                           $unique_auth_asset_count_at_source), 
                                                                    CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                    $this->cipher_override, 
                                                                    $this->secret_key_override, 
                                                                    $this->hmac_algorithm_override, 
                                                                    $this->options_bitwise_override),
                'ELECTRUM_TOTAL_COUNT_FILES_SKIPPED' => $this->data_encrypt(
                                                               $this->number_format_keep_precision(
                                                                      $skipped_count), 
                                                               CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                               $this->cipher_override, 
                                                               $this->secret_key_override, 
                                                               $this->hmac_algorithm_override, 
                                                              $this->options_bitwise_override),
                'ELECTRUM_TOTAL_FILESIZE_FILES_TRANSFERRED' => $this->data_encrypt(
                                                                      $this->return_bytes($file_size, 5), 
                                                                      CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                      $this->cipher_override, 
                                                                      $this->secret_key_override, 
                                                                      $this->hmac_algorithm_override, 
                                                                      $this->options_bitwise_override),
                'ELECTRUM_ENDPOINT_FILESIZE_FILES_TRANSFERRED' => $this->data_encrypt(
                                                                         $this->return_bytes(
                                                                                ($unique_auth_asset_filesize_at_source / $tmp_destination_count), 
                                                                                5), 
                                                                         CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                         $this->cipher_override, 
                                                                         $this->secret_key_override, 
                                                                         $this->hmac_algorithm_override, 
                                                                         $this->options_bitwise_override),
                'ELECTRUM_TOTAL_ERRORS_FILES_TRANSFERRED' => $this->data_encrypt(
                                                                    $this->number_format_keep_precision(
                                                                           $transfer_err_count), 
                                                                    CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                    $this->cipher_override, 
                                                                    $this->secret_key_override, 
                                                                    $this->hmac_algorithm_override, 
                                                                    $this->options_bitwise_override),
                'ELECTRUM_TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR' => $this->data_encrypt(
                                                                           $this->number_format_keep_precision(
                                                                                  $endpoint_validation_fail_count), 
                                                                           CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                           $this->cipher_override, 
                                                                           $this->secret_key_override, 
                                                                           $this->hmac_algorithm_override, 
                                                                           $this->options_bitwise_override),
                'ELECTRUM_PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED' => $this->data_encrypt(
                                                                             $percent_files_successful . '%', 
                                                                             CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                             $this->cipher_override, 
                                                                             $this->secret_key_override, 
                                                                             $this->hmac_algorithm_override, 
                                                                             $this->options_bitwise_override),
                'ELECTRUM_DATA_SOURCE_HTML' => $this->data_encrypt(
                                                      $this->return_CRNRSTN_SysMsgContent(
                                                             $execution_serial, $batch_serial, 
                                                             'ELECTRUM_DATA_SOURCE_HTML','HTML'), 
                                                      CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                      $this->cipher_override, 
                                                      $this->secret_key_override, 
                                                      $this->hmac_algorithm_override, 
                                                      $this->options_bitwise_override),
                'ELECTRUM_DATA_DESTINATION_HTML' => $this->data_encrypt(
                                                           $this->return_CRNRSTN_SysMsgContent(
                                                                  $execution_serial, 
                                                                  $batch_serial, 
                                                                  'ELECTRUM_DATA_DESTINATION_HTML', 
                                                                  'HTML'), 
                                                           CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                           $this->cipher_override, 
                                                           $this->secret_key_override, 
                                                           $this->hmac_algorithm_override, 
                                                           $this->options_bitwise_override),
                'ELECTRUM_DATA_HANDLING_PROFILE_HTML' => $this->data_encrypt(
                                                                $this->return_CRNRSTN_SysMsgContent(
                                                                       $execution_serial, 
                                                                       $batch_serial, 
                                                                       'ELECTRUM_DATA_HANDLING_PROFILE_HTML', 
                                                                       'HTML'), 
                                                                CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                $this->cipher_override, 
                                                                $this->secret_key_override, 
                                                                $this->hmac_algorithm_override, 
                                                                $this->options_bitwise_override),
                'ELECTRUM_DATA_SOURCE_TEXT' => $this->data_encrypt(
                                                      $this->return_CRNRSTN_SysMsgContent(
                                                             $execution_serial, 
                                                             $batch_serial, 
                                                             'ELECTRUM_DATA_SOURCE_TEXT'), 
                                                      CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                      $this->cipher_override, 
                                                      $this->secret_key_override, 
                                                      $this->hmac_algorithm_override, 
                                                      $this->options_bitwise_override),
                'ELECTRUM_DATA_DESTINATION_TEXT' => $this->data_encrypt(
                                                           $this->return_CRNRSTN_SysMsgContent(
                                                                  $execution_serial, 
                                                                  $batch_serial, 
                                                                  'ELECTRUM_DATA_DESTINATION_TEXT'), 
                                                           CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                           $this->cipher_override, 
                                                           $this->secret_key_override, 
                                                           $this->hmac_algorithm_override, 
                                                           $this->options_bitwise_override),
                'ELECTRUM_DATA_HANDLING_PROFILE_TEXT' => $this->data_encrypt(
                                                                $this->return_CRNRSTN_SysMsgContent(
                                                                       $execution_serial, 
                                                                       $batch_serial, 
                                                                       'ELECTRUM_DATA_HANDLING_PROFILE_TEXT'), 
                                                                CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                                $this->cipher_override, 
                                                                $this->secret_key_override, 
                                                                $this->hmac_algorithm_override, 
                                                                $this->options_bitwise_override),
                'ELECTRUM_ERRORS_TRACE_HTML' => $this->data_encrypt(
                                                       $tmp_HTML_ERR_TRACE, 
                                                       CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                       $this->cipher_override, 
                                                       $this->secret_key_override, 
                                                       $this->hmac_algorithm_override, 
                                                       $this->options_bitwise_override),
                'ELECTRUM_ERRORS_TRACE_TEXT' => $this->data_encrypt(
                                                       $tmp_TEXT_ERR_TRACE, 
                                                       CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                                       $this->cipher_override, 
                                                       $this->secret_key_override, 
                                                       $this->hmac_algorithm_override, 
                                                       $this->options_bitwise_override)

            ));

        return $this->soapRequest_ARRAY;

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
    function fire_reportingNotification(
             $execution_serial, 
             $batch_serial)
    {

        try{

            if(isset($this->notifications_profile)){

                if($this->notifications_email_pipe_delim != ''){

                    switch($this->notifications_profile){
                        case 'EMAIL_PROXY':

                            $this->error_log('The CRNRSTN :: Electrum ' . 
                                   'process notification report profile is ' . 
                                   $this->notifications_profile, 
                                   __LINE__, 
                                   __METHOD__, 
                                   __FILE__,
                                   CRNRSTN_ELECTRUM);
                            $clr_ssl_msg = 'Maximum storage usage at ';
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

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log_clear($msg_token);
                             *
                             * $this->error_log(
                             *        $clr_ssl_msg, 
                             *        \LOG_ERR, 
                             *        \E_ERROR, 
                             *        __LINE__, 
                             *        __METHOD__, 
                             *        __FILE__, 
                             *        $token, 
                             *        true, 
                             *        CRNRSTN_CHANNEL_SESSION);
                             *
                             * Syslog Levels:
                             * Constant                 Description
                             * \LOG_EMERG            => 'system is unusable.'
                             * \LOG_ALERT            => 'action must be
                             *                           taken immediately'
                             * \LOG_CRIT             => 'critical conditions'
                             * \LOG_ERR              => 'error conditions'
                             * \LOG_WARNING          => 'warning conditions'
                             * \LOG_NOTICE           => 'normal, but
                             *                           significant, condition'
                             * \LOG_INFO             => 'informational message'
                             * \LOG_DEBUG            => 'debug-level message'
                             *
                             * Error Reporting:
                             * Value   Constant                     Description Note
                             * 1       \E_ERROR (int)               Fatal run-time errors. 
                             *                                      These indicate errors that 
                             *                                      can not be recovered from, 
                             *                                      such as a memory allocation 
                             *                                      problem. Execution of the 
                             *                                      script is halted.
                             * 2       \E_WARNING (int)             Run-time warnings (non-fatal 
                             *                                      errors). Execution of the 
                             *                                      script is not halted.
                             * 4       \E_PARSE (int)               Compile-time parse errors. 
                             *                                      Parse errors should only be 
                             *                                      generated by the parser.
                             * 8       \E_NOTICE (int)              Run-time notices. Indicate 
                             *                                      that the script encountered 
                             *                                      something that could 
                             *                                      indicate an error, but 
                             *                                      could also happen in the 
                             *                                      normal course of running 
                             *                                      a script.
                             * 16      \E_CORE_ERROR (int)          Fatal errors that occur 
                             *                                      during PHP's initial 
                             *                                      startup. This is like an 
                             *                                      E_ERROR, except it is 
                             *                                      generated by the core 
                             *                                      of PHP.
                             * 32      \E_CORE_WARNING (int)        Warnings (non-fatal 
                             *                                      errors) that occur 
                             *                                      during PHP's initial 
                             *                                      startup. This is like 
                             *                                      an E_WARNING, except it 
                             *                                      is generated by the 
                             *                                      core of PHP.
                             * 64      \E_COMPILE_ERROR (int)       Fatal compile-time errors. 
                             *                                      This is like an E_ERROR, 
                             *                                      except it is generated 
                             *                                      by the Zend Scripting Engine.
                             * 128     \E_COMPILE_WARNING (int)     Compile-time warnings 
                             *                                      (non-fatal errors). This 
                             *                                      is like an E_WARNING, 
                             *                                      except it is generated 
                             *                                      by the Zend Scripting Engine.
                             * 256     \E_USER_ERROR (int)          User-generated error 
                             *                                      message. This is like 
                             *                                      an E_ERROR, except it 
                             *                                      is generated in PHP code 
                             *                                      by using the PHP function 
                             *                                      trigger_error().
                             * 512     \E_USER_WARNING (int)        User-generated warning 
                             *                                      message. This is like an 
                             *                                      E_WARNING, except it is 
                             *                                      generated in PHP code by 
                             *                                      using the PHP function 
                             *                                      trigger_error().
                             * 1024    \E_USER_NOTICE (int)         User-generated notice 
                             *                                      message. This is like an 
                             *                                      E_NOTICE, except it is 
                             *                                      generated in PHP code by 
                             *                                      using the PHP function 
                             *                                      trigger_error().
                             * 2048    \E_STRICT (int)              Enable to have PHP suggest 
                             *                                      changes to your code which 
                             *                                      will ensure the best 
                             *                                      interoperability and forward 
                             *                                      compatibility of your code.
                             * 4096    \E_RECOVERABLE_ERROR (int)   Catchable fatal error. 
                             *                                      It indicates that a probably 
                             *                                      dangerous error occurred, 
                             *                                      but did not leave the Engine 
                             *                                      in an unstable state. If the 
                             *                                      error is not caught by a user 
                             *                                      defined handle (see also 
                             *                                      set_error_handler()), the 
                             *                                      application aborts as it was 
                             *                                      an E_ERROR.
                             * 8192    \E_DEPRECATED (int)          Run-time notices. Enable 
                             *                                      this to receive warnings 
                             *                                      about code that will not work 
                             *                                      in future versions.
                             * 16384   \E_USER_DEPRECATED (int)     User-generated warning 
                             *                                      message. This is like an 
                             *                                      E_DEPRECATED, except it 
                             *                                      is generated in PHP code 
                             *                                      by using the PHP function 
                             *                                      trigger_error().
                             * 32767   \E_ALL (int)                 All errors, warnings, 
                             *                                      and notices.
                             */

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Build SOAP 
                             * request object. 
                             *
                             */
                            $SOAP_request = $this->return_oElectrumPerfReportSOAP(
                                                   $execution_serial, 
                                                   $batch_serial);

                            $this->error_log('The CRNRSTN :: Electrum ' . 
                                                 'process notification SOAP endpoint=' . 
                                                 $this->notifications_SOAP_endpoint, 
                                                 __LINE__, 
                                                 __METHOD__, 
                                                 __FILE__, 
                                                 CRNRSTN_ELECTRUM);
                            $clr_ssl_msg = 'Maximum storage usage at ';
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

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log_clear($msg_token);
                             *
                             * $this->error_log(
                             *        $clr_ssl_msg, 
                             *        \LOG_ERR, 
                             *        \E_ERROR, 
                             *        __LINE__, 
                             *        __METHOD__, 
                             *        __FILE__, 
                             *        $token, 
                             *        true, 
                             *        CRNRSTN_CHANNEL_SESSION);
                             *
                             * Syslog Levels:
                             * Constant                 Description
                             * \LOG_EMERG            => 'system is unusable.'
                             * \LOG_ALERT            => 'action must be
                             *                           taken immediately'
                             * \LOG_CRIT             => 'critical conditions'
                             * \LOG_ERR              => 'error conditions'
                             * \LOG_WARNING          => 'warning conditions'
                             * \LOG_NOTICE           => 'normal, but
                             *                           significant, condition'
                             * \LOG_INFO             => 'informational message'
                             * \LOG_DEBUG            => 'debug-level message'
                             *
                             * Error Reporting:
                             * Value   Constant                     Description Note
                             * 1       \E_ERROR (int)               Fatal run-time errors. 
                             *                                      These indicate errors that 
                             *                                      can not be recovered from, 
                             *                                      such as a memory allocation 
                             *                                      problem. Execution of the 
                             *                                      script is halted.
                             * 2       \E_WARNING (int)             Run-time warnings (non-fatal 
                             *                                      errors). Execution of the 
                             *                                      script is not halted.
                             * 4       \E_PARSE (int)               Compile-time parse errors. 
                             *                                      Parse errors should only be 
                             *                                      generated by the parser.
                             * 8       \E_NOTICE (int)              Run-time notices. Indicate 
                             *                                      that the script encountered 
                             *                                      something that could 
                             *                                      indicate an error, but 
                             *                                      could also happen in the 
                             *                                      normal course of running 
                             *                                      a script.
                             * 16      \E_CORE_ERROR (int)          Fatal errors that occur 
                             *                                      during PHP's initial 
                             *                                      startup. This is like an 
                             *                                      E_ERROR, except it is 
                             *                                      generated by the core 
                             *                                      of PHP.
                             * 32      \E_CORE_WARNING (int)        Warnings (non-fatal 
                             *                                      errors) that occur 
                             *                                      during PHP's initial 
                             *                                      startup. This is like 
                             *                                      an E_WARNING, except it 
                             *                                      is generated by the 
                             *                                      core of PHP.
                             * 64      \E_COMPILE_ERROR (int)       Fatal compile-time errors. 
                             *                                      This is like an E_ERROR, 
                             *                                      except it is generated 
                             *                                      by the Zend Scripting Engine.
                             * 128     \E_COMPILE_WARNING (int)     Compile-time warnings 
                             *                                      (non-fatal errors). This 
                             *                                      is like an E_WARNING, 
                             *                                      except it is generated 
                             *                                      by the Zend Scripting Engine.
                             * 256     \E_USER_ERROR (int)          User-generated error 
                             *                                      message. This is like 
                             *                                      an E_ERROR, except it 
                             *                                      is generated in PHP code 
                             *                                      by using the PHP function 
                             *                                      trigger_error().
                             * 512     \E_USER_WARNING (int)        User-generated warning 
                             *                                      message. This is like an 
                             *                                      E_WARNING, except it is 
                             *                                      generated in PHP code by 
                             *                                      using the PHP function 
                             *                                      trigger_error().
                             * 1024    \E_USER_NOTICE (int)         User-generated notice 
                             *                                      message. This is like an 
                             *                                      E_NOTICE, except it is 
                             *                                      generated in PHP code by 
                             *                                      using the PHP function 
                             *                                      trigger_error().
                             * 2048    \E_STRICT (int)              Enable to have PHP suggest 
                             *                                      changes to your code which 
                             *                                      will ensure the best 
                             *                                      interoperability and forward 
                             *                                      compatibility of your code.
                             * 4096    \E_RECOVERABLE_ERROR (int)   Catchable fatal error. 
                             *                                      It indicates that a probably 
                             *                                      dangerous error occurred, 
                             *                                      but did not leave the Engine 
                             *                                      in an unstable state. If the 
                             *                                      error is not caught by a user 
                             *                                      defined handle (see also 
                             *                                      set_error_handler()), the 
                             *                                      application aborts as it was 
                             *                                      an E_ERROR.
                             * 8192    \E_DEPRECATED (int)          Run-time notices. Enable 
                             *                                      this to receive warnings 
                             *                                      about code that will not work 
                             *                                      in future versions.
                             * 16384   \E_USER_DEPRECATED (int)     User-generated warning 
                             *                                      message. This is like an 
                             *                                      E_DEPRECATED, except it 
                             *                                      is generated in PHP code 
                             *                                      by using the PHP function 
                             *                                      trigger_error().
                             * 32767   \E_ALL (int)                 All errors, warnings, 
                             *                                      and notices.
                             */

                            if(isset($this->notifications_SOAP_endpoint)){

                                $response = $this->client_send_CRNRSTN_SOAP_REQUEST(
                                                   'sendElectrumPerformanceReport', 
                                                   $SOAP_request, 
                                                   $this->notifications_SOAP_endpoint);

                            }else{

                                $response = $this->client_send_CRNRSTN_SOAP_REQUEST(
                                                   'sendElectrumPerformanceReport', 
                                                   $SOAP_request);

                            }

                            /*$this->error_log('The CRNRSTN :: Electrum ' . 
                             *       'process SOAP response ' . 
                             *       '[RAW DATA] CRNRSTN_SOAP_SVC_AUTH_KEY=[' . 
                             *       $response['CRNRSTN_SOAP_SVC_AUTH_KEY'] . 
                             *       '] SOAP_OPERATION_RUNTIME_SECONDS=[' . 
                             *       $response['SOAP_OPERATION_RUNTIME_SECONDS'] . 
                             *       '] TOTAL_EMAILS_RECEIVED=[' . 
                             *       $response['TOTAL_EMAILS_RECEIVED'] . 
                             *       '] TOTAL_EMAILS_SENT=[' . 
                             *       $response['TOTAL_EMAILS_SENT'] . 
                             *       '] TOTAL_EMAILS_ERROR=[' . 
                             *       $response['TOTAL_EMAILS_ERROR'] . 
                             *       '] TOTAL_EMAILS_SUPPRESSED=[' . 
                             *       $response['TOTAL_EMAILS_SUPPRESSED'] . 
                             *       ']', 
                             *       __LINE__, 
                             *       __METHOD__, 
                             *       __FILE__, 
                             *       CRNRSTN_ELECTRUM);
                             *
                             *$this->error_log('The CRNRSTN :: Electrum ' . 
                             *       'process SOAP response [RAW DATA] ' . 
                             *       'REQUEST_RECEIVED_TIMESTAMP=[' . 
                             *       $response['REQUEST_RECEIVED_TIMESTAMP'] . 
                             *       '] REQUEST_COMPLETED_TIMESTAMP=[' . 
                             *       $response['REQUEST_COMPLETED_TIMESTAMP'] . 
                             *       '].', 
                             *       __LINE__, 
                             *       __METHOD__, 
                             *       __FILE__, 
                             *       CRNRSTN_ELECTRUM);
                             * 
                             *error_log('[lnum ' . 
                             *    __LINE__ . 
                             *    '] [mthd ' .
                             *     __METHOD__ . 
                             *    '] - Prod decrypt settings=' . 
                             *    $this->cipher_override . ', ' . 
                             *    $this->secret_key_override . ', ' . 
                             *    $this->hmac_algorithm_override . ', ' . 
                             *    $this->options_bitwise_override);
                             *
                             */
                            $this->error_log('The CRNRSTN :: Electrum ' . 
                                   'process ran for ' . 
                                   $this->data_decrypt(
                                          $response['SOAP_OPERATION_RUNTIME_SECONDS'], 
                                          true, 
                                          $this->cipher_override, 
                                          $this->secret_key_override, 
                                          $this->hmac_algorithm_override, 
                                          $this->options_bitwise_override) . 
                                   ' seconds to produce the following SOAP response with ' . 
                                   $this->data_decrypt(
                                          $response['TOTAL_EMAILS_ERROR'], 
                                          CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                          true, 
                                          $this->cipher_override, 
                                          $this->secret_key_override, 
                                          $this->hmac_algorithm_override, 
                                          $this->options_bitwise_override) . 
                                   ' send errors and ' . 
                                   $this->data_decrypt(
                                          $response['TOTAL_EMAILS_SUPPRESSED'], 
                                          CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                          true, 
                                          $this->cipher_override, 
                                          $this->secret_key_override, 
                                          $this->hmac_algorithm_override, 
                                          $this->options_bitwise_override) . 
                                 ' suppressions [RAW DATA] REQUEST_RECEIVED_TIMESTAMP=[' . 
                                 $this->data_decrypt(
                                        $response['REQUEST_RECEIVED_TIMESTAMP'], 
                                        CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                        true, 
                                        $this->cipher_override, 
                                        $this->secret_key_override, 
                                        $this->hmac_algorithm_override, 
                                        $this->options_bitwise_override) . 
                                 '] REQUEST_COMPLETED_TIMESTAMP=[' . 
                                 $this->data_decrypt(
                                        $response['REQUEST_COMPLETED_TIMESTAMP'], 
                                        CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                        true, 
                                        $this->cipher_override, 
                                        $this->secret_key_override, 
                                        $this->hmac_algorithm_override, 
                                        $this->options_bitwise_override) . 
                                 '].', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);
                            $clr_ssl_msg = 'Maximum storage usage at ';
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

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log_clear($msg_token);
                             *
                             * $this->error_log(
                             *        $clr_ssl_msg, 
                             *        \LOG_ERR, 
                             *        \E_ERROR, 
                             *        __LINE__, 
                             *        __METHOD__, 
                             *        __FILE__, 
                             *        $token, 
                             *        true, 
                             *        CRNRSTN_CHANNEL_SESSION);
                             *
                             * Syslog Levels:
                             * Constant                 Description
                             * \LOG_EMERG            => 'system is unusable.'
                             * \LOG_ALERT            => 'action must be
                             *                           taken immediately'
                             * \LOG_CRIT             => 'critical conditions'
                             * \LOG_ERR              => 'error conditions'
                             * \LOG_WARNING          => 'warning conditions'
                             * \LOG_NOTICE           => 'normal, but
                             *                           significant, condition'
                             * \LOG_INFO             => 'informational message'
                             * \LOG_DEBUG            => 'debug-level message'
                             *
                             * Error Reporting:
                             * Value   Constant                     Description Note
                             * 1       \E_ERROR (int)               Fatal run-time errors. 
                             *                                      These indicate errors that 
                             *                                      can not be recovered from, 
                             *                                      such as a memory allocation 
                             *                                      problem. Execution of the 
                             *                                      script is halted.
                             * 2       \E_WARNING (int)             Run-time warnings (non-fatal 
                             *                                      errors). Execution of the 
                             *                                      script is not halted.
                             * 4       \E_PARSE (int)               Compile-time parse errors. 
                             *                                      Parse errors should only be 
                             *                                      generated by the parser.
                             * 8       \E_NOTICE (int)              Run-time notices. Indicate 
                             *                                      that the script encountered 
                             *                                      something that could 
                             *                                      indicate an error, but 
                             *                                      could also happen in the 
                             *                                      normal course of running 
                             *                                      a script.
                             * 16      \E_CORE_ERROR (int)          Fatal errors that occur 
                             *                                      during PHP's initial 
                             *                                      startup. This is like an 
                             *                                      E_ERROR, except it is 
                             *                                      generated by the core 
                             *                                      of PHP.
                             * 32      \E_CORE_WARNING (int)        Warnings (non-fatal 
                             *                                      errors) that occur 
                             *                                      during PHP's initial 
                             *                                      startup. This is like 
                             *                                      an E_WARNING, except it 
                             *                                      is generated by the 
                             *                                      core of PHP.
                             * 64      \E_COMPILE_ERROR (int)       Fatal compile-time errors. 
                             *                                      This is like an E_ERROR, 
                             *                                      except it is generated 
                             *                                      by the Zend Scripting Engine.
                             * 128     \E_COMPILE_WARNING (int)     Compile-time warnings 
                             *                                      (non-fatal errors). This 
                             *                                      is like an E_WARNING, 
                             *                                      except it is generated 
                             *                                      by the Zend Scripting Engine.
                             * 256     \E_USER_ERROR (int)          User-generated error 
                             *                                      message. This is like 
                             *                                      an E_ERROR, except it 
                             *                                      is generated in PHP code 
                             *                                      by using the PHP function 
                             *                                      trigger_error().
                             * 512     \E_USER_WARNING (int)        User-generated warning 
                             *                                      message. This is like an 
                             *                                      E_WARNING, except it is 
                             *                                      generated in PHP code by 
                             *                                      using the PHP function 
                             *                                      trigger_error().
                             * 1024    \E_USER_NOTICE (int)         User-generated notice 
                             *                                      message. This is like an 
                             *                                      E_NOTICE, except it is 
                             *                                      generated in PHP code by 
                             *                                      using the PHP function 
                             *                                      trigger_error().
                             * 2048    \E_STRICT (int)              Enable to have PHP suggest 
                             *                                      changes to your code which 
                             *                                      will ensure the best 
                             *                                      interoperability and forward 
                             *                                      compatibility of your code.
                             * 4096    \E_RECOVERABLE_ERROR (int)   Catchable fatal error. 
                             *                                      It indicates that a probably 
                             *                                      dangerous error occurred, 
                             *                                      but did not leave the Engine 
                             *                                      in an unstable state. If the 
                             *                                      error is not caught by a user 
                             *                                      defined handle (see also 
                             *                                      set_error_handler()), the 
                             *                                      application aborts as it was 
                             *                                      an E_ERROR.
                             * 8192    \E_DEPRECATED (int)          Run-time notices. Enable 
                             *                                      this to receive warnings 
                             *                                      about code that will not work 
                             *                                      in future versions.
                             * 16384   \E_USER_DEPRECATED (int)     User-generated warning 
                             *                                      message. This is like an 
                             *                                      E_DEPRECATED, except it 
                             *                                      is generated in PHP code 
                             *                                      by using the PHP function 
                             *                                      trigger_error().
                             * 32767   \E_ALL (int)                 All errors, warnings, 
                             *                                      and notices.
                             */

                            foreach($response['oACTIVITY_STATUS_REPORT'] as 
                                $key => $statusArray)
                            {

                                $this->error_log(
                                       '[' . 
                                       $this->data_decrypt(
                                              $statusArray['EMAIL_PROXY_SERIAL'], 
                                              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                              true, 
                                              $this->cipher_override, 
                                              $this->secret_key_override, 
                                              $this->hmac_algorithm_override, 
                                              $this->options_bitwise_override) . 
                                       ']', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_ELECTRUM);

                                $clr_ssl_msg = 'Maximum storage usage at ';
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

                                $this->error_log(
                                       '[' . 
                                       $this->data_decrypt(
                                              $statusArray['IS_SENT'], 
                                              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                              true, 
                                              $this->cipher_override, 
                                              $this->secret_key_override, 
                                              $this->hmac_algorithm_override, 
                                              $this->options_bitwise_override) . 
                                      ']', 
                                      __LINE__, 
                                      __METHOD__, 
                                      __FILE__, 
                                      CRNRSTN_ELECTRUM);

                                $clr_ssl_msg = 'Maximum storage usage at ';
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

                                $this->error_log(
                                       '[' . 
                                       $this->data_decrypt(
                                              $statusArray['SEND_TIMESTAMP'], 
                                              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                              true, 
                                              $this->cipher_override, 
                                              $this->secret_key_override, 
                                              $this->hmac_algorithm_override, 
                                              $this->options_bitwise_override) . 
                                       ']', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_ELECTRUM);

                                $clr_ssl_msg = 'Maximum storage usage at ';
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

                                $this->error_log(
                                       '[' . 
                                      $this->data_decrypt(
                                             $statusArray['SEND_STATUS'], 
                                             CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                             true, 
                                             $this->cipher_override, 
                                             $this->secret_key_override, 
                                             $this->hmac_algorithm_override, 
                                             $this->options_bitwise_override) . 
                                      ']', 
                                      __LINE__, 
                                      __METHOD__, 
                                      __FILE__, 
                                     CRNRSTN_ELECTRUM);

                                $clr_ssl_msg = 'Maximum storage usage at ';
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

                                $this->error_log(
                                       '[' . 
                                       $this->data_decrypt(
                                              $statusArray['STATUS_DETAIL'], 
                                              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                                              true, 
                                              $this->cipher_override, 
                                              $this->secret_key_override, 
                                              $this->hmac_algorithm_override, 
                                              $this->options_bitwise_override) 
                                       .']', 
                                       __LINE__, 
                                       __METHOD__, 
                                       __FILE__, 
                                       CRNRSTN_ELECTRUM);

                                $clr_ssl_msg = 'Maximum storage usage at ';
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

                            /*$this->error_log('The CRNRSTN :: Electrum ' . 
                             *       'process SOAP response ' . 
                             *       'CRNRSTN_SOAP_SVC_AUTH_KEY=[' . 
                             *       $this->data_decrypt(
                             *              $response['CRNRSTN_SOAP_SVC_AUTH_KEY'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *                     '] TOTAL_EMAILS_RECEIVED=[' . 
                             *       $this->data_decrypt(
                             *              $response['TOTAL_EMAILS_RECEIVED'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *                     '] TOTAL_EMAILS_SENT=[' . 
                             *       $this->data_decrypt(
                             *              $response['TOTAL_EMAILS_SENT'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *                     '] TOTAL_EMAILS_ERROR=[' . 
                             *       $this->data_decrypt(
                             *              $response['TOTAL_EMAILS_ERROR'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *              '].', 
                             *       __LINE__, 
                             *       __METHOD__, 
                             *       __FILE__, 
                             *       CRNRSTN_ELECTRUM);
                             *
                             *$this->error_log('The CRNRSTN :: Electrum ' . 
                             *       'process SOAP response ' . 
                             *       'EMAIL_PROXY_SERIAL[0]=[' . 
                             *       $this->data_decrypt(
                             *              $response['oACTIVITY_STATUS_REPORT'][0]['EMAIL_PROXY_SERIAL'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *              '] SEND_STATUS[0]=[' . 
                             *       $this->data_decrypt(
                             *              $response['oACTIVITY_STATUS_REPORT'][0]['SEND_STATUS'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *              '] EMAIL_PROXY_SERIAL[1]=[' . 
                             *       $this->data_decrypt(
                             *              $response['oACTIVITY_STATUS_REPORT'][1]['EMAIL_PROXY_SERIAL'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *              '] SEND_STATUS[1]=[' . 
                             *       $this->data_decrypt($response['oACTIVITY_STATUS_REPORT'][1]['SEND_STATUS'], 
                             *              CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP, 
                             *              true, 
                             *              $this->cipher_override, 
                             *              $this->secret_key_override, 
                             *              $this->hmac_algorithm_override, 
                             *              $this->options_bitwise_override) . 
                             *              ']', 
                             *       __LINE__, 
                             *       __METHOD__, 
                             *       __FILE__, 
                             *       CRNRSTN_ELECTRUM);
                             *
                             */

                        break;
                        case 'EMAIL':

                        break;
                        default:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('The CRNRSTN :: Electrum ' . 
                                'communications notifications profile, (' . 
                                \gettype($this->notifications_profile) . ') ' . 
                                \strval($this->notifications_profile) . 
                                ', is not supported.');

                        break;

                    }


                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The CRNRSTN :: Electrum ' . 
                        'performance report request has not ' . 
                        'received any email address to which ' . 
                        'to send a report.');

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false. 
             *
             */
            return false;

        }

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
    function initNotifications(
             $email_pipe_delim, 
             $notificationProfile, 
             $SOAP_endpoint, 
             $email_protocol)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Updated initNotifications() 
         *       Exception messaging with a  
         *       replacement of the static text, 
         *       "2.0.0", by $this->version_crnrstn() 
         *       in anticipation of extending 
         *       crnrstn through the Electrum :: 
         *       Ezekiel 1:4 :: Wind Cloud 
         *       Fire, the crnrstn_wind_cloud_fire 
         *       class object. 
         *       5 :: Thursday, March 12, 2026 @ 2151 hrs.
         *
         */

        try{

            $notificationProfile = trim(strtoupper($notificationProfile));

            switch($notificationProfile){
                case 'EMAIL_PROXY':

                    $this->notifications_email_pipe_delim = $email_pipe_delim;
                    $this->notifications_profile          = trim(strtoupper($notificationProfile));
                    $this->notifications_SOAP_endpoint    = $SOAP_endpoint;
                    $this->notifications_email_protocol   = trim(strtoupper($email_protocol));

                break;
                case 'EMAIL':

                    $this->notifications_email_pipe_delim = $email_pipe_delim;
                    $this->notifications_profile          = trim(strtoupper($notificationProfile));
                    $this->notifications_SOAP_endpoint    = NULL;
                    $this->notifications_email_protocol   = NULL;

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The CRNRSTN :: Electrum ' . 
                        'initialization of its\' notification ' . 
                        'profile has failed due to ' . 
                        'unknown profile type, "' . 
                        $notificationProfile . 
                        '". Only "EMAIL" and "EMAIL_PROXY" ' . 
                        'are available options within ' . 
                        'CRNRSTN :: v' . $this->version_crnrstn());

                break;

            }

            return NULL;

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false. 
             *
             */
            return false;

        }

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
    function isNotExcluded_asset(
             $filePath, 
             $execution_batch_serial, 
             $FIREHOT_oEndpoint_SOURCE)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_DIR($CRNRSTN_oELECTRUM, '*ment', 'ELECTRUM_SOURCE_FTP00');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_DIR($CRNRSTN_oELECTRUM, 'Projects', $local_dir_path_SOURCE00);
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_FILE($CRNRSTN_oELECTRUM, '*.pdf');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_FILE($CRNRSTN_oELECTRUM, '*crnrstn*.*');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_modifiedOlderThan($CRNRSTN_oELECTRUM, '30 days');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_modifiedNewerThan($CRNRSTN_oELECTRUM, '2 months');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_accessedOlderThan($CRNRSTN_oELECTRUM, '30 days');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_accessedNewerThan($CRNRSTN_oELECTRUM, '2 months');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_assetUserID($CRNRSTN_oELECTRUM, 'jony5');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_assetGroupID($CRNRSTN_oELECTRUM, 'root');
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_fileSizeGreaterThan($CRNRSTN_oELECTRUM, 1024);
             * $CRNRSTN_oELECTRUM = $oCRNRSTN_USR->electrum_exclude_fileSizeLessThan($CRNRSTN_oELECTRUM, 150);
             *
             */

            $asset_transfer_suppression_ARRAY = $FIREHOT_oEndpoint_SOURCE->asset_transfer_suppression_ARRAY;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Endpoint WCR key 
             * or path (if local 
             * directory via 
             * input parameter).
             *
             */
            $oEndpoint_WCRkey_or_path  = $FIREHOT_oEndpoint_SOURCE->return_WCRkey_or_PATH();
            $oEndpoint_connection_type = $FIREHOT_oEndpoint_SOURCE->return_connection_type();
            $oEndpoint_serial          = $FIREHOT_oEndpoint_SOURCE->return_serial();

            $exclusion_check_result = array();
            $exclusion_check_result['not_excluded'] = true;
            $exclusion_check_result['pattern'] = '';
            $exclusion_check_result['asset_meta'] = '';
            $exclusion_check_result['wcr_path_specified'] = '';
            $exclusion_check_result['pattern_type'] = '';

            $exclusion_profile_exclude_ARRAY = array();
            $all_excludes_open = true;

            if(isset($asset_transfer_suppression_ARRAY[$this->electrum_process_id])){

                foreach($asset_transfer_suppression_ARRAY[$this->electrum_process_id][$execution_batch_serial] as 
                    $key => $exclusion_profile_ARRAY)
                {

                    $exclusion_serial      = $exclusion_profile_ARRAY['exclusion_serial'];
                    $exclusion_type        = $exclusion_profile_ARRAY['exclusion_type'];
                    $WCRkey_or_DIRPATH     = $exclusion_profile_ARRAY['WCR_or_path'];
                    $qualification_pattern = $exclusion_profile_ARRAY['pattern'];

                    $exclusion_check_result['wcr_path_specified'] = '';
                    $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern] = true;

                    if(isset($WCRkey_or_DIRPATH)){

                        $all_excludes_open = false;

                        if(($oEndpoint_WCRkey_or_path != $WCRkey_or_DIRPATH) && 
                            ($WCRkey_or_DIRPATH != '') && 
                            ($WCRkey_or_DIRPATH != NULL))
                        {

                            $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern] = false;

                        }else{

                            $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern] = true;
                            $exclusion_check_result['wcr_path_specified'] = $WCRkey_or_DIRPATH;

                        }

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Apply this exclusion 
                     * to this endpoint 
                     * (source) asset. 
                     *
                     */
                    $exclusion_check_result['not_excluded']   = true;
                    $exclusion_check_result['pattern']        = '';
                    $exclusion_check_result['asset_meta']     = '';
                    $exclusion_check_result['exclusion_meta'] = '';

                    /**
                     *$this->error_log(
                     *                     'PROCESS EXCLUSION [' . 
                     *                     $exclusion_type . '][' . 
                     *                     $key . '][' . 
                     *                     $filePath . ']', 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     CRNRSTN_ELECTRUM);
                     *
                     */

                    switch ($exclusion_type){
                        case 'DIRECTORY':
                            //#['DIRECTORY']['NOMINATION'][] = $WCRkey_or_DIRPATH;
                            //#['DIRECTORY']['NOMINATION'][] = $qualification_pattern;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Used for directory check 
                             * in Electrum v1.0.0.
                             *
                             * $tmp_exclude_pos = strpos(
                             *                    $filePath, 
                             *                    $condition_pattern);
                             *
                             * if(fnmatch($condition_pattern, $filePath) || 
                             *     ($tmp_exclude_pos !== false))
                             * {
                             *
                             */
                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                if($this->isMatchedStrPattern(
                                          $filePath, 
                                          $qualification_pattern, 
                                          false))
                                {

                                    $exclusion_check_result['not_excluded'] = false;
                                    $exclusion_check_result['pattern']      = $qualification_pattern;
                                    $exclusion_check_result['asset_meta']   = $filePath;
                                    $exclusion_check_result['asset_path']   = $filePath;
                                    $exclusion_check_result['pattern_type'] = $exclusion_type;

                                    $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                    return $exclusion_check_result;

                                }

                            }

                        break;
                        case 'FILE':
                            //#['FILE']['NOMINATION'][] = $qualification_pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * basename() operates 
                                 * naively on the 
                                 * input string. 
                                 *
                                 */
                                $tmp_filename = basename($filePath);

                                if($this->isMatchedStrPattern(
                                          $tmp_filename, 
                                          $qualification_pattern, 
                                          false))
                                {

                                    $exclusion_check_result['not_excluded'] = false;
                                    $exclusion_check_result['pattern']      = $qualification_pattern;
                                    $exclusion_check_result['asset_meta']   = $tmp_filename;
                                    $exclusion_check_result['asset_path']   = $filePath;
                                    $exclusion_check_result['pattern_type'] = $exclusion_type;

                                    $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                    return $exclusion_check_result;

                                }

                            }

                        break;
                        case 'OWNER_GROUP':
                            //#['OWNER_GROUP']['GROUP_ID'][] = $pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                if(isset($this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        /*$this->error_log(
                                         *      'CRNRSTN :: Electrum [' . 
                                         *      $oEndpoint_connection_type . 
                                         *      '] OWNER_GROUP=' . 
                                         *      $this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *      ' *****', 
                                         *      __LINE__,
                                         *      __METHOD__, 
                                         *      __FILE__, 
                                         *      CRNRSTN_ELECTRUM);
                                         *
                                         *$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED_NT [' . 
                                         *       $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         *$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED TIMESTAMP=[' . 
                                         *       \date('D M j G:i:s T Y' ,  
                                         *           $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath]) . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         */
                                        if(($this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] == $qualification_pattern) || 
                                            ($this->source_file_gid_INT_at_path_ARRAY[$oEndpoint_serial][$filePath] == $qualification_pattern))
                                        {

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                                                                        '<->' . 
                                                                                        $this->source_file_gid_INT_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'OWNER_USER':
                            //#['OWNER_USER']['USER_ID'][] = $pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                if(isset($this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        /*$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] OWNER_USER [' . 
                                         *       $this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         *$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED TIMESTAMP=[' . 
                                         *       date('D M j G:i:s T Y', 
                                         *            $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath]) . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         */
                                        if(($this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] == $qualification_pattern) || 
                                            ($this->source_file_uid_INT_at_path_ARRAY[$oEndpoint_serial][$filePath] == $qualification_pattern))
                                        {

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                                                                        '<->' . 
                                                                                        $this->source_file_uid_INT_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'MODIFIED_NT':
                            //#['MODIFIED_NT']['NEWER_THAN'][] = $pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                if(isset($this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        /*$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED_NT [' . 
                                         *       $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         *$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED TIMESTAMP=[' . 
                                         *       \date('D M j G:i:s T Y', 
                                         *             $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath]) . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         */

                                        if($this->isDateNewerThan(
                                                  $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath], 
                                                  $qualification_pattern))
                                        {

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'MODIFIED_OT':
                            //#['MODIFIED_OT']['OLDER_THAN'][] = $pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                if(isset($this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        /*$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED_OT [' . 
                                         *       $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         *$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] MODIFIED TIMESTAMP=[' . 
                                         *       \date('D M j G:i:s T Y', 
                                         *             $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath]) . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         */
                                        if($this->isDateOlderThan(
                                                  $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath], 
                                                  $qualification_pattern))
                                        {

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'ACCESSED_NT':
                            //#['ACCESSED_NT']['NEWER_THAN'][] = $pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern]){

                                if(isset($this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        /*$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] ACCESSED_NT [' . 
                                         *       $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         */

                                        if($this->isDateNewerThan(
                                                  $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath], 
                                                  $qualification_pattern))
                                        {

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'ACCESSED_OT':
                            //#['ACCESSED_OT']['OLDER_THAN'][] = $pattern;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                if(isset($this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        /*$this->error_log(
                                         *       'CRNRSTN :: Electrum [' . 
                                         *       $oEndpoint_connection_type . 
                                         *       '] ACCESSED_OT [' . 
                                         *       $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
                                         *       '] *****', 
                                         *       __LINE__, 
                                         *       __METHOD__, 
                                         *       __FILE__, 
                                         *       CRNRSTN_ELECTRUM);
                                         *
                                         */

                                        if($this->isDateOlderThan(
                                                  $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath], 
                                                  $qualification_pattern))
                                        {

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'FILE_SIZE_GT':
                            //#['FILE_SIZE_GT']['GREATER_THAN'][] = $bytes;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                /*$this->error_log(
                                 *       'CRNRSTN :: Electrum ' . 
                                 *       'FILE_SIZE_GT EXCLUSION *****', 
                                 *       __LINE__, 
                                 *       __METHOD__, 
                                 *       __FILE__, 
                                 *       CRNRSTN_ELECTRUM);
                                 *
                                 */

                                if(isset($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] > $qualification_pattern){

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        case 'FILE_SIZE_LT':
                            //#['FILE_SIZE_LT']['LESS_THAN'][] = $bytes;

                            if($all_excludes_open || 
                                $exclusion_profile_exclude_ARRAY[$exclusion_serial][$exclusion_type][$qualification_pattern])
                            {

                                /*$this->error_log(
                                 *       'CRNRSTN :: Electrum ' . 
                                 *       'FILE_SIZE_GT EXCLUSION *****', 
                                 *       __LINE__, 
                                 *       __METHOD__, 
                                 *       __FILE__, 
                                 *       CRNRSTN_ELECTRUM);
                                 *
                                 */

                                if(isset($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                                    if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                                        if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] < $qualification_pattern){

                                            $exclusion_check_result['not_excluded']   = false;
                                            $exclusion_check_result['pattern']        = $qualification_pattern;
                                            $exclusion_check_result['asset_meta']     = $filePath;
                                            $exclusion_check_result['asset_path']     = $filePath;
                                            $exclusion_check_result['pattern_type']   = $exclusion_type;
                                            $exclusion_check_result['exclusion_meta'] = $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath];

                                            $this->asset_suppressed_ARRAY[$this->electrum_process_id][$execution_batch_serial][$oEndpoint_serial][] = $exclusion_check_result;

                                            return $exclusion_check_result;

                                        }

                                    }

                                }

                            }

                        break;
                        default:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('The CRNRSTN :: Electrum ' . 
                                'exclusion type,"' . 
                                $exclusion_type . 
                                '", has not yet been configured to be ' . 
                                'applied to any asset.');

                        break;

                    }

                }

                return $exclusion_check_result;

            }else{

                /* No exclusions - 
                 * Therefore, all 
                 * good in tha hood. 
                 *
                 */
                return true;

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

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false. 
             *
             */
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
    function return_source_file_userid_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_source_file_groupid_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_size_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_lastaccess_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_lastmodify_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_blocksize_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_blocksize_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_blockallocate_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_blockallocate_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_fullpermissions_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_fullpermissions_at_path_ARRAY[$oEndpoint_serial][$filePath];

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
    function return_file_octalpermissions_at_path(
             $oEndpoint_serial, 
             $filePath)
    {

        return $this->source_file_octalpermissions_at_path_ARRAY[$oEndpoint_serial][$filePath];

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function localStorageUse_doNotPassUsagePercent($maxStorageUse)
    {

        $tmp_maxStorage = $this->str_sanitize(
                                 $maxStorageUse, 
                                 'clean_percentage_numbers');

        $tmp_maxStorage = (int) $tmp_maxStorage * 1;

        try{

            if(is_integer($tmp_maxStorage) || 
                is_int($tmp_maxStorage) || 
                is_float($tmp_maxStorage) || 
                is_double($tmp_maxStorage))
            {

                $this->max_disk_storage_utilization = $tmp_maxStorage;

            }else{

                if(strtolower($tmp_maxStorage) == 'fullretard'){

                    $this->max_disk_storage_utilization = 100;

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The CRNRSTN :: Electrum max ' . 
                        'local DIR destination storage ' . 
                        'utilization has been conveyed ' . 
                        'with incorrect data type. It should ' . 
                        'be an integer or double/float, ' . 
                        'but the value provided is "' . 
                        $maxStorageUse . '".');

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false. 
             *
             */
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
    function deleteSourceData_OnSuccess(
             $local_dir_path_SOURCE00, 
             $require_ALL_destination_success)
    {

        if($require_ALL_destination_success){

            $this->error_log(
                   'The CRNRSTN :: Electrum ' . 
                   'process is being configured to ' . 
                   '(upon 100% SUCCESS file copy to ' . 
                   'ALL destination endpoints) delete ' . 
                   'all data at the SOURCE endpoint (' . 
                   $local_dir_path_SOURCE00 . 
                   ') that was moved by the CRNRSTN :: ' . 
                   'Electrum profile to destination.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_ELECTRUM);

        }else{

            $this->error_log(
                   'The CRNRSTN :: Electrum ' . 
                   'process is being configured to 
                   (upon 100% SUCCESS file copy to at 
                   least ONE (1) destination endpoint) 
                   delete all data at the SOURCE endpoint (' . 
                   $local_dir_path_SOURCE00 . 
                   ') that was moved by the CRNRSTN :: 
                   Electrum profile to destination.', 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_ELECTRUM);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function electrum_datamover_FF(
                     $execution_serial, 
                     $execution_batch_serial, 
                     $hot_src_connection_ARRAY, 
                     $hot_dest_connection_ARRAY)
    {

        $FIREHOT_oEndpoint_SOURCE      = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
        $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

        if(isset($this->timestamp_nom_pattern)){

            $FIREHOT_oEndpoint_SOURCE->add_directory_nom_pattern($this->timestamp_nom_pattern);
            $this->oElectrum_STATS->init_directory_datestamp_nom(
                                    $FIREHOT_oEndpoint_SOURCE->return_serial(), 
                                    $FIREHOT_oEndpoint_SOURCE->return_timestamp_nom());

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Endpoint serial. 
         *
         */
        $oEndpoint_serial      = $FIREHOT_oEndpoint_SOURCE->return_serial();
        $oEndpoint_serial_dest = $FIREHOT_oEndpoint_DESTINATION->return_serial();

        $total_wheels_count = sizeof($this->directory_content_ARRAY[$oEndpoint_serial]);
        if(isset($this->directory_dir_content_ARRAY[$oEndpoint_serial])){

            $total_wheels_dir_count = sizeof($this->directory_dir_content_ARRAY[$oEndpoint_serial]);

        }else{

            $total_wheels_dir_count = 0;

        }

        $total_wheels_count += $total_wheels_dir_count;

        $this->error_log(
               'The CRNRSTN :: Electrum ' . 
               'process is handling FF ' . 
               'asset transfer of ' . 
               $total_wheels_count . '+' . 
               $total_wheels_dir_count . ' assets from ' . 
               $FIREHOT_oEndpoint_SOURCE->return_FTP_SERVER() . '::' . 
               $FIREHOT_oEndpoint_SOURCE->return_FTP_PORT() . ' @ [DIR::' . 
               $FIREHOT_oEndpoint_SOURCE->return_FTP_DIR_PATH() . '] to ' . 
               $FIREHOT_oEndpoint_DESTINATION->return_FTP_SERVER() .'::' . 
               $FIREHOT_oEndpoint_DESTINATION->return_FTP_PORT() . ' @ [DIR::' . 
               $FIREHOT_oEndpoint_DESTINATION->return_FTP_DIR_PATH() . '].', 
               __LINE__, 
               __METHOD__, 
               __FILE__, 
               CRNRSTN_ELECTRUM);

        $wheels_high_awesome_cnt = 0;
        foreach($this->directory_content_ARRAY[$oEndpoint_serial] as 
            $key => $filePath)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Check for configured 
             * exclusions. 
             *
             */
            $exclusion_check_result = $this->isNotExcluded_asset(
                                             $filePath, 
                                             $execution_batch_serial, 
                                             $FIREHOT_oEndpoint_SOURCE);

            $wheels_high_awesome_cnt++;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of 
             * the CRNRSTN :: Electrum :: 
             * Ezekiel 1:4 :: Wheel High 
             * Awesome Eyes Local Directory 
             * File Transfer Support.
             *
             *
             * 5 :: Monday, July 15, 2024 @ 2024 hrs.
             *
             * $oWheel_high_awesome = new crnrstn_wheel_high_awesome_eyes(
             *                            $execution_serial, 
             *                            $FIREHOT_oEndpoint_SOURCE, 
             *                            $FIREHOT_oEndpoint_DESTINATION, 
             *                            $this->oCRNRSTN_USR, 
             *                            $total_wheels_count, 
             *                            $wheels_high_awesome_cnt, 
             *                            $exclusion_check_result);
             *
             */
            $oWheel_high_awesome = $this->return_registered_resource(
                                          'new', 
                                          'crnrstn_wheel_high_awesome_eyes', 
                                          $execution_serial, 
                                          $FIREHOT_oEndpoint_SOURCE, 
                                          $FIREHOT_oEndpoint_DESTINATION, 
                                          $this->oCRNRSTN_USR, 
                                          $total_wheels_count, 
                                          $wheels_high_awesome_cnt, 
                                          $exclusion_check_result);

            $oWheel_high_awesome->receive_asset_meta($filePath, $this);

            if(isset($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                    $oWheel_high_awesome->init_fileSize_bytes($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Question :: Who run 
             * it...Who run it!?! 
             *
             * Answer :: The Lord 
             * runs it. 
             *
             */
            if($oWheel_high_awesome->process_asset(
                                     $filePath, 
                                     'FF', 
                                     $execution_serial, 
                                     $execution_batch_serial, 
                                     $hot_src_connection_ARRAY, 
                                     $hot_dest_connection_ARRAY, 
                                     $this, 
                                     $this->oElectrum_STATS))
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Increment transfer 
                 * count to destination. 
                 *
                 */
                $this->oElectrum_STATS->plus_one_asset_transfer(
                                        $oEndpoint_serial, 
                                        $oEndpoint_serial_dest, 
                                        $execution_serial, 
                                        $execution_batch_serial, 
                                        $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

            }

            if($wheels_high_awesome_cnt < 5){

                $this->error_log('FF TRANSFER[' . 
                                     $wheels_high_awesome_cnt . ']=>' . 
                                     $filePath, 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

            }else{

                if($wheels_high_awesome_cnt > ($total_wheels_count - 5)){

                    $this->error_log('FF TRANSFER[' . 
                                         $wheels_high_awesome_cnt . ']=>' . 
                                         $filePath, 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                }

            }

            $this->oWheel_high_awesome_ARRAY[$execution_serial][] = $oWheel_high_awesome;

        }

        if($total_wheels_dir_count > 0){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Process empty 
             * directory moves. 
             *
             */
            foreach($this->directory_dir_content_ARRAY[$oEndpoint_serial] as 
                $filePath => $key)
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Check for configured 
                 * exclusions. 
                 *
                 */
                $exclusion_check_result = $this->isNotExcluded_asset(
                                                 $filePath, 
                                                 $execution_batch_serial, 
                                                 $FIREHOT_oEndpoint_SOURCE);

                $wheels_high_awesome_cnt++;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Wheel High 
                 * Awesome Eyes Local Directory 
                 * File Transfer Support.
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2027 hrs.
                 *
                 * $oWheel_high_awesome = new crnrstn_wheel_high_awesome_eyes(
                 *                            $execution_serial, 
                 *                            $FIREHOT_oEndpoint_SOURCE, 
                 *                            $FIREHOT_oEndpoint_DESTINATION, 
                 *                            $this->oCRNRSTN_USR, 
                 *                            $total_wheels_count, 
                 *                            $wheels_high_awesome_cnt, 
                 *                            $exclusion_check_result);
                 *
                 */
                $oWheel_high_awesome = $this->return_registered_resource(
                                              'new', 
                                              'crnrstn_wheel_high_awesome_eyes', 
                                              $execution_serial, 
                                              $FIREHOT_oEndpoint_SOURCE, 
                                              $FIREHOT_oEndpoint_DESTINATION, 
                                              $this->oCRNRSTN_USR, 
                                              $total_wheels_count, 
                                              $wheels_high_awesome_cnt, 
                                              $exclusion_check_result);

                $oWheel_high_awesome->receive_asset_meta($filePath, $this);

                $oWheel_high_awesome->init_fileSize_bytes(0);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Question :: Who run 
                 * it...Who run it!?! 
                 *
                 * Answer :: The Lord 
                 * runs it. 
                 *
                 */
                if($oWheel_high_awesome->process_dir_asset(
                                         $filePath, 
                                         'FF', 
                                         $execution_serial, 
                                         $execution_batch_serial, 
                                         $hot_src_connection_ARRAY, 
                                         $hot_dest_connection_ARRAY, 
                                         $this, 
                                         $this->oElectrum_STATS))
                {
                    /**
                     *if($oWheel_high_awesome->process_dir_asset(
                     *                         $filePath, 
                     *                         'FF', 
                     *                         $execution_serial, 
                     *                         $execution_batch_serial, 
                     *                         $hot_src_connection_ARRAY, 
                     *                         $hot_dest_connection_ARRAY, 
                     *                         $this))
                     *{
                     *
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Increment transfer 
                     * count to destination. 
                     *
                     */
                    $this->oElectrum_STATS->plus_one_asset_transfer(
                                            $oEndpoint_serial, 
                                            $oEndpoint_serial_dest, 
                                            $execution_serial, 
                                            $execution_batch_serial, 
                                            0);

                }

                if($wheels_high_awesome_cnt < 5){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->error_log('FF TRANSFER[' . 
                     *                      $wheels_high_awesome_cnt . ']=>' . 
                     *                      $filePath, 
                     *                      __LINE__, 
                     *                      __METHOD__, 
                     *                      __FILE__, 
                     *                      'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                     *
                     */
                    $this->error_log('FF TRANSFER[' . 
                                         $wheels_high_awesome_cnt . ']=>' . 
                                         $filePath, 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                }else{

                    if($wheels_high_awesome_cnt > ($total_wheels_count - 5)){

                        $this->error_log('FF TRANSFER[' . 
                                             $wheels_high_awesome_cnt . ']=>' . 
                                             $filePath, 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             CRNRSTN_ELECTRUM);

                    }

                }

                $this->oWheel_high_awesome_ARRAY[$execution_serial][] = $oWheel_high_awesome;

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
    function return_FF_tmp_dirPath()
    {

        return $this->FtpToFtp_tmp_dirPath;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function electrum_datamover_FD(
                     $execution_serial, 
                     $execution_batch_serial, 
                     $hot_src_connection_ARRAY, 
                     $hot_dest_connection_ARRAY)
    {

        $FIREHOT_oEndpoint_SOURCE = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
        $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

        if(isset($this->timestamp_nom_pattern)){

            $FIREHOT_oEndpoint_SOURCE->add_directory_nom_pattern($this->timestamp_nom_pattern);
            $this->oElectrum_STATS->init_directory_datestamp_nom(
                                    $FIREHOT_oEndpoint_SOURCE->return_serial(), 
                                    $FIREHOT_oEndpoint_SOURCE->return_timestamp_nom());

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Endpoint serial. 
         *
         */
        $oEndpoint_serial = $FIREHOT_oEndpoint_SOURCE->return_serial();
        $oEndpoint_serial_dest = $FIREHOT_oEndpoint_DESTINATION->return_serial();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Endpoint WCR key 
         * or path (if local 
         * directory via 
         * input parameter)
         *
         * $oEndpoint_WCRkey_or_path = $FIREHOT_oEndpoint_SOURCE->return_WCRkey_or_PATH();
         *
         */

        $total_wheels_count = sizeof($this->directory_content_ARRAY[$oEndpoint_serial]);

        if(isset($this->directory_dir_content_ARRAY[$oEndpoint_serial])){

            $total_wheels_dir_count = sizeof($this->directory_dir_content_ARRAY[$oEndpoint_serial]);

        }else{

            $total_wheels_dir_count = 0;

        }

        $total_wheels_count += $total_wheels_dir_count;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CRNRSTN :: Electrum 
         * sub-request total 
         * file size (bytes). 
         *
         */
        $tmp_file_size_total_bytes = $this->source_total_filesize_ARRAY[$oEndpoint_serial][0];
        $tmp_file_size_total = $this->return_bytes($tmp_file_size_total_bytes, 5);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Total available 
         * storage size at 
         * destination (bytes). 
         *
         */
        $tmp_destination_capacity_bytes = $FIREHOT_oEndpoint_DESTINATION->return_availableByteCapacity();
        $tmp_destination_diskSize_bytes = $FIREHOT_oEndpoint_DESTINATION->return_hardDriveSize();
        $tmp_destination_capacity = $this->return_bytes($tmp_destination_capacity_bytes, 5);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Calculate percentage 
         * utilization of request. 
         *
         */
        $percentage_utilization_ask = 100 - ((($tmp_file_size_total + ($tmp_destination_diskSize_bytes - $tmp_destination_capacity)) / $tmp_destination_diskSize_bytes) * 100);

        if($percentage_utilization_ask > $this->max_disk_storage_utilization){

            $percentage_utilization_ask = 100 - ((($tmp_file_size_total + ($tmp_destination_diskSize_bytes - $tmp_destination_capacity)) / $tmp_destination_diskSize_bytes) * 100);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            throw new Exception('The CRNRSTN :: Electrum max ' . 
                'local DIR destination storage ' . 
                'utilization has been exceeded with ' . 
                'an ask which would result in ' . 
                $percentage_utilization_ask .
                '% usage. This being when ' .
                $this->max_disk_storage_utilization . 
                '% is the currently configured ' . 
                'maximum [See electrum_doNotPassDisk' . 
                'UsagePercent()]. For the record, only ' . 
                $tmp_destination_capacity . 
                ' is available at ' . 
                $FIREHOT_oEndpoint_DESTINATION->return_LOCAL_DIR_PATH() . 
                '.');

        }else{

            $this->error_log('The CRNRSTN :: Electrum process ' . 
                                 'is handling FD asset transfer of ' . 
                                 $total_wheels_count . 
                                 ' assets from ' . 
                                 $FIREHOT_oEndpoint_SOURCE->return_FTP_SERVER() . '::' . 
                                 $FIREHOT_oEndpoint_SOURCE->return_FTP_PORT() . 
                                 ' @ [DIR::' . 
                                 $FIREHOT_oEndpoint_SOURCE->return_FTP_DIR_PATH() . 
                                 '] to DIR[' . 
                                 $FIREHOT_oEndpoint_DESTINATION->return_LOCAL_DIR_PATH() . 
                                 '].', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $wheels_high_awesome_cnt = 0;
            foreach($this->directory_content_ARRAY[$oEndpoint_serial] as 
                $key => $filePath)
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Check for configured 
                 * exclusions. 
                 *
                 */
                $exclusion_check_result = $this->isNotExcluded_asset(
                                                 $filePath, 
                                                 $execution_batch_serial, 
                                                 $FIREHOT_oEndpoint_SOURCE);

                $wheels_high_awesome_cnt++;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Wheel High 
                 * Awesome Eyes Local Directory 
                 * File Transfer Support.
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2031 hrs.
                 *
                 * $oWheel_high_awesome = new crnrstn_wheel_high_awesome_eyes(
                 *                            $execution_serial, 
                 *                            $FIREHOT_oEndpoint_SOURCE, 
                 *                            $FIREHOT_oEndpoint_DESTINATION, 
                 *                            $this->oCRNRSTN_USR, 
                 *                            $total_wheels_count, 
                 *                            $wheels_high_awesome_cnt, 
                 *                            $exclusion_check_result);
                 *
                 */
                $oWheel_high_awesome = $this->return_registered_resource(
                                              'new', 
                                              'crnrstn_wheel_high_awesome_eyes', 
                                              $execution_serial, 
                                              $FIREHOT_oEndpoint_SOURCE, 
                                              $FIREHOT_oEndpoint_DESTINATION, 
                                              $this->oCRNRSTN_USR, 
                                              $total_wheels_count, 
                                              $wheels_high_awesome_cnt, 
                                              $exclusion_check_result);

                $oWheel_high_awesome->receive_asset_meta($filePath, $this);

                if(isset($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                    if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                        $oWheel_high_awesome->init_fileSize_bytes($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Question :: Who run 
                 * it...Who run it!?! 
                 *
                 * Answer :: The Lord 
                 * runs it. 
                 *
                 */
                if($oWheel_high_awesome->process_asset(
                                         $filePath, 
                                         'FD', 
                                         $execution_serial, 
                                         $execution_batch_serial, 
                                         $hot_src_connection_ARRAY, 
                                         $hot_dest_connection_ARRAY, 
                                         $this, 
                                         $this->oElectrum_STATS))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Increment transfer 
                     * count to destination. 
                     *
                     */
                    $this->oElectrum_STATS->plus_one_asset_transfer(
                                            $oEndpoint_serial, 
                                            $oEndpoint_serial_dest, 
                                            $execution_serial, 
                                            $execution_batch_serial, 
                                            $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

                }

                if($wheels_high_awesome_cnt < 5){

                    $this->error_log('FD TRANSFER[' . 
                                         $wheels_high_awesome_cnt . ']=>' . 
                                         $filePath, 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                }else{

                    if($wheels_high_awesome_cnt > ($total_wheels_count - 5)){

                        $this->error_log('FD TRANSFER[' . 
                                             $wheels_high_awesome_cnt . ']=>' . 
                                             $filePath, 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             CRNRSTN_ELECTRUM);

                    }

                }

                $this->oWheel_high_awesome_ARRAY[$execution_serial][] = $oWheel_high_awesome;

            }

            if($total_wheels_dir_count > 0){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Empty directories from 
                 * FTP to write to 
                 * local directory. 
                 *
                 */
                foreach($this->directory_dir_content_ARRAY[$oEndpoint_serial] as 
                    $filePath => $key)
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Check for configured 
                     * exclusions. 
                     *
                     */
                    $exclusion_check_result = $this->isNotExcluded_asset(
                                                     $filePath, 
                                                     $execution_batch_serial, 
                                                     $FIREHOT_oEndpoint_SOURCE);

                    $wheels_high_awesome_cnt++;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Wheel High 
                     * Awesome Eyes Local Directory 
                     * File Transfer Support.
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2032 hrs.
                     *
                     * $oWheel_high_awesome = new crnrstn_wheel_high_awesome_eyes(
                     *                        $execution_serial, 
                     *                        $FIREHOT_oEndpoint_SOURCE, 
                     *                        $FIREHOT_oEndpoint_DESTINATION, 
                     *                        $this->oCRNRSTN_USR, 
                     *                        $total_wheels_count, 
                     *                        $wheels_high_awesome_cnt, 
                     *                        $exclusion_check_result);
                     *
                     */
                    $oWheel_high_awesome = $this->return_registered_resource(
                                                  'new', 
                                                  'crnrstn_wheel_high_awesome_eyes', 
                                                  $execution_serial, 
                                                  $FIREHOT_oEndpoint_SOURCE, 
                                                  $FIREHOT_oEndpoint_DESTINATION, 
                                                  $this->oCRNRSTN_USR, 
                                                  $total_wheels_count, 
                                                  $wheels_high_awesome_cnt, 
                                                  $exclusion_check_result);

                    $oWheel_high_awesome->receive_asset_meta($filePath, $this);

                    $oWheel_high_awesome->init_fileSize_bytes(0);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Question :: Who run 
                     * it...Who run it!?! 
                     *
                     * Answer :: The Lord 
                     * runs it. 
                     *
                     *
                     * if($oWheel_high_awesome->process_dir_asset(
                     *                          $filePath, 
                     *                          'FD', 
                     *                          $execution_serial, 
                     *                          $execution_batch_serial, 
                     *                          $hot_src_connection_ARRAY, 
                     *                          $hot_dest_connection_ARRAY, 
                     *                          $this))
                     * {
                     *
                     */
                    if($oWheel_high_awesome->process_dir_asset(
                                             $filePath, 
                                             'FD', 
                                             $execution_serial, 
                                             $execution_batch_serial, 
                                             $hot_src_connection_ARRAY, 
                                             $hot_dest_connection_ARRAY, 
                                             $this, 
                                             $this->oElectrum_STATS)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Increment transfer 
                         * count to destination. 
                         *
                         */
                        $this->oElectrum_STATS->plus_one_asset_transfer(
                                                $oEndpoint_serial, 
                                                $oEndpoint_serial_dest, 
                                                $execution_serial, 
                                                $execution_batch_serial, 
                                                0);

                    }

                    if($wheels_high_awesome_cnt < 5){

                        $this->error_log('FD TRANSFER[' . 
                                             $wheels_high_awesome_cnt . ']=>' . 
                                             $filePath, 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             CRNRSTN_ELECTRUM);

                    }else{

                        if($wheels_high_awesome_cnt > ($total_wheels_count - 5)){

                            $this->error_log('FD TRANSFER[' . 
                                                 $wheels_high_awesome_cnt . ']=>' . 
                                                 $filePath, 
                                                 __LINE__, 
                                                 __METHOD__, 
                                                 __FILE__, 
                                                 CRNRSTN_ELECTRUM);

                        }

                    }

                    $this->oWheel_high_awesome_ARRAY[$execution_serial][] = $oWheel_high_awesome;

                }

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function electrum_datamover_DF(
                     $execution_serial, 
                     $execution_batch_serial, 
                     $hot_src_connection_ARRAY, 
                     $hot_dest_connection_ARRAY)
    {

        $tmp_timestamp_nom = array();
        $FIREHOT_oEndpoint_SOURCE = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
        $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

        if(isset($this->timestamp_nom_pattern)){

            $FIREHOT_oEndpoint_SOURCE->add_directory_nom_pattern($this->timestamp_nom_pattern);
            $this->oElectrum_STATS->init_directory_datestamp_nom(
                                    $FIREHOT_oEndpoint_SOURCE->return_serial(), 
                                    $FIREHOT_oEndpoint_SOURCE->return_timestamp_nom());

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Endpoint serial. 
         *
         */
        $oEndpoint_serial = $FIREHOT_oEndpoint_SOURCE->return_serial();
        $oEndpoint_serial_dest = $FIREHOT_oEndpoint_DESTINATION->return_serial();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Endpoint WCR key 
         * or path (if local 
         * directory via 
         * input parameter). 
         *
         * $oEndpoint_WCRkey_or_path = $FIREHOT_oEndpoint_SOURCE->return_WCRkey_or_PATH();
         *
         */

        $total_wheels_count = sizeof($this->directory_content_ARRAY[$oEndpoint_serial]);
        $this->error_log('The CRNRSTN :: Electrum ' . 
                             'process is handling ' . 
                             'DF asset transfer of ' . 
                             $total_wheels_count . 
                             ' assets[' . 
                             $this->return_bytes(
                                                  $this->source_total_filesize_ARRAY[$oEndpoint_serial][0], 
                                                  4) . 
                             '] ' . 
                             $FIREHOT_oEndpoint_DESTINATION->return_FTP_SERVER() . '::' . 
                             $FIREHOT_oEndpoint_DESTINATION->return_FTP_PORT() . ' to ' . 
                             $FIREHOT_oEndpoint_DESTINATION->return_FTP_DIR_PATH(), 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $wheels_high_awesome_cnt = 0;
        foreach($this->directory_content_ARRAY[$oEndpoint_serial] as 
            $filePath => $key){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Check for configured 
             * exclusions. 
             *
             */
            $exclusion_check_result = $this->isNotExcluded_asset(
                                             $filePath, 
                                             $execution_batch_serial, 
                                             $FIREHOT_oEndpoint_SOURCE);

            $wheels_high_awesome_cnt++;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of 
             * the CRNRSTN :: Electrum :: 
             * Ezekiel 1:4 :: Wheel High 
             * Awesome Eyes Local Directory 
             * File Transfer Support.
             *
             *
             * 5 :: Monday, July 15, 2024 @ 2033 hrs.
             *
             * $oWheel_high_awesome = new crnrstn_wheel_high_awesome_eyes(
             *                            $execution_serial, 
             *                            $FIREHOT_oEndpoint_SOURCE, 
             *                            $FIREHOT_oEndpoint_DESTINATION, 
             *                            $this->oCRNRSTN_USR, 
             *                            $total_wheels_count, 
             *                            $wheels_high_awesome_cnt, 
             *                            $exclusion_check_result);
             *
             */
            $oWheel_high_awesome = $this->return_registered_resource(
                                          'new', 
                                          'crnrstn_wheel_high_awesome_eyes', 
                                          $execution_serial, 
                                          $FIREHOT_oEndpoint_SOURCE, 
                                          $FIREHOT_oEndpoint_DESTINATION, 
                                          $this->oCRNRSTN_USR, 
                                          $total_wheels_count, 
                                          $wheels_high_awesome_cnt, 
                                          $exclusion_check_result);

            $oWheel_high_awesome->receive_asset_meta($filePath, $this);

            if(isset($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                    $oWheel_high_awesome->init_fileSize_bytes($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Question :: Who run 
             * it...Who run it!?! 
             *
             * Answer :: The Lord 
             * runs it. 
             *
             */
            if($oWheel_high_awesome->process_asset(
                                     $filePath, 
                                     'DF', 
                                     $execution_serial, 
                                     $execution_batch_serial, 
                                     $hot_src_connection_ARRAY, 
                                     $hot_dest_connection_ARRAY, 
                                     $this, 
                                     $this->oElectrum_STATS))
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Increment transfer 
                 * count to destination. 
                 *
                 */
                $this->oElectrum_STATS->plus_one_asset_transfer(
                                        $oEndpoint_serial, 
                                        $oEndpoint_serial_dest, 
                                        $execution_serial, 
                                        $execution_batch_serial, 
                                        $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

            }

            if($wheels_high_awesome_cnt < 5){

                $this->error_log('DF TRANSFER[' . 
                                     $wheels_high_awesome_cnt . ']=>' . 
                                     $filePath, 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

            }else{

                if($wheels_high_awesome_cnt > ($total_wheels_count - 5)){

                    $this->error_log('DF TRANSFER[' . 
                                         $wheels_high_awesome_cnt . ']=>' . 
                                         $filePath, 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                }

            }

            $this->oWheel_high_awesome_ARRAY[$execution_serial][] = $oWheel_high_awesome;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function electrum_datamover_DD(
                     $execution_serial, 
                     $execution_batch_serial, 
                     $hot_src_connection_ARRAY, 
                     $hot_dest_connection_ARRAY)
    {

        try{

            $tmp_timestamp_nom = array();
            $FIREHOT_oEndpoint_SOURCE = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
            $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

            if(isset($this->timestamp_nom_pattern)){

                $FIREHOT_oEndpoint_SOURCE->add_directory_nom_pattern($this->timestamp_nom_pattern);
                $this->oElectrum_STATS->init_directory_datestamp_nom(
                                        $FIREHOT_oEndpoint_SOURCE->return_serial(), 
                                        $FIREHOT_oEndpoint_SOURCE->return_timestamp_nom());

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Endpoint serial. 
             *
             */
            $oEndpoint_serial = $FIREHOT_oEndpoint_SOURCE->return_serial();
            $oEndpoint_serial_dest = $FIREHOT_oEndpoint_DESTINATION->return_serial();

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Endpoint WCR key or 
             * path (if local directory 
             * via input parameter). 
             * 
             * $oEndpoint_WCRkey_or_path = $FIREHOT_oEndpoint_SOURCE->return_WCRkey_or_PATH();
             *
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * CRNRSTN :: Electrum 
             * sub-request total 
             * file size (bytes). 
             *
             */
            $tmp_file_size_total_bytes = $this->source_total_filesize_ARRAY[$oEndpoint_serial][0];
            $tmp_file_size_total = $this->return_bytes($tmp_file_size_total_bytes, 5);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Total available 
             * storage size at 
             * destination (bytes). 
             *
             */
            $tmp_destination_capacity_bytes = $FIREHOT_oEndpoint_DESTINATION->return_availableByteCapacity();
            $tmp_destination_diskSize_bytes = $FIREHOT_oEndpoint_DESTINATION->return_hardDriveSize();
            $tmp_destination_capacity = $this->return_bytes($tmp_destination_capacity_bytes, 5);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Calculate percentage 
             * utilization of request. 
             *
             */
            $percentage_utilization_ask = 100 - ((($tmp_file_size_total + ($tmp_destination_diskSize_bytes - $tmp_destination_capacity)) / $tmp_destination_diskSize_bytes) * 100);

            if($percentage_utilization_ask > $this->max_disk_storage_utilization){

                $percentage_utilization_ask = 100 - ((($tmp_file_size_total + ($tmp_destination_diskSize_bytes - $tmp_destination_capacity)) / $tmp_destination_diskSize_bytes) * 100);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('The CRNRSTN :: Electrum ' . 
                    'max local DIR destination storage ' . 
                    'utilization has been exceeded ' . 
                    'with an ask which would result in ' . 
                    $percentage_utilization_ask . 
                    '% usage. This being when ' . 
                    $this->max_disk_storage_utilization . 
                    '% is the currently configured ' . 
                    'maximum [See electrum_doNotPassDisk' . 
                    'UsagePercent()]. For the record, only ' . 
                    $tmp_destination_capacity . 
                    ' is available at ' . 
                    $FIREHOT_oEndpoint_DESTINATION->return_LOCAL_DIR_PATH() . 
                    '.');

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * $this->error_log('The CRNRSTN :: Electrum ' . 
                 *                      'process is handling DD[' . 
                 *                      $tmp_file_size_total . ' required/' . 
                 *                      $tmp_destination_capacity . 
                 *                      ' avail] asset transfer of ' . 
                 *                      $total_wheels_count . 
                 *                      ' assets[' . 
                 *                      $this->return_bytes($this->source_total_filesize_ARRAY[$oEndpoint_serial][0], 4) . 
                 *                      '] to ' . 
                 *                      $FIREHOT_oEndpoint_DESTINATION->return_LOCAL_DIR_PATH(). 
                 *                      '.', 
                 *                      __LINE__, 
                 *                      __METHOD__, 
                 *                      __FILE__, 
                 *                      CRNRSTN_ELECTRUM);
                 *
                 */

                $wheels_high_awesome_cnt = 0;
                $total_wheels_count = sizeof($this->directory_content_ARRAY[$oEndpoint_serial]);
                foreach($this->directory_content_ARRAY[$oEndpoint_serial] as 
                    $filePath => $key)
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Check for configured 
                     * exclusions. 
                     *
                     */
                    $exclusion_check_result = $this->isNotExcluded_asset(
                                                     $filePath, 
                                                     $execution_batch_serial, 
                                                     $FIREHOT_oEndpoint_SOURCE);

                    $wheels_high_awesome_cnt++;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Wheel High 
                     * Awesome Eyes Local Directory 
                     * File Transfer Support.
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2034 hrs.
                     *
                     * $oWheel_high_awesome = new crnrstn_wheel_high_awesome_eyes(
                     *                            $execution_serial, 
                     *                            $FIREHOT_oEndpoint_SOURCE, 
                     *                            $FIREHOT_oEndpoint_DESTINATION, 
                     *                            $this->oCRNRSTN_USR, 
                     *                            $total_wheels_count, 
                     *                            $wheels_high_awesome_cnt, 
                     *                            $exclusion_check_result);
                     *
                     */
                    $oWheel_high_awesome = $this->return_registered_resource(
                                                  'new', 
                                                  'crnrstn_wheel_high_awesome_eyes', 
                                                  $execution_serial, 
                                                  $FIREHOT_oEndpoint_SOURCE, 
                                                  $FIREHOT_oEndpoint_DESTINATION, 
                                                  $this->oCRNRSTN_USR, 
                                                  $total_wheels_count, 
                                                  $wheels_high_awesome_cnt, 
                                                  $exclusion_check_result);

                    $oWheel_high_awesome->receive_asset_meta($filePath, $this);

                    if(isset($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath])){

                        if($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath] != -1){

                            $oWheel_high_awesome->init_fileSize_bytes($this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

                        }

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Question :: Who run 
                     * it...Who run it!?! 
                     *
                     * Answer :: The Lord 
                     * runs it. 
                     *
                     */
                    if($oWheel_high_awesome->process_asset(
                                             $filePath, 
                                             'DD', 
                                             $execution_serial, 
                                             $execution_batch_serial, 
                                             $hot_src_connection_ARRAY, 
                                             $hot_dest_connection_ARRAY, 
                                             $this, 
                                             $this->oElectrum_STATS))
                    {

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Increment transfer 
                         * count to destination. 
                         *
                         */
                        $this->oElectrum_STATS->plus_one_asset_transfer(
                                                $oEndpoint_serial, 
                                                $oEndpoint_serial_dest, 
                                                $execution_serial, 
                                                $execution_batch_serial, 
                                                $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filePath]);

                    }

                    if($wheels_high_awesome_cnt < 5){

                        $this->error_log('DD TRANSFER[' . 
                                             $wheels_high_awesome_cnt . ']=>' . 
                                             $filePath, 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             CRNRSTN_ELECTRUM);

                    }else{

                        if($wheels_high_awesome_cnt > ($total_wheels_count - 5)){

                            $this->error_log('DD TRANSFER[' . 
                                                 $wheels_high_awesome_cnt . ']=>' . 
                                                 $filePath, 
                                                 __LINE__, 
                                                 __METHOD__, 
                                                 __FILE__, 
                                                 CRNRSTN_ELECTRUM);

                        }

                    }

                    $this->oWheel_high_awesome_ARRAY[$execution_serial][] = $oWheel_high_awesome;

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function process_sub_batch_asset_transfer(
                     $execution_serial, 
                     $execution_batch_serial, 
                     $hot_src_connection_ARRAY, 
                     $hot_dest_connection_ARRAY)
    {

        /**
         * $hot_src_connection_ARRAY['oLightning_ftp_conn']
         * $hot_src_connection_ARRAY['FIREHOT_oEndpoint']
         * $hot_dest_connection_ARRAY['oLightning_ftp_conn']
         * $hot_dest_connection_ARRAY['FIREHOT_oEndpoint']
         *
         */

        $this->error_log('****** Start CRNRSTN :: Electrum ' . 
                             'sub-batch data copy request ******', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        try{

            $tmp_transfer_profile = '';

            $FIREHOT_oEndpoint_SOURCE = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
            $FIREHOT_oEndpoint_SOURCE->log_connection_status('batch transfer :: ' . 
                                       'source endpoint initialization start');

            $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];
            $FIREHOT_oEndpoint_DESTINATION->log_connection_status('batch transfer :: ' . 
                                            'destination endpoint initialization start');

            $this->error_log('****** SOURCE ENDPOINT ' . 
                                 'HANDLING START PROCESS - ' . 
                                 'DATA COPY REQUEST ******', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Source endpoint 
             * handling - Do we 
             * have FTP conn? 
             *
             */
            if(!is_object($hot_src_connection_ARRAY['oLightning_ftp_conn'])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Directory Source. 
                 *
                 */
                $tmp_transfer_profile .= 'D';

                $tmp_src_DIR_PATH = $FIREHOT_oEndpoint_SOURCE->return_LOCAL_DIR_PATH();

                if(!is_dir($tmp_src_DIR_PATH)){

                    $local_oWCR_key = $FIREHOT_oEndpoint_SOURCE->return_local_oWCR_key();
                    $tmp_src_DIR_PATH = $this->get_resource(
                                                             'LOCAL_DIR_PATH', 
                                                             $local_oWCR_key);

                }

                $this->error_log('****** SOURCE ' . 
                                     'ENDPOINT = DIRECTORY[' . 
                                     $tmp_src_DIR_PATH . 
                                     '] ******', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

                if($this->validate_DIR_endpoint('SOURCE', $tmp_src_DIR_PATH)){

                    $FIREHOT_oEndpoint_SOURCE->log_connection_status('batch transfer :: ' . 
                                               'source validation complete');

                    $tmp_serial = $FIREHOT_oEndpoint_SOURCE->return_serial();

                    if(!isset($this->directory_content_ARRAY[$tmp_serial])){

                        $local_dir_contents_SOURCE = $this->localdir_list_files_recursive(
                                                            $tmp_src_DIR_PATH, 
                                                            $tmp_serial);

                        $this->directory_content_ARRAY[$tmp_serial] = $local_dir_contents_SOURCE;

                        if($local_dir_contents_SOURCE){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * We have list of 
                             * assets at source 
                             * dir endpoint. 
                             *
                             */
                            $FIREHOT_oEndpoint_SOURCE->log_connection_status('batch transfer :: local ' . 
                                                       'directory file listing[' . 
                                                       sizeof($local_dir_contents_SOURCE) . 
                                                       ' total] complete');

                        }

                    }

                }else{

                    $this->global_execute_authorization = false;
                    $this->global_execute_authorization_reason = 'ERR420.5 - Invalid directory ' . 
                                                                 'location (or read permissions) ' . 
                                                                 'at SOURCE endpoint directory, ' . 
                                                                 $tmp_src_DIR_PATH . '.';

                    if(is_dir($tmp_src_DIR_PATH)){

                        $tmp_current_perms = substr(decoct(fileperms($tmp_src_DIR_PATH)), 2);

                    }else{

                        $tmp_current_perms = 'invalid path';

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The CRNRSTN :: Electrum batch ' . 
                        'process has failed due to a provided ' . 
                        'source directory endpoint (' . 
                        $tmp_src_DIR_PATH . 
                        ') being an invalid source (' . 
                        $tmp_current_perms . 
                        ') for asset retrieval.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * FTP Source.
                 *
                 */
                $tmp_transfer_profile .= 'F';
                $oLightning_ftp_conn_SOURCE = $hot_src_connection_ARRAY['oLightning_ftp_conn'];
                $tmp_src_ftp_stream = $oLightning_ftp_conn_SOURCE->return_ftp_stream();
                $tmp_src_FTP_SERVER = $FIREHOT_oEndpoint_SOURCE->return_FTP_SERVER();
                $tmp_src_FTP_USERNAME = $FIREHOT_oEndpoint_SOURCE->return_FTP_USERNAME();
                $tmp_src_FTP_PASSWORD = $FIREHOT_oEndpoint_SOURCE->return_FTP_PASSWORD();
                $tmp_src_FTP_PORT = $FIREHOT_oEndpoint_SOURCE->return_FTP_PORT();
                $tmp_src_FTP_DIR_PATH = $FIREHOT_oEndpoint_SOURCE->return_FTP_DIR_PATH();

                $tmp_endpoint_id = $this->oCRNRSTN->hash(
                                                    $tmp_src_FTP_SERVER . 
                                                    $tmp_src_FTP_USERNAME . 
                                                    $tmp_src_FTP_PASSWORD . 
                                                    $tmp_src_FTP_PORT, 
                                                    'md5');
                $this->error_log('****** SOURCE ENDPOINT = FTP[' . 
                                     $tmp_src_FTP_SERVER . '][' . 
                                     $tmp_src_FTP_DIR_PATH . 
                                     '] ******', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Extract all 
                 * file path. 
                 *
                 */
                $tmp_config_serial = $this->oCRNRSTN->get_crnrstn('config_serial');
                $tmp_crc = $this->crc_int32($tmp_config_serial);
                $_SESSION['CRNRSTN_' . $tmp_crc]['CRNRSTN_EXCEPTION_PREFIX'] = 'The CRNRSTN :: Electrum ' . 
                                                                               'process has experienced FTP ' . 
                                                                               'directory access related error on ' . 
                                                                               $tmp_src_FTP_SERVER . '::' . 
                                                                               $tmp_src_FTP_PORT . 
                                                                               ' when accessing the ' . 
                                                                               'destination directory, ' . 
                                                                               $tmp_src_FTP_DIR_PATH . ' as ';

                $tmp_serial = $FIREHOT_oEndpoint_SOURCE->return_serial();
                if(!isset($this->directory_content_ARRAY[$tmp_serial])){

                    $ftp_contents_SOURCE = $this->ftp_list_files_recursive(
                                                  $tmp_src_ftp_stream, 
                                                  $tmp_src_FTP_DIR_PATH, 
                                                  $tmp_serial);

                    $ftp_contents_DIR_SOURCE = $this->merge_ftp_dir_array_to_file(
                                                      $ftp_contents_SOURCE, 
                                                      $tmp_serial);

                    if($ftp_contents_SOURCE){

                        $this->directory_content_ARRAY[$tmp_serial] = $ftp_contents_SOURCE;
                        $this->directory_dir_content_ARRAY[$tmp_serial] = $ftp_contents_DIR_SOURCE;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have list of 
                         * assets at source 
                         * FTP endpoint. 
                         *
                         */
                        $FIREHOT_oEndpoint_SOURCE->connection_status = 'batch transfer :: ' . 
                                                                       'FTP directory file listing[' . 
                                                                       sizeof($ftp_contents_SOURCE) . 
                                                                       ' total] complete';
                        $FIREHOT_oEndpoint_SOURCE->connection_status_log[] = 'batch transfer :: FTP ' . 
                                                                             'directory file listing[' . 
                                                                             sizeof($ftp_contents_SOURCE) . 
                                                                             ' total] complete';

                    }else{

                        $this->global_execute_authorization = false;
                        $this->global_execute_authorization_reason = 'ERR420.5 - Invalid FTP path ' . 
                                                                     'location (or read permissions) ' . 
                                                                     'at SOURCE FTP endpoint ' . 
                                                                     $tmp_src_FTP_SERVER . '::' . 
                                                                     $tmp_src_FTP_PORT . 
                                                                     ', with path of ' . 
                                                                     $tmp_src_FTP_DIR_PATH . '.';

                    }

                }

                $_SESSION['CRNRSTN_' . $tmp_crc]['CRNRSTN_EXCEPTION_PREFIX'] = '';

            }

            $this->error_log('****** DESTINATION ENDPOINT ' . 
                                 'HANDLING START PROCESS - ' . 
                                 'DATA COPY REQUEST ******', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Destination endpoint 
             * handling. 
             *
             */
            if(!is_object($hot_dest_connection_ARRAY['oLightning_ftp_conn'])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Directory destination.
                 *
                 */
                $tmp_transfer_profile .= 'D';

                $tmp_dest_DIR = $FIREHOT_oEndpoint_DESTINATION->return_LOCAL_DIR_PATH();
                $mkdir_permissons_mode = $FIREHOT_oEndpoint_DESTINATION->return_LOCAL_MKDIR_MODE();

                if(!is_dir($tmp_dest_DIR)){

                    $tmp_local_oWCR_key = $FIREHOT_oEndpoint_DESTINATION->return_local_oWCR_key();

                    /**
                     *error_log('[lnum ' . 
                     *    __LINE__ . '] [mthd ' . 
                     *    __METHOD__ . '] (' . 
                     *    $mkdir_permissons_mode . ')tmp_local_oWCR_key=' . 
                     *    $tmp_local_oWCR_key . ' and tmp_dest_DIR=' . 
                     *    $tmp_dest_DIR);
                     *
                     */
                    $tmp_dest_DIR = $this->get_resource(
                                                         'LOCAL_DIR_PATH', 
                                                         $tmp_local_oWCR_key);
                    $mkdir_permissons_mode = $this->get_resource(
                                                                  'LOCAL_MKDIR_MODE', 
                                                                  $tmp_local_oWCR_key);

                }

                $this->error_log('****** DESTINATION ' . 
                                     'ENDPOINT = DIRECTORY[' . 
                                     $tmp_dest_DIR . 
                                     '] ******', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

                if($this->validate_DIR_endpoint(
                          'DESTINATION', 
                          $tmp_dest_DIR, 
                          $mkdir_permissons_mode))
                {

                    $FIREHOT_oEndpoint_DESTINATION->log_connection_status('batch transfer :: ' . 
                                                    'destination validation complete');

                }else{

                    if(is_dir($tmp_dest_DIR)){

                        $tmp_current_perms = substr(decoct(fileperms($tmp_dest_DIR)), 2);

                    }else{

                        $tmp_current_perms = 'invalid path';

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The CRNRSTN :: Electrum ' . 
                        'batch process has failed due to ' . 
                        'a provided destination directory endpoint (' . 
                        $tmp_dest_DIR . 
                        ') being an invalid source (' . 
                        $tmp_current_perms . 
                        ') for temporary asset storage.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * FTP destination. 
                 *
                 */
                $tmp_transfer_profile .= 'F';
                $oLightning_ftp_conn_DESTINATION = $hot_dest_connection_ARRAY['oLightning_ftp_conn'];
                //$tmp_dest_ftp_stream = $oLightning_ftp_conn_DESTINATION->return_ftp_stream();
                $tmp_dest_FTP_SERVER = $FIREHOT_oEndpoint_DESTINATION->return_FTP_SERVER();
                //$tmp_dest_FTP_PORT = $FIREHOT_oEndpoint_DESTINATION->return_FTP_PORT();
                $tmp_dest_FTP_DIR_PATH = $FIREHOT_oEndpoint_DESTINATION->return_FTP_DIR_PATH();

                $this->error_log('****** DESTINATION ENDPOINT ' . 
                                     'ERROR = FTP[' . 
                                     $tmp_dest_FTP_SERVER . '][' . 
                                     $tmp_dest_FTP_DIR_PATH . '] ******', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

            }

            $this->error_log('****** PROCESS ->' . 
                                 $tmp_transfer_profile . 
                                 '<- DATA COPY REQUEST ******', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            switch($tmp_transfer_profile){
                case 'FF':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * FTP TO FTP. 
                     *
                     */
                    $this->electrum_datamover_FF(
                           $execution_serial, 
                           $execution_batch_serial, 
                           $hot_src_connection_ARRAY, 
                           $hot_dest_connection_ARRAY);

                break;
                case 'DD':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * DIR TO DIR. 
                     *
                     */
                    $this->electrum_datamover_DD(
                           $execution_serial, 
                           $execution_batch_serial, 
                           $hot_src_connection_ARRAY, 
                           $hot_dest_connection_ARRAY);

                break;
                case 'FD':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * FTP TO DIR. 
                     *
                     */
                    $this->electrum_datamover_FD(
                           $execution_serial, 
                           $execution_batch_serial, 
                           $hot_src_connection_ARRAY, 
                           $hot_dest_connection_ARRAY);

                break;
                case 'DF':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * DIR TO FTP. 
                     *
                     */
                    $this->electrum_datamover_DF(
                           $execution_serial, 
                           $execution_batch_serial, 
                           $hot_src_connection_ARRAY, 
                           $hot_dest_connection_ARRAY);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

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
    private function seeennd_it(
                     $execution_serial, 
                     $batch_serial)
    {

        if($this->global_execute_authorization){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * For each 
             * source endpoint. 
             *
             */
            foreach($this->queued_endpoint_ARRAY[$batch_serial]['SOURCE'] as 
                $key_src => $hot_src_connection_ARRAY)
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Send to each 
                 * destination endpoint. 
                 *
                 */
                foreach($this->queued_endpoint_ARRAY[$batch_serial]['DESTINATION'] as 
                    $key_dest => $hot_dest_connection_ARRAY)
                {

                    $this->process_sub_batch_asset_transfer(
                           $execution_serial, 
                           $batch_serial, 
                           $hot_src_connection_ARRAY, 
                           $hot_dest_connection_ARRAY);

                }

            }

        }else{

            $this->error_log('The CRNRSTN :: Electrum ' . 
                                 'process is not configured to run ' . 
                                 'properly, and it has locked down ' . 
                                 'all asset transfer requests. ' . 
                                 'Reason Code :: ' . 
                                 $this->global_execute_authorization_reason, 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

        }

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
    private function add_batch_SOURCE(
                     $FIREHOT_oEndpoint, 
                     $batch_serial, 
                     $oLightning_ftp_conn = NULL)
    {

        $tmp_array = array();
        $FIREHOT_oEndpoint->log_connection_status('source queued');

        $tmp_array['FIREHOT_oEndpoint'] = $FIREHOT_oEndpoint;

        if(isset($oLightning_ftp_conn)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Queue FTP endpoint.
             *
             */
            $oLightning_ftp_conn->log_connection_status('source queued');

            $tmp_array['oLightning_ftp_conn'] = $oLightning_ftp_conn;

            $this->queued_endpoint_ARRAY[$batch_serial]['SOURCE'][] = $tmp_array;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Queue directory 
             * endpoint. 
             *
             */
            $tmp_array['oLightning_ftp_conn'] = 0;
            $this->queued_endpoint_ARRAY[$batch_serial]['SOURCE'][] = $tmp_array;

        }

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
    private function add_batch_DESTINATION(
                     $FIREHOT_oEndpoint, 
                     $batch_serial, 
                     $oLightning_ftp_conn = NULL)
    {

        $tmp_array = array();
        $FIREHOT_oEndpoint->log_connection_status('destination queued');

        $tmp_array['FIREHOT_oEndpoint'] = $FIREHOT_oEndpoint;

        if(isset($oLightning_ftp_conn)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Queue FTP 
             * endpoint. 
             *
             */
            $oLightning_ftp_conn->log_connection_status('destination queued');

            $tmp_array['oLightning_ftp_conn'] = $oLightning_ftp_conn;

            $this->queued_endpoint_ARRAY[$batch_serial]['DESTINATION'][] = $tmp_array;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Queue directory 
             * endpoint. 
             *
             */
            $tmp_array['oLightning_ftp_conn'] = 0;
            $this->queued_endpoint_ARRAY[$batch_serial]['DESTINATION'][] = $tmp_array;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function load_exclusion_profile($FIREHOT_oEndpoint)
    {

        $FIREHOT_oEndpoint->asset_transfer_suppression_ARRAY = $this->asset_transfer_suppression_ARRAY;

        return $FIREHOT_oEndpoint;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function execute($execution_serial)
    {

        try{

            if(!isset($this->execute_from_source_authorization)){

                if(!isset($this->execute_to_destination_authorization)){

                    $this->error_log('The CRNRSTN :: Electrum ' . 
                                         'process has not been configured ' . 
                                         'with any source or destination endpoints.', 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);


                }else{

                    $this->error_log('The CRNRSTN :: Electrum ' . 
                                         'process has not been configured ' . 
                                         'with any source endpoints.', 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                }

            }else{

                if(!isset($this->execute_to_destination_authorization)){

                    $this->error_log('The CRNRSTN :: Electrum ' . 
                                         'process has not been configured ' . 
                                         'with any destination endpoints.', 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         CRNRSTN_ELECTRUM);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Both authorization 
                     * flags are set. 
                     *
                     */
                    if(($this->execute_to_destination_authorization == true) && 
                        ($this->execute_from_source_authorization == true))
                    {

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Batch execution 
                         * serialization. 
                         *
                         */
                        $batch_serial = $this->execution_batch_serial;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Reset batch serial 
                         * in preparation for 
                         * another electrum 
                         * execution (force 
                         * profile reset). 
                         *
                         */
                        $this->execution_batch_serial = $this->generate_new_key(100);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Load all 
                         * endpoint source.
                         *
                         * $this->oLighting_bolt_ARRAY['SOURCE'][$endpoint_serial][$endpoint_id][$key] = $FIREHOT_oEndpoint;
                         *
                         */
                        foreach($this->oLighting_bolt_ARRAY['SOURCE'] as 
                            $endpoint_serial => $serial_ARRAY)
                        {

                            foreach($serial_ARRAY as 
                                $endpoint_id => $oEndpoint_ARRAY)
                            {

                                foreach($oEndpoint_ARRAY as 
                                    $key => $FIREHOT_oEndpoint)
                                {

                                    if(!isset($this->processed_source_ARRAY[$execution_serial][$endpoint_serial])){
                                        $this->processed_source_ARRAY[$execution_serial][$endpoint_serial] = 1;

                                        $tmp_connection_type = $FIREHOT_oEndpoint->return_connection_type();

                                        switch($tmp_connection_type){
                                            case 'FTP':

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * Retrieve FTP 
                                                 * connection 
                                                 * stream object. 
                                                 *
                                                 */
                                                $oLightning_ftp_conn = self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY[$endpoint_id];

                                                $tmp_start_time_micro = $oLightning_ftp_conn->return_start_time_micro();
                                                $tmp_server = $FIREHOT_oEndpoint->return_FTP_SERVER();
                                                $tmp_FTP_DIR_PATH = $FIREHOT_oEndpoint->return_FTP_DIR_PATH();

                                                $this->error_log('FTP Connection status[' . 
                                                                     $tmp_FTP_DIR_PATH . '] ready==' . 
                                                                     $oLightning_ftp_conn->connection_status . '.', 
                                                                     __LINE__, 
                                                                     __METHOD__, 
                                                                     __FILE__, 
                                                                     CRNRSTN_ELECTRUM);

                                                if(($oLightning_ftp_conn->connection_status == 'ready') || 
                                                    ($oLightning_ftp_conn->connection_status == 'source FTP queued ' . 
                                                                                                'for execution by electrum'))
                                                {

                                                    $this->error_log('Queue SOURCE Endpoint[' . 
                                                                         $tmp_server . '][' . 
                                                                         $tmp_FTP_DIR_PATH . '] start time=[' . 
                                                                         $tmp_start_time_micro . 
                                                                         ']', 
                                                                         __LINE__, 
                                                                         __METHOD__, 
                                                                         __FILE__, 
                                                                         CRNRSTN_ELECTRUM_THREAD);

                                                    /**
                                                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                     * Source FTP receives 
                                                     * exclusion profile. 
                                                     *
                                                     */
                                                    $FIREHOT_oEndpoint = $this->load_exclusion_profile($FIREHOT_oEndpoint);
                                                    $this->oLighting_bolt_ARRAY['SOURCE'][$endpoint_serial][$endpoint_id][$key] = $FIREHOT_oEndpoint;

                                                    $this->add_batch_SOURCE($FIREHOT_oEndpoint, $batch_serial, $oLightning_ftp_conn);
                                                    $oLightning_ftp_conn->connection_status = 'source FTP queued for ' . 
                                                                                              'execution by electrum';
                                                    $oLightning_ftp_conn->connection_status_log[] = 'source FTP queued for ' . 
                                                                                                    'execution by electrum';

                                                }

                                                self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_ftp_conn;

                                            break;
                                            default:

                                                $tmp_path = $FIREHOT_oEndpoint->return_LOCAL_DIR_PATH();
                                                if(!is_dir($tmp_path)){

                                                    $tmp_local_oWCR_key = $FIREHOT_oEndpoint->return_local_oWCR_key();
                                                    $tmp_path = $this->get_resource(
                                                                                     'LOCAL_DIR_PATH', 
                                                                                     $tmp_local_oWCR_key);

                                                }

                                                $tmp_start_time_micro = $FIREHOT_oEndpoint->return_start_time_micro();
                                                $this->error_log('LOCAL_DIR Connection status[' . 
                                                                     $tmp_path . '] ready==' . 
                                                                     $FIREHOT_oEndpoint->connection_status . 
                                                                     '.', 
                                                                     __LINE__, 
                                                                     __METHOD__, 
                                                                     __FILE__, 
                                                                     CRNRSTN_ELECTRUM);

                                                if(($FIREHOT_oEndpoint->connection_status == 'ready') || 
                                                    ($FIREHOT_oEndpoint->connection_status == 'source LOCAL DIR queued ' . 
                                                                                              'for execution by electrum'))
                                                {

                                                    $this->error_log('Queue SOURCE Endpoint[' . 
                                                                         $tmp_path . '] start time=[' . 
                                                                         $tmp_start_time_micro . 
                                                                         '].', 
                                                                         __LINE__, 
                                                                         __METHOD__, 
                                                                         __FILE__, 
                                                                         CRNRSTN_ELECTRUM_THREAD);

                                                    /**
                                                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                     * Source DIR receives 
                                                     * exclusion profile. 
                                                     *
                                                     */
                                                    $FIREHOT_oEndpoint = $this->load_exclusion_profile($FIREHOT_oEndpoint);

                                                    $this->add_batch_SOURCE($FIREHOT_oEndpoint, $batch_serial);
                                                    $FIREHOT_oEndpoint->connection_status = 'source LOCAL DIR queued ' . 
                                                                                            'for execution by electrum';
                                                    $FIREHOT_oEndpoint->connection_status_log[] = 'source LOCAL DIR queued ' . 
                                                                                                  'for execution by electrum';

                                                }

                                                $this->oLighting_bolt_ARRAY['SOURCE'][$endpoint_serial][$endpoint_id][] = $FIREHOT_oEndpoint;

                                            break;

                                        }

                                    }

                                }

                            }

                        }

                        foreach($this->oLighting_bolt_ARRAY['DESTINATION'] as 
                            $endpoint_serial => $serial_ARRAY)
                        {
                            foreach($serial_ARRAY as 
                                $endpoint_id => $oEndpoint_ARRAY)
                            {
                                foreach($oEndpoint_ARRAY as 
                                    $key => $FIREHOT_oEndpoint)
                                {

                                    if(!isset($this->processed_source_ARRAY[$execution_serial][$endpoint_serial])){
                                        $this->processed_destination_ARRAY[$execution_serial][$endpoint_serial] = 1;

                                        $tmp_connection_type = $FIREHOT_oEndpoint->return_connection_type();

                                        switch($tmp_connection_type){
                                            case 'FTP':

                                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                                 * Retrieve FTP connection 
                                                 * stream object. 
                                                 *
                                                 */
                                                $oLightning_ftp_conn = self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY[$endpoint_id];
                                                $tmp_start_time_micro = $oLightning_ftp_conn->return_start_time_micro();
                                                $tmp_server = $FIREHOT_oEndpoint->return_FTP_SERVER();
                                                $tmp_FTP_DIR_PATH = $FIREHOT_oEndpoint->return_FTP_DIR_PATH();

                                                if(($oLightning_ftp_conn->connection_status == 'ready') || 
                                                    ($oLightning_ftp_conn->connection_status == 'source FTP queued ' . 
                                                                                                'for execution by electrum'))
                                                {

                                                    $this->error_log('Queue DESTINATION Endpoint[' . 
                                                                         $tmp_server . '/' . 
                                                                         $tmp_FTP_DIR_PATH . '] start time=[' . 
                                                                         $tmp_start_time_micro . 
                                                                         '].', 
                                                                         __LINE__, 
                                                                         __METHOD__, 
                                                                         __FILE__, 
                                                                         CRNRSTN_ELECTRUM_THREAD);

                                                    $this->add_batch_DESTINATION(
                                                           $FIREHOT_oEndpoint, 
                                                           $batch_serial, 
                                                           $oLightning_ftp_conn);
                                                    $oLightning_ftp_conn->log_connection_status('destination FTP queued ' . 
                                                                          'for execution by electrum');

                                                }

                                                self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_ftp_conn;

                                            break;
                                            default:

                                                $tmp_local_dir_path = $FIREHOT_oEndpoint->return_LOCAL_DIR_PATH();

                                                if(!is_dir($tmp_local_dir_path)){

                                                    $tmp_local_oWCR_key = $FIREHOT_oEndpoint->return_local_oWCR_key();

                                                    /**
                                                     *error_log('[lnum ' . 
                                                     *    __LINE__ . '] [mthd ' . 
                                                     *    __METHOD__ . '] tmp_local_dir_path=' . 
                                                     *    $tmp_local_dir_path . ' || tmp_local_oWCR_key=' . 
                                                     *    $tmp_local_oWCR_key);
                                                     *
                                                     */

                                                    $tmp_local_dir_path = $this->get_resource(
                                                                                               'LOCAL_DIR_PATH', 
                                                                                               $tmp_local_oWCR_key);
                                                    $mkdir_permissons_mode = $this->get_resource(
                                                                                                  'LOCAL_MKDIR_MODE', 
                                                                                                  $tmp_local_oWCR_key);

                                                }

                                                $tmp_start_time_micro = $FIREHOT_oEndpoint->return_start_time_micro();

                                                $this->error_log('status==ready==' . 
                                                                     $FIREHOT_oEndpoint->connection_status, 
                                                                     __LINE__, 
                                                                     __METHOD__, 
                                                                     __FILE__, 
                                                                     CRNRSTN_ELECTRUM_THREAD);

                                                if($FIREHOT_oEndpoint->connection_status == 'ready'){

                                                    $this->error_log('Queue DESTINATION Endpoint[' . 
                                                                         $tmp_local_dir_path . '] start time=[' . 
                                                                         $tmp_start_time_micro . 
                                                                         '].', __LINE__, 
                                                                         __METHOD__, 
                                                                         __FILE__, 
                                                                         CRNRSTN_ELECTRUM_THREAD);

                                                    $this->add_batch_DESTINATION(
                                                           $FIREHOT_oEndpoint, 
                                                           $batch_serial);
                                                    $FIREHOT_oEndpoint->log_connection_status('destination DIR queued ' . 
                                                                        'for execution by electrum');

                                                }

                                                $this->oLighting_bolt_ARRAY['SOURCE'][$endpoint_serial][$endpoint_id][] = $FIREHOT_oEndpoint;

                                            break;

                                        }

                                    }

                                }

                            }

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * All endpoints aggregated. 
                         * Seeennd it!
                         *
                         */
                        $this->seeennd_it($execution_serial, $batch_serial);

                        $this->endTime = $this->return_micro_time();
                        $this->elapsedTime = $this->elapsed_delta_time('ELECTRUM_PERFORMANCE_CLIENT');

                        //$this->elapsedTime = $this->elapsedTime + 12600000; // A test.

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Performance report 
                         * communications. 
                         *
                         */
                        $this->fire_reportingNotification($execution_serial, $batch_serial);

                    }

                }

            }

            $this->execute_from_source_authorization = NULL;
            $this->execute_to_destination_authorization = NULL;

            flush();
            ob_flush();

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false. 
             *
             */
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
    function addDestinationLOCAL(
             $dirPath, 
             $mkdir_permissons_mode)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Directory.
             *
             */
            $this->error_log('CRNRSTN :: Electrum Directory ' . 
                                 'DESTINATION - integrity check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_MKDIR_MODE = $mkdir_permissons_mode;
            $tmp_DIR_PATH = $dirPath;

            $tmp_endpoint_id = $this->oCRNRSTN->hash($tmp_DIR_PATH, 'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Destination Directory.
                 *
                 */
                if($this->validate_DIR_endpoint(
                          'DESTINATION', 
                          $tmp_DIR_PATH, 
                          $tmp_MKDIR_MODE))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum.
                     * 
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections.
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2035 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_destinationLOCAL_meta(
                                        $tmp_DIR_PATH, 
                                        $tmp_MKDIR_MODE);
                    $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->execute_to_destination_authorization = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $this->oElectrum_STATS->add_valid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    if(!isset($this->execute_to_destination_authorization)){

                        $this->execute_to_destination_authorization = false;

                    }

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $err_reason = '';
                    if(!is_dir($tmp_DIR_PATH)){

                        $err_reason = 'The path, ' . 
                                      $tmp_DIR_PATH . 
                                      ', is not recognized by ' . 
                                      'is_dir() as a directory.';

                    }else{

                        if(!is_writable($tmp_DIR_PATH)){

                            $err_reason = 'The path, ' . 
                                          $tmp_DIR_PATH.', (' . 
                                          $tmp_current_perms . 
                                          ') is not recognized by ' . 
                                          'is_writable() as being ' . 
                                          'a writable endpoint.';

                        }

                    }

                    $this->oElectrum_STATS->add_invalid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE, 
                                            $err_reason);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    if(is_dir($tmp_DIR_PATH)){

                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'process is unable to access (or chmod to ' . 
                            $tmp_MKDIR_MODE.') the destination directory path ("' . 
                            $tmp_DIR_PATH.'" with ' . 
                            $tmp_current_perms.' mode) for writing which is ' . 
                            'preventing successful validation and preload ' . 
                            'of this endpoint.');

                    }else{

                        throw new Exception('The CRNRSTN :: Electrum process ' . 
                            'is unable to access the destination directory path (' . 
                            $tmp_DIR_PATH.') for writing which is preventing ' . 
                            'successful validation and preload of this endpoint.');

                    }

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration 
                 * of endpoint into 
                 * this Electrum.
                 *
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections.
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2036 hrs.
                 *
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 *
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_destinationLOCAL_meta(
                                    $tmp_DIR_PATH, 
                                    $tmp_MKDIR_MODE);
                $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                $this->execute_to_destination_authorization = true;

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                $this->oElectrum_STATS->add_valid_destination_DIR(
                                        $tmp_DIR_PATH, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        $tmp_current_perms, 
                                        $tmp_MKDIR_MODE);


                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated ' . 
                                     'this DESTINATION directory (' . 
                                     $tmp_DIR_PATH . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
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
    function addFlattenedDestinationLOCAL(
             $dirPath, 
             $mkdir_permissons_mode)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * DIRECTORY.
             *
             */
            $this->error_log('CRNRSTN :: Electrum ' . 
                                 '[FLATTEN ALL FILES] Directory ' . 
                                 'DESTINATION - integrity check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_MKDIR_MODE = $mkdir_permissons_mode;
            $tmp_DIR_PATH = $dirPath;

            $tmp_endpoint_id = $this->oCRNRSTN->hash($tmp_DIR_PATH, 'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            if($this->ready_for_preload($tmp_endpoint_id) || $this->preload_endpoint_validation_fail[$tmp_endpoint_id]){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * DESTINATION DIRECTORY.
                 *
                 */
                if($this->validate_DIR_endpoint(
                          'DESTINATION', 
                          $tmp_DIR_PATH, 
                          $tmp_MKDIR_MODE)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum. 
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2039 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt($tmp_endpoint_serial, $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_flattenedDestinationLOCAL_meta(
                                        $tmp_DIR_PATH, 
                                        $tmp_MKDIR_MODE);
                    $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->execute_to_destination_authorization = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $this->oElectrum_STATS->add_valid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE, 
                                            true);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    if(!isset($this->execute_to_destination_authorization)){

                        $this->execute_to_destination_authorization = false;

                    }

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $err_reason = '';
                    if(!is_dir($tmp_DIR_PATH)){

                        $err_reason = 'The path, ' . 
                                      $tmp_DIR_PATH . 
                                      ', is not recognized ' . 
                                      'by is_dir() as a directory.';

                    }else{

                        if(!is_writable($tmp_DIR_PATH)){

                            $err_reason = 'The path, ' . 
                                          $tmp_DIR_PATH . 
                                          ', (' . 
                                          $tmp_current_perms . 
                                          ') is not recognized by ' . 
                                          'is_writable() as being ' . 
                                          'a writable endpoint.';

                        }

                    }

                    $this->oElectrum_STATS->add_invalid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE, 
                                            $err_reason);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    if(is_dir($tmp_DIR_PATH)){

                        $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);
                        throw new Exception('The CRNRSTN :: Electrum process ' . 
                            'is unable to access (or chmod to ' . 
                            $tmp_MKDIR_MODE . 
                            ') the destination directory path ("' . 
                            $tmp_DIR_PATH . '" with ' . 
                            $tmp_current_perms . 
                            ' mode) for writing which is ' . 
                            'preventing successful validation ' . 
                            'and preload of this endpoint.');

                    }else{

                        throw new Exception('The CRNRSTN :: Electrum process ' . 
                            'is unable to access the destination directory path (' . 
                            $tmp_DIR_PATH . 
                            ') for writing which is preventing successful ' . 
                            'validation and preload of this endpoint.');

                    }

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration 
                 * of endpoint into 
                 * this Electrum.
                 * 
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections.
                 * 
                 * 
                 * 5 :: Monday, July 15, 2024 @ 2040 hrs.
                 * 
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 * 
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_flattenedDestinationLOCAL_meta(
                                    $tmp_DIR_PATH, 
                                    $tmp_MKDIR_MODE);
                $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                $this->execute_to_destination_authorization = true;

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                $this->oElectrum_STATS->add_valid_destination_DIR(
                                        $tmp_DIR_PATH, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        $tmp_current_perms, 
                                        $tmp_MKDIR_MODE, 
                                        true);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated ' . 
                                     'this DESTINATION directory (' . 
                                     $tmp_DIR_PATH . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addSourceLOCAL($dirPath)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * DIRECTORY. 
             *
             */
            $this->error_log('CRNRSTN :: Electrum ' . 
                                 'Directory SOURCE - integrity ' . 
                                 'check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_MKDIR_MODE = NULL;
            $tmp_DIR_PATH = $dirPath;

            $tmp_endpoint_id = $this->oCRNRSTN->hash($tmp_DIR_PATH, 'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {
                /**
                 * TODO :: Confirm that the 
                 *         above "if statement" 
                 *         logic for the use of 
                 *         preload endpoint 
                 *         validation fail 
                 *         is sound. 
                 *         5 :: Friday, March 13, 2026 @ 0252 hrs.
                 *
                 */

                if($this->validate_DIR_endpoint(
                          'SOURCE', 
                          $tmp_DIR_PATH))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum.
                     * 
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     * 
                     * 
                     * 5 :: Monday, July 15, 2024 @ 2041 hrs.
                     * 
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     * 
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_sourceLOCAL_meta($dirPath);

                    $this->oLighting_bolt_ARRAY['SOURCE'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    if(!isset($this->execute_from_source_authorization)){

                        $this->execute_from_source_authorization = true;

                    }

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $tmp_current_perms = substr(decoct(fileperms($dirPath)), 2);

                    $this->oElectrum_STATS->add_valid_source_DIR(
                                            $dirPath, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->execute_from_source_authorization = false;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    $tmp_current_perms = substr(decoct(fileperms($dirPath)), 2);

                    $err_reason = '';
                    if(!is_dir($dirPath)){

                        $err_reason = 'The source path, ' . 
                                      $dirPath . 
                                      ', is not recognized ' . 
                                      'by is_dir() as a directory.';

                    }else{

                        if(!is_readable($dirPath)){

                            $err_reason = 'The source path, ' . 
                                          $dirPath . 
                                          ', (' . 
                                          $tmp_current_perms . 
                                          ') is not recognized by ' . 
                                          'is_readable() as being ' . 
                                          'a readable endpoint.';

                        }

                    }

                    $this->oElectrum_STATS->add_invalid_source_DIR(
                                            $dirPath, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $err_reason);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Electrum process ' . 
                        'experienced SOURCE directory ' . 
                        'validation error at ' . 
                        $tmp_DIR_PATH . '.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration 
                 * of endpoint into 
                 * this Electrum. 
                 * 
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections. 
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2042 hrs.
                 *
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 *
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_sourceLOCAL_meta($dirPath);

                $this->oLighting_bolt_ARRAY['SOURCE'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                if(!isset($this->execute_from_source_authorization)){

                    $this->execute_from_source_authorization = true;

                }

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $tmp_current_perms = substr(decoct(fileperms($dirPath)), 2);

                $this->oElectrum_STATS->add_valid_source_DIR(
                                        $dirPath, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        $tmp_current_perms);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated this ' . 
                                     'SOURCE directory (' . 
                                     $tmp_DIR_PATH . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addDestinationLOCAL_WCR($WildCardResource_key)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * DIRECTORY. 
             *
             */
            $this->error_log('CRNRSTN :: Electrum ' . 
                                 'Directory DESTINATION - ' . 
                                 'integrity check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_DIR_PATH = $this->get_resource(
                                                 'LOCAL_DIR_PATH', 
                                                 $WildCardResource_key);
            $tmp_MKDIR_MODE = $this->get_resource(
                                                   'LOCAL_MKDIR_MODE', 
                                                   $WildCardResource_key);

            $tmp_endpoint_id = $this->oCRNRSTN->hash($tmp_DIR_PATH, 'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {
                /**
                 * TODO :: Confirm that the 
                 *         above "if statement" 
                 *         logic for the use of 
                 *         preload endpoint 
                 *         validation fail 
                 *         is sound. 
                 *         5 :: Friday, March 13, 2026 @ 0252 hrs.
                 *
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * DESTINATION DIRECTORY. 
                 *
                 */
                if($this->validate_DIR_endpoint(
                          'DESTINATION', 
                          $tmp_DIR_PATH, 
                          $tmp_MKDIR_MODE))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum. 
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2042 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_destinationLOCAL_WCR_meta($WildCardResource_key);
                    $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->execute_to_destination_authorization = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $this->oElectrum_STATS->add_valid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    if(!isset($this->execute_to_destination_authorization)){

                        $this->execute_to_destination_authorization = false;

                    }

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $err_reason = '';
                    if(!is_dir($tmp_DIR_PATH)){

                        $err_reason = 'The path, ' . 
                                      $tmp_DIR_PATH . 
                                      ', is not recognized ' . 
                                      'by is_dir() as a directory.';

                    }else{

                        if(!is_writable($tmp_DIR_PATH)){

                            $err_reason = 'The path, ' . 
                                          $tmp_DIR_PATH . 
                                          ', (' . 
                                          $tmp_current_perms . 
                                          ') is not recognized ' . 
                                          'by is_writable() as ' . 
                                          'being a writable endpoint.';

                        }

                    }

                    $this->oElectrum_STATS->add_invalid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE, 
                                            $err_reason);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    if(is_dir($tmp_DIR_PATH)){

                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'process is unable to access (or chmod to ' . 
                            $tmp_MKDIR_MODE . ') the destination ' . 
                            'directory path ("' . 
                            $tmp_DIR_PATH . '" in ' . 
                            $tmp_current_perms . ' mode) for writing ' . 
                            'which is preventing successful validation ' . 
                            'and preload of this endpoint.');

                    }else{

                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'process is unable to access the destination ' . 
                            'directory path (' . 
                            $tmp_DIR_PATH . ') for writing which is ' . 
                            'preventing successful validation and preload ' . 
                            'of this endpoint.');

                    }

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration 
                 * of endpoint into 
                 * this Electrum. 
                 *
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections. 
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2042 hrs.
                 *
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 *
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_destinationLOCAL_WCR_meta($WildCardResource_key);
                $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                $this->execute_to_destination_authorization = true;

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                $this->oElectrum_STATS->add_valid_destination_DIR(
                                        $tmp_DIR_PATH, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        $tmp_current_perms, 
                                        $tmp_MKDIR_MODE);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated ' . 
                                     'this DESTINATION directory (' . 
                                     $tmp_DIR_PATH . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addFlattenedDestinationLOCAL_WCR($WildCardResource_key)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * DIRECTORY.
             *
             */
            $this->error_log('CRNRSTN :: Electrum ' . 
                                 '[ALL FLATTENED] Directory ' . 
                                 'DESTINATION - integrity check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_DIR_PATH = $this->get_resource(
                                                 'LOCAL_DIR_PATH', 
                                                 $WildCardResource_key);
            $tmp_MKDIR_MODE = $this->get_resource(
                                                   'LOCAL_MKDIR_MODE', 
                                                   $WildCardResource_key);

            $tmp_endpoint_id = $this->oCRNRSTN->hash($tmp_DIR_PATH, 'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {
                /**
                 * TODO :: Confirm that the 
                 *         above "if statement" 
                 *         logic for the use of 
                 *         preload endpoint 
                 *         validation fail 
                 *         is sound. 
                 *         5 :: Friday, March 13, 2026 @ 0311 hrs.
                 *
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * DESTINATION DIRECTORY.
                 *
                 */
                if($this->validate_DIR_endpoint(
                          'DESTINATION', 
                          $tmp_DIR_PATH, 
                          $tmp_MKDIR_MODE))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum. 
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2044 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_flattenedDestinationLOCAL_WCR_meta($WildCardResource_key);
                    $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->execute_to_destination_authorization = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $this->oElectrum_STATS->add_valid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE, 
                                            true);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    if(!isset($this->execute_to_destination_authorization)){

                        $this->execute_to_destination_authorization = false;

                    }

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $err_reason = '';
                    if(!is_dir($tmp_DIR_PATH)){

                        $err_reason = 'The path, ' . 
                                      $tmp_DIR_PATH . 
                                      ', is not recognized ' . 
                                      'by is_dir() as a directory.';

                    }else{

                        if(!is_writable($tmp_DIR_PATH)){

                            $err_reason = 'The path, ' . 
                                          $tmp_DIR_PATH . ', (' . 
                                          $tmp_current_perms . 
                                          ') is not recognized by ' . 
                                          'is_writable() as being ' . 
                                          'a writable endpoint.';

                        }

                    }

                    $this->oElectrum_STATS->add_invalid_destination_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $tmp_MKDIR_MODE, 
                                            $err_reason);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    if(is_dir($tmp_DIR_PATH)){

                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'process is unable to access (or chmod to ' . 
                            $tmp_MKDIR_MODE . 
                            ') the destination directory path ("' . 
                            $tmp_DIR_PATH . 
                            '" in ' . 
                            $tmp_current_perms . 
                            ' mode) for writing which is preventing ' . 
                            'successful validation and preload of ' . 
                            'this endpoint.');

                    }else{

                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'process is unable to access the destination ' . 
                            'directory path (' . 
                            $tmp_DIR_PATH . 
                            ') for writing which is preventing successful ' . 
                            'validation and preload of this endpoint.');

                    }

                }

            }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration of 
                     * endpoint into this Electrum. 
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2045 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_flattenedDestinationLOCAL_WCR_meta($WildCardResource_key);
                $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                $this->execute_to_destination_authorization = true;

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                $this->oElectrum_STATS->add_valid_destination_DIR(
                                        $tmp_DIR_PATH, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        $tmp_current_perms, 
                                        $tmp_MKDIR_MODE, 
                                        true);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated this ' . 
                                     'DESTINATION directory (' . 
                                     $tmp_DIR_PATH . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addSourceLOCAL_WCR($WildCardResource_key)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * DIRECTORY.
             *
             */
            $this->error_log('CRNRSTN :: Electrum Directory ' . 
                                 'SOURCE - integrity check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_MKDIR_MODE = NULL;
            $tmp_DIR_PATH = $this->get_resource(
                                                 'LOCAL_DIR_PATH', 
                                                 $WildCardResource_key);

            $tmp_endpoint_id = $this->oCRNRSTN->hash($tmp_DIR_PATH, 'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {

                if($this->validate_DIR_endpoint(
                          'SOURCE', 
                          $tmp_DIR_PATH))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum.
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2046 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_source_LOCAL_WCR_meta($WildCardResource_key);
                    $this->oLighting_bolt_ARRAY['SOURCE'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    if(!isset($this->execute_from_source_authorization)){

                        $this->execute_from_source_authorization = true;

                    }

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $this->oElectrum_STATS->add_valid_source_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->execute_from_source_authorization = false;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                    $err_reason = '';
                    if(!is_dir($tmp_DIR_PATH)){

                        $err_reason = 'The path, ' . 
                                      $tmp_DIR_PATH . 
                                      ', is not recognized ' . 
                                      'by is_dir() as a directory.';

                    }else{

                        if(!is_readable($tmp_DIR_PATH)){

                            $err_reason = 'The path, ' . 
                                          $tmp_DIR_PATH . ', (' . 
                                          $tmp_current_perms . 
                                          ') is not recognized ' . 
                                          'by is_readable() as ' . 
                                          'being a readable endpoint.';

                        }

                    }

                    $this->oElectrum_STATS->add_invalid_source_DIR(
                                            $tmp_DIR_PATH, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            $tmp_current_perms, 
                                            $err_reason);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('CRNRSTN :: Electrum process ' . 
                        'experienced a source directory ' . 
                        'validation error at ' . 
                        $tmp_DIR_PATH . '.');

                }

            }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum.
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2046 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_source_LOCAL_WCR_meta($WildCardResource_key);
                $this->oLighting_bolt_ARRAY['SOURCE'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                if(!isset($this->execute_from_source_authorization)){

                    $this->execute_from_source_authorization = true;

                }

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $tmp_current_perms = substr(decoct(fileperms($tmp_DIR_PATH)), 2);

                $this->oElectrum_STATS->add_valid_source_DIR(
                                        $tmp_DIR_PATH, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        $tmp_current_perms);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated ' . 
                                     'this SOURCE directory (' . 
                                     $tmp_DIR_PATH . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addDestination_FTP_WCR($WildCardResource_key)
    {

        try{

            $this->error_log('CRNRSTN :: Electrum FTP ' . 
                                 'DESTINATION - integrity check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
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

            $tmp_FTP_SERVER = $this->get_resource('FTP_SERVER', $WildCardResource_key);
            $tmp_FTP_USERNAME = $this->get_resource('FTP_USERNAME', $WildCardResource_key);
            $tmp_FTP_PASSWORD = $this->get_resource('FTP_PASSWORD', $WildCardResource_key);
            $tmp_FTP_PORT = $this->get_resource('FTP_PORT', $WildCardResource_key);
            $tmp_FTP_DIR_PATH = $this->get_resource('FTP_DIR_PATH', $WildCardResource_key);

            $tmp_endpoint_id = $this->oCRNRSTN->hash(
                                                $tmp_FTP_SERVER . 
                                                $tmp_FTP_USERNAME . 
                                                $tmp_FTP_PASSWORD . 
                                                $tmp_FTP_PORT, 
                                                'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            $this->error_log('CRNRSTN :: Electrum process ' . 
                                 'checking FTP [' . 
                                 $tmp_FTP_SERVER . '][' . 
                                 $tmp_FTP_USERNAME . '][' . 
                                 $tmp_FTP_PORT . '].', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {

                $this->validate_FTP_Endpoint(
                       'DESTINATION', 
                       $WildCardResource_key, 
                       $tmp_endpoint_id);
                $oLightning_ftp_conn = self::$oFourLivingCreatures_FTP->return_lightningFTPConn($tmp_endpoint_id);
                if($oLightning_ftp_conn->isValid){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum. 
                     * 
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     * 
                     *
                     * 5 :: Monday, July 15, 2024 @ 2046 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_destination_FTP_WCR_meta($WildCardResource_key);

                    $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->execute_to_destination_authorization = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $this->oElectrum_STATS->add_valid_destination_FTP(
                                            $tmp_FTP_DIR_PATH, 
                                            $tmp_FTP_SERVER, 
                                            $tmp_FTP_PORT, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    if(!isset($this->execute_to_destination_authorization)){

                        $this->execute_to_destination_authorization = false;
                    }

                    $this->oElectrum_STATS->add_invalid_destination_FTP(
                                            $tmp_FTP_DIR_PATH, 
                                            $tmp_FTP_SERVER, 
                                            $tmp_FTP_PORT, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('This CRNRSTN :: Electrum process ' . 
                        'experienced error checking this FTP [' . 
                        $tmp_FTP_SERVER . '::' . 
                        $tmp_FTP_PORT . 
                        '] endpoint.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration of 
                 * endpoint into this Electrum.
                 *
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections. 
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2047 hrs.
                 *
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 *
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_destination_FTP_WCR_meta($WildCardResource_key);

                $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                $this->execute_to_destination_authorization = true;

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $this->oElectrum_STATS->add_valid_destination_FTP(
                                        $tmp_FTP_DIR_PATH, 
                                        $tmp_FTP_SERVER, 
                                        $tmp_FTP_PORT, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated this ' . 
                                     'DESTINATION FTP endpoint at (' . 
                                     $tmp_FTP_SERVER . '::' . 
                                     $tmp_FTP_PORT . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addFlattenedDestinationFTP_WCR($WildCardResource_key)
    {

        try{

            $this->error_log('CRNRSTN :: Electrum ' . 
                                 'FTP DESTINATION - integrity ' . 
                                 'check beginning.', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            $tmp_FTP_SERVER = $this->get_resource(
                                                   'FTP_SERVER', 
                                                   $WildCardResource_key);
            $tmp_FTP_USERNAME = $this->get_resource(
                                                     'FTP_USERNAME', 
                                                     $WildCardResource_key);
            $tmp_FTP_PASSWORD = $this->get_resource(
                                                     'FTP_PASSWORD', 
                                                     $WildCardResource_key);
            $tmp_FTP_PORT = $this->get_resource(
                                                 'FTP_PORT', 
                                                 $WildCardResource_key);
            $tmp_FTP_DIR_PATH = $this->get_resource(
                                                     'FTP_DIR_PATH', 
                                                     $WildCardResource_key);

            $tmp_endpoint_id = $this->oCRNRSTN->hash(
                                                $tmp_FTP_SERVER . 
                                                $tmp_FTP_USERNAME . 
                                                $tmp_FTP_PASSWORD . 
                                                $tmp_FTP_PORT, 
                                                'md5');
            $tmp_endpoint_serial = $this->generate_new_key(100);

            $this->error_log('CRNRSTN :: Electrum process ' . 
                                 'checking FTP [' . 
                                 $tmp_FTP_SERVER . '][' . 
                                 $tmp_FTP_USERNAME . '][' . 
                                 $tmp_FTP_PORT . ']', 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 CRNRSTN_ELECTRUM);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {
                /**
                 * TODO :: Confirm that the 
                 *         above "if statement" 
                 *         logic for the use of 
                 *         preload endpoint 
                 *         validation fail 
                 *         is sound. 
                 *         5 :: Friday, March 13, 2026 @ 0332 hrs.
                 *
                 */

                $this->validate_FTP_Endpoint(
                       'DESTINATION', 
                       $WildCardResource_key, 
                       $tmp_endpoint_id);
                $oLightning_ftp_conn = self::$oFourLivingCreatures_FTP->return_lightningFTPConn($tmp_endpoint_id);
                if($oLightning_ftp_conn->isValid){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration 
                     * of endpoint into 
                     * this Electrum. 
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2048 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_flattenedDestinationFTP_WCR_meta($WildCardResource_key);

                    $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    $this->execute_to_destination_authorization = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $this->oElectrum_STATS->add_valid_destination_FTP(
                                            $tmp_FTP_DIR_PATH, 
                                            $tmp_FTP_SERVER, 
                                            $tmp_FTP_PORT, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id, 
                                            true);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    if(!isset($this->execute_to_destination_authorization)){

                        $this->execute_to_destination_authorization = false;
                    }

                    $this->oElectrum_STATS->add_invalid_destination_FTP(
                                            $tmp_FTP_DIR_PATH, 
                                            $tmp_FTP_SERVER, 
                                            $tmp_FTP_PORT, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('This CRNRSTN :: Electrum ' . 
                        'process experienced error ' . 
                        'checking this FTP [' . 
                        $tmp_FTP_SERVER . '::' . 
                        $tmp_FTP_PORT . 
                        '] endpoint.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration of 
                 * endpoint into this Electrum. 
                 *
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections. 
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2049 hrs.
                 *
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 *
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_flattenedDestinationFTP_WCR_meta($WildCardResource_key);

                $this->oLighting_bolt_ARRAY['DESTINATION'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                $this->execute_to_destination_authorization = true;

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $this->oElectrum_STATS->add_valid_destination_FTP(
                                        $tmp_FTP_DIR_PATH, 
                                        $tmp_FTP_SERVER, 
                                        $tmp_FTP_PORT, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id, 
                                        true);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                    'process has already validated this ' . 
                                    'DESTINATION FTP endpoint at (' . 
                                    $tmp_FTP_SERVER . '::' . 
                                    $tmp_FTP_PORT . 
                                    '), and so will accelerate via ' . 
                                    'skipping the preload check.', 
                                    __LINE__, 
                                    __METHOD__, 
                                    __FILE__, 
                                    CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function addSource_FTP_WCR($WildCardResource_key)
    {

        try{

            $this->error_log('CRNRSTN :: Electrum FTP ' . 
                                'SOURCE - integrity check beginning.', 
                                __LINE__, 
                                __METHOD__, 
                                __FILE__, 
                                CRNRSTN_ELECTRUM);

            $tmp_FTP_SERVER = $this->get_resource('FTP_SERVER', $WildCardResource_key);
            $tmp_FTP_USERNAME = $this->get_resource('FTP_USERNAME', $WildCardResource_key);
            $tmp_FTP_PASSWORD = $this->get_resource('FTP_PASSWORD', $WildCardResource_key);
            $tmp_FTP_PORT = $this->get_resource('FTP_PORT', $WildCardResource_key);
            $tmp_FTP_DIR_PATH = $this->get_resource('FTP_DIR_PATH', $WildCardResource_key);

            $tmp_endpoint_id = md5($tmp_FTP_SERVER . $tmp_FTP_USERNAME . $tmp_FTP_PASSWORD . $tmp_FTP_PORT);
            $tmp_endpoint_serial = $this->generate_new_key(100);

            $this->error_log('CRNRSTN :: Electrum ' . 
                                'process checking FTP [' . 
                                $tmp_FTP_SERVER . '][' . 
                                $tmp_FTP_USERNAME . '][' . 
                                $tmp_FTP_PORT . ']', 
                                __LINE__, 
                                __METHOD__, 
                                __FILE__, 
                                CRNRSTN_ELECTRUM);

            if($this->ready_for_preload($tmp_endpoint_id) || 
                $this->preload_endpoint_validation_fail[$tmp_endpoint_id])
            {

                $this->validate_FTP_Endpoint(
                       'SOURCE', 
                       $WildCardResource_key, 
                       $tmp_endpoint_id);
                $oLightning_ftp_conn = self::$oFourLivingCreatures_FTP->return_lightningFTPConn($tmp_endpoint_id);
                if($oLightning_ftp_conn->isValid){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Complete the integration of 
                     * endpoint into this Electrum. 
                     *
                     * Return an instantiation of 
                     * the CRNRSTN :: Electrum :: 
                     * Ezekiel 1:4 :: Lightning 
                     * (Fire) Bolt Meta Data 
                     * Wrangler for Local 
                     * Directory Access and 
                     * FTP Connections. 
                     *
                     *
                     * 5 :: Monday, July 15, 2024 @ 2049 hrs.
                     *
                     * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                     *                          $tmp_endpoint_serial, 
                     *                          $this->oCRNRSTN_USR);
                     *
                     */
                    $FIREHOT_oEndpoint = $this->return_registered_resource(
                                                'new', 
                                                'crnrstn_lightning_bolt', 
                                                $tmp_endpoint_serial, 
                                                $this->oCRNRSTN_USR);

                    $FIREHOT_oEndpoint->initialize_source_FTP_WCR_meta($WildCardResource_key);

                    $this->oLighting_bolt_ARRAY['SOURCE'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                    $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                    if(!isset($this->execute_from_source_authorization)){

                        $this->execute_from_source_authorization = true;

                    }

                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = false;

                    $this->oElectrum_STATS->add_valid_source_FTP(
                                            $tmp_FTP_DIR_PATH, 
                                            $tmp_FTP_SERVER, 
                                            $tmp_FTP_PORT, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id);

                }else{

                    $this->preload_endpoint_validation_fail[$tmp_endpoint_id] = true;
                    $this->execute_from_source_authorization = false;
                    $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = false;

                    $this->oElectrum_STATS->add_invalid_source_FTP(
                                            $tmp_FTP_DIR_PATH, 
                                            $tmp_FTP_SERVER, 
                                            $tmp_FTP_PORT, 
                                            $tmp_endpoint_serial, 
                                            $tmp_endpoint_id);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('This CRNRSTN :: Electrum process ' . 
                        'experienced error checking this FTP SOURCE [' . 
                        $tmp_FTP_SERVER . '::' . 
                        $tmp_FTP_PORT . 
                        '] endpoint.');

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Complete the integration of 
                 * endpoint into this Electrum. 
                 *
                 * Return an instantiation of 
                 * the CRNRSTN :: Electrum :: 
                 * Ezekiel 1:4 :: Lightning 
                 * (Fire) Bolt Meta Data 
                 * Wrangler for Local 
                 * Directory Access and 
                 * FTP Connections. 
                 *
                 *
                 * 5 :: Monday, July 15, 2024 @ 2050 hrs.
                 *
                 * $FIREHOT_oEndpoint = new crnrstn_lightning_bolt(
                 *                          $tmp_endpoint_serial, 
                 *                          $this->oCRNRSTN_USR);
                 *
                 */
                $FIREHOT_oEndpoint = $this->return_registered_resource(
                                            'new', 
                                            'crnrstn_lightning_bolt', 
                                            $tmp_endpoint_serial, 
                                            $this->oCRNRSTN_USR);

                $FIREHOT_oEndpoint->initialize_source_FTP_WCR_meta($WildCardResource_key);

                $this->oLighting_bolt_ARRAY['SOURCE'][$tmp_endpoint_serial][$tmp_endpoint_id][] = $FIREHOT_oEndpoint;

                $this->preload_spoiled_ARRAY[$tmp_endpoint_id] = 1;

                if(!isset($this->execute_from_source_authorization)){

                    $this->execute_from_source_authorization = true;

                }

                $this->endpoint_isValid_ARRAY[$tmp_endpoint_serial] = true;

                $this->oElectrum_STATS->add_valid_source_FTP(
                                        $tmp_FTP_DIR_PATH, 
                                        $tmp_FTP_SERVER, 
                                        $tmp_FTP_PORT, 
                                        $tmp_endpoint_serial, 
                                        $tmp_endpoint_id);

                $this->error_log('This CRNRSTN :: Electrum ' . 
                                     'process has already validated ' . 
                                     'this FTP SOURCE at (' . 
                                     $tmp_FTP_SERVER . '::' . 
                                     $tmp_FTP_PORT . 
                                     '), and so will accelerate via ' . 
                                     'skipping the preload check.', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_ELECTRUM);

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

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
    function ready_for_preload($endpoint_id)
    {

        if(isset($this->preload_spoiled_ARRAY[$endpoint_id])){

            return false;

        }else{

            return true;

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
    function exclude_DIR(
             $nomination_pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes [' . 
                             $this->crc_int32($this->electrum_process_id) . '][' . 
                             $this->crc_int32($this->execution_batch_serial) . 
                             '] DIRECTORY with pattern of ' . 
                             '(or to which is an exact match of) "' . 
                             $nomination_pattern . '".', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'DIRECTORY';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $nomination_pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_FILE(
             $nomination_pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                            'suppression includes [' . 
                            $this->crc_int32($this->electrum_process_id) . '][' . 
                            $this->crc_int32($this->execution_batch_serial) . 
                            '] FILE with pattern of ' . 
                            '(or to which is an exact match of) "' . 
                            $nomination_pattern . '".', 
                            __LINE__, 
                            __METHOD__, 
                            __FILE__, 
                            CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'FILE';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $nomination_pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_assetGroupID(
             $pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes OWNER GROUP ' . 
                             'ID with pattern of (or to which ' . 
                             'is an exact match of) "' . 
                             $pattern . '".', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'OWNER_GROUP';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_assetUserID(
             $pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes OWNER USER ' . 
                             'ID with pattern of (or to which ' . 
                             'is an exact match of) "' . 
                             $pattern . '".', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'OWNER_USER';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_modifiedNewerThan(
             $pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                            'suppression includes MODIFIED ' . 
                            'NEWER THAN "' . 
                            $pattern . '".', 
                            __LINE__, 
                            __METHOD__, 
                            __FILE__, 
                            CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'MODIFIED_NT';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_modifiedOlderThan(
             $pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes MODIFIED ' . 
                             'OLDER THAN "' . 
                             $pattern . '".', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'MODIFIED_OT';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_accessedNewerThan(
             $pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                            'suppression includes ACCESSED ' . 
                            'NEWER THAN "' . 
                            $pattern . '".', 
                            __LINE__, 
                            __METHOD__, 
                            __FILE__, 
                            CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'ACCESSED_NT';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_accessedOlderThan(
             $pattern, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes ACCESSED ' . 
                             'OLDER THAN "' . 
                             $pattern . '".', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'ACCESSED_OT';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $pattern;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_fileSizeGreaterThan(
             $bytes, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes FILESIZE ' . 
                             'LESS THAN "' . 
                             $bytes . '" bytes.', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'FILE_SIZE_GT';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $bytes;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    function exclude_fileSizeLessThan(
             $bytes, 
             $WCRkey_or_DIRPATH)
    {

        $this->error_log('CRNRSTN :: Electrum ' . 
                             'suppression includes FILESIZE ' . 
                             'LESS THAN "' . 
                             $bytes . '" bytes.', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $tmp_array = array();
        $tmp_array['exclusion_serial'] = $this->generate_new_key(50);
        $tmp_array['exclusion_type'] = 'FILE_SIZE_LT';
        $tmp_array['WCR_or_path'] = $WCRkey_or_DIRPATH;
        $tmp_array['pattern'] = $bytes;

        $this->asset_transfer_suppression_ARRAY[$this->electrum_process_id][$this->execution_batch_serial][] = $tmp_array;

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
    private function validate_FTP_Endpoint(
                     $flow_type, 
                     $endpoint_data, 
                     $endpoint_id)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * n+1 data source 
         * validation ::
         *
         * - Can I read from specified source?
         *
         * - If this is FTP:
         *    ~ How many active processes 
         *      are hitting this server?
         *    ~ Scan automation_runtime_config.FTP_SERVER_IP_SOURCE 
         *      where ISACTIVE = 1.
         *
         * - We need to also compare 
         *   FTP_SERVER_IP_DESTINATION and 
         *   FTP_SERVER_IP_SOURCE for FTP to 
         *   FTP Electrum.
         *
         *     ~ If under specified limit: 
         *       1 - INSERT INTO automation_runtime_config 
         *           WITH AUTOMATION_STATE=ELECTRUM is 
         *           initializing FTP source 123.123.122.123 
         *       2 - INSERT INTO log_runtime_config 
         *           AUTOMATION_STATE=ELECTRUM is 
         *           initializing FTP 123.123.122.123 
         *
         *     ~ If over specified limit: 
         *       1 - INSERT INTO log_runtime_config 
         *           AUTOMATION_STATE=FTP SOURCE connection 
         *           suppressed :: 123.123.122.123 
         *       2 - die()
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * n+1 data source 
         * destination validation :: 
         *
         * - Can I write to local DIR 
         *   path is_writable()? 
         *
         * - If this is FTP: 
         *    ~ How many active processes are 
         *      hitting this server? Scan 
         *      automation_runtime_config.FTP_SERVER_IP_DESTINATION 
         *      where ISACTIVE=1.
         *
         *     ~ If under specified limit:
         *       1 - UPDATE automation_runtime_config 
         *           with AUTOMATION_STATE=ELECTRUM is 
         *           initializing FTP 123.123.122.123 
         *       2 - INSERT INTO log_runtime_config 
         *           AUTOMATION_STATE=ELECTRUM is 
         *           initializing FTP destination 
         *           123.123.122.123 
         *
         *     ~ If over specified limit: 
         *       1 - INSERT intp log_runtime_config 
         *           AUTOMATION_STATE=FTP DESTINATION 
         *           connection suppressed :: 
         *           123.123.122.123 
         *       2 - DIE(). 
         *
         */

        if(!isset(self::$oFourLivingCreatures_FTP)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation of 
             * the CRNRSTN :: Electrum :: 
             * Ezekiel 1:4 :: Fire FTP
             * Connection Manager.
             *
             *
             * 5 :: Monday, July 15, 2024 @ 2052 hrs.
             *
             * self::$oFourLivingCreatures_FTP = new crnrstn_fire_ftp_conn_manager($this->oCRNRSTN_USR);
             *
             */
            self::$oFourLivingCreatures_FTP = $this->return_registered_resource(
                                                     'new', 
                                                     'crnrstn_fire_ftp_conn_manager', 
                                                     $this->oCRNRSTN_USR);

        }

        return self::$oFourLivingCreatures_FTP->initialize_ftp_endpoint(
                                                $flow_type, 
                                                $endpoint_data, 
                                                $endpoint_id);

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
    private function validate_DIR_endpoint(
                     $flow_type, 
                     $dirPath, 
                     $permissions_chmod = 777)
    {

        try{

            switch($flow_type){
                case 'SOURCE':

                    if(is_dir($dirPath)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Source - LOCAL_DIR.
                         *
                         */
                        if(is_readable($dirPath)){

                            return true;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('The CRNRSTN :: Electrum ' . 
                                'process has experienced permissions ' . 
                                'related errors attempting to read from ' . 
                                'the source directory, ' . $dirPath . '.');

                        }

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'process has experienced errors attempting ' . 
                            'to find the source directory, ' . 
                            $dirPath . ', within the local file system.');

                    }

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * DESTINATION - 
                     * LOCAL_DIR.
                     *
                     */
                    if(is_dir($dirPath)){

                        if(is_writable($dirPath)){

                            return true;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Attempt to change permissions, 
                             * and then check again before 
                             * completely giving up. 
                             *
                             */
                            $tmp_current_perms = substr(decoct(fileperms($dirPath)), 2);
                            $tmp_config_serial = $this->oCRNRSTN->get_crnrstn('config_serial');

                            $tmp_crc = $this->crc_int32($tmp_config_serial);
                            $_SESSION['CRNRSTN_' . $tmp_crc]['CRNRSTN_EXCEPTION_PREFIX'] = 'The CRNRSTN :: Electrum ' . 
                                                                                           'process has experienced ' . 
                                                                                           'permissions related error ' . 
                                                                                           'as the destination directory, ' . 
                                                                                           $dirPath . ' (' . 
                                                                                           $tmp_current_perms . 
                                                                                           '), is NOT writable to ' . 
                                                                                           $permissions_chmod . 
                                                                                           ', and furthermore ';
                            if(chmod($dirPath, $permissions_chmod)){

                                $_SESSION['CRNRSTN_' . $tmp_crc]['CRNRSTN_EXCEPTION_PREFIX'] = '';
                                return true;

                            }else{

                                $tmp_current_perms = substr(decoct(fileperms($dirPath)), 2);

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * HOOOSTON, VE HAFF PROBLEM!
                                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                                 *
                                 */
                                throw new Exception('The CRNRSTN :: Electrum process ' . 
                                    'has experienced permissions related error ' . 
                                    'as the destination directory, ' . 
                                    $dirPath . 
                                    ', is NOT writable as ' . 
                                    $tmp_current_perms . 
                                    '.');

                            }

                        }

                    }else{

                        if(!$this->mkdir_r($dirPath, $permissions_chmod)){

                            $permissions_chmod = octdec(str_pad($permissions_chmod, 4, '0', STR_PAD_LEFT));

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('The CRNRSTN :: Electrum process ' . 
                                'has experienced error as the destination ' . 
                                'directory does NOT exist, and it could NOT ' . 
                                'be created as ' . $permissions_chmod . '.');

                        }else{

                            return true;

                        }

                    }

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
             * Sunday, June 30, 2024 @ 1605 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: http://php.net/manual/en/function.mkdir.php
     * COMMENT :: http://php.net/manual/en/function.mkdir.php#68207
     * AUTHOR :: kungla at gmail dot com
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function mkdir_r(
                     $dirName, 
                     $mode = 777)
    {

        try{

            $mode = octdec(str_pad($mode, 4, '0', STR_PAD_LEFT));
            $mode = (int) $mode;

            $dirs = explode('/', $dirName);
            $dir = '';

            foreach($dirs as $part){
                $dir .= $part . '/';
                if(!is_dir($dir) && 
                    strlen($dir) > 0)
                {
                    if(!mkdir($dir, $mode)){

                        $error = error_get_last();

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception($error['message'] . 
                            ' mkdir_r() failed to mkdir :: ' . 
                            $dir);

                    }

                }

            }

            return true;

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
             * Sunday, June 30, 2024 @ 1606 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://stackoverflow.com/questions/36310247/php-ftp-recursive-directory-listing
     * COMMENT :: https://stackoverflow.com/a/36310751
     * AUTHOR :: Martin Prikryl :: https://stackoverflow.com/users/850848/martin-prikryl
     *
     */
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
    private function ftp_list_files_recursive(
                     $ftp_stream, 
                     $path, 
                     $oEndpoint_serial)
    {

        try{

            $path = rtrim($path, '/');

            $tmp_config_serial = $this->oCRNRSTN->get_crnrstn('config_serial');

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Store base (root) 
             * endpoint directory. 
             *
             */
            $this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial][] = $path;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Hidden files hidden - 
             * config updates for 
             * VSFTPD :: Ubuntu 18.04.
             *
             * https://devanswers.co/installing-ftp-server-vsftpd-ubuntu-18-04/
             *
             *
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * ftp_chdir($ftp_stream, $path);
             * $lines = ftp_rawlist($ftp_stream, "-A");
             * $lines = ftp_rawlist($ftp_stream, '-AL '.$path, false);
             *
             */
            $lines = ftp_rawlist($ftp_stream, '-AL ' . $path);

            $tmp_crc = $this->crc_int32($tmp_config_serial);
            $_SESSION['CRNRSTN_' . $tmp_crc]['CRNRSTN_EXCEPTION_PREFIX'] = '';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $this->tmp_sum = $this->tmp_sum + sizeof($lines);
             * $this->error_log('CRNRSTN :: FTP DEBUG lines cnt=' . 
             *                      sizeof($lines) . ' out of ' . 
             *                      $this->tmp_sum . ' total.', 
             *                      __LINE__, 
             *                      __METHOD__, 
             *                      __FILE__, 
             *                      CRNRSTN_ELECTRUM_FTP);
             *
             */
            $result = array();

            foreach($lines as $line){

                $tokens = explode(' ', $line);
                $name = $tokens[count($tokens) - 1];
                $type = $tokens[0][0];
                $filepath = $path . DIRECTORY_SEPARATOR . $name;

                if($type == 'd'){

                    $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filepath] = 0;
                    $this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial][] = $filepath;
                    $result = array_merge(
                              $result, 
                              $this->ftp_list_files_recursive(
                                     $ftp_stream, 
                                     $filepath, 
                                     $oEndpoint_serial));

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->tmp_sum = $this->tmp_sum + 1;
                     * $this->error_log('CRNRSTN :: FTP ' . 
                     *                      'DEBUG[sum=' . 
                     *                      $this->tmp_sum . 
                     *                      '] type=' . 
                     *                      $type . ' filepath=' . 
                     *                      $filepath, 
                     *                      __LINE__, 
                     *                      __METHOD__, 
                     *                      __FILE__, 
                     *                      CRNRSTN_ELECTRUM_FTP);
                     *
                     */

                    $result[] = $filepath;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * SOURCE :: https://www.php.net/manual/en/function.ftp-size.php
                     * COMMENT :: https://www.php.net/manual/en/function.ftp-size.php#109141
                     * AUTHOR :: gerben at gerbs dot net
                     *
                     */
                    $response = ftp_raw($ftp_stream, "SIZE $filepath");
                    $filesize = floatval(str_replace('213 ', '', $response[0]));

                    //$this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filepath] = ftp_size($ftp_stream, $name);
                    $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$filepath] = $filesize;
                    if(!isset($this->source_total_filesize_ARRAY[$oEndpoint_serial][0])){

                        $this->source_total_filesize_ARRAY[$oEndpoint_serial][0] = 0;
                        $this->source_total_filesize_ARRAY[$oEndpoint_serial][0] += $filesize;

                    }else{

                        $this->source_total_filesize_ARRAY[$oEndpoint_serial][0] += $filesize;

                    }
                    $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$filepath] = ftp_mdtm($ftp_stream, $name);

                }
            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $this->error_log('CRNRSTN :: FTP DEBUG' . 
             *                      '[current files sum=' . 
             *                      $this->tmp_sum . '].', 
             *                      __LINE__, 
             *                      __METHOD__, 
             *                      __FILE__, 
             *                      CRNRSTN_ELECTRUM_FTP);
             *
             */
            return $result;

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
             * Sunday, June 30, 2024 @ 1606 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://stackoverflow.com/questions/36310247/php-ftp-recursive-directory-listing
     * COMMENT :: https://stackoverflow.com/a/36310751
     * AUTHOR :: https://stackoverflow.com/users/850848/martin-prikryl
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function _original_ftp_list_files_recursive(
                     $ftp_stream, 
                     $path)
    {

        try{

            $tmp_config_serial = $this->oCRNRSTN->get_crnrstn('config_serial');
            $tmp_crc = $this->crc_int32($tmp_config_serial);

            $lines = ftp_rawlist($ftp_stream, $path);
            $_SESSION['CRNRSTN_' . $tmp_crc]['CRNRSTN_EXCEPTION_PREFIX'] = '';

            $result = array();

            foreach($lines as $line){

                $tokens = explode(' ', $line);
                $name = $tokens[count($tokens) - 1];
                $type = $tokens[0][0];
                $filepath = $path . DIRECTORY_SEPARATOR . $name;

                if($type == 'd')
                {

                    $result = array_merge($result, $this->ftp_list_files_recursive(
                                                          $ftp_stream, 
                                                          $filepath));

                }else{

                    $result[] = $filepath;

                }

            }

            return $result;

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
             * Sunday, June 30, 2024 @ 1606 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

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
    private function merge_ftp_dir_array_to_file(
                     $ftp_contents_SOURCE, 
                     $oEndpoint_serial)
    {

        $tmp_dirPath_flag_ARRAY        =
        $tmp_dirPath_ARRAY             =
        $tmp_FTP_dirPath_flagOut_ARRAY = array();

        $tmp_file_cnt = sizeof($ftp_contents_SOURCE);

        foreach($ftp_contents_SOURCE as 
            $fileKey => $filePath)
        {
            $tmp_dirPath_ARRAY[$filePath] = 1;

            foreach($this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial] as 
                $dirKey => $dirPath)
            {

                $pos = strpos($filePath, $dirPath);
                if(($pos !== false) && 
                    !isset($tmp_FTP_dirPath_flagOut_ARRAY[$dirPath]))
                {

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Disqualify this directory 
                     * for file path match. 
                     *
                     */
                    $tmp_FTP_dirPath_flagOut_ARRAY[$dirPath] = 5;

                }

            }

        }

        foreach($this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial] as 
            $dirKey => $dirPath)
        {
            foreach($this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial] as 
                $dirKey2 => $dirPath2)
            {

                $pos = strpos($dirPath, $dirPath2);
                if(($pos !== false) && 
                    !isset($tmp_FTP_dirPath_flagOut_ARRAY[$dirPath]))
                {

                    if(strlen($dirPath2) != strlen($dirPath)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Disqualify this directory 
                         * for file path match. 
                         *
                         */
                        $tmp_FTP_dirPath_flagOut_ARRAY[$dirPath2] = 5;

                    }

                }

            }

        }

        $tmp_tot_dir_cnt = sizeof($this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial]);
        foreach($this->ftp_recursive_sniffed_directory_ARRAY[$oEndpoint_serial] as 
            $dirKey => $dirPath)
        {

            if(!isset($tmp_FTP_dirPath_flagOut_ARRAY[$dirPath])){

                $pos_fslash = strpos($dirPath, '/');

                if($pos_fslash !== false){

                    $slashChar = '/';

                }else{

                    $pos_bslash = strpos($dirPath, '\\');
                    if($pos_bslash !== false){

                        $slashChar = '\\';

                    }else{

                        $slashChar = DIRECTORY_SEPARATOR;

                    }

                }

                $dirPath = rtrim($dirPath, $slashChar);

                $tmp_dirPath_flag_ARRAY[$dirPath . $slashChar] = 1;

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * $tmp_dirPath_ARRAY[$dirPath] = 1;
                 * $this->error_log(
                 *                      'CRNRSTN :: FTP[' . 
                 *                      $tmp_tot_dir_cnt . 
                 *                      '] DEBUG BETTER DIR =' . 
                 *                      $dirPath, 
                 *                      __LINE__, 
                 *                      __METHOD__, 
                 *                      __FILE__, 
                 *                      CRNRSTN_ELECTRUM_FTP);
                 *
                 */

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $this->error_log('CRNRSTN :: FTP ' . 
         *                      'DEBUG DIR =' . 
         *                      $dirPath, 
         *                      __LINE__, 
         *                      __METHOD__, 
         *                      __FILE__, 
         *                      CRNRSTN_ELECTRUM_FTP);
         *
         */

        return $tmp_dirPath_flag_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function path_no_slash_dot($path)
    {

        $tmp_path_array     = $this->str_split_unicode($path);
        $tmp_path_array_rev = array_reverse($tmp_path_array);

        if(($tmp_path_array_rev[0] == '.') && 
            ($tmp_path_array_rev[1] == '/'))
        {

            return false;

        }else{

            return true;

        }

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
     * @access private
     *
     */
    private function find_deepest_empty_dir(
                     $results, 
                     $is_dir_status_array, 
                     $results_pos, 
                     $tmp_dirPath_flag_ARRAY = NULL, 
                     $prev_result_pos = NULL, 
                     $prev_result_path = NULL)
    {

        $tmp_results_cnt = sizeof($results);
        for($search_pos = $results_pos; $search_pos < $tmp_results_cnt; $search_pos++){

            if($is_dir_status_array[$search_pos] == 1){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We have a 
                 * directory result. 
                 *
                 */
                if($this->path_no_slash_dot($results[$search_pos])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Directory with 
                     * good format. 
                     *
                     */
                    if(!isset($prev_result_path)){

                        $prev_result_pos = $search_pos;
                        $prev_result_path = $results[$search_pos];
                        $current_result_path = $results[$search_pos];

                    }else{

                        $current_result_path = $results[$search_pos];
                        $pos = strpos($current_result_path, $prev_result_path);
                        if($pos !== false){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Transition current 
                             * to previous. 
                             *
                             */
                            $prev_result_pos = $search_pos;
                            $prev_result_path = $current_result_path;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Burn current path. 
                             *
                             */
                            if(!isset($tmp_dirPath_flag_ARRAY[$prev_result_path])){
 
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * $this->error_log('[' . 
                                 *                      $search_pos . 
                                 *                      ']BURN DIR ->' . 
                                 *                      $prev_result_path, 
                                 *                      __LINE__, 
                                 *                      __METHOD__, 
                                 *                      __FILE__, 
                                 *                      CRNRSTN_ELECTRUM);
                                 *
                                 */
                                $tmp_deepest_empty_dir_ARRAY['burn_result_path'] = $prev_result_path;
                                $tmp_deepest_empty_dir_ARRAY['results_pos'] = $search_pos;

                                //$tmp_dirPath_flag_ARRAY[0] = $prev_result_path;
                                $tmp_deepest_empty_dir_ARRAY['flag_array'][0] = $prev_result_path;

                                return $tmp_deepest_empty_dir_ARRAY;

                            }else{

                                return NULL;

                            }

                        }

                    }

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We have file. 
                 * Skip directory. 
                 *
                 */

            }

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: http://php.net/manual/en/class.recursivedirectoryiterator.php
     * AUTHOR :: http://php.net/manual/en/class.recursivedirectoryiterator.php#85805
     *
     */
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
    function localdir_list_files_recursive(
             $dir, 
             $oEndpoint_serial, 
             $files_only = false)
    {
        $results                 =
        $results_final_output    =
        $results_filePath_output =
        $is_dir_status_array     = array();
        $path                    = realpath($dir);
        $results_totalSize       = 0;

        $objects = new RecursiveIteratorIterator(
                   new RecursiveDirectoryIterator($path), 
                   RecursiveIteratorIterator::SELF_FIRST);

        foreach($objects as 
            $name => $object)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * if((strpos($name, '/.') !== false) || 
             *     (strpos($name, '/..') !== false))
             * {
             *
             */
            if((strpos($name, '/..') !== false)){

            }else{

                $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$name] = 0;

                if(!$files_only){

                    $results[] = $name;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->error_log('RAW ->' . 
                     *                      $name, 
                     *                      __LINE__, 
                     *                      __METHOD__, 
                     *                      __FILE__, 
                     *                      CRNRSTN_ELECTRUM);
                     *
                     */

                    if(!(is_dir($name))){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * $this->error_log('FILE ->' . 
                         *                      $name, 
                         *                      __LINE__, 
                         *                      __METHOD__, 
                         *                      __FILE__, 
                         *                      CRNRSTN_ELECTRUM);
                         *
                         */

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a file.
                         *
                         */
                        if($this->path_no_slash_dot($name)){

                            $results_filePath_output[$name] = 1;
                            $results_final_output[$name] = 1;

                            $tmp_filestat_ARRAY = stat($name);
                            $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$name] = $this->find_filesize($name);

                            $tmp_array = posix_getpwuid($tmp_filestat_ARRAY['uid']);
                            $this->source_file_uid_INT_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_filestat_ARRAY['uid'];
                            $this->source_file_uid_STRING_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_array['name'];

                            $tmp_array = posix_getgrgid($tmp_filestat_ARRAY['gid']);
                            $this->source_file_gid_INT_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_filestat_ARRAY['gid'];
                            $this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_array['name'];

                            $this->source_file_lastaccess_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_filestat_ARRAY['atime'];
                            $this->source_file_lastmodify_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_filestat_ARRAY['mtime'];

                            $this->source_file_blocksize_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_filestat_ARRAY['blksize'];
                            $this->source_file_blockallocate_at_path_ARRAY[$oEndpoint_serial][$name] = $tmp_filestat_ARRAY['blocks'];

                            $perms = fileperms($name);
                            $this->source_file_fullpermissions_at_path_ARRAY[$oEndpoint_serial][$name] = $this->return_full_permissions($perms);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * SOURCE :: https://www.php.net/manual/en/function.fileperms.php
                             * COMMENT :: https://www.php.net/manual/en/function.fileperms.php#113060
                             * AUTHOR :: coolmic at example dot com
                             *
                             */
                            $this->source_file_octalpermissions_at_path_ARRAY[$oEndpoint_serial][$name] = decoct($perms & 0777);

                            $results_totalSize += $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$name];

                        }

                        $is_dir_status_array[] = 0;

                    }else{

                        /**
                         * $this->error_log('DIR ->' . 
                         *                      $name, 
                         *                      __LINE__, 
                         *                      __METHOD__, 
                         *                      __FILE__, 
                         *                      CRNRSTN_ELECTRUM);
                         *
                         */

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * We have a directory. 
                         *
                         */
                        $is_dir_status_array[] = 1;

                    }

                }else{

                    if(!(is_dir($name))){

                        $results[] = $name;

                    }

                }

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Search for 
         * empty directories. 
         *
         */
        if(!$files_only){
            $tmp_dirPath_flag_ARRAY = array();
            $tmp_dirPath_ARRAY = array();
            $tmp_dirPath_flagOut_ARRAY = array();

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Loop through result 
             * set and add any 
             * empty DIR. 
             *
             */
            $tmp_result_cnt = sizeof($results);
            for ($results_pos = 0; $results_pos < $tmp_result_cnt; $results_pos++){

                $tmp_dir_selection = $this->find_deepest_empty_dir(
                                            $results, 
                                            $is_dir_status_array, 
                                            $results_pos, 
                                            $tmp_dirPath_flag_ARRAY);

                if(isset($tmp_dir_selection)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->error_log('We like DIR ->' . 
                     *                      $tmp_dir_selection['flag_array'][0], 
                     *                      __LINE__, 
                     *                      __METHOD__, 
                     *                      __FILE__, 
                     *                      CRNRSTN_ELECTRUM);
                     *
                     */
                    $tmp_dirPath_flag_ARRAY[$tmp_dir_selection['flag_array'][0]] = 1;

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * For each directory 
             * path, is there a 
             * file containing 
             * that same path 
             * therein? 
             *
             */
            foreach($results_filePath_output as 
                $filePth => $fileKey)
            {

                foreach($tmp_dirPath_flag_ARRAY as 
                    $dirPath => $dirKey)
                {
                    $pos = strpos($filePth, $dirPath);
                    if(($pos !== false) && 
                        !isset($tmp_dirPath_flagOut_ARRAY[$dirPath]))
                    {

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Disqualify this 
                         * directory for 
                         * file path match.
                         *
                         * $this->error_log('DISQUALIFY THIS DIRECTORY->' . 
                         *                      $dirPath, 
                         *                      __LINE__, 
                         *                      __METHOD__, 
                         *                      __FILE__, 
                         *                      CRNRSTN_ELECTRUM);
                         *
                         */
                        $tmp_dirPath_flagOut_ARRAY[$dirPath] = 5;

                    }

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Append empty 
             * directories to 
             * array of filepaths. 
             *
             */
            foreach($tmp_dirPath_flag_ARRAY as 
                $dirPath => $dirKey)
            {

                if(!isset($tmp_dirPath_flagOut_ARRAY[$dirPath])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->error_log('WE BURN DIR ->' . 
                     *                      $dirPath, 
                     *                      __LINE__, 
                     *                      __METHOD__, 
                     *                      __FILE__, 
                     *                      CRNRSTN_ELECTRUM);
                     *
                     */
                    $results_final_output[$dirPath] = 1;

                }

            }

        }

        $this->source_total_filesize_ARRAY[$oEndpoint_serial][] = $results_totalSize;

        return $results_final_output;

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
    private function return_exclusion_title_copy(
                     $result_ARRAY, 
                     $content_type)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $result_ARRAY['not_excluded'] = false;
         * $result_ARRAY['pattern'] = $qualification_pattern;
         * $result_ARRAY['asset_meta'] = $filePath;
         * $result_ARRAY['pattern_type'] = $exclusion_type;
         * $result_ARRAY['exclusion_meta'] = $this->source_file_gid_STRING_at_path_ARRAY[$oEndpoint_serial][$filePath] . 
         *                                          '<->' . 
         *                                          $this->source_file_gid_INT_at_path_ARRAY[$oEndpoint_serial][$filePath];
         *
         * DIRECTORY
         * FILE
         * OWNER_GROUP
         * OWNER_USER
         * MODIFIED_NT
         * MODIFIED_OT
         * ACCESSED_NT
         * ACCESSED_OT
         * FILE_SIZE_GT
         * FILE_SIZE_LT
         *
         */

        $tmp_str = '';

        switch($result_ARRAY['pattern_type']){
            case 'DIRECTORY':
                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files with a directory in ' . 
                                'their file path which ' . 
                                'matches <em>"' . 
                                $result_ARRAY['pattern'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files with a directory in ' . 
                                'their file path which matches "' . 
                                $result_ARRAY['pattern'] . 
                                '".';

                }

            break;
            case 'FILE':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files with a name ' . 
                                'that matches the pattern, <em>"' . 
                                $result_ARRAY['pattern'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files with a name that ' . 
                                'matches the pattern, "' . 
                                $result_ARRAY['pattern'] . 
                                '".';

                }

            break;
            case 'OWNER_GROUP':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files with group owner ' . 
                                'meta that matches the ' . 
                                'group id, <em>"' . 
                                $result_ARRAY['exclusion_meta'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files with group owner ' . 
                                'meta that matches the ' . 
                                'group id, "' . 
                                $result_ARRAY['exclusion_meta'] . 
                                '".';

                }

            break;
            case 'OWNER_USER':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files owned by a user ' . 
                                'having the user id, <em>"' . 
                                $result_ARRAY['exclusion_meta'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files owned by a user ' . 
                                'having the user id, "' . 
                                $result_ARRAY['exclusion_meta'] . 
                                '".';

                }

            break;
            case 'MODIFIED_NT':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files last modified at ' . 
                                'a time newer than, <em>"' . 
                                $result_ARRAY['pattern'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files last modified at a ' . 
                                'time newer than, "' . 
                                $result_ARRAY['pattern'] . 
                                '".';

                }

            break;
            case 'MODIFIED_OT':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files last modified at a ' . 
                                'time older than, <em>"' . 
                                $result_ARRAY['pattern'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files last modified at a ' . 
                                'time older than, "' . 
                                $result_ARRAY['pattern'] . 
                                '".';

                }

            break;
            case 'ACCESSED_NT':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files last accessed at a ' . 
                                'time newer than, <em>"' . 
                                $result_ARRAY['pattern'] . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files last accessed at a ' . 
                                'time newer than, "' . 
                                $result_ARRAY['pattern'] . 
                                '".';

                }

            break;
            case 'ACCESSED_OT':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files last accessed at a ' . 
                                'time older than, <em>"' . 
                                $result_ARRAY['pattern'] . '".</em>';

                }else{

                    $tmp_str .= 'Files last accessed at a ' . 
                                'time older than, "' . 
                                $result_ARRAY['pattern'] . '".';

                }

            break;
            case 'FILE_SIZE_GT':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files having a file size ' . 
                                'that is larger than, <em>"' . 
                                $this->return_bytes(
                                                     $result_ARRAY['pattern'], 
                                                     5) . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files having a file size ' . 
                                'that is larger than, "' . 
                                $this->return_bytes(
                                                     $result_ARRAY['pattern'], 
                                                     5) . '".';

                }

            break;
            case 'FILE_SIZE_LT':

                if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                    $tmp_str .= 'Files having a file size ' . 
                                'that is smaller than, <em>"' . 
                                $this->return_bytes(
                                                     $result_ARRAY['pattern'], 
                                                     5) . 
                                '".</em>';

                }else{

                    $tmp_str .= 'Files having a file size ' . 
                                'that is smaller than, "' . 
                                $this->return_bytes(
                                                    $result_ARRAY['pattern'], 
                                                    5) . 
                                '".';

                }

            break;

        }

        return $tmp_str;

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
     * @access private
     *
     */
    private function loadElectrumData(
                     $execution_serial, 
                     $batch_serial, 
                     $content_type, 
                     $section_content_shell, 
                     $hot_dest_connection_ARRAY = NULL)
    {

        $tmp_final_out = '';

        switch($content_type){
            case 'ELECTRUM_DATA_HANDLING_FILE_EXCLUSION_SOURCE_TEXT':
            case 'ELECTRUM_DATA_HANDLING_FILE_EXCLUSION_SOURCE_HTML':

                /* $hot_dest_connection_ARRAY = $tmp_suppression_profile[$pattern_type]
                 * 
                 * $tmp_suppression_profile[$oEndpoint_serial][$result_ARRAY['pattern_type']]['asset_count'] = 0;
                 * $tmp_suppression_profile[$oEndpoint_serial][$result_ARRAY['pattern_type']]['total_filesize'] = 0;
                 * $tmp_suppression_profile[$oEndpoint_serial][$result_ARRAY['pattern_type']]['title_copy'] = $this->return_exclusion_title_copy($result_ARRAY, $content_type);
                 * $tmp_suppression_profile[$oEndpoint_serial][$result_ARRAY['pattern_type']]['connection_type'] = $oEndpoint_connection_type;
                 * $tmp_suppression_profile[$oEndpoint_serial][$result_ARRAY['pattern_type']]['oEndpoint_serial']
                 *
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * $tmp_exclusion_source_shell_HTML = $this->return_electrumDataHandlingSourceDIROutputShell('HTML');
                 * $tmp_exclusion_source_shell_TEXT = $this->return_electrumDataHandlingSourceDIROutputShell();
                 *
                 */
                $tmp_destination_count = 0;
                foreach($this->queued_endpoint_ARRAY[$batch_serial]['DESTINATION'] as 
                    $key_src => $hot_src_connection_ARRAY)
                {

                    $tmp_destination_count++;

                }

                $tmp_exclusion_source_shell = $section_content_shell;
                $tmp_sect_final_out = '';

                foreach($this->queued_endpoint_ARRAY[$batch_serial]['SOURCE'] as 
                    $key_src => $hot_src_connection_ARRAY)
                {

                    $oEndpoint = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
                    $oEndpoint_serial = $oEndpoint->return_serial();
                    $oEndpoint_conn_type = $oEndpoint->return_connection_type();

                    if(isset($hot_dest_connection_ARRAY[$oEndpoint_serial]['asset_count'])){

                        $tmp_sect_final_out .= $tmp_exclusion_source_shell;

                        if($hot_dest_connection_ARRAY[$oEndpoint_serial]['connection_type'] == 'FTP'){

                            $tmp_server = $oEndpoint->return_FTP_SERVER();
                            $tmp_FTP_DIR_PATH = $oEndpoint->return_FTP_DIR_PATH();

                            $tmp_source_path = 'FTP [' . 
                                               $tmp_server . '] ' . 
                                               $tmp_FTP_DIR_PATH;

                        }else{

                            $tmp_source_path = $oEndpoint->return_LOCAL_DIR_PATH();

                            if(!is_dir($tmp_source_path)){

                                $local_oWCR_key = $oEndpoint->return_local_oWCR_key();
                                $tmp_source_path = $this->get_resource(
                                                                        'LOCAL_DIR_PATH', 
                                                                        $local_oWCR_key);

                            }

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * $tmp_total_filesize = $this->return_bytes($hot_dest_connection_ARRAY[$oEndpoint_serial]['total_filesize']);
                         * 
                         * Where $hot_dest_connection_ARRAY = $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['total_filesize'].
                         * 
                         */
                        $tmp_total_excluded_filesize = $hot_dest_connection_ARRAY[$oEndpoint_serial]['total_filesize'];

                        if($content_type == 'ELECTRUM_DATA_HANDLING_FILE_EXCLUSION_SOURCE_HTML'){

                            if(strlen($tmp_source_path) > 71){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Break at a good 
                                 * char chunk to 
                                 * the end. 
                                 *
                                 */
                                $oChunkRestrictData = $this->chunkPageData($tmp_source_path, 71);
                                $tmp_path_array['chunked_content'] = $oChunkRestrictData->return_linesArray();

                                $tmp_source_path = '';
                                foreach($tmp_path_array['chunked_content'] as 
                                    $key => $str_line)
                                {

                                    $tmp_source_path .= $str_line . '<br>...';

                                }

                                $tmp_source_path = rtrim($tmp_source_path, '.');
                                $tmp_source_path = rtrim($tmp_source_path, '<br>');

                            }

                            $tmp_asset_multplier_cnt = $hot_dest_connection_ARRAY[$oEndpoint_serial]['asset_count'];
                            $tmp_asset_unique_cnt = $tmp_asset_multplier_cnt / $tmp_destination_count;
                            $tmp_filesize_unique_cnt = $tmp_total_excluded_filesize / $tmp_destination_count;
                            $tmp_filesize_unique_cnt = $this->return_bytes(
                                                                            $tmp_filesize_unique_cnt, 
                                                                            4);

                            $tmp_exclusion_source_stats_HTML = $tmp_asset_unique_cnt . 
                                                               ' files<br>totaling ' . 
                                                               $tmp_filesize_unique_cnt;

                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{FILE_EXCLUSION_SOURCE_DIR_HTML}', 
                                                                       $tmp_source_path, 
                                                                       $tmp_sect_final_out);
                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{FILE_EXCLUSION_SOURCE_STATS_HTML}', 
                                                                       $tmp_exclusion_source_stats_HTML, 
                                                                       $tmp_sect_final_out);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log($tmp_sect_final_out, 
                             *                      __LINE__, 
                             *                      __METHOD__, 
                             *                      __FILE__, 
                             *                      'CRNRSTN_oELECTRUM_PROFILE');
                             *
                             */

                        }else{

                            if(strlen($tmp_source_path) > 52){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Break at good 
                                 * char chunk to 
                                 * the end. 
                                 *
                                 */
                                $oChunkRestrictData = $this->chunkPageData($tmp_source_path, 52);
                                $tmp_path_array['chunked_content'] = $oChunkRestrictData->return_linesArray();

                                $tmp_source_path = '';
                                foreach($tmp_path_array['chunked_content'] as 
                                    $key => $str_line)
                                {

                                    $tmp_source_path .= $str_line . '
...';

                                }

                                $tmp_source_path = rtrim($tmp_source_path, '.');
                                $tmp_source_path = rtrim($tmp_source_path, '
');
                            }

                            $tmp_asset_multplier_cnt = $hot_dest_connection_ARRAY[$oEndpoint_serial]['asset_count'];
                            $tmp_asset_unique_cnt = $tmp_asset_multplier_cnt / $tmp_destination_count;
                            $tmp_filesize_unique_cnt = $tmp_total_excluded_filesize / $tmp_destination_count;
                            $tmp_filesize_unique_cnt = $this->return_bytes($tmp_filesize_unique_cnt);

                            $tmp_exclusion_source_stats_TEXT = $tmp_asset_unique_cnt . 
                                                               ' files totaling ' . 
                                                               $tmp_filesize_unique_cnt;

                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{FILE_EXCLUSION_SOURCE_DIR_TEXT}', 
                                                                       $tmp_source_path, 
                                                                       $tmp_sect_final_out);
                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{FILE_EXCLUSION_SOURCE_STATS_TEXT}', 
                                                                       $tmp_exclusion_source_stats_TEXT, 
                                                                       $tmp_sect_final_out);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log($tmp_sect_final_out, 
                             *                      __LINE__, 
                             *                      __METHOD__, 
                             *                      __FILE__, 
                             *                      'CRNRSTN_oELECTRUM_PROFILE');
                             *
                             */

                        }

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * $this->error_log($tmp_sect_final_out, 
                 *                      __LINE__, 
                 *                      __METHOD__, 
                 *                      __FILE__, 
                 *                      'CRNRSTN_oELECTRUM_PROFILE');
                 *
                 */

                return $tmp_sect_final_out;

            break;
            case 'ELECTRUM_DATA_HANDLING_PROFILE_TEXT':
            case 'ELECTRUM_DATA_HANDLING_PROFILE_HTML':

                $tmp_flag_exclusions = false;
                $tmp_suppression_profile = array();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * For each SOURCE 
                 * endpoint. 
                 *
                 */
                foreach($this->queued_endpoint_ARRAY[$batch_serial]['SOURCE'] as 
                    $key_src => $hot_src_connection_ARRAY)
                {

                    $oEndpoint = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
                    $oEndpoint_serial = $oEndpoint->return_serial();
                    $oEndpoint_connection_type = $oEndpoint->return_connection_type();

                    if(isset($this->asset_suppressed_ARRAY[$this->electrum_process_id][$batch_serial][$oEndpoint_serial])){

                        $tmp_flag_exclusions = true;
                        foreach($this->asset_suppressed_ARRAY[$this->electrum_process_id][$batch_serial][$oEndpoint_serial] as 
                            $key_asup => $result_ARRAY)
                        {

                            if(!$result_ARRAY['not_excluded']){

                                if(!isset($tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['title_copy'])){

                                    $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['asset_count'] = 0;
                                    $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['total_filesize'] = 0;
                                    $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['title_copy'] = $this->return_exclusion_title_copy(
                                                                                                                                      $result_ARRAY, 
                                                                                                                                      $content_type);
                                    $this->error_log('We have an exclusion...[' . 
                                                         $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['title_copy'] . 
                                                         ']', 
                                                         __LINE__, 
                                                         __METHOD__, 
                                                         __FILE__, 
                                                         'CRNRSTN_oELECTRUM_PROFILE');

                                    $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['connection_type'] = $oEndpoint_connection_type;
                                    $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['oEndpoint_serial'] = $oEndpoint_serial;

                                }

                                $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['asset_count'] = $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['asset_count'] + 1;
                                $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['total_filesize'] = $tmp_suppression_profile[$result_ARRAY['pattern_type']][$oEndpoint_serial]['total_filesize'] + $this->source_file_size_at_path_ARRAY[$oEndpoint_serial][$result_ARRAY['asset_path']];

                            }

                        }

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Return aggregation 
                 * of section content. 
                 *
                 */
                $tmp_title_output_ARRAY = array();

                $tmp_final_out = '';
                $tmp_pattern_title_flag_ARRAY = array();
                $tmp_exclusion_section_shell = $section_content_shell;
                $tmp_exclusion_source_shell_HTML = $this->return_electrumDataHandlingSourceDIROutputShell('HTML');
                $tmp_exclusion_source_shell_TEXT = $this->return_electrumDataHandlingSourceDIROutputShell();

                foreach($tmp_suppression_profile as 
                    $pattern_type => $chunkArray)
                {
                    foreach($chunkArray as 
                        $oEndpoint_serial => $indexKey)
                    {

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Set exclusion 
                         * rule title. 
                         *
                         */
                        if(!isset($tmp_pattern_title_flag_ARRAY[$pattern_type]['title_copy'])){

                            $tmp_final_out .= $tmp_exclusion_section_shell;

                            $tmp_pattern_title_flag_ARRAY[$pattern_type]['title_copy'] = $tmp_suppression_profile[$pattern_type][$oEndpoint_serial]['title_copy'];

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log($tmp_suppression_profile[$pattern_type][$oEndpoint_serial]['title_copy'], 
                             *                      __LINE__, 
                             *                      __METHOD__, 
                             *                      __FILE__, 
                             *                      'CRNRSTN_oELECTRUM_PROFILE');
                             *
                             */

                            $tmp_final_out = $this->proper_replace(
                                                                  '{FILE_EXCLUSION_RULE_COPY}', 
                                                                  $tmp_pattern_title_flag_ARRAY[$pattern_type]['title_copy'], 
                                                                  $tmp_final_out);

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Set exclusion rule - 
                             * affected source data. 
                             *
                             */
                            if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                                $tmp_exclusion_source_heavy = $this->loadElectrumData(
                                                                     $execution_serial, 
                                                                     $batch_serial, 
                                                                     'ELECTRUM_DATA_HANDLING_FILE_EXCLUSION_SOURCE_HTML', 
                                                                     $tmp_exclusion_source_shell_HTML, 
                                                                     $tmp_suppression_profile[$pattern_type]);
                                $tmp_final_out = $this->proper_replace(
                                                                      '{FILE_EXCLUSION_SOURCE_DIR_SECTION_HTML}', 
                                                                      $tmp_exclusion_source_heavy, 
                                                                      $tmp_final_out);

                            }else{

                                $tmp_exclusion_source_heavy = $this->loadElectrumData(
                                                                     $execution_serial, $batch_serial, 
                                                                     'ELECTRUM_DATA_HANDLING_FILE_EXCLUSION_SOURCE_TEXT', 
                                                                     $tmp_exclusion_source_shell_TEXT, 
                                                                     $tmp_suppression_profile[$pattern_type]);
                                $tmp_final_out = $this->proper_replace(
                                                                      '{FILE_EXCLUSION_SOURCE_DIR_SECTION_TEXT}', 
                                                                      $tmp_exclusion_source_heavy, 
                                                                      $tmp_final_out);

                            }

                        }

                    }

                }

                if(!$tmp_flag_exclusions){

                    $tmp_final_out .= $tmp_exclusion_section_shell;

                    if($content_type == 'ELECTRUM_DATA_HANDLING_PROFILE_HTML'){

                        $tmp_content = '<tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td colspan="3" style="border-top: ' . 
                                                    '2px solid #666;"><div style="font-family:Arial, ' . 
                                                    'Helvetica, sans-serif; font-size:10px; ' . 
                                                    'line-height: 3px; border-top: 0px solid #FFF; ' . 
                                                    'width:100%;"></div></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <div style="border-left:15px solid #F0F0F0; ' . 
                                                        'border-right: 15px solid #F0F0F0; border-top:' . 
                                                        '10px solid #F0F0F0; border-bottom:10px solid ' . 
                                                        '#F0F0F0; background-color: #F0F0F0; ' . 
                                                        'font-family: Arial, Helvetica, sans-serif; ' . 
                                                        'font-size:16px; text-align:left; font-weight: ' . 
                                                        'normal;">{FILE_EXCLUSION_RULE_COPY}</div>
                                                    </td>
                                                </tr>
                                                {FILE_EXCLUSION_SOURCE_DIR_SECTION_HTML}
                                            </table>
                                        </td>
                                    </tr>';

                        $tmp_exclusion_source_heavy = 'No asset exclusions ' . 
                                                      'have been applied.';

                        $tmp_final_out = $this->proper_replace(
                                                              '{FILE_EXCLUSION_RULE_COPY}', 
                                                              $tmp_exclusion_source_heavy, 
                                                              $tmp_content);
                        $tmp_final_out = $this->proper_replace(
                                                              '{FILE_EXCLUSION_SOURCE_DIR_SECTION_HTML}', 
                                                              '', 
                                                              $tmp_final_out);

                    }else{

                        $tmp_content = '= = = = = = = = = = = = = = = = = = = = = = = = =
{FILE_EXCLUSION_RULE_COPY}
{FILE_EXCLUSION_SOURCE_DIR_SECTION_TEXT}';
                        $tmp_exclusion_source_heavy = 'No asset exclusions ' . 
                                                      'have been applied.';

                        $tmp_final_out = $this->proper_replace(
                                                              '{FILE_EXCLUSION_RULE_COPY}', 
                                                              $tmp_exclusion_source_heavy, 
                                                              $tmp_content);
                        $tmp_final_out = $this->proper_replace(
                                                              '{FILE_EXCLUSION_SOURCE_DIR_SECTION_TEXT}', 
                                                              '', 
                                                              $tmp_final_out);

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * $this->error_log($tmp_final_out, 
                 *                      __LINE__, 
                 *                      __METHOD__, 
                 *                      __FILE__, 
                 *                      'CRNRSTN_oELECTRUM_PROFILE');
                 *
                 */

                return $tmp_final_out;

            break;
            case 'ELECTRUM_DESTINATION_PATHS_DETAIL_TEXT':
            case 'ELECTRUM_DESTINATION_PATHS_DETAIL_HTML':

                $tmp_sect_final_out = '';

                $tmp_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];
                $tmp_source_to_destination_transfer_ARRAY = $this->oElectrum_STATS->return_source_to_destination_stats_array(
                                                                                    $execution_serial, 
                                                                                    $batch_serial, 
                                                                                    $tmp_oEndpoint_DESTINATION);

                $src_to_dest_cnt = $tmp_source_to_destination_transfer_ARRAY['src_to_dest_cnt'];
                for($i=0; $i<$src_to_dest_cnt; $i++){

                    $tmp_total_file_movements = $tmp_source_to_destination_transfer_ARRAY['activity_stats'][$i]['asset_transfer_count'];
                    $tmp_dyn_dest_path = $tmp_source_to_destination_transfer_ARRAY['activity_stats'][$i]['destination_path'];

                    $tmp_str_ARRAY = $this->return_universalPathProperBreak($tmp_dyn_dest_path);
                    $tmp_dyn_dest_path_TEXT = $tmp_str_ARRAY['str'];

                    $tmp_str_ARRAY = $this->return_universalPathProperBreak(
                                            $tmp_dyn_dest_path, 
                                            69, 
                                            true);
                    $tmp_dyn_dest_path_HTML = $tmp_str_ARRAY['str'];


                    $tmp_sect_final_out .= $section_content_shell;

                    if($content_type == 'ELECTRUM_DESTINATION_PATHS_DETAIL_HTML'){

                        if($tmp_total_file_movements == 1){

                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{ENDPOINT_FILES_MOVED_COUNT}', 
                                                                       $tmp_total_file_movements . 
                                                                       ' asset', 
                                                                       $tmp_sect_final_out);

                        }else{

                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{ENDPOINT_FILES_MOVED_COUNT}', 
                                                                       $tmp_total_file_movements . 
                                                                       ' assets', 
                                                                       $tmp_sect_final_out);

                        }

                        $tmp_sect_final_out = $this->proper_replace(
                                                                   '{ENDPOINT_FILES_MOVED_PATH}', 
                                                                   $tmp_dyn_dest_path_HTML, 
                                                                   $tmp_sect_final_out);

                    }else{

                        if($tmp_total_file_movements == 1){

                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{ENDPOINT_FILES_MOVED_COUNT}', 
                                                                       $tmp_total_file_movements . 
                                                                       ' asset', 
                                                                       $tmp_sect_final_out);

                        }else{

                            $tmp_sect_final_out = $this->proper_replace(
                                                                       '{ENDPOINT_FILES_MOVED_COUNT}', 
                                                                       $tmp_total_file_movements . 
                                                                       ' assets', 
                                                                       $tmp_sect_final_out);

                        }

                        $tmp_sect_final_out = $this->proper_replace(
                                                                   '{ENDPOINT_FILES_MOVED_PATH}', 
                                                                   $tmp_dyn_dest_path_TEXT, 
                                                                   $tmp_sect_final_out);

                    }

                }

                return $tmp_sect_final_out;

            break;
            case 'ELECTRUM_DATA_DESTINATION_TEXT':
            case 'ELECTRUM_DATA_DESTINATION_HTML':

                foreach($this->queued_endpoint_ARRAY[$batch_serial]['DESTINATION'] as 
                    $key_src => $hot_dest_connection_ARRAY)
                {
                    $tmp_thumb_border_top_FLAG = true;
                    $tmp_thumb_border_top = 15;
                    $tmp_final_out .= $section_content_shell;

                    $tmp_oEndpoint = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];
                    $tmp_timestamp_nom = $tmp_oEndpoint->return_timestamp_nom();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $this->error_log('ELECTRUM_DATA_DESTINATION_HTML ' . 
                     *                      'tmp_timestamp_nom=>' . 
                     *                      $tmp_timestamp_nom, 
                     *                      __LINE__, 
                     *                      __METHOD__, 
                     *                      __FILE__, 
                     *                      CRNRSTN_ELECTRUM);
                     *
                     */

                    if(!is_object($hot_dest_connection_ARRAY['oLightning_ftp_conn'])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * DIRECTORY DESTINATION.
                         *
                         */
                        $tmp_endpoint_type = 'Local Directory';
                        $tmp_dest_DIR_PATH = $tmp_oEndpoint->return_LOCAL_DIR_PATH();

                        if(!is_dir($tmp_dest_DIR_PATH)){

                            $local_oWCR_key = $tmp_oEndpoint->return_local_oWCR_key();
                            $tmp_dest_DIR_PATH = $this->get_resource(
                                                                      'LOCAL_DIR_PATH', 
                                                                      $local_oWCR_key);

                        }

                        $tmp_dest_path_or_ip = $tmp_dest_DIR_PATH;

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * FTP DESTINATION.
                         *
                         */
                        $tmp_endpoint_type = 'FTP';
                        $tmp_dest_FTP_SERVER = $tmp_oEndpoint->return_FTP_SERVER();
                        $tmp_dest_FTP_PORT = $tmp_oEndpoint->return_FTP_PORT();
                        $tmp_dest_DIR_PATH = $tmp_oEndpoint->return_FTP_DIR_PATH();
                        $tmp_dest_path_or_ip = $tmp_dest_FTP_SERVER . 
                                               ' at port ' . 
                                               $tmp_dest_FTP_PORT;

                    }

                    $oEndpoint_serial = $tmp_oEndpoint->return_serial();
                    if(!$this->endpoint_isValid_ARRAY[$oEndpoint_serial]){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Connection error.
                         *
                         */
                        $tmp_thumb = $this->return_quickGlanceThumb('error');
                        $tmp_copy = $this->return_quickGlanceCopy('error');
                        $tmp_thumb_TEXT = '** CONNECTION ERROR **';

                    }else{

                        $tmp_thumb = $this->return_quickGlanceThumb('success');
                        $tmp_copy = $this->return_quickGlanceCopy('success');
                        $tmp_thumb_TEXT = '** CONNECTION SUCCESS **';

                    }

                    if($content_type == 'ELECTRUM_DATA_DESTINATION_HTML'){

                        if(($tmp_timestamp_nom != '') && 
                            is_dir($tmp_dest_path_or_ip))
                        {

                            $tmp_dest_path_or_ip_HTML = $tmp_dest_path_or_ip . 
                                                        $tmp_timestamp_nom;

                        }else{

                            $tmp_dest_path_or_ip_HTML = $tmp_dest_path_or_ip;

                        }

                        $tmp_str_ARRAY = $this->return_universalPathProperBreak(
                                                $tmp_dest_path_or_ip, 
                                                52, 
                                                true);

                        $tmp_dest_path_or_ip_TITLE = $tmp_str_ARRAY['str'];

                        if(strlen($tmp_dest_path_or_ip) > 52){

                            for($i = 0; $i < $tmp_str_ARRAY['border_increment']; $i++){

                                if($tmp_thumb_border_top_FLAG){

                                    $tmp_thumb_border_top_FLAG = false;

                                }else{

                                    $tmp_thumb_border_top += 25;

                                }

                            }

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Add trailing slash. 
                         *
                         */
                        if(($tmp_timestamp_nom != '') && 
                            is_dir($tmp_dest_path_or_ip))
                        {

                            $tmp_dest_path_or_ip_HTML .= $tmp_str_ARRAY['slashChar'];

                        }

                        $this->error_log('oWheel tmp_dest_path_or_ip_HTML=' . 
                                             $tmp_dest_path_or_ip_HTML, 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                        $tmp_cumulative_dest_path = $this->return_electrumDataDestinationPathDetailsOutputShell('HTML');

                        $tmp_cumulative_dest_path = $this->loadElectrumData(
                                                           $execution_serial, 
                                                           $batch_serial, 
                                                           'ELECTRUM_DESTINATION_PATHS_DETAIL_HTML', 
                                                           $tmp_cumulative_dest_path, 
                                                           $hot_dest_connection_ARRAY);

                        $tmp_final_out = $this->proper_replace(
                                                              '{THUMB_BORDER_TOP}', 
                                                              $tmp_thumb_border_top, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{STATUS_THUMBNAIL_QUICKGLANCE}', 
                                                              $tmp_thumb, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{STATUS_COPY_QUICKGLANCE}', 
                                                              $tmp_copy, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_PATH_OR_IP+PORT}', 
                                                              $tmp_dest_path_or_ip_TITLE, 
                                                              $tmp_final_out);
                        /**
                         *$tmp_final_out = $this->proper_replace(
                         *                                      '{ENDPOINT_FILES_MOVED_COUNT}', 
                         *                                      $total_endpoint_file_count . ' files', 
                         *                                      $tmp_final_out);
                         *
                         */
                        $tmp_final_out = $this->proper_replace(
                                                              '{ELECTRUM_DESTINATION_PATHS_DETAIL_HTML}', 
                                                              $tmp_cumulative_dest_path, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_TYPE}', 
                                                              $tmp_endpoint_type, 
                                                              $tmp_final_out);

                    }else{

                        if(($tmp_timestamp_nom != '') && 
                            is_dir($tmp_dest_path_or_ip))
                        {

                            $tmp_dest_path_or_ip_TEXT = $tmp_dest_path_or_ip . 
                                                        $tmp_timestamp_nom;

                        }else{

                            $tmp_dest_path_or_ip_TEXT = $tmp_dest_path_or_ip;

                        }

                        if(strlen($tmp_dest_path_or_ip) > 52){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Break at a good 
                             * 52 char chunk 
                             * to the end. 
                             *
                             */
                            $oChunkRestrictData = $this->chunkPageData(
                                                                       $tmp_dest_path_or_ip_TEXT, 
                                                                       52);
                            $tmp_path_array['chunked_content'] = $oChunkRestrictData->return_linesArray();

                            $tmp_dest_path_or_ip_TEXT = '';
                            $tmp_break_size = sizeof($tmp_path_array['chunked_content']);
                            for ($i = 0; $i < $tmp_break_size; $i++){

                                $tmp_dest_path_or_ip_TEXT .= $tmp_path_array['chunked_content'][$i] . '
...';

                            }

                            $tmp_dest_path_or_ip_TEXT = rtrim($tmp_dest_path_or_ip_TEXT, '.');
                            $tmp_dest_path_or_ip_TEXT = rtrim($tmp_dest_path_or_ip_TEXT, '
');

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * TEXT version.
                         *
                         */
                        $tmp_cumulative_dest_path = $this->return_electrumDataDestinationPathDetailsOutputShell();
                        $tmp_cumulative_dest_path = $this->loadElectrumData(
                                                           $execution_serial, 
                                                           $batch_serial, 
                                                           'ELECTRUM_DESTINATION_PATHS_DETAIL_TEXT', 
                                                           $tmp_cumulative_dest_path, 
                                                           $hot_dest_connection_ARRAY);

                        $tmp_final_out = $this->proper_replace(
                                                              '{STATUS_THUMBNAIL_QUICKGLANCE}', 
                                                              $tmp_thumb_TEXT, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_PATH_OR_IP+PORT}', 
                                                              $tmp_dest_path_or_ip_TEXT, 
                                                              $tmp_final_out);
                        /**
                         *$tmp_final_out = $this->proper_replace(
                         *                                      '{ENDPOINT_FILES_MOVED_COUNT}', 
                         *                                      $total_endpoint_file_count . ' files', 
                         *                                      $tmp_final_out);
                         *
                         */
                        $tmp_final_out = $this->proper_replace(
                                                              '{ELECTRUM_DESTINATION_PATHS_DETAIL_TEXT}', 
                                                              $tmp_cumulative_dest_path, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_TYPE}', 
                                                              $tmp_endpoint_type, 
                                                              $tmp_final_out);

                    }

                }

                return $tmp_final_out;

            break;
            case 'ELECTRUM_DATA_SOURCE_TEXT':
            case 'ELECTRUM_DATA_SOURCE_HTML':

                foreach($this->queued_endpoint_ARRAY[$batch_serial]['SOURCE'] as 
                    $key_src => $hot_src_connection_ARRAY)
                {
                    $tmp_thumb_border_top_FLAG = false;
                    $tmp_thumb_border_top = 25;
                    $tmp_final_out .= $section_content_shell;
                    //error_log('3518 - '. $tmp_final_out);
                    $tmp_oEndpoint = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];

                    if(!is_object($hot_src_connection_ARRAY['oLightning_ftp_conn'])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * DIRECTORY SOURCE. 
                         *
                         */
                        $tmp_endpoint_type = 'Local Directory';
                        $tmp_src_DIR_PATH = $tmp_oEndpoint->return_LOCAL_DIR_PATH();

                        if(!is_dir($tmp_src_DIR_PATH)){

                            $local_oWCR_key = $tmp_oEndpoint->return_local_oWCR_key();
                            $tmp_src_DIR_PATH = $this->get_resource(
                                                                     'LOCAL_DIR_PATH', 
                                                                     $local_oWCR_key);

                        }

                        $tmp_src_path_or_ip = $tmp_src_DIR_PATH;

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * FTP SOURCE.
                         *
                         */
                        $tmp_endpoint_type = 'FTP';
                        $tmp_src_FTP_SERVER = $tmp_oEndpoint->return_FTP_SERVER();
                        $tmp_src_FTP_PORT = $tmp_oEndpoint->return_FTP_PORT();
                        $tmp_src_DIR_PATH = $tmp_oEndpoint->return_FTP_DIR_PATH();
                        $tmp_src_path_or_ip = $tmp_src_FTP_SERVER . 
                                              ' at port ' . 
                                              $tmp_src_FTP_PORT;


                    }

                    $oEndpoint_serial = $tmp_oEndpoint->return_serial();

                    $tmp_output_fileSize_total = '';

                    if(!$this->endpoint_isValid_ARRAY[$oEndpoint_serial]){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Connection error - 
                         * No listing of 
                         * files acquired. 
                         *
                         */
                        $tmp_thumb = $this->return_quickGlanceThumb('error');
                        $tmp_thumb_TEXT = '** CONNECTION ERROR **';

                    }else{

                        $tmp_thumb = $this->return_quickGlanceThumb('success');
                        $tmp_thumb_TEXT = '** CONNECTION SUCCESS **';
                        $total_endpoint_file_count = sizeof($this->directory_content_ARRAY[$oEndpoint_serial]);

                        if(isset($this->directory_dir_content_ARRAY[$oEndpoint_serial])){

                            $total_endpoint_DIR_count = sizeof($this->directory_dir_content_ARRAY[$oEndpoint_serial]);

                        }else{

                            $total_endpoint_DIR_count = 0;

                        }

                        $total_endpoint_file_count += $total_endpoint_DIR_count;

                        $total_endpoint_file_count = $this->number_format_keep_precision($total_endpoint_file_count);

                        $tmp_total_filesize = 0;
                        $tmp_null_filesize_cnt = 0;
                        foreach($this->source_file_size_at_path_ARRAY[$oEndpoint_serial] as 
                            $path => $filesize)
                        {

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * $this->error_log('[' . 
                             *                      $path . ']->' . 
                             *                      $filesize, 
                             *                      __LINE__, 
                             *                      __METHOD__, 
                             *                      __FILE__, 
                             *                      'CRNRSTN_oELECTRUM_PROFILE');
                             *
                             */
                            if($filesize > 0){

                                $tmp_total_filesize += (int) $filesize;

                            }else{

                                $tmp_null_filesize_cnt++;

                            }

                        }

                        $tmp_output_fileSize_total = $this->return_bytes(
                                                            $tmp_total_filesize, 
                                                            5);

                    }

                    $tmp_output_fileSize_total_TEXT = $tmp_output_fileSize_total_HTML = $tmp_output_fileSize_total;

                    if($tmp_null_filesize_cnt > 0){

                        $tmp_thumb_border_top_FLAG = true;
                        $tmp_thumb_border_top += 25;

                        if($tmp_null_filesize_cnt > 1){

                            $tmp_output_fileSize_total_HTML = $tmp_output_fileSize_total . 
                                                              '<br><strong>(with ftp_size() err<br>on ' . 
                                                              $tmp_null_filesize_cnt . ' files)</strong>';
                            $tmp_output_fileSize_total_TEXT = $tmp_output_fileSize_total . '
(with ftp_size() err on ' . $tmp_null_filesize_cnt . ' files)';

                        }else{

                            $tmp_output_fileSize_total_HTML = $tmp_output_fileSize_total . 
                                                              '<br><strong>(with ftp_size() err<br>on ' . 
                                                              $tmp_null_filesize_cnt . ' file)</strong>';
                            $tmp_output_fileSize_total_TEXT = $tmp_output_fileSize_total . '
(with ftp_size() err on ' . $tmp_null_filesize_cnt . ' files)';

                        }
                    }

                    if($content_type == 'ELECTRUM_DATA_SOURCE_HTML'){

                        $tmp_src_path_or_ip_HTML = $tmp_src_path_or_ip;

                        $tmp_str_ARRAY = $this->return_universalPathProperBreak(
                                                $tmp_src_path_or_ip_HTML, 
                                                52, 
                                                true);

                        $tmp_src_path_or_ip_HTML = $tmp_str_ARRAY['str'];

                        if(strlen($tmp_src_path_or_ip) > 52){

                            $pos_fslash = strpos($tmp_src_path_or_ip, '/');

                            for($i = 0; $i < $tmp_str_ARRAY['border_increment']; $i++){

                                if($tmp_thumb_border_top_FLAG){

                                    $tmp_thumb_border_top_FLAG = false;

                                }else{

                                    $tmp_thumb_border_top += 25;

                                }

                            }

                        }

                        $tmp_path_str_ARRAY = $this->return_universalPathProperBreak(
                                                    $tmp_src_DIR_PATH, 
                                                    96, 
                                                    true);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * $tmp_path_str_ARRAY['str'] = $str;
                         * $tmp_str_ARRAY['border_increment']
                         * 
                         */

                        $tmp_final_out = $this->proper_replace(
                                                              '{THUMB_BORDER_TOP}', 
                                                              $tmp_thumb_border_top, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{STATUS_THUMBNAIL_QUICKGLANCE}', 
                                                              $tmp_thumb, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_PATH_OR_IP+PORT}', 
                                                              $tmp_src_path_or_ip_HTML, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{FILES_TOTALING_SIZE}', 
                                                              $total_endpoint_file_count . 
                                                              ' assets<br>totaling ' . 
                                                              $tmp_output_fileSize_total_HTML, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_PATH}', 
                                                              $tmp_path_str_ARRAY['str'], 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_TYPE}', 
                                                              $tmp_endpoint_type, 
                                                              $tmp_final_out);

                    }else{

                        $tmp_src_path_or_ip_TEXT = $tmp_src_path_or_ip;

                        $tmp_str_ARRAY = $this->return_universalPathProperBreak(
                                                $tmp_src_path_or_ip_TEXT, 
                                                52);

                        $tmp_src_path_or_ip_TEXT = $tmp_str_ARRAY['str'];

                        $tmp_path_str_ARRAY = $this->return_universalPathProperBreak(
                                                     $tmp_src_DIR_PATH, 
                                                     52);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * TEXT version. 
                         *
                         */
                        $tmp_final_out = $this->proper_replace(
                                                              '{STATUS_THUMBNAIL_QUICKGLANCE}', 
                                                              $tmp_thumb_TEXT, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_PATH_OR_IP+PORT}', 
                                                              $tmp_src_path_or_ip_TEXT, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{FILES_TOTALING_SIZE}', 
                                                              $total_endpoint_file_count . 
                                                              ' assets totaling ' . 
                                                              $tmp_output_fileSize_total_TEXT, 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_PATH}', 
                                                              $tmp_path_str_ARRAY['str'], 
                                                              $tmp_final_out);
                        $tmp_final_out = $this->proper_replace(
                                                              '{ENDPOINT_TYPE}', 
                                                              $tmp_endpoint_type, 
                                                              $tmp_final_out);

                    }

                }

                return $tmp_final_out;

            break;
            default:

                return $section_content_shell;

            break;

        }

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
     * @access private
     *
     */
    private function return_universalPathProperBreak(
                     $str, 
                     $maxlen = 52, 
                     $isHTML = false, 
                     $isEmail = false, 
                     $messageType = 'ELECTRUM_PERFORMANCE')
    {

        $tmp_thumb_border_top_increment    = 0;
        $tmp_out_ARRAY['str']              = $str;
        $tmp_out_ARRAY['border_increment'] = $tmp_thumb_border_top_increment;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Break at space n 
         * char chunk to 
         * the end. 
         *
         */
        $oChunkRestrictData           = $this->chunkPageData($str, $maxlen);
        $tmp_array['chunked_content'] = $oChunkRestrictData->return_linesArray();

        if($isHTML){

            $tmp_out_str = '';
            $tmp_break_size = sizeof($tmp_array['chunked_content']);

            for($i = 0;$i < $tmp_break_size; $i++){

                $tmp_thumb_border_top_increment++;

                $tmp_out_str .= $tmp_array['chunked_content'][$i] . '<br>...';

            }

            $tmp_out_str = rtrim($tmp_out_str, '.');
            $tmp_out_str = rtrim($tmp_out_str, '<br>');

            if($isEmail){

                switch($messageType){
                    case 'ELECTRUM_PERFORMANCE':
                        $tmp_array = explode('<=', $tmp_out_str);

                        $tmp_out_str = '<span style="font-weight:bold; ' . 
                                       'font-style:italic;">' . 
                                       $tmp_array[0] . 
                                       '</span> <=';
                        $tmp_out_str .= $tmp_array[1];

                    break;

                }

            }

        }else{

            $tmp_out_str = '';
            $tmp_break_size = sizeof($tmp_array);

            for($i = 0; $i < $tmp_break_size; $i++){

                $tmp_thumb_border_top_increment++;

                $tmp_out_str .= $tmp_array['chunked_content'][$i] . '
...';

            }

            $tmp_out_str = rtrim($tmp_out_str, '.');
            $tmp_out_str = rtrim($tmp_out_str, '
');

        }

        $tmp_out_ARRAY['str'] = $tmp_out_str;
        $tmp_out_ARRAY['border_increment'] = $tmp_thumb_border_top_increment;

        $pos_fslash = strpos($str, '/');
        $pos_bslash = strpos($str, '\\');
        if($pos_fslash !== false){

            $breakChar = '/';

        }else{

            if($pos_bslash !== false){

                $breakChar = '\\';

            }else{

                $breakChar = DIRECTORY_SEPARATOR;

            }

        }

        $tmp_out_ARRAY['slashChar'] = $breakChar;

        return $tmp_out_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function return_CRNRSTN_SysMsgContent(
                     $execution_serial, 
                     $batch_serial, 
                     $content_type = NULL, 
                     $msg_format = 'TEXT')
    {

        try{

            $msg_format   = trim(strtoupper($msg_format));
            $content_type = trim(strtoupper($content_type));

            switch($content_type){
                case 'ELECTRUM_DATA_SOURCE_TEXT':
                case 'ELECTRUM_DATA_SOURCE_HTML':
                    $tmp_section_content_shell = '';

                    $tmp_section_content_shell .= $this->return_electrumDataSourceOutputShell($msg_format);

                    $tmp_section_content_shell = $this->loadElectrumData(
                                                        $execution_serial, 
                                                        $batch_serial, 
                                                        $content_type, 
                                                        $tmp_section_content_shell);

                    return $tmp_section_content_shell;

                break;
                case 'ELECTRUM_DATA_DESTINATION_TEXT':
                case 'ELECTRUM_DATA_DESTINATION_HTML':
                    $tmp_section_content_shell = '';

                    $tmp_section_content_shell .= $this->return_electrumDataDestinationOutputShell($msg_format);

                    $tmp_section_content_shell = $this->loadElectrumData(
                                                        $execution_serial, 
                                                        $batch_serial, 
                                                        $content_type, 
                                                        $tmp_section_content_shell);

                    return $tmp_section_content_shell;

                break;
                case 'ELECTRUM_DATA_HANDLING_PROFILE_TEXT':
                case 'ELECTRUM_DATA_HANDLING_PROFILE_HTML':

                    $tmp_section_content_shell = '';

                    $tmp_section_content_shell .= $this->return_electrumDataHandlingOutputShell($msg_format);

                    $tmp_section_content_shell = $this->loadElectrumData(
                                                        $execution_serial, 
                                                        $batch_serial, 
                                                        $content_type, 
                                                        $tmp_section_content_shell);

                    return $tmp_section_content_shell;

                break;
                case 'ELECTRUM_ERRORS_TRACE_TEXT':
                case 'ELECTRUM_ERRORS_TRACE_HTML':

                    return $this->return_electrumErrorsTrace($msg_format);

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('An unknown system ' . 
                        'message content type "' . 
                        $content_type . '" (' . 
                        $msg_format . 
                        ') has been requested.');

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
             * Sunday, June 30, 2024 @ 1606 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.php.net/manual/en/function.fileperms.php
     *
     * Example #2 Display full permissions. 
     * PHP.net 
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_full_permissions($perms)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $perms = fileperms('/etc/passwd');
         *
         */

        switch($perms & 0xF000){
            case 0xC000: // socket

                $info = 's';

            break;
            case 0xA000: // symbolic link

                $info = 'l';

            break;
            case 0x8000: // regular

                $info = 'r';

            break;
            case 0x6000: // block special

                $info = 'b';

            break;
            case 0x4000: // directory

                $info = 'd';

            break;
            case 0x2000: // character special

                $info = 'c';

            break;
            case 0x1000: // FIFO pipe

                $info = 'p';

            break;
            default: // unknown

                $info = 'u';

            }

        // Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

        // Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

        // World
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

        return $info;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://www.php.net/manual/en/function.filesize.php
     * COMMENT :: https://www.php.net/manual/en/function.filesize.php#119435
     * AUTHOR :: C0nw0nk
     * 
     * Here is my super fast method 
     * of getting >2GB files to 
     * output the correct byte size 
     * on any version of windows 
     * works with both 32Bit 
     * and 64Bit. 
     * 
     * 
     * C0nw0nk
     * 
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function find_filesize($file)
    {

        if(substr(PHP_OS, 0, 3) == "WIN"){

            exec('for %I in ("' . $file . '") do @echo %~zI', $output);
            $return = $output[0];

        }else{

            $return = filesize($file);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * SOURCE :: https://www.php.net/manual/en/function.filesize.php
             * COMMENT :: https://www.php.net/manual/en/function.filesize.php#121437
             * AUTHOR :: synnus at gmail dot com
             *
             * $fsobj = new COM("Scripting.FileSystemObject");
             * $f = $fsobj->GetFile($file);
             * $return = $f->Size;
             *
             */

        }

        return $return;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function terminate_all_ftp()
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * FTP - Close. 
             *
             */
            if(isset(self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY)){

                foreach(self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY as 
                    $endpoint_id => $oLightning_ftp_conn)
                {

                    $this->error_log('Electrum FTP ' . 
                                         'connection_status=' . 
                                         $oLightning_ftp_conn->connection_status, 
                                        __LINE__, 
                                        __METHOD__, 
                                        __FILE__, 
                                        CRNRSTN_ELECTRUM);

                    if($oLightning_ftp_conn->connection_status != 'FTP connection successfully closed'){

                        $oFTP_stream_resource = $oLightning_ftp_conn->return_ftp_stream();
                        if(isset($oFTP_stream_resource)){

                            if(ftp_close($oFTP_stream_resource)){

                                $oLightning_ftp_conn->log_connection_status('FTP connection ' . 
                                                      'successfully closed');

                            }else{

                                $oLightning_ftp_conn->log_connection_status('Error experienced ' . 
                                                      'closing FTP connection.');

                            }

                            self::$oFourLivingCreatures_FTP->lightning_FTP_conn_ARRAY[$endpoint_id] = $oLightning_ftp_conn;

                        }else{

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('oFTP_stream_resource is not set.');

                        }

                    }

                }

            }

            return NULL;

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
             * Sunday, June 30, 2024 @ 1606 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return false.
             *
             */
            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_electrumDataHandlingSourceDIROutputShell($msg_format = 'TEXT')
    {

        switch($msg_format){
            case 'HTML':

                $tmp_content = '<tr>
                                                    <td colspan="2" style="width:420px;">
                                                        <div style="border-left:15px solid ' . 
                                                        '#FFF; border-top:10px solid #FFF; border-' . 
                                                        'bottom:10px solid #FFF; font-family: ' . 
                                                        'Arial, Helvetica, sans-serif; font-size:' . 
                                                        '16px; text-align:left;">' . 
                                                        '{FILE_EXCLUSION_SOURCE_DIR_HTML}</div>
                                                    </td>
                                                    <td style="text-align:right; border-right:15px solid #FFF;">
                                                        <div style="border-left:15px solid #FFF; ' . 
                                                        'border-top:10px solid #FFF; border-bottom:' . 
                                                        '10px solid #FFF; font-family: Arial, ' . 
                                                        'Helvetica, sans-serif; font-size:16px; ' . 
                                                        'text-align:right; line-height: 23px;">' . 
                                                        '{FILE_EXCLUSION_SOURCE_STATS_HTML}</div>
                                                    </td>
                                                </tr>';

            break;
            default:

                $tmp_content = '{FILE_EXCLUSION_SOURCE_DIR_TEXT}
{FILE_EXCLUSION_SOURCE_STATS_TEXT}';

            break;

        }

        return $tmp_content;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_electrumDataHandlingOutputShell($msgFormat = 'TEXT')
    {

        switch($msgFormat){
            case 'HTML':

                $tmp_content = '<tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td colspan="3" style="border-top: ' . 
                                                    '2px solid #666;"><div style="font-family:Arial, ' . 
                                                    'Helvetica, sans-serif; font-size:10px; ' . 
                                                    'line-height: 3px; border-top: 0px solid #FFF; ' . 
                                                    'width:100%;"></div></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <div style="border-left:15px solid #F0F0F0; ' . 
                                                        'border-right: 15px solid #F0F0F0; border-' . 
                                                        'top:10px solid #F0F0F0; border-bottom:10px ' . 
                                                        'solid #F0F0F0; background-color: #F0F0F0; ' . 
                                                        'font-family: Arial, Helvetica, sans-serif; ' . 
                                                        'font-size:16px; text-align:left; ' . 
                                                        'font-weight: bold;">' . 
                                                        '{FILE_EXCLUSION_RULE_COPY}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="border-top: 1px dashed ' . 
                                                        '#F90000;"><div style="font-family:Arial, ' . 
                                                        'Helvetica, sans-serif; font-size:10px; ' . 
                                                        'line-height: 3px; border-top: 0px solid ' . 
                                                        '#FFF; width:100%;">&nbsp;</div></td>
                                                </tr>
                                                {FILE_EXCLUSION_SOURCE_DIR_SECTION_HTML}
                                            </table>
                                        </td>
                                    </tr>';

            break;
            default:

                $tmp_content = '= = = = = = = = = = = = = = = = = = = = = = = = =
{FILE_EXCLUSION_RULE_COPY}
{FILE_EXCLUSION_SOURCE_DIR_SECTION_TEXT}';

            break;

        }

        return $tmp_content;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_electrumErrorsTrace($msgFormat = 'TEXT')
    {

        switch($msgFormat){
            case 'HTML':

                $tmp_content = '<tr>
                                        <td style="background-color: #3A3A3A;">
                                            <div style="border-left:15px solid ' . 
                                            '#3A3A3A; border-top:15px solid #3A3A3A; ' . 
                                            'border-bottom:15px solid #3A3A3A; ' . 
                                            'color:#FFF; font-weight: bold; font-' . 
                                            'family: Arial, Helvetica, sans-serif; ' . 
                                            'font-size:23px; text-align:left;">' . 
                                            'Electrum &ndash; Errors Experienced ' . 
                                            'During Operation</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; ' . 
                                            'border-right: 15px solid #FFF; border-' . 
                                            'top:10px solid #FFF; border-bottom:10px ' . 
                                            'solid #FFF; background-color: #FFF; ' . 
                                            'font-family: Arial, Helvetica, sans-serif; ' . 
                                            'font-size:16px; text-align:left; ' . 
                                            'font-weight: normal;">{ERR_TRACE}</div>
                                        </td>
                                    </tr>';

            break;
            default:

                $tmp_content = '= = = = = = = = = = = = = = = = = = = = = = = = =
Electrum - Errors Experienced During Operation

{ERR_TRACE}';

            break;

        }

        return $tmp_content;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_electrumDataDestinationOutputShell($msg_format = 'TEXT')
    {

        switch($msg_format){
            case 'HTML':

                $tmp_content = '<tr>
                                        <td style="border-top:10px solid #FFF;">
                                            <table cellpadding="0" cellspacing="0" ' . 
                                            'border="0" width="800" style="width:100%;">
                                                <tr>
                                                    <td valign="top" style="width:44px; ' . 
                                                    'vertical-align:center;">
                                                        <div style="vertical-align:center; ' . 
                                                        'border-left:15px solid #FFF; border-top:' . 
                                                        '{THUMB_BORDER_TOP}px solid #FFF; ' . 
                                                        'border-bottom:10px solid #FFF; ' . 
                                                        'font-family: Arial, Helvetica, ' . 
                                                        'sans-serif; font-size:16px; text-align:' . 
                                                        'left;">{STATUS_THUMBNAIL_QUICKGLANCE}</div>
                                                    </td>
                                                    <td valign="top" style="border-left:10px ' . 
                                                    'solid #FFF; vertical-align:top;">

                                                        <table cellpadding="0" cellspacing="0" ' . 
                                                        'border="0" style="width:100%;">
                                                            <tr>
                                                                <td style="width:140px;"><div ' . 
                                                                'style="border-top:12px solid #FFF; ' . 
                                                                'border-bottom:10px solid #FFF; ' . 
                                                                'font-family: Arial, Helvetica, ' . 
                                                                'sans-serif; font-size:16px; ' . 
                                                                'line-height: 18px; text-align:left;' . 
                                                                '">{ENDPOINT_TYPE} ::</div></td>
                                                                <td style="text-align: left;"><div ' . 
                                                                'style="border-top:14px solid #FFF; ' . 
                                                                'border-bottom:10px solid #FFF; ' . 
                                                                'font-family: Arial, Helvetica, ' . 
                                                                'sans-serif; font-size:16px; line-height:22px; ' . 
                                                                'font-weight: bold; text-align:left;">' . 
                                                                '{ENDPOINT_PATH_OR_IP+PORT}</div></td>
                                                                <td style="width:181px; text-align: ' . 
                                                                'right; border-right:15px solid #FFF;">' . 
                                                                '{STATUS_COPY_QUICKGLANCE}</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" style="border-right: ' . 
                                                                '15px solid #FFF;"><div style="font-' . 
                                                                'family:Arial, Helvetica, sans-serif; ' . 
                                                                'font-size:10px; border-top: 3px solid ' . 
                                                                '#A7C2E6; width:100%;"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <table cellpadding="0" cellspacing="0" ' . 
                                                                    'border="0" style="width:100%;">

                                                                        {ELECTRUM_DESTINATION_PATHS_DETAIL_HTML}

                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>';

            break;
            default:

                $tmp_content = '= = = = = = = = = = = = = = = = = = = = = = = = =
{ENDPOINT_TYPE} :: {STATUS_THUMBNAIL_QUICKGLANCE}
{ENDPOINT_PATH_OR_IP+PORT}
{ELECTRUM_DESTINATION_PATHS_DETAIL_TEXT}
';

            break;

        }

        return $tmp_content;


    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_electrumDataDestinationPathDetailsOutputShell($msg_format = 'TEXT')
    {

        switch($msg_format){
            case 'HTML':

                $tmp_content = '<tr>
                                                                            <td><div style="border-top:' . 
                                                                            '12px solid #FFF; border-bottom:10px ' . 
                                                                            'solid #FFF; font-family: Arial, ' . 
                                                                            'Helvetica, sans-serif; font-' . 
                                                                            'size:16px; line-height: 22px; ' . 
                                                                            'text-align:left; font-weight: ' . 
                                                                            'bold;">{ENDPOINT_FILES_MOVED_COUNT}' . 
                                                                            '</div></td>
                                                                            <td style="border-left:10px solid ' . 
                                                                            '#FFF;"><div style="border-top:12px ' . 
                                                                            'solid #FFF; border-bottom:10px ' . 
                                                                            'solid #FFF; font-family: Arial, ' . 
                                                                            'Helvetica, sans-serif; font-size:16px; ' . 
                                                                            'line-height: 22px; text-align:left;">' . 
                                                                            '{ENDPOINT_FILES_MOVED_PATH}</div></td>
                                                                        </tr>';

            break;
            default:

                $tmp_content = '{ENDPOINT_FILES_MOVED_COUNT}
{ENDPOINT_FILES_MOVED_PATH}';

            break;

        }

        return $tmp_content;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_electrumDataSourceOutputShell($msg_format = 'TEXT')
    {

        switch($msg_format){
            case 'HTML':

                $tmp_content = '<tr>
                                    <td style="border-top:10px solid #FFF;">
                                        <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                                            <tr>
                                                <td valign="top" style="width:44px; ' . 
                                                'vertical-align:center;">
                                                    <div style="vertical-align:center; ' . 
                                                    'border-left:15px solid #FFF; border-top:' . 
                                                    '{THUMB_BORDER_TOP}px solid #FFF; border-' . 
                                                    'bottom:10px solid #FFF; font-family: Arial, ' . 
                                                    'Helvetica, sans-serif; font-size:16px; text-' . 
                                                    'align:left;">{STATUS_THUMBNAIL_QUICKGLANCE}</div>
                                                </td>
                                                <td valign="top" style="border-left:10px solid #FFF; vertical-align:top;">

                                                    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                                                        <tr>
                                                            <td style="width:140px;"><div style=' . 
                                                            '"border-top:12px solid #FFF; border-bottom:' . 
                                                            '10px solid #FFF; font-family: Arial, ' . 
                                                            'Helvetica, sans-serif; font-size:16px; ' . 
                                                            'line-height: 18px; text-align:left;">' . 
                                                            '{ENDPOINT_TYPE} ::</div></td>
                                                            <td style="text-align: left;"><div style="' . 
                                                            'border-top:14px solid #FFF; border-bottom:' . 
                                                            '10px solid #FFF; font-family: Arial, ' . 
                                                            'Helvetica, sans-serif; font-size:16px; ' . 
                                                            'line-height:22px; font-weight: bold; text-' . 
                                                            'align:left;">{ENDPOINT_PATH_OR_IP+PORT}</div></td>
                                                            <td style="width:171px; text-align: right; ' . 
                                                            'border-right:15px solid #FFF;"><div style=' . 
                                                            '"border-top:12px solid #FFF; border-bottom:' . 
                                                            '10px solid #FFF;font-family: Arial, ' . 
                                                            'Helvetica, sans-serif; font-size:16px; ' . 
                                                            'line-height: 23px; text-align:right;">' . 
                                                            '<em>{FILES_TOTALING_SIZE}</em></div></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border-right: 15px ' . 
                                                            'solid #FFF;"><div style="font-family:Arial, ' . 
                                                            'Helvetica, sans-serif; font-size:10px; ' . 
                                                            'border-top: 3px solid #A7C2E6; width:100%;"></div></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"><div style="border-top:12px ' . 
                                                            'solid #FFF; border-bottom:10px solid #FFF; ' . 
                                                            'font-family: Arial, Helvetica, sans-serif; ' . 
                                                            'font-size:16px; line-height: 22px; text-' . 
                                                            'align:left;">{ENDPOINT_PATH}</div></td>
                                                        </tr>
                                                    </table>

                                                </td>

                                            </tr>
                                        </table>
                                    </td>
                                </tr>';

            break;
            default:

                $tmp_content = '= = = = = = = = = = = = = = = = = = = = = = = = =
{STATUS_THUMBNAIL_QUICKGLANCE}
{ENDPOINT_PATH_OR_IP+PORT}
{ENDPOINT_PATH}
{FILES_TOTALING_SIZE}
';

            break;

        }

        return $tmp_content;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_quickGlanceCopy($thumb_type)
    {

        $thumb_type = trim(strtolower($thumb_type));

        switch($thumb_type){
            case 'success':

                $tmp_copy = '<div style="border-top:12px solid #FFF; ' . 
                            'border-bottom:10px solid #FFF; font-weight: ' . 
                            'bold; font-family: Arial, Helvetica, sans-serif; ' . 
                            'font-size:16px; line-height: 23px; text-align:right; ' . 
                            'color:#169514;">' . 
                            'Connection Successful</div>';

            break;
            default:

                $tmp_copy = '<div style="border-top:12px solid #FFF; ' . 
                            'border-bottom:10px solid #FFF; font-weight: ' . 
                            'bold; font-family: Arial, Helvetica, ' . 
                            'sans-serif; font-size:16px; line-height: ' . 
                            '23px; text-align:right; color:#D22E37;">' . 
                            'Connection Error</div>';

            break;

        }

        return $tmp_copy;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_quickGlanceThumb($thumb_type)
    {

        $thumb_type = trim(strtolower($thumb_type));

        switch($thumb_type){
            case 'success':

                $tmp_thumb = $this->return_creative('SUCCESS_CHECK');

                /**
                 * <img 
                 * src="http://v2.crnrstn.evifweb.com/common/imgs/email/success_chk.gif" 
                 * width="19" 
                 * height="19" 
                 * alt="success" 
                 * title="success">';
                 *
                 */

            break;
            default:

                $tmp_thumb = $this->return_creative('ERR_X');

                /**
                 * '<img 
                 * src="http://v2.crnrstn.evifweb.com/common/imgs/email/err_x.gif" 
                 * width="19" 
                 * height="19" 
                 * alt="error" 
                 * title="error">';
                 *
                 */

            break;

        }

        return $tmp_thumb;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function removeLastDir($path)
    {

        $pos_fslash = strpos($path, '/');

        if($pos_fslash !== false){

            $slashChar = '/';

        }else{

            $pos_bslash = strpos($path, '\\');
            if($pos_bslash !== false){

                $slashChar = '\\';

            }else{

                $slashChar = DIRECTORY_SEPARATOR;

            }

        }

        $tmp_strip_root_dir_ARRAY = explode($slashChar, $path);

        $tmp_new_path = '';
        $tmp_sect_cnt = sizeof($tmp_strip_root_dir_ARRAY);
        for($i = 0; $i < $tmp_sect_cnt - 2; $i++){

            $tmp_new_path .= $tmp_strip_root_dir_ARRAY[$i] . $slashChar;

        }

        return $tmp_new_path;

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

        $this->terminate_all_ftp();

    }

}