<div>
    <h2>Dear Member</h2>
    <span>Your payment was successful, thank you for purchase.</span><br/>

    <span>Amount Paid : 
        <strong>$<?php echo $payment_amt.' '.$currency_code; ?></strong>
    </span><br/>
    <span>Payment Status : 
        <strong><?php echo $status; ?></strong>
    </span><br/>
    <a href="<?php echo base_url().'wallet/' ?>">Go to wallet<a/>
    <a href="<?php echo base_url() ?>">Login<a/>
</div>