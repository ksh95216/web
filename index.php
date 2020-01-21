<!-- /* ubunt의 web 디렉터리의 index.html에 저장*/ -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>여행지 추천 사이트</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript"src="javascript.js"></script>
</head>
<body>
<div class="login">
	<h1><span  style="float: left; margin-right: 75%; font-size: 50px;">Travel.com</span></h1>
</div>
<div class="login2" style="margin-right : 3%;">
	<a href="login.html" style="text-decoration: none;color:blue;"><span id="login"><strong>로그인</strong></span></a>
	<a href="join.html" style="text-decoration: none;color:blue;"><span id="join"><strong>회원가입</strong></span></a> <br>
<?php
	session_start();

	if(isset($_SESSION['userid'])) {
		echo $_SESSION['userid'];?> , WELCOME!! <button onclick="location.href='./logout.php'">logout</button>
	<?php	}
	?>
</div>
<br>
<br>
<hr>
<nav id="menubar">
	<ul class="mymenu">
		<li class="menu1" style="margin-right: 15%; margin-left: 12%; font-size: 20px;">
			<a href="#" style="text-decoration: none; color:black;"><strong>여행지</strong></a>
			<ul class="menu1_s submenu">
				<li style="font-size: 18px;"><a href="html/gg.html" style="text-decoration: none; color:blue;"><strong>경기도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/gw.html" style="text-decoration: none;color:blue;"><strong>강원도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/cb.html" style="text-decoration: none;color:blue;"><strong>충청북도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/cn.html" style="text-decoration: none;color:blue;"><strong>충청남도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/gb.html" style="text-decoration: none;color:blue;"><strong>경상북도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/gn.html" style="text-decoration: none;color:blue;"><strong>경상남도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/jb.html" style="text-decoration: none;color:blue;"><strong>전라북도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/jn.html" style="text-decoration: none;color:blue;"><strong>전라남도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/jj.html" style="text-decoration: none;color:blue;"><strong>제주특별자치도</strong></a></li>
			</ul>
		</li>
		<li class="menu2" style="margin-right: 15%; font-size: 20px;">
			<a href="board.php" style="text-decoration: none; color:black;"><strong>자유게시판</strong></a>
			<ul class="menu2_s submenu">
				<li style="font-size: 18px;">
					<a href="board.php" style="text-decoration: none;color:blue;"><strong>자유게시판</strong></a>
				</li>
			</ul>
		</li>
		<li class="menu3" style="margin-right: 15%; font-size: 20px;">
			<a href="#" style="text-decoration: none; color:black;"><strong>지도</strong></a>
			<ul class="menu3_s submenu">
				<li style="font-size: 18px;"><a href="html/map/gg_map.html" style="text-decoration: none;color:blue;"><strong>경기도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/gw_map.html" style="text-decoration: none;color:blue;"><strong>강원도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/cb_map.html" style="text-decoration: none;color:blue;"><strong>충청북도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/cn_map.html" style="text-decoration: none;color:blue;"><strong>충청남도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/gb_map.html" style="text-decoration: none;color:blue;"><strong>경상북도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/gn_map.html" style="text-decoration: none;color:blue;"><strong>경상남도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/jb_map.html" style="text-decoration: none;color:blue;"><strong>전라북도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/jn_map.html" style="text-decoration: none;color:blue;"><strong>전라남도</strong></a></li>
				<li style="font-size: 18px;"><a href="html/map/jj_map.html" style="text-decoration: none;color:blue;"><strong>제주특별자치도</strong></a></li>
			</ul>
		</li>
		<li class="menu4" style="margin-right: 15%; font-size: 20px;">
			<a href="intro.html" style="text-decoration: none; color:black;"><strong>소개</strong></a>
		</li>
	</ul>
</nav>
<hr>
<br>

<div style=" width: 400px; margin-right: 9%; float: left;">
<h2>렌트 알아보기 GoGo!</h2>
<h3>바로가기 클릭<i class="arrow down" style="margin-left: 5px;"></i></h3>
<a href="https://www.rentalcars.com/?affiliateCode=google&preflang=ko&label=generic-_TWRxo5TOnmuz7NhfuwxnwS399946866391&ws=&ppc_placement=&ppc_target=&ppc_param1=&ppc_param2=&aceid=&adposition=1t1&ppc_network=g&feeditemid=&ppc_targetid=kwd-319736016&loc_physical_ms=1009879&loc_interest_ms=&ppc_device=c&ppc_devicemodel=&gclid=EAIaIQobChMIm_SopcTl5gIVA66WCh324gVJEAAYASAAEgKKTvD_BwE"><strong style="font-size: 18px;"> 사이트 바로가기</strong></a>
</div>


<div style="width: 400px; margin-right: 10.1%; float: left;">
<h2>숙박 알아보기 GoGo!</h2>
<h3>바로가기 클릭<i class="arrow down" style="margin-left: 5px;"></i></h3>
<a href="https://kr.hotels.com/?locale=ko_KR&pos=HCOM_KR&rffrid=sem.hcom.KR.google.003.00.03.s.kwrd=c.335609009898.67032004066.1624533047.1t1.kwd-313636531650.1009879..%EC%88%99%EB%B0%95%20%EC%98%88%EC%95%BD.EAIaIQobChMIq8zRp5Dn5gIVGqqWCh1btQqNEAAYASAAEgJ-OPD_BwE.aw.ds&PSRC=AFF05&gclid=EAIaIQobChMIq8zRp5Dn5gIVGqqWCh1btQqNEAAYASAAEgJ-OPD_BwE&gclsrc=aw.ds"><strong style="font-size: 18px;">사이트 바로가기</strong></a>
</div>

<div style="width: 400px; float: left;">
<h2>날씨 조회 GoGo!</h2>
<h3>바로가기 클릭<i class="arrow down" style="margin-left: 5px;"></i></h3>
<a href="https://www.weather.go.kr/w/index.do"><strong style="font-size: 18px;">사이트 바로가기</strong></a>
</div>


<div>
<div class="lentcar" style="border: 5px solid #F5DA81; float: left; margin-right: 9%;">
<a href="https://www.rentalcars.com/?affiliateCode=google&preflang=ko&label=generic-_TWRxo5TOnmuz7NhfuwxnwS399946866391&ws=&ppc_placement=&ppc_target=&ppc_param1=&ppc_param2=&aceid=&adposition=1t1&ppc_network=g&feeditemid=&ppc_targetid=kwd-319736016&loc_physical_ms=1009879&loc_interest_ms=&ppc_device=c&ppc_devicemodel=&gclid=EAIaIQobChMIm_SopcTl5gIVA66WCh324gVJEAAYASAAEgKKTvD_BwE">
<img src="data:image/jpeg;base64,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" alt="dane" width="400" height="300"></a>
</div>


<div class="stayhouse" style="border: 5px solid #F5DA81; float: left; margin-right: 9%;">
<a href="https://kr.hotels.com/?locale=ko_KR&pos=HCOM_KR&rffrid=sem.hcom.KR.google.003.00.03.s.kwrd=c.335609009898.67032004066.1624533047.1t1.kwd-313636531650.1009879..%EC%88%99%EB%B0%95%20%EC%98%88%EC%95%BD.EAIaIQobChMIq8zRp5Dn5gIVGqqWCh1btQqNEAAYASAAEgJ-OPD_BwE.aw.ds&PSRC=AFF05&gclid=EAIaIQobChMIq8zRp5Dn5gIVGqqWCh1btQqNEAAYASAAEgJ-OPD_BwE&gclsrc=aw.ds">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyHf-s8_CbpWlTgMXC1mKjft_BH-xpqc59hanVoooiBM_4rrkK6w&s" alt="dane" width="400" height="300"></a>
</div>

<div class="weather" style="border:5px solid #F5DA81; float: left;">
	<iframe src="https://www.weather.go.kr/w/index.do" width="600" height="600"></iframe>
</div>


<div style="width: 400px; float: left; margin-top: -15%;">
<h2>버스 예약 GoGo!</h2>
<h3>바로가기 클릭<i class="arrow down" style="margin-left: 5px;"></i></h3>
<a href="https://www.bustago.or.kr/newweb/kr/ticket/ticket.do"><strong style="font-size: 18px;">사이트 바로가기</strong></a>
</div>

<div class="bus" style="border:5px solid #F5DA81; float: left; margin-top: -7.5%; margin-bottom: 2%;">
	<iframe src="https://www.bustago.or.kr/newweb/kr/ticket/ticket.do" width="900" height="300"></iframe>
</div>


<div style="width: 400px; float: bottom;">
<h2 >기차 예약 GoGo!</h2>
<h3>바로가기 클릭<i class="arrow down" style="margin-left: 5px;"></i></h3>
<a href="http://www.letskorail.com/ebizprd/EbizPrdTicketpr21100W_pr21110.do"><strong style="font-size: 18px;">사이트 바로가기</strong></a>
</div>

<div class="train" style="border:5px solid #F5DA81; float: left; margin-bottom: 5%;">
	<iframe src="http://www.letskorail.com/ebizprd/EbizPrdTicketpr21100W_pr21110.do" width="900" height="300"></iframe>
</div>
</body>
</html>




