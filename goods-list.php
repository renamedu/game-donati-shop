<form action="" method="GET" class="main-sort">
    <button id="priceUp" type="submit" class="sort-btn" name="sort" value="price-up">price↑</button>
    <button id="priceDown" type="submit" class="sort-btn" name="sort" value="price-down">price↓</button>
    <button id="rating" type="submit" class="sort-btn active" name="sort" value="rating">rating</button>
</form>

<main class="main-shop">
    <!-- <div class="slider-main">
                <div class="slider-show"></div>
            </div> -->
    <ul class="main-list">
        <?php
        foreach ($goodsFetch as $item) {
        ?>
            <li class="main-list-card">
                <div class="main-list-el skin">
                    <a href="item.php?id=<?= $item[0] ?>" class="item-a">
                        <div class="el-img">
                            <div class="img-in">
                                <img src="<?= $item[10] ?>" alt="item-img" class="el-img-img">
                            </div>
                        </div>
                        <h3 class="item-name"><?= $item[1] ?></h3>
                    </a>
                    <div class="price-buy">
                        <?php
                        if ($item[4] != 0) {
                        ?>
                            <div class="el-price price-discount"><?= $item[3] ?>$</div>
                            <div class="new-price"><?= $item[4] ?>$</div>
                            <img src="img/discount_png.png" alt="discount" class="el-discount" width="120px">
                        <?php
                        } else {
                        ?>
                            <div class="el-price"><?= $item[3] ?>$</div>
                        <?php
                        }
                        ?>
                        <form action="database/buy-button.php" method="GET">
                            <input type="hidden" name="id" value="<?= $item[0] ?>">
                            <button type="submit" class="el-buy">Buy</button>
                        </form>
                    </div>
                </div>
                <?php
                if ($item[5] == 3) {
                ?>
                    <div class="rating">★★★</div>
                <?php
                } elseif ($item[5] == 2) {
                ?>
                    <div class="rating">★★☆</div>
                <?php
                } else {
                ?>
                    <div class="rating">★☆☆</div>
                <?php
                }
                ?>

                <?php
                if ($item[9] != 0) {
                ?>
                    <img src="img/new_png.png" alt="new" class="el-discount" width="120px">
                <?php
                }
                ?>
            </li>
        <?php
        }
        ?>
    </ul>
</main>