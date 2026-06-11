add_action('wp_head', function () {
    echo '<style>
        #respond,
        .comment-respond,
        .comments-area {
            display: none !important;
        }
    </style>';
});
