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
