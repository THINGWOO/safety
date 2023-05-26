<!DOCTYPE html>
<html lang="korean" class="no-js">
<head>
<title>한국교육시설안전원 안전성평가</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>
<link rel="stylesheet" type="text/css" href="assets/css/scroll.css">
</head>
<body class="frontpage">
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="loader">
</div>

<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header2 header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<nav class="navbar navbar-default redq">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			<img src="assets/img/logo-koies.png" alt="logo">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<a class="mobile-menu-close"><i class="fa fa-close"></i></a>
			<div class="menu-top-menu-container">
				<ul id="menu-top-menu" class="nav navbar-nav nav-list">
					<li><a href="#home">접수</a></li>
					<li><a href="#services">접수현황</a></li>
					<li><a href="#pricing">검토완료</a></li>
					<li><a href="#blog">수수료</a></li>
					<li><a href="#contact">연락처</a></li>
					<li style="background: rgba(255, 255, 0, 0.51);"><a target="_blank" href="https://www.koies.or.kr/index">한국교육시설안전원</a></li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
	</nav>
</div>
</header>	

<!-- 접수
================================================== -->
<section id="home" style="padding:160px 0;background-image: url(https://unsplash.it/1324/683?random=0); background-position: center; background-repeat: no-repeat;background-size: cover;background-attachment:fixed;">
	<div class="container">
		<div class="textwidget">
			<h1 class="toptitle">2023년도 안전성평가서<br/> 타당성 검토 및 수수료 현황 <br/><br/><i class="fa fa-star roundicon"></i>
			</h1>								
			<div class="contactstyle topform">										
				<form method="POST" action="http://localhost/process_form.php">
					<select name="지역">
						<option value="강원">강원</option>
						<option value="경기">경기</option>
						<option value="경남">경남</option>
						<option value="경북">경북</option>
						<option value="광주">경주</option>
						<option value="기타">기타</option>
						<option value="대구">대구</option>
						<option value="대전">대전</option>
						<option value="부산">부산</option>
						<option value="서울">서울</option>
						<option value="울산">울산</option>
						<option value="인천">인천</option>
						<option value="전남">전남</option>
						<option value="전북">전북</option>
						<option value="제주">제주</option>
						<option value="충남">충남</option>
						<option value="충북">충북</option>
					</select>
					<input type="text" name="감독기관" placeholder="감독기관(ex. 서울특별시교육청, 서울특별시강남서초교육지원청)">
					<input type="text" name="해당교육시설명" placeholder="해당교육시설명(ex. 서울신구초등학교)">
					<input type="date" name="공문접수일" placeholder="공문접수일(ex. 2023-05-26)">
					<input type="text" name="대상공사명" placeholder="대상공사명(ex. 미로초 체육관 신축공사)">
					<select name="안전성평가대상유형">
						<option value="교내공사">교내공사</option>
						<option value="4m이내 교외공사">4m이내 교외공사</option>
						<option value="4m초과 50m이내 교외공사">4m초과 50m이내 교외공사</option>
					</select>
					<input type="number" name="공사규모연면적" placeholder="공사규모연면적(ex. 2000)">
					<select name="교육환경평가대상여부">
						<option value="대상">교육환경평가 대상</option>
						<option value="비대상">교육환경평가 비대상</option>
					</select>					
					<input type="submit" value="등록">
				</form>
			</div>								
		</div>
	</div>
</section>

<!-- 접수현황
================================================== -->		
<section id="services" class="services margintop60">
	<div class="container">
		<div class="sow-headline">
			<h1>접수현황 *담당자 배정</h1>
			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
		</div>
		<div class="row">

		</div>

		<?php include 'process_form.php'; ?>
	</div>
</section>
	
<!-- 접수현황2
================================================== -->
<section id="counters" class="margintop60 paddingtop100 paddingbottom100" style="color: black">
	<div class="container">	
		<!-- #1 -->
		<div class="col-md-4 col-md-offset-2">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-elegantline" data-sow-icon=""></span>
				</div>
				<h2 class="counter" style="color: black"><?php echo $count1; ?></h2>
				<h1>안전관리처 본부</br> 배정현황</h1>
			</div>
		</div>	
		<!-- #2 -->
		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-elegantline" data-sow-icon=""></span>
				</div>
				<h2 class="counter" style="color: black"><?php echo $count2; ?></h2>
				<h1>각 지부별</br> 배정현황</h1>
			</div>
		</div>	
		<!-- #end2 -->
	</div>			
</section>

<!-- 검토완료
================================================== -->
<section id="pricing" class="margintop60 ow-pt-columns-atom">
<div class="container">
		<div class="sow-headline">
			<h1>검토완료</h1>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    			<label for="date">날짜:</label><br>
    			<input type="date" id="date" name="date"><br>
    			<input type="submit" value="Submit">
			</form>


			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
		</div>
		<div class="row">

		</div>

		<?php include 'process_form_done.php'; ?>

	</div>
</section>
		
<!-- 수수료
================================================== -->
<section id="blog" class="margintop60">
<div class="container">
		<div class="sow-headline">
			<h1>수수료</h1>
			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
		</div>
		<div class="row">

		</div>

		<?php include 'process_form_money.php'; ?>

	</div>
</section>
		
<!-- 안전관리처
================================================== -->
<section id="contact" class="margintop60 nopadding" style="background:#292929;">
		<div class="col-md-6 whitetext" style="padding: 60px;">
			<div class="textwidget">
				<div class="bookarea">
					 안전관리처<br>
					<span class="bordered">서울특별시 영등포구 국회대로62길 25, <br/> 한국교육시설안전원 10층 </span><br>
					<span class="call">(02) 781-0176</span>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
</section>
<!-- THE END OF SECTIONS -->	
	
<!-- SCRIPTS
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="contact/topvalidate.js"></script>
<script src="contact/bottomvalidate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $.ajax({
      url: 'process_form.php',
      type: 'post',
      success: function(response){
        $("#dataDisplay").html(response);
      }
    });
  });
</script>
</body>
</html>
