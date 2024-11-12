# Traffic Light CLI Application

This is a CLI-based Laravel application that fetches the live carbon intensity data for Germany and determines the corresponding "traffic light" status based on predefined thresholds:

- **Red**: Carbon intensity > 400 gCO2eq/kWh  
- **Yellow**: Carbon intensity between 200 and 400 gCO2eq/kWh  
- **Green**: Carbon intensity < 200 gCO2eq/kWh  

The application uses the ElectricityMaps API to retrieve live data.

## Features
- Fetches live carbon intensity data for Germany (`zone: DE`).  
- Outputs **"red"**, **"yellow"**, or **"green"** based on carbon intensity.  
- Built as a CLI command for simplicity.  
- Includes automated tests for service and command logic.  

## Requirements
- PHP 8.0 or higher  
- Composer  
- Laravel 9 or higher  
- ElectricityMaps API Key  

## Installation
1. Clone the repository:  
   `git clone <repository-url>`  
   `cd traffic-light`

2. Install dependencies:  
   `composer install`

3. Set up your `.env` file:  
   Add your ElectricityMaps API key to the `.env` file:  
   `ELECTRICITYMAPS_API_KEY=your_api_key_here`

4. Clear the Laravel configuration cache:  
   `php artisan config:clear`

## Usage
Run the CLI command to fetch the carbon intensity and display the traffic light status:  
`php artisan traffic:light`

### Example Output:
`The traffic light is: yellow`

## Testing
Run the automated tests to verify functionality:  
`php artisan test`

## Notes
This application focuses on backend functionality and does not include a web-based interface.  
