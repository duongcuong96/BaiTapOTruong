<?php 
	if(empty($_SESSION))
	session_start();

	if( isset($_GET["type"]) && $_GET["type"] == "complete" ){
		echo alert("Chúc mừng bạn, Đơn hàng đã được gửi, vui lòng đợi một thời gian dài trước khi hoa bị héo nhé !  ");
		return;
	}
	
	if( empty( $_SESSION["products"]) ){
		echo alert("Bạn chưa đặt sản phẩm nào, vui lòng quay lại mua hoa nhé :D! ");
		return;
	}	


	$products = $_SESSION["products"];

	$total = 0 ;

	for( $i = 0 ; $i < sizeof( $products ) ; $i++ ){
		$total += $products[$i]["price"] * $products[$i]["amount"];
	}



 ?>

 <table class="table">

 	<caption class="alert alert-success">Thanh toán</caption>
 	<thead>
 		<tr>
 			<th>Hình ảnh</th>
 			<th>Tên hoa</th>
 			<th>Số lượng</th>
 			<th>Đơn giá</th>
 			<th>Thành tiền</th>
 			<th>mua thêm</th>
 			<th style="color:red">Xóa</th>
 		</tr>
 	</thead>


 	<tbody>
 		<?php
 			 for( $i = 0 ; $i < sizeof( $products ) ; $i++ ): 
 			 		$p = $products[$i];
 		?>

 		<tr>
 			<td><img class="avatar" src="upload/<?php echo $p['avatar']; ?>" title="<?php echo $p['title'] ?>"/></td>
 			<td><?php echo $p["name"];?></td>
 			<td><?php echo $p["amount"]; ?></td>
 			<td> <?php  echo $p["price"]; ?> </td>
 			<td> <?php  echo $p["price"] * $p["amount"]; ?> </td>
 			<td><a class=" btn-checkout" href="index.php?r=cart&action=add&id=<?php echo $p['id']; ?>" title="Mua thêm một sản phẩm nữa">+1</a></td>
 			<td><a style="color:red" href="index.php?r=cart&action=delete&id=<?php echo $p['id']; ?>" title="Xóa sản phẩm này" onclick="return confirm('bạn chắc chứ !?')">xóa</a></td>
 			<td></td>
 		</tr>

 	<?php endfor;?>

 	<tr class="checkout-footer"> 
 		<td>Thành tiền: </td>
 		<td><?php echo $total; ?> VND</td>
	 	<td style="min-width:300px"><a href="index.php?r=cart&action=complete" class="btn btn-checkout">tiến hành thanh toán ! </a></td>
	</tr>
 	</tbody>
 	
 </table>

