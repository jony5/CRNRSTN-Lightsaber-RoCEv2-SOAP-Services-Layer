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
 * CLASS DEFINITION :: crnrstn_lightning_bolt
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: September 13, 2020 @ 0806 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Electrum ::
 *                     Ezekiel 1:4 :: Lightning 
 *                     (Fire) Bolt Meta Data 
 *                     Wrangler for Local Directory 
 *                     Access and FTP Connections
 * DESCRIPTION      :: A CRNRSTN :: Lightening Bolt
 *                     is the appearance of a
 *                     "class-like" creature within
 *                     CRNRSTN :: Electrum which,
 *                     objectifiably, performs the
 *                     task of meta-data wrangler
 *                     for all CRNRSTN :: Electrum
 *                     SFTP/FTP data transfers.
 *
 *                     For example, a CRNRSTN ::
 *                     Lightening Bolt will
 *                     provides connection status
 *                     logging for a CRNRSTN ::
 *                     Electrum configured endpoint
 *                     that the CRNRSTN :: Electrum
 *                     Wheel with High and
 *                     Awesome Eyes knows a thing
 *                     or two about through
 *                     all its searching.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 0526 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * Ezekiel 1:14  And the living creatures 
 *               ran to and fro like the 
 *               appearance of a 
 *               lightning bolt. 
 *
 */
class crnrstn_lightning_bolt extends crnrstn_user 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_lightning_bolt 
     *       class object by applying an 
     *       extension of the crnrstn_user object, 
     *       by deleting the 
     *       __construct($oCRNRSTN_USR) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN_USR variable. 
     *       5 :: Sunday, June 14, 2026 @ 1129 hrs.
     *
     */

    protected $timestamp_nom_pattern;
    protected $timestamp_nom = '';
    protected $flow_type;
    protected $connection_type;
    protected $data_type;
    protected $flatten_all_files = false;

    protected $ftp_dir_path;
    protected $local_dir_path;
    protected $ftp_oWCR_key;
    protected $local_oWCR_key;
    protected $ftp_mkdir_mode;
    protected $local_mkdir_mode;

    protected $start_time_micro;
    protected $start_time_timestamp;
    protected $elapsed_time_at_start;
    protected $byte_capacity_destination;
    protected $byte_hardDiskSize_destination;

    protected $serial;
    public $connection_status = 'new';
    public $connection_status_log = array();
    public $asset_transfer_suppression_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function __construct($serial)
    {

        $this->start_time_micro      = $this->return_micro_time();
        $this->start_time_timestamp  = $this->return_query_date_time_stamp();
        $this->elapsed_time_at_start = $this->wall_time();
        $this->serial                = $serial;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_flow_type()
    {

        return $this->flow_type;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_flatten_all_files()
    {

        return $this->flatten_all_files;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_hardDriveSize()
    {

        $tmp_connection_type = $this->return_connection_type();

        switch($tmp_connection_type){
            case 'FTP':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * No FTP support 
                 * for this 
                 * functionality. 
                 *
                 */
                $this->byte_hardDiskSize_destination = NULL;

            break;
            default:

                $tmp_dirPath = $this->return_LOCAL_DIR_PATH();
                $this->byte_hardDiskSize_destination = disk_total_space($tmp_dirPath);

            break;

        }

        return $this->byte_hardDiskSize_destination;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_availableByteCapacity()
    {

        $tmp_connection_type = $this->return_connection_type();

        switch($tmp_connection_type){
            case 'FTP':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * No FTP support 
                 * for this functionality. 
                 *
                 */
                $this->byte_capacity_destination = NULL;

            break;
            default:

                $tmp_dirPath = $this->return_LOCAL_DIR_PATH();
                $this->byte_capacity_destination = disk_free_space($tmp_dirPath);

            break;

        }

        return $this->byte_capacity_destination;

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
     * @param
     * @return
     * @access public
     *
     */
    function add_directory_nom_pattern($pattern)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * $this->save_data_param(
         *        'TIMESTAMP_NOM', 
         *        date("Ymd_H-i-s", time()));
         *
         */
        $this->timestamp_nom_pattern = $pattern;

        if(!($this->timestamp_nom = date($this->timestamp_nom_pattern, time()))){

            $this->timestamp_nom = date('Ymd_H_i_s', time());

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_SERVER()
    {

        return $this->get_resource(
                      'FTP_SERVER', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_USERNAME()
    {

        return $this->get_resource(
                      'FTP_USERNAME', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_PASSWORD()
    {

        return $this->get_resource(
                      'FTP_PASSWORD', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_PORT()
    {

        return $this->get_resource(
                      'FTP_PORT', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_TIMEOUT()
    {

        return $this->get_resource(
                      'FTP_TIMEOUT', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_IS_SSL()
    {

        return $this->get_resource(
                      'FTP_IS_SSL', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_USE_PASV()
    {

        return $this->get_resource(
                      'FTP_USE_PASV', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_USE_PASV_ADDR()
    {

        return $this->get_resource(
                      'FTP_USE_PASV_ADDR', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_DISABLE_AUTOSEEK()
    {

        return $this->get_resource(
                      'FTP_DISABLE_AUTOSEEK', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_DIR_PATH()
    {

        return $this->get_resource(
                      'FTP_DIR_PATH', 
                      $this->ftp_oWCR_key);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_FTP_MKDIR_MODE()
    {

        if($this->ftp_mkdir_mode != ''){

            return $this->ftp_mkdir_mode;

        }else{

            if($this->flow_type != 'SOURCE'){

                $this->ftp_mkdir_mode = $this->get_resource(
                                               'FTP_MKDIR_MODE', 
                                               $this->ftp_oWCR_key);

            }else{

                $this->ftp_mkdir_mode = NULL;

            }

        }

        return $this->ftp_mkdir_mode;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_LOCAL_DIR_PATH()
    {

        return $this->SOURCE_LOCAL_DIR_PATH;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_LOCAL_MKDIR_MODE()
    {

        if($this->flow_type != 'SOURCE'){

            if(isset($this->local_mkdir_mode)){

                return $this->local_mkdir_mode;

            }else{

                $this->local_mkdir_mode = NULL;

            }

        }else{

            $this->local_mkdir_mode = NULL;
        }

        return $this->local_mkdir_mode;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_connection_type()
    {

        return $this->connection_type;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_serial()
    {

        return $this->serial;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_local_oWCR_key()
    {

        return $this->local_oWCR_key;

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
    function return_WCRkey_or_PATH()
    {

        try{

            if(isset($this->ftp_oWCR_key)){

                return $this->ftp_oWCR_key;

            }else{

                if(isset($this->local_oWCR_key)){

                    return $this->local_oWCR_key;

                }else{

                    if(isset($this->SOURCE_LOCAL_DIR_PATH)){

                        return $this->SOURCE_LOCAL_DIR_PATH;

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('The CRNRSTN :: Electrum ' . 
                            'endpoint has not been ' . 
                            'configured correctly.');

                    }

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
    function initialize_sourceLOCAL_meta($dirPath)
    {

        $this->flow_type       = 'SOURCE';
        $this->connection_type = 'LOCAL_DIR';
        $this->data_type       = 'INPUT_PARAM';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * INPUT_PARAM.
         *
         */
        $this->SOURCE_LOCAL_DIR_PATH = $dirPath;

        $this->log_connection_status('ready');

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_source_LOCAL_WCR_meta($WildCardResource_key)
    {

        $this->flow_type       = 'SOURCE';
        $this->connection_type = 'LOCAL_DIR';
        $this->data_type       = 'CRNRSTN_WCR';

        $this->local_oWCR_key = $WildCardResource_key;

        $this->SOURCE_LOCAL_DIR_PATH = $this->get_resource(
                                                            'LOCAL_DIR_PATH', 
                                                            $this->local_oWCR_key);

        $this->log_connection_status('ready');

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_source_FTP_WCR_meta($WildCardResource_key)
    {

        $this->flow_type       = 'SOURCE';     // SOURCE, DESTINATION
        $this->connection_type = 'FTP';
        $this->data_type       = 'CRNRSTN_WCR';

        $this->ftp_oWCR_key = $WildCardResource_key;

        $this->ftp_dir_path = $this->get_resource(
                                                   'FTP_DIR_PATH', 
                                                   $this->ftp_oWCR_key);

        $this->log_connection_status('ready');

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
    function initialize_destinationLOCAL_meta(
             $tmp_DIR_PATH, 
             $tmp_MKDIR_MODE)
    {

        $this->flow_type       = 'DESTINATION';
        $this->connection_type = 'LOCAL_DIR';
        $this->data_type       = 'INPUT_PARAM';

        //
        // INPUT_PARAM.
        $this->SOURCE_LOCAL_DIR_PATH = $tmp_DIR_PATH;

        if(isset($tmp_MKDIR_MODE)){

            $this->local_mkdir_mode = $tmp_MKDIR_MODE;

        }

        $this->log_connection_status('ready');

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_destinationLOCAL_WCR_meta($WildCardResource_key)
    {

        $this->flow_type       = 'DESTINATION';
        $this->connection_type = 'LOCAL_DIR';
        $this->data_type       = 'CRNRSTN_WCR';

        $this->local_oWCR_key = $WildCardResource_key;

        $this->local_mkdir_mode = $this->get_resource(
                                                       'LOCAL_MKDIR_MODE', 
                                                       $this->local_oWCR_key);

        $this->SOURCE_LOCAL_DIR_PATH = $this->get_resource(
                                                            'LOCAL_DIR_PATH', 
                                                            $this->local_oWCR_key);

        $this->log_connection_status('ready');

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
    function initialize_flattenedDestinationLOCAL_meta(
             $tmp_DIR_PATH, 
             $tmp_MKDIR_MODE)
    {

        $this->flatten_all_files = true;
        $this->flow_type         = 'DESTINATION';
        $this->connection_type   = 'LOCAL_DIR';
        $this->data_type         = 'INPUT_PARAM';

        //
        // INPUT_PARAM. 
        $this->SOURCE_LOCAL_DIR_PATH = $tmp_DIR_PATH;

        if(isset($tmp_MKDIR_MODE)){

            $this->local_mkdir_mode = $tmp_MKDIR_MODE;

        }

        $this->log_connection_status('ready');

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_flattenedDestinationLOCAL_WCR_meta($WildCardResource_key)
    {

        $this->flatten_all_files = true;
        $this->flow_type         = 'DESTINATION';
        $this->connection_type   = 'LOCAL_DIR';
        $this->data_type         = 'CRNRSTN_WCR';

        $this->local_oWCR_key = $WildCardResource_key;

        $this->local_mkdir_mode = $this->get_resource(
                                                       'LOCAL_MKDIR_MODE', 
                                                       $this->local_oWCR_key);

        $this->SOURCE_LOCAL_DIR_PATH = $this->get_resource(
                                                            'LOCAL_DIR_PATH', 
                                                            $this->local_oWCR_key);

        $this->log_connection_status('ready');

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_destination_FTP_WCR_meta($WildCardResource_key)
    {

        $this->flow_type       = 'DESTINATION';
        $this->connection_type = 'FTP';
        $this->data_type       = 'CRNRSTN_WCR';

        $this->ftp_oWCR_key = $WildCardResource_key;

        $this->ftp_mkdir_mode = $this->get_resource(
                                                     'FTP_MKDIR_MODE', 
                                                     $this->ftp_oWCR_key);
        $this->error_log('CRNRSTN :: FTP DESTINATION MODE [' . 
                             $this->ftp_mkdir_mode . '].', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $this->ftp_dir_path = $this->get_resource(
                                                   'FTP_DIR_PATH', 
                                                   $this->ftp_oWCR_key);

        $this->log_connection_status('ready');

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_flattenedDestinationFTP_WCR_meta($WildCardResource_key)
    {

        $this->flatten_all_files = true;
        $this->flow_type         = 'DESTINATION';
        $this->connection_type   = 'FTP';
        $this->data_type         = 'CRNRSTN_WCR';

        $this->ftp_oWCR_key = $WildCardResource_key;

        $this->ftp_mkdir_mode = $this->get_resource(
                                                     'FTP_MKDIR_MODE', 
                                                     $this->ftp_oWCR_key);
        $this->error_log('CRNRSTN :: FTP DESTINATION MODE [' . 
                             $this->ftp_mkdir_mode . 
                             '].', 
                             __LINE__, 
                             __METHOD__, 
                             __FILE__, 
                             CRNRSTN_ELECTRUM);

        $this->ftp_dir_path = $this->get_resource(
                                                   'FTP_DIR_PATH', 
                                                   $this->ftp_oWCR_key);

        $this->log_connection_status('ready');

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