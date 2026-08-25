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
 * CLASS DEFINITION :: crnrstn_bassdrive_stream_output_controller
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: November 11, 2021 @ 1653 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     SOAP Services Layer 
 *                     Bassdrive.com LIVE radio 
 *                     show broadcast JSON 
 *                     stream relay social 
 *                     media integrations 
 *                     augmented HTML UI 
 *                     output controller.
 *                  
 *                     Here is an example
 *                     of a Bassdrive.com
 *                     stream "relays" JSON 
 *                     object from production
 *                     for an actual 
 *                     Bassdrive.com radio 
 *                     show broadcast on 
 *                     Thursday, November 11, 
 *                     2021 @ 0039 hrs.
 *
 *                     Listen to the actual 
 *                     Bassdrive.com live 
 *                     radio broadcast 
 *                     from 2021: 
 *
 *                     https://lightsaber.crnrstn.jony5.com/_tmp_diagrams/bassdrive_dirty_shit/kos.mos.music/
 *               
 *                     {
 *                      "relays" : [
 *                          {
 *                            "bitrate" : "128",
 *                            "status" : "1",
 *                            "name" : "bassdrive.radioca.st:8702",
 *                            "listenerCount" : "54",
 *                            "listenerCountPercentage" : "0.54",
 *                            "audioFormat" : "mp3",
 *                            "streamURL" : "http:\/\/bassdrive.radioca.st:8702",
 *                            "streamURLios" : "http:\/\/bassdrive.radioca.st:8702",
 *                            "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
 *                         },
 *                         {
 *                            "bitrate" : "128",
 *                            "status" : "1",
 *                            "name" : "chi.bassdrive.co:80",
 *                            "listenerCount" : "109",
 *                            "listenerCountPercentage" : "1.09",
 *                            "audioFormat" : "mp3",
 *                            "streamURL" : "http:\/\/chi.bassdrive.co:80",
 *                            "streamURLios" : "http:\/\/chi.bassdrive.co:80",
 *                            "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
 *                         },
 *                         {
 *                            "bitrate" : "128",
 *                            "status" : 0,
 *                            "name" : "ice.bassdrive.net:80\/stream",
 *                            "listenerCount" : "0",
 *                            "listenerCountPercentage" : 0,
 *                            "audioFormat" : "mp3",
 *                            "streamURL" : "http:\/\/ice.bassdrive.net:80\/stream",
 *                            "streamURLios" : "http:\/\/ice.bassdrive.net:80\/stream",
 *                            "title" : ""
 *                         },
 *                         {
 *                            "bitrate" : "32",
 *                            "status" : 0,
 *                            "name" : "ice.bassdrive.net:80\/stream32",
 *                            "listenerCount" : "0",
 *                            "listenerCountPercentage" : 0,
 *                            "audioFormat" : "aac+",
 *                            "streamURL" : "http:\/\/ice.bassdrive.net:80\/stream32",
 *                            "streamURLios" : "http:\/\/ice.bassdrive.net:80\/stream32",
 *                            "title" : ""
 *                         },
 *                         {
 *                            "bitrate" : "56",
 *                            "status" : 0,
 *                            "name" : "ice.bassdrive.net:80\/stream56",
 *                            "listenerCount" : "0",
 *                            "listenerCountPercentage" : 0,
 *                            "audioFormat" : "mp3",
 *                            "streamURL" : "http:\/\/ice.bassdrive.net:80\/stream56",
 *                            "streamURLios" : "http:\/\/ice.bassdrive.net:80\/stream56",
 *                            "title" : ""
 *                         },
 *                         {
 *                            "bitrate" : "128",
 *                            "status" : "1",
 *                            "name" : "stream.bassdrive.uk:8200",
 *                            "listenerCount" : "14",
 *                            "listenerCountPercentage" : "2.73",
 *                            "audioFormat" : "mp3",
 *                            "streamURL" : "http:\/\/stream.bassdrive.uk:8200",
 *                            "streamURLios" : "http:\/\/stream.bassdrive.uk:8200",
 *                            "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
 *                         }
 *                        ],
 *       
 *                      "stats" : [
 *                         {
 *                            "bandwidth" : 22.13,
 *                            "connections" : 177,
 *                            "name" : "Total",
 *                            "capacity" : 20510,
 *                            "bandwidthFormat" : "megabit"
 *                         },
 *                         {
 *                            "bandwidth" : 15.38,
 *                            "connections" : 123,
 *                            "name" : "TotalUnique",
 *                            "capacity" : 20510,
 *                            "bandwidthFormat" : "megabit"
 *                         },
 *                         {
 *                            "bandwidth" : 22.13,
 *                            "bitrateFormat" : "kilobit",
 *                            "bitrate" : 128,
 *                            "connections" : 177,
 *                            "name" : "Premium",
 *                            "capacity" : 20510,
 *                            "bandwidthFormat" : "megabit"
 *                        },
 *                        {
 *                            "bandwidth" : 0,
 *                            "bitrateFormat" : "kilobit",
 *                            "bitrate" : 56,
 *                            "connections" : 0,
 *                            "name" : "Midgrade",
 *                            "capacity" : 0,
 *                            "bandwidthFormat" : "megabit"
 *                         },
 *                         {
 *                            "bandwidth" : 0,
 *                            "bitrateFormat" : "kilobit",
 *                            "bitrate" : 32,
 *                            "connections" : 0,
 *                            "name" : "AACplus",
 *                            "capacity" : 0,
 *                            "bandwidthFormat" : "megabit"
 *                         },
 *                         {
 *                            "bandwidth" : 0,
 *                            "bitrateFormat" : "kilobit",
 *                            "bitrate" : 128,
 *                            "connections" : null,
 *                            "name" : "Random",
 *                            "capacity" : null,
 *                            "bandwidthFormat" : "megabit"
 *                         }
 *                        ],
 *       
 *                      "nowplaying" : [
 *                         {
 *                            "name" : "Kos.Mos Music Presents Phuture - hosted by Freestylers",
 *                            "label" : "Artist"
 *                         },
 *                         {
 *                            "name" : "Kos.Mos Music Presents Phuture - hosted by Freestylers",
 *                            "label" : "Title"
 *                         }
 *                       ]
 *                     }
 *                  
 *                     ❤ ❤ C ❤ R ❤ N ❤ R ❤ S ❤ T ❤ N ❤ : : ❤ ❤ ❤ ❤
 *                     You're still the 
 *                     best, J5! - From J5
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
class crnrstn_bassdrive_stream_output_controller {

    public $oCRNRSTN_USR;

    protected $stream_key;

    protected $flagged_as_live_ARRAY = array();
    protected $flagged_as_replay_ARRAY = array();

    protected $flagged_built_social_ARRAY = array();
    protected $flagged_built_colors_ARRAY = array();
    protected $flagged_built_stats_ARRAY = array();
    protected $flagged_built_title_ARRAY = array();

    private static $is_live_pattern = 'LIVE';
    private static $is_replay_pattern = 'REPLAY';

    private static $bassdrive_month_ARRAY = array();
    private static $bassdrive_day_ARRAY = array();

    public function __construct($oCRNRSTN_USR){

        $this->oCRNRSTN_USR = $oCRNRSTN_USR;

    }

    private function return_MONTH_ARRAY(){

        if(count(self::$bassdrive_month_ARRAY) > 5){

            return self::$bassdrive_month_ARRAY;

        }else{

            self::$bassdrive_month_ARRAY[] = 'Jan';
            self::$bassdrive_month_ARRAY[] = 'Feb';
            self::$bassdrive_month_ARRAY[] = 'Mar';
            self::$bassdrive_month_ARRAY[] = 'Apr';
            self::$bassdrive_month_ARRAY[] = 'May';
            self::$bassdrive_month_ARRAY[] = 'Jun';
            self::$bassdrive_month_ARRAY[] = 'Jul';
            self::$bassdrive_month_ARRAY[] = 'Aug';
            self::$bassdrive_month_ARRAY[] = 'Sept';
            self::$bassdrive_month_ARRAY[] = 'Oct';
            self::$bassdrive_month_ARRAY[] = 'Nov';
            self::$bassdrive_month_ARRAY[] = 'Dec';

        }

        return self::$bassdrive_month_ARRAY;

    }

    private function return_DAY_ARRAY(){

        if(count(self::$bassdrive_day_ARRAY) > 5){

            return self::$bassdrive_day_ARRAY;

        }else{

            for($i = 31; $i > 0; $i--){

                self::$bassdrive_day_ARRAY[] = $i;

            }

        }

        return self::$bassdrive_day_ARRAY;

    }

    public function stream_title_has_date_pattern($title){

        $bassdrive_month = $this->return_MONTH_ARRAY();
        $bassdrive_day = $this->return_DAY_ARRAY();

        $tmp_MONTH_cnt = count($bassdrive_month);
        $tmp_DAY_cnt = count($bassdrive_day);

        for($i=0; $i<$tmp_MONTH_cnt; $i++){

            for($ii=0; $ii<$tmp_DAY_cnt; $ii++){

                $tmp_date_pos = strpos($title, $bassdrive_month[$i].' '.$bassdrive_day[$ii]);
                if($tmp_date_pos !== false){

                    return true;

                }

            }

        }

    }

    public function throw_flag_as_replay($STREAM_KEY = null){

        if(!isset($STREAM_KEY)){

            $this->flagged_as_replay_ARRAY[self::$is_replay_pattern.$this->stream_key] = 1;

        }else{

            $this->flagged_as_replay_ARRAY[self::$is_replay_pattern.$STREAM_KEY] = 1;

        }

    }

    public function throw_flag_as_live($STREAM_KEY = null){

        if(!isset($STREAM_KEY)){

            $this->flagged_as_live_ARRAY[self::$is_live_pattern.$this->stream_key] = 1;

        }else{

            $this->flagged_as_live_ARRAY[self::$is_live_pattern.$STREAM_KEY] = 1;

        }

    }

    public function flagged_as_replay($STREAM_KEY = null){

        if(!isset($STREAM_KEY)){

            if(isset($this->flagged_as_replay_ARRAY[self::$is_replay_pattern.$this->stream_key])){

                return true;

            }else{

                return false;

            }

        }else{

            if(isset($this->flagged_as_replay_ARRAY[self::$is_replay_pattern.$STREAM_KEY])){

                return true;

            }else{

                return false;

            }

        }

    }

    public function flagged_as_live($STREAM_KEY = null){

        if(!isset($STREAM_KEY)){

            if(isset($this->flagged_as_live_ARRAY[self::$is_live_pattern.$this->stream_key])){

                return true;

            }else{

                return false;

            }

        }else{

            if(isset($this->flagged_as_live_ARRAY[self::$is_live_pattern.$STREAM_KEY])){

                return true;

            }else{

                return false;


            }
        }

    }

    public function authorize_stream_output($STREAM_KEY, $title){

        $this->stream_key = $STREAM_KEY;

        if($this->flagged_as_live() && $this->flagged_as_replay()){

            error_log(__LINE__ . ' '. __METHOD__ .' user AUTH PATH TRACE');
            return false;

        }else{

            $has_date = 0;
            if($this->stream_title_has_date_pattern($title)){

                $has_date = 1;

            }

            if($this->flagged_as_live()){

                //
                // DO WE HAVE DATE (REPLAY) INDICATOR
                if($has_date == 0){
                    error_log(__LINE__ . ' '. __METHOD__ .' user AUTH PATH TRACE');

                    return false;

                }

            }

            if($this->flagged_as_replay()){

                if($has_date == 1){
                    error_log(__LINE__ . ' '. __METHOD__ .' user AUTH PATH TRACE');

                    return false;

                }

            }

        }

        return true;

    }

    public function generate_stream_meta_colors($oQueryProfileMgr){

        //
        // WHAT WE NEED FOR HISTORY BUILD
        // COLORS META ::
        //    public function                     retrieve_data_by_id($oQueryProfileMgr, $result_set_key, $lookup_fieldname, $piped_primary_id_fields = NULL, $piped_lookup_id_data = NULL){

        $this->oCRNRSTN_USR->init_lookup_by_id($oQueryProfileMgr, 'BASSDRIVE_STREAM');
        $tmp_record_lookup_serial_ARRAY = $this->oCRNRSTN_USR->add_lookup_field_data($oQueryProfileMgr,'BASSDRIVE_STREAM', 'STREAM_KEY', $this->stream_key);
        //error_log('218 search - lookup serial array size='.sizeof($tmp_record_lookup_serial_ARRAY));
        //$tmp_record_lookup_serial_ARRAY = self::$oCRNRSTN_USR->add_lookup_field_data($oQueryProfileMgr, 'PAGE_DATA', 'PAGE_SERIAL', $tmp_page_serial);
        //error_log('220 search - lookup serial array size='.sizeof($tmp_record_lookup_serial_ARRAY));

        //$tmp_page_path = $oCRNRSTN_USR->retrieve_data_by_id($oQueryProfileMgr, 'PAGE_DATA','CONTENT_PATH','CONTENT_ID', $tmp_content_id);
        //$tmp_page_path = $oCRNRSTN_USR->retrieve_data_by_id($oQueryProfileMgr, 'PAGE_DATA','CONTENT_PATH','CONTENT_ID|PAGE_SERIAL', $tmp_content_id.'|'.$tmp_page_serial);
        //$tmp_page_path = self::$oCRNRSTN_USR->retrieve_data_by_id($oQueryProfileMgr, 'PAGE_DATA', 'CONTENT_PATH');


        $colors_name_key = $this->oCRNRSTN_USR->retrieve_data_by_id($oQueryProfileMgr,'BASSDRIVE_STREAM', 'STREAM_KEY', 'COLORS_NAME_KEY');
        error_log(__LINE__ . ' '. __METHOD__ .' user AUTH PATH TRACE');


        echo '<br><br><br>' . $this->stream_key. '<---->' . $colors_name_key;
        die();

        $this->flagged_built_colors_ARRAY[$this->stream_key] = '<div class="colors_img_wrapper"><img src="' . $this->oCRNRSTN->crnrstn_http_endpoint() . 'common/imgs/bassdrive_component_creative/' . $national_colors_img_file . '" width="64" height="32" alt="LONDON, UK" title="National flag for LONDON, UK"></div>
        <div class="cb"></div>
        <div class="colors_city_state">LONDON, UK</div>';

    }

    public function generate_stream_meta_social($oQueryProfileMgr){

        //
        // SOCIAL META (LOCALIZED JSON) ::

        /*
        <div>
            <div class="colors_show_title_wrapper">The just on  track show with Ashatack<br><span class="player-host"><span style="color:#F00; font-weight: bold;">Live</span></span>
                <div class="cb"></div>
                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                    <div class="bassdrive_social_link stream_soundcloud" onclick="launch_newwindow('https://soundcloud.com/ashatack'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://soundcloud.com/ashatack" target="_blank">here</a> for the The just on  track show with Ashatack<br><span class="player-host">Live</span> SoundCloud playlist.</div>


                    <div class="bassdrive_social_link stream_twitter" onclick="launch_newwindow('https://twitter.com/Ashatack68'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://twitter.com/Ashatack68" target="_blank">here</a> for the The just on  track show with Ashatack<br><span class="player-host">Live</span> Twitter feed.</div>

                    <div class="bassdrive_social_link stream_www" onclick="launch_newwindow('https://www.twitch.tv/ashatack68'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://www.twitch.tv/ashatack68" target="_blank">here</a> for the website of The just on  track show with Ashatack<br><span class="player-host">Live</span>.</div>
                    <div class="bassdrive_social_link stream_paypal" onclick="launch_newwindow('https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C" target="_blank">here</a> to make a donation to Bassdrive.</div>
                    <div class="bassdrive_social_link stream_json" onclick="launch_newwindow('http://jony5.com/_proxy/bassdrive_colors/?stream=y0NXmHUd7pz5pqgZahU2KAvFXWCXxPOsUKlD6rI5t3dP0WiuJzakPQXZBn2OkuTf'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div>
                    <div class="cb"></div>
                </div>
            </div>
            <div class="colors_wrapper">
                <div class="colors_img_wrapper"><img src="http://jony5.com/common/imgs/bassdrive_component_creative/flag_united_kingdom.gif" width="64" height="32" alt="LONDON, UK" title="National flag for LONDON, UK"></div>
                <div class="cb"></div>
                <div class="colors_city_state">LONDON, UK</div>
                <div class="cb"></div>
                <div class="colors_show_date_generated"><span style="font-weight: bold;">Generated on:&nbsp;&nbsp;</span>Thursday, Nov. 11 at 17:42:05 EST</div>
            </div>
        </div>
        <div class="colors_hr_wrapper"><div class="colors_hr"></div></div>

        */

    }

    public function generate_stream_meta_title($oQueryProfileMgr){

        //
        // TITLE FORMATTING

        /*
        <div>
            <div class="colors_show_title_wrapper">The just on  track show with Ashatack<br><span class="player-host"><span style="color:#F00; font-weight: bold;">Live</span></span>
                <div class="cb"></div>
                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                    <div class="bassdrive_social_link stream_soundcloud" onclick="launch_newwindow('https://soundcloud.com/ashatack'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://soundcloud.com/ashatack" target="_blank">here</a> for the The just on  track show with Ashatack<br><span class="player-host">Live</span> SoundCloud playlist.</div>


                    <div class="bassdrive_social_link stream_twitter" onclick="launch_newwindow('https://twitter.com/Ashatack68'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://twitter.com/Ashatack68" target="_blank">here</a> for the The just on  track show with Ashatack<br><span class="player-host">Live</span> Twitter feed.</div>

                    <div class="bassdrive_social_link stream_www" onclick="launch_newwindow('https://www.twitch.tv/ashatack68'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://www.twitch.tv/ashatack68" target="_blank">here</a> for the website of The just on  track show with Ashatack<br><span class="player-host">Live</span>.</div>
                    <div class="bassdrive_social_link stream_paypal" onclick="launch_newwindow('https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C" target="_blank">here</a> to make a donation to Bassdrive.</div>
                    <div class="bassdrive_social_link stream_json" onclick="launch_newwindow('http://jony5.com/_proxy/bassdrive_colors/?stream=y0NXmHUd7pz5pqgZahU2KAvFXWCXxPOsUKlD6rI5t3dP0WiuJzakPQXZBn2OkuTf'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div>
                    <div class="cb"></div>
                </div>
            </div>
            <div class="colors_wrapper">
                <div class="colors_img_wrapper"><img src="http://jony5.com/common/imgs/bassdrive_component_creative/flag_united_kingdom.gif" width="64" height="32" alt="LONDON, UK" title="National flag for LONDON, UK"></div>
                <div class="cb"></div>
                <div class="colors_city_state">LONDON, UK</div>
                <div class="cb"></div>
                <div class="colors_show_date_generated"><span style="font-weight: bold;">Generated on:&nbsp;&nbsp;</span>Thursday, Nov. 11 at 17:42:05 EST</div>
            </div>
        </div>
        <div class="colors_hr_wrapper"><div class="colors_hr"></div></div>

        */

    }

    public function generate_stream_meta_stats($oQueryProfileMgr){

        // STATS META

    }

    public function return_history_html(){

        //
        // HTML FOR HISTORY HTML INJECTION.
        $tmp_html_out = '<div>
            <div class="colors_show_title_wrapper">The just on  track show with Ashatack<br><span class="player-host"><span style="color:#F00; font-weight: bold;">Live</span></span>
                <div class="cb"></div>
                <div id="bassdrive_social_wrapper" class="bassdrive_social_wrapper">
                    <div class="bassdrive_social_link stream_soundcloud" onclick="launch_newwindow(\'https://soundcloud.com/ashatack\'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://soundcloud.com/ashatack" target="_blank">here</a> for the The just on  track show with Ashatack<br><span class="player-host">Live</span> SoundCloud playlist.</div>

                    <div class="bassdrive_social_link stream_twitter" onclick="launch_newwindow(\'https://twitter.com/Ashatack68\'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://twitter.com/Ashatack68" target="_blank">here</a> for the The just on  track show with Ashatack<br><span class="player-host">Live</span> Twitter feed.</div>

                    <div class="bassdrive_social_link stream_www" onclick="launch_newwindow(\'https://www.twitch.tv/ashatack68\'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://www.twitch.tv/ashatack68" target="_blank">here</a> for the website of The just on  track show with Ashatack<br><span class="player-host">Live</span>.</div>
                    <div class="bassdrive_social_link stream_paypal" onclick="launch_newwindow(\'https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C\'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div><div class="hidden">Click <a href="https://www.paypal.com/donate?hosted_button_id=GWNVTUTPEAA8C" target="_blank">here</a> to make a donation to Bassdrive.</div>
                    <div class="bassdrive_social_link stream_json" onclick="launch_newwindow(\'http://jony5.com/_proxy/bassdrive_colors/?stream=y0NXmHUd7pz5pqgZahU2KAvFXWCXxPOsUKlD6rI5t3dP0WiuJzakPQXZBn2OkuTf\'); return false;" style="background-image:url(http://jony5.com/common/imgs/bassdrive_component_creative/social_integration_sprite_sm.png?v=42020173.1635649010.0)"></div>
                    <div class="cb"></div>
                </div>
            </div>
            <div class="colors_wrapper">
                <div class="colors_img_wrapper"><img src="http://jony5.com/common/imgs/bassdrive_component_creative/flag_united_kingdom.gif" width="64" height="32" alt="LONDON, UK" title="National flag for LONDON, UK"></div>
                <div class="cb"></div>
                <div class="colors_city_state">LONDON, UK</div>
                <div class="cb"></div>
                <div class="colors_show_date_generated"><span style="font-weight: bold;">Generated on:&nbsp;&nbsp;</span>Thursday, Nov. 11 at 17:42:05 EST</div>
            </div>
        </div>
        <div class="colors_hr_wrapper"><div class="colors_hr"></div></div>
        ';

        return $tmp_html_out;

    }

    /*
    if($this->oSTREAM_OUTPUT_CONTROLLER->){

    }

//        if(!isset($this->stream_history_log['IS_LIVE' . $tmp_STREAM_KEY]) || !isset($this->stream_history_log['REPLAY'.$tmp_STREAM_KEY])){
//
//            //
//            // IS THIS LIVE?
//            if($this->stream_is_LIVE($title)){
//
//                $tmp_stream_live_type = 'IS_LIVE';
//
//            }else{
//
//                $tmp_stream_live_type = 'REPLAY';
//
//            }
//
//            $this->stream_history_log[$tmp_stream_live_type.$tmp_STREAM_KEY] = 1;
//
//        }

    return $this->oSTREAM_OUTPUT_CONTROLLER->;

    */

    public function __destruct() {

    }
}