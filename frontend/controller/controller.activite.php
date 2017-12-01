<?php
include_once ('./view/common-components/head/view_head.php');
include_once ('./view/common-components/header/view_header.php');

if(isset($_GET['education'])){
    include_once ('./view/contents/view.education.php');
} else if(isset($_GET['formation'])){
    include_once ('./view/contents/view.formation.php');
} else if(isset($_GET['soutienfamilles'])){
    include_once ('./view/contents/view.soutienfamilles.php');
} else if(isset($_GET['resultat'])){
    include_once ('./view/contents/view.resultat.php');
} else if(isset($_GET['materiel'])){
    include_once ('./view/contents/view.materiel.php');
} else {
    include_once ('./view/contents/view.activite.php');
}
?>