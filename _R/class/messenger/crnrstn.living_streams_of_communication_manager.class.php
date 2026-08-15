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
 * CLASS DEFINITION :: crnrstn_living_streams_of_communication_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: April 14, 2020 @ 2202 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The Communications Manager
 *                     of the CRNRSTN :: Living
 *                     Streams of Communications
 *                     Services Layer within the
 *                     CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     Communications Architecture
 * DESCRIPTION      :: The CRNRSTN :: Living
 *                     Streams of Communications
 *                     Services Layer 
 *                     Communications Manager of 
 *                     the CRNRSTN :: Lightsaber 
 *                     SOAP Services Layer sits on 
 *                     top of a MySQL database 
 *                     powered communications data
 *                     architecture, and converts
 *                     the table data into visual
 *                     threads or streams of user
 *                     to user conversations
 *                     in HTML.
 *
 *                     The user interface (UI) for
 *                     this communications
 *                     services layer has channel
 *                     specific desktop and
 *                     mobile/tablet device
 *                     profile settings that
 *                     maximize the use of screen
 *                     real-estate.
 *
 *                     The HTML generation
 *                     architecture of the CRNRSTN ::
 *                     Living Streams of
 *                     Communications Services Layer
 *                     recursively drills into the
 *                     MySQL communications table
 *                     data, converting the database
 *                     table data into HTML as it
 *                     continues all the way to
 *                     the end of the provided
 *                     MySQLi database result set
 *                     in order to produce visual
 *                     streams of communications.
 *
 *
 *                     5
 *
 *                     Wednesday, July 24, 2024 @ 0240 hrs.
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
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_living_streams_of_communication_manager 
{

    public $oCRNRSTN_LOGGING;
    public $tmp_buildOutput;
    public $tmp_buildOutput_N;
    public $tmp_output_flag_ARRAY;
    public $tmp_buildOutput_ARRAY = array();
    public $stream_vert_flow_DOM_handles;
    public $replicate_flag_ARRAY = array();
    public $queued_for_display = array();

    private static $oData;
    private static $oUserEnvironment;
    private static $oUser;
    private static $stream_mention_ARRAY = array();
    private static $stream_eid_coor_ARRAY = array();
    private static $stream_lookup_id_ARRAY = array();
    private static $stream_lookup_id_profile_ARRAY = array();
    private static $stream_dbresp_serial_ARRAY = array();
    private static $stream_key_count = 0;
    private static $max_stream_depth;
    private static $max_reply_display_count;
    private static $db_response_serial_handle_ARRAY = array();
    private static $stream_mention_Case_ARRAY = array();
    private static $replyFormHTML_ID;
    private static $current_stream_order = 0;
    private static $stream_depth_monitor_ARRAY = array();

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
             $oENV, 
             $oUSER)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the class resource, 
         *       crnrstn_living_streams_comm_manager, to 
         *       crnrstn_living_streams_of_communication_manager. 
         *       5 :: Wednesday, June 17, 2026 @ 1042 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the class resource file, 
         *       crnrstn.living_streams_comm_manager.class.php, to 
         *       crnrstn.living_streams_of_communication_manager.class.php. 
         *       5 :: Wednesday, June 17, 2026 @ 1042 hrs.
         *
         */

        self::$oUserEnvironment = $oENV;
        self::$oUser            = $oUSER;

        self::$replyFormHTML_ID = 'STREAMREPLY_' . self::$oUser->generateNewKey(10);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function init_order_depth($stream_id)
    {

        $tmp_order0_key = $this->hash($stream_id);

        self::$stream_depth_monitor_ARRAY[$tmp_order0_key] = 0;

        return $tmp_order0_key;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function increment_order_depth($order_key)
    {

        self::$stream_depth_monitor_ARRAY[$order_key]++;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function decrement_order_depth($order_key)
    {

        self::$stream_depth_monitor_ARRAY[$order_key]--;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_order_depth($order_key)
    {

        return self::$stream_depth_monitor_ARRAY[$order_key];

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function returnReplyformID()
    {

        return self::$replyFormHTML_ID;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_oUser()
    {

        return self::$oUser;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_stream_lookup_array($type)
    {

        switch($type){
            case 'PROFILE':

                return self::$stream_lookup_id_profile_ARRAY;

            break;
            case 'ID':

                return self::$stream_lookup_id_ARRAY;

            break;
            case 'SERIAL':

                return self::$stream_dbresp_serial_ARRAY;

            break;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_serial_handle()
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return reference to 
         * database response 
         * serialization. 
         * 
         * The last element 
         * of the array. 
         *
         */
        $tmp_last_handle = end(self::$db_response_serial_handle_ARRAY);

        return $tmp_last_handle;

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
     * @return
     * @access public
     *
     */
    function load_stream_data(
             $channel, 
             $devicetype, 
             $streamtype, 
             $response_profile, 
             $profile_field, 
             $serial, 
             $oDB_RESP)
    {

        if($streamtype == 'DEEP'){

            self::$oData = $oDB_RESP->return_oDB();

            $oDB_RESP = self::$oData->processStreamRequest(
                                      'get_stream_deep_data', 
                                      $this, 
                                      self::$oUserEnvironment, 
                                      $oDB_RESP);

            //error_log("stream (302) finished processStreamRequest()...");
            // 5 :: Wednesday, June 17, 2026 @ 2230 hrs.
            $clr_ssl_msg = 'Finished processStreamRequest()...';
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

            return $oDB_RESP;

        }else{

            $tmp_response_profile_ARRAY       = explode("|", $response_profile);
            $tmp_response_profile_field_ARRAY = explode("|", $profile_field);
            $tmp_count_profiles               = sizeof($tmp_response_profile_ARRAY);
            $tmp_oResp_profile_array          = $oDB_RESP->return_profiles($serial);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Confirm that desired 
             * profile is available 
             * in response object. 
             *
             */
            for($i = 0; $i < $tmp_count_profiles; $i++){

                if(!in_array($tmp_response_profile_ARRAY[$i], $tmp_oResp_profile_array)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The provided profile type (' . 
                        $tmp_response_profile_ARRAY[$i] . 
                        ') cannot be found in the ' . 
                        'database response object.');

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * For each response profile, 
             * get all id for SQL lookup 
             * on stream data. 
             *
             */
            for($i = 0; $i < $tmp_count_profiles; $i++){

                $tmp_loop_size = $oDB_RESP->return_sizeof(
                                            $serial, 
                                            $tmp_response_profile_ARRAY[$i]);

                for($ii = 0; $ii < $tmp_loop_size; $ii++){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Store keys from 
                     * database response. 
                     *
                     */
                    /* error_log("stream (278) serial[" . 
                     *      $serial . "] tmp_response_profile_ARRAY[" . 
                     *      $tmp_response_profile_ARRAY[$i] . 
                     *      "] tmp_response_profile_field_ARRAY[" . 
                     *      $tmp_response_profile_field_ARRAY[$i] . 
                     *      "] ii[" . $ii . "]");
                     *
                     */
                    self::$stream_lookup_id_ARRAY[self::$stream_key_count]         = $oDB_RESP->return_data_element(
                                                                                                $serial, 
                                                                                                $tmp_response_profile_ARRAY[$i], 
                                                                                                $tmp_response_profile_field_ARRAY[$i], 
                                                                                                $ii);
                    self::$stream_lookup_id_profile_ARRAY[self::$stream_key_count] = $tmp_response_profile_ARRAY[$i];
                    self::$stream_dbresp_serial_ARRAY[self::$stream_key_count]     = $serial;
                    self::$stream_key_count++;

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * We have all ID and profile 
             * type. Ready to perform 
             * database operations for 
             * data read in order to 
             * complete a "GET" of data.
             *
             */
            self::$oData = $oDB_RESP->return_oDB();

            #$tmp_serial_handle = 'STREAM_MAIN';
            $oDB_RESP = self::$oData->processStreamRequest(
                                      'get_stream_data', 
                                      $this, 
                                      self::$oUserEnvironment, 
                                      $oDB_RESP);

            return $oDB_RESP;

        }

    }

    /**
     * R :: Returns stream data based upon data structure; does not process search results. 
     *
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
    function return_streams(
             $channel, 
             $devicetype, 
             $streamtype, 
             $response_profile, 
             $profile_field, 
             $serial, 
             $oDB_RESP = NULL)
    {

        try{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * $channel[WEB, EMAIL, SMS],
             * $devicetype[m, d],
             * $streamtype[KIVOTOS, ASSET, USER, CLIENT, LANG],
             * $oDB_RESP[OBJ]
             *
             *
             * # self::$oUserEnvironment->getEnvParam('MOBILE_WEB_STREAM_DEPTH');
             * # self::$oUserEnvironment->getEnvParam('DESKTOP_WEB_STREAM_DEPTH');
             *
             */

            switch($devicetype){
                case "m":

                    self::$max_stream_depth = self::$oUserEnvironment->getEnvParam('MOBILE_WEB_STREAM_DEPTH');

                    if($streamtype == 'DEEP'){

                        self::$max_reply_display_count = 1000;

                    }else{

                        self::$max_reply_display_count = self::$oUserEnvironment->getEnvParam('MOBILE_WEB_MAX_REPLY_COUNT');

                    }

                break;
                default:

                    self::$max_stream_depth = self::$oUserEnvironment->getEnvParam('DESKTOP_WEB_STREAM_DEPTH');

                    if($streamtype == 'DEEP'){

                        self::$max_reply_display_count = 1000;

                    }else{

                        self::$max_reply_display_count = self::$oUserEnvironment->getEnvParam('DESKTOP_WEB_MAX_REPLY_COUNT');

                    }

                break;

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get and process 
             * data for output. 
             *
             */
            $oDB_RESP = $this->load_stream_data(
                               $channel, 
                               $devicetype, 
                               $streamtype, 
                               $response_profile, 
                               $profile_field, 
                               $serial, 
                               $oDB_RESP);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Output data 
             * preparation 
             * and return. 
             *
             */
            return $this->assemble_output(
                          $channel, 
                          $devicetype, 
                          $streamtype, 
                          $response_profile, 
                          $profile_field, 
                          $oDB_RESP);


        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * The CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services 
             * Layer (CLR-SSL) Logging 
             * Services Layer. 
             * # C # R # N # R # S # T # N # :: # L # I # G # H # T
             *
             * Allow the CLR-SSL to 
             * handle this exception per the 
             * logging profile configuration 
             * for this application. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1609 hrs.
             * Last Modified: Wednesday, June 17, 2026 @ 2251 hrs.
             *
             */
            $this->oCRNRSTN_LOGGING->captureNotice(
                                     'stream_manager->return_streams()', 
                                     LOG_EMERG, 
                                     $e->getMessage());

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
    function process_mention_input(
             $stream_content, 
             $stream_eid)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Parse stream content. 
         *
         */
        $this->prep_stream_content_for_mention_extract($stream_content);

        $tmp_mention_loop_size = sizeof(self::$stream_mention_ARRAY);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * If we have @mentions...then 
         * go through the work to 
         * prepare and process EID's. 
         *
         */
        if($tmp_mention_loop_size > 0){

            self::$stream_eid_coor_ARRAY = explode("|", $stream_eid);

            $tmp_eid_loop_size = sizeof(self::$stream_eid_coor_ARRAY);

            for($i = 0; $i < $tmp_eid_loop_size; $i++){

                $tmp_decrypt_result = self::$oUserEnvironment->data_decrypt(self::$stream_eid_coor_ARRAY[$i]);

                /*error_log("stream (170) decrypt of " . 
                 *    "mention pipe delim array value[" . 
                 *    self::$stream_eid_coor_ARRAY[$i] . 
                 *    "] to [". 
                 *    $tmp_decrypt_result . 
                 *    "]");
                 */

                self::$stream_eid_coor_ARRAY[$i] = $tmp_decrypt_result;

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Now we have: 
             * - [@rewrew=12344, 
             *    @wfewfwf=12444, 
             *    @rewrerew=13444], and 
             * - [@rewrwrew, 
             *    @rwrewrwr, 
             *    @efefwwf] 
             *
             * assuming user used 
             * link to input @mention.
             *
             * What if someone typos 
             * an existing @mention...or 
             * typos a manual entry...
             *
             * We need to go through ID's 
             * and retrieve...
             *
             * Do we want to support 
             * someone manually typing in 
             * an @mention? Like...if we 
             * have an @xxxx then take the 
             * time to try to match it 
             * to user_id? 
             *
             * Well, for starters..., 
             * if @mention count and EID 
             * count is same...just 
             * process EID's...right? 
             *
             * Let's tie it down. 
             * Everything processed 
             * the same way.
             *
             * Mentions should be 
             * hyperlinked to user 
             * profile pages. If this 
             * doesn't happen, 
             * you fail. 
             *
             *
             * 5
             *
             */

            #self::$stream_mention_ARRAY[$tmp_mentionCnt]
            #self::$stream_mention_USER_ID_ARRAY[$tmp_mentionCnt]

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
    function mention_accounted($eid)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Do we have record 
         * of this EID?
         *
         */
        $tmp_loop_size = sizeof(self::$stream_eid_coor_ARRAY);

        for($i = 0; $i < $tmp_loop_size; $i++){

            $tmp_eid_coor = self::$stream_eid_coor_ARRAY[$i];
            $pos          = strpos($tmp_eid_coor, $eid);

            if($pos !== false){

                return true;

            }

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_mention_count()
    {

        return sizeof(self::$stream_mention_ARRAY);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_mention_data($pos = NULL)
    {

        if(isset($pos)){

            return self::$stream_mention_ARRAY[$pos];

        }else{

            return self::$stream_mention_ARRAY;

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
    function return_mention_case($mention)
    {

        return self::$stream_mention_Case_ARRAY[$mention];

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function prep_stream_content_for_mention_extract($str)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Convert all punctuation to 
         * spaces and lowercase. 
         *
         * Disregard case in 
         * database...just store 
         * as all lowercase
         * (but display with proper 
         * case to end users).
         *
         * Looking for format: 
         * -  @username ewrew rewr 
         *    erwrw @username rewrew 
         *    rewfsdfds trtre @username. 
         *
         * There must be space at end 
         * of @mention for detection. 
         *
         * It would more sense to perform 
         * the @mention linking here...right? 
         * In this class. Let's see if we 
         * can find a good place to 
         * transform @mention data.
         *
         *
         * 5
         *
         */

        $str            = $this->mention_parseSanitize($str);
        $tmp_mentionCnt = 0;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * My next best move would 
         * be to explode on spaces, 
         * I think. 
         *
         *
         * 5
         *
         */
        $tmp_stream_content_space_explode_ARRAY = explode(' ', $str);

        $tmp_loop_size = sizeof($tmp_stream_content_space_explode_ARRAY);

        for($i = 0; $i < $tmp_loop_size; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Do I have an @...and filter 
             * out any non-leading @ 
             *
             */
            $pos = strpos($tmp_stream_content_space_explode_ARRAY[$i], "@");

            if(($pos !== false) && 
                ($pos < 1))
            {

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We have @. 
                 * 
                 * Store the trimmed value 
                 * into array. We will 
                 * investigate results later.
                 * 
                 * Why are we changing format 
                 * to lower...perhaps in prep 
                 * for database lookup? 
                 * 
                 * We cannot the assume @mention 
                 * case. User can enter this 
                 * manually...case should not 
                 * matter...we lower this 
                 * before touching database.
                 *
                 *
                 * 5
                 *
                 */
                self::$stream_mention_ARRAY[$tmp_mentionCnt] = trim($tmp_stream_content_space_explode_ARRAY[$i]);
                self::$stream_mention_Case_ARRAY[strtolower(self::$stream_mention_ARRAY[$tmp_mentionCnt])] = trim($tmp_stream_content_space_explode_ARRAY[$i]);

                #self::$stream_mention_ARRAY[$tmp_mentionCnt] = trim(strtolower($tmp_stream_content_space_explode_ARRAY[$i]));
                #error_log("stream (81) mention->" . self::$stream_mention_ARRAY[$tmp_mentionCnt]);

                $tmp_mentionCnt++;

            }

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
    private function injest_stream_relation(
                     $stream_id, 
                     $i_feed_id, 
                     $living_stream_oARRAY)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * # TUNE!!! 
         * 
         * BOH! BOH! BOH!
         * 
         * PULL UP!! PULL UP! YEAH! 
         * FROM THE T..O...P...La Rou..going 
         * in for the kill...methodus 041209 43min.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Tell $i_feed_id it is 
         * being fead by $stream_id. 
         *
         */
        if(isset($living_stream_oARRAY[$i_feed_id])){

            $tmp_liv_stream = $living_stream_oARRAY[$i_feed_id];

            $tmp_liv_stream->merge_feeder($stream_id);

            $living_stream_oARRAY[$i_feed_id] = $tmp_liv_stream;

        }

        return $living_stream_oARRAY;

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
    private function buildOutputZERO(
                     $oLIVING_STREAM, 
                     $stream_oARRAY, 
                     $stream_manager, 
                     $oDB_RESP)
    {

        error_log("stream (567) buildOutputZERO() for " . $oLIVING_STREAM->stream_html_dom_key);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We need to support n+1 
         * dynamic traversal of stream 
         * relations...or something 
         * like that. 
         *
         * We have the living_stream, 
         * the array of streams and 
         * the stream manager. 
         *
         * First...order = 0 stream buildout. 
         * We can compile the HTML 
         * guts here. Is that ok? 
         * We may not have a choice. 
         *
         * How do we know how deep 
         * we are in the order? 
         *
         * Use this for n display 
         * next to reply link...not 
         * array size determination. 
         *
         */
        #$tmp_feeder_count = $oLIVING_STREAM->return_attribute_data('FEEDER_STREAM_COUNT');  

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * See if you can work directly 
         * with the object's public array. 
         *
         * #$tmp_feeder_id_array = 
         */
        $tmp_feeder_count = sizeof($oLIVING_STREAM->feeder_stream_ARRAY);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This is for n+1 processing.
         * So I process 0-100 first. 
         * Then flip the output array.
         *
         */
        if($tmp_feeder_count > 0){

            $tmp_depth_key = $stream_manager->init_order_depth($oLIVING_STREAM->stream_html_dom_key);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Cycle through the stream object 
             * array looking for feeders. We have 
             * this already...actually.
             * 
             * Food is here so....being slow.
             * We are order n here.
             *
             * error_log("stream (474) stream " . 
             *     $oLIVING_STREAM->stream_html_dom_key . 
             *     " has " . 
             *     $tmp_feeder_count . 
             *     " feeders.");
             *
             */
            #for($i = 0; $i < $tmp_feeder_count; $i++){
            /*error_log("stream (456) oSTR::feeder_stream_ARRAY[" . 
             *    $i . "] ->" . 
             *    $oLIVING_STREAM->feeder_stream_ARRAY[$i]);
             *
             */

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * This order 0 stream has 
             * feeder streams...they also 
             * may have feeder streams....and 
             * those streams could have 
             * feeders too...etc. 
             *
             * Store raw HTML in this array. 
             * This should return all HTML 
             * for stream + n+1 here. 
             *
             */
            /*$stream_manager->tmp_buildOutput_ARRAY[] = $this->replicate_N(
             *                                                  $oLIVING_STREAM, 
             *                                                  $stream_oARRAY, 
             *                                                  $stream_manager, 
             *                                                  $oDB_RESP);
             */
            /*error_log("stream (482) buildOutputZERO (n+1) for " . 
             *    $oLIVING_STREAM->stream_html_dom_key);
             */
            error_log("stream (605) replicate_N being called by buildOutputZERO..." . 
                $oLIVING_STREAM->stream_content);

            if(!isset($this->replicate_flag_ARRAY[$oLIVING_STREAM->stream_html_dom_key])){

                $this->replicate_flag_ARRAY[$oLIVING_STREAM->stream_html_dom_key] = 1;
                $this->tmp_buildOutput_ARRAY[] = $this->replicate_N(
                                                        $oLIVING_STREAM, 
                                                        $stream_oARRAY, 
                                                        $stream_manager, 
                                                        $oDB_RESP, 
                                                        $tmp_depth_key);

                #$this->queued_for_display[$oLIVING_STREAM->stream_html_dom_key] = true;

            }

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Process order 0 with 
             * no feeder streams. 
             *
             * Let's try to get this 
             * working as proof of 
             * concept for this 
             * architecture. 
             *
             */
            /*$stream_manager->tmp_buildOutput_ARRAY[] = $this->replicate_0(
             *                                                  $oLIVING_STREAM, 
             *                                                  $stream_oARRAY, 
             *                                                  $stream_manager, 
             *                                                  $oDB_RESP);
             */
            /*error_log("stream (494) buildOutputZERO for " . 
             *     $oLIVING_STREAM->stream_html_dom_key);
             *
             */
            error_log("stream (619) replicate_0 being called by buildOutputZERO..." . 
                $oLIVING_STREAM->stream_content);

            if(!isset($this->queued_for_display[$oLIVING_STREAM->stream_html_dom_key])){

                $this->tmp_buildOutput_ARRAY[] = $this->replicate_0(
                                                        $oLIVING_STREAM, 
                                                        $stream_oARRAY, 
                                                        $stream_manager, 
                                                        $oDB_RESP);

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
    private function replicate_0(
                     $oLIVING_STREAM, 
                     $stream_oARRAY, 
                     $stream_manager, 
                     $oDB_RESP)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log("stream (548) replicate_0 " . 
         *     $oLIVING_STREAM->stream_html_dom_key . 
         *     "|" . 
         *     $oLIVING_STREAM->stream_content);
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Order = 0 stream display. 
         * [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get [LIVING_STREAM object output - ORDER = 0]
         *
         */
        if(!isset($this->queued_for_display[$oLIVING_STREAM->stream_html_dom_key])){

            /*error_log("stream (556) return **HTML OUTPUT** for " . 
             *    $oLIVING_STREAM->stream_html_dom_key . 
             *    "|" . 
             *    $oLIVING_STREAM->stream_content);
             */
            $tmp_stream_HTML = $this->living_stream_HTML_translation($oLIVING_STREAM, $oDB_RESP, $stream_manager->return_oUser());
            $this->queued_for_display[$oLIVING_STREAM->stream_html_dom_key] = true;
            /*error_log("stream (557) output DUPLICATE CHECK count->" . 
             *    substr_count($tmp_stream_HTML, 'Reply here no file attach'));
             */

            return $tmp_stream_HTML;

        }else{

            error_log("stream (641) display skipped " . $oLIVING_STREAM->stream_html_dom_key);
            return NULL;

        }

/*        # HTML structure with just order 0 stream (no replies)
 *        <div id="stream_00_wrapper">
 *            [VERT FLOW DIV - stream_vert_flow_00]
 *            <div id="stream_order_00_wrapper" class="stream_order_wrapper">
 *                [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
 *                [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
 *                [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
 *                [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
 *            </div><!-- // END stream_order_00_wrapper
 *        </div><!-- // END stream_00_wrapper
 *
 */

/*      [LIVING_STREAM OBJECT]
 *		<div class="single_stream_wrapper">  <!-- No ID for stream? We not need it yet or something?....I guess not. -->
 *            <div class="stream_content" onclick="evifweb_set_stream_content_style_height();"><a
 *                        href="#">@JonathanHarris</a> can we update the color of the
 *                background to make it align more to the logo
 *                border and logo font color?
 *            </div>
 *            <div class="stream_owner">by <a href="#">Sally Johnson</a></div>
 *            <div class="stream_stamp_reply_wrapper">
 *                <div class="stream_timestamp">9.30.2018 @ 1340</div>
 *                <div class="stream_reply"><a href="#">(5)</a> <a href="#">Reply</a></div>
 *            </div>
 *            <div class="cb_5"></div>
 *            <div class="stream_hr"></div>
 *        </div>
 *
 */

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
    private function replicate_N(
                     $oLIVING_STREAM, 
                     $stream_oARRAY, 
                     $stream_manager, 
                     $oDB_RESP, 
                     $tmp_depth_key)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We need to support n+1 dynamic 
         * traversal of stream 
         * relations...or something 
         * like that. 
         *
         * We have the living_stream, 
         * the array of streams and 
         * the stream manager. 
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Once I get this working, 
         * it will work for all n+1 
         * streams. We will be done 
         * with this architecture 
         * and can focus on details. 
         *
         *
         * 5
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get [LIVING_STREAM OBJECT OUTPUT - ORDER = N]
         * 
         * Ok. So this is going to have to happen. 
         * The html-ing of the living_stream. 
         * Might as well happen here.
         *
         */
        #if(!isset($this->queued_for_display[$oLIVING_STREAM->stream_html_dom_key])){
        $this->tmp_buildOutput_N[$oLIVING_STREAM->stream_html_dom_key]  = $this->living_stream_HTML_translation(
                                                                                 $oLIVING_STREAM, 
                                                                                 $oDB_RESP, 
                                                                                 $stream_manager->return_oUser());
        $this->queued_for_display[$oLIVING_STREAM->stream_html_dom_key] = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * If our depth is at the 
         * limit...do not render 
         * replies here. 
         *
         */
        $tmp_depth = (int)$stream_manager->return_order_depth($tmp_depth_key);

        error_log("stream (650) order compare[tmp/max] [" . 
            $tmp_depth . "]/[" . 
            self::$max_stream_depth . "]");

        if($tmp_depth <= self::$max_stream_depth){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * I think we do open and 
             * close HTML here...not 
             * sure about this 
             * implementation...which one?
             *
             */
            $this->tmp_buildOutput_N[$oLIVING_STREAM->stream_html_dom_key . 'openHTML'] = $this->stream_order_HTML_opening($oLIVING_STREAM->stream_html_dom_key);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get my feeder streams 
             * ready for cycling.
             * 
             * We only want to display 
             * the last $max_reply_count 
             * number of replies. 
             * 
             * $oLIVING_STREAM->return_attribute('max_reply_count') 
             * or 
             * self::$max_reply_display_count.
             *
             *
             * 5
             *
             */
            $tmp_loop_size = sizeof($oLIVING_STREAM->feeder_stream_ARRAY);         # 10, 5, 2, 1, 0
            $tmp_delta     = $tmp_loop_size - (int)self::$max_reply_display_count; # 8, 3, 0, -, -

            if($tmp_delta > (-1)){

                $loop_init = $tmp_delta;

            }else{

                $loop_init = 0;

            }

            for($ii = $loop_init; $ii < $tmp_loop_size; $ii++){
                #$oLIVING_STREAM->feeder_stream_ARRAY[$i]

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * For each feeder stream...
                 *
                 */
                $tmp_feeder_oLvStream = $stream_oARRAY[$oLIVING_STREAM->feeder_stream_ARRAY[$ii]];
                $tmp_feeder_count     = sizeof($tmp_feeder_oLvStream->feeder_stream_ARRAY);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This is for n+1 processing. 
                 * We can hit this later? or now...
                 *
                 */
                /*error_log("STREAM (572) Feeder count for feeder stream " . 
                 *    $tmp_feeder_oLvStream->stream_html_dom_key . 
                 *    " = " . 
                 *    $tmp_feeder_count);
                 *
                 */
                if($tmp_feeder_count > 0){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * I need a way to tie 
                     * all stream replies and 
                     * nested replies 
                     * together...I need like 
                     * an ID or something. 
                     *
                     */
                    $stream_manager->increment_order_depth($tmp_depth_key);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We are order n here. 
                     *
                     */
                    for($i = 0; $i < $tmp_feeder_count; $i++){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * error_log("stream (456) oSTR::feeder_stream_ARRAY[" . 
                         *     $i . "] ->" . 
                         *     $oLIVING_STREAM->feeder_stream_ARRAY[$i]);
                         *
                         * This order 0 stream has feeder 
                         * streams...they also may have 
                         * feeder streams....and those 
                         * streams could have feeders 
                         * too...etc.
                         * 
                         * A mirror pointing at another 
                         * mirror to get work done.
                         * 
                         * I think this may work...I need 
                         * to sort out the opening and 
                         * closing HTML stuff. 
                         *
                         *
                         * 5
                         *
                         */

                        error_log("stream (643) nested replicate_N being called by replicate_N for " . 
                            $tmp_feeder_oLvStream->stream_html_dom_key);
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * $this->tmp_buildOutput_N .= $this->replicate_N(
                         *                                    $tmp_feeder_oLvStream, 
                         *                                    $stream_oARRAY, 
                         *                                    $stream_manager, 
                         *                                    $oDB_RESP);
                         */
                        if(!isset($this->replicate_flag_ARRAY[$tmp_feeder_oLvStream->stream_html_dom_key])){

                            $this->replicate_flag_ARRAY[$oLIVING_STREAM->stream_html_dom_key]    = 1;
                            $this->tmp_buildOutput_N[$tmp_feeder_oLvStream->stream_html_dom_key] = $this->replicate_N(
                                                                                                          $tmp_feeder_oLvStream, 
                                                                                                          $stream_oARRAY, 
                                                                                                          $stream_manager, 
                                                                                                          $oDB_RESP, 
                                                                                                          $tmp_depth_key);
                            //$this->queued_for_display[$tmp_feeder_oLvStream->stream_html_dom_key] = true;

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * error_log("stream (645) output DUPLICATE CHECK count->" . 
                         *     substr_count($this->tmp_buildOutput_N, 'Reply here no file attach'));
                         *
                         */

                    }

                    $stream_manager->decrement_order_depth($tmp_depth_key);

                }else{

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Process order 0 with 
                     * no feeder streams. 
                     *
                     * Let's try to get this 
                     * working as proof of 
                     * concept for this architecture. 
                     *
                     * Still unsure of method name. 
                     *
                     */
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * error_log("stream (607) replicate_N() " . 
                     *     "about to call replicate_0 for " . 
                     *     $tmp_feeder_oLvStream->stream_html_dom_key);
                     *
                     */
                    #if($tmp_feeder_oLvStream->stream_html_dom_key!=$oLIVING_STREAM->stream_html_dom_key){
                    error_log("stream (764) replicate_0 being called by replicate_N...");
                    /*$this->tmp_buildOutput_N .= $this->replicate_0(
                     *                                   $tmp_feeder_oLvStream, 
                     *                                   $stream_oARRAY, 
                     *                                   $stream_manager, 
                     *                                   $oDB_RESP);
                     *
                     */
                    if(!isset($this->queued_for_display[$tmp_feeder_oLvStream->stream_html_dom_key])){

                        $this->tmp_buildOutput_N[$tmp_feeder_oLvStream->stream_html_dom_key]  = $this->replicate_0(
                                                                                                       $tmp_feeder_oLvStream, 
                                                                                                       $stream_oARRAY, 
                                                                                                       $stream_manager, 
                                                                                                       $oDB_RESP);
                        $this->queued_for_display[$tmp_feeder_oLvStream->stream_html_dom_key] = true;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * error_log("stream (657) output duplicate check count->" . 
                     *     substr_count($this->tmp_buildOutput_N, 'Reply here no file attach'));
                     */

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (661) output duplicate check count->" . 
                 *     substr_count($this->tmp_buildOutput_N, 'Reply here no file attach'));
                 *
                 */

            }

            #$this->tmp_buildOutput_N .= $this->stream_order_HTML_closing();
            $this->tmp_buildOutput_N[$oLIVING_STREAM->stream_html_dom_key . 'closeHTML'] = $this->stream_order_HTML_closing();

        }

        /*
        }else{

            error_log("stream (782) display skipped " . 
                $oLIVING_STREAM->stream_html_dom_key);

        }

         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This HTML will need to 
         * contain all nested 
         * stream data. 
         *
         * We may need to 
         * serialize a component 
         * of this experience to 
         * support this. 
         *
         *
         * 5
         *
         */
        return $this->tmp_buildOutput_N;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * This method should build 
     * out stream for all 
     * channel/device type. 
     *
     * This will return string 
     * of HTML data for a stream. 
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
    private function living_stream_HTML_translation(
                     $oLIVING_STREAM, 
                     $oDB_RESP, 
                     $oUser)
    {

        /*
        $channel[WEB, EMAIL, SMS],
        $devicetype[m, d],
        $streamtype[KIVOTOS, ASSET, USER, CLIENT, LANG],
        $oDB_RESP[OBJ]

        */

        $tmp_HTML = '';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Are we under order 
         * display limits. 
         *
         */
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log("stream (677) compare [" . 
         *     self::$current_stream_order . 
         *     "]-[" . 
         *     $oLIVING_STREAM->return_attribute('max_stream_depth') . 
         *     "]");
         *
         */

        if(self::$current_stream_order <= (int) $oLIVING_STREAM->return_attribute('max_stream_depth')){

            switch($oLIVING_STREAM->channel){
                case 'WEB':

                    $tmp_HTML = $this->stream_WEB_HTML_translation(
                                       $oLIVING_STREAM, 
                                       $oDB_RESP, 
                                       $oUser);

                break;
                case 'EMAIL':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We will have to code 
                     * this output for email 
                     * client compatibility. 
                     *
                     * I'm not setup to test 
                     * this output yet...but 
                     * we will be. 
                     *
                     *
                     * 5
                     *
                     */
                    $tmp_HTML = $this->stream_EMAIL_HTML_translation(
                                       $oLIVING_STREAM, 
                                       $oDB_RESP, 
                                       $oUser);

                break;
                case 'SMS':
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * More research necessary. 
                     * Not sure if my systems 
                     * will support the degree 
                     * of perfection required 
                     * to pull this off. 
                     *
                     */
                break;
                default:

                break;

            }

        }

        return $tmp_HTML;

    }


    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * I need to expose my 
     * multi-language support 
     * layer to this object/method. 
     *
     * If I push language support
     * through oDB_RESP, I will 
     * have it immediately. 
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
    private function stream_WEB_HTML_translation(
                     $oLIVING_STREAM, 
                     $oDB_RESP, 
                     $oUser)
    {

        switch($oLIVING_STREAM->devicetype){
            case 'm':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * MOBILE
                 * Proof of concept. Getting username 
                 * should be fun. that should be in 
                 * the oDB_RESP object.
                 * 
                 * $tmp_HTML = '<div class="single_stream_wrapper"><div class="stream_content">' . 
                 *              $oLIVING_STREAM->return_attribute_data('STREAM_FORMATTED') . 
                 *             '</div><div class="cb_5"></div><div class="stream_hr"></div></div>';
                 *
                 */
                #$tmp_feeder_cnt = sizeof($oLIVING_STREAM->feeder_stream_ARRAY);
                $tmp_feeder_cnt = (int) $oLIVING_STREAM->return_attribute_data('FEEDER_STREAM_COUNT');

                if($tmp_feeder_cnt < 1){

                    $tmp_feeder_cnt = NULL;

                }else{

                    if(!$oUser->is_ssl()){

                        $tmp_curr_uri = urlencode(self::$oUserEnvironment->data_encrypt("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"));

                    }else{

                        $tmp_curr_uri = urlencode(self::$oUserEnvironment->data_encrypt("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"));

                    }

                    $tmp_feeder_cnt = '<a href="#" onclick="evifweb_followLink(\'' . 
                                      self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                                      self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                                      'stream/?sid=' . 
                                      $oLIVING_STREAM->return_attribute_data('STREAM_ID') . 
                                      '&ruri=' . 
                                      $tmp_curr_uri . '\');">(' . 
                                      $tmp_feeder_cnt . ')</a>';

                }

                if($oLIVING_STREAM->return_attribute_data('ATTACHED_ASSET_ID') != ''){

                    $tmp_lnk = self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                               self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                               "dashboard/kivotos/asset/preview/?tunnelEncrypt=" . 
                               urlencode(self::$oUserEnvironment->data_encrypt('&kid=' . 
                                                                  $oLIVING_STREAM->return_attribute_data('KIVOTOS_ID') . 
                                                                  '&aid=' . 
                                                                  $oLIVING_STREAM->return_attribute_data('ATTACHED_ASSET_ID') . 
                                                                  '&cid=' . 
                                                                  $oLIVING_STREAM->return_attribute_data('CLIENT_ID') . 
                                                                  '&uid=' . 
                                                                  $oLIVING_STREAM->return_attribute_data('USER_ID')));

                    $tmp_attach_lnk = '<div class="stream_attach_lnk"><a href="' . 
                                      $tmp_lnk . 
                                      '" data-ajax="false">[attachment]</a></div>';

                }else{

                    $tmp_attach_lnk = NULL;

                }

                if($oLIVING_STREAM->is_selected){

                    $tmp_select_handle='id="target_stream_comm" ';

                }else{

                    $tmp_select_handle = NULL;

                }

                $tmp_response_serial = $oDB_RESP->return_serial_from_SQL('USERS');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Straight from database 
                 * into method...no tweaks. 
                 *
                 */
                $tmp_elem_ts         = $oLIVING_STREAM->return_attribute_data('DATECREATED');
                $tmp_format_override = 'm.d.Y @ H:i:s';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We will try default. 
                 * Otherwise, we will plug 
                 * in 'K_STREAM' 
                 * $oDB_RESP->return_serial(xxxxx).
                 *
                 */
                $tmp_HTML = '<div ' . 
                            $tmp_select_handle.'class="single_stream_wrapper">
                    <div class="stream_content">' . 
                    $oLIVING_STREAM->return_attribute_data('STREAM_FORMATTED').'</div>
                    ' . $tmp_attach_lnk.'
                    <div class="stream_owner">by <a href="' . 
                    self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                    self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                    'account/dashboard/?uid=' . 
                    $oLIVING_STREAM->return_attribute_data('USER_ID') . 
                    '">' . $oDB_RESP->retrieve_data_by_id(
                                      $tmp_response_serial, 
                                      'USERS', 
                                      $oLIVING_STREAM->return_attribute_data('USER_ID'), 
                                      'FIRSTNAME_BLOB') . ' ' . 
                    $oDB_RESP->retrieve_data_by_id(
                               $tmp_response_serial, 
                               'USERS', 
                               $oLIVING_STREAM->return_attribute_data('USER_ID'), 
                               'LASTNAME_BLOB') . 
                    '</a></div>
                    <div class="stream_stamp_reply_wrapper">
                        <div class="stream_timestamp">' . 
                        self::$oUserEnvironment->oFINITE_EXPRESS->incarnate(
                                                                  'ELAPSED', 
                                                                  $tmp_elem_ts, 
                                                                  $tmp_format_override) . 
                        '</div>
                        <div class="stream_reply">' . 
                        $tmp_feeder_cnt.' <a href="#' . 
                        self::$replyFormHTML_ID . 
                        '" data-rel="popup" data-position-to="window" onclick="evifweb_stream_reply_iframe_populate(\'' . 
                        self::$oUserEnvironment->data_encrypt($oLIVING_STREAM->return_attribute_data('STREAM_ID')) . 
                        '\',\'IFRAME_' . 
                        self::$replyFormHTML_ID . 
                        '\');">Reply</a></div>

                    </div>
                    <div class="cb_5"></div>
                </div>
                    <div class="stream_hr"></div>';

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Desktop. 
                 *
                 */
                $tmp_HTML = NULL;

            break;

        }

        return $tmp_HTML;

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
    private function stream_EMAIL_HTML_translation(
                     $oLIVING_STREAM, 
                     $oDB_RESP)
    {

        $tmp_HTML = NULL;

        return $tmp_HTML;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function stream_order_HTML_opening($index)
    {

        error_log("stream (806) calling stream_order_HTML_opening(" . $index . ")");
        self::$current_stream_order++;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Track use of index for 
         * JavaScript DOM 
         * handle injection. 
         *
         */
        if($this->stream_vert_flow_DOM_handles == ''){

            $this->stream_vert_flow_DOM_handles = $index;

        }else{

            $this->stream_vert_flow_DOM_handles .= '|' . $index;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log("stream (707) Queue " . 
         *     "HTML for new order n stream " . 
         *     $index);
         */
        $tmp_HTML = '<div id="stream_' . 
                    $index . 
                    '_wrapper">
                    <div id="stream_vert_flow_' . 
                    $index .
                     '" class="vert_flow_wrapper">
                        <div id="stream_vert_flow_' . 
                        $index . 
                        '_repeat" style="background-image: url(\'' . 
                        self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                        self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                        'common/imgs/stream_raw_repeat_block_2px_01.png\'); background-repeat: repeat-y; width:17px; overflow: hidden;"></div>
                        <div class="stream_vert_flow_cap" style="background-image: url(\'' . 
                        self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
                        self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
                        'common/imgs/stream_raw_cap_block_2px_01.png\'); background-repeat: none; width:17px; height: 68px; overflow: hidden;"></div>
                    </div>
                    <div id="stream_order_' . 
                    $index . 
                    '_wrapper" class="stream_order_wrapper">';

        return $tmp_HTML;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function stream_order_HTML_closing()
    {

        error_log("stream (803) calling " . 
            "stream_order_HTML_closing() current_stream_order_depth[" . 
            self::$current_stream_order . 
            "]");

        self::$current_stream_order--;

        $tmp_HTML = '</div></div><div class="cb_20">' . 
                    '</div><div class="stream_hr_dsh">' . 
                    '</div><div class="cb_15"></div>';

        return $tmp_HTML;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function processStreamArray_recursive($stream_array)
    {

        $tmp_HTML = '';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Let's see what this does.
         *
         * Not sure if I want to OOP 
         * this test structure. 
         *
         * I just need to see what 
         * is in my output array. 
         *
         */
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log("stream (831) array contents ->" . 
         *     $html_elem_ARRAY[$i]);
         *
         */
        foreach($stream_array as 
            $key => $val)
        {

            if(is_array($val)){

                $tmp_HTML .= $this->processStreamArray_recursive($val);
                //error_log("stream (975) process Recursive...");

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (839) html_elem_ARRAY data[" . 
                 *     $key . "] [" . 
                 *     $val . "]");
                 *
                 */

                if(!isset($this->tmp_output_flag_ARRAY[$key])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * error_log("stream (853) output key[" . 
                     *     $key . "] crc[" . 
                     *     $this->hash($val) . 
                     *     "] len[" . 
                     *     strlen($val) . 
                     *     "]");
                     *
                     */

                    $this->tmp_output_flag_ARRAY[$key] = 1;
                    $tmp_HTML .= $val;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * error_log("stream (983) process non-recursive..." . 
                     *     $val);
                     *
                     */

                }

            }

        }

        return $tmp_HTML;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function stream_order_reverse_HTML_output($html_elem_ARRAY)
    {

        $tmp_HTML         = '';
        $tmp_output_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Flatten everything into a 
         * one dimensional array so 
         * that it can be flipped. 
         *
         */
        foreach($html_elem_ARRAY as 
            $key => $val)
        {

            if(is_array($val)){

                $tmp_output_ARRAY[] = $this->processStreamArray_recursive($val);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (885) order=0 HTML output _recursive() [" . 
                 *     $tmp_output . "]");
                 *
                 */
                #$tmp_HTML .= $tmp_output;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (889) order=0 HTML output [" . 
                 *     $val . "]");
                 *
                 */
                $tmp_output_ARRAY[] = $val;
                #$tmp_HTML .= $val;

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Reverse the array. 
         *
         */
        $tmp_output_ARRAY = array_reverse($tmp_output_ARRAY);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Now pull HTML out of 
         * the reversed array. 
         *
         */
        $tmp_loop_size = sizeof($tmp_output_ARRAY);
        for($i = 0; $i < $tmp_loop_size; $i++){

            $tmp_HTML .= $tmp_output_ARRAY[$i];

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return.
         *
         */
        return $tmp_HTML;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function OLD_stream_order_reverse_HTML_output($html_elem_ARRAY)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Flip array sequence. 
         *
         */
        $tmp_HTML        = '';
        $html_elem_ARRAY = array_reverse($html_elem_ARRAY);
        $tmp_loop_size   = sizeof($html_elem_ARRAY);

        $tmp_output_flag_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Convert to string. 
         *
         */
        for($i = 0; $i < $tmp_loop_size; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * For testing purposes, let's 
             * crawl through these array 
             * returns to investigate the 
             * string contents. 
             * 
             * I'm trying to figure out 
             * where the duplication of HTML 
             * output is occurring within my 
             * "refracted" or recursive 
             * processing.
             *
             *
             * 5
             *
             */
            if(is_array($html_elem_ARRAY[$i])){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Let's see what this does. 
                 * 
                 * Not sure if I want to OOP 
                 * this test structure. 
                 * 
                 * I just need to see what 
                 * is in my output array. 
                 *
                 */
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (831) array contents ->" . 
                 *     $html_elem_ARRAY[$i]);
                 *
                 */
                foreach($html_elem_ARRAY[$i] as 
                    $key => $val)
                {

                    if(is_array($val)){

                        foreach($val as 
                            $key1 => $val1)
                        {

                            if(is_array($val1)){

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * I can't keep making this 
                                 * nested structure "deeper". 
                                 * 
                                 * The architecture should 
                                 * be n+1. 
                                 *
                                 */
                                error_log("stream (859) go deeper...");
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * We need to replace this with 
                                 * some kind of recursive 
                                 * processing...just like 
                                 * HTML output. 
                                 *
                                 */
                                die();

                            }else{

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * error_log("stream (839) html_elem_ARRAY data[" . 
                                 *     $key1 . "] [" . 
                                 *     $val1 . "]");
                                 *
                                 */

                                if(!isset($tmp_output_flag_ARRAY[$key1])){

                                    error_log("stream (863) output key[" . 
                                        $key1 . "] crc[" . 
                                        $this->hash($val1) . "] len[" . 
                                        strlen($val1) . "] count->" . 
                                        substr_count($val1, 'Reply here no file attach'));

                                    $tmp_output_flag_ARRAY[$key1] = 1;
                                    $tmp_HTML .= $val1;

                                }

                            }

                        }

                    }else{

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * error_log("stream (839) html_elem_ARRAY data[" . 
                         *     $key . "] [" . 
                         *     $val . "]");
                         *
                         */

                        if(!isset($tmp_output_flag_ARRAY[$key])){

                            error_log("stream (936) output key[" . 
                                $key . "] crc[" . 
                                $this->hash($val) . "] len[" . 
                                strlen($val) . "] count->" . 
                                substr_count($val, 'Reply here no file attach'));

                            $tmp_output_flag_ARRAY[$key] = 1;
                            $tmp_HTML .= $val;

                        }

                    }

                }


            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (879) output key[x] crc[" . 
                 *     $this->hash($val) . 
                 *     "] len[" . 
                 *     strlen($val) . 
                 *     "] count->" . 
                 *     substr_count($val, 'Reply here no file attach'));
                 *
                 */

                $tmp_HTML .= $html_elem_ARRAY[$i];

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Return. 
         *
         */
        return $tmp_HTML;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function returnReplyIFRAME_HTML()
    {

        $tmp_HTML = '<div data-role="popup" id="' . 
                    self::$replyFormHTML_ID . 
                    '" data-overlay-theme="a" data-theme="a" data-corners="false" data-tolerance="15,15">
            <a href="#" data-rel="back" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
            <iframe id="IFRAME_' . 
            self::$replyFormHTML_ID . '" src="' . 
            self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP') . 
            self::$oUserEnvironment->getEnvParam('ROOT_PATH_CLIENT_HTTP_DIR') . 
            '/dashboard/kivotos/streams/reply_mobi.php?kid=' . 
            self::$oUserEnvironment->oHTTP_MGR->extractData($_GET, 'kid') . 
            '" width="480" height="320" seamless=""></iframe>
        </div>';

        return $tmp_HTML;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * This method will be 
     * called by streams within 
     * other streams within 
     * other streams. 
     *
     * Not sure of name for 
     * method yet...will depend 
     * on what happens inside. 
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function stream_output_processing(
             $stream_oARRAY, 
             $oDB_RESP)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Now for the fun part.
         *
         */
        foreach($stream_oARRAY as 
            $key => $oLIVING_STREAM)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * We need to begin support 
             * for HTML structure. 
             *
             * Each living_stream has 
             * all data elements + reply 
             * relations. 
             *
             * Stream order = 0 displayed 
             * from newest to oldest. 
             *
             * Let's secure this output 
             * through current OOP setup. 
             *
             * Get stream order = 0. 
             * 
             * Feeder streams should be 
             * processed deep within 
             * this situation. 
             *
             * Everything happens here, I think.
             *
             * This scenario overlooks fact 
             * that deep linking to 3rd order 
             * will never produce zero order 
             * stream...which we use here 
             * to begin output. 
             *
             *
             * 5
             *
             */
            if(!($oLIVING_STREAM->is_feeder_stream)){

                error_log("stream (1114) not a feeder stream->" . 
                    $oLIVING_STREAM->stream_html_dom_key . "|" . 
                    $oLIVING_STREAM->stream_content);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We are order = 0.
                 * 
                 * I am not sure what data type 
                 * tmp_buildOutput needs to be 
                 * for this (not sure if I want 
                 * string HTML data here). 
                 * 
                 * We will feel it out.
                 * 
                 * tmp_buildOutput is string type. 
                 * 
                 * This particular method should 
                 * return all(n+1) stream HTML 
                 * output data related to an 
                 * order 0 stream. 
                 *
                 *
                 * 5
                 *
                 */
                $this->buildOutputZERO(
                       $oLIVING_STREAM, 
                       $stream_oARRAY, 
                       $this, 
                       $oDB_RESP);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (854) output " . 
                 *     $oLIVING_STREAM->stream_html_dom_key . 
                 *     " count->" . 
                 *     substr_count($tmp_output1, 'Reply here no file attach'));
                 *
                 * Like pointing a mirror into a 
                 * mirror...let's see if we can sling 
                 * the stream object array around 
                 * between streams going deeper 
                 * and deeper to fill this out.
                 *
                 * $this->tmp_buildOutput_ARRAY[] = $tmp_output1;
                 *
                 * error_log("stream (794) " . 
                 *     $oLIVING_STREAM->stream_html_dom_key . 
                 *     " tmp_buildOutput_ARRAY size " . 
                 *     sizeof($this->tmp_buildOutput_ARRAY));
                 *
                 */

            }else{

                error_log("stream (1126) stream_output_processing() " . 
                    "we did nothing for " . 
                    $oLIVING_STREAM->stream_html_dom_key);

            }

/*            <div id="stream_00_wrapper">
 *                [VERT FLOW DIV - stream_vert_flow_00]
 *                <div id="stream_order_00_wrapper" class="stream_order_wrapper">
 *                    [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
 *                    [LIVING_STREAM OBJECT OUTPUT - ORDER = 0]
 *
 *                    <!-- AN ORDER N (FEEDER) STREAM -->
 *                    <div id="stream_n_wrapper">
 *                        [VERT FLOW DIV - stream_vert_flow_n]
 *                        <div id="stream_order_n_wrapper" class="stream_order_wrapper">
 *                            [LIVING_STREAM OBJECT OUTPUT - ORDER = 1]
 *
 *
 *
 *                        </div><!-- // END stream_order_n_wrapper
 *                    </div><!-- // END stream_n_wrapper
 *
 *
 *                </div><!-- // END stream_order_00_wrapper
 *            </div><!-- // END stream_00_wrapper
 */
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Lets see the order of streams.
             * Do we have valid feeder count?
             * 
             * It appears to be working!!
             *
             * error_log("stream (404) stream_output_processing DOM KEY[" . 
             *     $oLIVING_STREAM->stream_html_dom_key . 
             *     "] | FEEDER COUNT->" . 
             *     $oLIVING_STREAM->return_feeder_count() . 
             *     "|STREAM_CONTENT->" . 
             *     $oLIVING_STREAM->return_attribute_data('STREAM_CONTENT'));
             *
             */
        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Reverse order = 0 stream 
         * HTML output. We will do 
         * that later. 
         *
         * Let's get basic output 
         * working as expected. 
         *
         */
        $this->tmp_buildOutput = $this->stream_order_HTML_opening('00');
        $this->tmp_buildOutput .= $this->returnReplyIFRAME_HTML();
        $this->tmp_buildOutput .= $this->stream_order_reverse_HTML_output($this->tmp_buildOutput_ARRAY);
        $this->tmp_buildOutput .= $this->stream_order_HTML_closing();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log("stream (896) output stream_00_wrapper count->" . 
         *     substr_count($this->tmp_buildOutput, 'Reply here no file attach'));
         *
         */

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
    function stream_deep_output_processing(
             $stream_oARRAY, 
             $oDB_RESP)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Now for the fun part.
         *
         * error_log("(Reversing stream oArray...)");
         *
         */
        $stream_oARRAY = array_reverse($stream_oARRAY);
        foreach($stream_oARRAY as 
            $key => $oLIVING_STREAM)
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get stream order = 0. 
             * 
             * Feeder streams should be 
             * processed deep within this 
             * situation. Everything happens 
             * here, I think.
             * 
             * This scenario overlooks fact 
             * that deep linking to 3rd order 
             * will never produce zero order 
             * stream...which we use here to 
             * begin output.
             *
             * if(!($oLIVING_STREAM->is_feeder_stream)){
             *
             *    error_log("stream (1114) not a feeder stream->".$oLIVING_STREAM->stream_html_dom_key."|".$oLIVING_STREAM->stream_content);
             *
             *    We are order = 0.
             *    I am not sure what data type 
             *    tmp_buildOutput needs to be for 
             *    this (not sure if i want string 
             *    HTML data here). We will feel 
             *    it out. 
             *
             *    tmp_buildOutput is string type. 
             *    This particular method should 
             *    return all (i.e. n+1) stream 
             *    HTML output data related to 
             *    an order 0 stream.
             *
             *    if(!$tmp_parent_has_run){
             *       $this->buildOutputZERO(
             *              $oLIVING_STREAM, 
             *              $stream_oARRAY, 
             *              $this, 
             *              $oDB_RESP);
             *
             *       $tmp_parent_has_run = true;
             *
             *    }
             *
             *    error_log("stream (854) output " . 
             *        $oLIVING_STREAM->stream_html_dom_key . 
             *        " count->" . 
             *        substr_count($tmp_output1, 'Reply here no file attach'));
             *
             *    Like pointing a mirror into a 
             *    mirror...let's see if we can 
             *    sling the stream_oARRAY around 
             *    between streams going deeper 
             *    and deeper to fill this out.
             *
             *    $this->tmp_buildOutput_ARRAY[] = $tmp_output1; 
             *
             *    error_log("stream (794) " . 
             *        $oLIVING_STREAM->stream_html_dom_key . 
             *        " tmp_buildOutput_ARRAY size " . 
             *        sizeof($this->tmp_buildOutput_ARRAY));
             *        
             * }else{
             * 
             *    error_log("stream (1126) stream_output_processing() " . 
             *        "we did nothing for " . 
             *        $oLIVING_STREAM->stream_html_dom_key);
             *
             * }
             *
             */

            $tmp_feeder_count = sizeof($oLIVING_STREAM->feeder_stream_ARRAY);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * This is for n+1 processing. 
             * So I process 0-(n+1) first. 
             *
             * Then flip the output array.
             *
             */
            if($tmp_feeder_count > 0){

                $tmp_depth_key = $this->init_order_depth($oLIVING_STREAM->stream_html_dom_key);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Cycle through $stream_oARRAY 
                 * looking for feeders...we have 
                 * this already...actually.
                 * 
                 * Food is here so....being slow....
                 * We are order n here. 
                 *
                 */
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (474) stream " . 
                 *     $oLIVING_STREAM->stream_html_dom_key . 
                 *     " has " . 
                 *     $tmp_feeder_count . 
                 *     " feeders.");
                 *
                 */
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * for($i = 0; $i < $tmp_feeder_count; $i++){
                 * error_log("stream (456) oSTR::feeder_stream_ARRAY[" . 
                 *     $i . "] ->" . 
                 *     $oLIVING_STREAM->feeder_stream_ARRAY[$i]);
                 *
                 */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This order 0 stream has 
                 * feeder streams...they 
                 * also may have feeder 
                 * streams....and those 
                 * streams could have 
                 * feeders too...etc.
                 *
                 * Store raw HTML in this 
                 * array. This should 
                 * return all HTML for 
                 * stream + n+1 here. 
                 *
                 *
                 * 5
                 *
                 */
                /*$stream_manager->tmp_buildOutput_ARRAY[] = $this->replicate_N(
                 *                                                  $oLIVING_STREAM, 
                 *                                                  $stream_oARRAY, 
                 *                                                  $stream_manager, 
                 *                                                  $oDB_RESP);
                 */
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (482) buildOutputZERO (n+1) for " . 
                 *     $oLIVING_STREAM->stream_html_dom_key);
                 *
                 */
                error_log("stream (1237) replicate_N being called by buildOutputZERO...");
                if(!isset($this->replicate_flag_ARRAY[$oLIVING_STREAM->stream_html_dom_key])){

                    $this->replicate_flag_ARRAY[$oLIVING_STREAM->stream_html_dom_key] = 1;
                    $this->tmp_buildOutput_ARRAY[] = $this->replicate_N(
                                                            $oLIVING_STREAM, 
                                                            $stream_oARRAY, 
                                                            $this, 
                                                            $oDB_RESP, 
                                                            $tmp_depth_key);

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Process order 0 with no 
                 * feeder streams. Let's try 
                 * to get this working as 
                 * proof of concept for 
                 * this architecture. 
                 *
                 */
                /*$stream_manager->tmp_buildOutput_ARRAY[] = $this->replicate_0(
                 *                                                  $oLIVING_STREAM, 
                 *                                                  $stream_oARRAY, 
                 *                                                  $stream_manager, 
                 *                                                  $oDB_RESP);
                 */
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (494) buildOutputZERO for " . 
                 *     $oLIVING_STREAM->stream_html_dom_key);
                 *
                 */
                error_log("stream (1250) replicate_0 being called by buildOutputZERO...");
                $this->tmp_buildOutput_ARRAY[] = $this->replicate_0(
                                                        $oLIVING_STREAM, 
                                                        $stream_oARRAY, 
                                                        $this, 
                                                        $oDB_RESP);

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Reverse order = 0 stream 
         * HTML output. We will do 
         * that later. Let's get 
         * basic output working 
         * as expected. 
         *
         */
        $this->tmp_buildOutput = $this->stream_order_HTML_opening('00');
        $this->tmp_buildOutput .= $this->returnReplyIFRAME_HTML();
        $this->tmp_buildOutput .= $this->stream_order_reverse_HTML_output($this->tmp_buildOutput_ARRAY);
        $this->tmp_buildOutput .= $this->stream_order_HTML_closing();

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
    private function assemble_output(
                     $channel, 
                     $devicetype, 
                     $streamtype, 
                     $response_profile, 
                     $profile_field, 
                     $oDB_RESP)
    {
        /* $channel[WEB, EMAIL, SMS],
         * $devicetype[m, d],
         * $streamtype[KIVOTOS, ASSET, USER, CLIENT, LANG],
         * $oDB_RESP[OBJ]
         *
         *
         * Check for conditions 
         * indicating n=0 order 
         * stream data. 
         * 
         * I forgot...all my stream data 
         * including relationships are 
         * here in this object. 
         * 
         * The query is a join of 2 tables:
         * `comm_stream`.`STREAM_ID`,
         * `comm_stream`.`STREAM_TYPE`,
         * `comm_stream`.`CLIENT_ID`,
         * `comm_stream`.`USER_ID`,
         * `comm_stream`.`ISACTIVE`,
         * `comm_stream`.`KIVOTOS_ID`,
         * `comm_stream`.`ASSET_ID`,
         * `comm_stream`.`STREAM_CONTENT`,
         * `comm_stream`.`STREAM_FORMATTED`,
         * `comm_stream`.`FEEDER_STREAM_COUNT`,
         * `comm_stream`.`I_FEED_STREAM_ID`,
         * `comm_stream`.`DATEMODIFIED`,
         * `comm_stream`.`DATECREATED`,
         * `comm_stream_flow`.`FLOW_ID`,
         * `comm_stream_flow`.`CLIENT_ID` AS `CLIENT_ID_FLOW`,
         * `comm_stream_flow`.`STREAM_ID` AS `STREAM_ID_FLOW`,
         * `comm_stream_flow`.`FEEDER_STREAM_ID`';
         *
         */

        if($streamtype == 'DEEP'){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Need to perform output 
             * processing using cumulative 
             * data architecture. 
             *
             */
            $tmp_living_stream_oARRAY = array();
            $tmp_loop_size            = $oDB_RESP->return_sizeof_aggregate('DEEP_STREAM_DATA');

            if(!$tmp_loop_size){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * If false....process 
                 * stream from response 
                 * object non-aggregation 
                 * pathway. 
                 *
                 */
                error_log("stream (1182) deep but not aggregate...");

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * $tmp_loop_size = $oDB_RESP->return_sizeof($oDB_RESP->return_serial('STREAM_DATA'), 'COMM_STREAM');
                 *
                 */
                $tmp_loop_size = $oDB_RESP->return_sizeof($oDB_RESP->return_serial('STREAM_PARENT_DATA'), 'COMM_PARENT_STREAM');

                for($ii = 0; $ii < $tmp_loop_size; $ii++){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Ok...should maybe be something 
                     * like this upon construction, 
                     * where each stream database data 
                     * result should be translated 
                     * into a living_stream object to 
                     * represent that element.
                     *
                     * Let's build the constructor:
                     * $tmp_stream = new living_stream(...
                     *
                     *
                     * 5
                     *
                     */
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Edit: Renamed living_stream() to 
                     *       crnrstn_living_streams_of_communication(), 
                     *       and put responsibility for 
                     *       class objectification onto 
                     *       the CLR-SSL Resource Registry. 
                     *
                     *
                     *       $tmp_stream = new living_stream(
                     *                         $channel, 
                     *                         $devicetype, 
                     *                         $oDB_RESP->return_serial('STREAM_DATA'), 
                     *                         'COMM_STREAM', 
                     *                         $oDB_RESP, 
                     *                         $ii);
                     *
                     *       5 :: Wednesday, June 17, 2026 @ 2351 hrs.
                     *
                     */

                    // 5 :: Wednesday, June 18, 2026 @ 0003 hrs.
                    self::$R_registry_usr->compound_ointment(
                                           'crnrstn_living_streams_of_communication', 
                                           $channel, 
                                           $devicetype, 
                                           $oDB_RESP->return_serial('STREAM_DATA'), 
                                           'COMM_STREAM', 
                                           $oDB_RESP, 
                                           $ii);

                    // 5 :: Wednesday, June 18, 2026 @ 0004 hrs.
                    self::$R_registry_usr->anoint(
                                           'crnrstn_living_streams_of_communication',
                                           $tmp_stream);

                    error_log("stream (1311) id = " . $tmp_stream->stream_html_dom_key);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We need to call out 
                     * visually the 
                     * target stream. 
                     *
                     */
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * error_log("stream (1216) marking selected stream[" . self::$oUserEnvironment->oHTTP_MGR->extractData($_GET, 'sid') . "]");
                     *
                     */
                    $tmp_stream->mark_selected(self::$oUserEnvironment->oHTTP_MGR->extractData($_GET, 'sid'));

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We can loop through this 
                     * array now when we need to 
                     * put our hands on streams.
                     *
                     * Should we use stream_id 
                     * as key here? 
                     *
                     */
                    $tmp_living_stream_oARRAY[$tmp_stream->return_attribute_data('STREAM_ID')] = $tmp_stream;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Stream A -> I_FEED_STREAM_ID stream B
                     * Update stream B with ref to stream A. 
                     * 
                     * We are processing newest to 
                     * oldest, so we will never have the
                     * parent stream when processing child. 
                     * 
                     * Consider reversing order so that you 
                     * can reference the parent stream object
                     * by ID...otherwise, you will have to 
                     * traverse the objects more to sort 
                     * this out. Done.
                     * 
                     * Either make tmp_living_stream_oARRAY 
                     * private, or pass through this method. 
                     *
                     */
                    $tmp_i_feed_id = $tmp_stream->return_attribute_data( 'I_FEED_STREAM_ID');

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * So I think that first reply 
                     * form submission test may 
                     * have entered NULL param for 
                     * something in my database, 
                     * and breaking this 
                     * functionality with NULL. 
                     * 
                     * Let's look. 
                     *
                     */
                    if(isset($tmp_i_feed_id) && 
                        ($tmp_i_feed_id != ''))
                    {

                        #error_log("stream (953) tmp_i_feed_id[".$tmp_i_feed_id."]");
                        $tmp_stream_id = $tmp_stream->return_attribute_data('STREAM_ID');
                        $tmp_living_stream_oARRAY = $this->injest_stream_relation(
                                                           $tmp_stream_id, 
                                                           $tmp_i_feed_id, 
                                                           $tmp_living_stream_oARRAY);

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We have all stream data 
                 * in $tmp_living_stream_ARRAY 
                 * including relations. 
                 *
                 * Now to process the array 
                 * for HTML output. 
                 *
                 */
                $this->stream_output_processing(
                       $tmp_living_stream_oARRAY, 
                       $oDB_RESP);

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (1256) tmp_loop_size=" . 
                 *     $tmp_loop_size);
                 *
                 */

                for($ii = 0; $ii < $tmp_loop_size; $ii++){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Ok...should maybe be 
                     * something like this:
                     * 
                     * Upon construction, each stream 
                     * database data result should be 
                     * translated into a living_stream 
                     * object to represent that element.
                     *
                     * Let's build the constructor.
                     *
                     */
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Edit: Renamed living_stream to 
                     *       crnrstn_living_streams_of_communication,
                     *       and put responsibility for 
                     *       class objectification onto 
                     *       the CLR-SSL Resource Registry. 
                     *
                     *       $tmp_stream = new crnrstn_living_streams_of_communication(
                     *                         $channel, 
                     *                         $devicetype, 
                     *                         $oDB_RESP->return_aggregate_serial('DEEP_STREAM_DATA', $ii), 
                     *                         'DEEP_STREAM_DATA', 
                     *                         $oDB_RESP, 
                     *                         $ii,
                     *                         true);
                     *
                     *       5 :: Wednesday, June 17, 2026 @ 2352 hrs.
                     *
                     */

                    // 5 :: Thursday, June 18, 2026 @ 0005 hrs.
                    self::$R_registry_usr->compound_ointment(
                                           'crnrstn_living_streams_of_communication', 
                                           $channel, 
                                           $devicetype, 
                                           $oDB_RESP->return_aggregate_serial('DEEP_STREAM_DATA', $ii), 
                                           'DEEP_STREAM_DATA', 
                                           $oDB_RESP, 
                                           $ii,
                                           true);

                    // 5 :: Thursday, June 18, 2026 @ 0005 hrs.
                    self::$R_registry_usr->anoint(
                                           'crnrstn_living_streams_of_communication',
                                           $tmp_stream);

                    $tmp_stream->mark_selected(self::$oUserEnvironment->oHTTP_MGR->extractData($_GET, 'sid'));

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We can loop through this 
                     * array now when we need to 
                     * put our hands on streams.
                     *
                     * Should we use stream_id 
                     * as key here?
                     *
                     *
                     * 5
                     *
                     */
                    $tmp_living_stream_oARRAY[$tmp_stream->return_attribute_data('STREAM_ID')] = $tmp_stream;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Stream A -> I_FEED_STREAM_ID stream B.
                     *
                     * Update stream B with ref to stream A. 
                     * We are processing newest to 
                     * oldest, so we will never have the
                     * parent stream when processing child. 
                     *
                     * Consider reversing order so that you 
                     * can reference the parent stream object
                     * by ID...otherwise, you will have to 
                     * traverse the objects more to sort 
                     * this out. Done.
                     *
                     * Either make tmp_living_stream_oARRAY 
                     * private, or pass through this method.
                     *
                     */
                    $tmp_i_feed_id = $tmp_stream->return_attribute_data('I_FEED_STREAM_ID');

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * So I think that first reply 
                     * form submission test may 
                     * have entered NULL param for 
                     * something in my database, 
                     * and breaking this 
                     * functionality with NULL. 
                     *
                     * Let's look. 
                     *
                     */
                    if(isset($tmp_i_feed_id) && 
                        ($tmp_i_feed_id != ''))
                    {

                        #error_log("stream (953) tmp_i_feed_id[".$tmp_i_feed_id."]");
                        $tmp_stream_id            = $tmp_stream->return_attribute_data('STREAM_ID');
                        $tmp_living_stream_oARRAY = $this->injest_stream_relation(
                                                           $tmp_stream_id, 
                                                           $tmp_i_feed_id, 
                                                           $tmp_living_stream_oARRAY);

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * We have all stream data in 
                 * $tmp_living_stream_ARRAY 
                 * including relations.
                 *
                 * Now to process the array 
                 * for HTML output. 
                 *
                 */
                $this->stream_deep_output_processing(
                       $tmp_living_stream_oARRAY, 
                       $oDB_RESP);

            }

            return $this->tmp_buildOutput;

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * The way I am doing this is 
             * the hard way I think. I need 
             * to have an OOP representation 
             * of this data for use.
             *
             * This will be challenging but 
             * soo rewarding once completed. 
             *
             */
            $serial                   = $oDB_RESP->return_serial('STREAM_DATA');
            $i_have_replies           = false;
            $tmp_living_stream_oARRAY = array();

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get count of number of n=0 
             * stream data. We don't need 
             * to calculate count for 
             * higher order...use 
             * comm_stream.FEEDER_STREAM_COUNT,
             * ok. 
             * 
             * So I guess we start from the 
             * top here and begin implementing 
             * each component. 
             * 
             * There may be multiple iterations 
             * of development to get this in 
             * the right spot.
             *
             * Yes, it is dropping here. 
             * Pulling stream count from the 
             * oDB_RESP object. 
             *
             */
            #$tmp_stream_count = $this->return_stream_count($serial, $oDB_RESP);

            $tmp_dbresp_profile_ARRAY = $oDB_RESP->return_profiles($serial);
            $tmp_loop_size            = sizeof($tmp_dbresp_profile_ARRAY);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * It is possible...multiple 
             * stream types (multiple query 
             * profiles) returned. 
             *
             * Loop through all.
             *
             */
            for($i = 0; $i < $tmp_loop_size; $i++){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * I think within this loop, we 
                 * need to do our OOP data 
                 * structure build out to 
                 * support HTML output. Yes!
                 *
                 * Get database response count. 
                 *
                 */
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * error_log("stream (208) assemble_output() serial[" . 
                 *     $serial . 
                 *     "] profile[" . 
                 *     $tmp_dbresp_profile_ARRAY[$i] . 
                 *     "]");
                 *
                 */
                $tmp_stream_loop_size = $oDB_RESP->return_sizeof(
                                                   $serial, 
                                                   $tmp_dbresp_profile_ARRAY[$i]);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * It is possible that within 
                 * this loop, I will build my 
                 * stream objects. 
                 *
                 * Can it happen before (not really)?
                 *
                 * Loop through raw stream 
                 * data - all database output.
                 *
                 */
                for($ii = 0; $ii < $tmp_stream_loop_size; $ii++){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Ok...should maybe be something 
                     * like this:
                     *
                     * Upon construction, each stream 
                     * database data result should be 
                     * translated into a living_stream 
                     * object to represent that element
                     * let's build the constructor. 
                     *
                     */
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Edit: Renamed new living_stream to 
                     *       new crnrstn_living_streams_of_communication, 
                     *       and put responsibility for 
                     *       class objectification onto 
                     *       the CLR-SSL Resource Registry. 
                     *       5 :: Thursday, June 18, 2026 @ 0011 hrs.
                     *
                     *       $tmp_stream = new crnrstn_living_streams_of_communication(
                     *                         $channel, 
                     *                         $devicetype, 
                     *                         $serial, 
                     *                         $tmp_dbresp_profile_ARRAY[$i], 
                     *                         $oDB_RESP, 
                     *                         $ii);
                     */

                    // 5 :: Thursday, June 18, 2026 @ 0008 hrs.
                    self::$R_registry_usr->compound_ointment(
                                           'crnrstn_living_streams_of_communication', 
                                           $channel, 
                                           $devicetype, 
                                           $serial, 
                                           $tmp_dbresp_profile_ARRAY[$i], 
                                           $oDB_RESP, 
                                           $ii);

                    // 5 :: Thursday, June 18, 2026 @ 0008 hrs.
                    self::$R_registry_usr->anoint(
                                           'crnrstn_living_streams_of_communication',
                                           $tmp_stream);

                    error_log("stream (1437) id = " . $tmp_stream->stream_html_dom_key);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We can loop through this array 
                     * now when we need to put our 
                     * hands on streams.
                     *
                     * Should we use STREAM_ID 
                     * as key here? 
                     *
                     *
                     * 5
                     *
                     */
                    $tmp_living_stream_oARRAY[$tmp_stream->return_attribute_data('STREAM_ID')] = $tmp_stream;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Stream A -> I_FEED_STREAM_ID stream B.
                     * Update stream B with ref to stream A. 
                     * We are processing newest to oldest, 
                     * so we will never have the parent stream 
                     * when processing child. 
                     * 
                     * Consider reversing order so that you can 
                     * reference the parent stream object
                     * by ID...otherwise, you will have to 
                     * traverse the objects more to sort 
                     * this out. Done.
                     *
                     * Either make tmp_living_stream_oARRAY 
                     * private, or pass through this method. 
                     *
                     */
                    $tmp_i_feed_id = $tmp_stream->return_attribute_data( 'I_FEED_STREAM_ID');

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * So I think that first reply 
                     * form submission test may 
                     * have entered null param for 
                     * something in my database, 
                     * and then breaking this 
                     * functionality with NULL. 
                     *
                     * Let's look.
                     *
                     */
                    if(isset($tmp_i_feed_id) && 
                        ($tmp_i_feed_id != ''))
                    {

                        #error_log("stream (953) tmp_i_feed_id[" . $tmp_i_feed_id . "]");
                        $tmp_stream_id            = $tmp_stream->return_attribute_data('STREAM_ID');
                        $tmp_living_stream_oARRAY = $this->injest_stream_relation(
                                                           $tmp_stream_id, 
                                                           $tmp_i_feed_id, 
                                                           $tmp_living_stream_oARRAY);
                    }

                }

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * We have all stream data in 
             * $tmp_living_stream_ARRAY 
             * including relations. 
             *
             * Now to process the array 
             * for HTML output. 
             *
             */
            $this->stream_output_processing(
                   $tmp_living_stream_oARRAY, 
                   $oDB_RESP);

            return $this->tmp_buildOutput;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * I don't need to run the 
             * rest of this code. Below is a 
             * guide..but we are going in 
             * another direction. 
             * 
             * Working on testing output 
             * will happen above...perhaps?
             *
             * Anyways...map_stream_relationships 
             * will be interesting...I mean fun!
             *
             * We need to do this differently:
             * $this->init_stream_output(
             *        [ORDER], 
             *        [MAX_STREAM_DISPLAY_CNT], 
             *        [oDB_RESP]);
             *
             */
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
    private function showStreamModified(
                     $i, 
                     $profile, 
                     $serial, 
                     $oDB_RESP)
    {

        if($oDB_RESP->return_data_element(
                      $serial, 
                      $profile, 
                      'DATEMODIFIED', 
                      $i) > $oDB_RESP->return_data_element(
                                       $serial, 
                                       $profile, 
                                       'DATECREATED', 
                                       $i))
        {

            return '<div class="cb"></div><div class="stream_modified">
                            Modified ' . 
                            date("m.d.Y @ H:i:s", strtotime($oDB_RESP->return_data_element(
                                                                       $serial, 
                                                                       $profile, 
                                                                       'DATEMODIFIED', 
                                                                       $i))) . '
                            </div>';

        }else{

            return NULL;

        }

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * I will need more info to 
     * build the link. We can 
     * handle that l8tr. 
     *
     * This is a test. We will 
     * be using different 
     * technology for this 
     * functionality. 
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
    private function showStreamEditLnk(
                     $stream_userid, 
                     $oDB_RESP)
    {

        if($stream_userid == self::$oUserEnvironment->oSESSION_MGR->getSessionParam('USERID')){

            return '<div class="cb"></div>

                            <a href="#popupMenu" data-rel="popup" data-transition="slideup" class="stream_edit_lnk">edit</a>
                            <div data-role="popup" id="popupMenu" data-theme="a" class="ui-content">
                                <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                <form action="#" method="post" name="edit_stream" id="edit_stream"  enctype="multipart/form-data">
                                    <label for="stream">Reply to stream</label>
                                    <textarea cols="40" rows="3" name="stream" id="stream"></textarea>
                                    <p style="padding-top: 0; margin-top: 0;"><a href="#" id="open-popup_mention" class="clickable-area" style="text-decoration:none; text-underline:none;">@mention</a></p>

                                    <div data-role="popup" id="popup_mention" data-arrow="true">
                                        <p><strong>Insert user mention</strong></p>
                                        <input data-type="search" id="divOfMentions-input">
                                        <!-- form_component_insert_append([popupID],[id],[type],[value to append]) -->
                                        <!-- WE COULD PUT A JQUERY MOBILE FILTER COMPONENT HERE IF THE # OF NAMES GETS TOO BIG FOR USABILITY. WE SHOULD TEST TO
                                        SEE WHERE IT STARTS TO SUCK...HOW MANY USER REFERENCES -->

                                        <!-- STREAM MANAGER CLASS SHOULD ALSO HANDLE THE @MENTIONS -->
                                        <div class="stream_mentions" data-filter="true" data-input="#divOfMentions-input">
                                            <p><a href="#" onclick="evifweb_form_component_content_append(\'popup_mention\',\'textarea\',\'stream\',\'@JonathanHarris\');">Jonathan Harris</a>, e<span class="the_V">V</span>ifweb</p>
                                            <p><a href="#" onclick="evifweb_form_component_content_append(\'popup_mention\',\'textarea\',\'stream\,\'@JonHarris\');">Jon Harris</a>, client name 15 char...</p>
                                            <p><a href="#" onclick="evifweb_form_component_content_append(\'popup_mention\',\'textarea\',\'stream\',\'@User00Name00\');">User00 Name00</a>, client name 15 char...</p>
                                        </div>
                                    </div>

                                    <div class="cb_5"></div>
                                    <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="submit">SUBMIT REPLY</button>
                                    <input type="hidden" name="st" value="' . 
                                    self::$oUserEnvironment->data_encrypt('KIVOTOS') . '">
                                    <input type="hidden" name="cid" value="' . 
                                    self::$oUserEnvironment->data_encrypt($oDB_RESP->return_data_element($oDB_RESP->return_serial('K_STREAM'), 'KIVOTOS', 'CLIENT_ID')) . '">
                                    <input type="hidden" name="kid" value="' . 
                                    self::$oUserEnvironment->data_encrypt(self::$oUserEnvironment->oHTTP_MGR->extractData($_GET, 'kid')) . '">
                                    <input type="hidden" name="postid" value="edit_stream">
                                </form>
                            </div>

                            ';

        }else{

            return NULL;

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
    private function return_stream_count(
                     $serial, 
                     $oDB_RESP)
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Get count of number of 
         * stream elements that 
         * need to be evaluated 
         * for n=0 count. 
         *
         */
        $tmp_stream_count         = 0;
        $tmp_dbresp_profile_ARRAY = $oDB_RESP->return_profiles($serial);
        $tmp_loop_size            = sizeof($tmp_dbresp_profile_ARRAY);

        for($i = 0; $i < $tmp_loop_size; $i++){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Get database response count.
             * error_log("stream (370) return_stream_count() serial[" . 
             *     $serial . 
             *     "] profile[" . 
             *     $tmp_dbresp_profile_ARRAY[$i] . 
             *     "]");
             *
             * Let's just pass in array. It should 
             * work. So we are passing in 
             * 'COMM_STREAM_X'...not check-summed...
             * ...just like the rest of the site. 
             *
             */
            $tmp_profile = $tmp_dbresp_profile_ARRAY[$i];
            $tmp_stream_count += $oDB_RESP->return_sizeof(
                                            $serial, 
                                            $tmp_profile);

        }

        return $tmp_stream_count;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function mention_parseSanitize($str)
    {

        $patterns = array();
        $patterns[0] = ",";
        $patterns[1] = '"';
        $patterns[2] = '=';
        $patterns[3] = '{';
        $patterns[4] = '}';
        $patterns[5] = '(';
        $patterns[6] = ')';
        $patterns[7] = '.';
        $patterns[8] = '[';
        $patterns[9] = ']';
        $patterns[10] = '\n';
        $patterns[11] = '\r';
        $patterns[12] = '\'';
        $patterns[13] = '/';
        $patterns[14] = '#';
        $patterns[15] = ';';
        $patterns[16] = ':';
        $patterns[17] = '>';
        $patterns[18] = '<';
        $patterns[19] = '$';
        $patterns[20] = '*';
        $patterns[21] = '+';
        $patterns[22] = '-';
        $patterns[23] = '~';
        $patterns[24] = '\`';

        $replacements = array();
        $replacements[0] = ' ';
        $replacements[1] = ' ';
        $replacements[2] = ' ';
        $replacements[3] = ' ';
        $replacements[4] = ' ';
        $replacements[5] = ' ';
        $replacements[6] = ' ';
        $replacements[7] = ' ';
        $replacements[8] = ' ';
        $replacements[9] = ' ';
        $replacements[10] = ' ';
        $replacements[11] = ' ';
        $replacements[12] = ' ';
        $replacements[13] = ' ';
        $replacements[14] = ' ';
        $replacements[15] = ' ';
        $replacements[16] = ' ';
        $replacements[17] = ' ';
        $replacements[18] = ' ';
        $replacements[19] = ' ';
        $replacements[20] = ' ';
        $replacements[21] = ' ';
        $replacements[22] = ' ';
        $replacements[23] = ' ';
        $replacements[24] = ' ';

        $str = str_replace($patterns, $replacements, $str);
        return $str;

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