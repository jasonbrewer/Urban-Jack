<?php
    $from ="xyz@gmail.com";
    if(isset($_POST) && count($_POST)){
        $name = (isset($_POST['name'])) : trim($_POST['name']) : "";
        $email = (isset($_POST['email'])) : trim($_POST['email']) : "";
        $website = (isset($_POST['website'])) : trim($_POST['website']) : "";
        $comment = (isset($_POST['comment'])) : trim($_POST['comment']) : "";

        if(!empty($email)){
            $subject = "new mail";
            $content ="A user has send email<br />
            name: $name<br />
            email: $email<br />
            website: $website<br />
            comment: $comment<br />";

            $headers  = "From: $from\r\n";
            $headers .= "Content-type: text/html\r\n"; 
            mail($email, $subject, $content, $headers); 
            header("location:thanks.html");

        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="POST" action="" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input type="text" class="input-medium" id="name" name="name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" class="input-medium" id="email" name="email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="website">Website</label>
    <div class="controls">
      <input type="text" class="input-medium" id="website" name="website">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="comment">Comment</label>
    <div class="controls">
      <textarea class="input-medium" id="comment" name="comment" rows="5"></textarea>
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-danger">Submit</button>
    <button type="reset" class="btn">Reset</button>
    <input type="hidden" name="thankyou_url" value="">
  </div>
</form>
</body>
</html>