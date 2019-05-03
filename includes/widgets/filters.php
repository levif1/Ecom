<?php 
    $price_sort = ((isset($_REQUEST['price_sort']))?sanitize($_REQUEST['price_sort']):'');
    $min_price = ((isset($_REQUEST['min_price']))?sanitize($_REQUEST['min_price']):'');
    
    ?>

<h3 class="text-center">Search By:</h3>
<h4 class="text-center">Price</h4>
<form action="search.php" method="post" class="text-center">
    <input type="radio" name="price_sort"  value="low" <?=(($price_sort =='low')?' checked':''); ?>/> Low To High <br>
    <input type="radio" name="price_sort"  value="high" <?=(($price_sort =='high')?' checked':'');?>/> High To Low <br><br>
    <p class="text-center">From</p><input type="text" name="min_price" class="price-range" placeholder="Min $" value="<?=$min_price ?>"><br><p class="text-center">To</p>
    <input type="text" name="max_price" class="max_price" placeholder="Max $" value="<?=$max_price ?>"><br><br>
</form>
