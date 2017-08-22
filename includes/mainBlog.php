<div class="grid3">


    <div class="blog3">

        <?php
        foreach ($blog->getArticles() AS $value){

            echo '<article><h3>' . $value->article_head . '</h3><p>'. $value->article_date.'</p><p>' . $value->article_text . '</p></article><hr>';

        }
        ?>




    </div>


    <div class="sidebar3">

        <h3>Blog Nyheder</h3>
        <ul>
            <li>
                <a href="#">Blog nyheder</a>
            </li>
        </ul>

        <hr>

        <h3>Katergorier</h3>

        <ul>
            <li><a href="#">Kategorier</a></li>
        </ul>

        <hr>

        <h3>Månedsarkiv</h3>
        <ul>
            <li><a href="#">Månedsarkiv</a></li>
        </ul>

    </div>








</div>