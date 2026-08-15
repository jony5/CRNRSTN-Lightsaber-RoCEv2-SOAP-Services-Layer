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
 * CLASS DEFINITION :: crnrstn_mysql_table_workshop
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: December 1, 2021 @ 2100 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQL
 *                     Database Table
 *                     Maintenance Workshop
 *                     class object
 * DESCRIPTION      :: A MySQL database table
 *                     maintenance class supporting
 *                     the CRNRSTN :: Database
 *                     Services Layer of the
 *                     CRNRSTN :: Lightsaber SOAP
 *                     Services Layer.
 *
 *
 *                     5
 *
 *                     Friday, July 26, 2024 @ 0546 hrs.
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
class crnrstn_mysql_table_workshop extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_mysql_table_workshop 
     *       class object by applying an 
     *       extension of the crnrstn object. 
     *       5 :: Monday, April 13, 2026 @ 0232 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations 
     *       to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0526 hrs.
     *
     */

    public $oCRNRSTN_USR;

    private static $primary_key_updated_ARRAY = array();
    private static $social_link_field_ARRAY = array();
    private static $social_media_key_ARRAY = array();

    public function __construct($oCRNRSTN_USR)
    {

        $this->oCRNRSTN_USR = $oCRNRSTN_USR;

    }

    private function return_social_media_key_array()
    {

        $tmp_array = array();

        $tmp_array['LINK_SOUNDCLOUD'] = 'soundcloud';
        $tmp_array['LINK_SOUNDCLOUD2'] = 'soundcloud';
        $tmp_array['LINK_SOUNDCLOUD3'] = 'soundcloud';

        $tmp_array['LINK_FACEBOOK'] = 'facebook';
        $tmp_array['LINK_FACEBOOK2'] = 'facebook';
        $tmp_array['LINK_FACEBOOK3'] = 'facebook';

        $tmp_array['LINK_INSTAGRAM'] = 'instagram';
        $tmp_array['LINK_INSTAGRAM2'] = 'instagram';
        $tmp_array['LINK_INSTAGRAM3'] = 'instagram';

        $tmp_array['LINK_TWITTER'] = 'twitter';
        $tmp_array['LINK_TWITTER2'] = 'twitter';
        $tmp_array['LINK_TWITTER3'] = 'twitter';

        $tmp_array['LINK_MIXCLOUD'] = 'mixcloud';
        $tmp_array['LINK_MIXCLOUD2'] = 'mixcloud';
        $tmp_array['LINK_MIXCLOUD3'] = 'mixcloud';

        $tmp_array['LINK_DISCOGS'] = 'discogs';
        $tmp_array['LINK_DISCOGS2'] = 'discogs';
        $tmp_array['LINK_DISCOGS3'] = 'discogs';

        $tmp_array['LINK_BEATPORT'] = 'beatport';
        $tmp_array['LINK_BEATPORT2'] = 'beatport';
        $tmp_array['LINK_BEATPORT3'] = 'beatport';

        $tmp_array['LINK_BANDCAMP'] = 'bandcamp';
        $tmp_array['LINK_BANDCAMP2'] = 'bandcamp';
        $tmp_array['LINK_BANDCAMP3'] = 'bandcamp';

        $tmp_array['LINK_SPOTIFY'] = 'spotify';
        $tmp_array['LINK_SPOTIFY2'] = 'spotify';
        $tmp_array['LINK_SPOTIFY3'] = 'spotify';

        $tmp_array['LINK_ROLLDABEATS'] = 'rolldabeats';
        $tmp_array['LINK_ROLLDABEATS2'] = 'rolldabeats';
        $tmp_array['LINK_ROLLDABEATS3'] = 'rolldabeats';

        $tmp_array['LINK_YOUTUBE'] = 'youtube';
        $tmp_array['LINK_YOUTUBE2'] = 'youtube';
        $tmp_array['LINK_YOUTUBE3'] = 'youtube';

        $tmp_array['LINK_WWW'] = 'www';
        $tmp_array['LINK_WWW2'] = 'www';
        $tmp_array['LINK_WWW3'] = 'www';

        return $tmp_array;

    }

    public function add_crc_checksum_to_table(
                    $table_name, 
                    $serial_field_nom, 
                    $checksum_field_nom)
    {

        try{

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_query = 'SELECT `' . $table_name . '`.`' . 
                         $serial_field_nom . '`
                         FROM `' . $table_name . '`;';

            //
            // add_database_query() will
            // serialize the query to the
            // connection provided.
            //
            // CRNRSTN :: Lightsaber RoCEv2 SOAP
            // Services Layer supports n+1
            // MySQLi database connections.
            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                       'CHECKSUM_MAINT', 
                                                       '!jesus_is_my_dear_lord!', 
                                                       'CHECK_SUM_DATA', 
                                                       __LINE__, 
                                                       __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query
            // to connection(s).
            $this->oCRNRSTN_USR->process_query();

            $tmp_CHECK_SUM_DATA_count = $this->oCRNRSTN_USR->return_record_count('CHECK_SUM_DATA');

             for($i = 0; $i < $tmp_CHECK_SUM_DATA_count; $i++){

                $tmp_SOCIAL_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                           'CHECK_SUM_DATA', 
                                                           $serial_field_nom, 
                                                           $i));

                //
                // If stream key 
                // undetermined, throw 
                // exception and spoil 
                // this record. 
                if(strlen($tmp_SOCIAL_ID) > 0){

                    $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();
                    $tmp_checksum = $this->oCRNRSTN_USR->crc_int32($tmp_SOCIAL_ID);

                    $tmp_query = 'UPDATE `' . $table_name . '`
                    SET
                    `' . $checksum_field_nom . '` = ' . $tmp_checksum.',
                    `DATEMODIFIED` = "' . $ts . '"
                    WHERE `' . $table_name . '`.`' . $serial_field_nom . '` = "' . $tmp_SOCIAL_ID . '" LIMIT 1;';

                    $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile('CRNRSTN_SYSTEM_MAINT', '!!jesus_is_my_dear_lord!', '', __LINE__, __METHOD__);
                    $this->oCRNRSTN_USR->add_database_query($tmp_result_set_key, $tmp_query);

                }

            }

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query(true);

            return '<div style="padding:20px; color:#6c645c; ' . 
                   'line-height: 25px; font-size: 16px; ' . 
                   'font-family: Arial, Helvetica, ' . 
                   'sans-serif;">' . 
                   __METHOD__ . '<br>All done on ' . 
                   $tmp_CHECK_SUM_DATA_count . 
                   ' records! [lnum ' . 
                   __LINE__ . '] [rtime ' . 
                   $this->oCRNRSTN_USR->wall_time() . 
                   ']</div>';
            //throw new Exception('CRNRSTN :: ' . 
            //    $this->oCRNRSTN_USR->version_crnrstn() . 
            //    ' :: Invalid Bassdrive Relay ' . 
            //    'JSON from URL=[' . 
            //    $this->oCRNRSTN_USR->get_resource('BASSDRIVE_RELAY_STATE') . 
            //    '] ERROR on ' . 
            //    __METHOD__ . ' from ' . 
            //    $_SERVER['SERVER_NAME'] . ' (' . 
            //    $_SERVER['SERVER_ADDR'] . '). Where err=' . 
            //    $this->oRELAY_MANAGER->return_relay_ojson_err());

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
             * Sunday, June 30, 2024 @ 1550 hrs.
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

    }

    public function restructure_stream_relay_social_table()
    {

        try{

            $tmp_UPDATE_link_processed_cnt = $tmp_INSERT_link_processed_cnt = 0;

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_query = 'SELECT `crnrstn_stream_relay_social`.`SOCIAL_ID`,
                        `crnrstn_stream_relay_social`.`STREAM_KEY`,
                        `crnrstn_stream_relay_social`.`LINK_SOUNDCLOUD`,
                        `crnrstn_stream_relay_social`.`LINK_SOUNDCLOUD2`,
                        `crnrstn_stream_relay_social`.`LINK_SOUNDCLOUD3`,
                        `crnrstn_stream_relay_social`.`LINK_FACEBOOK`,
                        `crnrstn_stream_relay_social`.`LINK_FACEBOOK2`,
                        `crnrstn_stream_relay_social`.`LINK_FACEBOOK3`,
                        `crnrstn_stream_relay_social`.`LINK_INSTAGRAM`,
                        `crnrstn_stream_relay_social`.`LINK_INSTAGRAM2`,
                        `crnrstn_stream_relay_social`.`LINK_INSTAGRAM3`,
                        `crnrstn_stream_relay_social`.`LINK_TWITTER`,
                        `crnrstn_stream_relay_social`.`LINK_TWITTER2`,
                        `crnrstn_stream_relay_social`.`LINK_TWITTER3`,
                        `crnrstn_stream_relay_social`.`LINK_MIXCLOUD`,
                        `crnrstn_stream_relay_social`.`LINK_MIXCLOUD2`,
                        `crnrstn_stream_relay_social`.`LINK_MIXCLOUD3`,
                        `crnrstn_stream_relay_social`.`LINK_DISCOGS`,
                        `crnrstn_stream_relay_social`.`LINK_DISCOGS2`,
                        `crnrstn_stream_relay_social`.`LINK_DISCOGS3`,
                        `crnrstn_stream_relay_social`.`LINK_BEATPORT`,
                        `crnrstn_stream_relay_social`.`LINK_BEATPORT2`,
                        `crnrstn_stream_relay_social`.`LINK_BEATPORT3`,
                        `crnrstn_stream_relay_social`.`LINK_BANDCAMP`,
                        `crnrstn_stream_relay_social`.`LINK_BANDCAMP2`,
                        `crnrstn_stream_relay_social`.`LINK_BANDCAMP3`,
                        `crnrstn_stream_relay_social`.`LINK_SPOTIFY`,
                        `crnrstn_stream_relay_social`.`LINK_SPOTIFY2`,
                        `crnrstn_stream_relay_social`.`LINK_SPOTIFY3`,
                        `crnrstn_stream_relay_social`.`LINK_ROLLDABEATS`,
                        `crnrstn_stream_relay_social`.`LINK_ROLLDABEATS2`,
                        `crnrstn_stream_relay_social`.`LINK_ROLLDABEATS3`,
                        `crnrstn_stream_relay_social`.`LINK_YOUTUBE`,
                        `crnrstn_stream_relay_social`.`LINK_YOUTUBE2`,
                        `crnrstn_stream_relay_social`.`LINK_YOUTUBE3`,
                        `crnrstn_stream_relay_social`.`LINK_WWW`,
                        `crnrstn_stream_relay_social`.`LINK_WWW2`,
                        `crnrstn_stream_relay_social`.`LINK_WWW3`
                    FROM `crnrstn_stream_relay_social`
                    WHERE `crnrstn_stream_relay_social`.`ISACTIVE` = 1
                    ORDER BY `crnrstn_stream_relay_social`.`DATEMODIFIED`
                    DESC LIMIT 1;';

            //
            // add_database_query() will 
            // serialize the query to the 
            // connection provided. 
            //
            // The CRNRSTN :: Lightsaber 
            // SOAP Services support n+1 
            // MySQLi database connections. 
            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                       'CHECKSUM_MAINT', 
                                                       '!jesus_is_my_dear_lord!', 
                                                       'SOCIAL_LINK_DATA', 
                                                       __LINE__, 
                                                       __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            $tmp_SOCIAL_LINK_DATA_count = $this->oCRNRSTN_USR->return_record_count('SOCIAL_LINK_DATA');

            for($i = 0; $i < $tmp_SOCIAL_LINK_DATA_count; $i++){

                $tmp_SOCIAL_ID_SOLO = trim($this->oCRNRSTN_USR->return_database_value(
                                                                'SOCIAL_LINK_DATA', 
                                                                'SOCIAL_ID', 
                                                                $i));
                $tmp_STREAM_KEY_SOLO = trim($this->oCRNRSTN_USR->return_database_value(
                                                                 'SOCIAL_LINK_DATA', 
                                                                 'STREAM_KEY', 
                                                                 $i));

                self::$social_media_key_ARRAY = $this->return_social_media_key_array();

                foreach(self::$social_media_key_ARRAY as 
                    $field_name => $social_media_type_key)
                {

                    //return '$social_media_key_ARRAY=[' . 
                    //    $field_name . '][' . 
                    //    $social_media_type_key . '], where cnt=[' . 
                    //    $tmp_SOCIAL_LINK_DATA_count . '] and row 1=[' . 
                    //    $tmp_SOCIAL_ID_SOLO . '][' . 
                    //    $tmp_STREAM_KEY_SOLO . 
                    //    ']';
                    //die();

                    $tmp_MEDIA_KEY = $social_media_type_key;
                    $tmp_SOCIAL_URL = trim($this->oCRNRSTN_USR->return_database_value(
                                                                'SOCIAL_LINK_DATA', 
                                                                $field_name, 
                                                                $i));

                    if(strlen($tmp_SOCIAL_URL) > 0){

                        $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                        if(isset(self::$primary_key_updated_ARRAY[$tmp_SOCIAL_ID_SOLO])){

                            $tmp_INSERT_link_processed_cnt++;

                            $tmp_SOCIAL_ID = $this->oCRNRSTN_USR->generate_new_key(64);

                            $tmp_query = 'INSERT INTO `crnrstn_stream_relay_social`
                                        (`SOCIAL_ID`,
                                        `SOCIAL_ID_CRC32`,
                                        `STREAM_KEY`,
                                        `STREAM_KEY_CRC32`,
                                        `SOCIAL_MEDIA_KEY`,
                                        `SOCIAL_MEDIA_KEY_CRC32`,
                                        `CLICKTHROUGH_URL`,
                                        `DATEMODIFIED`)
                                        VALUES
                                        ("' . $tmp_SOCIAL_ID . '",
                                        ' . $this->oCRNRSTN_USR->crc_int32($tmp_SOCIAL_ID) . ',
                                        "' . $mysqli->real_escape_string($tmp_STREAM_KEY_SOLO) . '",
                                        ' . $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY_SOLO) . ',
                                        "' . $mysqli->real_escape_string($tmp_MEDIA_KEY) . '",
                                        ' . $this->oCRNRSTN_USR->crc_int32($tmp_MEDIA_KEY) . ',
                                        "' . $mysqli->real_escape_string($tmp_SOCIAL_URL) . '",
                                        "' . $ts . '");';

                        }else{

                            $tmp_UPDATE_link_processed_cnt++;
                            self::$primary_key_updated_ARRAY[$tmp_SOCIAL_ID_SOLO] = 1;

                            $tmp_query = 'UPDATE `crnrstn_stream_relay_social`
                                        SET
                                        `SOCIAL_MEDIA_KEY` = "' . 
                                        $mysqli->real_escape_string($tmp_MEDIA_KEY) . '",
                                        `SOCIAL_MEDIA_KEY_CRC32` = ' . 
                                        $this->oCRNRSTN_USR->crc_int32($tmp_MEDIA_KEY) . ',
                                        `ISACTIVE` = 5,
                                        `CLICKTHROUGH_URL` = "' . 
                                        $mysqli->real_escape_string($tmp_SOCIAL_URL) . '",
                                        `DATEMODIFIED` = "' . 
                                        $ts . '"
                                        WHERE `SOCIAL_ID` = "' . 
                                        $mysqli->real_escape_string($tmp_SOCIAL_ID_SOLO) . '"
                                        AND `SOCIAL_ID_CRC32` = ' . 
                                        $this->oCRNRSTN_USR->crc_int32($tmp_SOCIAL_ID_SOLO) .
                                        ' LIMIT 1;';

                        }

                        $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                                   'CRNRSTN_SYSTEM_MAINT', 
                                                                   '!!jesus_is_my_dear_lord!', 
                                                                   '', 
                                                                   __LINE__, 
                                                                   __METHOD__);
                        $this->oCRNRSTN_USR->add_database_query(
                                             $tmp_result_set_key, 
                                             $tmp_query);

                    }

                }

            }

            if($tmp_UPDATE_link_processed_cnt > 0){

                //
                // Process all query 
                // to connection(s). 
                $this->oCRNRSTN_USR->process_query(true);

            }else{

                $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                $tmp_query = 'UPDATE `crnrstn_stream_relay_social`
                            SET
                            `ISACTIVE` = 5,
                            `DATEMODIFIED` = "' . 
                            $ts . '"
                            WHERE `SOCIAL_ID` = "' . 
                            $mysqli->real_escape_string($tmp_SOCIAL_ID_SOLO) . '"
                            AND `SOCIAL_ID_CRC32` = ' . 
                            $this->oCRNRSTN_USR->crc_int32($tmp_SOCIAL_ID_SOLO) . '
                            LIMIT 1;';

                $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                           'CRNRSTN_SYSTEM_MAINT', 
                                                           '!!jesus_is_my_dear_lord!', 
                                                           '', 
                                                           __LINE__, 
                                                           __METHOD__);
                $this->oCRNRSTN_USR->add_database_query(
                                     $tmp_result_set_key, 
                                     $tmp_query);

                //
                // Process all query 
                // to connection(s). 
                $this->oCRNRSTN_USR->process_query(true);

            }

            return '<div style="padding:20px; color:#6c645c; ' .
            'line-height: 25px; font-size: 16px; ' .
            'font-family: Arial, Helvetica, sans-serif;">' .
            __METHOD__ . '<br>All done on ' .
            $tmp_INSERT_link_processed_cnt + $tmp_UPDATE_link_processed_cnt . ' records[' .
            $tmp_UPDATE_link_processed_cnt . '/' . 
            $tmp_INSERT_link_processed_cnt .
            ']! [lnum ' . 
            __LINE__ .
            '] [rtime ' . 
            $this->oCRNRSTN_USR->wall_time() . 
            ' secs]</div>';

            //throw new Exception('CRNRSTN :: ' . 
            //    $this->oCRNRSTN_USR->version_crnrstn() . 
            //    ' :: Invalid Bassdrive Relay JSON from URL=[' . 
            //    $this->oCRNRSTN_USR->get_resource('BASSDRIVE_RELAY_STATE') . 
            //    '] ERROR on ' . 
            //    __METHOD__ . ' from ' . 
            //    $_SERVER['SERVER_NAME'] . ' (' . 
            //    $_SERVER['SERVER_ADDR'] . '). Where err=' . 
            //    $this->oRELAY_MANAGER->return_relay_ojson_err());

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
             * Sunday, June 30, 2024 @ 1550 hrs.
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

    }

    public function populate_jony5_lifestyle_images_table()
    {

        try{ 

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            //common/imgs/lifestyle_banner/desktop/20190722_154057_HDRa.jpg
            $dir_path = 'common/imgs/lifestyle_banner/desktop/';
            $tmp_IMAGE_count = 0;
            $tmp_sql_batch_size = 30;

            $tmp_dir = $this->oCRNRSTN_USR->get_resource('DOCUMENT_ROOT') . 
                       $this->oCRNRSTN_USR->get_resource('DOCUMENT_ROOT_DIR') . DIRECTORY_SEPARATOR . 
                       $dir_path;
            $image_filename_array = scandir($tmp_dir, 1);

            $tmp = array_pop($image_filename_array);
            $tmp = array_pop($image_filename_array);

            $tmp_IMAGE_count = count($image_filename_array);
            $tmp_clean_image_array = array();

            foreach($image_filename_array as $index => $filename){

                $tmp_pos_jpg = strpos($image_filename_array[$index], '.jpg');

                if($tmp_pos_jpg !== false){

                    $tmp_clean_image_array[] = $filename;

                }

            }

            $tmp_query = 'SELECT
                        `crnrstn_jony5_lifestyle_images`.`IMAGE_FILENAME_DESKTOP`
                        FROM `crnrstn_jony5_lifestyle_images`;';

            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                       'CRNRSTN_SYSTEM_SUPPORT_REQUEST', 
                                                       '!!jesus_is_my_dear_lord!', 
                                                       'IMAGE_IS_UNIQUE_CHECK', 
                                                       __LINE__, 
                                                       __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query
            // to connection(s).
            $this->oCRNRSTN_USR->process_query();

            //IMAGE_IS_UNIQUE_CHECK
            $tmp_IMAGE_IS_UNIQUE_CHECK_count = $this->oCRNRSTN_USR->return_record_count('IMAGE_IS_UNIQUE_CHECK');

            $tmp_flag_ARRAY = array();
            for($ii = 0; $ii < $tmp_IMAGE_IS_UNIQUE_CHECK_count; $ii++){

                $tmp_flag_ARRAY[$this->oCRNRSTN_USR->return_database_value(
                                                     'IMAGE_IS_UNIQUE_CHECK', 
                                                     'IMAGE_FILENAME_DESKTOP', 
                                                     $ii)] = 1;

            }

            $tmp_query_cnt = 0;
            $tmp_query = '';
            foreach($tmp_clean_image_array as 
                $index => $filename)
            {

                $tmp_file_path = $tmp_dir . $tmp_clean_image_array[$index];

                $tmp_str_ARRAY = explode('.', $tmp_clean_image_array[$index]);
                $tmp_node_cnt = count($tmp_str_ARRAY);  //2

                $tmp_ext_len = strlen($tmp_str_ARRAY[$tmp_node_cnt - 1]);
                $tmp_ext_len = $tmp_ext_len * -1;
                $tmp_file_extenstion = substr($tmp_clean_image_array[$index], $tmp_ext_len);

                //return '$tmp_str_ARRAY = ' . 
                //       print_r($tmp_str_ARRAY, true) . 
                //       ' $tmp_node_cnt=' . $tmp_node_cnt . 
                //       ' $tmp_ext_len=' . 
                //       $tmp_ext_len . ' $tmp_file_extenstion=' . 
                //       $tmp_file_extenstion;
                $tmp_IMAGE_count = count($tmp_clean_image_array);
                $tmp_IMAGE_ID = $this->oCRNRSTN_USR->generate_new_key(100);
                $tmp_FILESIZE_BYTES = filesize($tmp_file_path);
                $tmp_FILESIZE = $this->return_bytes($tmp_FILESIZE_BYTES, 4);
                $tmp_FILE_MD5 = md5_file($tmp_file_path);
                $tmp_FILE_SHA1 = sha1_file($tmp_file_path);

                //return 'filename=[' . 
                //       $tmp_clean_image_array[$index] . 
                //       '] $tmp_FILESIZE=[' . $tmp_FILESIZE . 
                //       '/' . $tmp_FILESIZE_BYTES . '] $tmp_FILE_MD5=[' . 
                //       $tmp_FILE_MD5 . '] $tmp_FILE_SHA1=[' . 
                //       $tmp_FILE_SHA1 . ']';

                if(!isset($tmp_flag_ARRAY[$tmp_clean_image_array[$index]])){

                    $tmp_flag_ARRAY[$tmp_clean_image_array[$index]] = 1;
                    $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();
                    $tmp_query = 'INSERT INTO `crnrstn_jony5_lifestyle_images`
                                (`IMAGE_ID`,
                                `IMAGE_FILENAME_DESKTOP`,
                                `IMAGE_FILENAME_TABLET`,
                                `IMAGE_FILENAME_MOBILE`,
                                `IMAGE_FILESIZE_DESKTOP`,
                                `IMAGE_FILESIZE_FORMAT`,
                                `FILE_EXTENSION`,
                                `IMAGE_MD5_DESKTOP`,
                                `IMAGE_SHA1_DESKTOP`,
                                `DATEMODIFIED`)
                                VALUES
                                ("' . $tmp_IMAGE_ID . '",
                                "' . $tmp_clean_image_array[$index] . '",
                                "' . $tmp_clean_image_array[$index] . '",
                                "' . $tmp_clean_image_array[$index] . '",
                                ' . $tmp_FILESIZE_BYTES . ',
                                "bytes",
                                "' . $tmp_file_extenstion . '",
                                UNHEX("' . $mysqli->real_escape_string($tmp_FILE_MD5) . '"),
            					UNHEX("' . $mysqli->real_escape_string($tmp_FILE_SHA1) . '"),
                                "' . $ts . '");';

                    $tmp_query_cnt++;
                    $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                               'CRNRSTN_SYSTEM_SUPPORT_REQUEST', 
                                                               '!!jesus_is_my_dear_lord!', 
                                                               '', 
                                                               __LINE__, 
                                                               __METHOD__);
                    $this->oCRNRSTN_USR->add_database_query(
                                         $tmp_result_set_key, 
                                         $tmp_query);

                    //
                    // Process all query 
                    // to connection(s). 
                    $this->oCRNRSTN_USR->process_query();

                }

                if($tmp_query_cnt > $tmp_sql_batch_size){

                    //
                    // Process all query 
                    // to connection(s). 
                    $this->oCRNRSTN_USR->process_query();

                    if($tmp_query_cnt == 1){

                        return '<div style="padding:20px; color:#6c645c; ' . 
                        'line-height: 25px; font-size: 16px; ' . 
                        'font-family: Arial, Helvetica, sans-serif;">' . 
                        __METHOD__ . 
                        '<br>All done on ' . 
                        $tmp_query_cnt . ' image! [lnum ' . 
                        __LINE__ .'] [rtime ' .
                        $this->oCRNRSTN_USR->wall_time() . ']</div>';

                    }else{

                        if($tmp_query_cnt == 311){

                            return '<div style="padding:20px; color:#6c645c; ' .
                            'line-height: 25px; font-size: 16px; ' .
                            'font-family: Arial, Helvetica, sans-serif;">' .
                            __METHOD__ . '<br>All done on ' .
                            '<a href="https://www.youtube.com/watch?v=KWo-02Hsab4" ' .
                            'target="_blank">' . 
                            $tmp_query_cnt .
                            '</a> images! [lnum ' .
                             __LINE__ .
                            '] [rtime ' .
                            $this->oCRNRSTN_USR->wall_time() . ']</div>';

                        }else{

                            return '<div style="padding:20px; color:#6c645c; ' .
                            'line-height: 25px; font-size: 16px; ' .
                            'font-family: Arial, Helvetica, sans-serif;">' .
                            __METHOD__ . '<br>All done on ' . 
                            $tmp_query_cnt .
                            ' images! [lnum '. 
                            __LINE__ .'] [rtime ' .
                            $this->oCRNRSTN_USR->wall_time() . ']</div>';

                        }

                    }

                }

            }

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            return '<div style="padding:20px; color:#6c645c; ' .
            'line-height: 25px; font-size: 16px; ' .
            'font-family: Arial, Helvetica, sans-serif;">' .
            __METHOD__ . '<br>All done on ' . 
            $tmp_query_cnt .
            ' images! [lnum ' . 
            __LINE__ . '] [rtime ' .
            $this->oCRNRSTN_USR->wall_time() . ']</div>';

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
             * Sunday, June 30, 2024 @ 1550 hrs.
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

    }

    public function populate_meta_lookup_foreign_key_LOCALE()
    {

        try{

            $tmp_LOCALE_DATA_count = 0;

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_query = 'SELECT `crnrstn_stream_relay_meta_lookup`.`META_LOOKUP_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`STREAM_KEY`,
                            `crnrstn_stream_relay_meta_lookup`.`RELAY_REPORTING_SHARD_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`LOCALE_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`SOCIAL_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`ABOUT_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`COLORS_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`STREAM_COLORS_KEY`
                        FROM `crnrstn_stream_relay_meta_lookup`
                        WHERE `crnrstn_stream_relay_meta_lookup`.`ISACTIVE` = 1
                        ORDER BY `crnrstn_stream_relay_meta_lookup`.`DATEMODIFIED`
                        ASC LIMIT 7;';

            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                  'CRNRSTN_SYSTEM_MAINT', 
                                  '!jesus_is_my_dear_lord!', 
                                  'META_LOOKUP_DATA', 
                                  __LINE__, 
                                  __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            $tmp_META_LOOKUP_DATA_count = $this->oCRNRSTN_USR->return_record_count('META_LOOKUP_DATA');

            for($i = 0; $i < $tmp_META_LOOKUP_DATA_count; $i++){

                $tmp_META_LOOKUP_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                                'META_LOOKUP_DATA', 
                                                                'META_LOOKUP_ID', 
                                                                $i));
                $tmp_STREAM_KEY = trim($this->oCRNRSTN_USR->return_database_value(
                                                            'META_LOOKUP_DATA', 
                                                            'STREAM_KEY', 
                                                            $i));

                $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                $tmp_query = 'SELECT `crnrstn_stream_relay_locale`.`LOCALE_ID`
                            FROM `crnrstn_stream_relay_locale`
                            WHERE `crnrstn_stream_relay_locale`.`STREAM_KEY_ID` = "' . $tmp_STREAM_KEY . '"
                            AND `crnrstn_stream_relay_locale`.`STREAM_KEY_ID_CRC32` = ' .
                            $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY) . ' LIMIT 1;';

                $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                           'CRNRSTN_SYSTEM_MAINT', 
                                                           '!!jesus_is_my_dear_lord!', 
                                                           'LOCALE_ID_FK_' . $i, 
                                                           __LINE__, 
                                                           __METHOD__);
                $this->oCRNRSTN_USR->add_database_query(
                                     $tmp_result_set_key, 
                                     $tmp_query);

                //
                // Process all query 
                // to connection(s). 
                $this->oCRNRSTN_USR->process_query();

                $tmp_LOCALE_ID_FK_count = $this->oCRNRSTN_USR->return_record_count('LOCALE_ID_FK_' . $i);

                if($tmp_LOCALE_ID_FK_count > 0){

                    $tmp_LOCALE_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                               'LOCALE_ID_FK_' . $i, 
                                                               'LOCALE_ID'));
                    $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                    $tmp_query = 'UPDATE `crnrstn_stream_relay_meta_lookup`
                                SET
                                `ISACTIVE` = 5,
                                `LOCALE_ID` = "' . $tmp_LOCALE_ID . '",
                                `DATEMODIFIED` = "' . $ts . '"
                                WHERE `META_LOOKUP_ID` = "' . $tmp_META_LOOKUP_ID . '"
                                AND `STREAM_KEY` = "' . $tmp_STREAM_KEY . '"
                                AND `STREAM_KEY_CRC32` = "' . $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY) . '"
                                AND `ISACTIVE` = 1 LIMIT 1;';

                    $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                               'CRNRSTN_SYSTEM_MAINT', 
                                                               '!!jesus_is_my_dear_lord!', 
                                                               '', 
                                                               __LINE__, 
                                                               __METHOD__);
                    $this->oCRNRSTN_USR->add_database_query(
                                         $tmp_result_set_key, 
                                         $tmp_query);

                    //
                    // Process all query 
                    // to connection(s). 
                    $this->oCRNRSTN_USR->process_query();

                    $tmp_LOCALE_DATA_count++;

                }

            }

            return '<div style="padding:20px; color:#6c645c; ' .
            'line-height: 25px; font-size: 16px; ' .
            'font-family: Arial, Helvetica, sans-serif;">' .
             __METHOD__ . '<br>All done on ' .
             $tmp_LOCALE_DATA_count . ' records! [lnum ' .
             __LINE__ .'] [rtime ' .
             $this->oCRNRSTN_USR->wall_time() . ']</div>';

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
             * Sunday, June 30, 2024 @ 1550 hrs.
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

    }

    public function populate_meta_lookup_foreign_key_SOCIAL()
    {

        try{

            $tmp_SOCIAL_DATA_count = 0;

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_query = 'SELECT `crnrstn_stream_relay_meta_lookup`.`META_LOOKUP_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`STREAM_KEY`,
                            `crnrstn_stream_relay_meta_lookup`.`RELAY_REPORTING_SHARD_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`LOCALE_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`SOCIAL_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`ABOUT_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`COLORS_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`STREAM_COLORS_KEY`
                        FROM `crnrstn_stream_relay_meta_lookup`
                        WHERE `crnrstn_stream_relay_meta_lookup`.`ISACTIVE` = 1
                        ORDER BY `crnrstn_stream_relay_meta_lookup`.`SOCIAL_ID`
                        ASC LIMIT 157;';

            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                       'CRNRSTN_SYSTEM_MAINT', 
                                                       '!jesus_is_my_dear_lord!', 
                                                       'META_LOOKUP_DATA', 
                                                       __LINE__, 
                                                       __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            $tmp_META_LOOKUP_DATA_count = $this->oCRNRSTN_USR->return_record_count('META_LOOKUP_DATA');

            for($i = 0; $i < $tmp_META_LOOKUP_DATA_count; $i++){

                $tmp_META_LOOKUP_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                                'META_LOOKUP_DATA', 
                                                                'META_LOOKUP_ID', 
                                                                $i));
                $tmp_STREAM_KEY = trim($this->oCRNRSTN_USR->return_database_value(
                                                            'META_LOOKUP_DATA', 
                                                            'STREAM_KEY', 
                                                            $i));

                $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                $tmp_query = 'SELECT `crnrstn_stream_relay_social`.`SOCIAL_ID`
                              FROM `crnrstn_stream_relay_social`
                              WHERE `crnrstn_stream_relay_social`.`STREAM_KEY` = "' . 
                              $tmp_STREAM_KEY . '"
                              AND `crnrstn_stream_relay_social`.`STREAM_KEY_CRC32` = ' .
                              $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY) . '
                              AND `crnrstn_stream_relay_social`.`ISACTIVE` = 1
                              LIMIT 1;';

                $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                           'CRNRSTN_SYSTEM_MAINT', 
                                                           '!!jesus_is_my_dear_lord!', 
                                                           'SOCIAL_ID_FK_' . $i, 
                                                           __LINE__, 
                                                           __METHOD__);
                $this->oCRNRSTN_USR->add_database_query(
                                     $tmp_result_set_key, 
                                     $tmp_query);

                //
                // Process all query 
                // to connection(s). 
                $this->oCRNRSTN_USR->process_query();

                $tmp_SOCIAL_ID_FK_count = $this->oCRNRSTN_USR->return_record_count('SOCIAL_ID_FK_' . $i);

                if($tmp_SOCIAL_ID_FK_count > 0){

                    $tmp_SOCIAL_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                               'SOCIAL_ID_FK_' . $i, 
                                                               'SOCIAL_ID'));
                    $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                    $tmp_query = 'UPDATE `crnrstn_stream_relay_meta_lookup`
                                  SET
                                  `ISACTIVE` = 5,
                                  `SOCIAL_ID` = "' . $tmp_SOCIAL_ID . '",
                                  `DATEMODIFIED` = "' . $ts . '"
                                  WHERE `META_LOOKUP_ID` = "' . $tmp_META_LOOKUP_ID . '"
                                  AND `STREAM_KEY` = "' . $tmp_STREAM_KEY . '"
                                  AND `STREAM_KEY_CRC32` = "' . $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY) . '"
                                  AND `ISACTIVE` = 1 LIMIT 1;';

                    $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                               'CRNRSTN_SYSTEM_MAINT', 
                                                               '!!jesus_is_my_dear_lord!', 
                                                               '', 
                                                               __LINE__, 
                                                               __METHOD__);
                    $this->oCRNRSTN_USR->add_database_query(
                                         $tmp_result_set_key, 
                                         $tmp_query);

                    //
                    // Process all query 
                    // to connection(s). 
                    $this->oCRNRSTN_USR->process_query();

                    $tmp_SOCIAL_DATA_count++;

                }

            }

            return '<div style="padding:20px; color:#6c645c; ' . 
                   'line-height: 25px; font-size: 16px; ' . 
                   'font-family: Arial, Helvetica, sans-serif;">' . 
                   __METHOD__ . '<br>All done on ' . 
                   $tmp_SOCIAL_DATA_count . ' records! [lnum '. 
                   __LINE__ .'] [rtime ' . 
                   $this->oCRNRSTN_USR->wall_time() . 
                   ']</div>';

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
             * Sunday, June 30, 2024 @ 1550 hrs.
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

    }

    public function populate_meta_lookup_foreign_key_COLORS()
    {

        try{

            $tmp_SOCIAL_DATA_count = 0;

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_query = 'SELECT `crnrstn_stream_relay_meta_lookup`.`META_LOOKUP_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`STREAM_KEY`,
                            `crnrstn_stream_relay_meta_lookup`.`RELAY_REPORTING_SHARD_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`LOCALE_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`SOCIAL_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`ABOUT_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`COLORS_ID`,
                            `crnrstn_stream_relay_meta_lookup`.`STREAM_COLORS_KEY`
                        FROM `crnrstn_stream_relay_meta_lookup`
                        WHERE `crnrstn_stream_relay_meta_lookup`.`ISACTIVE` = 1
                        ORDER BY `crnrstn_stream_relay_meta_lookup`.`SOCIAL_ID`
                        DESC LIMIT 5;';

            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                       'CRNRSTN_SYSTEM_MAINT', 
                                                       '!jesus_is_my_dear_lord!', 
                                                       'META_LOOKUP_DATA', 
                                                       __LINE__, 
                                                       __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            $tmp_META_LOOKUP_DATA_count = $this->oCRNRSTN_USR->return_record_count('META_LOOKUP_DATA');

            for($i = 0; $i < $tmp_META_LOOKUP_DATA_count; $i++){

                $tmp_META_LOOKUP_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                                'META_LOOKUP_DATA', 
                                                                'META_LOOKUP_ID', 
                                                                $i));
                $tmp_STREAM_KEY = trim($this->oCRNRSTN_USR->return_database_value(
                                                            'META_LOOKUP_DATA', 
                                                            'STREAM_KEY', 
                                                            $i));
                $tmp_STREAM_COLORS_KEY = trim($this->oCRNRSTN_USR->return_database_value(
                                                                   'META_LOOKUP_DATA', 
                                                                   'STREAM_COLORS_KEY', 
                                                                   $i));

                $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                $tmp_query = 'SELECT `crnrstn_stream_relay_colors`.`COLORS_ID`
                             FROM `crnrstn_stream_relay_colors`
                             WHERE `crnrstn_stream_relay_colors`.`STREAM_COLORS_KEY` = "' .
                             $tmp_STREAM_COLORS_KEY . '"
                             AND `crnrstn_stream_relay_colors`.`STREAM_COLORS_KEY_CRC32` = ' .
                             $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_COLORS_KEY) . '
                             AND `crnrstn_stream_relay_colors`.`ISACTIVE` = 1 LIMIT 1;
                             ';

                $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                           'CRNRSTN_SYSTEM_MAINT', 
                                                           '!!jesus_is_my_dear_lord!', 
                                                           'COLORS_ID_FK_' . $i, 
                                                           __LINE__, 
                                                           __METHOD__);
                $this->oCRNRSTN_USR->add_database_query(
                                     $tmp_result_set_key, 
                                     $tmp_query);

                //
                // Process all query 
                // to connection(s). 
                $this->oCRNRSTN_USR->process_query();

                $tmp_COLORS_ID_FK_count = $this->oCRNRSTN_USR->return_record_count('COLORS_ID_FK_' . $i);

                if($tmp_COLORS_ID_FK_count > 0){

                    $tmp_COLORS_ID = trim($this->oCRNRSTN_USR->return_database_value(
                                                               'COLORS_ID_FK_' . $i, 
                                                               'COLORS_ID'));
                    $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                    $tmp_query = 'UPDATE `crnrstn_stream_relay_meta_lookup`
                                 SET
                                 `ISACTIVE` = 5,
                                 `COLORS_ID` = "' . $tmp_COLORS_ID . '",
                                 `DATEMODIFIED` = "' . $ts . '"
                                 WHERE `META_LOOKUP_ID` = "' . $tmp_META_LOOKUP_ID . '"
                                 AND `STREAM_KEY` = "' . $tmp_STREAM_KEY . '"
                                 AND `STREAM_KEY_CRC32` = "' . $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY) . '"
                                 AND `ISACTIVE` = 1 LIMIT 1;';

                    $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                               'CRNRSTN_SYSTEM_MAINT', 
                                                               '!!jesus_is_my_dear_lord!', 
                                                               '', 
                                                               __LINE__, 
                                                               __METHOD__);
                    $this->oCRNRSTN_USR->add_database_query(
                                         $tmp_result_set_key, 
                                         $tmp_query);

                    //
                    // Process all query 
                    // to connection(s). 
                    $this->oCRNRSTN_USR->process_query();

                    $tmp_SOCIAL_DATA_count++;

                }

            }

            return '<div style="padding:20px; color:#6c645c; ' .
            'line-height: 25px; font-size: 16px; ' .
            'font-family: Arial, Helvetica, sans-serif;">' .
            __METHOD__ . '<br>All done on ' .
            $tmp_SOCIAL_DATA_count . ' records! [lnum '.
            __LINE__ .'] [rtime ' .
            $this->oCRNRSTN_USR->wall_time() . ']</div>';

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
             * Sunday, June 30, 2024 @ 1550 hrs.
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

    }

    public function populate_locale_table()
    {

        try{

            $oCRNRSTN_MySQLi = $this->oCRNRSTN_USR->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_query = 'SELECT
                        `crnrstn_stream_relay_social_OLD`.`STREAM_KEY`,
                        `crnrstn_stream_relay_social_OLD`.`LOCALE_CITY_STATE_PROV_NATION`
                        FROM `crnrstn_stream_relay_social_OLD`
                        WHERE `crnrstn_stream_relay_social_OLD`.`LOCALE_CITY_STATE_PROV_NATION` != "";';

            $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                       'CRNRSTN_SYSTEM_MAINT', 
                                                       '!jesus_is_my_dear_lord!', 
                                                       'LOCALE_DATA', 
                                                       __LINE__, 
                                                       __METHOD__);
            $this->oCRNRSTN_USR->add_database_query(
                                 $tmp_result_set_key, 
                                 $tmp_query);

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            $tmp_LOCALE_DATA_count = $this->oCRNRSTN_USR->return_record_count('LOCALE_DATA');

            for($i = 0; $i < $tmp_LOCALE_DATA_count; $i++){

                $tmp_LOCALE_ID = $this->oCRNRSTN_USR->generate_new_key(64);
                $tmp_STREAM_KEY = trim($this->oCRNRSTN_USR->return_database_value(
                                                            'LOCALE_DATA', 
                                                            'STREAM_KEY', 
                                                            $i));
                $tmp_LOCALE_CITY_STATE_PROV_NATION = trim($this->oCRNRSTN_USR->return_database_value(
                                                                               'LOCALE_DATA', 
                                                                               'LOCALE_CITY_STATE_PROV_NATION', 
                                                                               $i));

                $ts = $this->oCRNRSTN_USR->return_query_date_time_stamp();

                $tmp_query = 'INSERT INTO `crnrstn_stream_relay_locale`
                             (`LOCALE_ID`,
                              `LOCALE_ID_CRC32`,
                              `STREAM_KEY_ID`,
                              `STREAM_KEY_ID_CRC32`,
                              `LOCALE_COPY`,
                              `DATEMODIFIED`)
                             VALUES 
                             ("' . $tmp_LOCALE_ID . '", 
                             ' . $this->oCRNRSTN_USR->crc_int32($tmp_LOCALE_ID) . ', 
                             "' . $mysqli->real_escape_string($tmp_STREAM_KEY) . '", 
                             ' . $this->oCRNRSTN_USR->crc_int32($tmp_STREAM_KEY) . ', 
                             "' . $mysqli->real_escape_string($tmp_LOCALE_CITY_STATE_PROV_NATION) . '", 
                             "' . $ts . '");';

                $tmp_result_set_key = $this->oCRNRSTN_USR->load_query_profile(
                                                           'CRNRSTN_SYSTEM_MAINT', 
                                                           '!!jesus_is_my_dear_lord!', 
                                                           '', 
                                                           __LINE__, 
                                                           __METHOD__);
                $this->oCRNRSTN_USR->add_database_query(
                                     $tmp_result_set_key, 
                                     $tmp_query);

            }

            //
            // Process all query 
            // to connection(s). 
            $this->oCRNRSTN_USR->process_query();

            return '<div style="padding:20px; color:#6c645c; ' .
            'line-height: 25px; font-size: 16px; ' .
            'font-family: Arial, Helvetica, sans-serif;">' .
            __METHOD__ . '<br>All done on ' .
            $tmp_LOCALE_DATA_count . ' records! [lnum '.
            __LINE__ .'] [rtime ' .
            $this->oCRNRSTN_USR->wall_time() . ']</div>';

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
             * Sunday, June 30, 2024 @ 1623 hrs.
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

    }

    public function __destruct()
    {

    }

}