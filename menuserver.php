<?php 

	$host        = "host = 127.0.0.1";
	$port        = "port = 5432";
	$dbname      = "dbname = TTA";
	$credentials = "user = postgres password=root";

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

		$order=$a.$item1."_".$b.$item2."_".$c.$item3."_".$d.$item4."_".$e.$item5."_".
		$f.$item6."_".$g.$item7."_".$h.$item8."_".$i.$item9."_".$j.$item10."_".$k.$item11."_".
		$l.$item12."_".$m.$item13."_".$n.$item14."_".$o.$item15."_".$p.$item16."_".$q.$item17."_".
		$r.$item18."_".$s.$item19."_".$t.$item20."_".$u.$item21."_".$v.$item22."_".$w.$item23."_".
		$x.$item24."_".$y.$item25."_".$z.$item26."_".$aa.$item27."_".$bb.$item28."_".$cc.$item29."_".
		$dd.$item30."_".$ee.$item31."_".$ff.$item32."_".$gg.$item33."_".$hh.$item34."_".$ii.$item35."_".
		$jj.$item36."_".$kk.$item37."_".$ll.$item38."_".$mm.$item39."_".$nn.$item40."_".$oo.$item41."_".
		$pp.$item42."_".$qq.$item1."_";
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