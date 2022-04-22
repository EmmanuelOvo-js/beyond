<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title></title>
 
  <script src="https://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
  <script type="text/javascript" src="https://www.appelsiini.net/projects/chained/jquery.chained.js?v=0.9.10"></script>
  <script>// Add your javascript here
$(function(){
 $("#size").chained("#color");
});</script>
</head>

<body>
  <select class="form-control" id="color">
    <option value="">choose options</option>
    <option value="27">Blomme</option>
    <option value="26">Grøn</option>
    <option value="28">Syren</option>
  </select>
  <select class="form-control" id="size">
<option value="">choose options</option>
    <option value="27" class="27">XL</option>
    <option value="26" class="26">L</option>
    <option value="26" class="26">L</option>
    <option value="26" class="26">L</option>
    <option value="28" class="28">S</option>
  </select>
  <!-- Put your html here! -->
</body>

</html>
