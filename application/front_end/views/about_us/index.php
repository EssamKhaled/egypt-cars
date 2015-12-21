<div class="blog-posts">
    <?php foreach($about_us as $article) : ?>
        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
            <article class="post-content">
                <div class="post-info-container">
                    <div class="post-info">
                        <h2><a class="main-color"><?php echo $article->title; ?></a></h2>
                    </div>
                </div>
                <p>
                    <?php echo $article->description; ?>
                </p>
                <div class="share-post">
                        <span class="sh">Share this post on:</span>
                        <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('about_us'); ?>" target="_blank" class="facebook main-bg">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://twitter.com/intent/tweet?text=<?php echo $article->title; ?>&url=<?php echo site_url('about_us'); ?>&via=Egypt-Car" target="_blank" class="twitter main-bg">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://plus.google.com/share?url=<?php echo site_url('about_us'); ?>" target="_blank" class="googleplus main-bg">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>                
            </article>
        </div>
    <?php endforeach; ?>
</div>