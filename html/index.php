<?php
include("header.php");
?>

    <div class="container main-container" id="index">

      <!-- Example row of columns -->
      <div class="row">

      <!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
      <div id="tingle_player" class="cp-jplayer"></div>

      <div class="prototype-wrapper"> <!-- A wrapper to emulate use in a webpage and center align -->


      <!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->

        <div id="cp_container_1" class="cp-container">
          <div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
            <div class="cp-buffer-1"></div>
            <div class="cp-buffer-2"></div>
          </div>
          <div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
            <div class="cp-progress-1"></div>
            <div class="cp-progress-2"></div>
          </div>
          <div class="cp-circle-control"></div>
          <ul class="cp-controls">
            <li><a href="#" class="cp-play" tabindex="1">play</a></li>
            <li><a href="#" class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
          </ul>
        </div>

        <div class="match-details">
          <h2><b>Laura</b></h2>
          <h3>25, London</h3>
        </div>

      </div>
        <div class="match-no">
          <img src="img/match-no.png" alt="Reject Match" />
        </div>

        <div class="match-yes">
          <img src="img/match-yes.png" alt="Show Interest" />
        </div>
<?php
include("footer.php");
?>