function foo(array $arr): void {
  foreach ($arr as $value) {
    if ($value === null) {
      // Handle null values
      continue; // Skip null values
    }
    // Process non-null values
  }
}