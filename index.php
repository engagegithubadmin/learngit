<h1>Git Demo</h1>
<hr/>
<?php if ($_SERVER['REQUEST_URI'] == '/git-development/' || $_SERVER['REQUEST_URI'] == '/learngit/') { ?>
    <h2>This is development</h2>
<?php } ?>
<?php if ($_SERVER['REQUEST_URI'] == '/git-production/') { ?>
    <h2>This is production</h2>
<?php } ?>