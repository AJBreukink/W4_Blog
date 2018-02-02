## Synopsis
This is a simple php API that uses GET and PUT methods to send & receive messages and stores them in a .txt file.   

## API

The documentation for the API is found on https://app.swaggerhub.com/apis/RJK-Gorilla/GorillaChat1/1.0.0 .
The API uses two methods **GET** and **PUT** . GET is used to retrieve messages based on the parameter *minimumid* that, if set, but empty ,will return all messages by default. This version only makes a distinction between requests that ask for list from a certain ID and requests that just ask for full list. PUT methods relies on body parameter, but does not require any value to be passed in the messages. 


## Demo

A live demo can be viewed here http://maijagrudule.com/mimi/ . It demonstrates the two methods used in the API. **GET** : loads messages in the chat from text file using JSON. **PUT** : sends msgs to the text file when _sent_ button is pressed. _get filtered_ demonstrates the option to filter messages based on their ID.

## Installation

To preview and run the project you need a webs server.

## Planned improvements
* GET result filter based on ID
* PUT store to database
  * Return a ID in success response


## Contributors

The API documentation is made by CodeGorilla group.
