

<!--  -->


<div class="topnav" id="myTopnav">
   <a href="index.php?action=home" class="active">Home</a>
   <a href="index.php?action=who-we-are" target="_blank">Who We Are</a>
   <a href="index.php?action=products" target="_blank">Products</a>
    <a href="index.php?action=services" target="_blank">Services</a>

    <a href="index.php?action=contacts" target="_blank">Search</a>



   <!--<a href="#about">About</a>-->
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
     <i class="fa fa-bars"></i></a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
