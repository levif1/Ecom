<?php

$sql  = "SELECT * FROM categories WHERE parent = 0";
$pQuery = $db->query($sql);
?>
<header>
<nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <a href="index.php" class="navbar-brand">Levi Ecom</a>
            <ul class="nav navbar-nav">
                <?php while($parent = mysqli_fetch_assoc( $pQuery)) : ?>
                    <?php 
                    $parent_id = $parent['id'];
                    $sq2= "SELECT * FROM categories WHERE parent = '$parent_id'";
                    $cQuery = $db->query($sq2);
                    ?>
                    
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent["category"] ?><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php while($child = mysqli_fetch_assoc($cQuery)) : ?>
                        <li><a href="category.php?cat=<?=$child['id']; ?>"> <?php echo $child['category']; ?> </a></li>
                        <?php endwhile; ?>
                    </ul>
                </li>

                <?php endwhile; ?>

                <li>
                    <a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a>
                </li>

            </ul>

        </div>
    </nav>
