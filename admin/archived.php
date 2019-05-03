<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/Ecom/core/init.php');
if(!is_logged_in()){
    login_error_redirect();
}
include('includes/head.php');
include('includes/nav.php');

$sqlD = "SELECT * FROM products WHERE deleted = 1";
$dresults = $db->query($sqlD);
if(isset($_GET['reactivate'])){
    $activate= (int)$_GET['reactivate'];
    $activatesql = "UPDATE products SET deleted= 0 WHERE id = '$activate'";
    $db->query($activatesql);
    header('Location: archived.php');

}

?>

<h2 class="text-center">Deleted Products</h2>
<hr>
<table class="table table-bordered table-condensed table-striped">
    <thead>
        <th></th>
        <th>Product</th>
        <th>Price</th>
        <th>Category</th>
        <th>Featured</th>
        <th>Sold</th>
    </thead>
    <tbody>
        <?php while($p = mysqli_fetch_assoc($dresults)) : 
            $child_id = $p['categories'];
            $cat_sql = "SELECT * FROM categories WHERE id='$child_id'";
            $results = $db->query($cat_sql);
            $cat = mysqli_fetch_assoc($results);
            $parent_id = $cat['parent'];
            $p_sql = "SELECT * FROM categories WHERE id='$parent_id'";
            $p_results = $db->query($p_sql);
            $parent = mysqli_fetch_assoc($p_results);
            $category = $parent['category'] . '~' . $cat['category'];
            ?>
            <tr>
                <td>
                    <a href="archived.php?reactivate=<?=$p['id'];  ?>" class="btn btn-xs button-default"><span class="glyphicon glyphicon-refresh"></span>Reactivate</a>
                </td>
                <td><?=$p['title'];  ?></td>
                <td><?=money($p['price']);  ?></td>
                <td>
                    <?php echo $category;  ?>
                </td>
                <td>
                    "Deleted items can not be featured"
                </td>
                <td>0</td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


<?php 
include('includes/footer.php');
?>