<?php

include "header.php"
?>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div id="wrapper">
        <div id="wheel">
          <div id="inner-wheel">
            <div class="sec"><span class="fa fa-bell-o">1</span></div>
            <div class="sec"><span class="fa fa-comment-o">2</span></div>
            <div class="sec"><span class="fa fa-smile-o">3</span></div>
            <div class="sec"><span class="fa fa-heart-o">4</span></div>
            <div class="sec"><span class="fa fa-star-o">5</span></div>
            <div class="sec"><span class="fa fa-lightbulb-o">6</span></div>
          </div>

          <div id="spin">
            <div id="inner-spin"></div>
          </div>

          <div id="shine"></div>
        </div>

        <div id="txt"></div>
      </div>
    </div>
  </div>
</div>

<style>
  /*WRAPPER*/
  #wrapper {
    margin: 40px auto 0;
    width: 266px;
    position: relative;
  }

  #txt {
    color: #eaeaea;
  }

  /*WHEEL*/
  #wheel {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    position: relative;
    overflow: hidden;
    border: 8px solid #fff;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 10px, rgba(0, 0, 0, 0.05) 0px 3px 0px;
    transform: rotate(0deg);
  }

  #wheel:before {
    content: "";
    position: absolute;
    border: 4px solid rgba(0, 0, 0, 0.1);
    width: 242px;
    height: 242px;
    border-radius: 50%;
    z-index: 1000;
  }

  #inner-wheel {
    width: 100%;
    height: 100%;

    -webkit-transition: all 6s cubic-bezier(0, 0.99, 0.44, 0.99);
    -moz-transition: all 6 cubic-bezier(0, 0.99, 0.44, 0.99);
    -o-transition: all 6s cubic-bezier(0, 0.99, 0.44, 0.99);
    -ms-transition: all 6s cubic-bezier(0, 0.99, 0.44, 0.99);
    transition: all 6s cubic-bezier(0, 0.99, 0.44, 0.99);
  }

  #wheel div.sec {
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 130px 75px 0;
    border-color: #19c transparent;
    transform-origin: 75px 129px;
    left: 50px;
    top: -4px;
    opacity: 1;
  }

  #wheel div.sec:nth-child(1) {
    transform: rotate(60deg);
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    border-color: #16a085 transparent;
  }
  #wheel div.sec:nth-child(2) {
    transform: rotate(120deg);
    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    border-color: #2980b9 transparent;
  }
  #wheel div.sec:nth-child(3) {
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    border-color: #34495e transparent;
  }
  #wheel div.sec:nth-child(4) {
    transform: rotate(240deg);
    -webkit-transform: rotate(240deg);
    -moz-transform: rotate(240deg);
    -o-transform: rotate(240deg);
    -ms-transform: rotate(240deg);
    border-color: #f39c12 transparent;
  }
  #wheel div.sec:nth-child(5) {
    transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
    -moz-transform: rotate(300deg);
    -o-transform: rotate(300deg);
    -ms-transform: rotate(300deg);
    border-color: #d35400 transparent;
  }
  #wheel div.sec:nth-child(6) {
    transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    border-color: #c0392b transparent;
  }

  #wheel div.sec .fa {
    margin-top: -100px;
    color: rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 10000000;
    display: block;
    text-align: center;
    font-size: 36px;
    margin-left: -15px;

    text-shadow: rgba(255, 255, 255, 0.1) 0px -1px 0px,
      rgba(0, 0, 0, 0.2) 0px 1px 0px;
  }

  #spin {
    width: 68px;
    height: 68px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -34px 0 0 -34px;
    border-radius: 50%;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 3px 0px;
    z-index: 1000;
    background: #fff;
    cursor: pointer;
    font-family: "Exo 2", sans-serif;

    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
  }

  #spin:after {
    content: "SPIN";
    text-align: center;
    line-height: 68px;
    color: #ccc;
    text-shadow: 0 2px 0 #fff, 0 -2px 0 rgba(0, 0, 0, 0.3);
    position: relative;
    z-index: 100000;
    width: 68px;
    height: 68px;
    display: block;
  }

  #spin:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 20px 28px 20px;
    border-color: transparent transparent #ffffff transparent;
    top: -12px;
    left: 14px;
  }

  #inner-spin {
    width: 54px;
    height: 54px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -27px 0 0 -27px;
    border-radius: 50%;
    background: red;
    z-index: 999;
    box-shadow: rgba(255, 255, 255, 1) 0px -2px 0px inset,
      rgba(255, 255, 255, 1) 0px 2px 0px inset, rgba(0, 0, 0, 0.4) 0px 0px 5px;

    background: rgb(255, 255, 255); /* Old browsers */
    background: -moz-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(234, 234, 234, 1) 100%
    ); /* FF3.6+ */
    background: -webkit-gradient(
      radial,
      center center,
      0px,
      center center,
      100%,
      color-stop(0%, rgba(255, 255, 255, 1)),
      color-stop(100%, rgba(234, 234, 234, 1))
    ); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(234, 234, 234, 1) 100%
    ); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(234, 234, 234, 1) 100%
    ); /* Opera 12+ */
    background: -ms-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(234, 234, 234, 1) 100%
    ); /* IE10+ */
    background: radial-gradient(
      ellipse at center,
      rgba(255, 255, 255, 1) 0%,
      rgba(234, 234, 234, 1) 100%
    ); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  }

  #spin:active #inner-spin {
    box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 5px inset;
  }

  #spin:active:after {
    font-size: 15px;
  }

  #shine {
    width: 250px;
    height: 250px;
    position: absolute;
    top: 0;
    left: 0;
    background: -moz-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(255, 255, 255, 0.99) 1%,
      rgba(255, 255, 255, 0.91) 9%,
      rgba(255, 255, 255, 0) 100%
    ); /* FF3.6+ */
    background: -webkit-gradient(
      radial,
      center center,
      0px,
      center center,
      100%,
      color-stop(0%, rgba(255, 255, 255, 1)),
      color-stop(1%, rgba(255, 255, 255, 0.99)),
      color-stop(9%, rgba(255, 255, 255, 0.91)),
      color-stop(100%, rgba(255, 255, 255, 0))
    ); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(255, 255, 255, 0.99) 1%,
      rgba(255, 255, 255, 0.91) 9%,
      rgba(255, 255, 255, 0) 100%
    ); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(255, 255, 255, 0.99) 1%,
      rgba(255, 255, 255, 0.91) 9%,
      rgba(255, 255, 255, 0) 100%
    ); /* Opera 12+ */
    background: -ms-radial-gradient(
      center,
      ellipse cover,
      rgba(255, 255, 255, 1) 0%,
      rgba(255, 255, 255, 0.99) 1%,
      rgba(255, 255, 255, 0.91) 9%,
      rgba(255, 255, 255, 0) 100%
    ); /* IE10+ */
    background: radial-gradient(
      ellipse at center,
      rgba(255, 255, 255, 1) 0%,
      rgba(255, 255, 255, 0.99) 1%,
      rgba(255, 255, 255, 0.91) 9%,
      rgba(255, 255, 255, 0) 100%
    ); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    opacity: 0.1;
  }

  /*ANIMATION*/
  @-webkit-keyframes hh {
    0%,
    100% {
      transform: rotate(0deg);
      -webkit-transform: rotate(0deg);
    }

    50% {
      transform: rotate(7deg);
      -webkit-transform: rotate(7deg);
    }
  }

  @keyframes hh {
    0%,
    100% {
      transform: rotate(0deg);
      -webkit-transform: rotate(0deg);
    }

    50% {
      transform: rotate(7deg);
      -webkit-transform: rotate(7deg);
    }
  }

  .spin {
    -webkit-animation: hh 0.1s; /* Chrome, Safari, Opera */
    animation: hh 0.1s;
  }
</style>

<script>
  //set default degree (360*5)
  var degree = 1800;
  //number of clicks = 0
  var clicks = 0;

  $(document).ready(function () {
    /*WHEEL SPIN FUNCTION*/
    $("#spin").click(function () {
      //add 1 every click
      clicks++;

      /*multiply the degree by number of clicks
	  generate random number between 1 - 360, 
    then add to the new degree*/
      var newDegree = degree * clicks;
      var extraDegree = Math.floor(Math.random() * (360 - 1 + 1)) + 1;
      totalDegree = newDegree + extraDegree;

      /*let's make the spin btn to tilt every
		time the edge of the section hits 
		the indicator*/
      $("#wheel .sec").each(function () {
        var t = $(this);
        var noY = 0;

        var c = 0;
        var n = 700;
        var interval = setInterval(function () {
          c++;
          if (c === n) {
            clearInterval(interval);
          }

          var aoY = t.offset().top;
          $("#txt").html(aoY);
          console.log(aoY);

          /*23.7 is the minumum offset number that 
				each section can get, in a 30 angle degree.
				So, if the offset reaches 23.7, then we know
				that it has a 30 degree angle and therefore, 
				exactly aligned with the spin btn*/
          if (aoY < 23.89) {
            console.log("<<<<<<<<");
            $("#spin").addClass("spin");
            setTimeout(function () {
              $("#spin").removeClass("spin");
            }, 100);
          }
        }, 10);

        $("#inner-wheel").css({
          transform: "rotate(" + totalDegree + "deg)",
        });

        noY = t.offset().top;
      });
    });
  });
</script>

<?php

include "footer.php"
?>
