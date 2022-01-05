<?php foreach($detailArticles as $articles):?>
<article>
    <!--le titre de l'article c'est un lien hypertexte vers la page article.php donc on va envoyé la variable $articles["id"] en utilisant la methode GET (dans le lien) dans l'attribut href de la balise html <a/> -->
    
    <h1="title</h3"><a href="article.php?myArticle=<?=$articles["id"] ?>"><?=$articles["titre"] ?></a></h1>
    <p class="contenu"><?= substr($articles["contenu"],0,20) ?><a class="more" href="">[...]</a></p>
    <h5 class="auteur"><?= $articles["nom"]." ".$articles["prenom"]?></h5>
    <h6 class="date"><?= $articles["date"]?></h6>
    <img src="img/<?=$articles["image"]?>" >
    
</article>
<?php endforeach;?>

<aside>
         <h2>les 5 derniers commentaires </h2>
    <div id="ajax">
       
    </div>
   
    </aside>
