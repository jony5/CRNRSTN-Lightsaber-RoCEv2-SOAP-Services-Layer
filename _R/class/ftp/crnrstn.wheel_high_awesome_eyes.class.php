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
 * CLASS DEFINITION :: crnrstn_wheel_high_awesome_eyes
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: September 17, 2020 @ 0606 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Electrum :: 
 *                     Ezekiel 1:4 :: Wheel High 
 *                     Awesome Eyes Local Directory 
 *                     File Transfer Support 
 * DESCRIPTION      :: The CRNRSTN :: Wheel with High 
 *                     and Awesome Eyes is a true 
 *                     asset available to CRNRSTN ::
 *                     Electrum for putting all eyes 
 *                     on local server file system 
 *                     based file transfer state and 
 *                     file transfer status, 
 *                     especially when needing to 
 *                     report on any file 
 *                     transfer errors occurring 
 *                     when moving files at 
 *                     the file system (directory 
 *                     to directory) level. 
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 0500 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * Ezekiel 1:15-16  And as I watched the living
 *                  creatures, I saw a wheel upon
 *                  the earth beside the living
 *                  creatures, for each of their
 *                  four faces.
 *
 *                  The appearance of the wheels
 *                  and their workmanship were
 *                  like the sight of beryl.
 *
 *                  And the four of them had one
 *                  likeness; that is, their
 *                  appearance and their workmanship
 *                  were as it were a wheel within
 *                  a wheel.
 *
 * Ezekiel 1:18-20  As for their rims, they were
 *                  high and they were awesome;
 *                  and the rims of the four of
 *                  them were full of eyes all around.
 *
 *                  And whenever the living creatures
 *                  went, the wheels went beside them;
 *
 *                  And whenever the living creatures
 *                  were lifted up above the earth,
 *                  the wheels were lifted up also.
 *
 *                  Wherever the Spirit was to go,
 *                  they went--wherever the Spirit
 *                  was to go.
 *
 *                  And the wheels were lifted up
 *                  alongside them, for the Spirit
 *                  of the living creature was in
 *                  the wheels.
 *
 */
class crnrstn_wheel_high_awesome_eyes extends crnrstn_user 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the 
     *       crnrstn_wheel_high_awesome_eyes 
     *       class object by applying an 
     *       extension of the crnrstn_user object, 
     *       by deleting the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Sunday, June 14, 2026 @ 1146 hrs.
     *
     */

    protected $timestamp_nom;
    protected $start_time_micro;
    protected $start_time_timestamp;
    protected $elapsed_time_at_start;
    protected $execution_serial;
    protected $serial;
    protected $queue_position;
    protected $queue_length;
    protected $filesize_bytes = 0;

    protected $oEndpoint_SOURCE;
    protected $oEndpoint_DESTINATION;

    protected $connection_type_SOURCE;
    protected $connection_type_DESTINATION;

    protected $SOURCE_FILE_PATH;
    protected $SOURCE_FILE_NAME;
    protected $SOURCE_LOCAL_DIR_PATH;

    protected $DESTINATION_DIR_PATH;
    protected $DESTINATION_MKDIR_PERMISSIONS_MODE;
    protected $DESTINATION_FILE_PATH;
    protected $DESTINATION_FILE_PATH_ROOT;

    protected $state_status = 'new';
    protected $state_status_ARRAY = array();
    protected $exclusion_check_result = array();
    protected $isExcluded = false;

    protected $is_transferred = false;
    protected $is_error_on_transfer = false;
    protected $error_on_transfer_message = '';

    protected $exclude_source_dir_from_copy = false;

    public $unique_asset_count_at_SOURCE = 0;
    public $unique_asset_filesize_at_SOURCE = 0;

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
    function __construct(
             $execution_serial, 
             $FIREHOT_oEndpoint_SOURCE, 
             $FIREHOT_oEndpoint_DEST, 
             $total_wheels_count, 
             $wheels_high_awesome_cnt, 
             $exclusion_check_result)
    {

        $this->start_time_micro       = $this->return_micro_time();
        $this->start_time_timestamp   = $this->return_query_date_time_stamp();
        $this->elapsed_time_at_start  = $this->wall_time();
        $this->timestamp_nom          = $FIREHOT_oEndpoint_SOURCE->return_timestamp_nom();

        $this->oEndpoint_SOURCE       = $FIREHOT_oEndpoint_SOURCE;
        $this->oEndpoint_DESTINATION  = $FIREHOT_oEndpoint_DEST;
        $this->queue_position         = $wheels_high_awesome_cnt;
        $this->queue_length           = $total_wheels_count;
        $this->exclusion_check_result = $exclusion_check_result;

        if(!$this->exclusion_check_result['not_excluded'] && 
            $exclusion_check_result['pattern'] != '')
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Asset excluded.
             *
             */
            $this->isExcluded = true;

            if($this->exclusion_check_result['wcr_path_specified'] != ''){

                /*$this->error_log('oWheel RELATED TO ENDPOINT ' . 
                 *                     $this->exclusion_check_result['wcr_path_specified'] . 
                 *                     ' TO BE SUPPRESSED FOR ' . 
                 *                     $exclusion_check_result['exclusion_meta'] . ' against ' . 
                 *                     $this->exclusion_check_result['pattern_type'] . ' PATTERN (' . 
                 *                     $this->exclusion_check_result['pattern'] . ') MATCH CONCERNING =>' . 
                 *                     $this->exclusion_check_result['asset_meta'], 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_WHEEL');
                 *
                 */

            }else{

                /*$this->error_log('oWheel TO BE SUPPRESSED FOR ' . 
                 *                     $this->exclusion_check_result['pattern_type'] . ' PATTERN (' . 
                 *                     $exclusion_check_result['exclusion_meta'].' against ' . 
                 *                     $this->exclusion_check_result['pattern'].') MATCH CONCERNING =>' . 
                 *                     $this->exclusion_check_result['asset_meta'], 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_WHEEL');
                 *
                 */

            }

        }

        /* $exclusion_check_result['wcr_path_specified'] = $WCRkey_or_DIRPATH;
         * $exclusion_check_result['not_excluded'] = false;
         * $exclusion_check_result['pattern'] = $nomination_pattern;
         * $exclusion_check_result['asset_meta'] = $filePath;
         *
         */

        $this->execution_serial = $execution_serial;
        $this->serial = $this->generate_new_key(100);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_timestamp_nom()
    {

        return $this->timestamp_nom;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_filepath_SOURCE()
    {

        return $this->SOURCE_FILE_PATH;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_filesize_bytes()
    {

        return $this->filesize_bytes;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_endpoint_SOURCE()
    {

        if($this->oEndpoint_SOURCE->return_connection_type() == 'FTP'){

            return 'FTP [' . $this->oEndpoint_SOURCE->return_FTP_SERVER() . '] ' . 
                   $this->oEndpoint_SOURCE->return_FTP_DIR_PATH();

        }else{

            return $this->oEndpoint_SOURCE->return_LOCAL_DIR_PATH();

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_endpoint_DESTINATION()
    {

        if($this->oEndpoint_DESTINATION->return_connection_type() == 'FTP'){

            return $this->oEndpoint_DESTINATION->return_FTP_SERVER() . 
                    ' at port ' . 
                    $this->oEndpoint_DESTINATION->return_FTP_PORT();

        }else{

            return $this->oEndpoint_DESTINATION->return_LOCAL_DIR_PATH();

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function transfer_error_message()
    {

        return $this->error_on_transfer_message;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function is_transfer_error()
    {

        return $this->is_error_on_transfer;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function is_skipped()
    {

        return $this->isExcluded;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function is_transferred()
    {

        return $this->is_transferred;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function log_state_status($str)
    {

        $this->state_status         = $str;
        $this->state_status_ARRAY[] = $str;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_slashChar($path)
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
    private function fileMove_DF(
                     $ftp_stream, 
                     $SOURCE_filePath, 
                     $oEndpoint_serial_SOURCE, 
                     $oEndpoint_serial_DESTINATION, 
                     $oElectrum_STATS, 
                     $SOURCE_filePath_ORIGINAL = NULL)
    {

        $continue_process = false;

        /* $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH']
         * $tmp_stats_DESTINATION_ARRAY['MKSUB_DIR']
         * $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']
         * $tmp_stats_DESTINATION_ARRAY['SPLIT_DIR']
         *
         */

        $tmp_stats_DESTINATION_ARRAY = $oElectrum_STATS->return_DF_destination_stats_array(
                                                         $oEndpoint_serial_SOURCE, 
                                                         $oEndpoint_serial_DESTINATION, 
                                                         $SOURCE_filePath);
        $tmp_stats_dest_path = $oElectrum_STATS->return_destination_stats_path(
                                                 $oEndpoint_serial_SOURCE, 
                                                 $oEndpoint_serial_DESTINATION);

        /*$this->error_log('oWheel :: Run ftp_mksubdirs' . 
         *                     '=>[ftp_root_dir_path=' . 
         *                     $ftp_root_dir_path . 
         *                     '][tmp_mksubdir_destination_path=' . 
         *                     $tmp_mksubdir_destination_path . 
         *                     ']', 
         *                     __LINE__, 
         *                     __METHOD__, 
         *                     __FILE__, 
         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
         *
         */

        if(is_dir($SOURCE_filePath)){

            /*$this->error_log('oWheel :: Run ftp_mksubdirs' . 
             *                     '=>[source_filepath=' . 
             *                     $SOURCE_filePath . '].', 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            $this->ftp_mksubdirs(
                   $ftp_stream, 
                   $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'], 
                   $tmp_stats_DESTINATION_ARRAY['MKSUB_DIR']);

            $continue_process = true;

        }else{

            if(isset($SOURCE_filePath_ORIGINAL)){

                $SOURCE_filepath_for_DESTINATION = $SOURCE_filePath_ORIGINAL;

            }else{

                $SOURCE_filepath_for_DESTINATION = $SOURCE_filePath;

            }

            $tmp_slashChar = $this->return_slashChar($tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH']);

            $tmp_split_ARRAY = explode(
                               $tmp_slashChar, 
                               $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH']);
            $tmp_split_cnt = sizeof($tmp_split_ARRAY);

            $tmp_dir_split_ARRAY = explode(
                                   $tmp_split_ARRAY[$tmp_split_cnt - 2], 
                                   $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']);

            $tmp_dir_sect_ARRAY = explode($tmp_slashChar, $tmp_dir_split_ARRAY[1]);
            $tmp_sect_cnt = sizeof($tmp_dir_sect_ARRAY);

            #$tmp_dir_sect_ARRAY[$tmp_sect_cnt - 2] = wethrbug
            $tmp_dest_file_section_ARRAY = explode(
                                           $tmp_dir_sect_ARRAY[$tmp_sect_cnt - 2], 
                                           $SOURCE_filepath_for_DESTINATION);

            // [tmp_dir_split_ARRAY[1]=/a_custom_folder_name/20201013_16-52-26/wethrbug/
            $tmp_sect_array = explode(
                              $tmp_slashChar, 
                              $tmp_dir_split_ARRAY[1]);
            $tmp_cnt = sizeof($tmp_sect_array);

            $tmp_cut_dir = $tmp_sect_array[$tmp_cnt - 2];

            $tmp_source_sect_ARRAY = explode(
                                     $tmp_cut_dir, 
                                     $SOURCE_filePath);
            //$tmp_dir = dirname($tmp_source_sect_ARRAY[1]);

            $tmp_file_dest = rtrim(
                             $tmp_dir_split_ARRAY[1], 
                             $tmp_slashChar) . 
                             $tmp_dest_file_section_ARRAY[1];
            $tmp_file_cap = basename($tmp_file_dest);

            $tmp_file_dirpath_final = rtrim($tmp_file_dest, $tmp_file_cap);
            $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'] = rtrim(
                                                           $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'], 
                                                           $tmp_slashChar);

            /*$tmp_dfile = $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'] . 
             *             $SOURCE_filepath_for_DESTINATION;
             *
             */

            $tmp_dfile = $tmp_stats_dest_path;
            $tmp_dfile = rtrim($tmp_dfile, $tmp_slashChar);

            /*$this->error_log('oWheel :: SLASH CHAR = ' . 
             *                     $tmp_slashChar, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            $tmp_dfile_array = explode(
                               $tmp_slashChar, 
                               $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']);
            $tmp_dfile_sect_cnt = sizeof($tmp_dfile_array);

            /*$this->error_log('oWheel :: Explode [' . 
             *                     $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH'] . 
             *                     '] on ' . 
             *                     $tmp_dfile_sect_cnt, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            $tmp_dfile_bi_path_ARRAY = explode(
                                       $tmp_dfile_array[$tmp_dfile_sect_cnt - 2], 
                                       $SOURCE_filepath_for_DESTINATION);

            $tmp_dfile .= $tmp_dfile_bi_path_ARRAY[1];

            /*$this->error_log('oWheel :: Run ftp_mksubdirs' . 
             *                     '=> [DESTINATION_FILEPATH]=' . 
             *                     $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH'] . 
             *                     ' | [FTP_DIR_PATH]=' . 
             *                     $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'] . 
             *                     ' on tmp_split_ARRAY[tmp_split_cnt - 2]=' . 
             *                     $tmp_split_ARRAY[$tmp_split_cnt - 2], 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             *$this->error_log('oWheel :: Run ftp_mksubdirs @ ' . 
             *                     $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'] . 
             *                     ' for =>[' . $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'] . 
             *                     $tmp_file_dirpath_final, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */
            if($this->ftp_mksubdirs(
                      $ftp_stream, 
                      $tmp_slashChar, 
                      $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'] . 
                      $tmp_file_dirpath_final))
            {

                /*$this->error_log('oWheel :: ftp_mksubdirs SUCCESS', 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                 *
                 */

            }else{

                $error = error_get_last();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We use ftp_chdir to 
                 * see if we need 
                 * to call ftp_mkdir. 
                 *
                 * It is ok (or expected) 
                 * to get ftp_chdir 
                 * errors here. 
                 *
                 */
                $pos_ignore_err = strpos($error['message'], 'ftp_chdir()');
                if($pos_ignore_err == false){

                    $this->error_log('oWheel :: ftp_mksubdirs ERROR :: ' . 
                                         $error['message'], 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                }

            }

            if(substr($tmp_dfile, -1) == $tmp_slashChar){

                $tmp_dfile = rtrim($tmp_dfile, $tmp_slashChar) . $tmp_slashChar;
                $tmp_dfile_fname = basename($SOURCE_filepath_for_DESTINATION);
                $tmp_dfile = $tmp_dfile . $tmp_dfile_fname;

            }

            /*$this->error_log('oWheel :: See [' . 
             *                     $SOURCE_filepath_for_DESTINATION . 
             *                     ']. Now run ftp_put LOCAL FILE=>[' . 
             *                     $SOURCE_filepath_for_DESTINATION . 
             *                     '] to DEST FILE=>[' . $tmp_dfile . '].', 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            if(ftp_put(
                $ftp_stream, 
                $tmp_dfile, 
                $SOURCE_filepath_for_DESTINATION, 
                FTP_BINARY))
            {

                $continue_process = true;

                /*$this->error_log('oWheel FF - 2/2 ' . 
                 *                     '(or DF 1 of 1) :: Successfully ' . 
                 *                     'uploaded LOCAL FILE=>[' . ' . 
                 *                     '$SOURCE_filepath_for_DESTINATION . ' . 
                 *                     ''] to DEST FILE=>[' . ' . 
                 *                     '$tmp_dfile . ' . 
                 *                     ''].', ' . 
                 *                     '__LINE__, ' . 
                 *                     '__METHOD__, ' . 
                 *                     '__FILE__, ' . 
                 *                     ''CRNRSTN_oELECTRUM_FILE_TRANSFER');
                 *
                 */

            }else{

                $error = error_get_last();
                $this->error_log('oWheel FF - 2/2 (or DF ' . 
                                     '1 of 1) :: ERROR ' . 
                                     'uploading LOCAL FILE=>[' . 
                                     $SOURCE_filepath_for_DESTINATION . 
                                     '] to DEST FILE=>[' . 
                                     $tmp_dfile . 
                                     '] :: ' . $error['message'], 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                $this->is_error_on_transfer = true;
                $this->error_on_transfer_message = $error['message'] . 
                                                   ' <= Error experienced while ' . 
                                                   'pushing local file [' . 
                                                   $SOURCE_filepath_for_DESTINATION . 
                                                   '] to FTP destination[{FTP_OR_' . 
                                                   'LOCAL_DETAIL}] as file=>[' . 
                                                   $tmp_dfile . '].';

            }

        }

        return $continue_process;

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
    private function fileMove_DIR_DF(
                     $ftp_stream, 
                     $SOURCE_filePath, 
                     $oEndpoint_serial_SOURCE, 
                     $oEndpoint_serial_DESTINATION, 
                     $oElectrum_STATS)
    {

        $continue_process = false;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Prepare containing 
         * directory of ftp 
         * file location. 
         *
         */
        $tmp_stats_DESTINATION_ARRAY = $oElectrum_STATS->return_DF_destination_stats_array(
                                                         $oEndpoint_serial_SOURCE, 
                                                         $oEndpoint_serial_DESTINATION, 
                                                         $SOURCE_filePath);
        $tmp_stats_dest_path = $oElectrum_STATS->return_destination_stats_path(
                                                 $oEndpoint_serial_SOURCE, 
                                                 $oEndpoint_serial_DESTINATION);

        /*$tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH']
         *$tmp_stats_DESTINATION_ARRAY['MKSUB_DIR']
         *$tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']
         *
         *if($this->ftp_mksubdirs(
         *          $ftp_stream, 
         *          $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'], 
         *          $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']))
         *{
         *
         */
        if($this->ftp_mksubdirs(
                  $ftp_stream, 
                  $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH'], 
                  $tmp_stats_dest_path))
        {

            $continue_process = true;

        }else{

            /*$this->error_log('oWheel DID NOT ' . 
             *                     'ftp_mksubdirs =>' . 
             *                     $tmp_stats_dest_path, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

        }

        return $continue_process;

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
    private function fileMove_DIR_FD(
                     $ftp_stream, 
                     $ftp_file_path, 
                     $oEndpoint_serial_SOURCE, 
                     $oEndpoint_serial_DESTINATION, 
                     $oElectrum_STATS)
    {

        $continue_process = false;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH']
         * $tmp_stats_DESTINATION_ARRAY['MKSUB_DIR']
         * $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']
         *
         */

        $tmp_stats_DESTINATION_ARRAY = $oElectrum_STATS->return_FD_destination_stats_array(
                                                         $oEndpoint_serial_SOURCE, 
                                                         $oEndpoint_serial_DESTINATION, 
                                                         $ftp_file_path);
        $tmp_stats_dest_path = $oElectrum_STATS->return_destination_stats_path(
                                                 $oEndpoint_serial_SOURCE, 
                                                 $oEndpoint_serial_DESTINATION);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Pull from 
         * SOURCE FTP. 
         *
         */
        $tmp_slashChar = $this->return_slashChar($tmp_stats_dest_path);
        $tmp_stats_dest_path = rtrim($tmp_stats_dest_path, $tmp_slashChar) . $tmp_slashChar;

        if(!is_dir($tmp_stats_dest_path)){

            /*$this->error_log('oWheel :: fileMove_' . 
             *                     'DIR_FD() mkdir_r =>' . 
             *                     $tmp_stats_dest_path, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */
            if($this->mkdir_r($tmp_stats_dest_path)){

            }else{

                $this->error_log('oWheel ERROR mkdir_r =>' . 
                                     $tmp_stats_dest_path, 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');

            }

            $continue_process = true;

        }else{

            /*$this->error_log('oWheel DO NOT ' . 
             *                     'fileMove_DIR_FD() mkdir_r =>' . 
             *                     $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH'], 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

        }

        return $continue_process;

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
    private function fileMove_FD(
                     $ftp_stream, 
                     $target_destination_file_path, 
                     $ftp_file_path)
    {

        $continue_process = false;

        $tmp_slashChar = $this->return_slashChar($target_destination_file_path);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Pull from 
         * SOURCE FTP. 
         *
         */
        $tmp_base_dest_path = dirname($target_destination_file_path);
        $tmp_base_dest_path = rtrim($tmp_base_dest_path, $tmp_slashChar) . $tmp_slashChar;

        if(!is_dir($tmp_base_dest_path)){

            /*$this->error_log('oWheel mkdir_r =>' . 
             *                     $tmp_base_dest_path, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            if($this->mkdir_r($tmp_base_dest_path)){

                /*$this->error_log('oWheel SUCCESS :: mkdir_r =>' . 
                 *                     $tmp_base_dest_path.' working from PATH[' . 
                 *                     $target_destination_file_path . '].', 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                 *
                 */

            }else{

                $this->error_log('oWheel ERROR :: mkdir_r =>' . 
                                     $tmp_base_dest_path . ' working from PATH[' . 
                                     $target_destination_file_path . 
                                     '].', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');

            }

            $continue_process = true;

        }else{

            /*$this->error_log('oWheel :: FD ' . 
             *                     ':: DO NOT mkdir_r =>' . 
             *                     $tmp_base_dest_path, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

        }

        /*$this->error_log('oWheel Send to [' . 
         *                     $target_destination_file_path . 
         *                     '] the [FTP] LOCAL FILE=>' . 
         *                     $ftp_file_path, 
         *                     __LINE__, 
         *                     __METHOD__, 
         *                     __FILE__, 
         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
         *
         */

        if(ftp_get(
            $ftp_stream, 
            $target_destination_file_path, 
            $ftp_file_path, 
            FTP_BINARY))
        {

            /*$this->error_log('oWheel FF - 1 of ' . 
             *                     '2  (or FD 1 of 1) :: ' . 
             *                     'Successfully written [' . 
             *                     $ftp_file_path.'] to ' . 
             *                     $target_destination_file_path, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            $continue_process = true;

        }else{

            $error = error_get_last();
            $this->error_log('oWheel Error :: FF - 1 ' . 
                                 'of 2 (or FD 1 of 1) :: ' . 
                                 'There was a PULL FROM SOURCE ' . 
                                 'FTP problem sending the [FTP] ' . 
                                 'LOCAL FILE=>' . 
                                 $ftp_file_path . ' to [' . 
                                 $target_destination_file_path . 
                                 '] :: ' . 
                                 $error['message'], 
                                 __LINE__, 
                                 __METHOD__, 
                                 __FILE__, 
                                 'CRNRSTN_oELECTRUM_FILE_TRANSFER');

            $this->is_error_on_transfer = true;
            $this->error_on_transfer_message = $error['message'] . 
                                               ' <= Error experienced ' . 
                                               'while pulling from a file[' . 
                                               $ftp_file_path . 
                                               '] from FTP source[{FTP_OR_' . 
                                               'LOCAL_DETAIL}] to save to ' . 
                                               'a local directory as file[' . 
                                               $target_destination_file_path . 
                                               '].';

        }

        return $continue_process;

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
    private function fileMove_DD(
                     $src_LOCAL_FILE_PATH, 
                     $dest_LOCAL_DIR_PATH)
    {

        $continue_process = false;

        $tmp_dir_path = dirname($dest_LOCAL_DIR_PATH);

        $this->mkdir_r($tmp_dir_path);

        /*shell_exec("cp -r $src_LOCAL_DIR_PATH $dest_LOCAL_DIR_PATH");
         *
         *$this->error_log('oWheel :: copy( ' . 
         *                     $src_LOCAL_FILE_PATH.' to ' . 
         *                     $dest_LOCAL_DIR_PATH, 
         *                     __LINE__, 
         *                     __METHOD__, 
         *                     __FILE__, 
         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
         *
         */

        if(!is_dir($src_LOCAL_FILE_PATH)){

            if(!copy($src_LOCAL_FILE_PATH, $dest_LOCAL_DIR_PATH)){

                $error = error_get_last();
                $this->is_error_on_transfer = true;
                $this->error_on_transfer_message = $error['message'] . 
                                                   ' <= Error experienced ' . 
                                                   'copying a file[' . 
                                                   $src_LOCAL_FILE_PATH . 
                                                   '] to file[' . 
                                                   $dest_LOCAL_DIR_PATH . 
                                                   '].';

            }

            $tmp_res = filesize($dest_LOCAL_DIR_PATH);

            if($tmp_res != -1){

                /*$this->error_log('oWheel SUCCESS :: Size of ' . 
                 *                     $dest_LOCAL_DIR_PATH.' is ' . 
                 *                     $tmp_res . 
                 *                     ' bytes', 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                 *
                 */

                $continue_process = true;

            }else{

                $this->error_log('oWheel Error :: Couldn\'t ' . 
                                     'get the size of ' . 
                                     $dest_LOCAL_DIR_PATH . 
                                     ' (Not all servers ' . 
                                     'support this feature).', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                if(!file_exists($dest_LOCAL_DIR_PATH)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Log error in 
                     * file move. 
                     *
                     * Possibly for 
                     * re-process. 
                     *
                     */
                    $this->error_log('oWheel Error :: ' . 
                                         'Also couldn\'t get ' . 
                                         $dest_LOCAL_DIR_PATH . 
                                         ' via file_exists.', 
                                         __LINE__, 
                                         __METHOD__, 
                                         __FILE__, 
                                         'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                }

            }

        }else{

            /*$this->error_log('oWheel SUCCESS :: ' . 
             *                     'WE HAVE DIRECTORY *****' . 
             *                     $src_LOCAL_FILE_PATH, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
             *
             */

            $continue_process = true;

        }

        return $continue_process;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function init_fileSize_bytes($bytes)
    {

        if($bytes == -1){

            $this->filesize_bytes = 0;

        }else{

            $this->filesize_bytes = (int) $bytes;

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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function process_dir_asset(
             $SOURCE_filePath, 
             $pathWay, 
             $execution_serial, 
             $execution_batch_serial, 
             $hot_src_connection_ARRAY, 
             $hot_dest_connection_ARRAY, 
             $oElectrum, 
             $oElectrum_STATS)
    {

        switch($pathWay){
            case 'FF':

                if(!$this->isExcluded){

                    $oLightning_ftp_conn_DESTINATION = $hot_dest_connection_ARRAY['oLightning_ftp_conn'];
                    $dest_ftp_stream                 = $oLightning_ftp_conn_DESTINATION->return_ftp_stream();

                    $FIREHOT_oEndpoint_SOURCE      = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
                    $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

                    $oEndpoint_serial_SOURCE      = $FIREHOT_oEndpoint_SOURCE->return_serial();
                    $oEndpoint_serial_DESTINATION = $FIREHOT_oEndpoint_DESTINATION->return_serial();

                    if($this->fileMove_DIR_DF(
                              $dest_ftp_stream, 
                              $SOURCE_filePath, 
                              $oEndpoint_serial_SOURCE, 
                              $oEndpoint_serial_DESTINATION, 
                              $oElectrum_STATS))
                    {
                        /*if($this->fileMove_DIR_DF(
                         *          $dest_ftp_stream, 
                         *          $dest_FTP_ROOT_DIR_PATH, 
                         *          $this->DESTINATION_FILE_PATH, 
                         *          $SOURCE_filePath))
                         *{
                         *
                         */

                        $this->is_transferred = true;

                        /*$this->error_log('oWheel TMP file write ' . 
                         *                     'TO FTP SUCCESS. REMOVE TMP FILE.', 
                         *                     __LINE__, 
                         *                     __METHOD__, 
                         *                     __FILE__, 
                         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                         *
                         */

                    }else{

                        $error = error_get_last();
                        $this->error_log('oWheel fileMove_DF() ERROR :: ' . 
                                             $error['message'], 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                    }

                }

            break;
            case 'FD':

                if(!$this->isExcluded){

                    $oLightning_ftp_conn_SOURCE = $hot_src_connection_ARRAY['oLightning_ftp_conn'];
                    $src_ftp_stream             = $oLightning_ftp_conn_SOURCE->return_ftp_stream();

                    $FIREHOT_oEndpoint_SOURCE      = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
                    $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

                    $oEndpoint_serial_SOURCE      = $FIREHOT_oEndpoint_SOURCE->return_serial();
                    $oEndpoint_serial_DESTINATION = $FIREHOT_oEndpoint_DESTINATION->return_serial();

                    /*$this->error_log('[SOURCE_filePath=' . 
                     *                     $SOURCE_filePath.'][filename=' . 
                     *                     $tmp_filename.']', 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     CRNRSTN_ELECTRUM);
                     *
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * FTP to DIR.
                     *
                     */
                    if($this->fileMove_DIR_FD(
                              $src_ftp_stream, 
                              $SOURCE_filePath, 
                              $oEndpoint_serial_SOURCE, 
                              $oEndpoint_serial_DESTINATION, 
                              $oElectrum_STATS)){

                        $this->is_transferred = true;

                    }

                }

            break;


        }

        return $this->is_transferred;

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
     * @return
     * @access public
     *
     */
    function process_asset(
             $SOURCE_filePath, 
             $pathWay, 
             $execution_serial, 
             $execution_batch_serial, 
             $hot_src_connection_ARRAY, 
             $hot_dest_connection_ARRAY, 
             $oElectrum, 
             $oElectrum_STATS)
    {

        $FIREHOT_oEndpoint_SOURCE      = $hot_src_connection_ARRAY['FIREHOT_oEndpoint'];
        $FIREHOT_oEndpoint_DESTINATION = $hot_dest_connection_ARRAY['FIREHOT_oEndpoint'];

        $oEndpoint_serial_SOURCE      = $FIREHOT_oEndpoint_SOURCE->return_serial();
        $oEndpoint_serial_DESTINATION = $FIREHOT_oEndpoint_DESTINATION->return_serial();

        if(!$this->isExcluded){

            /* public $unique_asset_count_at_SOURCE_ARRAY = array();
             * public $unique_asset_filesize_at_SOURCE_ARRAY = array();
             *
             */

            $this->unique_asset_count_at_SOURCE = 1;
            $this->unique_asset_filesize_at_SOURCE = $this->filesize_bytes;

        }

        switch($pathWay){
            case 'FF':

                if(!$this->isExcluded){

                    $oLightning_ftp_conn_SOURCE = $hot_src_connection_ARRAY['oLightning_ftp_conn'];
                    $src_ftp_stream             = $oLightning_ftp_conn_SOURCE->return_ftp_stream();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Process asset 
                     * transfer. 
                     *
                     */
                    $FF_tmp_dirPath = $oElectrum->return_FF_tmp_dirPath();

                    $tmp_hash              = $this->generate_new_key(10);
                    $tmp_filename          = basename($SOURCE_filePath);
                    $tmp_dest_tmp_filePath = $FF_tmp_dirPath . $tmp_hash . '_' . $tmp_filename;

                    if(file_exists($tmp_dest_tmp_filePath)){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remove file. 
                         *
                         */
                        unlink($tmp_dest_tmp_filePath);

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * FTP to DIR. 
                     *
                     */
                    if($this->fileMove_FD(
                              $src_ftp_stream, 
                              $tmp_dest_tmp_filePath, 
                              $SOURCE_filePath))
                    {

                        $oLightning_ftp_conn_DESTINATION = $hot_dest_connection_ARRAY['oLightning_ftp_conn'];
                        $dest_ftp_stream                 = $oLightning_ftp_conn_DESTINATION->return_ftp_stream();

                        if($this->fileMove_DF(
                                  $dest_ftp_stream, 
                                  $tmp_dest_tmp_filePath, 
                                  $oEndpoint_serial_SOURCE, 
                                  $oEndpoint_serial_DESTINATION, 
                                  $oElectrum_STATS, 
                                  $SOURCE_filePath))
                        {

                            $this->is_transferred = true;

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Remove tmp 
                             * file. 
                             *
                             */
                            if(file_exists($tmp_dest_tmp_filePath)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Remove file. 
                                 *
                                 */
                                unlink($tmp_dest_tmp_filePath);

                            }

                        }else{

                            $error = error_get_last();
                            $this->error_log('oWheel fileMove_DF() ' . 
                                                 'ERROR :: AFTER SUCCESS @ ' . 
                                                 'fileMove_FD() :: ' . 
                                                 $error['message'], 
                                                 __LINE__, 
                                                 __METHOD__, 
                                                 __FILE__, 
                                                 'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Remove tmp 
                             * file. 
                             *
                             */ 
                            if(file_exists($tmp_dest_tmp_filePath)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Remove file. 
                                 *
                                 */
                                unlink($tmp_dest_tmp_filePath);

                            }

                        }

                    }else{

                        $this->error_log('oWheel TMP file ' . 
                                             'write TO FTP ERROR', 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Remove tmp 
                         * file. 
                         *
                         */
                        if(file_exists($tmp_dest_tmp_filePath)){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Remove file. 
                             *
                             */
                            unlink($tmp_dest_tmp_filePath);

                        }

                    }

                }

            break;
            case 'DF':

                if(!$this->isExcluded){

                    $oLightning_ftp_conn_DESTINATION = $hot_dest_connection_ARRAY['oLightning_ftp_conn'];
                    $dest_ftp_stream                 = $oLightning_ftp_conn_DESTINATION->return_ftp_stream();

                    if($this->fileMove_DF(
                              $dest_ftp_stream, 
                              $SOURCE_filePath, 
                              $oEndpoint_serial_SOURCE, 
                              $oEndpoint_serial_DESTINATION, 
                              $oElectrum_STATS))
                    {

                        $this->is_transferred = true;

                    }

                }

            break;
            case 'FD':

                if(!$this->isExcluded){

                    $oLightning_ftp_conn_SOURCE = $hot_src_connection_ARRAY['oLightning_ftp_conn'];
                    $src_ftp_stream             = $oLightning_ftp_conn_SOURCE->return_ftp_stream();

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * $tmp_stats_DESTINATION_ARRAY['FTP_DIR_PATH']
                     * $tmp_stats_DESTINATION_ARRAY['MKSUB_DIR']
                     * $tmp_stats_DESTINATION_ARRAY['DESTINATION_FILEPATH']
                     *
                     */

                    /*$tmp_stats_DESTINATION_ARRAY = $oElectrum_STATS->return_FD_destination_stats_array(
                     *                                                 $oEndpoint_serial_SOURCE, 
                     *                                                 $oEndpoint_serial_DESTINATION, 
                     *                                                 $SOURCE_filePath);
                     *
                     */

                    $tmp_stats_dest_path = $oElectrum_STATS->return_destination_stats_path(
                                                             $oEndpoint_serial_SOURCE, 
                                                             $oEndpoint_serial_DESTINATION);

                    /*$SOURCE_filePath
                     * 
                     *error_log('[lnum ' . __LINE__ . 
                     *    '] [mthd ' . __METHOD__ . '] [' . 
                     *    $tmp_stats_dest_path . '][' . 
                     *    $SOURCE_filePath.']');
                     *
                     */

                    $tmp_slashChar          = $this->return_slashChar($tmp_stats_dest_path);
                    $tmp_path_explode_ARRAY = explode($tmp_slashChar, $tmp_stats_dest_path);
                    $tmp_sect_cnt           = sizeof($tmp_path_explode_ARRAY);
                    $tmp_explode_DIR        = $tmp_path_explode_ARRAY[$tmp_sect_cnt - 2];

                    $tmp_filepath_cut_ARRAY = explode($tmp_explode_DIR, $SOURCE_filePath);
                    $tmp_stats_dest_path    = rtrim($tmp_stats_dest_path, $tmp_slashChar);
                    $tmp_final_filepath     = $tmp_stats_dest_path . $tmp_filepath_cut_ARRAY[1];

                    /*error_log('[lnum ' . 
                     *    __LINE__ . 
                     *    '] [mthd ' . 
                     *    __METHOD__ . 
                     *    '] final move :: ' . 
                     *    $tmp_final_filepath);
                     *
                     *die();
                     *
                     */

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * FTP to DIR. 
                     *
                     */
                    if($this->fileMove_FD(
                              $src_ftp_stream, 
                              $tmp_stats_dest_path, 
                              $SOURCE_filePath))
                    {

                        /*$this->error_log('oWheel :: 834 * 2 = 1668 ' . 
                         *                     'count? [SOURCE_filePath=' . 
                         *                     $SOURCE_filePath . 
                         *                     '][dest_LOCAL_DIR_PATH=' . 
                         *                     $dest_LOCAL_DIR_PATH . 
                         *                     '].', 
                         *                     __LINE__, 
                         *                     __METHOD__, 
                         *                     __FILE__, 
                         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                         *
                         */

                        $this->is_transferred = true;

                    }

                }

            break;
            case 'DD':

                if(!$this->isExcluded){

                    if($this->fileMove_DD(
                               $SOURCE_filePath, 
                               $this->DESTINATION_FILE_PATH))
                    {

                        $this->is_transferred = true;

                    }

                }

            break;

        }

        return $this->is_transferred;

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

                $slashChar = \DIRECTORY_SEPARATOR;

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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function receive_asset_meta(
             $filePath, 
             $oElectrum)
    {

        $this->exclude_source_dir_from_copy = $oElectrum->return_moveSourceContentsOnly();

        $this->SOURCE_FILE_PATH = $filePath;

        if($this->queue_position < 2){

            /*$this->error_log('oWheel receive ' . 
             *                     'file path=>' . 
             *                     $this->SOURCE_FILE_PATH, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_WHEEL');
             *
             */

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * FTP or LOCAL_DIR. 
         *
         */
        $connection_type_SOURCE = $this->oEndpoint_SOURCE->return_connection_type();

        if($this->queue_position < 2){

            /*$this->error_log('oWheel connection_type[SOURCE]=>' . 
             *                     $connection_type_SOURCE, 
             *                     __LINE__, 
             *                     __METHOD__, 
             *                     __FILE__, 
             *                     'CRNRSTN_oELECTRUM_WHEEL');
             *
             */

        }

        switch($connection_type_SOURCE){
            case 'FTP':

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel PROCESSING FTP ****', 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                $this->SOURCE_FILE_NAME = basename($this->SOURCE_FILE_PATH);

                $this->SOURCE_LOCAL_DIR_PATH = $this->oEndpoint_SOURCE->return_FTP_DIR_PATH();

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel file_name=>' . 
                     *                     $this->SOURCE_FILE_NAME, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     *$this->error_log('oWheel FTP_dir_path=' . 
                     *                     $this->SOURCE_LOCAL_DIR_PATH, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * FTP or LOCAL_DIR. 
                 *
                 */
                $connection_type_DESTINATION = $this->oEndpoint_DESTINATION->return_connection_type();

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel connection_' . 
                     *                     'type[DESTINATION]=>' . 
                     *                     $connection_type_DESTINATION, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                switch($connection_type_DESTINATION){
                    case 'FTP':

                        $this->DESTINATION_DIR_PATH = $this->oEndpoint_DESTINATION->return_FTP_DIR_PATH();
                        $this->DESTINATION_MKDIR_PERMISSIONS_MODE = $this->oEndpoint_DESTINATION->return_FTP_MKDIR_MODE();

                        if($this->queue_position < 2){

                            /*$this->error_log('oWheel destination(' . 
                             *                     $this->DESTINATION_MKDIR_PERMISSIONS_MODE . 
                             *                     ') dir_path=>' . 
                             *                     $this->DESTINATION_DIR_PATH, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_WHEEL');
                             *
                             *$this->error_log('oWheel destination ' . 
                             *                     'timestamp_nom=>' . 
                             *                     $this->timestamp_nom, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_WHEEL');
                             *
                             */

                        }

                    break;
                    default:

                        $this->DESTINATION_DIR_PATH = $this->oEndpoint_DESTINATION->return_LOCAL_DIR_PATH();
                        $this->DESTINATION_MKDIR_PERMISSIONS_MODE = $this->oEndpoint_DESTINATION->return_LOCAL_MKDIR_MODE();

                        if($this->queue_position < 2){

                            /*$this->error_log('oWheel destination(' . 
                             *                     $this->DESTINATION_MKDIR_PERMISSIONS_MODE . 
                             *                     ') dir_path=>' . 
                             *                     $this->DESTINATION_DIR_PATH, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_WHEEL');
                             *
                             *$this->error_log('oWheel destination ' . 
                             *                     'timestamp_nom=>' . 
                             *                     $this->timestamp_nom, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_WHEEL');
                             *
                             */

                        }

                    break;

                }

                $tmp_source_root_ARRAY = explode(\DIRECTORY_SEPARATOR, $this->SOURCE_LOCAL_DIR_PATH);

                $tmp_loop_size = sizeof($tmp_source_root_ARRAY);
                $tmp_proj_name_dir = $tmp_source_root_ARRAY[($tmp_loop_size - 2)];

                if($this->queue_position < 2){

                    /**
                     *$this->error_log('oWheel [oEndpoint_' . 
                     *                     'DESTINATION] tmp_proj_name_dir=>' . 
                     *                     $tmp_proj_name_dir, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                $tmp_trimmed_file_path = str_replace(
                                         $this->SOURCE_LOCAL_DIR_PATH, 
                                         '', 
                                         $this->SOURCE_FILE_PATH);

                /*$this->error_log('oWheel tmp_trimmed_' . 
                 *                     'file_path PATH=>' . 
                 *                     $tmp_trimmed_file_path, 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_RUN_IT');
                 *
                 *$this->error_log('oWheel [oEndpoint_' . 
                 *                     'DESTINATION] tmp_proj_name_dir=>' . 
                 *                     $tmp_proj_name_dir, 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_RUN_IT');
                 *
                 */

                $tmp_trimmed_file_path = str_replace(
                                         $this->SOURCE_FILE_NAME, 
                                         '', 
                                         $tmp_trimmed_file_path);
                /*$this->error_log('oWheel tmp_trimmed' . 
                 *                     '_file_path PATH=>' . 
                 *                     $tmp_trimmed_file_path, 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_RUN_IT');
                 *
                 *$this->error_log('oWheel [oEndpoint_' . 
                 *                     'DESTINATION] tmp_proj_name_dir=>' . 
                 *                     $tmp_proj_name_dir,
                 *                      __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_RUN_IT');
                 *
                 */

                $tmp_trimmed_file_path = ltrim($tmp_trimmed_file_path, \DIRECTORY_SEPARATOR);

                if($tmp_trimmed_file_path != ''){

                    $tmp_trimmed_file_path = rtrim(
                                             $tmp_trimmed_file_path, 
                                             \DIRECTORY_SEPARATOR) . \DIRECTORY_SEPARATOR;

                }

                /*$this->error_log('oWheel tmp_trimmed_' . 
                 *                     'file_path PATH=>' . 
                 *                     $tmp_trimmed_file_path, 
                 *                     __LINE__, 
                 *                     __METHOD__, 
                 *                     __FILE__, 
                 *                     'CRNRSTN_oELECTRUM_RUN_IT');
                 *
                 */

                $dest_dir_path = rtrim(
                                 $this->DESTINATION_DIR_PATH, 
                                 \DIRECTORY_SEPARATOR) . \DIRECTORY_SEPARATOR;

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel tmp_trimmed_' . 
                     *                     'file_path PATH=>' . 
                     *                     $tmp_trimmed_file_path, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                if($this->oEndpoint_DESTINATION->return_flatten_all_files()){

                    $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                   $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                   $this->SOURCE_FILE_NAME;
                    $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . $tmp_proj_name_dir;

                    if($this->queue_position < 2){

                        /*$this->error_log('oWheel FLATTEN ' . 
                         *                     'ALL FILES :: PATH=>' . 
                         *                     $this->DESTINATION_FILE_PATH, 
                         *                     __LINE__, 
                         *                     __METHOD__, 
                         *                     __FILE__, 
                         *                     'CRNRSTN_oELECTRUM_WHEEL');
                         *
                         */

                    }

                }else{

                    if($this->timestamp_nom != ''){

                        if($this->exclude_source_dir_from_copy){

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                                $tmp_trimmed_file_path;

                        }else{

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                           $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                                $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                                $tmp_trimmed_file_path;

                        }

                    }else{

                        if($this->exclude_source_dir_from_copy){

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path;

                        }else{

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                                $tmp_trimmed_file_path;

                        }

                        if($this->queue_position < 20){

                            /*$this->error_log('oWheel [NO DATESTAMP ' . 
                             *                     'VERSIONING] :: destination_file=>' . 
                             *                     $this->DESTINATION_FILE_PATH, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                             */

                        }

                    }

                }

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel Destination(' . 
                     *                     $this->DESTINATION_MKDIR_PERMISSIONS_MODE . 
                     *                     ') File=>' . 
                     *                     $this->DESTINATION_FILE_PATH, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE & DIRECTORY. 
                 *
                 */
                $this->SOURCE_FILE_NAME = basename($this->SOURCE_FILE_PATH);
                $this->SOURCE_LOCAL_DIR_PATH = $this->oEndpoint_SOURCE->return_LOCAL_DIR_PATH();

                /* protected $source_file_size_at_path_ARRAY = array();
                 * protected $source_file_lastaccess_at_path_ARRAY = array();
                 * protected $source_file_lastmodify_at_path_ARRAY = array();
                 * protected $source_file_blocksize_at_path_ARRAY = array();
                 * protected $source_file_blockallocate_at_path_ARRAY = array();
                 * protected $source_file_fullpermissions_at_path_ARRAY = array();
                 * protected $source_file_octalpermissions_at_path_ARRAY = array();
                 * protected $source_file_uid_STRING_at_path_ARRAY = array();
                 * protected $source_file_gid_STRING_at_path_ARRAY = array();
                 *
                 */

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel file_name=>' . 
                     *                     $this->SOURCE_FILE_NAME, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     *$this->error_log('oWheel local_dir_path=' . 
                     *                     $this->SOURCE_LOCAL_DIR_PATH, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                $connection_type_DESTINATION = $this->oEndpoint_DESTINATION->return_connection_type();

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel connection_' . 
                     *                     'type[DESTINATION]=>' . 
                     *                     $connection_type_DESTINATION, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                     *
                     */

                }

                switch($connection_type_DESTINATION){
                    case 'FTP':

                        $this->DESTINATION_DIR_PATH = $this->oEndpoint_DESTINATION->return_FTP_DIR_PATH();
                        $this->DESTINATION_MKDIR_PERMISSIONS_MODE = $this->oEndpoint_DESTINATION->return_FTP_MKDIR_MODE();

                        if($this->queue_position < 2){

                            /*$this->error_log('oWheel destination(' . 
                             *                     $this->DESTINATION_MKDIR_PERMISSIONS_MODE . 
                             *                     ') dir_path=>' . 
                             *                     $this->DESTINATION_DIR_PATH, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                             *
                             *$this->error_log('oWheel timestamp_nom=>' . 
                             *                     $this->timestamp_nom, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                             *
                             */

                        }

                    break;
                    default:

                        $this->DESTINATION_DIR_PATH = $this->oEndpoint_DESTINATION->return_LOCAL_DIR_PATH();
                        $this->DESTINATION_MKDIR_PERMISSIONS_MODE = $this->oEndpoint_DESTINATION->return_LOCAL_MKDIR_MODE();

                        if($this->queue_position < 2){

                            /*$this->error_log('oWheel destination(' . 
                             *                     $this->DESTINATION_MKDIR_PERMISSIONS_MODE . 
                             *                     ') dir_path=>' . 
                             *                     $this->DESTINATION_DIR_PATH, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                             *
                             *$this->error_log('oWheel timestamp_nom=>' . 
                             *                     $this->timestamp_nom, 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                             *
                             */

                        }

                    break;

                }

                $tmp_source_root_ARRAY = explode(\DIRECTORY_SEPARATOR, $this->SOURCE_LOCAL_DIR_PATH);

                $tmp_loop_size = sizeof($tmp_source_root_ARRAY);
                $tmp_proj_name_dir = $tmp_source_root_ARRAY[($tmp_loop_size - 2)];

                if($this->queue_position < 2){

                    /*$this->error_log('oWheel [oEndpoint_' . 
                     *                     'DESTINATION] tmp_proj_name_dir=>' . 
                     *                     $tmp_proj_name_dir, 
                     *                     __LINE__, 
                     *                     __METHOD__, 
                     *                     __FILE__, 
                     *                     'CRNRSTN_oELECTRUM_WHEEL');
                     *
                     */

                }

                $tmp_trimmed_file_path = str_replace(
                                         $this->SOURCE_LOCAL_DIR_PATH, 
                                         '', 
                                         $this->SOURCE_FILE_PATH);
                $tmp_trimmed_file_path = str_replace(
                                         $this->SOURCE_FILE_NAME, 
                                         '', 
                                         $tmp_trimmed_file_path);

                $tmp_trimmed_file_path = ltrim($tmp_trimmed_file_path, \DIRECTORY_SEPARATOR);

                if($tmp_trimmed_file_path != ''){

                    $tmp_trimmed_file_path = rtrim(
                                             $tmp_trimmed_file_path, 
                                             \DIRECTORY_SEPARATOR) . \DIRECTORY_SEPARATOR;

                }

                $dest_dir_path = rtrim(
                                 $this->DESTINATION_DIR_PATH, 
                                 \DIRECTORY_SEPARATOR) . \DIRECTORY_SEPARATOR;

                if($this->oEndpoint_DESTINATION->return_flatten_all_files()){

                    if($this->exclude_source_dir_from_copy){

                        $this->DESTINATION_FILE_PATH = $dest_dir_path . $this->SOURCE_FILE_NAME;
                        $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path;


                    }else{

                        $this->DESTINATION_FILE_PATH = $dest_dir_path . $this->SOURCE_FILE_NAME;
                        $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path;

                    }

                    if($this->queue_position < 2){

                        /*$this->error_log('oWheel FLATTEN ALL ' . 
                         *                     'FILES :: PATH=>' . 
                         *                     $this->DESTINATION_FILE_PATH, 
                         *                     __LINE__, 
                         *                     __METHOD__, 
                         *                     __FILE__, 
                         *                     'CRNRSTN_oELECTRUM_WHEEL');
                         *
                         */

                    }

                }else{

                    if($this->timestamp_nom != ''){

                        if($this->exclude_source_dir_from_copy){

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                                $tmp_trimmed_file_path;

                        }else{

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                           $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $this->timestamp_nom . \DIRECTORY_SEPARATOR . 
                                                                $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                                $tmp_trimmed_file_path;

                        }

                    }else{

                        if($this->exclude_source_dir_from_copy){

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $tmp_trimmed_file_path;

                        }else{

                            $this->DESTINATION_FILE_PATH = $dest_dir_path . 
                                                           $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                           $tmp_trimmed_file_path . 
                                                           $this->SOURCE_FILE_NAME;
                            $this->DESTINATION_FILE_PATH_ROOT = $dest_dir_path . 
                                                                $tmp_proj_name_dir . \DIRECTORY_SEPARATOR . 
                                                                $tmp_trimmed_file_path;

                        }

                    }

                }

            break;

        }

        /*$this->error_log('oWheel :: DESTINATION_' . 
         *                     'FILE_PATH...ROOT=>' . 
         *                     $this->DESTINATION_FILE_PATH . '...' . 
         *                     $this->DESTINATION_FILE_PATH_ROOT, 
         *                     __LINE__, 
         *                     __METHOD__, 
         *                     __FILE__, 
         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
         *
         */

        $this->connection_type_SOURCE = $connection_type_SOURCE;
        $this->connection_type_DESTINATION = $connection_type_DESTINATION;

    }

    /**
     * private function mkdir_r($dirName, $rights = 0777){
     *
     * SOURCE :: http://php.net/manual/en/function.mkdir.php
     * AUTHOR :: http://php.net/manual/en/function.mkdir.php#68207
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
    private function mkdir_r($dirName)
    {

        try{

            $mode = $this->DESTINATION_MKDIR_PERMISSIONS_MODE;
            $mode = octdec(str_pad($mode, 4, '0', STR_PAD_LEFT));
            $mode = (int) $mode;

            if(!file_exists($dirName)){

                $dirs = explode(\DIRECTORY_SEPARATOR, $dirName);
                $dir = '';

                foreach($dirs as $part){

                    $dir .= $part . \DIRECTORY_SEPARATOR;
                    if(!is_dir($dir) && 
                        strlen($dir) > 0)
                    {

                        if(!@mkdir($dir, $mode)){

                            $error = error_get_last();
                            $pos_err_to_suppress = strpos(
                                                   strtolower($error['message']), 
                                                   'file exists');

                            if($pos_err_to_suppress === false){

                                throw new Exception('CRNRSTN :: mkdir_r() ' . 
                                    'failed to mkdir :: ' . 
                                    $dir . ' :: ' . 
                                    $error['message']);

                            }

                        }

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

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: http://ee1.php.net/manual/en/function.ftp-mkdir.php
     * COMMENT :: http://ee1.php.net/manual/en/function.ftp-mkdir.php#112399
     * AUTHOR :: PINAR Musa
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
    private function ftp_mksubdirs(
                     $ftpcon, 
                     $ftpbasedir, 
                     $ftpath)
    {

        $mk_subdir_complete = false;

        @ftp_chdir($ftpcon, $ftpbasedir); // /var/www/uploads
        $parts = explode('/', $ftpath); // 2013/06/11/username
        //$mode = "777";
        //$mode = octdec(str_pad($mode, 4, '0', STR_PAD_LEFT));
        //$mode = (int) $mode;

        foreach($parts as $part){

            if(!@ftp_chdir($ftpcon, $part)){

                if($part != ''){

                    if(!isset($destination_directory_flag[$ftpath . $part])){

                        if(!ftp_mkdir($ftpcon, $part)){

                            $error = error_get_last();
                            $this->error_log(
                                                 'oWheel :: ftp_mkdir ERROR=>' . 
                                                 $error['message'] . ' on [' . 
                                                 $ftpbasedir . '][' . 
                                                 $ftpath . '][' . 
                                                 $part . ']', 
                                                 __LINE__, 
                                                 __METHOD__, 
                                                 __FILE__, 
                                                 'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                        }else{

                            $destination_directory_flag[$ftpath . $part] = 1;

                            /*$this->error_log('oWheel :: ftp_mkdir ' . 
                             *                     'SUCCESS on [' . 
                             *                     $ftpbasedir . '][' . 
                             *                     $ftpath . '][' . 
                             *                     $part . ']', 
                             *                     __LINE__, 
                             *                     __METHOD__, 
                             *                     __FILE__, 
                             *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                             *
                             */

                            $mk_subdir_complete = true;

                        }

                    }else{

                        /*$this->error_log('oWheel :: ftp_mkdir SUPPRESSED', 
                         *                     __LINE__, 
                         *                     __METHOD__, 
                         *                     __FILE__, 
                         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                         *
                         */

                        $mk_subdir_complete = true;

                    }

                    if(!ftp_chdir($ftpcon, $part)){

                        $error = error_get_last();
                        $this->error_log(
                                             'oWheel :: ftp_chdir ERROR [' . 
                                             $error['message'] . '] on [' . 
                                             $ftpbasedir . '][' . 
                                             $ftpath . '][' . 
                                             $part . ']', 
                                             __LINE__, 
                                             __METHOD__, 
                                             __FILE__, 
                                             'CRNRSTN_oELECTRUM_FILE_TRANSFER');

                    }else{

                        /*$this->error_log('oWheel :: ftp_chdir ' . 
                         *                     'SUCCESS on [' . 
                         *                     $ftpbasedir . '][' . 
                         *                     $ftpath . '][' . 
                         *                     $part . ']', 
                         *                     __LINE__, 
                         *                     __METHOD__, 
                         *                     __FILE__, 
                         *                     'CRNRSTN_oELECTRUM_FILE_TRANSFER');
                         *
                         */
                        $mk_subdir_complete = true;

                    }

                    /*
                    if(!ftp_chmod($ftpcon, $mode, $part)){

                        $error = error_get_last();
                        echo '<br><br>' . 
                             $error['message'] . ' on [' . 
                             $ftpbasedir . '][' . 
                             $ftpath . '][' . 
                             $part . 
                             ']<br><br>';

                    }else{

                        echo '<br>ftp_chmod GOOD. on [' . 
                             $ftpbasedir . '][' . 
                             $ftpath . '][' . 
                             $part . 
                             ']<br>';

                    }

                    */

                }

            }

        }

        return $mk_subdir_complete;

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