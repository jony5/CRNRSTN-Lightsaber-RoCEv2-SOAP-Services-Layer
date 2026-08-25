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
 * CLASS DEFINITION :: crnrstn_messenger_from_north
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: September 4, 2020 @ 2056 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber SOAP
 *                     Services Layer System Messenger
 *                     From the Furthest Reaches of
 *                     the North, oGabriel
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     Messenger from the North
 *                     is a faithful email
 *                     messaging class object
 *                     that supports framework
 *                     runtime exception
 *                     handling when CRNRSTN ::
 *                     Lightsaber configuration
 *                     settings opt for
 *                     CRNRSTN_LOG_EMAIL or
 *                     CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL
 *                     logging profiles.
 *
 *                     What more could one desire
 *                     beyond faithfulness in
 *                     a messenger?
 *
 *
 *                     5
 *
 *                     Monday, July 29, 2024 @ 1441 hrs.
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
class crnrstn_messenger_from_north extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_messenger_from_north 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its private static  
     *       definition, and by removing the 
     *       object assignment to the 
     *       private static  $oCRNRSTN variable. 
     *       5 :: Friday, March 13, 2026 @ 1402 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations 
     *       to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0531 hrs.
     *
     */

    private static $oCRNRSTN_PHPMailer_ARRAY = array();
    private static $oCRNRSTN_PROXYMailer_ARRAY = array();

    protected $PHPMailer_experience_tracker_ARRAY = array();
    protected $PHPMailer_single_or_bulk_ARRAY = array();
    protected $PROXYMailer_experience_tracker_ARRAY = array();
    protected $PROXYMailer_single_or_bulk_ARRAY = array();

    public $messenger_serial;
    protected $messenger_serial_raw;
    protected $mail_protocol;
    protected $username;
    protected $password;
    protected $port;

    protected $proxy_endpoint_uri;
    protected $proxy_endpoint_auth_key;
    protected $proxy_cipher_override;
    protected $proxy_secret_key_override;
    protected $proxy_hmac_algorithm_override;

    protected $mail_host_servers;

    protected $sender_email;
    protected $sender_name;
    protected $sender_Bulk = array();

    protected $priority = NULL;
    protected $priorityBulk = array();
    protected $word_wrap = 72;
    protected $word_wrapBulk = array();
    protected $is_HTML = false;
    protected $is_HTMLBulk = array();

    protected $subject_line = '';
    protected $subject_lineBulk = array();
    protected $html_message = NULL;
    protected $html_messageBulk = array();
    protected $text_message = NULL;
    protected $text_messageBulk = array();

    protected $dynamic_content_SUBJECT_ARRAY = array();
    protected $dynamic_content_HTML_ARRAY = array();
    protected $dynamic_content_TEXT_ARRAY = array();

    protected $suppress_duplicates = true;
    protected $replyto_email_ARRAY = array();
    protected $to_email_ARRAY = array();
    protected $cc_email_ARRAY = array();
    protected $bcc_email_ARRAY = array();
    protected $optout_suppression_ARRAY = array();
    protected $duplicate_suppression_ARRAY = array();

    protected $reporting_optout_suppression = array();
    protected $reporting_duplicate_suppression = array();
    protected $reporting_send_success = array();
    protected $reporting_send_error = array();

    protected $flag_PHPMailer_send_serial = array();

    /**
     * R :: Content pending. 
     *
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
             $messenger_serial, 
             $mail_protocol, 
             $username, 
             $password, 
             $port)
    {

        /*
        CONSIDERATIONS ::
        - SUPPORT FOR DATABASE DRIVEN MULTI-BATCH AND BLAST
            * SINGLE MESSAGE TO MANY EMAIL
            * MANY MESSAGES (I.E. DYNAMIC CONTENT) TO MANY EMAIL
            * MESSAGE PERSONALIZATION HOOKS
            * EMAIL DEDUPLICATION (FORCE UNIQUE) WITHIN SINGLE SENDING PROCESS RUN
            * STRAIGHT SEND TO ALL (NO DEDUPLICATION)
            * SERIALIZED PER RECIPIENT EMAIL FOR SEND SUCCESS/ERR FEEDBACK
        - SUPPORT FOR ONE-OFF-EMAIL MULTI-PART MESSAGE WITH ON-ERR-BACKUP TEXT ONLY
        - END GAME SUPPORT = UNIVERSAL PROXY ENDPOINT WITHIN CRNRSTN FOR MESSAGE TRIGGER VIA HTTP POST (OR SOAP REQUEST)
        */

        try{

            $this->messenger_serial_raw = $messenger_serial;
            $this->messenger_serial = $this->crc_int32($messenger_serial);

            $tmp_mail_protocol = trim(strtoupper($mail_protocol));

            switch($tmp_mail_protocol){
                case 'SMTP':
                case 'MAIL':
                case 'SENDMAIL':
                case 'QMAIL':

                    $this->mail_protocol = $tmp_mail_protocol;
                    $this->username      = $username;
                    $this->password      = $password;
                    $this->port          = $port;

                break;
                case 'CRNRSTN_PROXY':

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unknown mail protocol of "' . 
                        $mail_protocol .
                        '" has been provided. The options which are ' . 
                        'available include "SMTP", "MAIL", ' . 
                        '"SENDMAIL" and "QMAIL".');

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
             * Sunday, June 30, 2024 @ 1609 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function return_CRNRSTN_SysMsgBody(
             $msgFormat = 'TEXT', 
             $msgType = 'EXCEPTION_NOTIFICATION')
    {

        $tmp_format = trim(strtoupper($msgFormat));

        switch($tmp_format){
            case 'HTML':

                return $this->return_CRNRSTN_SysMsgHTMLBody($msgType);

            break;
            default:

                return $this->return_CRNRSTN_SysMsgTEXTBody($msgType);

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
    function addHostServers($mail_host_servers)
    {

        $this->mail_host_servers = $mail_host_servers;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addReplyTo(
             $reply_to_email, 
             $reply_to_recipient_name)
    {

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($reply_to_email, ",");
            $pos_comma_name  = stripos($reply_to_recipient_name, ",");

            if($pos_comma_email !== false){

                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $reply_to_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $reply_to_recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided CC emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided CC names].');

                    }else{

                        for($i = 0; $i < $tmp_email_cnt; $i++){

                            $this->replyto_email_ARRAY['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->replyto_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                            $this->replyto_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i = 0; $i < $tmp_email_cnt; $i++){

                        $this->replyto_email_ARRAY['name'][] = trim($reply_to_recipient_name);

                        //
                        // FOR REPORTING
                        $this->replyto_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->replyto_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->replyto_email_ARRAY['name'][] = trim($reply_to_recipient_name);

                //
                // FOR REPORTING
                $this->replyto_email_ARRAY['email'][] = trim($reply_to_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->replyto_email_ARRAY['sys_email'][] = $this->clean_system_email($reply_to_email);

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
             * Sunday, June 30, 2024 @ 1609 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addFrom(
             $sender_email, 
             $sender_name)
    {

        $sender_email = $this->clean_system_email($sender_email);

        $this->sender_email = $sender_email;
        $this->sender_name  = $sender_name;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function wordWrap($max_char_column_cnt)
    {

        $this->word_wrap = $max_char_column_cnt;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function isHTML($bool_isHTML)
    {

        $this->is_HTML = $bool_isHTML;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function setPriority($priority){

        try{

            $tmp_priority = trim(strtoupper($priority));

            switch($tmp_priority){
                case '1':
                case 1:
                case 'HIGH':

                    $this->priority = 1;

                break;
                case '3':
                case 3:
                case 'NORMAL':

                    $this->priority = 3;

                break;
                case '5':
                case 5:
                case 'LOW':

                    $this->priority = 5;

                break;
                default:

                    $this->priority = 3;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('The provided priority level of "' .
                    $priority . '" is invalid; NORMAL priority has been applied. Options include, "HIGH" or ' .
                    '(int) 1, "NORMAL" or (int) 3 and "LOW" or (int) 5.');

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
             * Sunday, June 30, 2024 @ 1609 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

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
    function addSubject($subject_line)
    {

        $this->subject_line = $subject_line;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function addMsgBody_HTMLversion($html_message)
    {

        $this->html_message = $html_message;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function addMsgBody_TEXTversion($text_message)
    {

        $this->text_message = $text_message;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function suppressEmailDuplicates($bool_suppress_dups)
    {

        $this->suppress_duplicates = $bool_suppress_dups;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function optOutDoNotSendEmail($optout_emails)
    {

        $this->optout_suppression_ARRAY = $this->clean_system_email_comma_delimited($optout_emails, true, false);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addAddress(
             $recipient_email, 
             $recipient_name)
    {

        $email_experience_tracker = $this->generate_new_key(70);

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($recipient_email, ",");
            $pos_comma_name  = stripos($recipient_name, ",");

            if($pos_comma_email !== false){

                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $recipient_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided names].');

                    }else{

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->to_email_ARRAY['experience_tracker'][] = $email_experience_tracker;
                            $this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker] = 1;

                            $this->to_email_ARRAY['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->to_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER
                            $this->to_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i=0; $i<$tmp_email_cnt; $i++){

                        $this->to_email_ARRAY['experience_tracker'][] = $email_experience_tracker;
                        $this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker] = 1;

                        $this->to_email_ARRAY['name'][] = trim($recipient_name);

                        //
                        // FOR REPORTING
                        $this->to_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->to_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->to_email_ARRAY['experience_tracker'][] = $email_experience_tracker;
                $this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker] = 1;

                $this->to_email_ARRAY['name'][] = trim($recipient_name);

                //
                // FOR REPORTING
                $this->to_email_ARRAY['email'][] = trim($recipient_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->to_email_ARRAY['sys_email'][] = $this->clean_system_email($recipient_email);

            }

            return $email_experience_tracker;

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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
     * @param
     * @return
     * @access public
     *
     */
    function addCC(
             $recipient_email, 
             $recipient_name)
    {

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($recipient_email, ",");
            $pos_comma_name  = stripos($recipient_name, ",");

            if($pos_comma_email !== false){
                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $recipient_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided CC emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided CC names].');

                    }else{

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->cc_email_ARRAY['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->cc_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                            $this->cc_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i=0; $i<$tmp_email_cnt; $i++){

                        $this->cc_email_ARRAY['name'][] = trim($recipient_name);

                        //
                        // FOR REPORTING
                        $this->cc_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->cc_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->cc_email_ARRAY['name'][] = trim($recipient_name);

                //
                // FOR REPORTING
                $this->cc_email_ARRAY['email'][] = trim($recipient_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->cc_email_ARRAY['sys_email'][] = $this->clean_system_email($recipient_email);

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addBCC(
             $recipient_email, 
             $recipient_name)
    {

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($recipient_email, ",");
            $pos_comma_name  = stripos($recipient_name, ",");

            if($pos_comma_email !== false){

                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $recipient_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided BCC emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided BCC names].');

                    }else{

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->bcc_email_ARRAY['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->bcc_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                            $this->bcc_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i=0; $i<$tmp_email_cnt; $i++){

                        $this->bcc_email_ARRAY['name'][] = trim($recipient_name);

                        //
                        // FOR REPORTING
                        $this->bcc_email_ARRAY['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->bcc_email_ARRAY['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->bcc_email_ARRAY['name'][] = trim($recipient_name);

                //
                // FOR REPORTING
                $this->bcc_email_ARRAY['email'][] = trim($recipient_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->bcc_email_ARRAY['sys_email'][] = $this->clean_system_email($recipient_email);

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
    function addDynamicContent_SUBJECT(
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['placeholder'][] = $content_place_holder;
                $this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['content'][] = $dynamic_content;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for the application of this dynamic HTML experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
    function addDynamicContent_HTML(
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['placeholder'][] = $content_place_holder;
                $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['content'][] = $dynamic_content;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for the application of this dynamic HTML experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
    function addDynamicContent_TEXT(
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'][] = $content_place_holder;
                $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'][] = $dynamic_content;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for ' .
                'the application of this dynamic TEXT experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
    function addDynamicContent_MULTIPART(
             $email_experience_tracker, 
             $content_place_holder, 
             $dynamic_content)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['placeholder'][] = $content_place_holder;
                $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['content'][]     = $dynamic_content;
                $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'][] = $content_place_holder;
                $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'][]     = $dynamic_content;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for the application of this dynamic MULTIPART experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function isHTMLBulk(
             $email_experience_tracker, 
             $bool_isHTML)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->is_HTMLBulk[$email_experience_tracker] = $bool_isHTML;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for the application of this boolean flag for isHTML experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function setPriorityBulk(
             $email_experience_tracker, 
             $priority)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $tmp_priority = trim(strtoupper($priority));

                switch($tmp_priority){
                    case 1:
                    case 'HIGH':

                        $this->priorityBulk[$email_experience_tracker] = 1;

                    break;
                    case 3:
                    case 'NORMAL':

                        $this->priorityBulk[$email_experience_tracker] = 3;

                    break;
                    case 5:
                    case 'LOW':

                        $this->priorityBulk[$email_experience_tracker] = 5;

                    break;
                    default:

                        $this->priorityBulk[$email_experience_tracker] = 3;

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('The provided priority level of "' .
                        $priority . '" is invalid; NORMAL priority has been applied for this ' .
                        'recipient experience. Options include, "HIGH" or 1, "NORMAL" or 3 and "LOW" or 5.');

                    break;

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for the application of the "' .
                $priority . '" priority flag for this email experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
    function addFromBulk(
             $email_experience_tracker, 
             $sender_email, 
             $sender_name)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->sender_Bulk[$email_experience_tracker]['email'] = $sender_email;
                $this->sender_Bulk[$email_experience_tracker]['name'] = $sender_name;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) .
                ' email addresses in his possession) for the application ' .
                'of this sender email/"from" email experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

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
    function addAddressBulk(
             $email_experience_tracker, 
             $recipient_email, 
             $recipient_name)
    {

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($recipient_email, ",");
            $pos_comma_name  = stripos($recipient_name, ",");

            if($pos_comma_email !== false){

                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $recipient_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided names].');

                    }else{

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->to_email_ARRAY['experience_tracker'][] = $email_experience_tracker;
                            $this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker] = 1;

                            $this->to_email_ARRAY[$email_experience_tracker]['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->to_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER
                            $this->to_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i=0; $i<$tmp_email_cnt; $i++){

                        $this->to_email_ARRAY['experience_tracker'][] = $email_experience_tracker;
                        $this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker] = 1;

                        $this->to_email_ARRAY[$email_experience_tracker]['name'][] = trim($recipient_name);

                        //
                        // FOR REPORTING
                        $this->to_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->to_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->to_email_ARRAY['experience_tracker'][] = $email_experience_tracker;
                $this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker] = 1;

                $this->to_email_ARRAY[$email_experience_tracker]['name'][] = trim($recipient_name);

                //
                // FOR REPORTING
                $this->to_email_ARRAY[$email_experience_tracker]['email'][] = trim($recipient_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->to_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($recipient_email);
                $this->error_log('Adding BULK email ' . $this->str_sanitize($recipient_email, 'email_private') . ' to to_email_ARRAY[' . substr($email_experience_tracker, 0, 5) . '...][ ].', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addCCBulk(
             $email_experience_tracker, 
             $recipient_email, 
             $recipient_name)
    {

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($recipient_email, ",");
            $pos_comma_name  = stripos($recipient_name, ",");

            if($pos_comma_email !== false){
                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $recipient_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided CC emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided CC names].');

                    }else{

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->cc_email_ARRAY[$email_experience_tracker]['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->cc_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                            $this->cc_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i=0; $i<$tmp_email_cnt; $i++){

                        $this->cc_email_ARRAY[$email_experience_tracker]['name'][] = trim($recipient_name);

                        //
                        // FOR REPORTING
                        $this->cc_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->cc_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->cc_email_ARRAY[$email_experience_tracker]['name'][] = trim($recipient_name);

                //
                // FOR REPORTING
                $this->cc_email_ARRAY[$email_experience_tracker]['email'][] = trim($recipient_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->cc_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($recipient_email);

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
    function addBCCBulk(
             $email_experience_tracker, 
             $recipient_email, 
             $recipient_name)
    {

        try{

            //
            // CHECK FOR COMMA DELIMITED
            $pos_comma_email = stripos($recipient_email, ",");
            $pos_comma_name  = stripos($recipient_name, ",");

            if($pos_comma_email !== false){

                //
                // WE HAVE COMMA DELIM EMAIL
                $tmp_email_ARRAY = explode(',', $recipient_email);

                if($pos_comma_name !== false){

                    //
                    // WE HAVE COMMA DELIM NAME
                    $tmp_name_ARRAY = explode(',', $recipient_name);

                    $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    if($tmp_name_cnt != $tmp_email_cnt){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                        $tmp_email_cnt . ' provided BCC emails] and the number of associated recipient names [' .
                        $tmp_name_cnt . ' provided BCC names].');

                    }else{

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->bcc_email_ARRAY[$email_experience_tracker]['name'][] = trim($tmp_name_ARRAY[$i]);

                            //
                            // FOR REPORTING
                            $this->bcc_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                            $this->bcc_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                    for($i=0; $i<$tmp_email_cnt; $i++){

                        $this->bcc_email_ARRAY[$email_experience_tracker]['name'][] = trim($recipient_name);

                        //
                        // FOR REPORTING
                        $this->bcc_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                        //
                        // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                        $this->bcc_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                    }

                }

            }else{

                $this->bcc_email_ARRAY[$email_experience_tracker]['name'][] = trim($recipient_name);

                //
                // FOR REPORTING
                $this->bcc_email_ARRAY[$email_experience_tracker]['email'][] = trim($recipient_email);

                //
                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                $this->bcc_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($recipient_email);

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function wordWrapBulk(
             $email_experience_tracker, 
             $max_char_column_cnt)
    {

        $this->word_wrapBulk[$email_experience_tracker] = $max_char_column_cnt;

    }

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
    function addReplyToBulk(
             $email_experience_tracker, 
             $reply_to_email, 
             $reply_to_recipient_name)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                //
                // CHECK FOR COMMA DELIMITED
                $pos_comma_email = stripos($reply_to_email, ",");
                $pos_comma_name  = stripos($reply_to_recipient_name, ",");

                if($pos_comma_email !== false){
                    //
                    // WE HAVE COMMA DELIM EMAIL
                    $tmp_email_ARRAY = explode(',', $reply_to_email);

                    if($pos_comma_name !== false){

                        //
                        // WE HAVE COMMA DELIM NAME
                        $tmp_name_ARRAY = explode(',', $reply_to_recipient_name);

                        $tmp_name_cnt = sizeof($tmp_name_ARRAY);
                        $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                        if($tmp_name_cnt != $tmp_email_cnt){

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('There is a mismatch between the number of comma delimited recipient email addresses [' .
                            $tmp_email_cnt . ' provided CC emails] and the number of associated recipient names [' .
                            $tmp_name_cnt . ' provided CC names].');

                        }else{

                            for($i=0; $i<$tmp_email_cnt; $i++){

                                $this->replyto_email_ARRAY[$email_experience_tracker]['name'][] = trim($tmp_name_ARRAY[$i]);

                                //
                                // FOR REPORTING
                                $this->replyto_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                                //
                                // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                                $this->replyto_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                            }

                        }

                    }else{

                        $tmp_email_cnt = sizeof($tmp_email_ARRAY);

                        for($i=0; $i<$tmp_email_cnt; $i++){

                            $this->replyto_email_ARRAY[$email_experience_tracker]['name'][] = trim($reply_to_recipient_name);

                            //
                            // FOR REPORTING
                            $this->replyto_email_ARRAY[$email_experience_tracker]['email'][] = trim($tmp_email_ARRAY[$i]);

                            //
                            // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                            $this->replyto_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($tmp_email_ARRAY[$i]);

                        }

                    }

                }else{

                    $this->replyto_email_ARRAY[$email_experience_tracker]['name'][] = trim($reply_to_recipient_name);

                    //
                    // FOR REPORTING
                    $this->replyto_email_ARRAY[$email_experience_tracker]['email'][] = trim($reply_to_email);

                    //
                    // FOR CRNRSTN SUPPRESSION FILTER AND SEND
                    $this->replyto_email_ARRAY[$email_experience_tracker]['sys_email'][] = $this->clean_system_email($reply_to_email);

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) . ' email addresses in his possession) ' .
                'for the application of this replyTo email experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addSubjectBulk(
             $email_experience_tracker, 
             $subject_line)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->subject_lineBulk[$email_experience_tracker] = $subject_line;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) . ' email addresses in his possession) ' .
                'for the application of a subject line for this email experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addHTMLver_Bulk(
             $email_experience_tracker, 
             $html_message)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->html_messageBulk[$email_experience_tracker] = $html_message;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) . ' email addresses in his possession) ' .
                'for the application of the HTML body for this email experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function addTEXTver_Bulk(
             $email_experience_tracker, 
             $text_message)
    {

        try{

            if(isset($this->to_email_ARRAY['experience_tracker_flag'][$email_experience_tracker])){

                $this->text_messageBulk[$email_experience_tracker] = $text_message;

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Unable to locate any email assigned to Gabriel (out of the ' .
                sizeof($this->to_email_ARRAY['sys_email']) . ' email addresses in his possession) for ' .
                'the application of the TEXT body for this email experience.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function batchReadyToSend($max_batch_count)
    {

        if(sizeof($this->to_email_ARRAY) > $max_batch_count){

            return true;

        }else{

            return false;

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function initProxySend(
             $proxy_endpoint_uri, 
             $proxy_auth_key)
    {

        /*
            protected $proxy_endpoint_uri;
            protected $proxy_endpoint_auth_key;
            protected $proxy_cipher_override;
            protected $proxy_secret_key_override;
            protected $proxy_hmac_algorithm_override;
        */

        $this->proxy_endpoint_uri      = $proxy_endpoint_uri;
        $this->proxy_endpoint_auth_key = $proxy_auth_key;


    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function proxyEncrypt_setAlgorithmOverride($proxy_encrypt_hmac_algorithm)
    {

        $this->proxy_hmac_algorithm_override = $proxy_encrypt_hmac_algorithm;

        return NULL;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function proxyEncrypt_setSecretKeyOverride($proxy_secret_key)
    {

        $this->proxy_secret_key_override = $proxy_secret_key;

        return NULL;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function proxyEncrypt_setCipherOverride($proxy_cipher)
    {

        $this->proxy_cipher_override = $proxy_cipher;

        return NULL;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function proxySend()
    {

        try{

            $tmp_email_experience_cnt = sizeof($this->to_email_ARRAY['experience_tracker']);
            if($tmp_email_experience_cnt > 0){

                //
                // MESSAGE ASSEMBLY
                $this->spool_proxy_message();

                //
                // MESSAGE DELIVERY
                $tmp_mailer_cnt = sizeof($this_PROXYMailer_ARRAY);
                for($i=0; $i<$tmp_mailer_cnt; $i++){
                    //error_log('1229 - proxySend[' . $tmp_mailer_cnt . '][' . $tmp_email_experience_cnt . ']');

                    $oCRNRSTN_PROXYMailer = $this_PROXYMailer_ARRAY[$i];
                    //$this->error_log($i . ' <--sending mailer in this position AltBody=->' . $oCRNRSTN_PHPMailer->AltBody, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    //
                    // CONSIDER ADDING SOME KIND OF THROTTLING??
                    $tmp_send_auth = $this->get_resource('EMAIL_SEND_ACTIVE');
                    $tmp_ip_auth = $this->exclusiveAccess('73.54.221.217');
                    if($tmp_send_auth){

                        $this->error_log('seeennd it! [PROXY] [EMAIL QUEUE POS #' . $i . '][' . sizeof($this_PROXYMailer_ARRAY) . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                        $proxy_response = $oCRNRSTN_PROXYMailer->send($this->proxy_endpoint_uri, $this->proxy_endpoint_auth_key, $this->proxy_cipher_override, $this->proxy_secret_key_override, $this->proxy_hmac_algorithm_override);
                        error_log('1235 - PROXY RESPONSE=' . $proxy_response);
                    }
                }
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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function send()
    {

        try{

            $tmp_email_experience_cnt = sizeof($this->to_email_ARRAY['experience_tracker']);
            if($tmp_email_experience_cnt>0){

                //
                // MESSAGE ASSEMBLY
                $this->spool_message();

                //
                // MESSAGE DELIVERY
                $tmp_mailer_cnt = sizeof($this_PHPMailer_ARRAY);

                $this->error_log($tmp_mailer_cnt . ' <--How many mailer to send after spooling??', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                $tmp_send_result_ARRAY = array();

                for($i=0; $i<$tmp_mailer_cnt; $i++){
                    //error_log('1158 - send(' . $i . ') = oCRNRSTN_PHPMailer_ARRAY[' . $i . ']');
                    $oCRNRSTN_PHPMailer = $this_PHPMailer_ARRAY[$i];
                    //$this->error_log($i . ' <--sending mailer in this position AltBody=->' . $oCRNRSTN_PHPMailer->AltBody, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    //
                    // CONSIDER ADDING SOME KIND OF THROTTLING??
                    $tmp_send_auth = $this->get_resource('EMAIL_SEND_ACTIVE');
                    $tmp_ip_auth = $this->exclusiveAccess('73.54.221.217');
                    if($tmp_send_auth){

                        $this->error_log('seeennd it! [EMAIL QUEUE POS #' . $i . '][' . sizeof($this_PHPMailer_ARRAY) . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                        $tmp_send_result_ARRAY['is_success'][] = $oCRNRSTN_PHPMailer->send();
                        $tmp_send_result_ARRAY['status_msg'][] = $oCRNRSTN_PHPMailer->ErrorInfo;

                    }
                }

                //
                // CLEAR oCRNRSTN_PHPMailer_ARRAY ARRAY
                array_splice($this_PHPMailer_ARRAY, 0);

                return $tmp_send_result_ARRAY;

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function spool_proxy_message()
    {

        try{

            //
            // SENDER AND RECIPIENT DATA (TO, CC, BCC, REPLYTO, FROM)
            $this->initialize_proxy_sender_recipient();

            //
            // MESSAGE DETAIL (HTML, TEXT, WRAP, ISHTML, SUBJECT)
            $this->initialize_proxy_message_content();


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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function spool_message()
    {

        try{

            //
            // SENDER AND RECIPIENT DATA (TO, CC, BCC, REPLYTO, FROM)
            $this->initialize_sender_recipient();

            //
            // CONNECTIVITY (SMTP, SENDMAIL, QMAIL, PHPMAIL, SERVER, PORT, USERNAME, PASSWORD)
            $this->initialize_connectivity();

            //
            // MESSAGE DETAIL (HTML, TEXT, WRAP, ISHTML, SUBJECT)
            $this->initialize_message_content();

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
             * Sunday, June 30, 2024 @ 1610 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

        return false;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initialize_proxy_sender_recipient()
    {

        $tmp_to_email_cnt           =
        $tmp_experience_tracker_cnt =
        $tmp_replyto_email_cnt      =
        $tmp_cc_email_cnt           =
        $tmp_bcc_email_cnt          =
        $tmp_to_email_bulk_cnt      =
        $tmp_replyto_email_bulk_cnt =
        $tmp_cc_email_bulk_cnt      =
        $tmp_bcc_email_bulk_cnt     =
        $tmp_from_email_bulk_cnt    = 0;

        //
        // PROCESS ANY SINGLE SERVING EMAIL
        if(isset($this->to_email_ARRAY['sys_email'])){

            $tmp_to_email_cnt = sizeof($this->to_email_ARRAY['sys_email']);

        }

        if(isset($this->cc_email_ARRAY['sys_email'])){

            $tmp_cc_email_cnt = sizeof($this->cc_email_ARRAY['sys_email']);

        }

        if(isset($this->replyto_email_ARRAY['sys_email'])){

            $tmp_replyto_email_cnt = sizeof($this->replyto_email_ARRAY['sys_email']);

        }

        if(isset($this->bcc_email_ARRAY['sys_email'])){

            $tmp_bcc_email_cnt = sizeof($this->bcc_email_ARRAY['sys_email']);

        }

        if($tmp_to_email_cnt>0){

            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            // Return an instantiation of
            // the CRNRSTN :: Lightsaber
            // SOAP Services Layer
            // Messenger Services From
            // the Furthest Reaches of
            // the North SOAP Proxy
            // Mailer class object.
            //
            //
            // 5 :: Monday, July 15, 2024 @ 2149 hrs.
            //
            // $oCRNRSTN_PROXYMailer = new crnrstn_highway_of_the_king($this);
            $oCRNRSTN_PROXYMailer = $this->return_registered_resource('new', 'crnrstn_highway_of_the_king', $this);

            //$oCRNRSTN_PHPMailer = new \PHPMailer\crnrstn_PHPMailer\crnrstn_PHPMailer($this);

            //
            // INITIALIZE SENDER/FROM
            $oCRNRSTN_PROXYMailer->setFrom($this->sender_email, $this->sender_name);
            $this->error_log('oGabriel [PROXY] INITIALIZE SENDER/FROM setFrom[' . $this->str_sanitize($this->sender_email, 'email_private') . ' - ' . $this->sender_name . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

            //
            // INITIALIZE TO
            for($i=0; $i<$tmp_to_email_cnt; $i++){

                if(isset($this->optout_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]])){

                    //
                    // OPT OUT SUPPRESSION
                    $this->reporting_optout_suppression[] = $this->to_email_ARRAY['email'][$i];

                }else{

                    if(isset($this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]]) && $this->suppress_duplicates){

                        //
                        // DUPLICATE SUPPRESSION
                        $this->reporting_duplicate_suppression[] = $this->to_email_ARRAY['email'][$i];

                    }else{

                        if(isset($this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]])){

                            //
                            // TRACK INSTANCES OF DUPLICATE SEND FOR REPORTING META
                            $this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]]++;

                        }else{

                            $this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]] = 1;

                        }

                        $this->error_log('oGabriel [PROXY] addAddress[' . $this->str_sanitize($this->to_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->to_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                        //$oCRNRSTN_PHPMailer->addAddress($this->to_email_ARRAY['sys_email'][$i], $this->to_email_ARRAY['name'][$i]);
                        $oCRNRSTN_PROXYMailer->addAddress($this->to_email_ARRAY['sys_email'][$i], $this->to_email_ARRAY['name'][$i]);

                    }
                }
            }

            //
            // INITIALIZE REPLYTO
            if($tmp_replyto_email_cnt>0){

                for($i=0; $i<$tmp_replyto_email_cnt; $i++){
                    $this->error_log('oGabriel [PROXY] addReplyTo[' . $this->str_sanitize($this->replyto_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->replyto_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    //$oCRNRSTN_PHPMailer->addReplyTo($this->replyto_email_ARRAY['sys_email'][$i], $this->replyto_email_ARRAY['name'][$i]);
                    $oCRNRSTN_PROXYMailer->addReplyTo($this->replyto_email_ARRAY['sys_email'][$i], $this->replyto_email_ARRAY['name'][$i]);
                }
            }

            //
            // INITIALIZE CC
            if($tmp_cc_email_cnt>0){

                for($i=0; $i<$tmp_cc_email_cnt; $i++){
                    $this->error_log('oGabriel [PROXY] addCC[' . $this->str_sanitize($this->cc_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->cc_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    //$oCRNRSTN_PHPMailer->addCC($this->cc_email_ARRAY['sys_email'][$i], $this->cc_email_ARRAY['name'][$i]);
                    $oCRNRSTN_PROXYMailer->addCC($this->cc_email_ARRAY['sys_email'][$i], $this->cc_email_ARRAY['name'][$i]);
                }
            }

            //
            // INITIALIZE BCC
            if($tmp_bcc_email_cnt>0){

                for($i=0; $i<$tmp_bcc_email_cnt; $i++){
                    $this->error_log('oGabriel [PROXY] addBCC[' . $this->str_sanitize($this->bcc_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->bcc_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    //$oCRNRSTN_PHPMailer->addBCC($this->bcc_email_ARRAY['sys_email'][$i], $this->bcc_email_ARRAY['name'][$i]);
                    $oCRNRSTN_PROXYMailer->addBCC($this->bcc_email_ARRAY['sys_email'][$i], $this->bcc_email_ARRAY['name'][$i]);
                }
            }
        }

        if(isset($oCRNRSTN_PROXYMailer)){

            $this_PROXYMailer_ARRAY[] = $oCRNRSTN_PROXYMailer;
            $this->PROXYMailer_experience_tracker_ARRAY[] = $this->to_email_ARRAY['experience_tracker'][0];
            $this->PROXYMailer_single_or_bulk_ARRAY[] = 'single';

            $this->error_log('oGabriel [PROXY] SINGLE ADD of address pushed to oCRNRSTN_PHPMailer_ARRAY', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

        }

        //
        // PROCESS ANY BULK EMAIL
        if(isset($this->to_email_ARRAY['experience_tracker'])){

            $tmp_experience_tracker_cnt = sizeof($this->to_email_ARRAY['experience_tracker']);

        }

        if($tmp_experience_tracker_cnt > 0){

            for($i=0; $i<$tmp_experience_tracker_cnt; $i++){

                $tmp_exp_tracker = $this->to_email_ARRAY['experience_tracker'][$i];

                if(isset($this->to_email_ARRAY[$tmp_exp_tracker])){

                    //
                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                    // Return an instantiation of
                    // the CRNRSTN :: Lightsaber
                    // SOAP Services Layer
                    // Messenger Services From
                    // the Furthest Reaches of
                    // the North SOAP Proxy
                    // Mailer class object.
                    //
                    //
                    // 5 :: Monday, July 15, 2024 @ 2150 hrs.
                    //
                    // $oCRNRSTN_PROXYMailer = new crnrstn_highway_of_the_king($this);
                    $oCRNRSTN_PROXYMailer = $this->return_registered_resource('new', 'crnrstn_highway_of_the_king', $this);

                    //$oCRNRSTN_PHPMailer = new \PHPMailer\crnrstn_PHPMailer\crnrstn_PHPMailer($this);

                    //
                    // WE HAVE FOUND BULK EMAIL
                    $tmp_to_email_bulk_cnt = sizeof($this->to_email_ARRAY[$tmp_exp_tracker]['sys_email']);
                    $this->error_log('oGabriel [PROXY] WE HAVE COUNT OF ' . $tmp_to_email_bulk_cnt . ' TO PERFORM BULK OPERATION.', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    if(isset($this->replyto_email_ARRAY[$tmp_exp_tracker]['sys_email'])){

                        $tmp_replyto_email_bulk_cnt = sizeof($this->replyto_email_ARRAY[$tmp_exp_tracker]['sys_email']);

                    }

                    if(isset($this->cc_email_ARRAY[$tmp_exp_tracker]['sys_email'])){

                        $tmp_cc_email_bulk_cnt = sizeof($this->cc_email_ARRAY[$tmp_exp_tracker]['sys_email']);

                    }

                    if(isset($this->bcc_email_ARRAY[$tmp_exp_tracker]['sys_email'])){

                        $tmp_bcc_email_bulk_cnt = sizeof($this->bcc_email_ARRAY[$tmp_exp_tracker]['sys_email']);

                    }

                    if(isset($this->sender_Bulk[$tmp_exp_tracker]['email'])){
                        $this->error_log('oGabriel [PROXY] WE HAVE BULK SENDER/FROM sender_Bulk(' . $this->str_sanitize($this->sender_Bulk[$tmp_exp_tracker]['email'], 'email_private') . ' ' . $this->sender_Bulk[$tmp_exp_tracker]['name'] . ')...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    }

                    //
                    // INITIALIZE TO
                    for($ii=0; $ii<$tmp_to_email_bulk_cnt; $ii++){

                        $tmp_to_email = $this->to_email_ARRAY[$tmp_exp_tracker]['email'][$ii];
                        $tmp_to_sys_email = $this->to_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii];
                        $tmp_to_name = $this->to_email_ARRAY[$tmp_exp_tracker]['name'][$ii];

                        if(isset($this->optout_suppression_ARRAY[$tmp_to_sys_email])){

                            //
                            // OPT OUT SUPPRESSION
                            $this->reporting_optout_suppression[] = $tmp_to_sys_email;

                        }else{

                            if(isset($this->duplicate_suppression_ARRAY[$tmp_to_sys_email]) && $this->suppress_duplicates){

                                //
                                // DUPLICATE SUPPRESSION
                                $this->reporting_duplicate_suppression[] = $tmp_to_email;

                            }else{

                                if(isset($this->duplicate_suppression_ARRAY[$tmp_to_sys_email])){

                                    //
                                    // TRACK INSTANCES OF DUPLICATE SEND FOR REPORTING META
                                    $this->duplicate_suppression_ARRAY[$tmp_to_sys_email]++;

                                }else{

                                    $this->duplicate_suppression_ARRAY[$tmp_to_sys_email] = 1;

                                }

                                $oCRNRSTN_PROXYMailer->addAddress($tmp_to_sys_email, $tmp_to_name);
                                $this->error_log('oGabriel [PROXY] WE HAVE BULK RECIPIENT addAddress(' . $this->str_sanitize($tmp_to_sys_email, 'email_private') . ', ' . $tmp_to_name . ')...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }
                        }
                    }

                    //
                    // INITIALIZE SENDER/FROM
                    $tmp_from_email_bulk_cnt = 1;

                    $oCRNRSTN_PROXYMailer->setFrom($this->sender_Bulk[$tmp_exp_tracker]['email'], $this->sender_Bulk[$tmp_exp_tracker]['name']);
                    $this->error_log('oGabriel [PROXY] setFrom(' . $this->str_sanitize($this->sender_Bulk[$tmp_exp_tracker]['email'], 'email_private') . ', ' . $this->sender_Bulk[$tmp_exp_tracker]['name'] . ')...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    //
                    // INITIALIZE REPLYTO
                    if($tmp_replyto_email_bulk_cnt>0){

                        for($ii=0; $ii<$tmp_replyto_email_bulk_cnt; $ii++){

                            $oCRNRSTN_PROXYMailer->addReplyTo($this->replyto_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii], $this->replyto_email_ARRAY[$tmp_exp_tracker]['name'][$ii]);

                        }
                    }

                    //
                    // INITIALIZE CC
                    if($tmp_cc_email_bulk_cnt>0){

                        for($ii=0; $ii<$tmp_cc_email_bulk_cnt; $ii++){

                            $oCRNRSTN_PROXYMailer->addCC($this->cc_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii], $this->cc_email_ARRAY[$tmp_exp_tracker]['name'][$ii]);

                        }
                    }

                    //
                    // INITIALIZE BCC
                    if($tmp_bcc_email_bulk_cnt>0){

                        for($ii=0; $ii<$tmp_bcc_email_bulk_cnt; $ii++){

                            $oCRNRSTN_PROXYMailer->addBCC($this->bcc_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii], $this->bcc_email_ARRAY[$tmp_exp_tracker]['name'][$ii]);

                        }
                    }

                    if(isset($oCRNRSTN_PROXYMailer)){

                        $this_PROXYMailer_ARRAY[] = $oCRNRSTN_PROXYMailer;
                        $this->PROXYMailer_experience_tracker_ARRAY[] = $tmp_exp_tracker;
                        $this->PROXYMailer_single_or_bulk_ARRAY[] = 'bulk';

                    }

                    $oCRNRSTN_PROXYMailer = NULL;
                    unset($oCRNRSTN_PROXYMailer);

                }

            }

        }else{

            $this->error_log('oGabriel [PROXY] WE HAVE NO BULK EMAIL TO PROCESS...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initialize_sender_recipient()
    {

        $tmp_to_email_cnt           =
        $tmp_experience_tracker_cnt =
        $tmp_replyto_email_cnt      =
        $tmp_cc_email_cnt           =
        $tmp_bcc_email_cnt          =
        $tmp_to_email_bulk_cnt      =
        $tmp_replyto_email_bulk_cnt =
        $tmp_cc_email_bulk_cnt      =
        $tmp_bcc_email_bulk_cnt     =
        $tmp_from_email_bulk_cnt    = 0;

        //
        // PROCESS ANY SINGLE SERVING EMAIL
        if(isset($this->to_email_ARRAY['sys_email'])){

            $tmp_to_email_cnt = sizeof($this->to_email_ARRAY['sys_email']);

        }

        if(isset($this->cc_email_ARRAY['sys_email'])){

            $tmp_cc_email_cnt = sizeof($this->cc_email_ARRAY['sys_email']);

        }

        if(isset($this->replyto_email_ARRAY['sys_email'])){

            $tmp_replyto_email_cnt = sizeof($this->replyto_email_ARRAY['sys_email']);

        }

        if(isset($this->bcc_email_ARRAY['sys_email'])){

            $tmp_bcc_email_cnt = sizeof($this->bcc_email_ARRAY['sys_email']);

        }

        if($tmp_to_email_cnt>0){

            //
            // # C # R # N # R # S # T # N # :: # L # I # G # H # T
            // Return an instantiation of
            // the PHPMailer with CRNRSTN ::
            // Lightsaber SOAP Services
            // Layer Framework Integrations
            // class object.
            //
            //
            // 5 :: Monday, July 15, 2024 @ 2151 hrs.
            //
            // $oCRNRSTN_PHPMailer = new \PHPMailer\crnrstn_PHPMailer\crnrstn_PHPMailer($this);
            $oCRNRSTN_PHPMailer = $this->return_registered_resource('new', 'crnrstn_PHPMailer', $this);

            //
            // INITIALIZE SENDER/FROM
            $oCRNRSTN_PHPMailer->setFrom($this->sender_email, $this->sender_name);
            $this->error_log('oGabriel INITIALIZE SENDER/FROM setFrom[' . 
            $this->str_sanitize($this->sender_email, 'email_private') . ' - ' . 
            $this->sender_name . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

            //
            // INITIALIZE TO
            for($i = 0; $i < $tmp_to_email_cnt; $i++){

                if(isset($this->optout_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]])){

                    //
                    // OPT OUT SUPPRESSION
                    $this->reporting_optout_suppression[] = $this->to_email_ARRAY['email'][$i];

                }else{

                    if(isset($this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]]) && $this->suppress_duplicates){

                        //
                        // DUPLICATE SUPPRESSION
                        $this->reporting_duplicate_suppression[] = $this->to_email_ARRAY['email'][$i];

                    }else{

                        if(isset($this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]])){

                            //
                            // TRACK INSTANCES OF DUPLICATE SEND FOR REPORTING META
                            $this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]]++;

                        }else{

                            $this->duplicate_suppression_ARRAY[$this->to_email_ARRAY['sys_email'][$i]] = 1;

                        }

                        $this->error_log('oGabriel addAddress[' .
                        $this->str_sanitize($this->to_email_ARRAY['sys_email'][$i], 'email_private') .
                        ' - ' . $this->to_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                        $oCRNRSTN_PHPMailer->addAddress($this->to_email_ARRAY['sys_email'][$i], $this->to_email_ARRAY['name'][$i]);

                    }
                }
            }

            //
            // INITIALIZE REPLYTO
            if($tmp_replyto_email_cnt>0){

                for($i=0; $i<$tmp_replyto_email_cnt; $i++){
                    $this->error_log('oGabriel addReplyTo[' . $this->str_sanitize($this->replyto_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->replyto_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    $oCRNRSTN_PHPMailer->addReplyTo($this->replyto_email_ARRAY['sys_email'][$i], $this->replyto_email_ARRAY['name'][$i]);

                }
            }

            //
            // INITIALIZE CC
            if($tmp_cc_email_cnt>0){

                for($i=0; $i<$tmp_cc_email_cnt; $i++){
                    $this->error_log('oGabriel addCC[' . $this->str_sanitize($this->cc_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->cc_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    $oCRNRSTN_PHPMailer->addCC($this->cc_email_ARRAY['sys_email'][$i], $this->cc_email_ARRAY['name'][$i]);

                }
            }

            //
            // INITIALIZE BCC
            if($tmp_bcc_email_cnt>0){

                for($i=0; $i<$tmp_bcc_email_cnt; $i++){
                    $this->error_log('oGabriel addBCC[' . $this->str_sanitize($this->bcc_email_ARRAY['sys_email'][$i], 'email_private') . ' - ' . $this->bcc_email_ARRAY['name'][$i] . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    $oCRNRSTN_PHPMailer->addBCC($this->bcc_email_ARRAY['sys_email'][$i], $this->bcc_email_ARRAY['name'][$i]);

                }
            }
        }

        if(isset($oCRNRSTN_PHPMailer)){

            $this_PHPMailer_ARRAY[] = $oCRNRSTN_PHPMailer;
            $this->PHPMailer_experience_tracker_ARRAY[] = $this->to_email_ARRAY['experience_tracker'][0];
            $this->PHPMailer_single_or_bulk_ARRAY[] = 'single';

            $this->error_log('oGabriel SINGLE ADD of address pushed to oCRNRSTN_PHPMailer_ARRAY', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);


        }

        //
        // PROCESS ANY BULK EMAIL
        if(isset($this->to_email_ARRAY['experience_tracker'])){

            $tmp_experience_tracker_cnt = sizeof($this->to_email_ARRAY['experience_tracker']);

        }

        if($tmp_experience_tracker_cnt > 0){

            for($i=0; $i<$tmp_experience_tracker_cnt; $i++){

                $tmp_exp_tracker = $this->to_email_ARRAY['experience_tracker'][$i];

                if(isset($this->to_email_ARRAY[$tmp_exp_tracker])){

                    //
                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                    // Return an instantiation of
                    // the PHPMailer with CRNRSTN ::
                    // Lightsaber SOAP Services
                    // Layer Framework Integrations
                    // class object.
                    //
                    //
                    // 5 :: Monday, July 15, 2024 @ 2153 hrs.
                    //
                    // $oCRNRSTN_PHPMailer = new \PHPMailer\crnrstn_PHPMailer\crnrstn_PHPMailer($this);
                    $oCRNRSTN_PHPMailer = $this->return_registered_resource('new', 'crnrstn_PHPMailer', $this);

                    //
                    // WE HAVE FOUND BULK EMAIL
                    $tmp_to_email_bulk_cnt = sizeof($this->to_email_ARRAY[$tmp_exp_tracker]['sys_email']);
                    $this->error_log('oGabriel WE HAVE COUNT OF ' . $tmp_to_email_bulk_cnt . ' TO PERFORM BULK OPERATION.', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    if(isset($this->replyto_email_ARRAY[$tmp_exp_tracker]['sys_email'])){

                        $tmp_replyto_email_bulk_cnt = sizeof($this->replyto_email_ARRAY[$tmp_exp_tracker]['sys_email']);

                    }

                    if(isset($this->cc_email_ARRAY[$tmp_exp_tracker]['sys_email'])){

                        $tmp_cc_email_bulk_cnt = sizeof($this->cc_email_ARRAY[$tmp_exp_tracker]['sys_email']);

                    }

                    if(isset($this->bcc_email_ARRAY[$tmp_exp_tracker]['sys_email'])){

                        $tmp_bcc_email_bulk_cnt = sizeof($this->bcc_email_ARRAY[$tmp_exp_tracker]['sys_email']);

                    }

                    if(isset($this->sender_Bulk[$tmp_exp_tracker]['email'])){
                        $this->error_log('oGabriel WE HAVE BULK SENDER/FROM sender_Bulk(' . $this->str_sanitize($this->sender_Bulk[$tmp_exp_tracker]['email'], 'email_private') . ' ' . $this->sender_Bulk[$tmp_exp_tracker]['name'] . ')...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    }

                    //
                    // INITIALIZE TO
                    for($ii=0; $ii<$tmp_to_email_bulk_cnt; $ii++){

                        $tmp_to_email = $this->to_email_ARRAY[$tmp_exp_tracker]['email'][$ii];
                        $tmp_to_sys_email = $this->to_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii];
                        $tmp_to_name = $this->to_email_ARRAY[$tmp_exp_tracker]['name'][$ii];

                        if(isset($this->optout_suppression_ARRAY[$tmp_to_sys_email])){

                            //
                            // OPT OUT SUPPRESSION
                            $this->reporting_optout_suppression[] = $tmp_to_sys_email;

                        }else{

                            if(isset($this->duplicate_suppression_ARRAY[$tmp_to_sys_email]) && $this->suppress_duplicates){

                                //
                                // DUPLICATE SUPPRESSION
                                $this->reporting_duplicate_suppression[] = $tmp_to_email;

                            }else{

                                if(isset($this->duplicate_suppression_ARRAY[$tmp_to_sys_email])){

                                    //
                                    // TRACK INSTANCES OF DUPLICATE SEND FOR REPORTING META
                                    $this->duplicate_suppression_ARRAY[$tmp_to_sys_email]++;

                                }else{

                                    $this->duplicate_suppression_ARRAY[$tmp_to_sys_email] = 1;

                                }

                                $oCRNRSTN_PHPMailer->addAddress($tmp_to_sys_email, $tmp_to_name);
                                $this->error_log('oGabriel WE HAVE BULK RECIPIENT addAddress(' . $this->str_sanitize($tmp_to_sys_email, 'email_private') . ', ' . $tmp_to_name . ')...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }
                        }
                    }

                    //
                    // INITIALIZE SENDER/FROM
                    $tmp_from_email_bulk_cnt = 1;

                    $oCRNRSTN_PHPMailer->setFrom($this->sender_Bulk[$tmp_exp_tracker]['email'], $this->sender_Bulk[$tmp_exp_tracker]['name']);
                    $this->error_log('oGabriel setFrom(' . $this->str_sanitize($this->sender_Bulk[$tmp_exp_tracker]['email'], 'email_private') . ', ' . $this->sender_Bulk[$tmp_exp_tracker]['name'] . ')...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    //
                    // INITIALIZE REPLYTO
                    if($tmp_replyto_email_bulk_cnt>0){

                        for($ii=0; $ii<$tmp_replyto_email_bulk_cnt; $ii++){

                            $oCRNRSTN_PHPMailer->addReplyTo($this->replyto_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii], $this->replyto_email_ARRAY[$tmp_exp_tracker]['name'][$ii]);

                        }
                    }

                    //
                    // INITIALIZE CC
                    if($tmp_cc_email_bulk_cnt>0){

                        for($ii=0; $ii<$tmp_cc_email_bulk_cnt; $ii++){

                            $oCRNRSTN_PHPMailer->addCC($this->cc_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii], $this->cc_email_ARRAY[$tmp_exp_tracker]['name'][$ii]);

                        }
                    }

                    //
                    // INITIALIZE BCC
                    if($tmp_bcc_email_bulk_cnt>0){

                        for($ii=0; $ii<$tmp_bcc_email_bulk_cnt; $ii++){

                            $oCRNRSTN_PHPMailer->addBCC($this->bcc_email_ARRAY[$tmp_exp_tracker]['sys_email'][$ii], $this->bcc_email_ARRAY[$tmp_exp_tracker]['name'][$ii]);

                        }
                    }

                    if(isset($oCRNRSTN_PHPMailer)){

                        $this_PHPMailer_ARRAY[] = $oCRNRSTN_PHPMailer;
                        $this->PHPMailer_experience_tracker_ARRAY[] = $tmp_exp_tracker;
                        $this->PHPMailer_single_or_bulk_ARRAY[] = 'bulk';

                    }

                    $oCRNRSTN_PHPMailer = NULL;
                    unset($oCRNRSTN_PHPMailer);

                }

            }

        }else{

            $this->error_log('oGabriel WE HAVE NO BULK EMAIL TO PROCESS...', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initialize_connectivity()
    {

        try{

            if(isset($this_PHPMailer_ARRAY)){

                $tmp_mailer_cnt = sizeof($this_PHPMailer_ARRAY);

                for($i = 0; $i < $tmp_mailer_cnt; $i++){

                    $oCRNRSTN_PHPMailer = $this_PHPMailer_ARRAY[$i];

                    if(isset($this->mail_host_servers)){

                        //
                        // SPECIFY MAIN AND BACKUP SERVER
                        $oCRNRSTN_PHPMailer->Host = $this->mail_host_servers;
                        $this->error_log('oGabriel Host=[' . $this->mail_host_servers . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    }

                    if(isset($this->port)){

                        //
                        // SPECIFY PORT
                        $oCRNRSTN_PHPMailer->Port = $this->port;
                        $this->error_log('oGabriel Port=[' . $this->port . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    }

                    switch($this->mail_protocol){
                        case 'SMTP':
                            $this->error_log('oGabriel isSMTP()', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                            $oCRNRSTN_PHPMailer->isSMTP();

                            if(isset($this->username)){

                                //
                                // ACTIVATE SMTP AUTHENTICATION
                                $oCRNRSTN_PHPMailer->SMTPAuth = true;
                                $oCRNRSTN_PHPMailer->Username = $this->username;    // SMTP USERNAME
                                $oCRNRSTN_PHPMailer->Password = $this->password;    // SMTP PASSWORD
                                $this->error_log('oGabriel ' . $this->mail_protocol . ' - ACTIVATE SMTP SMTPAuth=TRUE [UN=' . $this->str_sanitize($oCRNRSTN_PHPMailer->Username, 'email_private') . '][' . $oCRNRSTN_PHPMailer->Host . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }else{

                                $oCRNRSTN_PHPMailer->SMTPAuth = false;
                                $oCRNRSTN_PHPMailer->Username = '';
                                $oCRNRSTN_PHPMailer->Password = '';
                                $this->error_log('oGabriel ' . $this->mail_protocol . ' - NO SMTP SMTPAuth=FALSE [UN=' . $this->str_sanitize($oCRNRSTN_PHPMailer->Username, 'email_private') . '][' . $oCRNRSTN_PHPMailer->Host . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * This SMPTOptions data 
                             * structure articulates a 
                             * work around for PHPMailer 
                             * SSL cert verification 
                             * errors introduced through 
                             * the stricter SSL behavior 
                             * that came with the 
                             * release of PHP 5.6. 
                             *
                             * You may not see this error; 
                             * in implicit encryption mode 
                             * (SMTPS) it may be hidden 
                             * because there isn't a way for 
                             * the channel to show messages. 
                             *
                             * SMTP + STARTTLS is generally 
                             * easier to debug because of this.
                             *
                             * SOURCE :: https://pepipost.com/tutorials/phpmailer-smtp-error-could-not-connect-to-smtp-host/
                             * AUTHOR :: https://pepipost.com/tutorials/author/dibya-sahoo/
                             * DETAIL :: https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting#certificate-verification-failure
                             *
                             */
                            $oCRNRSTN_PHPMailer->SMTPOptions = array(
                                'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                )
                            );

                        break;
                        case 'MAIL':

                            $this->error_log('oGabriel isMail()', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                            $oCRNRSTN_PHPMailer->isMail();

                        break;

                        case 'SENDMAIL':
                            $this->error_log('oGabriel isSendmail()', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                            $oCRNRSTN_PHPMailer->isSendmail();

                        break;

                        case 'QMAIL':
                            $this->error_log('oGabriel isQmail()', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                            $oCRNRSTN_PHPMailer->isQmail();

                        break;
                        default:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('Unknown mail protocol of "' . $this->mail_protocol . '" has been provided. The options which are available include "SMTP", "MAIL", "SENDMAIL" and "QMAIL".');

                        break;

                    }

                    $this_PHPMailer_ARRAY[$i] = $oCRNRSTN_PHPMailer;

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No instances of the oCRNRSTN_PHPMailer class object could be found for their connectivity initialization.');

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
             * Sunday, June 30, 2024 @ 1610 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initialize_proxy_message_content()
    {

        try{

            if(isset($this_PROXYMailer_ARRAY)){

                $tmp_mailer_cnt = sizeof($this_PROXYMailer_ARRAY);
                $this->error_log('oGabriel [PROXY] initialize_message_content for [' . $tmp_mailer_cnt . '] EMAIL', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                for($i=0; $i<$tmp_mailer_cnt; $i++){
                    $this->error_log('oGabriel [PROXY] initialize_message_content() RUNNING for [' . $i . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    $oCRNRSTN_PROXYMailer = $this_PROXYMailer_ARRAY[$i];
                    $email_experience_tracker = $this->PROXYMailer_experience_tracker_ARRAY[$i];
                    $bulk_single_indicator = $this->PROXYMailer_single_or_bulk_ARRAY[$i];

                    switch($bulk_single_indicator){
                        case 'single':

                            if(isset($this->priority)){

                                $oCRNRSTN_PROXYMailer->Priority = $this->priority;
                                $this->error_log('oGabriel [PROXY] Priority = ' . $oCRNRSTN_PROXYMailer->Priority, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            if(isset($this->word_wrap)){

                                $oCRNRSTN_PROXYMailer->WordWrap = $this->word_wrap;
                                $this->error_log('oGabriel [PROXY] WordWrap = ' . $oCRNRSTN_PROXYMailer->WordWrap, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            $oCRNRSTN_PROXYMailer->is_HTML = $this->is_HTML;

                            if($this->is_HTML){

                                $this->error_log('oGabriel [PROXY] IsHTML = TRUE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->html_message) && strlen($this->html_message)>0){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_HTML_ARRAY[$email_experience_tracker])){

                                        $this->html_message = str_replace($this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['content'], $this->html_message);

                                    }

                                    $oCRNRSTN_PROXYMailer->Body = $this->html_message;

                                    if(isset($this->text_message)){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_message = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_message);

                                        }

                                        $oCRNRSTN_PROXYMailer->AltBody = $this->text_message;

                                        $this->error_log('oGabriel [PROXY] [MULTIPART] Body LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body) . '| AltBody(text version) LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->AltBody), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        $this->error_log('oGabriel [PROXY] [HTML ONLY] Body LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }

                                }else{

                                    //
                                    // NO HTML BODY. ATTEMPT GRACEFUL DEGRADATION TO TEXT VERSION (AltBody).
                                    if(isset($this->text_message)){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_message = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_message);

                                        }

                                        $oCRNRSTN_PROXYMailer->Body = $this->text_message;

                                        $this->error_log('oGabriel [PROXY] Body LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * HOOOSTON, VE HAFF PROBLEM!
                                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                                         *
                                         */
                                        throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                    }

                                }

                            }else{

                                //
                                // isHTML = FALSE
                                $this->error_log('oGabriel [PROXY] IsHTML = FALSE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->text_message)){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                        $this->text_message = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_message);

                                    }

                                    $oCRNRSTN_PROXYMailer->Body = $this->text_message;

                                    $this->error_log('oGabriel [PROXY] [TEXT VERSION] Body LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                }
                            }

                            if(isset($this->subject_line)){

                                //
                                // PROCESS DYNAMIC CONTENT
                                if(isset($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker])){

                                    $this->subject_line = str_replace($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['content'], $this->subject_line);

                                }

                                $oCRNRSTN_PROXYMailer->Subject = trim($this->subject_line);

                                $this->error_log('oGabriel [PROXY] Subject = ' . $oCRNRSTN_PROXYMailer->Subject, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                        break;
                        case 'bulk':

                            //$this->error_log('oGabriel SWITCH() ENTRY CASE="bulk"', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            if(isset($this->priorityBulk[$email_experience_tracker])){

                                $oCRNRSTN_PROXYMailer->Priority = $this->priorityBulk[$email_experience_tracker];
                                $this->error_log('oGabriel [PROXY] BULK Priority = ' . $oCRNRSTN_PROXYMailer->Priority, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            if(isset($this->word_wrapBulk[$email_experience_tracker])){

                                $oCRNRSTN_PROXYMailer->WordWrap = $this->word_wrapBulk[$email_experience_tracker];
                                $this->error_log('oGabriel [PROXY] BULK WordWrap = ' . $oCRNRSTN_PROXYMailer->WordWrap, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            $oCRNRSTN_PROXYMailer->is_HTML = $this->is_HTMLBulk[$email_experience_tracker];

                            if($this->is_HTMLBulk[$email_experience_tracker]){

                                $this->error_log('oGabriel [PROXY] BULK IsHTML = TRUE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->html_messageBulk[$email_experience_tracker]) && strlen($this->html_messageBulk[$email_experience_tracker])>0){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_HTML_ARRAY[$email_experience_tracker])){

                                        $this->html_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['content'], $this->html_messageBulk[$email_experience_tracker]);

                                    }

                                    $oCRNRSTN_PROXYMailer->Body = $this->html_messageBulk[$email_experience_tracker];

                                    if(isset($this->text_messageBulk[$email_experience_tracker])){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_messageBulk[$email_experience_tracker]);

                                        }

                                        $oCRNRSTN_PROXYMailer->AltBody = $this->text_messageBulk[$email_experience_tracker];

                                        $this->error_log('oGabriel [PROXY] BULK [MULTIPART] Body LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body) . '| AltBody(text version) LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->AltBody), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        $this->error_log('oGabriel [PROXY] BULK [HTML ONLY] Body LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }

                                }else{

                                    //
                                    // NO HTML BODY. ATTEMPT GRACEFUL DEGRADATION TO TEXT VERSION (AltBody).
                                    if(isset($this->text_messageBulk[$email_experience_tracker])){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_messageBulk[$email_experience_tracker]);

                                        }

                                        $oCRNRSTN_PROXYMailer->Body = $this->text_messageBulk[$email_experience_tracker];

                                        $this->error_log('oGabriel [PROXY] BULK Body (text version) LENGTH = ' . strlen($oCRNRSTN_PROXYMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * HOOOSTON, VE HAFF PROBLEM!
                                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                                         *
                                         */
                                        throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                    }

                                }

                            }else{

                                //
                                // isHTML = FALSE
                                $this->error_log('oGabriel [PROXY] BULK IsHTML = FALSE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->text_messageBulk[$email_experience_tracker])){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                        $this->text_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_messageBulk[$email_experience_tracker]);

                                    }

                                    $oCRNRSTN_PROXYMailer->Body = $this->text_messageBulk[$email_experience_tracker];

                                    $this->error_log('oGabriel [PROXY] BULK [TEXT VERSION] Body = ' . strlen($oCRNRSTN_PROXYMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                }
                            }

                            if(isset($this->subject_lineBulk[$email_experience_tracker])){

                                //
                                // PROCESS DYNAMIC CONTENT
                                if(isset($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker])){

                                    $this->subject_lineBulk[$email_experience_tracker] = str_replace($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['content'], $this->subject_lineBulk[$email_experience_tracker]);

                                }

                                $oCRNRSTN_PROXYMailer->Subject = trim($this->subject_lineBulk[$email_experience_tracker]);

                                $this->error_log('oGabriel [PROXY] BULK Subject [' . $i . '] = ' . $oCRNRSTN_PROXYMailer->Subject, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                        break;
                        default:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('Unknown bulk or single indicator,"' . 
                                $bulk_single_indicator . 
                                '" received.');

                        break;

                    }

                    $this->error_log('[' . 
                                     $i . 
                                     '] oGabriel [PROXY] ' . 
                                     'BULK - Returning FULLY ' . 
                                     'EMAIL, CONNECTION and ' . 
                                     'CONTENT CHARGED oCRNRSTN_' . 
                                     'PHPMailer to the oArray().', 
                                     __LINE__, 
                                     __METHOD__, 
                                     __FILE__, 
                                     CRNRSTN_GABRIEL);
                    $this_PROXYMailer_ARRAY[$i] = $oCRNRSTN_PROXYMailer;

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No instances of the oCRNRSTN_PHPMailer class object could be found for their connectivity initialization.');

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
             * Sunday, June 30, 2024 @ 1612 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function initialize_message_content()
    {

        try{

            if(isset($this_PHPMailer_ARRAY)){

                $tmp_mailer_cnt = sizeof($this_PHPMailer_ARRAY);
                $this->error_log('oGabriel initialize_message_content for [' . $tmp_mailer_cnt . '] EMAIL', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                for($i=0; $i<$tmp_mailer_cnt; $i++){
                    $this->error_log('oGabriel initialize_message_content() RUNNING for [' . $i . ']', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                    $oCRNRSTN_PHPMailer = $this_PHPMailer_ARRAY[$i];
                    $email_experience_tracker = $this->PHPMailer_experience_tracker_ARRAY[$i];
                    $bulk_single_indicator = $this->PHPMailer_single_or_bulk_ARRAY[$i];

                    switch($bulk_single_indicator){
                        case 'single':

                            if(isset($this->priority)){

                                $oCRNRSTN_PHPMailer->Priority = $this->priority;
                                $this->error_log('oGabriel Priority = ' . $oCRNRSTN_PHPMailer->Priority, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            if(isset($this->word_wrap)){

                                $oCRNRSTN_PHPMailer->WordWrap = $this->word_wrap;
                                $this->error_log('oGabriel WordWrap = ' . $oCRNRSTN_PHPMailer->WordWrap, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            $oCRNRSTN_PHPMailer->IsHTML($this->is_HTML);

                            if($this->is_HTML){

                                $this->error_log('oGabriel IsHTML = TRUE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->html_message) && strlen($this->html_message)>0){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_HTML_ARRAY[$email_experience_tracker])){

                                        $this->html_message = str_replace($this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['content'], $this->html_message);

                                    }

                                    $oCRNRSTN_PHPMailer->Body = $this->html_message;

                                    if(isset($this->text_message)){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_message = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_message);

                                        }

                                        $oCRNRSTN_PHPMailer->AltBody = $this->text_message;

                                        $this->error_log('oGabriel [MULTIPART] Body LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body) . '| AltBody(text version) LENGTH = ' . strlen($oCRNRSTN_PHPMailer->AltBody), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        $this->error_log('oGabriel [HTML ONLY] Body LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }

                                }else{

                                    //
                                    // NO HTML BODY. ATTEMPT GRACEFUL DEGRADATION TO TEXT VERSION (AltBody).
                                    if(isset($this->text_message)){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_message = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_message);

                                        }

                                        $oCRNRSTN_PHPMailer->Body = $this->text_message;

                                        $this->error_log('oGabriel Body LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * HOOOSTON, VE HAFF PROBLEM!
                                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                                         *
                                         */
                                        throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                    }

                                }

                            }else{

                                //
                                // isHTML = FALSE
                                $this->error_log('oGabriel IsHTML = FALSE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->text_message)){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                        $this->text_message = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_message);

                                    }

                                    $oCRNRSTN_PHPMailer->Body = $this->text_message;

                                    $this->error_log('oGabriel [TEXT VERSION] Body LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                }
                            }

                            if(isset($this->subject_line)){

                                //
                                // PROCESS DYNAMIC CONTENT
                                if(isset($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker])){

                                    $this->subject_line = str_replace($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['content'], $this->subject_line);

                                }

                                $oCRNRSTN_PHPMailer->Subject = trim($this->subject_line);

                                $this->error_log('oGabriel Subject = ' . $oCRNRSTN_PHPMailer->Subject, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                        break;
                        case 'bulk':

                            //$this->error_log('oGabriel SWITCH() ENTRY CASE="bulk"', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            if(isset($this->priorityBulk[$email_experience_tracker])){

                                $oCRNRSTN_PHPMailer->Priority = $this->priorityBulk[$email_experience_tracker];
                                $this->error_log('oGabriel BULK Priority = ' . $oCRNRSTN_PHPMailer->Priority, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            if(isset($this->word_wrapBulk[$email_experience_tracker])){

                                $oCRNRSTN_PHPMailer->WordWrap = $this->word_wrapBulk[$email_experience_tracker];
                                $this->error_log('oGabriel BULK WordWrap = ' . $oCRNRSTN_PHPMailer->WordWrap, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                            $oCRNRSTN_PHPMailer->isHTML($this->is_HTMLBulk[$email_experience_tracker]);

                            if($this->is_HTMLBulk[$email_experience_tracker]){

                                $this->error_log('oGabriel BULK IsHTML = TRUE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->html_messageBulk[$email_experience_tracker]) && strlen($this->html_messageBulk[$email_experience_tracker])>0){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_HTML_ARRAY[$email_experience_tracker])){

                                        $this->html_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_HTML_ARRAY[$email_experience_tracker]['content'], $this->html_messageBulk[$email_experience_tracker]);

                                    }

                                    $oCRNRSTN_PHPMailer->Body = $this->html_messageBulk[$email_experience_tracker];

                                    if(isset($this->text_messageBulk[$email_experience_tracker])){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_messageBulk[$email_experience_tracker]);

                                        }

                                        $oCRNRSTN_PHPMailer->AltBody = $this->text_messageBulk[$email_experience_tracker];

                                        $this->error_log('oGabriel BULK [MULTIPART] Body LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body) . '| AltBody(text version) LENGTH = ' . strlen($oCRNRSTN_PHPMailer->AltBody), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        $this->error_log('oGabriel BULK [HTML ONLY] Body LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }

                                }else{

                                    //
                                    // NO HTML BODY. ATTEMPT GRACEFUL DEGRADATION TO TEXT VERSION (AltBody).
                                    if(isset($this->text_messageBulk[$email_experience_tracker])){

                                        //
                                        // PROCESS DYNAMIC CONTENT
                                        if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                            $this->text_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_messageBulk[$email_experience_tracker]);

                                        }

                                        $oCRNRSTN_PHPMailer->Body = $this->text_messageBulk[$email_experience_tracker];

                                        $this->error_log('oGabriel BULK Body (text version) LENGTH = ' . strlen($oCRNRSTN_PHPMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                    }else{

                                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                         * HOOOSTON, VE HAFF PROBLEM!
                                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                                         *
                                         */
                                        throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                    }

                                }

                            }else{

                                //
                                // isHTML = FALSE
                                $this->error_log('oGabriel BULK IsHTML = FALSE', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                if(isset($this->text_messageBulk[$email_experience_tracker])){

                                    //
                                    // PROCESS DYNAMIC CONTENT
                                    if(isset($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker])){

                                        $this->text_messageBulk[$email_experience_tracker] = str_replace($this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_TEXT_ARRAY[$email_experience_tracker]['content'], $this->text_messageBulk[$email_experience_tracker]);

                                    }

                                    $oCRNRSTN_PHPMailer->Body = $this->text_messageBulk[$email_experience_tracker];

                                    $this->error_log('oGabriel BULK [TEXT VERSION] Body = ' . strlen($oCRNRSTN_PHPMailer->Body), __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                                }else{

                                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                     * HOOOSTON, VE HAFF PROBLEM!
                                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                                     *
                                     */
                                    throw new Exception('No message body has been provided via either oCRNRSTN_USR->addBody() or oCRNRSTN_USR->addAltBody().');

                                }
                            }

                            if(isset($this->subject_lineBulk[$email_experience_tracker])){

                                //
                                // PROCESS DYNAMIC CONTENT
                                if(isset($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker])){

                                    $this->subject_lineBulk[$email_experience_tracker] = str_replace($this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['placeholder'], $this->dynamic_content_SUBJECT_ARRAY[$email_experience_tracker]['content'], $this->subject_lineBulk[$email_experience_tracker]);

                                }

                                $oCRNRSTN_PHPMailer->Subject = trim($this->subject_lineBulk[$email_experience_tracker]);

                                $this->error_log('oGabriel BULK Subject [' . $i . '] = ' . $oCRNRSTN_PHPMailer->Subject, __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

                            }

                        break;
                        default:

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * HOOOSTON, VE HAFF PROBLEM!
                             * https://www.wired.com/2011/04/alt-text-spacecraft/
                             *
                             */
                            throw new Exception('Unknown bulk or single indicator,"' . $bulk_single_indicator . '" received.');

                        break;

                    }

                    $this->error_log('[' . $i . '] oGabriel BULK - Returning FULLY EMAIL, CONNECTION and CONTENT CHARGED oCRNRSTN_PHPMailer to the oArray().', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);
                    $this_PHPMailer_ARRAY[$i] = $oCRNRSTN_PHPMailer;

                }

            }else{

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('No instances of the oCRNRSTN_PHPMailer class object could be found for their connectivity initialization.');

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
             * Sunday, June 30, 2024 @ 1612 hrs.
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

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function sendStatusReportEmail(
             $recipient_email, 
             $recipient_name)
    {

        $this->error_log('Trigger status report email to ' . $recipient_name . ' at ' . $this->str_sanitize($recipient_email, 'email_private') . '.', __LINE__, __METHOD__, __FILE__, CRNRSTN_GABRIEL);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function clean_system_email($email_str)
    {

        $email_str = trim(strtolower($email_str));

        return $email_str;

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
    private function clean_system_email_comma_delimited(
                     $email_str, 
                     $key_by_index = false, 
                     $keep_raw = true)
    {

        $output_email_array = array();

        $tmp_array     = explode(',', $email_str);
        $tmp_email_cnt = sizeof($tmp_array);

        if($keep_raw){

            if($key_by_index){

                for($i=0; $i<$tmp_email_cnt; $i++){

                    //
                    // THIS WILL REMOVE ALL DUPLICATES
                    $output_email_array['RAW'][trim($tmp_array[$i])] = 1;
                    $output_email_array['SYS_FORMATTED'][trim(strtolower($tmp_array[$i]))] = 1;

                }

            }else{

                for($i=0; $i<$tmp_email_cnt; $i++){

                    $output_email_array['RAW'][] = trim($tmp_array[$i]);
                    $output_email_array['SYS_FORMATTED'][] = trim(strtolower($tmp_array[$i]));

                }

            }

        }else{

            if($key_by_index){

                for($i=0; $i<$tmp_email_cnt; $i++){

                    //
                    // THIS WILL REMOVE ALL DUPLICATES
                    $output_email_array['SYS_FORMATTED'][trim(strtolower($tmp_array[$i]))] = 1;

                }

            }else{

                for($i=0; $i<$tmp_email_cnt; $i++){

                    $output_email_array['SYS_FORMATTED'][] = trim(strtolower($tmp_array[$i]));

                }

            }

        }

        return $output_email_array;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_CRNRSTN_SysMsgHTMLBody($msgType)
    {

        try{

            switch($msgType){
                case 'ELECTRUM_PERFORMANCE_REPORT':

                    $tmp_body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    ' . $this->return_creative('CRNRSTN_ICO') . '
    <title>CRNRSTN ::</title>
</head>

<body style="background-color: #FFF; width:100%; text-align: center; margin:0px auto;">
<table cellpadding="0" cellspacing="0" border="0" width="810" style="width:810px; text-align: center; margin:0px auto;">
    <tr>
        <td><div style="line-height:13px; font-size:12px;">&nbsp;<br>&nbsp;</div></td>
    </tr>
    <tr>
        <td>

            <table cellpadding="0" cellspacing="0" border="0" width="800" style="width:800px; background-color: #FFF; text-align: center; margin:0px auto;">
                <tr><td style="text-align: left;"><div style="border-top: 10px solid #FFF;border-left: 15px solid #FFF;border-bottom: 10px solid #FFF;">{SYS_LOG_INTEGER_CONSTANT}</div></td></tr>
                <tr><td>

                    <table cellpadding="0" cellspacing="0" border="0" width="800" style="width:800px; border:2px solid #D2D2D2;">
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td style="width:180px;"><div style="border-top: 10px solid #FFF;border-left: 10px solid #FFF;">' . $this->return_creative('CRNRSTN_LOGO', CRNRSTN_HTML) . '</div></td>
                                                    <td valign="top" align="right" style="text-align:right;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="610" style="border-bottom:10px solid #FFF; border-right: 10px solid #FFF; text-align: right;">
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:15px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-align:right;font-weight: bold;">{SYS_MESSAGE_TITLE_HTML}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px;text-align:right; font-weight: bold;">Sending IP Address<br><div style="font-weight: normal; border-top: 4px solid #FFF;">{SYS_REMOTE_ADDR} (<a href="http://{SYS_SERVER_NAME}" target="_blank" style="text-decoration: none; color:#06C; text-decoration: underline;">{SYS_SERVER_NAME}</a>)</div></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:right; font-weight: bold;">System Timestamp / Process Runtime<br><div style="font-weight: normal; border-top: 4px solid #FFF;">{SYS_SYSTEM_TIME} / {PROCESS_RUN_TIME} seconds</div></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border:2px solid #F90000;" valign="top">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td align="left" style="text-align: left;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:19px; border-top:10px solid #FFF; border-bottom:10px solid #FFF; border-left:15px solid #FFF; border-right:15px solid #FFF; line-height:30px;">
                                                            {SYS_MESSAGE_HTML}
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #3A3A3A;">
                                            <div style="border-left:15px solid #3A3A3A; border-top:15px solid #3A3A3A; border-bottom:15px solid #3A3A3A; color:#FFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size:23px; text-align:left;">Electrum &ndash; Performance Overview</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Start Time :: {START_TIME}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">End Time :: {END_TIME}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Total Run Time :: {PRETTY_RUN_TIME}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Count of assets valid for transfer :: {TOTAL_COUNT_VALID_FOR_TRANSFER}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Count of assets excluded :: {TOTAL_COUNT_FILES_SKIPPED}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Number of endpoints for asset reception :: {TOTAL_COUNT_DESTINATION_ENDPOINTS}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Total count of asset transfer movements :: {TOTAL_COUNT_FILES_TRANSFERRED}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Total volume of data transferred :: {TOTAL_FILESIZE_FILES_TRANSFERRED}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Avg vol sent to each destination :: {ENDPOINT_FILESIZE_FILES_TRANSFERRED}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Number of asset transfer errors experienced :: {TOTAL_ERRORS_FILES_TRANSFERRED}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Number of endpoint connection errors experienced :: {TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="border-left:15px solid #FFF; border-top:10px solid #FFF; border-bottom:10px solid #FFF; font-family: Arial, Helvetica, sans-serif; font-size:16px; text-align:left;">Percentage of assets successfully transferred :: {PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED}</div>
                                        </td>
                                    </tr>
                                    <tr><td><div style="font-size: 12px; line-height: 14px;">&nbsp;</div></td></tr>
                                    <tr>
                                        <td style="background-color: #3A3A3A;">
                                            <div style="border-left:15px solid #3A3A3A; border-top:15px solid #3A3A3A; border-bottom:15px solid #3A3A3A; color:#FFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size:23px; text-align:left;">Data Sources</div>
                                        </td>
                                    </tr>
                                    {ELECTRUM_DATA_SOURCE_HTML}
                                    <tr><td><div style="font-size: 12px; line-height: 14px;">&nbsp;</div></td></tr>
                                    <tr>
                                        <td style="background-color: #3A3A3A;">
                                            <div style="border-left:15px solid #3A3A3A; border-top:15px solid #3A3A3A; border-bottom:15px solid #3A3A3A; color:#FFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size:23px; text-align:left;">Electrum &ndash; Data Source Exclusions</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {ELECTRUM_DATA_HANDLING_PROFILE_HTML}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #3A3A3A">
                                            <div style="border-left:15px solid #3A3A3A; border-top:15px solid #3A3A3A; border-bottom:15px solid #3A3A3A; color:#FFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size:23px; text-align:left;">Data Destinations</div>
                                        </td>
                                    </tr>
                                    {ELECTRUM_DATA_DESTINATION_HTML}
                                    {ELECTRUM_ERRORS_TRACE_HTML}
                                    <tr>
                                        <td><span style="font-size: 5px; line-height: 8px;">&nbsp;</span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; border-top:2px solid #D2D2D2; border-bottom:2px solid #D2D2D2;">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td align="center"><div style="font-family:Arial, Helvetica, sans-serif; color:#333; font-size:12px; text-align:center; margin:0px auto; line-height: 18px; border-top:10px solid #FFF; border-bottom:10px solid #FFF;">&copy; 2012-' . date('Y') . ' Jonathan J5 Harris,<br><em>All Rights Reserved in accordance with the most recent version of the MIT License.</em></div></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td valign="top" align="left" style="text-align: left; width: 633px;">

                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td style="text-align: left; border-left:20px solid #FFF; border-right:8px solid #FFF; border-top:30px solid #FFF;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal; line-height: 20px;">Please note that this information may
                                                            not have been saved anywhere. For this reason, it
                                                            may be good to maintain a copy of this email.</div>

                                                        <div style="font-size:14px; line-height: 16px;">&nbsp;<br>&nbsp;<br></div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal; line-height: 20px;">This email was sent to {EMAIL}.<br>
                                                            If you wish to unsubscribe from future
                                                            system notifications, please contact the
                                                            website administrator.</div>

                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td align="right" style="text-align:right; border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal;">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr><td style="text-align: right;">' . $this->return_creative('J5_WOLF_PUP_RAND', CRNRSTN_HTML) . '</td></tr></table>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>

                </td></tr>
            </table>

        </td>
    </tr>
    <tr>

        <td><div style="font-size:14px; line-height: 16px;">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br></div></td>
    </tr>
</table>
</body>
</html>';

                break;
                case 'EXCEPTION_NOTIFICATION':

                    $tmp_body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    ' . $this->return_creative('CRNRSTN_ICO', CRNRSTN_HTML) . '
    <title>CRNRSTN ::</title>
</head>

<body style="background-color: #FFF; width:100%; text-align: center; margin:0px auto;">
<table cellpadding="0" cellspacing="0" border="0" width="810" style="width:810px; text-align: center; margin:0px auto;">
    <tr>
        <td><div style="line-height:13px; font-size:12px;">&nbsp;<br>&nbsp;</div></td>
    </tr>
    <tr>
        <td>

            <table cellpadding="0" cellspacing="0" border="0" width="800" style="width:800px; background-color: #FFF; text-align: center; margin:0px auto;">
                <tr><td style="text-align: left;"><div style="border-top: 10px solid #FFF;border-left: 15px solid #FFF;border-bottom: 10px solid #FFF;">{SYSTEM_LOG_INTEGER_CONSTANT}</div></td></tr>
                <tr><td>

                    <table cellpadding="0" cellspacing="0" border="0" width="800" style="width:800px; border:2px solid #D2D2D2;">
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td style="width:180px;"><div style="border-top: 10px solid #FFF;border-left: 10px solid #FFF;">' . $this->return_creative('CRNRSTN_LOGO', CRNRSTN_HTML) . '</div></td>
                                                    <td valign="top" align="right" style="text-align:right;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="610" style="border-bottom:10px solid #FFF; border-right: 10px solid #FFF; text-align: right;">
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                <div style="border-top:15px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-align:right;font-weight: bold;">C<span style="font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#F90000;">R</span>NRSTN :: Exception Notification</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px;text-align:right; font-weight: bold;">Sending IP Address<br><div style="font-weight: normal; border-top: 4px solid #FFF;">' . $_SERVER['REMOTE_ADDR'] . ' (<a href="http://' . $_SERVER['SERVER_NAME'] . '" target="_blank" style="text-decoration: none; color:#06C; text-decoration: underline;">' . $_SERVER['SERVER_NAME'] . '</a>)</div></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:right; font-weight: bold;">System Timestamp / Process Runtime<br><div style="font-weight: normal; border-top: 4px solid #FFF;">{SYSTEM_TIME} / {PROCESS_RUN_TIME} seconds</div></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border:2px solid #F90000;" valign="top">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td align="left" style="text-align: left;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:19px; border-top:10px solid #FFF; border-bottom:10px solid #FFF; border-left:15px solid #FFF; border-right:15px solid #FFF; line-height:30px;">
                                                        {MESSAGE}

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-bottom: 3px solid #A7C2E6; width:100%;"><br></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; border-top:10px solid #FFF;"><strong>Class::Method (or file):</strong></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">{METHOD}</div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; border-top:10px solid #FFF;"><strong>Line Number:</strong></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">{LINE_NUM}</div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; border-top:10px solid #FFF;"><strong>PHP Native Trace:</strong></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">{PHP_TRACE}</div>

                                                    </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border-left:5px solid #FFF; border-right:5px solid #FFF;">

                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td align="left" style="text-align: left;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:15px; border-top:10px solid #FFF; border-bottom:10px solid #FFF; border-left:12px solid #FFF; border-right:10px solid #FFF; line-height:18px;">
                                                            &nbsp;<br>
                                                            <span style="color: #F90000; font-weight: bold;">LOG TRACE</span><br><br>
                                                            <div style="font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:22px;">
                                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            {LOG_TRACE}
                                                            </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><span style="font-size: 5px; line-height: 8px;">&nbsp;</span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; border-top:2px solid #D2D2D2; border-bottom:2px solid #D2D2D2;">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td align="center"><div style="font-family:Arial, Helvetica, sans-serif; color:#333; font-size:12px; text-align:center; margin:0px auto; line-height: 18px; border-top:10px solid #FFF; border-bottom:10px solid #FFF;">&copy; 2012-' . date('Y') . ' Jonathan J5 Harris,<br><em>All Rights Reserved in accordance with the most recent version of the MIT License.</em></div></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td valign="top" align="left" style="text-align: left; width: 633px;">

                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td style="text-align: left; border-left:20px solid #FFF; border-right:8px solid #FFF;  border-top:30px solid #FFF;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal; line-height: 20px;">Please note that this information may
                                                            not have been saved anywhere. For this reason, it
                                                            may be good to maintain a copy of this email.</div>

                                                        <div style="font-size:14px; line-height: 16px;">&nbsp;<br>&nbsp;<br></div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal; line-height: 20px;">This email was sent to {EMAIL}.<br>
                                                            If you wish to unsubscribe from future
                                                            system notifications, please contact the
                                                            website administrator.</div>

                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td align="right" style="text-align:right; border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal;">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr><td style="text-align: right;">' . $this->return_creative('J5_WOLF_PUP_RAND', CRNRSTN_HTML) . '</td></tr></table>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>

                </td></tr>
            </table>

        </td>
    </tr>
    <tr>

        <td><div style="font-size:14px; line-height: 16px;">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br></div></td>
    </tr>
</table>
</body>
</html>';

                break;
                case 'EXCEPTION_NOTIFICATION::SOAP_TUNNEL':

                    $tmp_body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    ' . $this->return_creative('CRNRSTN_ICO', CRNRSTN_SOAP_TUNNEL) . '
    <title>CRNRSTN ::</title>
</head>

<body style="background-color: #FFF; width:100%; text-align: center; margin:0px auto;">
<table cellpadding="0" cellspacing="0" border="0" width="810" style="width:810px; text-align: center; margin:0px auto;">
    <tr>
        <td><div style="line-height:13px; font-size:12px;">&nbsp;<br>&nbsp;</div></td>
    </tr>
    <tr>
        <td>

            <table cellpadding="0" cellspacing="0" border="0" width="800" style="width:800px; background-color: #FFF; text-align: center; margin:0px auto;">
                <tr><td style="text-align: left;"><div style="border-top: 10px solid #FFF;border-left: 15px solid #FFF;border-bottom: 10px solid #FFF;">{SYSTEM_LOG_INTEGER_CONSTANT}</div></td></tr>
                <tr><td>

                    <table cellpadding="0" cellspacing="0" border="0" width="800" style="width:800px; border:2px solid #D2D2D2;">
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td style="width:180px;"><div style="border-top: 10px solid #FFF;border-left: 10px solid #FFF;">' . $this->return_creative('CRNRSTN_LOGO', CRNRSTN_SOAP_TUNNEL) . '</div></td>
                                                    <td valign="top" align="right" style="text-align:right;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="610" style="border-bottom:10px solid #FFF; border-right: 10px solid #FFF; text-align: right;">
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                <div style="border-top:15px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-align:right;font-weight: bold;">C<span style="font-family:Arial, Helvetica, sans-serif; font-size:25px; color:#F90000;">R</span>NRSTN :: Exception Notification</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px;text-align:right; font-weight: bold;">Sending IP Address<br><div style="font-weight: normal; border-top: 4px solid #FFF;">' . $_SERVER['REMOTE_ADDR'] . ' (<a href="http://' . $_SERVER['SERVER_NAME'] . '" target="_blank" style="text-decoration: none; color:#06C; text-decoration: underline;">' . $_SERVER['SERVER_NAME'] . '</a>)</div></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="text-align: right;">
                                                                    <div style="border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:right; font-weight: bold;">System Timestamp / Process Runtime<br><div style="font-weight: normal; border-top: 4px solid #FFF;">{SYSTEM_TIME} / {PROCESS_RUN_TIME} seconds</div></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border:2px solid #F90000;" valign="top">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td align="left" style="text-align: left;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:19px; border-top:10px solid #FFF; border-bottom:10px solid #FFF; border-left:15px solid #FFF; border-right:15px solid #FFF; line-height:30px;">
                                                        {MESSAGE}

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-bottom: 3px solid #A7C2E6; width:100%;"><br></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; border-top:10px solid #FFF;"><strong>Class::Method (or file):</strong></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">{METHOD}</div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; border-top:10px solid #FFF;"><strong>Line Number:</strong></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">{LINE_NUM}</div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px; border-top:10px solid #FFF;"><strong>PHP Native Trace:</strong></div>
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">{PHP_TRACE}</div>

                                                    </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border-left:5px solid #FFF; border-right:5px solid #FFF;">

                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td align="left" style="text-align: left;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:15px; border-top:10px solid #FFF; border-bottom:10px solid #FFF; border-left:12px solid #FFF; border-right:10px solid #FFF; line-height:18px;">
                                                            &nbsp;<br>
                                                            <span style="color: #F90000; font-weight: bold;">LOG TRACE</span><br><br>
                                                            <div style="font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:22px;">
                                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            {LOG_TRACE}
                                                            </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><span style="font-size: 5px; line-height: 8px;">&nbsp;</span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; border-top:2px solid #D2D2D2; border-bottom:2px solid #D2D2D2;">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td align="center"><div style="font-family:Arial, Helvetica, sans-serif; color:#333; font-size:12px; text-align:center; margin:0px auto; line-height: 18px; border-top:10px solid #FFF; border-bottom:10px solid #FFF;">&copy; 2012-' . date('Y') . ' Jonathan J5 Harris,<br><em>All Rights Reserved in accordance with the most recent version of the MIT License.</em></div></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td valign="top" align="left" style="text-align: left; width: 633px;">

                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr>
                                                    <td style="text-align: left; border-left:20px solid #FFF; border-right:8px solid #FFF; border-top:30px solid #FFF;">
                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal; line-height: 20px;">Please note that this information may
                                                            not have been saved anywhere. For this reason, it
                                                            may be good to maintain a copy of this email.</div>

                                                        <div style="font-size:14px; line-height: 16px;">&nbsp;<br>&nbsp;<br></div>

                                                        <div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal; line-height: 20px;">This email was sent to {EMAIL}.<br>
                                                            If you wish to unsubscribe from future
                                                            system notifications, please contact the
                                                            website administrator.</div>

                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td align="right" style="text-align:right; border-top:10px solid #FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: normal;">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tr><td style="text-align: right;">' . $this->return_creative('J5_WOLF_PUP_RAND', CRNRSTN_SOAP_TUNNEL) . '</td></tr></table>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>

                </td></tr>
            </table>

        </td>
    </tr>
    <tr>

        <td><div style="font-size:14px; line-height: 16px;">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br></div></td>
    </tr>
</table>
</body>
</html>';
                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unknown HTML message body, "' . $msgType . '", requested.');

                break;

            }

            return $tmp_body;

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
             * Sunday, June 30, 2024 @ 1612 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

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
    function return_CRNRSTN_SysMsgTEXTBody($msgType)
    {

        try{

            switch($msgType){
                case 'ELECTRUM_PERFORMANCE_REPORT':

                    $tmp_body = '{SYS_MESSAGE_TITLE_TEXT}
= = = = = = = = = = = = = = = = = = = = = = = = =
{SYS_LOG_INTEGER_CONSTANT}

SYSTEM MESSAGE ::
{SYS_MESSAGE_TEXT}

= = = = = = = = = = = = = = = = = = = = = = = = =
Sending IP Address ::
{SYS_REMOTE_ADDR} ({SYS_SERVER_NAME})

System Timestamp ::
{SYS_SYSTEM_TIME}

Process Runtime ::
{PROCESS_RUN_TIME} seconds

= = = = = = = = = = = = = = = = = = = = = = = = =
Electrum - Performance Overview
Start Time :: {START_TIME}
End Time :: {END_TIME}
Total Run Time :: {PRETTY_RUN_TIME}
Count of assets valid for transfer :: {TOTAL_COUNT_VALID_FOR_TRANSFER}
Count of assets excluded :: {TOTAL_COUNT_FILES_SKIPPED}
Number of endpoints for asset reception :: {TOTAL_COUNT_DESTINATION_ENDPOINTS}
Total count of asset transfer movements :: {TOTAL_COUNT_FILES_TRANSFERRED}
Total volume of data transferred :: {TOTAL_FILESIZE_FILES_TRANSFERRED}
Avg vol sent to each destination :: {ENDPOINT_FILESIZE_FILES_TRANSFERRED}
Number of asset transfer errors experienced :: {TOTAL_ERRORS_FILES_TRANSFERRED}
Number of endpoint connection errors experienced :: {TOTAL_COUNT_ENDPOINT_CONNECTION_ERROR}
Percentage of assets successfully transferred :: {PERCENTAGE_FILES_SUCCESSFUL_TRANSFERRED}

= = = = = = = = = = = = = = = = = = = = = = = = =
Data Sources
{ELECTRUM_DATA_SOURCE_TEXT}

= = = = = = = = = = = = = = = = = = = = = = = = =
Electrum - Data Source Exclusions
{ELECTRUM_DATA_HANDLING_PROFILE_TEXT}

= = = = = = = = = = = = = = = = = = = = = = = = =
Data Destinations
{ELECTRUM_DATA_DESTINATION_TEXT}

{ELECTRUM_ERRORS_TRACE_TEXT}
= = = = = = = = = = = = = = = = = = = = = = = = =
(c) 2012-' . date('Y') . ' Jonathan J5 Harris,
All Rights Reserved in accordance with the most
recent version of the MIT License.

= = = = = = = = = = = = = = = = = = = = = = = = =
Please note that this information may
not have been saved anywhere. For this reason, it
may be good to maintain a copy of this email.


This email was sent to {EMAIL}.
If you wish to unsubscribe from future
system notifications, please contact the
website administrator.
';

                break;
                case 'EXCEPTION_NOTIFICATION':

                    $tmp_body = 'CRNRSTN :: Exception Notification
= = = = = = = = = = = = = = = = = = = = = = = = =
{SYSTEM_LOG_INTEGER_CONSTANT}

SYSTEM MESSAGE  ::
{MESSAGE}

LINE NUMBER ::
{LINE_NUM}

CLASS::METHOD (or file) ::
{METHOD}

PHP NATIVE TRACE ::
{PHP_TRACE}
= = = = = = = = = = = = = = = = = = = = = = = = =
Sending IP Address ::
' . $_SERVER['REMOTE_ADDR'] . ' (' . $_SERVER['SERVER_NAME'] . ')

System Timestamp ::
{SYSTEM_TIME}

Process Runtime ::
{PROCESS_RUN_TIME} seconds

= = = = = = = = = = = = = = = = = = = = = = = = =
(c) 2012-' . date('Y') . ' Jonathan J5 Harris,
All Rights Reserved in accordance with the most
recent version of the MIT License.

= = = = = = = = = = = = = = = = = = = = = = = = =
Please note that this information may
not have been saved anywhere. For this reason, it
may be good to maintain a copy of this email.


This email was sent to {EMAIL}.
If you wish to unsubscribe from future
system notifications, please contact the
website administrator.

= = = = = = = = = = = = = = = = = = = = = = = = =
LOG TRACE

{LOG_TRACE}

';


                break;
                case 'EXCEPTION_NOTIFICATION::SOAP_TUNNEL':

                    $tmp_body = 'CRNRSTN :: Exception Notification
= = = = = = = = = = = = = = = = = = = = = = = = =
{SYSTEM_LOG_INTEGER_CONSTANT}

SYSTEM MESSAGE  ::
{MESSAGE}

LINE NUMBER ::
{LINE_NUM}

CLASS::METHOD (or file) ::
{METHOD}

PHP NATIVE TRACE ::
{PHP_TRACE}
= = = = = = = = = = = = = = = = = = = = = = = = =
Sending IP Address ::
' . $_SERVER['REMOTE_ADDR'] . ' (' . $_SERVER['SERVER_NAME'] . ')

System Timestamp ::
{SYSTEM_TIME}

Process Runtime ::
{PROCESS_RUN_TIME} seconds

= = = = = = = = = = = = = = = = = = = = = = = = =
(c) 2012-' . date('Y') . ' Jonathan J5 Harris,
All Rights Reserved in accordance with the most
recent version of the MIT License.

= = = = = = = = = = = = = = = = = = = = = = = = =
Please note that this information may
not have been saved anywhere. For this reason, it
may be good to maintain a copy of this email.


This email was sent to {EMAIL}.
If you wish to unsubscribe from future
system notifications, please contact the
website administrator.

= = = = = = = = = = = = = = = = = = = = = = = = =
LOG TRACE

{LOG_TRACE}

';
                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Unknown TEXT message body, "' . $msgType . '", requested.');

                break;

            }

            return $tmp_body;

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
             * Sunday, June 30, 2024 @ 1612 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

    }

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
     * @access private
     *
     */
    private function catch_exception(
                     $exception_obj, 
                     $syslog_level = LOG_DEBUG, 
                     $method = NULL, 
                     $namespace = NULL, 
                     $profile_override_pipe = NULL, 
                     $endpoint_override_pipe = NULL, 
                     $wcr_override_pipe = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Changed crnrstn_messenger_from_north->catch_exception 
         *       $syslog_constant input parameter 
         *       to $syslog_level. 
         *       5 :: Friday, May 1, 2026 @ 0047 hrs.
         *
         */

        $tmp_err_trace_str = $this->return_PHP_exception_trace_pretty($exception_obj->getTraceAsString());

        if(strlen($tmp_err_trace_str) > 0){

            $this->error_log(
                   'PHP native exception ' . 
                   'output log trace received ::' . 
                   $tmp_err_trace_str, 
                   __LINE__, 
                   __METHOD__, 
                   __FILE__, 
                   CRNRSTN_GABRIEL);

        }

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
        $this->oLogger->catch_exception(
                        $exception_obj, 
                        $syslog_level, 
                        $method, 
                        $namespace, 
                        $profile_override_pipe, 
                        $endpoint_override_pipe, 
                        $wcr_override_pipe, 
                        $this);

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
    private function return_PHP_exception_trace_pretty(
                     $exception_obj_trace_str, 
                     $format = 'ERROR_LOG')
    {

        switch($format){
            case 'HTML':

                $exception_obj_trace_str = $this->proper_replace('\n', '<br>', $exception_obj_trace_str);
                $exception_obj_trace_str = $this->proper_replace('
', '<br>', $exception_obj_trace_str);

            break;
            case 'TEXT':

                $exception_obj_trace_str = $this->proper_replace('\n', '
', $exception_obj_trace_str);

            break;
            default:

                //
                // DO NOTHING :: STRAIGHT UNPROCESSED PHP NATIVE OUT

            break;

        }

        return $exception_obj_trace_str;

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
    private function proper_replace(
                     $pattern, 
                     $replacement, 
                     $original_str)
    {

        $pattern_array[0] = $pattern;
        $replacement_array[0] = $replacement;

        $original_str = str_replace($pattern_array, $replacement_array, $original_str);

        return $original_str;

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