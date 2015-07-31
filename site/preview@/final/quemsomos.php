<html>
    <!-- header -->
    <?php include 'header.php' ?>
    <body>
        <!-- topo -->
        <?php include 'topo.php' ?>

        <div class="alinhamento">
            <div class="alinhamento-centro">
              <!-- conteudo -->
              <div class="conteudo">

                  <!-- categorias -->
                  <?php include 'categorias.php' ?>

                  <div class="barra"><h1>Quem Somos</h1></div>

                  <div class="quemsomos">
                    <?php
                      conexao();
                      $result = mysql_query("select * from quemsomos");
                      $dados = mysql_fetch_assoc($result);

                      echo $dados["conteudo"];
                     ?>
                  </div>

                  <!-- menu footer -->
                  <?php include 'menu-footer.php' ?>

              </div><!-- final conteudo -->
            </div>
        </div><!-- final alinhamento -->


        <!-- footer -->
        <?php include 'footer.php' ?>

    </body>
</html>