<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>
  <meta name="description" content="other">
  <meta name="author" content="SitePoint">
  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- additional CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <!--GoogleFonts-->
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Raleway" rel="stylesheet">



</head>


<header class="container-fluid">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-left" href="index.php"><img src="assets/logo/logo.png" width="50" height="50"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li class="active"><a href="contact.php">Contact</a></li>
    </ul>
    <div>
    <ul class="nav navbar-nav navbar-right" >
      <li><a href="http://idesovmarch.tumblr.com"><span class="fab fa-tumblr-square fa-lg" style="color:Tomato"></span></a></li>
        <li><a href="http://www.instagram.com/idesovmarch"><span class="fab fa-instagram fa-lg" style="color:Tomato"></span></a></li>
        <li><a href="http://www.behance.net/idesovmarch"><span class="fab fa-behance fa-lg" style="color:Tomato"></span></a></li>
    </ul>
  </div>
</div>
</nav>
</header>

<div class="jumbotron">
  <div class="container text-center">
<h3 class="cntctMsg">
  Shoot me a message and I'll get back to you
</h3>

<form id="contact-form" method="post" action="mailto:bdhammer2288@gmail.com" role="form">

  <div class="messages"></div>

  <div class="controls">

      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label for="form_name">Firstname *</label>
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="form_lastname">Lastname *</label>
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label for="form_email">Email *</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
              </div>
          </div>
          <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <p class="text-muted"><strong>*</strong> These fields are required.</p>
          </div>
      </div>
  </div>

</form>



</div>
</div>


<footer class="container-fluid text-center">
  <p></p>
</footer>
</div>


<!--Javascript-->
<script src="js/fontawesome-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>

</body>
</html>
