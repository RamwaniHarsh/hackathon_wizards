<?php include('resources/partials/header.php')?>

<link rel="stylesheet" href="css/home.css">

<?php include('resources/partials/top-container.php')?>

<!--explore-->
<div class="land_img">
    <p id="kmk">
        <span style="color:#ff6131;">Khel</span> <span style="color:white;">Maha</span><span
            style="color:green;">kumbh</span>

    </p>
    <p id="platform">
        A platform where talent meets passion.
    </p>
    <br>
    <img src="resources/img/khel-logo.png" alt="" height="150px;" width="150px;" id="khel_logo">
    <br>
    <a type="button" class="btn" id="explore_btn" data-bs-target="#menu" data-bs-toggle="offcanvas">
        Explore!</a>

</div>
<!--carousel game-card-->
<h1 class=" text-center text-muted " style=" margin-top:430px;">Games</h1>

<div class="carousel slide  my-1" id="carousel_2" data-bs-ride="carousel">

    <div class="carousel-inner ">

        <div class="carousel-item active">
            <?php 

                $gameId="g_card1";

                $cardIdbyName="hockey";
            
                $imgSrc="hockey.png";
            
                $cardTitle="Hockey";
            
                $cardText="Hockey is believed to date from the earliest civilizations. The Arabs,
            Greeks, Persians, and Romans each had their own versions, and traces of a stick game played
            by the Indians of America have found.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card101";

                $cardIdbyName="badminton";
            
                $imgSrc="badminton.png";
            
                $cardTitle="Badminton";
            
                $cardText="Badminton is a racket sport played by either two opposing players (singles)
            or two opposing pairs (doubles), who take positions on opposite halves of a rectangular
            court that is divided by a net..";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card102";

                $cardIdbyName="running";

                $imgSrc="running.png";
            
                $cardTitle="Running";
            
                $cardText="Running is a method of terrestrial locomotion allowing humans and other animals to move
            rapidly on foot. Running is a type of gait characterized by an aerial phase in which all
            feet are above the ground";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card103";

                $cardIdbyName="basketball";
            
                $imgSrc="basketball.png";
            
                $cardTitle="Basketball";

                $cardText="Basketball is a game played between two teams of five players each on a rectangular court,
                usually indoors. Each team tries to score by tossing the ball through the opponent'basket.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="src/Game_details.html" target="_blank" class="view">View all</a>
            </div>
        </div>

        <div class="carousel-item">

            <?php 

                $gameId="g_card1";

                $cardIdbyName="kho-kho";
            
                $imgSrc="kho-kho.png";
            
                $cardTitle="Kho-Kho";
            
                $cardText="Kho Kho is a traditional Indian sport, being one of the oldest outdoor sports dating back to
                ancient India. It is the second most popular traditional tag game in the Indian subcontinent
                after Kabaddi.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card101";

                $cardIdbyName="volleyball";
            
                $imgSrc="volleyball.png";
            
                $cardTitle="Volleyball";
            
                $cardText="Volleyball is a team sport in which two teams of six players are separated by a net. Each
                team tries to score points by grounding a ball on the other team's court under organized
                rules.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card102";

                $cardIdbyName="cycling";

                $imgSrc="cycling.png";
            
                $cardTitle="Cycling";
            
                $cardText="Cycling, also, when on a two-wheeled bicycle, called bicycling or biking, is the use of
                cycles for transport, recreation, exercise or sport";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card103";

                $cardIdbyName="weigth-lifting";
            
                $imgSrc="weigth-lifting.png";
            
                $cardTitle="Weigth-lifting";

                $cardText="Weight lifting and similar strength training activities are examples of anaerobic exercise.
                Anaerobic exercise involves a short burst of intense movement, while only burning
                carbohydrates for energy..";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="src/Game_details.html" target="_blank" class="view">View all</a>
            </div>
        </div>

        <div class="carousel-item">
            
            <?php 

                $gameId="g_card1";

                $cardIdbyName="kabaddi";
            
                $imgSrc="kabaddi.png";
            
                $cardTitle="Kabaddi";
            
                $cardText="Kabaddi is a popular traditional South Asian sport, played between two teams of seven players each.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card101";

                $cardIdbyName="chess";
            
                $imgSrc="chess.png";
            
                $cardTitle="Chess";
            
                $cardText="Chess is a two-player strategy board game played on a checkered board with 64 squares arranged in an 8x8 grid. The game
                is played by moving pieces.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card102";

                $cardIdbyName="shooting-ball";

                $imgSrc="shooting-ball.png";
            
                $cardTitle="Shooting-ball";
            
                $cardText="Shooting Ball is a sport that involves shooting a ball into a basket or a hoop to score points. The objective of the
                game is to shoot the ball into the basket more times than the opponent.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card103";

                $cardIdbyName="yogasan";
            
                $imgSrc="yogasan.png";
            
                $cardTitle="yogasan";

                $cardText="Yoga asana, commonly referred to as yoga, is a physical practice that originated in ancient India. It is a form of
                exercise that involves performing a series of postures, or asanas, while focusing on breath control and meditation. ";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="src/Game_details.html" target="_blank" class="view">View all</a>
            </div>
        </div>

            
        <div class="carousel-item">

        <?php 

                $gameId="g_card1";

                $cardIdbyName="tugofwar";
            
                $imgSrc="tugofwar.png";
            
                $cardTitle="Tugofwar";
            
                $cardText="Tug of war is a sport in which two teams pull on opposite ends of a rope, with the goal of pulling the rope in their
                direction and over a central line.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card101";

                $cardIdbyName="archery";
            
                $imgSrc="archery.png";
            
                $cardTitle="Archery";
            
                $cardText="Archery is a sport in which participants use a bow and arrows to shoot at a target. The goal is to shoot arrows as close
                to the center of the target as possible, with the innermost ring scoring the highest.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card102";

                $cardIdbyName="football";

                $imgSrc="football.png";
            
                $cardTitle="Football";
            
                $cardText="Football, also known as soccer in some countries, is a team sport played with a spherical ball. The objective of the
                game is to score goals by getting the ball into the opposing team's goal post.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card103";

                $cardIdbyName="handball";
            
                $imgSrc="handball.png";
            
                $cardTitle="Handball";

                $cardText="Handball is a fast-paced team sport played by two teams of seven players each, using a ball similar in size to a
                basketball.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>


        <div class="carousel-item">
            
            <?php 

                $gameId="g_card1";

                $cardIdbyName="judo";
            
                $imgSrc="judo.png";
            
                $cardTitle="Judo";

                $cardText="Judo is a modern martial art and combat sport originating from Japan. The main objective of Judo is to throw, pin, or
                submit an opponent to the ground, using a variety of grappling techniques.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card101";

                $cardIdbyName="wrestling";
            
                $imgSrc="wrestling.png";
            
                $cardTitle="Wrestling";
            
                $cardText="Wrestling is a competitive sport that involves grappling techniques such as throws, holds, and pins.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card102";

                $cardIdbyName="lawn-tennis";

                $imgSrc="lawn-tennis.png";
            
                $cardTitle="Lawn-tennis";
            
                $cardText="Tennis is a popular racquet sport played by two or four players on a rectangular court divided by a net.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card103";

                $cardIdbyName="skating";
            
                $imgSrc="skating.png";
            
                $cardTitle="Skating";

                $cardText="Skating is a general term used to describe a variety of sports that involve the use of skates to move on ice or on a
                hard surface.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>

        <div class="carousel-item">

            <?php 

                $gameId="g_card1";

                $cardIdbyName="swimming";
            
                $imgSrc="swimming.png";
            
                $cardTitle="Swimming";

                $cardText="Swimming is a competitive sport that involves propelling oneself through water using different strokes, including
                freestyle, breaststroke, backstroke, and butterfly.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card101";

                $cardIdbyName="table-tennis";

                $imgSrc="table-tennis.png";
            
                $cardTitle="Table-tennis";
            
                $cardText="Table Tennis, also known as Ping-Pong, is a popular indoor sport played with a small, light ball and paddles.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card102";

                $cardIdbyName="taekwondo";
            
                $imgSrc="taekwondo.png";
            
                $cardTitle="Taekwondo";
            
                $cardText="Taekwondo is a Korean martial art and Olympic sport that emphasizes kicks and jumping/spinning kicks in particular.";
             
            include ("carouselContainer.php"); ?>

            

            <?php 

                $gameId="g_card103";

                $cardIdbyName="gymnastic";
            
                $imgSrc="gymnastic.png";
            
                $cardTitle="Gymnastic";

                $cardText="Gymnastics is a sport that involves physical exercises requiring balance, strength, flexibility, agility, coordination,
                and endurance.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>

        <div class="carousel-item">
            
            <?php 

                $gameId="g_card1";

                $cardIdbyName="shooting";
            
                $imgSrc="shooting.png";
            
                $cardTitle="Shooting";

                $cardText="Shooting sports refer to a group of competitive sports that involve the use of firearms, such as rifles, shotguns, and
                handguns.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card101";

                $cardIdbyName="Skating(Artistic)";

                $imgSrc="Skating(Artistic).png";
            
                $cardTitle="Skating(Artistic)";
            
                $cardText="Artistic Skating is a discipline of figure skating that involves performing choreographed routines set to music.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card102";

                $cardIdbyName="boxing";
            
                $imgSrc="boxing.png";
            
                $cardTitle="Boxing";
            
                $cardText="Boxing is a combat sport in which two people, wearing gloves, throw punches at each other for a predetermined amount of
                time in a boxing ring.";
             
            include ("carouselContainer.php"); ?>

            

            <?php 

                $gameId="g_card103";

                $cardIdbyName="lifting";
            
                $imgSrc="lifting.png";
            
                $cardTitle="Lifting";

                $cardText="Weightlifting, also known as Olympic weightlifting, is a sport that involves the use of barbells and weight plates to perform two lifts: the snatch and the clean and jerk.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>

        <div class="carousel-item">

            <?php 

                $gameId="g_card1";

                $cardIdbyName="karate";
            
                $imgSrc="karate.png";
            
                $cardTitle="Karate";

                $cardText="Karate is a martial art that originated in Okinawa, Japan. It is a striking art that utilizes punches, kicks, knee
                strikes, elbow strikes and open hand techniques such as knife-hands, palm-heel strikes, and finger strikes.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card101";

                $cardIdbyName="Mallakhamb";

                $imgSrc="Mallakhamb.png";
            
                $cardTitle="Mallakhamb";
            
                $cardText="Mallakhamb is a traditional Indian sport that combines gymnastics and wrestling techniques.";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card102";

                $cardIdbyName="Horse-Riding";
            
                $imgSrc="Horse-Riding.png";
            
                $cardTitle="Horse Riding";
            
                $cardText="Horse riding, also known as equestrianism, is a sport that involves riding horses for leisure, competition, or as a
                means of transportation.";
             
            include ("carouselContainer.php"); ?>

            

            <?php 

                $gameId="g_card103";

                $cardIdbyName="Rugby-football";
            
                $imgSrc="Rugby-football.png";
            
                $cardTitle="Rugby football";

                $cardText="Rugby Football, commonly known as Rugby, is a sport that originated in England in the mid-19th century. It is a
                full-contact sport that involves two teams of 15 players each.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>


        <div class="carousel-item">

            <?php 

                $gameId="g_card1";

                $cardIdbyName="Soft-tennis";
            
                $imgSrc="Soft-tennis.png";
            
                $cardTitle="Soft-tennis";

                $cardText="Soft Tennis is a sport that is similar to traditional tennis but with softer and lighter equipment. The ball used in
                Soft Tennis is made of foam and has a slower speed compared to regular tennis balls.";
             
            include ("carouselContainer.php"); ?>

            <?php 

                $gameId="g_card101";

                $cardIdbyName="Sport-climbing";

                $imgSrc="Sport-climbing.png";
            
                $cardTitle="Sport-climbing";
            
                $cardText="Sport climbing can be performed either on lead or top-rope. In lead climbing, the climber ascends the route while
                attaching quickdraws to bolts along the way. ";
             
            include ("carouselContainer.php"); ?>


            <?php 

                $gameId="g_card102";

                $cardIdbyName="Bridge";
            
                $imgSrc="Bridge.png";
            
                $cardTitle="Bridge";
            
                $cardText="Bridge is a trick-taking card game that is played by four players in two competing partnerships. The objective of the
                game is to score the highest number of points by winning tricks that contain valuable cards.";
             
            include ("carouselContainer.php"); ?>

            

            <?php 

                $gameId="g_card103";

                $cardIdbyName="Roll-ball";
            
                $imgSrc="Roll-ball.png";
            
                $cardTitle="Roll-ball";

                $cardText="Roll Ball is a sport that was originated in India and is a combination of roller skating, basketball, and handball.";
             
            include ("carouselContainer.php"); ?>

            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" data-bs-target="#carousel_2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" id="prev_btn"></span>
    </button>
    <button class="carousel-control-next" data-bs-target="#carousel_2" data-bs-slide="next" style="height:30px;">
        <span class="carousel-control-next-icon" id="next_btn"></span>
    </button>
</div>

<!--carousel event-card-->
<h1 class=" text-center text-muted " style=" margin-top:70px;">Events</h1>

<div class="carousel slide  my-1" id="carousel_3" data-bs-ride="carousel">


    <div class="carousel-inner " id="caro-inner">
        <div class="carousel-item active">
            <!--            1-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="hockey.jfif" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Hockey</h5>
                    <button class="card-btn" id="card_btn"><a href="src/Game_details.html#hockey">View
                            Details</a></button>
                </div>
            </div>

            <!--            2-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="badminton.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Badminton</h5>
                    <button class="card-btn" id="card_btn"><a href="src/Game_details.html#badminton">View
                            Details</a></button>
                </div>
            </div>
            <!--3-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="Running.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Running</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#running">View
                            Details</a></button>
                </div>
            </div>

            <!--            4-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="basketball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Basketball</h5>

                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#basketball">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="src/Game_details.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            5-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Kho-Kho</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#kho-kho">View
                            Details</a></button>
                </div>
            </div>

            <!--            6-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">volleyball</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#volleyball">View
                            Details</a></button>
                </div>
            </div>
            <!--7-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">cycling</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#cycling">View
                            Details</a></button>
                </div>
            </div>

            <!--            8-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Weight lifting</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#weight-lifting"> View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="src/Game_details.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            9-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Kabaddi</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#kabaddi">View
                            Details</a></button>
                </div>
            </div>

            <!--            10-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Chess</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#chess">View
                            Details</a></button>
                </div>
            </div>
            <!--11-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Shooting ball</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#shootingball">View
                            Details</a></button>
                </div>
            </div>

            <!--            12-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Yogasan</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#yogasan">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            13-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Tug of war</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#tugofwar">View
                            Details</a></button>
                </div>
            </div>

            <!--            14-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Archery</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#archery">View
                            Details</a></button>
                </div>
            </div>
            <!--15-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Football</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#football">View
                            Details</a></button>
                </div>
            </div>

            <!--            16-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Handball</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#handball">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            17-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Judo</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#judo">View
                            Details</a></button>
                </div>
            </div>

            <!--            18-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Wrestling</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#wrestling">View
                            Details</a></button>
                </div>
            </div>
            <!--19-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Lawn Tennis</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#lawntennis">View
                            Details</a></button>
                </div>
            </div>

            <!--            20-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">skating</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#skating">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            21-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Swimming</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#swimming">View
                            Details</a></button>
                </div>
            </div>

            <!--            22-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Table Tennis</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#tabletennis">View
                            Details</a></button>
                </div>
            </div>
            <!--23-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Taekwondo</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#taekwondo">View
                            Details</a></button>
                </div>
            </div>

            <!--            24-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Gymnastic</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#gymnastic">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            25-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Shooting</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#shooting">View
                            Details</a></button>
                </div>
            </div>

            <!--            26-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Skating(Artistic)</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#skating(artistic)">View
                            Details</a></button>
                </div>
            </div>
            <!--27-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Boxing</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#boxing">View
                            Details</a></button>
                </div>
            </div>

            <!--            28-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Fencing</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#fencing">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            29-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Karate</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#karate">View
                            Details</a></button>
                </div>
            </div>

            <!--            30-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Mallakhamb</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#mallakhamb">View
                            Details</a></button>
                </div>
            </div>
            <!--31-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Horse Riding</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#horseriding">View
                            Details</a></button>
                </div>
            </div>

            <!--            32-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Rugby football</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#rugbyfootball">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>
        <div class="carousel-item">
            <!--            33-->
            <div class="card" id="e_card101">
                <img class="card-img-top" src="kho.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Soft Tennis</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#softtennis">View
                            Details</a></button>
                </div>
            </div>

            <!--            34-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src=".idea/images/volleyball.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Sport climbing</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#sportclimbing">View
                            Details</a></button>
                </div>
            </div>
            <!--35-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="cycle.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">bridge</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#bridge">View
                            Details</a></button>
                </div>
            </div>

            <!--            36-->
            <div class="card" id="e_card102">
                <img class="card-img-top" src="lifting.png" alt="Card image cap" class="brand-img"
                    style="height:120px; width:160px; margin-left:50px; margin-top:5px;">
                <div class="card-body">
                    <h5 class="card-title text-muted text-center">Roll ball</h5>
                    <button class=" card-btn" id="card_btn"><a href="src/Game_details.html#rollball">View
                            Details</a></button>
                </div>
            </div>
            <div class="view_games">
                <a href="explore_content.html" class="view">View all</a>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" data-bs-target="#carousel_3" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" id="prev_btn1"></span>
    </button>
    <button class="carousel-control-next" data-bs-target="#carousel_3" data-bs-slide="next" style=" height:30px; ">
        <span class="carousel-control-next-icon" id="next_btn1"></span>
    </button>
</div>
<!--what's new-->
<div class="new-div">
    <div style="margin-top:0px;">
        <h1 id="new"><b style="margin-left: 450px;">What's New?</b></h1>
    </div>
    <div class="card" id="new-card">
        <div class="card-body">
            <div class="card-main" id="card_main1">
                <div class="new-div1">
                    <img id="i_1" src="resources/img/khel-logo.png" alt="">
                </div>
                <div class="new-div2">
                    <b> Going All Online </b>
                </div>
                <div class="new-div3">
                    <img id="i_2" src="resources/img/sag.jpg" alt="">
                </div>
            </div>
            <!--            2div-->
            <div class="card-main" style="margin-left: -200px;">
                <div class="indi-register">
                    <img id="im" src="resources/img/whatsNew/Registration-ss.png" alt=""><br> <br>
                    <span style="color:#ff6131;"><b>Online Registration of:</b></span><br>

                    <a href="src/Institute_registration.html">Institute/School Registration:</a> <br>
                    <a href="src/Team_Register.html"> Team Registration :</a> <br>
                    <a href="src/coach_registration.php"> Coach Registration :</a> <br>
                    <a href="src/individual_registration.php"> Individual Registration:</a>
                </div>
                <div class="map">
                    <img id="im" src="resources/img/whatsNew/mapping.png" alt=""> <br><br>
                    <br>
                    <span style="color:#ff6131;"><b>Student-Coach Mapping.</b></span>
                </div>
                <div class="schedule">
                    <img id="im" src="resources/img/whatsNew/schedule-ss.png" alt="" height="200px" width="400px">
                    <br><br>
                    <br>
                    <span style="color:#ff6131;"><b>Automated Scheduling of Events</b></span>
                </div>
            </div>
            <div class="card-main">
                <div class="stats">
                    <img id="im" src="resources/img/whatsNew/stats.jpg" alt="" height="200px" width="400px">
                    <br><br>
                    <br>
                    <span style="color:#ff6131;"><b>Player stats</b></span>
                </div>
                <div class="finance">
                    <img id="im" src="resources/img/whatsNew/financial.png" alt="" height="200px" width="400px">
                    <br><br>
                    <br>
                    <a href="ptable.html" style=" text-decoration:none;"><b style="color:#ff6131;">Prize
                            distribution</b></a>
                </div>
            </div>
        </div>

        +
    </div>

    <?php include('resources/partials/footer.php') ?>