<?php
$page_title = "Contact Us";
$page_description = "";
include_once "inc/header.html";
?>

<div class="container">

  <div class="page-header"><h1><?php echo $page_title; ?></h1></div>

  <div class="span12">
    
    <section class="row">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          
          <div class="controls">
            <input type="text" id="inputEmail" placeholder="Email">
          </div>

        </div>

        <div class="control-group">
          <label class="control-label" for="inputName">Name</label>
          <div class="controls">
            <input type="text" id="inputName" placeholder="Name">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="inputName">Name</label>
          <div class="controls">
            <textarea rows="3"></textarea>
          </div>
        </div>


        <div class="control-group">

          <div class="controls">
            <button type="button" class="btn btn-success">Send Email</button>
          </div>
        </div>
      </form>
    </section>

    <section>
      <div class="row">
        <p class="span8">
          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
        </p>
      </div>
    </section>
  </div>		

</div><!-- end container -->  

<?php include_once "inc/footer.html"; ?>

