/*Description:
This function is used to remove the last element from an array and return it.

Parameters:
$array: The input array. If $array is empty (or not an array), NULL will be returned.
Return Values:
The last value of the array. If the array is empty (or not an array), NULL will be returned.

*/

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);

print_r($stack);
