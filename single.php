<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

                <section class="elementor-section elementor-top-section elementor-element elementor-element-c48f54b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c48f54b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6b28bbc" data-id="6b28bbc" data-element_type="column">
                            <!-- لووب يضاف في ملف (single.php) 
                            للحصول على محتوى - بوست -->
                            <?php 
                            // The Loop
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post(); //post
                            ?>

                            <article class="blog-post">
                                <div>
                                    <?php 
                                    // دالة لعرض التاق 
                                    the_category(', ') 
                                    ?>
                                </div>
                                <h2 class="blog-post-title">
                                    <?php 
                                    // دالة لاستدعاء عنوان البوست 
                                    the_title() 
                                    ?>
                                </h2>
                                <p class="blog-post-meta">
                                    <?php /* دالة لاستدعاء تاريخ البوست */ echo get_the_date() ?> by
                                    <?php /* دالة لاستدعاء مؤلف البوست */ the_author_link() ?>
                                </p>
                                <p><?php the_content() ?></p>
                            </article>

                            <?php 
                            // End Loop
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>

<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
