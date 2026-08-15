<?php

/*
// 5 ::
// Code is Poetry */

//
// Initialize the 
// application folder. 
$tmp_slsh = DIRECTORY_SEPARATOR;
$tmp_application_folder = $tmp_slsh . 'lightbox_helper';
$tmp_framework_dir = $tmp_slsh . '_lightbox_helper';

//
// Initialize session.
//
// TODO :: Move this to
//         the system registry.
//         5 :: Friday, August 2, 2024 @ 0018 hrs.
$tmp_file_path = $_SERVER['DOCUMENT_ROOT'] . $tmp_application_folder . $tmp_framework_dir . $tmp_slsh . 'class' . $tmp_slsh . 'session' . $tmp_slsh;
require($tmp_file_path . 'crnrstn.session_id_start.runtime_exe.php');

//
// Initialize the directory
// offset in support of
// the runtime executable,
// crnrstn.system_path_initialization.runtime_exe.php
//
//
// 5
$CRNRSTN_ROOT_OFFSET = '../../../';

//
// Initialize system
// directory paths.
//
// TODO :: Move this to
//         the system registry.
//         5 :: Friday, August 2, 2024 @ 0019 hrs.
$tmp_file_path = $_SERVER['DOCUMENT_ROOT'] . $tmp_application_folder .  $tmp_slsh . '_lightbox_helper' . $tmp_slsh . '_config' . $tmp_slsh . 'config.system_paths' . $tmp_slsh;
require($tmp_file_path . 'crnrstn.system_paths.function.php');
require($tmp_file_path . 'crnrstn.system_path_initialization.runtime_exe.php');

?>
<!DOCTYPE html>
<html lang="<?php echo $oCRNRSTN->iso_language_profile(); ?>">
<head>
    <title>CRNRSTN :: <?php echo $oCRNRSTN->version_crnrstn(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php echo $oCRNRSTN->return_creative('CRNRSTN_ICO'); ?>
    <?php echo $oCRNRSTN->ui_content_module_out(CRNRSTN_JS_FRAMEWORK_JQUERY) .
        $oCRNRSTN->ui_content_module_out(CRNRSTN_JS_FRAMEWORK_JQUERY_UI).
        $oCRNRSTN->ui_content_module_out(CRNRSTN_CSS_MAIN_DESKTOP & CRNRSTN_JS_MAIN); ?>
    <style>
        body                                        { padding: 0;  margin: 0;}
        .the_R                           { color:#F90000; }
        .crnrstn_logo_wrapper                       { padding: 15px 0 20px 15px; }

        .crnrstn_j5_wolf_pup_outter_wrap            { float:right; padding:420px 0 0 0; margin:0; width:100%;}
        .crnrstn_j5_wolf_pup_inner_wrap             { position: absolute; width:98%; z-index: 2; text-align: right; padding-top: 20px;}
        .crnrstn_signin_copyright_shell             { width:578px; text-align: center; margin:0 auto; font-size: 12px; font-family: Arial, Helvetica, sans-serif; line-height: 18px; color: #333;}
        .crnrstn_signin_copyright_shell a           { text-decoration:none; color: #0066CC; text-decoration:underline;}

    </style>
</head>
<body>
<div>

    <div class="crnrstn_logo_wrapper"><img src="<?php echo $oCRNRSTN->return_creative('CRNRSTN_LOGO', CRNRSTN_BASE64 & CRNRSTN_PNG); ?>" height="70" alt="CRNRSTN :: v<?php echo $oCRNRSTN->version_crnrstn(); ?>" title="CRNRSTN :: v<?php echo $oCRNRSTN->version_crnrstn(); ?>"></div>

    <?php
    $tmp_data = 'This is an OpenSSL encryption test. Please repeat to confirm.';
    //$oCRNRSTN->print_r('$oCRNRSTN->error_log(\'Output content.\', __LINE__, __METHOD__, __FILE__, INT_CONSTANT_LOG_SILO);', '$oCRNRSTN->error_log()', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);
    $tmp_encrypted_data = $oCRNRSTN->data_encrypt($tmp_data);
    $tmp_decrypted_output = $oCRNRSTN->data_decrypt($tmp_encrypted_data);

    $oCRNRSTN->print_r('$tmp_decrypt_output=[' . $tmp_decrypted_output . '] $tmp_encrypted_data=[' . $tmp_encrypted_data . '].', 'OpenSSL Integrations Testing', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);

    //$oCRNRSTN->print_r('$oCRNRSTN->error_log(\'Output content.\', __LINE__, __METHOD__, __FILE__, INT_CONSTANT_LOG_SILO);', '$oCRNRSTN->error_log()', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);

    ?>
    <div class="crnrstn_cb_100"></div>
    <div class="crnrstn_signin_copyright_shell">&copy; 2012-<?php echo date('Y'); ?> Jonathan '5' Harris :: <?php echo $oCRNRSTN->multi_lang_content_return('COPY_ALL_RIGHTS_PART1') . '<br>' . $oCRNRSTN->multi_lang_content_return('COPY_ALL_RIGHTS_PART2'); ?> <a id="crnrstn_txt_lnk_mit" href="#" target="_self" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux('onclick', this);"><?php echo $oCRNRSTN->multi_lang_content_return('COPY_ALL_RIGHTS_PART_MIT'); ?></a>.</div>
    <div style="width:700px;">
        <div class="crnrstn_j5_wolf_pup_outter_wrap">
            <div class="crnrstn_j5_wolf_pup_inner_wrap">
                <?php
                echo $oCRNRSTN->return_creative('J5_WOLF_PUP_RAND', CRNRSTN_HTML);
                ?>
            </div>
        </div>
    </div>

    <?php

    echo $oCRNRSTN->system_output_footer_html(CRNRSTN_RESOURCE_DOCUMENTATION);
    //echo $oCRNRSTN->system_output_footer_html();
    ?>

</div>
</body>
</html>