<?php

Class LanguageLoader {

    function initialize() {
        $CI = &get_instance();
        if (!isset($GLOBALS['lang'])) {
            redirect('en', 'location', 301);
        }
        switch ($GLOBALS['lang']) {
            case 'es':
                $CI->lang->load('site', 'spanish');
                break;
            case 'en':
                $CI->lang->load('site', 'english');
                break;
        }
    }

}
