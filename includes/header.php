


<h1>ADVOKATERNE</h1>
<nav>
    <ul>
        <?php
        foreach($nav->getAll() AS $value){
            echo '<li><a href="index.php?p=' . $value->page_id . '">' . $value->page_name . '</a></li>';
        }
        ?>
    </ul>
</nav>