<html>
<body>
<p>sending...</p>
<?php
$val = uniqid();
setcookie('abc', $val);
?>
<script>
    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', function() {
        console.log(this.responseText);
    });
    xhr.open('GET', 'http://foo.bar/xhr/api.php');
    xhr.send();
</script>
</body>
</html>

