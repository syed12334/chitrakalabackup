<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css';?>">
<link rel="stylesheet" href="<?= base_url().'assets/css/style.css';?>">
</head>
<body>
    

<div class="container">
     
        <div class="success-page">
            <div class="text-center mb-5 mt-5"><a href="<?= base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" width="280px"></a></div>
            <?php

            if (is_array($paymentlog)) {

            ?>



                <h3> <span class="check"><i class="fas fa-check-circle"></i></span> Your order has been placed successfully!</h3>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Paid Amount </th>
                            <td><i class="fa fa-rupee-sign"></i><?php echo number_format($paymentlog[0]->amount); ?></td>
                        </tr>

                        <tr>
                            <th>Paid through </th>
                            <td> <?php echo "Online"; ?></td>
                        </tr>
                        <tr>
                            <th>Payment ID </th>
                            <td> <?php echo $paymentlog[0]->easebuzzid; ?></td>
                        </tr>

                        <?php /*  <tr>
                <td>Hash </td>
                <td>  <?php echo $paymentlog[0]->ehash;?></td>
            </tr> */ ?>
                    </tbody>
                </table>




                <div class="well">


                    <p><b>For more information, you can always</b></p>

                    <p>
                        Reach us at 080 22261816
                        <br>
                        Email at info@chitrakala.com
                    </p>
                </div>
                <br>
                <div class="text-center"><a href="<?= base_url(); ?>" class="btn btn-info"><i class="fas fa-long-arrow-alt-left"></i> Home</a> </div>
            <?php } ?>
        </div>
   
</div>


</body>
</html>