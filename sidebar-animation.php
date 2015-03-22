<style>

@-webkit-keyframes slideIn { from { margin-top: -130px; } to { margin-top: 0; } }
@-moz-keyframes slideIn { from { margin-top: -130px; } to { margin-top: 0; } }
@keyframes slideIn { from { margin-top: -130px; } to { margin-top: 0; } }

@-webkit-keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
@-moz-keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

.front .region-sidebar-first .block {
  opacity: 0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:.8s;
  -moz-animation-duration:.8s;
  animation-duration:.8s;
}
.front .region-sidebar-first .block { -webkit-animation-delay: 1.8s; animation-delay: 1.8s; }
.front #block-block-1 { -webkit-animation-delay: 1s; animation-delay: 1s; }

#header {
  margin-top: -130px;
  -webkit-animation:slideIn ease-out 1;
  -moz-animation:slideIn ease-out 1;
  animation:slideIn ease-out 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;

  -webkit-animation-delay: 2.6s; animation-delay: 2.6s;
}

</style>

<script>



(function ($) {

  //$('.front .region-sidebar-first').addClass('sidbar-animate');
  //$('.front #header').addClass('header-animate');

}(jQuery));

</script>