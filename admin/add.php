<?php
session_start();
require('../dbconfig.php');
$admin= $_SESSION['admin'];
if($admin=="")
{header('location:../index.php');}
extract($_POST);
if(isset($save))
{

$query="INSERT INTO `course details`(`tutorial`, `website`, `price`, `time duration`, `t_quali`, `cid`) VALUES('$tu','$ur','$price','$time','$mentor','$cat')";
mysqli_query($conn,$query)or die(mysqli_error($conn));

$err="<font color='blue'><h3 align='center'>Adicionado com Sucesso!!<h3></font>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comparação de Preço</title>
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/business-frontpage.css" rel="stylesheet">

  <link href="../css/style.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>
  <!-- /navigation -->

  <div class="container"><br>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <form method="post">
          <table class="table table-bordered" style="margin-bottom:50px">
            <tr><h2 align="center">Adicione as informações do Produtos</h2></tr>
            <tr>
              <td colspan="2"><?php echo @$err;?></td>
            </tr>
            
            <tr>
              <td>Selecione a Loja</td>
              <td><select name="tu" id="" class="form-control">
                 <option value="">Selecione</option>
          <?php  $res=mysqli_query($conn,"select * from tutorial");
      while($row=mysqli_fetch_array($res)){
        $temp=$row['tid'];
        
        echo "<option value='$temp'>"; echo $row["name"]; echo "</option>";
       

      }

       ?>
              </select></td>
            </tr>
            <tr>
              <td>Link </td>
              <td><input type="url" name="ur" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Digite o Preço </td>
              <td><input type="number" name="price" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Tempo</td>
              <td><input  type="text" name="time" class="form-control" required/></td>
            </tr>
            
            <tr>
              <td>Digite uma Dica</td>
              <td><input type="text" name="mentor" class="form-control" required/></td>
            </tr>
             <tr>
              <td>Selecione a Categoria</td>
              <td><select name="cat" id="" class="form-control">
                 <option value="">Selecione</option>
          <?php  $re=mysqli_query($conn,"select * from course");
      while($roww=mysqli_fetch_array($re)){
        $temp=$roww['cid'];
        
        echo "<option value='$temp'>"; echo $roww["Category"]; echo "</option>";
       

      }

       ?>
              </select></td>
            </tr>
            <tr>
                <Td colspan="2" align="center">
                <input type="submit" value="Salvar" class="btn btn-info" name="save"/>
                <input type="reset" value="Resetar" class="btn btn-info"/>
                
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div></div>
<!-- Footer -->
  <?php include("../footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
