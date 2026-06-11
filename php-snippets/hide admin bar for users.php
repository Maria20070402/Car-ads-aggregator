add_filter('show_admin_bar', function () {
    return current_user_can('administrator');
});
