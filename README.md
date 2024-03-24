## Laravel log generator

A basic but lovely log generator for the Laravel package.

**Requires:** Laravel >= 10.0

**License:** MIT

## Installation

Begin by installing this package through Composer. Just run following command to terminal-

    composer require raysulkobir/logs-laravel

## Configuration

Service Provider Registration In config/app.php, add in providers array -

       'providers' => [
              // .........................
              Raysulkobir\LogsLaravel\LogsServiceProvider::class,
       ]

## Use from Controller

Import first the UniqueSlug facade

       use Raysulkobir\LogsLaravel\Logger\Logger;

## Example

// 1st parameter is string table_name
// 2nd parameter is string response
// 3rd parameter is integer table_id default

// This line has been added for clarification

### Logger::logDb('type', ['a', 'b', 'c'], 100);

// 1st parameter is string response

#### Logger::logFile('{"Envelope":{"Body":{"Fault":{"faultcode":"soap:Server","detail":{"source":{"errorcode":"protocol.http.TooBigBody"}},"faultstring":"Body buffer overflow","faultactor":{}}},"encodingStyle":"http:\/\/schemas.xmlsoap.org\/soap\/encoding\/"}');

### This logDb

> ![dblog](https://github.com/raysulkobir/logs-laravel/assets/86109661/cd4d5b66-5377-42d3-a58e-979a5518b4e5)

### This logFile

> ![fileupload](https://github.com/raysulkobir/logs-laravel/assets/86109661/2bbe6862-f19f-491c-970b-e8c961dce0f7)

### Security

If you discover any security-related issues, please email raysulkobir97@gmail.com instead of using the issue tracker.
