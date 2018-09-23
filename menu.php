<?php 
include('menuserver.php'); ?>

<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120237294-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-120237294-1');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="">
<title>TNPSC Toppers Academy</title>
<link rel="stylesheet" type="text/css" href="code.css">
<link rel="icon" href="logo.png">
<script src="code.js"></script>
<style>
.quantity
		{
		border-style:ridge;
		width:50px;
		float: right;
		margin-right:10px;
		}
</style>
</head>
<body>

<!-- code for showing message -->
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<!--ends here-->
<!-- to display the details from the db in html -->
<?php $results = pg_query($db, "SELECT * FROM menu"); ?>


<div class="topnav" id="myTopnav">
  <a href="#Title" class="active"><b>K Sudharsan</b></a>
  <a href="#tagline">Alien</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<center><h3 class="head1index">Celebrating 22nd bday on 22nd Sep 2018</h3></center>
<!--<center>
<div id="question0" class="tabcontent">
 <input class="textbox1" type="password" name="login" value="" id="login" placeholder="Enter the Code to Start the Test"  />
 <br><br>
 <input id="button3" type="submit" name="commit" value="START" onclick="codevalidate1();" />
</div>-->
<center>
<div id="question0" class="tabcontent">
<br><div style="text-align: center;"><a href="#"><img class="TTAlogoimg" src="menu12.jpg"  width="300" height="345"></a></div><br>
 <input id="button3" type="submit" name="commit" value="Open Menu Card" onclick="openCity(event, 'question1')" /><br><br>
</div>


<div id="question1" class="tabcontent">
<br><!--<div style="text-align: center;"><a href="#"><img class="TTAlogoimg" src="menu1.jpg"  width="300" height="345"></a></div><br>-->
<form method="post" action="menuserver.php" >
<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<label>Your Nice Name:</label>
		<input type="text" name="name" value="<?php echo $name; ?>" required></input>

	<H3 class="head1index">Tiffin</h3>
	<p class="p1index">IDLY&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item1" value="<?php echo $item1; ?>" ></input><br>
	
	<p class="p1index">Sambar IDLY&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item2" value="<?php echo $item2; ?>"></input><br>
	
	<p class="p1index">MINI IDLY&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item3" value="<?php echo $item3; ?>"></input><br>
	
	<p class="p1index">Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item4" value="<?php echo $item4; ?>"></input><br>
	
	<p class="p1index">Pongal&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item5" value="<?php echo $item5; ?>"></input><br>
	
	<p class="p1index">Kitchidi&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item6" value="<?php echo $item6; ?>"></input><br>
	
	<p class="p1index">Masala Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item7" value="<?php echo $item7; ?>"></input><br>
	
	<p class="p1index">Podi Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item8" value="<?php echo $item8; ?>"></input><br>
	
	<p class="p1index">Podi Masala Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item9" value="<?php echo $item9; ?>"></input><br>
	
	<p class="p1index">Onion Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item10" value="<?php echo $item10; ?>"></input><br>
	
	<p class="p1index">Rava Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item11" value="<?php echo $item11; ?>"></input><br>
	
	<p class="p1index">Rava Masala Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item12" value="<?php echo $item12; ?>"></input><br>
	
	<p class="p1index">Onion Rava Dosai&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item13" value="<?php echo $item13; ?>"></input><br>
	
	<p class="p1index">Plain Uthappam&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item14" value="<?php echo $item14; ?>"></input><br>
	
	<p class="p1index">Onion Uthappam&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item15" value="<?php echo $item15; ?>"></input><br>
	
	<p class="p1index">Tomato Uthappam&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item16" value="<?php echo $item16; ?>"></input><br>
	
	<p class="p1index">Ghee Roast&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item17" value="<?php echo $item17; ?>"></input><br>
	
	<p class="p1index">Mega Paper Roast&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item18" value="<?php echo $item18; ?>"></input><br>
	
	<p class="p1index">Chapathi (2)&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item19" value="<?php echo $item19; ?>"></input><br>
	
	<p class="p1index">Paratha (2)&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item20" value="<?php echo $item20; ?>"></input><br>
	
	<p class="p1index">Poori (2)&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item21" value="<?php echo $item21; ?>"></input><br>
	
	<p class="p1index">Chola Puri&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item22" value="<?php echo $item22; ?>"></input><br>
	
	<p class="p1index">Idiyappam&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item23" value="<?php echo $item23; ?>"></input><br>
	
	<p class="p1index">Kothu Paratha&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item24" value="<?php echo $item24; ?>"></input><br>
	<H3 class="head1index">Snacks</h3>
	<p class="p1index">Bonda&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item25" value="<?php echo $item25; ?>"></input><br>
	
	<p class="p1index">Bajji&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item26" value="<?php echo $item26; ?>"></input><br>
	
	<p class="p1index">Coffee&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item27" value="<?php echo $item27; ?>"></input><br>
	
	<p class="p1index">Tea&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item28" value="<?php echo $item28; ?>"></input><br>
	
	<p class="p1index">Juices&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item29" value="<?php echo $item29; ?>"></input><br>
	
	<p class="p1index">Paneer Tikka&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item30" value="<?php echo $item30; ?>"></input><br>
	<H3 class="head1index">Chinese Tandoori</h3>
	<p class="p1index">Veg Fried Rice&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item31" value="<?php echo $item31; ?>"></input><br>
	
	<p class="p1index">Paneer Fried Rice&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item32" value="<?php echo $item32; ?>"></input><br>
	
	<p class="p1index">Mushroom Fried Rice&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item32" value="<?php echo $item32; ?>"></input><br>
	
	<p class="p1index">Gobi Fried Rice&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item33" value="<?php echo $item33; ?>"></input><br>
	
	<p class="p1index">Veg Noodles&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item34" value="<?php echo $item34; ?>"></input><br>
	
	<p class="p1index">Paneer Noodles&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item35" value="<?php echo $item35; ?>"></input><br>
	
	<p class="p1index">Gobi Noodles&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item36" value="<?php echo $item36; ?>"></input><br>
	
	<p class="p1index">Veg Pulav&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item37" value="<?php echo $item37; ?>"></input><br>
	
	<p class="p1index">Paneer Pulav&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item38" value="<?php echo $item38; ?>"></input><br>
	
	<p class="p1index">Gobi Pulav&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item39" value="<?php echo $item39; ?>"></input><br>
	
	<p class="p1index">Veg Biryani&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item40" value="<?php echo $item40; ?>"></input><br>
	
	<p class="p1index">Paneer Biryani&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item41" value="<?php echo $item41; ?>"></input><br>
	
	<p class="p1index">Chilly Idly&nbsp;&nbsp; 
	<input type="number" class="quantity" name="item42" value="<?php echo $item42; ?>"></input><br>
	
<br>
	
	<center> <input id="button3" type="submit" name="save" /></center><br>
</form>
</div>   
<script>
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value;
}

</script>

<script>
document.getElementById("question0").style.display = "block";
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
   
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>


<script>
//code 
function codevalidate1() 
  {
            if (document.getElementById("login").value == "1922") 
   {
    openCity(event, 'question1');
            } else if (document.getElementById("login").value == "01052209")
   {
                openCity(event, 'question1');
            } else
   {
    alert("Please Enter the Valid Code");
   }
    
        }
  
document.addEventListener('contextmenu', event => event.preventDefault());

shortcut = {
    all_shortcuts: {},
      add: function (e, t, n) {
        var r = {
          type: "keydown",
          propagate: !1,
          disable_in_input: !1,
          target: document,
          keycode: !1
        };
        if (n) for (var i in r) "undefined" == typeof n[i] && (n[i] = r[i]);
        else n = r;
        r = n.target, "string" == typeof n.target && (r = document.getElementById(n.target)), e = e.toLowerCase(), i = function (r) {
          r = r || window.event;
          if (n.disable_in_input) {
            var i;
            r.target ? i = r.target : r.srcElement && (i = r.srcElement), 3 == i.nodeType && (i = i.parentNode);
            if ("INPUT" == i.tagName || "TEXTAREA" == i.tagName) return
          }
		  
          r.keyCode ? code = r.keyCode : r.which && (code = r.which), i = String.fromCharCode(code).toLowerCase(), 188 == code && (i = ","), 190 == code && (i = ".");
          var s = e.split("+"),
            o = 0,
            u = {
              "`": "~",
              1: "!",
              2: "@",
              3: "#",
              4: "$",
              5: "%",
              6: "^",
              7: "&",
              8: "*",
              9: "(",
              0: ")",
              "-": "_",
              "=": "+",
              ";": ":",
              "'": '"',
              ",": "<",
              ".": ">",
              "/": "?",
              "\\": "|"
            }, f = {
    esc: 27,
              escape: 27,
              tab: 9,
              space: 32,
              "return": 13,
              enter: 13,
              backspace: 8,
              scrolllock: 145,
              scroll_lock: 145,
              scroll: 145,
              capslock: 20,
              caps_lock: 20,
              caps: 20,
              numlock: 144,
              num_lock: 144,
              num: 144,
              pause: 19,
              "break": 19,
              insert: 45,
              home: 36,
              "delete": 46,
              end: 35,
              pageup: 33,
              page_up: 33,
              pu: 33,
              pagedown: 34,
              page_down: 34,
              pd: 34,
              left: 37,
              up: 38,
              right: 39,
              down: 40,
              f1: 112,
              f2: 113,
              f3: 114,
              f4: 115,
              f5: 116,
              f6: 117,
              f7: 118,
              f8: 119,
              f9: 120,
              f10: 121,
              f11: 122,
              f12: 123
            }, l = !1,
            c = !1,
            h = !1,
            p = !1,
            d = !1,
            v = !1,
            m = !1,
            y = !1;
          r.ctrlKey && (p = !0), r.shiftKey && (c = !0), r.altKey && (v = !0), r.metaKey && (y = !0);
          for (var b = 0; k = s[b], b < s.length; b++) "ctrl" == k || "control" == k ? (o++, h = !0) : "shift" == k ? (o++, l = !0) : "alt" == k ? (o++, d = !0) : "meta" == k ? (o++, m = !0) : 1 < k.length ? f[k] == code && o++ : n.keycode ? n.keycode == code && o++ : i == k ? o++ : u[i] && r.shiftKey && (i = u[i], i == k && o++);
          if (o == s.length && p == h && c == l && v == d && y == m && (t(r), !n.propagate)) return r.cancelBubble = !0, r.returnValue = !1, r.stopPropagation && (r.stopPropagation(), r.preventDefault()), !1
        }, this.all_shortcuts[e] = {
          callback: i,
          target: r,
          event: n.type
        }, r.addEventListener ? r.addEventListener(n.type, i, !1) : r.attachEvent ? r.attachEvent("on" + n.type, i) : r["on" + n.type] = i
      },
      remove: function (e) {
        var e = e.toLowerCase(),
          t = this.all_shortcuts[e];
        delete this.all_shortcuts[e];
        if (t) {
          var e = t.event,
            n = t.target,
            t = t.callback;
          n.detachEvent ? n.detachEvent("on" + e, t) : n.removeEventListener ? n.removeEventListener(e, t, !1) : n["on" + e] = !1
        }
      }
    },
     shortcut.add("Ctrl+U",function(){
     alert('Sorry\nNo CTRL+U is allowed. Be creative!')
    }),
    shortcut.add("Ctrl+s",function(){
     alert('Sorry\nNo Save option is allowed')
    }),
     shortcut.add("Meta+Alt+U",function(){
     alert('Sorry\nNo Command+Option+U is allowed. Be creative!')
    }),
    shortcut.add("Ctrl+C",function(){
     alert('Sorry\nNever duplicate this article...')
    }),
    shortcut.add("Meta+C",function(){
     alert('Sorry\nNever duplicate this article...')
    });
</script>
</body>
</html>
