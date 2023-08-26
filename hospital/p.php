
<script type="text/javascript">
 function yes()
 {
   window.location="query.html";
 }
 function no()
 {
  alert("Incorrect");
  window.location="Login.html";
}

</script>
<?php


  if($_REQUEST["username"]=="shahbharat2609@gmail.com" && $_REQUEST["pass"]=="12345678")
   echo '<script>yes();</script>'; 
  else
   {   echo '<script type="text/javascript"> no();</script>'; 
   }
?>
