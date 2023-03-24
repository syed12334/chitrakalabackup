<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @page Section1 {
            size: 8.27in 11.69in;
            margin: .5in .5in .5in .5in;
            mso-header-margin: .5in;
            mso-footer-margin: .5in;
            mso-paper-source: 0;
        }

        div.Section1 {
            border: 2px solid #000;
            page-break-after: always;
            page-break-inside: avoid;
            height: 1150px;
        }
    </style>
</head>

<body>

    <div class="Section1">
        <table cellpadding="0" cellspacing="0" border="0" width="100%"
            style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td style="padding: 15px;" align="center">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="text-align: center;">
                        <tr>
                            <td style="width: 150px; text-align: left;">
                                <img src="<?= base_url(); ?>assets/images/pdflogo.png" />
                            </td>
                            <td>
                                <h1 style="font-size: 22px; margin: 0;">Karnataka Chitrakala Parishath</h1>
                                <p style="margin: 0;">Kumarakrupa Road, Bengaluru - 560001</p>
                                <p style="margin: 5px 0;"><b>Phone : <?= $profile[0]->mphone; ?></b><br> Email:<?= $profile[0]->emailid; ?></p>
                                <h2 style="font-size: 25px; margin: 0;"><?= date('F d, Y',strtotime($profile[0]->created_at));?></h2>
                            </td>
                            <td style="width: 150px;">
                                <div style="display: inline-table; width: 100px; height:100px; border:1px solid #000;overflow: hidden;">
                                    <?php
                                        if(!empty($profile[0]->photo)) {
                                            ?>
                                             <img src="<?= base_url().$profile[0]->photo; ?>" style="width: 15%;" />
                                            <?php
                                        }
                                    ?>
                                   
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="text-align: center;">
                        <tr>
                            <td style="width: 150px;"></td>
                            <td><img src="<?= base_url();?>assets/images/ckp.png" alt=""></td>
                            <td style="width: 150px;">
                                <p style="font-size: 11px; margin: 0;">QR code for payment</p><img src="<?= base_url(); ?>assets/images/qr.png" />
                            </td>
                        </tr>
                    </table>



                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="width: 70px; text-align: right;  padding: 3px; height: 22px;">Name</td>
                            <td style=" border:1px solid #000; padding:3px; height: 22px;"><?= $profile[0]->name; ?></td>
                        </tr>

                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="width: 70px; text-align: right; padding: 3px; height: 22px;">Age</td>
                            <td style="width: 250px; border:1px solid #000; padding:3px; height: 22px;"><?= $profile[0]->age; ?></td>
                            <td style="width: 70px; text-align: right;  padding: 3px; height: 22px;">Email</td>
                            <td style="border:1px solid #000; padding:2px; height: 22px;"><?= $profile[0]->emailid; ?></td>
                        </tr>

                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="width: 70px; text-align: right; padding: 3px; height: 22px;">Address</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;">#<?= $profile[0]->address; ?></td>
                        </tr>


                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="width: 70px; text-align: right; padding: 3px; height: 22px;">&nbsp;</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;">Benglore - 560010</td>
                        </tr>


                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="width: 70px; text-align: right; padding: 3px; height: 22px;">Mobile</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= $profile[0]->mphone; ?></td>

                            <td style="width: 90px; text-align: right; padding:3px; height: 22px;">State</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= ucfirst($profile[0]->state); ?></td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="width: 70px; text-align: right; padding:3px; height: 22px;">Country</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= ucfirst($profile[0]->country); ?></td>

                            <td style="width: 90px; text-align: right; padding:3px; height: 22px;">GST No.</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= ucfirst($profile[0]->gstno); ?></td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin: 15px 0;">
                        <tr>
                            <td>The Participants who do not have GST Registration have to give a declaration to that
                                effect, owning the responsibility.</td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 15px;">
                        <tr>
                            <td style="border: 1px solid #000; padding:15px;"><b>Registration Fee Details :</b><br> <br>
                                
                                Individual Artists : <b>Rs.500/-</b> <?php if($profile[0]->feedetails ==1) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                }else {
                                    ?>
                                    <img src="<?= base_url().'assets/images/uncheck.png';?>" style='width:15px;'>
                                    <?php
                                } ?> &nbsp;&nbsp;&nbsp;
                                Institutes : <b>Rs.1000/- </b><?php if($profile[0]->feedetails ==2) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                }else {
                                    ?>
                                    <img src="<?= base_url().'assets/images/uncheck.png';?>" style='width:15px;'>
                                    <?php
                                } ?>   &nbsp;&nbsp;&nbsp;
                                NRI/Foreign Artists Rs. <b>2000/-</b> <?php if($profile[0]->feedetails ==3) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                }else {
                                    ?>
                                    <img src="<?= base_url().'assets/images/uncheck.png';?>" style='width:15px;'>
                                    <?php
                                } ?> </td>
                        </tr>
                    </table>



                     
 

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin: 15px 0;">
                        <tr>
                            <td>
                                Entries are open for the following categories: Painting, Sculpture, Ceramic, Graphic and
                                Mixed Media.</td>
                        </tr>
                    </table>



                   <table cellpadding="0" cellspacing="0" border="0" width="100%"
                        style="margin-bottom: 5px; font-size: 13px;">
                        <tr>
                            <td style="width: 28%;">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%"
                                    style="margin-bottom: 5px;">
                                    <tr>
                                        <td style="padding: 3px; margin-bottom: 5px; height: 22px;">Prfossional Artist
                                        </td>
                                        <td style="  padding:3px; width: 50px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==1) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 5px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px;">Art Inst itutions</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==2) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 5px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px;">Student</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==3) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                </table>

                            </td>


                            <td style="width: 28%;">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%"
                                    style="margin-bottom: 5px;">
                                    <tr>
                                        <td style="padding: 3px;" align="right">Traditional Artist</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==4) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 5px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px;" align="right">NRI/Foreign Artist</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==5) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 5px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px;" align="right">Differently abled</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==6) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                </table>

                            </td>


                            <td style="width: 28%;">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%"
                                    style="margin-bottom: 5px;">
                                    <tr>
                                        <td style="padding: 3px;" align="right">Senior Citizens</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==7) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 5px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px;" align="right">Hobby / Self-taught Artist</td>
                                        <td style="padding:3px; width: 50px; height: 22px;"><?php if(count($profileentry) >0) {foreach ($profileentry as $key => $value) {
                                            ?>
                                                <?php if($value->pentry ==8) {
                                    ?>
                                    <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                    <?php
                                } ?> 
                                            <?php
                                        }}else {?> <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'><?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 5px;"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px;" colspan="2">&nbsp;</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>


                    <table cellpadding="0" cellspacing="0" border="0" width="100%"
                        style="margin-bottom: 5px; font-size: 13px;">
                        <tr>
                            <td>
                                I agree to abide by the rules and regulations of the Chitra Santhe. as prescribed by
                                Karnataka Chitrakala Parishath
                            </td>
                        </tr>
                    </table>


                </td>
            </tr>
        </table>
    </div>





    <div class="Section1">
        <table cellpadding="0" cellspacing="0" border="0" width="100%"
            style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td style="padding:45px 15px 15px 15px;" align="center">


                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 5px;">
                        <tr>
                            <td style="padding:10px 3px;">Dear Sir/Madam</td>
                        </tr>

                        <tr>
                            <td style="text-align: center;  padding:10px 3px; font-size: 17px;">Sub: Submission of GST
                                Registration Number/Declaration</td>
                        </tr>

                        <tr>
                            <td style="padding:10px 3px;">As required by statutory formalities, please provide details
                                as under:</td>
                        </tr>
                        <tr>
                            <td style="padding:10px 3px;">1. GST No. of my entity</td>
                        </tr>
                        <tr>
                            <td style="padding:10px 3px;">Or</td>
                        </tr>
                        <tr>
                            <td style="padding:10px 3px;">2. Provisional / Casual GST Registration number of my entity
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 3px;">Or</td>
                        </tr>
                        <tr>
                            <td style="padding:10px 3px;">3. I/We hereby declare that, I / Our entity / company is not
                                liable to register under Section 22 or Section 24 of the GST ACT 2017.</td>
                        </tr>

                        <tr>
                            <td style="padding:10px 3px;">I/We hereby confirm that, the above information is true and
                                correct.</td>
                        </tr>

                        <!-- <tr>
                            <td style="padding:10px 3px;">
                                <div
                                    style="float:right; width: 280px;height: 75px;border: 1px solid #000;text-align: center;line-height: 123px;">
                                    Signature</div>
                            </td>
                        </tr> -->



                    </table>





                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 15px; margin-top:45px ;">
                        <tr>
                            <td style="width: 100px; text-align: left;  padding: 3px; height: 22px;">Name</td>
                            <td style=" border:1px solid #000; padding:3px; height: 22px;"><?= ucfirst($profile[0]->name); ?></td>
                        </tr>

                    </table>



                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 15px;">
                        <tr>
                            <td style="width: 100px; text-align: left; padding: 3px; height: 22px;">Address</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= $profile[0]->address; ?></td>
                        </tr>


                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 15px;">
                        <tr>
                            <td style="width: 100px; text-align: left; padding: 3px; height: 22px;">&nbsp;</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;">Benglore - 560010</td>
                        </tr>


                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 15px;">
                        <tr>
                            <td style="width: 100px; text-align: left; padding: 3px; height: 22px;">Contact No.</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= $profile[0]->mphone; ?></td>


                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 15px;">
                        <tr>

                            <td style="width: 100px; text-align: left; padding:3px; height: 22px;">Place</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= ucfirst($profile[0]->place); ?></td>

                            <td style="width: 100px; text-align: right; padding:3px; height: 22px;">Date</td>
                            <td style="border:1px solid #000; padding:3px; height: 22px;"><?= date('d-m-Y',strtotime($profile[0]->created_at)); ?></td>

                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin: 55px 0;">
                        <tr>

                            <td style="width:300px; padding:3px; height: 22px;">Please tick on the box If GST not
                                applicable</td>
                            <td style="width: 50px;  padding:3px; height: 22px;"><?php 
                                    if(!empty($profile[0]->gstno)) {
                                        ?>
                                        <img src="<?= base_url().'assets/images/check.png';?>" style='width:15px;'>
                                        <?php
                                    }else {
                                        ?>
                                        <img src="<?= base_url().'assets/images/uncheck.png';?>" style='width:15px;'>
                                        <?php
                                    }

                            ?></td>
                            <td style="padding:3px; height: 22px;"></td>

                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:210px 0 25px 0;">
                        <tr>
                            <td style="padding:3px;">For any further information contact Helpline No. +91 90363 30928
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:3px;">Timings ( Monday to Friday 10.30 am to 5.00 pm )</td>
                        </tr>
                    </table>










                </td>
            </tr>
        </table>
    </div>








    <div class="Section1">
        <table cellpadding="0" cellspacing="0" border="0" width="100%"
            style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td style="padding: 15px;" align="center">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="text-align: center;">
                        <tr>
                            <td style="width: 150px; text-align: left;">
                                <img src="<?= base_url(); ?>assets/images/pdflogo.png" />
                            </td>
                            <td>
                                <h1 style="font-size: 22px; margin:0 0 5px 0;">KARNATAKA CHITRAKALA PARISHATH</h1>

                                <h2 style="font-size: 25px; margin: 0; line-height: 35px;"><span
                                        style="font-weight: 400;">CHITRA SANTHE - 20</span> <br> SUNDAY 8th JANUARY 2023
                                </h2>
                            </td>
                            <td style="width: 150px;">
                                <img src="<?= base_url();?>assets/images/ckp1.png" alt="">
                            </td>
                        </tr>
                    </table>


                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-top: 10px;">
                        <tr>
                            <td align="center" style="line-height: 25px;">
                                Karnataka Chitrakala Parishath Is Celebrating 62 YEARS In The Service Of Art And
                                Culture.<br>
                                <b>TERMS, CONDITIONS & GUIDELINES FOR PARTICINTION IN THE 201h EDITION OF
                                    CHITRASANTHE</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000;">
                                <ul style="line-height: 28px;">
                                    <li> ARTISTS NEED TO DOWNLOAD THE FORM FROM website www.chitrakalaparishath.org
                                        AND MAIL IT TO chitrasanthe@chitrakalaparishath.org</li>
                                    <li> REGISTRATION (NON-REFUNDABLE) FEE TO BE PAID THROUGH UP/SCANNING
                                        QR CODE AVAILABLE ON www.chitrakalaparishath.orgo/onApps.com</li>
                                    <li>ONLINE-PAYMENT TRANSACTION NUMBER SHOULD BE ENTERED IN APPLICATION FORM AT
                                        APPROPRIATE PLACE. APPLICATION WILL BE CONSIDERED ONLY ON CONFIRMATION OF
                                        PAYMENT</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul style="line-height: 28px;">
                                    <li> Artists should send their own artworks only as digital images, submission of
                                        re-copy or copy of others work will lead io disqualification of the participant.
                                    </li>
                                    <li> THE LAST DATE FOR SUBMISSION OF THE APPLICATION ALONG WITH ARTWORK
                                        PHOTOS AND REGISTRATION FEE WILL BE 10th DECEMBER 2022.</li>
                                    <li> Applicationg should be sent with necessary attachments as separate files.</li>
                                    <li> If the event is cancelled for reasons beyond the control of the Management
                                        including but not limited to Acts of God, explosion, adverse weather conditions,
                                        floods, earthquake, hostilities, strikes, work stoppage, slowdowns, industrial
                                        disputes, accidents, riots, civil disturbance, acts of Government, Chitrakala
                                        Parishath shall not be held liable.</li>
                                    <li> The applicant shall not hold Chitrakala Parishath liable or move legally
                                        against
                                        Chitrakala Parishath for any happenings which are beyond the control of the
                                        Chitrakala Parishath</li>
                                    <li> Chitra Santhe is purely reserved for Individual Artist. Art Institutes and Art
                                        Groups. Art Galleries of any kind will not be entertained.</li>
                                    <li>Chitra Santhe is open to all artists 18 years and older.</li>
                                    <li> Selected Artists will be intimated via SMS or mail and also splayed on our
                                        website
                                        www.chitrasanthe.org</li>
                                    <li> The decision of SELECTION COMMITTEE is Final regarding selection of Artists/Art
                                        Works.</li>
                                    <li> In the event the Participant is not selected by the Selection Committee, the
                                        Application fee paid by the Participant will not be refunded.</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px 0;">
                                <b>NOTE:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>GUIDELINES:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul style="line-height: 20px;">
                                    <li>Address, Phone Number and Email are mandatory</li>
                                    <li>Artists' Passport size Photo (High resolution)</li>
                                    <li>Pictures of Artworks, maximum 10.nos.</li>
                                    <li>Each artwork should be maximum 1 MB (Megabyte)</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>



    <div class="Section1">
        <table cellpadding="0" cellspacing="0" border="0" width="100%"
            style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td style="padding: 15px; font-size: 18px; font-weight: 600;" colspan="2">SALE OF THE ARTWORKS
                </td>
            </tr>
            <tr>
                <td style="padding: 0 15px;" colspan="2">
                    <ul style="line-height: 25px;">
                        <li> Karnataka Chitrakala Parishath is organizing the Chitra Santhe to promote artists and help
                            the art
                            community.</li>
                        <li> During the Chitra Santhe, Karnataka Chitrakala Parishath does not sell or work as a
                            mediator for buying and selling of any artwork or take any Commission in this regard.</li>
                        <li> Artists are solely responsible for the sale of their artworks.</li>
                        <li> Artists are sole copyright holders for their artworks.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 15px;" colspan="2">(For Divyangjan artists registration fee will not be collected on furnishing
                    the Government
                    Certificate/ ID Proof as Divyangjan. Applications should be sent only through email along with the
                    application form. Email-chitrasanthe@chitrakalaparishath.org)..</td>
            </tr>
            <tr>
                <td style="padding:25px 15px 20px 15px; text-align: center; font-size: 17px; font-weight: 600;" colspan="2">DECLARATION</td>
            </tr>
            <tr>
                <td style="padding: 15px; line-height: 20px;" colspan="2">
                    I hereby declare that I am a practicing artist.<br>
                    I am DECLARING that my artworks submitted for 20th Chitra Santhe, are done/ created by me.<br>
                    They are not a copy or recopy artworks. I have read the terms and conditions and have agreed
                    wholeheartedly to participate and abide by the rules of Karnataka Chitrakala Parishath, Bengaluru
                </td>
            </tr>
            <!-- <tr>
                <td style="padding:10px 15px;" colspan="2">
                    <div
                        style="float:right; width: 280px;height: 75px;border: 1px solid #000;text-align: center;line-height: 123px;">
                        Signature</div>
                </td>
            </tr> -->
            <tr>
                <td style="padding: 15px; width: 50%;"><b>DATE :</b><?= date('d-m-Y',strtotime($profile[0]->created_at));?></td>
                <td style="padding: 15px; width: 50%;"><b>NAME :</b> <?= ucfirst($profile[0]->name);?></td>
            </tr>
            <tr>
                <td style="padding: 15px; width: 50%;"><b>PALCE :</b> <?= ucfirst($profile[0]->place);?></td>
                <td style="padding: 15px; width: 50%;"></td>
            </tr>
        </table>
    </div>




</body>

</html>