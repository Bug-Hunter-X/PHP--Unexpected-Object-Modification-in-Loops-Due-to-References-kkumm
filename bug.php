In PHP, a common yet subtle error arises when dealing with object references within loops. Consider the following scenario: you have an array of objects, and you want to modify each object's property inside a loop.  If you inadvertently modify the object's property using a reference, it affects all the other objects in the array, leading to unexpected results. This is because PHP's assignment operator (=) for objects creates a reference rather than creating a copy.

```php
<?php
class MyClass {
    public $value = 0;
}

$objects = array();
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as &$object) { // Note the & here creating a reference
    $object->value = 10;
}

foreach ($objects as $object) {
    echo $object->value . " "; // Output: 10 10 10
}
?>
```