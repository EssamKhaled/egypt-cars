<div class="blog-posts">
    <?php foreach($services as $service) : ?>
        <div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
            <div class="post-image">
                <a href="<?php echo site_url('our_services/more/'.$service->id); ?>">
                    <img src="<?php echo base_url('assets/uploads/our_services/'.$service->image); ?>" alt="<?php echo $service->title; ?>">
                </a>
            </div>
            <article class="post-content">
                <div class="post-info-container">
                    <div class="post-info">
                        <h2><a class="main-color" href="<?php echo site_url('our_services/more/'.$service->id); ?>"><?php echo $service->title; ?></a></h2>
                    </div>
                </div>
                <p>
                    <?php echo $service->description; ?>
                </p>
                <div class="share-post">
                        <span class="sh">Share this post on:</span>
                        <div>
                            <ul>
                                <li>
                                    <a href="#" class="facebook main-bg">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter main-bg">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="googleplus main-bg">
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