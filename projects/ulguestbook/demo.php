<?php
$_PAGETITLE = "UL Guestbook Demo";
include("../../head.php");
include("ulguestbook.php");
?>
<p><a href="./">&laquo; Leave this demo and go back</a></p>
<style type="text/css">
.ulguestbook_entry { padding: 10px; margin-bottom: 10px;}
.ulguestbook_even { background: #F3F3F3; border: 1px solid #E6E6E6;}
.ulguestbook_odd { background: #FAFAFA; border: 1px solid #E6E6E6;}

.ulguestbook_author { font-weight: bold;}
.ulguestbook_date { font-size: 80%; color: #999; padding-left: 10px;}
.ulguestbook_header { margin-bottom: 5px;}
</style>
<?php
ul_printGuestbook();
?>

<?php include("../../bottom.php") ?>