<?php
	echo "You will get your output here:<br>";
	echo isset($_POST['uname'])?$_POST['uname']:null;
	echo '<br>';
	echo isset($_POST['uemail'])?$_POST['uemail']:null;
	echo '<br>';
	echo isset($_POST['utel'])?$_POST['utel']:null;
	echo '<br>';
	echo isset($_POST['uconmet'])?$_POST['uconmet']:null;
	echo '<br>';
	echo isset($_POST['uavaildate'])?$_POST['uavaildate']:null;
	echo '<br>';
	echo isset($_POST['ubrowsers'])?$_POST['ubrowsers']:null;
	echo '<br>';
	echo isset($_POST['uftype_1'])?$_POST['uftype_1']:null;
	echo '<br>';
	echo isset($_POST['uftype_2'])?$_POST['uftype_2']:null;
	echo '<br>';
	echo isset($_POST['uftype_3'])?$_POST['uftype_3']:null;
	echo '<br>';
	echo isset($_POST['uftype_4'])?$_POST['uftype_4']:null;
	echo '<br>';
	echo isset($_POST['umessage'])?$_POST['umessage']:null;
	echo '<br>';


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Handling in PHP</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br>
      <div>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="uname">
      </div>
      <div>
        <label for="mail">E-mail:</label><br>
        <input type="email" id="mail" name="uemail">
      </div>
      <div>
        <label for="telephone">Telephone:</label><br>
        <input type="tel" id="tel" name="utel">
      </div>
      <div>
        <label for="cmethod">Contact Preference:</label><br>
        <input type="radio" id="conmet" name="uconmet" value="mail" checked>Email&nbsp;&nbsp;
        <input type="radio" id="conmet" name="uconmet" value="tel">Telephone<br>
      </div>
      <div>
        <label for="availDate">Available Date:</label><br>
        <input type="date" id="adate" name="uavaildate">
      </div>
      <div>
        <label for="availDate">Favourite Browser:</label><br>
        <input list="browsers" name="ubrowsers">
        <datalist id="browsers">
          <option value="Chrome">
          <option value="Edge">
          <option value="Firefox">
          <option value="Opera">
          <option value="Safari">
        </datalist>
      </div>
      <div>
        <label for="feedtype">Feedback type:</label><br>
        <label for="ftype_1">Say Hello</label>
        <input type="checkbox" id="ftype_1" name="uftype_1" value="1"><br>
        <label for="ftype_2">Complain</label>
        <input type="checkbox" id="ftype_2" name="uftype_2" value="2"><br>
        <label for="ftype_3">Share Opinion</label>
        <input type="checkbox" id="ftype_3" name="uftype_3" value="3"><br>
        <label for="ftype_4">Share Joke</label>
        <input type="checkbox" id="ftype_4" name="uftype_4" value="4"><br><br>
      </div>
      <div>
        <label for="msg">Message:</label><br>
        <textarea id="msg" name="umessage" style="width:400px; height:200px"></textarea><br>
      </div>
      <div class="button">
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
