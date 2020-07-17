<style type="text/css">


.bottom_line{
  /* border-bottom: 1px solid #307d11; */
  border-right: 4px solid #44bc14;
    padding: 0px 20px 0px 20px;
    
    background: #fbfafa;
    border-radius: 5%;
    margin: 0px 0px 0px 0px;

}

body{
   background-attachment: fixed;
}

/* accordion styles */
.accordion .card-header {
  cursor: pointer;
}
.accordion.heading-right .card-title {
  position: absolute;
  right: 50px;
}
.accordion.indicator-plus .card-header:after {
  font-family: 'FontAwesome';
  content: "\f068";
  float: right;
}
.accordion.indicator-plus .card-header.collapsed:after {
  content: "\f067";
}
.accordion.indicator-plus-before.round-indicator .card-header:before {
  font-family: 'FontAwesome';
  font-size: 14pt;
  content: "\f056";
  margin-right: 10px;
}
.accordion.indicator-plus-before.round-indicator .card-header.collapsed:before {
  content: "\f055";
  color: #000;
}
.accordion.indicator-plus-before .card-header:before {
  font-family: 'FontAwesome';
  content: "\f068";
  float: left;
}
.accordion.indicator-plus-before .card-header.collapsed:before {
  content: "\f067";
}
.accordion.indicator-chevron .card-header:after {
  font-family: 'FontAwesome';
  content: "\f078";
  float: right;
}
.accordion.indicator-chevron .card-header.collapsed:after {
  content: "\f077";
}
.accordion.background-none [class^="card"] {
  background: transparent;
}
.accordion.border-0 .card {
  border: 0;
}

/* circle */
.progress-circle {
  background-color: #ddd;
  border-radius: 50%;
  display: inline-block;
  height: 9rem;
  margin: 1rem 1rem 0;
  position: relative;
  width: 9rem;
}
.progress-circle:before {
  -webkit-box-align: center;
          align-items: center;
  background-color: #fff;
  border-radius: 50%;
  content: attr(data-progress) ;
  display: -webkit-box;
  display: flex;
  font-size: 1rem;
  -webkit-box-pack: center;
          justify-content: center;
  position: absolute;
  left: 0.62rem;
  right: 0.62rem;
  top: 0.62rem;
  bottom: 0.62rem;
  -webkit-transition: -webkit-transform 0.2s ease;
  transition: -webkit-transform 0.2s ease;
  transition: transform 0.2s ease;
  transition: transform 0.2s ease, -webkit-transform 0.2s ease;
  text-align: center;
  padding: 7px;
}
.progress-circle:after {
  background-color: #ffc466;
  border-radius: 50%;
  content: '';
  display: inline-block;
  height: 100%;
  width: 100%;
}
.progress-circle:hover:before,
.progress-circle:focus:before {
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}
/**
* $step is set to 5 by default, meaning you can only use percentage classes in increments of five (e.g. 25, 30, 45, 50, and so on). This helps to reduce the size of the final CSS file. If you need a number that doesn't end in 0 or 5, you can change the text percentage while rounding the class up/down to the nearest 5.
*/
.progress-circle[data-progress="0"]:after {
  background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, #ddd), color-stop(50%, transparent), to(transparent)), -webkit-gradient(linear, left top, right top, color-stop(50%, #0083ff), color-stop(50%, #ddd), to(#ddd));
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(90deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="1"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(93.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="2"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(97.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="3"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(100.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="4"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(104.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="5"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(108deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="6"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(111.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="7"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(115.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="8"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(118.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="9"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(122.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="10"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(126deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="11"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(129.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="12"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(133.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="13"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(136.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="14"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(140.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="15"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(144deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="16"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(147.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="17"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(151.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="18"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(154.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="19"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(158.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="20"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(162deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="21"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(165.60000000000002deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="22"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(169.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="23"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(172.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="24"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(176.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="25"]:after {
  background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, #ddd), color-stop(50%, transparent), to(transparent)), -webkit-gradient(linear, left top, left bottom, color-stop(50%, #0083ff), color-stop(50%, #ddd), to(#ddd));
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(180deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="26"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(183.60000000000002deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="27"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(187.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="28"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(190.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="29"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(194.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="30"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(198deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="31"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(201.60000000000002deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="32"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(205.2deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="33"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(208.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="34"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(212.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="35"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(216deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="36"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(219.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="37"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(223.20000000000002deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="38"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(226.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="39"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(230.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="40"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(234deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="41"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(237.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="42"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(241.20000000000002deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="43"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(244.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="44"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(248.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="45"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(252deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="46"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(255.6deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="47"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(259.20000000000005deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="48"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(262.8deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="49"]:after {
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%, transparent), linear-gradient(266.4deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="50"]:after {
  background-image: -webkit-gradient(linear, right top, left top, color-stop(50%, #0083ff), color-stop(50%, transparent), to(transparent)), -webkit-gradient(linear, right top, left top, color-stop(50%, #0083ff), color-stop(50%, #ddd), to(#ddd));
  background-image: linear-gradient(-90deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="51"]:after {
  background-image: linear-gradient(-86.4deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="52"]:after {
  background-image: linear-gradient(-82.8deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="53"]:after {
  background-image: linear-gradient(-79.2deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="54"]:after {
  background-image: linear-gradient(-75.6deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="55"]:after {
  background-image: linear-gradient(-72deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="56"]:after {
  background-image: linear-gradient(-68.4deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="57"]:after {
  background-image: linear-gradient(-64.8deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="58"]:after {
  background-image: linear-gradient(-61.2deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="59"]:after {
  background-image: linear-gradient(-57.6deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="60"]:after {
  background-image: linear-gradient(-54deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="61"]:after {
  background-image: linear-gradient(-50.4deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="62"]:after {
  background-image: linear-gradient(-46.8deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="63"]:after {
  background-image: linear-gradient(-43.199999999999996deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="64"]:after {
  background-image: linear-gradient(-39.6deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="65"]:after {
  background-image: linear-gradient(-36deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="66"]:after {
  background-image: linear-gradient(-32.4deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="67"]:after {
  background-image: linear-gradient(-28.799999999999997deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="68"]:after {
  background-image: linear-gradient(-25.200000000000003deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="69"]:after {
  background-image: linear-gradient(-21.599999999999994deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="70"]:after {
  background-image: linear-gradient(-18deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="71"]:after {
  background-image: linear-gradient(-14.399999999999991deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="72"]:after {
  background-image: linear-gradient(-10.799999999999997deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="73"]:after {
  background-image: linear-gradient(-7.200000000000003deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="74"]:after {
  background-image: linear-gradient(-3.599999999999994deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="75"]:after {
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(50%, #0083ff), color-stop(50%, transparent), to(transparent)), -webkit-gradient(linear, right top, left top, color-stop(50%, #0083ff), color-stop(50%, #ddd), to(#ddd));
  background-image: linear-gradient(0deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="76"]:after {
  background-image: linear-gradient(3.600000000000009deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="77"]:after {
  background-image: linear-gradient(7.200000000000003deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="78"]:after {
  background-image: linear-gradient(10.799999999999997deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="79"]:after {
  background-image: linear-gradient(14.400000000000006deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="80"]:after {
  background-image: linear-gradient(18deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="81"]:after {
  background-image: linear-gradient(21.60000000000001deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="82"]:after {
  background-image: linear-gradient(25.200000000000003deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="83"]:after {
  background-image: linear-gradient(28.799999999999997deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="84"]:after {
  background-image: linear-gradient(32.400000000000006deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="85"]:after {
  background-image: linear-gradient(36deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="86"]:after {
  background-image: linear-gradient(39.599999999999994deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="87"]:after {
  background-image: linear-gradient(43.20000000000002deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="88"]:after {
  background-image: linear-gradient(46.80000000000001deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="89"]:after {
  background-image: linear-gradient(50.400000000000006deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="90"]:after {
  background-image: linear-gradient(54deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="91"]:after {
  background-image: linear-gradient(57.599999999999994deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="92"]:after {
  background-image: linear-gradient(61.20000000000002deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="93"]:after {
  background-image: linear-gradient(64.80000000000001deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="94"]:after {
  background-image: linear-gradient(68.4deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="95"]:after {
  background-image: linear-gradient(72deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="96"]:after {
  background-image: linear-gradient(75.6deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="97"]:after {
  background-image: linear-gradient(79.20000000000002deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="98"]:after {
  background-image: linear-gradient(82.80000000000001deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="99"]:after {
  background-image: linear-gradient(86.4deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}
.progress-circle[data-progress="100"]:after {
  background-image: -webkit-gradient(linear, left top, right top, color-stop(50%, #0083ff), color-stop(50%, transparent), to(transparent)), -webkit-gradient(linear, right top, left top, color-stop(50%, #0083ff), color-stop(50%, #ddd), to(#ddd));
  background-image: linear-gradient(90deg, #0083ff 50%, transparent 50%, transparent), linear-gradient(270deg, #0083ff 50%, #ddd 50%, #ddd);
}

/* circle */

/* tabs */
.nav-tabs {
	box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
	border: none;
}
.nav-tabs .nav-link{
	border: none;
	border-radius: 0;
	transition: color .2s ease-out;
}
.tabs-dark .nav-link {
	color: #fff;
}
.tabs-light .nav-link {
	color: rgba(0,0,0,.5);
}
.tabs-dark .nav-link:not(.active):hover {
	color: #aeb0b3;
}
.tabs-light .nav-link:not(.active):hover {
	color: #495057;
}

.nav-pills .nav-link{
	border-radius: 2px;
	color: #495057;
  transition: color .2s ease-out, box-shadow .2s;
  box-shadow: 0 0px 0px 0 rgba(0,0,0,0.14), 0 0px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
}
.nav-pills .nav-link:hover{
	box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
	
}
.nav-pills .nav-item {
  margin: 5px 5px;
  font-size: 0.8em;
}
.nav-pills.pills-dark .nav-link.active {
	background-color: #343a40!important;
	box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
}
.nav-pills.pills-dark .nav-link:not(.active):hover {
	color: #1d1e22;
}
.tabs-marker .nav-link {
	position: relative;
}
.tabs-marker .nav-link.active .marker {
	height: 30px;
	width: 30px;
	left: 50%;
	bottom: -30px;
	transform: translatex(-50%);
	position: absolute;
	overflow: hidden;
}
.tabs-marker .nav-link.active .marker:after {
	content: "";
	height: 15px;
	width: 15px;
	top: -8px;
	left: 50%;
	transform: rotate(45deg) translatex(-50%);
	transform-origin: left;
	background-color: #fff;
 	box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
	position: absolute;
}
.tab-content>.active {
    display: block;
    background: #fbfbfb;
    padding: 15px;
}
/* tabs */
.fa-check-square-o{
  color: #1db616;
  padding:5px;
}

.blockquote{
  padding: 20px 10px;
  margin: 20px 0 0;
    font-size: 17.5px;
    border-right: 5px solid #eee;
    /* -webkit-box-shadow: -1px 10px 20px -10px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 10px 20px -10px rgba(0,0,0,0.75);
box-shadow: -1px 10px 20px -10px rgba(0,0,0,0.75); */
background: #ffffff;
}



</style>

<div class="container-fluid">
<div class="row" style="padding:150px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
         <h2 ><span class="bottom_line">تافل چیست؟</span></h2>
          <blockquote class="blockquote">
            <p>آزمون تافل یکی از معتبر ترین آزمون های جهان و مخفف  Test of English as a Foreign Language میباشد. این آزمون یا آزمون آیلتس برای اشخاصی که قصد ادامه تحصیل در خارج از کشور را دارند ضروری و مفید میباشد. در واقع آزمون تافل توانایی افراد مختلف برای برقراری ارتباط با دیگران به زبان انگلیسی در دانشگاه ها را میسنجد. 
            </p>
          </blockquote>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">


					 <img src="<?php echo base_url();?>assets/img/tofel/what.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">

  </div>




</div>
</div>
  <hr>


<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 ><span class="bottom_line">انواع آزمون تافل </span></h2>
          <blockquote class="blockquote">
          <div class="accordion indicator-plus-before round-indicator" id="accordionH" aria-multiselectable="true">
            <div class="card m-b-0">
              <div class="card-header collapsed" role="tab" id="headingOneH" href="#collapseOneH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseOneH">
                <a class="card-title">PBT (آزمون تافل کتبی)</a>
              </div>
              <div class="collapse" id="collapseOneH" role="tabpanel" aria-labelledby="headingOneH">
                <div class="card-body">
                  <p>
                    •	تافلPBT آزمون کتبی تافل است که بعد از مرسوم شدن تافل اینترنتی فقط در بعضی از مراکز برگزار میشود.
                  </p>
                </div>
              </div>
              <div class="card-header collapsed" role="tab" id="headingTwoH" href="#collapseTwoH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseTwoH">
                <a class="card-title">CBT (آزمون تافل کامپیوتری)</a>
              </div>
              <div class="collapse" id="collapseTwoH" role="tabpanel" aria-labelledby="headingTwoH">
                <div class="card-body">
                  <p>
                    •	تافلCBT آزمون کامپیوتری تافل مشابه آزمون کتبی است که در ایران برگزار نمیشود و نمرات آن اعتبار ندارند.
                  </p>
                </div>
              </div>
              <div class="card-header collapsed" role="tab" id="headingThreeH" href="#collapseThreeH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseThreeH">
                <a class="card-title">IBT (آزمون تافل اینترنتی)</a>
              </div>
              <div class="collapse" id="collapseThreeH" role="tabpanel" aria-labelledby="headingThreeH">
                <div class="card-body">
                 <p>
                  •	تافلIBT آزمون اینترنتی تافل که در غالبی استاندار هر 4 مهارت دانشجویان یعنی Speaking, Writing, Listening و Reading را ارزیابی میکند و در بسیاری از کشور های جهان از اعتبار ویژه ای برخوردار است.
                 </p>
                </div>
              </div>
            </div>
          </div>	
        </blockquote>


        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/developer.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>






<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 ><span class="bottom_line">اعتبار آزمون تافل چقدر است؟</span></h2>
          <blockquote class="blockquote">
            <p>
              آزمون تافل یکی از آزمون های است که هر 2 سال یکبار نیاز به تمدید دارد. یعنی برای استفاده از مدرک و ارایه آن به دانشگاه مورد نظر 2 سال بعد از آزمون فرصت دارید در غیر این صورت باید مجددا در آزمون شرکت کنید. 
            </p>
          </blockquote>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/tofel.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>
<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 ><span class="bottom_line">مدت زمان آزمون </span></h2>
          <blockquote class="blockquote">
            <p>
              مدت زمان مورد نیاز برای این آزمون 4 ساعت میباشد. بر خلاف آزمون آیلتس تمام مهارت ها در یک روز ارزیابی میشوند و بعد از مهارت لیسنینگ داوطلبان یک استراحت 10 دقیقه ای خواهند داشت. در آزمون تافل زمانبندی در اندازه ی دانش زبانی مهم و ضروری است و اگر سعی کنید مدیریت زمان را یاد بگیرید و از دانش زبانی خود در راه درست استفاده کنید، بدون شک در این آزمون موفق خواهید شد. 
            </p>
          </blockquote>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/tofel.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>

  <div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-6 col-lg-6">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>برای موفقیت در آزمون تافل چه چیزهایی نیاز داریم؟ </span></h2></h2>
          
          <div class="progress-circle" data-progress="توانایی مدیریت زمان"></div>
          <div class="progress-circle" data-progress="توانایی تمرکز"></div>
          <div class="progress-circle" data-progress="عدم توجه به محیط اطراف"></div>
          <br>
          <div class="progress-circle" data-progress="توانایی یکجا نشستن به مدت 4 ساعت"></div>
          <div class="progress-circle" data-progress="داشتن یک راهنما و استاد همراه"></div>
          <div class="progress-circle" data-progress="داشتن یک مصحح برای تکالیف رایتینگ و اسپیکینگ"></div>



        </div>
        </div>


  <div class="col-xs-12 col-md-6 col-lg-6 text-left" style="margin: 5rem 0rem 0">
    
    <p class="lead">
      <i class="fa fa-check-square-o" aria-hidden="true"></i> برای موفقیت در آزمون تافل به جز دانش زبانی قوی و داشتن مهارت های کافی، داوطلبان باید توانایی مدیریت زمان و تمرکز را هم داشته باشند. آزمون تافل آزمونی است که حتی اگر داوطلب از دانش بسیار بالایی برخوردار باشد، با کوچکترین اشتباه ممکن است نمره ی کامل آن بخش را از دست بدهد. برای مثال در قسمت اسپیکینگ تافل اممکن است تمامی داوطلبان در سنتر باهم شروع به صحبت کنند و در این شرایط شخص باید توانایی تمرکز داشته باشد. 
      </p>
    <p class="lead">
      <i class="fa fa-check-square-o" aria-hidden="true"></i> علاوه بر آن نیاز است تا در این راه شخصی که دانش و مهارت کافی در این زمینه را دارد، همراه شما باشد و تا پایان راه حامی شما باشد. علاوه بر این شما برای تصحیح اشکالات و اشتباهات خود در رایتینگ ها و اسپیکینگ ها نیاز به یک شخص خبره خواهید داشت. در غیر این صورت اشتباهات گذشته مجددا تکرار میشوند.
      </p>


  </div>




</div>
</div>
  <hr>





<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-12 col-lg-12">
    <div class="media-body">
          <h2 ><span class="bottom_line">نگاهی کلی به آزمون تافل IBT</span></h2>
          <h4>در واقع آزمونی که داوطلبان باید برای آن اقدام کنند، آزمون اینترنتی تافل است. این آزمون 4 مهارت اصلی داوطلبان را مورد سنجش قرار میدهد که در ادامه در مورد هر کدام از آنها جداگانه توضیحاتی ارایه خواهیم کرد.</h4>
           <div class="card-body">

                  <h2><span class="bottom_line">Reading:</span></h2>

                <blockquote class="blockquote">
                  <p>بخش Reading آزمون تافل دارای 3 متن میباشد که با توجه به تغییرات آزمون هر متن دارای 10 سوال میباشد و مدت زمان پاسخگویی به این 3 متن 60 دقیقه میباشد. البته اگر ریدینگ شما به اصطلاح لانگ نباشد. که در این صورت تعداد متن ها به 4 رسیده و مدت زمان پاسخگویی به 80 دقیقه افزایشخواهد یافت.
                  </p>
                  


  <h4>انواع سوالات در ریدینگ تافل: </h4>
	<ul class="nav nav-pills pills-dark mb-3" id="pills-tab" role="tablist">
	  <li class="nav-item">
		 <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">لغت Vocabulary</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">جزئیات Detail and fact</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">جزئیات منفی Negative Detail</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact" aria-selected="false">استنتاج Inference</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="false">ارجاع Reference</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact" aria-selected="false">جاگذاری متن Insert text</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact4" role="tab" aria-controls="pills-contact" aria-selected="false">ساده سازی Sentence Simplification</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact5" role="tab" aria-controls="pills-contact" aria-selected="false">هدف Purpose</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact6" role="tab" aria-controls="pills-contact" aria-selected="false">خلاصه متن Summary</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact7" role="tab" aria-controls="pills-1" aria-selected="false">تکمیل جدول  Fill in the Table</a>
	  </li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
	  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <p>در سوالات vocabulary یک کلمه از متن هایلایت میشود و از شما میخواهد از بین 4 گزینه یکی که به آن لغت نزدیک تر است را انتخاب کنید. در این سوالات شما باید معنی لغت را از مفهوم جمله حدس بزنید و گزینه صحیح را انتخاب کنید. تمامی سوالات ریدینگ نشانه هایی دارند.</p>
      <hr>
      <strong>نشانه های این سوال: </strong>
        <ul style="text-align: left;direction: ltr;">
          <li>Closest meaning to…</li>
          <li>Means that…</li>
        </ul>
        <hr>
        <p>تعداد سوالات وکب در یک ریدینگ به طور متوسط حدودا 9 عدد میباشد. پس یکی از راههای کسب نمره ی بهتر در ریدینگ تقویت دایره ی لغات است.</p>
    </div>
	  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

      <!--  -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p>در این سوالات شما باید دقیقا در متن به دنبال آنچه خواسته شده است بگردید و اصلا نیاز نیست از هیچ قسمتی نتیجه بگیرید یا استدلال کنید. فقط کافی است متن را با دقت بخوانید و به سوالات با دقت پاسخ دهید</p>
        <hr>
        <strong>نشانه های این سوال: </strong>
          <ul style="text-align: left;direction: ltr;">
           <li>According to the paragraph, which of the following is true of X?</li>
          </ul>
          
      </div>
      <!--  -->

    </div>

	  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>این سوال دقیقا مشابه سوال جزئیات است اما با این تفاوت که در این سوالات شما باید گزینه ای را انتخاب کنید که بر اساس متن صحیح نیست. در واقع در این سوال 3 گزینه درست و 1 گزینه غلط داریم که گزینه ی غلط پاسخ سوال است.</p>
          <hr>
          <strong>نشانه های این سوال: </strong>
            <ul style="text-align: left;direction: ltr;">
             <li>implies </li>
             <li>suggests </li>
             <li>inferred  </li>
            </ul>
            
        </div>
        <!--  -->
    </div>

    <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>این سوال بر خلاف سوالات دیگر نیاز به اسنتباط و نتیجه گیری دارد. به این صورت که شما باید از جمله ای که میبینید جمله ی دیگیری را نتیجه گیری کنید.</p>
          <hr>
          <strong>نشانه های این سوال: </strong>
            <ul style="text-align: left;direction: ltr;">
             <li>According to the passage, NOT true ...</li>
             <li>EXCEPT</li>
            </ul>
            
        </div>
        <!--  -->
    </div>

    <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>در این سوال یک خط از متن هایلایت میشود و در آن یک ضمیر مشخص میشود و سوال ازشما میخواهد که بگویید این ضمیر به چه چیزی یا چه کسی اشاره میکند.</p>
          <hr>
          <strong>نشانه های این سوال: </strong>
            <ul style="text-align: left;direction: ltr;">
             <li>refers...</li>
            </ul>
            
        </div>
        <!--  -->
    </div>


    <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>این سوال یکی از ساده ترین سوالات ریدینگ آزمون تافل میباشد. در این سوال 4 مربع در متن مشخص میشود و یک جمله هم به شما میدهند و از شما میخواهد که این متن را به جای یکی از این مربع ها جایگذاری کنید.</p>
          <hr>
          <strong>نشانه های این سوال: </strong>
            <ul style="text-align: left;direction: ltr;">
             <li>Look at the four squares [■] that indicate where the following sentence could be added to the passage.</li>
            </ul>
            
        </div>
        <!--  -->
    </div>

    <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>در این سوال قسمتی از متن مشخص میشود و از شما میخواهد که از بین گزینه ها یکی از گزینه ها را انتخاب کنید که دقیقا همین متن هایلایت شده را به زبانی دیگر نوشته باشد</p>
          <hr>
  
            
        </div>
        <!--  -->
    </div>

    <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>در این سوال همانطور که از اسمش مشخص است شما باید هدف نویسنده از عبارت یا پاراگراف مشخص شده را بنویسید و مانند سوال اینفرنس اطلاعات مشخصی در متن ارایه شده و شما خودتان هدف نویسنده را از بین گزینه ها تشخیص میدهید.</p>
          <hr>
          <strong>نشانه های این سوال: </strong>
            <ul style="text-align: left;direction: ltr;">
             <li>discusses, in order to …</li>
             <li>Why …</li>
             <li>uses as an example of  …</li>
            </ul>
            
        </div>
        <!--  -->
    </div>
 
    <div class="tab-pane fade" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>در این سوال یک متن به شما داده میشود و از شما میخواهد از بین 6 متن دیگیری که در گزینه ها مشخص شده است 3 عدد از آنها را که در با توجه به متن صحیح است را انتخاب کنید. توجه کنید که در این قسمت نت برداری در طول ریدینگ کمک بسیار زیادی به شما خواهد کرد. همینطور با پاسخ کاملا صحیح دادن به این سوال شما از 2 نمره بهره مند خواهید شد. توجه کنید در این سوال باید بیشتر به دنبال کلیات باشیم نه جزئیات.</p>
          <hr>
     
            
        </div>
        <!--  -->
    </div>

    <div class="tab-pane fade" id="pills-contact7" role="tabpanel" aria-labelledby="pills-contact-tab">

        <!--  -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>در این سوال جدولی داده میشود و از شما میخواهد که اطلاعات را در جدول به درستی طبق بندی کنید. این مدل سوالات با اینکه بارم زیاد تری نیبت به سوالات دیگر دارند اما دیگر خیلی رایج نیستند چون از سوال سامری بسیار ساده تر بوده و طراحان از سوال سامری بیشتر استفاده میکنند. اما با این حال حتما باید این سوال را هم در تمرینات خود داشته باشیم..</p>
          <hr>
            
        </div>
        <!--  -->
    </div>

	</div>
</blockquote>




        <div class="alert alert-danger" style="margin-top: 10px;">
          <strong>توجه داشته باشید!</strong> از بین سوال Table و Summary فقط یکی از آنها در آزمون خواهد بود و امکان ندارد که هر دوی آنها با هم در یک متن ظاهر شوند.
        </div>
        <hr>
        <div class="alert alert-success" style="margin-top: 10px;">
          <strong>چگونه در ریدینگ تافل نمره ی خوب بگیریم؟</strong>برای موفق شدن در ریدینگ تافل بهتر است در سوالات 1تا 3 مهارت لازم را بدست آوردید چون در آزمون ها بسیار پر استفاده هستند.
        </div>



        

        <br>
            <br>


        <h2><span class="bottom_line">Listening:</span></h2>
        <blockquote class="blockquote">
        <p>لیسنینگ تافل 2 بخش دارد و ترتیب فایل های صوتی به شکل زیر است: </p>
        <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-3">
            <table class="table table-bordered text-center">
              <tr><td>Conversation</td></tr>
              <tr><td>Lecture</td></tr>
              <tr><td>Lecture</td></tr>
            </table>
          </div>
          <div class="col-md-3">
            <table class="table table-bordered text-center">
              <tr><td>Conversation</td></tr>
              <tr><td>Lecture</td></tr>
              <tr><td>Lecture</td></tr>
            </table>
          </div>

        </div>

        <ul>
          <li>
            	در لیسنینگ تافل Conversation چیست؟
          <br>
          <p>در قسمت کانورسیشن لیسنینگ معمولا 2 نفر در مورد یک موضوع آکادمیک صحبت میکنند و معمولا زمان آن حدودا 3 دقیقه میباشد. (زمان تقریبی)</p>
          </li>
          
          <li>
            	در لیسنینگ تافل Lecture چیست؟
          <br>
          <p>در قسمت لکچر لیسنینگ معمولا یک استاد در مورد یک موضوع آکادمیک صحبت میکند مثلا هنر، زندگی جانوران، معماری، روانشناسی و ... و زمان آن معمولا 60 دقیقه میباشد. (زمان تقریبی)
            توجه داشته باشید این موارد برای زمانی است که ریدینگ شما لانگ نباشد. اگر لیسنینگ شما لانگ باشد یک مجموعه فایل صوتی به همراه 30 دقیقه زمان اضافی به آزمون شما اضافه میشود. 
            </p>
          </li>
        </ul>

        </blockquote>

        <br>
            <br>

        <h2><span class="bottom_line">Speaking:</span></h2>
        <blockquote class="blockquote">
        <p>با توجه به تغییرات آزمون تافل در بخش اسپیکینگ 4 سوال خواهیم داشت. <br>
          سوال اول در واقع Independent »یباشد و فقط مهارت صحبت کردن شما را مورد ارزیابی قرار میدهد. 4 سوال بعدی علاوه بر اسپیکینگ مهارت های لیسنینگ و ریدینگ شما را هم میسنجد.          
        </p>
        </blockquote>

        <br>
            <br>

          <h2 class=""><span class="bottom_line">Writing:</span></h2>
        <blockquote class="blockquote">
        <p>در تافل رایتینگ به 2 بخش تقسیم میشود.</p>
        <ul>
              <li>تسک اول: رایتینگ Integrated
                <br><p>در رایتینگ Integrated در ابتدا به شما یک متن میدهند که در آن متن در مورد موضوعات آکادمیک توضیحاتی داده میشود و بعد از آن یک لکچر در ارتباط با موضوع متن برای شما پخش میشود و در نهایت شما 30 دقیقه فرصت دارید که نکات گفته شده در متن را توضیح دهید و علت مخالفت و یا موافقت شخصی که سخن میگوید را بیان کنید.</p>
              </li>
              <li>	تسک دوم: رایتینگ Independent
                <br><p>در رایتینگ Independent از شما یک سوال پرسیده میشود و شما باید در مدت زمان 30 دقیقه به این سوال پاسخ دهید.</p>
              </li>
            </ul>
            </blockquote>

            <br>
            <br>
        <h2><span class="bottom_line">چرا باید تافل بدهیم؟</span></h2>


        <div class="jumbotron">
          <strong> آزمون تافل برای دانشجویانی که قصد ادامه ی تحصیل در خارج از کشور را دارند ضروری است.</strong><br>
         <strong>آیا آزمون تافل فقط برای دانشگاه های آمریکا میباشد؟</strong><br>

         <p>
          در پاسخ به این سوال باید بگوییم که خیر، این موضوع بستگی به دانشکاه و کشوری که برای آن اقدام میکنید دارد. در بیشتر دانشگاه ها هم آزمون تافل و هم آزمون آیلتس به صورت معادل برای هم در نظر گرفته میشوند. در صورت نیاز به اطلاعات بیشتر به وبسایت رسمی (ETS) مراجعه بفرمایید.
        </p>
        <hr>
        <strong>برای اینکه بتوانیم در ازمون تافل شرکت کنیم در چه سطحی از زبان انگلیسی باید باشیم؟.</strong><br>
         
        <p>
          برای شرکت در کلاس های آمادگی آزمون تافل پیشنهاد ما سطح Intermediate به بالا میباشد. اما اگر فکر میکنید سطح پایین تری دارید نگران نباشید همین حالا با مشاوران ما تماس بگیرید تا برای  برنامه ریزی جهت تقویت سطح زبان شما عزیزان قبل از شروع دوره توضیحات لازم را به شما عزیزان بدهند.
        </p>
        </div>



        
      </div>

   
        </div>
        </div>


  <!-- <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/content.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div> -->




</div>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12" style="    padding: 59px;">
          <!--Footer Bottom-->
                            <!-- <h3 class="study_text" style="    color: rgb(60,90,118);"><b>STUDY WITH GROUP OF PROFESSIONALS</b></h3> -->
                            
                            <a class="btn btn-info btn-md mybtn1" style="
    padding: 15px;" id="btn_see" href="<?php echo base_url(); ?>/Courses/listcourse">SEE LIST OF COURSES</a>
                        


        </div>
      </div>
    </div>

  
  <hr>







<footer class="mainfooter" role="contentinfo">

  <div class="footer-bottom" >
    <div class="container">
      <div class="row">
        <div class="col-xs-12" style="    padding: 12px;">
          <!--Footer Bottom-->
                            <!-- <h3 class="study_text" style="    color: rgb(60,90,118);"><b>STUDY WITH GROUP OF PROFESSIONALS</b></h3> -->
                            
                        


        </div>
      </div>
    </div>
  </div>
</footer>



<script>


$(document).ready(function(){
  $( '.closeall' ).click( function( e ) {
    e.preventDefault();
    $( '.accordion .collapse.show' ).collapse( 'hide' );
    return false;
  } );
  $( '.openall' ).click( function( e ) {
    e.preventDefault();
    $( '.accordion .collapse' ).collapse( 'show' );
    return false;
  } );
});


  
 
  </script>