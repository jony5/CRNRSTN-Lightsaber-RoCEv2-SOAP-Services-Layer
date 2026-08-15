/*!
 * Lightbox v2.12.0
 * by Lokesh Dhakar
 *
 * More info:
 * http://lokeshdhakar.com/projects/lightbox2/
 *
 * Copyright Lokesh Dhakar
 * Released under the MIT license
 * https://github.com/lokesh/lightbox2/blob/master/LICENSE
 *
 * @preserve
 */
/**
 * @package CRNRSTN
 * 
 * Lightbox v2.12.0 was downloaded 
 * from Lokesh Dhakar at 
 * https://github.com/lokesh/lightbox2/tree/dev 
 * on Friday, March 6, 2026 @ 0033 hrs, 
 * and return new Lightbox() was changed 
 * to return new oCRNRSTN_JS(), and now R_JS(). 
 *
 * Development on the R_JS class object
 * for the CRNRSTN :: Lightsaber RoCEv2
 * SOAP Services Layer (CLR-SSL) 
 * has now started. 
 *
 *
 * 5 :: Friday, March 6, 2026 @ 0038 hrs.
 * Last Modified: Monday, March 30, 2026 @ 1326 hrs.
 *
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

/**
 * 
 *
 * CLASS DEFINITION :: R_JS
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: Thursday, July 1, 2021 @ 0352 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: CRNRSTN :: Lightsaber RoCEv2 
 *                     SOAP Services Layer (CLR-SSL) 
 *                     Main Javascript Support
 * DESCRIPTION      :: The main JS script file for 
 *                     the CRNRSTN :: Lightsaber RoCEv2 
 *                     SOAP Services Layer (CLR-SSL) 
 *                     is responsible for tracking on 
 *                     when the DOM is ready for CLR-SSL
 *                     integrations and then starting 
 *                     all required processes such as 
 *                     instantiating the client-side 
 *                     R_JS Javascript object for 
 *                     Document Object Model (DOM) 
 *                     Management in the browser. 
 *
 *
 *                     5
 *
 *                     Friday, March 6, 2026 @ 0120 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Refactored oCRNRSTN_JS down to R_JS.
 *       5 :: Monday, March 30, 2026 @ 1323 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 */
/*
We take the current CLR-SSL 
project direction, and where 
possible, we honor the past;
notes taken from CRNRSTN :: 
Lightsaber oCRNRSTN_JS (now R_JS())
v1.00.0000 Client Side Code: 

Receive complete data 
response from server:
    ~ XML
    ~ JSON
    ~ HTML (injection with css)
    ~ HTML (injection with css - wire-frame only)
    ~ SOAP Response (xml)
    ~ Carrier Pigeon (cookie data)

Server driven variable initialization 
and state management - real-time 
management considerations 
impacting UI/UX ::
    ~ New alerts
    ~ New notifications
    ~ Regular measurement for maintenance 
      of target tolerances for ranges 
      of operation
        * Content TTL
        * Session TTL alert to imminent 
          change for forced logout to 
          temporary landing page...
          e.g. before maintenance mode
        * Session TTL (forced logout to 
          temporary landing page...e.g. 
          before maintenance mode)
        * Inactivity timeout default - 
          real-time adjustment application
        * Maximum unsuccessful login 
          attempts adjustment - real-time 
          application
        * Login attempts exceeded timeout 
          adjustment - real-time application
        * Account suspended by admin - 
          real-time application
        * Account deactivated by admin - 
          real-time application
        * Account activated by admin - 
          real-time application
    ~ Account Activity
        * Start out full transparency. 
          (what the system administrator sees).
        * Build in support for account 
          relationship structures with regulated 
          visibility into the same.
            ~ Consider employee vs client in 
              context of extranet and the 
              visibility there. e.g., why 
              would client "a" see activity 
              for client "b" in the system?
        * Living Streams of Communications Messaging 
          Layer where user @mentions throw alerts 
          to users for real-time communications in 
          system. consider data output format for 
          mobile device application reads and 
          writes of CLR-SSL driven mobile device 
          communications where logging into 
          the CLR-SSL will expose to the same
          "mobile app" thread within the running 
          LAMP environment. 
        * We need to put together a EULA for any 
          accounts in the system (EULA interstitial 
          way-point when activating any account) 
          which honors all of the above. 

# C # R # N # R # S # T # N # :: # L # I # G # H # T
End of Notes
CRNRSTN :: Lightsaber oCRNRSTN_JS (now R_JS()) v1.00.0000 

*/
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Uses Node, AMD or 
 * browser globals to 
 * create a module. 
 *
 */
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like environments that support module.exports,
        // like Node.
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals (root is window)
        // root.lightbox = factory(root.jQuery);
        root.R_JS = factory(root.jQuery);
    }
}(this, function ($) {

  function R_JS(options) 
  {
    this.album = [];
    this.currentImageIndex = undefined;
    this._preloader = null;
    this._sizeOverlayProxy = null;
    this.$triggerElement = null;
    this.init();

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * CRNRSTN :: Lightsaber RoCEv2 
     * SOAP Services Layer (CLR-SSL) 
     * Client Logging Output 
     * Configuration 
     * 
     * Options:
     * - 'CONSOLE', 
     * - 'DOM', and 
     * - 'ALERT'.
     *
     */
    this.CRNRSTN_LOGGING_OUTPUT = 'CONSOLE';

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * CRNRSTN JS :: Debug Modes
     *
     */
    this.CRNRSTN_DEBUG_OFF = 0;
    this.CRNRSTN_DEBUG_BASIC = 100;
    this.CRNRSTN_DEBUG_VERBOSE = 200;
    this.CRNRSTN_DEBUG_LIFESTYLE_BANNER = 300;
    this.CRNRSTN_DEBUG_BASSDRIVE = 420;
    this.CRNRSTN_DEBUG_CONTROLS = 500;

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * CRNRSTN :: Lightsaber 
     * RoCEv2 SOAP Services 
     * Layer (CLR-SSL) Client 
     * Defaults and Initialization 
     *
     */
    this.wall_time_seconds = 1;
    this.max_num_iframe_agents = 1;
    this.oSystem_date = 0;
    this.system_date_str = '';
    this.session_salt = '';
    this.R_debug_mode = this.CRNRSTN_DEBUG_OFF;
    this.crnrstn_overlay_mode = 'OFF';
    this.crnrstn_ui_component_state_ARRAY = [];

    this.CRNRSTN_INTERACT_UI_MOUSE = {
        X: 0,
        Y: 0
    };

    this.CRNRSTN_INTERACT_UI_ELEM_AT_MOUSE = [];

    this.client_rtime = '0:00:00';
    this.client_rtime_year = '';
    this.client_rtime_month = '';
    this.client_rtime_week = '';
    this.client_rtime_day = '';
    this.client_rtime_hour = '0';
    this.client_rtime_mins = '0';
    this.client_rtime_secs = '0';
    this.client_rtime_millisecs = '0';
    this.client_rtime_pretty = '';
    this.ttl_tunnel_monitor_seconds = 0;

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Lightbox options.
     *
     */
    this.options = $.extend({}, this.constructor.defaults);
    this.option(options);

  }

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Descriptions of all 
   * options available on 
   * the demo site: 
   * http://lokeshdhakar.com/projects/lightbox2/index.html#options
   *
   */
  R_JS.defaults = {
    albumLabel: 'Image %1 of %2',
    alwaysShowNavOnTouchDevices: false,
    fadeDuration: 600,
    fitImagesInViewport: true,
    imageFadeDuration: 600,
    // maxWidth: 800,
    // maxHeight: 600,
    positionFromTop: 50,
    resizeDuration: 700,
    showImageNumberLabel: true,
    wrapAround: false,
    disableScrolling: false,
    /* Sanitize Title
     * If the caption data is trusted, 
     * for example you are hardcoding 
     * it in, then leave this to false.
     * This will free you to add html 
     * tags, such as links, in 
     * the caption.
     *
     * If the caption data is user 
     * submitted or from some other 
     * untrusted source, then set 
     * this to true to prevent xss 
     * and other injection attacks. 
     *
     */
    sanitizeTitle: false
  };

  R_JS.prototype.option = function(options) 
  {
    $.extend(this.options, options);
  };

  R_JS.prototype.imageCountLabel = function(
                        currentImageNum, 
                        totalImages) 
  {
    return this.options.albumLabel.replace(/%1/g, currentImageNum).replace(/%2/g, totalImages);
  };

  R_JS.prototype.init = function() 
  {
    var self = this;

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Both enable and build 
     * methods require the 
     * body tag to be in 
     * the DOM. 
     *
     */
    $(document).ready(function() {
      self.enable();
      self.build();
      self.crnrstn_init();
    });

  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Loop through anchors and 
   * areamaps looking for either 
   * data-lightbox attributes 
   * or rel attributes that 
   * contain 'lightbox'. 
   *
   * When these are clicked, 
   * start lightbox. 
   *
   */
  R_JS.prototype.enable = function() 
  {
    var self = this;
    $('body').on('click.lightbox', 'a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]', function(event) {
      self.start($(event.currentTarget));
      return false;
    });
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Build html for the 
   * lightbox and the overlay. 
   *
   * Attach event handlers to 
   * the new DOM elements. 
   *
   * click click click
   *
   */
  R_JS.prototype.build = function() 
  {

    if ($('#lightbox').length > 0) {
        return;
    }

    var self = this;

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * The two root notes generated, 
     * #lightboxOverlay and #lightbox 
     * are given tabindex attrs so 
     * they are focusable. We attach 
     * our keyboard event listeners 
     * to these two elements, and 
     * not the document. 
     * 
     * Clicking anywhere while 
     * Lightbox is opened will keep 
     * the focus on or inside one of 
     * these two elements. 
     *
     * We do this so we can prevent 
     * propagation of the Esc keypress 
     * when Lightbox is open. 
     * 
     * This prevents it from 
     * interfering with other 
     * components on the 
     * page below. 
     *
     * Github issue: https://github.com/lokesh/lightbox2/issues/663
     *
     */
    $('<div id="lightboxOverlay" tabindex="-1" class="lightboxOverlay"></div><div id="lightbox" tabindex="-1" class="lightbox" role="dialog" aria-modal="true" aria-label="Image lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" aria-describedby="lb-caption"/><div class="lb-nav"><a class="lb-prev" role="button" tabindex="0" aria-label="Previous image"></a><a class="lb-next" role="button" tabindex="0" aria-label="Next image"></a></div><div class="lb-loader"><a class="lb-cancel" role="button" tabindex="0"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span id="lb-caption" class="lb-caption"></span><span class="lb-number" aria-live="polite"></span></div><div class="lb-closeContainer"><a class="lb-close" role="button" tabindex="0"></a></div></div></div></div>').appendTo($('body'));

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Cache jQuery objects.
     *
     */
    this.$lightbox       = $('#lightbox');
    this.$overlay        = $('#lightboxOverlay');
    this.$outerContainer = this.$lightbox.find('.lb-outerContainer');
    this.$container      = this.$lightbox.find('.lb-container');
    this.$image          = this.$lightbox.find('.lb-image');
    this.$nav            = this.$lightbox.find('.lb-nav');
    this.$prev           = this.$lightbox.find('.lb-prev');
    this.$next           = this.$lightbox.find('.lb-next');
    this.$loader         = this.$lightbox.find('.lb-loader');
    this.$dataContainer  = this.$lightbox.find('.lb-dataContainer');
    this.$caption        = this.$lightbox.find('.lb-caption');
    this.$number         = this.$lightbox.find('.lb-number');
    this.$close          = this.$lightbox.find('.lb-close');

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Store css values 
     * for future lookup. 
     *
     */
    this.containerPadding = {
      top: parseInt(this.$container.css('padding-top'), 10),
      right: parseInt(this.$container.css('padding-right'), 10),
      bottom: parseInt(this.$container.css('padding-bottom'), 10),
      left: parseInt(this.$container.css('padding-left'), 10)
    };

    this.imageBorderWidth = {
      top: parseInt(this.$image.css('border-top-width'), 10),
      right: parseInt(this.$image.css('border-right-width'), 10),
      bottom: parseInt(this.$image.css('border-bottom-width'), 10),
      left: parseInt(this.$image.css('border-left-width'), 10)
    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Attach event handlers 
     * to the newly minted 
     * DOM elements. 
     *
     */
    this.$overlay.hide().on('click', function() {
      self.end();
      return false;
    });

    this.$lightbox.hide().on('click', function(event) {
      if ($(event.target).attr('id') === 'lightbox') {
        self.end();
      }
    });

    this.$outerContainer.on('click', function(event) {
      if ($(event.target).attr('id') === 'lightbox') {
        self.end();
      }
      return false;
    });

    this.$prev.on('click', function(event) {
      event.preventDefault();
      if (self.currentImageIndex === 0) {
        self.changeImage(self.album.length - 1);
      } else {
        self.changeImage(self.currentImageIndex - 1);
      }
    });

    this.$next.on('click', function(event) {
      event.preventDefault();
      if (self.currentImageIndex === self.album.length - 1) {
        self.changeImage(0);
      } else {
        self.changeImage(self.currentImageIndex + 1);
      }
    });

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Show context menu for 
     * image on right-click.
     *
     * There is a div containing the 
     * navigation that spans the entire 
     * image and lives above of it. 
     *
     * If you right-click, you are right 
     * clicking this div and not the image. 
     * This prevents users from saving 
     * the image or using other context 
     * menu actions with the image. 
     *
     * To fix this, when we detect the 
     * right mouse button is pressed down, 
     * but not yet clicked, we set 
     * pointer-events to none on the 
     * nav div. This is so that the upcoming 
     * right-click event on the next mouseup 
     * will bubble down to the image. 
     *
     * Once the right-click/contextmenu 
     * event occurs we set the pointer events 
     * back to auto for the nav div so it can 
     * capture hover and left-click events 
     * as usual. 
     *
     */
    this.$nav.on('mousedown', function(event) {
      if (event.which === 3) {
        self.$nav.css('pointer-events', 'none');

        self.$lightbox.one('contextmenu', function() {
          setTimeout(function() {
            self.$nav.css('pointer-events', 'auto');
          }, 0);
        });
      }
    });

    this.$loader.add(this.$close).on('click keyup', function(e) {
      // If mouse click OR 'enter' or 'space' keypress, close LB
      if (e.type === 'click' || 
        (e.type === 'keyup' && 
            (e.which === 13 || e.which === 32))) 
      {
        self.end();
        return false;
      }
    });
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Show overlay and lightbox. 
   *
   * If the image is part of a 
   * set, add siblings to 
   * album array. 
   *
   */
  R_JS.prototype.start = function($link) 
  {
    var self = this;

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Store trigger element 
     * for focus restoration 
     * on close. 
     *
     */
    this.$triggerElement = $link;

    this.album = [];
    var imageNumber = 0;

    function addToAlbum($link) {
      self.album.push({
        alt: $link.attr('data-alt'),
        link: $link.attr('href'),
        title: $link.attr('data-title') || $link.attr('title')
      });
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Support both data-lightbox 
     * attribute and rel attribute 
     * implementations. 
     *
     */
    var dataLightboxValue = $link.attr('data-lightbox');
    var $links;

    if (dataLightboxValue) {
      $links = $($link.prop('tagName')).filter(function() {
        return $(this).attr('data-lightbox') === dataLightboxValue;
      });
      for (var i = 0; i < $links.length; i++) {
        addToAlbum($($links[i]));
        if ($links[i] === $link[0]) {
          imageNumber = i;
        }
      }
    } else {
      if($link.attr('rel') === 'lightbox'){

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * If image is not 
         * part of a set.
         *
         */
        addToAlbum($link);

      } else {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * If image is 
         * part of a set. 
         *
         */
        var relValue = $link.attr('rel');
        $links = $($link.prop('tagName')).filter(function() {
          return $(this).attr('rel') === relValue;
        });
        for (var j = 0; j < $links.length; j++) {
          addToAlbum($($links[j]));
          if ($links[j] === $link[0]) {
            imageNumber = j;
          }
        }
      }
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Position Lightbox. 
     *
     */
    this.$lightbox.css({
      top: this.options.positionFromTop + 'px',
      left: '0px'
    }).fadeIn(this.options.fadeDuration);

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Disable scrolling of 
     * the page while open. 
     *
     */
    if (this.options.disableScrolling) {
      $('body').addClass('lb-disable-scrolling');
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Enable focus trap. 
     *
     */
    this.$lightbox.on('keydown.focustrap', $.proxy(this._trapFocus, this));
    this.$overlay.on('keydown.focustrap', $.proxy(this._trapFocus, this));

    this.changeImage(imageNumber);

    $(document).trigger('lightbox:open', [{ album: this.album, currentImageIndex: imageNumber }]);
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Hide most UI elements in 
   * preparation for the animated 
   * resizing of the lightbox. 
   *
   */
  R_JS.prototype.changeImage = function(imageNumber) 
  {
    var self = this;
    var filename = this.album[imageNumber].link;
    var filetype = filename.split('?')[0].split('#')[0].split('.').slice(-1)[0];

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Disable keyboard nav 
     * during transitions.
     *
     */
    this.disableKeyboardNav();

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Show loading state.
     *
     */
    this.$overlay.fadeIn(this.options.fadeDuration);
    this.$loader.fadeIn('slow');
    this.$image.hide();
    this.$nav.hide();
    this.$prev.hide();
    this.$next.hide();
    this.$dataContainer.hide();
    this.$number.hide();
    this.$caption.hide();
    this.$outerContainer.addClass('animating');

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Cancel any pending 
     * image load. 
     *
     */
    if (this._preloader) {
      this._preloader.onload = null;
      this._preloader.onerror = null;
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * When image to show is 
     * preloaded, we send the 
     * width and height 
     * to sizeContainer(). 
     *
     */
    var preloader = new Image();
    this._preloader = preloader;

    preloader.onload = function() {

      /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
       * Guard against stale 
       * callbacks from 
       * cancelled loads. 
       *
       */
      if (preloader !== self._preloader) {
        return;
      }

      var imageHeight;
      var imageWidth;
      var maxImageHeight;
      var maxImageWidth;
      var windowHeight;
      var windowWidth;

      self.$image.attr({
        'alt': self.album[imageNumber].alt,
        'src': filename
      });

      self.$image.width(preloader.width);
      self.$image.height(preloader.height);

      var aspectRatio = preloader.width / preloader.height;

      windowWidth = $(window).width();
      windowHeight = $(window).height();

      /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
       * Calculate the max image 
       * dimensions for the 
       * current viewport.
       *
       * Take into account the 
       * border around the image 
       * and an additional 10px 
       * gutter on each side. 
       *
       */
      maxImageWidth  = windowWidth - self.containerPadding.left - self.containerPadding.right - self.imageBorderWidth.left - self.imageBorderWidth.right - 20;
      maxImageHeight = windowHeight - self.containerPadding.top - self.containerPadding.bottom - self.imageBorderWidth.top - self.imageBorderWidth.bottom - self.options.positionFromTop - 70;

      /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
       * Since many SVGs have small 
       * intrinsic dimensions, but they 
       * support scaling up without 
       * quality loss because of their 
       * vector format, max out their 
       * size inside the viewport. 
       *
       */
      if (filetype === 'svg') {
        if (aspectRatio >= 1) {
          imageWidth = maxImageWidth;
          imageHeight = parseInt(maxImageWidth / aspectRatio, 10);
        } else {
          imageWidth = parseInt(maxImageHeight / aspectRatio, 10);
          imageHeight = maxImageHeight;
        }
        self.$image.width(imageWidth);
        self.$image.height(imageHeight);

      } else {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Fit image inside 
         * the viewport.
         *
         */
        if (self.options.fitImagesInViewport) {

          /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
           * Check if image size is 
           * larger then maxWidth|
           * maxHeight in settings. 
           *
           */
          if (self.options.maxWidth && self.options.maxWidth < maxImageWidth) {
            maxImageWidth = self.options.maxWidth;
          }
          if (self.options.maxHeight && self.options.maxHeight < maxImageHeight) {
            maxImageHeight = self.options.maxHeight;
          }

        } else {
          maxImageWidth = self.options.maxWidth || preloader.width || maxImageWidth;
          maxImageHeight = self.options.maxHeight || preloader.height || maxImageHeight;
        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Is the current image's width 
         * or height is greater than 
         * the maxImageWidth or maxImageHeight 
         * option than we need to size 
         * down while maintaining the 
         * aspect ratio. 
         *
         */
        if ((preloader.width > maxImageWidth) || 
            (preloader.height > maxImageHeight)) 
        {
          if ((preloader.width / maxImageWidth) > (preloader.height / maxImageHeight)) {
            imageWidth  = maxImageWidth;
            imageHeight = parseInt(preloader.height / (preloader.width / imageWidth), 10);
            self.$image.width(imageWidth);
            self.$image.height(imageHeight);
          } else {
            imageHeight = maxImageHeight;
            imageWidth = parseInt(preloader.width / (preloader.height / imageHeight), 10);
            self.$image.width(imageWidth);
            self.$image.height(imageHeight);
          }
        }
      }

      self.sizeContainer(self.$image.width(), self.$image.height());
    };

    preloader.onerror = function() {
      /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
       * Guard against 
       * stale callbacks. 
       *
       */
      if (preloader !== self._preloader) {
        return;
      }

      self.$loader.stop(true).hide();
      self.$outerContainer.removeClass('animating');
      self.enableKeyboardNav();
    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Preload image 
     * before showing. 
     *
     */
    preloader.src = this.album[imageNumber].link;
    this.currentImageIndex = imageNumber;
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Kept for backwards 
   * compatibility. 
   *
   * Overlay sizing is now 
   * handled by CSS 
   * (position: fixed). 
   *
   */
  R_JS.prototype.sizeOverlay = function() 
  {
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Animate the size of 
   * the lightbox to fit the 
   * image we are showing.
   *
   * This method also shows 
   * the the image.
   *
   */
  R_JS.prototype.sizeContainer = function(
                        imageWidth, 
                        imageHeight) 
  {
    var self = this;

    var oldWidth  = this.$outerContainer.outerWidth();
    var oldHeight = this.$outerContainer.outerHeight();
    var newWidth  = imageWidth + this.containerPadding.left + this.containerPadding.right + this.imageBorderWidth.left + this.imageBorderWidth.right;
    var newHeight = imageHeight + this.containerPadding.top + this.containerPadding.bottom + this.imageBorderWidth.top + this.imageBorderWidth.bottom;

    function postResize() {
      self.$dataContainer.width(newWidth);
      self.$prev.height(newHeight);
      self.$next.height(newHeight);

      /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
       * Set focus on one of the 
       * two root nodes so 
       * keyboard events 
       * are captured. 
       *
       */
      self.$overlay.trigger('focus');

      self.showImage();
    }

    if (oldWidth !== newWidth || oldHeight !== newHeight) {
      this.$outerContainer.animate({
        width: newWidth,
        height: newHeight
      }, this.options.resizeDuration, 'swing', function() {
        postResize();
      });
    } else {
      postResize();
    }
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Display the image and its 
   * details and begin preload 
   * neighboring images. 
   *
   */
  R_JS.prototype.showImage = function() 
  {
    this.$loader.stop(true).hide();
    this.$image.fadeIn(this.options.imageFadeDuration);

    this.updateNav();
    this.updateDetails();
    this.preloadNeighboringImages();
    this.enableKeyboardNav();

    $(document).trigger('lightbox:change', [{
      album: this.album,
      currentImageIndex: this.currentImageIndex
    }]);
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Display previous and 
   * next navigation 
   * if appropriate. 
   *
   */
  R_JS.prototype.updateNav = function() 
  {

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Check to see if the browser 
     * supports touch events. 
     * 
     * If so, we take the conservative 
     * approach and assume that mouse 
     * hover events are not supported 
     * and always show prev/next 
     * navigation arrows in 
     * image sets. 
     *
     */
    var alwaysShowNav = false;
    try {
      document.createEvent('TouchEvent');
      alwaysShowNav = (this.options.alwaysShowNavOnTouchDevices) ? true : false;
    } catch (ignore) { /* Touch detection */ }

    this.$nav.show();

    if (this.album.length > 1) {
      if (this.options.wrapAround) {
        if (alwaysShowNav) {
          this.$prev.css('opacity', '1');
          this.$next.css('opacity', '1');
        }
        this.$prev.show();
        this.$next.show();
      } else {
        if (this.currentImageIndex > 0) {
          this.$prev.show();
          if (alwaysShowNav) {
            this.$prev.css('opacity', '1');
          }
        }
        if (this.currentImageIndex < this.album.length - 1) {
          this.$next.show();
          if (alwaysShowNav) {
            this.$next.css('opacity', '1');
          }
        }
      }
    }
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Display caption, image 
   * number, and closing button. 
   *
   */
  R_JS.prototype.updateDetails = function() 
  {

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Enable anchor clicks in 
     * the injected caption html. 
     *
     * Thanks Nate Wright for the fix. 
     * @https://github.com/NateWr
     *
     */
    if (typeof this.album[this.currentImageIndex].title !== 'undefined' &&
      this.album[this.currentImageIndex].title !== '') 
    {
      if (this.options.sanitizeTitle) {
        this.$caption.text(this.album[this.currentImageIndex].title);
      } else {
        this.$caption.html(this.album[this.currentImageIndex].title);
      }
      this.$caption.fadeIn('fast');
    }

    if (this.album.length > 1 && this.options.showImageNumberLabel) {
      var labelText = this.imageCountLabel(this.currentImageIndex + 1, this.album.length);
      this.$number.text(labelText).fadeIn('fast');
    } else {
      this.$number.hide();
    }

    this.$outerContainer.removeClass('animating');

    this.$dataContainer.fadeIn(this.options.resizeDuration);
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Preload previous and 
   * next images in set. 
   *
   */
  R_JS.prototype.preloadNeighboringImages = function() 
  {
    if (this.album.length > this.currentImageIndex + 1) {
      var preloadNext = new Image();
      preloadNext.src = this.album[this.currentImageIndex + 1].link;
    }
    if (this.currentImageIndex > 0) {
      var preloadPrev = new Image();
      preloadPrev.src = this.album[this.currentImageIndex - 1].link;
    }
  };

  R_JS.prototype.enableKeyboardNav = function() 
  {
    this.$lightbox.on('keyup.keyboard', $.proxy(this.keyboardAction, this));
    this.$overlay.on('keyup.keyboard', $.proxy(this.keyboardAction, this));
  };

  R_JS.prototype.disableKeyboardNav = function() 
  {
    this.$lightbox.off('.keyboard');
    this.$overlay.off('.keyboard');
  };

  R_JS.prototype.keyboardAction = function(event) 
  {
    var KEYCODE_ESC        = 27;
    var KEYCODE_LEFTARROW  = 37;
    var KEYCODE_RIGHTARROW = 39;

    var keycode = event.keyCode;
    if (keycode === KEYCODE_ESC) {

      /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
       * Prevent bubbling so as to 
       * not affect other components 
       * on the page. 
       *
       */
      event.stopPropagation();
      this.end();
    } else if (keycode === KEYCODE_LEFTARROW) {
      if (this.currentImageIndex !== 0) {
        this.changeImage(this.currentImageIndex - 1);
      } else if (this.options.wrapAround && this.album.length > 1) {
        this.changeImage(this.album.length - 1);
      }
    } else if (keycode === KEYCODE_RIGHTARROW) {
      if (this.currentImageIndex !== this.album.length - 1) {
        this.changeImage(this.currentImageIndex + 1);
      } else if (this.options.wrapAround && this.album.length > 1) {
        this.changeImage(0);
      }
    }
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Trap focus within the 
   * lightbox when it is open. 
   *
   */
  R_JS.prototype._trapFocus = function(event) 
  {
    if (event.keyCode !== 9) {
      return;
    }

    var focusable = this.$lightbox.find('[tabindex]:visible').filter(function() {
      return parseInt($(this).attr('tabindex'), 10) >= 0;
    });

    if (focusable.length === 0) {
      return;
    }

    var first = focusable.first()[0];
    var last = focusable.last()[0];
    var active = document.activeElement;

    if (event.shiftKey) {
      if (active === first || 
        active === this.$lightbox[0] || 
        active === this.$overlay[0]) 
      {
        event.preventDefault();
        last.focus();
      }
    } else {
      if (active === last) {
        event.preventDefault();
        first.focus();
      }
    }
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Closing time. :-(
   *
   */
  R_JS.prototype.end = function() 
  {
    this.disableKeyboardNav();
    this.$lightbox.off('.focustrap');
    this.$overlay.off('.focustrap');
    this.$lightbox.fadeOut(this.options.fadeDuration);
    this.$overlay.fadeOut(this.options.fadeDuration);

    if (this.options.disableScrolling) {
      $('body').removeClass('lb-disable-scrolling');
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Cancel any pending 
     * image load. 
     *
     */
    if (this._preloader) {
      this._preloader.onload = null;
      this._preloader.onerror = null;
      this._preloader = null;
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Restore focus to the 
     * element that triggered 
     * the lightbox. 
     *
     */
    if (this.$triggerElement) {
      this.$triggerElement.trigger('focus');
      this.$triggerElement = null;
    }

    $(document).trigger('lightbox:close');
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * --- Public API ---
   *
   * Open lightbox programmatically.
   * images: a URL string, or an array of {link, title, alt} objects.
   * startIndex: which image to show first (default 0).
   *
   */
  R_JS.prototype.open = function(
                        images, 
                        startIndex) 
  {
    startIndex = startIndex || 0;
    this.album = [];

    if (typeof images === 'string') {
      images = [{ link: images }];
    }

    for (var i = 0; i < images.length; i++) {
      var img = typeof images[i] === 'string' ? { link: images[i] } : images[i];
      this.album.push({
        link: img.link || img.src || img.href,
        alt: img.alt || '',
        title: img.title || ''
      });
    }

    if (this.album.length === 0) {
      return;
    }

    this.$lightbox.css({
      top: this.options.positionFromTop + 'px',
      left: '0px'
    }).fadeIn(this.options.fadeDuration);

    if (this.options.disableScrolling) {
      $('body').addClass('lb-disable-scrolling');
    }

    this.$lightbox.on('keydown.focustrap', $.proxy(this._trapFocus, this));
    this.$overlay.on('keydown.focustrap', $.proxy(this._trapFocus, this));

    this.changeImage(startIndex);

    $(document).trigger('lightbox:open', [{ album: this.album, currentImageIndex: startIndex }]);
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Close lightbox 
   * programmatically. 
   *
   */
  R_JS.prototype.close = function() 
  {
    this.end();
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Navigate to the next 
   * image in the album. 
   *
   */
  R_JS.prototype.next = function() 
  {
    if (this.currentImageIndex !== this.album.length - 1) {
      this.changeImage(this.currentImageIndex + 1);
    } else if (this.options.wrapAround && this.album.length > 1) {
      this.changeImage(0);
    }
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Navigate to the previous 
   * image in the album. 
   *
   */
  R_JS.prototype.prev = function() 
  {
    if (this.currentImageIndex !== 0) {
      this.changeImage(this.currentImageIndex - 1);
    } else if (this.options.wrapAround && this.album.length > 1) {
      this.changeImage(this.album.length - 1);
    }
  };

  /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
   * Remove lightbox DOM 
   * and unbind all events. 
   *
   */
  R_JS.prototype.destroy = function() 
  {
    this.end();
    $('body').off('click.lightbox');
    if (this.$lightbox) {
      this.$lightbox.remove();
    }
    if (this.$overlay) {
      this.$overlay.remove();
    }
  };

    R_JS.prototype.crnrstn_rtime_timer_sync = function()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added the method, crnrstn_rtime_timer_sync(), 
         *       and started a re-architecture of 
         *       client-side time cycling, tracking 
         *       and reporting. 
         *       5 :: Sunday, March 8, 2026 @ 2335 hrs.
         * 
         */

        this.log_activity('[lnum 1545] Begin client ' + 
             'cycling of a second. TTL wall_time_seconds=[' + 
             this.wall_time_seconds + ']', 
             this.CRNRSTN_DEBUG_CONTROLS);

        this.wall_time_seconds = this.wall_time_seconds + 1;

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://joe-riggs.com/blog/2012/05/javascript-count-up-timer-with-hours-minutes-second-hours-minutes/
     * AUTHOR :: Joe Riggs :: https://joe-riggs.com/blog/author/jriggs/
     *
     */
    R_JS.prototype.crnrstn_rtime_timer_cycle = function()
    {

        this.log_activity('[lnum 1545] Begin client ' + 
             'cycling of a second. TTL delta=[' + 
             this.wall_time_seconds + ']', 
             this.CRNRSTN_DEBUG_CONTROLS);

        this.wall_time_seconds = this.wall_time_seconds + 1;

        if(this.ttl_tunnel_monitor_seconds > -1){

            this.ttl_tunnel_monitor_seconds++;

        }

        var time_chunks = this.client_rtime.split(":");
        var hour, mins, secs;
        var hour_copy = '';
        var min_copy = '';
        var secs_copy = '';

        var temp_curr_date = new Date();
        this.client_rtime_millisecs = temp_curr_date.getMilliseconds();

        hour = Number(time_chunks[0]);
        mins = Number(time_chunks[1]);
        secs = Number(time_chunks[2]);
        secs++;

        if (secs === 60){
            secs = 0;
            mins = mins + 1;
        }

        if (mins === 60){
            mins = 0;
            hour = hour + 1;
        }

        /**
         * if (hour == 13){
         *  hour = 1;
         * }
         * 
         */

        this.client_rtime_hour = hour;
        this.client_rtime_mins = this.plz(mins);
        this.client_rtime_secs = this.plz(secs);
        this.client_rtime = this.client_rtime_hour + ":" + 
                            this.client_rtime_mins + ":" + 
                            this.client_rtime_secs;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Need to populate 
         *         unit/units from the 
         *         SSDTLA XML response 
         *         data for multi-
         *         language support. 
         *
         */
        if (hour > 0) {

            hour_copy = hour + " hr";

            if (hour > 1) {

                hour_copy = hour_copy + "s";

            }

            hour_copy = hour_copy + " ";

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Need to populate 
         *         unit/units from the 
         *         SSDTLA XML response 
         *         data for multi-
         *         language support. 
         *
         */
        if (mins > 0) {

            min_copy = mins + " min";

            if (mins > 1) {

                min_copy = min_copy + "s";

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Need to populate 
         *         unit/units from the 
         *         SSDTLA XML response 
         *         data for multi-
         *         language support. 
         *
         */
        if (secs > 0) {

            secs_copy = " " + secs + "." + this.client_rtime_millisecs + " secs";

        } else {

            secs_copy = " 0." + this.client_rtime_millisecs + " secs";

        }

        this.client_rtime_pretty = hour_copy + min_copy + secs_copy;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Process TTL.
         *
         */
        this.process_data_tunnel_ttl(temp_curr_date);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Process UI 
         * state updates. 
         *
         */
        this.execute_ui_sync_controller();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * UI DOM component 
         * stage refresh.
         *
         */
        this.refresh_stage_anchored_dom_component_css();

        if($('#crnrstn_ui_system_footer_stat_wtime').length){

            var curr_date_obj = new Date();

            $('#crnrstn_ui_system_footer_stat_wtime').html('[wtime' + 
                this.return_log_date_string(curr_date_obj, 'sys_rtime') + 
                ']');

        }

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * log_activity() method copied from 
     * the CLR-SSL CRNRSTN_JS v1.00.0000
     * to support the crnrstn_rtime_timer_cycle()
     * method being copied over.
     * 5 :: Friday, March 6, 2026 @ 0302 hrs.
     *
     */
    R_JS.prototype.log_activity = function(
                          str, 
                          mode = this.CRNRSTN_DEBUG_BASIC)
    {

        if(this.R_debug_mode === this.CRNRSTN_DEBUG_OFF){

        }else{

            switch(this.CRNRSTN_LOGGING_OUTPUT){
                case 'DOM':
                case 'CONSOLE':
                case 'ALERT':
                default:

                    if(mode === this.CRNRSTN_DEBUG_VERBOSE){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Verbose is 
                         * set locally. 
                         *
                         */
                        this.log_out(str);

                    }else{

                        switch (this.R_debug_mode) {
                            case this.CRNRSTN_DEBUG_VERBOSE:

                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Verbose is 
                                 * set globally. 
                                 *
                                 */
                                this.log_out(str);

                            break;
                            case this.CRNRSTN_DEBUG_BASSDRIVE:

                                if (mode === this.CRNRSTN_DEBUG_BASSDRIVE) {

                                    this.log_out(str);

                                }

                            break;
                            case this.CRNRSTN_DEBUG_LIFESTYLE_BANNER:

                                if (mode === this.CRNRSTN_DEBUG_LIFESTYLE_BANNER) {

                                    this.log_out(str);

                                }

                            break;
                            case this.CRNRSTN_DEBUG_BASIC:

                                if (mode === this.CRNRSTN_DEBUG_BASIC) {

                                    this.log_out(str);

                                } else {

                                    if (mode === this.CRNRSTN_DEBUG_LIFESTYLE_BANNER) {

                                        this.log_out(str);

                                    } else {

                                        if (mode === this.CRNRSTN_DEBUG_BASSDRIVE) {

                                            this.log_out(str);

                                        }

                                    }

                                }

                            break;
                            default:
                                // SILENCE IS GOLDEN.
                            break;

                        }

                    }

                break;

            }

        }

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * log_out() method copied from the 
     * CLR-SSL CRNRSTN_JS v1.00.0000 to 
     * support the log_activity()
     * method being copied over. 
     * 5 :: Friday, March 6, 2026 @ 0306 hrs.
     *
     */
    R_JS.prototype.log_out = function(str)
    {

        var curr_date_obj = new Date();

        switch(this.CRNRSTN_LOGGING_OUTPUT){
            case 'DOM':

                var log_out = '[' + 
                              this.return_log_date_string(curr_date_obj, 'sys_ts') + 
                              '] [rtime' + 
                              this.return_log_date_string(curr_date_obj, 'sys_rtime') + 
                              '] ' + 
                              str;
                var oCRNRSTN_LOG_DOM_ELEM = document.createElement('div');

                oCRNRSTN_LOG_DOM_ELEM.setAttribute('class', 'crnrstn_log_entry');
                $("#crnrstn_activity_log_output").prepend(oCRNRSTN_LOG_DOM_ELEM);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Clean string for HTML.
                 *
                 * "<profile>" becomes...
                 *
                 * "&lt;profile&gt;" 
                 *
                 */
                str_clean = this.html_entities(log_out);

                oCRNRSTN_LOG_DOM_ELEM.innerHTML = str_clean;

            break;
            case 'ALERT':

                alert(str);

            break;
            default:
                //CONSOLE OUT
                console.log('[' + 
                    this.return_log_date_string(curr_date_obj, 'sys_ts') + 
                    '] [rtime' + 
                    this.return_log_date_string(curr_date_obj, 'sys_rtime') + 
                    '] ' + str);

            break;

        }

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * return_log_date_string() method 
     * copied from the CLR-SSL CRNRSTN_JS 
     * v1.00.0000 to support the log_out() 
     * method being copied over. 
     * 5 :: Friday, March 6, 2026 @ 0308 hrs. 
     *
     */
    R_JS.prototype.return_log_date_string = function(
                         date_obj, 
                         type, 
                         abbrev_type = 'short_str')
    {

        var output_str = '';

        switch(type){
            case 'sys_rtime':
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * 0.434234 secs
                 * 1 min 5.434234 secs
                 * 1 hr 3 mins 15.434234 secs
                 *
                 */

                var time_chunks = this.client_rtime.split(":");
                var year, month, week, day, hour, mins, secs;

                var secs_copy = '';
                var min_copy = '';
                var hour_copy = '';
                var day_copy = '';
                var week_copy = '';
                var month_copy = '';
                var year_copy = '';

                secs = Number(time_chunks[2]);
                mins = Number(time_chunks[1]);
                hour = Number(time_chunks[0]);
                day = hour / 24;
                week = day / 7;
                month = week / 30;
                year = month / 30;

                this.client_rtime_secs = this.plz(secs);
                this.client_rtime_mins = this.plz(mins);
                this.client_rtime_hour = hour;

                /* Waterfall to get the 
                 * date output format:
                 * 
                 * xx Year xx Month xx Week xx Day xx hour xx mins xx.xxx secs
                 * 
                 */
                if(year > 0){

                    year_copy = year + ' ' + 'year';

                    if(year >= 2){

                        year_copy = year_copy + 's';

                    }

                    month = month - 1;
                    week = week - 1;
                    day = day - 1;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * if(hour > 24){
                 *
                 *     this.client_rtime_day = hour;
                 *     hour_copy = '';
                 *
                 * }
                 *
                 */

                if (hour > 0) {

                    hour_copy = " " + hour + " hr";

                    if (hour > 1) {

                        hour_copy = hour_copy + "s";

                    }

                    hour_copy = hour_copy;

                }

                if (mins > 0) {

                    min_copy = " " + mins + " min";

                    if (mins > 1) {

                        min_copy = min_copy + "s";

                    }

                }

                var temp_curr_date = new Date();
                this.client_rtime_millisecs = temp_curr_date.getMilliseconds();

                if (secs > 0) {

                    secs_copy = " " + secs + "." + this.client_rtime_millisecs + " secs";

                } else {

                    secs_copy = " 0." + this.client_rtime_millisecs + " secs";

                }

                output_str = hour_copy + min_copy + secs_copy;

            break;
            case 'timestamp':

                var day_mth = this.return_log_date_string(date_obj, 'day_mth', 'long_int');
                var month = this.return_log_date_string(date_obj, 'month');
                var day_wk = this.return_log_date_string(date_obj, 'day_wk', 'long_int');
                var hours = this.return_log_date_string(date_obj, 'hours');
                var minutes = this.return_log_date_string(date_obj, 'minutes');
                var seconds = this.return_log_date_string(date_obj, 'seconds', 'long_int');
                var year = this.return_log_date_string(date_obj, 'year');

                output_str = day_wk + ' ' + month + ' ' + 
                             day_mth + ' ' + hours + ':' + 
                             minutes + ':' + seconds + ' ' + 
                             year;

            break;
            case 'sys_ts':
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * 2021-11-20 08:48:42.179295
                 * date_obj.getTimezoneOffset();
                 *
                 */

                var day_mth = this.return_log_date_string(date_obj, 'day_mth', 'long_int');
                var month = this.return_log_date_string(date_obj, 'month', 'long_int');  //date_obj.getMonth();
                //var day_wk = this.return_log_date_string(date_obj, 'day_wk', 'long_int');
                var hours = this.return_log_date_string(date_obj, 'hours');
                var minutes = this.return_log_date_string(date_obj, 'minutes');
                var seconds = this.return_log_date_string(date_obj, 'seconds', 'long_int');
                var year = this.return_log_date_string(date_obj, 'year');

                dtz_delta = this.return_utc_offset(date_obj);

                output_str = year + '-'+ month + '-' + 
                             day_mth + ' ' + hours + ':' + 
                             minutes + ':' + seconds + ' ' + 
                             dtz_delta;

            break;
            case 'day_wk':
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Mon
                 * this.client_day_abbrev_ARRAY = ['Sun', 'Mon', 'Tues', 
                 *                                 'Wed', 'Thurs', 'Fri', 
                 *                                 'Sat'];
                 *
                 * this.client_day_ARRAY = ['Sunday', 'Monday', 'Tuesday', 
                 *                          'Wednesday', 'Thursday', 'Friday', 
                 *                          'Saturday'];
                 *
                 */


                var day = date_obj.getDay();
                if(abbrev_type == 'short_str'){

                    output_str = this.client_day_abbrev_ARRAY[day];

                }else{

                    if(abbrev_type == 'long_str'){

                        output_str = this.client_day_ARRAY[day];

                    }else{

                        day++;

                        if (abbrev_type == 'long_int') {

                            if (day < 10) {

                                output_str = '0' + day;

                            }else{

                                output_str = day;

                            }

                        }

                    }

                }

            break;
            case 'day_mth':
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * 29
                 * this.client_day_mth_en_ARRAY = ['first', 'second', 'third', 
                 *                                 'fourth', 'fifth', 'sixth', 'seventh',
                 *                                 'eigth', 'ninth', 'tenth', 'eleventh', 
                 *                                 'twelfth', 'thirtenth', '', '', '', '', 
                 *                                 '', '', '', '', '', '',];
                 *
                 * this.client_day_mth_en_ARRAY = ['1st', '2nd', '3rd', '4th', '5th', '6th', '7th',
                 *                                 '8th', '9th', '10th', '11th', '12th', '13th', 
                 *                                 '', , '', '', '', '', '',];
                 *
                 */ 

                day = date_obj.getDate();

                if (abbrev_type == 'long_int') {

                    if (day < 10) {

                        output_str = '0' + day;

                    }else{

                        output_str = day;

                    }

                }

            break;
            case 'month':
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * long_int, long_str, short_str
                 *
                 * this.client_month_abbrev_ARRAY = ['Jan','Feb','Mar','Apr','May',
                 *                                   'Jun','Jul','Aug','Sept','Oct',
                 *                                   'Nov','Dec'];
                 *
                 * this.client_month_ARRAY = ['January','February','March','April',
                 *                            'May','June','July','August',
                 *                            'September','October','November',
                 *                            'December'];
                 *
                 */
                var month = date_obj.getMonth();

                if(abbrev_type == 'short_str'){

                    output_str = this.client_month_abbrev_ARRAY[month];

                }else{

                    if(abbrev_type == 'long_str'){

                        output_str = this.client_month_ARRAY[month];

                    }else{

                        month++;

                        if (abbrev_type == 'long_int') {

                            if (month < 10) {

                                output_str = '0' + month;

                            }else{

                                output_str = month;

                            }

                        }

                    }

                }

            break;
            case 'year':

                output_str = date_obj.getFullYear();

            break;
            case 'hours':

                output_str = date_obj.getHours();
                output_str = this.plz(output_str);

            break;
            case 'minutes':

                output_str = date_obj.getMinutes();
                output_str = this.plz(output_str);

            break;
            case 'seconds':

                var temp_curr_date = new Date();
                this.client_rtime_millisecs = temp_curr_date.getMilliseconds();

                var secs = date_obj.getSeconds();

                if (abbrev_type == 'long_int') {

                    if (secs < 10) {

                        output_str = '0' + secs;

                    }else{

                        output_str = secs;

                    }

                }

                output_str = output_str + '.' + this.client_rtime_millisecs;

            break;

        }

        return output_str;

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE :: https://stackoverflow.com/questions/14129953/how-to-encode-a-string-in-javascript-for-displaying-in-html
     * COMMENT :: https://stackoverflow.com/a/14130005
     * AUTHOR :: j08691:: https://stackoverflow.com/users/616443/j08691
     *
     */
    R_JS.prototype.html_entities = function(str){

        return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * plz() method copied from the 
     * CLR-SSL CRNRSTN_JS v1.00.0000 to 
     * support the return_log_date_string() 
     * method being copied over. 
     * 5 :: Friday, March 6, 2026 @ 0320 hrs. 
     *
     */
    R_JS.prototype.plz = function(digit){

        var zpad = digit + '';

        if (digit < 10) {

            zpad = "0" + zpad;

        }

        return zpad;

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * return_utc_offset() method copied 
     * from the CLR-SSL CRNRSTN_JS v1.00.0000 
     * to support the return_log_date_string() 
     * method being copied over. 
     * 5 :: Friday, March 6, 2026 @ 0330 hrs. 
     *
     */
    R_JS.prototype.return_utc_offset = function(date_obj){

        var dtz_delta = date_obj.getTimezoneOffset();

        dtz_delta_units_hr = dtz_delta / 60;
        dtz_delta_units_min = dtz_delta_units_hr % 1;

        if(dtz_delta_units_hr > 0){

            dtz_sign = '+';

        }else{

            dtz_sign = '-';
            dtz_delta_units_hr = dtz_delta_units_hr * -1;
            dtz_delta_units_min = dtz_delta_units_min * -1;

        }

        dtz_delta_hr = dtz_delta_units_hr - dtz_delta_units_min;
        dtz_delta_min = dtz_delta_units_min * 60;

        dtz_delta_hr = this.plz(dtz_delta_hr);
        dtz_delta_min = this.plz(dtz_delta_min);

        dtz_delta = 'UTC' + dtz_sign + dtz_delta_hr + dtz_delta_min;

        return dtz_delta;

    };

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * process_data_tunnel_ttl() 
     * method copied from the CLR-SSL 
     * CRNRSTN_JS v1.00.0000 to support 
     * the crnrstn_rtime_timer_cycle()
     * method being copied over.
     * 5 :: Friday, March 6, 2026 @ 0347 hrs.
     *
     * Process TTL.
     *
     */
    R_JS.prototype.process_data_tunnel_ttl = function(curr_date_obj)
    {

            console.log('TTL Cycle [wtime ' + 
                this.client_rtime + ']' + 
                this.client_rtime_pretty);
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * execute_ui_sync_controller() 
     * method copied from the CLR-SSL 
     * CRNRSTN_JS v1.00.0000 to support 
     * the crnrstn_rtime_timer_cycle()
     * method being copied over.
     * 5 :: Friday, March 6, 2026 @ 0347 hrs.
     *
     * Process UI 
     * state updates. 
     *
     */
    R_JS.prototype.execute_ui_sync_controller = function()
    {
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * refresh_stage_anchored_dom_component_css() 
     * method copied from the CLR-SSL 
     * CRNRSTN_JS v1.00.0000 to support 
     * the crnrstn_rtime_timer_cycle()
     * method being copied over.
     * 5 :: Friday, March 6, 2026 @ 0347 hrs.
     *
     * UI DOM component 
     * stage refresh.
     *
     */
    R_JS.prototype.refresh_stage_anchored_dom_component_css = function()
    {
    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * A CLR-SSL framework initialization 
     * method to be fired once when the 
     * "DOM is Ready".
     *
     */
    R_JS.prototype.crnrstn_init = function()
    {
        var self = this;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Both enable and build 
         * methods require the body 
         * tag to be in the DOM. 
         *
         */
         console.log('crnrstn_init message: DOM is Ready!');

    }


  return new R_JS();
}));

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * SOURCE :: https://developer.mozilla.org/en-US/docs/Web/API/setInterval
 *
 */
var __nativeST__ = window.setTimeout, __nativeSI__ = window.setInterval;

window.setTimeout = function (vCallback, nDelay /*, argumentToPass1, argumentToPass2, etc. */) {
    var oThis = this, aArgs = Array.prototype.slice.call(arguments, 2);
    return __nativeST__(vCallback instanceof Function ? function () {
        vCallback.apply(oThis, aArgs);
    } : vCallback, nDelay);
};

window.setInterval = function (vCallback, nDelay /*, argumentToPass1, argumentToPass2, etc. */) {
    var oThis = this, aArgs = Array.prototype.slice.call(arguments, 2);
    return __nativeSI__(vCallback instanceof Function ? function () {
        vCallback.apply(oThis, aArgs);
    } : vCallback, nDelay);
};

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * SOURCE :: https://stackoverflow.com/questions/7790725/javascript-track-mouse-position
 * COMMENT :: https://stackoverflow.com/a/7790764
 * AUTHOR :: T.J. Crowder :: https://stackoverflow.com/users/157247/t-j-crowder
 *
 */
(function() {

    var self = this;
    document.onmousemove = crnrstn_interact_ui_mouse_input;

    function crnrstn_interact_ui_mouse_input(event){
        var eventDoc, doc, body;
        event = event || window.event; // IE-ism

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * If pageX/Y aren't available 
         * and clientX/Y are, calculate 
         * pageX/Y - logic taken 
         * from jQuery. 
         *
         * (This is to support old IE)
         *
         */
        if (event.pageX == null && event.clientX != null) {
            eventDoc = (event.target && event.target.ownerDocument) || document;
            doc = eventDoc.documentElement;
            body = eventDoc.body;

            event.pageX = event.clientX +
                (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
                (doc && doc.clientLeft || body && body.clientLeft || 0);
            event.pageY = event.clientY +
                (doc && doc.scrollTop || body && body.scrollTop || 0) -
                (doc && doc.clientTop || body && body.clientTop || 0 );
        }

        self.R_JS.CRNRSTN_INTERACT_UI_MOUSE = {
            X: event.pageX,
            Y: event.pageY
        };

    }

})();

(function crnrstn_rtime_timer_interval(){
    setInterval(function() {
        this.R_JS.crnrstn_rtime_timer_sync();
        }, 1000);
})();
