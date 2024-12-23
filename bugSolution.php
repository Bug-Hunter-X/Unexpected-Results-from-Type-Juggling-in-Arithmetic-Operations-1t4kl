```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric input appropriately, such as throwing an exception or skipping the value
      echo "Warning: Non-numeric value encountered: " . $number . "\n";
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output will be correct and has a warning message for non-numeric values
```