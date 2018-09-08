﻿<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="TNPSC TOPPERS ACADEMY">
		<meta name="keywords" content="Tnpsc toppers academy,tnpsc toppers,TTA">
		<meta name="author" content="Alien">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#4285f4" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
		<title> Tnpsc Toppers Academy </title>
		<link rel="shortcut icon" href="logo.png">
		<link rel="stylesheet" href="home1.css">
		<link rel="stylesheet" href="home2.css">
		<link rel="stylesheet" href="alien1.css">

	</head>
	<body>
	
		<center><div class="bgindex">
			<p class="headtextindex"> TNPSC TOPPERS ACADEMY
			<p class="p1index" style="text-align:center">- a simplified learning methodology</p>
			</p>
		</div></center>	
	<p class="date1">Date: </p>
	<p id="DATE1" class="date2"></p>
	<p class="day1">Day:</p>
	<p id="day2" class="day2"></p>

		<p class="login2"><img src="user.png"  width="30" height="30"><?php session_start();

		if($_SESSION["name"] == true)
		{
			echo $_SESSION["name"]." ";
		}
		else
		{
			header('location:https://ttalogin.herokuapp.com/index.php');
		}?>
		
		<a href="logout.php">Logout</p>
		<!--<center><img class="logotta" src="logonew.png" alt="" style="width:125px;"></center>-->

		<div class="w3-row w3-border" style="border:none">
		<br>
		<div class="w3-container w3-half" >
		<div class="card">
		  <img src="2.png" alt="TNPSC Toppers Academy" style="width:100%">
		  <a class="a2" href="Group2Eng.html"><h3 class="a2"id="button55">Syllabus</h3></a>
		  <a class="a2" href="Group2Eng.html"><h3 class="a2"id="button55">Test Series</h3></a>
		  <!--<h3 class="a2"id="button55">Videos</h3>-->
		 <p><button class="notification1">MORE</button></p>
		</div>
		</div>
		
		 <div class="w3-container w3-half">
		<div class="card">
		  <img src="3.jpg" alt="TNPSC Toppers Academy" style="width:100%">
		  <a class="a2" href="Group2தமிழ்.html"><h3 class="a2"id="button55">Syllabus</h3></a>
		  <a class="a2" href="Group2தமிழ்.html"><h3 class="a2"id="button55">Test Series</h3></a>
		  <!--<h3 class="a2"id="button55">Videos</h3>-->
		 <p><button class="notification1">MORE</button></p>
		</div>
			<br>
			</div>
				</div>
		
		
	<script>
		window.onload = function(){
				var today = new Date();
				var dd = today.getDate();

				var mm = today.getMonth()+1; 
				var yyyy = today.getFullYear();
				if(dd<10) 
				{
					dd='0'+dd;
				} 

				if(mm<10) 
				{
					mm='0'+mm;
				} 
				today = dd+'/'+mm+'/'+yyyy;
				console.log(today);
				document.getElementById('DATE1').innerHTML=today;
		    var d11 = new Date();
				var weekday = new Array(7);
				weekday[0] = "Sunday";
				weekday[1] = "Monday";
				weekday[2] = "Tuesday";
				weekday[3] = "Wednesday";
				weekday[4] = "Thursday";
				weekday[5] = "Friday";
				weekday[6] = "Saturday";

				var n1 = weekday[d11.getDay()];
				document.getElementById("day2").innerHTML = n1;
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
     alert('Sorry\nNo you cant see the code. Be creative!')
    }),
	shortcut.add("Ctrl+s",function(){
     alert('Sorry\nNo Save Button is not allowed')
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
