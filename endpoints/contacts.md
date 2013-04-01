Contacts
========

TODO add data reference

## Get Contacts ##

To be able to retrieve contacts, you'll need to know the list id to which the contacts belong to. For more info see [lists](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/lists.md).

`GET /lists/{list_id}/contacts.json` returns a collection of contacts that are associated with that specific list.

**Response:**

	[{
	  "id" : "1",
	  "email" : "sample@email.com",
	  "first_name" : "John",
	  "last_name" : "E. B. Good",
	  "image_url" : "..."
	}, 
	...
	{
	  "id" : "234",
	  "email" : "another@email.com",
	  "first_name" : null,
	  "last_name" : null,
	  "image_url" : "..."
	}]

`Developer note:` right now it only returns the contact email, name, and profile image url. If it is requested, the ability to get other contact information on this endpoint will be added.

## Filter Contacts ##

`GET /lists/{list_id}/contacts.json?filter[contact]={keyword}` returns a collection of contacts that are associated with that specific list, filtered by the `keyword`. It returns contacts that have names, emails or companies containing `keyword`.

## Get a Contact ##

`GET /contacts/{contact_id}.json` returns information for that contact.

	{
	  "id" : "22496",
	  "email" : "example@email.com",
	  "first_name" : "Freddy",
	  "last_name" : "Kruger",
	  "title" : "Dream Master",
	  "company" : "Nightmare",
	  "address" : "Nowhere Land 23",
	  "country_id" : "38",
	  "country": "Canada",
	  "city" : "",
	  "state" : "",
	  "zip" : "",
	  "birthday" : "1963-12-12",
	  "tags" : "",
	  "phones" : [ {
	    "value" : "123-123",
	    "type" : "work"
	  } ],
	  "sites" : [ {
	    "value" : "http://campayn.com",
	    "type" : "work"
	  } ],
	  "social" : [ {
	    "value" : "freddy",
	    "type" : "work",
	    "protocol" : "3"
	  }, {
	    "value" : "freddy",
	    "type" : "work",
	    "protocol" : "1"
	  }],
	  "custom_fields" : [ {
	    "field" : "Sweater",
	    "value" : "Striped",
	    "variable" : "Sweater"
	  } ],
	  "image_url" : "..."
	}

The above is an example contact retrieved through the API. 
`Developer note:` At one point the "protocol" fields will be replaced with text values.

## Add a Contact ##

`POST /lists/{list_id}/contacts.json` 

	{
	  "email" : "sample@email.com",
	  "first_name" : "John",
	  "last_name" : "E. B. Good",
	  "title" : "Producer",
	  "address" : "Elm Street 123",
	  "city": "Toronto",
      "state": "Ontario",
      "zip" : "24 EA F2",
	  "company" : "Campayn",
	  "country":"Canada",
	  "phones": [
		{"value":"123-123","type":"work"},
		{"value":"124-124","type":"fax"}
		],
	  "sites":[
		{"value":"campayn.com","type":"work"}
		],
	  "social":[
		{"value":"campayn","type":"work","protocol":"facebook"},
	{"value":"campayn","type":"work","protocol":"twitter"}
		],
	  "custom_fields":[
		{"field":"Eye Color", "value":"green"}
		]
	}

The above body example shows which fields can be sent when creating a contact. Note that a contact can have multiple phones, sites, custom fields and social accounts.

**Response:**

	{"success":true}

## Update a Contact ##

`PUT /contacts/{contact_id}.json` 

The body is the same as it is for adding new contacts. Any fields that are not sent in the body will be removed(this should be dealt with better later).

