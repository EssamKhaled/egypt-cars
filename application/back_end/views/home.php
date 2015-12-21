<?php foreach($orders as $order) : ?>
    <div class="box info-box fx animated fadeInLeft" data-animate="fadeInLeft">
        <a class="close-box" href="#"><i class="fa fa-times"></i></a>
        <h3>New Order #<?php echo $order->id; ?></h3>
        <p><strong>Pickup Location :-</strong> <?php echo $order->pickup_location; ?></p>
        <p><strong>Pickup Destination :-</strong> <?php echo $order->pickup_destination; ?></p>
        <p><strong>Price:-</strong> <?php echo $order->price; ?></p> <br>
        <div><a href="<?php  echo site_url('manage/transfer_order/read/'.$order->id)?>" class="btn">View Order</a></div>        
        
    </div>
<?php endforeach; ?>