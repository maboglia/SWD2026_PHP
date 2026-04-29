<h1>About Us</h1>

<p>Welcome to our website! We are a team of passionate individuals dedicated to providing high-quality services and products to our customers. Our mission is to deliver exceptional value and exceed our clients' expectations.</p>

<?php

$contatore = 0;

if (isset($_GET["counter"])) {
    $contatore = $_GET["counter"];
}  

function incrementa(){
    global $contatore;
    $contatore++;
}

function decrementa(){
    global $contatore;
    $contatore--;
}

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'incrementa') {
        incrementa();
    } elseif ($action == 'decrementa') {
        decrementa();
    }
}

?>


<?php

    $calciatori = ['Ronaldo', 'Messi', 'Neymar', 'Mbappé', 'Lewandowski'];
    $calciatori_img = ['img/ronaldo.jpg', 'img/messi.jpg', 'img/neymar.jpg', 'img/mbappe.jpg', 'img/lewandowski.jpg'];



?>

<h3>Contatore = <?= $contatore ?></h3>

<h4><?= $calciatori[$contatore % count($calciatori)] ?></h4>

<div>
    <a href="?page=about&action=incrementa&counter=<?= $contatore ?>" class="btn">
    <img src="<?= $calciatori_img[$contatore % count($calciatori_img)] ?>" alt="<?= $calciatori[$contatore % count($calciatori)] ?>">
    </a>
</div>



