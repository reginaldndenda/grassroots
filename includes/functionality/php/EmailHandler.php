<?php

/**
 * Class EmailHandler
 *
 * Handles everything to do with emails, subscribers etc.
 */

new EmailHandler(1,$_POST);

class EmailHandler{

    public function __construct($_mailtype = 1, $_data){
        if(is_array($_data) && isset($_data['tsf_contact_sbmit'])){
            print $this->HandleEmail($_mailtype,$_data);
        }else{
            print $this->HandleError(1);
        }
    }

    public function HandleEmail($_mailtype,$_data){
        switch($_mailtype){
            case 1:
                //Setup MailChimp CURL to send contact email
                break;
            case 2:
                //Setup MailChimp CURL to add subscriber
                break;
        }
        return json_encode($_data);
    }

    public function HandleError($ErrorType){
        $val = [];
        switch($ErrorType){
            case 1:
                $val = array(
                    'success'=>0,
                    'error'=>'Content provided was incorrect'
                );
                break;
        }
        return json_encode($val);
    }
}