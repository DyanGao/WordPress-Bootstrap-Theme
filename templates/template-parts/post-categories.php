<?php
$categories = get_the_category();
if(!empty($categories)) {
  foreach($categories as $category) {
    printf('<span href="%1$s" class="badge text-bg-secondary">%2$s</span>',
    esc_url(get_category_link($category->term_id)),
    esc_html($category->name));
  }
}

?>

<!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->