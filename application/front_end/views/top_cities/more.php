<div class="blog-posts">
    <?php foreach($cities as $city) : ?>
        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
            <div class="post-image">
                <a href="<?php echo site_url('top_cities/more/'.$city->city_name.'/'.$city->id); ?>">
                    <img src="<?php echo base_url('assets/uploads/top_cities/'.$city->image); ?>" alt="<?php echo $city->city_name; ?>">
                </a>
            </div>
            <article class="post-content">
                <div class="post-info-container">
                    <div class="post-info">
                        <h2><a class="main-color" href="<?php echo site_url('top_cities/more/'.$city->id); ?>"><?php echo $city->city_name; ?></a></h2>
                    </div>
                </div>
                <p>
                    <?php echo $city->description; ?>
                </p>
                <div class="share-post">
                        <span class="sh">Share this post on:</span>
                        <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('top_cities/more/'.$city->id); ?>" target="_blank" class="facebook main-bg">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://twitter.com/intent/tweet?text=<?php echo $city->city_name; ?>&url=<?php echo site_url('top_cities/more/'.$city->id); ?>&via=Egypt-Car" target="_blank" class="twitter main-bg">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://plus.google.com/share?url=<?php echo site_url('top_cities/more/'.$city->id); ?>" target="_blank" class="googleplus main-bg">
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