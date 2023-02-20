<?php 

return [
    'status' => [
        '401' => 'You are not authenticated!',
        '403' => 'You are not authorized!',
        '404' => 'Page not found :(',
        '503' => 'Under Maintenance!'
    ],
    'message' => [
        '401' => 'You do not have permission to view this page. Please log in or create new account.',
        '403' => 'You do not have permission to view this page using the credentials that you have provided while login.
        Please contact your site administrator.',
        '404' => 'Oops! 😖 The requested URL was not found on this server.',
        '503' => 'Sorry for the inconvenience but we\'re performing some maintenance at the moment.'
    ]
];