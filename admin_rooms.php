<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "hotel", 3306);
$Room = $db->getRooms();
?>


<?php
foreach ($Room as $key => $Room) {
    if ($Room['id'] === 'External') {
        ?>
        <div class="about lobster-font-family">
            <div class="container">
                <div class="row" style="padding: 20px">
                    <div class="col-lg-4 col-12">
                        <div class="img">
                            <img src="<?php echo $Room['image_path']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="block">
                            <div>
                                <strong> <?php echo $Room['Cena']; ?></strong>
                                <h5><?php echo $Room['Nazov']; ?></h5>
                                <p style="height: 100px; overflow: hidden"><?php echo $Room['Popis']; ?></p>

                                <form action="readMore.php" method="post" style="float: right">
                                    <input type="hidden" name="id" value="<?php echo  $Room['id']; ?>">
                                    <input type="hidden" name="Nazov" value="<?php echo  $Room['Nazov']; ?>">
                                    <input type="hidden" name="Cena" value="<?php echo  $Room['Cena']; ?>">
                                    <input type="hidden" name="Popis" value="<?php echo  $Room['Popis']; ?>">
                                    <input type="hidden" name="image_path" value="<?php echo  $Room['image_path']; ?>">
                                    <button type="submit" value="submit" >Read more</button>
                                </form>
                                <form action="delete.php" method="post" style="float: left">
                                    <input type="hidden" name="id" value="<?php echo  $Room['id']; ?>">
                                    <button type="submit" style="background-color: red" value="submit"  onclick="return confirm('Are you sure you want to delete <?php echo  $Room['id']; ?> ?');">Delete room</button>
                                </form>
                                <form action="update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo  $Room['id']; ?>">
                                    <input type="hidden" name="Nazov" value="<?php echo  $Room['Nazov']; ?>">
                                    <input type="hidden" name="Cena" value="<?php echo  $Room['Cena']; ?>">
                                    <input type="hidden" name="Popis" value="<?php echo  $Room['Popis']; ?>">
                                    <input type="hidden" name="image_path" value="<?php echo  $Room['image_path']; ?>">
                                    <button type="submit" value="submit">Edit room</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="about lobster-font-family">
            <div class="container">
                <div class="row" style="padding: 20px">
                    <div class="col-lg-4 col-12">
                        <div class="img">
                            <img style="height: 450px; width: 580px; overflow: hidden" src="<?php echo $Room['image_path']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="block">
                            <div>
                                <strong> <?php echo $Room['Cena']; ?> €</strong>
                                <h5><?php echo $Room['Nazov']; ?></h5>
                                <p style="height: 100px; overflow: hidden"><?php echo $Room['Popis']; ?></p>

                                <form action="readMore.php" method="post" style="float: right">
                                    <input type="hidden" name="id" value="<?php echo  $Room['id']; ?>">
                                    <input type="hidden" name="Nazov" value="<?php echo  $Room['Nazov']; ?>">
                                    <input type="hidden" name="Cena" value="<?php echo  $Room['Cena']; ?>">
                                    <input type="hidden" name="Popis" value="<?php echo  $Room['Popis']; ?>">
                                    <input type="hidden" name="image_path" value="<?php echo  $Room['image_path']; ?>">
                                    <button type="submit" value="submit" >Read more</button>
                                </form>
                                <form action="delete.php" method="post" style="float: left">
                                    <input type="hidden" name="id" value="<?php echo  $Room['id']; ?>">
                                    <button type="submit" style="background-color: red" value="submit"  onclick="return confirm('Are you sure you want to delete <?php echo $Room['Nazov']."#"; echo  $Room['id']; ?> ?');">Delete room</button>
                                </form>
                                <form action="update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo  $Room['id']; ?>">
                                    <input type="hidden" name="nazov" value="<?php echo  $Room['Nazov']; ?>">
                                    <input type="hidden" name="cena"  value="<?php echo  $Room['Cena']; ?>">
                                    <input type="hidden" name="popis" value="<?php echo  $Room['Popis']; ?>">
                                    <input type="hidden" name="image_path" value="<?php echo  $Room['image_path']; ?>">
                                    <button type="submit" value="submit">Edit room</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>



