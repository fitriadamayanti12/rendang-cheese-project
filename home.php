<?php 
  require('config/db.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rendang Cheese Shop</title>
  <link rel="stylesheet" type="text/css" href="plugin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
  <link rel="icon" type="image/gif/png" href="asset/img/Title.png">
</head>
<body>

<?php include('component/nav.php'); ?>
<div class="container-fluid" id="isi" >
  

  <div class="row">
    <div class="col-xs-2 col-xs-offset-5" id="produk-laris">
      <h3 style="font-family: Blacksword; font-size:2.2em;"><strong>Special Menu</strong></h3>
    </div>
  </div>
  


  <!-- Laman Produk-->
  
  <div class="container" id="produk">
    
    <!-- special -->
      <div id="special" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryCouple = "SELECT * FROM tabel_produk WHERE kategori='Special' LIMIT 0,4";
        $query_couple = mysqli_query($conn,$queryCouple);

        while($arrayCouple = mysqli_fetch_array($query_couple)){
          echo '
            <li>
            <a href="#'.$arrayCouple['idProduk'].'">
              <img src="admin/proses/'.$arrayCouple['path'].'" alt="'.$arrayCouple['nama'].'">
              <span></span>
            </a>
            <div class="overlay" id="'.$arrayCouple['idProduk'].'">
              <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
              <img src="admin/proses/'.$arrayCouple['path'].'">
              <div class="keterangan">
                <div class="container">
                  <h4><strong>'.$arrayCouple['nama'].'</strong></h4>
                  <p>'.$arrayCouple['keterangan'].'</p>
                  <h5>Rp.'.$arrayCouple['harga'].'</h5>
                  <button type="button" class="btn btn-success">Stock : '.$arrayCouple['stock'].'</button>
                  ';
                  if(isset($_SESSION['idUser'])){
                    if($arrayCouple['stock'] > 0){
                      echo '
                      <a href="proses/beli.php?idProduk='.$arrayCouple['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                    ';
                    }else{
                      echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                    }
                  }else{
                    echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                  }
                  echo '
                </div>
              </div>
            </div>
          </li>  
          ';
        }
       ?>
        <div class="clear"></div>
    </ul>
    </div>
    <!-- end of special -->
	
	<!-- mozzarella -->
      <div id="mozzarella" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryCouple = "SELECT * FROM tabel_produk WHERE kategori='Mozzarella' LIMIT 0,4";
        $query_couple = mysqli_query($conn,$queryCouple);

        while($arrayCouple = mysqli_fetch_array($query_couple)){
          echo '
            <li>
            <a href="#'.$arrayCouple['idProduk'].'">
              <img src="admin/proses/'.$arrayCouple['path'].'" alt="'.$arrayCouple['nama'].'">
              <span></span>
            </a>
            <div class="overlay" id="'.$arrayCouple['idProduk'].'">
              <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
              <img src="admin/proses/'.$arrayCouple['path'].'">
              <div class="keterangan">
                <div class="container">
                  <h4><strong>'.$arrayCouple['nama'].'</strong></h4>
                  <p>'.$arrayCouple['keterangan'].'</p>
                  <h5>Rp.'.$arrayCouple['harga'].'</h5>
                  <button type="button" class="btn btn-success">Stock : '.$arrayCouple['stock'].'</button>
                  ';
                  if(isset($_SESSION['idUser'])){
                    if($arrayCouple['stock'] > 0){
                      echo '
                      <a href="proses/beli.php?idProduk='.$arrayCouple['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                    ';
                    }else{
                      echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                    }
                  }else{
                    echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                  }
                  echo '
                </div>
              </div>
            </div>
          </li>  
          ';
        }
       ?>
        <div class="clear"></div>
    </ul>
    </div>
    <!-- end of mozzarella -->
	
	<!-- provolone -->
      <div id="provolone" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryCouple = "SELECT * FROM tabel_produk WHERE kategori='Provolone' LIMIT 0,4";
        $query_couple = mysqli_query($conn,$queryCouple);

        while($arrayCouple = mysqli_fetch_array($query_couple)){
          echo '
            <li>
            <a href="#'.$arrayCouple['idProduk'].'">
              <img src="admin/proses/'.$arrayCouple['path'].'" alt="'.$arrayCouple['nama'].'">
              <span></span>
            </a>
            <div class="overlay" id="'.$arrayCouple['idProduk'].'">
              <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
              <img src="admin/proses/'.$arrayCouple['path'].'">
              <div class="keterangan">
                <div class="container">
                  <h4><strong>'.$arrayCouple['nama'].'</strong></h4>
                  <p>'.$arrayCouple['keterangan'].'</p>
                  <h5>Rp.'.$arrayCouple['harga'].'</h5>
                  <button type="button" class="btn btn-success">Stock : '.$arrayCouple['stock'].'</button>
                  ';
                  if(isset($_SESSION['idUser'])){
                    if($arrayCouple['stock'] > 0){
                      echo '
                      <a href="proses/beli.php?idProduk='.$arrayCouple['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                    ';
                    }else{
                      echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                    }
                  }else{
                    echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                  }
                  echo '
                </div>
              </div>
            </div>
          </li>  
          ';
        }
       ?>
        <div class="clear"></div>
    </ul>
    </div>
    <!-- end of provolone -->
	
	<!-- camembert -->
      <div id="camembert" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryCouple = "SELECT * FROM tabel_produk WHERE kategori='Camembert' LIMIT 0,4";
        $query_couple = mysqli_query($conn,$queryCouple);

        while($arrayCouple = mysqli_fetch_array($query_couple)){
          echo '
            <li>
            <a href="#'.$arrayCouple['idProduk'].'">
              <img src="admin/proses/'.$arrayCouple['path'].'" alt="'.$arrayCouple['nama'].'">
              <span></span>
            </a>
            <div class="overlay" id="'.$arrayCouple['idProduk'].'">
              <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
              <img src="admin/proses/'.$arrayCouple['path'].'">
              <div class="keterangan">
                <div class="container">
                  <h4><strong>'.$arrayCouple['nama'].'</strong></h4>
                  <p>'.$arrayCouple['keterangan'].'</p>
                  <h5>Rp.'.$arrayCouple['harga'].'</h5>
                  <button type="button" class="btn btn-success">Stock : '.$arrayCouple['stock'].'</button>
                  ';
                  if(isset($_SESSION['idUser'])){
                    if($arrayCouple['stock'] > 0){
                      echo '
                      <a href="proses/beli.php?idProduk='.$arrayCouple['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                    ';
                    }else{
                      echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                    }
                  }else{
                    echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                  }
                  echo '
                </div>
              </div>
            </div>
          </li>  
          ';
        }
       ?>
        <div class="clear"></div>
    </ul>
    </div>
    <!-- end of camembert -->
	
	<!-- ricotta -->
      <div id="ricotta" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryCouple = "SELECT * FROM tabel_produk WHERE kategori='Ricotta' LIMIT 0,4";
        $query_couple = mysqli_query($conn,$queryCouple);

        while($arrayCouple = mysqli_fetch_array($query_couple)){
          echo '
            <li>
            <a href="#'.$arrayCouple['idProduk'].'">
              <img src="admin/proses/'.$arrayCouple['path'].'" alt="'.$arrayCouple['nama'].'">
              <span></span>
            </a>
            <div class="overlay" id="'.$arrayCouple['idProduk'].'">
              <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
              <img src="admin/proses/'.$arrayCouple['path'].'">
              <div class="keterangan">
                <div class="container">
                  <h4><strong>'.$arrayCouple['nama'].'</strong></h4>
                  <p>'.$arrayCouple['keterangan'].'</p>
                  <h5>Rp.'.$arrayCouple['harga'].'</h5>
                  <button type="button" class="btn btn-success">Stock : '.$arrayCouple['stock'].'</button>
                  ';
                  if(isset($_SESSION['idUser'])){
                    if($arrayCouple['stock'] > 0){
                      echo '
                      <a href="proses/beli.php?idProduk='.$arrayCouple['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                    ';
                    }else{
                      echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                    }
                  }else{
                    echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                  }
                  echo '
                </div>
              </div>
            </div>
          </li>  
          ';
        }
       ?>
        <div class="clear"></div>
    </ul>
    </div>
    <!-- end of ricotta -->

    
    </div>
    
  </div>
  <!-- kontent end of produk -->
</div>



<?php include('component/footer.php'); ?>


<script type="text/javascript" src="plugin/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="plugin/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>