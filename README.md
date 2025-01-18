# PHP: Unexpected Object Modification in Loops Due to References

This repository demonstrates a common PHP bug involving object references within loops. When modifying object properties inside a loop using a reference (&), changes made to one object affect all others due to the reference.

The `bug.php` file shows this issue. The solution (`bugSolution.php`) avoids the problem by creating copies of objects.