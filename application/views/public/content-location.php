<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setiajaya Mobilindo - Kontak &amp; Lokasi</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>marketing_files/images/setiaJaya_icon.png" >
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>marketing_files/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>marketing_files/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url(); ?>marketing_files/js/jquery-1.7.min.js"></script>
    <script src="<?php echo base_url(); ?>marketing_files/js/jquery.easing.1.3.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="bg">
   <header>
       <div class="main wrap">
       		<a href="<?php echo $home; ?>"><img src="<?php echo base_url(); ?>marketing_files/images/back_logo_with_toyota.png" alt="" class="logo2">
                <div class="namaPerusahaan">SETIAJAYA MOBILINDO
                <p>AUTHORIZED TOYOTA DEALER<p></div>
                <p>Jl. Raya Alternatif Cibubur <span>(021) 8459 1773</span></p></a>
       </div>
       <nav>
          <ul class="menu">
              <li><a href="<?php echo $home?>" class="home"><img src="<?php echo base_url(); ?>marketing_files/images/home.jpg" alt=""></a></li>
              <li><a href="<?php echo $product?>">Produk</a></li>
              <li><a href="<?php echo $showroom?>">Showroom</a></li>
              <li><a href="<?php echo $priceList?>">Daftar Harga</a></li>
              <li><a href="<?php echo $about?>">Tentang Kami</a></li>
              <li class="current"><a href="<?php echo $location?>">Kontak &amp; Lokasi</a></li>
          </ul>
          <div class="clear"></div>
        </nav>
   </header>
   <!--==============================content================================-->
   <section id="content"><div class="ic"></div>
      <div class="sub-page">
      	<div class="sub-page-left box-9">
        	<h2>Kontak Kami</h2>
            <p class="upper">Bila ada pertanyaan atau informasi yang anda butuhkan silahkan hubungi kami. Silahkan Isi formulir dibawah ini dan Team kami akan menjawab. </p>
            <form id="form" method="post">
              <fieldset>
                <label><input type="text" value="Name" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''"></label>
                <label><input type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''"></label>
                <label><input type="text" value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''"></label>
                <label><textarea onBlur="if(this.value==''){this.value='MESSAGE'}" onFocus="if(this.value=='MESSAGE'){this.value=''}">MESSAGE</textarea></label>
                <div class="btns"><a href="#" onClick="document.getElementById('form').reset()" class="button">Reset</a><a href="#" class="button" onClick="document.getElementById('form').submit()">Kirim</a></div>
              </fieldset>
            </form>
        </div>
        <div class="sub-page-right">
            <h2>Lokasi</h2>
            <div class="map">
              <!--
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
              -->
              <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?ie=UTF8&amp;cid=8371533077821670615&amp;q=Setiajaya+Mobilindo+Cibubur&amp;gl=ID&amp;hl=en&amp;ll=-6.375521,106.912594&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?ie=UTF8&amp;cid=8371533077821670615&amp;q=Setiajaya+Mobilindo+Cibubur&amp;gl=ID&amp;hl=en&amp;ll=-6.375521,106.912594&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed" target="_blank" style="color:red;text-align:left">View Larger Map</a></small>
            </div><br>
            <dl class="adr">
                <dt>Jl. Raya Alternatif Cibubur, <br/>Cibubur, Bogor, Jawa Barat.</dt><br>
                <dd><span><b>Telephone:</b></span><br>021-84591773, 021-84598989</dd><br>
                <dd><span><b>Fax:</b></span><br>021-84599090</dd>
                <!--
                <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.org</a></dd>
                -->
            </dl>
        </div>
      </div>
   </section>
  <!--==============================footer=================================-->
        <footer>
        <div class="footerStyle">
                <img src="<?php echo base_url(); ?>marketing_files/images/setiaJaya_logo.png" width="150px" alt="" style="float: left;"/>
                <div class="footerMenu">
                    <br />
                    <a href="<?php echo $home?>">Halaman Depan</a>
                    <a href="<?php echo $product?>">Produk</a>
                    <a href="<?php echo $about?>">Tentang Kami</a>
                    <a href="<?php echo $showroom?>">Showroom</a>
                    <a href="<?php echo $priceList?>">Daftar Harga</a>
                    <a href="<?php echo $location?>">Kontak & Lokasi</a>
                </div>
                <br /><br /><h3>Copyright &copy; 2012. Setiajaya Mobilindo. All Rights Reserved.</h3>
        </div>
    </footer>
</div>
</body>
</html>
