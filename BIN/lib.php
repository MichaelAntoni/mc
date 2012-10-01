<?php
$page_title = "OTOB";
$page_description = "Home Page";
?>
<?php include_once "inc/header.html"; ?>
<div class="container gridon">
  <div class="page-header">
            <h1>On Top of Beyond</h1>
          </div>

<div class="span9">
  <section id="thumbnails">
    <div class="page-header">
      <h1>Thumbnails <small>Grids of images, videos, text, and more</small></h1>
    </div>

    <h2>Default thumbnails</h2>
    <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>
    <div class="row-fluid">
      <ul class="thumbnails">
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
          </a>
        </li>
      </ul>
    </div>

    <h2>Highly customizable</h2>
    <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
    <div class="row-fluid">
      <ul class="thumbnails">
        <li class="span4">
          <div class="thumbnail">
            <img src="http://placehold.it/300x200" alt="">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
            </div>
          </div>
        </li>
        <li class="span4">
          <div class="thumbnail">
            <img src="http://placehold.it/300x200" alt="">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
            </div>
          </div>
        </li>
        <li class="span4">
          <div class="thumbnail">
            <img src="http://placehold.it/300x200" alt="">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
            </div>
          </div>
        </li>
      </ul>
    </div>


    <h2>More examples</h2>
    <p>Explore all your options with the various grid classes available to you. You can also mix and match different sizes.</p>
    <ul class="thumbnails">
      <li class="span4">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/360x270" alt="">
        </a>
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/260x120" alt="">
        </a>
      </li>
      <li class="span2">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/160x120" alt="">
        </a>
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/260x120" alt="">
        </a>
      </li>
      <li class="span2">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/160x120" alt="">
        </a>
      </li>
    </ul>
  </section>
</div>

<div class="span12">
		<section id="gridSystem">

          <div class="page-header">
            <h1><?php echo $page_title; ?></h1>
          </div>

          <h2>grid</h2>
                    <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span1" data-original-title="">1</div>
              <div class="span1">1</div>
              <div class="span1" data-original-title="">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span2" data-original-title="">2</div>
              <div class="span3" data-original-title="">3</div>
              <div class="span4" data-original-title="">4</div>
            </div>
            <div class="row show-grid">
              <div class="span4" data-original-title="">4</div>
              <div class="span5" data-original-title="">5</div>
            </div>
            <div class="row show-grid">
              <div class="span9" data-original-title="">9</div>
            </div>
          </div>

          <h2>Offsetting columns</h2>
        
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span3 offset2">3 offset 2</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span3 offset1">3 offset 1</div>
              <div class="span3 offset2">3 offset 2</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span6 offset3">6 offset 3</div>
            </div><!-- /row -->
          </div>

          <h2>Nesting columns</h2>
          <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column. Nested rows should include a set of columns that add up to the number of columns of its parent.</p>
          <h3>Example</h3>
          <p>Here two nested <code>.span4</code> columns are placed within a <code>.span8</code>.</p>
          <div class="row show-grid">
            <div class="span9">
              Level 1 of column
              <div class="row show-grid">
                <div class="span6">
                  Level 2
                </div>
                <div class="span3">
                  Level 2
                </div>
              </div>
            </div>
          </div>
</section>
</div>		
</div>
<?php include_once "inc/footer.html"; ?>

