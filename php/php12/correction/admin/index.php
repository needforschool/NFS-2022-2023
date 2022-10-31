<?php
session_start();

require('../inc/pdo.php');
require('../inc/fonction.php');
require('../inc/request.php');

if(!isAdmin()) {
    header('Location: ../403.php');
}


$articles = getAllPost();

//debug($articles);

include('inc/header-back.php'); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Action</th>
    </tr>

    <?php foreach ($articles as $article) { ?>
        <tr>
            <td><?= $article['id']; ?></td>
            <td><?= $article['title']; ?></td>
            <td>
                <ul>
<!--                    <li><a href="">Voir sur front</a></li>-->
                    <li><a href="editpost.php?id=<?= $article['id']; ?>">Editer</a></li>
<!--                    <li><a href="">Unpublish</a></li>-->
                </ul>
            </td>
        </tr>
    <?php } ?>
</table>
<?php include('inc/footer-back.php');