<?php
include_once ('./view/common-components/head/view_head.php');
include_once ('./view/common-components/header/view_header.php');

if(isset($_GET['parrainer'])){
    include_once ('./view/contents/view.parrainer.php');
} else if(isset($_GET['don'])){
    include_once ('./view/contents/view.don.php');
} else if(isset($_GET['benevole'])){
    include_once ('./view/contents/view.benevole.php');
} else {
    include_once ('./view/contents/view.soutenir.php');
}
?>