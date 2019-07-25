      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="projects">
        <div class="my-auto">
          <h2 class="mb-3">Projects</h2>
		  <p>All sites are subdomains of my main site Dev-PHP</p>	
          <div class="subheading mb-3">Sites &amp; Frameworks</div>

          <table class="table table-borderless table-striped">
            <thead class="thead-dark">
            <tr>
              <th scope="col">Site</th>
              <th scope="col">Framework</th>
              <th scope="col">Link</th>
              <th scope="col">Github</th>
            </tr>
            </thead>
            <tbody>
			<?php foreach(array_values($sites) as $site): ?>
            <tr>
              <th class="list-inline-item" scope="row">
				<?php echo Html::anchor("site/{$site['id']}", "{$site['name']} <i class='fas fa-link'></i>", ['class' => 'tblLink']); ?>
			  </th>
              <td><?php echo $site['framework'];?></td>
              <td>
				  <?php echo Html::anchor($site['url'], '<i class="fas fa-external-link-square-alt"></i>
', ['class' => 'tblLink', 'target' => '_blank']); ?>
			  </td>
              <td>
				  <?php echo Html::anchor($site['github'], '<i class="fab fa-github"></i>', ['class' => 'tblLink', 'target' => '_blank']); ?>
			  </td>
            </tr>		
            <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </section>


