<?php

$to = "rasmus.bjorklund@gmail.com";
$subject = "Portfolio Contact";

$user_name = check_input($_POST['user_name']);
$user_email = check_input($_POST['user_email']);
$user_message = check_input($_POST['user_message']);

utf8_encode($user_name);
utf8_encode($user_email);
utf8_encode($user_message);

$message = "

From: $user_name

Email: $user_email

Message:\n $user_message ";

mail($to,$subject,$message);


/* Redirect visitor to the thank you page */
header('Location: index.html#contact');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
}
return $data;
}

?>
