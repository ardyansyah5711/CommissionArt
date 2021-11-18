<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Feature Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">

            <?php
            foreach ($all_featured_products as $single_feature_product) {
            ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo base_url('single/' . $single_feature_product->product_id); ?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/' . $single_feature_product->product_image) ?>" alt="" /></a>
                    <h2><?php echo $single_feature_product->product_title; ?> </h2>
                    <p><?php echo word_limiter($single_feature_product->product_short_description, 10) ?></p>
                    <p><span class="price">Rs.<?php echo $this->cart->format_number($single_feature_product->product_price); ?></span></p>
                    <div class="button"><span><a href="<?php echo base_url('single/' . $single_feature_product->product_id); ?>" class="details">Details</a></span></div>
                </div>

            <?php } ?>

        </div>

        <div class="content_bottom">
            <div class="heading">
                <h3>New Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php foreach ($all_new_products as $single_new_product) { ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo base_url('single/' . $single_new_product->product_id); ?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/' . $single_new_product->product_image) ?>" alt="" /></a>
                    <h2><?php echo $single_new_product->product_title; ?></h2>
                    <p><?php echo word_limiter($single_new_product->product_short_description, 10) ?></p>
                    <p><span class="price">Rs.<?php echo $this->cart->format_number($single_new_product->product_price); ?></span></p>
                    <div class="button"><span><a href="<?php echo base_url('single/' . $single_feature_product->product_id); ?>" class="details">Details</a></span></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13285683;;
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)])
            },
            once: function() {
                i(["once", c.call(arguments)])
            },
            off: function() {
                i(["off", c.call(arguments)])
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function() {
                i(["call", c.call(arguments)])
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/13285683/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->