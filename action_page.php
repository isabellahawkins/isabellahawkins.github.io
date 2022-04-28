<? php
  if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $mailFrom = $_POST['Email'];
    $message = $_POST['Message'];
    
    $mailTo = "isabellamhawkins@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$Name.".\n\n".$Message;
    
    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
  
  >
