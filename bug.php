function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//The issue is that the foreach loop iterates over a copy of the array and not the array itself, thus resulting in missing elements.
// This could be problematic if the intention was to remove all elements with value 'a'.