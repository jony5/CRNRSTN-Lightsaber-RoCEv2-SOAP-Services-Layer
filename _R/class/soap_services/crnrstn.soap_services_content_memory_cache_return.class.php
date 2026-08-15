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
 * CLASS DEFINITION :: crnrstn_soap_services_content_memory_cache_return
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, August 26, 2024 @ 0142 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     System Content Memory
 *                     Cache Output Control SOAP
 *                     Services Layer of
 *                     CRNRSTN :: Lightsaber.
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber
 *                     System Content Memory
 *                     Cache Output Control SOAP
 *                     Services Layer receives
 *                     requests for multi-part
 *                     (HTML and text) and
 *                     multi-language system
 *                     data which includes:
 *                      - CRNRSTN :: Lightsaber
 *                        SOAP Services Layer
 *                        method documentation
 *                        pages for developers,
 *                      - native registered
 *                        CRNRSTN :: Lightsaber
 *                        System Registry
 *                        resource titles,
 *                        content descriptions,
 *                        author, and licensing
 *                        meta data,
 *                      - CRNRSTN :: Lightsaber
 *                        System Links with their
 *                        titles and descriptions, and
 *                      - CRNRSTN :: Lightsaber
 *                        System Integer Constant
 *                        Meta data which
 *                        includes all JS and
 *                        CSS framework titles
 *                        description meta data.
 *
 *
 *                     For all system cache content
 *                     requests supporting any
 *                     request for system words
 *                     and utterances, both the
 *                     protocol and format of the
 *                     responses that are generated
 *                     will be shepherded by the
 *                     CRNRSTN :: Lightsaber
 *                     System Content Memory Cache
 *                     Output Control SOAP
 *                     Services Layer.
 *
 *
 *                     5
 *
 *                     Monday, August 26, 2024 @ 0244 hrs.
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
class crnrstn_soap_services_content_memory_cache_return {

    public $oCRNRSTN;

	public function __construct($oCRNRSTN, $wsdl_uri, $cache_ttl=NULL, $useCURL=NULL){

	    $this->oCRNRSTN = $oCRNRSTN;
        $cache_ttl_default = $this->oCRNRSTN->cache_ttl_default;
        $useCURL_default = $this->oCRNRSTN->useCURL_default;

        $this->WSDL_uri = $wsdl_uri;

        if(!isset($cache_ttl)){

            $this->cache_TTL = $cache_ttl_default;

        }else{

            if($cache_ttl==''){

                $this->cache_TTL = $cache_ttl_default;

            }else{

                $this->cache_TTL = $cache_ttl;
            }
        }

        if(!isset($useCURL)){

            $this->use_CURL = $useCURL_default;

        }else{

            if($useCURL==''){

                $this->use_CURL = $useCURL_default;

            }else{

                $this->use_CURL = $useCURL;
            }

        }

        error_log(__LINE__ .' soap client $this->cache_TTL=[' . $this->cache_TTL.'] $this->WSDL_uri=' . $this->WSDL_uri);

        //
        // INITIALIZE CLIENT WITH WSDL
        if($this->WSDL_uri != $this->oCRNRSTN->current_location()){	// AVOID INFINITE LOOP WHERE WEB SERVICE STANDS ON CRNRSTN

		    try{

                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the NuSOAP - Web Services
                // PHP Toolkit WSDL Cache
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2215 hrs.
                //
                // $this->cache = new wsdlcache('.', $this->cache_TTL);
                $this->cache = $this->oCRNRSTN->return_registered_resource('new', 'wsdlcache', '.', $this->cache_TTL);

                $this->wsdl = $this->cache->get($this->WSDL_uri);
				if(is_null($this->wsdl)){

                    //
                    // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                    // Return an instantiation of
                    // the NuSOAP - Web Services
                    // Toolkit SOAP WSDL
                    // class object.
                    //
                    //
                    // 5 :: Monday, July 15, 2024 @ 2217 hrs.
                    //
                    // $this->wsdl = new wsdl($this->WSDL_uri);
                    $this->wsdl = $this->oCRNRSTN->return_registered_resource('new', 'wsdl', $this->WSDL_uri);

                    $this->err = $this->wsdl->getError();
					if($this->err){

                        error_log(__LINE__ .' soap client OOPS [' . $this->err.'] $this->WSDL_uri=' . $this->WSDL_uri);

						/**
                         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
						throw new Exception('WSDL Constructor Error :: ' . $this->err.' :: WSDL :: ' . $this->WSDL_uri);

					}

                    $this->cache->put($this->wsdl);
					
				}else{

                    $this->wsdl->clearDebug();
                    $this->wsdl->debug('Retrieved from cache');

				}

                error_log(__LINE__ .' soap client new nusoap_client next $this->WSDL_uri=' . $this->WSDL_uri);

				/*
                @param    string $username
                @param    string $password
                @param	  string $authtype (basic|digest|certificate|ntlm)
                @param	  array $certRequest (keys must be cainfofile (optional), sslcertfile, sslkeyfile, passphrase, verifypeer (optional), verifyhost (optional): see corresponding options in cURL docs)
                @access   public

                function setCredentials($username, $password, $authtype = 'basic', $certRequest = array()){
                ...

                */

				//
				// INSTANTIATE A SOAP CLIENT CLASS OBJECT.
                # nusoap_client ::  __construct($endpoint, $wsdl = false, $proxyhost = false, $proxyport = false, $proxyusername = false, $proxypassword = false, $timeout = 0, $response_timeout = 30, $portName = ''){
                //
                // # C # R # N # R # S # T # N # :: # L # I # G # H # T
                // Return an instantiation of
                // the NuSOAP - Web Services
                // Toolkit SOAP Client
                // class object.
                //
                //
                // 5 :: Monday, July 15, 2024 @ 2218 hrs.
                //
                // $this->client = new nusoap_client($this->wsdl, true);
                $this->client = $this->oCRNRSTN->return_registered_resource('new', 'nusoap_client', $this->wsdl, true);

                //error_log(__LINE__ .' soap client new nusoap_client die() '.gettype($this->client));
                //die();
                $this->err = $this->client->getError();
				if($this->err){

					/**
                     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
					throw new Exception('SOAP Client Constructor Error :: ' . $this->err);

				}

                $this->client->setUseCurl($this->use_CURL);
				
			}catch (Exception $e){

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
                 * Sunday, June 30, 2024 @ 1617 hrs.
                 * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
                 *
                 */
                $this->oCRNRSTN->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);
				
				return false;

			}

		}

	}
	
	//
	// SEND SOAP REQUEST TO WEB SERVICE
	public function sendRequest_SOAP($methodName, $params){
		
		//
		// SEND SOAP REQUEST
		try{

			$this->result = $this->client->call($methodName, $params);
			
			//
			// CHECK FOR A FAULT
			if($this->client->fault){

                //error_log(__LINE__ . ' soap client request client fault.');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
				throw new Exception('SOAP Client returnContent() Fault :: ' . $this->result);
				
			}else{
				
				//
				// CHECK FOR ERRORS
				$this->err = $this->client->getError();
				
				if($this->err){

                    //error_log(__LINE__ . ' soap client request $this->err=' . $this->err);

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
					throw new Exception('SOAP Client returnContent() Error :: ' . $this->err);
					
				}else{

                    //error_log(__LINE__ . ' soap client request $this->result=' . print_r($this->result, true));

                    //
					// RETURN RESULT
					return $this->result;

				}

			}
			
		}catch(Exception $e){

            //self::$oCRNRSTN_USR->error_log($this->returnClientRequest(), __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);
            //self::$oCRNRSTN_USR->error_log($this->returnClientResponse(), __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);
            //self::$oCRNRSTN_USR->error_log($this->returnClientGetDebug(), __LINE__, __METHOD__, __FILE__, CRNRSTN_ELECTRUM);
            //error_log(__LINE__ . ' soap client request $this->result=' . $this->returnClientResponse());

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
             * Sunday, June 30, 2024 @ 1617 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN->catch_exception(
                             $e, 
                             LOG_ERR, 
                             __METHOD__, 
                             __NAMESPACE__);

		}

		/*
        $this->contentOutput_ARRAY[3] = $this->returnClientRequest();   #SOAP Request Details(Content) ::
        $this->contentOutput_ARRAY[5] = $this->returnClientResponse();  #SOAP Response Details(Content) ::
        $this->contentOutput_ARRAY[7] = $this->returnClientGetDebug();  #SOAP Debug(Content) ::

        //
        // CHECK FOR A FAULT
        //if($client->fault){
        if($oUSER->returnSoapFault()){

            echo '<h2 class="the_R">SOAP Fault ::</h2>';
            echo '<div class="content_results_subtitle_divider"></div><p><pre style="font-size:10px;border-bottom:2px solid #F90000;padding-bottom:10px;">';
            print_r($result);
            echo '</pre></p>';

        }else{

            //
            // CHECK FOR ERRORS
            //$err = $client->getError();
            $err = $oUSER->returnSoapError();

            if($err){

                //
                // DISPLAY THE ERROR
                echo '<h2 class="the_R">SOAP Error</h2><pre style="border-bottom:2px solid #F90000;padding-bottom:10px;">' . $err . '</pre>';

            }else{

                //
                // DISPLAY THE RESULT (CONTENT)
                echo '<div class="cb_15"></div><h3 class="content_results_subtitle">Web Services Result ::</h3>';
                echo '<div class="content_results_subtitle_divider"></div><p><pre style="height:100px;font-size:10px;overflow:scroll;border-bottom:2px solid #333;padding-bottom:10px;">';
                #print_r($oUSER->returnSoapResult());
                print_r($oUSER->contentOutput_ARRAY[1]);
                //print_r($result);
                echo '</pre></p>';

            }

        }

        echo '<div class="cb_15"></div><h3 class="content_results_subtitle">SOAP Request Details ::</h3>';
        echo '<p><pre style="font-size:10px;overflow:scroll;border-bottom:2px solid #333;padding-bottom:10px;height:100px;">' . htmlspecialchars($oUSER->contentOutput_ARRAY[3], ENT_QUOTES).'</pre></p>';

        echo '<h3 class="content_results_subtitle">SOAP Response Details ::</h3>';
        echo '<p><pre style="font-size:10px;overflow:scroll;border-bottom:2px solid #333;padding-bottom:10px;height:100px;">' . htmlspecialchars($oUSER->contentOutput_ARRAY[5], ENT_QUOTES).'</pre></p>';

        echo '<h3 class="content_results_subtitle">SOAP Debug ::</h3>';
        echo '<p><pre style="font-size:10px;height:300px;overflow:scroll;border-bottom:2px solid #333;padding-bottom:10px;height:100px;">' . htmlspecialchars($oUSER->contentOutput_ARRAY[7], ENT_QUOTES).'</pre></p>';

	    */

		return $this->result;

	}

	public function returnError(){

		return $this->client->getError();

	}
	
	public function returnResult(){

		return $this->result;

	}
	
	public function returnClientRequest(){

		return $this->client->request;

	}
	
	public function returnClientResponse(){

		return $this->client->response;

	}
	
	public function returnClientGetDebug(){

		return $this->client->getDebug();

	}

	public function isset_soap_client(){

	    if(isset($this->client)){

	        if(is_object($this->client)){

                return true;

            }else{

                return false;

            }

        }else{

	        return false;

        }

    }
	
	public function __destruct(){

	}
}