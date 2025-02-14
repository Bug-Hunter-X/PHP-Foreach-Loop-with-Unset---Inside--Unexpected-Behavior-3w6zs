function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b )

//The solution is to pass the array by reference using the & operator. This ensures that the foreach loop iterates over the original array, allowing for correct element removal.