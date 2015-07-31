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

                  <!-- slide -->
                  <?php
                      include_once 'admin/funcoes/biblioteca.php';

                      conexao();

                      $result = mysql_query("select * from slide");
                      $dados = mysql_fetch_assoc($result);

                      $result2 = mysql_query("select * from linkslide");
                      $dados2 = mysql_fetch_assoc($result2);

                      if($dados2["link1"] != ""){$href1 = $dados2["link1"];}else{$href1 = "#this";};
                      if($dados2["link2"] != ""){$href2 = $dados2["link2"];}else{$href2 = "#this";};
                      if($dados2["link3"] != ""){$href3 = $dados2["link3"];}else{$href3 = "#this";};
                      if($dados2["link4"] != ""){$href4 = $dados2["link4"];}else{$href4 = "#this";};


                      if($dados["status"] == "Sim"){

                        echo "<div style='width: 960px; height: 320px; float: left; margin: 10px 0 20px 0'>";
                        echo '<div id="banner-fade">';
                        echo '<ul class="bjqs" style="width: 960px!important;">';
                        if($dados["slide1"] != ""){echo "<li><a href='".$href1."' target='_blank'><img src='admin/imagens/slide/".$dados["slide1"]."' ></a></li>";}
                        if($dados["slide2"] != ""){echo "<li><a href='".$href2."' target='_blank'><img src='admin/imagens/slide/".$dados["slide2"]."' ></a></li>";}
                        if($dados["slide3"] != ""){echo "<li><a href='".$href3."' target='_blank'><img src='admin/imagens/slide/".$dados["slide3"]."' ></a></li>";}
                        if($dados["slide4"] != ""){echo "<li><a href='".$href4."' target='_blank'><img src='admin/imagens/slide/".$dados["slide4"]."' ></a></li>";}
                        echo '</ul>'; 
                        echo '</div>';
                        echo "</div>";

                      }
                  ?>

                  <!-- slider -->

                   <!-- final slider -->





                  <!-- ofertas -->

                  <?php include 'ofertas.php' ?>



                  <!-- barra facebook -->

                  <div class="barra-facebook"></div>



                  <!-- facebook -->

                  <div class="facebook"></div>



                  <!-- menu footer -->

                  <?php include 'menu-footer.php' ?>



              </div><!-- final conteudo -->

            </div>

        </div><!-- final alinhamento -->





        <!-- footer -->

        <?php include 'footer.php' ?>



    </body>

</html>