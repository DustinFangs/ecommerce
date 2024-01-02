<?php session_start();
  $url = 'newpass.php?email='.$_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funda of Web IT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="card mt-5 ">
    <div class="card-header">
      <h4>Security Question to Secure Your account</h4>
    </div>
    <div class="card-body">
      <form action="login1.php" method="POST">
        <div class="from-group mb-3">
          <label for="">Security Question</label>
          <select name="question" required>
              <option value="" disabled selected>Select Security Question</option>
              <option>Who is your bestfriend?</option>
              <option>What is the name of your dog?</option>
              <option>Who is your favorite teacher?</option>
              <option>What is your favorite food?</option>
              <option>Who is your mother?</option>
            </select>
        </div>

        <div class="from-group mb-3">
          <label for="">Answer</label>
          <input type="text" name="answer" class="form-control" />
        </div>
</form> 
        <div class="from-group mb-3">
          <form action="<?php echo $url ?>" method="post">
            <button type="submit" name="save_select" class="btn btn-primary">Save Selectbox</button>
          </form>
        </div>
    </div>

  </div>
  </div>
</body>

</html>