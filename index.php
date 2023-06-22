<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<!--<body class="hold-transition skin-blue layout-top-nav">-->
<?php include 'includes/navbar.php'; ?>
<div class="wrapper" style="width: 100%;">
<div class="content-wrapper" width="100%" height="100%">
    <video width="100%" height="100%" autoplay muted loop id="myVideo">
        <source src="images/video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
   </video>


   <div class="content"><br>
  <h1 style="font-size:130px;" >WELCOME!</h1><BR>
  <h1 style="font-size:130px;">TO THE BEST E-SHOP</h1>
  <P>AKrite is running a promotion for its new and existing customers this month. Don't miss these amazing offers</P>
  <button class="card-button-compra" style >Order NOW</button>
</div>
  
            


        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <main>
        <section class="content-banner" id="home">
            <div class="container-fluid">
                <div class="container-banner">
                    <div class="banner">
                        <p>Shop with Us Today</p>
                        <h4>Black Friday</h4>
                        <h1>AKrite</h1>
                        <div class="banner-desconto">
                            <h5>Almost 75% discount</h5>
                            <a href="">Visit Site</a>
                        </div>
                    </div>

                    <div class="img-banner">
                        <img src="images/esh.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="content-ofertas" id="ofertas">
            <div class="container-ofertas">
                <div class="logo-ofertas">
                    <img src="images/logo-black-friday-kabum.png" width="600" alt="">
                </div>
            </div>
            <h1>Our Products</h1>

            <div class="container-cards">
                <a href="login.php" style="text-decoration:none">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/img/produto01.jpg" width="160" height="160" alt="">
                        </div>
                        <div class="card-description">
                            <p style="color: #848484;">Video AMD Radeon RX590</p>
                            <p style="color: #848484;">Gaming 8G, GDDR5</p>
                            <p style="color: #000;">Ug shs.20000</p>
                            <p style="color: #f39d1d;">Black Friday Today Ug shs.10000</p>
                            <div class="card-button">50% OFF</div>
                            <a href="login.php" class="card-button-compra">BUY NOW</a>
                        </div>
                    </div>
                </a>

                <a href="login.php" style="text-decoration:none">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/img/produto02.jpg" width="160" height="160" alt="">
                        </div>
                        <div class="card-description">
                            <p style="color: #848484;">Headset Gamer HyperX Cloud Stringer</p>
                            <p style="color: #000;">Ug shs.2000</p>
                            <p style="color: #f39d1d;">Black Friday Today Ug shs.1000</p>
                            <div class="card-button">50% OFF</div>
                            <a href="login.php" class="card-button-compra">BUY NOW</a>
                        </div>
                    </div>
                </a>

                <a href="login.php" style="text-decoration:none">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/img/produto03.jpg" width="160" height="160" alt="">
                        </div>
                        <div class="card-description">
                            <p style="color: #848484;">SmarTphone Samsung Galaxy A20, 32GB, 13MP,</p>
                            <p style="color: #848484;">Tela 6.4", Preto</p>
                            <p style="color: #000;">Ug shs.500000</p>
                            <p style="color: #f39d1d;">Black Friday Today Ug shs.250000</p>
                            <div class="card-button">50% OFF</div>
                            <a href="login.php" class="card-button-compra">BUY NOW</a>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="content-ofertas" id="ofertas">
            <h1>Monthly Top Sales</h1>
            <?php
            $month = date('m');
            $conn = $pdo->open();

            try {
                $inc = 3;
                $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
                $stmt->execute();
                foreach ($stmt as $row) {
                    $image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
                    $inc = ($inc == 3) ? 1 : $inc + 1;
                    if ($inc == 1) echo "<div class='row'>";
                    echo "
	       							<div class='container-cards col-sm-4'>
	       								<div class='card box box-solid'>
		       								<div class='card-img box-body '>
		       									<img src='" . $image . "' width='100%' height='230px' class='thumnail'>
                                                <div class='card-description'>
                                                <p style='color: #848484;'><h5><a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5></p>
                                                </div>
		       								</div>
                                            <br>
                                               <div class='card'>
		       									<p><b> shs." . number_format($row['price']) . "</b></p>
		       								</div>
	       								</div>
	       							</div>
	       						";
                    if ($inc == 3) echo "</div>";
                }
                if ($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
                if ($inc == 2) echo "<div class='col-sm-4'></div></div>";
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }

            $pdo->close();

            ?>
        </section>
    </main>

    

    <!--<script src="assets/js/script.js"></script>-->
    <!--<script src="assets/js/sweetalert2.all.min.js"></script>-->
    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>

</html>