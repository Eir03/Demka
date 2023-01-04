<?php 
    require_once 'constraction.php';
?>
    <div class="m-0 mt-lg-5 position-relative banner">
        <img src="media/images/piano.jpg" style="max-width:100%; max-height:60%;" alt="">
        <div class="shake text-center position-absolute" style="top: 20%; left: 35%;">
            <h1>Music House</h1>
            <h3>Почувствуй наше музыкальное безумие</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row row-cols">
            <?php
            $conn = mysqli_connect('127.0.0.1','root','','music_shop');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $result = mysqli_query($conn, "SELECT * FROM Product");

            while($row = mysqli_fetch_assoc($result)) {
                echo'<div class="col pb-5">';
                echo'    <div class="card" style="width: 18rem; height: 32rem;">';
                echo'        <a href="product.php?' .$row['Id']. '"><img src="media\images\\' . $row['Image'] . '.jpeg" class="card-img-top" alt="..."/></a>';
                echo'        <div class="card-body">';
                echo'            <h5 class="card-title">' . $row['Name'] .'</h5>';
                echo'            <p class="card-text">' . $row['Description'] .'</p>';
                echo'            <a href="" class="btn btn-warning mb-5" style="position : absolute; bottom: 0;">В корзину</a>';
                echo'        </div>';
                echo'    </div>';
                echo'</div>';
            }
            mysqli_close($conn);
            ?>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2022 Music House</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>