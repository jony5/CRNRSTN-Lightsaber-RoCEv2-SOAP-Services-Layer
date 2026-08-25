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
 * GLOBAL FUNCTION
 * RESOURCE DEFINITION :: _crnrstn_pretty_elapsed_time
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Friday, September 13, 2024 @ 2357 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com
 * TITLE               :: The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer Pretty
 *                        Runtime Duration Data
 *                        Output Return (or Pretty
 *                        Wall Time) Global
 *                        Function Definition
 * DESCRIPTION         :: The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer Pretty
 *                        Output Runtime Duration
 *                        Data Return (or pretty
 *                        wall time) pads the user
 *                        experience (UX) with a
 *                        softer and more human
 *                        measurement of the passage
 *                        of time within the context
 *                        of an "always timestamp
 *                        accurate to the micro-
 *                        second" computer system.
 *
 *
 *                        5
 *
 *                        Saturday, September 14, 2024 @ 0212 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 1.00.0000 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return string Returns different formats of elapsed time.
 * @access public
 *
 */
function _crnrstn_pretty_elapsed_time(
         $iso_lang_code = 'en', 
         $duration_seconds_override = NULL, 
         $mode = 'ELAPSED_VERBOSE')
{
    // This method was copied from
    // the CRNRSTN :: Lightsaber
    // SOAP Services Layer.
    //
    //
    // 5
    //
    // Friday, September 13, 2024 @ 0813 hrs.

    $tmp_microsecs = '';
    $tmp_lang_content_ARRAY = _crnrstn_elapsed_time_language_data($iso_lang_code);

    if(isset($duration_seconds_override)){

        //
        // TODO :: There should be some
        //         UGC validation on the
        //         duration seconds
        //         override parameter.
        //         5 :: Saturday, September 14, 2024 @ 0151 hrs.
        // $duration_seconds_override = 42.379423;  // or '42.379423', 42, '42',...
        $tmp_runtime = $duration_seconds_override;

    }else{

        $tmp_runtime = _crnrstn_wall_time();

    }

    $tmp_pos_dot = strpos($tmp_runtime, '.');
    if($tmp_pos_dot !== false){

        $tmp_microsecs_explode = explode('.', $tmp_runtime);
        $tmp_microsecs = $tmp_microsecs_explode[1];
        $tmp_microsecs = '0.' . $tmp_microsecs;

    }

    switch($mode){
        case 'ELAPSED_VERBOSE':

            //
            // SOURCE :: http://php.net/manual/en/function.time.php
            //
            // This should be exposed
            // to the language engine
            // of the eVifweb
            // client extranet.
            //
            // This should not be
            // hard coded
            // english...Oh my, what
            // a requirement this is.
            //
            // Regarding CRNRSTN ::,
            // it may not be
            // appropriate to push
            // language considerations.
            //
            // Well, maybe...this would
            // be a first for CRNRSTN ::
            //
            // I don't want to proceed
            // until I am clear about
            // language support
            // direction for this.
            //
            // There are implications.
            //
            // To really take care of
            // the people, don't forget
            // singular and plural
            // support for multiple
            // language...so 2x the
            // number of formats...
            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T

            //
            // We need to approach
            // this differently to
            // allow for plural.
            //
            //
            // 5
            //
            // Saturday, September 14, 2024 @ 0039 hrs.
            $bit = array(
                '0' => $tmp_runtime / 31556926 % 12,
                '1' => $tmp_runtime / 604800 % 52,
                '2' => $tmp_runtime / 86400 % 7,
                '3' => $tmp_runtime / 3600 % 24,
                '4' => $tmp_runtime / 60 % 60,
                '5' => ($tmp_runtime % 60) + (double) $tmp_microsecs
            );

            $bit_singular = array(
                '0' => ' ' . $tmp_lang_content_ARRAY['YEAR'],
                '1' => ' ' . $tmp_lang_content_ARRAY['WEEK'],
                '2' => ' ' . $tmp_lang_content_ARRAY['DAY'],
                '3' => ' ' . $tmp_lang_content_ARRAY['HOUR'],
                '4' => ' ' . $tmp_lang_content_ARRAY['MINUTE'],
                '5' => ' ' . $tmp_lang_content_ARRAY['SECOND']
            );

            $bit_plural = array(
                '0' => ' ' . $tmp_lang_content_ARRAY['YEARS'],
                '1' => ' ' . $tmp_lang_content_ARRAY['WEEKS'],
                '2' => ' ' . $tmp_lang_content_ARRAY['DAYS'],
                '3' => ' ' . $tmp_lang_content_ARRAY['HOURS'],
                '4' => ' ' . $tmp_lang_content_ARRAY['MINUTES'],
                '5' => ' ' . $tmp_lang_content_ARRAY['SECONDS']
            );

            foreach($bit as $k => $v){

                if($v > 1){

                    $ret[] = $v . $bit_plural[$k];
                    //error_log('finite (194) test ->' . $bit_plural[$k]);

                }else{

                    if($v == 1){

                        $ret[] = $v . $bit_singular[$k];
                        //error_log('finite (200) test ->' . $bit_singular[$k]);

                    }

                }

            }

//        //
//        // Appending an "S" for
//        // plural is primarily
//        // an english language
//        // string pattern treatment.
//        //
//        // We can't on rely on
//        // this append for the
//        // purposes of the
//        // CRNRSTN :: Lightsaber
//        // SOAP Services Layer.
//        //
//        //
//        // 5
//        //
//        // Saturday, September 14, 2024 @ 0132 hrs.
//        foreach($bit_singular as $k => $v){
//
//            if($v > 1)$ret[] = $v . $k . 's';
//            if($v == 1)$ret[] = $v . $k;
//
//        }

            if(isset($ret)){

                array_splice($ret, count($ret) - 1, 0, $tmp_lang_content_ARRAY['AND']);

                $tmp_output = trim(join(' ', $ret));

                $tmp_output = ltrim($tmp_output, $tmp_lang_content_ARRAY['AND']);

            }else{

                $tmp_output = _crnrstn_wall_time();

                $tmp_output .= ' ' . $tmp_lang_content_ARRAY['SECS'];

            }

            return $tmp_output;

        break;
        case 'ELAPSED':
        default:

            $bit = array(
                $tmp_lang_content_ARRAY['Y'] => $tmp_runtime / 31556926 % 12,
                $tmp_lang_content_ARRAY['W'] => $tmp_runtime / 604800 % 52,
                $tmp_lang_content_ARRAY['D'] => $tmp_runtime / 86400 % 7,
                $tmp_lang_content_ARRAY['H'] => $tmp_runtime / 3600 % 24,
                $tmp_lang_content_ARRAY['M'] => $tmp_runtime / 60 % 60,
                $tmp_lang_content_ARRAY['S'] => ($tmp_runtime % 60) + (double) $tmp_microsecs
            );

            //
            // Let's confirm
            // the language operation.
            // error_log('[lnum ' . __LINE__ . '] Y->' . $tmp_lang_content_ARRAY['Y']);      // shows 1...not y...

            foreach($bit as $k => $v){

                if($v > 0){

                    //
                    // Put in a 
                    // curfew for 
                    // time granularity. 
                    if(($k == $tmp_lang_content_ARRAY['Y']) || 
                        ($k == $tmp_lang_content_ARRAY['W']) || 
                        ($k == $tmp_lang_content_ARRAY['D'] && $v > 1))
                    {

                        //
                        // Return the default
                        // date format.
                        if(isset($format_override)){

                            return date($format_override, $tmp_runtime);

                        }else{

                            return date('m.d.Y @ H:i:s', $tmp_runtime);

                        }

                    }else{

                        $ret[] = $v . $k;

                    }

                }

            }

            if(!isset($ret)){

                $ret[] = $tmp_lang_content_ARRAY['JUST'] . '.';

            }else{

                if(sizeof($ret) == 0){

                    $ret[] = $tmp_lang_content_ARRAY['JUST'] . '.';

                }else{

                    $ret[] = $tmp_lang_content_ARRAY['AGO'];

                }

            }

            return join(' ', $ret);

        break;

    }

}