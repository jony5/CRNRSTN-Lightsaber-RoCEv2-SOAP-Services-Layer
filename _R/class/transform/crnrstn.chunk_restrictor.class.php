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
 * CLASS DEFINITION :: crnrstn_chunk_restrictor
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: October 23, 2020 @ 0747 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Chunk
 *                     Restrictor (string data)
 *                     will break a string into
 *                     any specified target size
 *                     chunks, brutally.
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 0950 hrs.
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
class crnrstn_chunk_restrictor {

    private static $oCRNRSTN_ENV;

    protected $chunk_hash;
    protected $raw_content;
    protected $encoding;
    protected $max_len = 52;
    protected $content_mbstring_length;
    protected $chunk_line_out_ARRAY = array();
    protected $chunk_HTML_line_out_ARRAY = array();
    protected $chunk_TEXT_line_out_ARRAY = array();
    private static $output_HTML_str_ARRAY = array();
    protected $output_TEXT_str_ARRAY = array();
    protected $output_LOG_str_ARRAY = array();

    private static $chunkResults_ARRAY = array();

    public function __construct($page_content, $max_len, $oCRNRSTN_ENV, $encoding = 'UTF-8'){

        self::$oCRNRSTN_ENV = $oCRNRSTN_ENV;

        $this->chunk_hash = self::$oCRNRSTN_ENV->hash($page_content);
        $this->raw_content = $page_content;
        $this->encoding = $encoding;
        $this->content_mbstring_length = mb_strlen($this->raw_content, $encoding);

        self::$output_HTML_str_ARRAY[$this->chunk_hash] = '';
        $this->output_TEXT_str_ARRAY[$this->chunk_hash] = '';
        $this->output_LOG_str_ARRAY[$this->chunk_hash] = '';

        if(isset($max_len)){

            $this->max_len = (int) $max_len;

        }

        self::$chunkResults_ARRAY[$this->chunk_hash]['max_len'] = $this->max_len;

        $this->basic_content_chunking();

    }

    public function return_linesArray(){

        return $this->chunk_line_out_ARRAY[$this->chunk_hash];

    }

    public function return_originalContent(){

        return $this->raw_content;

    }

    public function return_linesString(
                    $output_format = 'TEXT', 
                    $new_line_prefix = '')
    {

        $fline_new = true;

        switch($output_format){
            case 'HTML':

                if(self::$output_HTML_str_ARRAY[$this->chunk_hash] != ''){

                    return self::$output_HTML_str_ARRAY[$this->chunk_hash];

                }else{

                    foreach($this->chunk_HTML_line_out_ARRAY[$this->chunk_hash] as $key => $line){

                        self::$output_HTML_str_ARRAY[$this->chunk_hash] .= $line;

                    }

                    return self::$output_HTML_str_ARRAY[$this->chunk_hash];

                }

            break;
            case 'TEXT':

                if($this->output_TEXT_str_ARRAY[$this->chunk_hash] != ''){

                    return $this->output_TEXT_str_ARRAY[$this->chunk_hash];

                }else{

                    $newline = '';
                    $fline_new = true;
                    foreach($this->chunk_TEXT_line_out_ARRAY[$this->chunk_hash] as $key => $line){

                        if($fline_new){

                            $fline_new = false;

                            $this->output_TEXT_str_ARRAY[$this->chunk_hash] .= $line;

                        }else{

                            $this->output_TEXT_str_ARRAY[$this->chunk_hash] .= $newline.$new_line_prefix.$line;

                        }

                    }

                    return $this->output_TEXT_str_ARRAY[$this->chunk_hash];

                }

            break;
            case 'SCREEN_TEXT':

                if($this->output_TEXT_str_ARRAY[$this->chunk_hash] != ''){

                    return $this->output_TEXT_str_ARRAY[$this->chunk_hash];

                }else{

                    $newline = '';
                    $fline_new = true;
                    foreach($this->chunk_TEXT_line_out_ARRAY[$this->chunk_hash] as $key => $line){

                        if($fline_new){

                            $fline_new = false;

                            $this->output_TEXT_str_ARRAY[$this->chunk_hash] .= $line;

                        }else{

                            $this->output_TEXT_str_ARRAY[$this->chunk_hash] .= $newline.$new_line_prefix.$line;

                        }

                    }

                    return $this->output_TEXT_str_ARRAY[$this->chunk_hash];

                }

            break;
            default:

                if($this->output_LOG_str_ARRAY[$this->chunk_hash] != ''){

                    return $this->output_LOG_str_ARRAY[$this->chunk_hash];

                }else{

                    //case 'ERROR_LOG':
                    $fline_new = true;
                    foreach($this->chunk_line_out_ARRAY[$this->chunk_hash] as $key => $line){

                        if($fline_new){

                            $fline_new = false;

                            $this->output_LOG_str_ARRAY[$this->chunk_hash] .= $line;

                        }else{

                            $this->output_LOG_str_ARRAY[$this->chunk_hash] .= $new_line_prefix.$line;

                        }

                    }

                    return $this->output_LOG_str_ARRAY[$this->chunk_hash];

                }

            break;

        }

    }

    private function add_restricted_content_chunk($tmp_line, $is_first_line = true){

        //$tmp_line = trim($tmp_line);

        if($is_first_line){

            $this->chunk_line_out_ARRAY[$this->chunk_hash][] = $tmp_line;
            $this->chunk_HTML_line_out_ARRAY[$this->chunk_hash][] = '<br>' . $tmp_line;
            $this->chunk_TEXT_line_out_ARRAY[$this->chunk_hash][] = '
' . $tmp_line;

        }else{

            $this->chunk_line_out_ARRAY[$this->chunk_hash][] = $tmp_line;
            $this->chunk_HTML_line_out_ARRAY[$this->chunk_hash][] = '<br>...' . $tmp_line;
            $this->chunk_TEXT_line_out_ARRAY[$this->chunk_hash][] = '
   ' . $tmp_line;

        }

    }

    private function basic_content_chunking(){

        $isFirstline = true;

        if($this->content_mbstring_length < $this->max_len){

            $this->add_restricted_content_chunk($this->raw_content, $isFirstline);

        }else{

            $tmp_line_ARRAY = $this->str_split_unicode($this->raw_content, $this->max_len);

            $tmp_cnt = count($tmp_line_ARRAY);
            for($i=0; $i < $tmp_cnt; $i++){

                $this->add_restricted_content_chunk($tmp_line_ARRAY[$i], $isFirstline);

                $isFirstline = false;

            }

        }

    }

    //
    // SOURCE :: https://www.php.net/manual/en/function.str-split.php
    // AUTHOR :: qeremy [atta] gmail [dotta] com :: https://www.php.net/manual/en/function.str-split.php#107658
    public function str_split_unicode($str, $l = 0) {

        if ($l > 0) {

            $ret = array();
            $len = mb_strlen($str, $this->encoding);

            for ($i = 0; $i < $len; $i += $l) {

                $ret[] = mb_substr($str, $i, $l, $this->encoding);

            }

            return $ret;
        }

        return preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);

    }

    public function __destruct(){

    }

}