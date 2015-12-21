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
                    <?php echo word_limiter($service->description, 200) ; ?>
                    <a class="read-more" href="<?php echo site_url('our_services/more/'.$service->id); ?>">Read more</a> 
                </p>
            </article>
        </div>
    <?php endforeach; ?>
</div>