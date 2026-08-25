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
 * CLASS DEFINITION :: crnrstn_living_streams_of_communication
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: October 9, 2018 @ 1446 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Living Streams
 *                     of Communications Services
 *                     Layer of the CRNRSTN ::
 *                     Lightsaber SOAP Services Layer
 * DESCRIPTION      :: The CRNRSTN :: Living
 *                     Streams of Communications
 *                     Services Layer of the
 *                     CRNRSTN :: Lightsaber SOAP
 *                     Services Layer sits on top
 *                     of a MySQL database powered
 *                     communications data
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
 *                     Wednesday, July 24, 2024 @ 0235 hrs.
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
class crnrstn_living_streams_of_communication 
{

    public $oCRNRSTN_LOGGING;
    private static $max_stream_depth;
    private static $max_reply_count;

    public $data_attribute_ARRAY = array();
    public $feeder_stream_ARRAY = array();
    public $is_feeder_stream = true;
    public $queued_for_display = false;
    public $stream_id;
    public $stream_content;
    public $stream_html_dom_key;
    public $channel;
    public $devicetype;
    public $is_selected = false;

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
    function __construct(
             $channel, 
             $devicetype,
             $serial, 
             $resp_profile,
             $oDB_RESP, 
             $pos,
             $is_aggregate = false)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the class resource, 
         *       crnrstn_living_streams_comm, to 
         *       crnrstn_living_streams_of_communication. 
         *       5 :: Wednesday, June 17, 2026 @ 1034 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the class resource file, 
         *       crnrstn.living_streams_comm.class.php, to 
         *       crnrstn.living_streams_of_communication.class.php. 
         *       5 :: Wednesday, June 17, 2026 @ 1037 hrs.
         *
         */

        try{

            $this->channel = $channel;
            $this->devicetype = $devicetype;

            $tmp_oENV = $oDB_RESP->return_oENV();

            $tmp_field_ARRAY = $oDB_RESP->return_field_names_ARRAY($serial);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Extract data from 
             * $oDB_RESP object for this 
             * stream communication. 
             *
             */
            if($is_aggregate){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * This agg return method 
                 * provides great record 
                 * level insight. 
                 *
                 * 0 - PROFILE
                 * 1 - DATA
                 * 2 - FIELDS
                 *
                 */
                $tmp_row_data = $oDB_RESP->return_aggregate_element(
                                           $resp_profile, 
                                           $pos); 

                foreach($tmp_field_ARRAY as 
                    $key => $SQL_fieldname)
                {

                    $this->injest_data_element(
                           $SQL_fieldname, 
                           $tmp_row_data[1][$key]);

                    if($SQL_fieldname == 'STREAM_ID'){

                        $this->stream_id = $tmp_row_data[1][$key];

                    }else{

                        if($SQL_fieldname == 'STREAM_CONTENT'){

                            $this->stream_content = $tmp_row_data[1][$key];

                        }

                    }

                }

            }else{

                foreach($tmp_field_ARRAY as 
                    $key => $SQL_fieldname)
                {

                    # $this->consume_data_element([FIELDNAME], [VALUE])
                    $this->injest_data_element(
                           $SQL_fieldname, 
                           $oDB_RESP->return_data_element(
                                      $serial, 
                                      $resp_profile, 
                                      $SQL_fieldname, 
                                      $pos));

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * For debugging. 
                 *
                 */
                $this->stream_id = $oDB_RESP->return_data_element(
                                              $serial, 
                                              $resp_profile, 
                                              'STREAM_ID', 
                                              $pos);
                $this->stream_content = $oDB_RESP->return_data_element(
                                                   $serial, 
                                                   $resp_profile, 
                                                   'STREAM_CONTENT', 
                                                   $pos);

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Create HTML DOM key. 
             * Can also serve as 
             * stream DOM id. 
             *
             */
            $this->stream_html_dom_key = 'LVNGSTRM' . 
                                         $pos . '_' . 
                                         $this->hash($this->return_attribute_data('STREAM_ID'));

            /* Now that we have 
             * all the data. 
             * 
             * Some meta processing. 
             *
             *
             *error_log('stream [lnum ' . 
             *    __LINE__ . 
             *    '] [mthd ' . 
             *    __METHOD__ . 
             *    ']IDs STREAM_ID_FLOW->' . 
             *    crc32($this->return_attribute_data('STREAM_ID_FLOW')) . 
             *    '|FEEDER_STREAM_ID->' . 
             *    crc32($this->return_attribute_data('FEEDER_STREAM_ID')));
             *
             */
            if($this->return_attribute_data('STREAM_ID_FLOW') == $this->return_attribute_data('FEEDER_STREAM_ID')){

                $this->is_feeder_stream = false;

            }

            switch($this->channel){
                case 'WEB':

                    if($this->devicetype == 'm'){

                        self::$max_stream_depth = (int) $tmp_oENV->getEnvParam('MOBILE_WEB_STREAM_DEPTH');
                        self::$max_reply_count = (int) $tmp_oENV->getEnvParam('MOBILE_WEB_MAX_REPLY_COUNT');

                    }else{

                        self::$max_stream_depth = (int) $tmp_oENV->getEnvParam('DESKTOP_WEB_STREAM_DEPTH');
                        self::$max_reply_count = (int) $tmp_oENV->getEnvParam('DESKTOP_WEB_MAX_REPLY_COUNT');

                    }

                break;
                case 'EMAIL':
                break;
                case 'SMS':
                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The channel [' . 
                        $channel .
                        '] does not exist for stream ' . 
                        'data output processing.');

                break;

            }

        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * CRNRSTN :: Lightsaber RoCEv2 
             * SOAP Services Layer (CLR-SSL) 
             * Logging Services Layer. 
             *
             *
             * Allow the CLR-SSL to handle 
             * this exception per the logging 
             * profile configuration for 
             * this application. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1607 hrs.
             *
             */
            $this->oCRNRSTN_LOGGING->captureNotice(
                                     'living_stream->__construct()', 
                                     LOG_EMERG, 
                                     $e->getMessage());

        }

        /* `comm_stream`.`STREAM_ID`,
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
         * `comm_stream_flow`.`FEEDER_STREAM_ID`'
         *
         * $channel[WEB, EMAIL, SMS],
         * $devicetype[m, d],
         * $streamtype[KIVOTOS, ASSET, USER, CLIENT, LANG],
         * $oDB_RESP[OBJ]
         *
         * $oCRNRSTN->defineEnvResource('LOCALHOST_MAC', 'MOBILE_WEB_STREAM_DEPTH', 3);
         * $oCRNRSTN->defineEnvResource('LOCALHOST_MAC', 'MOBILE_WEB_MAX_REPLY_COUNT', 2);
         * $oCRNRSTN->defineEnvResource('LOCALHOST_MAC', 'DESKTOP_WEB_STREAM_DEPTH', 7);
         * $oCRNRSTN->defineEnvResource('LOCALHOST_MAC', 'DESKTOP_WEB_MAX_REPLY_COUNT', 5);
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
    function mark_selected($stream_id)
    {

        $tmp_id = $this->data_attribute_ARRAY[$this->hash('STREAM_ID')];

        if($stream_id==$tmp_id){

            error_log('stream (' . 
                __LINE__ . 
                ') I am selected [' . 
                $stream_id . ']');

            $this->is_selected = true;

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
    function return_attribute($var)
    {

        switch($var){
            case 'max_stream_depth':

                return self::$max_stream_depth;

            break;
            case 'max_reply_count':

                return self::$max_reply_count;

            break;

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
    function return_attribute_data($field)
    {

        try{

            if(isset($this->data_attribute_ARRAY[$this->hash($field)])){

                return $this->data_attribute_ARRAY[$this->hash($field)];

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * No problem. Basic NULL 
                 * field will throw err. 
                 * This does not necessarily 
                 * indicate a structure error. 
                 *
                 *
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 * 
                 * throw new Exception('Field [' . 
                 *     $field . 
                 *     '] does not exist for ' . 
                 *     'this stream data element ' . 
                 *     'STREAM_ID=' . 
                 *     $this->stream_id);
                 *
                 */

            }

        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * CRNRSTN :: Lightsaber RoCEv2 
             * SOAP Services Layer (CLR-SSL) 
             * Logging Services Layer. 
             *
             * Allow the CLR-SSL to handle 
             * this exception per the 
             * logging profile configuration 
             * for this application. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1608 hrs.
             *
             */
            $this->oCRNRSTN_LOGGING->captureNotice(
                                     'living_stream->return_data_element()', 
                                     LOG_EMERG, 
                                     $e->getMessage());

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
    function merge_feeder($feeder_stream_id)
    {

        error_log('living_stream (' . 
            __LINE__ .
            ') merge_feeder() ' . 
            'feeder_stream_id->' . 
            $feeder_stream_id);

        $this->feeder_stream_ARRAY[] = $feeder_stream_id;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_feeders()
    {

        return $this->feeder_stream_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_feeder_count()
    {

        return sizeof($this->feeder_stream_ARRAY);

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
    private function injest_data_element(
                     $field, 
                     $value)
    {

        /*error_log('stream (132) ' . 
         *    'injest_data_element() field->' . 
         *    $field . '|val->' . 
         *    $value);
         *
         */
        $this->data_attribute_ARRAY[$this->hash($field)] = $value;

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