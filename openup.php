
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<title>Open up</title>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
<style>
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #C70039;
  font-family: Garamon Header;
}

ul { list-style-type: none; }

a {
  color: #b63b4d;
  text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/

div.openupcontainer
{
  color: #FF5733;
  font-size: 50px;
  font-weight: 600;
  text-align: center;
  margin-top: 140px;
  font: Garamond;
}

h1 a {
  color: #c12c42;
  font-size: 40px;
}

.accordion {
  width: 100%;
  max-width: 1000px;
  margin: 30px auto 20px;
  background: #581845;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 42px;
  color: #FFC300;
  font-size: 25px;
  font-weight: 700;
  border-bottom: 1px solid #CCC;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 25px;
  color: #FFC300;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

.accordion li.open .link { color: #FFC300; }

.accordion li.open i { color: #FFC300; }

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

/**
 * Submenu
 -----------------------------*/


.submenu {
  display: none;
  background: #581845;
  font-size: 18px;
}

.submenu li { border-bottom: 1px solid #4b4a5e; }

.submenu a {
  display: block;
  text-decoration: none;
  color: #d9d9d9;
  padding: 12px;
  padding-left: 42px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.submenu a:hover {
  background: #b63b4d;
  color: #F0F;
}
</style>
</head>

<body>

<div>
<nav class="navbar navbar-fixed-top">
  <ul class="navbar-nav">
       <li>
        <a href="signout.php" class="nav-link">Sign Out</a>
      </li>
        <li>
        <a href="profile.php" class="nav-link">My Profile</a>
      </li>
      
      <li>
        <a href="settings.php" class="nav-link">Settings</a>
      </li>
      <li>
        <form class="myform">
      <div style="padding: 14px 16px;" class="input-group input-group-sm">
        <input style="color:  #FFC300  ;" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      
    </form>
  
      </li>
      <li>
        <h1><strong style="font-size: 30px;">Women Safety And Empowerment</strong></h1>
      </li>
    </ul>
  </nav> 

</div>

<div class="openupcontainer">
<h1><strong style="color: #DAF7A6;">JUST OPEN UP</strong></h1>
<!-- Contenedor -->
<ul id="accordion" class="accordion">
  <li>
    <div class="link">Attacks on life, bodily and mental integrity<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Killing and attempted killing</a></li>
      <li><a href="final_complaint.php">Disappearance</a></li>
      <li><a href="final_complaint.php">Torture; cruel, inhumane, and degrading treatment</a></li>
      <li><a href="final_complaint.php">Rape, sexual assault and abuse</a></li>
      <li><a href="final_complaint.php">Domestic violence</a></li>
      <li><a href="final_complaint.php">Excessive use of force</a></li>
    </ul>
  </li>
  <li>
    <div class="link">Physical and psychological deprivation of liberty<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Arbitrary arrest and detention</a></li>
      <li><a href="final_complaint.php">Administrative detention</a></li>
      <li><a href="final_complaint.php">Kidnapping / abduction</a></li>
      <li><a href="final_complaint.php">Psychiatric incarceration</a></li>
    </ul>
  </li>
  <li>
    <div class="link">Attacks against personhood and reputations<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Threats, warnings, and ultimatums</a></li>
      <li><a href="final_complaint.php">Psychological harassment</a></li>
      <li><a href="final_complaint.php">Blackmail and extortion</a></li>
      <li><a href="final_complaint.php">Sexual harassment</a></li>
      <li><a href="final_complaint.php">Sexuality-baiting</a></li>
      <li><a href="final_complaint.php">Slander, vilification, labeling, and smear campaigns</a></li>
      <li><a href="final_complaint.php">Hate speech</a></li>
      <li><a href="final_complaint.php">Stigmatization, segregation and ostracism</a></li>
    </ul>
  </li>
  <li>
    <div class="link">Invasion of privacy and violations involving personal relationships<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Raids of offices or homes</a></li>
      <li><a href="final_complaint.php">Attacks and intimidation of family and community members</a></li>
    </ul>
  </li>
  <li>
    <div class="link">Legal provisions and practices restricting women’s activism<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Restrictive use of customary law and legal frameworks based on religion</a></li>
      <li><a href="final_complaint.php">Criminalization and prosecution</a></li>
      <li><a href="final_complaint.php">Illegal investigation, interrogation, surveillance, and blacklisting</a></li>
      <li><a href="final_complaint.php">Laws formulated against non-governmental organizations</a></li>
      <li><a href="final_complaint.php">Sanctions in the workplace</a></li>
    </ul>
  </li>
  
  <li>
    <div class="link">Violations of women’s freedom of expression, association, and assembly<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Restrictions on freedom of association</a></li>
      <li><a href="final_complaint.php">Restrictions on the right to receive funding</a></li>
      <li><a href="final_complaint.php">Restrictions on freedom of expression</a></li>
      <li><a href="final_complaint.php">Restrictions on access to information</a></li>
      <li><a href="final_complaint.php">Restrictions on communication with international bodies</a></li>
      <li><a href="final_complaint.php">Restrictions on freedom of assembly</a></li>
    </ul>
  </li>
  <li>
    <div class="link">Gendered restrictions on freedom of movement<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Requirement of permission or denial to travel abroad</a></li>
      <li><a href="final_complaint.php">Internal travel restrictions or obstruction</a></li>
      <li><a href="final_complaint.php">Denial of visas for travel</a></li>
      <li><a href="final_complaint.php">Deportation</a></li>
    </ul>
  </li>
  <li>
    <div class="link">Non-recognition of violations and impunity<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="final_complaint.php">Non-recognition by officials</a></li>
    </ul>
  </li>
</ul>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</div>
<footer>
  <div class="footcontain">
    <center>Copyright Included. All Rights Reserved | Contact Us: +91 90000 00000</center>
  </div>
</footer>

</body>
</html>
