## Signing up a new user ##

`POST /signup`

The POST data must be formed in the `application/json` format.

----

Mandatory fields:

  **email** - *New user's e-mail address*
  
  **first_name** - *First name of the new user*
  
  **last_name** - *Last name of the new user*
  
  **password** - *A password for the new user*
  
Optional fields:

  **subdomain** - *The subdomain which you wish to signup the user for, can be left blank for a standalone user*
  
  **site** - *The name of the site which will be used for your campayn.com subdomain, by default it's the first part of the user's e-mail address*
  
  ----
  
## Example usage ##

Creating a new user

`POST /signup`

	{
	  "email" : "sample@email.com",
	  "first_name" : "John",
	  "last_name" : "E. B. Good",
	  "password" : "bgoodtonight"
	}

The above example will create a user named John E. B. Good with an appropriate password. The username will be the inputted e-mail address.
The user will log in with `sample@email.com` and will be redirected to `sample.campayn.com`, provided `sample` is available as a subdomain when you process your API call.

Creating a new user with a specific site name

`POST /signup`

	{
	  "email" : "sample@email.com",
	  "first_name" : "John",
	  "last_name" : "E. B. Good",
	  "password" : "bgoodtonight",
	  "site" : "classicrock"
	}
	
In this case, the user will login in with `sample@email.com` and will be redirected to `classicrock.campayn.com` to do their business.

## Expected result ##

    {
      "success" : 1,
      "msg" : "New user created"
    }

This indicates that a new user has been successfully created.
  
## Unexpected errors ##

    {
      "success" : 0,
      "msg" : "This email has already been taken",
      "errorCode" : "userValidation"
    }
    
This, on the other hand, indicates that this e-mail address has already been registered. Check your records, or choose a different e-mail address.

## Most likely error ##

    {
      "success" : 0,
      "msg" : "API key is not authorized for the \"signup\" action"
    }
    
As stated, you are not authorized to use the "signup" API function.

Signing up users via our API is a privileged call, and a sensitive one at that. You will have to contact us to obtain proper athorization on your API key in order to be able to utilize the "signup" API function.
