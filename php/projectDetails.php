<?php
$db = new PDO('mysql:host=localhost;dbname=katiagg;charset=utf8','root','');
$id = substr($_GET['id'],0,2);
$req = $db->query("SELECT * FROM newprojects WHERE id=".$id);
$result = $req->fetch();
?>  
  
  <img id="closeDetails" src="img/close.svg" alt="close details" />
  <h3 id="titleDetails"><?php echo $result['title'];?></h3>
  <div id="linksDetails">
  <?php echo $result['links'];?>
  </div>
  <div id="descriptionDetails">
    <?php echo $result['description'];?>
</div>
<div id="technologiesUsed">
    Technologies Used: <span id="technologies"><?php echo $result['technologies'];?></span>
</div>
<div id="dateProject">
<?php echo $result['date'];?>
</div>

<?php
$req->closeCursor();
?>

<script type="text/javascript">

$(function(){

$("#closeDetails").click(function(){
  $("#overlayBody").fadeOut(100);
  $("#detailsProject").hide();
});

});

</script>