# PHP Arrays – Lecture Notes

## 1. What is an Array?

An **array** is a special variable in PHP that can hold **multiple values** at once. Instead of creating separate variables for every value, arrays help store a list of items in a single variable.

```php
$fruits = array("Apple", "Banana", "Mango");
```

## 2. Types of Arrays

### a) Indexed Arrays
Arrays with numeric indexes starting from 0.

```php
$colors = array("Red", "Green", "Blue");

// Accessing values
echo $colors[0]; // Red
```

### b) Associative Arrays
Arrays with named keys (key-value pairs).

```php
$student = array(
    "name" => "Ali",
    "age" => 20,
    "city" => "Lahore"
);

echo $student["name"]; // Ali
```

### c) Multidimensional Arrays
Arrays containing other arrays.

```php
$students = array(
    array("Ali", 20),
    array("Sara", 22),
    array("Zain", 21)
);

echo $students[1][0]; // Sara
```

## 3. Array Functions

### count()
Returns the number of elements in an array.

```php
$numbers = array(1, 2, 3, 4);
echo count($numbers); // 4
```

### print_r()
Prints the structure of an array.

```php
print_r($student);
```

### var_dump()
Displays more detailed info including data types.

```php
var_dump($student);
```

## 4. Looping Through Arrays

### Indexed Array with `for`
```php
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}
```

### Associative Array with `foreach`
```php
foreach ($student as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
```

## 5. Array Modifications

### Add Items
```php
$colors[] = "Yellow"; // Adds to end
$student["grade"] = "A"; // Adds key-value pair
```

### Remove Items
```php
unset($colors[1]); // Removes "Green"
unset($student["city"]); // Removes city
```

## 6. Common Array Functions

### 1. `count()`
Returns the number of elements in an array.

```php
echo count($fruits);  // Output: 3
```

### 2. `array_push()`
Adds one or more elements to the end of an array.

```php
array_push($fruits, "Orange");
```

### 3. `array_pop()`
Removes the last element of an array.

```php
array_pop($fruits);
```

### 4. `array_shift()`
Removes the first element of an array.

```php
array_shift($fruits);
```

### 5. `array_unshift()`
Adds one or more elements to the beginning of an array.

```php
array_unshift($fruits, "Pineapple");
```

### 6. `in_array()`
Checks if a value exists in an array.

```php
if (in_array("Apple", $fruits)) {
    echo "Found";
}
```

### 7. `array_key_exists()`
Checks if a key exists in an associative array.

```php
if (array_key_exists("name", $student)) {
    echo "Key exists";
}
```

### 8. `array_merge()`
Merges two or more arrays.

```php
$allItems = array_merge($fruits, $vegetables);
```

### 9. `array_slice()`
Returns selected parts of an array.

```php
$sliced = array_slice($fruits, 1, 2); // From index 1, get 2 elements
```

### 10. `array_reverse()`
Returns an array in reverse order.

```php
$reversed = array_reverse($fruits);
```
