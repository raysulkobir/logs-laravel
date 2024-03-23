## Laravel log generator

A simple but beautiful log generator for Laravel eloquent model.

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

       //  1 s't parameter is string type
       //  2 nd parameter is string response
       //  3 rd parameter is integer
       return Logger::logDb('type', ['a', 'b', 'c'], 100);

       //  1 s't parameter is string response
       return Logger::logFile('{"Envelope":{"Body":{"Fault":{"faultcode":"soap:Server","detail":{"source":{"errorcode":"protocol.http.TooBigBody"}},"faultstring":"Body buffer overflow","faultactor":{}}},"encodingStyle":"http:\/\/schemas.xmlsoap.org\/soap\/encoding\/"}');
