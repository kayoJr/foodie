<?php
require 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script defer src="./js/main.js"></script> 
    <script defer src="./js/main2.js"></script> 
    <script src="./js/script.js" defer></script>
    <title>Foodie</title>
</head>

<body>
    <div class="content">
        <div class="left ">
            <div class="logo">
                <img src="./img/logo.png" alt="logo">
            </div>
            <ul>
                <li data-tab-target="#food" class="tab current"><img src="./img/icons.svg" alt="food"> Food</li>
                <li data-tab-target="#drink" class="tab"><img src="./img/icons.svg" alt="drink"> Drinks</li>
                <li data-tab-target="#snacks" class="tab"><img src="./img/icons.svg" alt="snack"> Snack</li>
                <li data-tab-target="#dessert" class="tab"><img src="./img/icons.svg" alt="dessert"> Dessert</li>
            </ul>
        </div>

        <div class="right">
            <div class="top">
                <div class="left-header">
                    <h1>Foodie</h1>
                    <h3>Awesome Food And Beverages</h3>
                </div>

                <div class="right-header">
                    <div class="cart">
                        <img src="./img/cart.png" alt="">
                        <div class="counter">
                        <?php
                        $sql = "select count(id) as total from `cart`";
                        $rs = mysqli_query($conn, $sql);
                        $val = mysqli_fetch_assoc($rs);
                        $num = $val['total'];
                        ?>
                            <p>
                                <?php
                                echo $num;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="left-section active" id="food" data-tab-content>
                    <div class="cards">
                    <?php
                                $sql = "select * from `menu` where `type` = 'main_dish' order by `id` desc";
                                $rs = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($rs) > 0){
                                    while($row = mysqli_fetch_assoc($rs)){
                                        ?>
                            <div class="card">
                                <div class="card-elements">
                            <?php
                                echo "<img src='img/".$row['picture']."'>";
                                ?>
                            <div class="descriptions">
                                    <h3><?php
                                    echo $row['price']
                                    ?>$</h3>
                                    <div>
                                        <h4><?php
                                    echo $row['name']
                                    ?></h4>
                                    </div>
                                </div>
                                    <div class="hover">
                                    <?php
                                    echo "
                                     <form action='cart.php?rn=$row[id]' method='GET'>
                                    <div>
                                       <label for='quant'>Quantity</label>
                                        <input type='number' name='quant' id='quant' value='1'>
                                        <input type='hidden' name='rn' value='$row[id]'>
                                        </div>
                                        <input type='submit' value='Add To Cart'>
                                      
                                        
                                     </form>";
                                     ?>                                 
                                </div>
                                
                                
</div>
    </div>
                                <?php
      }
      
    }
    ?>
    
                    </div>
                </div>
                <div class="left-section" id="drink" data-tab-content>
                <div class="cards">
                        <div class="card">
                            <div class="card-elements">
                            <?php
                                $sql = "select * from `menu` where `type` = 'drinks'";
                                $rs = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($rs) > 0){
                                    while($row = mysqli_fetch_assoc($rs)){
                             ?>
                            <?php
                                echo "<img src='img/".$row['picture']."'>";
                            ?>
                            <div class="descriptions">
                                    <h3><?php
                                    echo $row['price']
                                    ?>$</h3>
                                    <div>
                                        <h4><?php
                                    echo $row['name']
                                    ?></h4>
                                    </div>
                                </div>
                                <div class="hover">
                                <?php
                                    echo "
                                     <form action='cart.php?rn=$row[id]' method='GET'>
                                    <div>
                                       <label for='quant'>Quantity</label>
                                        <input type='number' name='quant' id='quant' value='1'>
                                        <input type='hidden' name='rn' value='$row[id]'>
                                        </div>
                                        <input type='submit' value='Add To Cart'>
                                      
                                        
                                     </form>";
                                     ?>              
                                </div>


                                </div>
                                    </div>
<?php
      }
                                 
        }
     ?>
                    </div>
                </div>
                <div class="left-section" id="snacks" data-tab-content>
                <div class="cards">
                        <div class="card">
                            <div class="card-elements">
                            <?php
                                $sql = "select * from `menu` where `type` = 'snack' order by `id` desc";
                                $rs = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($rs) > 0){
                                    while($row = mysqli_fetch_assoc($rs)){
                             ?>
                            <?php
                                echo "<img src='img/".$row['picture']."'>";
                            ?>
                            <div class="descriptions">
                                    <h3><?php
                                    echo $row['price']
                                    ?>$</h3>
                                    <div>
                                        <h4><?php
                                    echo $row['name']
                                    ?></h4>
                                    </div>
                                </div>

                                <div class="hover">
                                <?php
                                    echo "
                                     <form action='cart.php?rn=$row[id]' method='GET'>
                                    <div>
                                       <label for='quant'>Quantity</label>
                                        <input type='number' name='quant' id='quant' value='1'>
                                        <input type='hidden' name='rn' value='$row[id]'>
                                        </div>
                                        <input type='submit' value='Add To Cart'>
                                      
                                        
                                     </form>";
                                     ?>              
                                </div>

                                </div>
                                    </div>
<?php
      }
                                 
        }
     ?>
                    </div>
                </div>
                <div class="left-section" id="dessert" data-tab-content>
                <div class="cards">
                        <div class="card">
                            <div class="card-elements">
                            <?php
                                $sql = "select * from `menu` where `type` = 'dessert' order by `id` desc";
                                $rs = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($rs) > 0){
                                    while($row = mysqli_fetch_assoc($rs)){
                             ?>
                            <?php
                                echo "<img src='img/".$row['picture']."'>";
                            ?>
                            <div class="descriptions">
                                    <h3><?php
                                    echo $row['price']
                                    ?>$</h3>
                                    <div>
                                        <h4><?php
                                    echo $row['name']
                                    ?></h4>
                                    </div>
                                </div>
                                <div class="hover">
                                <?php
                                    echo "
                                     <form action='cart.php?rn=$row[id]' method='GET'>
                                    <div>
                                       <label for='quant'>Quantity</label>
                                        <input type='number' name='quant' id='quant' value='1'>
                                        <input type='hidden' name='rn' value='$row[id]'>
                                        </div>
                                        <input type='submit' value='Add To Cart'>
                                      
                                        
                                     </form>";
                                     ?>              
                                </div>


                                </div>
                                    </div>
<?php
      }
                                 
        }
     ?>
                    </div>
                </div>
                <div class="right-section">
                    <div class="top-cart">
                        <h3>New Order</h3>
                    </div>
                    <div class="middle-cart">
                        <?php
                    $sql = "select * from `cart` order by `rn` desc";
                    $rs = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($rs)){
                        while($row = mysqli_fetch_assoc($rs)){
                            ?>

                    <div class="elements">
                        <div>
<?php
                       echo "<a href='del.php?rn=$row[id]'><b>X</b></a>";

                       echo  "<h4>".$row['name']."<br>" .$row['sub_tot_price']. '$'."</h4>";
                       ?>
</div>
<?php
                        echo "x".$row['quant'];

                        ?>       
                        </div>

          <?php
      }
   }

?>
               
                    </div>
                    <div class="bottom-cart">
                        <ul>
                            <div class="left-list">
                                <li>Total</li>
                            </div>
                            <div class="right-list">
                            
                            <?php
                        $sql = "select sum(sub_tot_price) as total from `cart`";
                        $rs = mysqli_query($conn, $sql);
                        $val = mysqli_fetch_assoc($rs);
                        $num = $val['total'];
                        ?>
                                <li><?php
                                echo $num;
                                ?>$</li>
                            </div>
                        </ul>
                        <!-- <a href="#" data-modal-target="#modal">Confirm Order</a> -->
                        <button data-modal-target="#modal" onclick="here.php">Confirm Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Your Orders</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body" id="here">
    <table>
        <tr>
            <th>Name</th>
            <th>Each Price</th>
            <th>Quantity</th>
            <th>Sub Total Price</th>
        </tr>
        <?php

$sql = "select * from `cart`";
$rs = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($rs)){
    ?>
        <tr>
            <td><?php
            echo $row['name'];
            ?></td>
            <td><?php
            echo $row['price']."$";
            ?></td>
            <td><?php
            echo $row['quant'];
            ?></td>
            <td><?php
            echo $row['sub_tot_price']."$";
            ?></td>
        </tr>
  <?php  
}
?>
    </table>
   <div class="total">
       <p>Total</p>
       <p><?php
        echo $num."$";
        ?></p>
   </div>
   <div class="confirm">
       <button data-modal-target="#modal2" id="next">Confirm</button>
   </div>
    </div>
  </div>
  <div id="overlay"></div>



  <div class="modal2" id="modal2">
    <div class="modal-body" id="here">
    <div class="logo">
       <img src="./img/check-solid.svg" alt="">
    </div>
   
   <div class="confirm">
       <a href="confirm.php">Done</a>
   </div>
    </div>
  </div>
  <div id="overlay"></div>
</body>
</html>