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
 * CLASS DEFINITION :: crnrstn_finite_expression
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: July 4, 2020 @ 1620 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     RoCev2 SOAP Services Layer 
 *                     user interface (UI) HTML 
 *                     string output class for  
 *                     X (Twitter) style finite 
 *                     measures of time.
 *
 *                     Leftover notes from a grey
 *                     area between CRNRSTN :: v1.0.1 
 *                     and 2.00.0000 (Lightsaber), 
 *
 *                     ...where for like a whole  
 *                     year or something, the folder 
 *                     name for this class was 
 *                     something like:
 *
 *                     /xxxxxxxx/
 *
 *                     [Begin notes at a time 
 *                      when the folder name 
 *                      was 'xxxxxxxx' and
 *                      we were exploring new
 *                      names and just tried 
 *                      to "go hard creative 
 *                      poet-mode" with 
 *                      whatever I could 
 *                      "muster up" on a crisp 
 *                      scripturally-based
 *                      angle for class names 
 *                      in order for me to 
 *                      have some ideas in 
 *                      my notes to look at 
 *                      in the future and 
 *                      think about on the 
 *                      topic of names again. Begin:]
 *
 *                      I'm not super stoked about 
 *                      the class name...but we 
 *                      will continue to explore 
 *                      right here (right now):
 * 
 *                          If I can find some 
 *                          appropriate and scripturally 
 *                          related element to represent 
 *                          or embody this date/time thing, 
 *                          I'll do it. Think something like:
 *
 *                              $Foo = new sans_eternity(), or 
 *                              $Foo = new crnrstn_finite_expression().
 *
 *                          "kivotos" and communication "streams" 
 *                          are excellent and appropriate examples 
 *                          of using Bible stuff in code in action.
 *
 *                          [begin poetry]
 *                          Jesus Christ on the 
 *                          earth was God infinite 
 *                          expressed in man-finite. 
 *
 *                          Jesus on earth was the 
 *                          finite expression of 
 *                          the Almighty God the 
 *                          Creator of the heavens 
 *                          and the earth in space 
 *                          and in time, and He 
 *                          is reproducing Himself 
 *                          in us today. [end poetry]
 *
 *                  [end grey area dev poet notes]
 *
 *
 * 5
 *
 * Monday, July 29, 2024 @ 1115 hrs.
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
class crnrstn_finite_expression
{

    private static $lang_struct_time = array();

    public function __construct(){

        $this->initialize_language();

    }

     public function config_load_static_application_data($data_type, $oCRNRSTN){

        switch($data_type){
            case 'R_timezone_syntax':
                // Monday, November 20, 2023 @ 0446 hrs.
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE  :: https://www.php.net/manual/en/timezones.php
                 * COMMENT :: https://www.php.net/manual/en/timezones.php#128799
                 * AUTHOR  :: info at scheduleplus dot xyz
                 *
                 * This data was last modified 
                 * on Wednesday, November 1, 2023 @ 2331 hrs.
                 *
                 *
                 * 5 :: Monday, November 20, 2023 @ 0446 hrs.
                 *
                 * Initialize timezones. 
                 *
                 */
                // 5 :: Sunday, June 30, 2024 @ 0756 hrs.
                return _crnrstn_settings($data_type, $oCRNRSTN);

            break;
            default:

                error_log(__LINE__ . ' env Unknown switch case received. ['. strval($data_type) . '].');

            break;

        }

    }

    function incarnate(
             $mode, 
             $sys_ts, 
             $delta_secs_input = false, 
             $format_override = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added input parameter, 
         *       $delta_secs_input = false, 
         *       to crnrstn_finite_expression 
         *       incarnate class method. 
         *       5 :: Thursday, May 21, 2026 @ 0220 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Date Display modes - 
         * The Minimum Requirement.
         * $mode = 'ELAPSED_VERBOSE'; 
         *         15 weeks 3 days 4 hours 2 minutes 5 seconds ago
         * 
         * $mode = 'ELAPSED'; 
         *         15w 3d 4h 2m 5s ago
         * 
         * $mode = ??? system(default) 
         *         MM.DD.YYYY at 24:00:00
         *
         *
         * 5
         *
         * Monday, July 29, 2024 @ 1040 hrs.
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * We should calculate 
         * the current timestamp 
         * that is used in 
         * measurement as close 
         * to the point of 
         * implementation as 
         * possible for the 
         * most accurate 
         * time output. 
         *
         * I.e. we only want 
         * relevant uses of 
         * multi-language 
         * phrases such as 
         * "...just now", 
         * or "...5 secs ago." 
         * as output.
         *
         * The timestamp of 
         * the start of the 
         * request is available 
         * in $_SERVER['request_time'] 
         * since php 5.1. 
         *
         * So compare that
         * with oCRNRSTN oENV->wall_time() 
         * and run some dumb 
         * calculations and 
         * consider pulling in
         * the raw $_SERVER[] 
         * parameter for start 
         * time into the 
         * constructor of CRNRSTN ::
         *
         * We will need to 
         * convert system time 
         * to seconds. 
         *
         * Try this.
         *
         */
        $tmp_sys_ts_seconds = $sys_ts;
        if($delta_secs_input == false){

            $tmp_sys_ts_seconds = \strtotime($sys_ts);

        }

        switch($mode){
            case 'ELAPSED':

                 #$ts = time();
                 $tmp_output = $this->elapsed($tmp_sys_ts_seconds, $format_override);

            break;
            case 'ELAPSED_VERBOSE':

                #$ts = time();
                $tmp_output = $this->elapsed_verbose($tmp_sys_ts_seconds, $format_override);

            break;
            default:

                if(isset($format_override)){

                    $tmp_output = date($format_override, $tmp_sys_ts_seconds);

                }else{

                    $tmp_output = date('m.d.Y @ H:i:s', $tmp_sys_ts_seconds);

                }

            break;

        }

        return $tmp_output;

    }

    //
    // This should not 
    // require or depend 
    // upon the eVifweb 
    // client extranet 
    // language engine. 
    // 
    // This is to support 
    // CRNRSTN :: uses of 
    // this class sans 
    // multi-language support.
    // 
    // 
    // 5 TODO :: Are we sure about 
    //           this? No multi-language 
    //           support here? 
    //
    //           Who made this 
    //           call?...and 
    //           when,...2002? 
    //
    //           Things are way
    //           different now.
    //
    //           5 :: Monday, July 29, 2024 @ 1008 hrs.
    //
    private function initialize_language(){

        self::$lang_struct_time['YEAR']    = 'year';
        self::$lang_struct_time['YEARS']   = 'years';
        self::$lang_struct_time['Y']       = 'y';
        self::$lang_struct_time['WEEK']    = 'week';
        self::$lang_struct_time['WEEKS']   = 'weeks';
        self::$lang_struct_time['W']       = 'w';
        self::$lang_struct_time['DAY']     = 'day';
        self::$lang_struct_time['DAYS']    = 'days';
        self::$lang_struct_time['D']       = 'd';
        self::$lang_struct_time['HOUR']    = 'hour';
        self::$lang_struct_time['HOURS']   = 'hours';
        self::$lang_struct_time['H']       = 'h';
        self::$lang_struct_time['MINUTE']  = 'minute';
        self::$lang_struct_time['MINUTES'] = 'minutes';
        self::$lang_struct_time['M']       = 'm';
        self::$lang_struct_time['SECOND']  = 'second';
        self::$lang_struct_time['SECONDS'] = 'seconds';
        self::$lang_struct_time['S']       = 's';
        self::$lang_struct_time['AND']     = 'and';
        self::$lang_struct_time['AGO']     = 'ago';

        #error_log("finite (101)->" . print_r(self::$lang_struct_time['WEEKS']));

    }

    //
    // This will initialize 
    // the language (iso) that 
    // is to be used by the 
    // finite_express object. 
    // 
    // Hit this once per page 
    // to configure all finite 
    // expressions for session 
    // isocode.
    // 
    // This method call 
    // is optional. 
    // 
    // English will be 
    // assumed by default.
    //
    //
    // 5
    public function configure_language($oUser){

        //
        // This. Will. Be. MANUAL.
        self::$lang_struct_time['YEAR']    = $oUser->getLangElem('FINITE_EXP_YEAR');
        self::$lang_struct_time['YEARS']   = $oUser->getLangElem('FINITE_EXP_YEARS');
        self::$lang_struct_time['Y']       = $oUser->getLangElem('FINITE_EXP_Y');
        self::$lang_struct_time['WEEK']    = $oUser->getLangElem('FINITE_EXP_WEEK');
        self::$lang_struct_time['WEEKS']   = $oUser->getLangElem('FINITE_EXP_WEEKS');
        self::$lang_struct_time['W']       = $oUser->getLangElem('FINITE_EXP_W');
        self::$lang_struct_time['DAY']     = $oUser->getLangElem('FINITE_EXP_DAY');
        self::$lang_struct_time['DAYS']    = $oUser->getLangElem('FINITE_EXP_DAYS');
        self::$lang_struct_time['D']       = $oUser->getLangElem('FINITE_EXP_D');
        self::$lang_struct_time['HOUR']    = $oUser->getLangElem('FINITE_EXP_HOUR');
        self::$lang_struct_time['HOURS']   = $oUser->getLangElem('FINITE_EXP_HOURS');
        self::$lang_struct_time['H']       = $oUser->getLangElem('FINITE_EXP_H');
        self::$lang_struct_time['MINUTE']  = $oUser->getLangElem('FINITE_EXP_MINUTE');
        self::$lang_struct_time['MINUTES'] = $oUser->getLangElem('FINITE_EXP_MINUTES');
        self::$lang_struct_time['M']       = $oUser->getLangElem('FINITE_EXP_M');
        self::$lang_struct_time['SECOND']  = $oUser->getLangElem('FINITE_EXP_SECOND');
        self::$lang_struct_time['SECONDS'] = $oUser->getLangElem('FINITE_EXP_SECONDS');
        self::$lang_struct_time['S']       = $oUser->getLangElem('FINITE_EXP_S');
        self::$lang_struct_time['AND']     = $oUser->getLangElem('FINITE_EXP_AND');
        self::$lang_struct_time['AGO']     = $oUser->getLangElem('FINITE_EXP_AGO');

    }

    # SOURCE :: http://php.net/manual/en/function.time.php
    private function elapsed($secs, $format_override){

        $ts = time();
        $delta_secs = $ts - $secs;

        $bit = array(
            self::$lang_struct_time['Y'] => $delta_secs / 31556926 % 12,
            self::$lang_struct_time['W'] => $delta_secs / 604800 % 52,
            self::$lang_struct_time['D'] => $delta_secs / 86400 % 7,
            self::$lang_struct_time['H'] => $delta_secs / 3600 % 24,
            self::$lang_struct_time['M'] => $delta_secs / 60 % 60,
            self::$lang_struct_time['S'] => $delta_secs % 60
        );

        //
        // Let's confirm 
        // language operation.
        //error_log("(146) Y->".self::$lang_struct_time['Y']);      // shows 1...not y...

        foreach($bit as $k => $v){

            if($v > 0){

                //
                // Put in a curfew 
                // for the time granularity.
                //
                //
                // 5
                // 
                // Monday, July 29, 2024 @ 1022 hrs.
                if(($k == self::$lang_struct_time['Y']) ||
                    ($k == self::$lang_struct_time['W']) ||
                    ($k == self::$lang_struct_time['D'] && $v > 1))
                {

                    //
                    // Return the default
                    // date format.
                    //
                    //
                    // 5 :: Monday, July 29, 2024 @ 1023 hrs.
                    if(isset($format_override)){

                        return date($format_override, $secs);

                    }else{

                        return date('m.d.Y @ H:i:s', $secs);
                    }

                }else{

                    $ret[] = $v . $k;

                }

            }

        }

        if(!isset($ret)){

            $ret[] = 'just now.';

        }else{

            if(sizeof($ret) == 0){

                $ret[] = 'just now.';

            }else{

                $ret[] = self::$lang_struct_time['AGO'];

            }

        }

        return join(' ', $ret);

    }

    # SOURCE :: http://php.net/manual/en/function.time.php
    private function elapsed_verbose($secs){
        // 5 :: This should be exposed to 
        //      the multi-language engine 
        //      of the eVifweb 
        //      client extranet. 
        //      
        //      Not hard coded english....oh my. 
        //      
        //      What a requirement this is. 
        //      
        //      Regarding-CRNRSTN ::, it may 
        //      not be appropriate to push the 
        //      language considerations too 
        //      early in the stack. 
        //      
        //      Well, maybe....this would be 
        //      a first for CRNRSTN :: ...
        //      
        //      I don't want to proceed 
        //      until I am clear about the 
        //      language support direction 
        //      for this. 
        //      
        //      There are implications.
        //      
        //      To really take care of the 
        //      people, don't forget singular 
        //      and plural support for 
        //      multiple lang...so 2x the 
        //      number of formats...
        //
        # C # R # N # R # S # T # N # :: # L # I # G # H # T

        //
        // We need to approach 
        // this differently to 
        // allow for plural.
        //
        //
        // 5
        //
        // Monday, July 29, 2024 @ 1028 hrs.
        $bit = array(
            '0'     => $secs / 31556926 % 12,
            '1'     => $secs / 604800 % 52,
            '2'     => $secs / 86400 % 7,
            '3'     => $secs / 3600 % 24,
            '4'     => $secs / 60 % 60,
            '5'     => $secs % 60
        );

        $bit_singular = array(
            '0'     => ' '.self::$lang_struct_time['YEAR'],
            '1'     => ' '.self::$lang_struct_time['WEEK'],
            '2'     => ' '.self::$lang_struct_time['DAY'],
            '3'     => ' '.self::$lang_struct_time['HOUR'],
            '4'     => ' '.self::$lang_struct_time['MINUTE'],
            '5'     => ' '.self::$lang_struct_time['SECOND']
        );

        $bit_plural = array(
            '0'     => ' '.self::$lang_struct_time['YEARS'],
            '1'     => ' '.self::$lang_struct_time['WEEKS'],
            '2'     => ' '.self::$lang_struct_time['DAYS'],
            '3'     => ' '.self::$lang_struct_time['HOURS'],
            '4'     => ' '.self::$lang_struct_time['MINUTES'],
            '5'     => ' '.self::$lang_struct_time['SECONDS']
        );

        foreach($bit as $k => $v){

            if($v > 1){

                $ret[] = $v . $bit_plural[$k];
                //error_log("finite (194) test ->".$bit_plural[$k]);

            }else{

                if($v == 1){

                    $ret[] = $v . $bit_singular[$k];
                    //error_log("finite (200) test ->".$bit_singular[$k]);

                }

            }

        }

        //
        // Deprecated :: Appending an "s" for 
        //               plural is primarily 
        //               english architecture. 
        //
        //               We can't rely on this 
        //               append (exclusively) 
        //               for our purposes. 
        //
        //               Ok for error logs... 
        //               ...prolly, tho. 
        //
        //               yeah, screw error 
        //               logs + multi-byte chars.
        //
        //
        //               5 :: Monday, July 29, 2024 @ 1033 hrs.
        //
        // foreach($bit_singular as $k => $v){
        //     if($v > 1)$ret[] = $v . $k . 's';
        //     if($v == 1)$ret[] = $v . $k;
        // }

        array_splice($ret, count($ret)-1, 0, self::$lang_struct_time['AND']);
        $ret[] = self::$lang_struct_time['AGO'];

        return join(' ', $ret);

    }

    public function addTimerBuffer($timer_copy, $lastcontact){

        $tsec = time();

        //
        // GET DELTA SECONDS
        $tmp_lastcontact_tsec = strtotime($lastcontact);

        # $timer_copy = 0:00:09
        $delta_secs = $tsec - $tmp_lastcontact_tsec;

        list($tmp_hour, $tmp_min, $tmp_sec) = explode(':', $timer_copy);

        $tmp_secs_cum = $this->convertToSecs($tmp_hour, $tmp_min, $tmp_sec);

        $final_secs_cum = $tmp_secs_cum + $delta_secs;

        $timer_copy_new = $this->secsTimerExplode($final_secs_cum, ':');

        return $timer_copy_new;

    }

    public function secsTimerExplode($secs, $delim){

        //
        // Extract hours, 
        // min, and secs 
        // from total secs.
        //
        // SOURCE   :: https://stackoverflow.com/questions/3172332/convert-seconds-to-hourminutesecond/3172358
        // COMMENT  :: https://stackoverflow.com/a/3172368
        // AUTHOR   :: https://stackoverflow.com/users/51760/aif
        //
        //
        // aif
        //
        $hours = floor($secs / 3600);
        $minutes = floor(($secs / 60) % 60);
        $seconds = $secs % 60;
        //error_log('287 finiteexpress hour[' . $hours.'] min[' . $minutes.'] sec[' . $seconds.']');

        if($seconds < 10){

            $seconds = '0' . $seconds;

        }

        if($minutes < 10){

            $minutes = '0' . $minutes;
        }

        return $hours . $delim . $minutes . $delim . $seconds;

    }

    private function convertToSecs($hour, $min, $sec){

        /*
        $hour = '01',
        $min  = '05,
        $sec  = '09'

        */

        $hour = intval($hour);
        $min = intval($min);
        $sec = intval($sec);

        //error_log('311 finiteexpress hour[' . $hour.'] min[' . $min.'] sec[' . $sec.']');

        $tmp_hour_secs = $hour * 60 * 60;
        $tmp_min_secs = $min * 60;

        $tmp_cum_secs = (int) $sec + (int) $tmp_hour_secs + (int) $tmp_min_secs;

        return $tmp_cum_secs;

    }

    public function __destruct() {

    }

}