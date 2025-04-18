<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$root = "http://" . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$pc_root = explode("/", $root);
$uri_js = count($pc_root) - 2;
$config['jml_opsi']             = 5;                //isi dengan pilihan opsi jawaban, HARUS <= 5
$config['uri_js']               = $uri_js;
$config['editor_style']         = "replace";        //pilihannya "inline" atau "replace";
$config['nama_aplikasi']        = "CBT";       //isi sesuai kebutuhan nama pada header
$config['versi']                = "V.1";           //isi sesuai kebutuhan nama pada header
$config['tgl']                  = "Pamekasan, 21 April 2025";
$config['tampil_nilai']         = FALSE;            // jika siswa boleh melihat hasil ujian, isikan TRUE, jika tidak FALSE, default TRUE
$config['nama_sekolah']         = "MTSS BUSTANUL ULUM TGL"; //isi sesuai kebutuhan nama sekolah
$config['nama_ujian']           = "ASSESMEN MADRASAH (AM)"; //isi sesuai kebutuhan jenis ujian
$config['nama_kepala']          = "Agus Suparmanto, S.Pd"; //isi sesuai nama kepala
$config['nip_kepala']           = "-"; //isi sesuai nama kepala























































$config['composer_autoload']    = "vendor/autoload.php";
$config['base_url']             = $root;
$config['index_page']           = '';
$config['uri_protocol']         = 'AUTO';
$config['url_suffix']           = '';
$config['language']             = 'english';
$config['charset']              = 'UTF-8';
$config['enable_hooks']         = FALSE;
$config['subclass_prefix']      = 'MY_';
$config['permitted_uri_chars']  = 'a-z 0-9~%.:_\-';
$config['allow_get_array']      = TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']   = 'c';
$config['function_trigger']     = 'm';
$config['directory_trigger']    = 'd';
$config['log_threshold']        = 0;
$config['log_date_format']      = 'Y-m-d H:i:s';
$config['cache_path']           = '';
$config['encryption_key']       = 'duodragondev';
$config['sess_cookie_name']     = 'ci_session';
$config['sess_expiration']      = 7200;
$config['sess_expire_on_close'] = FALSE;
$config['sess_encrypt_cookie']  = FALSE;
$config['sess_use_database']    = FALSE;
$config['sess_table_name']      = 'ci_sessions';
$config['sess_match_ip']        = FALSE;
$config['sess_match_useragent'] = TRUE;
$config['sess_time_to_update']  = 300;
$config['cookie_prefix']        = "";
$config['cookie_domain']        = "";
$config['cookie_path']          = "/";
$config['cookie_secure']        = FALSE;
$config['global_xss_filtering'] = FALSE;
$config['csrf_protection']      = FALSE;
$config['csrf_token_name']      = 'csrf_test_name';
$config['csrf_cookie_name']     = 'csrf_cookie_name';
$config['csrf_expire']          = 7200;
$config['compress_output']      = FALSE;
$config['time_reference']       = 'local';
$config['rewrite_short_tags']   = FALSE;
$config['proxy_ips']            = '';
/* End of file config.php */
/* Location: ./application/config/config.php */