
<div class="wrap">
    <h2> Query post</h2>

     <!-- <?php echo var_dump( $posts );?> -->

     <table class="wp-list-table widefat fixed striped table-view-list posts">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Categories</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $posts as $post ): ?>
            <tr>
                <td><?php echo $post->post_title; ?></td>
                <td>
                    <?php
                        $user = get_user_by( 'id', $post->post_author );
                        echo $user->display_name;
                     ?>
                </td>
                <td>
                    <?php 
                        $terms = wp_get_post_terms( $post->ID, 'category' );

                        $term_nemas = array_map( function(  $term ) {

                            return $term->name;

                        }, $terms);

                        echo implode( ',  ', $term_nemas );
                    ?>
                </td>
                <!-- <td><?php echo human_time_diff( strtotime( $post->post_date ) ); ?></td> -->
                <td><?php echo wp_date( 'd F, Y', strtotime( $post->post_date ) ); ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
     </table>

</div>

