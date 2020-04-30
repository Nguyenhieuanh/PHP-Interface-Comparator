<?php
include_once "Classes/Circle.php";
include_once "Interface/Comparable.php";
include_once "Interface/Comparator.php";
include_once "Classes/CircleComparator.php";
include_once "Classes/ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
var_dump($circleOne->compareTo($circleTwo));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Triển khai interface 'Comparator' để so sánh các lớp hình học</title>
</head>
<body>

</body>
</html>
