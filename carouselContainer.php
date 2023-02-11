<?php 
    $gameDetails = "src/Details.php#".$cardIdbyName;
    $gameEnroll = "src/event_registration.php?event=".$cardTitle;
?>

<div class="card" id=<?php echo $gameId?>>
    <img class="card-img-top"  src=<?php echo $imgSrc?> alt="Card image cap" class="brand-img"
        style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
    <div class="card-body">
        <h5 class="card-title text"><?php echo $cardTitle ?></h5>
        <p class="card-text text"><?php echo $cardText ?></p>
        <button class=" card-btn" id="card_btn">
            <a href=<?php echo $gameDetails ?> class="text" id="enroll-a" style="text-decoration:none; color:black;">View
                Details</a>
        </button>
        <button class=" card-btn" id="card_btn">
            <a href=<?php echo $gameEnroll ?> id="enroll-a" class="text"
                style="text-decoration:none; color:black;">Enroll</a>
        </button>

    </div>
</div>
