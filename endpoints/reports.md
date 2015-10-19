Reports
========

TODO add data reference

## Calendar ##

Retrieve report urls along with other useful data, of sent and scheduled emails for given dates.

**Request:**

`GET /reports/calendar.json`

**Response:**

    [
      {
        "id" : "63022",
        "name" : "test 2",
        "scheduled_date" : "2015-09-11 11:50:11",
        "status" : "sent",
        "preview_url" : "...",
        "report_url" : "..."
      },
      ...
      {
        "id" : "63019",
        "name" : "test 1",
        "scheduled_date" : "2015-09-11 11:33:32",
        "status" : "sent",
        "preview_url" : "...",
        "report_url" : "..."
      }
    ]

If requested as above, you will get all reports urls regardless of the date. There are two optional parameters: `from` and `to`. Based on your needs you can provide both, none or just one of them.
These parameters must be in **microtime** format. Also all dates are in **UTC** timezone. For example in PHP: `$myDate = strtotime('2015-01-01 00:00:00');` which gives `1420070400`.

So let's say you want to get all email reports from 2015-01-01 00:00:00 until now, the request would look like this:

`GET /reports/calendar.json?from=1420070400`

Or if you want to get the data for a specific date range: from 2015-03-01 18:00:00 to 2015-04-01 18:00:00

`GET /reports/calendar.json?from=1425232800&to=1427911200`

The scheduled emails does not have report urls so the `report_url` field will be `NULL`.
