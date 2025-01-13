
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
                <td><?php echo $post->post_author; ?></td>
                <td><?php echo $post->ID; ?></td>
                <td><?php echo human_time_diff( strtotime( $post->post_date ) ); ?> ago</td>
            </tr>
            <?php endforeach;?>
        </tbody>
     </table>

</div>

