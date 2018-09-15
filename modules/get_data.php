        <div class="center col-lg-4">
            <div class="book__items">
                <input type='hidden' name='id' value="<?=$row[0]?>">
                <p>"<?=$row[1]?>"</p>
                <p>by <?=$row[2]?></p>
                <p><?=$row[4]?></p>
                <p><b>Price: <?=$row[5]?> UAH</b></p>
                <p class="buy-form"><a id="buy-url" href="/buyBook.php?id=<?=$row[0]?>">Buy</a></p>
            </div>
        </div>