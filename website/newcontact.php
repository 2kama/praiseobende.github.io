<?php



	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];



	$from = "website";
	$to = "yourmail@gmail.com";


	$header = "From: Website \r\n";
               $header .= "MIME-Version: 1.0\r\n";
               $header .= "Content-type: text/html\r\n";


         $subject = "Message from Website Form";


          $message = $name . "<br>" . $email . "<br>" . $comment;


        $send = mail($to, $subject, $message, $header);



        if($send) {

        		$result = array('Error' => '200', 'ErrorMsg' => 'Message was sent');
                              header('Content-Type: application/json');
                              echo json_encode($result);
                              die();
                              echo $result;

        }

        else {

        		$result = array('Error' => '600', 'ErrorMsg' => 'Logging in');
                              header('Content-Type: application/json');
                              echo json_encode($result);
                              die();
                              echo $result;
        }




?>
