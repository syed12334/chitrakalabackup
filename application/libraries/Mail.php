<?php defined('BASEPATH') OR exit('No direct script access allowed');
include('sparkpostphpcurl-master/sparkpost-api.php');
class Mail {

    function sendMail($to,$message,$subject){
        $url = SP_URL;
        $key = SP_KEY;
        $mail = new sparkPostApi($url,$key);
        $mail-> from(array('email' => SP_EMAIL,'name' => SP_NAME));
        $mail-> subject($subject);
        $mail-> html($message);
        $mail-> setTo(array($to));
        $mail->setReplyTo(SP_EMAIL);
        $res = $mail->send();
        $mail->close();
    }
     function sendMailto($to,$message,$subject){
        $url = SP_URL;
        $key = SP_KEY;
        $mail = new sparkPostApi($url,$key);
        $mail-> from(array('email' => SP_EMAIL,'name' => SP_NAME));
        $mail-> subject($subject);
        $mail-> html($message);
        $mail-> setTo($to);
        $mail->setReplyTo(SP_EMAIL);
        $res = $mail->send();
        $mail->close();
    }

    function send_sparkpost_attach($body, $toemail, $subject, $pdfFilePath='', $pdf_name=''){
        $url = SP_URL;
        $key = SP_KEY;
        $mail = new sparkPostApi($url,$key);        
        $mail-> from(array('email' => SP_EMAIL,'name' => SP_NAME));
        $mail-> subject($subject);
        $mail-> html($body);
        $mail-> setTo($toemail);
        $mail->setReplyTo(SP_EMAIL);
        if($pdfFilePath != ""){
            $filePath = $pdfFilePath;
            $fileName = $pdf_name;
            $fileType = mime_content_type($filePath.$fileName);
            $fileData = base64_encode(file_get_contents($filePath.$fileName));
            $arr = array();
            $arr[] = array('name' => $fileName, 'type' => $fileType, 'data' => $fileData);
            $mail->attachments($arr);
        }
        try{
            $res = $mail->send();
            //print_r($res);
            //print "arraytextMessage Sent";
        }catch (Exception $e) {
           //print $e;
        }        
        $mail->close();
        //return $res;
    }

     public function send_sparkpost_email_attach($body, $toemail, $subject, $filearray=array(), $fromname="", $from_email="")
    {
        
     
        $mail = new sparkPostApi(SP_URL,SP_KEY);
        
        $mail-> from(array('email' => SP_EMAIL,'name' => "ayush"));
        $mail-> subject($subject);
        $mail-> html($body);
        
        $mail-> setTo($toemail);
        $mail->setReplyTo(SP_EMAIL);
        
        if(count($filearray))
        {
            $mail->attachments($filearray);
        }
       // echo "<pre>";print_r($filearray);exit;
        try
        {
            //set_time_limit(40);
            $res = $mail->send();
            echo "send";
        }
       
        catch (Exception $e)
        {
             print $e;
        }
        $mail->close();
    }

}