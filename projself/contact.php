<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>hello frnd</title>

  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- additional CSS -->
  <link rel="stylesheet" href="css/styles.css">



  <!--GoogleFonts-->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="navbar navbar-default sticky-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">brdhmmr</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php" style="font-family: 'Roboto', sans-serif;">Home</a></li>
      <li><a href="portfolio.php" style="font-family: 'Roboto', sans-serif;">Portfolio</a></li>
      <li><a href="contact.php" style="font-family: 'Roboto', sans-serif;">Contact</a></li>
</ul>
    <ul class="nav navbar-nav ml-auto" style="padding-left: 850px; position: auto;">
          <li><a href="http://idesovmarch.tumblr.com"><span class="fab fa-tumblr-square fa-lg" style="color:Tomato"></span></a><li>
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
  Shoot me a message and I'll get back to you<br>
  It's BYOE (bring your own email) at the moment, apologies
</h3>
</div>
</div>
<form id="contact-form" method="post" action="mailto:bdhammer2288@gmail.com" role="form">
<div class="d-flex justify-content-center align-items-center container">
  <div class="messages"></div>

  <div class="controls">

      <div class="row">
          <div class="col-md-4 col-md-offset-5">
              <div class="form-group">
                  <label for="form_name">First Name *</label>
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first Name *" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
        </div>
          <div class="row">
          <div class="col-md-4 col-md-offset-5">
              <div class="form-group">
                  <label for="form_lastname">Last Name *</label>
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last Name *" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-5">
              <div class="form-group">
                  <label for="form_email">Email *</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
              </div>
          </div>
        </div>
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
              </div>
          </div>
        </div>
          <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message" style="background-color: tomato;">
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




<footer class="container-fluid text-center">
  <p></p>
</footer>



<!--Javascript-->
<script src="js/fontawesome-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>

</body>
</html>
