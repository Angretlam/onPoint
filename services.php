<?php require('blocks/header.php'); ?>

  <div class="jumbotron">
    <h1 class="display-4">Services</h1>
    <p class="lead">We offer great services at competitive prices.</p>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-sm form-group">
          <label for="Address_1">Address Line 1</label>
          <input type="input" class="form-control" id="Address_1" placeholder="123 Abc Street">
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
          <input type="input" class="form-control" id="City" placeholder="St. Paul">
        </div>
        <div class="col-sm form-group">
          <label for="County">County</label>
          <input type="input" class="form-control" id="County" placeholder="Ramsey">
        </div>
        <div class="col-sm form-group">
          <label for="Zipcode">Zipcode</label>
          <input type="number" class="form-control" id="Zipcode" placeholder="55000">
        </div>
    </div>

    <hr />

    <div class="row">
      <div class="col-sm bg-light border serviceCard" id="service1" onClick="selector('service1')">
        <h5>Service 1</h5>
        <p>Description of said service.</p>
      </div>
      <div class="col-sm bg-white border serviceCard" id="service2" onClick="selector('service2')">
        <h5>Service 2</h5>
        <p>Description of another service.</p>
      </div>
      <div class="col-sm bg-light border serviceCard" id="service3" onClick="selector('service3')">
        <h5>Service 3</h5>
        <p>Yet another description of a service.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm bg-white border serviceCard" id="service4" onClick="selector('service4')">
        <h5>Service 4</h5>
        <p>Description of said service.</p>
      </div>
      <div class="col-sm bg-light border serviceCard" id="service5" onClick="selector('service5')">
        <h5>Service 5</h5>
        <p>Description of another service.</p>
      </div>
      <div class="col-sm bg-white border serviceCard" id="service6" onClick="selector('service6')">
        <h5>Service 6</h5>
        <p>Yet another description of a service.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm bg-light border serviceCard" id="service7" onClick="selector('service7')">
        <h5>Service 7</h5>
        <p>Description of said service.</p>
      </div>
      <div class="col-sm bg-white border serviceCard" id="service8" onClick="selector('service8')">
        <h5>Service 8</h5>
        <p>Description of another service.</p>
      </div>
      <div class="col-sm bg-light border serviceCard" id="service9" onClick="selector('service9')">
        <h5>Service 9</h5>
        <p>Yet another description of a service.</p>
      </div>
    </div>

  <script>
    function selector(id) {
      var service = document.getElementById(id);
      if (!service.className.match(/bg-info/)) {
        service.className='col-sm bg-info border serviceCard';
      } else {
        if ((id.substr(7) % 2) == 1) {
          service.className='col-sm bg-light border serviceCard';
        } else {
          service.className='col-sm bg-white border serviceCard';
        }
      }     
    }
  </script>

<?php require('blocks/footer.php'); ?>
