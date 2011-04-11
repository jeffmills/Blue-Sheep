        <div id="content_container" class=<?php echo $this->id; ?>">

            <div id="left_column">

                <h1>About <span class="blue">Blue Sheep</span></h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet blandit
                    volutpat. Duis mollis elit in urna ornare placerat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Integer eu justo eget leo rhoncus cursus.</p>

                <p>Vestibulum risus est, imperdiet et placerat sit amet, semper quis est. Aenean ut
                    leo eu velit ultricies mollis. Praesent dapibus urna eu arcu fringilla quis posuere
                    libero ultricies. Duis tincidunt lectus in justo ultrices et ultrices nunc luctus.</p>

                <p>Duis nulla est, scelerisque convallis ultricies vitae, lobortis ac lorem.
                    Praesent id orci mi. Cras venenatis aliquet lacus.</p>

                <h3>Store Hours</h3>

                <p>9-5 Monday through Friday.</p>

                <h1>Location</h1>

                <p>1378 West Center Street, Orem, Utah 84057</p>

                <?php $this->renderPartial('_gmap'); ?>


            </div><!--End of left_column-->

            <?php $this->renderPartial('//site/home/rightColumn'); ?>

            <div class="clear"></div>

        </div><!--End of content_container-->
