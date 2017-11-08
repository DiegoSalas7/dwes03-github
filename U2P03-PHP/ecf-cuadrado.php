<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce un numero:
 <br/>
 Numero: <input type="text" name="numero">
 <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else {
    $numero = $_POST['numero'];
    ?>
    <table border = "1">
  <?php  
    for($i=1;$i<=$numero;$i++){
        ?>
          <tr>
          <?php 
        for($j=1;$j<=$numero;$j++){
            if($i%2==0){
                
                ?><td style="padding:3; background-color:lightblue" ><?php echo $i*$j?></td>
                <?php
            }else{
                ?><td style="padding:3" ><?php echo $i*$j?></td><?php
                
            }
            
            
        }
    }
    ?>
    </table>
<?php   
}
?>
<a href="index.php" ><input type="button" value="Volver" ></a>
</body>
</html>