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
 * CLASS DEFINITION :: crnrstn_database_sql_silo
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: July 4, 2020 @ 1620 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * TITLE            :: The CRNRSTN :: Lightsaber SOAP
 *                     Services Layer MySQL Database
 *                     Integrations SQL Silo
 *                     Query Cache
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     SOAP Services Layer Database 
 *                     Query (SQL) Silo is a class 
 *                     object dedicated unto the 
 *                     storage and retrieval of 
 *                     application SQL queries that 
 *                     are either very common and 
 *                     were cluttering the code base 
 *                     or are crank utility operations 
 *                     for some table 
 *                     maintenance regimes. 
 *
 *                     All of the above will be made 
 *                     available to all server
 *                     environments that the
 *                     CRNRSTN :: Lightsaber SOAP
 *                     Services Layer will support
 *                     at runtime.
 *
 *
 *                     5
 *
 *                     Tuesday, July, 30, 2024 @ 0008 hrs.
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
class crnrstn_database_sql_silo extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_database_sql_silo 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Tuesday, June 16, 2026 @ 0502 hrs.
     *
     */

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

    # $oCRNRSTN_USR->add_database_query('TRANSLATION_DATA','!jesus_is_my_dear_lord!','LANG_PACKS');
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
    function returnDatabaseQuery(
             $oCRNRSTN_USR, 
             $oCRNRSTN_MySQLi, 
             $result_set_key)
    {

        return $this->returnQuery(
                      $oCRNRSTN_USR, 
                      $oCRNRSTN_MySQLi, 
                      $result_set_key);

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
    private function returnQuery(
                     $oCRNRSTN_USR, 
                     $oCRNRSTN_MySQLi, 
                     $result_set_key)
    {

	    error_log('[lnum ' . 
            __LINE__ . '] [mthd ' . 
            __METHOD__ . '] result_set_key=' . 
            $result_set_key);

        $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

        try{

            switch($result_set_key){
                case 'LOG_BASSDRIVE_PROCESSED':

                    return $this->return_LOG_BASSDRIVE_PROCESSED();

                break;
                case 'LOG_BASSDRIVE':

                    return $this->return_LOG_BASSDRIVE();

                break;
                case 'BASSDRIVE_STREAM':

                    return $this->return_BASSDRIVE_STREAM();

                break;
                case 'BASSDRIVE_STREAM_COLORS':

                    return $this->return_BASSDRIVE_STREAM_COLORS();

                break;
                case 'BASSDRIVE_STREAM_KEY_PATTERN_LOOKUP':

                    return $this->return_BASSDRIVE_STREAM_KEY_PATTERN_LOOKUP();

                break;
                case 'BASSDRIVE_STREAM_SOCIAL_CONFIG':

                    return $this->return_BASSDRIVE_STREAM_SOCIAL_CONFIG();

                break;
                case 'LANG_PACKS':

                    return $this->return_LANG_PACKS();

                break;
                case 'NEW_OR_KEEPALIVE_SESSION':

                    return $this->return_NEW_OR_KEEPALIVE_SESSION($this->oCRNRSTN_USR, $mysqli);

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('No query has been configured ' . 
                        'able to be loaded from the ' . 
                        'result set key [' . 
                        $result_set_key . 
                        '].');

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
             * Sunday, June 30, 2024 @ 1517 hrs.
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

        //
        // RETURN QUERY
        return $query;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_LOG_BASSDRIVE_PROCESSED()
    {

	    return 'SELECT `crnrstn_global_bassdrive_log_processed`.`LOG_PROCESSED_ID`,
                        `crnrstn_global_bassdrive_log_processed`.`BASSDRIVE_LOG_ID`,
                        `crnrstn_global_bassdrive_log_processed`.`BASSDRIVE_LOG_ID_CRC32`,
                        `crnrstn_global_bassdrive_log_processed`.`ISACTIVE`,
                        `crnrstn_global_bassdrive_log_processed`.`NOTE`,
                        `crnrstn_global_bassdrive_log_processed`.`DATEMODIFIED`
                    FROM `crnrstn_global_bassdrive_log_processed`
                    WHERE `crnrstn_global_bassdrive_log_processed`.`ISACTIVE` = 1;';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_LOG_BASSDRIVE()
    {

        return 'SELECT `crnrstn_global_bassdrive_log`.`BASSDRIVE_LOG_ID`,
                        `crnrstn_global_bassdrive_log`.`PROGRAM_TITLE`,
                        `crnrstn_global_bassdrive_log`.`STREAM_RELAY_JSON`,
                        `crnrstn_global_bassdrive_log`.`DATEMODIFIED`
                    FROM `crnrstn_global_bassdrive_log`
                    WHERE `crnrstn_global_bassdrive_log`.`ISACTIVE` = 1
                    AND `crnrstn_global_bassdrive_log`.`PROCESSING_STATE` = "NEW"
                    OR `crnrstn_global_bassdrive_log`.`PROCESSING_STATE` = "RELOAD"
                    ORDER BY DATEMODIFIED DESC LIMIT 1;';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_BASSDRIVE_STREAM()
    {

        return 'SELECT `bassdrive_stream`.`STREAM_ID`,
                        `bassdrive_stream`.`STREAM_KEY`,
                        `bassdrive_stream`.`STREAM_KEY_CRC32`,
                        `bassdrive_stream`.`COLORS_NAME_KEY`,
                        `bassdrive_stream`.`DATEMODIFIED`,
                        `bassdrive_stream`.`DATECREATED`
                    FROM `bassdrive_stream`
                    WHERE `bassdrive_stream`.`ISACTIVE` = 1;';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_BASSDRIVE_STREAM_COLORS()
    {

        return 'SELECT `bassdrive_stream_colors`.`COLORS_ID`,
                        `bassdrive_stream_colors`.`COLORS_NAME_KEY`,
                        `bassdrive_stream_colors`.`COLORS_NAME_KEY_CRC32`,
                        `bassdrive_stream_colors`.`COLORS_IMG_FILENAME`,
                        `bassdrive_stream_colors`.`COLORS_IMG_WIDTH`,
                        `bassdrive_stream_colors`.`COLORS_IMG_HEIGHT`,
                        `bassdrive_stream_colors`.`DATEMODIFIED`,
                        `bassdrive_stream_colors`.`DATECREATED`
                    FROM `bassdrive_stream_colors`
                    WHERE `bassdrive_stream_colors`.`ISACTIVE` = 1;';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_BASSDRIVE_STREAM_KEY_PATTERN_LOOKUP()
    {

        return 'SELECT `crnrstn_stream_relay_string_patterns`.`STRING_PATTERN_ID`,
                        `crnrstn_stream_relay_string_patterns`.`STREAM_KEY`,
                        `crnrstn_stream_relay_string_patterns`.`STRING_PATTERN_TYPE`,
                        `crnrstn_stream_relay_string_patterns`.`STRING_PATTERN_LENGTH`,
                        `crnrstn_stream_relay_string_patterns`.`STRING_PATTERN`,
                        `crnrstn_stream_relay_string_patterns`.`DATEMODIFIED`
                    FROM `crnrstn_stream_relay_string_patterns`
                    WHERE `crnrstn_stream_relay_string_patterns`.`ISACTIVE` = 1
                    ORDER BY `crnrstn_stream_relay_string_patterns`.`STRING_PATTERN_LENGTH` DESC;';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_BASSDRIVE_STREAM_SOCIAL_CONFIG()
    {

        return 'SELECT `bassdrive_stream_social_config`.`SOCIAL_ID`,
                        `bassdrive_stream_social_config`.`STREAM_KEY`,
                        `bassdrive_stream_social_config`.`STREAM_KEY_CRC32`,
                        `bassdrive_stream_social_config`.`LOG_JSON_SERIAL`,
                        `bassdrive_stream_social_config`.`LOCALE_CITY_STATE_PROV_NATION`,
                        `bassdrive_stream_social_config`.`LINK_SOUNDCLOUD`,
                        `bassdrive_stream_social_config`.`LINK_SOUNDCLOUD2`,
                        `bassdrive_stream_social_config`.`LINK_SOUNDCLOUD3`,
                        `bassdrive_stream_social_config`.`LINK_FACEBOOK`,
                        `bassdrive_stream_social_config`.`LINK_FACEBOOK2`,
                        `bassdrive_stream_social_config`.`LINK_FACEBOOK3`,
                        `bassdrive_stream_social_config`.`LINK_INSTAGRAM`,
                        `bassdrive_stream_social_config`.`LINK_INSTAGRAM2`,
                        `bassdrive_stream_social_config`.`LINK_INSTAGRAM3`,
                        `bassdrive_stream_social_config`.`LINK_TWITTER`,
                        `bassdrive_stream_social_config`.`LINK_TWITTER2`,
                        `bassdrive_stream_social_config`.`LINK_TWITTER3`,
                        `bassdrive_stream_social_config`.`LINK_MIXCLOUD`,
                        `bassdrive_stream_social_config`.`LINK_MIXCLOUD2`,
                        `bassdrive_stream_social_config`.`LINK_MIXCLOUD3`,
                        `bassdrive_stream_social_config`.`LINK_DISCOGS`,
                        `bassdrive_stream_social_config`.`LINK_DISCOGS2`,
                        `bassdrive_stream_social_config`.`LINK_DISCOGS3`,
                        `bassdrive_stream_social_config`.`LINK_BEATPORT`,
                        `bassdrive_stream_social_config`.`LINK_BEATPORT2`,
                        `bassdrive_stream_social_config`.`LINK_BEATPORT3`,
                        `bassdrive_stream_social_config`.`LINK_BANDCAMP`,
                        `bassdrive_stream_social_config`.`LINK_BANDCAMP2`,
                        `bassdrive_stream_social_config`.`LINK_BANDCAMP3`,
                        `bassdrive_stream_social_config`.`LINK_SPOTIFY`,
                        `bassdrive_stream_social_config`.`LINK_SPOTIFY2`,
                        `bassdrive_stream_social_config`.`LINK_SPOTIFY3`,
                        `bassdrive_stream_social_config`.`LINK_ROLLDABEATS`,
                        `bassdrive_stream_social_config`.`LINK_ROLLDABEATS2`,
                        `bassdrive_stream_social_config`.`LINK_ROLLDABEATS3`,
                        `bassdrive_stream_social_config`.`LINK_YOUTUBE`,
                        `bassdrive_stream_social_config`.`LINK_YOUTUBE2`,
                        `bassdrive_stream_social_config`.`LINK_YOUTUBE3`,
                        `bassdrive_stream_social_config`.`LINK_WWW`,
                        `bassdrive_stream_social_config`.`LINK_WWW2`,
                        `bassdrive_stream_social_config`.`LINK_WWW3`,
                        `bassdrive_stream_social_config`.`DATEMODIFIED`,
                        `bassdrive_stream_social_config`.`DATECREATED`
                    FROM `bassdrive_stream_social_config`
                    WHERE `bassdrive_stream_social_config`.`ISACTIVE` = 1;';

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_LANG_PACKS()
    {

        return 'SELECT `cia00_lang_packs`.`LANGPACK_ID`,
                            `cia00_lang_packs`.`LANG_ID`,
                            `cia00_lang_packs`.`NAME`,
                            `cia00_lang_packs`.`NATIVE_NAME`,
                            `cia00_lang_packs`.`NATIVE_NAME_BLOB`,
                            `cia00_lang_packs`.`ISACTIVE`,
                            `cia00_lang_packs`.`RTL_FLAG`,
                            `cia00_lang_packs`.`FONT_SIZE_PERCENTAGE`,
                            `cia00_lang_packs`.`TIMER_FONT_SIZE_PERCENTAGE`,
                            `cia00_lang_packs`.`COPY_PADDING_TOP_PX`,
                            `cia00_lang_packs`.`DATEMODIFIED`,
                            `cia00_lang_packs`.`DATECREATED`
                        FROM `cia00_lang_packs`
                        WHERE `cia00_lang_packs`.`ISACTIVE`="1";';

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
    private function return_NEW_OR_KEEPALIVE_SESSION(
                     $oCRNRSTN_USR, 
                     $mysqli)
    {

        $ts = $oCRNRSTN_USR->return_query_date_time_stamp();
        if(!($this->isset_resource('data_value', 'USER_ID', 'CRNRSTN::RESOURCE::ACCOUNT') == true)){
        //if(!$oCRNRSTN_USR->isset_data_key('USER_ID')){
            //
            // THIS IS A NEW USER. GENERATE NEW USER_ID.
            $tmp_userid = $this->generate_new_key(50);
            $tmp_result = $this->add_resource('USER_ID', $tmp_userid, 'CRNRSTN::RESOURCE::ACCOUNT', 'R_channel_SESSION', 0);
            //$oCRNRSTN_USR->set_session_param('USER_ID', $tmp_userid);

            $query = 'INSERT INTO `sessions`
                        (`SESSIONID`,
                        `SESSIONID_CRC32`,
                        `USERID`,
                        `USERID_CRC32`,
                        `REMOTE_ADDR_IPV4`,
                        `REMOTE_ADDR_IPV6`,
                        `DATEMODIFIED`)
                        VALUES
                        ("'.session_id().'",
                        "' . $this->hash(session_id(), 'crc32').'",
                        "' . $tmp_userid.'",
                        "' . $this->hash($tmp_userid, 'crc32').'",
                        INET_ATON("' . $_SERVER['REMOTE_ADDR'] . '"),
                        INET6_ATON("' . $_SERVER['REMOTE_ADDR'] . '"),
                        "' . $ts.'");';

        }else{

            //
            // THIS USER SESSION IS ACTIVE. RETRIEVE USER_ID FROM SESSION.
            // $tmp_userid = $oCRNRSTN_USR->get_session_param('USER_ID');
            $tmp_userid = $this->get_resource('err_reporting_profile', 0, 'CRNRSTN::RESOURCE::CONFIGURATION');

            $query = 'UPDATE `sessions` SET `sessions`.`DATEMODIFIED`="' . $ts.'"
                    WHERE `sessions`.`SESSIONID`="' . $mysqli->real_escape_string(session_id()) . '" AND 
                    `sessions`.`SESSIONID_CRC32`="' . $this->hash(session_id(), 'crc32') . '" AND 
                    `sessions`.`USERID`="' . $mysqli->real_escape_string($tmp_userid).'" AND 
                    `sessions`.`USERID_CRC32`="' . $this->hash($tmp_userid, 'crc32').'" LIMIT 1;';
        }

        return $query;

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