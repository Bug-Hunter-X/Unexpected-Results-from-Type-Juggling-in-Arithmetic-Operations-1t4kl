# PHP Type Juggling Bug
This example demonstrates a common error in PHP related to type juggling. When performing arithmetic operations, PHP's loose typing system can lead to unexpected results if you're not careful about the data types involved.

The `calculateSum` function attempts to sum up an array of numbers. However, if the input array contains strings, it produces an erroneous result because of PHP's automatic type conversion.

The `bugSolution.php` file demonstrates how to fix this using strict type checking and handling non-numeric input values. 