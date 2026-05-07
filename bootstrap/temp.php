<?php
// Force PHP to use a writable temp directory
if (!is_writable(sys_get_temp_dir())) {
    $customTemp = '/home/buntha/laravel-temp';
    if (!is_dir($customTemp)) {
        mkdir($customTemp, 0777, true);
    }
    ini_set('upload_tmp_dir', $customTemp);
    ini_set('session.save_path', $customTemp);
    putenv("TMPDIR=$customTemp");
    putenv("TEMP=$customTemp");
    putenv("TMP=$customTemp");
}
