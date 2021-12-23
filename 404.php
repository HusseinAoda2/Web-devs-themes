<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

                <section class="elementor-section elementor-top-section elementor-element elementor-element-c48f54b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c48f54b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6b28bbc" data-id="6b28bbc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-a3abcef elementor-widget elementor-widget-heading" data-id="a3abcef" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-large">404 - Not Found</h3>		
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-caf7855 elementor-widget elementor-widget-text-editor" data-id="caf7855" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>The resource requested could not be found on this server!</p>	
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <form action="<?php /* توجيه البحث للصفحة الرئيسية */ echo home_url('/') ?>" method="get">
                                        <input class="form-control form-control-sm" name="s">
                                        <button type="submit" class="btn btn-sm btn-outline-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                <title>Search</title>
                                                <circle cx="10.5" cy="10.5" r="7.5" />
                                                <path d="M21 21l-5.2-5.2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
