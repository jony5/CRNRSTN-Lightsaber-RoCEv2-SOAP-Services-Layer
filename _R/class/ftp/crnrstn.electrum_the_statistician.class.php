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
 * CLASS DEFINITION :: crnrstn_electrum_the_statistician
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: October 12, 2020 @ 1520 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Electrum ::
 *                     Ezekiel 1:4 :: File 
 *                     Transfer Data Statistician
 * DESCRIPTION      :: With respect to the
 *                     CRNRSTN :: Electrum data
 *                     transfer architecture,
 *                     the Statistician is
 *                     brought in at the end in
 *                     order to keep things nice
 *                     and tidy for the purpose of
 *                     supporting email
 *                     reporting notifications.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2025 @ 0453 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * Ezekiel 1:12  And each went straight 
 *               forward; wherever the 
 *               Spirit was to go, they 
 *               went; they did not turn 
 *               as they went. 
 *
 */
class crnrstn_electrum_the_statistician  extends crnrstn_user 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the 
     *       crnrstn_electrum_the_statistician 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter along with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       Using a "The Independent Pub (ATL) 
     *       Booze, Bistro, Billiards." paper 
     *       matchbook, we strike a match 
     *       (only 4 remain) for a righteous 
     *       rip on the bong. 
     *       5 :: Sunday, June 14, 2026 @ 0316 hrs.
     *
     */

    protected $electrum_process_id;
    protected $execution_batch_serial;
    protected $startTime;
    protected $timestamp_versioning_pattern;
    protected $timestamp_nom_ARRAY = array();
    protected $content_only_path_to_destination = false;

    protected $source_endpoint_isValid_ARRAY = array();
    protected $source_endpoint_protocol_ARRAY = array();
    protected $source_endpoint_stats_serial_ARRAY = array();
    protected $source_endpoint_stats_pathindex_ARRAY = array();
    protected $source_endpoint_stats_path_serialindex_ARRAY = array();
    protected $source_endpoint_serial_ARRAY = array();
    protected $source_endpoint_id_ARRAY = array();
    protected $source_endpoint_perms_ARRAY = array();
    protected $source_endpoint_err_reason_ARRAY = array();
    protected $source_endpoint_ftp_server_ARRAY = array();
    protected $source_endpoint_ftp_port_ARRAY = array();

    protected $destination_endpoint_stats_serial_ARRAY = array();
    protected $destination_endpoint_stats_pathindex_ARRAY = array();
    protected $destination_endpoint_stats_path_serialindex_ARRAY = array();
    protected $destination_endpoint_isValid_ARRAY = array();
    protected $destination_endpoint_protocol_ARRAY = array();
    protected $destination_endpoint_serial_ARRAY = array();
    protected $destination_endpoint_id_ARRAY = array();
    protected $destination_endpoint_ftp_server_ARRAY = array();
    protected $destination_endpoint_ftp_port_ARRAY = array();
    protected $destination_endpoint_perms_ARRAY = array();
    protected $destination_endpoint_mkdir_mode_ARRAY = array();
    protected $destination_endpoint_err_reason_ARRAY = array();
    protected $destination_endpoint_isFlatFile_ARRAY = array();

    protected $transfer_success_count_ARRAY = array();
    protected $filesize_success_count_ARRAY = array();

    protected $custom_folder_name;

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
     * @access public
     *
     */
    function init_directory_datestamp_nom(
             $oEndpoint_serial, 
             $ts_nom)
    {

        $this->timestamp_nom_ARRAY[$oEndpoint_serial] = $ts_nom;

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

        $this->custom_folder_name = $custom_folder_name;

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
    function return_FD_destination_stats_array(
             $oEndpoint_serial_SOURCE, 
             $oEndpoint_serial_DESTINATION, 
             $SOURCE_filePath = NULL)
    {

        /** 
         * $ftp_root_dir_path
         * $tmp_mksubdir_destination_path
         * $target_destination_file_path
         *
         */

        $tmp_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get DESTINATION 
         * endpoint stats data. 
         *
         */
        foreach($this->destination_endpoint_stats_serial_ARRAY as 
            $key_dest => $destination_stats_serial)
        {

            if($oEndpoint_serial_DESTINATION == $this->destination_endpoint_serial_ARRAY[$destination_stats_serial]){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * LOCAL_DIR. 
                 *
                 */
                $destination_is_flat_file     = $this->destination_endpoint_isFlatFile_ARRAY[$destination_stats_serial];
                $destination_isValid          = $this->destination_endpoint_isValid_ARRAY[$destination_stats_serial];
                $destination_protocol         = $this->destination_endpoint_protocol_ARRAY[$destination_stats_serial];
                $destination_oEndpoint_serial = $this->destination_endpoint_serial_ARRAY[$destination_stats_serial];
                $destination_oEndpoint_id     = $this->destination_endpoint_id_ARRAY[$destination_stats_serial];
                $destination_current_perms    = $this->destination_endpoint_perms_ARRAY[$destination_stats_serial];
                $destination_MKDIR_MODE       = $this->destination_endpoint_mkdir_mode_ARRAY[$destination_stats_serial];
                $destination_DIR_PATH         = $this->destination_endpoint_stats_path_serialindex_ARRAY[$destination_stats_serial];

            }

        }

        $tmp_ARRAY['DESTINATION_FILEPATH'] = $this->return_destination_stats_path(
                                                    $oEndpoint_serial_SOURCE, 
                                                    $oEndpoint_serial_DESTINATION);

        if($tmp_slashChar = $this->return_slashChar($tmp_ARRAY['DESTINATION_FILEPATH'])){

            $tmp_ARRAY['DESTINATION_FILEPATH'] = rtrim(
                                                 $tmp_ARRAY['DESTINATION_FILEPATH'], 
                                                 $tmp_slashChar) . $tmp_slashChar;

            $tmp_chop_ARRAY = explode(
                              $tmp_slashChar, 
                              $tmp_ARRAY['DESTINATION_FILEPATH']);
            $tmp_node_cnt = sizeof($tmp_chop_ARRAY);

            /* $this->error_log('oWheel :: We want to ' . 
             *        'get target path[' . 
             *        $target_destination_file_path . '] starting from => ' . 
             *        $tmp_ARRAY[$tmp_node_cnt - 2], 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__, 
             *        'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             * $this->error_log('oWheel :: We want to ' . 
             *        'get target path[' . 
             *        $target_destination_file_path . 
             *        '] starting from => ' . 
             *        $tmp_ARRAY[$tmp_node_cnt - 2], 
             *        __LINE__, 
             *        __METHOD__, 
             *        __FILE__, 
             *        CRNRSTN_ELECTRUM);
             *
             */

            $tmp_destination_node_ARRAY = explode(
                                          $tmp_chop_ARRAY[$tmp_node_cnt - 2], 
                                          $SOURCE_filePath);

            $tmp_mksubdir_destination_path = dirname($tmp_destination_node_ARRAY[1]);

        }else{

            $tmp_mksubdir_destination_path = dirname($tmp_ARRAY['DESTINATION_FILEPATH']);

        }

        $tmp_ARRAY['DIR_PATH']  = $destination_DIR_PATH;
        $tmp_ARRAY['MKSUB_DIR'] = $tmp_mksubdir_destination_path;

        return $tmp_ARRAY;

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
    function return_DF_destination_stats_array(
             $oEndpoint_serial_SOURCE, 
             $oEndpoint_serial_DESTINATION, 
             $SOURCE_filepath)
    {

        /* $ftp_root_dir_path
         * $tmp_mksubdir_destination_path
         * $target_destination_file_path
         * $target_destination_dir_path
         *
         */

        $tmp_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get destination 
         * endpoint stats data. 
         *
         */
        foreach($this->destination_endpoint_stats_serial_ARRAY as 
            $key_dest => $destination_stats_serial)
        {

            if($oEndpoint_serial_DESTINATION == $this->destination_endpoint_serial_ARRAY[$destination_stats_serial]){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * FTP. 
                 *
                 */
                $destination_is_flat_file     = $this->destination_endpoint_isFlatFile_ARRAY[$destination_stats_serial];
                $destination_isValid          = $this->destination_endpoint_isValid_ARRAY[$destination_stats_serial];
                $destination_protocol         = $this->destination_endpoint_protocol_ARRAY[$destination_stats_serial];
                $destination_oEndpoint_serial = $this->destination_endpoint_serial_ARRAY[$destination_stats_serial];
                $destination_oEndpoint_id     = $this->destination_endpoint_id_ARRAY[$destination_stats_serial];
                $destination_FTP_SERVER       = $this->destination_endpoint_ftp_server_ARRAY[$destination_stats_serial];
                $destination_FTP_PORT         = $this->destination_endpoint_ftp_port_ARRAY[$destination_stats_serial];
                $destination_FTP_DIR_PATH     = $this->destination_endpoint_stats_path_serialindex_ARRAY[$destination_stats_serial];

            }

        }

        $tmp_ARRAY['DESTINATION_FILEPATH'] = $this->return_destination_stats_path(
                                                    $oEndpoint_serial_SOURCE, 
                                                    $oEndpoint_serial_DESTINATION);

        $tmp_slashChar = $this->return_slashChar($tmp_ARRAY['DESTINATION_FILEPATH']);
        $tmp_split_ARRAY = explode(
                           $tmp_slashChar, 
                           $tmp_ARRAY['DESTINATION_FILEPATH']);

        $tmp_sect_cnt = sizeof($tmp_split_ARRAY);
        $tmp_ARRAY['SPLIT_DIR'] = $tmp_split_ARRAY[$tmp_sect_cnt - 2];

        $tmp_splice_ARRAY = explode(
                            $tmp_ARRAY['SPLIT_DIR'], 
                            $SOURCE_filepath);

        if($tmp_slashChar = $this->return_slashChar($destination_FTP_DIR_PATH)){

            $destination_FTP_DIR_PATH = rtrim(
                                        $destination_FTP_DIR_PATH, 
                                        $tmp_slashChar) . 
                                        $tmp_slashChar;

            $tmp_chop_ARRAY = explode(
                              $tmp_slashChar, 
                              $destination_FTP_DIR_PATH);
            $tmp_node_cnt = sizeof($tmp_chop_ARRAY);

            $tmp_destination_node_ARRAY = explode(
                                          $tmp_chop_ARRAY[$tmp_node_cnt - 2], 
                                          $tmp_ARRAY['DESTINATION_FILEPATH']);

            $tmp_mksubdir_destination_path = dirname($tmp_destination_node_ARRAY[1]);

        }else{

            $tmp_mksubdir_destination_path = dirname($tmp_ARRAY['DESTINATION_FILEPATH']);

        }

        $tmp_ARRAY['FTP_DIR_PATH'] = $destination_FTP_DIR_PATH;
        $tmp_ARRAY['MKSUB_DIR']    = $tmp_mksubdir_destination_path;

        return $tmp_ARRAY;

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
    function return_destination_stats_path(
             $serial_oEndpoint_SOURCE, 
             $serial_oEndpoint_DESTINATION)
    {

        $destination_path = '';

        /* $this->destination_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;
         * source_endpoint_stats_serial_ARRAY
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get destination 
         * endpoint stats data.
         *
         */
        foreach($this->destination_endpoint_stats_serial_ARRAY as 
            $key_dest => $destination_stats_serial){

            if($serial_oEndpoint_DESTINATION == $this->destination_endpoint_serial_ARRAY[$destination_stats_serial]){

                switch($this->destination_endpoint_protocol_ARRAY[$destination_stats_serial]){
                    case 'FTP':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * FTP. 
                         *
                         */
                        $destination_is_flat_file     = $this->destination_endpoint_isFlatFile_ARRAY[$destination_stats_serial];
                        $destination_isValid          = $this->destination_endpoint_isValid_ARRAY[$destination_stats_serial];
                        $destination_protocol         = $this->destination_endpoint_protocol_ARRAY[$destination_stats_serial];
                        $destination_oEndpoint_serial = $this->destination_endpoint_serial_ARRAY[$destination_stats_serial];
                        $destination_oEndpoint_id     = $this->destination_endpoint_id_ARRAY[$destination_stats_serial];
                        $destination_FTP_SERVER       = $this->destination_endpoint_ftp_server_ARRAY[$destination_stats_serial];
                        $destination_FTP_PORT         = $this->destination_endpoint_ftp_port_ARRAY[$destination_stats_serial];
                        $destination_FTP_DIR_PATH     = $this->destination_endpoint_stats_path_serialindex_ARRAY[$destination_stats_serial];

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * LOCAL_DIR. 
                         *
                         */
                        $destination_is_flat_file     = $this->destination_endpoint_isFlatFile_ARRAY[$destination_stats_serial];
                        $destination_isValid          = $this->destination_endpoint_isValid_ARRAY[$destination_stats_serial];
                        $destination_protocol         = $this->destination_endpoint_protocol_ARRAY[$destination_stats_serial];
                        $destination_oEndpoint_serial = $this->destination_endpoint_serial_ARRAY[$destination_stats_serial];
                        $destination_oEndpoint_id     = $this->destination_endpoint_id_ARRAY[$destination_stats_serial];
                        $destination_current_perms    = $this->destination_endpoint_perms_ARRAY[$destination_stats_serial];
                        $destination_MKDIR_MODE       = $this->destination_endpoint_mkdir_mode_ARRAY[$destination_stats_serial];
                        $destination_DIR_PATH         = $this->destination_endpoint_stats_path_serialindex_ARRAY[$destination_stats_serial];

                    break;

                }

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get source endpoint 
         * stats serial. 
         *
         */
        foreach($this->source_endpoint_stats_serial_ARRAY as 
            $key_src => $source_stats_serial)
        {

            if($serial_oEndpoint_SOURCE == $this->source_endpoint_serial_ARRAY[$source_stats_serial]){

                switch($this->source_endpoint_protocol_ARRAY[$source_stats_serial]){
                    case 'FTP':

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * FTP. 
                         *
                         */
                        $source_isValid          = $this->source_endpoint_isValid_ARRAY[$source_stats_serial];
                        $source_protocol         = $this->source_endpoint_protocol_ARRAY[$source_stats_serial];
                        $source_oEndpoint_serial = $this->source_endpoint_serial_ARRAY[$source_stats_serial];
                        $source_oEndpoint_id     = $this->source_endpoint_id_ARRAY[$source_stats_serial];
                        $source_FTP_SERVER       = $this->source_endpoint_ftp_server_ARRAY[$source_stats_serial];
                        $source_FTP_PORT         = $this->source_endpoint_ftp_port_ARRAY[$source_stats_serial];
                        $source_FTP_DIR_PATH     = $this->source_endpoint_stats_path_serialindex_ARRAY[$source_stats_serial];

                    break;
                    default:

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * LOCAL_DIR. 
                         *
                         */
                        $source_isValid          = $this->source_endpoint_isValid_ARRAY[$source_stats_serial];
                        $source_protocol         = $this->source_endpoint_protocol_ARRAY[$source_stats_serial];
                        $source_oEndpoint_serial = $this->source_endpoint_serial_ARRAY[$source_stats_serial];
                        $source_oEndpoint_id     = $this->source_endpoint_id_ARRAY[$source_stats_serial];
                        $source_current_perms    = $this->source_endpoint_perms_ARRAY[$source_stats_serial];
                        $source_DIR_PATH         = $this->source_endpoint_stats_path_serialindex_ARRAY[$source_stats_serial];

                    break;

                }

            }

        }

        switch($destination_protocol){
            case 'FTP':

                if($dest_slashChar = $this->return_slashChar($destination_FTP_DIR_PATH)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * TODO :: Is there a better 
                     *         way to init this 
                     *         DIRECTORY_SEPARATOR?
                     *
                     *         Solution after reading 
                     *         a ton of PHP.net comments 
                     *         about OS/slashes and 
                     *         code samples/treatments:
                     *         - Maybe focus on OS, and 
                     *           not the slash direction 
                     *           in file paths. 
                     *           Do a laser-line & manual
                     *           forcing of path specifics 
                     *           at read/write, and just 
                     *           pivot on the server OS?
                     *         5 :: Thursday, March 12, 2026 @ 1747 hrs.
                     *         Last Modified: Sunday, June 14, 2026 @ 0337 hrs.
                     *
                     */

                }else{

                    $dest_slashChar = \DIRECTORY_SEPARATOR;

                }

                $destination_path .= rtrim($destination_FTP_DIR_PATH,$dest_slashChar) . $dest_slashChar;

                if(isset($this->custom_folder_name)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Append custom 
                     * DIR to path 
                     * at destination. 
                     *
                     */
                    $destination_path .= rtrim(
                                         $this->custom_folder_name, 
                                         $dest_slashChar) . 
                                         $dest_slashChar;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Append date stamped 
                 * dir name to path. 
                 *
                 */
                if(isset($this->timestamp_nom_ARRAY[$source_oEndpoint_serial])){

                    $timestamp_nom = $this->timestamp_nom_ARRAY[$source_oEndpoint_serial];

                    $destination_path .= $timestamp_nom . $dest_slashChar;

                }else{

                    if($this->timestamp_versioning_pattern != ''){

                        if(!($timestamp_nom = date($this->timestamp_versioning_pattern, time()))){

                            $timestamp_nom = date('Ymd_H_i_s', time());

                        }

                        $destination_path .= $timestamp_nom . $dest_slashChar;

                    }


                }

                if($this->content_only_path_to_destination){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * No replication 
                     * (at destination) 
                     * of containing 
                     * DIR at source. 
                     *
                     */

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Replicate to 
                     * destination...containing 
                     * DIR at source. 
                     *
                     */
                    switch($source_protocol){
                        case 'FTP':

                            if($src_slashChar = $this->return_slashChar($source_FTP_DIR_PATH)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * TODO :: Is there a better 
                                 *         way to init this 
                                 *         DIRECTORY_SEPARATOR?
                                 *         5 :: Thursday, March 12, 2026 @ 1739 hrs.
                                 *
                                 */

                            }else{

                                $src_slashChar = DIRECTORY_SEPARATOR;

                            }

                            $source_FTP_DIR_PATH = rtrim(
                                                   $source_FTP_DIR_PATH, 
                                                   $src_slashChar) . 
                                                   $src_slashChar;

                            $tmp_src_dir_ARRAY = explode(
                                                 $src_slashChar, 
                                                 $source_FTP_DIR_PATH);

                        break;
                        default:

                            if($src_slashChar = $this->return_slashChar($source_DIR_PATH)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * TODO :: Is there a better 
                                 *         way to init this 
                                 *         DIRECTORY_SEPARATOR?
                                 *         5 :: Thursday, March 12, 2026 @ 1747 hrs.
                                 *
                                 */

                            }else{

                                $src_slashChar = DIRECTORY_SEPARATOR;

                            }

                            $source_DIR_PATH = rtrim(
                                               $source_DIR_PATH, 
                                               $src_slashChar) . $src_slashChar;

                            $tmp_src_dir_ARRAY = explode(
                                                 $src_slashChar, 
                                                 $source_DIR_PATH);

                        break;

                    }

                    $tmp_dir_sect_cnt = sizeof($tmp_src_dir_ARRAY);

                    $destination_path .= $tmp_src_dir_ARRAY[$tmp_dir_sect_cnt - 2] . 
                                         $dest_slashChar;

                }

            break;
            default:

                if($dest_slashChar = $this->return_slashChar($destination_DIR_PATH)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * TODO :: Is there a better 
                     *         way to init this 
                     *         DIRECTORY_SEPARATOR?
                     *         5 :: Thursday, March 12, 2026 @ 1740 hrs.
                     *
                     */

                }else{

                    $dest_slashChar = DIRECTORY_SEPARATOR;

                }

                $destination_path .= rtrim(
                                     $destination_DIR_PATH, 
                                     $dest_slashChar) . $dest_slashChar;

                if(isset($this->custom_folder_name)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Append custom dir 
                     * to path at destination. 
                     *
                     */
                    $destination_path .= rtrim(
                                         $this->custom_folder_name, 
                                         $dest_slashChar) . $dest_slashChar;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Append date stamped 
                 * dir name to path. 
                 *
                 */
                if(isset($this->timestamp_nom_ARRAY[$source_oEndpoint_serial])){

                    $timestamp_nom = $this->timestamp_nom_ARRAY[$source_oEndpoint_serial];

                    $destination_path .= $timestamp_nom . $dest_slashChar;

                }else{

                    if($this->timestamp_versioning_pattern != ''){

                        if(!($timestamp_nom = date(
                                              $this->timestamp_versioning_pattern, 
                                              time())))
                        {

                            $timestamp_nom = date('Ymd_H_i_s', time());

                        }

                        $destination_path .= $timestamp_nom . $dest_slashChar;

                    }

                }

                if($this->content_only_path_to_destination){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * No replication 
                     * (at destination) 
                     * of containing DIR 
                     * at SOURCE. 
                     *
                     */

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Replicate to 
                     * destination...containing 
                     * DIR at SOURCE. 
                     *
                     */
                    switch($source_protocol){
                        case 'FTP':

                            if($src_slashChar = $this->return_slashChar($source_FTP_DIR_PATH)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * TODO :: Is there a better 
                                 *         way to init this 
                                 *         DIRECTORY_SEPARATOR? 
                                 *         5 :: Thursday, March 12, 2026 @ 1743 hrs.
                                 *
                                 */

                            }else{

                                $src_slashChar = DIRECTORY_SEPARATOR;

                            }

                            $source_FTP_DIR_PATH = rtrim(
                                                   $source_FTP_DIR_PATH, 
                                                   $src_slashChar) . 
                                                   $src_slashChar;

                            $tmp_src_dir_ARRAY = explode(
                                                 $src_slashChar, 
                                                 $source_FTP_DIR_PATH);

                        break;
                        default:

                            if($src_slashChar = $this->return_slashChar($source_DIR_PATH)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * TODO :: Is there a better 
                                 *         way to init this 
                                 *         DIRECTORY_SEPARATOR? 
                                 *         5 :: Thursday, March 12, 2026 @ 1743 hrs.
                                 *
                                 */

                            }else{

                                $src_slashChar = DIRECTORY_SEPARATOR;

                            }

                            $source_DIR_PATH = rtrim(
                                               $source_DIR_PATH, 
                                               $src_slashChar) . 
                                               $src_slashChar;

                            $tmp_src_dir_ARRAY = explode(
                                                 $src_slashChar, 
                                                 $source_DIR_PATH);

                        break;

                    }

                    $tmp_dir_sect_cnt = sizeof($tmp_src_dir_ARRAY);

                    $destination_path .= $tmp_src_dir_ARRAY[$tmp_dir_sect_cnt - 2] . $dest_slashChar;

                }

            break;

        }

        /*$this->error_log('destination_path=' . 
         *       $destination_path, 
         *       __LINE__, 
         *       __METHOD__, 
         *       __FILE__, 
         *       'CRNRSTN_oELECTRUM_PROFILE');
         *
         *$this->error_log('destination_path=' . 
         *       $destination_path, 
         *       __LINE__, 
         *       __METHOD__, 
         *       __FILE__, 
         *       CRNRSTN_ELECTRUM);
         *
         */

        return $destination_path;

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
    function return_source_to_destination_stats_array(
             $execution_serial, 
             $batch_serial, 
             $oEndpoint_DESTINATION)
    {

        $tmp_ARRAY       = array();
        $src_to_dest_cnt = 0;

        $tmp_serial_oEndpoint_DESTINATION = $oEndpoint_DESTINATION->return_serial();

        foreach($this->transfer_success_count_ARRAY[$execution_serial][$batch_serial] as 
            $serial_oEndpoint_SOURCE => $chunkARRAY0)
        {

            foreach($chunkARRAY0 as 
                $serial_oEndpoint_DESTINATION => $asset_transfer_count)
            {

                if($tmp_serial_oEndpoint_DESTINATION == $serial_oEndpoint_DESTINATION){

                    $tmp_ARRAY['activity_stats'][$src_to_dest_cnt]['asset_transfer_count'] = $asset_transfer_count;
                    $tmp_ARRAY['activity_stats'][$src_to_dest_cnt]['destination_path']     = $this->return_destination_stats_path(
                                                                                                    $serial_oEndpoint_SOURCE, 
                                                                                                    $serial_oEndpoint_DESTINATION);

                    $src_to_dest_cnt++;

                }

            }

        }

        $tmp_ARRAY['src_to_dest_cnt'] = $src_to_dest_cnt;

        return $tmp_ARRAY;

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
    function plus_one_asset_transfer(
             $oEndpoint_serial_SOURCE, 
             $oEndpoint_serial_DESTINATION, 
             $execution_serial, 
             $execution_batch_serial, 
             $file_size)
    {

        if(!isset($this->transfer_success_count_ARRAY[$execution_serial][$execution_batch_serial][$oEndpoint_serial_SOURCE][$oEndpoint_serial_DESTINATION])){

            $this->transfer_success_count_ARRAY[$execution_serial][$execution_batch_serial][$oEndpoint_serial_SOURCE][$oEndpoint_serial_DESTINATION] = 0;
            $this->filesize_success_count_ARRAY[$execution_serial][$execution_batch_serial][$oEndpoint_serial_SOURCE][$oEndpoint_serial_DESTINATION] = 0;

        }

        $this->transfer_success_count_ARRAY[$execution_serial][$execution_batch_serial][$oEndpoint_serial_SOURCE][$oEndpoint_serial_DESTINATION] += 1;
        $this->filesize_success_count_ARRAY[$execution_serial][$execution_batch_serial][$oEndpoint_serial_SOURCE][$oEndpoint_serial_DESTINATION] += $file_size;

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
    function init_electrum(
             $electrum_process_id, 
             $execution_batch_serial, 
             $startTime, 
             $timestamp_versioning_pattern = NULL)
    {

        $this->electrum_process_id          = $electrum_process_id;
        $this->execution_batch_serial       = $execution_batch_serial;
        $this->startTime                    = $startTime;
        $this->timestamp_versioning_pattern = $timestamp_versioning_pattern;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function moveContentOnly($excludeContainingDir)
    {

        $this->content_only_path_to_destination = $excludeContainingDir;

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
    function add_valid_source_DIR(
             $dirPath, 
             $endpoint_serial, 
             $endpoint_id, 
             $current_perms)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->source_endpoint_stats_serial_ARRAY[]                                     = $tmp_stats_endpoint_serial;
        $this->source_endpoint_stats_pathindex_ARRAY[$dirPath]                          = $tmp_stats_endpoint_serial;
        $this->source_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $dirPath;

        $this->source_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]  = true;
        $this->source_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial] = 'LOCAL_DIR';
        $this->source_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]   = $endpoint_serial;
        $this->source_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]       = $endpoint_id;
        $this->source_endpoint_perms_ARRAY[$tmp_stats_endpoint_serial]    = $current_perms;

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
    function add_invalid_source_DIR(
             $dirPath, 
             $endpoint_serial, 
             $endpoint_id, 
             $current_perms, 
             $err_reason)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->source_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->source_endpoint_stats_pathindex_ARRAY[$dirPath]                          = $tmp_stats_endpoint_serial;
        $this->source_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $dirPath;

        $this->source_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = false;
        $this->source_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'LOCAL_DIR';
        $this->source_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->source_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->source_endpoint_perms_ARRAY[$tmp_stats_endpoint_serial]      = $current_perms;
        $this->source_endpoint_err_reason_ARRAY[$tmp_stats_endpoint_serial] = $err_reason;

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
    function add_valid_source_FTP(
             $FTP_DIR_PATH, 
             $FTP_SERVER, 
             $FTP_PORT, 
             $endpoint_serial, 
             $endpoint_id)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->source_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->source_endpoint_stats_pathindex_ARRAY[$FTP_DIR_PATH]                     = $tmp_stats_endpoint_serial;
        $this->source_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $FTP_DIR_PATH;

        $this->source_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = true;
        $this->source_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'FTP';
        $this->source_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->source_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->source_endpoint_ftp_server_ARRAY[$tmp_stats_endpoint_serial] = $FTP_SERVER;
        $this->source_endpoint_ftp_port_ARRAY[$tmp_stats_endpoint_serial]   = $FTP_PORT;

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
    function add_invalid_source_FTP(
             $FTP_DIR_PATH, 
             $FTP_SERVER, 
             $FTP_PORT, 
             $endpoint_serial, 
             $endpoint_id)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->source_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->source_endpoint_stats_pathindex_ARRAY[$FTP_DIR_PATH]                     = $tmp_stats_endpoint_serial;
        $this->source_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $FTP_DIR_PATH;

        $this->source_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = false;
        $this->source_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'FTP';
        $this->source_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->source_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->source_endpoint_ftp_server_ARRAY[$tmp_stats_endpoint_serial] = $FTP_SERVER;
        $this->source_endpoint_ftp_port_ARRAY[$tmp_stats_endpoint_serial]   = $FTP_PORT;

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
    function add_valid_destination_FTP(
             $FTP_DIR_PATH, 
             $FTP_SERVER, 
             $FTP_PORT, 
             $endpoint_serial, 
             $endpoint_id, 
             $is_flat_file = false)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->destination_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->destination_endpoint_stats_pathindex_ARRAY[$FTP_DIR_PATH]                     = $tmp_stats_endpoint_serial;
        $this->destination_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $FTP_DIR_PATH;

        $this->destination_endpoint_isFlatFile_ARRAY[$tmp_stats_endpoint_serial] = $is_flat_file;
        $this->destination_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = true;
        $this->destination_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'FTP';
        $this->destination_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->destination_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->destination_endpoint_ftp_server_ARRAY[$tmp_stats_endpoint_serial] = $FTP_SERVER;
        $this->destination_endpoint_ftp_port_ARRAY[$tmp_stats_endpoint_serial]   = $FTP_PORT;

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
    function add_invalid_destination_FTP(
             $FTP_DIR_PATH, 
             $FTP_SERVER, 
             $FTP_PORT, 
             $endpoint_serial, 
             $endpoint_id)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->destination_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->destination_endpoint_stats_pathindex_ARRAY[$FTP_DIR_PATH]                     = $tmp_stats_endpoint_serial;
        $this->destination_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $FTP_DIR_PATH;

        $this->destination_endpoint_isFlatFile_ARRAY[$tmp_stats_endpoint_serial] = false;
        $this->destination_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = false;
        $this->destination_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'FTP';
        $this->destination_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->destination_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->destination_endpoint_ftp_server_ARRAY[$tmp_stats_endpoint_serial] = $FTP_SERVER;
        $this->destination_endpoint_ftp_port_ARRAY[$tmp_stats_endpoint_serial]   = $FTP_PORT;

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
    function add_valid_destination_DIR(
             $DIR_PATH, 
             $endpoint_serial, 
             $endpoint_id, 
             $current_perms, 
             $MKDIR_MODE, 
             $is_flat_file = false)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->destination_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->destination_endpoint_stats_pathindex_ARRAY[$DIR_PATH]                         = $tmp_stats_endpoint_serial;
        $this->destination_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $DIR_PATH;

        $this->destination_endpoint_isFlatFile_ARRAY[$tmp_stats_endpoint_serial] = $is_flat_file;
        $this->destination_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = true;
        $this->destination_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'LOCAL_DIR';
        $this->destination_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->destination_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->destination_endpoint_perms_ARRAY[$tmp_stats_endpoint_serial]      = $current_perms;
        $this->destination_endpoint_mkdir_mode_ARRAY[$tmp_stats_endpoint_serial] = $MKDIR_MODE;

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
    function add_invalid_destination_DIR(
             $DIR_PATH, 
             $endpoint_serial, 
             $endpoint_id, 
             $current_perms, 
             $MKDIR_MODE, 
             $err_reason)
    {

        $tmp_stats_endpoint_serial = $this->generate_new_key(50);

        $this->destination_endpoint_stats_serial_ARRAY[] = $tmp_stats_endpoint_serial;

        $this->destination_endpoint_stats_pathindex_ARRAY[$DIR_PATH]                         = $tmp_stats_endpoint_serial;
        $this->destination_endpoint_stats_path_serialindex_ARRAY[$tmp_stats_endpoint_serial] = $DIR_PATH;

        $this->destination_endpoint_isFlatFile_ARRAY[$tmp_stats_endpoint_serial] = false;
        $this->destination_endpoint_isValid_ARRAY[$tmp_stats_endpoint_serial]    = false;
        $this->destination_endpoint_protocol_ARRAY[$tmp_stats_endpoint_serial]   = 'LOCAL_DIR';
        $this->destination_endpoint_serial_ARRAY[$tmp_stats_endpoint_serial]     = $endpoint_serial;
        $this->destination_endpoint_id_ARRAY[$tmp_stats_endpoint_serial]         = $endpoint_id;
        $this->destination_endpoint_perms_ARRAY[$tmp_stats_endpoint_serial]      = $current_perms;
        $this->destination_endpoint_mkdir_mode_ARRAY[$tmp_stats_endpoint_serial] = $MKDIR_MODE;
        $this->destination_endpoint_err_reason_ARRAY[$tmp_stats_endpoint_serial] = $err_reason;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_slashChar($path)
    {

        $pos_fslash = strpos($path, '/');

        if($pos_fslash !== false){

            return '/';

        }else{

            $pos_bslash = strpos($path, '\\');

            if($pos_bslash !== false){

                return '\\';

            }else{

                return false;

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
    function __destruct() 
    {

    }

}