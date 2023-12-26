<div class=" bg-dark text-white">
    <div class="row mt-5">
        <div class="col-4">
            <div class="container-fluid pd-t-0-f ht-200p">
                <h6>CATEGORIES</h6>
                <ul>

                    <?php
                    $sql = "SELECT * FROM  categories ";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <li> <a href="/iwt/IT21388002/Trending_Recipe.php?cat=<?= $row['C_ID'] ?>" style="text-decoration: none; color:aliceblue"><?= $row['C_NAME'] ?></a></li>

                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="container-fluid pd-t-0-f ht-200p">
                <h6>ABOUT US</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, nesciunt? Vitae, cnecessitatibus nisi eos ut ea at quia fugit inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus placeat quasi distinctio accusantium? Saepe nam, itaque cumque asperiores recusandae mollitia exercitationem nulla hic voluptatem? Aliquid ratione non autem quos quidem!</p>
            </div>
        </div>
        <div class="col-4">
            <div class="container-fluid pd-t-0-f ht-200p">
                <h6>SOCIAL MEDIA</h6>
                <div class="static-rate text-center fs-30 mt-3 h2">
                    <i class="fab fa-google" aria-hidden="true"></i> &nbsp;
                    <i class="fab fa-facebook" aria-hidden="true"></i> &nbsp;
                    <i class="fab fa-google-plus" aria-hidden="true"></i> &nbsp;
                    <i class="fab fa-github" aria-hidden="true"></i> &nbsp;

                </div>
                <div class="row">
                    <div class="col-12"><img src="/iwt/IT21386268/assets/img/download.png"></div>
                </div>

            </div>
        </div>
    </div>
</div>