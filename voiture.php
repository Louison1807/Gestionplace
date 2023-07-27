<?php require "header.php"?>
        <div class="container mt-5">
            <h3 class="text-center">Liste des voitures</h3>
            <hr>
            <div class="row">
              <div class="col">
              <?php require "modalvoit.php"?>
              </div>
          </div>
            <div>
            <table class=" table table-sm table-striped table-bordered text-center mt-5">
                <thead>
                  <tr>
                     <th>Idvoit</th>
                     <th>Design</th>
                     <th>Type</th>
                     <th>Nbrplace</th>
                     <th>Frais</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php require "affichevoit.php"?>
                </tbody>
              </table>
        </div>
<?php require "footer.php"?>