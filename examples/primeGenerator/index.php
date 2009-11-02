<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generating Prime</title>

<script type="text/javascript" src="../../jquery-1.3.2.min.js"></script>
<script type="text/javascript">
var times = <? echo intval($_GET["times"]); ?>;
var i = 0;
$(function() {
	function generatePrime() {
		if(i <= times) {
			$.get("generate.php?keylength=<? echo intval($_GET["keylength"]); ?>",function(data) {
				generatePrime();
			});
			i++;
		}
	}
	generatePrime();
});
</script>
</head>

<body>

</body>
</html>
