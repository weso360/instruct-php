<?php

// Read the CSV file
$services = [];
$file = fopen('services.csv', 'r'); // Updated file path
if ($file !== false) {
    // Skip the header row
    fgetcsv($file);
    
    // Read the remaining rows
    while (($data = fgetcsv($file)) !== false) {
        $services[] = [
            'Ref' => $data[0],
            'Centre' => $data[1],
            'Service' => $data[2],
            'Country' => $data[3]
        ];
    }
    fclose($file);
}

// Display all services provided by a specific country
function displayServicesByCountry($services, $countryCode) {
    echo "Services provided by {$countryCode}:\n";
    foreach ($services as $service) {
        if (strtoupper($service['Country']) === strtoupper($countryCode)) {
            echo "- {$service['Service']}\n";
        }
    }
}

// Generate a summary of the number of services in each country
function generateSummary($services) {
    $summary = [];
    foreach ($services as $service) {
        $countryCode = strtoupper($service['Country']);
        if (!isset($summary[$countryCode])) {
            $summary[$countryCode] = 1;
        } else {
            $summary[$countryCode]++;
        }
    }
    return $summary;
}

// Main script
$countryCode = 'GB'; // Change this to the desired country code
displayServicesByCountry($services, $countryCode);

echo "\nCountry Services:\n";
$summary = generateSummary($services);
foreach ($summary as $countryCode => $count) {
    echo "{$countryCode}: {$count} \n";
}
?>
