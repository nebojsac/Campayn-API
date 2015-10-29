Forms
=====

TODO add data reference.

## Get Forms ##

`GET /lists/{list_id}/forms.json` returns a collection of forms that are associated with that specific list. For more info see [lists](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/lists.md).

**Response:**

    [ {
      "id" : "1550",
      "contact_list_id" : "123",
      "form_title" : "Website Newsletter Signup",
      "form_type" : "2",
      "form_html" : "...",
      "signup_count" : "15"
    }
    ...
    {
      "id" : "1550",
      "contact_list_id" : "124",
      "form_title" : "Custom Signup Page",
      "form_type" : "0",
      "form_html" : "",
      "signup_count" : "50"
    }]

`GET /lists/{list_id}/forms/{form_id}.json` returns information for that specific form.

**Response:**

	{
      "id" : "1550",
      "contact_list_id" : "123",
      "form_title" : "Website Newsletter Signup",
      "form_type" : "2",
      "form_html" : "...",
      "signup_count" : "15"
    }


## Form type filters ##

`GET /lists/{list_id}/forms.json?filter[form_type]=0` returns a collection of **Signup Page** forms that are associated with that specific list.

`GET /lists/{list_id}/forms.json?filter[form_type]=1` returns a collection of **Embed Signup** forms that are associated with that specific list.

`GET /lists/{list_id}/forms.json?filter[form_type]=2` returns a collection of **Wordpress Signup** forms that are associated with that specific list.

`GET /lists/{list_id}/forms.json?filter[form_type]=3` returns a collection of **Facebook Signup** forms that are associated with that specific list.


See `lists` endpoint for information on how to get the list id.
