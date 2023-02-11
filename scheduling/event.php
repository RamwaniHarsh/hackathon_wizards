<?php
include("../resources/partials/header.php");
?>
<link rel="stylesheet" href="../../resources/partials/css/header.css">

<!-- <link rel="stylesheet" href="../../css/style.css"> -->
<?php
include("../resources/partials/top-container.php");
?>
<style>
        .p1 {
            border: 2px solid grey;
            height: 75px;
            width: 50px;
            display: flex;
            float: left;
            font-size: 50px;
            margin-left: 35%;
            justify-content: center;
        }

        .p2 {
            border: 2px solid grey;
            height: 75px;
            width: 50px;
            display: flex;
            font-size: 50px;
            margin-left: 60%;
            justify-content: center;
        }
</style>
</head>

<body onload="checkMatches()">


<script>
function createMatch(team1, team2) {
    var t1 = document.createElement('p');
    t1.textContent = team1;
    t1.setAttribute('class', 'p1');
    t1.setAttribute('id', 'p1');
    document.body.appendChild(t1);

    var t2 = document.createElement('p');
    t2.textContent = team2;
    t2.setAttribute('class', 'p2');
    t2.setAttribute('id', 'p2');
    document.body.appendChild(t2);
}

function checkMatches() {
    let arr1 = [1, 2, 3, 4, 5];
    let arr2 = [6, 7, 8, 9, 10];

    while (arr1.length > 0) {
        match();
    }

    function match() {
        var arr1ItemIndex = Math.floor(Math.random() * arr1.length);
        var arr2ItemIndex = Math.floor(Math.random() * arr2.length);

        var arr1Item = arr1[arr1ItemIndex];
        var arr2Item = arr2[arr2ItemIndex];
        console.log("Match: " + arr1Item + " vs " + arr2Item);

createMatch(arr1Item, arr2Item);

arr1.splice(arr1ItemIndex, 1);
arr2.splice(arr2ItemIndex, 1);
}
}
</script>
<!-- <link rel="stylesheet" href="../../resources/partials/css/footer.css"> -->
<?php

// include("../resources/partials/footer.php");

?>