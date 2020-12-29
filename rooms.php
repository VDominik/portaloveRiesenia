<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "hotel", 3306);
$Room = $db->getRooms();
?>


        <h2 class="text-capitalize" id="room">rooms & suits</h2>
 <?php
foreach ($Room as $key => $Room) {
if ($Room['Nazov'] === 'External') {
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
                        <button><a href="readMore.php" class="text-capitalize">Read more</a></button>
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
        </div>
    </div>
</div>



