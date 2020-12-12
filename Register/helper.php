<?php

function validate_input_text ($textvalue) {
    if(!empty($textvalue)){
        // trim text 
        $trim_text=trim($textvalue);
        // sanitize text
        $sanitize_text=filter_var($trim_text,FILTER_SANITIZE_STRING);
        return $sanitize_text;
    }
    return '';

}
function validate_input_email ($emailvalue) {
    if(!empty($emailvalue)){
        // trim text 
        $trim_text=trim($emailvalue);
        // sanitize text
        $sanitize_text=filter_var($trim_text,FILTER_SANITIZE_EMAIL);
        return $sanitize_text;
    }
    return '';

}

?>