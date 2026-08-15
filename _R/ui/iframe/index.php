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
 * CLASS DEFINITION :: /_R/ui/iframe/index.php
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Thursday, February 12, 2026 @ 2332 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer
 *                     (CLR-SSL) Vanilla Install 
 *                     Iframe Endpoint.
 * DESCRIPTION      :: The Iframe Endpoint for a 
 *                     CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Vanilla Install
 *                     Iframe Endpoint. This will 
 *                     test, verify, and 
 *                     demonstrate a clean and 
 *                     fully functional 
 *                     implementation of the 
 *                     CLR-SSL. 
 *                       
 *
 *                     5
 *
 *                     Thursday, February 12, 2026 @ 2332 hrs.
 *                     Last Modifed: Thursday, February 12, 2026 @ 2336 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 */

/*
    <!--
    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    JavaScriptBit
    Send data between parent window and child iframe - PostMessage API
    March 15, 2022
    https://javascriptbit.com/transfer-data-between-parent-window-and-iframe-postmessage-api/

    Parent
    <div id="app">
      <input id="message" type="text" />
      <button id="sendMessage">Send Message</button>
    </div>
    <script>
      var button = document.querySelector("#sendMessage");

      function sendMessage() {
        const message = document.querySelector("#message").value;
        const iframe = document.querySelector("iframe");
        iframe.contentWindow.postMessage(message, "*");
      }

      button.addEventListener("click", sendMessage);
    </script>

    <iframe src="page2.html"></iframe>


    Iframe (page2.html)
    <script>
      window.addEventListener('message', function(event) {
        console.log("Message received from the parent: " + event.data); // Message received from parent
      });
    </script>

    <!--
    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    JavaScriptBit
    Send data between parent window and child iframe - PostMessage API
    March 15, 2022
    https://javascriptbit.com/transfer-data-between-parent-window-and-iframe-postmessage-api/

    Parent
    <script>
      window.addEventListener('message', function(event) {
        
        //
        // Message received from child
        console.log("Message received 
        from the child: " + event.data); 
        
      });
    </script>

    Child iframe code - page2.html
    <input type="text" id="messageText" />
    <button id="sendMessage">Send Message to Parent</button>
    <script>
      var button = document.querySelector("#sendMessage");
      button.addEventListener("click", function () {

        var message = document.querySelector("#messageText").value;

        // 
        // Send `message` to the parent 
        // using the postMessage method 
        // on the window.parent reference.
        window.parent.postMessage(message, "*");

      });
    </script>

      -->

 */

$tmp_root = '../../../';
?><!DOCTYPE html>
<html lang="en">
<head><?php /* TODO :: Replace h */  ?>
    <meta http-equiv="Content-Type" content="text/html" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="distribution" content="global" />
    <meta name="robots" content="index,follow" />
    <title>CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer. The CLR-SSL.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $tmp_root; ?>favicon.ico" />
    <meta name="hostname" content="<?php echo $_SERVER['SERVER_NAME']; ?>" />
    <meta name="expected-hostname" content="<?php echo $_SERVER['SERVER_NAME']; ?>" />
    
    <!-- BEGIN CRNRSTN :: v2.00.0000 PRE-ALPHA-DEV (Lightsaber) :: CSS MODULE OUTPUT :: 2026-02-13 00:52:05.960199 -->    
    <link type="text/css" rel="stylesheet" href="<?php echo $tmp_root; ?>_R/ui/css/crnrstn.main_desktop.css?crnrstn_=420.00.45823.1674628724.0">
    <!-- END CRNRSTN :: v2.00.0000 PRE-ALPHA-DEV (Lightsaber) :: JS + CSS MODULE OUTPUT -->

    <!-- jQuery v4.0.0 -->
    <script type="application/json" src="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/jquery/4.0.0/jquery-4.0.0.min.map?crnrstn_=420.00.138173.1669324674.0"></script>
    <!-- jQuery v4.0.0 -->
    <script type="text/javascript" src="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/jquery/4.0.0/jquery-4.0.0.min.js?crnrstn_=420.00.89664.1668945899.0"></script>

    <!-- Lightbox v2.12.0  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/lightbox.js/2.12.0/dist/css/lightbox.min.css?crnrstn_=420.00.2532.1668508400.0">

    <!-- jQuery UI v1.14.2 -->
    <link type="text/css" rel="stylesheet" href="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/jquery_ui/1.14.2/jquery-ui.theme.min.css?crnrstn_=420.00.13891.1668945900.0">
    <!-- jQuery UI v1.14.2 -->
    <link type="text/css" rel="stylesheet" href="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/jquery_ui/1.14.2/jquery-ui.structure.min.css?crnrstn_=420.00.15560.1668945901.0">
    <!-- jQuery UI v1.14.2 -->
    <link type="text/css" rel="stylesheet" href="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/jquery_ui/1.14.2/jquery-ui.min.css?crnrstn_=420.00.32130.1668945900.0">
    <!-- jQuery UI v1.14.2 -->
    <script type="text/javascript" src="<?php echo $tmp_root; ?>_R/ui/js/_lib/frameworks/jquery_ui/1.14.2/jquery-ui.min.js?crnrstn_=420.00.255084.1668945901.0"></script>

    <script type="text/javascript" src="<?php echo $tmp_root; ?>_R/ui/js/crnrstn.main.js?crnrstn_=420.00.381284.1673832653.0"></script>
    <script>

        function log_activity(message){

          console.log(message);

        }
        
        function init(){

            //var iframe = document.getElementsByTagName('iframe')[0];
            //var iframe = document.getElementById(proxy_iframe_id);
            //var iframeParent = iframe.parentElement;
            //var iframeParent = window.parent.document;
            //const parentDocument = window.parent.document;
            //var div = document.createElement('div');
            //iframeParent.insertBefore(div, iframe);

            //
            // Google AI
            const parentDocument = window.parent.document;
            var application_output = document.getElementById("crnrstn_iframe_content_test").innerHTML;
            var proxy_iframe_id = "crnrstn_dom_proxy_<?php echo $_GET['crnrstn_iframe']; ?>";

            if(parentDocument){

              /* Select an element 
               * with a specific ID 
               * in the parent document.
               *
               * Google AI
               * https://www.google.com/search?q=jquery+get+iframe+parent+document+element&oq=jquery+get+iframe+parent+document+element&aqs=chrome..69i57j33i160l4j33i671l3.23775j0j7&sourceid=chrome&ie=UTF-8
               * 5 :: Monday, March 9, 2026 @ 0343 hrs.
               * var parentElement = $('#elementID_in_parent', window.parent.document);
               *
               */
              if($('#crnrstn_ui_proxy_<?php echo $_GET['crnrstn_iframe']; ?>', parentDocument)){

                const crnrstn_ui_proxy_div = parentDocument.getElementById('crnrstn_ui_proxy_<?php echo $_GET['crnrstn_iframe']; ?>');

                /* <div id="crnrstn_ui_proxy_' . $dom_proxy_id . '">
                 *    <div id="crnrstn_ui_stage"></div>
                 *    <div id="crnrstn_ui_stage_background"></div>
                 *    <div id="crnrstn_ui_overlay"></div>
                 * </div>
                 * 
                 */

                crnrstn_ui_proxy_div.style.backgroundColor = '#F90000';
                crnrstn_ui_proxy_div.style.opacity = 0;
                crnrstn_ui_proxy_div.style.padding = '0';
                //crnrstn_ui_proxy_div.style.width = '100%';
                //crnrstn_ui_proxy_div.style.height = '100%';
                crnrstn_ui_proxy_div.style.position = 'absolute';
                //crnrstn_ui_proxy_div.style.zIndex = 99999;
                crnrstn_ui_proxy_div.innerHTML = application_output;

                //console.log('Begin Animation [<?php echo $_GET['crnrstn_iframe']; ?>]');
                log_activity('Begin Animation [<?php echo $_GET['crnrstn_iframe']; ?>]')
                
                //
                // oCRNRSTN_JS Animation Technology Opacity Test
                // Copied here on Wednesday, March 4, 2026 @ 1522 hrs.
                var self = this;
                crnrstn_ui_proxy_div.animate({
                      opacity: 0.8,
                      backgroundColor: '#FFFFFF',
                      width: '100%',
                      height: '100%'
                  }, {
                      duration: 5000,
                      queue: false,
                      specialEasing: {
                          opacity: "swing"
                      },
                      step: function( now, fx ) {

                        crnrstn_ui_proxy_div.style.backgroundColor = '#F90000';
                        self.log_activity('Animation moving! [<?php echo $_GET['crnrstn_iframe']; ?>]');
                        console.log('Animation is moving! [<?php echo $_GET['crnrstn_iframe']; ?>]');

                      },
                      complete: function () {

                        //crnrstn_ui_proxy_div.style.backgroundColor = '#FFFFFF';
                        crnrstn_ui_proxy_div.style.opacity = 1;
                        crnrstn_ui_proxy_div.style.padding = '0';
                        crnrstn_ui_proxy_div.style.width = '100%';
                        crnrstn_ui_proxy_div.style.height = '100%';
                        crnrstn_ui_proxy_div.style.position = 'absolute';
                        //crnrstn_ui_proxy_div.style.zIndex = 99999;
                        crnrstn_ui_proxy_div.innerHTML = application_output;
                        self.addClass('crnrstn_proxy_crnrstn_window');

                        //console.log('Animation complete! [<?php echo $_GET['crnrstn_iframe']; ?>]');
                        self.log_activity('Animation complete! [<?php echo $_GET['crnrstn_iframe']; ?>]');

                      }

                  });

                /**
                
                width: '100%',
                height: '100%',



                 $('#crnrstn_documentation_dyn_shell_bg').animate({
                      backgroundColor: this.get_theme_attribute('interact.ui.document_bg_overlay_background_color'),
                      top: this.docs_page_css_top + 'px',
                      left: this.docs_page_css_left + 'px',
                      width: $(document).width() + 'px',
                      height: $(document).height() + 'px',
                      opacity: this.get_theme_attribute('interact.ui.document_bg_overlay_background_opacity'),
                      zIndex: this.get_theme_attribute('interact.ui.document_bg_overlay_background_zindex')
                  }, {
                      duration: 1000,
                      queue: false,
                      complete: function () {

                      }

                  });

                 */

              }
            }

            // 
            // Send `message` to the 
            // parent using the postMessage 
            // method on the window.parent 
            // reference.
            //window.parent.postMessage(message, "*");
            //window.parent.('body').prepend(crnrstn_view_state_div);
            //iframeParent.insertBefore(crnrstn_view_state_div);
            //iframeParent.prepend(crnrstn_view_state_div);

            /**

            // 2. Create the new div element with`in the context of the parent document
            const newDivInParent = parentDocument.createElement('div');
        
            // 3. (Optional) Set attributes or content for the new div
            newDivInParent.id = 'crnrstn_view_state_<?php echo $_GET['crnrstn_iframe']; ?>';
            newDivInParent.style.backgroundColor = '#FFFFFF';
            newDivInParent.style.opacity = 0;
            newDivInParent.style.opacity = 0.5;
            newDivInParent.style.padding = '0';
            newDivInParent.style.width = '100%';
            newDivInParent.style.height = '100%';
            newDivInParent.style.position = 'absolute';
            //newDivInParent.style.zIndex = 99999;
            newDivInParent.innerHTML = application_output;
        
            // 4. Append the new div to the parent's body
            parentDocument.body.prepend(newDivInParent);

            newDivInParent.animate({
                  opacity: 0.5
              }, {
                  duration: 1000,
                  queue: false,
                  specialEasing: {
                      opacity: "swing"
                  },
                  complete: function () {

                    crnrstn_ui_proxy_div.class = 'crnrstn_proxy_crnrstn_window';

                  }

              });

             */

        }

    </script>
</head>
<body onload="init();">
	<div id="crnrstn_iframe_content_test" style="font-family: Arial, Helvetica, sans-serif; font-size:15px;">Hello world! Hello Static Iframe.</div>
</body>
</html>