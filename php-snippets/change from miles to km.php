add_action('wp', function () {
    ob_start(function ($html) {

        return preg_replace('/(\d+)\s*mi\b/', '$1 km', $html);

    });
});
