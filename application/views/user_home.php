<?php
    if($register == TRUE){
?>
    <h4>Thanks for registering!</h4>
<?php
    }
?>
    <h3>Hi <?php echo html_escape($email);?></h3>
    <h4>Here's your links</h4>
    <ul>
    <?php
        if($links !== false){
            foreach($links->result() as $link){
                echo "<li><a href='/".$link->name."'>picopath.com/".$link->name."</a> - <a href='".$link->url."'>".$link->url."</a></li>";
            }
        }
    ?>
    </ul>