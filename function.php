<?php function navlink ($arg1 , $arg2) {
    return
        '<li class="nav-item">
        <a class="navlien" aria-current="page" href="' . $arg1 . '">' . $arg2 . '</a>
        </li>';
} ?>

<!-- 
varduump() = console.log
Creation des fichier php avec MAMP
Appeler un fichier "require('function.php');"
Appeler une variable "echo ()" 
Utilisation d'Empty ()
Rendre un site dynamique via php en faisant un fonction pour eviter la repetition (voir function plus haut)
-->

<?php 
$articles1 = [
    "url_img" => "assets/img/activites/bg_activite_1.jpg",
    "date" => "28 OCTOBRE 2024",
    "titre" => "TITRE DE L'ACTUALITÉ SUR UNE OU DEUX LIGNES EN MAJIUSCULE",
    "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptate
    cupiditate
    similique temporibus. Voluptatem laborum iste id laboriosam itaque voluptas. Ipsa in laboriosam
    corporis
    obcaecati dolorem est cumque porro voluptatum?",
    "url_lien" => "404.php"
]
?>
<img class="mb-3 image" src=<?php echo $articles1["url_img"]?> alt="">
<p class="card-text"><strong><?php echo $articles1["date"]?></strong></p>
<h3 class="card-title"><strong><?= $articles1["titre"]?></strong></h3>
<p class="card-text ptext mb-2"><?= $articles1["text"]?></p>
<a class="mainlink1" href=<?php echo $articles1["url_lien"]?>>
  <p><strong>LIRE LA SUITE</strong></p>
</a>


<?php 
$articles2 = [
    "url_img" => "assets/img/activites/bg_activite_2.jpg",
    "date" => "26 OCTOBRE 2024",
    "titre" => "TITRE DE L'ACTUALITÉ SUR UNE OU DEUX LIGNES EN MAJIUSCULE",
    "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptate
    cupiditate
    similique temporibus. Voluptatem laborum iste id laboriosam itaque voluptas. Ipsa in laboriosam
    corporis
    obcaecati dolorem est cumque porro voluptatum?",
    "url_lien" => "404.php"
]
?>

<img class="mb-3 image" src=<?php echo $articles2["url_img"]?> alt="">
<p class="card-text"><strong><?php echo $articles2["date"]?></strong></p>
<h3 class="card-title"><strong><?php echo $articles2["titre"]?></strong></h3>
<p class="card-text ptext mb-2"><?php echo $articles2["text"]?></p>
<a class="mainlink1" href=<?php echo $articles2["url_lien"]?>>
  <p><strong>LIRE LA SUITE</strong></p>
</a>


<?php 
$articles3 = [
    "url_img" => "assets/img/activites/bg_activite_3.jpg",
    "date" => "22 OCTOBRE 2024",
    "titre" => "TITRE DE L'ACTUALITÉ SUR UNE OU DEUX LIGNES EN MAJIUSCULE",
    "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptate
    cupiditate
    similique temporibus. Voluptatem laborum iste id laboriosam itaque voluptas. Ipsa in laboriosam
    corporis
    obcaecati dolorem est cumque porro voluptatum?",
    "url_lien" => "404.php"
]
?>

<img class="mb-3 image" src=<?php echo $articles3["url_img"]?> alt="">
<p class="card-text"><strong><?php echo $articles3["date"]?></strong></p>
<h3 class="card-title"><strong><?php echo $articles3["titre"]?></strong></h3>
<p class="card-text ptext mb-2"><?php echo $articles3["text"]?></p>
<a class="mainlink1" href=<?php echo $articles3["url_lien"]?>>
  <p><strong>LIRE LA SUITE</strong></p>
</a>