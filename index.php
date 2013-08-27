<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Load Example Timeline</title>
<meta name="description" content="TimelineJS example">

<!-- jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- BEGIN TimelineJS -->
<script type="text/javascript" src="../compiled/js/storyjs-embed.js"></script>
<script>
$(document).ready(function() {
createStoryJS({
type:	'timeline',
width:	'800',
height:	'600',
source:	'info.php.json',
embed_id:	'my-timeline',
debug:	true
});
});
</script>
<!-- END TimelineJS -->

</head>

<body>

<div id="my-timeline"></div>

</body>
</html>