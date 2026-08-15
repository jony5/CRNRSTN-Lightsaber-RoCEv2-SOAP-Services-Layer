// Copyright 2005 Google Inc.
// All Rights Reserved
//
// Tests for the XSLT processor. To run the test, open the file from
// the file system. No server support is required.
//
//
// Author: Steffen Meschkat <mesch@google.com>

logging = true;
xsltdebug = true;

function el(id) {
  return document.getElementById(id);
}

function test_xslt() {
  var xml = xmlParse(el('xml').value);
  var xslt = xmlParse(el('xslt').value);
  var html = xsltProcess(xml, xslt);
  var stache = '<div style="padding:20px 0 0 0; width:350px;">' + 
  '<div style="clear:both; text-align:center; margin:0 auto; padding:0 0 0 15px;">' + 
  '<img src="./common/img/stache.png?crnrstn_0010111011=stache&crnrstn_=420.0420.00.18020.1668508368.0" height="51" alt="stache" title="stache">' + 
  '</div>' + 
  '</div>';
  el('html').value = html;
  el('htmldisplay').innerHTML = html;
  document.getElementById('htmldisplay').innerHTML = html + stache;
}

function cleanxml() {
  cleanvalue('xml');
  cleanvalue('xslt');
}

function cleanvalue(id) {
  var x = el(id);
  x.value = x.value.replace(/^\s*/, '').replace(/\n\s*/g, '\n');
}
