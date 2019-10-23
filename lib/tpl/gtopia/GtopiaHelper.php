<?php
function makeClickableLinks($s) {
    return preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.-]*(\?\S+)?)?)?)@', '<a href="$1">$1</a>', $s);
}

// Your twitter username.
$twitter_username = tpl_getConf('twitterUsername');

// Required settings array for Twitter 1.1 API
$twitterAPI_settings = array(
    'oauth_access_token' => tpl_getConf('twitter_oauthAccessToken'),
    'oauth_access_token_secret' => tpl_getConf('twitter_oauthAccessTokenSecret'),
    'consumer_key' => tpl_getConf('twitter_consumerKey'),
    'consumer_secret' => tpl_getConf('twitter_consumerSecret')
);
?>