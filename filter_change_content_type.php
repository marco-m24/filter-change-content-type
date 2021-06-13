function mrc_set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'mrc_set_html_mail_content_type' );
