<style>
body {
    padding: 0px;
	  margin: 0px;/* IE10+ */
    <?php
    if ($settings_background_db === "default") {
      echo 'background-image: linear-gradient(to right top, #122e59, #005488, #007991, #009c6b, #3bb70e);';
    } elseif ($settings_background_db === "darkred") {
      echo 'background-image: linear-gradient(to right top, #370505, #530811, #720e17, #91141b, #b11d1d);';
    } elseif ($settings_background_db === "red") {
      echo 'background-image: linear-gradient(to right top, #d04b4b, #de403f, #ea3330, #f5221f, #ff0000);';
    } elseif ($settings_background_db === "darkgreen") {
      echo 'background-image: linear-gradient(to right top, #246b19, #1f6915, #196611, #13640c, #0b6207);';
    } elseif ($settings_background_db === "green") {
      echo 'background-image: linear-gradient(to right top, #35c41e, #31d21a, #2ae115, #20f00d, #0bff00);';
    } elseif ($settings_background_db === "darkblue") {
      echo 'background-image: linear-gradient(to right top, #1c187d, #19157b, #171179, #140d76, #110974);';
    } elseif ($settings_background_db === "blue") {
      echo 'background-image: linear-gradient(to right top, #3f3ab5, #3733c8, #2e2bdb, #221eed, #1300ff);';
    } elseif ($settings_background_db === "redblue") {
      echo 'background-image: linear-gradient(to right top, #fd0000, #ff0045, #f0007e, #b900b9, #1214eb);';
    } elseif ($settings_background_db === "yellow") {
      echo 'background-image: linear-gradient(to right top, #ffd700, #e7c40a, #d0b210, #baa014, #a48e16);';
    } elseif ($settings_background_db === "black") {
      echo 'background-image: linear-gradient(to right bottom, #393939, #2c2c2c, #1f1f1f, #131313, #000000);';
    }
    ?>
    background-repeat: no-repeat;
    background-attachment: fixed;
	  height: 100%;
}
</style>
