<?php
include_once ('./view/common-components/head/view_head.php');
include_once ('./view/common-components/header/view_header.php');

if(isset($_GET['organisation'])){
    include_once ('./view/contents/view.organisation.php');
} else if(isset($_GET['mission'])){
    include_once ('./view/contents/view.mission.php');
} else if(isset($_GET['projets'])){
    include_once ('./view/contents/view.projets.php');
} else if(isset($_GET['equipe'])){
    include_once ('./view/contents/view.equipe.php');
} else {
    include_once ('./view/contents/view.association.php');
}
?>