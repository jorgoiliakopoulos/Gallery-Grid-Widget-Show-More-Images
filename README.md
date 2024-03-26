# Gallery-Grid-Widget-Show-More-Images.

This code snippet is a WordPress PHP function designed to enhance the image gallery display for specific custom post types (CPTs), namely accommodations-cpt and properties-rent-cpt. The function is hooked to the WordPress wp_footer action, meaning it will execute in the footer of your site's pages.
Here's a breakdown of its components and functionality:

1. Conditional Check for Post Types: At the beginning, it checks if the current page is a singular post of either the accommodations-cpt or properties-rent-cpt custom post types. This is to ensure that the scripts and styles defined within this function only apply to those specific post types.

2. Inline CSS Styling:
   · The CSS targets a container with a class of .showmoreimages and hides every .jet-woo-product-gallery\_\_image-item starting from the fifth child onwards (nth-child(n+5)).
   · It styles the fourth image item to include an overlay indicator showing the number of additional images not displayed. This is visually represented by a FontAwesome camera icon followed by the number of hidden images. The styling includes positioning, background color, border properties, and text styling to ensure visibility and  
    aesthetic integration with the gallery.

3. Inline JavaScript:
   · Once the page content is fully loaded (DOMContentLoaded event), the script queries for all elements with the .showmoreimages class, identifying them as gallery containers.
   · For each gallery, it calculates the number of hidden images by subtracting the number of images shown by default (4) from the total number of images in that gallery.
   · If there are more than four images, it sets a data-count attribute on the fourth image item with the count of additional, hidden images. This count is visually displayed thanks to the CSS applied previously.

4. Adding the Function to the wp_footer Hook:
   Finally, the function is added to the wp_footer action hook, ensuring it executes in the footer area of the page. This is a strategic choice because it relies on all the gallery HTML elements being loaded and accessible via JavaScript.

5. About the styles.css file:
   In summary, this CSS snippet customizes the appearance and behavior of a product image gallery in a web page. It focuses on visual enhancements like rounded corners, a grid layout with responsive adjustments, maintaining the aspect ratio of images, and adding interactive feedback on hover. This approach contributes to a more engaging and user-friendly gallery display, which is particularly useful in e-commerce settings where visual presentation can significantly impact user experience.

This customization enhances user experience by cleanly indicating when more images are available in a gallery without initially overwhelming the viewer with too many images. It also utilizes FontAwesome as a professional and visually appealing indicator.
