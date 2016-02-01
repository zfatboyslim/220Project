<?php
  session_start();
  if(isset($_SESSION['ses_userid'])){
  $ses_userid = $_SESSION['ses_userid'];
  }
  else{
    $ses_userid = null;
  }
  if(isset($_SESSION['ses_username'])){
  $ses_user = $_SESSION['ses_username'];
  }

    require_once('/../cfg/sql.php');

	$result = $mydb->query("SELECT * FROM cart WHERE username='".$_SESSION['ses_username']."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		}

	
	$result = $mydb->query("SELECT COUNT(*) FROM cart WHERE username='" . $_SESSION['ses_username'] ."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
		}

		$totalrecord = $countdata[0][0];
?>
<html>
	<table>
		<tr>
			<td>Product Name</td>
			<td>Image</td>
			<td>Description</td>
			<td>Price</td>
			<td>Quantity</td>
			<td></td>
		</tr>
		<?php if($totalrecord > 0){
			for($myrow=0; $myrow <$totalrecord; $myrow++) {  

			$result = $mydb->query("SELECT * FROM product WHERE productID='".$data[$myrow]['productID']."'")  or die("There is SQL Statement error");
			while($row = mysqli_fetch_array($result)) {
			$prod = $row;
			}
			echo "<tr><td>".$prod['productName']."</td>";
			echo "<td>".$prod['image']."</td>";
			echo "<td>".$prod['desc']."</td>";
			echo "<td>".$prod['price']."</td>";
			echo "<td>".$data[$myrow]['quantity']."</td>";
			echo "<td><a href='../controllers/cartdelete.php?productID=".$data[$myrow]['productID']."'>Delete</a></td></tr>";
			}
		}
		?>	
	</table>
<html>