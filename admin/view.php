<?php

require_once plugin_dir_path( __FILE__ ) . 'class-super-duper-smtp-admin.php';

?>
<h1>Super Duper SMTP</h1>

<form action="#">
    <p>
        <input id="use-smtp" type="checkbox" checked>
        <label for="use-smtp">Send emails using Super Duper SMTP</label>
    </p>
    <p>
        <input type="submit" value="Save">
    </p>
</form>