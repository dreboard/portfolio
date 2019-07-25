    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Andre Board</span>

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
			<?php echo Html::anchor(Router::get('index'), 'About', ['class' => 'nav-link js-scroll-trigger']); ?>
          </li>
          <li class="nav-item">
		  <?php echo Html::anchor(Router::get('experience'), 'Experience', ['class' => 'nav-link js-scroll-trigger']); ?>
          </li>
          <li class="nav-item">
			<?php echo Html::anchor(Router::get('education'), 'Education', ['class' => 'nav-link js-scroll-trigger']); ?>
          </li>
          <li class="nav-item">
		  <?php echo Html::anchor(Router::get('skills'), 'Skills', ['class' => 'nav-link js-scroll-trigger']); ?>
          </li>
          <li class="nav-item">
            <?php echo Html::anchor(Router::get('projects'), 'Projects', ['class' => 'nav-link js-scroll-trigger']); ?>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://blog.dev-php.site/">Blog</a>
          </li>
        </ul>
      </div>
    </nav>