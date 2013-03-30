Emails
=====

TODO add data reference.

Get Emails
=========

`GET /emails.json` returns a collection of emails that are visible to the authenticated user, along with some basic reporting and status information for each email.

**Response:**

	[ {
	  "id" : "507",
	  "name" : "New Year Email",
	  "scheduled_date" : "2013-01-01 01:00:00",
	  "send_now" : "0",
	  "send_count" : "55",
	  "campaign_title" : null,
	  "status" : "delivered",
	  "unique_views" : 45,
	  "unique_responses" : 15,
	  "percent_views" : 80,
	  "percent_responses" : 20,
	  "preview_url" : "...",
	  "preview_thumb" : "..."
	}, 
	...
	{
	  "id" : "506",
	  "name" : "Follow-up Email",
	  "scheduled_date" : null,
	  "send_now" : "0",
	  "send_count" : "0",
	  "campaign_title" : null,
	  "status" : "incomplete",
	  "unique_views" : 0,
	  "unique_responses" : 0,
	  "percent_views" : 0,
	  "percent_responses" : 0,
	  "preview_url" : "...",
	  "preview_thumb" : "..."
	}]

This endpoint is still open to modification, as some more email data might be added to provide more complete information about the users emails.