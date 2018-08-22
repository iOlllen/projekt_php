<?php require 'section_four_coworkers.php';

?>



            <section class="four">


                <div class="sec_element_paralaxa">
                </div>

                <div class="container">
                    <div class="row sec_three_hed flex-column justify-content-center">
                        <h4 class="h4_or_spacing">SERVICES</h4>
                        <h3>What We Do</h3>
                    </div>

                    <div class="row">

                    <?php 

$count = count($workers);



                    for ($i=0; $i < $count; $i++) { ?>
                    



                        <div class="col-md-3">
                            <div class="block_image author_img">

                                <div class="block_image_overlay author_overlay">
                                    <div class="row margin_zero">
                                        <p><?php echo $workers[$i]['content']; ?></p>
                                    </div>
                                </div>

                            </div>
                            <div class="author_info">
                                <h3><?php echo $workers[$i]['nazwisko']; ?></h3>
                                <h4><?php echo $workers[$i]['branza']; ?></h4>
                            </div>

                        </div>
                    <?php } ?>
                        <!-- 
                            <div class="author_info">
                                <h3>Henryk Kania</h3>
                                <h4>Przetwórstwo Mięsne</h4>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="block_image author_img">

                                <div class="block_image_overlay author_overlay">
                                    <div class="row margin_zero">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="author_info">
                                <h3>Henryk Kania</h3>
                                <h4>Przetwórstwo Mięsne</h4>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="block_image author_img">

                                <div class="block_image_overlay author_overlay">
                                    <div class="row margin_zero">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="author_info">
                                <h3>Henryk Kania</h3>
                                <h4>Przetwórstwo Mięsne</h4>
                            </div>

                        </div>
 -->
            </section>
            <!-- sekcja czwarta -->