Lists
=====

TODO add data reference.

Get Lists
=========

`GET /lists.json` returns a collection of lists that are visible to the authenticated user.

**Response:**

    [ {
      "id" : "123",
      "list_name" : "Personal Contacts",
      "tags" : "",
      "contact_count" : 125
    }, 
	... 
	{
      "id" : "124",
      "list_name" : "Business Leads",
      "tags" : "",
      "contact_count" : 50
    } ]

Unsubscribe Contact
===================

You can unsubscribe contacts in a list in two ways. Either by passing the contact "id", or the "email".
If you pass the "id", then only that specific contact will be unsubscribed, and the request looks like the following:
`POST /lists/{listId}/unsubscribe.json`

**Request**

    {"id":"1234"}

**Response:**

    {"success":1}

If you pass the contact "email" address, then all contacts on that list, with that email address will be unsubscribed.
`POST /lists/{listId}/unsubscribe.json`

**Request**

    {"email":"nick@campayn.com"}

**Response**

    {
      "contactCount" : 2,
      "success" : true,
      "msg" : "Contacts unsubscribed",
      "unsubscribeCount" : 1
    }
    
Neither of these unsubscribes will show up in Reporting.
