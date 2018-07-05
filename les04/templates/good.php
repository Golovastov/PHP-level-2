<? foreach ($result as $row): ?>
<div class="item">
    <a href="Single_Page.html">
        <img src="img/goodsPhoto/<?=$row['photo']?>" alt="">
        <strong><?=$row['name']?>$<?=$row['price']?></span></strong>
    </a>
    <a href="#" class="add_to_cart">
        <img src="img/cart_wite.png" alt="cart">Add to Cart
    </a>
    <a href="#" class="button_refresh">
        <img src="img/forma-1.png" alt="re">
    </a>
    <a href="#" class="button_favorite">
        <img src="img/button_favorite.png" alt="fav">
    </a>
</div>
<? endforeach; ?>