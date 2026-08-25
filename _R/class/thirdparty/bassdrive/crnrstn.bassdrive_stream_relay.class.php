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
 * CLASS DEFINITION :: crnrstn_bassdrive_stream_relay
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: November 10, 2021 @ 2202 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     Bassdrive.com Radio Show
 *                     Broadcast JSON Stream
 *                     Relay JavaScript object
 *                     (JSON) faithful PHP
 *                     class objectification.
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
 *                     "relays" : [
 *                        {
 *                           "bitrate" : "128",
 *                           "status" : "1",
 *                           "name" : "bassdrive.radioca.st:8702",
 *                           "listenerCount" : "54",
 *                           "listenerCountPercentage" : "0.54",
 *                           "audioFormat" : "mp3",
 *                           "streamURL" : "http:\/\/bassdrive.radioca.st:8702",
 *                           "streamURLios" : "http:\/\/bassdrive.radioca.st:8702",
 *                           "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
 *                        },
 *                        {
 *                           "bitrate" : "128",
 *                           "status" : "1",
 *                           "name" : "chi.bassdrive.co:80",
 *                           "listenerCount" : "109",
 *                           "listenerCountPercentage" : "1.09",
 *                           "audioFormat" : "mp3",
 *                           "streamURL" : "http:\/\/chi.bassdrive.co:80",
 *                           "streamURLios" : "http:\/\/chi.bassdrive.co:80",
 *                           "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
 *                        },
 *                        {
 *                           "bitrate" : "128",
 *                           "status" : 0,
 *                           "name" : "ice.bassdrive.net:80\/stream",
 *                           "listenerCount" : "0",
 *                           "listenerCountPercentage" : 0,
 *                           "audioFormat" : "mp3",
 *                           "streamURL" : "http:\/\/ice.bassdrive.net:80\/stream",
 *                           "streamURLios" : "http:\/\/ice.bassdrive.net:80\/stream",
 *                           "title" : ""
 *                        },
 *                        {
 *                           "bitrate" : "32",
 *                           "status" : 0,
 *                           "name" : "ice.bassdrive.net:80\/stream32",
 *                           "listenerCount" : "0",
 *                           "listenerCountPercentage" : 0,
 *                           "audioFormat" : "aac+",
 *                           "streamURL" : "http:\/\/ice.bassdrive.net:80\/stream32",
 *                           "streamURLios" : "http:\/\/ice.bassdrive.net:80\/stream32",
 *                           "title" : ""
 *                        },
 *                        {
 *                           "bitrate" : "56",
 *                           "status" : 0,
 *                           "name" : "ice.bassdrive.net:80\/stream56",
 *                           "listenerCount" : "0",
 *                           "listenerCountPercentage" : 0,
 *                           "audioFormat" : "mp3",
 *                           "streamURL" : "http:\/\/ice.bassdrive.net:80\/stream56",
 *                           "streamURLios" : "http:\/\/ice.bassdrive.net:80\/stream56",
 *                           "title" : ""
 *                        },
 *                        {
 *                           "bitrate" : "128",
 *                           "status" : "1",
 *                           "name" : "stream.bassdrive.uk:8200",
 *                           "listenerCount" : "14",
 *                           "listenerCountPercentage" : "2.73",
 *                           "audioFormat" : "mp3",
 *                           "streamURL" : "http:\/\/stream.bassdrive.uk:8200",
 *                           "streamURLios" : "http:\/\/stream.bassdrive.uk:8200",
 *                           "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
 *                        }
 *                       ],
 *       
 *                     "stats" : [
 *                        {
 *                           "bandwidth" : 22.13,
 *                           "connections" : 177,
 *                           "name" : "Total",
 *                           "capacity" : 20510,
 *                           "bandwidthFormat" : "megabit"
 *                        },
 *                        {
 *                           "bandwidth" : 15.38,
 *                           "connections" : 123,
 *                           "name" : "TotalUnique",
 *                           "capacity" : 20510,
 *                           "bandwidthFormat" : "megabit"
 *                        },
 *                        {
 *                           "bandwidth" : 22.13,
 *                           "bitrateFormat" : "kilobit",
 *                           "bitrate" : 128,
 *                           "connections" : 177,
 *                           "name" : "Premium",
 *                           "capacity" : 20510,
 *                           "bandwidthFormat" : "megabit"
 *                       },
 *                       {
 *                           "bandwidth" : 0,
 *                           "bitrateFormat" : "kilobit",
 *                           "bitrate" : 56,
 *                           "connections" : 0,
 *                           "name" : "Midgrade",
 *                           "capacity" : 0,
 *                           "bandwidthFormat" : "megabit"
 *                        },
 *                        {
 *                           "bandwidth" : 0,
 *                           "bitrateFormat" : "kilobit",
 *                           "bitrate" : 32,
 *                           "connections" : 0,
 *                           "name" : "AACplus",
 *                           "capacity" : 0,
 *                           "bandwidthFormat" : "megabit"
 *                        },
 *                        {
 *                           "bandwidth" : 0,
 *                           "bitrateFormat" : "kilobit",
 *                           "bitrate" : 128,
 *                           "connections" : null,
 *                           "name" : "Random",
 *                           "capacity" : null,
 *                           "bandwidthFormat" : "megabit"
 *                        }
 *                       ],
 *       
 *                     "nowplaying" : [
 *                        {
 *                           "name" : "Kos.Mos Music Presents Phuture - hosted by Freestylers",
 *                           "label" : "Artist"
 *                        },
 *                        {
 *                           "name" : "Kos.Mos Music Presents Phuture - hosted by Freestylers",
 *                           "label" : "Title"
 *                        }
 *                       ]
 *                     }
 *                  
 *                     ❤ ❤ C ❤ R ❤ N ❤ R ❤ S ❤ T ❤ N ❤ : : ❤ ❤ ❤ ❤
 *                     This work by eVifweb is done 
 *                     in memory of my boy, J5, 
 *                     ...who would have turned 16 
 *                     today, if he had not kicked 
 *                     the bucket back in August.
 *
 *                     ❤ you, my boy.
 *
 *
 *                     5
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
class crnrstn_bassdrive_stream_relay {

    protected $relay_serial;
    protected $stream_relay_ojson_serial;
    protected $stream_relay_nowplaying_title;

    protected $relay_meta_ARRAY = array();
    protected $stream_relay_isactive = 0;

    public function __construct($relay_serial, $ojson_serial, $nowplaying_title){

        $this->stream_relay_ojson_serial = $ojson_serial;
        $this->stream_relay_nowplaying_title = $nowplaying_title;

        $this->relay_serial = $relay_serial;

    }

    public function return_stream_title(){

        $tmp_nowplaying_len = strlen($this->stream_relay_nowplaying_title);
        $tmp_title_len = strlen($this->relay_meta_ARRAY['title']);
        if($tmp_nowplaying_len > 5 && $tmp_nowplaying_len >= $tmp_title_len){

            return $this->stream_relay_nowplaying_title;

        }else{

            return $this->relay_meta_ARRAY['title'];

        }

    }

    public function return_serial(){

        return $this->relay_serial;

    }

    public function return_isactive(){

        return $this->stream_relay_isactive;

    }

    public function load_meta($json_relay_node){

        /*
        {
             "bitrate" : "128",
             "status" : "1",
             "name" : "stream.bassdrive.uk:8200",
             "listenerCount" : "14",
             "listenerCountPercentage" : "2.73",
             "audioFormat" : "mp3",
             "streamURL" : "http:\/\/stream.bassdrive.uk:8200",
             "streamURLios" : "http:\/\/stream.bassdrive.uk:8200",
             "title" : "Kos.Mos Music Presents Phuture - hosted by Freestylers"
        }

        */

        //
        // RELAY IS ACTIVE
        if(isset($json_relay_node['status'])){

            if($json_relay_node['status'] == 1 || $json_relay_node['status'] == '1'){

                $this->stream_relay_isactive = 1;

            }

        }

        $this->store_local_meta('bitrate', $json_relay_node);
        $this->store_local_meta('status', $json_relay_node);
        $this->store_local_meta('name', $json_relay_node);
        $this->store_local_meta('listenerCount', $json_relay_node);
        $this->store_local_meta('listenerCountPercentage', $json_relay_node);
        $this->store_local_meta('audioFormat', $json_relay_node);
        $this->store_local_meta('streamURL', $json_relay_node);
        $this->store_local_meta('streamURLios', $json_relay_node);
        $this->store_local_meta('title', $json_relay_node);


    }

    private function store_local_meta($meta_type, $json_node){

        if(isset($json_node[$meta_type])){

            $this->relay_meta_ARRAY[$meta_type] = $json_node[$meta_type];

        }

    }

    public function __destruct() {

    }

}