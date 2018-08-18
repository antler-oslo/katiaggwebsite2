<section id="projects">

    <h1>PROJECTS</h1>

    <div id="projectsList" class="container">

      <div class="row" align="left">

        <!-- call to db -->
        <?php
         $db = new PDO('mysql:host=localhost;dbname=katiagg;charset=utf8','root','');
         $req = $db->query("SELECT * FROM newprojects ORDER BY id DESC");
         while($result = $req->fetch()){
       ?>

        <div class="col-sm-6">
          <div class="project">
            <div class="overlayProject"></div>
              <div class="itemProject">
                <h3 class="titleProject"> <?php echo $result['title'];?> </h3>
              </div>
              <p class="summaryProject" align="center"><?php echo $result['summary'];?></p>
              <div id=<?php echo "project".$result['id'];?> class="moreProject">MORE</div>
              <img src="img/projects/<?php echo $result['img'];?>" class="img-responsive imgProject"/>
              <div class="tagsProject"> <?php echo $result['tags'];?> </div>
            </div>
          </div>
      

        <?php
         }
         $req->closeCursor();
         ?>

      </div>

    </div>

  </section>