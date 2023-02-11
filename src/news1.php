<?php include('resources/partials/header.php')?>

<link rel="stylesheet" href="css/news.css">

<?php include('resources/partials/top-container.php')?>

<h1 class="news-text">KhelMahakumbh News</h1>

<div class="news-outlet">

    <div class="news-section">

        <div class="news_cards">
            <h5>Feb 9 2023</h5>
            <h3>Srikanth Kidambi is one of the stylist Indian badminton players who trains at the Gopichand Badminton Academy, Hyderabad.
                He was ranked 1 in the bwf ranking in 2018 he is also a winner of the Padma Shri and the Arjuna award he became the first ever Indian to reach the World Championship final in the men's singles discipline and won the silver medal.
                He was born in Ravulapalem, Andhra Pradesh to a Telugu family.
                His father, KVS Krishna is a landlord, and his mother Radha a house-wife and his older brother K. Nandagopal is also a badminton player and junior national champion with his brother.</h3>
            <p>- Srikanth Kidambi</p>
        </div>

        <div class="news_cards">
            <h5>Feb 8 2023</h5>
            <h3>Manpreet Singh is one of the top-ranked players in the game.
                He is a part of the popular Indian national hockey team. He plays the game as a Midfielder.
                Manpreet is currently a part of the club Punjab Armed Police where he is from team India in the game.</h3>
            <p>- Manpreet Singh</p>
        </div>

        <div class="news_cards">
            <h5>Feb 7 2023</h5>
            <h3>Karthik Madhu has been a part of the Indian Volleyball team and captained the team during the Asian Men's Volleyball Championship.
                He has been named as the “Heartbeat of Spikers” for the upcoming RuPay Prime Volleyball League where he will be captaining the Kochi Blue Spikers.</h3>
            <p>- Karthik Madhu</p>
        </div>

        <div id="news_cards1">

        </div>
<textarea name="" id="textarea" cols="90" rows="10" style="margin-left:30px;margin-top:10px;">
</textarea>
<br>
<!--<a class="btn btn-primary" href="" id="add-btn">Add</a>-->
<button id="add-btn" onclick="content()">Add</button>
<button id="rem-btn" onclick="Remove()">Remove</button>

<style>
#add-btn{
text-decoration:none;
border:1px solid black;
height:30px;
width:675px;
cursor:pointer;
border-radius:15px;
background-color: green;
color:white;
margin-left:30px;
margin-top:3px;
}
#rem-btn{
text-decoration:none;
border:1px solid black;
height:30px;
width:675px;
cursor:pointer;
border-radius:15px;
background-color: red;
color:white;
margin-left:30px;
margin-top:3px;
}
</style>
<script>
function content(){
    let a = document.getElementById('textarea').value;
    
   let b =  document.getElementById('news_cards1');
    let c = document.createElement("div");
   c.style.height="200px";
   c.style.width="880px";
   c.style.border="2px solid grey";
   c.style.backgroundColor="white";
   c.style.marginLeft="30px";
   c.style.marginTop="10px";
   c.style.borderRadius="8px";
   c.style.padding="10px";
   c.style.border="white";
   c.id="divo"
   c.innerHTML=a;
   b.appendChild(c);
}
function Remove(){
    const element =document.getElementById('divo');
    element.remove();
}
</script>

    </div>
    
    <div class="infobox">
       <h5>Hyperlinks</h5>
       <hr> 
       <marquee behavior="scroll" class="myMarquee" direction="up">
         <ul>
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>
              <li><a href="#">Link 4</a></li>
              <li><a href="#">Link 5</a></li>
              <li><a href="#">Link 6</a></li>
              <li><a href="#">Link 7</a></li>
              <li><a href="#">Link 8</a></li>
              <li><a href="#">Link 9</a></li>
              <li><a href="#">Link 10</a></li>
            </ul>
        </marquee>
    </div>    
</div>


<?php include('resources/partials/footer.php')?>