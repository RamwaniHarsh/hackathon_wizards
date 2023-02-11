<?php 
    $targetModal = "exampleModal".$gameTargetModel;
    $targetModalId = "#exampleModal".$gameTargetModel;
?>

<section class="gameSection">
    <h1 class="gameName" id=<?php echo $gameId; ?>><?php echo $gameName; ?></h1><br><br>

    <p class="gameDetail"> <?php echo $gameDetail; ?> </p>

    <button class="card-btn" id="card_btn">
        <a class="class-btn-a" href="event/event_registration.php" id="enroll-a">Enroll</a>
    </button>
    <button class="card-btn" id="card_btn">
        <a class="class-btn-a" type="button" data-bs-toggle="modal" data-bs-target=<?php echo $targetModalId; ?> href=""
            id="enroll-a">Resources</a>
    </button>

    <!-- Modal -->

    <div class="modal fade" id=<?php echo $targetModal; ?> tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resources Required</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Nationality: Indian <br>
                    State: Gujarat <br>
                    If out of Gujarat: <br>
                    1. Student: At least 6 months of study in any institute in Gujarat. <br>
                    2. Citizen: At least 3 months of work in any organization in Gujarat. <br>
                    Age: 9 - 60. <br>
                    Medical: Player must not have a severe medical condition. <br><br>
                    <span class="modal-req"><b><?php echo $gameName; ?></b></span>
                    <br>
                    <?php echo $gameResource; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $gameId=null;
    $gameName=null;
    $gameDetail=null;
    $gameResource=null;
    $gameTargetModel=null;
    $targetModal=null;
    $targetModalId=null;
?>