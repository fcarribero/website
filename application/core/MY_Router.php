<?php

class MY_Router extends CI_Router {

    public function _set_request($segments = array()) {
        if (isset($segments[0]) && in_array($segments[0], array('es', 'en'))) {
            $GLOBALS['lang'] = array_shift($segments);
        }

        return parent::_set_request($segments);
    }

}
