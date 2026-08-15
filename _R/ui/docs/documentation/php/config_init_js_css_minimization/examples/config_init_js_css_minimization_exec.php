<?php
/*
// 5 ::
// Code is Poetry */

if($this->oCRNRSTN->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) === true){

    $tmp_html_out .= 'PROD ACTIVE. Loading filename.min.js and filename.min.css resources.';

}else{

    $tmp_html_out .= 'DEV ACTIVE. Loading filename.js and filename.css resources.';

}