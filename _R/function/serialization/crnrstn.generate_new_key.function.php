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
 * RESOURCE DEFINITION :: _crnrstn_generate_new_key
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Sunday, September 1, 2024 @ 0420 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com
 * TITLE               :: The CRNRSTN :: Lightsaber SOAP
 *                        Services Layer New Key
 *                        Generation Global
 *                        Function Definition
 *                        (source code by Scott, a PHP
 *                        Developer at COMSOL)
 * DESCRIPTION         :: The CRNRSTN :: Lightsaber SOAP
 *                        Services Layer New Key
 *                        Generation Global
 *                        Function Definition
 *                        (source code by Scott, a PHP
 *                        Developer at COMSOL),
 *                        is the strongest function
 *                        Scott could make for users on
 *                        StackOverflow that satisfies
 *                        the criteria of how to
 *                        generate a random, unique,
 *                        alphanumeric string?
 *
 *                        This is an implemented
 *                        version of Erik's answer
 *                        on the same.
 *
 *                        Erik A. Brandstadmoen
 *                        https://stackoverflow.com/a/1846218
 *
 *                        [Begin Erik A. Brandstadmoen]
 *                        1) Generate a random number
 *                           using your favourite
 *                           random-number generator.
 *
 *                        2) Multiply and divide it
 *                           to get a number matching
 *                           the number of characters
 *                           in your code alphabet.
 *
 *                        3) Get the item at that
 *                           index in your
 *                           code alphabet.
 *
 *                        4) Repeat from 1) until
 *                           you have the length
 *                           you want.
 *
 *                          Erik A. Brandstadmoen
 *                          https://stackoverflow.com/users/25338/erik-a-brandstadmoen
#
 *                        [End Erik A. Brandstadmoen]
 *
 *
 *                        _crnrstn_crypto_rand_secure($min, $max),
 *                        works as a drop in
 *                        replacement for rand()
 *                        or mt_rand.
 *
 *                        It uses openssl_random_pseudo_bytes
 *                        to help create a random
 *                        number between $min
 *                        and $max.
 *
 *                        getToken($length) creates
 *                        an alphabet to use within
 *                        the token and then creates
 *                        a string of length $length.
 *
 *                        Source: https://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php#104322
 *
 *
 *                        Scott
 *
 *                        SOURCE  :: https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string
 *                        COMMENT :: https://stackoverflow.com/a/13733588
 *                        AUTHOR  :: https://stackoverflow.com/users/1698153/scott
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */
//
// SOURCE  :: https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string
// COMMENT :: https://stackoverflow.com/a/13733588
// AUTHOR  :: https://stackoverflow.com/users/1698153/scott
//
//
// Scott
//
function _crnrstn_generate_new_key($len = 32, $char_selection = NULL, $system_hashed_return = false, $algorithm = 'sha256', $binary_return = false){
    // This method was copied from
    // the CRNRSTN :: Lightsaber
    // SOAP Services Layer
    // System Registry User.
    //
    //
    // 5
    //
    // Sunday, September 1, 2024 @ 0548 hrs.
    //
    //
    // $char_selection = NULL [or (int) 0]:
    //
    //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
    //                       abcdefghijklmnopqrstuvwxyz
    //                       0123456789
    //
    // $char_selection = '01':
    //
    //       $codeAlphabet = 01
    //
    // $char_selection = (int) -3:
    //
    //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
    //                       abcdefghijklmnopqrstuvwxyz
    //                       0123456789:+=_- )(*$#@!~.
    //
    // $char_selection = (int) -2:
    //
    //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
    //                       abcdefghijklmnopqrstuvwxyz
    //                       0123456789{}[]:+=_- )(*&%$#@!~?.
    //
    // $char_selection = (int) -1:
    //
    //       $codeAlphabet = ABCDEFGHIJKLMNOPQRSTUVWXYZ
    //                       abcdefghijklmnopqrstuvwxyz
    //                       0123456789{}[]:;\"\'|\\+=_- )(*&^%$#@!~
    //                       `?/<>.,   '
    //
    // Note: $char_selection = -1 will use
    //       *all* characters across all
    //       dimensions in the known ASCII
    //       universe for system
    //       key generation.
    //
    //       There are some character
    //       omissions to note, however.
    //
    //       $char_selection = -1 evokes
    //       *all* characters except:
    //          - The sequence \e escape
    //            key (ESC or 0x1B (27)
    //            in ASCII), and
    //
    //          - we're not splitting
    //            hairs choosing between
    //            sequence \n LINEFEED
    //            (LF or 0x0A (10) in ASCII)
    //            and the sequence \r
    //            carriage RETURN (CR or
    //            0x0D (13) in ASCII) as
    //            I just let the PhpStorm
    //            IDE choose how to convey
    //            the ENTER key to
    //            text, and
    //
    //          - also screw both \f form
    //            feed (FF or 0x0C (12) in
    //            ASCII) and \v VERTICAL
    //            TAB (VT or 0x0B (11) in
    //            ASCII) sequences; we do
    //            not use these characters
    //            for system key generation.
    //
    // Note: $char_selection = -3 produces a
    //       little more variation in output
    //       key (over $char_selection = NULL);
    //       it has just a few more characters
    //       added to the set beyond the plain
    //       alpha numeric ones.
    //
    //       -3 is the coolest however, because
    //       these new characters were hand
    //       selected for being the nicest
    //       (imho) to work with as data in the
    //       data handling world.
    //
    // TLDR; $char_selection = -3 produces CSV
    //       safe data. The output has no
    //       quotes, no commas, no semi-
    //       colons...etc., but it has the most
    //       distinct number of characters for
    //       the strongest possible variation
    //       in system key generation output
    //       by the CRNRSTN :: Lightsaber SOAP
    //       Services Layer.
    //
    //
    //       5
    //
    //       Wednesday, December 6, 2023 @ 2102 hrs.
    //
    // See also,
    // https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double
    //
    $token = "";
    $salt_length = $salt_string_length = 64;

    if(!isset($char_selection)){

        $char_selection = 0;

    }

    if(!isset($len)){

        if(is_numeric($salt_length)){

            $len = (int) $salt_length;

        }else{

            $len = (int) $salt_string_length;

        }

    }else{

        if(!is_numeric($len)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * It would certainly appear 
             * that this is not a valid 
             * number for the 
             * requested operation. 
             *
             * We shall run a genuinely 
             * invalid calculation and 
             * use the system error that 
             * is generated to clearly 
             * communicate that the input 
             * datum is an "invalid number". 
             *
             * This may be the only way 
             * that an application which
             * absolutely loves numbers as 
             * much as the CRNRSTN :: 
             * Lightsaber RoCEv2 SOAP 
             * Services Layer (CLR-SSL) 
             * loves numbers would be able 
             * to produce a respectable 
             * error message on this, the 
             * subject matter. 
             * 
             * And the CLR-SSL has really 
             * been loving the numbers 
             * lately, man. We happily pay 
             * the price ($$$) of compute 
             * to acquire an authentic NAN 
             * (not a number), real bad data. 
             *
             * We buy a properly shit value 
             * that can be consistently 
             * and reliably returned with 
             * confidence by the CLR-SSL. 
             *
             * And all this...even in the 
             * midst of "these economic 
             * times", at that! 
             *
             * CRNRSTN :: <3's... 
             * ...(int) CRNRSTN_INTEGER 4 LIFE! 
             *
             *
             * 5 :: Monday, December 4, 2023 @ 1117 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0151 hrs.
             *
             * See, https://www.php.net/manual/en/function.is-nan.php
             *
             */
            $tmp_int = sqrt(-1);

            if(is_numeric($salt_length)){

                $tmp_len = (int) $salt_length;

            }else{

                $tmp_len = (int) $salt_string_length;

            }

            error_log('[lnum ' . __LINE__ .
            '] [funct ' . __FUNCTION__ .
            '] An invalid length, (' . gettype($len) . ') ' .
            strval($tmp_int) .
            ', was provided for system key generation. ' .
            'A default value from system settings, ' .
            '(' . gettype($tmp_len) . ') ' . strval($tmp_len) .
            ', has manually been applied.');

            $len = (int) $tmp_len;

        }else{

            $len = (int) $len;

        }

    }

    switch($char_selection){
        case 0:

            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet .= "0123456789";

        break;
        case -3:

            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet .= "0123456789";
            $codeAlphabet .= ":+=_- )(*$#@!~.";

        break;
        case -2:

            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet .= "0123456789";
            $codeAlphabet .= "{}[]:;+=_- )(*&%$#@!~.?,";

        break;
        case -1:

            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet .= "0123456789";
            $codeAlphabet .= "{}[]:;\"\'|\\+=_- )(*&^%$#@!~
            `?/<>.,   '";

        break;
        default:
            //NULL

            $codeAlphabet = strval($char_selection);

        break;

    }

    //
    // Edited from source.
    //
    // See, https://stackoverflow.com/a/13733588.
    $max = strlen($codeAlphabet);

    if(function_exists(__NAMESPACE__ . '\random_int')){

        for($i = 0; $i < $len; $i++){

            $token .= $codeAlphabet[random_int(0, $max - 1)];

        }

    }else{

        for($i = 0; $i < $len; $i++){

            $token .= $codeAlphabet[_crnrstn_crypto_rand_secure(0, $max - 1)];

        }

    }

    if($system_hashed_return !== false){

        return _crnrstn_hash($token, $algorithm, $binary_return);

    }

    return $token;

}