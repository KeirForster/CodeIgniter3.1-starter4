<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<body>

<?php foreach($cat as $c) {?>

<div class="row" style = "height:300px; display: inline-block;">  
    <h1><?php echo strtoupper ($c->catName);?></h1>
    <?php foreach($acc as $a) {
        if (strcmp($a->catCode,$c->catCode)==0) {?>
    <div class="w3-container" style= " display: inline-block;">
        <div class="w3-card-4" style="width:400px">
            <div class="w3-container">
            <img src=<?php echo 'img//'.$a->accName.'.png';?> 
                alt="Avatar" class="w3-left w3-margin-right" style="width:200px">
            <p>Code: <?php echo $a->accCode;?> 
                <br>Name: <?php echo $a->accName;?> 
                <br>Pretty: <?php echo $a->att1;?> 
                <br>Cool: <?php echo $a->att2;?> 
                <br>Wacky: <?php echo $a->att3;?>
            </p>
            </div>
        </div>
    </div>
</div>

<?php }}}?>
<br>
</body>