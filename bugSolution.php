function foo(array $arr): void {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      // Handle null values explicitly
      echo "Null value found at index: " . $key . "
";
      // Optionally remove or replace null value
      unset($arr[$key]);
      // or use a default value
      // $arr[$key] = 0; 
    } else {
      // Process non-null values
      echo "Value at index " . $key . ": " . $value . "
";
    }
  }
} 