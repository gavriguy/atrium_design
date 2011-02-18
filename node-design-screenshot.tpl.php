<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <?php print $ie ?>
	<title>wireframes</title>
</head>

<body <?php print drupal_attributes($attr) ?>>
 
  <div id="screenshot-wrapper" style="background: rgb(233, 233, 230) none repeat scroll 0pt 0pt; text-align: center; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; margin:0;">
    <div id="screenshot"><?php print $screenshot;?></div>
  </div>
  
  <?php if ($palette): ?><div id='palette'><?php print $palette; ?></div><?php endif; ?>

  <?php print $closure ?>
</body>
</html>

