<?php

/*
 * Copyright 2015 KikApp
 * @version 0.1.1
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Check if CURL is installed in your server
 *
 * @access public
 * @since 1.0
 * @return boolean
 */
 
function _is_curl_installed() {
    if  (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else {
        return false;
    }
}


function checkCurl(){
	// Ouput text to user based on test
	if (_is_curl_installed()) {
	  echo "cURL is <span style=\"color:blue\">installed</span> on this server<br>";
	} else {
	  echo "cURL is NOT <span style=\"color:red\">installed</span> on this server<br>";
	}
}


?>