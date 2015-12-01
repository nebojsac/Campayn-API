Campayn API
===========

Official Documentation for the Campayn API

Format
======

The Campayn API only supports the JSON format for requests and responses. Requests are sent via HTTP using all four verbs (GET/POST/PUT/DELETE), although not every verb will be available for every endpoint. The aim is to have a completely RESTful API, so any suggestions and corrections are welcome.

Wrappers and example code
-------------------------

[PHP](https://github.com/MiroslavMerinsky/Campayn)

Wrote your own API wrapper? Feel free to open a pull request and add to this list!


Versioning
----------

Right now you have to use the current version of the API in the url. For now v1 is the only version of the API. For example:
    
    /api/v1/lists.json
    
However, we are planning on allowing the use of a version-less URL that would use the latest stable version of the API. Campayn uses will be notified in the case of significant API changes or deprecations of older versions.



API Endpoints
-------------------

* [Lists](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/lists.md)
* [Contacts](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/contacts.md)
* [Forms](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/forms.md)
* [Emails](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/emails.md)
* [Reports](https://github.com/nebojsac/Campayn-API/blob/master/endpoints/reports.md)


(Hint: Press `t` to enable the file finder and type out the endpoint you need!)

TODO: Add Data Reference


Authentication
--------------

Authentication is done in a similar way to what [Amazon does](http://docs.aws.amazon.com/AmazonS3/2006-03-01/dev/RESTAuthentication.html). You have to use the TRUEREST keyword, so your authorization header will look like this:

    Authorization: TRUEREST apikey=1297sadasdas9123990123


Remember that anyone who has your API key can access your Campayn data like reports and lists so you want to keep it as safe as your username and password. If you think it has been compromised you should regenerate your API key in your Campayn Account section. The old key will no longer be valid.

You can GET your API key through the API by sending your username and password to the login endpoint. For example:

    /login/basic.json
    Authorization: TRUEREST username=example@example.com&password=12Asdas
    
The Email you signed up for Campayn with is your username.
    
    
Reading through the API
-----------------------

With the Campayn API you can retrieve one or more points of data at a time. Both of these are done through an HTTP GET.

For example, you can get contacts related to a specific list:
   
    v1/lists/1453/contacts.json
   
or you can get a specific contact:
   
    v1/lists/1453/contacts/1234.json
    
This is not available for all the endpoints at the time of writing this, so be sure to check the documentation first.


Writing through the API
-----------------------

TODO

Dealing with failure
--------------------

TODO


SSL Usage
---------

The API supports SSL, just use https in your endpoint urls.


Conventions in the API documentation
------------------------------------

In the documentation that follows, the following notation is used:

    {text}: Indicates text that should be replaced by your own data

    ...: Indicates content from the response has been elided for brevity in documentation. See the list of data responses at the end of the page for a full description of the format of that response type.
