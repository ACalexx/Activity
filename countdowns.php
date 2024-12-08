<?php
// Initialize the countdown start value
$countdown = 15;

do {
    // Display the current countdown value
    echo "Countdown: $countdown<br>";

    // Decrease the countdown value
    $countdown--;

    // Pause for 1 second to simulate a real-time timer
    sleep(3);
} while ($countdown >= 0);

echo "Timer finished!";
?>