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
 * CLASS DEFINITION :: crnrstn_curl
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Thursday, July 9, 2026 @ 1442 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer
 *                     (CLR-SSL) Client URL (cURL)
 *                     Communications and Connections
 *                     Services Layer
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     RoCEv2 SOAP Services Layer
 *                     (CLR-SSL) Client URL (cURL)
 *                     Communications and Connections
 *                     Services Layer maintains best
 *                     practices in architecture and
 *                     boutique programmatic 
 *                     instruction sets in order 
 *                     to achieve b0$$ level 
 *                     specialization in all 
 *                     Client URL (cURL)
 *                     Communications and Connections
 *                     relevant technologies.
 *
 *
 *                     5
 *
 *                     Thursday, July 9, 2026 @ 1444 hrs.
 *
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
class crnrstn_curl
{

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

    /**
     * R :: Send a POST request using cURL
     *
     * @param string $url to request
     * @param array $post values to send
     * @param array $options for cURL
     * @return string
     * @access public
     *
     * SOURCE :: https://www.php.net/manual/en/function.curl-exec.php
     * AUTHOR :: David from Code2Design.com :: https://www.php.net/manual/en/function.curl-exec.php#98628
     */
    function curl_post(
             $url,
             array $post = NULL,
             array $options = array())
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Method curl_post
         * was moved from crnrstn_user
         * to crnrstn_curl.
         * 5 :: Friday, August 21, 2026 @ 0610 hrs.
         *
         */

        try{

            $defaults = array(
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_URL => $url,
                CURLOPT_FRESH_CONNECT => 1,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FORBID_REUSE => 1,
                CURLOPT_TIMEOUT => 25,
                CURLOPT_CONNECTTIMEOUT => 25,
                CURLOPT_POSTFIELDS => \http_build_query($post)
            );

            /*
            If you are doing a POST, and the content length is 1,025 or greater, then curl exploits
            a feature of http 1.1: 100 (Continue) Status.

            See http://www.w3.org/Protocols/rfc2616/rfc2616-sec8.html#sec8.2.3

            * it adds a header, "Expect: 100-continue".
            * it then sends the request head, waits for a 100 response code, then sends the content

            Not all web servers support this though. Various errors are returned depending on the
            server. If this happens to you, suppress the "Expect" header with this command:

            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
            */

            $ch = \curl_init();
            \curl_setopt_array($ch, ($options + $defaults));
            \curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
            if(!$result = curl_exec($ch)){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: CURL [POST] ERROR experienced :: ' . \curl_error($ch));

            }

            \curl_close($ch);

            return $result;

        }catch(Exception $e){

            \curl_close($ch);

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

    }

    /**
     * R :: Send a GET request using cURL.
     *
     * @param string $url to request
     * @param array $get values to send
     * @param array $options for cURL
     * @return string
     * @access public
     *
     * SOURCE :: https://www.php.net/manual/en/function.curl-exec.php
     * AUTHOR :: David from Code2Design.com :: https://www.php.net/manual/en/function.curl-exec.php#98628
     *
     */
    function curl_get(
             $url,
             array $get = NULL,
             array $options = array())
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Method curl_get
         * was moved from crnrstn_user
         * to crnrstn_curl.
         * 5 :: Friday, August 21, 2026 @ 0611 hrs.
         *
         */

        try{

            $defaults = array(
                CURLOPT_URL => $url . (\strpos($url, '?') === FALSE ? '?' : '') . \http_build_query($get),
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 4
            );

            $ch = \curl_init();
            \curl_setopt_array($ch, ($options + $defaults));
            if(!$result = \curl_exec($ch)){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('CRNRSTN :: CURL [GET] ERROR experienced :: ' . \curl_error($ch));

            }

            \curl_close($ch);

            return $result;

        }catch(Exception $e){

            \curl_close($ch);

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

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function __get_url_content($url)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Method __get_url_content
         * was moved from crnrstn_user
         * to crnrstn_curl.
         * 5 :: Friday, August 21, 2026 @ 0624 hrs.
         *
         */

        $header = array(
            'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
            'X-Requested-With: XMLHttpRequest',
            'Host: www.bassdrive.com',
            'Accept: text/html, */*; q=0.01',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,en;q=0.9,zh-CN;q=0.8,zh;q=0.7',
            'Accept-Encoding: gzip,deflate',
            'Referer: ' . $this->get_resource('ROOT_PATH_CLIENT_HTTP') . $this->get_resource('ROOT_PATH_CLIENT_HTTP_DIR'),
            'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'
        );

        $ch = \curl_init();
        \curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
        \curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        \curl_setopt($ch, CURLOPT_ENCODING, "");
        \curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
        \curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        \curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

        if( ! $data = \curl_exec($ch)){
            //$this->capture_notice('[ERROR] CRON Fired CURL :: /_cron/bassdrive_sync/', LOG_CRIT, curl_error($ch));
        }

        $httpcode =\curl_getinfo($ch, CURLINFO_HTTP_CODE);
        \curl_close($ch);

        return ($httpcode>=200 && $httpcode<300) ? $data : false;

    }

    //
    // CURL URI...SUCH AS BASSDRIVE NOW PLAYING INFO
    /**
     * R :: Content pending.
     *
     * @param
     * @return
     * @access public
     *
     */
    function ___get_url_content($url)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Method ___get_url_content
         * was moved from crnrstn_user
         * to crnrstn_curl.
         * 5 :: Friday, August 21, 2026 @ 0625 hrs.
         *
         */

        if($this->is_ssl()){

            $source_url = 'https://' . $_SERVER['SERVER_NAME'];

        }else{

            $source_url = 'http://' . $_SERVER['SERVER_NAME'];

        }

        try{

            $header=array(
                'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'X-Requested-With: XMLHttpRequest',
                'Host: www.bassdrive.com',
                'Accept: text/html, */*; q=0.01',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language: en-US,en;q=0.9,zh-CN;q=0.8,zh;q=0.7',
                'Accept-Encoding: gzip,deflate',
                'Referer: ' . $source_url,
                'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7',
                'Keep-Alive: 115',
                'Connection: keep-alive',
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            //curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_ENCODING, "");
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
            curl_setopt($ch, CURLOPT_TIMEOUT, 100);
            curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

            if( ! $data = curl_exec($ch)){

                throw new Exception('CRNRSTN :: ' .
                    $this->version_crnrstn() .
                    ' :: CURLOPT_URL=[' .
                    $url . '] ERROR on ' .
                    __METHOD__ .' from ' .
                    $_SERVER['SERVER_NAME'] . ' (' .
                    $_SERVER['SERVER_ADDR'] .
                    '). Where curl_error=' .
                    curl_error($ch));

            }

            error_log('10552 user uri=[' .
                $url .
                '] data=[' .
                print_r($data, true) .
                '].');

            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            return ($httpcode>=200 && $httpcode<300) ? $data : false;

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
             * Sunday, June 30, 2024 @ 1620 hrs.
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