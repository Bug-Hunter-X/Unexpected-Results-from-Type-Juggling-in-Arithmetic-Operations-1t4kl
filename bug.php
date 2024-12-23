```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a']; //Incorrect input
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output will be incorrect due to type juggling
```