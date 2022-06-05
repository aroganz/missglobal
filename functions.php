// Subscriber on Login Redirect to Voting Page //
add_filter( 'gform_user_registration_login_redirect_url', 'gf_redirect_user_role', 10, 2 );
function gf_redirect_user_role( $login_redirect, $sign_on ) {
    GFCommon::log_debug(  __METHOD__ . '(): Running...' );
    if ( in_array( 'subscriber', $sign_on->roles ) ){
        // Redirect users with administrator role to a specific page.
        $login_redirect = 'https://xollaborations.com/missglobal/miss-global-voting-form/';
        GFCommon::log_debug(  __METHOD__ . '(): Redirecting to ' . $login_redirect );
    }
    return $login_redirect;
}
