<?php
    // To destroy a session. ie logout, hence cannot acess the values in session.php anymore.

    session_start();
    session_destroy();
    echo "session has been destroyed";

    // To enable session, ie login, First launch session.php
    // Then acess session in session2.php
    // To end session, ie logout, launch session3.php, then if you return to session2.php, session will not be accessible anymore
    //  unless return to session.php (to re-enable session) before going back to session2.php


?>