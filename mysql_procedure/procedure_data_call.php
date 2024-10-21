<?php

define("DB_HOST", "localhost");
define("DB_USER", "sakib");
define("DB_PWD", "sakib1234");
define("DB_NAME", "test");

$con = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

$query = "CALL get_students_class_and_section(9,'C')";

$execute = mysqli_query($con, $query);

echo mysqli_num_rows($execute) . PHP_EOL . PHP_EOL;

?>

<table>
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Sex</th>
        <th>Class</th>
        <th>Section</th>
    </tr>

    <?php

    while ($data = mysqli_fetch_assoc($execute)) {
        // foreach ($data as $key => $val) {
    ?>
    <tr>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['roll']; ?></td>
        <td><?php echo $data['sex']; ?></td>
        <td><?php echo $data['class']; ?></td>
        <td><?php echo $data['section']; ?></td>
    </tr>
    <?php
        // }
    }
    ?>

</table>