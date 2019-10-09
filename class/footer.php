<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script>
<script id="rendered-js">
      $(".sidebar-dropdown > a").click(function () {
  $(".sidebar-submenu").slideUp(200);
  if (
  $(this).
  parent().
  hasClass("active"))
  {
    $(".sidebar-dropdown").removeClass("active");
    $(this).
    parent().
    removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this).
    next(".sidebar-submenu").
    slideDown(200);
    $(this).
    parent().
    addClass("active");
  }
});

$("#close-sidebar").click(function () {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function () {
  $(".page-wrapper").addClass("toggled");
});
      //# sourceURL=pen.js
    </script>
</body>
</html>