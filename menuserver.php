<?php 

	$host        = "host = ec2-50-16-196-57.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = dcm93kbr90info";
	$credentials = "user = oostgnbdygtoto password=8d8fff9ac1a7fdcc85ac1624f2504ac86d79804556c7a62a604cd5c12dfd1d8e";

   $db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db) {
     echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
  }

	 //initialize variables
	$name = "";
	$item1 = "";
	$id = 0;
	$a='IDLY';
	$b='Sambar IDLY';
	$c='MINI IDLY';
	$d='Dosai';
	$e='Pongal';
	$f='Kitchidi';
	$g='Masala Dosai';
	$h='Podi Dosai';
	$i='Podi Masala Dosai';
	$j='Onion Dosai';
	$k='Rava Dosai';
	$l='Rava Masala Dosai';
	$m='Onion Rava Dosai';
	$n='Plain Uthappam';
	$o='Onion Uthappam';
	$p='Tomato Uthappam';
	$q='Ghee Roast';
	$r='Mega Paper Roast';
	$s='Chapathi (2)';
	$t='Paratha (2)&';
	$u='Poori (2)';
	$v='Chola Puri';
	$w='Idiyappam';
	$x='Kothu Paratha';
	$y='Bonda';
	$z='Bajji';
	$aa='Coffee';
	$bb='Tea';
	$cc='Juices';
	$dd='Paneer Tikka';
	$ee='Veg Fried Rice';
	$ff='Paneer Fried Rice';
	$gg='Mushroom Fried Rice';
	$hh='Gobi Fried Rice';
	$ii='Veg Noodles';
	$jj='Paneer Noodles';
	$kk='Gobi Noodles';
	$ll='Veg Pulav&';
	$mm='Paneer Pulav';
	$nn='Gobi Pulav';
	$oo='Veg Biryani';
	$pp='Paneer Biryani';
	$qq='Chilly Idly';

	
	
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$item1 = $_POST['item1'];
		$item2 = $_POST['item2'];
		$item3 = $_POST['item3'];
		$item4 = $_POST['item4'];
		$item5 = $_POST['item5'];
		$item6 = $_POST['item6'];
		$item7 = $_POST['item7'];
		$item8 = $_POST['item8'];
		$item9 = $_POST['item9'];
		$item10 = $_POST['item10'];
		$item11 = $_POST['item11'];
		$item12 = $_POST['item12'];
		$item13 = $_POST['item13'];
		$item14 = $_POST['item14'];
		$item15 = $_POST['item15'];
		$item16 = $_POST['item16'];
		$item17 = $_POST['item17'];
		$item18 = $_POST['item18'];
		$item19 = $_POST['item19'];
		$item20 = $_POST['item20'];
		$item21 = $_POST['item21'];
		$item22 = $_POST['item22'];
		$item23 = $_POST['item23'];
		$item24 = $_POST['item24'];
		$item25 = $_POST['item25'];
		$item26 = $_POST['item26'];
		$item27 = $_POST['item27'];
		$item28 = $_POST['item28'];
		$item29 = $_POST['item29'];
		$item30 = $_POST['item30'];
		$item31 = $_POST['item31'];
		$item32 = $_POST['item32'];
		$item33 = $_POST['item33'];
		$item34 = $_POST['item34'];
		$item35 = $_POST['item35'];
		$item36 = $_POST['item36'];
		$item37 = $_POST['item37'];
		$item38 = $_POST['item38'];
		$item39 = $_POST['item39'];
		$item40 = $_POST['item40'];
		$item41 = $_POST['item41'];
		$item42 = $_POST['item42'];

				if($item1>0){$order= $order."_".$a.$item1;}
		if($item2>0){$order= $order."_".$b.$item2;}
		if($item3>0){$order= $order."_".$c.$item3;}
		if($item4>0){$order= $order."_".$d.$item4;}
		if($item5>0){$order= $order."_".$e.$item5;}
		if($item6>0){$order= $order."_".$f.$item6;}
		if($item7>0){$order= $order."_".$g.$item7;}
		if($item8>0){$order= $order."_".$h.$item8;}
		if($item9>0){$order= $order."_".$i.$item9;}
		if($item10>0){$order=$order."_".$j.$item10;}
		if($item11>0){$order=$order."_".$k.$item11;}
		if($item12>0){$order=$order."_".$l.$item12;}
		if($item13>0){$order=$order."_".$m.$item13;}
		if($item14>0){$order=$order."_".$n.$item14;}
		if($item15>0){$order=$order."_".$o.$item15;}
		if($item16>0){$order=$order."_".$p.$item16;}  
		if($item17>0){$order=$order."_".$q.$item17;}
		if($item18>0){$order=$order."_".$r.$item18;}
		if($item19>0){$order=$order."_".$s.$item19;}
		if($item20>0){$order=$order."_".$t.$item20;}
		if($item21>0){$order=$order."_".$u.$item21;}
		if($item22>0){$order=$order."_".$v.$item22;}
		if($item23>0){$order=$order."_".$w.$item23;}
		if($item24>0){$order=$order."_".$x.$item24;}
		if($item25>0){$order=$order."_".$y.$item25;}
		if($item26>0){$order=$order."_".$z.$item26;}
		if($item27>0){$order=$order."_".$aa.$item27;}
		if($item28>0){$order=$order."_".$bb.$item28;}
		if($item29>0){$order=$order."_".$cc.$item29;}
		if($item30>0){$order=$order."_".$dd.$item30;}
		if($item31>0){$order=$order."_".$ee.$item31;}
		if($item32>0){$order=$order."_".$ff.$item32;}
		if($item33>0){$order=$order."_".$gg.$item33;}
		if($item34>0){$order=$order."_".$hh.$item34;}
		if($item35>0){$order=$order."_".$ii.$item35;}
		if($item36>0){$order=$order."_".$jj.$item36;}
		if($item37>0){$order=$order."_".$kk.$item37;}
		if($item38>0){$order=$order."_".$ll.$item38;}
		if($item39>0){$order=$order."_".$mm.$item39;}
		if($item40>0){$order=$order."_".$nn.$item40;}
		if($item41>0){$order=$order."_".$oo.$item41;}
		if($item42>0){$order=$order."_".$pp.$item42;}
		pg_query($db, "INSERT INTO menu (name, item) VALUES ('$name', '$order')"); 
		$_SESSION['message'] = "Successfully saved"; 
		header('location: menu.php');
	}
	
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$item1 = $_POST['item1'];

	pg_query($db, "UPDATE menu SET name='$name', item='$item1' WHERE id=$id");
	$_SESSION['message'] = "Successfully updated!"; 
	header('location: menu.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	pg_query($db, "DELETE FROM menu WHERE id=$id");
	$_SESSION['message'] = "Successfully deleted!"; 
	header('location: menu.php');
}
