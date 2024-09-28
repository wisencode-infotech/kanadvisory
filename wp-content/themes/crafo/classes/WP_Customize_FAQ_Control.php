<?php
class WP_Customize_FAQ_Control extends WP_Customize_Control {
    public $type = 'faq_control';

    public function render_content() {
        ?>
        <div class="faq-control">
            <div class="faq-items">
                <?php
                // Get existing FAQs
                $faqs = json_decode($this->value());
                if (!is_array($faqs)) {
                    $faqs = [];
                }

                foreach ($faqs as $faq) {
                    ?>
                    <div class="faq-item">
                        <input type="text" placeholder="<?php _e('FAQ Question', 'crafto'); ?>" value="<?php echo esc_attr($faq->question); ?>" class="faq-question" />
                        <textarea placeholder="<?php _e('FAQ Answer', 'crafto'); ?>" class="faq-answer"><?php echo esc_textarea($faq->answer); ?></textarea>
                        <button type="button" class="remove-faq-button"><?php _e('Remove', 'crafto'); ?></button>
                    </div>
                    <?php
                }
                ?>
            </div>
            <button type="button" class="add-faq-button"><?php _e('Add FAQ', 'crafto'); ?></button>
        </div>
        <script>
            (function($) {
                $(document).on('click', '.add-faq-button', function() {
                    var newItem = `<div class="faq-item">
                        <input type="text" placeholder="<?php echo esc_js(__('FAQ Question', 'crafto')); ?>" class="faq-question" />
                        <textarea placeholder="<?php echo esc_js(__('FAQ Answer', 'crafto')); ?>" class="faq-answer"></textarea>
                        <button type="button" class="remove-faq-button"><?php echo esc_js(__('Remove', 'crafto')); ?></button>
                    </div>`;
                    $(this).prev('.faq-items').append(newItem);
                });

                $(document).on('click', '.remove-faq-button', function() {
                    $(this).closest('.faq-item').remove();
                });

                $(document).on('change', '.faq-item input, .faq-item textarea', function() {
                    var faqArray = [];
                    $('.faq-item').each(function() {
                        var question = $(this).find('.faq-question').val();
                        var answer = $(this).find('.faq-answer').val();
                        if (question && answer) {
                            faqArray.push({question: question, answer: answer});
                        }
                    });
                    wp.customize.instance('<?php echo esc_js($this->id); ?>').set(JSON.stringify(faqArray));
                });
            })(jQuery);
        </script>
        <?php
    }
}
