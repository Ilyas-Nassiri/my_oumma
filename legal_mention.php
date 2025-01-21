<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/tailwind-config.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="font-ubuntu bg-grayLightest">
<?php include('./globals/header.php'); ?>

<?php
// Lire le fichier JSON
$jsonData = json_decode(file_get_contents('./json/legal_mention.json'), true);
?>

<div class="flex flex-col items-center w-full px-5 sm:px-10 py-5 sm:py-10">
    <img onclick="window.history.back()" class="rotate-90 cursor-pointer absolute h-6 top-[50px] left-[5px] sm:top-[60px] sm:left-[20px]" src="./assets/images/svg/Mo Btn flesh Opal 20 20.svg" alt="Back Button">
    <h2 class="text-xl w-8/12 mx-auto font-ubuntu font-bold text-grayM text-center"><?= $jsonData['title'] ?></h2>
    <!--<div class="text-gray-600 font-bold text-center" id="updated"></div>-->
    <img src="./assets/images/svg/Mo Icn avocat 100 100.svg" alt="Article Icon">
    
    <div class="flex justify-start mx-[18px] w-full sm:mx-10 border-b border-grayLii py-3">
        <!-- Image dynamique pour toggle selon openAll -->
        <img onclick="toggleAll()" class="w-6 cursor-pointer" id="toggle-icon" src="./assets/images/svg/open-all.svg" alt="Toggle Icon">
    </div>

    <div class="mx-[18px] w-full sm:mx-10 mt-5 pb-10" id="articles-container">
    <?php
    // Initialisation de variables pour gérer l'ouverture/fermeture
    $openAll = true;
    $openedArticleId = -1;
    ?>

    <!-- Boucle pour afficher les articles -->
    <?php foreach ($jsonData['articles'] as $index => $article): ?>
        <?php
        $isOpen = ($openAll || $openedArticleId == $index) ? 'block' : 'hidden';
        $toggleIcon = ($openAll || $openedArticleId == $index) ? 'flresh-top.svg' : 'flesh-bottom.svg';
        ?>

        <div class="py-3 border-b border-grayLii">
            <div class="flex justify-between">
                <div class="flex">
                    <span class="text-blueLightes text-sm font-ubuntu font-bold"><?= ($index + 1) ?>.</span>
                    <h1 class="text-blueLightes text-sm font-ubuntu font-bold"><?= $article['title'] ?></h1>
                </div>
                <img class="cursor-pointer" src="./assets/images/svg/<?= $toggleIcon ?>" alt="Toggle Icon" onclick="toggleArticle(<?= $index ?>)">
            </div>

            <div class="font-ubuntu text-sm pt-4 pb-2 <?= $isOpen ?>" id="article-<?= $index ?>">
                <?= $article['content'] ?>
            </div>
        </div>

    <?php endforeach; ?>
    </div>
</div>

<?php include('./globals/footer.php'); ?>

<script>
    let openedArticleId = -1;
    let openAll = true;

    function toggleArticle(index) {
        const contentDiv = document.getElementById('article-' + index);
        const toggleIcon = document.querySelectorAll('[onclick="toggleArticle(' + index + ')"]')[0];
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleIcon.src = "./assets/images/svg/flresh-top.svg";  // Afficher l'icône de fermeture
            openedArticleId = index;
        } else {
            contentDiv.style.display = 'none';
            toggleIcon.src = "./assets/images/svg/flesh-bottom.svg";  // Afficher l'icône d'ouverture
            openedArticleId = -1;
        }
    }

    function toggleAll() {
        const allArticles = document.querySelectorAll('[id^="article-"]');
        const allIcons = document.querySelectorAll('[onclick^="toggleArticle"]');
        const toggleIcon = document.getElementById('toggle-icon');
        
        if (openAll) {
            allArticles.forEach(function (article) {
                article.style.display = 'block';
            });
            allIcons.forEach(function (icon) {
                icon.src = "./assets/images/svg/flresh-top.svg"; 
            });
            
            toggleIcon.src = "./assets/images/svg/open-all.svg";   
        } else {
            allArticles.forEach(function (article) {
                article.style.display = 'none';
            });
            allIcons.forEach(function (icon) {
                icon.src = "./assets/images/svg/flesh-bottom.svg"; 
            });
            toggleIcon.src = "./assets/images/svg/menu-reglement.svg";
        }

        openAll = !openAll;
    }
</script>

</body>
</html>
