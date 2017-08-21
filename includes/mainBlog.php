<div class="grid3">


    <div class="blog3">

        <?php
        foreach ($blog->getArticles() AS $value){

            echo '<article><h3>' . $value->article_head . '</h3><p>'. $value->article_date.'</p><p>' . $value->article_text . '</p></article>';

        }
        ?>




    </div>











</div>