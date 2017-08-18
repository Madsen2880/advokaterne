<div class="grid2">
    <h5>Dette er en liste over vores services.</h5>
    <p class="tekst">En kort beskrivelse af hvad “advokaterne” tilbyder af services.</p>
    <div class="services2">

        <?php
        foreach ($art->getArticles() AS $value){

            echo '<article><h3>' . $value->article_head . '</h3><p>' . $value->article_text . '</p></article>';

        }
        ?>




    </div>

</div>

