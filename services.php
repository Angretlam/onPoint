<?php require('blocks/header.php'); ?>

  <div class="jumbotron">
    <h1 class="display-4">Services</h1>
    <p class="lead">We offer great services at competitive prices.</p>
  </div>

  <div class="container">
    <form action="#submit_button">
    <h4> Step 1: Enter the address </h4>
    <div class="row">
        <div class="col-sm form-group">
          <label for="Address_1">Address Line 1</label>
          <input type="input" class="form-control" id="Address_1" placeholder="123 Abc Street" required>
        </div>
    </div>
    <div class="row">
        <div class="col-sm form-group">
          <label for="Address_2">Address Line 2</label>
          <input type="input" class="form-control" id="Address_2" placeholder="Suite 101">
        </div>
    </div>
    <div class="row">
        <div class="col-sm form-group">
          <label for="City">City</label>
          <input type="input" class="form-control" id="City" placeholder="St. Paul" required>
        </div>
        <div class="col-sm form-group">
          <label for="County">County</label>
          <input type="input" class="form-control" id="County" placeholder="Ramsey" required>
        </div>
        <div class="col-sm form-group">
          <label for="Zipcode">Zipcode</label>
          <input type="number" class="form-control" id="Zipcode" placeholder="55000" required>
        </div>
    </div>

    <hr />

    <h4> Step 2: Select Services</h4>
    <div class="row">
      <div class="col-sm-4 bg-light border serviceCard" id="service1" onClick="selector('service1')">
        <h5>30 Year Title Services</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-white border serviceCard" id="service2" onClick="selector('service2')">
        <h5>Specialized Title Searches</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-light border serviceCard" id="service3" onClick="selector('service3')">
        <h5>Current Owner Searches</h5>
        <p>(Good Warranty Deed Forward)</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 bg-white border serviceCard" id="service4" onClick="selector('service4')">
        <h5>Two Owner Searches</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-light border serviceCard" id="service5" onClick="selector('service5')">
        <h5>PMM Searches</h5>
        <p>(Puchase Money Forward)</p>
      </div>
      <div class="col-sm-4 bg-white border serviceCard" id="service6" onClick="selector('service6')">
        <h5>Deed Reports</h5>
        <p>(Warranted Deed Forward)</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 bg-light border serviceCard" id="service7" onClick="selector('service7')">
        <h5>Mortgage Searches</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-white border serviceCard" id="service8" onClick="selector('service8')">
        <h5>Lien Searches</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-light border serviceCard" id="service9" onClick="selector('service9')">
        <h5>Foreclosure Searches</h5>
        <p></p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 bg-white border serviceCard" id="service10" onClick="selector('service10')">
        <h5>UCC County Level Searches</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-light border serviceCard" id="service11" onClick="selector('service11')">
        <h5>Judgement Searches</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-white border serviceCard" id="service12" onClick="selector('service12')">
        <h5>Plat Searches</h5>
        <p></p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 bg-light border serviceCard" id="service13" onClick="selector('service13')">
        <h5>Recording Services</h5>
        <p></p>
      </div>
      <div class="col-sm-4 bg-white border serviceCard" id="service14" onClick="selector('service14')">
        <h5>Document Retrieval</h5>
        <p></p>
      </div>
    </div>
    
    <hr />
    <h4> Step 3: Provide Contact Information </h4>
    <div class="row">
      <div class="col-sm form-group">
        <label for="Name">Name</label>
        <input type="input" class="form-control" id="Name" placeholder="John Doe" required>
      </div>
      <div class="col-sm form-group">
        <label for="Business">Business</label>
        <input type="input" class="form-control" id="Business" placeholder="Acme Co" required>
      </div>
      <div class="col-sm form-group">
        <label for="Phone">Phone</label>
        <input type="number" class="form-control" id="Phone" placeholder="1233456789" required>
      </div>
    </div>
    <div class="row">
      <div class="col-sm form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="Email" placeholder="John.Doe@Acme.co" required>
      </div>
    </div>

    <hr />
    <h4> Step 4: Review Selections</h4>
    <div class="row">
      <div class="col-sm bg-light border">
        <h5>Address:</h5>
        <p>
          <span id="r_Address_1"></span><br />
          <span id="r_Address_2"></span><br />
          <span id="r_City"></span>, <span id="r_County"></span> <span id="r_Zipcode"></span><br />
        </p>
      </div>
      <div class="col-sm bg-light border">
        <h5>Services:</h5>
        <span id="r_services"><span>
      </div>
      <div class="col-sm bg-light border">
        <h5>Contact Info:</h5>
        <p>
          <span id="r_Name"></span><br />
          <span id="r_Business"></span><br />
          <span id="r_Phone"></span><br />
          <span id="r_Email"></span>
        </p>
      </div>
    </div>
    
    <hr />
    <h4> Step 5: Submit</h4>
    <div class="row">
      <div class="col align-self-center" id="submitArea">
        <input type="submit" class="btn btn-primary" id="submit_button"></input>
      </div>
    </div>
  </form>
  <script>
    function selector(id) {
      var service = document.getElementById(id);
      if (!service.className.match(/bg-info/)) {
        service.className='col-sm-4 bg-info border serviceCard';
      } else {
        if ((id.substr(7) % 2) == 1) {
          service.className='col-sm-4 bg-light border serviceCard';
        } else {
          service.className='col-sm-4 bg-white border serviceCard';
        }
      }

      var selectedSvcs = document.getElementsByClassName('col-sm-4 bg-info border serviceCard'); 
      var services = '';
      for (var i = 0; i<selectedSvcs.length; i++){
        services += selectedSvcs[i].innerHTML.match(/<h5.*<\/h5?/) + '<br />';
      }
  
      services = services.replace(/h5/g, 'h6');
      document.getElementById('r_services').innerHTML = services;
    }

    function formUpdate(id) {
      var inputBox = document.getElementById(id).value;
      var rBox = 'r_' + id;
      document.getElementById(rBox).innerHTML = inputBox;
    }

    function sendRequest() {
      var connect = new XMLHttpRequest();
      var dataGet = 'Address_1=' + document.getElementById('Address_1').value;
      var dataGet = dataGet + '&Address_2=' + document.getElementById('Address_2').value;
      var dataGet = dataGet + '&City=' + document.getElementById('City').value;
      var dataGet = dataGet + '&County=' + document.getElementById('County').value;
      var dataGet = dataGet + '&Zipcode=' + document.getElementById('Zipcode').value;
      var dataGet = dataGet + '&Name=' + document.getElementById('Name').value;
      var dataGet = dataGet + '&Business=' + document.getElementById('Business').value;
      var dataGet = dataGet + '&Phone=' + document.getElementById('Phone').value;
      var dataGet = dataGet + '&Email=' + document.getElementById('Email').value;
      
      var selectedSvcs = document.getElementsByClassName('col-sm-4 bg-info border serviceCard'); 
      var services = '';
      for (var i = 0; i<selectedSvcs.length; i++){
        services += selectedSvcs[i].innerHTML.match(/<h5.*<\/h5?/) + '<br />';
      }
      var dataGet = dataGet + '&Services=' + services;
  
      services = services.replace(/h5/g, 'h6');

      connect.open('GET', '/email/email.php?' + dataGet, true);
      connect.send();

      connect.onload = function() {
        if ( connect.status === 200) {
          if (connect.responseText == 1){
            document.getElementById('submitArea').innerHTML = 'Your form was submitted! We will follow up with you as soon as possible.';
          } else {
            document.getElementById('submitArea').innerHTML = 'We apologize for the inconvenience, but are unable to send your information. Please call us at ... ... ....';
          }
        } else {
          document.getElementById('submitArea').innerHTML = 'Unable to submit the form. Please call us at ... to get started today.';
        }
      }
    }

    document.getElementById('Address_1').addEventListener('input', function() { formUpdate('Address_1');} , false);
    document.getElementById('Address_2').addEventListener('input', function() { formUpdate('Address_2');} , false);
    document.getElementById('City').addEventListener('input', function() { formUpdate('City');} , false);
    document.getElementById('County').addEventListener('input', function() { formUpdate('County');} , false);
    document.getElementById('Zipcode').addEventListener('input', function() { formUpdate('Zipcode');} , false);
    document.getElementById('Email').addEventListener('input', function() { formUpdate('Email');} , false);
    document.getElementById('Business').addEventListener('input', function() { formUpdate('Business');} , false);
    document.getElementById('Phone').addEventListener('input', function() { formUpdate('Phone');} , false);
    document.getElementById('Name').addEventListener('input', function() { formUpdate('Name');} , false);
    document.getElementById('submit_button').addEventListener('click', sendRequest, false);

  </script>

<?php require('blocks/footer.php'); ?>
