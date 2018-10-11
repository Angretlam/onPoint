<?php require('blocks/header.php'); ?>

  <div class="jumbotron" style="background-image: url('/blocks/Background_Tiles.png');">
    <h1 class="display" style="color: white;">Registration</h1>
    <h4 style="color: white;">Register your account</h4>
  </div>

    <div class="row">
      <div class="col">
        <h5>One account, multiple benefits</h5>
        <p>By registering, you get access to on line ordering, a secure report portal, and more!</p>
        <hr />
      </div> <!-- Col -->
    </div> <!-- Row -->

    <h4>Registration Form</h4>
    <form>
    <div class="row">
      <div class="col-sm form-group">
        <label for="fname">First Name</label>
        <input type="input" class="form-control" id="fname" placeholder="John" required>
      </div> <!-- Col -->
      <div class="col-sm form-group">
        <label for="lname">Last Name</label>
        <input type="input" class="form-control" id="lname" placeholder="Doe" required>
      </div> <!-- Col -->
      <div class="col-sm form-group">
        <label for="business">Business</label>
        <input type="input" class="form-control" id="business" placeholder="Acme Co" required>
      </div> <!-- Col -->
    </div> <!-- Row -->
    <div class="row">
      <div class="col-sm-4 form-group">
        <label for="phone">Phone</label>
        <input type="number" class="form-control" id="phone" placeholder="1233456789" required>
      </div>
      <div class="col-sm-8 form-group">
        <label for="Email">email</label>
        <input type="email" class="form-control" id="email" placeholder="John.Doe@Acme.co" required>
      </div> <!-- Col -->
    </div> <!-- Row -->
    <div class="row">
      <div class="col-sm form-group">
        <label for="password1">Password</label>
        <input type="password" class="form-control" id="password1"  required>
      </div> <!-- Col -->
      <div class="col-sm form-group">
        <label for="password2">Confirm Passowrd</label>
        <input type="password" class="form-control" id="password2"  required>
      </div> <!-- Col -->
      <div class="col-sm form-group">
        <label>Password Requirements</label>
        <ul>
          <li id="length" style="color: red;">8-16 Characters</li>
          <li id="capital" style="color: red;">Capital Case Letter</li>
          <li id="lower" style="color: red;">Lower Case Letter</li>
          <li id="special" style="color: red;">Special Character</li>
          <li id="number" style="color: red;">Number</li>
          <li id="matches" style="color: green;">Match</li>
        </ul>
      </div> <!-- Col -->
    </div> <!-- Row -->
    <div class="row">
      <div class="col">
        <input type="submit" class="btn btn-primary" id="submit_button" disabled></input>
      </div> <!-- Col -->
    </div> <!-- Row -->
    </form>
  <script>
    var count = 0;
    
    function verifyPassword() {
      count = 0; // Reset to ensure always updated at changes.

      // Verify passwords match
      if (document.getElementById('password1').value == document.getElementById('password2').value) {
        document.getElementById('matches').style = 'color: green;';
        count += 1;
      } else {
        document.getElementById('matches').style = 'color: red;';
      }

      // Verify password length 
      if (document.getElementById('password1').value.length >= 8 && document.getElementById('password1').value.length <= 16) {
        document.getElementById('length').style = 'color: green;';
        count += 1;
      } else {
        document.getElementById('length').style = 'color: red;';
      }

      // Verify password contains capital letter
      if (document.getElementById('password1').value.match(/[A-Z]/)) {
        document.getElementById('capital').style = 'color: green;';
        count += 1;
      } else {
        document.getElementById('capital').style = 'color: red;';
      }

      // Verify password contains lower letter
      if (document.getElementById('password1').value.match(/[a-z]/)) {
        document.getElementById('lower').style = 'color: green;';
        count += 1;
      } else {
        document.getElementById('lower').style = 'color: red;';
      }

      // Verify password contains special character 
      if (document.getElementById('password1').value.match(/\W/)) {
        document.getElementById('special').style = 'color: green;';
        count += 1;
      } else {
        document.getElementById('special').style = 'color: red;';
      }

      // Verify password contains number 
      if (document.getElementById('password1').value.match(/\d/)) {
        document.getElementById('number').style = 'color: green;';
        count += 1;
      } else {
        document.getElementById('number').style = 'color: red;';
      }
    }


    document.getElementById('fname').addEventListener('input', function() { formUpdate('Address_1');} , false);
    document.getElementById('lname').addEventListener('input', function() { formUpdate('Address_2');} , false);
    document.getElementById('business').addEventListener('input', function() { formUpdate('City');} , false);
    document.getElementById('phone').addEventListener('input', function() { formUpdate('County');} , false);
    document.getElementById('email').addEventListener('input', function() { formUpdate('Zipcode');} , false);
    document.getElementById('password1').addEventListener('input', function() { verifyPassword(); }, false);
    document.getElementById('password2').addEventListener('input', function() { verifyPassword(); }, false);
    document.getElementById('submit_button').addEventListener('click', sendRequest, false);
  </script>

<?php require('blocks/footer.php'); ?>
