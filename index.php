 <?php 
     if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $hours=$_POST['hours'];
       $sub=$_POST['subject'];
       $animation=$_POST['animation_type'];
           
    //send email notificationn
    $to="it.vrxpert@gmail.com";
    $subject="Quote Notification";
    $message="Hello Teach them online,<br>Mr.$name has been contacted!<br>
    <strong>Name:$name</strong><br>
    <strong>Email:$email</strong><br>
    <strong>Phone:$phone</strong><br>
    <strong>Hours:$hours</strong><br>
    <strong>Subject:$subject</strong><br>
    <strong>Animation Type:$animation</strong><br>
    Thanks <br>";
      $headers.='MIME-Version: 1.0'."\r\n";
    $headers.='Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers.="From:Teach Them Online <$email>"."\r\n";
    $headers.="Reply-To: $email\r\n";
    $headers.='X-Mailer: PHP/' . phpversion().'\r\n';
    if(mail($to,$subject,$message,$headers))
    {
         echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('failed!')</script>";
    }
    }
    ?>