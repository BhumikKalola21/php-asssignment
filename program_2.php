<!-- Write a program that can explain or differentiate include, include_once, require, and require_once. -->

<?php
    // Using include
    include 'included_file.php';
    echo "<p>Using include: $includedVar</p>";

    // Using include_once
    include_once 'included_file.php';
    echo "<p>Using include_once: $includedVar</p>";

    // Using require
    require 'included_file.php';
    echo "<p>Using require: $includedVar</p>";

    // Using require_once
    require_once 'included_file.php';
    echo "<p>Using require_once: $includedVar</p>";

    // Trying to include a non-existing file using include (will issue a warning)
    include 'non_existing_file.php';

    // Trying to include a non-existing file using require (will issue a fatal error)
    // require 'non_existing_file.php';
?>

</body>
</html>
