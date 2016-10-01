<?php 
     $key = 'email_pass'; 
     $single = true; 
     $email_pass = get_user_meta( $user_id, $key, $single ); 
?>
<p>Dear <?php echo $user->first_name; ?> <?php echo $user->last_name; ?>,</p>

<p>You are receiving this email because you participated in the British Firefighter Challenge 2016. If you wish to take part in this year’s competition, you need to register now to secure your place.</p>

<p>To register, all you need to do is click the link below to confirm your details and make payment.</p>

<p><b>Username:</b> <?php echo $user->display_name; ?><br/>
<b>Password:</b> <?php echo $email_pass; ?><br/>
<br/><b>Log in to your membership account here:</b><br/><a href="http://www.britishfirefighterchallenge.co.uk/login/?redirect_to=https%3A%2F%2Fwww.britishfirefighterchallenge.co.uk%2Fhow-to-enter%2F">http://www.britishfirefighterchallenge.co.uk/login/?redirect_to=https%3A%2F%2Fwww.britishfirefighterchallenge.co.uk%2Fhow-to-enter%2F</a><p>

<p>Email registration@britishfirefighterchallenge.co.uk at any time to discuss your registration.</p>

<p>Thank you for supporting this event, and good luck!</p>

<p>The British Firefighter Challenge Team</p>