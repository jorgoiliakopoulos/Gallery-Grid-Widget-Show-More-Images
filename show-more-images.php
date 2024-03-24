<?php
//Show More Images Gallery (Accommodations and Properties CPT)
function my_custom_footer_scripts() {
    // Check if the current post type is either 'accommodations-cpt' or 'properties-rent-cpt'
    if ( ! is_singular( array( 'accommodations-cpt', 'properties-rent-cpt' ) ) ) {
        return; // If not, return early without adding the scripts
    }

    // Inline CSS for initially hiding images beyond the fourth and styling the indicator with FontAwesome icon
    echo '<style>
        .showmoreimages .jet-woo-product-gallery__image-item:nth-child(n+5) {
            display: none;
        }
        .showmoreimages .jet-woo-product-gallery__image-item:nth-child(4):after {
            content: attr(data-count) " \\f030"; /* FontAwesome camera icon */
            font-family: "Font Awesome 5 Free", "Font Awesome 5 Brands", var(--e-global-typography-text-font-family);
            font-weight: 900; /* Important for FontAwesome solid icons */
            text-align: center;
            z-index: 5;
            margin: 0;
            padding: 5px 8px;
            position: absolute;
            bottom: 18px;
            right: 30px;
            display: flex;
            width: auto;
            height: auto;
            justify-content: center;
            align-items: center;
            text-transform: normal;
            font-size: 12px;
            border-style: solid;
            border-width: 1px;
            border-color: var(--e-global-color-0a64a18);
            border-radius: 5px;
            color: var(--e-global-color-0a64a18);
            background-color: var(--e-global-color-111030f);
            pointer-events: none;
        }
    </style>';

    // Inline JavaScript to set a data-count attribute with the number of hidden images
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let galleries = document.querySelectorAll('.showmoreimages');
        let shownAmount = 4; // How many images to show by default

        galleries.forEach(gallery => {
            let galleryItems = gallery.querySelectorAll('.jet-woo-product-gallery__image-item');
            if (galleryItems.length > shownAmount) {
                let viewMoreImagesCount = galleryItems.length - shownAmount;
                let indicatorItem = galleryItems[shownAmount - 1]; // The last item that will show the count
                indicatorItem.setAttribute('data-count', '+' + viewMoreImagesCount); // Sets the count of additional images
            }
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'my_custom_footer_scripts');
?>
