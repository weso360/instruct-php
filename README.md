# Services CSV Reader - PHP

This PHP script reads a CSV file containing service data and provides functionality to display services provided by a specific country and generate a summary of the number of services in each country.

## Usage

1. **CSV File**: Ensure that your CSV file containing service data is named `services.csv`. Make sure the file follows the expected format with the columns: `Ref`, `Centre`, `Service`, and `Country`.

2. **Update File Path**: If your CSV file is not in the same directory as the script, update the file path in the script to point to the correct location.

3. **Run Script**: Execute the PHP script in a PHP environment. You can specify the desired country code to display services provided by that country.

    ```bash
    php services_reader.php
    ```

## Functions

- **displayServicesByCountry($services, $countryCode)**: Displays services provided by a specific country based on the provided country code.

- **generateSummary($services)**: Generates a summary of the number of services in each country.

## Example

```php
<?php
$countryCode = 'GB'; // Change this to the desired country code
displayServicesByCountry($services, $countryCode);
?>
```

This will display services provided by the specified country code ('GB' in this example).
