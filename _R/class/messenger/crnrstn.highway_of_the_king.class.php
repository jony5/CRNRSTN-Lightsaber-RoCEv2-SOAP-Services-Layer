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
 * CLASS DEFINITION :: crnrstn_highway_of_the_king
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: September 21, 2020 @ 2230 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Messenger
 *                     Services From the Furthest
 *                     Reaches of the North SOAP
 *                     Proxy Mailer
 * DESCRIPTION      :: [SOAP Experimental Kit - Saturday, October 28, 2023 @ 0220 hrs.]
 *                     The CRNRSTN :: Highway of
 *                     the King is the straightest
 *                     path to a perfectly PHPMailer
 *                     configurable SOAP email proxy.
 *
 *                     This is a SOAP managed email
 *                     send architecture that is
 *                     ALL PHPMailer settings
 *                     overridable through the
 *                     NuSOAP PHP SOAP WebKit
 *                     powered SOAP service.
 *
 *                     This is experimental open
 *                     source proxy SOAP powered
 *                     email communications!
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 1417 hrs.
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
class crnrstn_highway_of_the_king {

    public $oCRNRSTN_LOGGING;
    private static $oCRNRSTN_USR;

    protected $proxy_cipher_override;
    protected $proxy_secret_key_override;
    protected $proxy_hmac_algorithm_override;
    protected $proxy_options_bitwise_override;

    protected $sender_email;
    protected $sender_name;
    protected $recipient_email;
    protected $recipient_name;

    protected $replyto_email_ARRAY = array();
    protected $replyto_name_ARRAY = array();
    protected $cc_email_ARRAY = array();
    protected $cc_name_ARRAY = array();
    protected $bcc_email_ARRAY = array();
    protected $bcc_name_ARRAY = array();

    public $Priority = 3;
    public $WordWrap = 72;
    public $is_HTML = false;
    public $Body;
    public $AltBody;
    public $Subject;

    public function __construct($oCRNRSTN_USR){

        self::$oCRNRSTN_n = $oCRNRSTN_USR;

    }

    public function setFrom($sender_email, $sender_name){

        $this->sender_email = $sender_email;
        $this->sender_name = $sender_name;

    }

    #1428
    public function addAddress($email, $name){

        $this->recipient_email = $email;
        $this->recipient_name = $name;

    }

    public function addReplyTo($replyto_email, $replyto_name){

        $this->replyto_email_ARRAY[] = $replyto_email;
        $this->replyto_name_ARRAY[] = $replyto_name;

    }

    #1450
    public function addCC($cc_email, $cc_name){

        $this->cc_email_ARRAY[] = $cc_email;
        $this->cc_name_ARRAY[] = $cc_name;

    }

    public function addBCC($bcc_email, $bcc_name){

        $this->bcc_email_ARRAY[] = $bcc_email;
        $this->bcc_name_ARRAY[] = $bcc_name;

    }

    public function return_cipher(){

        return $this->proxy_cipher_override;

    }

    public function return_secret_key(){

        return $this->proxy_secret_key_override;

    }

    public function return_hmac_algorithm(){

        return $this->proxy_hmac_algorithm_override;

    }

    public function return_options_bitwise(){

        return $this->proxy_options_bitwise_override;

    }

    /*
    public function send($proxy_endpoint_uri, $proxy_endpoint_auth_key, $proxy_cipher_override=NULL, $proxy_secret_key_override=NULL, $proxy_hmac_algorithm_override=NULL, $proxy_options_bitwise_override=NULL){

        $this->proxy_cipher_override = $proxy_cipher_override;
        $this->proxy_secret_key_override = $proxy_secret_key_override;
        $this->proxy_hmac_algorithm_override = $proxy_hmac_algorithm_override;
        $this->proxy_options_bitwise_override = $proxy_options_bitwise_override;

        //
        // ASSEMBLE REQUEST AND SEND
        $cc_email_str = '';
        $cc_name_str = '';
        $bcc_email_str = '';
        $bcc_name_str = '';
        $replyto_email_str = '';
        $replyto_name_str = '';

        if(isset($this->cc_email_ARRAY)){
            $tmp_cnt = sizeof($this->cc_email_ARRAY);
            for($i=0; $i<$tmp_cnt; $i++){

                $cc_email_str .= $this->cc_email_ARRAY[$i].',';
                $cc_name_str .= $this->cc_name_ARRAY[$i].',';

            }

            $cc_email_str = rtrim($cc_email_str, ',');
            $cc_name_str = rtrim($cc_name_str, ',');

        }

        if(isset($this->bcc_email_ARRAY)){
            $tmp_cnt = sizeof($this->bcc_email_ARRAY);
            for($i=0; $i<$tmp_cnt; $i++){

                $bcc_email_str .= $this->bcc_email_ARRAY[$i].',';
                $bcc_name_str .= $this->bcc_name_ARRAY[$i].',';

            }

            $bcc_email_str = rtrim($bcc_email_str, ',');
            $bcc_name_str = rtrim($bcc_name_str, ',');

        }

        if(isset($this->replyto_email_ARRAY)){
            $tmp_cnt = sizeof($this->replyto_email_ARRAY);
            for($i=0; $i<$tmp_cnt; $i++){

                $replyto_email_str .= $this->replyto_email_ARRAY[$i].',';
                $replyto_name_str .= $this->replyto_name_ARRAY[$i].',';

            }

            $replyto_email_str = rtrim($replyto_email_str, ',');
            $replyto_name_str = rtrim($replyto_name_str, ',');

        }

        //
        // NEW WILD CARD RESOURCE - FTP
        $oWCR = self::$oCRNRSTN_n->define_wildcard_resource('THE_KINGS_HIGHWAY_oGABRIEL_NOTIFICATION');
        $oWCR->addAttribute('CRNRSTN_SOAP_SVC_AUTH_KEY', $proxy_endpoint_auth_key);
        $oWCR->addAttribute('CRNRSTN_PROXY_WSDL_ENDPOINT', 'http://v2.crnrstn.evifweb.com/');
        $oWCR->addAttribute('RECIPIENT_EMAIL_COMMA_DELIM', $this->recipient_email);
        $oWCR->addAttribute('RECIPIENT_NAME_COMMA_DELIM', $this->recipient_name);
        $oWCR->addAttribute('FROM_EMAIL', $this->sender_email);
        $oWCR->addAttribute('FROM_NAME', $this->sender_name);
        $oWCR->addAttribute('REPLY_TO_EMAIL_COMMA_DELIM', $replyto_email_str);
        $oWCR->addAttribute('REPLY_TO_NAME_COMMA_DELIM', $replyto_name_str);
        $oWCR->addAttribute('CC_EMAIL_COMMA_DELIM', $cc_email_str);
        $oWCR->addAttribute('CC_NAME_COMMA_DELIM', $cc_name_str);
        $oWCR->addAttribute('BCC_EMAIL_COMMA_DELIM', $bcc_email_str);
        $oWCR->addAttribute('BCC_NAME_COMMA_DELIM', $bcc_name_str);
        $oWCR->addAttribute('MESSAGE_SUBJECT', $this->Subject);
        $oWCR->addAttribute('MESSAGE_BODY_HTML', $this->Body);
        $oWCR->addAttribute('MESSAGE_BODY_TEXT', $this->AltBody);
        $oWCR->addAttribute('WORDWRAP', $this->WordWrap);
        $oWCR->addAttribute('PRIORITY', $this->Priority);
        if($this->is_HTML){

            $oWCR->addAttribute('IS_HTML', 'true');

        }else{

            $oWCR->addAttribute('IS_HTML', 'false');

        }

        // DELETED. OBJECT ARRAY PUSH.
        //self::$oCRNRSTN_n->save_wildcard_resource($oWCR);

        $endpoint_URI = self::$oCRNRSTN_n->get_resource('CRNRSTN_PROXY_WSDL_ENDPOINT');
        return self::$oCRNRSTN_n->proxyEmailFire('THE_KINGS_HIGHWAY_oGABRIEL_NOTIFICATION', $endpoint_URI, $this);

    }
    */

    public function __destruct(){

    }

}