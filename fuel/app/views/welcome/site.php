      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-1">
		  <?php echo $site['name'];?>
		  </h2>
		  <p class="mb-2"><?php echo $site['url'];?></p>
		  <div class="mb-3"><?php echo Asset::img($site['img']); ?></div>
          <p><?php echo $site['description'];?></p>
		  <p><?php echo Html::anchor($site['url'], 'Live Site', ['target' => '_blank']);?></p>
        </div>
      </section>