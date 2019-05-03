<?php 
    require_once('db/sql.php');
//     require_once("core/init.php");
//     include("includes/head.php");
//     include("includes/nav.php");
//     include("includes/headerfull.php");
//     include("includes/leftbar.php");

//     $sql = "SELECT * FROM products WHERE featured = 1";

//     $featured = $db->query($sql);
    
// ?>

//         <!-- main -->
//         <div class="col-md-8 opac" >
//             <h2 class="text-center"> Featured Products</h2>
//             <?php while($product = mysqli_fetch_assoc($featured)) : ?>  
//             <?php $category = get_category($product['categories']); ?>             
//                 <div class="col-md-3 product-container text-center">
//                     <div class="inner-container">
//                         <h4><?php echo $category['parent'] . " " . $product['title'];  ?></h4>
//                         <img src="<?php echo $product['image'];  ?>" alt="<?php  echo $product['title']; ?>" class="img-thumb" />
//                         <p class="list-price text-danger"> List Price: <s>$ <?php echo $product['list_price']; ?> </s> </p>
//                         <p class="price"> Our Price: $ <?php echo $product['price'];  ?> </p>
//                         <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?php echo $product['id']; ?>)">Details</button>
//                     </div>  
//                 </div>

//             <?php endwhile; ?>
                
//         </div>

// <?php
    
//     include("includes/rightbar.php");
//     include("includes/footer.php");

// ?>

