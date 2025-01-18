To fix this issue, avoid using references within the loop. You can create a copy of the object before modifying it or use a different approach that doesn't rely on references. 

Here's a corrected version:

```php
<?php
class MyClass {
    public $value = 0;
}

$objects = array();
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as $key => $object) { // No reference (&)
    $objects[$key]->value = 10 + $key; // Modify a copy 
}

foreach ($objects as $object) {
    echo $object->value . " "; // Output: 10 11 12
}
?>
```

The key difference is the removal of `&` from the `foreach` loop. Now each `$object` is a copy, not a reference.  This ensures that modifications are isolated to each individual object within the loop.